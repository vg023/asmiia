<?php
/**!
 * Enqueues
 */

if ( ! function_exists('b4st_enqueues') ) {
	function b4st_enqueues() {

		// Styles

		wp_register_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css', false, '4.0.0', null);
		wp_enqueue_style('bootstrap-css');

		wp_register_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', false, '1.8.1', null);
		wp_enqueue_style('slick-css');


 		wp_register_style('general-css', get_template_directory_uri() . '/theme/css/general.css', false, null);
		wp_enqueue_style('general-css');
	  	
	  	wp_register_style('b4st-css', get_template_directory_uri() . '/theme/css/b4st.css', false, null);
		wp_enqueue_style('b4st-css');

		 wp_register_style('header-css', get_template_directory_uri() . '/theme/css/header.css', false, null);
		wp_enqueue_style('header-css');
		if(is_home()){
		 wp_register_style('index-css', get_template_directory_uri() . '/theme/css/index.css', false, null);
		 wp_enqueue_style('index-css');
		}else if(is_singular( 'post' )){
			wp_register_style('single-css', get_template_directory_uri() . '/theme/css/single.css', false, null);
			wp_enqueue_style('single-css');	
		}else if(is_singular( 'publicaciones' )){
			wp_register_style('publicacion-css', get_template_directory_uri() . '/theme/css/publicacion.css', false, null);
			wp_enqueue_style('publicacion-css');	
		}
		// Scripts

		wp_register_script('font-awesome-config-js', get_template_directory_uri() . '/theme/js/font-awesome-config.js', false, null, null);
		wp_enqueue_script('font-awesome-config-js');

		wp_register_script('font-awesome', 'https://use.fontawesome.com/releases/v5.0.4/js/all.js', false, '5.0.4', null);
		wp_enqueue_script('font-awesome');

	  	wp_register_script('modernizr',  'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
		wp_enqueue_script('modernizr');

		wp_register_script('jquery-3.3.1', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1', true);
		wp_enqueue_script('jquery-3.3.1');

		wp_register_script('popper',  'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', false, '1.12.9', true);
		wp_enqueue_script('popper');

	  	wp_register_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js', false, '4.0.0', true);
		wp_enqueue_script('bootstrap-js');

		wp_register_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', false, '1.8.1', true);
		wp_enqueue_script('slick-js');
//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js

		wp_register_script('TweenMax-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.0/TweenMax.min.js', false, '2.0.0', true);
		wp_enqueue_script('TweenMax-js');

		wp_register_script('b4st-js', get_template_directory_uri() . '/theme/js/b4st.js', false, null, true);
		wp_enqueue_script('b4st-js');

		wp_register_script('menu-js', get_template_directory_uri() . '/theme/js/menu.js', false, null, true);
		wp_enqueue_script('menu-js');

		wp_register_script('home-js', get_template_directory_uri() . '/theme/js/home.js', false, null, true);
		wp_enqueue_script('home-js');

		wp_register_script('slider-js', get_template_directory_uri() . '/theme/js/slider.js', false, null, true);
		wp_enqueue_script('slider-js');

		wp_register_script('tween-js', get_template_directory_uri() . '/theme/js/tween.js', false, null, true);
		wp_enqueue_script('tween-js');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'b4st_enqueues', 100);
