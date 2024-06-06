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
    private static $api_url = 'https://api.surfsharekit.nl';

    /**
     * Get all repo items endpoint 
     * 
     * @var string
     */
    private static $repo_items_endpoint = '/api/jsonapi/channel/v1/tudelft/repoItems/';

    /**
     * Upload media endpoint
     * 
     * @var string
     */
    private static $upload_media_endpoint = '/api/repoitemupload/v1/upload/';

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

        $cached_data = Cache::get_surfsharekit_data();

        if ( !empty( $cached_data ) ) {
            return [
                'items' => $cached_data,
                'next_link' => ''
            ];
        }
        
        $final_data = [];
        $url = self::$repo_items_endpoint . '?page[number]=' . $page_number . '&page[size]=' . self::$items_per_page;

        do {
            $data = self::execute_api_request( $url );
            
            if ( empty( $data['data'] ) ) {
                return [
                    'items' => $final_data,
                    'next_link' => ''
                ];
            }
            $url = '';
            $final_data = array_merge($final_data, $data['data']);
            if ( self::has_next( $data['links'] ) ) {
                $url = isset( $data['links']['next'] ) ? $data['links']['next'] : '';
            }

        } while ( sizeof( $final_data ) < 300 && !empty( $url ) ); 


        if ( sizeof( $final_data ) > 300 ) {
            $final_data = array_slice( $final_data, 0, 299 );
        }

        if ( sizeof( $final_data ) ) {
            Cache::set_surfsharekit_data( $final_data );
        }

        return [
            'items' => $final_data,
            'next_link' => $url,
        ];
    }

    /**
     * Upload media to Surf Sharekit
     * 
     * @param array $data
     * 
     * @return array
     * 
     * @since 1.0.0
     */
    public static function upload_media( array $data ): array {
        
        /**
         * Data example:
         * Array
         *   (
         *       [name] => 3ebb72aa5bb14b9d6acac61f4449acac.png
         *       [full_path] => 3ebb72aa5bb14b9d6acac61f4449acac.png
         *       [type] => image/png
         *       [tmp_name] => /tmp/phpw7OUj1
         *       [error] => 0
         *       [size] => 28975
         *   )
         */

        // Read the file content
        $file_contents = file_get_contents( $data['tmp_name'] );

        // Create a boundary string
        $boundary = wp_generate_password(24);

        // Create the body with multipart data
        $payload = '--' . $boundary;
        $payload .= "\r\n";
        $payload .= 'Content-Disposition: form-data; name="' . $data['name'] . '"; filename="' . basename( $data['full_path'] ) . '"' . "\r\n";
        $payload .= 'Content-Type: ' . $data['type'] . "\r\n";
        $payload .= "\r\n";
        $payload .= $file_contents;
        $payload .= "\r\n";
        $payload .= '--' . $boundary . '--';


        return self::execute_api_request( self::$upload_media_endpoint, 'POST', $payload, [ 'content-type' => 'multipart/form-data; boundary=' . $boundary, ] );
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
    private static function execute_api_request( string $endpoint, string $method = 'GET', array|string $params = [], $extra_headers = [] ): array|null {

        $api_key = SURF_SHAREKIT_API_KEY ? : '';

        if ( empty( $api_key ) ) {
            return [];
        }

        $url = self::$api_url . $endpoint;

        $headers = [
            'Authorization' => 'Bearer ' . $api_key,
        ];

        if ( !empty( $extra_headers ) ) {
            $headers = array_merge( $headers, $extra_headers );
        }

        $response = wp_remote_request( $url, [
            'method' => $method,
            'body' => $params,
            'headers' => $headers,
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
        $current = isset( $data['self'] ) ? $data['self'] : '';
        $next = isset( $data['next'] )  ? $data['next'] : '';

        return $current !== $next;
    }
}