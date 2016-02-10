<?php session_start(); ?>
<script type="text/javascript">

    if (screen.width > 699) {
        document.location = "register.php";
    }

</script>
<script>
    function logout() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {

            if (xhttp.readyState == 4 && xhttp.status == 200) {
                location.reload();
            }
        };
        xhttp.open("GET", "core/logout.php", true);
        xhttp.send();
    }
</script>

<!DOCTYPE html>
<html>
<head>
    <title>Crupthunter</title>
    <!--Custom Theme files-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Flat Account Login Form widget template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--//Custom Theme files -->
    <link href="assets/css/game.css" rel="stylesheet" type="text/css" media="all" />
    <link href='//fonts.googleapis.com/css?family=Ledger' rel='stylesheet' type='text/css'>
</head>
<body style="background-color: #292929">
<!-- main -->
<div class="main">
    <h1>Crypthunter the online cryphunt competition</h1>
    <div class="signin-form">
        <form action="" method="post">
            <ul>
                <li>

                    <p>Choose Options</p>
                </li>
                <li>
                    <a href="login-mobile.php" style="background-color: #000000;">Login </a>

                </li>
                <li>
                    <a href="register-mobile.php" style="background-color: #000000;">Register </a>

                </li>
                <li>
                    <a href="first.php" style="background-color: #000000;">Play </a>

                </li>
            </ul>
        </form>
        <?php
        if (isset($_SESSION["p_uname"])){
            ?>
            <p style=" font-size: 20px; color: #000000">Welcome: <?php echo $_SESSION["p_name"] ?> <a style="cursor: hand; color: #00fffc" id="logout" onclick="logout()">Log Out</a></p>
        <?php }?>
    </div>
</div>
<!--//main -->
<div class="copyright">
    <p> &copy; 2015 Crypthunter . All rights reserved </p>
</div>
</body>
</html>
