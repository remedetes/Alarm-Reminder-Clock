<?php
@session_start();
if(!isset($_SESSION['username'])){
  header("location: ../login.php");
}
include '../koneksi.php';

if(isset($_GET['id'])){
	$sql = "DELETE FROM `komentar` WHERE `id_komentar`='$_GET[id]'";
	$query = mysql_query($sql);
	echo"<script>alert('Data Berhasil di Hapus');document.location.href='komentar.php';</script>";
}else{
	echo"<script>alert('Gagal Hapus Data');document.location.href='komentar.php';</script>";
}
?>