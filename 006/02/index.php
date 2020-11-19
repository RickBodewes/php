<?php 
    require "../dependencies/PDOcon.php";

    $loggedIn = false;
    $user;

    if(isset($_POST['submit'])){
        if(isset($_POST['username'],$_POST['password'])){
            $query = "SELECT * FROM users WHERE userEmail = :username AND userPassword = :password LIMIT 1";
            $stmt = $con->prepare($query);

            $stmt->bindValue(':username', $_POST['username']);
            $stmt->bindValue(':password', $_POST['password']);

            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if($user != false){
                $loggedIn = true;
            }
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_POST['submit'])){
    ?>
    <form method="post">
        gebruikersnaam:
        <input type="email" name="username" placeholder="email"  /><br />
        wachtwoord:
        <input type="password" name="password" placeholder="wachtwoord"  /><br />
        <input type="submit" name="submit" value="inloggen">
    </form>
    <?php
        }else{
            if($loggedIn){
                echo "Welkom " . $user['userName'] . "!";
            }else{
                echo "Sorry, geen toegang!";
            }
        }
    ?>
</body>
</html>
