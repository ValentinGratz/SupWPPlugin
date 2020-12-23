<?php
/*
Plugin Name: SupWPPlugin
Plugin URI:
Description: Mon premier plugin WordPress
Author: Valentin Gratz
Version: 0.0.1
Author URI: http://www.valentin-gratz.xyz
*/

function displayEnabled(){
    echo "<script> alert('Mon plugin est active !') </script>";
}

//add_action( 'admin_notices', 'displayEnabled' );

function displayAdminMenu(){
    echo "Tu es sur la page de mon extension.";
}

function createMenu(){
    add_menu_page("SupWPPlugin",
        "MonPlugin",
        "manage_option",
        "monPlugin",
        "displayAdminPlugin",
        "",
        1);  2222


add_action('admin_menu', "createMenu");

}