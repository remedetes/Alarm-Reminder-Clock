<?php 
include 'admin/koneksi.php';
include 'fungsi.php';
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
							<li class="active"><a href="profil.php">Tentang Kami</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->
		<section id="inner-headline">
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
		</section>

		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<h3 class="widgetheading">Profil Bank DKI</h3><hr>
						<article>
							<p>
								Bank DKI merupakan Bank Umum dan Badan Usaha Milik Daerah yang kepemilikan sahamnya dimiliki oleh Pemerintah Provinsi DKI Jakarta dan PD Pasar Jaya.
							</p>
							<table width="95%" border="0" align="center" style="font-size: 14; border-collapse: collapse;"> 
								<tr>
									<td>Nama</td>
									<td width="15%" align="center">:</td>
									<td>PT Bank DKI</td>
								</tr>
								<tr>
									<td>Call Sign</td>
									<td align="center">:</td>
									<td>Bank DKI</td>
								</tr>
								<tr>
									<td>Bidang Usaha</td>
									<td align="center">:</td>
									<td>Perbankan</td>
								</tr>
								<tr>
									<td>Kelompok Usaha</td>
									<td align="center">:</td>
									<td>Bank Umum Kelompok Usaha 3</td>
								</tr>
								<tr>
									<td>Domisili</td>
									<td align="center">:</td>
									<td>Jakarta</td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td align="center">:</td>
									<td>Gedung Prasada Sasana Karya Jl. Suryopranoto No.8 Jakarta Pusat 10130</td>
								</tr>
								<tr>
									<td>Telepon</td>
									<td align="center">:</td>
									<td>021 - 806 55555</td>
								</tr>
								<tr>
									<td>Faksimili</td>
									<td align="center">:</td>
									<td>021 - 806 55000</td>
								</tr>
								<tr>
									<td>Call Center</td>
									<td align="center">:</td>
									<td>1500 351</td>
								</tr>
								<tr>
									<td>Homepage</td>
									<td align="center">:</td>
									<td>www.bankdki.co.id</td>
								</tr>
								<tr>
									<td>Email</td>
									<td align="center">:</td>
									<td>corsec@bankdki.co.id</td>
								</tr>
								<tr>
									<td>Hasil Pemeringkatan</td>
									<td align="center">:</td>
									<td>AA-(Double A minus; Stable Outlook)</td>
								</tr>
								<tr>
									<td>Tanggal Berdiri</td>
									<td align="center">:</td>
									<td>11 April 1961</td>
								</tr>
								<tr>
									<td>Tanggal Beroperasi</td>
									<td align="center">:</td>
									<td>11 April 1961</td>
								</tr>
								<tr>
									<td>Dasar Hukum</td>
									<td align="center">:</td>
									<td>Akta Perseroan Terbatas Perusahaan Bank Pembangunan Daerah Djakarta Raya (PT Bank Pembangunan Daerah Djakarta Raya) No. 30 tanggal 11 April 1961 dibuat oleh dan dihadapan Eliza Pondaag S.H., Notaris di Jakarta</td>
								</tr>
								<tr>
									<td>Modal Dasar</td>
									<td align="center">:</td>
									<td>Rp11.500.000.000.000,-</td>
								</tr>
								<tr>
									<td>Modal Disetor</td>
									<td align="center">:</td>
									<td>Rp 4.431.159.000.000,-</td>
								</tr>
								<tr>
									<td>NPWP</td>
									<td align="center">:</td>
									<td>01.000.515.5-073.000</td>
								</tr>
								<tr>
									<td>TDP</td>
									<td align="center">:</td>
									<td>09.05.1.65.37504</td>
								</tr>
								<tr>
									<td>SIUP</td>
									<td align="center">:</td>
									<td>BUM.9-2-42</td>
								</tr>
								<tr>
									<td>Pemegang Saham</td>
									<td align="center">:</td>
									<td>Pemerintah Daerah DKI Jakarta (99,98%)<br>
  										PD Pasar Jaya (0,02%)</td>
								</tr>
								<tr>
									<td>Bursa Terdaftar</td>
									<td align="center">:</td>
									<td>Bursa Efek Indonesia</td>
								</tr>
							</table>
							<hr>
							<p>
								Sesuai amanat dalam Anggaran Dasar sebagaimana telah diperbaharui dengan Akta Pernyataan Keputusan Rapat Umum Pemegang Saham Tahunan PT Bank DKI No 30 tanggal 15 April 2016 dibuat oleh dan dihadapan Ashoya Ratam, SH, MKn, Notaris di Jakarta, Bank DKI bergerak di bidang usaha perbankan sesuai dalam Peraturan dan Perundang-undangan.<br><br>

<b>Kegiatan Usaha</b>
<br><br>
Untuk itu Bank DKI melakukan berbagai kegiatan usaha, diantaranya:<br>

<li>Menghimpun dana dari masyarakat dalam bentuk simpanan berupa giro, deposito berjangka, sertifikat deposito, tabungan dan/atau bentuk lainnya yang dipersamakan dengan itu</li>
<li>Memberikan kredit</li>
    <li>Menerbitkan surat pengakuan hutang</li>
    <li>Membeli, menjual atau menjamin atas risiko sendiri maupun untuk kepentingan dan atas nama perintah nasabahnya :<br></li>
        <li>Surat-surat wesel termasuk wesel yang diakseptasi oleh bank yang masa berlakunya tidak lebih lama daripada kebiasaan dalam perdagangan surat-surat dimaksud.</li>
        <li>Surat pengakuan hutang dan kertas dagang lainnya yang masa berlakunya tidak lebih lama dari kebiasaan dalam perdagangan surat-surat dimaksud.</li>
        <li>Kertas perbendaharaan negara dan jaminan pemerintah.</li>
        <li>Sertifikat Bank Indonesia.</li>
        <li>Obligasi.</li>
        <li>Surat dagang berjangka waktu sampai dengan 1 (satu) tahun.</li>
        <li>Instrumen surat berharga lain yang berjangka waktu sampai dengan 1 (satu) tahun</li>
    <li>Memindahkan uang baik untuk kepentingan sendiri maupun untuk kepentingan nasabah</li>
    <li>Menempatkan dana, meminjam dana dari, atau meminjamkan dana kepada bank lain, baik dengan menggunakan surat, sarana telekomunikasi maupun dengan wesel unjuk, cek atau sarana lainnya</li>
    <li>Menerima pembayaran dari tagihan atas surat berharga dan melakukan perhitungan dengan atau antar pihak ketiga Menyediakan tempat untuk menyimpan barang dan surat berharga</li>
    <li>Melakukan kegiatan penitipan untuk kepentingan pihak lain berdasarkan suatu kontrak</li>
    <li>Melakukan penempatan dana dari nasabah kepada nasabah lainnya dalam bentuk surat berharga yang tidak tercatat di bursa efek</li>
    <li>Melakukan kegiatan anjak piutang, usaha kartu kredit dan kegiatan wali amanat</li>
    <li>Menyediakan pembiayaan dan/atau melakukan kegiatan lain berdasarkan Prinsip Syariah, sesuai dengan ketentuan yang ditetapkan oleh yang berwenang</li>
    <li>Melakukan kegiatan usaha dalam valuta asing</li>
    <li>Melakukan kegiatan penyertaan modal pada bank atau perusahaan lain dibidang keuangan</li>
    <li>Melakukan penyertaan modal dalam rangka penyelamatan kredit (kegagalan kredit, kegagalan pembiayaan dalam syariah) dengan ketentuan harus menarik kembali penyertaan sesuai ketentuan yang berlaku</li>
    <li>Bertindak sebagai pendiri dan memberikan kontribusi kepadaDana Pensiun</li>
    <li>Melakukan kegiatan yang lazim dilakukan oleh bank sepanjang tidak bertentangan dengan Undang-Undang dan peraturan perundang-undangan yang berlaku</li>

							</p>
						</article>
						<div class="clear"></div>
					</div>

					<div class="col-lg-4">
						<aside class="right-sidebar">
							<div class="widget">
								<h3 class="widgetheading">Terpopuler</h3>
								<ul class="cat">
									<img src="img/side2.jpg" width="100%"/>
									<img src="img/side3.jpg" width="100%"/>
									<img src="img/side1.jpg" width="100%"/>
									<img src="img/side4.jpg" width="100%"/>
									<img src="img/side5.jpg" width="100%"/>
									<img src="img/side6.png" width="100%"/>
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
