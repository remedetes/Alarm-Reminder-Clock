<?php
@session_start();
include("admin/koneksi.php");
if($_POST){
$username = $_POST['username'];
$password = $_POST['password'];
$MD5 = MD5($password);
$sql = mysql_query("SELECT * FROM `admin` WHERE `username` LIKE '$username' AND `password` LIKE '$MD5'");
$_SESSION['username']="$_POST[username]";   
$row = mysql_fetch_array($sql);
if ($row==TRUE){
  echo"<script>alert('Selamat Datang $_SESSION[username]');document.location.href='admin/index.php';</script>";
}
// elseif ($row['hak']=='user'){
//   echo"<script>alert('Selamat Datang $_SESSION[username]');document.location.href='';</script>";
// }
else{
  echo"<script>alert('Gagal Login !');document.location.href='login.php';</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>CHANNEL BOLA ONLINE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="subject" content="CHANNEL BOLA ONLINE">
	<meta name="copyright" content="CHANNEL BOLA ONLINE">
	<meta name="language" content="Indonesia">
	<meta itemprop="name" content="CHANNEL BOLA ONLINE" />
	<!-- css -->
	<link href="img/img.png" rel="shortcut icon">
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />
	<link href="css/cubeportfolio.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />

	<!-- Theme skin -->
	<link id="t-colors" href="skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

	<!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

</head>

<body>
	<div id="wrapper">
		<!-- start header -->
		<header>
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<ul class="topleft-info">
								<li><i class="fa fa-envelope"></i> Email : channelbolaonline@email.com </li>
								<li><i class="fa fa-phone"></i> Call Center : 021 1234 5678</li>
							</ul>
						</div>
						<div class="col-md-6">
							<div id="sb-search" class="sb-search">
								<form action="cari.php" method="GET" >
								<input class="sb-search-input" placeholder="Cari Pelatihan..." type="text" value="" name="cari" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search" title="Cari Pelatihan"></span>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
						<a class="navbar-brand" href="index.php"><img src="img/logo.png" width="100%" /></a>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="eropa.php">Liga Eropa</a></li>
							<li><a href="indonesia.php">Liga Indonesia</a></li>
							<li><a href="profil.php">Tentang Kami</a></li>
							<li class="active"><a href="login.php">Login</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->
		<section id="content">
			<div class="container">

				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
						<form role="form" class="register-form" method="post" action="login.php">
							<h2>Login <small>Admin</small></h2>
							<hr class="colorgraph">

							<div class="form-group">
								<input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" tabindex="4">
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control input-lg" id="exampleInputPassword1" placeholder="Password">
							</div>

							<div class="row">
								<div class="col-xs-4 col-sm-3 col-md-3">
									<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">Remember me</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
								</div>
							</div>

							<hr class="colorgraph">
							<div class="row">
								<div class="col-xs-12 col-md-6"><input type="submit" value="Login" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</section>

		<footer>
			<div class="container">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="copyright">
								<p>© 2019 CHANNEL BOLA ONLINE.COM</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/uisearch.js"></script>
	<script src="js/jquery.cubeportfolio.min.js"></script>
	<script src="js/google-code-prettify/prettify.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>


</body>

</html>
