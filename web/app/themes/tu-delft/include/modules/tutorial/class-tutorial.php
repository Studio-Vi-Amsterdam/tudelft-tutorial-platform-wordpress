<?php

namespace TuDelft\Theme\Modules\Tutorial;

use TuDelft\Theme\Abstract\Abstract_Cpt;

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
    const POST_SUPPORTS = [ 'title', 'editor', 'revisions' ];
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
        'has_archive' => true,
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
            return false;
        }

        $chapters = array_map( function( $chapter ) {
            return [
                'id' => $chapter->ID,
                'title' => get_the_title( $chapter->ID ),
                'permalink' => get_permalink( $chapter->ID ),
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
}