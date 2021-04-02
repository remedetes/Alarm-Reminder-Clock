<?php
@session_start();
if(!isset($_SESSION['username'])){
  header("location: ../login.php");
}
include '../koneksi.php';
include '../fungsi.php';
date_default_timezone_set("Asia/Jakarta");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM `berita` WHERE id_berita = '$id'";
    $query = mysql_query($sql);
    if(mysql_num_rows($query) > 0){
        while ($row = mysql_fetch_array($query)) {
            $judul = $row['judul'];
            $deskripsi = $row['deskripsi'];
            $waktu = $row['waktu'];
            $picture = $row['picture'];
            $kategori = $row['kategori'];
            $nama_admin = $row['nama_admin'];
        }
    }else{
        echo "Not Found";
        die();
    }
}else{
    die();
}
?>
<html>
<head>
  <title>Admin - Berita</title>
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
        <li><a href="berita.php">Berita Liga Eropa</a></li>
        <li><a href="berita2.php">Berita Liga Indonesia</a></li>
        <li><a href="../komentar/komentar.php">Komentar</a></li>
        <li><a href="../admin/admin.php">Admin</a></li>
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
        <h2>CHANNEL BOLA ONLINE  </h2>
        <p>Website Channel Bola Online adalah website yang berisi tentang berita-berita bola terkini.<br></p>
      </div>
    </aside>
    <!-- akhir bagian sidebar website -->
 
    <!-- bagian konten Blog -->
    <div class="blog">
      <div class="conteudo">
        <div class="post-info">
          2019 Channel Bola Online. All Right Reserved.
        </div>
        <h1>Lihat Kegiatan</h1>
        <hr>
        <p>
          <!-- DATABASE -->
            <form id="form1" name="form1" method="post">
            <table width="90%" align="center">
              <tr>
                <td width="20%" height="50">Judul Berita</td>
                <td width="10%">:</td>
                <td width="50%"><b><?php echo $judul;?></b></td>
              </tr>
              <tr>
                <td height="50">Deskripsi</td>
                <td >:</td>
                <td ><?php echo $deskripsi;?>
                </td>
              </tr>
              <tr>
                <td height="50">Picture</td>
                <td >:</td>
                <td ><img src="../img/berita/<?php echo $picture;?>" width=100%></td>
              </tr>
              <tr>
                <td height="50">Kategori</td>
                <td >:</td>
                <td ><?php echo $kategori;?>
                </td>
              </tr>
              <tr>
                <td height="50">Created at</td>
                <td >:</td>
                <?php echo "<td>".date('d-M-Y',strtotime($waktu))."</td>"; ?>
              </tr>
              <tr>
                <td height="50">Created</td>
                <td >:</td>
                <td ><?php echo $nama_admin;?></td>
              </tr>
            </table>
            </form>
          <!-- DATABASE -->
        </p>
        <a href="berita.php" style="text-decoration: none;"><button style="width: 10%; font-size: 16px;">Kembali</button></a>
      </div>
    </div>
    <!-- akhir bagian konten Blog -->
  </div>
 
</body>
</html>