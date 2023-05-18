<!DOCTYPE html>
<html lang="en" style="background-image: url('../siteimages/brick wall.jpg'); background-repeat: no-repeat; background-position: center top; background-attachment: fixed; background-size: cover;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cherry's boutique</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../siteimages/small_logo.png">
    <link rel="stylesheet" href="../Style.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>
<body>
    <?php
        include "../menu/menu_home.php";
    ?>

    <div class=items_container>
        <div class="items_gallery_container">
            <img src="item_gallery/black_t-shirt.png" class="items_gallery_img1">
            <img src="item_gallery/black_t-shirt.png" class="items_gallery_img">
            <img src="item_gallery/black_t-shirt.png" class="items_gallery_img">
            <img src="item_gallery/black_t-shirt.png" class="items_gallery_img">
        </div>
        <div class="items_form_container">
            <img src="../siteimages/brand_images/tommy_hilfiger.png" class="brand_img">
            <p class="items_name">Item's name</p>
            <form>
                <p class="items_price">Price: 20.00€</p>
                <p class="choose_size">Choose size:</p>
                <button type="button" id="size_btn1" class="size_btn" onclick="setSize(this, this.innerHTML)">S</button>
                <button type="button" class="size_btn" onclick="setSize(this, this.innerHTML)">M</button>
                <button type="button" class="size_btn" onclick="setSize(this, this.innerHTML)">L</button>
                <button type="button" class="size_btn" onclick="setSize(this, this.innerHTML)">XL</button>
                <button type="button" class="size_btn" onclick="setSize(this, this.innerHTML)">XXL</button>
                <input name="size" id="size" type="text" style="display: none">

                <p class="choose_color">Choose color:</p>
                <button type="button" class="color_btn" onclick="setColor(this, this.value)" style="background-color: black;" value="black"></button>
                <button type="button" class="color_btn" onclick="setColor(this, this.value)" style="background-color: yellow;" value="yellow"></button>
                <button type="button" class="color_btn" onclick="setColor(this, this.value)" style="background-color: blue;" value="blue"></button>
                <button type="button" class="color_btn" onclick="setColor(this, this.value)" style="background-color: white;" value="white"></button>
                <input name="color" id="size" type="text" style="display: none">
                <div class="items_submit_btn_container">
                    <input type="submit" name="Buy" class="items_submit_btn1" value="Buy">
                    <input type="submit" name="submit_cart" class="items_submit_btn2" value="Add to cart">
                </div>
            </form>
            <script>
                function setSize(elm, value){
                    document.getElementById("size").value = value;
                    size_btns = document.getElementsByClassName("size_btn");
                    for(i = 0; i < size_btns.length; i++){
                        size_btns[i].style.color = "rgb(100, 100, 100)";
                        size_btns[i].style.borderColor = "rgb(100, 100, 100)";
                    }
                    elm.style.color = "rgb(212, 53, 39)";
                    elm.style.borderColor = "rgb(212, 53, 39)";
                }
                function setColor(elm, value){
                    color_btns = document.getElementsByClassName("color_btn");
                    for(i = 0; i < color_btns.length; i++){
                        color_btns[i].style.color = "rgb(100, 100, 100)";
                        color_btns[i].style.borderColor = "white";
                        color_btns[i].style.outline = "1px solid rgb(100, 100, 100)";
                    }
                    elm.style.outline = "none";
                    elm.style.borderColor = "rgb(212, 53, 39)";
                }
            </script>
        </div>
        <div class="item_description_container">
            <p class="items_description">Description</p>
            <hr class="item_description_hr">
            Thomas Jacob Hilfiger is an American fashion designer and the founder of Tommy Hilfiger Corporation.
            <br>
            After starting his career by co-founding a chain of jeans/fashion stores called People's Place in upstate New York in the 1970s, he began designing preppy clothing for his own eponymous menswear line in the 1980s. The company later expanded into women's clothing and various luxury items such as perfumes and went public in 1992.
            <br>
            Hilfiger's collections are often influenced by the fashion of music subcultures and marketed in connection with the music industry, with celebrities such as American R&B artist Aaliyah in the 1990s. In 2005, contestants in the CBS reality show The Cut competed for a design job with Hilfiger in a similar fashion to The Apprentice. In 2006, Hilfiger sold his company for $1.6 billion to Apax Partners, who next sold it in 2010 to Phillips-Van Heusen for $3 billion. He remains the company's principal designer, leading the design teams and overseeing the entire creative process. In 2012, Hilfiger was awarded the Geoffrey Beene Lifetime Achievement Award from the Council of Fashion Designers of America.
        </div>
    </div>
    <?php
        include "../footer/footer.php";
    ?>
</body>
</html>