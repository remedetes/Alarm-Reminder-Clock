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

<?php if($_GET['update']=="pesanan"){ 
	$id = $_GET['id']; 

include ("functions.php");

$pesanan = query("SELECT * FROM pesanan WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    
    // cek apakah data berhasil di tambahkan atau tidak
    if (editOrders($_POST) > 0) {
        echo "
			<script>
				alert('Update Successfull !');
				document.location.href = 'dashboard.php?page=content&data=pesanan';
			</script>
		";
    } else {
        echo "
			<script>
				alert('Update Fail !');
				document.location.href = 'dashboard.php?page=content&data=pesanan';
			</script>
		";
    }
}
	?>



<form class="needs-validation" action="" method="POST" novalidate>
    <div class="container">
        <input type="hidden" name="id" value="<?= $pesanan["id"]; ?>">
        <div class="col-md mb-3">
            <label for="validationCustom04">Nama</label>
            <input type="text" name="nama" class="form-control" id="validationCustom04" placeholder="Nama" required value="<?= $pesanan["nama"]; ?>">
            <div class="invalid-feedback">
                Please provide a valid Username.
            </div>
        </div>
        <div class="col-md mb-3">
            <label for="validationCustom05">Email</label>
            <input type="email" name="email" class="form-control" id="validationCustom05" placeholder="Email" required value="<?= $pesanan["email"]; ?>">
            <div class="invalid-feedback">
                Please provide a valid Email.
            </div>
        </div>
        <div class="col-md mb-3">
            <label for="validationCustom05">Tanggal</label>
            <input type="text" name="tgl" class="form-control" id="validationCustom05" placeholder="Tanggal" required value="<?= $pesanan["tgl"]; ?>">
            <div class="invalid-feedback">
                Please provide a valid Tanggal.
            </div>
        </div>
         <div class="col-md mb-3">
            <label for="validationCustom05">Jumlah</label>
            <input type="text" name="jumlah" class="form-control" id="validationCustom05" placeholder="Jumlah" required value="<?= $pesanan["jumlah"]; ?>">
            <div class="invalid-feedback">
                Please provide a valid Jumlah.
            </div>
        </div>
         <div class="col-md mb-3">
            <label for="validationCustom05">Pesanan</label>
            <input type="text" name="pesanan" class="form-control" id="validationCustom05" placeholder="Pesanan" required value="<?= $pesanan["pesanan"]; ?>">
            <div class="invalid-feedback">
                Please provide a valid Pesanan.
            </div>
        </div>
         <div class="col-md mb-3">
            <label for="validationCustom05">Nomer Hp</label>
            <input type="text" name="no_hp" class="form-control" id="validationCustom05" placeholder="Nomer Hp" required value="<?= $pesanan["no_hp"]; ?>">
            <div class="invalid-feedback">
                Please provide a valid Nomer Hp.
            </div>
        </div>
        <button class="btn btn-primary" type="submit" name="submit">Submit Form</button>
    </div>
</form>

<?php	

}
?>

<?php if($_GET['update']=="user"){ 
	$id = $_GET['id'];
	$delete = $manda->query("DELETE FROM pesanan WHERE id='$id'");
	// $delete2 = mysqli_query($koneksi,"DELETE FROM services WHERE id_customer='$id'");
	if($delete){
		echo '<script language="javascript">alert("Data Berhasil di hapus !!!"); document.location="dashboard.php?page=content&data=pesanan";</script>';
	}else{
		echo '<script language="javascript">alert("Data Gagal di hapus !!!"); document.location="dashboard.php?page=content&data=pesanan";</script>';
	}
}
?>