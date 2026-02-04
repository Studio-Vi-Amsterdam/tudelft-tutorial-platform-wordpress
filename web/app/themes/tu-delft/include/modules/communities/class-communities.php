<?php

namespace TuDelft\Theme\Modules\Communities;

use TuDelft\Theme\Abstract\Abstract_Cpt;
use WP_Query;

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
		[ 'name' => 'Categories', 'slug' => 'community-category', 'rewrite' => false ],
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

		add_action( 'init', [ $this, 'add_rewrite_rules' ], 20 );
		add_filter( 'query_vars', [ $this, 'add_query_vars' ] );

		add_filter( 'term_link', [ $this, 'filter_term_link' ], 10, 3 );
		add_action( 'template_redirect', [ $this, 'validate_term_for_community' ] );
	}

	public function add_rewrite_rules(): void {
		add_rewrite_tag('%community%', '([^&]+)');

		add_rewrite_rule(
			'^communities/([^/]+)/([^/]+)/?$',
			'index.php?community=$matches[1]&community-category=$matches[2]',
			'top'
		);
	}

	public function add_query_vars( array $vars ): array {
		$vars[] = 'community';
		return $vars;
	}

	/**
	 * Build term links as /communities/{community-slug}/{term-slug}
	 * This needs a “current community context” to know which community to use.
	 *
	 * Works great when you’re on a single community page and render term links there.
	 */
	public function filter_term_link( string $termlink, \WP_Term $term, string $taxonomy ): string {
		if ( $taxonomy !== 'community-category' ) {
			return $termlink;
		}

		$post_id = get_queried_object_id();
		if ( ! $post_id || get_post_type( $post_id ) !== self::POST_TYPE ) {
			return $termlink;
		}

		return home_url( '/communities/' . get_post_field( 'post_name', $post_id ) . '/' . $term->slug . '/' );
	}

	public function validate_term_for_community(): void {
		if ( ! is_singular( self::POST_TYPE ) ) {
			return;
		}

		$term_slug = get_query_var( 'community-category' );
		if ( empty( $term_slug ) ) {
			return;
		}

		$post_id = get_queried_object_id();
		$term    = get_term_by( 'slug', $term_slug, 'community-category' );

		if ( ! $term || is_wp_error( $term ) ) {
			$this->force_404();
			return;
		}

		$assigned = wp_get_post_terms( $post_id, 'community-category', [ 'fields' => 'ids' ] );
		if ( is_wp_error( $assigned ) || ! in_array( (int) $term->term_id, array_map( 'intval', $assigned ), true ) ) {
			$this->force_404();
		}
	}

	public static function get_communities_materials($community_id, $community_term_id): array
	{
		$q = new WP_Query( [
			'post_type'      => 'tutorial',
			'post_status'    => 'publish',
			'posts_per_page' => -1,
			'orderby'        => 'date',
			'order'          => 'DESC',
			'meta_query' => [
				[
					'key'     => 'community',
					'value'   => $community_id,
					'compare' => '=',
					'type'    => 'NUMERIC',
				],
				[
					'key'     => 'community_category',
					'value'   => '"' . $community_term_id . '"',
					'compare' => 'LIKE',
				],
			],
		]);

		return $q->posts;
	}

	public static function get_all_communities()
	{
		$args = [
			'post_type' => 'communities',
			'numberposts' => -1,
			'post_status' => 'publish',
			'fields' => 'ids',
		];
		return get_posts($args);
	}

	public static function get_parent_categories_by_community($community_id): array
	{
		$terms = get_the_terms($community_id, 'community-category');

		if (is_wp_error($terms) || empty($terms)) {
			$terms = [];
		}

		$terms = array_filter($terms, function ($term) {
			return (int) $term->parent === 0;
		});

		return $terms;
	}

	public static function get_child_categories_by_parent_term_id($parent_term_id): array
	{
		return get_terms(
			[
				'taxonomy' => 'community-category',
				'parent' => $parent_term_id
			]
		);
	}

	private function force_404(): void {
		global $wp_query;
		$wp_query->set_404();
		status_header( 404 );
		nocache_headers();
	}
}