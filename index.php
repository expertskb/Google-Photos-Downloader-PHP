<?php

/*
Author : Shakib Ahmed
E-mail : shakibwap@yahoo.com
WEB: https://shakib.eu.org
*/

define("IN_SHAKIB", true);
include "inc/init.php";

$request = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'home';

$allowedPages = array(
    'home',
    'download',
    'create'
);

if (in_array($request, $allowedPages)) {
    require SHAKIB_ROOT . $request . '.php';
} else {
    http_response_code(404);
    require SHAKIB_ROOT . '404.php';
}
