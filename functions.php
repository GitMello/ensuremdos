<?php

// INCLUDE SCRIPTS
function ensuremdos_script_enqueue() {
  wp_enqueue_style( 'mainstyle', get_template_directory_uri() . '/assets/css/app.css', array(), '1.0.0', 'all' );
  //wp_enqueue_script( 'mainscript', get_template_directory_uri() . '', array(), '1.0.0', true);
  wp_enqueue_script('mainscript', get_template_directory_uri() .'/assets/js/app.js', array('jquery'), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'ensuremdos_script_enqueue');

// ACTIVATE MENUS
function ensuremdos_theme_setup() {
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary Navigation');
  register_nav_menu('secondary', 'Footer Navigation');
}

// ADD THEME SUPPORT
add_action( 'init', 'ensuremdos_theme_setup');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-thumbnails');
add_theme_support('html5', array('search-form'));
// add_theme_support('post-formats', array('aside','image','video'));

// ADD SIDEBAR
function ensuremdos_widget_setup() {
  register_sidebar(
    array(
      'name' => 'Sidebar',
      'id' => 'sidebar-1',
      'class' => 'custom',
      'description' => 'Standard Sidebar',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h1 class="widget-title">',
      'after_title' => '</h1>',
    )
  );
}

add_action('widgets_init','ensuremdos_widget_setup');
add_filter( 'user_can_richedit' , '__return_false', 50 );

// CHANGE READ MORE TEXT TO ICON
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '"> <i class="fa fa-plus-circle"></i></a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

// REMOVE EMPTY <p></p> TAGS
remove_filter( 'the_content', 'wpautop' );

// REMOVE WP VERSION
function ensuremdos_remove_version() {
  return '';
}
add_filter('the_generator', 'ensuremdos_remove_version');

// INCLUDES
require get_template_directory() . '/inc/walker.php'; //style menu
require get_template_directory() . '/inc/dupe.php'; //duplicate posts
require get_template_directory() . '/inc/cat_colors.php'; //adds class to categories

// ADD EXCERPTS TO PAGES
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

// CUSTOM LOGIN LOGO
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/logos/ensurem-logo-w-tagline-dark.svg);
		height: 4em;
		width: auto;
		background-size: contain;
		background-repeat: no-repeat;
        	padding-bottom: 0;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// ADDS ANCHORS TO BLOG
function whatever_next_previous_anchor($url) {
    $searchpage = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	if(strpos($searchpage,'blog') !== false) {
    return $url . '#awaring';
}}

add_filter('get_pagenum_link', 'whatever_next_previous_anchor');
