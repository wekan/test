<?php

// Wekan API library

// API example from https://stackoverflow.com/questions/2138527/php-curl-http-post-sample-code

function WekanLogin($url, $username, $password)
{
    // set post fields
    $post = [
        'username' => $username,
        'password' => $password,
    ];

    $ch = curl_init($url . 'user/login');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

    // execute!
    $response = curl_exec($ch);

    // close the connection, release resources used
    curl_close($ch);

    // do anything you want with your response
    return var_dump($response);
}

?>
