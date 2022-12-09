<?php

function generatePassword($password_length) {
    $numbers = "0123456789";
    $uppercase_letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowercase_letters = "abcdefghijklmnopqrstuvwxyz";
    $simbols = "!£$%&?*+@#-_~/<>()[]{}";
    $full_chars = $numbers.$uppercase_letters.$lowercase_letters.$simbols;

    $result = "";

    if ($password_length >= 8 && $password_length <= 35) {
        $password = "";

        while (strlen($password) < $password_length) {
            $index = rand(0, (strlen($full_chars) - 1));
            $char = $full_chars[$index];
            $password .= $char;
        }
        $result = $password;
    } else {
        $result = "La password deve essere di minimo 8 caratteri e massimo 35";
    }
    return $result;
}