<?php

namespace TuDelft\Theme\Modules\Lab;

use TuDelft\Theme\Abstract\Abstract_Cpt;

/**
 * Class Lab
 *
 * Custom post type for lab.
 * 
 * 
 * @package     TuDelft\Theme\Modules\Lab
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */
class Lab extends Abstract_Cpt {

    const POST_TYPE = 'lab';
    const POST_SUPPORTS = [ 'title', 'editor', 'revisions' ];
    const POST_ICON = 'dashicons-color-picker';
    const REWRITE = [];
    const TAXONOMY = [
        [ 'name' => 'category', 'rewrite' => [ 'slug' => '.' ] ],
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
}