<?php
echo "\nИмя 1:".$_GET['name1']."\n"; 
echo '<pre>';
echo "\nИмя 2:".$_GET['name2']."\n";


$opt = [PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,];
try {
    $pdo=new PDO("mysql:host=localhost;dbname=cncmachine;charset=utf8",'root', 'DiLu0311',$opt); 
    $rezultat="Ok";     
   } catch (PDOException $e) {
    $rezultat="Подключение не удалось: ".$e->getMessage();
   } 

$stmt = $pdo->query('SELECT * FROM spisok ORDER BY typ,name; ');
$npp=1;
while ($row = $stmt->fetch())
    {
    echo "\n".$npp."  ".$row['name'];
    $npp++;
    }
?>