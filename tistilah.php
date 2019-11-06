<?php

session_start();

if (!isset($_SESSION["Login"])) {
	header("Location: login.php");
	exit;
}

require 'function.php';


if (isset($_POST["simpan"])) {

	if (tambah2($_POST)>0) {
		echo "
		<script>
		alert('Data Berhasil Ditambahkan');
		document.location.href='distilah.php';
		</script>
		";

	} else {
		echo "
		<script>
		alert('Data Gagal Ditambahkan');
		document.location.href='tistilah.php';
		</script>
		";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sehat.ID - Tambah Data Istilah</title>
	<link rel="icon" type="image/png" href="img/hb.png">
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
	#container{
		min-height: 100%;
		position: relative;
	}
	.footer{
		width: 100%;
		height: 102px;
		position: absolute;
		bottom: 0px;
	}
	.hd{
		font-family: Georgia, serif;
		font-weight: bold;
	}
</style>
</head>
<body>

	<?php 
	require 'nav.php';
	?>
	<div id="container">
		<div class="p-3 col-md-8 container" style="margin-top: 5%;">

			<form class="alert alert-info text-dark" action="" method="post">

				<h1 class="text-center form-group hd">Tambah Data Istilah</h1>

				<div class="form-group">
					<label>ID Penyakit</label>
					<input type="text" name="id" class="form-control" required="required" autocomplete="off">
				</div>

				<div class="form-group">
					<label>Definisi</label>
					<input type="text" name="definisi" class="form-control" required="required" autocomplete="off">
				</div>

				<button class="btn btn-primary btn-sm btn " type="submit" name="simpan" style="width: 150px;">Simpan</button>
				<button class="btn btn-danger btn-sm btn " type="submit" name="batal" style="width: 150px;">Batal</button>

			</form>
		</div>
	</div>

<?php 
require "footer.php";
?>
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