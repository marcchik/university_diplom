<?php


// получаем данные из JSON файла
$ourData = file_get_contents("temporary.json");

// Преобразуем в массив
$arrayUsersBD = json_decode($ourData, true);



if (file_put_contents('data.json', json_encode($arrayUsersBD))) {

    file_put_contents('temporary.json', '');
    echo "<pre>";
    print_r($arrayUsersBD);
    echo "</pre>";
    echo "<script>location.href='/orderLab?status=success';</script>";
} else {
    echo "<pre>";
    print_r($arrayUsersBD);
    echo "</pre>";
    echo "<script>location.href='/orderLab?status=error';</script>";
}

