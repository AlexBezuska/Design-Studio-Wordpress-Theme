<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Design_Studio
*/

get_header(); ?>


<!-- PAGE.PHP -->
<div id="primary" class="content-area">
	<main id="main" class="site-main">


    <div class="hero">
      <div class="container">
        <div class="intro-text">
          <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/DaydreamFarmDesignStudio-Logo-Large-white.png"/>
        </div>
      </div>
    </div>

		<?php include("portfolio.php"); ?>

		<?php include("specialties.php"); ?>

		<?php include("aboutus.php"); ?>


	</main><!-- #main -->
</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
