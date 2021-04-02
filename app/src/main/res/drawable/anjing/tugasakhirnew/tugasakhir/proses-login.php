<?php
require_once('koneksi.php');
$manda=new punyaku();
$manda->dbconnect();

$username = $_POST['username'];
// $password = md5($_POST['password']);
$password = $_POST['password'];
session_start();

$select = $manda-> select (" user WHERE username='$username' and password='$password'");
$admin = $manda-> select ( "admin WHERE username = '$username' and password='$password'");
/*$login = mysql_query("SELECT * FROM user WHERE username='$username' and password='$password'");*/
if ($manda->qRows($select) > 0){
	$_SESSION['username'] = $username ;
	header("location:home.php");
	
} else if ($manda->qRows($admin) > 0){
	$_SESSION['username'] = $username ;
	header("location:dashboard.php");

}


else{
	echo"<script>alert('user atau password salah')</script>";
	echo"<meta http-equiv='refresh' content='0;url=login.php'>";
}
?>