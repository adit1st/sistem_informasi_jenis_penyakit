<?php

session_start();

if (!isset($_SESSION["Login"])) {
	header("Location: login.php");
	exit;
}

require 'function.php';

// $user = $_POST['username'];

// $_SESSION['Login'] = $user;

$usern = tampil("SELECT * FROM tbl_user WHERE username = 'Aditya'")[0];

if (isset($_POST["simpan"])) {

	if (ubah3($_POST)>0) {
		echo "
		<script>
		alert('Data Berhasil Diupdate');
		document.location.href='editprofile.php';
		</script>
		";

	} else {
		echo "
		<script>
		alert('Data Gagal Diupdate');
		document.location.href='editprofile.php';
		</script>
		";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ubah Data Penyakit</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<style type="text/css">
	body{
		background: #E6E6FA;
		user-select:none;
		-moz-user-select:none;
		-ms-user-select:none;
		-webkit-user-select:none;
	}
	a:visited {
		color: #878787;
	}
	a:hover {
		color: black;
	}
</style>
</head>
<body>

	<?php 
	require 'nav.php';
	?>

	<div class="p-3 col-md-8 container" style="margin-top: 5%;">

		<form class="alert alert-info text-dark" action="" method="post">

			<h1 class="text-center form-group">Ubah Profile</h1>

			<input type="hidden" name="id" value="<?= $usern['id']; ?>">

			<div class="form-group">
				<label>Nama Lengkap</label>
				<input type="text" name="nama_lengkap" class="form-control" required="required" autocomplete="off" value="<?= $usern['nama_lengkap']; ?>">
			</div>

			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" required="required" autocomplete="off" value="<?= $usern['username']; ?>">
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="text" name="password" class="form-control" required="required" autocomplete="off" value="<?= $usern['password']; ?>">
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" required="required" autocomplete="off" value="<?= $usern['email']; ?>">
			</div>		

			<button class="btn btn-primary btn-sm btn " type="submit" name="simpan" style="width: 150px;">Simpan</button>
			<button class="btn btn-danger btn-sm btn " type="submit" name="batal" style="width: 150px;">Batal</button>
			
		</form>
	</div>
</div>

<div class="card text-white bg-info mb-6" style="max-width: 100rem; margin-top: 50px;">
	<div class="card-body">
		<h5 class="card-title text-center">Copyright &copy; 2019 Adit1st</h5>
		<p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	</div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready( function () {
		$('#myTable').DataTable();
	} )
</script>

</body>
</html>