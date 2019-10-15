<html lang="en">
<head>
  <title>PHP CRUD</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 

  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
</head>
<body>
     <!--HEADER STARTS HERE-->
     <header class="fixed-top py-0 mb-5">
        <div class="container">
            <nav class="navbar navbar-expand-md  p-0 ">
                <a class="navbar-brand py-0" href="#">
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
                            <a class="nav-link" href="index.html#beggin">Naslovna <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">O nama</a>
                        </li>
                        <li class="nav-item position-relative">
                            <a class="nav-link" href="cakes.html">Torte
                                <span class="fa fa-caret-down position-absolute"></span> </a>
                            <!--SUBMENU STARTS HERE-->
                            <ul class="submenu list-unstyled">
                                <li class="submenu-item">
                                    <a href="cakes_kids.html" class="submenu-link ">Za decu</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="cakes_18th.html" class="submenu-link ">Za 18.rodjendan</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="cakes_wedding.html" class="submenu-link">Za vencanje</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="cakes_creative.html" class="submenu-link">Razni oblici</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="cakes_adults.html" class="submenu-link ">Svecane</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="my_cookie.html" class="submenu-link">Kolaci</a>
                                </li>
                            </ul>
                            <!--SUBMENU ENDS HERE-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Komentari</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#contact">Kontakt</a>
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
    <main style="background-image: url('images/assets/pink1.jpg')" class="comments-main">
        <!--SECTION BLOG-SWEET STARTS HERE-->
        <section class="comments-sweet">
            <div class="comments-sweet-wall">
                <div class="main-comments-info p-3 position-absolute text-center pinkdark">
                    <h1 class="mb-5 ">Dobrodosli na blog Sweet Cakes!</h1>
                    <h5 class="mb-0 ">Ovde možete da pročitate nešto više o tortama, saznate o procesu proizvodnje,
                        malim tajnama koje nas čine izuzetnim.</h5>
               
                </div>
            </div>

        </section>
        <!--SECTION MAIN-SWEET ENDS HERE-->
        <?php require_once 'process.php'; ?>

<?php
if (isset($_SESSION['message'])) : ?>


<?php endif ?>
<div class="form-inline justify-content-center">
<section class="comment-wrapper mb-3 mb-sm-4 container">
    <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="comments-form p-1 mb-3 mb-sm-4">
    <div class="row justify-content-between no-gutters">
    <div class="col-md-7">
    <div class="form-group">
        <label for="">Comment</label>
        <input type="text" name="comment" class="form-control" value="<?php echo $comment; ?>" placeholder="Enter your comment">
      </div>
      <div class="col-md-3">
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $name; ?> "placeholder="Enter your name">
      </div>
      </div>
      <div class="form-group">
      <?php
      if ($update == true) :
      ?>
          <button type="submit" class="btn btn-warning text-white ml-md-5" name="update">Update</button>
        <?php else : ?>
          <button type="submit" class="btn btn-warning text-white ml-md-5" name="save">Save</button>
        <?php endif; ?>
      </div>
    </form>
    <?php
  $mysqli = new mysqli('localhost', 'root', '', 'register') or die(mysqli_error($mysqli));
  $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
        //pre_r($result);          
  ?>

  <div class="row justify-content-center">
    <table class="table">
      <thead>
        <tr>
         
          <th>Comment</th>
          <th>Name</th>
          <th colspan="2"></th>
        </tr>
      </thead>


      <?php
      while ($row = $result->fetch_assoc()) : ?>
        <tr>
          
          <td> <?php echo $row['comment']; ?></td>
          <td> <?php echo $row['name']; ?></td>
          <td> <?php echo $row['times']; ?></td>
          <td>
            <a href="comments.php?edit=<?php echo $row['id']; ?>" class="btn btn-warning text-white ml-md-5">Edit</a>
            <a href="comments.php?delete=<?php echo $row['id']; ?>" class="btn btn-warning text-white ml-md-5">Delete</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </table>
  </div>

  <?php
  function pre_r($array)
  {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
  }
  ?>

      </div>
      </div>
      </div>
      </section>
     
     
     
  </div>

<div class="container">
          
    </main>
    <!--MAIN ENDS HERE-->


 
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
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