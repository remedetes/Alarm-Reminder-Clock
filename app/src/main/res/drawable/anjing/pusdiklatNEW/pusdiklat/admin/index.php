<?php
@session_start();
if(!isset($_SESSION['username'])){
  header("location: login.php");
}
include 'koneksi.php';
date_default_timezone_set("Asia/Jakarta");
?>
<html>
<head>
  <title>Admin - Home</title>
  <link href="img/img.png" rel="shortcut icon">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
  
  <!-- bagian header template -->
  <header>
    <img src="img/banner.png">
  </header>
  <!-- akhir bagian header template -->
  
  <div class="wrap">
    <!-- bagian menu     -->
    <nav class="menu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="berita/berita.php">Berita Liga Eropa</a></li>
        <li><a href="berita/berita2.php">Berita Liga Indonesia</a></li>
        <li><a href="komentar/komentar.php">Komentar</a></li>
        <li><a href="admin/admin.php">Admin</a></li>
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
      <br><b><a href="logout.php">Logout</a></b>
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
        <h1> Selamat Datang di Web Channel Bola </h1>
        <hr>
        <p>
          Website Channel Bola Online adalah website yang berisi tentang berita-berita bola terkini.
        </p>
      </div>
    </div>
    <!-- akhir bagian konten Blog -->
  </div>
 
</body>
</html>