<?php
session_start();
if(isset($_SESSION["p_uname"])){
    header("Location: index-mobile.php");
}
include 'core/login_core.php';
if (isset($_POST['p_uname']) && isset($_POST['p_pw'])) {
    if (!empty($_POST['p_uname']) && !empty($_POST['p_pw'])) {


        $uname = $_POST['p_uname'];
        $pw = $_POST['p_pw'];


        $lc = new login_core();
        $result = $lc->login($uname, $pw);

        if (isset($_SESSION["p_uname"])) {
            header("Location: index-mobile.php"); /* Redirect browser */

        } else {
            ?>
            <p style="color:yellow; margin-left: 32%; font-size: 35px; position: absolute; top: 90%;"> Invalid
                Username or Password!</p>
        <?php

        }


    }

}
?>
    <script type="text/javascript">

        if (screen.width > 699) {
            document.location = "login.php";
        }

    </script>

 <!DOCTYPE html>
    <html>
    <head>
        <title>Crupthunter:: Login</title>
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
        <h1>Login Here</h1>
        <div class="signin-form">
            <form action="" method="post">
                <ul>
                    <li>

                        <p>Enter Credentials</p>
                    </li>
                    <li>
                        <input type="text" name="p_uname" placeholder="User Name" required="">
                        <span class="key" style="background-color: #000000; "> </span>

                    </li>
                    <li>
                        <input type="password" name="p_pw" placeholder="Password" required="">
                        <span class="key" style="background-color: #000000; "> </span>
                    </li>
                    <li>
                        <input type="submit" value="Login" style="background-color: #000000; ">

                    </li>
                </ul>
            </form>
            <a href="register-mobile.php" class="text">Register</a>
        </div>
    </div>
    <!--//main -->
    <div class="copyright">
        <p> &copy; 2015 Crypthunter . All rights reserved </p>
    </div>
    </body>
    </html>


<?php
if (isset($_GET['value'])) {
    if ($_GET['value'] == "success") {
        ?>
        <p style="color:yellow; margin-left: 32%; font-size: 35px; position: absolute"> Sucessfully Registered.
            Login Now</p>
    <?php
    }
}



?>