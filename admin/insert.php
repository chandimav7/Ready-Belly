<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ReadyBelly | Admin Panel</title>
    
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/insert.css">
    <style>
      body {
      margin: 0px;
      font-family: 'Ubuntu', sans-serif;
      background: linear-gradient(-45deg, #7e402d, #7a2143, #135972, #135770);
      background-size: 400% 400%;
}</style>
    
</head>

<body>
<div>
  <a href="../index.php"><h5 style="color:white;background-color:#333333;padding:2px;">Back to Home</h5></a>
  <a href="../index.php"><h5 style="color:white;background-color:#333333;padding:2px;float:right;">Log Out</h5></a>
</div>
<div class="container-fluid">
  <div class="title">
    <h2><b>Admin Panel</b></h2>
  </div>
  <div class="form-title">
    <h2><b><u>Add new food</u></b></h2>
  </div>
  <div class="login-form">
    <form action="php/addFood.php" method="post" enctype="multipart/form-data">
    <h6><b>Name</b></h6>
    <input type="text" name="name" placeholder="Food Name"/><br><br>
    <h6><b>Price</b></h6>
    <input type="text" name="price" placeholder="Price"/><br><br>
    <h6><b>Information</b></h6>
    <input type="text" name="info" placeholder="Information"/><br><br>
    <h6><b>Select Restaurant:</b></h6>
                <select class="custom-select" name="restt">
                    <option value="RajaBojun">Raja Bojun</option>
                    <option value="GrandBeijing">Grand Beijing</option>
                    <option value="BombayFoods">Bombay Foods</option>
                    <option value="ThaiCorner">Thai Corner</option>
                  </select><br><br>
    <h6><b>Image</b></h6>
    <input type="text" name="img">
    <br><br>


    <input type="Submit" value="Add"/>
    <br><br>
    
    </form>
  </div>
  
</div>
  
    
</body>
 
</html>