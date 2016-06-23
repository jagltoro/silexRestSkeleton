<?php
/**
 * Created by PhpStorm.
 * User: jesus
 * Date: 23/06/16
 * Time: 08:21 AM
 */

use App\Helpers\YamlParser;
use Silex\Provider\DoctrineServiceProvider;

$config             = new YamlParser(BASE_DIR.'/config/config.yml');
$params             = $config->yamlToArray();

$app['debug']       = $params['debug']['active'];
$app['db.options']  = array(
    "driver"    => $params['database']['driver'],
    "user"      => $params['database']['user'],
    "password"  => $params['database']['password'],
    "dbname"    => $params['database']['name'],
    "host"      => $params['database']['host'],
);

$app->register(new DoctrineServiceProvider(), array(
    "db.options" => $app["db.options"]
));