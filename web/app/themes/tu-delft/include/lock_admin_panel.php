<?php
add_action('admin_init', function () {
	if ( ! is_user_logged_in() ) {
		return;
	}

	if ( defined('DOING_AJAX') && DOING_AJAX ) {
		return;
	}

	$user  = wp_get_current_user();
	$roles = (array) $user->roles;

	$has_no_role = empty($roles);

	$blocked_roles = [
		'subscriber',
		'td_editor',
	];

	$is_blocked_role = array_intersect($roles, $blocked_roles);

	if ( $has_no_role || $is_blocked_role ) {
		wp_safe_redirect( home_url('/') );
		exit;
	}
});

/**
 * Hide admin bar for blocked users.
 */
add_filter('show_admin_bar', function ($show) {
	if ( ! is_user_logged_in() ) {
		return $show;
	}

	$user  = wp_get_current_user();
	$roles = (array) $user->roles;

	$has_no_role = empty($roles);

	$blocked_roles = [
		'subscriber',
		'td_editor',
	];

	if ( $has_no_role || array_intersect($roles, $blocked_roles) ) {
		return false;
	}

	return $show;
}, 20);

/**
 * After login, redirect blocked users away from /wp-admin/ to the homepage.
 */
add_filter('login_redirect', function ($redirect_to, $request, $user) {
	if ( $user instanceof WP_User ) {
		$roles = (array) $user->roles;
		$has_no_role = empty($roles);
		$blocked_roles = [
			'subscriber',
			'td_editor',
		];

		if ( $has_no_role || array_intersect($roles, $blocked_roles) ) {
			return home_url('/');
		}
	}
	return $redirect_to;
}, 10, 3);