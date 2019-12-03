<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/3/yeti/bootstrap.min.css">
</head>
<body>
    
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="#">
        <img src="img/maestro.jpg" alt="lgo">
        </a>
        <ul>
            <li><a href="#">Home</a></li>  
            <li><a href="#">Portfolio</a></li> 
            <li><a href="#">About Me</a></li> 
            <li><a href="#">Contact</a></li>       
        </ul>
        <div>
            <form action="includes/login.inc.php" method="POST">
                <input type="text" name="id" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">SignUp</a>
            <form action="includes/logout.inc.php" method="POST">
                <button type="submit" name="logout-submit">Logout</button>
            </form>
        </div>
    </nav>
</header>