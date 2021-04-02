<?php
@session_start();
if(!isset($_SESSION['username'])){
  header("location: ../login.php");
}
include '../fungsi.php';
include '../koneksi.php';
date_default_timezone_set("Asia/Jakarta");
?>
<html>
<head>
  <title>Admin - Berita</title>
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
        <h1>Menu Berita</h1>
        <hr>
          <a href="input.php" style="text-decoration: none;"><button style="width: 15%; font-size: 16px;">Tambah Data</button></a>
        <p>
          <!-- DATABASE -->
          <?php
            $limit = 5;
            if(isset($_GET['page'])){
              $page = anti_injection($_GET['page']);
            }else{
              $page = 1;
            }
            $offset = ($page - 1) * $limit; 
            $sql = "SELECT * FROM `berita` WHERE kategori='Liga Eropa'";
            $query = mysql_query($sql." LIMIT $offset, $limit");
            $total = mysql_num_rows(mysql_query($sql));
            ?>
            <h3>Total Berita : <?php echo $total; ?></h3>
            <table width="95%" border="1" align="center" style="font-size: 14; border-collapse: collapse;"> 
              <tr align="center" style="background-color: red; color: #fff;">
                <td><b>No</b></td>
                <td><b>Judul</b></td>
                <td><b>Deskripsi</b></td>
                <td><b>Picture</b></td>
                <td><b>Kategori</b></td>
                <td><b>Aksi</b></td>
              </tr>
              <?php
              if($total > 0){
              $no = ($page - 1) * $limit; 
              while ($row = mysql_fetch_array($query)):
                $no++;
                echo "<tr>";
                echo "<td align=center height=80>".$no.".</td>";
                echo "<td>".($row['judul'])."</td>";
                echo "<td>".(potong_kata(strip_tags($row['deskripsi']),100))."</td>";
                echo '<td align=center><img src="../img/berita/'.$row['picture'].'" width=250></td>';
                echo "<td>".($row['kategori'])."</td>";
                echo '<td align=center>
            <a href="lihat.php?id='.$row['id_berita'].'"><button>Lihat</button></a><br>
            <a href="edit.php?id='.$row['id_berita'].'"><button>Ubah</button></a><br>
            <a onclick="return konfirmasi()" href="hapus.php?id='.$row['id_berita'].'">
            <button>Hapus</button> </a>
                </td>';
                echo "</tr>";
                endwhile;
                }else{
                echo "<tr><td colspan=9>Data tidak tersedia</td></tr>";
                }
              ?>
              </table>
              <center><?php pagination_new($total, $page, $limit, '#', '?page='); ?></center>
          <!-- DATABASE -->
        </p>
      </div>
    </div>
    <!-- akhir bagian konten Blog -->
  </div>
 
</body>
</html>