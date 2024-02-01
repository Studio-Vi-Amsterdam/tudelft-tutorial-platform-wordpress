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

	protected function request( array $args ) : MediaResponse {
		$kittens = [
			500 => 'Boop',
			600 => 'Fuzzy',
			700 => 'Paws',
		];
		$items = [];

		foreach ( $kittens as $id => $title ) {
			$item = new Image( $id, 'image/jpeg' );
			$item->set_url( sprintf(
				'https://placekitten.com/%1$d/%1$d',
				$id
			) );
			$item->set_title( $title );
			$item->set_width( $id );
			$item->set_height( $id );

			$items[] = $item;
		}

		return new MediaResponse(
			new MediaList( ...$items ),
			count( $kittens ), // Total number of available results.
			count( $kittens )  // Number of items requested per page.
		);
	}
}