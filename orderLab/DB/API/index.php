
<?php
include '../DB.php';
header('Content-Type: application/json');

$id = $_REQUEST['id'];
$flag = $_REQUEST['flag'];

$link = connect($connection_string);

if ($link == false){
    echo "Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error();
}
else {
    if($id) {
        $response = ["response" => getUser($link, $id)];
        echo json_encode($response, JSON_UNESCAPED_UNICODE);
    } elseif ($id && $flag == "update") {
        $response = ["response" => getUserUpdate($link, $id)];
        echo json_encode($response, JSON_UNESCAPED_UNICODE);
    } else {
        $response = ["response" => getAllUser($link)];
        echo json_encode($response, JSON_UNESCAPED_UNICODE);
    }
}



?>
