<?php
@session_start();
if(!isset($_SESSION['username'])){
  header("location: ../login.php");
}
include '../koneksi.php';
date_default_timezone_set("Asia/Jakarta");
?>
<html>
<head>
  <title>Admin - Admin</title>
  <link href="../img/img.png" rel="shortcut icon">
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
</head>

<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Hapus data ini ?");
 if (tanya == true) return true;
 else return false;
 }</script>

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
        <h1>Menu Admin</h1>
        <hr>
          <a href="input_admin.php" style="text-decoration: none;"><button style="width: 15%; font-size: 16px;">Tambah Data</button></a>
        <p>
          <!-- DATABASE -->
          <?php
            $sql = "SELECT * FROM `admin` ORDER BY `id` ASC";
            $query = mysql_query($sql);
            $total = mysql_num_rows(mysql_query($sql));
            ?>
            <h3>Total Admin: <?= $total; ?></h3>
            <table width="100%" border="1" align="center" style="font-size: 14; border-collapse: collapse;">  
              <tr align="center" style="background-color: red; color: #fff;">
                <td><b>No</b></td>
                <td><b>Nama </b></td>
                <td><b>No Telpon</b></td>
                <td><b>Email</b></td>
                <td><b>Username</b></td>
                <td width="15%"><b>Aksi</b></td>
              </tr>
              <?php
              $no = 0;
              if($total > 0){
              while ($row = mysql_fetch_array($query)):
                $no++;
                echo "<tr>";
                echo "<td align=center>".$no.".</td>";
                echo "<td align=center>".($row['nama_admin'])."</td>";
                echo "<td align=center>".($row['no_telp'])."</td>";
                echo "<td align=center>".($row['email'])."</td>";
                echo "<td align=center>".($row['username'])."</td>";
                echo '<td align=center>
                <a href="edit_admin.php?id='.$row['id'].'"><button>Ubah</button></a>
                <a onclick="return konfirmasi()" href="hapus_admin.php?id='.$row['id'].'"><button>Hapus</button></a>
                </td>';
                echo "</tr>";
                endwhile;
                }else{
                echo "<tr><td colspan=7>Data tidak tersedia</td></tr>";
                }
              ?>
              </table>
          <!-- DATABASE -->
        </p>
      </div>
    </div>
    <!-- akhir bagian konten Blog -->
  </div>
 
</body>
</html>