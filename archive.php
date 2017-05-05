<?php get_header(); ?>
<style>body {background: white !important}</style>
<header id="" class="primary">
    <div class="container no-pad search-header">
      <h1><?php the_archive_title(); ?></h1>
      <h2><?php the_archive_description(); ?></h2>
      <a class="butt-link-lifeins" href="/category/life-insurance">#Life Insurance</a>
      <a class="butt-link-livingins" href="/category/living-insurance">#Living Insurance</a>
      <a class="butt-link-health" href="/category/health">#Health</a>
      <a class="butt-link-wealth" href="/category/wealth">#Wealth</a>
      <a class="butt-link-life" href="/category/life">#Life</a>
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

  </article>

<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>
