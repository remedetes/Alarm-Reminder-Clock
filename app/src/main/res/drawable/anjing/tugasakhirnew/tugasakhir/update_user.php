<?php include"koneksi.php"; 
  $manda=new punyaku();
$manda->dbconnect();
?>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="registrasi.css">

    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/release/v5.8.1/css/all.css">

<?php if($_GET['update']=="user"){ 
  $id = $_GET['id']; 

include ("functions.php");

$query = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");
$pesanan=mysqli_fetch_assoc($query);

if (isset($_POST["submit"])) {
    $id1 = $_GET['id']; 
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $hasil=query("UPDATE user SET email='$email', username='$username', password='$password' WHERE id='$id1'");

    // cek apakah data berhasil di tambahkan atau tidak
    if ($hasil) {
        echo "
      <script>
        alert('Update Successfull !');
        document.location.href = 'dashboard.php?page=content&data=user';
      </script>
    ";
    } else {
        echo "
      <script>
        alert('Update Successfull !');
        document.location.href = 'dashboard.php?page=content&data=user';
      </script>
    ";
    }
}
  ?>



<form class="needs-validation" action="" method="POST" novalidate>
    <div class="container">
        <input type="hidden" name="id" value="<?= $pesanan["id"]; ?>">
        <div class="col-md mb-3">
            <label for="validationCustom04">Username</label>
            <input type="text" name="username" class="form-control" id="validationCustom04" placeholder="Username" required value="<?= $pesanan["username"]; ?>">
            <div class="invalid-feedback">
                Please provide a valid Username.
            </div>
        </div>
        <div class="col-md mb-3">
            <label for="validationCustom05">Email</label>
            <input type="email" name="email" class="form-control" id="validationCustom05" placeholder="Email" required value="<?= $pesanan["email"]; ?>">
            <div class="invalid-feedback">
                Please provide a valid email.
            </div>
        </div>
        
         <div class="col-md mb-3">
            <label for="validationCustom05">Password</label>
            <input type="password" name="password" class="form-control" id="validationCustom05" placeholder="Password" required value="<?= $pesanan["password"]; ?>">
            <div class="invalid-feedback">
                Please provide a valid pesanan.
            </div>
        </div>
         
        <button class="btn btn-primary" type="submit" name="submit">Submit Form</button>
    </div>
</form>

<?php 

}
?>

