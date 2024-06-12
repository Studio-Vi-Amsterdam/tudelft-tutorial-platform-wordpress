<?php

namespace TuDelft\Theme;
use TuDelft\Theme\Common\Gutenberg;
use TuDelft\Theme\Modules\Chapter\Chapter;
use TuDelft\Theme\Modules\Tutorial\Tutorial;
use TuDelft\Theme\Modules\Subject\Subject;
use TuDelft\Theme\Modules\Software\Software;
use TuDelft\Theme\Modules\Course\Course;
use TuDelft\Theme\Modules\Lab\Lab;

/**
 * Class TuDelft
 *
 * Main class for the theme.
 * 
 * 
 * @package     TuDelft\Theme\Common
 * @author      Aljosa K <https://github.com/AljosaK>
 * @version     1.0.0
 * @link        https://viamsterdam.com
 */
class Tu_Delft {

    public function __construct() {
        add_action( 'init', [ $this, 'load' ], 1 );

        add_theme_support( 'menus' );
        add_action( 'init', [ $this, 'menus' ] );
        
        add_action( 'wp_ajax_submit_feedback', [ $this, 'submit_feedback' ] );
        add_action( 'wp_ajax_nopriv_submit_feedback', [ $this, 'submit_feedback' ] );
    }

    /**
     * Load all the theme classes
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function load(): void {
        $this->load_classes();
        $this->init_classes();
    }

    /**
     * Register menus
     * 
     * @return void
     * 
     * @since 1.0.0
     */
    public function menus(): void {

        register_nav_menus( [
            'footer-info' => __( 'Footer Info', 'magen' ),
            'footer1' => __( 'Footer 1', 'magen' ),
            'footer2' => __( 'Footer 2', 'magen' ),
        ] );
    }

    /**
     * Load theme classes
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function load_classes(): void {
        
        // include autoload for modules
        require_once TU_DELFT_THEME_PATH . 'lib/class-autoload.php';

        $autoload = new Autoload();
        $autoload->register();

        /**
         * Load classes shared between modules
         */       
        $autoload->addNamespace( 
            'TuDelft\Theme\Common', 
            TU_DELFT_THEME_PATH . '/include/common' 
        );

        /**
         * Load modules
         */
        $autoload->addNamespace( 
            'TuDelft\Theme\Modules', 
            TU_DELFT_THEME_PATH . '/include/modules'
        );

        /**
         * Load abstract classes
         */
        $autoload->addNamespace( 
            'TuDelft\Theme\Abstract', 
            TU_DELFT_THEME_PATH . '/include/abstract'
        );
    }

    /**
     * Initialize theme classes
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function init_classes(): void {
        new Gutenberg();
        new Chapter();
        new Tutorial();
        new Subject();
        new Software();
        new Course();
        new Lab();
    }

    /**
     * Submit feedback
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function submit_feedback(): void {
        
        $feedback_about = sanitize_text_field( $_POST['feedback_about'] );
        $feedback_message = sanitize_text_field( $_POST['message'] );

        $email = get_bloginfo('admin_email');

        $subject = 'Feedback about ' . $feedback_about;

        $headers = array('Content-Type: text/html; charset=UTF-8');

        $message = '<html><body>';
        $message .= '<p>Feedback about ' . $feedback_about . '</p>';
        $message .= '<p>Message: ' . $feedback_message . '</p>';
        $message .= '</body></html>';

        wp_mail( $email, $subject, $message, $headers );

    }

}