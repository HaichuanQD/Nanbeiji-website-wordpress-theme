<?php  
  get_header();
?>

<section id="banner">
      <div class="s_banner portfolio_banner">
        <div class="container">
          <h2 class="second_title">作品案例&nbsp;·&nbsp;Portfolio</h2>
        </div>
      </div>
    </section>

    <div class="crumbs">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="\">主页</a></li>
          <li><a href="<?php echo get_site_url(null,'/portfolio'); ?>">作品案例</a></li>
          <li class="active">工业</li>
        </ol>
      </div>
    </div>

    

    <section id="content">
      <div class="content_wrapper">
        <div class="container">
                <div class="row">
                <div class="text-center">
                        <h3 class="article_title">作品案例展示</h3>
                </div>
            
                <div class="col-xs-12 search_pics">
                  <?php get_search_form();?>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="row">
                <ul id="myTab" class="nav nav-tabs nav-justified">
                        <li>
                            <a href="<?php echo get_site_url(null,'/portfolio'); ?>">
                                 综合精选
                            </a>
                        </li>
                        <li><a href="<?php echo get_category_link(3); ?>">室内</a></li>
                        <li><a href="<?php echo get_category_link(12); ?>">室外</a></li>
                        <li class="active"><a href="#industry" data-toggle="tab">工业</a></li>
                        <li><a href="<?php echo get_category_link(14); ?>">产品</a></li>
                        <li><a href="<?php echo get_category_link(15); ?>">工程</a></li>
                        <li><a href="<?php echo get_category_link(17); ?>">其他</a></li>

                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="industry">
                        <div class="portfolio_cases_container">
                            <div class="container">
                                <div class"row">   
                        <?php 
                        $portfolio_page = get_query_var('paged');
                        $portfolio = new WP_Query(array( 
                                'cat' => 13,    
                                'posts_per_page' => 12,
                                'paged'=>$portfolio_page ));?>
                            <?php
                            while ($portfolio->have_posts()){
                                $portfolio->the_post(); ?>
                           
                            <div class=" col-md-4 col-sm-6">
                                <div class="cases_container_portfolio" data-aos="fade" data-aos-offset="-999">
                                <a href="<?php the_permalink(); ?>">
                                <div class=" port_th_cont" style="background-image:url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'large' ); } ?>); "  >
                                <span class="case-hover visible-lg-block">
                                    <span class="hover-link2"></span>
                                </span>
                                </div>
                                </a>
                                 <div class="portfolio_cases_title">
                                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                </div>
                                </div>
                                </div>
                                <?php } wp_reset_postdata();
                            ?>
                                </div>
                               
                                </div>
                                </div>
                        </div>
                         </div>
                    </div>
                    <ul class='pagination'>
                    <?php
echo paginate_linkes(array(
    'total' => $portfolio ->max_num_pages,
    'type'=>'plain'
));

?>  </ul>
                </div>
                
            </div>
      
    </section>

 
<?php 
get_footer();
?>