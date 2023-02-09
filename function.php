<?php

function generatePassword($lunghezza){
    
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!%$£"/()=&%';
    $random_password = '';
    for($i = 0; $i < $lunghezza; $i++){
        $random_password .= $caratteri[rand(0, strlen($caratteri) -1)];
    }
    session_start();
    $_SESSION['password'] = $random_password;
    return true;
}
