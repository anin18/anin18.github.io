<?php
require 'header.php';
?>

<!--SECTION REGISTER STARTS HERE-->
<section class="register" id="register">
    <div class="main-sweet-wall">
        <div class="registration-wrapper position-absolute text-center p-3 p-md-4">
            <h2>Registracija</h2>
            <h5 class="mb-4 mb-sm-5">Ako ste nas clan, mozete se prijaviti <a href="login.php">ovde</a>.</h5>
            <form action="includes/signup.inc.php" method='POST' class="registration-form m-auto">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <input type="text" name="uid" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group mb-4">
                            <input type="text" name="mail" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <input type="password" name="pwd" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group mb-5">
                            <input type="password" name="pwd-repeat" class="form-control" placeholder="Repeat password">
                        </div>
                    </div>
                </div>

                <button class="btn btn-lg" type="submit" name="signup-submit">Registruj se</button>
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 'emptyfields') {
                        echo '<p> Fill in all fields!</p>';
                    } elseif ($_GET['error'] == 'invaliduidmail') {
                        echo '<p> Invalid username and e-mail!</p>';
                    } elseif ($_GET['error'] == 'invaliduid') {
                        echo '<p> Invalid username!</p>';
                    } elseif ($_GET['error'] == 'invalidmail') {
                        echo '<p> Invalid email!</p>';
                    } elseif ($_GET['error'] == 'passwordcheck') {
                        echo '<p> Your passwords do not match! </p>';
                    } elseif ($_GET['error'] == 'usertaken') {
                        echo '<p> Username is already taken! </p>';
                    }
                }

                if (isset($_GET['signup'])) {
                    if ($_GET['signup'] == 'success') {
                        echo '<p> Sign up successful</p>';
                    }
                }
                ?>
            </form>

        </div>
    </div>
</section>
<!--SECTION REGISTER ENDS HERE-->

</main>
<!--MAIN ENDS HERE-->


<?php
require 'footer.php';
?>