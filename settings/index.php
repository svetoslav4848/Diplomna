<!DOCTYPE html>
<html lang="en">
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
        include "../connection.php";
    ?>
    <?php    
        error_reporting(1);

        $user_id = $_COOKIE["user_id"];
        $name = $_POST["name"];
        $lastName = $_POST["lastNameInput2"];
        $email = $_POST["emailInput"];
        $password = md5($_POST["passwordInput"]);
        $country = $_POST["countryInput"];
        $place = $_POST["placeInput"];

        $sql = "SELECT * FROM `users` WHERE `id` = '$user_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo '

        <div id="settings_container" class="settings_container">
            <form method="post">
            <p class="index_top_p" id="setting_p" style="margin-bottom: 40px;">Settings</p>
            <div class="hrLine" style="background-color:rgb(212, 53, 39); margin-bottom: 20px;"></div>

            <!--NAME-->
            <div class="container" type=submit; style="color:rgb(117,117,117);">
                <div id="nameLabel" class="div1">Name:</div>
                <div class="div3" >' .  $row['name'] . '</div>
                <div id="editName" class="div2" style="color: rgb(212, 53, 39); cursor: pointer;" onclick="showName()">Edit:</div>
                <div style="display: none;" id="name">
                    <input style="margin-top: 20px;" type="text" name="name" id="firstNameInput" class="settings_input settings_half_input1" placeholder="" autocomplete="off">
                    <button name="nameSubmit" id="nameSubmit" style="background-color: rgb(212, 53, 39);" onclick="nameSubmit()" class="settings_half_input2"><i class="fa fa-save" style="color: white; font-size: 19px;"></i></button>
                </div>
            </div>

            <!---LAST NAME--->
            <div class="container" type=submit; style="margin-top: 40px; color:rgb(117,117,117);">
                <div id="lastNameLabel" class="div1">Family:</div>
                <div class="div3" >' .  $row['family'] . '</div>
                <div id="editLastName" class="div2" style="color: rgb(212, 53, 39); cursor: pointer;" onclick="showLastName()">Edit:</div>
                <div style="display: none;" id="lastName">
                    <input style="margin-top: 20px;" type="text" name="lastNameInput2" id="lastNameInput" class="settings_input settings_half_input1" placeholder="" autocomplete="off">
                    <button name="lastNameSubmit" id="lastNameSubmit" style="background-color: rgb(212, 53, 39);" onclick="LastNameSubmit()" class="settings_half_input2"><i class="fa fa-save" style="color: white; font-size: 19px;"></i></button>
                </div>
            </div>

            <!---EMAIL--->
            <div class="container" type=submit; style="margin-top: 40px; color:rgb(117,117,117);">
                <div id="emailLabel" class="div1">E-mail:</div>
                <div class="div3" >' .  $row['e-mail'] . '</div>
                <div id="editEmail" class="div2" style="color: rgb(212, 53, 39); cursor: pointer;" onclick="showEmail()">Edit:</div>
                <div style="display: none;" id="email">
                    <input style="margin-top: 20px;" type="text" name="emailInput" id="emailInput" class="settings_input settings_half_input1" placeholder="" autocomplete="off">
                    <button name="emailSubmit" id="emailSubmit" style="background-color: rgb(212, 53, 39);" onclick="emailSubmit()" class="settings_half_input2"><i class="fa fa-save" style="color: white; font-size: 19px;"></i></button>
                </div>
            </div>


            <!---PASSWORD--->
            <div class="container" type=submit; style="margin-top: 40px; color:rgb(117,117,117);">
                <div id="passwordLabel" class="div1">Password:</div>
                <div class="div3" >********</div>
                <div id="editPassword" class="div2" style="color: rgb(212, 53, 39); cursor: pointer;" onclick="showPassword()">Edit:</div>
                <div style="display: none;" id="password">
                    <input style="margin-top: 20px;" type="password" name="passwordInput" id="passwordInput" class="settings_input settings_half_input1" placeholder="" autocomplete="off">
                    <button name="passwordSubmit" id="passwordSubmit" style="background-color: rgb(212, 53, 39);" onclick="passwordSubmit()" class="settings_half_input2"><i class="fa fa-save" style="color: white; font-size: 19px;"></i></button>
                </div>
            </div>

            <!---COUNTRY--->
            <div class="container" type=submit; style="margin-top: 40px; color:rgb(117,117,117);">
                <div id="countryLabel" class="div1">Country:</div>
                <div class="div3" >' .  $row['country'] . '</div>
                <div id="editCountry" class="div2" style="color: rgb(212, 53, 39); cursor: pointer;" onclick="showCountry()">Edit:</div>
                <div style="display: none;" id="country">
                    <input style="margin-top: 20px;" type="text" name="countryInput" id="countryInput" class="settings_input settings_half_input1" placeholder="" autocomplete="off">
                    <button name="countrySubmit" id="countrySubmit" style="background-color: rgb(212, 53, 39);" onclick="countrySubmit()" class="settings_half_input2"><i class="fa fa-save" style="color: white; font-size: 19px;"></i></button>
                </div>
            </div>

            <!---Place--->
            <div class="container" type=submit; style="margin-top: 40px; color:rgb(117,117,117);">
                <div id="placeLabel" class="div1">Place:</div>
                <div class="div3" >' .  $row['place'] . '</div>
                <div id="editPlace" class="div2" style="color: rgb(212, 53, 39); cursor: pointer;" onclick="showPlace()">Edit:</div>
                <div style="display: none;" id="place">
                    <input style="margin-top: 20px;" type="text" name="placeInput" id="placeInput" class="settings_input settings_half_input1" placeholder="" autocomplete="off">
                    <button name="placeSubmit" id="placeSubmit" style="background-color: rgb(212, 53, 39);" onclick="placeSubmit()" class="settings_half_input2"><i class="fa fa-save" style="color: white; font-size: 19px;"></i></button>
                </div>
            </div>

            </form>
        </div>

        ';
        }
        }
    ?>
    <?php
        if(isset($_POST["nameSubmit"])){
            if($_POST['name'] != ""){
                $sqlUpdateName = "UPDATE `users` SET `name`='$name' WHERE `id`= '$user_id'";
                if($conn->query($sqlUpdateName) === TRUE){}
            echo "
                <script>
                    window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/settings');
                </script>
            ";
            }
        }

        if(isset($_POST["lastNameSubmit"])){
            if($_POST['lastNameInput2'] != ""){
                $sqlUpdateLastName = "UPDATE `users` SET `family`='$lastName' WHERE `id`= '$user_id'";
                if($conn->query($sqlUpdateLastName) === TRUE){}
            echo "
                <script>
                    window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/settings');
                </script>
            ";
            }
        }

        if(isset($_POST["passwordSubmitInput"])){
            if($_POST['password'] != ""){
                $sqlUpdatePassword = "UPDATE `users` SET `password`='$password' WHERE `id`= '$user_id'";
                if($conn->query($sqlUpdatePassword) === TRUE){}
            echo "
                <script>
                    window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/settings');
                </script>
            ";
            }
        }

        if(isset($_POST["emailSubmit"])){
            if($_POST['emailInput'] != ""){
                $sqlUpdateEmail = "UPDATE `users` SET `e-mail`='$email' WHERE `id`= '$user_id'";
                if($conn->query($sqlUpdateEmail) === TRUE){}
            echo "
                <script>
                    window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/settings');
                </script>
            ";
            }
        }

        if(isset($_POST["countrySubmit"])){
            if($_POST['countryInput'] != ""){
                $sqlUpdateCountry = "UPDATE `users` SET `country`='$country' WHERE `id`= '$user_id'";
                if($conn->query($sqlUpdateCountry) === TRUE){}
            echo "
                <script>
                    window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/settings');
                </script>
            ";
            }
        }

        if(isset($_POST["placeSubmit"])){
            if($_POST['placeInput'] != ""){
                $sqlUpdatePlace = "UPDATE `users` SET `place`='$place' WHERE `id`= '$user_id'";
                if($conn->query($sqlUpdatePlace) === TRUE){}
            echo "
                <script>
                    window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/settings');
                </script>
            ";
            }
        }

        $conn->close();

        echo '
            <script>

                var openedName = false;
                var openedLastName = false;
                var openedEmail = false;
                var openedPassword = false;
                var openedCountry = false;
                var openedPlace = false;
                var counter = 0;

                /*NAME*/

                function showName(){
                openedName = true;
                if(openedName && openedLastName == false && openedEmail == false && openedPassword == false && openedCountry == false && openedPlace == false){
                    if(document.getElementById("name").style.display == "block"){
                        document.getElementById("name").style.display = "none";
                        openedName = false;
                    }
                    else{
                        document.getElementById("name").style.display = "block";
                    }
                }
                else{
                    alert("You can change only one record!");
                    openedName = false;}
                }

                /*LAST NAME*/
                function showLastName(){
                openedLastName = true;
                if(openedLastName && openedName == false && openedEmail == false && openedPassword == false && openedCountry == false && openedPlace == false){
                  if(document.getElementById("lastName").style.display == "block"){
                        document.getElementById("lastName").style.display = "none";
                        openedLastName = false;
                    }
                    else{
                        document.getElementById("lastName").style.display = "block";
                    }
                }
                else{
                    alert("You can change only one record!");
                    openedLastName = false;}
                }

                /*EMAIL*/
                function showEmail(){
                openedEmail = true;
                if(openedEmail && openedName == false && openedLastName == false && openedPassword == false && openedCountry == false && openedPlace == false){
                  if (document.getElementById("email").style.display !== "none") {
                        document.getElementById("email").style.display = "none";
                        openedEmail = false;
                    }
                    else{
                        document.getElementById("email").style.display = "block";
                    }
                }
                else{
                    alert("You can change only one record!");
                    openedEmail = false;}
                }

                /*PASSWORD*/
                function showPassword(){
                openedPassword = true;
                if(openedPassword && openedName == false && openedLastName == false && openedEmail == false && openedCountry == false && openedPlace == false){
                  if (document.getElementById("password").style.display !== "none") {
                        document.getElementById("password").style.display = "none";
                        openedPassword = false;
                    }
                    else{
                        document.getElementById("password").style.display = "block";
                    }
                }
                else{
                    alert("You can change only one record!");
                    openedPassword = false;}
                }

                /*COUNTRY*/
                function showCountry(){
                openedCountry = true;
                if(openedCountry && openedLastName == false && openedEmail == false && openedPassword == false && openedName == false && openedPlace == false){
                  if (document.getElementById("country").style.display !== "none") {
                        document.getElementById("country").style.display = "none";
                        openedCountry = false;
                    }
                    else{
                        document.getElementById("country").style.display = "block";
                    }
                }
                else{
                    alert("You can change only one record!");
                    openedCountry = false;}
                }


                /*PLACE*/
                function showPlace(){
                openedPlace = true;
                if(openedPlace && openedLastName == false && openedEmail == false && openedPassword == false && openedCountry == false && openedName == false){
                  if (document.getElementById("place").style.display !== "none") {
                        document.getElementById("place").style.display = "none";
                        openedPlace = false;
                    }
                    else{
                        document.getElementById("place").style.display = "block";
                    }
                }
                else{
                    alert("You can change only one record!");
                    openedPlace = false;}
                }

            </script>
    ';
?>
<?php
    include "../footer/footer.php";
?>
</body>
</html>