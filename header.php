<?php 
     session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProjectX</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://bootswatch.com/3/spacelab/bootstrap.min.css">
</head>
<body>   
<header>             
    <nav class="navbar navbar-expand-md">
         <a class="navbar-brand" href=""><img src="img/gear.png"></a>
            <ul class="nav navbar-nav">
                 <li>
                       <a href="#">Home</a>
                  </li>
                  <li>
                         <a href="#">About</a>
                  </li>
                  <li>
                        <a href="#">Contact</a>
                 </li>                    
            </ul>         
             <ul class="nav navbar-nav navbar-right">
                  <li>    
                 
                      <form class="navbar-form">                                                            
                          <input type="email" id="inputEmail" class="form-control" placeholder="Email Address" required autofocus>                                     
                          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>                               
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
                   </li> 
             </ul>                                                 
     </nav>
 </header> 
          
       