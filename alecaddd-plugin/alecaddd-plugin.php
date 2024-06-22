<?php
/**
 * @package AlecadddPlugin
 */
/*
Plugin Name: Alecaddd Plugin
Plugin URI: https://alecaddd.com/plugin
Description: This is my first attempt on writing a custom plugin
Version: 1.0.0
Author: 
Author URI:
License: GPLv2 or later
Text Domain: alecaddd-plugin
*/

defined( 'ABSPATH' ) or die( 'Why?' );

class AlecadddPlugin
{
  //methods
  function activate() {

  }

  function deactivate() {

  }

  function uninstall() {

  }
}

if ( class_exists( 'AlecadddPlugin' ) ) { 
  $alecadddPlugin = new AlecadddPlugin();
}

//activate
register_activation_hook( __FILE__, array( $alecadddPlugin, 'activate' ) );

//deactivate
register_deactivation_hook( __FILE__, array( $alecadddPlugin, 'deactivate' ) );

//uninstall
