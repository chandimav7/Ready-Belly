<!DOCTYPE html>
<html>
<!-- ajhsbdjkhj -->
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ReadyBelly | Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='css/home.css'>
    <link rel='stylesheet' type='text/css' href='css/main.css'>
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">

<style>
header {
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    background-image: url(img/rest/cover.png);
    background-position-x: 0px;
    background-position-y: -50px;
    background-repeat: no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
@media screen and (max-width: 500px) {
  header {
    display: block;
    text-align: left;
  }
}
header .top-border h1 a {
    font-family: "jokerman";
    text-shadow: 2px 0px 4px #000000;
    left: 10px;
    top: 5px;
    color: #ffffff;
    font-size: 0.9em;
    text-decoration: none;
    display: inline-block;
    position: relative;
    -webkit-animation: Gradient 10s ease-in-out infinite;
    -moz-animation: Gradient 10s ease-in-out infinite;
    -o-animation: Gradient 10s ease-in-out infinite;
    -ms-animation: Gradient 10s ease-in-out infinite;
    animation: Gradient 10s ease-in-out infinite;
    -webkit-animation: glow 1.5s ease-in-out infinite alternate;
    -moz-animation: glow 1.5s ease-in-out infinite alternate;
    animation: glow 1.5s ease-in-out infinite alternate;
}
@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 1px #fff, 0 0 1px #fff, 0 0 1px #ffffff, 0 0 2px #ffffff, 0 0 2px #ffffff, 0 0 2px #ffffff, 0 0 3px #ffffff;
  }
  
  to {
    text-shadow: 0 0 1px #fff, 0 0 2px #ffffff, 0 0 3px #ffffff, 0 0 4px #ffffff, 0 0 5px #ffffff, 0 0 6px #ffffff, 0 0 6px #ffffff;
  }
}
header .top-border img{
    width: 10%;
    height: auto;
    z-index: 100;
    right:0;
}
@-webkit-keyframes Gradient {
    0% { color: #ffffff; }
    20% { color: #EE7752; }
    40% { color: #ffffff; }
    60% { color: #23A6D5; }
    80% { color: #ffffff; }
    100% { color: #23d567; }
}
@-moz-keyframes Gradient {
    0% { color: #ffffff; }
    20% { color: #EE7752; }
    40% { color: #ffffff; }
    60% { color: #23A6D5; }
    80% { color: #ffffff; }
    100% { color: #23d567; }
}
@-ms-keyframes Gradient {
    0% { color: #ffffff; }
    20% { color: #EE7752; }
    40% { color: #ffffff; }
    60% { color: #23A6D5; }
    80% { color: #ffffff; }
    100% { color: #23d567; }
}
@-o-keyframes Gradient {
    0% { color: #ffffff; }
    20% { color: #EE7752; }
    40% { color: #ffffff; }
    60% { color: #23A6D5; }
    80% { color: #ffffff; }
    100% { color: #23d567; }
}
@keyframes Gradient {
    0% { color: #ffffff; }
    20% { color: #EE7752; }
    40% { color: #ffffff; }
    60% { color: #23A6D5; }
    80% { color: #ffffff; }
    100% { color: #23d567; }
}

header .top-logo {
    height: 400px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background: transparent !important;
}
::selection {
    background: #6f89fc;
    color: #ffffff;
    /* WebKit/Blink Browsers */
}

::-moz-selection {
    background: #6f89fc;
    color: #ffffff;
    /* Gecko Browsers */
}
</style>
</head>
<body>
<header role="banner">
        <div class="top-border">
            <h1><a href="index.php">ReadyBelly</a></h1>
        </div>
        <div class="top-logo">
            
        </div>
        <div class="topnav" id="topnav">
            <a href="register.php">Register</a>
            <a href="login.php">Log In</a>
            <a href="contact.html">Contact Us</a>
            <a class="active-top" href="index.php">Home</a>
            <a href="admin/adminlogin.php" style="float:left;">Admin</a>
        </div>
</header>

    <div class="split-pane">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 cover-image">
                <img src="img/home/RajaBojuncv.png">
                <a href="restaurants/RajaBojun.php">
                    <button>
                    <h3>Raja Bojun</h3>
                </button></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 cover-image">
                <img src="img/home/GrandBeijingcv.png">
                <a href="restaurants/GrandBeijing.php">
                    <button>
                    <h3>Grand Beijing</h3>
                </button></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 cover-image">
                <img src="img/home/BombayFoodscv.png">
                <a href="restaurants/BombayFoods.php">
                    <button>
                    <h3>Bombay Foods</h3>
                </button></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 cover-image">
                <img src="img/home/ThaiCornercv.png">
                <a href="restaurants/ThaiCorner.php">
                    <button>
                    <h3>Thai Corner</h3>
                </button></a>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="row">
            <div class="col-lg-6 footer-left">
                <h6>How ReadyBelly works</h6>
                <p>ReadyBelly is the easy way to get the food you love delivered. With your favorite restaurants at your fingertips, ReadyBelly satisfies your interests and connects you with possibilities — more time and energy for yourself and those you love.</p>
            </div>
            <div class="col-lg-6 footer-right">
                <h6>Contact Us</h6>
                <p>Have a question, comment, or want to contribute please <a href="contact.html">email us</a>
                    <br><br> Thank you very much! Hope to hear from you soon!</p>
            </div>
        </div>
    </div>
</body>

</html>