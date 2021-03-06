<?php get_header(); ?>

<?php if (have_posts() ):

  while(have_posts() ): the_post(); ?>
  <?php
        if ( has_post_thumbnail() ) {
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        } else {
        $url = get_template_directory_uri() . '/assets/discover/discover-bg.jpg';
        }
      ?>
<?php echo '<header class="blog-header text-center flex flex-center just-center text-shade link-no-shad" style="background-image: radial-gradient(rgba(34,34,34,0.5),rgba(34,34,34,0.5)), url('. $url.')">'; ?>
    <div class="l-100-width xl no-pad-sides">

      <h1><i class="fa fa-newspaper-o"></i> <span class="text-accent">|</span> <?php the_title(); ?></h1>
      <div class="prev-next-nav butt-link-light-lg link-hover-dark">
        <div class="butt-prev"><?php previous_post_link( '%link', '<i class="fa fa-chevron-left"></i>' ); ?></div>
        <div class="butt-next"><?php next_post_link( '%link', '<i class="fa fa-chevron-right"></i>' ); ?></div>
      </div>

      <?php
        $subtitle = get_post_meta($post->ID, 'subtitle', true);
        if ($subtitle !== '') {
        	echo '<h2>' . $subtitle . '</h2>';
      } ?>

      <div class="">
        <hr>
        <h3 class="">by • <?php the_author(); ?></h3>
        <h5><?php the_time('F j, Y'); ?></h5>
      </div>

      <div class="post-cat-pill flex just-center flex-wrap l-inline-all-ul">
        <?php $cat_list = get_my_category_list();?>
        <h5 class="no-marg"><?php echo $cat_list; ?></h5>
      </div>

    </div>
  </header>
<hr class="no-marg">
  <article id="lora-hero" class="flex flex-center just-start flex-wrap text-shade link-no-shad text-left text-white">
    <div class="container">
      <div class="no-pad-sides butt-link-primary-lg">
        <h1>Need help finding the right products?<br>Take our <strong>Life Optimized&trade; Risk Assessment</strong></h1>
        <a href="#"><i class="fa fa-chevron-circle-right"></i> | Meet LORA</a>
      </div>
    </div>
  </article>

  <!--<article class="text-center content">
     <div class="author-seal"></div>
    <div class="author-post-details hr-mid-light text-mid">
      <a href="/blog/author">
        <h3><?php the_author(); ?></h3>
        <h4>Contributing Writer</h4>
      </a>
      <hr>
      <h5><?php the_time('F j, Y'); ?></h5>
    </div>
  </article>-->

  <article class="post-content l-stack-all-ul img-responsive-all relative">
    <div class="container">
      <h6><?php the_tags('<i class="fa fa-tag text-primary"></i> ', ' <span class="text-accent">|</span> '); ?></h6>





<?php the_content(); ?>







      <hr>
      <div class="butt-link flex flex-center just-between">
        <div class="butt-prev"><?php previous_post_link( '%link', '<i class="fa fa-chevron-left"></i> %title'); ?></div>
        <div class="butt-next"><?php next_post_link( '%link', '%title <i class="fa fa-chevron-right"></i>'); ?></div>
      </div>

    </div>

  </article>

<?php endwhile;

endif;

?>

  <article id="" class="featured-posts-ul l-inline-all-ul dark">
    <div class="container featured-posts-container text-white">
      <h2 class="no-marg">You May Enjoy...</h2>
      <ul class="flex flex-stretch flex-wrap">
  <?php
    $orig_post = $post;
    global $post;
    $tags = wp_get_post_tags($post->ID);

    if ($tags) {
    $tag_ids = array();
    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
    $args=array(
    'tag__in' => $tag_ids,
    'post__not_in' => array($post->ID),
    'posts_per_page'=>4, // Number of related posts to display.
    'caller_get_posts'=>1
    );

    $my_query = new wp_query( $args );

    while( $my_query->have_posts() ) {
    $my_query->the_post();
    ?>

  <?php get_template_part( 'blog-recent-posts') ?>

    <? }
    }
    $post = $orig_post;
    wp_reset_query();
    ?>
  </ul>
  </div>
  </article>

  <article id="money-save-hero" class="dark text-white butt-link-primary-lg">
    <div class="container">
      <h1 class="no-marg-top">Sign Up For Money <span class="smart-break">Saving Tips</span></h1>
      <a href="https://ensurem.typeform.com/to/hBhFF5" target="_blank"><i class="fa fa-pencil-square-o"></i> | Sign Up</a>
    </div>
  </article>

<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>
