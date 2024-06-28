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
    const POST_SUPPORTS = [ 'title', 'editor', 'revisions', 'author' ];
    const POST_ICON = 'dashicons-desktop';
    const REWRITE = [];
    const TAXONOMY = [
        [ 'name' => 'keywords', 'rewrite' => [ 'slug' => '.' ] ],
        [ 'name' => 'software-version', 'rewrite' => [ 'slug' => '.' ] ],
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

    /**
     * Get all chapters that belong to this software.
     * 
     * @param int $software_id
     * @return array|bool
     * 
     * @since 1.0.0
     */
    public static function get_chapters_belonging_to( int $software_id ) : array|bool {
        $chapters = get_field( 'chapters', $software_id );

        // If this software does not have any chapters, return false.
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
     * Get all software versions that belong to this software.
     * 
     * @param int $software_id
     * 
     * @return array|bool
     * 
     * @since 1.0.0
     */
    public static function get_software_versions( int $software_id ) : array|bool {
        $software_verison = get_the_terms( $software_id, 'software-version' );

        // If this software does not have any versions, return false.
        if ( empty( $software_verison ) ) {
            return false;
        }
        
        $software_verison = array_map( function( $version ) {
            return [
                'id' => $version->term_id,
                'name' => $version->name,
                'slug' => $version->slug,
            ];
        }, $software_verison );

        return $software_verison;
    }

    /** 
     * Get software keywords
     * 
     * @since 1.0.0
     * 
     * @param int $software_id
     * 
     * @return array|bool
     */
    public static function get_keywords( int $software_id ) : array|bool {
        $keywords = get_the_terms( $software_id, 'keywords' );

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
     * Search through softwares by title
     * 
     * @param string $search
     * 
     * @return array
     */
    public static function search_softwares( string $search ): array {
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