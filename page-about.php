<?php  
  get_header();
?>
    <?php while(have_posts()){
        the_post();?>
    <section id="banner">
        <div class="s_banner about_banner">
        <div class="container">
          <h2 class="second_title">关于我们&nbsp;·&nbsp;About Us</h2>
        </div>
      </div>
    </section>

    <div class="crumbs">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="<?php echo get_site_url()?>">主页</a></li>
          <li class="active">关于我们</li>
        </ol>
      </div>
    </div>

    <section id="content">
      <div class="content_wrapper">
        <article class="container">
          <div class="text-center">
            <h3 class="article_title">工作室简介</h3>
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