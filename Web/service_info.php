<?php

    // $_SERVER Global Objects

    // For Server Global Object
    $server = [
        "Server Name"=> $_SERVER['SERVER_NAME'],
        "HTTP Host"=> $_SERVER['HTTP_HOST'],
        "Server Software"=> $_SERVER['SERVER_SOFTWARE'],
        "Current Page"=> $_SERVER['PHP_SELF'],
        "Absolute Path"=> $_SERVER['SCRIPT_FILENAME']
    ];

    // Printt_r($server);

    // For Cient Global Object

    $client = [
        'Client System info'=> $_SERVER['HTTP_USER_AGENT'],
        'Client IP'=> $_SERVER['REMOTE_ADDR'],
        'Remote Port'=> $_SERVER['REMOTE_PORT']
    ];

    // print_r($client);
?>