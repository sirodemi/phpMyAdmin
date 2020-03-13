<?php
//require_once("util.php");

//$name = $_POST['name'];

//echo 'test';

// データベースユーザ
$user = 'shiro';
$password = 'sunyou00';
// 利用するデータベース
$dbName = 'sunyou_maintenance_system';
// MySQLサーバ
$host = 'localhost';
// MySQLのDSN文字列
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";


//MySQLデータベースに接続する
try {


    $pdo = new PDO($dsn, $user, $password);
    // プリペアドステートメントのエミュレーションを無効にする
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // 例外がスローされる設定にする
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "データベース{$dbName}に接続しました。", "<br>";

    // SQL文を作る（全レコード）
    $sql = "INSERT productTitle(productName) VALUES ($name)";
//    $sql = "INSERT productTitle(productName) VALUES ('三友')";

    $stm = $pdo->prepare($sql);
    $stm->execute();

} catch (Exception $e) {
    echo '<span class="error">エラーがありました。</span><br>';
    echo $e->getMessage();
    exit();
}

$dsn = NULL;

?>
