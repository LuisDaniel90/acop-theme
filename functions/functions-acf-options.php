<?php
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Ajustes Generales',
        'menu_title'    => 'Ajustes',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Ajustes de Encabezado',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
}