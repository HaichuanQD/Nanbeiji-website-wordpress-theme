<?php 
    
    // Register Custom Navigation Walker
    require_once('wp_bootstrap_pagination.php');
    add_theme_support( 'post-thumbnails' ); 

    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }

    function css_js_files(){

        wp_enqueue_style('css_bootstrap_load','https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css');
        wp_enqueue_style('css_style_load',get_theme_file_uri('/css/style.css'));
        wp_enqueue_style('css_animate_load','https://cdn.bootcss.com/animate.css/3.5.0/animate.min.css');
        wp_enqueue_style('css_ionicons_load','https://cdn.bootcss.com/ionicons/2.0.0/css/ionicons.css');
        wp_enqueue_style('css_slick_load','https://cdn.huixinhuiyi.com/css/slick-theme.css');
        wp_enqueue_style('css_lightbox_load','https://cdn.bootcss.com/lightbox2/2.10.0/css/lightbox.css');
        wp_enqueue_style('css_aos_load','https://cdn.bootcss.com/aos/2.2.0/aos.css');
        wp_enqueue_style('css_slick_main_load','https://cdn.bootcss.com/slick-carousel/1.5.7/slick.css');
        wp_enqueue_style('css_slick_second_main_load',get_theme_file_uri('/css/style_second.css'));
        wp_enqueue_script('js_jquery_load','https://cdn.bootcss.com/jquery/2.1.4/jquery.min.js',NULL,'2.1.4',false);
        wp_enqueue_script('js_bootstrap_load','https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js',NULL,'3.3.7',true);
        wp_enqueue_script('js_slick_load','https://cdn.bootcss.com/slick-carousel/1.5.7/slick.js',NULL,'1.5.7',true);
        wp_enqueue_script('js_slick-animation_load','https://cdn.huixinhuiyi.com/js/slick-animation.js',NULL,'0.3.3',true);
        wp_enqueue_script('js_lightbox_load','https://cdn.bootcss.com/lightbox2/2.10.0/js/lightbox.min.js',NULL,'2.10.0',true);
        wp_enqueue_script('js_aos_load','https://cdn.bootcss.com/aos/2.2.0/aos.js',NULL,'1.0.0',true);
        wp_enqueue_script('js_sticky_load','https://cdn.huixinhuiyi.com/js/theia-sticky-sidebar.js',NULL,'1.0.0',true);
        wp_enqueue_script('js_Resize_load','https://cdn.huixinhuiyi.com/js/ResizeSensor.js',NULL,'1.0.0',true);
        wp_enqueue_script('js_script_load',get_theme_file_uri('/js/script.js'),NULL,'1.0.0',true);
        
        
    }
    function paginate_linkes( $args = '' ) {
        global $wp_query, $wp_rewrite;
     
        // Setting up default values based on the current URL.
        $pagenum_link = html_entity_decode( get_pagenum_link() );
        $url_parts    = explode( '?', $pagenum_link );
     
        // Get max pages and current page out of the current query, if available.
        $total   = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
        $current = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
     
        // Append the format placeholder to the base URL.
        $pagenum_link = trailingslashit( $url_parts[0] ) . '%_%';
     
        // URL base depends on permalink settings.
        $format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
        $format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';
     
        $defaults = array(
            'base'               => $pagenum_link, // http://example.com/all_posts.php%_% : %_% is replaced by format (below)
            'format'             => $format, // ?page=%#% : %#% is replaced by the page number
            'total'              => $total,
            'current'            => $current,
            'aria_current'       => 'page',
            'show_all'           => false,
            'prev_next'          => true,
            'prev_text'          => __( '&laquo; Previous' ),
            'next_text'          => __( 'Next &raquo;' ),
            'end_size'           => 1,
            'mid_size'           => 2,
            'type'               => 'plain',
            'add_args'           => array(), // array of query args to add
            'add_fragment'       => '',
            'before_page_number' => '',
            'after_page_number'  => '',
        );
     
        $args = wp_parse_args( $args, $defaults );
     
        if ( ! is_array( $args['add_args'] ) ) {
            $args['add_args'] = array();
        }
     
        // Merge additional query vars found in the original URL into 'add_args' array.
        if ( isset( $url_parts[1] ) ) {
            // Find the format argument.
            $format = explode( '?', str_replace( '%_%', $args['format'], $args['base'] ) );
            $format_query = isset( $format[1] ) ? $format[1] : '';
            wp_parse_str( $format_query, $format_args );
     
            // Find the query args of the requested URL.
            wp_parse_str( $url_parts[1], $url_query_args );
     
            // Remove the format argument from the array of query arguments, to avoid overwriting custom format.
            foreach ( $format_args as $format_arg => $format_arg_value ) {
                unset( $url_query_args[ $format_arg ] );
            }
     
            $args['add_args'] = array_merge( $args['add_args'], urlencode_deep( $url_query_args ) );
        }
     
        // Who knows what else people pass in $args
        $total = (int) $args['total'];
        if ( $total < 2 ) {
            return;
        }
        $current  = (int) $args['current'];
        $end_size = (int) $args['end_size']; // Out of bounds?  Make it the default.
        if ( $end_size < 1 ) {
            $end_size = 1;
        }
        $mid_size = (int) $args['mid_size'];
        if ( $mid_size < 0 ) {
            $mid_size = 2;
        }
        $add_args = $args['add_args'];
        $r = '';
        $page_links = array();
        $dots = false;
     
        if ( $args['prev_next'] && $current && 1 < $current ) :
            $link = str_replace( '%_%', 2 == $current ? '' : $args['format'], $args['base'] );
            $link = str_replace( '%#%', $current - 1, $link );
            if ( $add_args )
                $link = add_query_arg( $add_args, $link );
            $link .= $args['add_fragment'];
     
            /**
             * Filters the paginated links for the given archive pages.
             *
             * @since 3.0.0
             *
             * @param string $link The paginated link URL.
             */
            $page_links[] = '<li><a class="prev page-numbers" href="' . esc_url( apply_filters( 'paginate_links', $link ) ) . '">' . $args['prev_text'] . '</a></li>';
        endif;
        for ( $n = 1; $n <= $total; $n++ ) :
            if ( $n == $current ) :
                $page_links[] = "<li class='active'><span aria-current='" . esc_attr( $args['aria_current'] ) . "' class='page-numbers current'>" . $args['before_page_number'] . number_format_i18n( $n ) . $args['after_page_number'] . "</span></li>";
                $dots = true;
            else :
                if ( $args['show_all'] || ( $n <= $end_size || ( $current && $n >= $current - $mid_size && $n <= $current + $mid_size ) || $n > $total - $end_size ) ) :
                    $link = str_replace( '%_%', 1 == $n ? '' : $args['format'], $args['base'] );
                    $link = str_replace( '%#%', $n, $link );
                    if ( $add_args )
                        $link = add_query_arg( $add_args, $link );
                    $link .= $args['add_fragment'];
     
                    /** This filter is documented in wp-includes/general-template.php */
                    $page_links[] = "<li><a class='page-numbers' href='" . esc_url( apply_filters( 'paginate_links', $link ) ) . "'>" . $args['before_page_number'] . number_format_i18n( $n ) . $args['after_page_number'] . "</a></li>";
                    $dots = true;
                elseif ( $dots && ! $args['show_all'] ) :
                    $page_links[] = '<span class="page-numbers dots">' . __( '&hellip;' ) . '</span>';
                    $dots = false;
                endif;
            endif;
        endfor;
        if ( $args['prev_next'] && $current && $current < $total ) :
            $link = str_replace( '%_%', $args['format'], $args['base'] );
            $link = str_replace( '%#%', $current + 1, $link );
            if ( $add_args )
                $link = add_query_arg( $add_args, $link );
            $link .= $args['add_fragment'];
     
            /** This filter is documented in wp-includes/general-template.php */
            $page_links[] = '<li><a class="next page-numbers" href="' . esc_url( apply_filters( 'paginate_links', $link ) ) . '">' . $args['next_text'] . '</a></li>';
        endif;
        switch ( $args['type'] ) {
            case 'array' :
                return $page_links;
     
            case 'list' :
                $r .= "<ul class='page-numbers pagination'>\n\t<li>";
                $r .= join("</li>\n\t<li>", $page_links);
                $r .= "</li>\n</ul>\n";
                break;
     
            default :
                $r = join("\n", $page_links);
                break;
        }
        return $r;
    }
    
    /*    <script src="/js/jquery-2.1.4.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/slick.js"></script>
    <script src="/js/slick-animation.js"></script>
    <script src="/js/lightbox.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/script.js"></script>*/

    /*function js_files(){
        wp_enqueue_style('jquery_load','/css/bootstrap.css');
        wp_enqueue_style('css_style_load','/css/style.css');
        wp_enqueue_style('css_animate_load','/css/animate.min.css');
        wp_enqueue_style('css_ionicons_load','/css/ionicons.css');
        wp_enqueue_style('css_slick_load','/css/slick-theme.css');
        wp_enqueue_style('css_lightbox_load','/css/lightbox.css');
        wp_enqueue_style('css_aos_load','/css/aos.css');
    }*/

    add_action('wp_enqueue_scripts','css_js_files');

    add_action('get_header', 'remove_admin_login_header');


?>