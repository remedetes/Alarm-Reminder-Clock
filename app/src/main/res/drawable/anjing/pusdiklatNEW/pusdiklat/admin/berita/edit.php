<?php
@session_start();
if(!isset($_SESSION['username'])){
  header("location: ../login.php");
}
include '../koneksi.php';
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

// Proses Edit
if($_POST){
    // Upload Image
    $namafolder="../img/berita/"; //tempat menyimpan file
    if (!empty($_FILES["link_gambar"]["tmp_name"])){
        $jenis_gambar=$_FILES['link_gambar']['type'];
        if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png"){      
            $picture = $namafolder . basename($_FILES['link_gambar']['name']);
            $link_gambar = basename($_FILES['link_gambar']['name']);    
            if (move_uploaded_file($_FILES['link_gambar']['tmp_name'], $picture)) {
                //rename gambar
                $file_lama = $namafolder.$link_gambar;    
                if($jenis_gambar=="image/jpg"){
                  $ekstensi = '.jpg';
                }
                else if($jenis_gambar=="image/jpeg"){ 
                  $ekstensi = '.jpeg';
                }
                else if($jenis_gambar=="image/gif"){
                  $ekstensi = '.gif';
                }
                else if($jenis_gambar=="image/png"){
                  $ekstensi = '.png';
                }

                $gambar_baru = sha1(date("Y-m-d-H-i-s"));
                rename($file_lama,$namafolder.$gambar_baru.$ekstensi);
                echo "Gambar Berhasil di Upload"; 
                // Query Update
                $judul = $_POST['judul'];
                $deskripsi = $_POST['deskripsi'];
                $waktu = $waktu = date("Y-m-d");
                $image = $gambar_baru.$ekstensi;
                $kategori = $_POST['kategori'];

                $sql = "UPDATE `berita` SET `judul`='$judul',`deskripsi`='$deskripsi',`waktu`='$waktu',`picture`='$image',`kategori`='$kategori' WHERE `id_berita`='$_GET[id]'";
        if (mysql_query($sql)) {
                    echo"<script>alert('Data berhasil diperbaharui');document.location.href='berita.php';</script>";
                    if (file_exists($namafolder.$gambar_lama)) {
                        unlink($namafolder.$gambar_lama);
                      }
                } else {
                    $error_msg = "Error updating record: " . mysql_error($con);
                }
            } else {
                echo"<script>alert('Data gagal dikirim');document.location.href='edit.php';</script>";
            }
        } else {
            echo"<script>alert('Jenis gambar yang anda kirim salah. Harus .jpg .jpeg .png .gif');document.location.href='edit.php';</script>";
        }
    } else {
                $judul = $_POST['judul'];
                $deskripsi = $_POST['deskripsi'];
                $waktu = $waktu = date("Y-m-d");
                $kategori = $_POST['kategori'];

        $sql = "UPDATE `berita` SET `judul`='$judul',`deskripsi`='$deskripsi',`waktu`='$waktu',`kategori`='$kategori' WHERE `id_berita`='$_GET[id]'";
        if (mysql_query($sql)) {
            echo"<script>alert('Data berhasil diperbaharui');document.location.href='berita.php';</script>";
        } else {
            $error_msg = "Error updating record: " . mysql_error($con);
        }
    }

    if(empty($error_msg)){
        echo"<script>alert('Data berhasil diperbaharui');document.location.href='berita.php';</script>";
    }else{
        echo '<script>alert("'.$error_msg.'");</script>';
    }
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
        <h1>Ubah berita</h1>
        <hr>
        <p>
          <!-- DATABASE -->
            <form method="POST" enctype="multipart/form-data" action="edit.php?id=<?php echo $_GET['id']; ?>">
            <table width="90%" align="center">
              <tr>
                <td width="20%" height="50">Judul</td>
                <td width="10%" >:</td>
                <td width="50%">
                  <input type="text" value="<?php echo $judul;?>" name="judul" id="judul" style="width: 500px;height: 30px;" />
                </td>
              </tr>
              <tr>
                <td height="50">Deskripsi</td>
                <td >:</td>
                <td ><textarea name="deskripsi" id="deskripsi" style="width: 500px;height: 150px;" ><?php echo $deskripsi;?>
                </textarea>
                </td>
              </tr>
              <tr>
                <td width="20%" height="50">Gambar Lama</td>
                <td width="10%" >:</td>
                <td width="50%"><img src="../img/berita/<?php echo $picture;?>" width=100%></td>
              </tr>
              <tr>
                <td height="50">Gambar</td>
                <td>:</td>
                <td>
                  <input type="file" id="gambar" name="link_gambar">
                  <p style="font-size: 14px;">Format yang diperbolehkan jpg,jpeg,png</p>
                </td>
              </tr>
              <tr>
                <td height="50">Kategori</td>
                <td >:</td>
                <td >
                  <select name="kategori" style="width: 500px;height: 30px;">  
                     <option value="<?php echo $kategori;?>"><?php echo $kategori;?></option>  
                     <option></option>
                     <option value="Liga Eropa">Liga Eropa</option>  
                     <option value="Liga Indonesia">Liga Indonesia</option>  
                  </select>   
                </td>
              </tr>
              <tr>
                <td height="50">Admin</td>
                <td >:</td>
                <td ><input type="text" placeholder="Admin" name="nama_admin" id="nama_admin" style="width: 500px;height: 30px;" 
                  <?php $sql = mysql_query("select * from admin where username='".$_SESSION['username']."'");
                  while($row=mysql_fetch_array($sql)): ?>
                  <?php  echo "value=".($row['nama_admin']).""; ?>
                  <?php endwhile;?> readonly />
                </td>
              </tr>
              <tr>
                <td colspan="3" height="50" align="right">
                  <input type="submit" name="button" id="button" value="Ubah" />
                </td>
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