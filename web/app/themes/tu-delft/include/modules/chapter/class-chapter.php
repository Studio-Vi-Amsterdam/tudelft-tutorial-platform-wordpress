<?php

namespace TuDelft\Theme\Modules\Chapter;

use TuDelft\Theme\Abstract\Abstract_Cpt;

/**
 * Class Chapter
 *
 * Custom post type for chapters.
 * 
 * 
 * @package     TuDelft\Theme\Modules\Chapter
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */
class Chapter extends Abstract_Cpt {

    const POST_TYPE = 'chapter';
    const POST_SUPPORTS = [ 'title', 'editor', 'revisions', 'author' ];
    const POST_ICON = 'dashicons-media-document';
    const REWRITE = [];
    const TAXONOMY = [
        [ 'name' => 'keywords', 'rewrite' => [ 'slug' => '.' ] ],
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
     * Get all chapters that this chapter belongs to. Also get position of current chapter in the list.
     * 
     * @param int $chapter_id
     * @return array|bool
     * 
     * @since 1.0.0
     */
    public static function get_chapters_belonging_to( int $chapter_id ) : array|bool {
        $belongs_to = get_field( 'belongs_to', $chapter_id );

        // If this chapter does not belong to any post, return false.
        if ( empty( $belongs_to ) ) {
            return [];
        }

        $parent_chapters = get_field( 'chapters', $belongs_to->ID );

        // If the parent post does not have any chapters, return false
        if ( empty( $parent_chapters ) ) {
            return false;
        }

        $position = -1;
        foreach ( $parent_chapters as $key => $parent_chapter ) {
            if ( $parent_chapter->ID === $chapter_id ) {
                $position = $key;
            }
        }

        // If the current chapter is not found in the list of parent chapters, that means connection is broken. Return false.
        if ( $position === -1 ) {
            return false;
        }

        // Map the chapters to an array with only the necessary data.
        $chapters = array_map( function( $chapter ) {
            return [
                'id' => $chapter->ID,
                'title' => $chapter->post_title,
                'content' => get_the_content( $chapter->ID ),
                'url' => get_permalink( $chapter->ID )
            ];
        }, $parent_chapters );

        return [
            'parent_id' => $belongs_to->ID,
            'chapters' => $chapters,
            'position' => $position,
            'isFirst' => $position === 0,
            'isLast' => $position === count( $parent_chapters ) - 1
        ];
    }

    /**
     * Get last updated chapter from list of chapters.
     * 
     * @param array $chapters_ids
     * 
     * @return array
     * 
     * @since 1.0.0
     */
    public static function get_last_updated_chapter( array|bool $chapters_ids ) : array {

        if ( empty( $chapters_ids ) ) {
            return [];
        }
        
        $last_updated = 0;
        $last_updated_chapter = null;

        foreach ( $chapters_ids as $chapter_id ) {
            $chapter_modified = get_the_modified_date( 'U', $chapter_id );

            if ( $chapter_modified > $last_updated ) {
                $last_updated = $chapter_modified;
                $last_updated_chapter = $chapter_id;
            }
        }

        $date = the_modified_date( 'F j, Y', $last_updated_chapter, "", "", false );

        // TODO: Investigate why it returns array in string
        $date = str_replace( 'Array', '', $date );


        return [
            'id' => $last_updated_chapter,
            'title' => get_the_title( $last_updated_chapter ),
            'url' => get_permalink( $last_updated_chapter ),
            'date' => $date ?: false,
            'content' => get_the_content( $last_updated_chapter )
        ];

    }
}