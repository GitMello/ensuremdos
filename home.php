<?php

/*
  Template Name: Blog
*/

get_header(); ?>

  <header id="blog-hero" class="l-fullpage-header flex flex-center just-center text-center flex-wrap text-shade link-no-shad link-hover-dark">
    <div class="l-fullpage-header-content xl no-pad-sides butt-link-light-lg">
      <h1><i class="fa fa-newspaper-o"></i> <span class="text-accent">|</span> Awaring America<sup>&trade;</sup></h1>
      <hr>
      <h2>Articles, News &amp; More</h2>
      <a href="/category/life-insurance">#Life Insurance</a>
      <a href="/category/living-insurance">#Living Insurance</a>
      <a href="/category/health">#Health</a>
      <a href="/category/wealth">#Wealth</a>
      <a href="/category/life">#Life</a>
    </div>
  </header>

  <article id="awaring" class="l-inline-all-ul blog-ul">
    <div class="container white">

      <ul class="flex flex-stretch flex-wrap">
        <li class="flex-grow-1 col-md-6 col-lg-6 butt-link hr-mid-light hr-left col-pad">
          <div class="blog-cat-intro-padding">
            <h1>Latest from Awaring America<sup>&trade;</sup></h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <hr>
            <h3>Other Topics</h3>
            <?php the_tags('',' '); ?>
            <div class="flex"><?php get_search_form(); ?></div>
          </div>

        </li>

  <?php if (have_posts() ):

    while(have_posts() ): the_post(); ?>

        <?php get_template_part( 'blog-list-items') ?>

      <?php endwhile;

    endif;

    ?>

  </ul>


    <div class="butt-link flex just-between">
      <div><?php previous_posts_link('<i class="fa fa-chevron-left"></i> Newer Posts'); ?></div><div><?php next_posts_link('Older Posts <i class="fa fa-chevron-right"></i>'); ?></div>
    </div>


  </div>
</article>

<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>
