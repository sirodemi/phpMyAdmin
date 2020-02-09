<?php

$name = $_POST['name'];

// データベースユーザ
$user = 'shiro';
$password = 'sunyou00';
$dbName = 'maintenance';
$host = 'localhost';
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";


//MySQLデータベースに接続する
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT productTitle(productName) VALUES (?)";

$stm = $pdo->prepare($sql);
$stm->bindParam(1,$name);
$stm->execute();

echo '完了';
$dsn = NULL;

?>
