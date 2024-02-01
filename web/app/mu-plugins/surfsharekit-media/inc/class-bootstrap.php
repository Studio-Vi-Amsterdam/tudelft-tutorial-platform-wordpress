<?php

namespace TuDelft\SurfShareKit\Inc;

use AssetManagerFramework\ProviderRegistry;
use TuDelft\SurfShareKit\Inc\Provider;

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
}