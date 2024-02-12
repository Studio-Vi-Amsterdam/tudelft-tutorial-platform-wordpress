<?php

namespace TuDelft\Theme\Modules\Course;

use TuDelft\Theme\Abstract\Abstract_Cpt;

/**
 * Class Course
 *
 * Custom post type for courses.
 * 
 * 
 * @package     TuDelft\Theme\Modules\Course
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */
class Course extends Abstract_Cpt {

    const POST_TYPE = 'course';
    const POST_SUPPORTS = [ 'title', 'editor', 'revisions' ];
    const POST_ICON = 'dashicons-awards';
    const REWRITE = [];
    const TAXONOMY = [ 'name' => 'keywords', 'rewrite' => [ 'slug' => '.' ] ];
    const EXTRA_SETTINGS = [
        'public' => true,
        'show_in_rest' => true,
        'show_in_search' => false,
        'has_archive' => true,
        'publicly_queryable' => false,
    ];

    public function __construct() {
        parent::__construct( self::POST_TYPE, self::POST_SUPPORTS, self::POST_ICON, self::REWRITE, self::TAXONOMY, self::EXTRA_SETTINGS );
    }
}