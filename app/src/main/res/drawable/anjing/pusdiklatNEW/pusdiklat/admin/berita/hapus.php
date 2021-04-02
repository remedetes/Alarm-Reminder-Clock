<?php
@session_start();
if(!isset($_SESSION['username'])){
  header("location: ../login.php");
}
include '../koneksi.php';
include '../fungsi.php';
date_default_timezone_set("Asia/Jakarta");

if(isset($_GET['id'])){
	$id = anti_injection($_GET['id']);
	$sql = "SELECT * FROM `berita` WHERE `id_berita`='$id'";
    $query = mysql_query($sql);
    if(mysql_num_rows($query) > 0){
        while ($row = mysql_fetch_array($query)) {
            $gambar_lama = $row['picture'];
        }

    	$sql = "DELETE FROM `berita` WHERE `id_berita`='$id'";
		$query = mysql_query($sql);
		//Delete gambar
		$namafolder="../img/berita/";
		if (file_exists($namafolder.$gambar_lama)) {
	    	unlink($namafolder.$gambar_lama);
	  	}
	  	echo"<script>alert('Berhasil di Hapus !');document.location.href='berita.php';</script>";
    }
	
	echo"<script>alert('Berhasil di Hapus !');document.location.href='berita.php';</script>";
}else{
	echo"<script>alert('Gagal Hapus !');document.location.href='berita.php';</script>";
}
?>