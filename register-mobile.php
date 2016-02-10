<?php
include 'core/login_core.php';
if(isset($_POST['p_name']) && isset($_POST['p_uname']) &&  isset($_POST['p_college']) && isset($_POST['p_pw'])){
    if(!empty($_POST['p_name']) && !empty($_POST['p_uname']) && !empty($_POST['p_pw'])){

        $name =$_POST['p_name'];
        $uname=$_POST['p_uname'];
        $pw=$_POST['p_pw'];
        $college=$_POST['p_college'];

        $lc=new login_core();
        $lc->register($name,$college,$uname,$pw);

        if($lc==true){

            header("Location: login-mobile.php?value=success"); /* Redirect browser */
            exit();
        }
        else{
            header("Location: register-mobile.php?value=unsuccess"); /* Redirect browser */
            exit();

        }


    }

}
?>
    <script type="text/javascript">

        if (screen.width > 699) {
            document.location = "register.php";
        }

    </script>

 <!DOCTYPE html>
    <html>
    <head>
        <title>Crupthunter:: Register</title>
        <!--Custom Theme files-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Flat Account Login Form widget template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--//Custom Theme files -->
        <link href="assets/css/game.css" rel="stylesheet" type="text/css" media="all" />
        <link href='//fonts.googleapis.com/css?family=Ledger' rel='stylesheet' type='text/css'>
         <script src="assets/js/gen_validatorv4.js" type="text/javascript"></script>
    </head>
    <body style="background-color: #292929">
    <!-- main -->
    <div class="main">
        <h1>Register To Crypthunter Here</h1>
        <div class="signin-form">
            <form action="" method="post" name="register">
                <ul>
                    <li>

                        <p>Enter Credentials</p>
                    </li>
                    <li>
                        <input type="text" name="p_uname" placeholder="User Email" required="">
                        <span class="key" style="background-color: #000000; "> </span>

                    </li>
                    <li>
                        <input type="password" name="p_pw" placeholder="Password" required="">
                        <span class="key" style="background-color: #000000; "> </span>
                    </li>
                     <li>
                        <input type="text" name="p_name" placeholder="Player Name" required="">
                        <span class="key" style="background-color: #000000; "> </span>

                    </li>
                    <li>
                        <input type="text" name="p_college" placeholder="College Name" >
                        <span class="key" style="background-color: #000000; "> </span>
                    </li>
                    <li>
                        <input type="submit" value="Register" style="background-color: #000000; ">

                    </li>
                </ul>
            </form>
<script type="text/javascript">
        var frmvalidator  = new Validator("register");
        frmvalidator.addValidation("p_uname","email", "Enter a valid Email");
        frmvalidator.addValidation("p_pw","minlen=8", "Minimum Password length must be 8");
        frmvalidator.addValidation("p_pw","alnum", "Password can contain only alphanumeric charectar");
    </script>
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
if(isset($_GET['value'])){
    if($_GET['value']=="unsuccess"){
        ?>
        <p style="color:yellow; margin-left: 32%; font-size: 35px; position: absolute; top: 90%;"> Registration Unsuccessful. Try again!</p>
    <?php
    }
}
?>