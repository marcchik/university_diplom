<?php
$hostname = 'localhost:3306';
$username = 'yourpres_admin';
$password = 'M52502002s';
$database = 'yourpres_ORDERLAB';

$connection_string = [
    'hostname' => 'localhost:3306',
    'username' => 'yourpres_admin',
    'password' => 'M52502002s',
    'database' => 'yourpres_ORDERLAB'
];

//$connection_string = [
//    'hostname' => '80.94.168.145',
//    'username' => 'student',
//    'password' => 'Pa$$w0rd',
//    'database' => 'ORDERLAB'
//];

function connect($array) {
    return mysqli_connect($array['hostname'], $array['username'], $array['password'], $array['database']);
}

// функция получения хеша
function getIdHash() {
    $string = '';
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $max = strlen($characters) - 1;
    for ($i = 0; $i < 6; $i++) {
        $string .= $characters[mt_rand(0, $max)];
    }

    return $string;
}

function passHash($pass) {
    return md5($pass);
}

function addUser($name, $email, $pass, $speciality, $link, $role = 'user') {
    $id = getIdHash();
    $pass = passHash($pass);
    $sql1 = "INSERT INTO `USERS` (`ID`, `NAME`, `EMAIL`, `PASSWORD`, `ROLE`) VALUES ('".$id."', '".$name."', '".$email."', '".$pass."', '".$role."')";
    $id = rand(1, 100);
    $today = date("m.d.y");
    $sql2 = "INSERT INTO `STUDENTS` (`ID_STUDENT`, `ID_SPEC`, `NAME_STUDENT`, `UP`) VALUES ('".$id."', '".$speciality."', '".$name."', '".$today."')";
    return mysqli_query($link, $sql1).mysqli_query($link, $sql2);
}

function getAllUser($link) {
    $array = array();

    $sql = "SELECT * FROM `STUDENTS`";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
    } else {
        $array = null;
    }

    return $array;
}

function getUser($link, $id) {
    $array = array();

    $sql = "SELECT * FROM `STUDENTS` WHERE ID_STUDENT = ".$id;
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
    } else {
        $array = null;
    }

    return $array;
}

function getUserUpdate($link, $id) {
    $array = array();

    $sql = "UPDATE `STUDENTS` SET `UP`='' WHERE ID".$id;
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
    } else {
        $array = null;
    }

    return $array;
}





