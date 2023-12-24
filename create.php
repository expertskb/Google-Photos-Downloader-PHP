<?php

/*
Author : Shakib Ahmed
E-mail : shakibwap@yahoo.com
WEB: https://shakib.eu.org
*/

use Shakib\GPFile;

$link = isset($_REQUEST['link']) ? $_REQUEST['link'] : null;

$data = $gpfile->info($link);


if ($data['status'] === 200 || isset($data['url'])) {
    $fileurl = $_link . '/download?id=' . base64_encode($link);
    echo $fileurl;
} else {
    echo $data['message'];
}
