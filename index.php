<?php
require "header.php";
?>
<main>
    <section class="section-default">
        <div>
            <?php
            if (isset($_SESSION['sessionID'])) {
                echo '<p class="login-status">You are logged in!</p>';
            } else {
                echo '<p class="login-status">You are logged out!</p>';
            }
            ?>


            <p class="login-status">You are logged in!</p>
        </div>
    </section>
</main>
<?php
require "footer.php";
?>