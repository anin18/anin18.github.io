<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!--Fancybox CSS-->
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">

	<!--Custom page CSS-->
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/animation.css">

	<!--Hamburger menu CSS-->
	<link href="css/hamburgers.css" rel="stylesheet">

	<!--Font Awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<title>Kolaci</title>
</head>

<body>
	<!--HEADER STARTS HERE-->
	<header class="fixed-top py-0 bg-none">
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
							<a class="nav-link " href="index.php#beggin">Naslovna <span
									class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a href="index.php#about" class="nav-link">O nama</a>
						</li>
						<li class="nav-item position-relative cake-nav">
							<a class="nav-link active" href="cakes.php">Torte
								<span class="fa fa-caret-down position-absolute"></span> </a>
							 <!--SUBMENU STARTS HERE-->
							 <ul class="submenu submenu-visible list-unstyled">
                                <li class="submenu-item">
                                    <a href="cakes_kids.php" class="submenu-link cake_kids">Za decu</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="cakes_18th.php" class="submenu-link cake_18th">Za 18.rodjendan</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="cakes_wedding.php" class="submenu-link cake_wedding">Za vencanje</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="cakes_creative.php" class="submenu-link cake_creative">Razni oblici</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="cakes_adults.php" class="submenu-link cake_adult">Svecane</a>
                                </li>
                                <li class="submenu-item submenu-item-active">
                                    <a href="my_cookie.php" class="submenu-link" href="#">Kolaci</a>
                                </li>
                            </ul>
                            <!--SUBMENU ENDS HERE-->
						</li>
						<li class="nav-item">
							<a class="nav-link" href="comments.php">Komentari</a>
						</li>
						<li class="nav-item">
							<a href="index.php#contact" class="nav-link">Kontakt</a>
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
	<main style="background-image: url('images/assets/pink1.jpg')">
		<div class="container pb-5 text-center my-cookie">
			<h1 class="display-3 cake-title">Kolači - posni i mrsni</h1>

			<div class="row no-gutters cakes">
				<div class="col-sm-6 col-md-3 col-lg-2">
					<a href="images/big/cookie/cookie1.jpg" data-fancybox="gallery">
						<img src="images/thumbs/cookie/cookie1.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-2">
					<a href="images/big/cookie/cookie2.jpg" data-fancybox="gallery">
						<img src="images/thumbs/cookie/cookie2.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-2">
					<a href="images/big/cookie/cookie3.jpg" data-fancybox="gallery">
						<img src="images/thumbs/cookie/cookie3.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-2">
					<a href="images/big/cookie/cookie2.jpg" data-fancybox="gallery">
						<img src="images/thumbs/cookie/cookie2.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-2">
					<a href="images/big/cookie/cookie5.jpg" data-fancybox="gallery">
						<img src="images/thumbs/cookie/cookie5.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-2">
					<a href="images/big/cookie/cookie6.jpg" data-fancybox="gallery">
						<img src="images/thumbs/cookie/cookie6.jpg" alt="">
					</a>
				</div>			
				
			</div>
		</div>
		<br><br><br><br><br>
	</main>
	<!--MAIN ENDS HERE-->


	<!--FOOTER STARTS HERE-->
	<footer class="bg-dark py-2 py-md-3">
		<div class="container text-center">
			<p class="small mb-0 text-warning font-italic">Made by Ana, Marija, Nina 2019.</p>
		</div>
	</footer>
	<!--FOOTER ENDS HERE-->


	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>

		<!--Fancybox js-->
		<script src="js/jquery.fancybox.min.js"></script>

	<!--All pages js-->
	<script src="js/main.js"></script>
</body>

<script type="text/javascript">

	$(document).ready(() => {
		let login = '<a class="nav-link" href="login.php"> Prijavite se <span class="fa fa-user"></span></a>';
		let logout = '<a class="nav-link" href="includes/logout.inc.php">Odjava <span class="fa fa-user"></span></a>';
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