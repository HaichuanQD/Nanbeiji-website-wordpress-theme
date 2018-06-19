<?php  
  get_header();
?>
    <?php   $categories = get_the_category();
            $category_parent_id = $categories[0]->category_parent;
            $category_id = $categories[0]->cat_ID; 
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
          <?php if ($category_parent_id==2) { ?> <li><a href="<?php echo get_site_url(null,'/portfolio')?>">案例作品</a></li>
          <li><?php the_title(); ?></li> <?php }  else {echo '新闻动态&nbsp;·&nbsp;News & Articles';} ?></li>
        </ol>
      </div>
    </div>

    <section id="content">
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

    <?php } ?>   
<?php 
get_footer();
?>