<head>
    <style>

    </style>
</head>

<body>
<?php


$leeftijd = 2;


if($leeftijd < 3){
    echo "je hebt niks te betalen";
}elseif($leeftijd >= 3 && $leeftijd <= 12){
    echo "je moet 5 euro betalen";
}elseif($leeftijd > 65){
    echo "je moet 5 euro betalen";
}else{
    echo "je moet de volle 10 euro betalen";
}




?>
</body>