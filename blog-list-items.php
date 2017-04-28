<li class="flex-grow-1 col-md-6 col-lg-4">
  <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
  <?php echo '<header class="mid relative" style="background-image: radial-gradient(rgba(34,34,34,0.5),rgba(34,34,34,0.5)), url('. $url.')">'; ?>
    <div class="abso-centered post-hero l-100-width">

    <h3><?php the_title(); ?></h3>
    <hr>
    <?php the_excerpt(); ?></div>
    <div class="blog-cat-pill flex flex-wrap">
      <h6 class=""><?php the_category(); ?></h6>
    </div>
  </header>
  <article class="col-pad">
    <div class="">
      <p><?php the_content(); ?></p>
    </div>
    <div class="flex flex-center just-between">
      <div class="author-lockup text-mid">
        <!--<a href="/blog/author" class="flex flex-center flex-wrap">-->
        <div class="flex flex-center flex-wrap">
          <!-- <div class="author-thumb"> <?php echo get_avatar( get_the_author_meta( 'ID' )); ?> </div> -->
          <div class="author-name-title">
            <h5>By • <?php the_author(); ?></h5>
            <h6>Contributing Author</h6>
          </div>
        </div>
      <!-- </a> -->
      </div>
      <div class="butt-link-primary"><a href="<?php the_permalink(); ?>"><i class="fa fa-newspaper-o"></i> | Read</a></div>
    </div>

  </article>
</li>
