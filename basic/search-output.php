<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<table>
<?php
    $pdo=new PDO('mysql:host=localhost;dbname=maintenance;charset=utf8','shiro','sunyou00');
    $sql=$pdo->prepare('select * from cover where client like ?');
    $sql->execute(['%'.$_REQUEST['keyword'].'%']);
//    $sql->execute();
    foreach($sql as $row){
    //    echo "<p>$row[id] : $row[client] : $row[product] : $row[workDate]</p>";
        echo "<tr>";
        echo "<td>$row[id]</td>";
        echo "<td>$row[client]</td>";
        echo "<td>$row[product]</td>";
        echo "<td>$row[workDate]</td>";
        echo "</tr>";
    }
    echo "</table>";

?>
</body>
</html>