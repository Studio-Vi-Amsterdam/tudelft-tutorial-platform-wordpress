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
     * Get all academic levels
     * 
     * @since 1.0.0
     * 
     * @return array
     */
    public static function get_academic_levels(): array {

        $categories = get_terms( [
            'taxonomy' => 'academic-level',
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
     * Get sub levels of a specific academic levels
     * 
     * @param array $academic_levels
     * 
     * @return array
     * 
     * @since 1.0.0
     */
    public static function get_sub_academic_levels( array $academic_levels ): array {

        $all_academic_levels = self::get_academic_levels();

        // filter out ids of academic levels
        $academic_levels = array_filter( $all_academic_levels, function( $level ) use ( $academic_levels ) {
            return in_array( $level['category']->term_id, $academic_levels );
        } );

        return array_values( $academic_levels );
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

    /**
     * Get courses grouped by academic level
     * 
     * @since 1.0.0
     * 
     * @return array
     * 
     */
    public static function get_courses_grouped_by_academic_level(): array {

        $academic_levels = self::get_academic_levels();

        $courses = [];

        foreach ( $academic_levels as $level ) {
            
            // we only need them matched to children
            foreach ( $level['subcategories'] as $subcategory ) {
                $courses[ $subcategory->name ] = self::get_courses_by_academic_level( [ $subcategory->slug ] );
            }
        }

        return $courses;
    }

    /**
     * Get all chapters that belong to this course.
     * 
     * @param int $course_id
     * @return array
     * 
     * @since 1.0.0
     */
    public static function get_chapters_belonging_to( int $course_id ) : array {
        $chapters = get_field( 'chapters', $course_id );

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
     * Get all keywords that belong to this course.
     * 
     * @param int $course_id
     * 
     * @return array|bool
     * 
     * @since 1.0.0
     */
    public static function get_keywords( int $course_id ) : array|bool {
        $keywords = get_the_terms( $course_id, 'keywords' );

        // If this course does not have any keywords, return false.
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
     * Get all academic levels that belong to this course.
     * 
     * @param int $course_id
     * 
     * @return array|bool
     * 
     * @since 1.0.0
     */
    public static function get_single_course_academic_levels( int $course_id ) : array|bool {
        $academic_level = get_the_terms( $course_id, 'academic-level' );

        // If this course does not have any keywords, return false.
        if ( empty( $academic_level ) ) {
            return false;
        }

        $academic_level = array_map( function( $level ) {
            return [
                'id' => $level->term_id,
                'name' => $level->name,
                'slug' => $level->slug,
            ];
        }, $academic_level );

        return $academic_level;
    }
}