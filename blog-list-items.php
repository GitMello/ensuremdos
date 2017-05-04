<li class="flex-grow-1 col-md-6 col-lg-4">
  <?php
      if ( has_post_thumbnail() ) {
      $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      } else {
      $url = get_template_directory_uri() . '/assets/discover/discover-bg.jpg';
      }
    ?>
  <?php echo '<header class="mid relative" style="background-image: radial-gradient(rgba(34,34,34,0.5),rgba(34,34,34,0.5)), url('. $url.')">'; ?>
    <div class="abso-centered post-hero l-100-width">
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
      <?php $cat_list = get_my_category_list();?>
      <h6 class=""><?php echo $cat_list; ?></h6>
    </div>
  </header>
  <article class="col-pad">
    <div class="">
      <p><?php the_excerpt(); ?></p>
    </div>
    <div class="flex flex-center just-between">
      <div class="author-lockup text-mid">
        <!--<a href="/blog/author" class="flex flex-center flex-wrap">-->
        <div class="flex flex-center flex-wrap">
          <!-- <div class="author-thumb"> <?php echo get_avatar( get_the_author_meta( 'ID' )); ?> </div> -->
          <div class="author-name-title">
            <h5>By • <?php the_author(); ?></h5>
            <h6>Contributor</h6>
          </div>
        </div>
      <!-- </a> -->
      </div>
      <div class="butt-link-primary"><a href="<?php the_permalink(); ?>"><i class="fa fa-newspaper-o"></i> | Read</a></div>
    </div>

  </article>
</li>
