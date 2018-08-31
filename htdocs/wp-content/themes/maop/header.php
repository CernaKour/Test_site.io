<!DOCTYPE html>
<html <?php language_attributes(); ?>
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
   <header class="my-logo">
   <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
  <span> Тест сайта </span>
  <div id="header">
 <div class="logo1">
  <a href="ссылка_на_главную">
   <img src="img/logo1.jpg" width="38" height="38" />
  </a>
 </div>
</div>
   </header>
   
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<div class="wrapper">
  <ul>
    <li class="facebook"><i class="fa fa-facebook " aria-hidden="true"></i></li>
    <li class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></li>
    <li class="instagram"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></li>
    <li class="google"><i class="fa fa-google fa-2x" aria-hidden="true"></i></li>
    <li class="whatsapp"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></li>
  </ul>
</div>
 
   <nav id="nav1"> <?php wp_nav_menu( array('theme_location' => 'menu1', 'container'=>false, 'depth'=>'1', 'echo'=>'1')); ?> </nav>
  
