<?php

/*
Plugin Name:  Stylist Taxonomy Registration
Description:  Register your Stylists taxonomy and rotate through them to highlight each individual stylist
Version:      1.0.0
Author:       Michael Marceca
Author URI:   https://developer.wordpress.org/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
Domain Path:  /languages
*/


function register_stylist_menu() {
    add_menu_page(
        __( 'Custom Menu Title', 'textdomain' ),
        'Stylist',
        'manage_options',
        'mm-stylist-highlight-rotation/stylist-rotaion/stylist-rotaion.php',
        ''
    );

    add_submenu_page( 'mm-stylist-highlight-rotation/stylist-rotaion/stylist-rotaion.php', 'Stylist', 'Stylist',
    'manage_options', 'mm-stylist-highlight-rotation/stylist-rotaion/stylist-rotaion.php');
    
    add_submenu_page( 'mm-stylist-highlight-rotation/stylist-rotaion/stylist-rotaion.php', 'Stylist sub', 'Stylist Submenu Page',
    'manage_options', 'mm-stylist-highlight-rotation/stylist-rotaion/stylist-rotaion.php');
}
add_action( 'admin_menu', 'register_stylist_menu' );
?>