<?php  
  get_header();
?>
    <?php   $categories = get_the_category();
            $category_parent_id = $categories[0]->category_parent;
            $category_id = $categories[0]->cat_ID; 
            $show_cat=array();
            $current_id = get_the_id();
            global $current_id;
            $args1 = array('object_ids'=>$current_id,
            'exclude'=>'18 25 24');
            $args2 = array('object_ids'=>$current_id,
            'include'=>'21 22 19 20');
            while(have_posts()){
            the_post(); ?>
    <section id="banner">
        <div class="s_banner about_banner">
        <div class="container">
          <h2 class="second_title"><?php if ($category_parent_id==2) {echo '作品案例&nbsp;·&nbsp;Portfolio';} else {echo '新闻动态&nbsp;·&nbsp;News & Articles';} ?></h2>
        </div>
      </div>
    </section>

    <div class="crumbs">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="<?php echo get_site_url()?>">主页</a></li>
          <?php if ($category_parent_id==2) { ?> 
          <li><a href="<?php echo get_site_url(null,'/portfolio')?>">案例作品</a></li>
          <li><?php the_title(); ?></li> 
          <?php }  
          else { $bread_cat = get_categories($args2); $breadcatlink = get_category_link($bread_cat[0]->cat_ID); ?> <li><a href="<?php echo get_site_url(null,'/news')?>">新闻动态</a></li>
          <li><a href="<?php echo $breadcatlink;?>"><?php echo $bread_cat[0]->name ?></a></li>
          <li class='hidden-xs'><?php the_title();  ?></li>
        <?php  } ?>
        </ol>
      </div>
    </div>
    <?php if ($category_parent_id==2) { ?>
    <section id="content_portfolio" style='display:<?php if ($category_parent_id==2) {echo 'block';} else {echo 'none'; } ?>' >
      <div class="content_wrapper">
        <article class="container">
          <div class="text-center">
            <h3 class="article_title"><?php the_title(); ?></h3>
          </div>
          <hr>
          <div class="article_text">
             <?php the_content();?>
          </div>
        </article>
      </div>
    </section>
    <?php } else { ?> 
    <section id="content_news" style='display:<?php if ($category_parent_id==18) {echo 'block';} else {echo 'none'; } ?>' >
    <div class="container">
      <div class="row news_page" >
        <div class="col-lg-8 news_content_layout" >
          <div class='theiaStickySidebar'>
        <div class="main_news_cat"><?php 
            /*这是显示文章分类的代码 排除了一些内部分类 */
           /* $show_cat=array();
        foreach((get_the_category()) as $category) { 
          if ($category->cat_ID==18 || $category->cat_ID==24 || $category->cat_ID==25) { } else { $catlink = get_category_link($category->cat_ID); $show_cat[]='<a class="cat_tags" href="'.$catlink.'">'.$category->cat_name.'</a>'; }
        } 
        echo implode( ' , ', $show_cat );*/
        
        
        foreach ((get_categories($args1)) as $category) {
          $catlink = get_category_link($category->cat_ID); $show_cat[]='<a class="cat_tags" href="'.$catlink.'">'.$category->cat_name.'</a>';
        };  
        echo implode( ' , ', $show_cat );
        ?></div>
        <div class="news_title_layout"><h2><?php the_title(); ?></h2></div>
        <div class="author_dates"><h3><?php echo '作者：' ; the_author(); echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ; echo '发布于：';  echo get_the_date();echo '&nbsp;&nbsp;&nbsp;' ; the_time(); ?></h3></div>
          <div class="news_thumbnails_wrapper"><?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('large', array('class' => 'newsthumbnails'));
             }  ?></div>
         
        
           <div class="newscontent"><?php the_content(); ?> </div>

               <?php } /*大判断结束*/ ?>   
               <?php } wp_reset_postdata(); /*本文循环结束*/ ?> 
           <div class="col-md-12">
            <h2 class="cat_titles">相关推荐 </h2>
            <ul class="media-list main-list">
              
            <?php

            $post_not_ineew = array($current_id);
            $related = new WP_Query(array( 
                                'cat' => $bread_cat[0]->cat_ID,
                                'post__not_in' => $post_not_ineew,
                                'posts_per_page' => 3,
                                'orderby'=>'rand',
                                ));
            while ($related->have_posts()){
                                $related->the_post(); ?>
            
              <li class="media"><a class='pull-left' href='<?php the_permalink(); ?>' style="margin-right:10px;"><div class='relatedthumbnail' style='background-image: url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'large' ); } ?>)'>
            </div></a>
          
                        <div class="cat_news_title">
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
        echo implode( ' , ', $show_cat2 ); ?>
                        </div>   
                        <div class="latest_news_author" >
                        <?php echo '作者：' ; the_author(); echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ; echo '发布于：';  echo get_the_date(); ?>
                        </div>
                        </li>
              

            <?php } wp_reset_postdata(); ?>    
              
            </ul>
          </div>          
        </div></div>
        
        <div class="col-lg-4 sidebar">

            <div class='theiaStickySidebar'>
          <div class="col-xs-12 col-sm-6 col-lg-12" >
            
          <div class="news_saparator" style="padding-top:60px;border-top:0px;height:100px;" >最近发布
          <i class="news_customprev2 ion-android-arrow-back" style="top:64px;"></i>
          <i class="news_customnext2 ion-android-arrow-forward" style="top:64px;"></i>
           </div>
        <div class="latestinnetslider">
          <div class="list1">
            <ul class="innerlatestlist1 media-list main-list">
            <?php
            $i = 1; 
            $latestinner = new WP_Query(array( 
                                'cat' => 18,
                                'post__not_in' => $post_not_ineew,
                                'posts_per_page' => 8,
                                'orderby'=>'date',
                                ));?> <?php
                                while ($latestinner->have_posts()){
                                  $latestinner->the_post(); ?>

                                  <?php if ( $i<=3 ) { ?>
                                    <li class="media"><a class='pull-left' href='<?php the_permalink(); ?>' style="margin-right:px;"><div class='relatedinnerthumbnail' style='background-image: url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'large' ); } ?>)'>
            </div></a>
          
                        <div class="cat_news_title" style="font-size:75%;font-weight:800;">
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                        </div>
                        <div class="cat_news_cat" style="font-size:60%;">
                        <?php
                        $current_id2 = get_the_id();
                        $show_cat2=array();
                        $args3 = array('object_ids'=>$current_id2,
                        'exclude'=>'18 25 24');
                        foreach ((get_categories($args3)) as $category2) {
          $catlink2 = get_category_link($category2->cat_ID); $show_cat2[]='<a class="cat_tags" href="'.$catlink2.'">'.$category2->cat_name.'</a>';
        };  
        echo implode( ' , ', $show_cat2 ); ?>
                        </div>   
                        <div class="latest_news_author" style="font-size:60%; right:5px; bottom:12px" >
                        <?php echo '作者：' ; the_author(); echo '&nbsp;&nbsp;&nbsp;' ; echo '发布于：';  echo get_the_date(); ?>
                        </div>
                        </li>





                                     <?php } ?>
                                
                                <?php $i++; ?> <?php }  ?> 
                                <ul>
                              </div>
                              <div class="list2">
            <ul class="innerlatestlist2 media-list main-list">
            <?php
            $i = 1; 
            $latestinner = new WP_Query(array( 
                                'cat' => 18,
                                'post__not_in' => $post_not_ineew,
                                'posts_per_page' => 8,
                                'orderby'=>'date',
                                ));?> <?php
                                while ($latestinner->have_posts()){
                                  $latestinner->the_post(); ?>

                                  <?php if ( $i<=6 && $i>3 ) { ?>
                                    <li class="media"><a class='pull-left' href='<?php the_permalink(); ?>' style="margin-right:px;"><div class='relatedinnerthumbnail' style='background-image: url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'large' ); } ?>)'>
            </div></a>
          
                        <div class="cat_news_title" style="font-size:75%;font-weight:800;">
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                        </div>
                        <div class="cat_news_cat" style="font-size:60%;">
                        <?php
                        $current_id2 = get_the_id();
                        $show_cat2=array();
                        $args3 = array('object_ids'=>$current_id2,
                        'exclude'=>'18 25 24');
                        foreach ((get_categories($args3)) as $category2) {
          $catlink2 = get_category_link($category2->cat_ID); $show_cat2[]='<a class="cat_tags" href="'.$catlink2.'">'.$category2->cat_name.'</a>';
        };  
        echo implode( ' , ', $show_cat2 ); ?>
                        </div>   
                        <div class="latest_news_author" style="font-size:60%; right:5px; bottom:12px" >
                        <?php echo '作者：' ; the_author(); echo '&nbsp;&nbsp;&nbsp;' ; echo '发布于：';  echo get_the_date(); ?>
                        </div>
                        </li>





                                     <?php } ?>
                                
                                <?php $i++; ?> <?php }  ?> 
                                <ul>
                              </div>
                              </div></div>
                              <div class="col-xs-12 col-sm-6 col-lg-12" ><div class="news_saparator" style="border-top:0px ;">分类目录
        
           </div><ul class='list-group' style="font-size:70%;margin-bottom:50px;"><?php wp_list_categories(array( 'title_li'=>'' , 'include'=>'21 22 19 20','hide_empty'=>false, )); ?></ul> </div></div>
        
        
      </div>
    </div>
  </div>
            
    </section>


<?php 
get_footer();
?>