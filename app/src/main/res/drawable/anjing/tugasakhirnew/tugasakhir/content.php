<?php include"koneksi.php";
	$manda=new punyaku();
$manda->dbconnect();

require_once "functions.php";

// bila tombol cari ditekan, maka akan menjalankan function cari berdasarkan keyword


 ?>

<?php if($_GET['data']=='user'){ ?>
	<!-- <a href="" class="btn btn-dark">Tambah</a> -->
	<table width="100%" cellspacing="0" cellspacing="0" border="2" class="mt-3">
		<tr style="color: #fff; text-align: center; background-color: grey;">
			<td>No ID</td>
			<td>Email</td>
			<td>Username</td>
			<td>Password</td>
			<td>Aksi</td>
		</tr>
		<?php 
			$query = query("SELECT * FROM user");
			if (isset($_POST["cari"])) {
				    $query = searchUsers($_POST["keyword"]);
				}
	    	foreach ($query as $fetch) {
	    		
		?>
			<tr style="color: #fff;">
				<td style="text-align: center;"><?php echo $fetch['id']; ?></td>
				<td style="padding-left: 5px;"><?php echo $fetch['email']; ?></td>
				<td style="padding-left: 5px;"><?php echo $fetch['username']; ?></td>
				<td style="padding-left: 5px;"><?php echo $fetch['password']; ?></td>
				<td style="text-align: center;">
					<!-- <a href="" class="btn btn-dark">Edit</a>  -->
					<a href="delete.php?hapus=user&id=<?php echo $fetch[id]; ?>" class="btn btn-dark">Delete</a>
					<a href="update_user.php?update=user&id=<?= $fetch['id'] ?>" class="btn btn btn-dark">Update</a>
				
				</td>
			</tr>
		<?php } ?> 
		
		<div class="col">
			<form class="form-inline" action="" method="post">
			<div class="row">
			<div class="col-md-10">
				 <input class="form-control" type="search" name="keyword" placeholder="Search" aria-label="Search">
                   
			</div>
			<div class="col">
				<button class="btn btn-secondary" type="submit" name="cari">Search</button>
			</div>
            	
			</div>
			        
                </form>
	
		</div>
			
	
 		

	</table>
<?php }else if($_GET['data']=='pesanan'){ ?>
	<!-- <a href="" class="btn btn-dark">Tambah</a> -->
	<table width="100%" cellspacing="0" cellspacing="0" border="2" class="mt-3">
		<tr style="color: #fff; text-align: center; background-color: grey;">
			<td>No ID</td>
			<td>Nama</td>
			<td>Email</td>
			<td>Tanggal</td>
			<td>Jumlah</td>
			<td>Pesanan</td>
			<td>No. HP</td>
			<td>Aksi</td>
		</tr>
		<?php 
			$query = query("SELECT * FROM pesanan");
			if (isset($_POST["cari"])) {
				    $query = searchOrders($_POST["keyword"]);
				}
	    	foreach ($query as $fetch) {
	    		
		?>
			<tr style="color: #fff;">
				<td style="text-align: center;"><?php echo $fetch['id']; ?></td>
				<td style="padding-left: 5px;"><?php echo $fetch['nama']; ?></td>
				<td style="padding-left: 5px;"><?php echo $fetch['email']; ?></td>
				<td style="padding-left: 5px;"><?php echo $fetch['tgl']; ?></td>
				<td style="padding-left: 5px;"><?php echo $fetch['jumlah']; ?></td>
				<td style="padding-left: 5px;"><?php echo $fetch['pesanan']; ?></td>
				<td style="padding-left: 5px;"><?php echo $fetch['no_hp']; ?></td>
				<td style="text-align: center;">
					<!-- <a href="" class="btn btn-dark">Edit</a>  -->
					<a href="delete.php?hapus=pesanan&id=<?php echo $fetch[id]; ?>" class="btn btn-dark">Delete</a>
					<a href="update.php?update=pesanan&id=<?= $fetch['id'] ?>" class="btn btn btn-dark">Update</a>
					<!-- <a href="update.php?update=pesanan&id=<?php echo $fetch[id]; ?>" class="btn btn-dark">Update</a> -->
				</td>
			</tr>
		<?php } ?> 
		<div class="col">
			<form class="form-inline" action="" method="post">
			<div class="row">
			<div class="col-md-10">
				 <input class="form-control" type="search" name="keyword" placeholder="Search" aria-label="Search">
                   
			</div>
			<div class="col">
				<button class="btn btn-secondary" type="submit" name="cari">Search</button>
			</div>
            	
			</div>
	</table>
<?php } ?>