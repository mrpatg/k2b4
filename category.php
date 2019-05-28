<?php
get_header();
k2b4_main_before();
?>

<main id="main" class="container mt-5">
  <div class="row">

    <div class="col-sm">
      <div id="content" role="main">
        <header class="mb-4 border-bottom">
          <h1>
            <?php _e('Category: ', 'k2b4');
            echo single_cat_title(); ?>
          </h1>
        </header>
        <?php get_template_part('loops/index-loop'); ?>
      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</main><!-- /.container -->

<?php
k2b4_main_after();
get_footer();
?>