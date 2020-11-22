<?php
//echo "Имя 3".$_POST['name3']; 
//echo "Имя 4".$_POST['name4']; 
$uploaddir = '/home/www/cncmachine.site/upload/';
//$uploaddir = './';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
echo "Файл:".$uploadfile."<\n";
echo '<pre>';

$opt = [PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,];
try {
    $pdo=new PDO("mysql:host=localhost;dbname=cncmachine;charset=utf8",'root', 'DiLu0311',$opt); 
    $rezultat="Ok";     
   } catch (PDOException $e) {
    $rezultat="Подключение не удалось: ".$e->getMessage();
   } 


if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
   echo "Файл ". $_FILES['userfile']['name'] ." успешно загружен.\n". $_FILES['userfile']['tmp_name'] ."\n";
   echo "Отображаем содержимое\n";

$imagetmp=file_get_contents($_FILES['userfile']['tmp_name']);

$stmt = $pdo->prepare('INSERT INTO prg_rem_foto (idsp,npp,name,foto_val) VALUES (24,0,"Primer",?); ');

$stmt->execute([$imagetmp]);

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