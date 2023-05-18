<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cherry's boutique</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="siteimages/small_logo.png">
    <link rel="stylesheet" href="Style.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>
<body>
    <?php
        include "menu/menu_home.php";
    ?>
    <div class="homepage_background">
        <div class="homepageLabel">Welcome to Cherry's Boutique! It's great to meet you!</div>
        <div class="homepageLabel" style="font-size: 46px">We promise to keep you up-to-date with the <br>sweetest new season styles, tell you about our <br> awesome sales throw in the odd surprise and<br> special offer.</div>
    </div>
    <div class="cards_container">
        <div class="card"  onclick="<?php echo "window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/item');"?>">
            <img src="items_gallery/black t-shirt.jpg" class="card_image">
            <p class="card_title_p">H&M</p>
            <div class="card_p">20€</div>   
        </div>
        <div class="card"  onclick="<?php echo "window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/item');"?>">
            <img src="items_gallery/black t-shirt.jpg" class="card_image">
            <p class="card_title_p">H&M</p>
            <div class="card_p">20€</div>   
        </div>
        <div class="card"  onclick="<?php echo "window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/item');"?>">
            <img src="items_gallery/black t-shirt.jpg" class="card_image">
            <p class="card_title_p">H&M</p>
            <div class="card_p">20€</div>   
        </div>
        <div class="card"  onclick="<?php echo "window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/item');"?>">
            <img src="items_gallery/black t-shirt.jpg" class="card_image">
            <p class="card_title_p">H&M</p>
            <div class="card_p">20€</div>   
        </div>
        <div class="card"  onclick="<?php echo "window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/item');"?>">
            <img src="items_gallery/black t-shirt.jpg" class="card_image">
            <p class="card_title_p">H&M</p>
            <div class="card_p">20€</div>   
        </div>
        <div class="card"  onclick="<?php echo "window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/item');"?>">
            <img src="items_gallery/black t-shirt.jpg" class="card_image">
            <p class="card_title_p">H&M</p>
            <div class="card_p">20€</div>   
        </div>
        <div class="card"  onclick="<?php echo "window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/item');"?>">
            <img src="items_gallery/black t-shirt.jpg" class="card_image">
            <p class="card_title_p">H&M</p>
            <div class="card_p">20€</div>   
        </div>
        <div class="card"  onclick="<?php echo "window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/item');"?>">
            <img src="items_gallery/black t-shirt.jpg" class="card_image">
            <p class="card_title_p">H&M</p>
            <div class="card_p">20€</div>   
        </div>
        <div class="card"  onclick="<?php echo "window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/item');"?>">
            <img src="items_gallery/black t-shirt.jpg" class="card_image">
            <p class="card_title_p">H&M</p>
            <div class="card_p">20€</div>   
        </div>
        <div class="card"  onclick="<?php echo "window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/item');"?>">
            <img src="items_gallery/black t-shirt.jpg" class="card_image">
            <p class="card_title_p">H&M</p>
            <div class="card_p">20€</div>   
        </div>
        <div class="card"  onclick="<?php echo "window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/item');"?>">
            <img src="items_gallery/black t-shirt.jpg" class="card_image">
            <p class="card_title_p">H&M</p>
            <div class="card_p">20€</div>   
        </div>
        <div class="card"  onclick="<?php echo "window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/item');"?>">
            <img src="items_gallery/black t-shirt.jpg" class="card_image">
            <p class="card_title_p">H&M</p>
            <div class="card_p">20€</div>   
        </div>
    </div>
    <?php
        include "footer/footer.php";
    ?>
</body>
</html>