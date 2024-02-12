<?php

namespace TuDelft\Theme\Common;

/**
 * Class Gutenberg
 *
 * Class for custom Gutenberg blocks
 * 
 * IMPORTANT: Gutenberg blocks are controlled by JavaScript, located at /web/app/themes/tu-delft/src/js/gutenberg/index.js
 * 
 * 
 * @package     TuDelft\Theme\Common
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */

 class Gutenberg {

    public function __construct() {
        add_filter( 'enqueue_block_editor_assets', [ $this, 'gutenberg_main' ], 10, 2 );
        add_filter( 'enqueue_block_editor_assets', [ $this, 'image_text_block' ], 10, 2 );
        add_filter( 'enqueue_block_editor_assets', [ $this, 'text_image_block' ], 10, 2 );
        add_filter( 'enqueue_block_editor_assets', [ $this, 'video_text_block' ], 10, 2 );
        add_filter( 'enqueue_block_editor_assets', [ $this, 'text_video_block' ], 10, 2 );
        add_filter( 'enqueue_block_editor_assets', [ $this, 'text_block' ], 10, 2 );
        add_filter( 'enqueue_block_editor_assets', [ $this, 'info_box_block' ], 10, 2 );
        add_filter( 'enqueue_block_editor_assets', [ $this, 'content_card_block' ], 10, 2 );
        add_filter( 'enqueue_block_editor_assets', [ $this, 'image_block' ], 10, 2 );
        add_filter( 'enqueue_block_editor_assets', [ $this, 'video_block' ], 10, 2 );
        // add_filter( 'enqueue_block_editor_assets', [ $this, 'h5p_block' ], 10, 2 );
        add_filter( 'enqueue_block_editor_assets', [ $this, 'download_block' ], 10, 2 );
    }

    /**
     * Register main Gutenberg file
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function gutenberg_main(): void {
        wp_enqueue_script(
            'gutenberg-main',
            get_template_directory_uri() . '/dist/gutenberg.min.js',
            array( 'wp-blocks', 'wp-element', 'wp-editor' ),
            filemtime( get_template_directory() . '/dist/gutenberg.min.js' )
        );
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
     * Register custom Gutenberg block with text and video
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function text_video_block(): void {
        wp_enqueue_script(
            'text-video-block',
            get_template_directory_uri() . '/dist/textVideoBlock.min.js',
            array( 'wp-blocks', 'wp-element', 'wp-editor' ),
            filemtime( get_template_directory() . '/dist/textVideoBlock.min.js' )
        );
    }

    /**
     * Register custom Gutenberg block with text
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function text_block(): void {
        wp_enqueue_script(
            'text-block',
            get_template_directory_uri() . '/dist/textBlock.min.js',
            array( 'wp-blocks', 'wp-element', 'wp-editor' ),
            filemtime( get_template_directory() . '/dist/textBlock.min.js' )
        );
    }

    /**
     * Register custom Gutenberg block with info box
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function info_box_block(): void {
        wp_enqueue_script(
            'info-box-block',
            get_template_directory_uri() . '/dist/infoBoxBlock.min.js',
            array( 'wp-blocks', 'wp-element', 'wp-editor' ),
            filemtime( get_template_directory() . '/dist/infoBoxBlock.min.js' )
        );
    }

    /**
     * Register custom Gutenberg block with content card
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function content_card_block(): void {
        wp_enqueue_script(
            'content-card-block',
            get_template_directory_uri() . '/dist/contentCardBlock.min.js',
            array( 'wp-blocks', 'wp-element', 'wp-editor' ),
            filemtime( get_template_directory() . '/dist/contentCardBlock.min.js' )
        );
    }

    /**
     * Register custom Gutenberg block with image
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function image_block(): void {
        wp_enqueue_script(
            'image-block',
            get_template_directory_uri() . '/dist/imageBlock.min.js',
            array( 'wp-blocks', 'wp-element', 'wp-editor' ),
            filemtime( get_template_directory() . '/dist/imageBlock.min.js' )
        );
    }

    /**
     * Register custom Gutenberg block with video
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function video_block(): void {
        wp_enqueue_script(
            'video-block',
            get_template_directory_uri() . '/dist/videoBlock.min.js',
            array( 'wp-blocks', 'wp-element', 'wp-editor' ),
            filemtime( get_template_directory() . '/dist/videoBlock.min.js' )
        );
    }

    /**
     * Register custom Gutenberg block with H5P
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function h5p_block(): void {
        wp_enqueue_script(
            'h5p-block',
            get_template_directory_uri() . '/dist/h5pBlock.min.js',
            array( 'wp-blocks', 'wp-element', 'wp-editor' ),
            filemtime( get_template_directory() . '/dist/h5pBlock.min.js' )
        );
    }

    /**
     * Register custom Gutenberg block with download
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function download_block(): void {
        wp_enqueue_script(
            'download-block',
            get_template_directory_uri() . '/dist/downloadBlock.min.js',
            array( 'wp-blocks', 'wp-element', 'wp-editor' ),
            filemtime( get_template_directory() . '/dist/downloadBlock.min.js' )
        );
    }
}