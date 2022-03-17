


<?
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
file_put_contents('data.json',json_encode($_REQUEST));  // Перекодировать в формат и записать в файл.
if($_REQUEST['formData']){
    $msg = $_REQUEST['formData'];
    echo "Данные приняты";
}
