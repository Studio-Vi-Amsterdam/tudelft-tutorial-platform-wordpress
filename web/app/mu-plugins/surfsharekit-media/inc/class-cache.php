<?php

namespace TuDelft\SurfShareKit\Inc;

/**
 * Class Cache
 *
 * Class for handling Caching of Surf Sharekit
 * 
 * 
 * @package     TuDelft\Theme\Common
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */
class Cache {
    
    /**
     * Cache duration for Surfsharekit data
     * 
     * @var int
     */
    private static $surfsharkeit_cache_time = HOUR_IN_SECONDS * 5;

    /**
     * Get Surfsharekit data from the cache (if available)
     * 
     * @return array|bool
     * 
     * @since 1.0.0
     */
    public static function get_surfsharekit_data(): array|bool {
        
        $cache = wp_cache_get( 'surfsharekit_data', 'surfsharekit' ) || get_transient( 'surfsharekit_data' );

        return $cache;
    }

    /**
     * Set Surfsharekit data to the cache
     * 
     * @param array $data
     * 
     * @return bool
     * 
     * @since 1.0.0
     */
    public static function set_surfsharekit_data( array $data ): bool {

        $cache = wp_cache_set( 'surfsharekit_data', $data, 'surfsharekit', self::$surfsharkeit_cache_time ) || set_transient( 'surfsharekit_data', $data, self::$surfsharkeit_cache_time );

        return $cache;
    }
}