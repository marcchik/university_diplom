<?php


// получаем данные из JSON файла
$ourData = file_get_contents("../JSON/temporary.json");

// Преобразуем в массив
$arrayUsersBD = json_decode($ourData, true);



if (file_put_contents('../JSON/data.json', json_encode($arrayUsersBD))) {

    file_put_contents('../JSON/temporary.json', '');

    echo "<script>location.href='/orderLab?status=success&id=".$_REQUEST['id']."';</script>";
} else {
    echo "<script>location.href='/orderLab?status=error';</script>";
}

