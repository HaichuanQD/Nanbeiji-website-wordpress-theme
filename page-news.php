<?php  
  get_header();
?>


    <section id="banner">
        <div class="s_banner news_banner">
        <div class="container">
          <h2 class="second_title">新闻动态&nbsp;·&nbsp;News & Articles</h2>
        </div>
      </div>
    </section>

    <div class="crumbs">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="<?php echo get_site_url()?>">主页</a></li>
          <li class="active">新闻动态</li>
        </ol>
      </div>
    </div>

    <section id="content">
      <div class="content_wrapper">
        <div class="container">
          <div class="row">
            <div class="news_slider_wrapper">
            <?php $pushinner = new WP_Query(array( 
                                'cat' => 25,
                                'posts_per_page' => 6,
                                'orderby'=>'rand',
                                ));?> <?php
                                while ($pushinner->have_posts()) {
                                  $pushinner->the_post(); ?>
            <div class="news_slider_page">
            <div class="col-md-8 col-sm-7 main_news_thumbs">
              <a href="<?php the_permalink(); ?>">
              <div class="main_news_thumbs_container" style="background-image: url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'large' ); } ?>)" >
                <span class="case-hover">
                  <span class="hover-link"></span>
                </span>
              </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-5 main_news_titles">
              <i class="news_customprev ion-android-arrow-back"></i>
              <i class="news_customnext ion-android-arrow-forward"></i>
              <div class="main_news_cat">
              <?php
                        $current_id2 = get_the_id();
                        $show_cat2=array();
                        $args3 = array('object_ids'=>$current_id2,
                        'exclude'=>'18 25 24');
                        foreach ((get_categories($args3)) as $category2) {
          $catlink2 = get_category_link($category2->cat_ID); $show_cat2[]='<a class="cat_tags" href="'.$catlink2.'">'.$category2->cat_name.'</a>';
        };  
        echo implode( '&nbsp;&nbsp;', $show_cat2 ); ?>
              </div>
              <a href="#">
              <div class="main_news_title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
              </div>
              </a>
              <div class="main_news_hint">
              <?php
              echo wp_trim_words( get_the_content(), 80, '...' );
               ?>
              </div>
              <div class="main_news_author">
                  <a href="<?php the_permalink(); ?>" class="btn btn-default">阅读更多</a><?php echo '<span class="hidden-md">'; echo '作者：' ; the_author();echo '</span>'; echo '&nbsp;&nbsp;' ; echo '发布于：';  echo get_the_date(); ?>
              </div>
            </div>
          </div>
          <?php } wp_reset_postdata(); ?>
          </div>
          </div>
        </div>
      </div>
      <div class="container">
      <div class="news_saparator">最近发布
          <i class="news_customprev2 ion-android-arrow-back"></i>
          <i class="news_customnext2 ion-android-arrow-forward"></i>
      </div>
     </div>
      <div class="container">
        <div class="row">
          <div class="latest_newsslider">
         <?php $latestinner = new WP_Query(array( 
                                'cat' => 18,
                                'posts_per_page' => 6,
                                'orderby'=>'rand',
                                ));?> <?php
                                while ($latestinner->have_posts()){
                                  $latestinner->the_post(); ?>
          <div class="col-md-4">
            <div class="latest_news_container">
            <a href="<?php the_permalink(); ?>">
            <div class="latest_news_thumbs_container" style="background-image:url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'large' ); } ?>)">
            <span class="case-hover">
                <span class="hover-link"></span>
            </span>
            </div>
            </a>
              <div class="same_height" >
              <div class="latest_news_title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a> 
              </div>
              <div class="latest_news_cat">
              <?php
                        $current_id2 = get_the_id();
                        $show_cat2=array();
                        $args3 = array('object_ids'=>$current_id2,
                        'exclude'=>'18 25 24');
                        foreach ((get_categories($args3)) as $category2) {
          $catlink2 = get_category_link($category2->cat_ID); $show_cat2[]='<a class="cat_tags" href="'.$catlink2.'">'.$category2->cat_name.'</a>';
        };  
        echo implode( '&nbsp;&nbsp;', $show_cat2 ); ?>
              </div>
                </div>
              <div class="latest_news_hint">
              <?php
              echo wp_trim_words( get_the_content(), 80, '...' );
               ?>
                  
              </div>
              <div class="latest_news_author_1">
                  <a href="<?php the_permalink(); ?>" class="btn btn-default">阅读更多</a><?php echo '<span class="hidden-md">'; echo '作者：' ; the_author();echo '</span>'; echo '&nbsp;&nbsp;' ; echo '发布于：';  echo get_the_date(); ?>
              </div>
             
            </div>
          </div>
          <?php } wp_reset_postdata(); ?> 
          
          
          
        </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="cat_titles">新闻通知 <a class="btn btn-default"style='margin-top:5px;margin-bottom:5px;margin-left:70%;'>更多&gt;&gt;</a></h2>
            <ul class="media-list main-list">
            <?php

                $post_not_ineew = array($current_id);
                $related = new WP_Query(array( 
                                    'cat' => 19,
                                    
                                    'posts_per_page' => 6,
                                    'orderby'=>'date',
                                    ));
                while ($related->have_posts()){
                                    $related->the_post(); ?>

                  <li class="media"><a class='pull-left' href='<?php the_permalink(); ?>' style="margin-right:10px;">
                  <div class='relatedthumbnail' style='background-image: url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'large' ); } ?>);position: relative;'>
                  <span class="case-hover">
                <span class="hover-link"></span>
            </span></div></a>

                            <div class="cat_news_title related_cat">
                              <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                            </div>
                            <div class="cat_news_cat">
                            <?php
                            $current_id2 = get_the_id();
                            $show_cat2=array();
                            $args3 = array('object_ids'=>$current_id2,
                            'exclude'=>'18 25 24');
                            foreach ((get_categories($args3)) as $category2) {
                $catlink2 = get_category_link($category2->cat_ID); $show_cat2[]='<a class="cat_tags" href="'.$catlink2.'">'.$category2->cat_name.'</a>';
                };  
                echo implode( '&nbsp;&nbsp;', $show_cat2 ); ?>
                            </div>   
                            <div class="latest_news_author" style="font-size:60%; right:5px; bottom:12px" >
                            <?php echo '作者：' ; the_author(); echo '<span class="visible-xs-inline"><br></span>' ;echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ; echo '发布于：';  echo get_the_date(); ?>
                            </div>
                            </li>
                  

                <?php } wp_reset_postdata(); ?>    
              
            </ul>
          </div>
          <div class="col-md-6">
              <h2 class="cat_titles">设计理念 <a class="btn btn-default"style='margin-top:5px;margin-bottom:5px;margin-left:70%;'>更多&gt;&gt;</a></h2>
              <ul class="media-list main-list">
              <?php

              $post_not_ineew = array($current_id);
              $related = new WP_Query(array( 
                                  'cat' => 20,
                                  
                                  'posts_per_page' => 6,
                                  'orderby'=>'date',
                                  ));
              while ($related->have_posts()){
                                  $related->the_post(); ?>

                <li class="media"><a class='pull-left' href='<?php the_permalink(); ?>' style="margin-right:10px;">
                <div class='relatedthumbnail' style='background-image: url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'large' ); } ?>);position: relative;'>
                <span class="case-hover">
                <span class="hover-link"></span>
            </span></div></a>

                          <div class="cat_news_title related_cat">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                          </div>
                          <div class="cat_news_cat">
                          <?php
                          $current_id2 = get_the_id();
                          $show_cat2=array();
                          $args3 = array('object_ids'=>$current_id2,
                          'exclude'=>'18 25 24');
                          foreach ((get_categories($args3)) as $category2) {
              $catlink2 = get_category_link($category2->cat_ID); $show_cat2[]='<a class="cat_tags" href="'.$catlink2.'">'.$category2->cat_name.'</a>';
              };  
              echo implode( '&nbsp;&nbsp;', $show_cat2 ); ?>
                          </div>   
                          <div class="latest_news_author" style="font-size:60%; right:5px; bottom:12px" >
                          <?php echo '作者：' ; the_author(); echo '<span class="visible-xs-inline"><br></span>' ;echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ; echo '发布于：';  echo get_the_date(); ?>
                          </div>
                          </li>
                

              <?php } wp_reset_postdata(); ?>    
              </ul>
            </div>
            <div class="col-md-6">
                <h2 class="cat_titles">三维技法 <a class="btn btn-default"style='margin-top:5px;margin-bottom:5px;margin-left:70%;'>更多&gt;&gt;</a></h2>
                <ul class="media-list main-list">
                <?php

              $post_not_ineew = array($current_id);
              $related = new WP_Query(array( 
                                  'cat' => 21,
                                  
                                  'posts_per_page' => 6,
                                  'orderby'=>'date',
                                  ));
              while ($related->have_posts()){
                                  $related->the_post(); ?>

                <li class="media"><a class='pull-left' href='<?php the_permalink(); ?>' style="margin-right:10px;"><div class='relatedthumbnail' style='background-image: url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'large' ); } ?>);position: relative;'>
                <span class="case-hover">
                <span class="hover-link"></span>
            </span></div></a>

                          <div class="cat_news_title related_cat">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                          </div>
                          <div class="cat_news_cat">
                          <?php
                          $current_id2 = get_the_id();
                          $show_cat2=array();
                          $args3 = array('object_ids'=>$current_id2,
                          'exclude'=>'18 25 24');
                          foreach ((get_categories($args3)) as $category2) {
              $catlink2 = get_category_link($category2->cat_ID); $show_cat2[]='<a class="cat_tags" href="'.$catlink2.'">'.$category2->cat_name.'</a>';
              };  
              echo implode( '&nbsp;&nbsp;', $show_cat2 ); ?>
                          </div>   
                          <div class="latest_news_author" style="font-size:60%; right:5px; bottom:12px" >
                          <?php echo '作者：' ; the_author(); echo '<span class="visible-xs-inline"><br></span>' ;echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ; echo '发布于：';  echo get_the_date(); ?>
                          </div>
                          </li>
                

              <?php } wp_reset_postdata(); ?>    
                </ul>
              </div>
              <div class="col-md-6">
                  <h2 class="cat_titles">原创随笔 <a class="btn btn-default"style='margin-top:5px;margin-bottom:5px;margin-left:70%;'>更多&gt;&gt;</a></h2>
                  <ul class="media-list main-list">
                  <?php

              $post_not_ineew = array($current_id);
              $related = new WP_Query(array( 
                                  'cat' => 22,
                                  
                                  'posts_per_page' => 6,
                                  'orderby'=>'date',
                                  ));
              while ($related->have_posts()){
                                  $related->the_post(); ?>

                <li class="media"><a class='pull-left' href='<?php the_permalink(); ?>' style="margin-right:10px;"><div class='relatedthumbnail' style='background-image: url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'large' ); } ?>);position: relative;'>
                <span class="case-hover">
                <span class="hover-link"></span>
            </span></div></a>

                          <div class="cat_news_title related_cat">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                          </div>
                          <div class="cat_news_cat">
                          <?php
                          $current_id2 = get_the_id();
                          $show_cat2=array();
                          $args3 = array('object_ids'=>$current_id2,
                          'exclude'=>'18 25 24');
                          foreach ((get_categories($args3)) as $category2) {
              $catlink2 = get_category_link($category2->cat_ID); $show_cat2[]='<a class="cat_tags" href="'.$catlink2.'">'.$category2->cat_name.'</a>';
              };  
              echo implode( '&nbsp;&nbsp;', $show_cat2 ); ?>
                          </div>   
                          <div class="latest_news_author" style="font-size:60%; right:5px; bottom:12px" >
                          <?php echo '作者：' ; the_author(); echo '<span class="visible-xs-inline"><br></span>' ;echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ; echo '发布于：';  echo get_the_date(); ?>
                          </div>
                          </li>
                

              <?php } wp_reset_postdata(); ?>    
    </ul>
                </div>          
        </div>
      </div>
    </section>
    <div class="news_saparator noline"></div>
    <?php 
get_footer();
?>