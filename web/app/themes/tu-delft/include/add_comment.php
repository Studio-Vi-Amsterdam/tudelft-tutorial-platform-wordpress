<?php
function add_comment() {
	if ( defined('TUTORIAL_PLATFORM_PATH') ) {
			$content = $_POST['content'];
			$postID = $_POST['postID'];

		if(!$postID) {
			wp_send_json_error( ['success' => false, 'message' => 'Article not found']);
		}

		if(!$content) {
			wp_send_json_error( ['success' => false, 'message' => 'Empty content']);
		}

		do_action( 'insert_comment_to_the_post', $postID, $content);

		wp_send_json_success( ['success' => true] );
	} else {
		wp_send_json_error( ['success' => false, 'message' => 'Route not found']);
	}
}
add_action( 'wp_ajax_add_comment', 'add_comment');
add_action( 'wp_ajax_nopriv_add_comment', 'add_comment' );

define('TUTORIAL_PLATFORM_PATH', 'awdwa');