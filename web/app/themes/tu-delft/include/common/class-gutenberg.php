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

    const BLOCKS = [
        'text_block',
        'image_block',
        'video_block',
        'download_block',
        'info_box_block',
        'content_card_block',
        'image_text_block',
        'text_image_block',
        'video_text_block',
        'text_video_block',
        'quiz_block',
        'h5p_block',
    ];

    public function __construct() {

        if (function_exists('acf_register_block_type')) {
            foreach(self::BLOCKS as $block) {
                // check does method exist
                if (method_exists($this, "register_{$block}")) {

                    // Register block for ACF
                    add_action('acf/init', [ $this, "register_{$block}" ]);

                    // Register ACF blocks for Gutenberg
                    add_action('acf/include_fields', function() use ($block){
                        Gutenberg_ACF::register_blocks($block);
                    } );
                }
            }
        }

        add_filter( 'enqueue_block_editor_assets', [ $this, 'gutenberg_main' ], 10, 2 );
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
            array( 'wp-i18n', 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
            filemtime( get_template_directory() . '/dist/gutenberg.min.js' )
        );
    }

    /**
     * Register Text Block
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function register_text_block(): void {
        acf_register_block_type([
            'name' => 'tu-delft/text',
            'title' => __('Text Block'),
            'description'   => __('Richtext with a full column width'),
            'render_template' => 'template-parts/gutenberg/text-block.php',
            'category' => 'widgets',
            'icon' => 'editor-textcolor',
            'keywords' => ['Text Block', 'Content'],
            'mode' => 'edit',
            'example'  => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => [
                        'is_preview'    => true
                    ]
                ]
            ]
        ]);
    }

    /**
     * Register Image Block
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function register_image_block(): void {
        acf_register_block_type([
            'name' => 'tu-delft/image',
            'title' => __('Image Block'),
            'description'   => __('Image with a full column width'),
            'render_template' => 'template-parts/gutenberg/image-block.php',
            'category' => 'widgets',
            'icon' => 'format-image',
            'keywords' => ['Image Block', 'Content'],
            'mode' => 'edit',
            'example'  => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => [
                        'is_preview'    => true
                    ]
                ]
            ]
        ]);
    }

    /**
     * Register Video Block
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function register_video_block(): void {
        acf_register_block_type([
            'name' => 'tu-delft/video',
            'title' => __('Video Block'),
            'description'   => __('Video with a full column width'),
            'render_template' => 'template-parts/gutenberg/video-block.php',
            'category' => 'widgets',
            'icon' => 'format-video',
            'keywords' => ['Video Block', 'Content'],
            'mode' => 'edit',
            'example'  => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => [
                        'is_preview'    => true
                    ]
                ]
            ]
        ]);
    }

    /**
     * Register Download Block
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function register_download_block(): void {
        acf_register_block_type([
            'name' => 'tu-delft/download',
            'title' => __('Download Block'),
            'description'   => __('File that can be downloaded on frontend'),
            'render_template' => 'template-parts/gutenberg/download-block.php',
            'category' => 'widgets',
            'icon' => 'download',
            'keywords' => ['Download Block', 'Content'],
            'mode' => 'edit',
            'example'  => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => [
                        'is_preview'    => true
                    ]
                ]
            ]
        ]);
    }

    /**
     * Register Info Box Block
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function register_info_box_block(): void {
        acf_register_block_type([
            'name' => 'tu-delft/info-box',
            'title' => __('Info Box Block'),
            'description'   => __('Info box with a full column width'),
            'render_template' => 'template-parts/gutenberg/info-box-block.php',
            'category' => 'widgets',
            'icon' => 'info-outline',
            'keywords' => ['Info', 'Content'],
            'mode' => 'edit',
            'example'  => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => [
                        'is_preview'    => true
                    ]
                ]
            ]
        ]);
    }

    /**
     * Register Content Card Block
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function register_content_card_block(): void {
        acf_register_block_type([
            'name' => 'tu-delft/content-card',
            'title' => __('Content Card Block'),
            'description'   => __('Pair of content cards with a full column width'),
            'render_template' => 'template-parts/gutenberg/content-card-block.php',
            'category' => 'widgets',
            'icon' => 'grid-view',
            'keywords' => ['Content Card', 'Content'],
            'mode' => 'edit',
            'example'  => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => [
                        'is_preview'    => true
                    ]
                ]
            ]
        ]);
    }

    /**
     * Register Image Text Block
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function register_image_text_block(): void {
        acf_register_block_type([
            'name' => 'tu-delft/image-text',
            'title' => __('Image Text Block'),
            'description'   => __('Image-Text Block for TU-Delft'),
            'render_template' => 'template-parts/gutenberg/image-text-block.php',
            'category' => 'widgets',
            'icon' => 'align-pull-left',
            'keywords' => ['Image', 'Text', 'Content'],
            'mode' => 'edit',
            'example'  => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => [
                        'is_preview'    => true
                    ]
                ]
            ]
        ]);
    }

    /**
     * Register Text Image Block
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function register_text_image_block(): void {
        acf_register_block_type([
            'name' => 'tu-delft/text-image',
            'title' => __('Text Image Block'),
            'description'   => __('Text-Image Block for TU-Delft'),
            'render_template' => 'template-parts/gutenberg/text-image-block.php',
            'category' => 'widgets',
            'icon' => 'align-pull-right',
            'keywords' => ['Text', 'Image', 'Content'],
            'mode' => 'edit',
            'example'  => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => [
                        'is_preview'    => true
                    ]
                ]
            ]
        ]);
    }

    /**
     * Register Video Text Block
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function register_video_text_block(): void {
        acf_register_block_type([
            'name' => 'tu-delft/video-text',
            'title' => __('Video Text Block'),
            'description'   => __('Video-Text Block for TU-Delft'),
            'render_template' => 'template-parts/gutenberg/video-text-block.php',
            'category' => 'widgets',
            'icon' => 'align-pull-left',
            'keywords' => ['Video', 'Text', 'Content'],
            'mode' => 'edit',
            'example'  => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => [
                        'is_preview'    => true
                    ]
                ]
            ]
        ]);
    }

    /**
     * Register Text Video Block
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function register_text_video_block(): void {
        acf_register_block_type([
            'name' => 'tu-delft/text-video',
            'title' => __('Text Video Block'),
            'description'   => __('Text-Video Block for TU-Delft'),
            'render_template' => 'template-parts/gutenberg/text-video-block.php',
            'category' => 'widgets',
            'icon' => 'align-pull-right',
            'keywords' => ['Text', 'Video', 'Content'],
            'mode' => 'edit',
            'example'  => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => [
                        'is_preview'    => true
                    ]
                ]
            ]
        ]);
    }
    
    /**
     * Register Quiz Block
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function register_quiz_block(): void {
        acf_register_block_type([
            'name' => 'tu-delft/quiz',
            'title' => __('Quiz Block'),
            'description'   => __('Quiz Block for TU-Delft'),
            'render_template' => 'template-parts/gutenberg/quiz-block.php',
            'category' => 'widgets',
            'icon' => 'editor-ul',
            'keywords' => ['Quiz', 'Content'],
            'mode' => 'edit',
            'example'  => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => [
                        'is_preview'    => true
                    ]
                ]
            ]
        ]);
    }

    /**
     * Register H5P Block
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function register_h5p_block(): void {
        acf_register_block_type([
            'name' => 'tu-delft/h5p',
            'title' => __('H5P Block'),
            'description'   => __('H5P Block for TU-Delft'),
            'render_template' => 'template-parts/gutenberg/h5p-block.php',
            'category' => 'widgets',
            'icon' => 'html',
            'keywords' => ['H5P', 'Content'],
            'mode' => 'edit',
            'example'  => [
                'attributes' => [
                    'mode' => 'preview',
                    'data' => [
                        'is_preview'    => true
                    ]
                ]
            ]
        ]);
    }
}