<?php

    header("Access-Control-Allow-Origin: *");
$string = file_get_contents('php://input');
    $string = str_replace(' ', '', $string);

    $string = strtolower($string);

    $reverse = strrev($string);

    if ($string == $reverse) {
        echo "It is Palindrome";
    } 
    else {
        echo "Not Palindrome";
    };
?>