<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ReadyBelly | Login</title>
    
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/log_in.css">
    
    
</head>

<body>
<div>
  <a href="index.php"><h5 style="color:white;background-color:#333333;padding:2px;">Back to Home</h5></a>
</div>
<div class="login">
  <div class="login-header">
    <h1><b>Login</b></h1>
  </div>
  <div class="login-form">
    <form action="php/loginauth.php" method="post">
    <h6><b>Username:</b></h6>
    <input type="text" name="uname" placeholder="Username" required/><br>
    <h6><b>Password:</b></h6>
    <input type="password" name="pwd" placeholder="Password" required/>
    <br><br>
    <input type="Submit" value="Login"/>
    <br><br>
    <p>Don't have an account? <a href="register.php" class="log-in">Sign Up!</a></p>
    </form>
  </div>
</div>
  
    
</body>
 
</html>