<?php
/**
 * Plugin Name: Controls for Contact Form 7
 * Description: Use the "Controls" tab of each form settings for advanced controls. Subscribe to the <a href="https://formcontrols.com/pro" target="_blank">🚀 PRO version</a> for advanced analytics and tracking features.
 * Plugin URI: https://formcontrols.com
 * Author: Kaspars Dambis
 * Author URI: https://formcontrols.com
 * Version: 0.10.0
 * License: GPL2
 * Text Domain: contact-form-7-extras
 */

require_once __DIR__ . '/src/class-cf7-extras-form-settings.php';
require_once __DIR__ . '/src/class-cf7-extras-integration.php'; // Before all integrations.
require_once __DIR__ . '/src/class-cf7-extras-integration-tablepress.php';
require_once __DIR__ . '/src/class-cf7-extras.php';

$plugin = Cf7_Extras::instance();
$plugin->set_plugin_dir( __DIR__ );

add_action( 'plugins_loaded', array( $plugin, 'init' ) );
