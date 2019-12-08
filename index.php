<?php 
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default"> 
            <?php 
                if (isset($_SESSION['userId'])) {
                    echo '<p style="color: yellow; text-align: center;" class="login-status">You are logged in!</p>';
                }
                else {
                    echo '<p style="color: red; text-align: center;" class="login-status">You are logged out!</p>';
                }
            ?>
               
            </section>
        </div>
    </main>

 <?php 
    require "footer.php";
 ?> 

