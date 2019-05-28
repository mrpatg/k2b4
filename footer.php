<?php k2b4_footer_before(); ?>

<footer id="footer" class="mt-5 bg-light">

  <div class="container">

    <?php if (is_active_sidebar('footer-widget-area')) : ?>
      <div class="row pt-5 pb-4" id="footer" role="navigation">
        <?php dynamic_sidebar('footer-widget-area'); ?>
      </div>
    <?php endif; ?>

  </div>

</footer>

<?php k2b4_footer_after(); ?>

<?php k2b4_bottomline(); ?>

<?php wp_footer(); ?>
</body>

</html>