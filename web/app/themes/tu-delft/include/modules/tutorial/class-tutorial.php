<?php

namespace TuDelft\Theme\Modules\Tutorial;

use TuDelft\Theme\Abstract\Abstract_Cpt;

// TODO: move this error handling separately 
error_reporting( E_ERROR );
ini_set( 'display_errors', 0 );
/**
 * Class Tutorial
 *
 * Custom post type for tutorials.
 * 
 * 
 * @package     TuDelft\Theme\Modules\Tutorial
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */
class Tutorial extends Abstract_Cpt {

    const POST_TYPE = 'tutorial';
    const POST_SUPPORTS = [ 'title', 'editor', 'revisions', 'author' ];
    const POST_ICON = 'dashicons-welcome-learn-more';
    const REWRITE = [];
    const TAXONOMY = [
        [ 'name' => 'keywords', 'rewrite' => [ 'slug' => '.' ] ],
        [ 'name' => 'teachers', 'rewrite' => [ 'slug' => '.' ] ],
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
     * Get all chapters that belong to this tutorial.
     * 
     * @param int $tutorial_id
     * @return array|bool
     * 
     * @since 1.0.0
     */
    public static function get_chapters_belonging_to( int $tutorial_id ) : array|bool {
        $chapters = get_field( 'chapters', $tutorial_id );

        // If this tutorial does not have any chapters, return false.
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
     * Get all keywords that belong to this tutorial.
     * 
     * @param int $tutorial_id
     * 
     * @return array|bool
     * 
     * @since 1.0.0
     */
    public static function get_keywords( int $tutorial_id ) : array|bool {
        $keywords = get_the_terms( $tutorial_id, 'keywords' );

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
     * For given ID, get name of pirmary software used
     * 
     * @param int $tutorial_id
     * 
     * @return array
     * 
     * @since 1.0.0
     */
    public static function get_primary_software( int $tutorial_id ) : array {
        $software_id =  get_field( 'primary_software', $tutorial_id );
        $software_name = get_the_title( $software_id );
        
        // get taxonomy software_version for software
        $software_version = get_the_terms( $software_id, 'software-version' );
        $software_version = $software_version[0]->name;

        return [
            'name' => $software_name,
            'version' => $software_version,
        ];
    }

    /**
     * Get subject that tutorial belongs to
     * 
     * @param int $tutorial_id
     * 
     * @return string
     * 
     * @since 1.0.0
     */
    public static function get_primary_subject( int $tutorial_id ) : string {
        $subject_id = get_field( 'primary_subject', $tutorial_id );
        
        if ( empty( $subject_id ) ) {
            return '';
        }
        $subject_name = get_the_title( $subject_id );

        return $subject_name;
    }

    /**
     * Get secondary subjects that tutorial belongs to
     * 
     * @param int $tutorial_id
     * 
     * @return string
     */
    public static function get_secondary_subject( int $tutorial_id ) : string {
        $secondary_subject_id = get_field( 'secondary_subject', $tutorial_id );

        if ( empty( $secondary_subject_id ) ) {
            return '';
        }

        $subject_name = get_the_title( $secondary_subject_id );

        return $subject_name;
    }
}