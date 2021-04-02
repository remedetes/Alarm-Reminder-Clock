<?php
require_once('koneksi.php');
$manda=new punyaku();
$manda->dbconnect();

// echo "<script>alert('Success');location.href='index.php'</script>";

    
    	$email                  = $_POST['email'];
        $username               = $_POST['username'];
        $password               = $_POST['password'];
    
    
    $insert= $manda -> insert ("user VALUES (NULL,'$email','$username','$password')");
    if ($insert) {
    	echo"<script>alert('berhasil')</script>";
		echo"<meta http-equiv='refresh' content='0;url=login.php'>";
    } else {
    	echo"<script>alert('Gagal')</script>";
		echo"<meta http-equiv='refresh' content='0;url=registrasi.php'>";
    }
?>
