<?php

namespace TuDelft\SurfShareKit\Inc;

use AssetManagerFramework\ProviderRegistry;
use TuDelft\SurfShareKit\Inc\Provider;

use WP_Scripts;

/**
 * Class Bootstrap
 * 
 * Entry point for the SurfShareKit Media plugin.
 *  
 * @package     TuDelft\SurfShareKit\Inc;
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */

 class Bootstrap {

    public function __construct() {
        add_action( 'amf/register_providers', [ $this, 'register_provider' ] );
        add_action( 'wp_default_scripts', [ $this, 'override_per_page' ], 100 );
    }

    /**
     * Register the SurfShareKit provider.
     * 
     * @param ProviderRegistry $provider_registry
     * 
     * @return void
     * 
     * @since 1.0.0
     */
    public function register_provider( ProviderRegistry $provider_registry ) {
        $provider_registry->register( new Provider() );
    }

    /**
     * Override the per-page setting in JS.
     * SurfShareKit returns 10 items per page
     * 
     * @param WP_Scripts $scripts
     * 
     * @return void
     * 
     * @since 1.0.0
     * 
     */
    function override_per_page( WP_Scripts $scripts ) : void {
        $scripts->add_inline_script( 'media-models', 'wp.media.model.Query.defaultArgs.posts_per_page = 300' );
    }
}