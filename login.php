<?php
require 'header.php';
?>

<!--MAIN STARTS HERE-->
<main>
    <!--SECTION LOGIN STARTS HERE-->
    <section class="login" id="login">
        <div class="main-sweet-wall">
            <div class="login-wrapper position-absolute text-center p-3 p-md-4">
                
                <?php
                if (isset($_SESSION['userId'])) {
                    echo '<h1> Uspesno ste ulogovani!</h1>';
                } else {
                    echo '<h2>Prijava</h2>';
                    echo '<h5 class="mb-4 mb-sm-5">Ako niste nas clan, mozete se registrovati <a
                    href="signup.php">ovde</a>.</h5>';
                    echo '<form action="includes/login.inc.php" method="POST" class="login-form m-auto">
                <div class="form-group mb-5">
                    <input type="text" class="form-control" placeholder="Email" name="mailuid">
                </div> 
                <div class="form-group mb-5">
                    <input type="password" class="form-control" placeholder="Password" name="pwd">
                </div>
                <div class="text-left lost-password  mb-4">
                    Zaboravili ste sifru?
                </div>
                <button class="btn btn-lg" type="submit" name="login-submit">Prijavi se</button>
            </form>';
                }
                ?>

            </div>
        </div>
    </section>
    <!--SECTION LOGIN ENDS HERE-->


    <?php
    require 'footer.php';
    ?>