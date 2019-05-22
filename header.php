<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-light'); ?>>

<!-- <?php k2b4_navbar_before();?>

<nav id="navbar" class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container">

    <?php k2b4_navbar_brand();?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarDropdown">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'navbar',
          'container'       => false,
          'menu_class'      => '',
          'fallback_cb'     => '__return_false',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new k2b4_walker_nav_menu()
        ) );
      ?>

      <?php k2b4_navbar_search();?>    
    </div>

  </div>
</nav> -->

<!-- <?php k2b4_navbar_after();?> -->
<div class="container bg-white px-0 pb-0 pt-4">
  <div class="jumbotron pt-5 pb-0 px-0 bg-primary d-flex flex-column">
      <h1 class="h1 px-5"><?php echo get_bloginfo( 'name' ); ?></h1>
      <p class="px-5"><?php echo get_bloginfo( 'description' ); ?></p>
      <ul class="d-none p-0 d-md-flex nav nav-tabs mt-auto" role="tablist"> 
          <li class="nav-item"> 
              <a class="nav-link active" href="#" data-toggle="tab" role="tab" aria-controls="" aria-expanded="true">Home</a> 
          </li>                     

          <li class="nav-item"> 
              <a class="nav-link" href="#" data-toggle="tab" role="tab" aria-controls="" aria-expanded="true">Profile</a> 
          </li>                     

          <li class="nav-item"> 
              <a class="nav-link" href="#" data-toggle="tab" role="tab" aria-controls="" aria-expanded="true">Messages</a> 
          </li>                     

          <li class="nav-item"> 
              <a class="nav-link" href="#" data-toggle="tab" role="tab" aria-controls="" aria-expanded="true">Settings</a> 
          </li>                     
      </ul>
      <nav class="d-md-none p-2 justify-content-end mt-auto navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler ml-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
      </nav>
  </div>