<?php  
  get_header();
?>
<section id="banner">
        <div class="s_banner about_banner">
        <div class="container">
          <h2 class="second_title">作品案例&nbsp;·&nbsp;Portfolio</h2>
        </div>
      </div>
    </section>

     <div class="crumbs">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="<?php echo get_site_url()?>">主页</a></li>
          
          <li><a href="<?php echo get_site_url(null,'/portfolio')?>">案例作品</a></li>

        </ol>
      </div>
    </div>
<div class="content_wrapper">
<div class="container">
    <div class="row">
    <div class="text-center">
                        <h3 class="article_title">“<?php echo  get_query_var( 's' )  ?>”案例搜索结果：</h3>
                        <h4  style="font-size:75%;line-height:2.0; color:#cccccc;">如下方显示无结果返回，请减少关键词数量，并尝试在词与词之间添加空格，再次进行搜索。例如：搜索"中式装修家装效果图"，请输入“中式&nbsp;家装”进行搜索。<br>搜索功能完善中，请拨打：156-1000-2502及时为您提供案例展示。</h4>
                
    
          <div class="search_container"style="margin-bottom:30px;">
                   <?php get_search_form();?>
                   </div>
            </div>
           <div class="col-md-12">
            
            <ul class="media-list main-list">
              
            <?php

          if(have_posts()){
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
                        <?php echo '分类：' ; 
                        $current_id2 = get_the_id();
                        $show_cat2=array();
                        $args3 = array('object_ids'=>$current_id2,
                        );
                        foreach ((get_categories($args3)) as $category2) {
          $catlink2 = get_category_link($category2->cat_ID); $show_cat2[]='<a class="cat_tags" href="'.$catlink2.'">'.$category2->cat_name.'</a>';
        };  
        echo implode( '&nbsp;&nbsp;', $show_cat2 ); ?>
                        </div>
                        </li>
              

            <?php } } 
              
              else {
                  echo '无结果返回';
              }

             wp_reset_postdata(); ?>    
              
            </ul>
            <?php
  if ( function_exists('wp_bootstrap_pagination') )
    wp_bootstrap_pagination();
?>

          </div> 
          </div>
          </div>
          </div>

          <?php 
get_footer();
?>