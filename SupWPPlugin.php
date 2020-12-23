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

// crochet qui va executer generateCSS
function generateCSS(){
    wp_register_style('monCSSBootstrap', plugins_url('SupWPPlugin/assets/bootstrap.css'));
}

add_action( 'admin_head', 'generateCSS' );

function displayAdminMenu(){

    wp_enqueue_style('monCSSBootstrap');

    echo "<h1>SupWPPlugin</h1><br>
            <h2>Accueil</h2>
            <p>Tu es sur la page de mon extension.</p>
            <br>
            <h3>A quoi sert le plugin ? </h3>
            <p>Pour le moment à rien, c'est juste le premier plugin que je développe en formation.</p>
            <br><br>
            <h3>Informations de maintenance</h3>
            <br>
            <p>Plugin Name: SupWPPlugin<br>
                Plugin URI:<br>
                Description: Mon premier plugin WordPress<br>
                Author: Valentin Gratz<br>
                Version: 0.0.1<br>
                Author URI: http://www.valentin-gratz.xyz
                <br><br>
                Compatible : version 5.6</p>";
}

function createMenu(){
    add_menu_page("SupWPPlugin",
        "MonPlugin",
        "manage_options",
        "monPlugin",
        "displayAdminMenu",
        "",
        1);

}

add_action('admin_menu', "createMenu"); //mettre en dehors de la function