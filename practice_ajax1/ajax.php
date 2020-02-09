<?php
//javascript[ajax.js]から配列を受け取る
$array_product = $_POST['product'];

//データベースに接続
$user = 'shiro';
$password = 'sunyou00';
$dbName = 'maintenance';
$host = 'localhost';
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//複数行で登録するためのSQL文
//$sql = "INSERT productTitle(productName) VALUES (?),(?),(?)";
$sql = "INSERT productTitle(productName) VALUES ";
$sql .= "(?)";
for($i=1; $i<count($array_product); $i++){
    $sql .= ",(?)";
}
$stm = $pdo->prepare($sql);
for($i=1; $i<count($array_product)+1; $i++){
    $stm->bindParam($i,$array_product[$i-1]);
}
$stm->execute();

echo ($array_product[0]);
$dsn = NULL;

?>
