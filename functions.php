<?php
add_action( 'wp_enqueue_scripts', 'pabcar_cargar_estilos' );

function pabcar_cargar_estilos() {
    wp_enqueue_style( 'pabcar-hijo-estilos', get_stylesheet_uri() );
}
