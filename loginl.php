<?php
require 'headerl.php';
?>

<!--MAIN STARTS HERE-->
<main>
    <!--SECTION LOGIN STARTS HERE-->
    <section class="login" id="login">
        <div class="main-sweet-wall">
            <div class="login-wrapper position-absolute text-center p-3 p-md-5 scale-in-center">

                <?php
                if (isset($_SESSION['userId'])) {
                    echo '<h2 class="text-info"> Dobrodošli, ' . $_SESSION['userUid'] . '.<br> Uspešno ste ulogovani!</h2>';
                }
                ?>

            </div>
        </div>
    </section>
    <!--SECTION LOGIN ENDS HERE-->
</main>

<?php
require 'footer.php';
?>