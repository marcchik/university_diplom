<?php

// получаем данные из JSON файла
$ourData = file_get_contents("../JSON/userInfo.json");

// Преобразуем в массив
$arrayUserInfoBD = json_decode($ourData, true);

$arrayUserInfoBD[$_REQUEST['id']][$_REQUEST['subject']] = $_REQUEST['number'];

file_put_contents('../JSON/userInfo.json', json_encode($arrayUserInfoBD, JSON_UNESCAPED_UNICODE));

echo "<script>location.href='/orderLab/profile/?id=".$_REQUEST['id']."';</script>";

