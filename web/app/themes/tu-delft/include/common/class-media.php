<?php

namespace TuDelft\Theme\Common;

use TuDelft\Theme\Common\Cache;

/**
 * Class Media
 *
 * Class for handling Surf Sharekit media and other media related functions. 
 * 
 * 
 * @package     TuDelft\Theme\Common
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */
class Media {

    public function __construct() {
        add_action( 'ajax_query_attachments_args', [ $this, 'prevent_local_media' ] );
        add_action( 'ajax_query_surfsharekit_data', [ $this, 'load_surfsharekit_data' ] );
    }

    /**
     * Prevent local media from being queried
     * 
     * @param array $query
     * 
     * @return array
     * 
     * @since 1.0.0
     */
    public function prevent_local_media( array $query ): array {
        /**
         * Set post type to empty string to prevent local media from being queried
         */
        $query = [
            'post_type' => '',
        ];

        return $query;
    }

    /**
     * Load Surfsharekit data from the API
     * 
     * @return array
     * 
     * @since 1.0.0 
     */
    public static function load_surfsharekit_data(): array {

        if ( ! $cached_data = Cache::get_surfsharekit_data() ) {
            // request data from cache

            $items = Surf_Sharekit::get_items();

            echo "<pre>";
            print_r($items);
            echo "</pre>";
        } 



        return [];
    }

}
