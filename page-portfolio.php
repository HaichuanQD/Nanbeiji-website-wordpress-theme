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
          <li class="active">作品案例</li>
        </ol>
      </div>
    </div>

    

    <section id="content">
      <div class="content_wrapper">
        <article class="container">
                <div class="text-center">
                        <h3 class="article_title">作品案例展示</h3>
                </div>
            <div class="row">
                <div class="col-xs-12 search_pics">
                <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="搜索本站案例">
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                </form>
            </div>
        </div>
            <div class="row">
                <ul id="myTab" class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a href="#home" data-toggle="tab">
                                 综合精选
                            </a>
                        </li>
                        <li><a href="#interior" data-toggle="tab">室内</a></li>
                        <li><a href="#exterior" data-toggle="tab">室外</a></li>
                        <li><a href="#industry" data-toggle="tab">工业</a></li>
                        <li><a href="#product" data-toggle="tab">产品</a></li>
                        <li><a href="#engine" data-toggle="tab">工程</a></li>
                        <li><a href="#others_case" data-toggle="tab">其他</a></li>

                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="home">
                        <div class="portfolio_cases_container">
                            <div class="container">
                                <div class"row">   
                        <?php $industry = new WP_Query(array( 
                                'cat' => 16 ));?>
                            <?php
                            while ($industry->have_posts()){
                                $industry->the_post(); ?>
                           
                            <div class="col-md-3 col-sm-6">
                                <div class="cases_container_portfolio" data-aos="fade" data-aos-offset="-999">
                                <figure class="overflowhidden main_case">   
                                 <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
	                              the_post_thumbnail('full',  array('class' => 'portfolio_thumbnails'));
                                 }  ?></a>
                                 </figure>
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
                        <div class="tab-pane fade" id="interior">
                        <div class="portfolio_cases_container">
                            <div class="container">
                                <div class"row">   
                        <?php $industry = new WP_Query(array( 
                                'cat' => 3 ));?>
                            <?php
                            while ($industry->have_posts()){
                                $industry->the_post(); ?>
                           
                            <div class="col-md-3 col-sm-6">
                                <div class="cases_container_portfolio" data-aos="fade" data-aos-offset="-999">
                                <figure class="overflowhidden main_case">   
                                 <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
	                              the_post_thumbnail('full',  array('class' => 'portfolio_thumbnails'));
                                 }  ?></a>
                                 </figure>
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
                        <div class="tab-pane fade" id="exterior">
                        <div class="portfolio_cases_container">
                            <div class="container">
                                <div class"row">   
                        <?php $industry = new WP_Query(array( 
                                'cat' => 12 ));?>
                            <?php
                            while ($industry->have_posts()){
                                $industry->the_post(); ?>
                           
                            <div class="col-md-3 col-sm-6">
                                <div class="cases_container_portfolio" data-aos="fade" data-aos-offset="-999">
                                <figure class="overflowhidden main_case">   
                                 <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
	                              the_post_thumbnail('full',  array('class' => 'portfolio_thumbnails'));
                                 }  ?></a>
                                 </figure>
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

                        <div class="tab-pane fade" id="industry">
                        <div class="portfolio_cases_container">
                            <div class="container">
                                <div class"row">   
                        <?php $industry = new WP_Query(array( 
                                'cat' => 13 ));?>
                            <?php
                            while ($industry->have_posts()){
                                $industry->the_post(); ?>
                           
                            <div class="col-md-3 col-sm-6">
                                <div class="cases_container_portfolio" data-aos="fade" data-aos-offset="-999">
                                <figure class="overflowhidden main_case">   
                                 <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
	                              the_post_thumbnail('full',  array('class' => 'portfolio_thumbnails'));
                                 }  ?></a>
                                 </figure>
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
                       
                        <div class="tab-pane fade" id="product">
                        <div class="portfolio_cases_container">
                            <div class="container">
                                <div class"row">   
                        <?php $industry = new WP_Query(array( 
                                'cat' => 14 ));?>
                            <?php
                            while ($industry->have_posts()){
                                $industry->the_post(); ?>
                           
                            <div class="col-md-3 col-sm-6">
                                <div class="cases_container_portfolio" data-aos="fade" data-aos-offset="-999">
                                <figure class="overflowhidden main_case">   
                                 <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
	                              the_post_thumbnail('full',  array('class' => 'portfolio_thumbnails'));
                                 }  ?></a>
                                 </figure>
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

                        <div class="tab-pane fade" id="others_case">
                        <div class="portfolio_cases_container">
                            <div class="container">
                                <div class"row">   
                        <?php $industry = new WP_Query(array( 
                                'cat' => 17 ));?>
                            <?php
                            while ($industry->have_posts()){
                                $industry->the_post(); ?>
                           
                            <div class="col-md-3 col-sm-6">
                                <div class="cases_container_portfolio" data-aos="fade" data-aos-offset="-999">
                                <figure class="overflowhidden main_case">   
                                 <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
	                              the_post_thumbnail('full',  array('class' => 'portfolio_thumbnails'));
                                 }  ?></a>
                                 </figure>
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
                
        </article>
      </div>
    </section>

 
<?php 
get_footer();
?>