<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 5_1</title>
</head>
<body>
    <?php if(!isset($_POST['submit'])){ ?>
        <form method="post">
            Naam:<input type="text" name="name"><br>
            Email:<input type="email" name="email"><br>
            Wachtwoord:<input type="password" name="password"><br>
            <input type="submit" name="submit">
        </form>
    <?php }else{
            if($_POST['name'] == "" || $_POST['email'] == "" || $_POST['password'] == ""){ ?>
                <h1>VUL ALLES IN!!!</h1>
                <form method="post">
                    Naam:<input type="text" name="name"><br>
                    Email:<input type="email" name="email"><br>
                    Wachtwoord:<input type="password" name="password"><br>
                    <input type="submit" name="submit">
                </form>
            <?php }else{
                print_r($_POST);
            }
        }
    ?>
</body>
</html>