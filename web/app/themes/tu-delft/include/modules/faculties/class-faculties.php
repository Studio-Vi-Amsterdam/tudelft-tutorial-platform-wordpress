<?php

namespace TuDelft\Theme\Modules\Faculties;

use TuDelft\Theme\Abstract\Abstract_Cpt;
use WP_Query;

/**
 * Class Faculties
 *
 * Custom post type for faculties.
 *
 *
 * @package     TuDelft\Theme\Modules\Faculties
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */
class Faculties extends Abstract_Cpt {

	const POST_TYPE = 'faculties';

	const POST_PLURAL = 'Faculties';
	const POST_SUPPORTS = [ 'title', 'editor', 'revisions', 'excerpt', 'author', 'thumbnail' ];
	const POST_ICON = 'dashicons-admin-home';
	const REWRITE = [];
	const TAXONOMY = [];
	const EXTRA_SETTINGS = [
		'public' => true,
		'show_in_rest' => true,
		'show_in_search' => true,
		'has_archive' => false,
		'publicly_queryable' => true,
	];

	public function __construct() {
		parent::__construct( self::POST_TYPE, self::POST_SUPPORTS, self::POST_ICON, self::REWRITE, self::TAXONOMY, self::EXTRA_SETTINGS, self::POST_PLURAL );
	}

	public static function get_all_faculties()
	{
		$args = [
			'post_type' => 'faculties',
			'numberposts' => -1,
			'post_status' => 'publish',
			'fields' => 'ids',
		];
		return get_posts($args);
	}

	/**
	 * Search through faculties by title
	 *
	 * @param string $search
	 *
	 * @return array
	 */
	public static function search_faculties( string $search ): array {
		$args = [
			'post_type' => self::POST_TYPE,
			'posts_per_page' => -1,
			's' => $search,
		];

		$query = new WP_Query( $args );

		return array_map( function( $faculty ) {
			return [
				'id' => $faculty->ID,
				'type' => self::POST_TYPE,
				'title' => $faculty->post_title,
				'permalink' => get_permalink( $faculty->ID ),
				'content' => get_the_excerpt( $faculty->ID ),
				'keywords' => [],
			];
		}, $query->posts ?? [] );
	}
}