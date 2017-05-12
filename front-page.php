<?php get_header(); ?>

<header id="homepage-hero" class="l-fullpage-header flex flex-center just-start flex-wrap text-shade link-no-shad text-left">
  <div class="container no-pad">
    <div class="l-fullpage-header-content xl no-pad-sides butt-link-primary-xl">
      <h1>Your Insurance<br>Marketplace</h1>
      <h2>Need help finding the right products?<br>Take our <strong>Life Optimized&trade; Risk Assessment</strong></h2>
      <a href="#"><i class="fa fa-chevron-circle-right"></i> | Meet LORA</a>
    </div>
  </div>
</header>

<article class="text-center butt-link-md">
  <section class="container-900">
    <h2>Explore Products</h2>
    <p>Discover the benefits of leading insurance products on the market. We make it easy to find solutions that help you secure your family’s future, build wealth, and protect your assets.</p>
    <hr>
    <ul class="l-inline l-feature-list flex just-around flex-start flex-wrap ">
      <li>
        <h2 class="fa-primary"><i class="fa fa-heart-o fa-4x"></i></h2>
        <h3>Life Insurance</h3>
        <h4>Products That Provide<br>Benefits After You Pass Away</h4>
        <a href="/guide/life-insurance"><i class="fa fa-heart-o"></i> | Go Now</a>
      </li>
      <li>
        <h2 class="fa-primary"><i class="fa fa-heartbeat fa-4x"></i></h2>
        <h3>Living Insurance</h3>
        <h4>Products That Provide You<br>Benefits While You Are Alive</h4>
        <a href="/guide/living-insurance"><i class="fa fa-heartbeat"></i> | Go Now</a>
      </li>
    </ul>
  </section>
</article>

<a id="we-believe" class="anchor"></a>
<article id="we-believe-hero" class="we-believe alt text-center text-white">
  <div class="container-900">
    <h1>We Believe...</h1>
    <hr>
    <h3>The <strong>American Dream</strong> <span class="smart-break">is still alive</span></h3>
    <h3><strong>Financial Security</strong> is essential <span class="smart-break">to a better quality of life</span></h3>
    <h3><strong>Freedom</strong> is about having choices</h3>
    <h3><strong>Family</strong> is the bedrock <span class="smart-break">of this great country</span></h3>
    <h3>Knowledge &amp; <strong>Education</strong> allow us <span class="smart-break">to make better choices</span></h3>
    <h3>Our dependents deserve <span class="smart-break">to feel <strong>secure</strong></span></h3>
    <hr>
    <h2>Welcome to <em>YOUR</em> <span class="smart-break">Insurance Marketplace</span></h2>
    <h1 class="brand-light brand-center"><?php echo $coname;?></h1>
  </div>
</article>

<article id="awaring" class="blog-ul l-inline-all-ul">
  <div class="container white">

    <ul class="flex flex-stretch flex-wrap blog-intro-primary">
      <li class="flex-grow-1 col-md-6 col-lg-6 butt-link hr-primary hr-left col-pad">
        <div class="blog-cat-intro-padding">
          <h1 class="text-primary">Latest from Awaring America<sup>&trade;</sup></h1>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <hr>
          <h3>Looking for Something Specific?</h3>
          <div class="flex"><?php get_search_form(); ?></div>
        </div>

      </li>
      <?php
        $args = array(
          'type' => 'post',
          'posts_per_page' => 4,
        );

        $latestBlog = new WP_Query($args);
        if ($latestBlog->have_posts() ):

          while($latestBlog->have_posts() ): $latestBlog->the_post(); ?>

              <?php get_template_part( 'blog-list-items') ?>

            <?php endwhile;

          endif;

          wp_reset_postdata();

       ?>



    </ul>
    <div class="butt-link text-right">
      <a href="/blog/#awaring">View More</a>
    </div>
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
