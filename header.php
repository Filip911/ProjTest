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
    <link href="https://bootswatch.com/3/cosmo/bootstrap.min.css" rel="stylesheet" href="style.css">
</head>
<body>   
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="img/gear.png" alt=""></a>
    </div>  
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li class="active">
          <a href="#">Products</a>         
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
      </ul>   
      <ul class="nav navbar-nav navbar-right">
        <li>  
            <div class="uno">                 
        <form class="navbar-form">                                                            
            <input type="email" name="mailuid" id="inputEmail" class="form-control" placeholder="Email Address" required autofocus>                                     
            <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required>                               
            <button type="submit" class="btn btn-default" name="login-submit">Login</button>    
        </form>
        </li>   
         <li>    
             <a href="signup.php">SignUp</a>
        </li>
        <li>              
        <form action="includes/logout.inc.php" method="POST" class="navbar-form form-inline">
            <button type="submit" class="btn btn-default" name="logout-submit">Logout</button>   
        </form> 
        </div> 
        <p>Not a skipped day,working HARD another project!</p>
  </div>
</nav>
</body>
</html>
          
       