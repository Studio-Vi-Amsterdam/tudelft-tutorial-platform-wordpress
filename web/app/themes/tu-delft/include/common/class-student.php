<?php

namespace TuDelft\Theme\Common;

/**
 * Class Student
 *
 * Class for student functionality.
 * 
 * 
 * @package     TuDelft\Theme\Modules\Student
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     3.0.0
 * @link        https://viamsterdam.com
 */
class Student {


    function __construct() {
        add_action( 'wp_ajax_add_bookmark', [ $this, 'add_bookmark' ] );
        add_action( 'wp_ajax_remove_bookmark', [ $this, 'remove_bookmark' ] );
        add_action( 'wp_ajax_add_watched_video', [ $this, 'add_watched_video' ] );
        add_action( 'wp_ajax_get_more_bookmarks', [ $this, 'get_more_bookmarks' ] );
        add_action( 'wp_ajax_get_more_watched_videos', [ $this, 'get_more_watched_videos' ] );
    }

    /**
     * Ajax callback
     * Add bookmark for student
     * 
     * @since 3.0.0
     * 
     */
    public function add_bookmark(): void {
        $user_id = get_current_user_id();
        $post_id = $_POST['post_id'];

        if ( ! $user_id || ! $post_id ) {
            wp_send_json_error( 'Invalid request' );
        }

        $bookmarks = get_user_meta( $user_id, 'bookmarks', true );

        if ( ! is_array( $bookmarks ) ) {
            $bookmarks = [];
        }

        if ( ! in_array( $post_id, $bookmarks ) ) {
            $bookmarks[] = $post_id;
        }

        update_user_meta( $user_id, 'bookmarks', $bookmarks );

        wp_send_json_success( 'Bookmark added' );
    }

    /**
     * Ajax callback
     * Remove bookmark for student
     * 
     * @since 3.0.0
     * 
     */
    public function remove_bookmark(): void {
        $user_id = get_current_user_id();
        $post_id = $_POST['post_id'];
        
        if ( ! $user_id || ! $post_id ) {
            wp_send_json_error( 'Invalid request' );
        }
        
        $bookmarks = get_user_meta( $user_id, 'bookmarks', true );

        if ( ! is_array( $bookmarks ) ) {
            $bookmarks = [];
        }

        if ( in_array( $post_id, $bookmarks ) ) {
            $key = array_search( $post_id, $bookmarks );
            unset( $bookmarks[ $key ] );
        }

        update_user_meta( $user_id, 'bookmarks', $bookmarks );

        wp_send_json_success( 'Bookmark removed' );
    }

    /**
     * Is post bookmarked by student
     * 
     * @since 3.0.0
     * 
     * @param int $post_id
     */
    public static function is_bookmarked( int $post_id ): bool {
        $user_id = get_current_user_id();
        $bookmarks = get_user_meta( $user_id, 'bookmarks', true );

        if ( ! is_array( $bookmarks ) ) {
            $bookmarks = [];
        }

        return in_array( $post_id, $bookmarks );
    }

    /**
     * Ajax callback
     * Get more bookmarks for student
     * 
     * @since 3.0.0
     * 
     */
    public function get_more_bookmarks(): void {
        $user_id = get_current_user_id();
        $page = $_POST['page'];

        if ( ! $user_id || ! $page ) {
            wp_send_json_error( 'Invalid request' );
        }

        $return_array = self::organize_bookmarks( $user_id );

				$res = array_slice( $return_array, $page * 6, 6 );

				ob_start();
					foreach ($res as $bookmark) :
						if (empty($bookmark['id'])) {
							continue;
						}
						get_template_part('template-parts/items/bookmark', false, ['bookmark' => $bookmark]);

					endforeach;
				$html = ob_get_clean();

				wp_send_json_success( ['html' => $html] );
    }

    /**
     * Get all bookmarks for student
     * 
     * @since 3.0.0
     * 
     * @return array
     * 
     */
    public static function get_bookmarks(): array {
        $user_id = get_current_user_id();
				$return_array = self::organize_bookmarks( $user_id );
        return [
					'countItems' => count($return_array),
					'items' => array_slice( $return_array, 0, 6 )
				];
    }

    /**
     * Organize bookmarks for student
     * 
     * @since 3.0.0
     * 
     * @param int $user_id
     * 
     * @return array
     * 
     * TODO: Optimize this function to not fetch all bookmarks every time
     * 
     */
    private static function organize_bookmarks( int $user_id ): array {
        $bookmarks = get_user_meta( $user_id, 'bookmarks', true );

        if ( ! is_array( $bookmarks ) ) {
            $bookmarks = [];
        }

        $return_array = [];
        foreach ( $bookmarks as $bookmark ) {
            $post = get_post( $bookmark );
            $return_array[] = [
                'id' => $post->ID,
                'type' => $post->post_type,
                'title' => $post->post_title,
                'url' => get_permalink( $post ),
                'content' => get_field( 'description', $post ),
                'published_at' => get_the_date( 'd F Y', $post ),
                'image' => get_field( 'featured_image', $post )[ 'url' ],
            ];
        }

        return $return_array;
    }

    /**
     * Ajax callback
     * Add watched video for student
     * 
     * @since 3.0.0
     * 
     */
    public function add_watched_video(): void {
        $user_id = get_current_user_id();

        $page_id = $_POST['pageId'];
        $video_id = $_POST['videoId'];
        $page_url = $_POST['pageUrl'];
        $placeholder_url = $_POST['placeholderUrl'];

        if ( ! $user_id || ! $page_id || ! $video_id || ! $page_url ) {
            wp_send_json_error( 'Invalid request' );
        }


        $watched_videos = get_user_meta( $user_id, 'watched_videos', true );

        if ( ! is_array( $watched_videos ) ) {
            $watched_videos = [];
        }

        // check does video already exists
        foreach ( $watched_videos as $video ) {
            if ( $video['video_id'] === $video_id ) {
                wp_send_json_success( 'Video already exists in watchlist' );
            }
        }

        $watched_videos[] = [
            'page_id' => $page_id,
            // we are storing page url to also have any additional GET parameters
            'page_url' => $page_url,
            'video_id' => $video_id,
            'placeholder_url' => $placeholder_url,
            'watched_at' => time(),
        ];

        update_user_meta( $user_id, 'watched_videos', $watched_videos );

        wp_send_json_success( 'Video added' );
    }

    /**
     * Ajax callback
     * Get more watched videos for student
     * 
     * @since 3.0.0
     * 
     * @return void
     */
    public function get_more_watched_videos(): void {
        $user_id = get_current_user_id();
        $page = $_POST['page'];

        if ( ! $user_id || ! $page ) {
            wp_send_json_error( 'Invalid request' );
        }

        $return_data = self::organize_watched_videos( $user_id );

				$res = array_slice( $return_data, $page * 10, 10 );
				ob_start();
				foreach ($res as $video) :
					if (empty($video['video_url'])) {
						continue;
					}
					get_template_part('template-parts/items/watched-video', false, ['video' => $video]);

				endforeach;
				$html = ob_get_clean();

				wp_send_json_success( ['html' => $html] );
		}

    /**
     * Get all watched videos for student.
     * 
     * @since 3.0.0
     * 
     * @return array
     */
    public static function get_watched_videos(): array {
        $user_id = get_current_user_id();

				$return_array = self::organize_watched_videos( $user_id );
				return [
					'countItems' => count($return_array),
					'items' => array_slice( $return_array, 0, 10 )
				];
    }

    /**
     * Organize watched videos for student
     * 
     * @since 3.0.0
     * 
     * @param int $user_id
     * 
     * @return array
     * 
     * TODO: Optimize this function to not fetch all videos every time
     * 
     */
    private static function organize_watched_videos( int $user_id ): array {
        $watched_videos = get_user_meta( $user_id, 'watched_videos', true );

        if ( ! is_array( $watched_videos ) ) {
            $watched_videos = [];
        }

        $total_watched_videos = count( $watched_videos );

        $watched_videos = array_filter( $watched_videos, function( $video ) {
            return $video['watched_at'] > strtotime( '-1 year' );
        } );

        if ( count( $watched_videos ) !== $total_watched_videos ) {
            update_user_meta( $user_id, 'watched_videos', $watched_videos );
        }

        $return_data = [];

        foreach ($watched_videos as $video) {
            $post = get_post( $video['page_id'] );

            // convert date to "time ago" format
            $time_ago = human_time_diff( $video['watched_at'], current_time( 'timestamp' ) ) . ' ago';

            $return_data[] = [
                'video_name' => get_post_meta( $video['video_id'], 'title', true ) ? : $post->post_title,
                'video_url' => wp_get_attachment_url( $video['video_id'] ),
                'video_thumbnail' => $video['placeholder_url'] ? : get_home_url() . '/app/themes/tu-delft/src/img/tutorial/img-1.jpg',
                'type' => $post->post_type,
                'watched_at' => $time_ago,
                'page_url' => $video['page_url'],
            ];
        }

        return $return_data;
    }
}