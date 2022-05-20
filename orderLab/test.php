
<?php

$connection_string = [
    'hostname' => 'localhost:3306',
    'username' => 'yourpres_admin',
    'password' => 'M52502002s',
    'database' => 'yourpres_ORDERLAB'
];

header('Content-Type: application/json');

// Преобразуем в массив


$option = $_GET['option'];

if ( $option == 1 ) {
    $data = [ 'a', 'b', 'c' ];
    // will encode to JSON array: ["a","b","c"]
    // accessed as example in JavaScript like: result[1] (returns "b")
} else {
    $data = [ 'name' => 'God', 'age' => -1 ];
    // will encode to JSON object: {"name":"God","age":-1}
    // accessed as example in JavaScript like: result.name or result['name'] (returns "God")
}

header('Content-type: application/json');
echo json_encode( $data );
