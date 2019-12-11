<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
  <div class="login-container" display="inline">
      <form action="includes/login.inc.php" style="display: inline;">
      <input type="text" placeholder="Email" name="mailuid" required> 
      <input type="password" placeholder="Password" name="pwd" required>
      <button type="submit" name="login-submit">Login</button>
    </form>
      <a href="signup.php">Singup</a>
      <form action="includes/logout.inc.php" method="POST" style="display:inline;">
      <button type="submit" class="btn" name="logout-submit">Logout</button>   
      </form>
  </div>
</div>

</body>
</html>
    
       