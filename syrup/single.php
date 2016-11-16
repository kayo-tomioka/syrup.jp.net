<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if(!is_home()){wp_title('-', true, 'right');}bloginfo('name')?></title>
    <meta property="og:title" content="<?php if(!is_home()){wp_title('-', true, 'right');}bloginfo('name')?>">
    <meta property="og:url" content="http://syrup.jp.net">
    <meta property="og:image" content="<?php echo get_template_directory_uri();?>/img/common/ogimage.png">
    <meta property="og:description" content="<?php bloginfo('description');?>">
    <meta property="fb:app_id" content="1823522501226325">
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/img/common/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/img/common/apple-touch-icon.png" sizes="180x180">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/font/genericons/genericons.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    <script>
      (function(i,s,o,g,r,a,m),i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-62565385-1', 'auto');
      	ga('send', 'pageview');
    </script>
<?php wp_head();?>
  </head>
  <body id="top" class="news news-articles">
    <div id="fb-root">
      <script>
        (function(d, s, id) {
        	var js, fjs = d.getElementsByTagName(s)[0];
        	if (d.getElementById(id)) return;
        	js = d.createElement(s); js.id = id;
        	js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8&appId=1823522501226325";
        	fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>
    </div>
<?php get_header();?>
    <main class="main">
      <?php
        if(have_posts()):
          while(have_posts()): the_post();
      ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="content-headings">NEWS<span class="news-year"><?php the_time('Y')?></span></h1>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="news-title"><?php the_title(); ?></h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 news-detail">
              <time datetime="<?php the_time('Y-m-d'); ?>" class="news-date"><?php the_time('Y/m/d'); ?></time>
              <div class="news-detail-item">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </article>
      <?php
          endwhile;
        endif;
      ?>
<?php get_sidebar('archives');?>
    </main>
    <div id="social" class="container">
      <div class="row">
        <ul class="social-link">
          <li class="social-link-item facebook"><script>document.write('<div class="fb-like" data-href='+location.href+' data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>');</script></li>
          <li class="social-link-item twitter">
            <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
          </li>
        </ul>
      </div>
    </div>
    <div id="page-top" class="patetop"><a href="#top"><span class="gicon gicon-pagetop"></span><span class="reader">PAGE TOP</span></a></div>
<?php get_footer();?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyAWyJzOIW0qC423PFa81Ii4D5u0oXI_9Oc"></script>
    <?php 
      wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
      wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.custom.js');
      wp_enqueue_script('slicknav', get_template_directory_uri() . '/js/jquery.slicknav.min.js');
      wp_enqueue_script('cbpAnimatedHeader', get_template_directory_uri() . '/js/cbpAnimatedHeader.js');
      wp_enqueue_script('classie', get_template_directory_uri() . '/js/classie.js');
      wp_enqueue_script('smoothScroll', get_template_directory_uri() . '/js/jquery.smoothScroll.js');
      wp_enqueue_script('classie', get_template_directory_uri() . '/js/classie.js');
      wp_enqueue_script('mapstyle', get_template_directory_uri() . '/js/mapstyle.js');
      wp_enqueue_script('commonjs', get_template_directory_uri() . '/js/common.js');
      wp_footer();
    ?>
    <script>
      $(function() {
        $('#menu').slicknav({
          'closeOnClick': true
        });
      });
      $(function() {
        $('.nav-item a').SmoothScroll({
          duration: 1000,
          easing  : 'easeOutQuint'
        });
      });
      $(function() {
        var topBtn = $('#page-top');
        topBtn.hide();
        $(window).scroll(function () {
          if ($(this).scrollTop() > 100) {
            topBtn.fadeIn();
          } else {
            topBtn.fadeOut();
          }
        });
        topBtn.click(function () {
          $('body,html').animate({
            scrollTop: 0
          }, 500);
          return false;
        });
      });
    </script>
  </body>
</html>