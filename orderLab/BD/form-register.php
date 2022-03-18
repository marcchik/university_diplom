<?

// данные нового пользователя
$USER = array();

//существующие пользователи
$arrayUsersBD = array();

//логин нового пользователя
$username = $_REQUEST['contactEmail'];

// получаем данные из JSON файла
$ourData = file_get_contents("data.json");

// Преобразуем в массив
$arrayUsersBD = json_decode($ourData, true);


//есть ли такой пользователь?
$count = 0;

foreach ($arrayUsersBD as $hashId => $user) {

    if (strcasecmp($user['contactEmail'], $username) == 0) {
        $count++;
    }
}

if ($count == 0) {
    //хеш id нового пользователя
    $id = getIdHash();

    //получаем данные пользователя
    $USER[$id] = $_REQUEST;

    $result = array_merge($arrayUsersBD, $USER);

    file_put_contents('temporary.json',json_encode($result));

    echo "<script>location.href='add-user.php';</script>";

} else {
    echo "<script>location.href='/orderLab?status=duplicate';</script>";
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
