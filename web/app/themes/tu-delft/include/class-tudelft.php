<?php

namespace TuDelft\Theme;

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
    }

    /**
     * Initialize theme classes
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function init_classes(): void {
    }

}