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

      <?php endwhile;

    endif;

    ?>



    </div>
    <div class="container no-pad-top butt-link-primary-lg flex just-between">
      <div><?php previous_posts_link('<i class="fa fa-chevron-left"></i> Previous'); ?></div><div><?php next_posts_link('More <i class="fa fa-chevron-right"></i>'); ?></div>
    </div>
  </article>

<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>
