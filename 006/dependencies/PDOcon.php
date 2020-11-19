  
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";
$poort = "3306";
try {
    $con = new PDO("mysql:host=" . $servername . ";dbname=" . $dbname .";port=" . $poort, $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "<br>";
}