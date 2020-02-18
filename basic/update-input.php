
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<span>顧客</span>
<span>物件名</span>
<span>工事名</span>
<span>作業日</span>

<?php
    $pdo=new PDO('mysql:host=localhost;dbname=maintenance;charset=utf8','shiro','sunyou00');
    foreach ($pdo->query('select * from cover') as $row) {
        echo '<form action="update-output.php" method="POST">';
        echo '<input type="hidden" name="id" value="',$row['id'], '">';
        echo '<span>',$row['id'], '</span> '; 
        echo '<span>';
        echo '<input type="text" name="client" value="',$row['client'], '">';
        echo '</span>';
        echo '<span>';
        echo '<input type="text" name="product" value="',$row['product'], '">';
        echo '</span>';
        echo '<span>';
        echo '<input type="text" name="site" value="',$row['site'], '">';
        echo '</span>';
        echo '<span>';
        echo '<input type="text" name="workDate" value="',$row['workDate'], '">';
        echo '</span>';
        echo '<span><input type="submit" value="更新"></span>';
        echo '</form>';
    }
    echo "</table>";

?>
</body>
</html>

