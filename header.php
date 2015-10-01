<?php
/**
 * The header for our theme.
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  
  <div class="arrow-down"></div>
  <div class="main-content">  
  
    <div class="title">
      <h1>Megan Smith Psychotherapy, PC</h1>
      <img class="border" src="http://localhost:8888/MeganSmith/wordpress-megan-smith/wp-content/uploads/2015/09/text-divider-diamond.png"> 
    </div>

    <nav class="nav">
      <?php wp_nav_menu(array(
      'theme_location'  => 'primary',
      'container'       => false,
      'menu_id'         => 'menu',
      'before'          => '',
      'after'           => '',
      'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s<div class="clear"></div></ul>',
      'depth'           => 0,
      'walker'          => ''
    )); ?>
    
    <span class="corner-left"></span>
    <span class="corner-right"></span>
	</nav>