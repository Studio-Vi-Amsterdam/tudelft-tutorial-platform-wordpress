<?php
/**
 * Enqueue scripts and styles.
 */
function enqueue_scripts() {
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'classic-theme-styles' );
		wp_dequeue_style( 'global-styles' );

    // set path variables for file timestamps
    $js_path = get_template_directory().'/dist/main.min.js';
    $vendors_js_path = get_template_directory().'/dist/vendors.min.js';
    $style_path = get_template_directory().'/dist/main.min.css';
    $tailwind_path = get_template_directory().'/dist/tailwind.css';

    // styles
    wp_enqueue_style( 'tailwindcss', get_template_directory_uri() . '/dist/tailwind.css', array(), filemtime( $tailwind_path ));
    wp_enqueue_style( 'mincss', get_template_directory_uri() . '/dist/main.min.css',  array(), filemtime( $style_path ), 'all');

    // remove old jquery
    wp_deregister_script( 'jquery' );

    // add latest jquery
    wp_register_script( 'jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js', false, null, true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'lazy-load', 'https://cdn.jsdelivr.net/npm/jquery-lazy@1.7.9/jquery.lazy.min.js', array('jquery'), null, true );

    wp_enqueue_script( 'highlight', 'https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.11.1/build/highlight.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'highlightjs-line-numbers', 'https://cdn.jsdelivr.net/npm/highlightjs-line-numbers.js@2.9.0/dist/highlightjs-line-numbers.min.js', array('jquery'), null, true );

    // custom js
    wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/main.min.js', array('jquery'), filemtime( $js_path ) , true);
    
    // vendors
    wp_enqueue_script( 'vendors', get_template_directory_uri() . '/dist/vendors.min.js', false , filemtime( $vendors_js_path ) , true);

    //send PHP variables to JS
    wp_localize_script( 'main', 'customjs_ajax_object',
        array( 
            'ajax_url' => admin_url( 'admin-ajax.php' ),
            'ajax_nonce' => wp_create_nonce( "secure_nonce_name" ),
            'site_url' => get_site_url(),
            'home_url' => get_home_url(),
            'theme_url' => get_template_directory_uri()
        )
    );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );


/*
=====================
	Remove JQuery migrate
=====================
*/
function remove_jquery_migrate( $scripts ) {
    if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
        $script = $scripts->registered['jquery'];
        if ( $script->deps ) { 
        // Check whether the script has any dependencies
            $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
        }
    } 
}
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );


add_filter('script_loader_tag', 'add_defer_attribute' , 10, 3);
function add_defer_attribute($tag, $handle, $src) {
	if ( 'jquery' === $handle || 'wp-i18n' === $handle || 'wp-hooks' === $handle) {
		return $tag;
	}

	if(!is_admin()){
		return str_replace( ' src', ' defer src', $tag );
	}

	return $tag;
}
