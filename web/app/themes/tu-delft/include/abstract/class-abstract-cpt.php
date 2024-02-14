<?php

namespace TuDelft\Theme\Abstract;

/**
 * Class Abstract_Cpt
 *
 * Abstract class for custom post types and taxonomies.
 * 
 * 
 * @package     TuDelft\Theme\Common
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */
abstract class Abstract_Cpt {

    protected string $post_type;
    protected array $cpt_supported_data = [];
    protected string $post_icon;
    protected array $rewrite = [];
    protected array $taxonomies = [];
    protected array $extra_settings = [];

    public function __construct( string $post_type, array $cpt_supported_data = [], string $post_icon = '', array $rewrite = [], array $taxonomies = [], array $extra_settings = [] ) {

        // set class properties
        $this->post_type = $post_type;
        $this->cpt_supported_data = $cpt_supported_data;
        $this->post_icon = $post_icon;
        $this->rewrite = $rewrite;
        $this->extra_settings = $extra_settings;

        // register custom post type
        add_action( 'init', [ $this, 'register_custom_post_type' ], 99 );
        // register custom taxonomy if passed in constructor and make sure it's an array and has the required keys
        if ( !empty( $taxonomies ) && isset( $taxonomies['name'] ) && isset( $taxonomies['rewrite'] ) ) {
            $this->taxonomies = $taxonomies;
            add_action( 'init', [ $this, "register_custom_taxonomy" ], 99 );
        }
    }

    /**
     * Register custom taxonomy
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function register_custom_post_type(): void {
        $slug = $this->post_type;
        $name = str_replace( '-', ' ', $slug );
        // capitalize first letter of each word
        $name = ucwords( $name );

        register_post_type( $slug, [
            'labels' => [
                'name' => __( "{$name}s", 'digitale-gruendung' ),
                'singular_name' => __( "{$name}", 'digitale-gruendung' ),
                'add_new' => __( "Add New", 'digitale-gruendung' ),
                'add_new_item' => __( "Add New {$name}", 'digitale-gruendung' ),
                'edit_item' => __( "Edit {$name}", 'digitale-gruendung' ),
                'new_item' => __( "New {$name}", 'digitale-gruendung' ),
            ],
            'public' => $this->extra_settings['public'] ?? true,
            'publicly_queryable' => $this->extra_settings['publicly_queryable'] ?? true,
            'supports' => $this->cpt_supported_data,
            'capability_type' => 'post',
            'menu_icon' => $this->post_icon,
            'show_in_rest' => $this->extra_settings['show_in_rest'] ?? true,
            'show_in_search' => $this->extra_settings['show_in_search'] ?? true,
            'has_archive' => $this->extra_settings['has_archive'] ?? true,
            'rewrite' => $this->rewrite,
        ] );
    }

    /**
     * Register custom taxonomy
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function register_custom_taxonomy(): void {
        $slug = $this->taxonomies['name'];

        $name = str_replace( '-', ' ', $slug );
        // capitalize first letter of each word
        $name = ucwords( $name );

        $rewrite = $this->taxonomies['rewrite'];

        // check if taxonomy already exists
        if ( taxonomy_exists( $slug ) ) {
            // if it does assign it to the post type
            register_taxonomy_for_object_type( $slug, $this->post_type );
            return;
        }
        
        // if it doesn't create it
        register_taxonomy( $slug, [ $this->post_type ], [
            'labels' => [
                'name' => __( ucfirst($name), 'digitale-gruendung' ),
                'singular_name' => __( $name, 'digitale-gruendung'  ),
                'search_items' => __( "Search {$name}", 'digitale-gruendung' ),
                'all_items' => __( "All {$name}", 'digitale-gruendung' ),
                'parent_item' => __( "Parent {$name}", 'digitale-gruendung' ),
                'parent_item_colon' => __( "Parent {$name}:", 'digitale-gruendung' ),
                'edit_item' => __( "Edit {$name}", 'digitale-gruendung' ),
                'update_item' => __( "Update {$name}", 'digitale-gruendung' ),
                'add_new_item' => __( "Add New {$name}", 'digitale-gruendung' ),
                'new_item_name' => __( "New {$name} Name", 'digitale-gruendung' ),
                'menu_name' => __( $name, 'digitale-gruendung' )
            ],
            'hierarchical' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => $rewrite,
            'public' => true,
        ] );
    }
}