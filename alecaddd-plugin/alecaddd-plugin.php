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

  //constructor
  function __construct() {
    add_action( 'init', array( $this, 'custom_post_type' ) );
  }

  //methods
  function activate() {
    //generate a custom post type: Call the class method
    $this->custom_post_type();

    //flush rewrite rules: this is a global method
    flush_rewrite_rules();
  }

  function deactivate() {

  }

  function uninstall() {

  }

  function custom_post_type() {
    register_post_type( 'book', ['public' => 'true', 'label' => 'Books'] );

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
