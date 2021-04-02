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
	<link href="img/slide22.jpg" rel="shortcut icon">
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
						          <a class="dropdown-item" href="#mu-lokasi">Lokasi</a>
						          <a class="dropdown-item" href="#">FAQ</a>
						          <a class="dropdown-item" href="#mu-contact">Kontak</a>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->
		<section id="featured" class="bg">
			<!-- start slider -->
			<!-- start slider -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!-- Slider -->
						<div id="main-slider" class="main-slider flexslider">
							<ul class="slides">
								<li>
									<img src="img/slides/flexslider/4.jpg" alt="" />
									<div class="flex-caption">
										<h3>Pusat Pelatihan Dan Pendidikan ANRI</h3>
									</div>
								</li>
								<li>
									<img src="img/slides/flexslider/sampul3.jpg" alt="" />
									<div class="flex-caption">
										<h3>Staff Karyawan Pusat Pendidikan dan Pelatihan ANRI</h3>
									</div>
								</li>
								<li>
									<img src="img/slides/flexslider/sampul 1.jpg" alt="" />
									<div class="flex-caption">
										<h3>Kegiatan Pelatihan dan Pendidikan ANRI</h3>
									</div>
								</li>
								<!-- <li>
									<img src="img/slides/flexslider/4.jpg" alt="" />
									<div class="flex-caption">
										<h3>Ole Gunnar Solskjaer Tunggu Kepulangan Satu Pemain Muda Manchester United</h3>
									</div>
								</li>
								<li>
									<img src="img/slides/flexslider/5.jpg" alt="" />
									<div class="flex-caption">
										<h3>Daniele De Rossi Resmi Tinggalkan AS Roma</h3>
									</div>
								</li> -->
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="text-center">
							<h2><span class="highlight">Selamat Datang</span> di Web PUSDIKLAT ANRI BOGOR</h2>
							<p>Website PUSDIKLAT ini dibuat untuk memenuhi segala kebutuhan PUSDIKLAT</p>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						
						<?php
			            $limit = 3;
			            if(isset($_GET['page'])){
			              $page = anti_injection($_GET['page']);
			            }else{
			              $page = 1;
			            }
			            $offset = ($page - 1) * $limit; 
			            $sql = "SELECT * FROM `berita` ORDER BY `id_berita` DESC";
			            $query = mysql_query($sql." LIMIT $offset, $limit");
			            $total = mysql_num_rows(mysql_query($sql));
			            while ($row = mysql_fetch_array($query)):
			            ?>

						<article>
							<div class="post-image">
								<div class="post-heading">
									<h3><a href="detail.php?id=<?php echo $row['id_berita'];?>">
										<?php echo $row['judul'];?></a></h3>
								</div>
								<?php
								echo '<img class=img-responsive src="admin/img/berita/'.$row['picture'].'" width=100%>';
								?>
							</div>
							<p>
								<?php echo potong_kata(strip_tags($row['deskripsi']),200);?>
							</p>
							<div class="bottom-article">
								<ul class="meta-post">
									<li>
										<i class="fa fa-comments"></i><a href="detail.php?id=<?php echo $row['id_berita'];?>">Komentar</a>
									</li>
									<li>
										<i class="fa fa-user"></i><a href="#"><?php echo $row['nama_admin'];?></a>
									</li>
									<li>
										<i class="fa fa-list"></i><a href="#"><?php echo $row['kategori'];?></a>
									</li>
								</ul>
								<a href="detail.php?id=<?php echo $row['id_berita'];?>" class="readmore pull-right">Selengkapnya <i class="fa fa-angle-right"></i></a>
							</div>	
						<?php
						endwhile;
						?>
						</article>

						<div id="pagination">
						<?php pagination_new($total, $page, $limit, '#', '?page='); ?>
						</div>
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


<section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">
            <div class="mu-title">
              <span class="mu-subtitle"></span>
              <h2>Hubungi Kami</h2>
              <!-- <i class="fa fa-certificate"></i>   -->            
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-contact-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="mu-contact-left">
                    <form class="mu-contact-form">
                      <div class="form-group">
                        <label for="name">Nama Anda</label>
                        <input type="text" class="form-control" id="name" placeholder="Nama">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                      </div>                      
                      <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                      </div>
                      <div class="form-group">
                        <label for="message">Pesan</label>                        
                        <textarea class="form-control" id="message" cols="30" rows="10" placeholder="Masukan pesan"></textarea>
                      </div>                      
                      <button type="submit" class="mu-send-btn">Kirim Pesan</button>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">
                      <h3><b>PUSDIKLAT ANRI</b> </h3>
                      <!-- <p>Pusdiklat Kearsipan ANRI terdapat di Jl. Ir. Juanda No.62 Paledang, Kecamatan Bogor Tengah
                      Kota Bogor, Jawa Barat 16122 - Indonesia</p> -->
                      <address>
                        <p><i class="fa fa-phone"></i>     (0251) 8322 331</p>
                        <p><i class="fa fa-envelope-o"></i>    www.pusdiklat.anri.go.id</p>
                        <p><i class="fa fa-map-marker"></i>       Jl. Ir. Juanda No.62 Paledang, Kecamatan Bogor Tengah
                      Kota Bogor, Jawa Barat 16122 - Indonesia</p>
                      </address>
                    </div>

                    <section id="mu-lokasi">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3394793499706!2d106.79288421449682!3d-6.604668666400031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5c782e37d2f%3A0x446fe796b884d774!2sPusdiklat+Kearsipan+Arsip+Nasional+RI!5e0!3m2!1sid!2sid!4v1562915155836!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></section>
                   <!--  <div class="mu-contact-widget">
                      <h3>Open Hours</h3>                      
                      <address>
                        <p><span>Monday - Friday</span> 9.00 am to 12 pm</p>
                        <p><span>Saturday</span> 9.00 am to 10 pm</p>
                        <p><span>Sunday</span> 10.00 am to 12 pm</p>
                      </address>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section --

  <!-- Start Footer -->

  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
   <!--      <div class="mu-footer-area" align="center">
           <div class="mu-footer-social">
            <a href="#"><span class="fa fa-facebook" alig></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-google-plus"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-youtube"></span></a>
          </div> -->
          <div class="mu-footer-copyright">
            <p align="center">2019 Copyright © Pusat Pendidikan Dan Pelatihan Kearsipan ANRI</a></p>
          </div>         
        </div>
      </div>
      </div>
    </div>
  </footer>

		<!-- <footer>
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
		</footer> -->
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

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
