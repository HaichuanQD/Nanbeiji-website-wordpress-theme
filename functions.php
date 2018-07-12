<?php 

    // Register Custom Navigation Walker
    require_once('wp_bootstrap_pagination.php');
    add_theme_support( 'post-thumbnails' ); 

    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }

    function css_js_files(){

        wp_enqueue_style('css_bootstrap_load',get_theme_file_uri('/css/bootstrap.css'));
        wp_enqueue_style('css_style_load',get_theme_file_uri('/css/style.css'));
        wp_enqueue_style('css_animate_load',get_theme_file_uri('/css/animate.min.css'));
        wp_enqueue_style('css_ionicons_load',get_theme_file_uri('/css/ionicons.css'));
        wp_enqueue_style('css_slick_load',get_theme_file_uri('/css/slick-theme.css'));
        wp_enqueue_style('css_lightbox_load',get_theme_file_uri('/css/lightbox.css'));
        wp_enqueue_style('css_aos_load',get_theme_file_uri('/css/aos.css'));
        wp_enqueue_style('css_slick_main_load',get_theme_file_uri('/css/slick.css'));
        wp_enqueue_style('css_slick_second_main_load',get_theme_file_uri('/css/style_second.css'));
        wp_enqueue_script('js_jquery_load',get_theme_file_uri('/js/jquery-2.1.4.min.js'),NULL,'2.1.4',false);
        wp_enqueue_script('js_bootstrap_load',get_theme_file_uri('/js/bootstrap.js'),NULL,'3.3.7',true);
        wp_enqueue_script('js_slick_load',get_theme_file_uri('/js/slick.js'),NULL,'1.5.7',true);
        wp_enqueue_script('js_slick-animation_load',get_theme_file_uri('/js/slick-animation.js'),NULL,'0.3.3',true);
        wp_enqueue_script('js_lightbox_load',get_theme_file_uri('/js/lightbox.js'),NULL,'2.10.0',true);
        wp_enqueue_script('js_aos_load',get_theme_file_uri('/js/aos.js'),NULL,'1.0.0',true);
        wp_enqueue_script('js_sticky_load',get_theme_file_uri('/js/theia-sticky-sidebar.js'),NULL,'1.0.0',true);
        wp_enqueue_script('js_Resize_load',get_theme_file_uri('/js/ResizeSensor.js'),NULL,'1.0.0',true);
        wp_enqueue_script('js_script_load',get_theme_file_uri('/js/script.js'),NULL,'1.0.0',true);
        
        
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