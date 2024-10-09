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
    const POST_SUPPORTS = [ 'title', 'editor', 'revisions', 'author' ];
    const POST_ICON = 'dashicons-book';
    const REWRITE = [];
    const TAXONOMY = [
        [ 'name' => 'keywords', 'rewrite' => [ 'slug' => '.' ] ],
        [ 'name' => 'category', 'rewrite' => [ 'slug' => '.' ] ],
        [ 'name' => 'defined-terms', 'rewrite' => [ 'slug' => '.' ] ],
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
                $subjects[ $subcategory->name ] = self::get_subjects_by_category( [ $subcategory->slug ], -1 );
            }
        }

        return $subjects;
    }

    /**
     * Get all chapters that belong to this subject.
     * 
     * @param int $subject_id
     * @return array|bool
     * 
     * @since 1.0.0
     */
    public static function get_chapters_belonging_to( int $subject_id ) : array|bool {
        $chapters = get_field( 'chapters', $subject_id );

        // If this subject does not have any chapters, return false.
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
     * Get all primary categories that belong to this subject.
     * 
     * @param int $subject_id
     * 
     * @return array|bool
     * 
     * @since 1.0.0
     */
    public static function get_subject_primary_category( int $subject_id ) : array|bool {
        $primary_category = get_categories([
            'taxonomy' => 'category',
            'object_ids' => $subject_id,
            'orderby' => 'term_id',
            'order' => 'ASC',
            'parent' => 0,
        ]);

        // If this subject does not have any category, return false.
        if ( empty( $primary_category ) ) {
            return false;
        }
        
        $primary_category = array_map( function( $category ) {
            return [
                'id' => $category->term_id,
                'name' => $category->name,
                'slug' => $category->slug,
            ];
        }, $primary_category );

        return $primary_category;
    }

    /**
     * Get subcategories of a specific subject
     * 
     * @param int $subject_id
     * 
     * @return array|bool
     * 
     * @since 1.0.0
     */
    public static function get_subject_subcategories( int $subject_id ) : array|bool {
        $subcategory = get_categories([
            'taxonomy' => 'category',
            'object_ids' => $subject_id,
            'orderby' => 'term_id',
            'order' => 'ASC'
        ]);

        // If this subject does not have any category, return false.
        if ( empty( $subcategory ) ) {
            return false;
        }

        // filter out the parent category
        $subcategory = array_filter( $subcategory, function( $category ) {
            return $category->parent !== 0;
        } );
        
        $subcategory = array_map( function( $category ) {
            return [
                'id' => $category->term_id,
                'name' => $category->name,
                'slug' => $category->slug,
            ];
        }, $subcategory );

        return $subcategory;
    }

    /** 
     * Get subject keywords
     * 
     * @since 1.0.0
     * 
     * @param int $subject_id
     * 
     * @return array|bool
     */
    public static function get_keywords( int $subject_id ) : array|bool {
        $keywords = get_the_terms( $subject_id, 'keywords' );

        // If this tutorial does not have any keywords, return false.
        if ( empty( $keywords ) ) {
            return false;
        }

        $keywords = array_map( function( $keyword ) {
            return [
                'id' => $keyword->term_id,
                'name' => $keyword->name,
                'slug' => $keyword->slug,
            ];
        }, $keywords );

        return $keywords;
    }

    /**
     * Search through subjects by title
     * 
     * @param string $search
     * 
     * @return array
     */
    public static function search_subjects( string $search ): array {
        $args = [
            'post_type' => self::POST_TYPE,
            'posts_per_page' => -1,
            's' => $search,
        ];

        $query = new WP_Query( $args );

        return array_map( function( $lab ) {
            return [
                'id' => $lab->ID,
                'type' => self::POST_TYPE,
                'title' => $lab->post_title,
                'permalink' => get_permalink( $lab->ID ),
                'content' => get_field( 'description', $lab->ID ),
                'keywords' => self::get_keywords( $lab->ID ),
            ];
        }, $query->posts ?? [] );
    }
}