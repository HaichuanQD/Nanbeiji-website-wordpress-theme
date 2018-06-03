<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head();?>
<title><?php bloginfo('name');?></title>
<style>
   .lunbo1{
    background-image: url("<?php echo get_theme_file_uri('/img/p1.png')?>");}

   .case-hover:hover .hover-link, .tj-case figure div:hover .hover-link, .pic-link:hover .hover-link {

    background-image: url("<?php echo get_theme_file_uri('/img/hover-link.png')?>");}
    
    #slogan{
    background-image: url("<?php echo get_theme_file_uri('/img/1.jpg')?>");}

    .about_banner{
    background: url("<?php echo get_theme_file_uri('/img/banner_1.jpg')?>");
    }

    .portfolio_banner{
        background: url("<?php echo get_theme_file_uri('/img/banner_2.jpg')?>");
    }

    .contact_banner{
        background: url("<?php echo get_theme_file_uri('/img/banner_3.jpg')?>");
    }


</style>


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets//js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--<script src="../../assets//js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <header>
      <nav class="navbar navbar-default  navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="<?php echo get_theme_file_uri('/img/logo.png')?>" alt="nanbeiji logo"></a>
          </div>
          <div id="navbar" class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
              <li class="<?php if (is_home()) echo 'active'; ?>"><a href="<?php echo get_site_url()?>">主&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
              <li class="<?php if (is_page('about')) echo 'active'; ?>"><a href="<?php echo get_site_url(null,'/about/')?>">关于我们</a></li>
              <li class="<?php if (is_page('portfolio')) echo 'active'; ?>"><a href="<?php echo get_site_url(null,'/portfolio/')?>">作品案例</a></li>
              <li class="<?php if (is_page('news')) echo 'active'; ?>"><a href="<?php echo get_site_url(null,'/news/')?>">新闻动态</a></li>
              <li class="<?php if (is_page('contact')) echo 'active'; ?>"><a href="<?php echo get_site_url(null,'/contact/')?>">联系我们</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
    </header>