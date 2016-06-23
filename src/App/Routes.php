<?php
use Symfony\Component\HttpFoundation\Request;
/**
 * Here you can define all routes that are used in the application
 */

$app->post('/hello', function (Request $request) use ($app)  {
    $return = \App\Controllers\DefaultController::index($request->request);
    return $return;
});
