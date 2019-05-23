<?php
/*
 * The Single Post
 */
?>

<?php /* Single post loop */ if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <header class="mb-5">
      <h1><?php the_title()?></h1>
      <div class="header-meta text-muted">
        <?php
          _e('By ', 'k2b4');
          the_author_posts_link();
          _e(' on ', 'k2b4');
          k2b4_post_date();
        ?>
      </div>
    </header>
    <section>
      <?php
        the_post_thumbnail();
        the_content();
        wp_link_pages();
      ?>
    </section>
  </article>

<?php
  // This continues in the single post loop
    if ( comments_open() || get_comments_number() ) :
      //comments_template();
      comments_template('/loops/single-post-comments.php');
		endif;
  endwhile; else :
    get_template_part('loops/404');
  endif;
?>