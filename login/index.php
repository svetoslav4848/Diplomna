<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cherry's boutique</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../siteimages/small_logo.png">
    <link rel="stylesheet" href="../Style.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>
<body style="background-image: url('../siteimages/stacked-waves-haikei.svg'); background-repeat: no-repeat; background-position: center top; background-attachment: fixed; background-size: cover;">
    <?php
        include "../menu/menu_home.php";
    ?>
    <div class="login_container" style="margin-bottom: 400px;">
        <img style="height: 100px; position: absolute; padding: 2px; margin-top: -21px;" src="../siteimages/small_logo.png" alt="">
        <p id="login_p" class="login_p">Login</p>
        <form method="post">
            <input type="text" id="e-mail" name="e-mail" class="register_input" placeholder="E-mail" autocomplete="off" style="margin-top: 20px;">
            <p id="err_p1" class="err_p"></p>
            <input type="password" id="password" name="password" class="register_input" placeholder="Password" autocomplete="off" style="margin-bottom: 20px;">
            <p id="err_p2" class="err_p"></p>
            <div id="forgottenPassword" class="pass">Forgot password?</div>
            <input id="submit" type="submit" name="submit_login" class="login_submit" value="Login">
            <div id="dontHaveAccount" class="signup_link"><a href="../register">Don't have account?</a></div>
        </form>
    </div>
    <?php
        error_reporting(0);
        include "../connection.php";
        if($_POST["e-mail"] != "" && $_POST["password"] != ""){
            $email = $_POST["e-mail"];
            $password = md5($_POST["password"]);
            if (isset($_POST["submit_login"])) {
                $sql = "SELECT `id`, `e-mail`, `password` FROM `users` WHERE `e-mail` = '$email' OR `password` = '$password'";
                $resultid = $conn -> query($sql);
                $id = "";
                $linkuser = "";
                while($rowid = $resultid->fetch_assoc()){
                    $id = $rowid["id"];
                    $rowEmail = $rowid["e-mail"];
                    $rowPassword= $rowid["password"];
                }
                if($email == $rowEmail && $password == $rowPassword){
                    setcookie("user_id", $id, time() + (86400 * 30), "/");
                    echo "
                        <script>
                            window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/');
                        </script>
                    ";
                }
            }
        }
    ?>
</body>
</html>