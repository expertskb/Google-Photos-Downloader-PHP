<?php

/*
Author : Shakib Ahmed
E-mail : shakibwap@yahoo.com
WEB: https://shakib.eu.org
*/

namespace Shakib;

class GPFile
{
    private $url = "https://gkit.eu.org/api/";


    public function info($shakib)
    {
        $url = $this->url . 'link?url=' . $shakib;
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        $data = curl_exec($ch);
        curl_close($ch);
        return json_decode($data, true);
    }
}
