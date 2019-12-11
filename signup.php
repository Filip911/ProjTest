<?php 
    require "header.php";
?>
<form action="includes/signup.inc.php" method="post">
  <div class="container-sign">
    <h1>Sign Up</h1>
    <php 

    ?>
    <p>Please fill in this form to create an account.</p>
      
    <input type="text" placeholder="Username" name="uid" required>
      <br>

    <input type="text" placeholder="Enter Email" name="mail" required>
      <br>
  
    <input type="password" placeholder="Enter Password" name="pwd" required>
      <br>
    
    <input type="password" placeholder="Repeat Password" name="pwd-repeat" required>
      <br>
     
      <button type="submit" name="signup-submit">Signup</button>
  </div>
</form>
</div>  
 <?php 
    require "footer.php";
 ?> 
