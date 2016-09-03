<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
 <link href='//fonts.googleapis.com/css?family=Open+Sans|Yanone+Kaffeesatz|Patua+One' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
<link href="//www.ilsevalle.com/css/bootstrap.css" rel="stylesheet">

    <link href="//www.ilsevalle.com/css/style.css" rel="stylesheet">
<link href="//www.ilsevalle.com/css/bootstrap-responsive.css" rel="stylesheet">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
<div class="navbar-wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
            <h1 class="brand"><a href=""><?php bloginfo( 'name' ); ?></a></h1>
            <!--<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>-->
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <nav class="pull-right nav-collapse collapse">
              <ul id="menu-main" class="nav">
                <li><a title="Home" href="//www.ilsevalle.com/index.html#home">Home</a></li>
                <li><a title="blog" href="//www.ilsevalle.com/en/nutrition-blog">Blog</a></li>
                <li><a title="Consulting" href="//www.ilsevalle.com/index.html#consulting">Consulting</a></li>
                <li><a title="Philosophy" href="//www.ilsevalle.com/index.html#philosophy">Philosophy</a></li>
                <li><a title="About" href="//www.ilsevalle.com/index.html#about">About</a></li>
                <li><a title="contact" href="//www.ilsevalle.com/index.html#contact">Contact</a></li>
              </ul>
              <ul id="lang-nav">
		<li>
		  <a href="/en/nutrition-blog" class="selected">EN</a>
		</li>
		<li>
		  <a href="/blog">ES</a>
		</li>
	      </ul>
            </nav>
          </div>
          <!-- /.container -->
        </div>
        <!-- /.navbar-inner -->
      </div>
      <!-- /.navbar -->
    </div>
		<div id="main" class="site-main">