<?php
if ( ! defined( 'ABSPATH' ) ) exit;

// Agregar una nueva columna
function Quix_views_column($defaults) {
    $defaults['Shortcode'] = 'Shortcode';
    return $defaults;
    
}
add_filter('manage_quizes_posts_columns', 'Quix_views_column');


function views($column_name) {
    if($column_name === 'Shortcode') {
      
                echo "[quizbook preguntas='' orden='']";
    }
}
add_action('manage_quizes_posts_custom_column','views',5,2);
        
