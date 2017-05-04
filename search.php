<?php get_header(); ?>

<header class="alt">
    <div class="container no-pad search-header">
      <h1>Your Results For...</h1>
      <?php get_search_form(); ?>
    </div>
  </header>

  <div class="wax-seal flex flex-center just-center"><h2><i class="fa fa-search"></i></h2></div>

  <article class="search-results">
    <div class="container no-pad-bottom l-stack-all-ul">

    <?php if (have_posts() ):

      while(have_posts() ): the_post(); ?>

        <?php get_template_part('content', 'search'); ?>

      <?php endwhile; ?>

      <?php else: ?>

          <h2 class="text-center">No results.</h2>


    <?php endif;

    ?>



    </div>
    <div class="container no-pad-top flex just-center">
      <?php
  the_posts_pagination( array(
        'mid_size' => 10,
        'screen_reader_text' => ' ',
        'prev_text'          => __( '<i class="fa fa-chevron-left"></i> Previous' ),
        'next_text'          => __( 'Next <i class="fa fa-chevron-right"></i>' ),
        'base' => @add_query_arg('paged','%#%'),
        //'format'             => '/page/%#%',
        ) );
     ?>
    </div>
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
  </article>

<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>
