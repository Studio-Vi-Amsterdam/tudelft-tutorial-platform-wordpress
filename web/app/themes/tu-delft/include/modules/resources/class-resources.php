<?php

namespace TuDelft\Theme\Modules\Resources;

use TuDelft\Theme\Abstract\Abstract_Cpt;
use WP_Query;

/**
 * Class Resources
 *
 * Custom post type for faculties.
 *
 *
 * @package     TuDelft\Theme\Modules\Resources
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */
class Resources extends Abstract_Cpt {

	const POST_TYPE = 'resources';

	const POST_PLURAL = 'Resources';
	const POST_SUPPORTS = [ 'title', 'editor', 'revisions', 'excerpt', 'author', 'thumbnail' ];
	const POST_ICON = 'dashicons-media-document';
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


		add_action('wp_ajax_resources_paginate', [__CLASS__, 'ajax_paginate']);
		add_action('wp_ajax_nopriv_resources_paginate', [__CLASS__, 'ajax_paginate']);
	}

	public static function get_resources(int $paged = 1, $per_page = 1, $meta_query = [])
	{
		$args = [
			'post_type' => self::POST_TYPE,
			'posts_per_page' => $per_page,
			'paged' => $paged,
			'post_status' => 'publish',
		];

		if(!empty($meta_query)) {
			$args['meta_query'] = $meta_query;
		}

		return new WP_Query($args);
	}

	public static function ajax_paginate(): void {
		$paged    = isset($_POST['page']) ? (int) $_POST['page'] : 1;
		$per_page = isset($_POST['per_page']) ? (int) $_POST['per_page'] : 1;
		$meta_query = isset($_POST['meta_query']) ? json_decode(stripslashes($_POST['meta_query']) , true) : [];

		$paged    = max(1, $paged);
		$per_page = max(1, $per_page);

		$query = self::get_resources($paged, $per_page, $meta_query);

		ob_start();
		if ($query->have_posts()) {
			while ($query->have_posts()) {
				$query->the_post();
				get_template_part('template-parts/items/resource', null, ['id' => get_the_ID()]);
			}
		}
		wp_reset_postdata();
		$resources_html = ob_get_clean();


		ob_start();
		echo generate_pagination($paged, $query->max_num_pages);
		$pagination_html = ob_get_clean();

		wp_send_json_success([
			'html'     => $resources_html,
			'pagination_html' => $pagination_html,
			'current'  => $paged,
			'total'    => (int) $query->max_num_pages,
			'has_prev' => $paged > 1,
			'has_next' => $paged < (int) $query->max_num_pages,
		]);
	}
}