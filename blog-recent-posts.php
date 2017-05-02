<li class="flex-grow-1 col-md-6 col-lg-3 l-inline-all-ul">
  <?php
      if ( has_post_thumbnail() ) {
      $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      } else {
      $url = get_template_directory_uri() . '/assets/discover/discover-bg.jpg';
      }
    ?>
  <?php echo '<header class="mid relative" style="background-image: radial-gradient(rgba(34,34,34,0.5),rgba(34,34,34,0.5)), url('. $url.')">'; ?>
    <div class="abso-centered l-100-width">
      <h3><?php the_title(); ?></h3>
      <hr>
      <?php
        $subtitle = get_post_meta($post->ID, 'subtitle', true);
        if ($subtitle !== '') {
        	echo '<p>' . $subtitle . '</p>';
      } ?>
    </div>
    <a style="position: absolute;top: 0;right: 0;bottom: 0;left: 0;" href="<?php the_permalink(); ?>"></a>
    <div class="blog-cat-pill flex flex-wrap">
      <h6 class=""><?php the_category(); ?></h6>
    </div>
    <div class="butt-link-light-mini link-hover-dark">
      <a class="read" href="<?php the_permalink(); ?>"><i class="fa fa-newspaper-o"></i> | Read</a>
    </div>
  </header>
</li>
