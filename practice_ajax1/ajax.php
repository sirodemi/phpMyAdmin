<?php

$ary_product = $_POST['product'];

foreach($ary_product as $key => $product)
{
    //配列の内容を1個ずつ書き出す。
    $productName[$key] = $product;
}


//$ary = json_decode($_POST['Ary']);
//$name = $ary[0];

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

//$sql = "INSERT productTitle(productName) VALUES (?),(?),(?)";

//複数行で登録するためのSQL文
$sql = "INSERT productTitle(productName) VALUES ";
$sql .= "(?)";
for($i=1; $i<3; $i++){
    $sql .= ",(?)";
}
$stm = $pdo->prepare($sql);

for($i=1; $i<4; $i++){
    $stm->bindParam($i,$productName[$i-1]);
}
$stm->execute();

echo ($productName[0]);
$dsn = NULL;

?>
