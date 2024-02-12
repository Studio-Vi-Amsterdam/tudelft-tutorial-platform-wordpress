<?php

use TuDelft\Theme\Tu_Delft;

define( 'TU_DELFT_THEME_PATH', get_stylesheet_directory() . '/' );
define( 'TU_DELFT_THEME_URL', get_stylesheet_directory_uri() . '/' );
define( 'TU_DELFT_THEME_DIST_URL', TU_DELFT_THEME_URL . 'dist/' );


require_once ('include/cleanup.php');
require_once ('include/setup_theme.php');
require_once ('include/acf.php');
require_once ('include/custom_post_types.php');
require_once ('include/custom_taxonomies.php');
require_once ('include/javascript_variables.php');
require_once ('include/enqueue_scripts.php');
require_once ('include/theme_functions.php');
require_once ('include/headers.php');
require_once ('include/class-tudelft.php');

new Tu_Delft();