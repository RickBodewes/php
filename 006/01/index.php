<?php 
    require "../dependencies/PDOcon.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <?php
            $query = "SELECT * FROM cursist";
            $stmt = $con->prepare($query);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            while($row = $stmt->fetch()){
        ?>
        <tr>
            <td><?= $row['cursistnr'] ?></td>
            <td><?= $row['naam'] ?></td>
            <td><?= $row['roepnaam'] ?></td>
            <td><?= $row['straat'] ?></td>
            <td><?= $row['postcode'] ?></td>
            <td><?= $row['plaats'] ?></td>
            <td><?= $row['geslacht'] ?></td>
            <td><?= $row['geb_datum'] ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
