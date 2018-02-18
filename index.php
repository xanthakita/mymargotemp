<?php
require_once __DIR__ . '/vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '138484903495684',
  'app_secret' => 'c26c0220164e21d2df595048431b19ce',
  'default_graph_version' => 'v2.11',
  ]);

$accessToken = '138484903495684|mreViJjw_fCCbrBjOR9hKNSEb4k';

$fb->setDefaultAccessToken($accessToken);
$id='230941890252535';
$instagram_id = '1676498949030148';
$mobile_id = '811654502181268';
$allphotos_id = '290876794259044';
$ig_photos = $fb->get("/$instagram_id/photos?fields=images&width", $accessToken)->getGraphEdge()->asArray();
$ig_titles = $fb->get("/$instagram_id/photos?fields=name", $accessToken)->getGraphEdge()->asArray();
$mu_photos = $fb->get("/$mobile_id/photos?fields=images&width", $accessToken)->getGraphEdge()->asArray();
$mu_titles = $fb->get("/$mobile_id/photos?fields=images&width", $accessToken)->getGraphEdge()->asArray();
$all_photos = $fb->get("/$allphotos_id/photos?fields=images&width", $accessToken)->getGraphEdge()->asArray();
$all_titles = $fb->get("/$allphotos_id/photos?fields=images&width", $accessToken)->getGraphEdge()->asArray();


    // foreach($photos as $photo){
    //     echo "<br><img src='{$photo['images'][3]['source']}' width='25%' />".PHP_EOL;//Get largest by 0 index
    // }
try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get(
    '/loris.lovely.lashes.muncie/videos',
    $accessToken
  )->getGraphEdge()->asArray();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
// $graphNode = $response->getGraphNode();
/* handle the result */
//https://www.facebook.com/loris.lovely.lashes.muncie/videos/1973377869342253/

// foreach($response as $video)
// {
  $vid = "https://www.facebook.com/loris.lovely.lashes.muncie/videos/".$response[0]['id']."/";
  $description=$response[0]['description'];

// }

?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>Lori's Lovely Lashes | Home</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="title" content="Lori's Lovely Lashes">
  <meta name="webmaster" content="Jonathan Wagner">
  <meta name="description" content="Margo - Responsive HTML5 Template">
  <meta name="author" content="GrayGrids">
  <meta name="keywords" content="spray tan, tanning, self tanning, hand held spray tan, Sjolie tanning, tan, bronze tanning, lash boost, Rhodan and Fields, RF representative, skin care">

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Revolution Slider -->
  <link rel="stylesheet" href="css/settings.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

  <!-- Color Defult -->
  <link rel="stylesheet" type="text/css" href="css/colors/red.css" media="screen" />
  
  <!-- Fav icon -->
  <link rel=icon href=images/favicon.png sizes="16x16" type="image/png">
  <link rel=icon href=images/favicon.ico sizes="16x16 32x32" type="image/vnd.microsoft.icon">
  <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="images/favicon.png" sizes="32x32">
 

  <!-- Margo JS  -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/jquery.migrate.js"></script>
  <script type="text/javascript" src="js/modernizrr.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/jquery.appear.js"></script>
  <script type="text/javascript" src="js/count-to.js"></script>
  <script type="text/javascript" src="js/jquery.textillate.js"></script>
  <script type="text/javascript" src="js/jquery.lettering.js"></script>
  <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="js/smooth-scroll.js"></script>
  <script type="text/javascript" src="js/skrollr.js"></script>
  <script type="text/javascript" src="js/jquery.parallax.js"></script>
  <script type="text/javascript" src="js/mediaelement-and-player.js"></script>
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>   
  <script type="text/javascript" src="js/style.changer.js"></script>      
  <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>  
  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=138484903495684&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <!-- Full Body Container -->
  <div id="container">

    <!-- Start Header Section -->
    <header class="clearfix">
      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <!-- Start Contact Info -->
              <ul class="contact-details">
                <li><a target="_blank" href="https://www.google.com/search?q=2831+N.+Oakwood+Ave%2C+Muncie%2C+IN+47304&oq=2831+N.+Oakwood+Ave%2C+Muncie%2C+IN+47304&aqs=chrome..69i57.396j0j7&sourceid=chrome&ie=UTF-8"><i class="fa fa-map-marker"></i> 2831 N. Oakwood Ave, Muncie, IN 47304</a>
                </li>
                <li><a href="mailto:lorislovelylashes@gmail.com?subject=Lovely%20lashes%20web%20site%20email"><i class="fa fa-envelope-o"></i> lorislovelylashes@gmail.com</a>
                </li>
                <li><a href="tel:+17657300370"><i class="fa fa-phone"></i> 1-765-730-0370</a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-5">
              <!-- Start Social Links -->
              <ul class="social-list">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/loris.lovely.lashes.muncie/"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="https://www.instagram.com/lorislovelylashes"><i class="fa fa-instagram"></i></a>
                </li>
              </ul>
              <!-- End Social Links -->
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.php">
              <img alt="" src="images/lll_logo_2.png" >
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right"> 

<!--               <li>
                <a class="active" href="#">Pages</a>
                <ul class="dropdown"> -->
                  <li><a class="active" href="#">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="services.html">Book Your Service</a></li>

<!--                 </ul>
              </li> -->

<!--               <li>
                <a href="blog.html">Blog</a>
                <ul class="dropdown">
                  <li><a href="blog.html">Blog - right Sidebar</a></li>
                  <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
                  <li><a href="single-post.html">Blog Single Post</a></li>
                </ul>
              </li> -->
              <li><a href="contact.html">Contact</a></li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">

<!--           <li>
            <a class="active" href="#">Pages</a>
            <ul class="dropdown"> -->
              <li><a class="active" href="#">Home</a>
              <li><a href="about.html">About</a>
              </li>
              <li><a href="services.html">Book Your Service</a>
              </li>
<!-- 
            </ul>
          </li> -->


          <!-- <li>
            <a href="blog.html">Blog</a>
            <ul class="dropdown">
              <li><a href="blog.html">Blog - right Sidebar</a>
              </li>
              <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
              </li>
              <li><a href="single-post.html">Blog Single Post</a>
              </li>
            </ul>
          </li> -->
          <li>
            <a href="contact.html">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->
      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->


    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:75px 0; background: url(images/banner7.png) center #f9f9f9;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Lori's Lovely Lashes</h2>
            <p>Be lashFully You!</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="index.php">Home</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->
        <div class="page-content">


          <div style="margin: 5px 15px;" class="row">
            <div class="col-md-3 col-1">
            </div>
            <div class="col-md-6 col-2">

              <!-- Classic Heading -->
              <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
                <h1>Welcome To Lori's Lovely Lashes</h1>
              </div>

              <!-- Some Text -->
              <p>As the owner of Lori's Lovely Lashes, I never expected that I would grow to where we are today! I started this as a hobby and now it has become a full blown business! We are a faith based company and I have endeavored to put God first in my daily business activities. </p>
              <p>The business keeps 3 lash artists busy and we are hoping to grow even more in the next few months. As the lash industry grows and expands to new and improved technology, it will allow us to offer the best and latest products and services. </p>
              <p>Presently we offer a variety of Lash services, classic, volume and fill-in options as well as pre-built volume fans and bottom lash extentions services. We also offer a Lash Removal service which protects your natural lashes if extentions need removed. Additional services include hand and foot "therapy" treatments, and Sjolie spray tanning. We also offer a full line of lash care products along with a full line of tanning products, from self tanners to tan extenders lotions. </p>
              <p>The future looks bright as in a few months we plan to open a boutique to add to the experience of being the best woman you can be! </p>
              <p><strong>Be lashFully You!</strong></p>
              <br>
              <p>Lori Lloyd</p>

            </div>
          </div>
        </div>

 


    <!-- Start Portfolio Section -->
    <div class="section full-width-portfolio" style="border-top:0; border-bottom:0; background:#fff;">

      <!-- Start Big Heading -->
      <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
        <h1>This is Our Latest <strong>Work</strong></h1>
      </div>
      <!-- End Big Heading -->

      <p class="text-center">Some of our lovely Clients and the lash work we have done for them.</p>

      <!-- Start Recent Projects Carousel -->
      <ul id="portfolio-list" data-animated="fadeIn">
        <li>
          <img src="images/recent1.png" alt="" />
          <div class="portfolio-item-content">
            <span class="header"></span>
            <p class="body"></p>
          </div>
          <div class="icon-list">
            <!-- <a class="link" href="single-project.html"><i class="fa fa-link"></i></a> -->
            <a class="zoom lightbox" href="images/recent1.png"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="images/recent2.png" alt="" />
          <div class="portfolio-item-content">
            <span class="header"></span>
            <p class="body"></p>
          </div>
          <div class="icon-list">
            <!-- <a class="link" href="single-project.html"><i class="fa fa-link"></i></a> -->
            <a class="zoom lightbox" href="images/recent2.png"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="images/recent6.png" alt="" />
          <div class="portfolio-item-content">
            <span class="header"></span>
            <p class="body"></p>
          </div>
          <div class="icon-list">
            <!-- <a class="link" href="single-project.html"><i class="fa fa-link"></i></a> -->
            <a class="zoom lightbox" href="images/recent6.png"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <!-- <li> -->
          <!-- <img src="images/recent10.png" alt="" /> -->
          <!-- <div class="portfolio-item-content"> -->
            <!-- <span class="header"></span> -->
            <!-- <p class="body"></p> -->
          <!-- </div> -->
          <!-- <div class="icon-list"> -->
            <!-- <a class="link" href="single-project.html"><i class="fa fa-link"></i></a> -->
            <!-- <a class="zoom lightbox" href="images/recent10.png"><i class="fa fa-search-plus"></i></a> -->
          <!-- </div>  -->
        <!-- </li> -->
<?php
//instagrapm
    for ($x=0; $x<3; $x++)
    {
      echo "<li>";
          echo "<img src='{$ig_photos[$x]['images'][3]['source']}' width='33%' />";
          echo "<div class='portfolio-item-content'>";
            echo "<span class='header'></span>";
            echo "<p class='body'>{$ig_titles[$x]['name']}</p>";
          echo "</div>";
          echo "<div class='icon-list'>";
          echo "<a class='zoom lightbox' href=".$ig_photos[$x]['images'][0]['source']."><i class='fa fa-search-plus'></i></a>";
          echo "</div> ";
        echo "</li>";
    }
    //mobile upload
    for ($x=0; $x<3; $x++)
    {
      echo "<li>";
          echo "<img src='{$mu_photos[$x]['images'][3]['source']}' width='33%' />";
          echo "<div class='portfolio-item-content'>";
            echo "<span class='header'></span>";
            echo "<p class='body'>{$mu_titles[$x]['name']}</p>";
          echo "</div>";
          echo "<div class='icon-list'>";
          echo "<a class='zoom lightbox' href=".$mu_photos[$x]['images'][0]['source']."><i class='fa fa-search-plus'></i></a>";
          echo "</div> ";
        echo "</li>";
    }
    //all_photo
    for ($x=0; $x<3; $x++)
    {
      echo "<li>";
          echo "<img src='{$all_photos[$x]['images'][3]['source']}' width='33%' />";
          echo "<div class='portfolio-item-content'>";
            echo "<span class='header'></span>";
            echo "<p class='body'>{$all_titles[$x]['name']}</p>";
          echo "</div>";
          echo "<div class='icon-list'>";
          echo "<a class='zoom lightbox' href=".$all_photos[$x]['images'][0]['source']."><i class='fa fa-search-plus'></i></a>";
          echo "</div> ";
        echo "</li>";
    }
?>
<!-- temporarily cut out images paste back here if needed -->

      </ul>

      <!-- End Recent Projects Carousel -->


    </div>
    <!-- End Portfolio Section -->

    <!-- Start Videos Section -->
    <div class="section full-width-portfolio" style="border-top:0; border-bottom:0; background:#fff;">

      <!-- Start Big Heading -->
      <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
        <h1>Our Latest <strong>Informational Video</strong></h1>
      </div>
      <!-- End Big Heading -->

      <p class="text-center">Recent videos <a href="https://www.facebook.com/pg/loris.lovely.lashes.muncie/videos/">see all videos on FaceBook.</a></p>
      
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
      <ul data-animated="fadeIn">
        <li>
          <div><p class="text-center"><?php echo "<h3>".$description."</h3>"; ?></p></div>
<div class="fb-video" data-href="<?php echo $vid; ?>"  data-show-text="false"><blockquote cite="<?php echo $vid; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $vid; ?>"></a><p><?php echo $description; ?></p>Posted by <a href="https://www.facebook.com/loris.lovely.lashes.muncie/">Lori&#039;s Lovely Lashes</a> on Monday, February 12, 2018</blockquote></div>
        </li>
      </ul>
    </div>

    </div>
    <!-- End Videos Section -->

    <!-- Start Testimonials Section -->
    <!-- <div> -->
      <!-- <div class="container"> -->
        <!-- <div class="row"> -->
          <!-- <div class="col-md-8"> -->
<!--  -->
            <!-- Start Recent Posts Carousel -->
            <!-- <div class="latest-posts"> -->
              <!-- <h4 class="classic-title"><span>Latest News</span></h4> -->
              <!-- <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="2"> -->
<!--  -->
                <!-- Posts 1 -->
                <!-- <div class="post-row item"> -->
                  <!-- <div class="left-meta-post"> -->
                    <!-- <div class="post-date"><span class="day">28</span><span class="month">Dec</span></div> -->
                    <!-- <div class="post-type"><i class="fa fa-picture-o"></i></div> -->
                  <!-- </div> -->
                  <!-- <h3 class="post-title"><a href="#">Standard Post With Image</a></h3> -->
                  <!-- <div class="post-content"> -->
                    <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p> -->
                  <!-- </div> -->
                <!-- </div> -->
<!--  -->
                <!-- Posts 2 -->
                <!-- <div class="post-row item"> -->
                  <!-- <div class="left-meta-post"> -->
                    <!-- <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div> -->
                    <!-- <div class="post-type"><i class="fa fa-picture-o"></i></div> -->
                  <!-- </div> -->
                  <!-- <h3 class="post-title"><a href="#">Link Post</a></h3> -->
                  <!-- <div class="post-content"> -->
                    <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p> -->
                  <!-- </div> -->
                <!-- </div> -->
<!--  -->
                <!-- Posts 3 -->
                <!-- <div class="post-row item"> -->
                  <!-- <div class="left-meta-post"> -->
                    <!-- <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div> -->
                    <!-- <div class="post-type"><i class="fa fa-picture-o"></i></div> -->
                  <!-- </div> -->
                  <!-- <h3 class="post-title"><a href="#">Iframe Video Post</a></h3> -->
                  <!-- <div class="post-content"> -->
                    <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p> -->
                  <!-- </div> -->
                <!-- </div> -->
<!--  -->
                <!-- Posts 4 -->
                <!-- <div class="post-row item"> -->
                  <!-- <div class="left-meta-post"> -->
                    <!-- <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div> -->
                    <!-- <div class="post-type"><i class="fa fa-picture-o"></i></div> -->
                  <!-- </div> -->
                  <!-- <h3 class="post-title"><a href="#">Gallery Post</a></h3> -->
                  <!-- <div class="post-content"> -->
                    <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p> -->
                  <!-- </div> -->
                <!-- </div> -->
<!--  -->
                <!-- Posts 5 -->
                <!-- <div class="post-row item"> -->
                  <!-- <div class="left-meta-post"> -->
                    <!-- <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div> -->
                    <!-- <div class="post-type"><i class="fa fa-picture-o"></i></div> -->
                  <!-- </div> -->
                  <!-- <h3 class="post-title"><a href="#">Standard Post without Image</a></h3> -->
                  <!-- <div class="post-content"> -->
                    <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p> -->
                  <!-- </div> -->
                <!-- </div> -->
<!--  -->
                <!-- Posts 6 -->
                <!-- <div class="post-row item"> -->
                  <!-- <div class="left-meta-post"> -->
                    <!-- <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div> -->
                    <!-- <div class="post-type"><i class="fa fa-picture-o"></i></div> -->
                  <!-- </div> -->
                  <!-- <h3 class="post-title"><a href="#">Iframe Audio Post</a></h3> -->
                  <!-- <div class="post-content"> -->
                    <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p> -->
                  <!-- </div> -->
                <!-- </div> -->
<!--  -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- End Recent Posts Carousel -->
<!--  -->
          <!-- </div> -->
<!--  -->
          <!-- <div class="col-md-4"> -->
<!--  -->
            <!-- Classic Heading -->
            <!-- <h4 class="classic-title"><span>Testimonials</span></h4> -->
<!--  -->
            <!-- Start Testimonials Carousel -->
            <!-- <div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="1"> -->
              <!-- Testimonial 1 -->
              <!-- <div class="classic-testimonials item"> -->
                <!-- <div class="testimonial-content"> -->
                  <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                <!-- </div> -->
                <!-- <div class="testimonial-author"><span>John Doe</span> - Customer</div> -->
              <!-- </div> -->
              <!-- Testimonial 2 -->
              <!-- <div class="classic-testimonials item"> -->
                <!-- <div class="testimonial-content"> -->
                  <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                <!-- </div> -->
                <!-- <div class="testimonial-author"><span>John Doe</span> - Customer</div> -->
              <!-- </div> -->
              <!-- Testimonial 3 -->
              <!-- <div class="classic-testimonials item"> -->
                <!-- <div class="testimonial-content"> -->
                  <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                <!-- </div> -->
                <!-- <div class="testimonial-author"><span>John Doe</span> - Customer</div> -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- End Testimonials Carousel -->
<!--  -->
          <!-- </div> -->
        <!-- </div> -->
      <!-- </div> -->
    <!-- </div> -->
    <!-- End Testimonials Section -->


    


    
    <!-- Start Footer Section -->
    <footer>
      <div class="container">
        <div class="row footer-widgets">


          <!-- Start Subscribe & Social Links Widget -->
          <div class="col-md-3 col-xs-12">
            <!-- <div class="footer-widget mail-subscribe-widget">
              <h4>Get in touch<span class="head-line"></span></h4>
              <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
              <form class="subscribe">
                <input type="text" placeholder="mail@example.com">
                <input type="submit" class="btn-system" value="Send">
              </form>
            </div> -->
            <div class="footer-widget social-widget">
              <h4>Follow Us<span class="head-line"></span></h4>
              <ul class="social-icons">
                <li>
                  <a class="facebook" href="https://www.facebook.com/loris.lovely.lashes.muncie/"><i class="fa fa-facebook"></i></a>
                </li>
                
                <li>
                  <a class="instgram" href="https://www.instagram.com/lorislovelylashes"><i class="fa fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->


         


          <div class="col-md-3 col-xs-12">
            <br>
          </div>
          


          <!-- Start Contact Widget -->
          <div class="col-md-3 col-xs-12">
            <div class="footer-widget contact-widget">
              <h4><img src="images/lll_logo_2.png" class="img-responsive" alt="Footer Logo" /></h4>
              <p>Please feel free to contact us at Lori's Lovely Lashes via phone, email, or facebook message</p>
              <ul>
                <li><span>Phone Number:</span> 1-765-730-0370</li>
                <li><span>Email:</span> lorislovelylashes@gmail.com</li>
                <li><span>Facebook:</span> https://www.facebook.com/loris.lovely.lashes.muncie/</li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->


        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-6">
              <p>Theme Copyright © 2016 Margo - Designed &amp; Developed by <a href="http://graygrids.com">GrayGrids</a></p>
              <p>Page Copyright © 2018 Lori's Lovely Lashes &amp; Developed by Wild Bunch Productions</p>
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-6">
              <ul class="footer-nav">
                <!-- <li><a href="#">Sitemap</a>
                </li> -->
                <li><a href="privacy.html">Privacy Policy</a>
                </li>
                <li><a href="contact.html">Contact</a>
                </li>
              </ul>
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
    <!-- End Footer Section -->


  </div>
  <!-- End Full Body Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <div id="loader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>


  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>
