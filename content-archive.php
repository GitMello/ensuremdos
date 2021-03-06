<div class="result-container col-md-6 flex flex-start flex-wrap <?php echo the_category;?>">
    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <?php echo '<div class="col-sm-12 col-md-3 col-pad blog-results-img ens-frame" style="background-size: cover; background-image: url('. $url.')">'; ?>
      <a href="<?php the_permalink(); ?>"></a>
    </div>
    <div class="col-sm-12 col-md-9 col-pad catco-results">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
      <div class="hr-mid-light hr-left"><hr></div>

      <h5><?php the_category(); ?></h5>
      <h6><?php the_tags('<i class="fa fa-tag"></i> ', ' <span class="text-mid-light">|</span> '); ?></h6>
    </div>
</div>
