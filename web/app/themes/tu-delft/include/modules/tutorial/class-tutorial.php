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
    const TAXONOMY = [ 'name' => 'keywords', 'rewrite' => [ 'slug' => '.' ] ];
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
}