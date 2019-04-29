<?php
/**
 * Module functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Module
 * @since 1.0.0
 */

/**
 * Module only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/*-----------------------------------------------------------------------------------*/
/* Define Constants
/*-----------------------------------------------------------------------------------*/
define('SITE_URL', home_url());
define('THEME_PATH', get_template_directory().'/');
define('THEME_URI', get_template_directory_uri().'/');
define('THEME_ASSETS', THEME_URI.'assets/');
define('THEME_CSS', THEME_ASSETS.'styles/');
define('THEME_JS', THEME_ASSETS.'js/');
define('THEME_IMAGES', THEME_ASSETS.'images/');
define('themenamespace', wp_get_theme());

if( function_exists('acf_add_options_page') ) 
{
	acf_add_options_page('Theme Options');
}

/**
 * allow svg file.
*/
function my_custom_mime_types( $mimes ) {

// New allowed mime types.
$mimes['svg'] = 'image/svg+xml';
$mimes['svgz'] = 'image/svg+xml';
$mimes['doc'] = 'application/msword';

// Optional. Remove a mime type.
unset( $mimes['exe'] );

return $mimes;
}
add_filter( 'upload_mimes', 'my_custom_mime_types' );

/**
 * This theme uses wp_nav_menu() in two locations.
*/
register_nav_menus( array(
	'top'    => __( 'Top Menu', 'module' ),
) );


add_theme_support( 'title-tag' );

/**
 * Add li class in menu.
*/
function add_additional_class_on_li($classes, $item, $args) {
   
	if ( 'top' === $args->theme_location ) {
        $classes[] = "nav-item";
    }
	
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

/**
 * Add class in anchor tag menu.
*/
add_filter( 'nav_menu_link_attributes', function($atts) {
        $atts['class'] = "nav-link";
        return $atts;
}, 100, 1 );

/**
 * Add attribute in anchor tag menu.
*/
add_filter( 'nav_menu_link_attributes', 'cfw_add_data_atts_to_nav', 10, 4 );
function cfw_add_data_atts_to_nav( $atts, $item, $args )
{
    $atts['data-scroll-nav'] = $item->menu_order;
    return $atts;
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function module_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'module' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'module' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="f-title"><h6 class="widget-title">',
		'after_title'   => '</h6></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'module' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'module' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="f-title"><h6 class="widget-title">',
		'after_title'   => '</h6></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'module' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'module' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="f-title"><h6 class="widget-title">',
		'after_title'   => '</h6></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Language', 'module' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Add widgets here to appear in your footer.', 'module' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="f-title"><h6 class="widget-title">',
		'after_title'   => '</h6></div>',
	) );

}
add_action( 'widgets_init', 'module_widgets_init' );


/* add js and css to theme*/
function framework_scripts()
{
	$scripts = array(
		'files' => array(
			// include css
			array( 'file_src'=> 'bootstrap.min', 'file_name' => 'bootstrap.min', 'type' =>'css', 'live' => false),
			array( 'file_src' => 'main', 'file_name' => 'main', 'type' => 'css', 'live' => false),
			array( 'file_src' => 'responsive', 'file_name' => 'responsive', 'type' => 'css', 'live' => false),
			array( 'file_src' => 'slick', 'file_name' => 'slick', 'type' => 'css', 'live' => false),
			array( 'file_src' => 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700', 'file_name' => 'fonts', 'type' => 'css', 'live' => true),

			// inclde all Js file
			array( 'file_src' => 'jquery-3.2.1.min', 'file_name' => 'jquery-3.2.1.min', 'type' => 'js', 'live' => false),
			array( 'file_src' => 'popper.min', 'file_name' => 'popper.min', 'type' => 'js', 'live' => false),
			array( 'file_src' => 'bootstrap.min', 'file_name' => 'bootstrap.min', 'type' => 'js', 'live' => false),	
			array( 'file_src' => 'slick', 'file_name' => 'slick', 'type' => 'js', 'live' => false),
			array( 'file_src' => 'scrollIt', 'file_name' => 'scrollIt', 'type' => 'js', 'live' => false),
			array( 'file_src' => 'ofi', 'file_name' => 'ofi', 'type' => 'js', 'live' => false),
			array( 'file_src' => 'slick.min', 'file_name' => 'slick.min', 'type' => 'js', 'live' => false),
			array( 'file_src' => 'main', 'file_name' => 'main', 'type' => 'js', 'live' => false),

			)
		);

	foreach ($scripts['files'] as $scripts)
	{
		if($scripts['type'] == "js")
		{
			$url = ($scripts['live'] == false)?THEME_JS.$scripts['file_src'].'.js':$scripts['file_src'];
			$name = ($scripts['file_name'] == "")?$scripts['file_src']:$scripts['file_name'];
			wp_register_script( $name.'-script', $url,'','1.1', true);
 			wp_enqueue_script(  $name.'-script' );
		}
		else
		{
			$url = ($scripts['live'] == false)?THEME_CSS.$scripts['file_src'].'.css':$scripts['file_src'];
			$name = ($scripts['file_name'] == "")?$scripts['file_src']:$scripts['file_name'];
			wp_enqueue_style( $name.'-css', $url, array(), '20120208', 'all');
		}
	}
}
add_action( 'wp_enqueue_scripts', 'framework_scripts' );

/**
 * add image path in js file.
*/
function module_init(){
	wp_register_script( 'my-script', get_stylesheet_directory_uri() . '/assets/js/script.js' );
	$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
	//after wp_enqueue_script
	wp_enqueue_script( 'my-script' );
	wp_localize_script( 'my-script', 'object_name', $translation_array ); 
}
add_action( 'init', 'module_init');

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function module_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'module_skip_link_focus_fix' );
?>