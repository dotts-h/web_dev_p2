<?php

function sanitizeString($var)
{
    $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);

    return $var;
}


$algo = '';
$pass = '';

if (isset($_POST['algorithm'])) $algo = $_POST['algorithm'];
if (isset($_POST['passwd']))    $pass = sanitizeString($_POST['passwd']);

$hashed = password_hash(
    $pass,
    $algo === "default" ? PASSWORD_DEFAULT : PASSWORD_BCRYPT
);
