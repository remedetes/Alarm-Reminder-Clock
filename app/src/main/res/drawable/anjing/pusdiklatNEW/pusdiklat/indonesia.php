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
							<li class="active"><a href="indonesia.php">Liga Indonesia</a></li>
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
							<li class="active">Channel Liga Indonesia</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<h3 class="widgetheading">Liga Indonesia Highlight</h3><hr>
						<?php
			            $limit = 3;
			            if(isset($_GET['page'])){
			              $page = anti_injection($_GET['page']);
			            }else{
			              $page = 1;
			            }
			            $offset = ($page - 1) * $limit; 
			            $sql = "SELECT * FROM `berita` WHERE kategori='Liga Indonesia'";
			            $query = mysql_query($sql." LIMIT $offset, $limit");
			            $total = mysql_num_rows(mysql_query($sql));
			            while ($row = mysql_fetch_array($query)):
			            ?>

						<article>
							<div class="post-image">
								<div class="post-heading">
									<h3><a href="detail.php?id=<?= $row['id_berita'];?>">
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
									<li><i class="fa fa-comments"></i>
										<a href="detail.php?id=<?php echo $row['id_berita'];?>">Komentar</a></li>
									<li><i class="fa fa-user"></i><a href="#"><?php echo $row['nama_admin'];?></a></li>
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
