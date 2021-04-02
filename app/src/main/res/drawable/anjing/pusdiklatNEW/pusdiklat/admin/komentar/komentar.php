<?php
@session_start();
if(!isset($_SESSION['username'])){
  header("location: ../login.php");
}
include '../fungsi.php';
include '../koneksi.php';
date_default_timezone_set("Asia/Jakarta");

function status($data)
{
    if($data > 0)
        $data = "Dibaca";
    else
        $data = "Belum Dibaca";
    return $data;
}
function hak_akses($data)
{
    if($data > 0)
        $data = "Admin";
    else
        $data = "Pengunjung";
    return $data;
}
?>
<html>
<head>
  <title>Admin - Komentar</title>
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
        <h1>Menu Komentar</h1>
        <hr>
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
            $sql = "SELECT * FROM `komentar` ORDER BY `id_komentar` ASC";
            $query = mysql_query($sql." LIMIT $offset, $limit");
            $total = mysql_num_rows(mysql_query($sql));
            ?>
            <h3>Total Komentar : <?= $total; ?></h3>
            <table width="100%" border="1" align="center" style="font-size: 14; border-collapse: collapse;"> 
              <tr align="center" style="background-color: red; color: #fff;">
                <td><b>No</b></td>
                <td><b>Nama</b></td>
                <td><b>Email</b></td>
                <td><b>Komentar</b></td>
                <td><b>Status</b></td>
                <td><b>Akses</b></td>
                <td><b>Tanggal</b></td>
                <td><b>Aksi</b></td>
              </tr>
              <?php
              if($total > 0){
              $no = ($page - 1) * $limit; 
              while ($row = mysql_fetch_array($query)):
                $no++;
                echo "<tr>";
                echo "<td align=center height=60>".$no.".</td>";
                echo "<td>".($row['nama'])."</td>";
                echo "<td>".($row['email'])."</td>";
                echo "<td>".(potong_kata(strip_tags($row['isi_komentar']),45))."</td>";
                echo "<td><b>".status($row['status'])."</b></td>";
                echo "<td>".hak_akses($row['hak_akses'])."</td>";
                echo "<td>".date('d-M-Y H:i:s',strtotime($row['tanggal']))."</td>";
                if ($row['hak_akses'] > 0) {
                  echo '<td align=center><a href="edit.php?id='.$row['id_komentar'].'"><button>Ubah</button></a> <br>';
                }else{
                  echo "<td align=center>";
                }
                  echo '<a href="lihat.php?id='.$row['id_komentar'].'" ><button>Lihat</button></a> <br>
                  <a onclick="return konfirmasi()" href="hapus.php?id='.$row['id_komentar'].'"><button>Hapus</button></a></td>';
                  echo "</tr>";
                endwhile;
                } else {
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