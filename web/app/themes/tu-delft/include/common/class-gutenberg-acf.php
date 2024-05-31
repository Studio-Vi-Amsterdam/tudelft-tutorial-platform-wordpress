<?php

namespace TuDelft\Theme\Common;

/**
 * Class Gutenberg ACF
 *
 * Class for Gutenberg ACF blocks
 * 
 * 
 * @package     TuDelft\Theme\Common
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */

class Gutenberg_ACF {

    private const TEXT_BLOCK = [
        'key' => 'group_65cac7d3c423e',
		'title' => 'Text Block',
		'fields' => array(
			array(
				'key' => 'tu-delft-text_content_key',
				'label' => 'Content',
				'name' => 'tu-delft-text_content',
				'aria-label' => '',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/tu-delft-text',
				),
			),
		),
		'menu_order' => 1,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => 'TU Delft Gutenberg Text Block',
		'show_in_rest' => 0,
    ];

    private const TEXT_IMAGE_BLOCK = [
        'key' => 'group_65cc028520f8a',
        'title' => 'Text-Image Block',
        'fields' => array(
            array(
                'key' => 'tu-delft-text-image_content_key',
                'label' => 'Content',
                'name' => 'tu-delft-text-image_content',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'tu-delft-text-image_image_key',
                'label' => 'Image',
                'name' => 'tu-delft-text-image_image',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/tu-delft-text-image',
                ),
            ),
        ),
        'menu_order' => 1,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => 'TU Delft Gutenberg Content for Text-Image Block',
        'show_in_rest' => 0,
    ];

    private const IMAGE_TEXT_BLOCK = [
        'key' => 'group_65cc01cd08a55',
		'title' => 'Image-Text Block',
		'fields' => array(
			array(
				'key' => 'tu-delft-image-text_image_key',
				'label' => 'Image',
				'name' => 'tu-delft-image-text_image',
				'aria-label' => '',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
				'preview_size' => 'medium',
			),
			array(
				'key' => 'tu-delft-image-text_content_key',
				'label' => 'Content',
				'name' => 'tu-delft-image-text_content',
				'aria-label' => '',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/tu-delft-image-text',
				),
			),
		),
		'menu_order' => 1,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => 'TU Delft Gutenberg Content for Image-Text Block',
		'show_in_rest' => 0,
    ];

    private const IMAGE_BLOCK = [
        'key' => 'group_65cac89c2b83b',
        'title' => 'Image Block',
        'fields' => array(
            array(
                'key' => 'tu-delft-image_image_key',
                'label' => 'Image',
                'name' => 'tu-delft-image_image',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => 'Select an image from Media Library',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/tu-delft-image',
                ),
            ),
        ),
        'menu_order' => 1,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => 'TU Delft Gutenberg Image Block',
        'show_in_rest' => 0,
    ];

    private const VIDEO_BLOCK = [
        'key' => 'group_65cac99045995',
		'title' => 'Video Block',
		'fields' => array(
			array(
				'key' => 'tu-delft-video_video_key',
				'label' => 'Video',
				'name' => 'tu-delft-video_video',
				'aria-label' => '',
				'type' => 'file',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'library' => 'all',
				'min_size' => '',
				'max_size' => '',
				'mime_types' => 'mp4,mpeg,webm',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/tu-delft-video',
				),
			),
		),
		'menu_order' => 1,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => 'TU Delft Gutenberg Video Block',
		'show_in_rest' => 0,
    ];

    private const TEXT_VIDEO_BLOCK = [
        'key' => 'group_65cc0a2aedfb3',
        'title' => 'Text-Video Block',
        'fields' => array(
            array(
                'key' => 'tu-delft-text-video_content_key',
                'label' => 'Content',
                'name' => 'tu-delft-text-video_content',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
            array(
                'key' => 'tu-delft-text-video_video_key',
                'label' => 'Video',
                'name' => 'tu-delft-text-video_video',
                'aria-label' => '',
                'type' => 'file',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'library' => 'all',
                'min_size' => '',
                'max_size' => '',
                'mime_types' => 'mp4,mpeg,webm',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/tu-delft-text-video',
                ),
            ),
        ),
        'menu_order' => 1,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => 'TU Delft Gutenberg Content for Text-Video Block',
        'show_in_rest' => 0,
    ];

    private const VIDEO_TEXT_BLOCK = [
        'key' => 'group_65cc0c32d7182',
        'title' => 'Video-Text Block',
        'fields' => array(
            array(
                'key' => 'tu-delft-video-text_video_key',
                'label' => 'Video',
                'name' => 'tu-delft-video-text_video',
                'aria-label' => '',
                'type' => 'file',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'library' => 'all',
                'min_size' => '',
                'max_size' => '',
                'mime_types' => 'mp4,mpeg,webm',
            ),
            array(
                'key' => 'tu-delft-video-text_content_key',
                'label' => 'Content',
                'name' => 'tu-delft-video-text_content',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/tu-delft-video-text',
                ),
            ),
        ),
        'menu_order' => 1,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => 'TU Delft Gutenberg Content for Video-Text Block',
        'show_in_rest' => 0,
    ];

    private const DOWNLOAD_BLOCK = [
        'key' => 'group_65cbfc5778484',
        'title' => 'Download Block',
        'fields' => array(
            array(
                'key' => 'tu-delft-download_file_key',
                'label' => 'File',
                'name' => 'tu-delft-download_file',
                'aria-label' => '',
                'type' => 'file',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'library' => 'all',
                'min_size' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'tu-delft-download_title_key',
                'label' => 'Title',
                'name' => 'tu-delft-download_title',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'tu-delft-download_description_key',
                'label' => 'Description',
                'name' => 'tu-delft-download_description',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/tu-delft-download',
                ),
            ),
        ),
        'menu_order' => 1,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => 'TU Delft Gutenberg Download Block',
        'show_in_rest' => 0,
    ];

    private const INFO_BLOCK = [
        'key' => 'group_65cbfde117cd9',
		'title' => 'Info Block',
		'fields' => array(
			array(
				'key' => 'tu-delft-info-box_content_key',
				'label' => 'Content',
				'name' => 'tu-delft-info-box_content',
				'aria-label' => '',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/tu-delft-info-box',
				),
			),
		),
		'menu_order' => 1,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => 'TU Delft Gutenberg Info Box Block',
		'show_in_rest' => 0,
    ];

    private const CONTENT_CARD_BLOCK = [
        'key' => 'group_65cbff3316f33',
        'title' => 'Content Card Block',
        'fields' => array(
            array(
                'key' => 'tu-delft-content-card_content_card_row_key',
                'label' => 'Content Card Row',
                'name' => 'tu-delft-content-card_content_card_row',
                'aria-label' => '',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'table',
                'pagination' => 0,
                'min' => 0,
                'max' => 0,
                'collapsed' => '',
                'button_label' => 'Add Row',
                'rows_per_page' => 20,
                'sub_fields' => array(
                    array(
                        'key' => 'tu-delft-content-card_card_title_key',
                        'label' => 'Card Title',
                        'name' => 'tu-delft-content-card_card_title',
                        'aria-label' => '',
                        'type' => 'text',
                        'instructions' => 'Leave empty if you want to use title of link',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'maxlength' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'parent_repeater' => 'tu-delft-content-card_content_card_row_key',
                    ),
                    array(
                        'key' => 'tu-delft-content-card_card_link_key',
                        'label' => 'Card Link',
                        'name' => 'tu-delft-content-card_card_link',
                        'aria-label' => '',
                        'type' => 'post_object',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'post_type' => array(
                            0 => 'course',
                            1 => 'software',
                            2 => 'subject',
                            3 => 'tutorial',
                            4 => 'chapter',
                        ),
                        'post_status' => array(
                            0 => 'publish',
                        ),
                        'taxonomy' => '',
                        'return_format' => 'object',
                        'multiple' => 0,
                        'allow_null' => 0,
                        'bidirectional' => 0,
                        'ui' => 1,
                        'bidirectional_target' => array(
                        ),
                        'parent_repeater' => 'tu-delft-content-card_content_card_row_key',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/tu-delft-content-card',
                ),
            ),
        ),
        'menu_order' => 1,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => 'TU Delft Gutenberg Content Card Block',
        'show_in_rest' => 0,
    ];

    private const QUIZ_BLOCK = [
        'key' => 'group_6659a9e9587a4',
        'title' => 'Quiz Block',
        'fields' => array(
            array(
                'key' => 'tu-delft-quiz-block_question_key',
                'label' => 'Question',
                'name' => 'tu-delft-quiz-block_question',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'tu-delft-quiz-block_answers_key',
                'label' => 'Answers',
                'name' => 'tu-delft-quiz-block_answers',
                'aria-label' => '',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'table',
                'pagination' => 0,
                'min' => 0,
                'max' => 0,
                'collapsed' => '',
                'button_label' => 'Add Answer',
                'rows_per_page' => 20,
                'sub_fields' => array(
                    array(
                        'key' => 'tu-delft-quiz-block_answer_key',
                        'label' => 'Answer',
                        'name' => 'tu-delft-quiz-block_answer',
                        'aria-label' => '',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'maxlength' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'parent_repeater' => 'tu-delft-quiz-block_answers_key',
                    ),
                    array(
                        'key' => 'tu-delft-quiz-block_is_correct_key',
                        'label' => 'Is Correct',
                        'name' => 'tu-delft-quiz-block_is_correct',
                        'aria-label' => '',
                        'type' => 'true_false',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'maxlength' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'parent_repeater' => 'tu-delft-quiz-block_answers_key',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/tu-delft-quiz',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ];

    private const H5P_BLOCK = [
        'key' => 'group_6659cbcf91a17',
        'title' => 'H5P Block',
        'fields' => array(
            array(
                'key' => 'tu-delft-h5p-block_source_key',
                'label' => 'H5P source',
                'name' => 'tu-delft-h5p-block_source',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/tu-delft-h5p',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ];

    /**
     * Map block slug to block array
     * 
     * @param string $block_slug
     * 
     * @return array|null
     * 
     * @since 1.0.0
     */
    private static function block_map(string $block_slug): array|null {
        $map = [
            'text_block' => self::TEXT_BLOCK,
            'text_image_block' => self::TEXT_IMAGE_BLOCK,
            'image_text_block' => self::IMAGE_TEXT_BLOCK,
            'image_block' => self::IMAGE_BLOCK,
            'video_block' => self::VIDEO_BLOCK,
            'text_video_block' => self::TEXT_VIDEO_BLOCK,
            'video_text_block' => self::VIDEO_TEXT_BLOCK,
            'download_block' => self::DOWNLOAD_BLOCK,
            'info_box_block' => self::INFO_BLOCK,
            'content_card_block' => self::CONTENT_CARD_BLOCK,
            'quiz_block' => self::QUIZ_BLOCK,
            'h5p_block' => self::H5P_BLOCK,
            // Add new blocks here
        ];
        
        if (array_key_exists($block_slug, $map)) {
            return $map[$block_slug];
        }
        else {
            return null;
        }
    }

    /**
     * Register blocks
     * 
     * @param string $block_slug
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public static function register_blocks(string $block_slug) {
        if ( ! function_exists( 'acf_add_local_field_group' ) ) {
            return;
        }

        $block = self::block_map($block_slug);

        if ($block) {
            acf_add_local_field_group($block);
        }
    }
}