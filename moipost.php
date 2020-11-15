<?php
//echo "Имя 3".$_POST['name3']; 
//echo "Имя 4".$_POST['name4']; 
$uploaddir = '/home/moi_site/cnc_machine.site/public_html/upload/';
//$uploaddir = './';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
echo "Файл:".$uploadfile."<\n";
echo '<pre>';

if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
   echo "Файл ". $_FILES['userfile']['name'] ." успешно загружен.\n". $_FILES['userfile']['tmp_name'] ."\n";
   echo "Отображаем содержимое\n";
//   readfile($_FILES['userfile']['tmp_name']);
   echo "\n";
	if (!copy($_FILES['userfile']['tmp_name'], $uploadfile)) {
   	 echo "не удалось скопировать ".$_FILES['userfile']['tmp_name']."==>".$uploadfile."...\n";
		}
} else {
   echo "Возможная атака с участием загрузки файла: ";
   echo "файл '". $_FILES['userfile']['tmp_name'] . "'.";
}


if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}

echo 'Некоторая отладочная информация:';
print_r($_FILES);

print "</pre>";

?>