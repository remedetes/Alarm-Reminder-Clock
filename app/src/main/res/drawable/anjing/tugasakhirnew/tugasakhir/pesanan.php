<?php 
	include"koneksi.php";
	$manda=new punyaku();
$manda->dbconnect();
	// session_start();
	// error_reporting(0);
	$email = $_POST['email'];
	$nama = $_POST['nama'];
	$no_hp = $_POST['no_hp'];
	$jumlah = $_POST['jumlah'];
	$tanggal = $_POST['tgl'];
	$pesanan = $_POST['pesanan'];


	$query = $manda->insert("pesanan values ('','$nama','$email','$tanggal','$jumlah','$pesanan','$no_hp')");

	if (isset($query)) {
		echo '<script language="javascript">alert("Data Berhasil di simpan !!!"); document.location="home.php";</script>';
	}
	// $rows = mysqli_num_rows($query);
	// if($rows == 1){
	// 	$fetch = mysqli_fetch_array($query);
	// 	$_SESSION['email'] = $email;
	// 	echo '<script language="javascript">alert("Selamat Datang !!!!"); document.location="dashboard.php";</script>';
	// }else{
	// 	echo '<script language="javascript">alert("Anda dilarang masuk !!!!"); document.location="login.php";</script>';
	// }
?>