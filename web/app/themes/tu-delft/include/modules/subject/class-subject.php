<?php

namespace TuDelft\Theme\Modules\Subject;

use TuDelft\Theme\Abstract\Abstract_Cpt;

/**
 * Class Subject
 *
 * Custom post type for subjects.
 * 
 * 
 * @package     TuDelft\Theme\Modules\Subject
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */
class Subject extends Abstract_Cpt {

    const POST_TYPE = 'subject';
    const POST_SUPPORTS = [ 'title', 'editor', 'revisions' ];
    const POST_ICON = 'dashicons-book';
    const REWRITE = [];
    const TAXONOMY = [
        [ 'name' => 'keywords', 'rewrite' => [ 'slug' => '.' ] ],
        [ 'name' => 'category', 'rewrite' => [ 'slug' => '.' ] ],
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
     * Get all categories and their sub-categories
     * 
     * @since 1.0.0
     * 
     * @return array
     */
    public static function get_categories(): array {
        $categories = get_terms( [
            'taxonomy' => 'category',
            'hide_empty' => false,
            'exclude' => '1',
        ] );

        // order by parents first, so children can be grouped
        usort( $categories, function( $a, $b ) {
            return $a->parent - $b->parent;
        } );

        // group categories by parent
        $grouped_categories = [];

        foreach ( $categories as $category ) {
            if ( $category->parent === 0 ) {
                $grouped_categories[] = [
                    'category' => $category,
                    'subcategories' => [],
                ];
            } else {
                foreach ( $grouped_categories as $key => $grouped_category ) {
                    if ( $grouped_category['category']->term_id === $category->parent ) {
                        $grouped_categories[ $key ]['subcategories'][] = $category;
                    }
                }
            }
        }
        
        return $grouped_categories;
    }
}