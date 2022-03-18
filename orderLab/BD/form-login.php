<?php



// получаем данные из JSON файла
$ourData = file_get_contents("data.json");


// Преобразуем в массив
$array = json_decode($ourData, true);



echo "<pre>";
print_r($array);
echo "</pre>";



echo "<pre>";
print_r($_REQUEST);
echo "</pre>";



