<?php get_header(); ?>

<header id="blog-hero" class="alt">
    <div class="container no-pad search-header text-shade">
      <h1><?php the_archive_title(); ?></h1>
      <h2><?php the_archive_description(); ?></h2>
    </div>
  </header>

  <div class="wax-seal flex flex-center just-center"><h2><i class="fa fa-archive"></i></h2></div>

  <article class="search-results">

    <div class="container no-pad-bottom flex flex-wrap l-stack-all-ul">
    <?php if (have_posts() ):

      while(have_posts() ): the_post(); ?>

        <?php get_template_part('content', 'archive'); ?>

      <?php endwhile;

    endif;

    ?>



    </div>

    <div class="container no-pad-top butt-link-primary-lg flex just-between">
      <div><?php previous_posts_link('<i class="fa fa-chevron-left"></i> Newer Posts'); ?></div><div><?php next_posts_link('Older Posts <i class="fa fa-chevron-right"></i>'); ?></div>
    </div>

  </article>

<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>
