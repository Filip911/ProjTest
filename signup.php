<?php 
    require "header.php";
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
        <section>
        <h1>Signup</h1>
        <?php 


        ?>
            <form action="includes/signup.inc.php" method="post">
                <input class="form-control" id="formy" type="text" name="uid" placeholder="Username">
                <input class="form-control" id="formy" type="text" name="mail" placeholder="E-mail">
                <input class="form-control" id="formy" type="password" name="pwd" placeholder="Password">
                <input class="form-control" id="formy" type="password" name="pwd-repeat" placeholder="Repeat password">
                <button class="btn btn-default" type="submit" name="signup-submit">Signup</button>
            </form>
        </section>
    </div>
    <div class="col-sm-4">
    </div>
  </div>
</div>

 <?php 
    require "footer.php";
 ?> 
