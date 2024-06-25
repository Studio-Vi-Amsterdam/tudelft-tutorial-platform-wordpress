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
        'has_archive' => false,
        'publicly_queryable' => true,
    ];

    public function __construct() {
        parent::__construct( self::POST_TYPE, self::POST_SUPPORTS, self::POST_ICON, self::REWRITE, self::TAXONOMY, self::EXTRA_SETTINGS );
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
    public static function get_labs_by_lab_type( array|string $lab_type, int $amount = 5, bool $inclusive = true ): array {
        
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

    /**
     * Get all chapters that belong to this course.
     * 
     * @param int $lab_id
     * @return array
     * 
     * @since 1.0.0
     */
    public static function get_chapters_belonging_to( int $lab_id ) : array {
        $chapters = get_field( 'chapters', $lab_id );

        // If this course does not have any chapters, return false.
        if ( empty( $chapters ) ) {
            return [];
        }
        
        
        $chapters = array_map( function( $chapter_id ) {
            
            $chapter_post = get_post( $chapter_id );
            
            return [
                'id' => $chapter_post->ID,
                'title' => get_the_title( $chapter_post->ID ),
                'permalink' => get_permalink( $chapter_post->ID ),
                'content' => apply_filters( 'the_content', $chapter_post->post_content ),
            ];
        }, $chapters );

        return $chapters;
    }

    /**
     * Get all lab types that belong to this lab.
     * 
     * @param int $lab_id
     * 
     * @return array|bool
     * 
     * @since 1.0.0
     */
    public static function get_single_lab_types( int $lab_id ) : array|bool {
        $lab_type = get_the_terms( $lab_id, 'lab-type' );

        // If this course does not have any lab_type, return false.
        if ( empty( $lab_type ) ) {
            return false;
        }

        $lab_type = array_map( function( $type ) {
            return [
                'id' => $type->term_id,
                'name' => $type->name,
                'slug' => $type->slug,
            ];
        }, $lab_type );

        return $lab_type;
    }
}