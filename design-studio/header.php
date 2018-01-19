<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Design_Studio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daydream Farm Design Studio</title>


    <link href="<?php echo get_stylesheet_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="<?php echo get_stylesheet_directory_uri(); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<link href="https://fonts.googleapis.com/css?family=Vollkorn+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">

    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">


  </head>

  <body id="page-top">

		<!-- HEADER.PHP -->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
					<img class="header-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/DaydreamFarmDesignStudio-Logo-Small.png"/>
				</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
						</li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#specialties">Specialties</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#aboutus">About Us</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
