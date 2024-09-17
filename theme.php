<?php
/*
Theme Name: MathVerse
Theme URI: https://mathverse.com
Version: 1.0
Author: Your Name
Author URI: https://yourwebsite.com
*/

// Define the theme's constants
define('THEME_VERSION', '1.0');
define('THEME_NAME', 'MathVerse');

// Include the theme's functions
require_once('functions.php');

// Define the theme's hooks
add_action('wp_enqueue_scripts', 'mathverse_enqueue_scripts');
add_action('wp_footer', 'mathverse_footer_scripts');

// Define the theme's functions
function mathverse_enqueue_scripts() {
    // Enqueue the theme's styles
    wp_enqueue_style('mathverse-style', get_stylesheet_uri(), array(), THEME_VERSION);
    // Enqueue the theme's scripts
    wp_enqueue_script('mathverse-script', get_template_directory_uri() . '/script.js', array('jquery'), THEME_VERSION, true);
}

function mathverse_footer_scripts() {
    // Add the theme's footer scripts
    ?>
    <script>
        // Add the theme's footer script
        console.log("MathVerse theme loaded!");
    </script>
    <?php
}