<?php
 
// Код, который будет выполняться, если форма была оправлена:
if ($_POST['submit']) {
 
    // подключение к базе данных
    // (возможно, вам придется настроить имя хоста, имя пользователя и пароль)

/*
    $dbh = new mysqli("localhost", "root", "", "imagesstore");
 
    if(mysqli_connect_errno())
    {
        exit("Ошибка подключения к базе данных MySQL: Сервер база данных не доступен!<br>
        Проверте параметры подключения к базе данных.");
    }
*/
    $host = '127.0.0.1';
    $db   = 'cncmachine';
    $user = 'root';
    $pass = 'DiLu0311';

    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,];
    try {
        $pdo = new PDO($dsn, $user, $pass, $opt); 
        $rezultat="Ok";     
        } catch (PDOException $e) {
        $rezultat="Подключение не удалось: ".$e->getMessage();
        } 



 
    $data = addslashes(fread(fopen($_FILES['file']['tmp_name'], "r"), 
    filesize($_FILES['file']['tmp_name'])));
 
//    $_POST['form_description'] = trim($_POST['form_description']);
    $size = filesize ($_FILES['file']['tmp_name']);

$count = $pdo->exec("INSERT INTO prg_rem_foto (idsp,npp,name,foto_val)
  "."VALUES (21,0,".$_FILES["file"]["name"].",".$data.")");
 


//  if(!$result) exit("Ошибка выполнения SQL запроса!");
 
//  $result->execute(); 
//  $id = $dbh->prepare();
 
  echo "<p>Изменено ".$_FILES["file"]["name"].": <b>".$count."</b> строк!";
 
} else {
 
  echo " отображаем форму для оправки новых данных:".$_FILES["file"]["name"].":";
}
?>