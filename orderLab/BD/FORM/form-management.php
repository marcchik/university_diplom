<?php

// получаем данные из JSON файла
$ourData = file_get_contents("../JSON/schedule.json");

// Преобразуем в массив
$arrayScheduleBD = json_decode($ourData, true);

for ($i = 1; $i < 5; $i++) {
    $arrayScheduleDay[$_REQUEST['day']][$i] = $_REQUEST[$i];
}

$arrayScheduleBD[$_REQUEST['day']] = $arrayScheduleDay[$_REQUEST['day']];

file_put_contents('../JSON/temporary_schedule.json', json_encode($arrayScheduleBD, JSON_UNESCAPED_UNICODE));

echo "<script>location.href='../ADD/add-schedule.php';</script>";
