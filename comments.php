<?php
require 'header.php';

?>

    <!--MAIN STARTS HERE-->
    <main style="background-image: url('images/assets/pink1.jpg')" class="comments-main">
       <!--SECTION COMMENTS-SWEET-WALL STARTS HERE-->
            <section class="comments-sweet-wall">
                <div class="main-comments-info opacityEntrance p-3 position-absolute text-center pinkdark">
                    <h1 class="mb-3 mb-md-5 ">Dobrodosli na blog Sweet Cakes!</h1>
                    <h5 class="mb-0 ">Ovde možete da pročitate nešto više o tortama, saznate o procesu proizvodnje,
                        malim tajnama koje nas čine izuzetnim.</h5>
                </div>
            </section>
        <!--SECTION COMMENTS-SWEET-WALL ENDS HERE-->

        <!--SECTION COMMENTS-WRAPPER STARTS HERE-->

        <section class="comment-wrapper mb-3 mb-sm-4 container">

            <!--FORMA COMMENT-FORM starts here-->
            <form class="comments-form zoom p-1 mb-3 mb-sm-4" method="GET" action="">
                <div class="row justify-content-between no-gutters">
                    <div class="col-md-7 col-xl-8">
                        <div class="form-group">
                            <input type="text" class="form-control" name="message" placeholder="Ostavi komentar"
                                value="">
                            <div class="error-msg"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="author" placeholder="Ime..." value="">
                            <div class="error-msg"></div>
                        </div>
                    </div>
                    <div class=" col-5 col-xm-4 col-md-2 col-xl-1">
                        <button type="submit" name="addNewComment" class="btn btn-warning text-white">Pošalji</button>
                    </div>

                </div>
            </form>
            <!--FORMA COMMENT-FORM ends here-->

            <!--COMMENT INNER STARTS HERE-->
            <div class="comment-inner">
                <article class="comment-item mb-3 p-3">
                    <h6 class="commentator">Jelena11</h6>
                    <p class="date small mb-2">
                        <span class="text-secondary">12.01.2019.</span>
                    </p>
                    <p class=" mb-2">Torte bas lepo izgledaju. Interesuje me kako se narucuju?</p>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="likes-counter">
                                <a href="#" class="like-comment mb-1 mb-md-0 mr-2">
                                    <span class="fa fa-smile-o text-success"> 220</span>
                                </a>
                                <a href="#" class="dislike-comment mb-1 mb-md-0">
                                    <span class="fa fa-frown-o text-danger"> 5</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <form method="GET" action="" class="form-inline comments-item-form justify-content-between align-items-start py-2">
                                <div class="form-group w-75">
                                    <input type="text" name="answer" class="form-control w-100 mb-md-0"
                                        placeholder="Odgovori">
                                    <div class="error-msg"></div>
                                </div>
                                <button type="submit" class="btn btn-warning text-white ml-md-5">Pošalji</button>
                            </form>
                        </div>
                    </div>
                </article>
            </div>
            <div class="comment-inner">
                <article class="comment-item mb-3 p-3">
                <?php

/* 
    Ovaj fajl predstavlja nesto drugacije organizovan deo iscitavanja podataka iz baze 
    koji je opisan u fajlu intro.php. Zbog toga sadrzi samo komentare koji se odnose na razliku
    ovih fajlova. 
*/

$connection = mysqli_connect('localhost', 'root', '', 'register');
if (mysqli_connect_errno()) {
    echo 'There is a problem with connection: ' . mysqli_connect_error();
} else {

    $query = "SELECT * FROM comments";
    $result = mysqli_query($connection, $query);
    if ($result == false) {
        echo 'Error with the query: ' . mysqli_error($connection);
    } else {

        /* 
        Jos jedan nacin za dohvatanje rezultata izvrsenog upita je pomocu funkcije
        mysqli_fetch_all koja nam omogucava da za razliku od mysqli_fetch_assoc funkcije
        (kojom dohvatamo samo jedan red rezultata) dohvatimo sve redove odjednom. 
        Zato je rezultat ove funkcije niz asocijativnih nizova (MYSQLI_ASSOC argument to naglasava).
        */
        $all_comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

        /* Broj postova se moze dobiti kao broj elemenata niza. */
        $number_of_comments = count($all_comments);

        for ($i = 0; $i < $number_of_comments; $i++) {
            
            /* 
            Pojedinacni postovi su elementi niza. Tako je $all_posts[0] nulti post, $all_posts[1]
            prvi post, ... Svi ovi elementi (postovi) su sami po sebi asocijativni nizovi. 
            To se najbolje moze proveriti izvrsavanjem print_r($all_post[i]) naredbe. 
            */
            // echo "<div class='comment-inner'>";
            echo "<article class='comment-item mb-3 p-3'>";
            $postedComment = $all_comments[$i];
            // echo "</div>";
            
            echo "<h6 class='commentator'>" . $postedComment['author'] . " </h6>";
            echo "<small class='date small mb-2'> Created " . "<span class='text-secondary'>".$postedComment['created_at'] ."</span>". "</small>";
            echo "<p class='mb-2'>" . $postedComment['content'] . " </p>";
            echo "</article>";
            // echo "</div>";
            // $post_id = $post['id'];
            // echo "<p> <a href='post.php?id=$post_id'> Read more </a></p>";
            // echo "</div>";
        }
    }

    mysqli_close($connection);
}
?>
                    
                    
                        
    
                   
                    <!-- <div class="row">
                        <div class="col-md-9">
                            <div class="likes-counter">
                                <a href="#" class="like-comment mb-1 mb-md-0 mr-2">
                                    <span class="fa fa-smile-o text-success"> 220</span>
                                </a>
                                <a href="#" class="dislike-comment mb-1 mb-md-0">
                                    <span class="fa fa-frown-o text-danger"> 5</span>
                                </a>
                            </div>
                        </div> -->
                        <div class="col-md-9">
                            <form method="GET" action="" class="form-inline comments-item-form justify-content-between align-items-start py-2">
                                <div class="form-group w-75">
                                    <input type="text" name="answer" class="form-control w-100 mb-md-0"
                                        placeholder="Odgovori">
                                    <div class="error-msg"></div>
                                </div>
                                <button type="submit" class="btn btn-warning text-white ml-md-5">Pošalji</button>
                            </form>
                        </div>
                    </div>
                </article>
            </div>
              <!--COMMENT INNER ENDS HERE-->
        </section>
        <!--SECTION COMMENTS-WRAPPER ENDS HERE-->

        <?php
        /* Ako je korisnik kliknuo na submit dugme za dodavanje posta. */
        if (isset($_GET['addNewComment'])) {

            /* Uspostavljamo konekciju sa MySQL serverom. */
            $connection = mysqli_connect('localhost', 'root', '', 'register');
            if (mysqli_connect_errno()) {
                echo 'There is problem with connection: ' . mysqli_connect_error();
            } else {

                /* Promenljiva koja cuva informaciju o pojavi greske. */
                $error = false;

                $author = mysqli_real_escape_string($connection, $_GET['author']);                
                $content = mysqli_real_escape_string($connection, $_GET['message']);
                $uname = mysqli_real_escape_string($connection, $_SESSION['userUid']);
                

                /* Konstante koje ogranicavaju duzinu unosa. Kada naucimo da radimo sa 
                include direktivom ove kontatne cemo moci da izdvojimo u zaseban konfiguracioni fajl. */
                
                define("MAX_CONTENT_LENGTH", 10000);
                define("MAX_AUTHOR_LENGTH", 200);
               

                /* Provera sadrzaja. */
                if (empty($content) || strlen($content)> MAX_CONTENT_LENGTH) {
                    $error = true;
                }

                /* Provera imena autora. */
                if (empty($author) || strlen($author)> MAX_AUTHOR_LENGTH) {
                    $error = true;
                }

                /* Provera teme. */
                // if (!isset($_GET['topic'])) {
                //     $error = true;
                // } else {
                //     $topic = mysqli_real_escape_string($connection,  $_GET['topic']);
                //     if ($topic != "php" && $topic != "js" && $topic != "programming") {
                //         $error = true;
                //     }
                // }

                /* Ako je primecena greska u procesu validacije, ispisuje se poruka o gresci! */
                if ($error) {
                    echo "<div class='alert alert-dismissible alert-danger'>";
                    echo "<strong>Please, fill out the form correctly! </strong> ";
                    echo "</div>";
                } else {
                    /* Inace, dodaje se novi post. */

                    /* Formiramo insert upit kojim prosledjene podatke upisujemo u bazu. */
                    $query = "INSERT INTO comments (content, author, username) VALUES ('$content', '$author', '$uname')";

                    /* Izvrsavamo upit. Rezultat izvrsavanja moze biti true ili false vrednost. */
                    $result = mysqli_query($connection, $query);

                    if ($result == false) {
                        /* Ako je rezultat false, doslo je do greske. */
                        echo "<div class='alert alert-dismissible alert-danger'>";
                        echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";

                        echo "<strong>Error with the query: </strong> " . mysqli_error($connection);
                        echo "<br>";
                        echo "<strong>Please try later! </strong>";
                        echo "</div>";
                    } else {
                        /* Ako je rezultat true, unos je uspesan. */
                        echo "<div class='alert alert-dismissible alert-secondary'>";
                        echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";

                        echo '<strong>Congrats! You have added a new post!</strong>';
                        echo "<br>";

                        /* Posebno, pomocu funkcije mysqli_insert_id dobijamo vrednost identifikatora koji 
                        je pridruzen novom postu i formiramo link koji vodi do njega. */
                        $post_id = mysqli_insert_id($connection);
                        echo "<a href='post.php?id=$post_id'>Click here to read </a>";

                        echo "</div>";
                    }
                  
                }

                

                /* Zatvaramo konekciju. */
                mysqli_close($connection);
            }
        }
        ?>
    </div>


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

    <!--All pages js-->
    <script src="js/main.js"></script>
</body>

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

</html>
