<?php

/*
  Template Name: Blog
*/

get_header(); ?>

  <header id="blog-hero" class="l-fullpage-header flex flex-center just-center text-center flex-wrap text-shade link-no-shad">
    <div class="l-fullpage-header-content xl no-pad-sides">
      <h1><i class="fa fa-newspaper-o"></i> <span class="text-accent">|</span> Awaring America<sup>&trade;</sup></h1>
      <hr>
      <h2>Articles, News &amp; More</h2>
      <a class="butt-link-lifeins-lg" href="/category/life-insurance">#Life Insurance</a>
      <a class="butt-link-livingins-lg" href="/category/living-insurance">#Living Insurance</a>
      <a class="butt-link-health-lg" href="/category/health">#Health</a>
      <a class="butt-link-wealth-lg" href="/category/wealth">#Wealth</a>
      <a class="butt-link-life-lg" href="/category/life">#Life</a>
    </div>
  </header>

  <article id="awaring" class="l-inline-all-ul blog-ul">
    <div class="container white">

      <ul class="flex flex-stretch flex-wrap">
        <li class="flex-grow-1 col-md-6 col-lg-6 butt-link hr-mid-light hr-left col-pad">
          <div class="blog-cat-intro-padding">
            <h1>Awaring America<sup>&trade;</sup> Blog</h1>
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
