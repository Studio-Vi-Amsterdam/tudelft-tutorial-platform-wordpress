<?php

namespace TuDelft\Theme\Modules\Lab;

use TuDelft\Theme\Abstract\Abstract_Cpt;
use WP_Query;

/**
 * Class Lab
 *
 * Custom post type for lab.
 * 
 * 
 * @package     TuDelft\Theme\Modules\Lab
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */
class Lab extends Abstract_Cpt {

    const POST_TYPE = 'lab';
    const POST_SUPPORTS = [ 'title', 'editor', 'revisions' ];
    const POST_ICON = 'dashicons-color-picker';
    const REWRITE = [];
    const TAXONOMY = [
        [ 'name' => 'lab-type', 'rewrite' => [ 'slug' => '.' ] ],
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
     * Get lab types
     * 
     * @since 1.0.0
     * 
     * @return array
     */
    public static function get_header_lab_types(int $per_page = 6): array {
        $lab_types = get_terms( [
            'taxonomy' => 'lab-type',
            'hide_empty' => false,
            'posts_per_page' => $per_page,
        ] );

        return $lab_types;
    }

    /**
     * Get all lab types
     * 
     * @since 1.0.0
     * 
     * @return array
     */
    public static function get_lab_types(): array {
        $lab_types = get_terms( [
            'taxonomy' => 'lab-type',
            'hide_empty' => false,
            'exclude' => '1',
        ] );

        // order by parents first, so children can be grouped
        usort( $lab_types, function( $a, $b ) {
            return $a->parent - $b->parent;
        } );

        // group lab_types by parent
        $grouped_lab_types = [];

        foreach ( $lab_types as $lab ) {
            if ( $lab->parent === 0 ) {
                $grouped_lab_types[] = [
                    'category' => $lab,
                    'subcategories' => [],
                ];
            } else {
                foreach ( $grouped_lab_types as $key => $grouped_lab ) {
                    if ( $grouped_lab['category']->term_id === $lab->parent ) {
                        $grouped_lab_types[ $key ]['subcategories'][] = $lab;
                    }
                }
            }
        }
        
        return $grouped_lab_types;
    }

    /**
     * Get sub levels of a specific lab type
     * 
     * @param array $lab_types
     * 
     * @return array
     * 
     * @since 1.0.0
     */
    public static function get_sub_categories( array $lab_types ): array {

        $all_lab_types = self::get_lab_types();

        // filter out ids of categories
        $lab_types = array_filter( $all_lab_types, function( $level ) use ( $lab_types ) {
            return in_array( $level['category']->term_id, $lab_types );
        } );

        return array_values( $lab_types );
    }

    /**
     * Get labs that are part of a specific lab type
     * 
     * @since 1.0.0
     * 
     * @param string $lab_type
     * 
     * @return array
     */
    public static function get_labs_by_lab_type( array $lab_type, int $amount = 5, bool $inclusive = true ): array {
        
        $args = [
            'post_type' => self::POST_TYPE,
            'posts_per_page' => $amount,
            'orderby' => 'title',
            'order' => 'ASC',
            'tax_query' => [
                [
                    'taxonomy' => 'lab-type',
                    'field' => 'slug',
                    'terms' => $lab_type,
                    'operator' => $inclusive ? 'IN' : 'NOT IN',
                ],
            ],
        ];

        $query = new WP_Query( $args );

        return $query->posts;
    }

    /**
     * Get labs grouped by lab type
     * 
     * @since 1.0.0
     * 
     * @return array
     * 
     */
    public static function get_labs_grouped_by_lab_type(): array {

        $lab_types = self::get_lab_types();

        $subjects = [];

        foreach ( $lab_types as $level ) {
            
            // we only need them matched to children
            foreach ( $level['subcategories'] as $subcategory ) {
                $subjects[ $subcategory->name ] = self::get_labs_by_lab_type( $subcategory->slug );
            }
        }

        return $subjects;
    }
}