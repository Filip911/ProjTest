<?php 
    require "header.php";
?>

    <main>
        <div class="main">
            <section> 
            <?php 
                if (isset($_SESSION['idJuzer'])) {
                    echo '<p class="login-status">You are logged in!</p>';
                }
                else {
                    echo '<p class="login-status">You are logged out!</p>';
                }
            ?>
               
            </section>
        </div>
    </main>

 <?php 
    require "footer.php";
 ?> 

