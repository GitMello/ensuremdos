<li class="flex-grow-1 col-md-6 col-lg-3 l-inline-all-ul">
  <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
  <?php echo '<header class="mid relative" style="background-image: radial-gradient(rgba(34,34,34,0.5),rgba(34,34,34,0.5)), url('. $url.')">'; ?>
    <div class="abso-centered l-100-width">
      <h3><?php the_title(); ?></h3>
      <hr>
      <?php the_excerpt(); ?>
    </div>
    <div class="blog-cat-pill flex flex-wrap">
      <h6 class=""><?php the_category(); ?></h6>
    </div>
    <div class="butt-link-light-mini link-hover-dark">
      <a class="read" href="<?php the_permalink(); ?>"><i class="fa fa-newspaper-o"></i> | Read</a>
    </div>
  </header>
</li>
