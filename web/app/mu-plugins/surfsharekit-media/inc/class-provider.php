<?php

namespace TuDelft\SurfShareKit\Inc;

use AssetManagerFramework\{
	ProviderRegistry,
	Provider as BaseProvider,
	MediaList,
	MediaResponse,
	Image,
};

/**
 * Class Surfshare_Kit 
 * 
 * Implements the Asset Manager Framework (AMF) WordPress provider to use 3rd party as source for your media library.
 * Entry point for the AMF WordPress provider.
 * 
 * 
 * @package     TuDelft\SurfShareKit\Inc;
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */
class Provider extends BaseProvider {

    public function get_id(): string {
		return 'surfsharekit';
	}

	public function get_name(): string {
		return __( 'Surfshare Kit' );
	}

	/**
	 * Retrieve the images for a query.
	 *
	 * @param array $args Query args from the media library
	 * 
	 * @return MediaResponse Found images.
	 * 
	 * @since 1.0.0
	 */
	protected function request( array $args ) : MediaResponse {
		
		$page_number = (int) ( $args['paged'] ?? 1 );
		
		$request_data = Provider::request_and_process( $page_number );
		$items = $request_data['items'];
		// $next_link = $request_data['next_link'];

		$total_items = count( $items );

		if ( !empty( $args['s'] ) ) {
			$items = array_filter( $items, function( $item ) use ( $args ) {
				return strpos( $item->title, $args['s'] ) !== false;
			} );
		}

		if ( !empty( $args['post_mime_type'] ) ) {

			$doc_type = $args['post_mime_type'][0];

			/**
			 * Mapping of the mime types from the media library to the SurfShareKit API
			 * Some names are different, so we need to map them to the correct ones.
			 */
			switch ( $args['post_mime_type'][0] ) {
				case 'application/msword':
					$doc_type = 'application/vnd.openxmlformats-officedocument';
					break;
				case 'application/x-gzip':
					$doc_type = 'gzip';
					break;
			}

			$items = array_filter( $items, function( $item ) use ( $doc_type ) {
				return strpos( $item->mime, $doc_type ) !== false;
			} );
		}

		return new MediaResponse(
			new MediaList( ...$items ),
			count( $items ) * $page_number, // Total number of available results.
			$total_items * $page_number // Number of items requested per page.
		);
	}

	/**
	 * Generate response from the SurfShareKit API
	 * 
	 * @param array $data
	 * 
	 * @return array
	 * 
	 * @since 1.0.0
	 */
	private function request_and_process( int $page_number = 1 ) : array {
		$surf_data = SurfShareKit::get_items( $page_number );
		
		$data = $surf_data['items'];
		$next_link = $surf_data['next_link'];

		$items = $this->prepare_for_response( $data );

		$total_items = count( $items );

		return [
			'items' => $items,
			'next_link' => $next_link,
		];

		
	}

	/**
	 * Generate response from the SurfShareKit API
	 * 
	 * @param array $data
	 * 
	 * @return array
	 * 
	 * @since 1.0.0
	 */
	private function prepare_for_response( array $data ) : array {
		$items = [];

		foreach ( $data as $item ) {
			
			if (!empty( $item['meta'] ) && !empty( $item['meta']['status'] ) && $item['meta']['status'] !== 'published') {
				continue;
			}

			$attributes = $item['attributes'];
			
			if ( empty( $attributes['files'] ) ) {
				continue;
			}
			
			foreach ( $attributes['files'] as $file ) {
				// convert name to slug
				$slug = sanitize_title( $file['fileName'] );
				// create new image object with the slug and mime type
				$media = new Image( $slug, $file['resourceMimeType'] );
				// set general data
				$media->set_url( $file['url'] );
				$media->set_link( $file['url'] );
				$media->set_title( $file['fileName'] );
				$media->set_description( $attributes['abstract'] ?? '' );
				$media->set_date( strtotime( $attributes['publishedAt'] ) );
				$media->set_filename( $file['fileName'] );

				// make sure the author is set
				if ( isset( $attributes['authors'] ) && !empty( $attributes['authors'] ) ){
					$media->set_author( $attributes['authors'][0]['person']['name'] );
				}

				// Set custom icon based on the file type
				if ( strpos( $file['resourceMimeType'], 'image' ) !== false ) {
					$media->icon = $file['url'];
				} else if ( strpos( $file['resourceMimeType'], 'pdf' ) !== false ) {
					$media->icon = '/wp/wp-includes/images/media/document.png';
				} else if ( strpos( $file['resourceMimeType'], 'presentation' ) !== false ) {
					$media->icon = '/wp/wp-includes/images/media/document.png';
				} else if ( strpos( $file['resourceMimeType'], 'spreadsheet' ) !== false ) {
					$media->icon = '/wp/wp-includes/images/media/spreadsheet.png';
				} else if ( strpos( $file['resourceMimeType'], 'audio' ) !== false ) {
					$media->icon = '/wp/wp-includes/images/media/audio.png';
				} else if ( strpos( $file['resourceMimeType'], 'video' ) !== false ) {
					$media->icon = '/wp/wp-includes/images/media/video.png';
				} else if ( strpos( $file['resourceMimeType'], 'archive' ) !== false ) {
					$media->icon = '/wp/wp-includes/images/media/archive.png';
				} else if ( strpos( $file['resourceMimeType'], 'text' ) !== false ) {
					$media->icon = '/wp/wp-includes/images/media/text.png';
				}

				$items[] = $media;
			}
		}

		return $items;
	}
}