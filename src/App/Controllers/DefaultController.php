<?php

namespace App\Controllers;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * For controllers use $request as a parameter of the function
 *
 * You can get the request as: $request->get('id');
 */

class DefaultController
{
    public static function index($request){

        $data = array('name'=>'Jesus');

        return new JsonResponse($data);
    }
}
