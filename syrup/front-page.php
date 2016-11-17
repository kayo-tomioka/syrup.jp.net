<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if(!is_home()){wp_title('-', true, 'right');}bloginfo('name')?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/img/common/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/img/common/apple-touch-icon.png" sizes="180x180">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/font/genericons/genericons.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    <?php wp_head();?>
  </head>
  <body id="top" <?php body_class();?>>
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
      <div id="hero" class="container-wrap">
        <div class="container">
          <div class="container-inner">
            <div class="hero-vision">
              <div class="hero-vision-inner">
                <h2 class="content-headings hero-headings">VISION</h2>
                <p class="hero-text"><strong class="ja">世界中の心と心をつなぐ</strong><strong class="en">Bond our hearts together.</strong></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="mission" class="container">
        <div class="row">
          <div class="col-md-4 headings-block">
            <div class="headings-block-inner">
              <h2 class="content-headings content-headings-left">MISSION</h2>
            </div>
          </div>
          <div class="col-md-8">
            <h3 class="mission-subheadings"><em class="ja">人が動物と共に生きる社会をつくる</em><em class="en">Make a better world through better human-animal bonding.</em></h3>
            <div class="mission-text">
              <p>シロップが目指す「共に生きる社会」とは、「動物が」人のために生きる社会ではありません。人が動物のために、動物が人のために生きる社会です。<br>しかし現状は、家族として迎えた動物を捨てたり、劣悪な飼養環境に置いたり、果ては「殺処分」という、動物の命すら尊重できない社会になっています。<br>シロップは、まず「人が」動物と正しく向き合える社会をつくり、その先の未来として、人と動物が等しく向き合い「共に生きる社会」の実現を目指します。</p>
            </div>
          </div>
        </div>
      </div>
      <div id="members" class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="content-headings content-headings-center">MEMBERS</h2>
          </div>
        </div>
        <div class="row message">
          <div class="col-md-12">
            <h3 class="message-subheadings">インターネットを活用し人と動物の心と心を近付けるサービスを</h3>
          </div>
          <div class="col-md-4 profile-image"><img src="<?php echo get_template_directory_uri();?>/img/index/members_img_okubo_out.png" alt="" class="img-retina img-over"></div>
          <div class="col-md-8">
            <div class="message-text">
              <p>人と共に、家族の一員として暮らしてきたペットたち。遠い昔から変わらず、私たちに癒やしを与え、そして命の豊かさを教えてくれています。<br>もっとペットとコミュニケーションを取り、気持ちを通い合わせることができたらいいのに……。<br>そんな思いを込め、インターネットを使った「人と動物の心と心を近付けるサービスづくり」に取り組んでいます。<br>当面の課題は、殺処分問題と健康管理です。動物が大好きでペット業界に携わるすべての人たちと手を取り、人と動物の幸せな未来を目指していきます。</p>
            </div>
            <div class="profile">
              <h4 class="profile-headings">共同創業者 兼 CEO 大久保 泰介</h4>
              <div class="profile-text">
                <p>2012年同志社大学経済学部卒。大手IT系企業にてグローバル・新卒採用プロモーション、採用戦略、財務管理会計を経験。大学在学中に英・ロンドンでサッカーをする傍ら、ユニクロで+Jプロジェクト等のプロモーション業務に携わる。日本において人とペットが一緒に暮らしづらい環境であることを実感し、2015年にシロップを創業。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row message rtl">
          <div class="col-md-12">
            <h3 class="message-subheadings">人と動物の共生を獣医師の立場から取り組みたい</h3>
          </div>
          <div class="col-md-4 profile-image"><img src="<?php echo get_template_directory_uri();?>/img/index/members_img_sato_out.png" alt="" class="img-retina img-over"></div>
          <div class="col-md-8">
            <div class="message-text">
              <p>動物は私たちの心や生活を豊かにしてくれる存在です。しかし、私たちは「人と動物の共生」において、さまざまな問題を抱えています。<br>それらを解決するためには、動物に関わる人たちの努力だけでなく、いろいろな分野からの協力も必要です。<br>私はその一つが「インターネット」にあると考えています。例えばインターネットの力によって保護犬猫の譲渡が進み、たくさんの犬猫が幸せに暮らせるようになりました。<br>こういった取り組みは他の問題解決にも生かしていけるはずです。私は獣医師の立場から、そのための取り組みを進めていきます。</p>
            </div>
            <div class="profile">
              <h4 class="profile-headings">社外取締役 兼 獣医師 佐藤 貴紀</h4>
              <div class="profile-text">
                <p>麻布大学獣医学部卒。2007年にdogdays東京ミッドタウンクリニック副院長に就任。2008年には白金高輪動物病院院長に就任。2011年、中央アニマルクリニックを附属病院として設立し、総院長に就任（現任）。専門は「循環器」で、全国に約60人しかいないと言う「獣医循環器学会認定医」。代表大久保の想いに共感し、シロップに社外取締役として参画。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row members">
          <div class="col-md-4 message">
            <div class="profile">
              <div class="profile-image"><img src="<?php echo get_template_directory_uri();?>/img/index/members_img_ichikawa_out.png" alt="" class="img-retina img-over"></div>
              <h3 class="profile-headings">共同創業者 兼 CTO 市川 俊介</h3>
              <div class="profile-text">
                <p>2013年名古屋大学大学院工学研究科量子工学修士専攻卒。大手IT系企業にて、ソーシャルゲームの企画、開発、分析、運用を経験。大久保と共にシロップを設立、共同創業者 兼 CTOに就任。</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 message">
            <div class="profile">
              <div class="profile-image"><img src="<?php echo get_template_directory_uri();?>/img/index/members_img_watanabe_out.png" alt="" class="img-retina img-over"></div>
              <h3 class="profile-headings">エンジニア 渡邊 直人</h3>
              <div class="profile-text">
                <p>2013年筑波大学大学院図書館情報メディア研究科修了。エンジニアリングの力で世界を変えるため、人間だけでなく動物にもコミットしようとシロップに参画。</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 message">
            <div class="profile">
              <div class="profile-image"><img src="<?php echo get_template_directory_uri();?>/img/index/members_img_yamamoto_out.png" alt="" class="img-retina img-over"></div>
              <h3 class="profile-headings">ペトこと編集長 山本 恵太</h3>
              <div class="profile-text">
                <p>2009年慶應義塾大学総合政策学部卒。2016年8月より現職。2015年より「ペトこと」の立ち上げに参画。 以前はWebメディアで編集記者、IT系企業で広報に従事（PRSJ認定PRプランナー）。大学在学中に関わった盲導犬育成の支援活動がきっかけとなり動物好きに。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row partners">
          <div class="col-md-3 col-xs-6 message">
            <div class="profile">
              <div class="profile-image"><img src="<?php echo get_template_directory_uri();?>/img/index/members_img_cork.png" alt="" class="img-retina"></div>
              <h3 class="profile-headings">社員犬 コルク</h3>
              <div class="profile-text">
                <p>保護犬出身のコーギー。2016年2月28日生まれ。大人しいようでわんぱく小僧。</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-xs-6 message">
            <div class="profile">
              <div class="profile-image"><img src="<?php echo get_template_directory_uri();?>/img/index/members_img_shiromaru.png" alt="" class="img-retina"></div>
              <h3 class="profile-headings">社員犬 しろまる</h3>
              <div class="profile-text">
                <p>シュナウザーとマルチーズのMIX犬。2015年2月25日生まれ。黒いのにしろまる。2足歩行が得意な小坊主。</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-xs-6 message">
            <div class="profile">
              <div class="profile-image"><img src="<?php echo get_template_directory_uri();?>/img/index/members_img_marimo.png" alt="" class="img-retina"></div>
              <h3 class="profile-headings">社員犬 まりも</h3>
              <div class="profile-text">
                <p>保護県出身のシュナウザー。大人しい</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-xs-6 message">
            <div class="profile">
              <div class="profile-image"><img src="<?php echo get_template_directory_uri();?>/img/index/members_img_lismo.png" alt="" class="img-retina"></div>
              <h3 class="profile-headings">社員猫 リズモ</h3>
              <div class="profile-text">
                <p>埼玉の路上出身。2012年7月1日生まれ（推定）。ノルウェージャンの血が入っている気がする。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row member-all">
          <div class="col-md-6">
            <div class="member-image member-image01"><img src="<?php echo get_template_directory_uri();?>/img/index/members_img_all_01.png" alt=""></div>
          </div>
          <div class="col-md-6">
            <div class="member-image member-image02"><img src="<?php echo get_template_directory_uri();?>/img/index/members_img_all_02.png" alt=""></div>
          </div>
        </div>
      </div>
      <div id="service" class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="content-headings content-headings-center">SERVICE</h2>
          </div>
        </div>
        <div class="row service-item">
          <div class="col-md-12">
            <h3 class="service-headings">PET RIBBON</h3>
          </div>
          <div class="col-md-8"><img src="<?php echo get_template_directory_uri();?>/img/index/service_img_petribbon.png" alt="" class="img-retina img-shodow service-img-item"></div>
          <div class="col-md-4">
            <div class="service-text">
              <p>保護犬・保護猫と飼いたい人をつなぐマッチングサービス。プロフィールを入力すると、自分にぴったりの運命の犬や猫と出逢うことができます。<br>保護団体もかんたんに団体の活動情報を発信できたり、保護犬や保護猫の募集から譲渡までをスムーズに進めることができ、保護以外の活動をサポートします。<br>犬や猫のことをきちんと考えて飼い、保護犬や保護猫から飼い始めることが当たり前になる幸せな社会を実現します。</p>
            </div>
            <ul class="service-link">
              <li><a href="#" target="_blank" title="PET RIBBON" class="button-primary"><span class="gicon gicon-external"></span><span>Go to the Site</span></a></li>
            </ul>
          </div>
        </div>
        <div class="row service-item">
          <div class="col-md-12">
            <h3 class="service-headings">ペトこと</h3>
          </div>
          <div class="col-md-8"><img src="<?php echo get_template_directory_uri();?>/img/index/service_img_petkoto.png" alt="" class="img-retina img-shodow service-img-item"></div>
          <div class="col-md-4">
            <div class="service-text">
              <p>獣医をはじめ、動物に関わる専門家が執筆するメディアです。信頼ある正しい情報を発信することで、ペットが健康に長生きできる社会を実現します。<br>専門医への相談コーナーや、編集部オリジナルの取材記事も提供しています。</p>
            </div>
            <ul class="service-link">
              <li><a href="#" target="_blank" title="ペトコト" class="button-primary"><span class="gicon gicon-external"></span><span>Go to the Site</span></a></li>
            </ul>
          </div>
        </div>
        <div class="row service-item">
          <div class="col-md-12">
            <h3 class="service-headings">HONEY</h3>
          </div>
          <div class="col-md-8"><img src="<?php echo get_template_directory_uri();?>/img/index/service_img_honey.png" alt="" class="img-retina img-shodow service-img-item"></div>
          <div class="col-md-4">
            <div class="service-text">
              <p>ペットと飼い主の思い出管理サービス。ペットとの大切な思い出写真や動画をカレンダーにまとめて保存、家族で共有、保存した写真はフォトカードの作成もできます。<br>他にも日々の散歩やごはんなどのライフログを管理できます。大切なペットライフが一層楽しくなります。</p>
            </div>
            <ul class="service-link">
              <li><a href="#" target="_blank" title="HONEY" class="button-primary"><span class="gicon gicon-external"></span><span>Go to the Site</span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div id="company" class="container">
        <div class="row">
          <div class="col-md-4 headings-block">
            <div class="headings-block-inner">
              <h2 class="content-headings content-headings-left">COMPANY</h2>
            </div>
          </div>
          <div class="col-md-8">
            <table class="company-data">
              <tr>
                <th scope="row">社名</th>
                <td>株式会社シロップ</td>
              </tr>
              <tr>
                <th scope="row">事業内容</th>
                <td>
                  <ul>
                    <li>ペットに関わるインターネット関連サービス</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <th scope="row">設立</th>
                <td>2015年3月23日</td>
              </tr>
              <tr>
                <th scope="row">代表者</th>
                <td>代表取締役社長 大久保 泰介</td>
              </tr>
              <tr>
                <th scope="row">所在地</th>
                <td>東京都渋谷区広尾3-17-7</td>
              </tr>
              <tr>
                <th scope="row">従業員数</th>
                <td>約10名（2016年8月時点）正社員以外含む</td>
              </tr>
            </table>
          </div>
        </div>
        <div id="access" class="row">
          <div class="col-md-12">
            <h3 class="reader">ACCESS</h3>
            <div class="map-item">
              <div id="map-canvas"></div>
              <div class="map-link">
                <ul>
                  <li><a href="https://goo.gl/maps/J2cAY4hqEpQ2" target="_blank" class="button-primary"><span class="gicon gicon-external"></span><span>View Google Maps</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="contact" class="container">
        <div class="row">
          <div class="col-md-4 headings-block">
            <div class="headings-block-inner">
              <h2 class="content-headings content-headings-right">CONTACT</h2>
            </div>
          </div>
          <div class="col-md-8">
            <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>
          </div>
        </div>
      </div>
      <div id="news" class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="content-headings content-headings-center">NEWS</h2>
          </div>
        </div>
        <div class="row">
          <?php query_posts('showposts=3'); ?>
          <?php
            if(have_posts()):
              while(have_posts()): the_post();
          ?>
            <div class="col-md-4">
              <div class="news-articles-item">
                <a href="<?php the_permalink(); ?>">
                  <div class="col-md-12 col-xs-4">
                    <?php if(has_post_thumbnail()): ?>
                      <?php the_post_thumbnail('top_thumbnail'); ?>
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri();?>/img/news/share_thumb_syrup.png" alt="" class="img-retina news-image-item img-shodow">
                    <?php endif; ?>
                  </div>
                  <div class="col-md-12 col-xs-8">
                    <div class="news-title">
                      <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                      <p><?php the_title(); ?></p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          <?php
              endwhile;
            endif;
          ?>
        </div>
        <div class="row">
          <div class="col-md-12">
            <ul class="news-link">
              <li><a href="news/" class="button-primary"><span class="gicon gicon-next"></span><span>View All</span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div id="media" class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="content-headings">MEDIA COVERAGE</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 media-list-item"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/index/media_thumb_01.png" alt="" class="img-retina"></a></div>
          <div class="col-md-3 media-list-item"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/index/media_thumb_01.png" alt="" class="img-retina"></a></div>
          <div class="col-md-3 media-list-item"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/index/media_thumb_01.png" alt="" class="img-retina"></a></div>
          <div class="col-md-3 media-list-item"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/index/media_thumb_01.png" alt="" class="img-retina"></a></div>
        </div>
      </div>
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
      wp_enqueue_script('matchHeight', get_template_directory_uri() . '/js/jquery.matchHeight.js');
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
      $(function() {
        $('.profile-text').matchHeight();
      });
    </script>
  </body>
</html>