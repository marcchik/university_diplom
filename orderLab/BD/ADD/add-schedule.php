<?php
mb_internal_encoding("UTF-8");

// получаем данные из JSON файла
$ourData = file_get_contents("../JSON/temporary_schedule.json");

// Преобразуем в массив
$arrayScheduleDay = json_decode($ourData, true);



if (file_put_contents('../JSON/schedule.json', json_encode($arrayScheduleDay, JSON_UNESCAPED_UNICODE))) {

    file_put_contents('../JSON/temporary_schedule.json', '');

    echo "<script>location.href='/orderLab/management/?status=success';</script>";
} else {
    echo "<script>location.href='../../management';</script>";
}

