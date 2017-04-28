<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
  </head>

  <body id="top" <?php body_class(); ?>>

    <div class="l-navbar-fixed-top">
      <nav class="l-navbar">
        <a href="/"><h1 class="brand-light brand-left opacity-hover-80 l-float-l">Ensurem</h1></a>
        <input type="checkbox" id="nav" /><label for="nav"></label>

        <?php wp_nav_menu(array(
          'theme_location'=>'primary',
          'container' => false,
          'walker' => new Walker_Nav_primary()
            )
          );
        ?>

      </nav>
    </div>

    <div id="modal-search" class="modal search-modal flex flex-center just-center" style="">
      <div class="container-900">
        <div class="flex flex-center just-between fa-accent">
          <h2 class=""><i class="fa fa-search"></i> | Search Our Site</h2>
          <a href="#top" class=""><i class="fa fa-3x fa-close"></i></a>
        </div>
        <?php get_search_form(); ?>
      </div>
    </div>
