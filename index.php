<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ana, Marija,Nina">
    <meta name="description" content="Sweet Cakes-prezentacija torti">
    <meta name="keywords" content="torte, kolaci, porodicna firma.../">

    <!--Favicon-->
    <link rel="icon" type="icon/png" href="images/favicon/favicon-16x16.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Custom page CSS-->
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/animation.css">

    <!--Theme CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!--Hamburger menu CSS-->
    <link href="css/hamburgers.css" rel="stylesheet">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Home Sweet home</title>
</head>

<body>
    <!--HEADER STARTS HERE-->
    <header class="fixed-top py-0 mb-5">
        <div class="container">
            <nav class="navbar navbar-expand-md  p-0 ">
                <a class="navbar-brand py-0 buzz" href="#">
                    <img src="images/assets/logo.png" alt="logo">
                </a>

                <!--HAMBURGER MENU STARTS HERE-->
                <button class="hamburger hamburger--spin navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#main_menu" aria-controls="main_menu" aria-expanded="false"
                    aria-label="Toggle navigation" type=" button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                <!--HAMBURGER MENU ENDS HERE-->


                <!--MAIN MENU STARTS HERE-->
                <div class="collapse navbar-collapse" id="main_menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#beggin">Naslovna <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">O nama</a>
                        </li>
                        <li class="nav-item position-relative">
                            <a class="nav-link" href="cakes.php">Torte
                                <span class="fa fa-caret-down position-absolute"></span> </a>
                            <!--SUBMENU STARTS HERE-->
                            <ul class="submenu list-unstyled">
                                <li class="submenu-item">
                                    <a href="cakes_kids.php" class="submenu-link">Za decu</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="cakes_18th.php" class="submenu-link">Za 18.rodjendan</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="cakes_wedding.php" class="submenu-link">Za vencanje</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="cakes_creative.php" class="submenu-link">Razni oblici</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="cakes_adults.php" class="submenu-link">Svecane</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="my_cookie.php" class="submenu-link">Kolaci</a>
                                </li>
                            </ul>
                            <!--SUBMENU ENDS HERE-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="comments.php">Komentari</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Kontakt</a>
                        </li>
                        <li class="nav-item" id="item">

                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--MAIN MENU ENDS HERE-->
    </header>
    <!--HEADER ENDS HERE-->

    <!--MAIN STARTS HERE-->
    <main>
        <!--SECTION MAIN-SWEET STARTS HERE-->
        <section class="main-sweet" id="beggin">
            <div class="main-sweet-wall">
                <div class="main-sweet-info p-5 position-absolute text-center text-warning scale-in-center">
                    <h1 class="mb-4 display-4">Dobrodosli na sajt Sweet Cakes!</h1>
                    <h3 class="mb-0 ">Nudimo Vam sirok asortiman slatkih poslastica i kolaca. Ako ne
                        verujete, pogledajte u <a class="text-primary" href="cakes.php">galeriji.</a></h3>
                </div>
            </div>
        </section>
        <!--SECTION MAIN-SWEET ENDS HERE-->

        <!--SECTION ABOUT STARTS HERE-->
        <section class="about " id="about">
            <div class="container py-5 text-center">
                <div class="about-info mb-5  mx-auto">
                    <h2 class=" mb-5 font-weight-bold font-italic">Ovo je prica o nama</h2>
                    <p class="lead text-dark mb-5">Porodicna firma Sweet House je osnovana 2008.godine.Radili smo
                        skoromno,
                        u kucnim uslovima, a kako su ljudi poceli da primecuju nas kvalitet, tako smo i mi poceli da
                        rastemo.
                    </p>
                </div>
                <hr class="bg-light mb-5">
                <h1 class="mb-5 font-italic">Sweet Cakes u brojkama</h1>
                <!--counter starts here-->
                <div class="row about-counter">
                    <div class="col-sm-6 col-md-3 mb-4 mb-md-0 animation" data-animation="slideUp" data-delay="0s">
                        <article class="position-relative">
                            <span class="fa fa-paperclip position-absolute"></span>
                            <span class="fa fa-heart-o"></span>
                            <h2 class="mb-4 counter display-3 font-weight-bold text-warning">11</h2>
                            <h5 class="text-uppercase font-weight-light pb-4 pb-md-5 pb-lg-4"> godina rada</h5>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-4 mb-md-0 animation" data-animation ="slideUp" data-delay="0.3s">
                        <article class="position-relative">
                            <span class="fa fa-paperclip position-absolute"></span>
                            <span class="fa fa-smile-o"></span>
                            <h2 class="mb-4 counter display-3  font-weight-bold text-warning">1800</h2>
                            <h5 class="text-uppercase font-weight-light pb-4 pb-lg-2 pb-xl-4"> zadovoljnih klijenata
                            </h5>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-4 mb-md-0 animation" data-animation ="slideUp" data-delay="0.6s">
                        <article class="position-relative">
                            <span class="fa fa-paperclip position-absolute"></span>
                            <span class="fa fa-bullseye"></span>
                            <h2 class="mb-4 counter display-3  font-weight-bold text-warning">50</h2>
                            <h5 class="text-uppercase font-weight-light pb-sm-4 pb-lg-0">razlicitih ukusa torti</h5>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-4 mb-md-0 animation" data-animation ="slideUp" data-delay="0.9s">
                        <article class="position-relative">
                            <span class="fa fa-paperclip position-absolute"></span>
                            <span class="fa fa-certificate"></span>
                            <h2 class="mb-4 counter display-3  font-weight-bold text-warning">35</h2>
                            <h5 class="text-uppercase font-weight-light pb-4 pb-md-5 pb-lg-4">vrsta kolaca</h5>
                        </article>
                    </div>
                </div>
                <!--counter ends here-->
            </div>
        </section>
        <!--SECTION ABOUT ENDS HERE-->

        <!--SECTION CONTACT STARTS HERE-->
        <section class="contact" id="contact">
            <div class="contact-wall  py-5">
                <h3 class="mb-5 display-4 text-center">Kontakt</h3>
                <div class="row no-gutters">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <article class="contact-data">
                            <h4>Adresa: <span>Cukovacka 3, Zemun</span></h4>
                            <hr>
                            <h4>Telefon:<span> +38164123456</span>
                                <span> +381112345678</span>
                            </h4>
                            <hr>
                            <h4>Radno vreme:
                                <ul class="list-unstyled">
                                    <li>pon-pet:07-17h</li>
                                    <li>sub: 07-15h</li>
                                    <li>ned:neradan dan</li>
                                </ul>
                            </h4>
                            <hr>
                        </article>
                    </div>
                    <div class="col-md-6 mb-5 mb-md-0">
                        <article class="map ">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.837922464771!2d20.404192015182662!3d44.84523397909848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a65afdf44de01%3A0x996283ef9791d26f!2s%C4%86ukova%C4%8Dka+3%2C+Beograd+11080!5e0!3m2!1sen!2srs!4v1566055285079!5m2!1sen!2srs"
                                frameborder="0" style="border:0" class="googlemap" allowfullscreen></iframe>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!--SECTION CONTACT ENDS HERE-->

    </main>
    <!--MAIN ENDS HERE-->

    <!--FOOTER STARTS HERE-->
    <footer class="bg-dark py-2 py-md-3 fixed-bottom">
        <div class="container text-center">
            <p class="small mb-0 text-warning font-italic">Made by Ana, Marija, Nina 2019.</p>
        </div>
    </footer>
    <!--FOOTER ENDS HERE-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--Custom pages JS-->
    <script src="js/jquery.waypoints.js" type="text/javascript"></script>
    <script src="js/counterup.js" type="text/javascript"></script>

    <!-- jQuery JS
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
 -->
    <!--All pages js-->
    <script src="js/main.js"></script>


<script type="text/javascript">

    $(document).ready(() => {
        let login = '<a class="nav-link" href="login.php"> Prijavite se <span class="fa fa-user"></span></a>';
        let logout = '<a class="nav-link" href="includes/logout.inc.php"> Odjava <span class="fa fa-user"></span></a>';
        let item = $('#item');
        $.post("includes/userExist.inc.php")
            .done(function (result) {
                if (result == 'true') {
                    item.append(logout);
                } else {
                    item.append(login);
                }
            });
    });

</script>
</body>
</php>
