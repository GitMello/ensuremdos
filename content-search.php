<div class="result-container flex flex-start flex-wrap">



    <?php
      if ( has_post_thumbnail() ) {
      $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      } else {
      $url = get_template_directory_uri() . '/assets/discover/discover-bg.jpg';
      }
    ?>


    <?php echo '<div class="col-sm-12 col-md-3 col-pad search-results-img ens-frame" style="background-size: cover; background-image: url('. $url.')">'; ?>
      <a href="<?php the_permalink(); ?>"></a>
    </div>
    <div class="col-sm-12 col-md-9 col-pad">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php
        $subtitle = get_post_meta($post->ID, 'subtitle', true);
        if ($subtitle !== '') {
        	echo '<h4>' . $subtitle . '</h4>';
      } ?>
      <div class="hr-primary hr-left"><hr></div>
      <?php the_excerpt(); ?>
      <h5><?php the_category(); ?></h5>
      <h6><?php the_tags('<i class="fa fa-tag text-primary"></i> ', ' <span class="text-accent">|</span> '); ?></h6>
    </div>
</div>
