<?php

use \Firebase\JWT\JWT;

function validateToken($token)
{
    $config = config('Jwt');
    return JWT::decode($token, $config->public_key, array('RS256'));
}

function checkToken($instance, $token)
{
    if ($token) {
        $decodedToken = validateToken($token, $instance);
        if ($decodedToken != false) {
            return true;
        }
    }
    return false;
}

function decodedToken($instance, $token)
{
    if ($token) {
        $decodedToken = validateToken($token, $instance);
        if ($decodedToken != false) {
            return $decodedToken;
        }
    }
    return false;
}
