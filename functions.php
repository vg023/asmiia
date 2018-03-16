<?php

	//Inserción de jQuery
	if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
	function my_jquery_enqueue() {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
	   wp_enqueue_script('jquery');
	}

	// Soporte para menús con wp_nav_menu( array('menu' => 'Nombre_del_menu' ));
	add_theme_support('menus');

	// Soporte para imagen destacada
	add_theme_support('post-thumbnails');

  // Insertar Imagen Destacada
  function imagen_destacada($clases = "", $img = "assets/img/destacada.jpg") {
    if ( has_post_thumbnail() ):
      if ( $clases == "" )
        the_post_thumbnail('post-thumbnail');
      else
        the_post_thumbnail('post-thumbnail', ['class' => $clases]);
    else:
      $ruta = get_template_directory_uri();
      if ( $clases == "" )
        echo "<img src='$ruta/$img'>";
      else
        echo "<img class='$clases' src='$ruta/$img'>";
    endif;
  }

	// Soporte para sidebar
	if ( function_exists('register_sidebar') )
		register_sidebar(array('name'=>'Barra Lateral',
		'before_title' => '<div class="widget-title"><h2>',
		'after_title' => '</h2></div>',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
	));

	// shortcode in widgets
	if ( !is_admin() ){
	    add_filter('widget_text', 'do_shortcode', 11);
	}

	// make TinyMCE allow iframes
	add_filter('tiny_mce_before_init', create_function( '$a',
	'$a["extended_valid_elements"] = "iframe[id|class|title|style|align|frameborder|height|longdesc|marginheight|marginwidth|name|scrolling|src|width]"; return $a;') );

	add_filter('mce_buttons','wysiwyg_editor');
	function wysiwyg_editor($mce_buttons) {
	    $pos = array_search('wp_more',$mce_buttons,true);
	    if ($pos !== false) {
	        $tmp_buttons = array_slice($mce_buttons, 0, $pos+1);
	        $tmp_buttons[] = 'wp_page';
	        $mce_buttons = array_merge($tmp_buttons, array_slice($mce_buttons, $pos+1));
	    }
	    return $mce_buttons;
	}

	function mqw_mas_botones($buttons) {
	 $buttons[] = 'hr';
	 $buttons[] = 'del';
	 $buttons[] = 'sub';
	 $buttons[] = 'sup';
	 $buttons[] = 'fontselect';
	 $buttons[] = 'fontsizeselect';
	 $buttons[] = 'cleanup';
	 $buttons[] = 'styleselect';
	 return $buttons;
	}
	add_filter("mce_buttons_3", "mqw_mas_botones");

	//Añadir columna de IDs
	add_filter('manage_posts_columns', 'posts_columns_id', 5);
	add_action('manage_posts_custom_column', 'posts_custom_id_columns', 5, 2);
	add_filter('manage_pages_columns', 'posts_columns_id', 5);
	add_action('manage_pages_custom_column', 'posts_custom_id_columns', 5, 2);

	function posts_columns_id($defaults){
		$defaults['wps_post_id'] = __('ID');
		return $defaults;
	}
	function posts_custom_id_columns($column_name, $id){
		if($column_name === 'wps_post_id'){
			echo $id;
		}
	}

	// Registrar scripts en el tema
	add_action( 'wp_enqueue_scripts', 'registrar_scripts', 1 );
	function registrar_scripts() {
		//Scripts
		//Prefixfree
		wp_register_script( 'prefixfree', get_template_directory_uri() . '/assets/js/prefixfree.min.js', array( 'jquery' ), '1.0', true );
		// Popper
		wp_register_script( 'bootstrap', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js", array( 'jquery' ), '1.0', true );
		// Bootstrap
		wp_register_script( 'bootstrap', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js", array( 'jquery' ), '1.0', true );
		// Font Awesome Pro
		wp_register_script( 'font-awesome-pro', get_template_directory_uri() . '/assets/js/fontawesome-all.min.js', null, '1.0', true );
		// Draw SVG
		wp_register_script( 'drawsvg', get_template_directory_uri() . '/assets/js/DrawSVGPlugin.min.js', null, '1.0', true );
		// Morph SVG
		wp_register_script( 'morphsvg', get_template_directory_uri() . '/assets/js/MorphSVGPlugin.min.js', null, '1.0', true );
		// Split Text
		wp_register_script( 'splitText', get_template_directory_uri() . '/assets/js/SplitText.min.js', null, '1.0', true );
		// Slick
		wp_register_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array( 'jquery' ), '1.0', true );
		// Images Loaded
		wp_register_script( 'images-loaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array( 'jquery' ), '1.0', true );
		// FitVids
		wp_register_script( 'fitvids', get_template_directory_uri() . '/assets/js/jquery.fitvids.js', array( 'jquery' ), '1.0', true );
		// Inview
		wp_register_script( 'inview', get_template_directory_uri() . '/assets/js/jquery.inview.js', array( 'jquery' ), '1.0', true );
		//GSAP TweenMax
		wp_register_script( "gsap-tm-cdn", "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js" );
		//Scroll Magic
		wp_register_script( "scrollmagic-cdn", "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://cdn.jsdelivr.net/g/scrollmagic@2.0.5(ScrollMagic.min.js+plugins/animation.gsap.min.js+plugins/animation.velocity.min.js+plugins/debug.addIndicators.min.js+plugins/jquery.ScrollMagic.min.js)" );
		//CSS
		//Bootstrap
		wp_register_style( 'bootstrap', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" );
		//Font Awesome SVG
		wp_register_style( "font-awesome-svg", get_template_directory_uri() . '/assets/css/fa-svg-with-js.css' );
		//Font Awesome Light
		wp_register_style( "font-awesome-l", get_template_directory_uri() . '/assets/css/fa-light.min.css' );
		//Font Awesome Regular
		wp_register_style( "font-awesome-r", get_template_directory_uri() . '/assets/css/fa-regular.min.css' );
		//Font Awesome Solid
		wp_register_style( "font-awesome-s", get_template_directory_uri() . '/assets/css/fa-solid.min.css' );
		//Font Awesome
		wp_register_style( "font-awesome", get_template_directory_uri() . '/assets/css/fontawesome-all.min.css' );
		//Slick
		wp_register_style( "slick", get_template_directory_uri() . '/assets/css/slick.css' );
		//Slick Theme
		wp_register_style( "slick-theme", get_template_directory_uri() . '/assets/css/slick-theme.css' );
	}

	// Añadir los scripts al DOM
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
	function theme_enqueue_scripts() {
		// Scripts
		wp_enqueue_script('prefixfree');
		wp_enqueue_script('popper');
		wp_enqueue_script('bootstrap');
		wp_enqueue_script('font-awesome-pro');
		wp_enqueue_script('gsap-tm-cdn');
		wp_enqueue_script('scrollmagic-cdn');
/*
    Comodínes
		wp_enqueue_script('drawsvg');
		wp_enqueue_script('morphsvg');
		wp_enqueue_script('splitText');
		wp_enqueue_script('slick');
		wp_enqueue_script('images-loaded');
		wp_enqueue_script('fitvids');
		wp_enqueue_script('inview');
*/
		// CSS
		wp_enqueue_style('bootstrap');
/*
    Opcionales
		wp_enqueue_style('font-awesome-l');
		wp_enqueue_style('font-awesome-r');
		wp_enqueue_style('font-awesome-s');
		wp_enqueue_style('font-awesome');
		wp_enqueue_style('slick');
		wp_enqueue_style('slick-theme');
*/
		wp_enqueue_style('font-awesome-svg');
	}
	
	// Footer Admin
	function remove_footer_admin () {
   echo 'Desarrollado por <a href="https://pugsarrollos.com">Pugsarrollos</a>';   
  }
   
  add_filter('admin_footer_text', 'remove_footer_admin');

  remove_action('welcome_panel', 'wp_welcome_panel');
  
  


	// Login CSS
	function my_login_stylesheet() {
	    wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/assets/css/style-login.css' );
	}
	add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

	//Añadir google analytics
	add_action('wp_footer', 'add_googleanalytics');
	function add_googleanalytics() {
	// Paste your Google Analytics code from Step 6 here
	}
	

	// Cambiar tamaño de the post thumbnail
/*
	add_image_size('home', 200, 217, true);
	add_image_size('medium', 600, 300, true);
*/
	
	// Detectar navegadores
	function browser_body_class($classes) {
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
	if($is_lynx) $classes[] = ‘lynx’;
	elseif($is_gecko) $classes[] = ‘gecko’;
	elseif($is_opera) $classes[] = ‘opera’;
	elseif($is_NS4) $classes[] = ‘ns4’;
	elseif($is_safari) $classes[] = ‘safari’;
	elseif($is_chrome) $classes[] = ‘chrome’;
	elseif($is_IE) $classes[] = ‘ie’;
	else $classes[] = ‘unknown’;

	if($is_iphone) $classes[] = ‘iphone’;
	return $classes;
	}
	add_filter(‘body_class’,’browser_body_class’);

	// Redireccionar directo al post si es el único en una categoría o tag
	function redirect_to_post(){
	    global $wp_query;
	    if( is_archive() && $wp_query->post_count == 1 ){
	        the_post();
	        $post_url = get_permalink();
	        wp_redirect( $post_url );
	    }

	} add_action('template_redirect', 'redirect_to_post');
	
	// Protección anto ataques XSS
	add_action( 'send_headers', 'add_header_xcontenttype' );
  function add_header_xcontenttype() {
  header( 'X-Content-Type-Options: nosniff' );
  }
  
  // Protección anti iFrames
  add_action( 'send_headers', 'add_header_xframeoptions' );
  function add_header_xframeoptions() {
  header( 'X-Frame-Options: SAMEORIGIN' );
  }
  
/*
  Estos van en el wp-config.php
  
  // Deshabilitar edición de Código desde Admin
  define(‘DISALLOW_FILE_EDIT’, true);
  
  // Deshabilitar instalación de plugins y/o temas nuevos
  define(‘DISALLOW_FILE_MODS’,true)
  
  //Todas las actualizaciones del núcleo activadas
  define( 'WP_AUTO_UPDATE_CORE', true );
*/
  	
	// Para usar ajax
	/*
	$page_datas = array( 'admin_ajax' => admin_url( 'admin-ajax.php' ) );
 	wp_localize_script( $scriptenelqueusamosajax, 'page_data', $page_datas );
 	*/
 	
 	/* Opcionales
	// Usar ajax
	add_action( 'wp_ajax_$nombrecall', '$nombrecall_init' );
	add_action( 'wp_ajax_nopriv_$nombrecall', '$nombrecall_init' );

	function $nombrecall_init() {

	}

	// Cambiar largo del excerpt
	function new_excerpt_length($length) {
	return 100;
	}
	add_filter('excerpt_length', 'new_excerpt_length');


	// Añadir soporte para posrt formats
	add_theme_support( 'post-formats', array( 'chat', 'audio', 'video', 'status', 'quote', 'link', 'gallery', 'aside' ) );



	// Cambiar nombres de los roles
	function wps_change_role_name() {
    global $wp_roles;
    if ( ! isset( $wp_roles ) )
        $wp_roles = new WP_Roles();
	    $wp_roles->roles[$rol]['name'] = '$nombreRol';
	    $wp_roles->role_names[$rol] = '$nombreRol';
	}
	add_action('init', 'wps_change_role_name');

	// Agregar search a un menú
	add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);
	function add_search_form($items, $args) {
	if( $args->theme_location == 'MENU-NAME' )
	        $items .= '<li class="search"><form role="search" method="get" id="searchform" action="'.home_url( '/' ).'"><input type="text" value="search" name="s" id="s" /><input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" /></form></li>';
	        return $items;
	}
	*/

?>
