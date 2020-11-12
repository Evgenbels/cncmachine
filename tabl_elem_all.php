<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/nav.css">
<script src="js/jquery-3.4.1.min.js"></script>
<title></title>
</head>
<body>
<?php
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
//echo "({'rezultat':'".$rezultat."','param1':'".$output."', 'param2':'30'})";

$stmt = $pdo->query('SELECT * FROM spisok ');

//   if($stmt->fetch()) {echo "({'rezultat':'ErrorFV','param1':'".$output."  Такой логин уже используется, попробуйте другой!!!', 'param2':'33'})";return;}

//    while ($row = $stmt->fetch())
      {
//      $output .=$row['fam']; 
//      echo $row['name'] . "\n";
      } 
      
/*
$stmt = $pdo->prepare('INSERT INTO usery (fam,ima,otch,login,pas,email,status) VALUES (:fam,:ima,:otch,:login,md5(:pas),:email,0)');
$stmt->bindParam(':fam', $famU);
$stmt->bindParam(':ima', $imaU);
$stmt->bindParam(':otch', $otchU);
$stmt->bindParam(':login', $loginU);
$stmt->bindParam(':pas', $passU);
$stmt->bindParam(':email', $emailU);
$stmt->execute();
*/
?>
<?php $a=1; include 'header_nav.php'; ?>
<section>
   <h1>Таблица компонентов</h1>
   <img src="foto/arduino_uno_r3.webp" alt="">
	<table id="takompl">
		<thead>
			<th>№ п.п</th>
			<th>Тип</th>
			<th>Наименование</th>
			<th>Кол-во</th>
			<th>Интерфейс</th>
			<th>Маркировка</th>
			<th>Скетч</th>
			<th>С++ Ардуино</th>
			<th>С++ АТМега8</th>
			<th>Datasheet</th>
			<th>Описание</th>
		</thead>
<?php
    while ($row = $stmt->fetch())
      {
//      $output .=$row['fam']; 
      $typ=$row['typ'];
      
		switch ($typ) {
    		case 0:
        	$typm="Исп.";
        	break;
    		case 1:
        	$typm="Микр.";
        	break;
    		case 2:
        	$typm="Модуль";
        	break;
    		case 3:
        	$typm="Эл-т";
        	break;
			default:
			$typm="*";         
      }
		echo "<tr><td>".$row['id']."</td><td>".$typm."</td><td>".$row['name']."</td>";
		echo "<td>".$row['kol']."</td><td>".$row['name_inout']."</td><td>".$row['markirovka']."</td>";
		echo "<td>".$row['name_sketch']."</td><td>".$row['name_cpp_arduino']."</td><td>".$row['name_cpp_atmega8']."</td>";
		echo "<td>".$row['name_datasheet']."</td><td></td></tr>";      
//		echo '<tr><td>id</td><td>typ</td><td>name</td></tr>';      
//      echo $row['name'] . "\n";
      } 
?>
</table>
</section>
<?php include 'footer_nav.php'; ?>
</body>
<script src="js/main.js"></script>
</html>