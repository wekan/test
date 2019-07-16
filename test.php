<?php

// Wekan API library

include_once 'settings.php';
include_once 'api.php';

$token = WekanLogin($url, $username, $password);

echo "Login token: " . $token;

?>