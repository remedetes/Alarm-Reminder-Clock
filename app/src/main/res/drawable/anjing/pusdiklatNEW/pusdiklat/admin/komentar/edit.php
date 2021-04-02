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
    $sql = "SELECT * FROM `komentar` WHERE id_komentar = '$id'";
    $query = mysql_query($sql);
    if(mysql_num_rows($query) > 0){
        while ($row = mysql_fetch_array($query)) {
            $id_berita = $row['id_berita'];
            $nama = $row['nama'];
            $isi_komentar = $row['isi_komentar'];
        }
    }else{
        echo "Not Found";
        die();
    }
}else{
    die();
}

// Proses Tambah
if($_POST){
    $id_berita = $id_berita;
    $nama = "$_SESSION[username]";
    $balas = $_POST['balas'];
    $tanggal = date("Y-m-d H:i:s");
    $sql = "UPDATE `komentar` SET `isi_komentar`='$balas',`tanggal`='$tanggal' WHERE `id_komentar`='$id'";
    if (mysql_query($sql)) {
        echo"<script>alert('Komentar Berhasil di Ubah');document.location.href='komentar.php';</script>";
    } else {
        $error_msg = "Error updating record: " . mysql_error($con);
    }

    if(empty($error_msg)){
        header("location: komentar.php");
    }else{
        echo '<script>alert("'.$error_msg.'");</script>';
    }
}
?>
<html>
<head>
  <title>../Admin - Komentar</title>
  <link href="img/img.png" rel="shortcut icon">
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
        <li><a href="komentar.php">Komentar</a></li>
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
        <h1>Ubah Komentar</h1>
        <hr>
        <p>
          <!-- DATABASE -->
            <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <table width="90%" align="center">
              <tr>
                <td>Id Kegiatan</td>
                <td>:</td>
                <td><?= $id_berita;?></td>
              </tr>
              <tr>
                <td>Nama </td>
                <td>:</td>
                <td><b><?= $nama;?></b></td>
              </tr>
              <tr>
                <td height="50">Komentar</td>
                <td >:</td>
                <td >
                  <textarea name="balas" id="balas" style="width: 500px;height: 150px;"><?= $isi_komentar;?></textarea>
                </td>
              </tr>              
              <tr>
                <td colspan="3" height="50" align="right">
                  <input type="submit" name="button" id="button" value="Ubah" />
                </td>
              </tr>
            </table>
            </form>
                </tr>
                </table>
          <!-- DATABASE -->
        </p>
        <a href="komentar.php" style="text-decoration: none;"><button style="width: 10%; font-size: 16px;">Kembali</button></a>
      </div>
    </div>
    <!-- akhir bagian konten Blog -->
  </div>
 
</body>
</html>