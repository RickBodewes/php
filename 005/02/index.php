<?php
    $beasts = array();
    array_push($beasts, array("orangutan", "https://www.dw.com/image/45094704_303.jpg"));
    array_push($beasts, array("lion", "https://www.carbonbrief.org/wp-content/uploads/2020/06/yawning-lion-south-africa-1550x804.jpg"));
    array_push($beasts, array("bat", "https://images.ctfassets.net/cnu0m8re1exe/6KR5wd6M47p86L4Uw1Y2la/851b2811d3b753aade6e6f2f7a1b0e05/shutterstock_1282913071.jpg?w=650&h=433&fit=fill"));
    array_push($beasts, array("dog", "https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/article_thumbnails/other/dog_cool_summer_slideshow/1800x1200_dog_cool_summer_other.jpg"));
    array_push($beasts, array("chicken", "https://www.knowyourchickens.com/wp-content/uploads/2019/09/pet-chicken.jpg"));
    array_push($beasts, array("elephant", "https://c402277.ssl.cf1.rackcdn.com/photos/14206/images/hero_small/WW187785.jpg?1576774644"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 5_2</title>
    <style>
        img{
            height: 300px;
        }
    </style>
</head>
<body>
    <form>
        <?php foreach($beasts as $beast){ ?>
            <input type="checkbox" id="<?= $beast[0] ?>" value="<?= $beast[0] ?>" name="<?= $beast[0] ?>">
            <label for="<?= $beast[0] ?>"><?= $beast[0] ?></label><br>
        <?php } ?>
        <input type="submit" name="submit">
    </form>
    <?php foreach($beasts as $beast){
            if(isset($_GET[$beast[0]])){
                ?><img src="<?= $beast[1] ?>"><?php
            }      
        } 
    ?>
</body>
</html>