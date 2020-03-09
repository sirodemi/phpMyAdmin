
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    $pdo=new PDO('mysql:host=localhost;dbname=maintenance;charset=utf8','shiro','sunyou00');
    foreach($pdo->query('select * from cover') as $row){
        echo "<p>$row[id] : $row[client] : $row[product] : $row[workDate]</p>";
    }
?>
</body>
</html>

