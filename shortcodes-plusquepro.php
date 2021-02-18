<?php
/*
  Plugin Name: Shortcodes Plus que Pro
  Description: Afficher les widgets Plus que Pro avec des shortcodes : [plusquepro_petit] et [plusquepro_grand]
  Version: 1
  Author: Pierre Bichet
  Author URI: https://www.divi-community.fr
 */



// Petit widget - Ajoutez l'URL précisée sur votre compte Plus que Pro

function shortcode_plusquepro_petit_widget(){
    return file_get_contents("URL du widget C2");
}
add_shortcode('plusquepro_petit', 'shortcode_plusquepro_petit_widget');


// Grand widget - Ajoutez l'URL précisée sur votre compte Plus que Pro

function shortcode_plusquepro_grand_widget(){
    return file_get_contents("URL du widget B2");
}
add_shortcode('plusquepro_grand', 'shortcode_plusquepro_grand_widget');