<?php  
  get_header();
?>
<section id="banner">
        <div class="s_banner about_banner">
        <div class="container">
          <h2 class="second_title"><?php $categories = get_the_category();
            $category_parent_id = $categories[0]->category_parent;
            $category_id = $categories[0]->cat_ID;  if ($category_parent_id==2) {echo '作品案例&nbsp;·&nbsp;Portfolio';} else {echo '新闻动态&nbsp;·&nbsp;News & Articles';} ?></h2>
        </div>
      </div>
    </section>

     <div class="crumbs">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="<?php echo get_site_url()?>">主页</a></li>
          <?php if ($category_parent_id==2) { ?> 
          <li><a href="<?php echo get_site_url(null,'/portfolio')?>">作品案例</a></li>
          <li><?php single_cat_title(); ?></li> 
          <?php }  
          else { ?> <li><a href="<?php echo get_site_url(null,'/news')?>">新闻动态</a></li>
          <li><a href="<?php echo $breadcatlink;?>"><?php single_cat_title(); ?></a></li>

        <?php  } ?>
        </ol>
      </div>
    </div>
<div class="container">
    <div class="row">
           <div class="col-md-12">
            <h2 class="cat_titles" style="margin-top:50px;padding-bottom:50px;font-size:130%;"><?php single_cat_title(); ?> </h2>
            <ul class="media-list main-list">
              
            <?php

          
            while (have_posts()){
                                the_post(); ?>
            
              <li class="media"><a class='pull-left' href='<?php the_permalink(); ?>' style="margin-right:10px;"><div class='relatedthumbnail' style='background-image: url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'large' ); } ?>);position:relative;'>
              <span class="case-hover">
                <span class="hover-link"></span>
            </span></div></a>
          
                        <div class="cat_news_title related_cat">
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                        </div>

                        <div class="latest_news_author" style="font-size:60%; right:5px; bottom:12px">
                        <?php echo '作者：' ; the_author(); echo '<span class="visible-xs-inline"><br></span>' ;echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ; echo '发布于：';  echo get_the_date(); ?>
                        </div>
                        </li>
              

            <?php } wp_reset_postdata(); ?>    
              
            </ul>
            <?php
  if ( function_exists('wp_bootstrap_pagination') ){
    wp_bootstrap_pagination(); }
?>

          </div> 
          </div></div>

          <?php 
get_footer();
?>