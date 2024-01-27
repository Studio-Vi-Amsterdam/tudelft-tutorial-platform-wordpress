<?php

namespace TuDelft\Theme\Common;

/**
 * Class SurfSharekit
 *
 * Class for handling all communication with Surf Sharekit API. 
 * 
 * 
 * @package     TuDelft\Theme\Common
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */

 class Surf_Sharekit {
    
    /**
    * API URL
    * 
    * @var string
    */
    private static $api_url = 'https://api.acc.surfsharekit.nl/api/';

    /**
     * Get all repo items endpoint 
     * 
     * @var string
     */
    private static $repo_items_endpoint = 'jsonapi/channel/v1/tudelft/repoItems/';

    /**
     * Get all repo items from the API
     * 
     * @return array
     * 
     * @since 1.0.0
     */
    public static function get_items(): array {

        $data = self::execute_api_request( self::$repo_items_endpoint );

        return $data;
    }


    /**
    * Execute API request
    * 
    * @param string $endpoint
    * @param string $method default: GET
    * @param array $params default: []
    * 
    * @return array
    * 
    * @since 1.0.0
    */
    private static function execute_api_request( string $endpoint, string $method = 'GET', array $params = [] ): array {

        $api_key = SURF_SHAREKIT_API_KEY ? : '';

        $url = self::$api_url . $endpoint;

        $response = wp_remote_request( $url, [
            'method' => $method,
            'body' => $params,
            'headers' => [
                'Authorization' => 'Bearer ' . $api_key,
            ],
        ] ); 

        /**
         * If request fails, return empty array
         * 
         * TODO: log error
         * 
         * @since 1.0.0
         */
        if ( is_wp_error( $response ) ) {
            return [];
        }

        $response_body = wp_remote_retrieve_body( $response );

        $data = json_decode( $response_body, true );

        return $data;
    }
}