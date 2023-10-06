<?php
$host='localhost';
$db='db';
$user='root';
$pass='';
try{
  $pdo = new PDO("mysql:host=localhost;dbname=db", $user, $pass);
} catch (PDOException $e) {
   echo 'Ощибка соединения с БД; ' . $e->getMessage();
}
?>
