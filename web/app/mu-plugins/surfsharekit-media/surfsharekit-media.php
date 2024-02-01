<?php
/**
 * Asset Manager Framework plugin extension for loading SurfShareKit Media
 * 
 * Extends https://github.com/humanmade/asset-manager-framework
 *
 * @package           ViAmsterdam\SurfShareKit
 * @author            ViAmsterdam <https://viamsterdam.com/>
 *
 * @wordpress-plugin
 * Plugin Name:       SurfShareKit Media
 * Description:       Use SurfShareKit as source for media library.
 * Version:           1.0.0
 * Requires at least: 2.8
 * Requires PHP:      7.2
 * Author:            Aljosa Kotur
 * Author URI:        https://github.com/AljosaK
 * Text Domain:       surfsharekit-media
 */

namespace SurfShareKit;

use TuDelft\SurfShareKit\Inc\Bootstrap;

require_once __DIR__ . '/inc/class-bootstrap.php';
require_once __DIR__ . '/inc/class-provider.php';
require_once __DIR__ . '/inc/class-surfsharekit.php';
require_once __DIR__ . '/inc/class-cache.php';

new Bootstrap();