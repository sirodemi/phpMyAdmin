<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
    $pdo=new PDO('mysql:host=localhost;dbname=maintenance;charset=utf8','shiro','sunyou00');
    $sql=$pdo->prepare('update cover set client=?, product=?, site=?, workDate=? where id=?');
    if($sql->execute([$_REQUEST['client'], $_REQUEST['product'], $_REQUEST['site'], $_REQUEST['workDate'], $_REQUEST['id']])){
        echo 'seccess!';
    }else{
        echo 'error?';
    }
?>
</body>
</html>