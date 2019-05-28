<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-light'); ?>>

  <!-- <?php k2b4_navbar_before(); ?>

<nav id="navbar" class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container">

    <?php k2b4_navbar_brand(); ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarDropdown">
      <?php
      wp_nav_menu(array(
        'theme_location'  => 'navbar',
        'container'       => false,
        'menu_class'      => '',
        'fallback_cb'     => '__return_false',
        'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
        'depth'           => 2,
        'walker'          => new k2b4_walker_nav_menu()
      ));
      ?>

      <?php k2b4_navbar_search(); ?>    
    </div>

  </div>
</nav> -->

  <!-- <?php k2b4_navbar_after(); ?> -->
  <div class="container bg-white px-0 pb-0 pt-4">
    <div class="jumbotron pt-5 pb-0 px-0 bg-primary d-flex flex-column">
      <h1 class="h1 px-5"><a href="<?php echo home_url('/'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
      <p class="px-5"><?php echo get_bloginfo('description'); ?></p>
      <nav class="pb-0 justify-content-end mt-auto navbar navbar-expand-md" role="navigation">
        <div class="container">
          <?php
          wp_nav_menu(array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'b4k2-md-navbar',
            'menu_class'        => 'nav nav-tabs',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          ));
          ?>
        </div>
      </nav>
      <nav class="d-md-none p-2 justify-content-end mt-auto navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <button class="navbar-toggler ml-0" type="button" data-toggle="collapse" data-target="#b4k2-navbar" aria-controls="b4k2-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <?php
          wp_nav_menu(array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'b4k2-navbar',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          ));
          ?>
        </div>
      </nav>
    </div>