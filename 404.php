<?php get_header(); ?>

<header class="l-fullpage-header flex flex-center just-center flex-wrap text-shade link-no-shad text-left dark">
  <div class="container no-pad">
    <div class="l-fullpage-header-content xl no-pad-sides butt-link-primary-xl text-center">
      <h1>404 Err</h1>
      <h2>ERROR Insurance offered below ;)</h2>
      <div class="flex flex-col flex-center">
        <div class="col-md-6">
          <a href="#"><i class="fa fa-chevron-circle-right"></i> | Meet LORA</a>
          <h3 class="no-marg-top">OR</h3>
        </div>
        <div class="col-md-6 col-pad">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
  </div>
</header>

<article id="" class="featured-posts-ul l-inline-all-ul dark">
  <div class="container featured-posts-container text-white">
    <h2 class="no-marg">Maybe Something Below Tickles Your Fancy...</h2>
    <ul class="flex flex-stretch flex-wrap">

      <?php
        $args = array(
          'type' => 'post',
          'posts_per_page' => 4,
        );

        $latestBlog = new WP_Query($args);
        if ($latestBlog->have_posts() ):

          while($latestBlog->have_posts() ): $latestBlog->the_post(); ?>

              <?php get_template_part( 'blog-recent-posts') ?>

            <?php endwhile;

          endif;

          wp_reset_postdata();

       ?>

    </ul>
  </div>
</article>

<?php get_footer(); ?>
