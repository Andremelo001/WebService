<?php

    $url = 'http://localhost/api_rest_2021-master_final/public_html/api';

    $class = '/user';
    $param = '';

    $response = file_get_contents($url.$class.$param);

    //echo $response;

    //
    //$response = json_decode($response, 1);
    //var_dump($response['data'][1]['email']);
