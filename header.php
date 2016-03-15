<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- Icon created by Jake Dunham, you can find all of them, and even more at https://thenounproject.com/JakeDunham/ -->
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div class="wrapper-flex">
<div class="flex-left">
  <a class="logo-nav" href="http://aureliedufour.com"><img src="<?php echo hackeryou_get_thumbnail_url( $post )?>" alt=""></a>
    <div class="line"></div>
    <div class="line"></div>
<!--     <img src=" <?php bloginfo('template_directory')?>/images/AD.png" alt="">
 --> <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
     <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'secondary'
    )); ?>
    </div>



