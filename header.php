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
<div class="sticky-header-navbar-container">
        <div class="well">
            <div class="navbar navbar-default navbar-fixed-top" id="navbar">
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
                <ul class="nav navbar-nav navbar-right line-inline">
                    
                    <li>

                        <!-- Changes I made start here -->

                        <form class="form-signin navbar-form">
                            
                            <label for="inputEmail" class="sr-only">Email address</label>
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email Address" required autofocus>
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                <span><button type="submit" name="login-submit">Login</button></span>
                             <span><a href="signup.php" class="">SignUp</a><span>
                            
                          <form action="includes/logout.inc.php" method="POST" class="">
                                <button type="submit" class="btn btn-default" name="logout-submit">Logout</button>
                          </form> 
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>