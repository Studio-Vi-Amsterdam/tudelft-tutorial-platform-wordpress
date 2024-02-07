<?php

namespace TuDelft\Theme\Common;

use WP_Block_Type_Registry;
use WP_Block_Editor_Context;

/**
 * Class Gutenberg
 *
 * Class for custom Gutenberg blocks
 * 
 * 
 * @package     TuDelft\Theme\Common
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */

 class Gutenberg {

    public function __construct() {
        add_filter( 'enqueue_block_editor_assets', [ $this, 'image_text_block' ], 10, 2 );
        add_filter( 'enqueue_block_editor_assets', [ $this, 'text_image_block' ], 10, 2 );
        add_filter( 'enqueue_block_editor_assets', [ $this, 'video_text_block' ], 10, 2 );
        // disable all default blocks
        add_filter( 'allowed_block_types_all', [ $this, 'diallow_core_blocks' ], 10, 2 );
    }

    /**
     * Register custom Gutenberg block with image and text
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function image_text_block(): void {
        wp_enqueue_script(
            'image-text-block',
            get_template_directory_uri() . '/dist/imageTextBlock.min.js',
            array( 'wp-blocks', 'wp-element', 'wp-editor' ),
            filemtime( get_template_directory() . '/dist/imageTextBlock.min.js' )
        );
    }

    /**
     * Register custom Gutenberg block with text and image
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function text_image_block(): void {
        wp_enqueue_script(
            'text-image-block',
            get_template_directory_uri() . '/dist/textImageBlock.min.js',
            array( 'wp-blocks', 'wp-element', 'wp-editor' ),
            filemtime( get_template_directory() . '/dist/textImageBlock.min.js' )
        );
    }

    /**
     * Register custom Gutenberg block with video and text
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function video_text_block(): void {
        wp_enqueue_script(
            'video-text-block',
            get_template_directory_uri() . '/dist/videoTextBlock.min.js',
            array( 'wp-blocks', 'wp-element', 'wp-editor' ),
            filemtime( get_template_directory() . '/dist/videoTextBlock.min.js' )
        );
    }

    /**
     * Disable default Gutenberg blocks
     * 
     * @param bool|array $allowed_block_types
     * @param WP_Block_Editor_Context $block_editor_context
     * 
     * @since 1.0.0
     * 
     * @return array
     */
    public function diallow_core_blocks( bool|array $allowed_block_types, WP_Block_Editor_Context $block_editor_context ): array {
        
        // Get all registered blocks if $allowed_block_types is not already set.
		if ( ! is_array( $allowed_block_types ) || empty( $allowed_block_types ) ) {
			$registered_blocks   = WP_Block_Type_Registry::get_instance()->get_all_registered();
			$allowed_block_types = array_keys( $registered_blocks );
		}

        $filtered_blocks = [];


        return $registered_blocks;

        foreach ( $allowed_block_types as $block ) {
            if ( strpos( $block, 'core/' ) !== 0 && strpos( $block, 'yoast/' ) !== 0 ) {
                $filtered_blocks[] = $block;
            }
        }

        return $filtered_blocks;
    }
    
 }