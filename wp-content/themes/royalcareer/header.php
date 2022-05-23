<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Royal Career</title>
    <link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/images/favicon.png">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/owl.theme.default.min.css">
    <?php wp_head(); ?>
</head>
<style></style>

<body <?php body_class(); ?>>
      <!-- TOP BAR START-->
      <div class="top-bar">
         <p> <img class="speaker-img" src="<?php echo get_bloginfo('template_url'); ?>/images/top-b-icon.png" alt="icon"> Admission Open for  2021 Session. <a href="javascript:void(0);">Click Here</a>  for programme details.</p>
      </div>
      <div class="contact-bar">
         <div class="container-fluid">
            <div class="email">
               <div class="icon">
                  <i class="fa fa-paper-plane" aria-hidden="true"></i>
               </div>
               <div class="text">
                  <p><?php echo get_option('email');?></p>
               </div>
            </div>
            <div class="email phone">
               <div class="icon">
                  <i class="fa fa-phone" aria-hidden="true"></i>
               </div>
               <div class="text">
                  <p>Call Us: <?php echo get_option('phone');?></p>
               </div>
            </div>
         </div>
      </div>
      <!-- TOP BAR END -->
      <!-- NAVBAR START -->
      <nav class="navbar navbar-expand-lg">
		  <a class="navbar-brand" href="<?php echo site_url();?>">
             <?php $custom_logo_id = get_theme_mod('custom_logo' ); ?>
             <?php $logo = wp_get_attachment_image_src( $custom_logo_id ,'full' ); ?>
             <img src="<?php echo $logo[0]; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
          </a>  
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"> <i class="fa fa-bars" aria-hidden="true"></i></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">    
            </ul>
            <div class="form-inline my-2 my-lg-0">
                 <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'navbar-nav','container'     => '',  ) ); ?>
            </div>
         </div>
      </nav>
      <!-- NAVBAR END -->