<?php

namespace TuDelft\Theme\Modules\Software;

use TuDelft\Theme\Abstract\Abstract_Cpt;
use WP_Query;
/**
 * Class Software
 *
 * Custom post type for softwares.
 * 
 * 
 * @package     TuDelft\Theme\Modules\Software
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */
class Software extends Abstract_Cpt {

    const POST_TYPE = 'software';
    const POST_SUPPORTS = [ 'title', 'editor', 'revisions' ];
    const POST_ICON = 'dashicons-desktop';
    const REWRITE = [];
    const TAXONOMY = [
        [ 'name' => 'software-version', 'rewrite' => [ 'slug' => '.' ] ],
    ];
    const EXTRA_SETTINGS = [
        'public' => true,
        'show_in_rest' => true,
        'show_in_search' => false,
        'has_archive' => true,
        'publicly_queryable' => true,
    ];

    public function __construct() {
        parent::__construct( self::POST_TYPE, self::POST_SUPPORTS, self::POST_ICON, self::REWRITE, self::TAXONOMY, self::EXTRA_SETTINGS );
    }

    /**
     * Get all softwares
     * 
     * @since 1.0.0
     * 
     * @return array
     */
    public static function get_all_softwares(): array {
        $args = [
            'post_type' => self::POST_TYPE,
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC',
        ];

        $query = new WP_Query( $args );

        return $query->posts;
    }
    
    /**
     * Group software in matrix (for menu)
     * 
     * @since 1.0.0
     * 
     * @return array
     */
    public static function get_softwares_matrix(int $columns = 3): array {
        $softwares = self::get_all_softwares();

        $amount = count($softwares);

        $per_column = ceil($amount / $columns);

        $matrix = array_chunk($softwares, $per_column);

        return $matrix;
    }
}