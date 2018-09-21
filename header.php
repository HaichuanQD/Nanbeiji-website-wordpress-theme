<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo get_theme_file_uri('/favicon.ico')?>' />
<?php wp_head();?>
<title><?php 

if (is_home()||is_search()) { bloginfo('name'); } 

else{wp_title(''); echo '_青岛汇新慧艺效果图工作室';} 

?> </title>

<meta name="keywords" content="<?php 

if (is_home()) { echo '青岛效果图,青岛装修效果图,青岛效果图制作,青岛装修设计,青岛装修设计公司,青岛庭院设计,青岛阳光房设计,青岛产品效果图,青岛产品设计,船舶效果图'; } 



?>"/>

<meta name="description" content="<?php 

if (is_home()) { echo '青岛汇新慧艺装修设计公司，提供青岛装修效果图设计制作、庭院设计、阳光房设计、产品设计及船舶效果图设计。'; } 



?>"/>
<style>/*背景信息从CSS文件提取出来，改为动态的*/
   .lunbo1{
    background-image: url("https://cdn.huixinhuiyi.com/img/p1.png");}

   .lunbo_midaut{
    background-image: url("https://cdn.huixinhuiyi.com/img/auback.jpg");}

   .case-hover:hover .hover-link, .tj-case figure div:hover .hover-link, .pic-link:hover .hover-link {

    background-image: url("https://cdn.huixinhuiyi.com/img/hover-link.png");}

    .case-hover:hover  .hover-link2, .tj-case figure div:hover  .hover-link2, .pic-link:hover  .hover-link2 {

     background-image: url("https://cdn.huixinhuiyi.com/img/hover-link2.png");}
    
    #slogan{
    background-image: url("https://cdn.huixinhuiyi.com/img/1.jpg");}

    .about_banner{
    background-image: url("https://cdn.huixinhuiyi.com/img/banner_1.jpg");
    }

    .portfolio_banner{
        background-image: url("https://cdn.huixinhuiyi.com/img/banner_2.jpg");
    }

    .contact_banner{
        background-image: url("https://cdn.huixinhuiyi.com/img/banner_3.jpg");
    }

    .news_banner{
        background-image: url("https://cdn.huixinhuiyi.com/img/banner_4.jpg");
    }



</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123001211-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123001211-1');
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?98f33f65f9e7dcd30efa96dcef303fda";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


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
            <a class="navbar-brand" href="<?php echo get_site_url()?>"><img src="https://cdn.huixinhuiyi.com/img/logo.png" alt="Huixinhuiyi logo"></a>
          </div>
          <div id="navbar" class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
            <?php 
            $categories = get_the_category();
            $category_parent_id = $categories[0]->category_parent;
            $category_id = $categories[0]->cat_ID; ?>
              <li class="<?php if (is_home()) echo 'active'; ?>"><a href="<?php echo get_site_url()?>">主&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
              <li class="<?php if (is_page('about')) echo 'active'; ?>"><a href="<?php echo get_site_url(null,'/about/')?>">关于我们</a></li>
              <li class="<?php if (is_page('portfolio') or ($category_parent_id==2 and !is_home()) ) echo 'active'; ?>"><a href="<?php echo get_site_url(null,'/portfolio/') ?>">作品案例</a></li>
              <li class="<?php if (is_page('news') or ($category_parent_id==18 and !is_home()) ) echo 'active'; ?>"><a href="<?php echo get_site_url(null,'/news/')?>">新闻动态</a></li>
              <li class="<?php if (is_page('contact')) echo 'active'; ?>"><a href="<?php echo get_site_url(null,'/contact/')?>">联系我们</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
    </header>