<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ReadyBelly | Grand Beijing</title>
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/main.css">
    
<style>
header {
    background: url(../img/rest/GrandBeijing/header3.jpg);
    background-position-x: 0px;
    background-position-y: -230px;
    background-repeat: no-repeat;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    
}
@media screen and (max-width: 500px) {
  header {
    display: block;
    text-align: left;
  }
}
header .wrapper h1 a {
    text-shadow: 2px 0px 4px #000000;
    left: 150px;
    top: 225px;
    color: #ffffff;
    text-decoration: none;
    display: inline-block;
    position: relative;
    -webkit-animation: Gradient 10s ease-in-out infinite;
    -moz-animation: Gradient 10s ease-in-out infinite;
    -o-animation: Gradient 10s ease-in-out infinite;
    -ms-animation: Gradient 10s ease-in-out infinite;
    animation: Gradient 10s ease-in-out infinite;
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

@-webkit-keyframes Gradient {
    0% {color: #ffffff;}
    20% {color: #e94949;}
    40% {color: #ffffff;}
    60% {color: #ca8331;}
    80% {color: #ffffff;}
    100% {color: #ec2255;}
}
@-moz-keyframes Gradient {
    0% {color: #ffffff;}
    20% {color: #e94949;}
    40% {color: #ffffff;}
    60% {color: #ca8331;}
    80% {color: #ffffff;}
    100% {color: #ec2255;}
}
@-ms-keyframes Gradient {
    0% {color: #ffffff;}
    20% {color: #e94949;}
    40% {color: #ffffff;}
    60% {color: #ca8331;}
    80% {color: #ffffff;}
    100% {color: #ec2255;}
}
@-o-keyframes Gradient {
    0% {color: #ffffff;}
    20% {color: #e94949;}
    40% {color: #ffffff;}
    60% {color: #ca8331;}
    80% {color: #ffffff;}
    100% {color: #ec2255;}
}
@keyframes Gradient {
    0% {color: #ffffff;}
    20% {color: #e94949;}
    40% {color: #ffffff;}
    60% {color: #ca8331;}
    80% {color: #ffffff;}
    100% {color: #ec2255;}
}

header .top-logo {
    height: 300px;
    background: transparent !important;
}
header .top-logo h1{
    font-family: 'Aclonica';
    font-size:3.5rem;
}
::selection {
    background: #444;
    /* WebKit/Blink Browsers */
}

::-moz-selection {
    background: #444;
    /* Gecko Browsers */
}
</style>
</head>
<body style="background-color: #d1d1d1;">
<header role="banner">
<div class="top-border">
            <h1><a href="index.html">ReadyBelly</a></h1>
        
        </div>
        <div class="top-logo">
            <div class="wrapper">
                <h1><a href="GrandBeijing.php">Grand Beijing</a></h1>
            </div>
        </div>

        <div class="topnav" id="topnav">
        <a href="../cart.php">Cart</a>
        <a href="../register.php">Register</a>
        <a href="../login.php">Log In</a>
        <a href="../contact.html">Contact Us</a>
        <a href="../index.php">Home</a>
        <a href="../admin/adminlogin.php" style="float:left;">Admin</a>
    </div>
</header>
    <div class="mid-section">
        <div class="row">
        <div class="col-lg-2">
        <div class="nav-left-sidebar sidebar-dark fixed-top">
            <ul class="navbar-nav flex-column">
                <li class="nav-divider">Restaurants</li>
                <li class="nav-item">
                    <a id="active-side" class="nav-link active" href="GrandBeijing.php">Grand Beijing</a>
                    <a class="nav-link active" href="BombayFoods.php">Bombay Foods</a>
                    <a class="nav-link active" href="RajaBojun.php">Raja Bojun</a>
                    <a class="nav-link active" href="ThaiCorner.php">Thai Corner</a>
                    
                </li>
        </div>
        </div>
        <div class="col-lg-10" style="padding-left: 15px;">
        <div class="container-fluid" >
                <div class="topic">
                    <h2></h2>
                </div>
                <div class="row">
                        
                <?php $rest='GrandBeijing'; ?>
                <?php include "../php/foods.php"; ?>

                    </div>
                <div class="topic">
                    <h2></h2>
                </div>
        </div>
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