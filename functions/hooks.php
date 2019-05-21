<?php
/*
 * k2b4 Hooks
 * Designed to be used by a child theme.
 */

// Navbar (in `header.php`)

function k2b4_navbar_before() {
  do_action('navbar_before');
}

function k2b4_navbar_after() {
  do_action('navbar_after');
}
function k2b4_navbar_brand() {
  if ( ! has_action('navbar_brand') ) {
    ?>
    <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>
    <?php
  } else {
		do_action('navbar_brand');
	}
}
function k2b4_navbar_search() {
  if ( ! has_action('navbar_search') ) {
    ?>
    <form class="form-inline ml-auto pt-2 pt-md-0" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <div class="input-group">
        <input class="form-control border-secondary" type="text" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s" id="s">
        <div class="input-group-append">
          <button type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'k2b4') ?>" class="btn btn-outline-secondary">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <?php
  } else {
		do_action('navbar_search');
	}
}


// Main

function k2b4_main_before() {
  do_action('main_before');
}
function k2b4_main_after() {
  do_action('main_after');
}

// Sidebar (in `sidebar.php` -- only displayed when sidebar has 1 widget or more)

function k2b4_sidebar_before() {
  do_action('sidebar_before');
}
function k2b4_sidebar_after() {
  do_action('sidebar_after');
}

// Footer (in `footer.php`)

function k2b4_footer_before() {
  do_action('footer_before');
}
function k2b4_footer_after() {
  do_action('footer_after');
}
function k2b4_bottomline() {
	if ( ! has_action('bottomline') ) {
		?>
    <div class="container">
      <div class="row pt-3">
        <div class="col-sm">
          <p class="text-center text-sm-left">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
        </div>
        <div class="col-sm">
          <p class="text-center text-sm-right"><a href="https://github.com/SimonPadbury/k2b4">k2b4</a> theme for WordPress</p>
        </div>
      </div>
    </div>
		<?php		
	} else {
		do_action('bottomline');
	}
}
