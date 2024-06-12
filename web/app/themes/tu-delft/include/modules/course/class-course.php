<?php

namespace TuDelft\Theme\Modules\Course;

use TuDelft\Theme\Abstract\Abstract_Cpt;
use WP_Query;

/**
 * Class Course
 *
 * Custom post type for courses.
 * 
 * 
 * @package     TuDelft\Theme\Modules\Course
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */
class Course extends Abstract_Cpt {

    const POST_TYPE = 'course';
    const POST_SUPPORTS = [ 'title', 'editor', 'revisions' ];
    const POST_ICON = 'dashicons-awards';
    const REWRITE = [];
    const TAXONOMY = [
        [ 'name' => 'keywords', 'rewrite' => [ 'slug' => '.' ] ],
        [ 'name' => 'teachers', 'rewrite' => [ 'slug' => '.' ] ],
        [ 'name' => 'academic-level', 'rewrite' => [ 'slug' => '.' ] ],
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
     * Get courses that are part of a specific academic level
     * 
     * @since 1.0.0
     * 
     * @param string $academic_level
     * 
     * @return array
     */
    public static function get_courses_by_academic_level( array $academic_level, int $amount = 5, bool $inclusive = true ): array {
        
        $args = [
            'post_type' => self::POST_TYPE,
            'posts_per_page' => $amount,
            'orderby' => 'title',
            'order' => 'ASC',
            'tax_query' => [
                [
                    'taxonomy' => 'academic-level',
                    'field' => 'slug',
                    'terms' => $academic_level,
                    'operator' => $inclusive ? 'IN' : 'NOT IN',
                ],
            ],
        ];

        $query = new WP_Query( $args );

        return $query->posts;
    }
}