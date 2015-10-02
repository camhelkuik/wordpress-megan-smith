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
      <img class="border" src="http://localhost:8888/MeganSmith/wordpress-megan-smith/wp-content/uploads/2015/10/1024px-Decorative_text_divider_3.svg_.png">
    </div>

    <nav  id="menu" role="navigation" class="nav" >
  
<?php wp_nav_menu(array(
	'menu' => 'Main Menu', 
	'container_id' => 'cssmenu', 
	'walker' => new CSS_Menu_Walker()
)); ?>
     
    <span class="corner-left"></span>
    <span class="corner-right"></span>
  </nav>
 

  
  