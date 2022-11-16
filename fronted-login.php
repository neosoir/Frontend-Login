<?php

/**
 * @link                https://neoslab.online
 * @since               1.0.0
 * @package             fronted-login
 * 
 * @wordpress-plugin
 * Plugin Name:       Fronted Login. 
 * Plugin URI:        https://neoslab.online
 * Description:       Login form created by Gutember blocks.
 * Version:           1.0
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Author:            Neos Lab
 * Author URI:        https://neoslab.online
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       fronted-login
 */

if ( ! defined( 'PLZ_PATH' ) ) 
    define( 'PLZ_PATH', plugin_dir_path( __FILE__ ) );

if ( ! defined( 'PLZ_URL' ) )
    define( 'PLZ_URL', plugin_dir_url( __FILE__ ) );

//API REST.
require_once PLZ_PATH . "includes/API/api-registro.php";
require_once PLZ_PATH . "includes/API/api-login.php";

// Blocks.
require_once PLZ_PATH . 'blocks/register/index.php';
require_once PLZ_PATH . 'blocks/news/index.php';