<?php
/*
Plugin Name: VR Experience Plugin
Plugin URI: https://mathverse.com/vr-experience-plugin
Version: 1.0
Author: Your Name
Author URI: https://yourwebsite.com
*/

// Define the plugin's constants
define('VR_EXPERIENCE_PLUGIN_VERSION', '1.0');
define('VR_EXPERIENCE_PLUGIN_NAME', 'VR Experience Plugin');

// Include the plugin's functions
require_once('functions.php');

// Define the plugin's hooks
add_action('wp_enqueue_scripts', 'vr_experience_enqueue_scripts');
add_action('wp_footer', 'vr_experience_footer_scripts');

// Define the plugin's functions
function vr_experience_enqueue_scripts() {
    // Enqueue the plugin's styles
    wp_enqueue_style('vr-experience-style', plugins_url('styles.css', __FILE__), array(), VR_EXPERIENCE_PLUGIN_VERSION);
    // Enqueue the plugin's scripts
    wp_enqueue_script('vr-experience-script', plugins_url('script.js', __FILE__), array('jquery'), VR_EXPERIENCE_PLUGIN_VERSION, true);
}

function vr_experience_footer_scripts() {
    // Add the plugin's footer scripts
    ?>
    <script>
        // Add the plugin's footer script
        console.log("VR Experience Plugin loaded!");
    </script>
    <?php
}