<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/nav.css">
<link rel="stylesheet" href="css/tabl_elem.css">
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

$stmt = $pdo->query('SELECT a.id,a.typ,a.name,a.kol,a.name_inout,a.markirovka,b.npp,b.name as namefoto,b.foto_val
FROM spisok a
left outer join prg_rem_foto b on a.id=b.idsp
order by a.typ,a.name; ');

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
<section id="tablel">
   <h1>Таблица компонентов</h1>
  <table id="taosn">	
	<tr><td>
   <table id="takompl">
	 	<thead>
			<th>№ п.п</th>
      <th>ID</th>
			<th>Тип</th>
			<th>Наименование</th>
			<th>Кол-во</th>
			<th>Интерфейс</th>
			<th>Маркировка</th>
      <th>Прим</th>
		</thead>
<?php
$npp=1;
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
		echo "<tr><td>".$npp."</td><td>".$row['id']."</td><td>".$typm."</td><td>".$row['name']."</td>";
		echo "<td>".$row['kol']."</td><td>".$row['name_inout']."</td><td>".$row['markirovka']."</td>";
    echo "<td>".$row['namefoto']."</td></tr>";      
    $npp++;
//		echo '<tr><td>id</td><td>typ</td><td>name</td></tr>';      
//      echo $row['name'] . "\n";
      } 
?>
  </table>
  </td><td>
     <img src="foto/arduino_uno_r3.webp" alt="" width="300px" id="miimag" > 
 <!--
     <img src="foto/arduino_uno_r3.webp" alt="" width="300px" id="miimag" contextmenu="edit"> 
  <menu type="context" id="edit">
   <li>Вырезать</li>
   <li>Копировать</li>
   <li>Вставить</li>
   <li>Редактировать</li>
   <li>Выравнивание</li>
  </menu> -->
  <div id="target">
  Right-click here
</div>
  </td></tr>
</table>
</section>
<div class="backpopup"></div>
<!--форма для заполнения-->
<div class="popup-window">  
    <p class="close"></p>  
    <table>
      <form method="POST" action="savebd.php" >
<!--      <form method="POST" action="savebd.php" enctype="multipart/form-data">
      <tr><td>Текст:</td><td><textarea rows="10" cols="40"></textarea></td></tr>
      <tr><td>Текст:</td><td><input type="hidden" name="MAX_FILE_SIZE" value="30000" /></td></tr>
      <tr><td>Файл:</td><td><input type="file" name="userfile"/></td></tr>  -->
      <tr><td>Коментарий:</td><td><input type="text"/></td></tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="Загрузить">
        </td>
      </tr>
      </form>
    </table>
  </div>
<?php include 'footer_nav.php'; ?>
</body>
<script src="js/main.js"></script>
</html>