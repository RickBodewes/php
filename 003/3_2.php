<?php
/**
 * Created by PhpStorm.
 * User: rick-
 * Date: 27-2-2019
 * Time: 13:29
 */
?>


<head>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>

<body>
<?php
for($i = 0; $i < 10; $i++){
    for($j = 0; $j < $i; $j++){
        echo "*";
    }
    echo "*<br>";
}


?>
</body>