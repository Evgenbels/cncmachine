<?php
if ( isset( $_GET['id'] ) ) {
  // Здесь $id номер изображения
  $id = (int)$_GET['id'];
  $npp = (int)$_GET['npp'];
  if ( $id > 0 ) {

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

    $stmt = $pdo->query('SELECT idsp,npp,name,foto_val FROM prg_rem_foto where idsp='.$id.' and npp='.$npp.'; ');
    $row = $stmt->fetch();

//    while ($row = $stmt->fetch())
//      {
//      $foto_val=$row['foto_val'];

//    $query = "SELECT `content` FROM `images` WHERE `id`=".$id;
    // Выполняем запрос и получаем файл
//    $res = mysql_query($query);
//    if ( mysql_num_rows( $res ) == 1 ) {
//      $image = mysql_fetch_array($res);
      // Отсылаем браузеру заголовок, сообщающий о том, что сейчас будет передаваться файл изображения
//      Header("Content-type: image/*");
      // И  передаем сам файл
//      echo $image['content'];
    header('Content-type: image/jpeg');
//    echo $row['name'];
//    echo $row['foto_val'];
//    echo '<img src="foto/LED.jpg"/>';
    echo $row['foto_val'];
//    }
  }
}
?>