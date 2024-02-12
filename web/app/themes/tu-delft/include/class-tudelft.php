<?php

namespace TuDelft\Theme;
use TuDelft\Theme\Common\Gutenberg;
use TuDelft\Theme\Modules\Chapter\Chapter;
use TuDelft\Theme\Modules\Tutorial\Tutorial;
use TuDelft\Theme\Modules\Subject\Subject;
use TuDelft\Theme\Modules\Software\Software;
use TuDelft\Theme\Modules\Course\Course;;

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
        add_action( 'init', [ $this, 'load' ] );
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
    }

}