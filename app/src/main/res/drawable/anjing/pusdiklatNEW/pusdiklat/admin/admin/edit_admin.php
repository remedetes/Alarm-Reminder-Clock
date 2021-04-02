<?php
@session_start();
if(!isset($_SESSION['username'])){
  header("location: ../login.php");
}
include '../koneksi.php';
date_default_timezone_set("Asia/Jakarta");

//proses edit
if($_POST){
  $id = anti_injection($_GET['id']);
  $nama_admin = $_POST['nama_admin'];
  $no_telp = $_POST['no_telp'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];


   $sql = "UPDATE `admin` SET `nama_admin`='$nama_admin',`no_telp`='$no_telp',`email`='$email',`username`='$username',`password`=MD5('$password') WHERE `id`='$_GET[id]'";
    if(mysql_query($sql)){
        echo"<script>alert('Data Berhasil di Ubah');document.location.href='admin.php';</script>";
    }else{
        echo"<script>alert('Gagal Ubah Data');document.location.href='edit_admin.php';</script>";
    }
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM `admin` WHERE `id`='$id'";
    $query = mysql_query($sql);
    if(mysql_num_rows($query) > 0){
        while ($row = mysql_fetch_array($query)) {
          $id = $row['id'];
          $nama_admin = $row['nama_admin'];
          $no_telp = $row['no_telp'];
          $email = $row['email'];
          $username = $row['username'];
          $password = $row['password'];

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
        <h1>Ubah Admin</h1>
        <hr>
        <p>
          <!-- DATABASE -->
            <form id="form1" name="form1" method="post" action="edit_admin.php?id=<?php echo $_GET['id']; ?>">
            <table width="500" border="0" align="center">
              <tr>
                <td height="30">Nama Admin</td>
                <td >:</td>
                <td ><input type="text" name="nama_admin" id="nama_admin" value="<?php echo $nama_admin;?>"/></td>
              </tr>
              <tr>
                <td height="30">No Telpon</td>
                <td >:</td>
                <td ><input type="text" name="no_telp" id="no_telp" value="<?php echo $no_telp;?>"/></td>
              </tr>
              <tr>
                <td height="30">Email</td>
                <td >:</td>
                <td ><input type="text" name="email" id="email" value="<?php echo $email;?>"/></td>
              </tr>
              <tr>
                <td height="30">Username</td>
                <td >:</td>
                <td ><input type="text" name="username" id="username" value="<?php echo $username;?>"/></td>
              </tr>
              <tr>
                <td height="30">Password</td>
                <td >:</td>
                <td ><input type="password" name="password" id="password"/>
                  <p style="font-size: 12;">Masukan Password Kembali</p></td>
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
        <a href="admin.php" style="text-decoration: none;"><button style="width: 10%; font-size: 16px;">Kembali</button></a>
      </div>
    </div>
    <!-- akhir bagian konten Blog -->
  </div>
 
</body>
</html>