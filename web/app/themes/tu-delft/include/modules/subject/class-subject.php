<?php

namespace TuDelft\Theme\Modules\Subject;

use TuDelft\Theme\Abstract\Abstract_Cpt;
use WP_Query;

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

    /**
     * Get sub levels of a specific category
     * 
     * @param array $categories
     * 
     * @return array
     * 
     * @since 1.0.0
     */
    public static function get_sub_categories( array $categories ): array {

        $all_categories = self::get_categories();

        // filter out ids of categories
        $categories = array_filter( $all_categories, function( $level ) use ( $categories ) {
            return in_array( $level['category']->term_id, $categories );
        } );

        return array_values( $categories );
    }

    /**
     * Get subjects that are part of a specific category
     * 
     * @since 1.0.0
     * 
     * @param string $category
     * 
     * @return array
     */
    public static function get_subjects_by_category( array $category, int $amount = 5, bool $inclusive = true ): array {
        
        $args = [
            'post_type' => self::POST_TYPE,
            'posts_per_page' => $amount,
            'orderby' => 'title',
            'order' => 'ASC',
            'tax_query' => [
                [
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => $category,
                    'operator' => $inclusive ? 'IN' : 'NOT IN',
                ],
            ],
        ];

        $query = new WP_Query( $args );

        return $query->posts;
    }

    /**
     * Get subjects grouped by category
     * 
     * @since 1.0.0
     * 
     * @return array
     * 
     */
    public static function get_subjects_grouped_by_category(): array {

        $categories = self::get_categories();

        $subjects = [];

        foreach ( $categories as $level ) {
            
            // we only need them matched to children
            foreach ( $level['subcategories'] as $subcategory ) {
                $subjects[ $subcategory->name ] = self::get_subjects_by_category( [ $subcategory->slug ] );
            }
        }

        return $subjects;
    }
}