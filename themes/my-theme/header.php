<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
  <div class="header-container">

    <!-- Logo -->
    <div class="logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Ohana Clinic">
      </a>
    </div>

    <!-- Navigation -->
    <nav class="main-nav">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'primary_menu',
          'container' => false,
          'menu_class' => 'nav-menu'
        ));
      ?>
    </nav>

    <!-- Right actions -->
    <div class="header-right">
      <div class="phone">
        📞 <a href="tel:0339873090">03-3987-3090</a>
      </div>
      <a href="#" class="booking-btn">
        📅 WEB BOOKING
      </a>
    </div>
    

  </div>
</header>
