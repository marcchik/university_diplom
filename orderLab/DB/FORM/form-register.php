<?php
include '../DB.php';

$name = $_POST['contactName'];
$email = $_POST['contactEmail'];
$pass = $_POST['loginPassword1'];
$pass_confirm = $_POST['loginPassword2'];
$university = $_POST['university'];
$faculty = $_POST['faculty'];
$speciality = $_POST['speciality'];

if (!empty($name) && !empty($email) && !empty($pass) && !empty($pass_confirm) && !empty($university) && !empty($faculty) && !empty($speciality)) {

    file_put_contents('users.json', json_encode($_POST, JSON_UNESCAPED_UNICODE));


    if ($pass == $pass_confirm) {
        $link = connect($connection_string);

        if ($link == false){
            echo json_encode(array('status' => 'error', 'mess'=>'Произошла ошибка.'));
        }
        else {
            $result = addUser($name, $email, $pass, $speciality, $link);

            file_put_contents('users2.json', json_encode($_POST, JSON_UNESCAPED_UNICODE));
            echo json_encode(array('status' => 'success', 'mess'=>'Заявка успешно отправлена.'));
        }

    } else {
        echo json_encode(array('status' => 'error', 'mess'=>'Пароли не совпадают.'));
    }

} else {
    echo json_encode(array('status' => 'error', 'mess'=>'Заполните все необходимые поля.'));
}

?>