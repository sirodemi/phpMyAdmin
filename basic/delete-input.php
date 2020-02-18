
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    

<?php
    $pdo=new PDO('mysql:host=localhost;dbname=maintenance;charset=utf8','shiro','sunyou00');
    
    echo "<table><th>ID</th><th>物件名</th><th>工事名</th><th>作業日</th>";
    foreach ($pdo->query('select * from cover') as $row) {
    //    echo "<p>$row[id] : $row[client] : $row[product] : $row[workDate]</p>";
        echo "<tr>";
        echo "<td>$row[id]</td>";
        echo "<td>$row[client]</td>";
        echo "<td>$row[product]</td>";
        echo "<td>$row[site]</td>";
        echo "<td>$row[workDate]</td>";
        echo "<td>";
        echo '<a href="delete-output.php? id=', $row['id'], '">削除</a>';
        echo '</td>';
        echo "</tr>";
    }
    echo "</table>";

?>
</body>
</html>

