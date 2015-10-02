<?php  

/*
	==========================================
	 Include scripts
	==========================================
*/
/*include css and js files*/
function jomarjaytheme_script_enqueue(){
	//css
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/jomarjaytheme.css', array(), '1.0.0', 'all' );

	//js
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/jomarjaytheme.js', array(), '1.0.0', true);
}


add_action('wp_enqueue_scripts', 'jomarjaytheme_script_enqueue');




/*
	==========================================
	 Activate menus
	==========================================
*/
/*add custom menu | */
function jomarjaytheme_theme_setup(){
	add_theme_support('menus'); //activate MENUS

	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'jomarjaytheme_theme_setup' );



/*
	==========================================
	 Theme support function
	==========================================
*/
add_theme_support('custom-background');  //adding background functions themes.php
add_theme_support('custom-header');  // adding header
add_theme_support('post-thumbnails'); //featured images


add_theme_support('post-formats', array('aside', 'image', 'video')); // ex. video, music.... which one you activate



/*
	==========================================
	 Sidebar function
	==========================================
*/


function jomarjaytheme_wiget_sidebar(){

	register_sidebar(
		 array(
			'name'          =>'Sidebar',
			'id'            => 'sidebar-1',
			'class'         => 'custom',
			'description'   => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>'
			)
		);
		
}

	add_action('widgets_init','jomarjaytheme_wiget_sidebar');



/*
	==========================================
	 Category function
	==========================================
*/

function example_insert_category() {
  wp_insert_term(
    'Example Category',
    'category',
    array(
      'description' => 'This is an example category created with wp_insert_term.',
      'slug'    => 'example-category'
    )
  );
}
add_action( 'after_setup_theme', 'example_insert_category' );



























/*Change WordPress login page logo link href attribute | changed login logo url*/
function gp_change_login_page_url($login_header_url) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'gp_change_login_page_url' );


/*Change WordPress login page logo link title attribute*/
function gp_change_login_page_title($login_header_title) {
    return get_bloginfo('description');
}
add_filter( 'login_headertitle', 'gp_change_login_page_title' );

?>
<?php function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/bakeren-logo.png);
            padding-bottom: 49px;
		    height: 64px;
		    width: 100% !important;
		    background-size: 100%;
        }
    </style>
<?php } add_action( 'login_enqueue_scripts', 'my_login_logo' ); ?>





