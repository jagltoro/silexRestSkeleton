<?php

/**
 *  Define the base path of the project
 */
define('BASE_DIR', realpath(__DIR__ . '/..'));

require_once BASE_DIR.'/vendor/autoload.php';

$app = new Silex\Application();

/**
 * Set the config for the app
 */
require BASE_DIR . '/src/App/Helpers/Configurator.php';
/**
 * Include the main application file
 */
require BASE_DIR . '/src/app.php';


$app->run();
