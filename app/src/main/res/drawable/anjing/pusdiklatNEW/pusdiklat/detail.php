<?php 
include 'admin/koneksi.php';
include 'fungsi.php';
date_default_timezone_set("Asia/Jakarta");
if(!isset($_GET['id'])){
    header("location: index.php");
}else{
    $id = anti_injection($_GET['id']);
    $sql = "SELECT * FROM `berita` WHERE id_berita = '$id'";
     $query = mysql_query($sql);
    if(mysql_num_rows($query) > 0){
        while ($row = mysql_fetch_array($query)) {
            $id_berita = $row['id_berita'];
            $judul = $row['judul'];
            $deskripsi = $row['deskripsi'];
            $waktu = $row['waktu'];
            $picture = $row['picture'];
            // $kategori = $row['kategori'];
            $nama_admin = $row['nama_admin'];
        }
    }else{
        echo "Not Found";
        die();
    }

    if($_POST){
		$id_berita = $_GET['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $isi_komentar = anti_injection($_POST['isi_komentar']);
        $tanggal = date("Y-m-d H:i:s");

        $sql = "INSERT INTO `komentar`(`id_berita`,`nama`,`email`,`isi_komentar`,`status`,`hak_akses`,`tanggal`) VALUES ('$id_berita','$nama','$email','$isi_komentar',0,0,'$tanggal')";
        if(mysql_query($sql)){
            echo"<script>alert('Komentar Berhasil di Tambah');document.location.href='detail.php?id=$id';</script>";
        }else{
            $error_msg = "Error updating record: " . mysql_error($con);
        }
    }
}

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
	<link href="img/anri1.jpg" rel="shortcut icon">
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
							<li><a href="profil.php">Tentang Kami</a></li>
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
							<li class="active">Detail Channel Bola</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
							<div class="post-image">
								<div class="post-heading">
									<h3><a href="#"><?php echo $judul;?></a></h3>
								</div>
								<img src="admin/img/berita/<?php echo $picture;?>" class="img-responsive" />
							</div>
							<p style="font-size: 16px;">
								<?php echo $deskripsi;?>
								<p>Tanggal : <i class="fa fa-calendar"></i>
									<a href="#" style="font-size: 16px;"><strong> 
									<?php echo date('d-M-Y',strtotime($waktu)); ?></strong></a> |
								Upload by : <i class="fa fa-user"></i>
									<a href="#" style="font-size: 16px;"><strong> 
									<?php echo $nama_admin;?></strong></a>|
								Kategori : <i class="fa fa-list"></i>
									<a href="#" style="font-size: 16px;"><strong> 
									<?php echo $kategori;?></strong></a></p>
							</p>
						<div class="comment-area">
							<?php
							$limit = 5;
					        if(isset($_GET['page'])){
					        $page = anti_injection($_GET['page']);
					        }else{
					        $page = 1;
					        }
					        $offset = ($page - 1) * $limit;
							$sql = "SELECT * FROM `komentar` WHERE `id_berita`='$id'  ORDER BY `tanggal`";
			                $query = mysql_query($sql." LIMIT $offset, $limit");
			                $total = mysql_num_rows(mysql_query($sql));
							?>
							<h4><?= $total; ?> Komentar</h4>
							<?php 
			                if(mysql_num_rows($query) > 0){
			                    while ($row = mysql_fetch_array($query)) {
			                ?>
							<div class="media">
								<a href="#" class="pull-left">
									<img src="img/avatar.png" alt="" class="img-circle" /></a>
								<div class="media-body">
									<div class="media-content">
										<h6><span><?php echo date('d-M-Y H:i:s',strtotime($row['tanggal'])); ?></span> / <?php echo $row['nama']; ?></h6>
										<p>
											<?php echo $row['isi_komentar']; ?>
										</p>
									</div>
								</div>
							</div>
							<?php
		                    } 
			                }else{
			                ?>		
			                <div class="media">
								<div class="media-body">
									<div class="media-content">
										<h6> Belum Ada Komentar !</h6>
									</div>
								</div>
							</div>
			                <?php
			            	}
			                ?>					
							<div class="marginbot30"></div>
							<h4>Komentar</h4>


							<form role="form" action="" method="post">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="nama" placeholder="* Masukan Nama">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="email" name="email" placeholder="* Masukan email address">
								</div>
								<div class="form-group">
									<textarea class="form-control" rows="8" name="isi_komentar" placeholder="* Masukan Komentar Anda"></textarea>
								</div>
								<button type="submit" class="btn btn-theme btn-md">Kirim</button>
							</form>

						</div>

						<div class="clear"></div>
					</div>
					<div class="col-lg-4">
						<aside class="right-sidebar">
							<div class="widget">
								<h3 class="widgetheading"></h3>
								<ul class="cat">
									<img src="img/anri.jpg" width="100%"/>
									<img src="img/anri.jpg" width="100%"/>
									<img src="img/anri.jpg" width="100%"/>
									<img src="img/anri.jpg" width="100%"/>
									<img src="img/anri.jpg" width="100%"/>
									<img src="img/anri.png" width="100%"/>
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
								<p>2019 Copyright © Pusat Pendidikan Dan Pelatihan Kearsipan ANRI</p>
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
