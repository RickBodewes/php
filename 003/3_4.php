<head>
    <style>
        .red{
            border: 3px solid red;
        }
        .green{
            border: 3px solid green;
        }
    </style>
</head>

<body>
<?php




for($i = 1; $i <= 9; $i++){
    if($i % 2 == 0){
        echo "<img class='red' src='imgs/cat".$i.".jpeg'>";
    }else{
        echo "<img class='green' src='imgs/cat".$i.".jpeg'>";
    }
}



?>
</body>