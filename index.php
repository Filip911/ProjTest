<?php 
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default"> 
            <?php 
                if (isset($_SESSION['userId'])) {
                    echo '<p style="color: yellow; class="login-status">You are logged out!</p>';
                } else {
                    echo '<p style="color: red; class="login-status">You are logged in!</p>';
                }
            ?>
               
            </section>
        </div>
    </main>

 <?php 
    require "footer.php";
 ?> 

