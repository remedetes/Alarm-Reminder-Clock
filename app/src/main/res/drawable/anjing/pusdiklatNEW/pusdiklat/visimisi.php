<?php 
include 'admin/koneksi.php';
include 'fungsi.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>anri</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="subject" content="CHANNEL BOLA ONLINE">
	<meta name="copyright" content="CHANNEL BOLA ONLINE">
	<meta name="language" content="Indonesia">
	<meta itemprop="name" content="CHANNEL BOLA ONLINE" />
	<!-- css -->
	<link href="img/slide22.png" rel="shortcut icon">
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />
	<link href="css/cubeportfolio.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<!-- Theme skin -->
	<link id="t-colors" href="skins/default.css" rel="stylesheet" />
	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="wrapper">
		<!-- start header -->
		<header>
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<ul class="topleft-info">
								<a class="fa fa" href="index.php"><img src="img/slides/flexslider/logoANRI.png" width="65%" align="right" /></a>
								</div>
								<div class="col-md-12">
								<p align="center"> 
									<b>PUSAT PENDIDIKAN DAN PELATIHAN KEARSIPAN (www.pusdiklat.anri.go.id)</p></b>
							</ul>
						</div>
						<!-- <div class="col-md-6">
							<div id="sb-search" class="sb-search">
								<form action="cari.php" method="GET" >
								<input class="sb-search-input" placeholder="Cari Pelatihan..." type="text" value="" name="cari" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search" title="Cari Pelatihan"></span>
								</form>
							</div>
						</div> -->
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
						
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Serambi</a></li>
							<li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Profil
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						          <a class="dropdown-item" href="sejarah.php">Sejarah</a>
						          <a class="dropdown-item" href="visimisi.php">Visi & Misi</a>
						          <a class="dropdown-item" href="tugas&fungsi.php">Tugas Dan Fungsi</a>
						          <a class="dropdown-item" href="#">Struktur Organisasi</a>
						          <!-- <a class="dropdown-item" href="#">Sumber Daya Manusia <i class="icon-angle-right"></i></a> -->
						          	<div class="dropdown">
									  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    Sumber Daya Manusia
									  </a>

									  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									    <a class="dropdown-item" href="#">Pejabat Struktural</a>
									    <a class="dropdown-item" href="#">Fungsional Umum</a>
									    <a class="dropdown-item" href="#">Fungsional Tertentu</a>
									  </div>
										</div>
						        		</a>
						          
						        </div>
						     </li>
							<li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Pendidikan Dan Pelatihan
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						          <a class="dropdown-item" href="#">Kalender Diklat</a>
						          <a class="dropdown-item" href="#">Program Diklat</a>
						          <a class="dropdown-item" href="#">Persyaratan Diklat</a>
						          <a class="dropdown-item" href="#">E-Registrasi</a>
						          <a class="dropdown-item" href="#">Daftar Peserta Lolos Seleksi</a>
						          <!-- <a class="dropdown-item" href="#">E-Learning</a> -->

						          <div class="dropdown">
									  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    E-Learning
									  </a>

									  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									    <a class="dropdown-item" href="#">Login</a>
									  </div>

						        </div>
						     </li>
							<li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Publikasi
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						          <a class="dropdown-item" href="#">Pengumuman</a>
						          <a class="dropdown-item" href="berita.php">Berita</a>
						          <a class="dropdown-item" href="#">Artikel</a>
						          <a class="dropdown-item" href="#">Jurnal</a>
						          <a class="dropdown-item" href="#">Infografis</a>
						          <a class="dropdown-item" href="https://jdih.anri.go.id/">JDIH</a>
						          <a class="dropdown-item" href="https://www.anri.go.id/eppid/home/profil">PPID</a>
						          
						        </div>
						     </li>
							<li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Sarana Dan Prasarana
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						          <a class="dropdown-item" href="#">Galeri Foto</a>
						          <a class="dropdown-item" href="#">Prasarana & Sarana</a>
							<li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Hubungi Kami
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						          <a class="dropdown-item" href="lokasi.php">Lokasi</a>
						          <a class="dropdown-item" href="#">FAQ</a>
						          <a class="dropdown-item" href="#mu-contact">Kontak</a>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- <section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a></li>
							<li class="active">Tentang Kami</li>
						</ul>
					</div>
				</div>
			</div>
		</section> -->

		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<h3 class="widgetheading">Visi & Misi PUSDIKLAT ANRI</h3><hr>
						<article>
						<b>VISI</b>
							<p>
								<p align="justify">
								Menjadi pusat unggulan dan mitra strategis dalam pengembangan
kompetensi dan profesionalitas sumber daya manusia kearsipan.
Pengertian sebagai pusat unggulan dan mitra strategis adalah bahwa
keberadaan dan produk yang dihasilkan Pusdiklat Kearsipan diakui,
dibutuhkan dan dijadikan sebagai alternatif utama oleh pelanggan, baik
tingkat nasional, regional, maupun internasional.</p><br><br>

<b>MISI</b>
<br><br>
<p align="justify">
<li>Mengembangkan program pendidikan dan pelatihan kearsipan sesuai
kebutuhan dan perkembangan lingkungan strategis.</li>
<li>Menyelenggarakan pendidikan dan pelatihan kearsipan secara
akuntabel dan profesional.
<li>Melaksanakan kerja sama yang saling mendukung dengan instansi lain
dalam penyelenggaraan pendidikan dan pelatihan kearsipan.</li></p><br><br>


<b>TUJUAN</b>
<br><br>
<li>Merancang program diklat kearsipan sesuai tuntutan kompetensi dan
kebutuhan.
<li>Menyusun perangkat lunak kediklatan kearsipan.
<li>Melaksanakan tata kelola penyelenggaraan diklat kearsipan sesuai
peraturan perundang-undangan dan norma, standar, prosedur, dan
kriteria kediklatan.
<li>Meningkatkan tenaga kediklatan sesuai standar kompetensi.
<li>Menyediakan prasarana dan sarana kediklatan sesuai standar dan
kebutuhan.
<li>Melaksanakan koordinasi dan sinkronisasi penyelenggaraan diklat
kearsipan dengan instansi lain.
<li>Melaksanakan evaluasi penyelenggaraan diklat kearsipan.


							</p>
						</article>
						<div class="clear"></div>
					</div>

					<div class="col-lg-4">
						<aside class="right-sidebar">
							<div class="widget">
								<h3 class="widgetheading">Terbaru</h3>
								<ul class="cat">
									<img src="img/slide22.jpg" width="100%"/>
									<img src="img/slide22.jpg" width="100%"/>
									<img src="img/slide22.jpg" width="100%"/>
									<img src="img/slide22.jpg" width="100%"/>
								</ul>
							</div>
						</aside>
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
								<p>© 2019 WEB PUSDIKLAT ANRI</p>
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
	<script src="plugins/flexslider/jquery.flexslider-min.js"></script>
	<script src="plugins/flexslider/flexslider.config.js"></script>
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
