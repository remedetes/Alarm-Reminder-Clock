<?php
@session_start();
if(!isset($_SESSION['username'])){
  header("location: ../login.php");
}
include '../koneksi.php';
date_default_timezone_set("Asia/Jakarta");

//proses tambah
if($_POST){
  $nama_admin = $_POST['nama_admin'];
  $no_telp = $_POST['no_telp'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

    $sql = "INSERT INTO `admin`(`nama_admin`,`no_telp`,`email`,`username`,`password`) VALUES ('$nama_admin','$no_telp','$email','$username',MD5('$password'))";
    if(mysql_query($sql)){
        echo"<script>alert('Data Berhasil di Tambah');document.location.href='admin.php';</script>";
    }else{
        echo"<script>alert('Gagal Tambah Data');document.location.href='input_admin.php';</script>";
    }
}
?>
<html>
<head>
  <title>Admin - Admin</title>
  <link href="../img/img.png" rel="shortcut icon">
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
</head>

<body>
  
  <!-- bagian header template -->
  <header>
    <img src="../img/banner.png">
  </header>
  <!-- akhir bagian header template -->
  
  <div class="wrap">
    <!-- bagian menu     -->
    <nav class="menu">
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="../berita/berita.php">Berita Liga Eropa</a></li>
        <li><a href="../berita/berita2.php">Berita Liga Indonesia</a></li>
        <li><a href="../komentar/komentar.php">Komentar</a></li>
        <li><a href="admin.php">Admin</a></li>
      </ul>
    </nav>
    <!-- akhir bagian menu -->
 
    <!-- bagian sidebar website -->
    <aside class="sidebar">
      <div class="widget">
        <h2>Selamat Datang</h2>
        <table style="font-size: 14;">
        <?php $sql = mysql_query("select * from admin where username='".$_SESSION['username']."'");
        while($row=mysql_fetch_array($sql)): 
        ?>
        <tr>
          <td>Username</td>
          <td>:</td>
          <td style="color: red;"><b><?php echo $row['username']; ?></b></td>
        </tr>
        <tr>
          <td>Nama Admin</td>
          <td>:</td>
          <td style="color: red;"><b><?php echo $row['nama_admin']; ?></b></td>
        </tr>

      <?php endwhile; ?>
      </table>
      <br><b><a href="../logout.php">Logout</a></b>
      </div>
      <div class="widget" style="font-size: 12;">
        <h2>CHANNEL BOLA ONLINE </h2>
        <p>Website Channel Bola Online adalah website yang berisi tentang berita-berita bola terkini.</p>
      </div>
    </aside>
    <!-- akhir bagian sidebar website -->
 
    <!-- bagian konten Blog -->
    <div class="blog">
      <div class="conteudo">
        <div class="post-info">
          2019 Channel Bola Online. All Right Reserved.
        </div>
        <h1>Tambah Admin</h1>
        <hr>
        <p>
          <!-- DATABASE -->
            <form id="form1" name="form1" method="post" action="input_admin.php">
            <table width="500" border="0" align="center">
              <tr>
                <td width="150" height="30">Nama Admin</td>
                <td width="50" >:</td>
                <td width="250"><input type="text" name="nama_admin" id="nama_admin" /></td>
              </tr>
              <tr>
                <td width="150" height="30">No Telpon</td>
                <td width="50" >:</td>
                <td width="250"><input type="text" name="no_telp" id="id_admin" /></td>
              </tr>
              <tr>
                <td width="150" height="30">Email</td>
                <td width="50" >:</td>
                <td width="250"><input type="text" name="email" id="email" /></td>
              </tr>
             <tr>
                <td width="150" height="30">Username</td>
                <td width="50" >:</td>
                <td width="250"><input type="text" name="username" id="username" /></td>
              </tr>
              <tr>
                <td width="150" height="30">Password</td>
                <td width="50" >:</td>
                <td width="250"><input type="text" name="password" id="password" /></td>
              </tr>
                <tr>
                <td colspan="3" height="50" align="right">
                  <input type="submit" name="button" id="button" value="Tambah" />
                </td>
                </tr> 
            </table>
            </form>
          <!-- DATABASE -->
        </p>
        <a href="admin.php" style="text-decoration: none;"><button style="width: 10%; font-size: 16px;">Kembali</button></a>
      </div>
    </div>
    <!-- akhir bagian konten Blog -->
  </div>
 
</body>
</html>