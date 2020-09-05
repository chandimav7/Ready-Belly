<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ReadyBelly | Register</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/reg.css'>
    <script src='js/login.js'></script>
</head>
<body>
  
<div>
  <a href="index.php"><h5 id="hh5" style="color:white;background-color:#333333;padding:2px;">Back to Home</h5></a>
</div>
<div class="register">
  <div class="register-header">
    <h4><b>Register</b></h4>
  </div>
  <div class="register-form">
    <form action="php/registerauth.php" method="post" name="login" >
    <h5><b>E-mail:</b></h5>
    <input type="text" name="email" placeholder="E-mail" /><br>
    <h5><b>Username:</b></h5>
    <input type="text" name="uname" placeholder="Username" /><br>
    <h5><b>Password:</b></h5>
    <input type="password" name="pwd" placeholder="Password" /><br>
    <h5><b>Repeat Password:</b></h5>
    <input type="password" name="repwd" placeholder="Repeat Password" /><br>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy.</a></p>
    <br>
    <input type="submit" value="Register" onsubmit="return validateForm()"/>
    <br><br>
    <p>Already have an account? <a href="login.php" class="register">Sign in!</a></p>
    </form>
  </div>
</div>
</body>
</html>