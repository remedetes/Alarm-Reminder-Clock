<?php include"koneksi.php"; 
	$manda=new punyaku();
$manda->dbconnect();
?>

<?php if($_GET['hapus']=="user"){ 
	$id = $_GET['id'];
	$delete = $manda->query("DELETE FROM user WHERE id='$id'");
	if($delete){
		echo '<script language="javascript">alert("Data Berhasil di hapus !!!"); document.location="dashboard.php?page=content&data=user";</script>';
	}else{
		echo '<script language="javascript">alert("Data Gagal di hapus !!!"); document.location="dashboard.php?page=content&data=user";</script>';
	}
}
?>

<?php if($_GET['hapus']=="pesanan"){ 
	$id = $_GET['id'];
	$delete = $manda->query("DELETE FROM pesanan WHERE id='$id'");
	// $delete2 = mysqli_query($koneksi,"DELETE FROM services WHERE id_customer='$id'");
	if($delete){
		echo '<script language="javascript">alert("Data Berhasil di hapus !!!"); document.location="dashboard.php?page=content&data=pesanan";</script>';
	}else{
		echo '<script language="javascript">alert("Data Gagal di hapus !!!"); document.location="dashboard.php?page=content&data=pesanan";</script>';
	}
}
?>