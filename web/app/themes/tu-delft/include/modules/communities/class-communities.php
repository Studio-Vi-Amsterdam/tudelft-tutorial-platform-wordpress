<?php

namespace TuDelft\Theme\Modules\Communities;

use TuDelft\Theme\Abstract\Abstract_Cpt;

/**
 * Class Communities
 *
 * Custom post type for communities.
 *
 *
 * @package     TuDelft\Theme\Modules\Communities
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */
class Communities extends Abstract_Cpt {

	const POST_TYPE = 'communities';

	const POST_PLURAL = 'Communities';
	const POST_SUPPORTS = [ 'title', 'editor', 'revisions', 'author', 'thumbnail' ];
	const POST_ICON = 'dashicons-admin-comments';
	const REWRITE = [];
	const TAXONOMY = [
		[ 'name' => 'Categories', 'slug' => 'community-category', 'rewrite' => [ 'slug' => '.' ] ],
	];
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
}