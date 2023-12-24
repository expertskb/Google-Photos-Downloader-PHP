<?php

/*
Author : Shakib Ahmed
E-mail : shakibwap@yahoo.com
WEB: https://shakib.eu.org
*/


error_reporting(E_ALL);
ini_set('display_errors', 0);

use Shakib\GPFile;

if (!defined("IN_SHAKIB")) {
    die("You cannot access directly because IN_SHAKIB is missing");
}

if (!defined('SHAKIB_ROOT')) {
    define('SHAKIB_ROOT', dirname(dirname(__FILE__)) . "/");
}

$_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

require SHAKIB_ROOT . "inc/config.php";
require SHAKIB_ROOT . "class/gpfile.class.php";


$gpfile = new GPFile;
