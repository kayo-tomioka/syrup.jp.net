<div class="container">
  <ul class="row news-archive">
    <?php
      $args = array(
        'type' => 'yearly',
      );
      wp_get_archives($args);
    ?>
  </div>
</div>