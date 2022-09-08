<?php
/**
* WordPress template: Functions
*/

function theme_setup(){
	add_theme_support('title-tag');
		
add_theme_support( 'woocommerce' );
	 add_theme_support( 'wc-product-gallery-zoom' ); add_theme_support( 'wc-product-gallery-lightbox' ); add_theme_support( 'wc-product-gallery-slider' ); 
add_theme_support( 'widgets' );
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 100,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	//REGISTRO DE CSS
	function theme_css(){
		
		wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/style.css', '', false, 'screen');
		wp_enqueue_style('NewStyle', get_stylesheet_directory_uri() . '/css/new_style.css', '', false, 'screen');
		
	}
	add_action('wp_enqueue_scripts', 'theme_css');


	//REGISTRO DE JS
	function theme_scripts(){
		// Desregistra o jQuery do Wordpress
	//  wp_deregister_script('jquery');

	// Registra o jQuery Novo
	    // wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendors/jquery.min.js', array(), "1.11.2", true );
		wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/js/vendors/slick.min.js', array('jquery'), null, true);

		wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), null, true);

	}
	add_action('wp_enqueue_scripts', 'theme_scripts');

//CARREGAR SCRIPT PARA DETERMINADA PAGINA
function loadScriptsTemplate(){
	
	if (is_single()){
		// wp_enqueue_script('zoom', get_stylesheet_directory_uri() . '/js/vendors/jquery.mlens-1.7.min.js', array('jquery'), null, true);
	}
}
add_action('wp_enqueue_scripts','loadScriptsTemplate');
	// REMOVER ITENS DO HEADER EM wp_head();
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );

	// REMOVE WP EMOJI
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');

	// REGISTRO DE IMAGENS
	add_theme_support('post-thumbnails');
	add_image_size('slider',780,329,true);
	add_image_size('item',200,200,true);
	add_image_size('post review',350,190,true);



	// REGISTRO DE MENUS
	add_theme_support('nav-menus');
	function theme_menus(){
		register_nav_menus(array(
			'header-menu' => 'Menu Principal',
			'footer-menu' => 'Footer'

		));
	}
	add_action('init', 'theme_menus');
}
add_action('after_setup_theme', 'theme_setup');
// REMOVER PADRÃO DE COLOCAR LINKS NAS IMAGENS
update_option('image_default_link_type','none');

// Busca por um template single com nome concatenado a uma categoria
// (single-[cat slug].php)
add_filter('single_template', create_function(
    '$the_template',
    'foreach( (array) get_the_category() as $cat ) {
    if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
        return TEMPLATEPATH . "/single-{$cat->slug}.php";
    }
    return $the_template;'
));


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '<font>[...]</font>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

//ADD CLASS ACTIVE
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

/*  Custom Post Types
    ================================================== */
	function create_posttype()
	{
		register_post_type(
			'depoimento',
			// CPT Options
			array(
				'labels' => array(
					'name' => __('Depoimentos'),
					'singular_name' => __('Depoimento')
				),
				'public' => true,
				'taxonomies'          => array('depoimentos'),
				'has_archive' => 'depoimentos',
				'hierarchical' => true,
				'menu_icon'           => 'dashicons-image-filter',
				'supports' => array('title', 'editor', 'thumbnail'),
				'show_in_rest' => true,
				'public_queryable' => true,
				'query_var' => true,
				'exclude_from_search' => false,
	
	
			)
		);
		register_post_type(
			'faq',
			// CPT Options
			array(
				'labels' => array(
					'name' => __('Faq'),
					'singular_name' => __('Faq')
				),
				'public' => true,
				'taxonomies'          => array('faq'),
				'has_archive' => 'faq',
				'hierarchical' => true,
				'menu_icon'           => 'dashicons-image-filter',
				'supports' => array('title', 'editor', 'thumbnail'),
				'show_in_rest' => true,
				'public_queryable' => true,
				'query_var' => true,
				'exclude_from_search' => false,
	
	
			)
		);
		register_post_type(
			'parceiros',
			// CPT Options
			array(
				'labels' => array(
					'name' => __('Parceiros'),
					'singular_name' => __('Parceiro')
				),
				'public' => true,
				'taxonomies'          => array('parceiros'),
				'has_archive' => 'parceiros',
				'hierarchical' => true,
				'menu_icon'           => 'dashicons-image-filter',
				'supports' => array('thumbnail'),
				'show_in_rest' => true,
				'public_queryable' => true,
				'query_var' => true,
				'exclude_from_search' => false,
	
	
			)
		);
	
	}
	add_action('init', 'create_posttype');


function mytheme_widgets_init() {
    register_sidebar( array (
        'name' => __( 'Sidebar', 'your-text-domain' ),
        'id' => 'sidebar-1',
        'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'your-text-domain' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
	));
	// Add footer widget area


register_sidebar( array(
	
	'name' => 'Footer Sidebar 1',
	'id' => 'footer-sidebar-1',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer Sidebar 2',
	'id' => 'footer-sidebar-2',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer Sidebar 3',
	'id' => 'footer-sidebar-3',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'Footer Sidebar 4',
		'id' => 'footer-sidebar-4',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
		register_sidebar( array(
		'name' => 'Sidebar Woo',
		'id' => 'woo-sidebar',
		'description' => 'Appears in the sidebar area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );
		register_sidebar( array(
			'name' => 'Newsletter',
			'id' => 'newsletter',
			'description' => 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
			) );
	register_sidebar( array(
		'name' => 'Pré Menu',
		'id' => 'header-social',
		'before_widget' => '<div id="header-social">',
		'after_widget' => '</div>',
		) );

}
add_action( 'widgets_init', 'mytheme_widgets_init' );

// Shortcode Templates

function template_hero( $attr ){
	ob_start();
	get_template_part('template-parts/hero');
	return ob_get_clean();
}

add_shortcode( 'hero', 'template_hero');



//URL do logo da tela de login
 function chr_logo_url() {
 return get_bloginfo( 'url' );
 }
 add_filter( 'login_headerurl', 'chr_logo_url' );

//Title do logo da tela de login
 function chr_logo_title() {
 return get_bloginfo( 'name' );
 }
 add_filter( 'login_headertext', 'chr_logo_title' );

 //Alterar o logo tela de login
function chr_style_personalizado() { ?>
    <style>
		body{
			
    background: #F1F6FC !important;
		}
    body.login div#login h1 a {
   background-image: url('/wp-content/uploads/2021/11/logo-1.png');
   background-size: auto;
   width: auto;
   height: 70px;
}
.login form{
    -webkit-box-shadow: 2px 4px 17px rgba(17, 17, 17, 0.2);
	box-shadow: 2px 4px 17px rgba(17, 17, 17, 0.2) !important;
	border:none;
	border-radius: 20px;
    background-color: white;
}

body.login #wp-submit{
/*  background: #EE1B7F;  */
 
 border: none;

    }
    </style>
    <?php }
    add_action( 'login_enqueue_scripts', 'chr_style_personalizado' );

	

function admin_styles() {
    echo '<style>
	#editor .edit-post-layout__metaboxes {
		padding-bottom: 26px;
		}
		.edit-post-meta-boxes-area .postbox > .inside{
			margin-left: 25px !important;}
    </style>';
}
add_action('admin_head', 'admin_styles');

// Add pdf custom operadora in contact form

add_filter( 'shortcode_atts_wpcf7', 'custom_shortcode_atts_wpcf7_filter', 10, 3 );
 
function custom_shortcode_atts_wpcf7_filter( $out, $pairs, $atts ) {
  $my_attr = 'pdf';
 
  if ( isset( $atts[$my_attr] ) ) {
    $out[$my_attr] = $atts[$my_attr];
  }
 
  return $out;
}


function wps_adminbar_bookmarks() {
    global $wp_admin_bar;
 
    $cat = '6'; // define category
    $name = 'Bookmarks';
 
    $bookmarks = array();
    $bookmarks = get_bookmarks("category=$cat");
 
    if ($bookmarks[0] != '') {
 
        $wp_admin_bar->add_menu( array(
        'title' => $name,
        'href' => false,
        'parent' => false
        ));
 
        foreach ( $bookmarks as $bookmark ) {
        $wp_admin_bar->add_menu( array(
            'title' => $bookmark->link_name,
            'href' => clean_url($bookmark->link_url),
            'parent' => strtolower($name),
            'meta' => array('target' => '_blank'),
        ));
        }
      }
}
add_action('admin_bar_menu', 'wps_adminbar_bookmarks', 500);
 
