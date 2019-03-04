<head>
    <style>

    </style>
</head>

<body>

<?php
$a = 25;//de spartelkuikens
$b = 32;//de waterbuffels
$c = 11;//plonsmderin
$d = 23;//bommetje


?>



<table border="1">
    <tr>
        <th>
            de spartelkuikens
        </th>
        <th>
            <?php
            echo $a;
            ?>
        </th>
        <th>
            <?php
            for($i = 1; $i <= $a/5; $i++){
                echo "<img src='imgs/swim.png' width='50px' height='50px'>";
            }
            ?>
        </th>

    </tr>
    <tr>
        <th>
            de waterbuffels
        </th>
        <th>
            <?php
            echo $b;
            ?>
        </th>
        <th>
            <?php
            for($i = 1; $i <= $b/5; $i++){
                echo "<img src='imgs/swim.png' width='50px' height='50px'>";
            }
            ?>
        </th>

    </tr>
    <tr>
        <th>
            plonsmderin
        </th>
        <th>
            <?php
            echo $c;
            ?>
        </th>
        <th>
            <?php
            for($i = 1; $i <= $c/5; $i++){
                echo "<img src='imgs/swim.png' width='50px' height='50px'>";
            }
            ?>
        </th>

    </tr>
    <tr>
        <th>
            bommetje
        </th>
        <th>
            <?php
            echo $d;
            ?>
        </th>
        <th>
            <?php
            for($i = 1; $i <= $d/5; $i++){
                echo "<img src='imgs/swim.png' width='50px' height='50px'>";
            }
            ?>
        </th>

    </tr>
</table>



</body>