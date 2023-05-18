<nav>
    <img src="../siteimages/logo.png" class="nav_logo" onclick="<?php echo "window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/');"?>">
    <form class="search_container" method="post">
        <input type="text" class="search_input" placeholder="Search...">
        <button type="submit" class="search_submit"><i class="fa fa-search"></i></button>
    </form>
    <button class="cart_btn" id="cart_btn" onclick="showCart()"><i class="fa fa-shopping-cart"></i></button>
    <div class="cart_btn_dropdown" id="cart_btn_dropdown">
        <p class="items_in_cart">Items in cart: 0</p>
        <hr class="item_hr"></hr>
        <div class="item_container">
            <img src="../siteimages/small_logo.png" class="item_img">
            <p class="item_name">T-shirt</p>
            <p class="item_price">0.00 €</p>
        </div>
        <div class="item_container">
            <img src="../siteimages/small_logo.png" class="item_img">
            <p class="item_name">T-shirt</p>
            <p class="item_price">0.00 €</p>
        </div>
        <p class="total_price">Total: 0.00 €</p>
        <form method="post">
            <button type="cart_submit" class="cart_submit">Buy</button>
        </form>
    </div>

    <?php
        if(isset($_COOKIE["user_id"])){
            echo '
            <button class="account_btn" id="account_btn" onclick="showAccount()"><i class="fa fa-bars"></i></button>
            <div class="cart_btn_dropdown" id="account_btn_dropdown">
                <img src="../siteimages/profile_picture.png" class="account_dropdown_image">
                <div onclick="location.href=`../purchase_history`" class="account_dropdown_btn">Purchase history</div>
                <div onclick="location.href=`../settings`" class="account_dropdown_btn">Options</div>
                <form method="post">
                    <button name="exit" type="cart_submit" class="cart_submit" style="margin-top: 10px;">Exit</button>
                </form>
            </div>
            ';
        }
        else if(!isset($_COOKIE["user_id"])){
            echo '
                <button class="account_btn" id="account_btn" onclick="showAccount()"><i class="fa fa-bars"></i></button>
                <div class="cart_btn_dropdown" id="account_btn_dropdown">
                    <form method="post">
                        <button name="loginButton" type="cart_submit" class="cart_submit" style="margin-top: 0px; margin-left: 3px;">Login</button>
                        <button name="registerButton" type="cart_submit" class="cart_submit" style="margin-top: 14px; margin-left: 3px;">Regsiter</button>
                    </form>
                </div>
            ';
        }
    ?>
    <script>
        cartBtn = document.getElementById("cart_btn");
        cartBtnDropdown = document.getElementById("cart_btn_dropdown");
        accountBtn = document.getElementById("account_btn");
        accountBtnDropdown = document.getElementById("account_btn_dropdown");
        function showCart(){
            accountBtnDropdown.style.display = "none";
            cartBtnDropdown.style.display = "block";
            cartBtnDropdown.style.animation = "growDownElement 700ms ease-in-out forwards";
            cartBtn.setAttribute("onclick", "hideCart()");
        }
        function hideCart(){
            cartBtnDropdown.style.animation = "growUpElement 700ms ease-in-out forwards";
            cartBtn.setAttribute("onclick", "showCart()");
        }
        function showAccount(){
            cartBtnDropdown.style.display = "none";
            accountBtnDropdown.style.display = "block";
            accountBtnDropdown.style.animation = "growDownElement 700ms ease-in-out forwards";
            accountBtn.setAttribute("onclick", "hideAccount()");
        }
        function hideAccount(){
            accountBtnDropdown.style.animation = "growUpElement 700ms ease-in-out forwards";
            accountBtn.setAttribute("onclick", "showAccount()");
        }
    </script>

    <?php 
        if(isset($_POST["loginButton"])){
            echo "
                <script>
                    window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/login');
                </script>
            ";
        }
        if(isset($_POST["registerButton"])){
            echo "
                <script>
                    window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/register');
                </script>
            ";
        }
        if(isset($_POST["exit"])){
            setcookie("user_id", "", time()-3600, "/");
            echo "
                <script>
                function loadLogIn(){
                    window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/');
                }
                loadLogIn();
                </script>
            ";
        }
    ?>
</nav>