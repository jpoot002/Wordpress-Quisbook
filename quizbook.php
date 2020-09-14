<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/*
Plugin Name:Quizbook
Plugin URI:
Description: Puglin para añadir Quizbook o preguntas
Version: 1.0
Author: jesus alfredo poot canche 
Author URI:
License: GPL2
License URL: https://www.gnu.org/license/gpl-2.0.thml
Text Domain: Quizbook
*/

require_once plugin_dir_path(__FILE__) . 'includes/posttypes.php';

register_activation_hook(__FILE__, 'quizbook_rewrite_flush');

require_once plugin_dir_path(__FILE__) . 'includes/metaboxes.php';

require_once plugin_dir_path( __FILE__ ) . 'includes/roles.php';

register_activation_hook(__FILE__, 'quizbook_crear_role');

register_deactivation_hook(__FILE__, 'quizbook_remover_role');

register_activation_hook( __FILE__, 'quizbook_agregar_capabilities');

register_deactivation_hook( __FILE__, 'quizbook_remover_capabilities');

require_once plugin_dir_path(__FILE__) . 'includes/shortcode.php';

require_once plugin_dir_path(__FILE__) . 'includes/funciones.php';

require_once plugin_dir_path(__FILE__) . 'includes/scripts.php';

require_once plugin_dir_path(__FILE__) . 'includes/resultados.php';

require_once plugin_dir_path(__FILE__) . 'includes/columnas_quiz.php';
