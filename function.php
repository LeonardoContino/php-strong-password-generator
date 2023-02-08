<?php

var_dump($_POST);
function generatePassword($lunghezza){
    
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!%$£"/()=&%';
    $random_password = '';
    for($i = 0; $i < $lunghezza; $i++){
        $random_password .= $caratteri[rand(0, strlen($caratteri) -1)];
    }
    return $random_password;
}