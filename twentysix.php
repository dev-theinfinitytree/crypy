<?php
/**
 * Created by PhpStorm.
 * User: subhabrata
 * Date: 12/15/2015
 * Time: 6:41 AM
 */

include 'core/game.php';
require_once 'core/game.php';
$obj=new game\game();
$data=$obj->get_level();
if($data!=="twentysix.php"){
    header("Location: " . $data);
}
else{


    if(isset($_POST['ans']) && !empty($_POST['ans'])){
        $ans=$_POST['ans'];
        $obj=new \game\game();
        $correct=$obj->check_answer(26,$ans);
        if($correct==1){
            $obj->change_level();
            header("Refresh:0");
        }
        else{
            header("Refresh:0");
        }
    }


    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Crupthunter:: Level 26</title>
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
        <h1>Level 26 Question</h1>
        <div class="signin-form">
            <form action="" method="post">
                <ul>
                    <li>

                        <p>No one wants to die. Even people who want to go to heaven don't want to die to get there. And yet death is the destination we all share. No one has ever escaped it. And that is as it should be, because Death is very likely the single best invention of Life. It is Life's change agent. It clears out the old to make way for the new.</p>
                    </li>
                    <li>
                        <img src="assets/img/twentysix.png">

                    </li>
                    <li>
                        <input type="password" name="ans" placeholder="Your Answer" required="">
                        <span class="key" style="background-color: #000000; "> </span>
                    </li>
                    <li>
                        <input type="submit" value="Submit" style="background-color: #000000; ">
                        <a href="/blog" style="background-color: #000000;">Visit Blog For Hint </a>
                    </li>
                </ul>
            </form>
            <a href="#" class="text">Difficulty: Hard</a>
        </div>
    </div>
    <!--//main -->
    <div class="copyright">
        <p> &copy; 2015 Crypthunter . All rights reserved </p>
    </div>
    </body>
    </html>


<?php




}
?>