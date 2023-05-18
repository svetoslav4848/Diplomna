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
<body style="padding-bottom: 70px; background-image: url('../siteimages/stacked-waves-haikei.svg'); background-repeat: no-repeat; background-position: center top; background-attachment: fixed; background-size: cover;">
    <?php
        include "../menu/menu_home.php";
    ?>
    <div class="login_container" style="font-size: 0px;">
        <img src="../siteimages/profile_picture.png" class="register_img">
        <p id="registerLabel" class="register_p">Registration</p>
        <form method="post">
            <input type="text" name="name" id="name" class="register_input" placeholder="Name" autocomplete="off">
            <input type="text" name="family" id="family" class="register_input" placeholder="Surname" autocomplete="off">
            <input type="text" name="email" id="email" class="register_input" placeholder="E-mail" autocomplete="off">
            <input type="password" name="password" id="password" class="register_input" placeholder="Password" autocomplete="off">
            <input type="password" name="passwordRetype" id="passwordRetype" class="register_input" placeholder="Retype password" autocomplete="off">
            <input type="text" name="country" id="country" class="register_input" placeholder="Country" autocomplete="off">
            <input type="text" name="place" id="place" class="register_input" placeholder="Place" autocomplete="off">
            <div type="text" id="day_btn" class="register_third_input1" onmouseover="changeDateCornersToNone1(this); showThird1();" onmouseout="changeDateCornersToDisplay1(this); hideThird1();">Day</div>
            <input type="text" name="day" id="day" class="hidden_input"> 
            <div type="text" id="month_btn" class="register_third_input2" onmouseover="changeDateCornersToNone2(this); showThird2();" onmouseout="changeDateCornersToDisplay2(this); hideThird2();">Month</div>
            <input type="text" name="month" id="month" class="hidden_input">
            <div type="text" id="year_btn" class="register_third_input3" onmouseover="changeDateCornersToNone3(this); showThird3();" onmouseout="changeDateCornersToDisplay3(this); hideThird3();">Year</div>
            <input type="text" name="year" id="year" class="hidden_input">
            <div id="days_dropdown" onclick="changeDateCornersToDisplay1();" onmouseover="changeDateCornersToNone1(); showThird1();" onmouseout="changeDateCornersToDisplay1(); hideThird1();" class="register_third_dropdawn1">
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">01</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">02</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">03</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">04</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">05</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">06</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">07</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">08</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">09</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">10</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">11</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">12</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">13</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">14</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">15</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">16</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">17</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">18</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">19</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">20</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">21</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">22</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">23</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">24</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">25</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">26</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">27</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">28</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">29</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">30</div>
                <div class="register_third_dropdown_btn1" onclick="assignValueDay(this.innerHTML)">31</div>
            </div> 
            <div id="months_dropdown" onclick="changeDateCornersToDisplay2();" onmouseover="changeDateCornersToNone2(this); showThird2();" onmouseout="changeDateCornersToDisplay2(this); hideThird2();" class="register_third_dropdawn2">
                <div class="register_third_dropdown_btn2" onclick="assignValueMonth(this.innerHTML)">01</div>
                <div class="register_third_dropdown_btn2" onclick="assignValueMonth(this.innerHTML)">02</div>
                <div class="register_third_dropdown_btn2" onclick="assignValueMonth(this.innerHTML)">03</div>
                <div class="register_third_dropdown_btn2" onclick="assignValueMonth(this.innerHTML)">04</div>
                <div class="register_third_dropdown_btn2" onclick="assignValueMonth(this.innerHTML)">05</div>
                <div class="register_third_dropdown_btn2" onclick="assignValueMonth(this.innerHTML)">06</div>
                <div class="register_third_dropdown_btn2" onclick="assignValueMonth(this.innerHTML)">07</div>
                <div class="register_third_dropdown_btn2" onclick="assignValueMonth(this.innerHTML)">08</div>
                <div class="register_third_dropdown_btn2" onclick="assignValueMonth(this.innerHTML)">09</div>
                <div class="register_third_dropdown_btn2" onclick="assignValueMonth(this.innerHTML)">10</div>
                <div class="register_third_dropdown_btn2" onclick="assignValueMonth(this.innerHTML)">11</div>
                <div class="register_third_dropdown_btn2" onclick="assignValueMonth(this.innerHTML)">12</div>
            </div> 
            <div id="years_dropdown" onclick="changeDateCornersToDisplay3();" onmouseover="changeDateCornersToNone3(this); showThird3();" onmouseout="changeDateCornersToDisplay3(this); hideThird3();" class="register_third_dropdawn3">
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">2003</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">2002</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">2001</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">2000</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1999</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1998</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1997</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1996</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1995</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1994</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1993</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1992</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1991</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1990</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1989</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1988</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1987</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1986</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1985</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1984</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1983</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1982</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1981</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1980</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1979</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1978</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1977</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1976</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1975</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1974</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1973</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1972</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1971</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1970</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1969</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1968</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1967</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1966</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1965</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1964</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1963</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1962</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1961</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1960</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1959</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1958</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1957</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1956</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1955</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1954</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1953</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1952</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1951</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1949</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1948</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1947</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1946</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1945</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1944</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1943</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1942</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1941</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1940</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1939</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1938</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1937</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1936</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1935</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1934</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1933</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1932</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1931</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1930</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1929</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1928</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1927</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1926</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1925</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1924</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1923</div>
                <div class="register_third_dropdown_btn3" onclick="assignValueYear(this.innerHTML)">1922</div>
            </div>
            <script>
                var day = document.getElementById('day');
                var month = document.getElementById('month');
                var year = document.getElementById('year');
                var days_dropdown = document.getElementById('days_dropdown');
                var months_dropdown = document.getElementById('months_dropdown');
                var years_dropdown = document.getElementById('years_dropdown');
                var day_btn = document.getElementById('day_btn');
                var month_btn = document.getElementById('month_btn');
                var year_btn = document.getElementById('year_btn');
                
                function changeDateCornersToNone1(){
                    day_btn.style.borderBottomLeftRadius = "0px";
                    day_btn.style.borderBottomRightRadius = "0px";
                    day_btn.style.borderBottom = "0px";
                }
                function changeDateCornersToDisplay1(){
                    day_btn.style.borderBottomLeftRadius = "10px";
                    day_btn.style.borderBottomRightRadius = "10px";
                    day_btn.style.borderBottom = "2px solid rgb(212, 53, 39)";
                }
                function changeDateCornersToNone2(){
                    month_btn.style.borderBottomLeftRadius = "0px";
                    month_btn.style.borderBottomRightRadius = "0px";
                    month_btn.style.borderBottom = "0px";
                }
                function changeDateCornersToDisplay2(){
                    month_btn.style.borderBottomLeftRadius = "10px";
                    month_btn.style.borderBottomRightRadius = "10px";
                    month_btn.style.borderBottom = "2px solid rgb(212, 53, 39)";
                }
                function changeDateCornersToNone3(){
                    year_btn.style.borderBottomLeftRadius = "0px";
                    year_btn.style.borderBottomRightRadius = "0px";
                    year_btn.style.borderBottom = "0px";
                }
                function changeDateCornersToDisplay3(){
                    year_btn.style.borderBottomLeftRadius = "10px";
                    year_btn.style.borderBottomRightRadius = "10px";
                    year_btn.style.borderBottom = "2px solid rgb(212, 53, 39)";
                }

                function showThird1(){
                    days_dropdown.style.display = "block";
                }
                function hideThird1(){
                    days_dropdown.style.display = "none";
                }
                function showThird2(){
                    months_dropdown.style.display = "block";
                }
                function hideThird2(){
                    months_dropdown.style.display = "none";
                }
                function showThird3(){
                    years_dropdown.style.display = "block";
                }
                function hideThird3(){
                    years_dropdown.style.display = "none";
                }

                function assignValueDay(value){
                    days_dropdown.style.display = "none";
                    day_btn.style.color = "black";
                    day_btn.innerHTML = value;
                    day.value = value;
                } 
                function assignValueMonth(value){
                    months_dropdown.style.display = "none";
                    month_btn.style.color = "black";
                    month_btn.innerHTML = value;
                    month.value = value;
                }
                function assignValueYear(value){
                    years_dropdown.style.display = "none";
                    year_btn.style.color = "black";
                    year_btn.innerHTML = value;
                    year.value = value;
                }
            </script>
            <label class="container_checkbox" style="margin-top: 10px; height: 15px; padding-bottom: 0;">
                <input type="checkbox" name="agreement" id="agreement" class="checkbox"></input>
                <p class="checkbox_p" id="p9">I accept the terms of use of the service</p>
                <span class="checkmark_checkbox" id="checkmark_checkbox"></span>
            </label>
            <input id="submit" type="submit" name="submit" class="universal_submit_btn" value="Register">
        </form>
    </div>
    <?php
        error_reporting(0);

        include "../connection.php";

        $name = $_POST["name"];
        $family = $_POST["family"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $passwordRetype = md5($_POST["passwordRetype"]);
        $country = $_POST["country"];
        $place = $_POST["place"];

        $sqlEmail = "SELECT `e-mail` FROM `users` WHERE `e-mail` = '$email'";
        $resultEmail = $conn -> query($sqlEmail);
        $emailCheck = mysqli_num_rows($resultEmail);

        if(isset($_POST["submit"]) && $_POST["agreement"] != "" && $_POST["email"] != "" && $_POST["password"] != "" && $_POST["passwordRetype"] != "" && $_POST["country"] != "" && $_POST["place"] != "" && $_POST["day"] != "" && $_POST["month"] != "" && $_POST["year"] != ""){
            if($emailCheck == 0 && $password == $passwordRetype){
                $sqlInsert = "INSERT INTO `users`(`id`, `e-mail`, `password`, `name`, `family`, `country`, `place`, `date`) VALUES (NULL, '$email', '$password', '$name', '$family', '$country', '$place', current_timestamp())";
                if($conn->query($sqlInsert) === TRUE) {
                    echo "
                        <script>
                            window.location.assign('http://" . $_SERVER['HTTP_HOST'] . "/login');
                        </script>
                    ";
                }
            }
        }
    ?>
</body>
</html>