<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Sistem Informasi Posyandu Apel Desa Sukamanah</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<?php require_once('config/koneksi.php');
	require_once('session.php');
	?>
	<body>
		<header>

			<!-- <div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
						</div>
					</div>
				</div>
			</div>
			<div class="logo-wrap">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
							<a href="index.html">
								<img class="img-fluid" src="img/logo.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div> -->
			<div class="container main-menu" id="main-menu">
				<div class="row align-items-center justify-content-between">
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<?php if($_SESSION!=null){
								if($akses=='user'){ ?>
							<li class="menu-active"><a href="index.php">Home</a></li>
							<li><a href="data-balita.php">Data Balita</a></li>
							<li><a href="imunisasi.php">Catatan Imunisasi</a></li>
						    <li><a href="perkembangan-balita.php">Perkembangan Balita</a></li>
						<?php } }else{ ?>
							<li class="menu-active"><a href="index.php">Home</a></li>
						<?php } ?>
					    </ul>
					</nav><!-- #nav-menu-container -->
					<div class="navbar-right">
                        <ul class="nav-menu">
                            <!-- <li><a href="">Azka</a></li>
                            <li><a href="logout.php">Logout</a></li> -->
							<?php if($_SESSION!=null){
								if($akses=='user') { ?>
							<li><a href=""><?php echo $namau ?></a></li>
							<li><a href="logout.php">Logout</a></li>
						<?php } }else{ ?>
							<li><a href="login.php">Login</a></li>
						<?php } ?>
                        </ul>
					</div>
				</div>
			</div>
		</header>