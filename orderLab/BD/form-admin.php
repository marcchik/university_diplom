<?php

// данные пользователя
$USER = array();

//существующие пользователи
$arrayUsersBD = array();

//логин пользователя
$username = $_REQUEST['email'];

//пароль пользователя
$userpass = $_REQUEST['password'];

// получаем данные из JSON файла
$ourData = file_get_contents("data.json");

// Преобразуем в массив
$arrayUsersBD = json_decode($ourData, true);


//есть ли такой пользователь?
$count = 0;

foreach ($arrayUsersBD as $hashId => $user) {

    if (strcasecmp($user['contactEmail'], $username) == 0) {
        $count++;
        if (strcasecmp($user['loginPassword1'], $userpass) == 0) {
            echo "<pre>";
            print_r($user);
            echo "</pre>";
            if (strcasecmp($user['role'], "admin") == 0) {
                echo "<script>location.href='/orderLab?id=".$hashId."&status=authorized';</script>";
            }
        }
    }
}



echo "<script>location.href='/orderLab/admin/?status=failed';</script>";





