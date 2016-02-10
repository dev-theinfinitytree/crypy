<?php session_start(); ?>
<head>
    <!--<link rel="stylesheet" type="text/css" href="assets/css/neon.css">
    <script type="text/javascript" src="assets/js/neon.js"></script>
    -->
    <script type="text/javascript">

        if (screen.width <= 699) {
            document.location = "index-mobile.php";
        }

    </script>
    <script src="cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    var canvasDots = function() {
        var canvas = document.querySelector('canvas'),
            ctx = canvas.getContext('2d'),
            colorDot = '#00bdbf',
            color = '#00bdbf';
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        canvas.style.display = 'block';
        ctx.fillStyle = colorDot;
        ctx.lineWidth = .1;
        ctx.strokeStyle = color;

        var mousePosition = {
            x: 30 * canvas.width / 100,
            y: 30 * canvas.height / 100
        };

        var dots = {
            nb: 400,
            distance: 60,
            d_radius: 100,
            array: []
        };

        function Dot(){
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;

            this.vx = -.5 + Math.random();
            this.vy = -.5 + Math.random();

            this.radius = Math.random();
        }

        Dot.prototype = {
            create: function(){
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
                ctx.fill();
            },

            animate: function(){
                for(i = 0; i < dots.nb; i++){

                    var dot = dots.array[i];

                    if(dot.y < 0 || dot.y > canvas.height){
                        dot.vx = dot.vx;
                        dot.vy = - dot.vy;
                    }
                    else if(dot.x < 0 || dot.x > canvas.width){
                        dot.vx = - dot.vx;
                        dot.vy = dot.vy;
                    }
                    dot.x += dot.vx;
                    dot.y += dot.vy;
                }
            },

            line: function(){
                for(i = 0; i < dots.nb; i++){
                    for(j = 0; j < dots.nb; j++){
                        i_dot = dots.array[i];
                        j_dot = dots.array[j];

                        if((i_dot.x - j_dot.x) < dots.distance && (i_dot.y - j_dot.y) < dots.distance && (i_dot.x - j_dot.x) > - dots.distance && (i_dot.y - j_dot.y) > - dots.distance){
                            if((i_dot.x - mousePosition.x) < dots.d_radius && (i_dot.y - mousePosition.y) < dots.d_radius && (i_dot.x - mousePosition.x) > - dots.d_radius && (i_dot.y - mousePosition.y) > - dots.d_radius){
                                ctx.beginPath();
                                ctx.moveTo(i_dot.x, i_dot.y);
                                ctx.lineTo(j_dot.x, j_dot.y);
                                ctx.stroke();
                                ctx.closePath();
                            }
                        }
                    }
                }
            }
        };

        function createDots(){
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for(i = 0; i < dots.nb; i++){
                dots.array.push(new Dot());
                dot = dots.array[i];

                dot.create();
            }

            dot.line();
            dot.animate();
        }

        window.onmousemove = function(parameter) {
            mousePosition.x = parameter.pageX;
            mousePosition.y = parameter.pageY;
        }

        mousePosition.x = window.innerWidth / 2;
        mousePosition.y = window.innerHeight / 2;

        setInterval(createDots, 1000/30);
    };

    window.onload = function() {
        canvasDots();
    };
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


<style>
    html, body {
        background: #333;
    }
    canvas{
        position: absolute;
        width: 100%;
        top: 0; right: 0; bottom: 0; left: 0;
    }


</style>
    <style>
        /* MIXINS */
        /* BASE */
        body,
        html {
            background: #000;
            height: 100%;
            width: 100%;
            text-align: center;
            overflow: hidden;
            /* BG highlight */
        }
        body:after,
        html:after {
            content: '';
            position: absolute;
            left: 50%;
            margin-left: -40%;
            bottom: -80px;
            background: rgba(255,0,180,0.4);
            border-radius: 100%;
            width: 80%;
            height: 100px;
            -webkit-filter: blur(60px);
            -moz-filter: blur(60px);
            -ms-filter: blur(60px);
            -o-filter: blur(60px);
            filter: blur(60px);
            opacity: 0.2;
        }
        /* TITLE */
        h1 {
            margin: 32px 0;
            display: block;
            width: 100%;
            text-align: center;
            color: #fff;
            font-family: 'Century gothic';
            text-transform: uppercase;
            font-size: 24px;
            font-weight: 100;
            /* TEXT HIGHLIGHTER */
        }
        h1:after,
        h1:before {
            content: 'NEON BUTTONS';
            position: absolute;
            width: 100%;
            height: 100%;
            text-align: center;
            color: rgba(255,0,180,0.8);
            left: -8px;
            top: 32px;
            -webkit-filter: blur(5px);
            -moz-filter: blur(5px);
            -ms-filter: blur(5px);
            -o-filter: blur(5px);
            filter: blur(5px);
            z-index: 50;
            transform: scale(1.2, 1);
        }
        h1:before {
            color: rgba(100,0,255,0.8);
            left: 8px;
            z-index: 100;
        }
        /* BUTTON BLOCK */
        div {
            display: inline-block;
            margin: 72px 16px;
            position: relative;
            width: 350px;
            height: 100px;
            top: calc(50% - 25px);
            /* BUTTON FORM */
            /* BACK LIGHT */
        }
        div b {
            display: inline-block;
            top: 0;
            left: 0;
            position: absolute;
            width: 100%;
            height: 100%;
            background: #111;
            border-radius: 100% 100% 50px 50px;
            box-shadow: 0px 0px 5px rgba(255,0,255,0.2) inset;
            z-index: 300;
            overflow: hidden;
            cursor: pointer;
            text-align: center;
            line-height: 50px;
            transition: all 0.7s ease;
            /* BUTTON TEXT */
            /* GLANCE EFFECT OVERLAY */
        }
        div b span {
            position: relative;
            z-index: 400;
            color: #666;
            text-transform: uppercase;
            font-family: 'Century gothic';
            text-shadow: 0px 0px 4px rgba(255,0,255,0.4);
            transition: all 0.3s ease;
        }
        div b:before {
            content: '';
            position: absolute;
            width: 100%;
            height: 50%;
            left: 0;
            bottom: 0;
            border-radius: 50% 50% 20% 20%;
            background: rgba(0,0,0,0.6);
        }
        div:before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0px;
            top: 0px;
            border-radius: 50%;
            background: linear-gradient(to right, rgba(255,0,0,0.7), rgba(0,0,255,0.7));
            -webkit-filter: blur(10px);
            -moz-filter: blur(10px);
            -ms-filter: blur(10px);
            -o-filter: blur(10px);
            filter: blur(10px);
            z-index: 100;
            transition: all 0.6s ease;
        }
        /* HOVER BUTTON STATES */
        div:hover:before {
            border-radius: 50px;
            animation: light 3s infinite ease;
        }
        div:hover b {
            box-shadow: 0px 0px 10px rgba(255,0,255,0.3) inset, 0px 0px 100px rgba(255,0,180,0.4);
        }
        div:hover b span {
            color: #aaa;
            text-shadow: 0px 0px 6px rgba(255,0,255,0.6);
        }


    </style>

</head>
<body>

<canvas>

</canvas>
<h1>crypthunter</h1>
<?php
if (isset($_SESSION["p_uname"])){
?>
<p style="position: fixed; top: 10px; right: 20px; font-size: 20px; color: #ffffff">Welcome: <?php echo $_SESSION["p_name"] ?> <a style="cursor: hand; color: #00fffc" id="logout" onclick="logout()">Log Out</a></p>
<?php }?>
<div><a href="login.php"><b><span>Login</span></b></a></div>
<div><a href="register.php"><b><span>Register</span></b></a></div>
<div><a href="first.php"><b><span>Play</span></b></a></div>



</body>
