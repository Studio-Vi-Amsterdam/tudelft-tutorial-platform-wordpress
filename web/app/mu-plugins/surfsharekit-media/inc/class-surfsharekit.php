<?php

namespace TuDelft\SurfShareKit\Inc;

/**
 * Class SurfSharekit
 *
 * Class for handling all communication with Surf Sharekit API. 
 * 
 * 
 * @package     TuDelft\SurfShareKit\Inc;
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */

 class SurfShareKit {
    /**
    * API URL
    * 
    * @var string
    */
    private static $api_url = 'https://api.surfsharekit.nl/api/';

    /**
     * Get all repo items endpoint 
     * 
     * @var string
     */
    private static $repo_items_endpoint = 'jsonapi/channel/v1/tudelft/repoItems/';

    /**
     * Items per page
     * 
     * @var int
     */
    private static $items_per_page = 15;

    /**
     * Get all repo items from the API
     * 
     * @return array
     * 
     * @since 1.0.0
     */
    public static function get_items( int $page_number = 1 ): array {

        $url = self::$repo_items_endpoint . '?page[number]=' . $page_number . '&page[size]=' . self::$items_per_page;

        $data = self::execute_api_request( $url );

        $next_link = '';
        
        if ( self::has_next( $data['links'] ) ) {
            $next_link = $data['links']['next'];
        }

        return [
            'items' => $data['data'],
            'next_link' => $next_link,
        ];
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

        if ( empty( $api_key ) ) {
            return [];
        }

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

    /**
     * Does next URL exist
     * 
     * @param array $data
     * 
     * @return bool
     * 
     * @since 1.0.0
     */
    private static function has_next( array $data ): bool {
        $current = $data['self'] ? : '';
        $next = $data['next'] ? : '';

        return $current !== $next;
    }
}