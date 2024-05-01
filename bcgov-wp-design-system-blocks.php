<?php
/**
 * Plugin Name:     Bcgov Design System Blocks
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     bcgov-wp-design-system-blocks
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Bcgov_Wp_Design_System_Blocks
 */

// Your code starts here.

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
* Loads the autoloader.
*/
if ( ! class_exists( 'Bcgov\\DesignSystemBlocks\\Plugin' ) ) {
    $local_composer  = __DIR__ . '/vendor/autoload.php';
    $server_composer = __DIR__ . '/../../../../vendor/autoload.php';
    if ( file_exists( $local_composer ) || file_exists( $server_composer ) ) {
        if ( file_exists( $server_composer ) ) {
            require_once $server_composer;
        }
        if ( ! class_exists( 'Bcgov\\DesignSystemBlocks\\Plugin' ) ) {
            require_once $local_composer;
        }
    }
}
