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
                            <p>精选案例</p>
                        </div>
                        <div class="tab-pane fade" id="interior">

                        </div>
                        <div class="tab-pane fade" id="exterior">

                        </div>
                        <div class="tab-pane fade" id="industry">
                            <?php $industry = new WP_Query(array( 
                                'cat' => 3 ));?>
                            <?php
                            while ($industry->have_posts()){
                                $industry->the_post(); ?>
                                <p><?php the_title();?><p>
                            <?php } wp_reset_postdata();
                            ?>
                        </div>
                        <div class="tab-pane fade" id="product">
                            <p>产品案例</p>
                        </div>
                        <div class="tab-pane fade" id="others_case">
                            <p>其他案例</p>
                        </div>

                    </div>
                </div>
                
        </article>
      </div>
    </section>

 
<?php 
get_footer();
?>