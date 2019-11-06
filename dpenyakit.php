<?php

session_start();

if (!isset($_SESSION["Login"])) {
	header("Location: login.php");
	exit;
}

require 'function.php';
$penyakit = tampil("SELECT * FROM tbl_penyakit");


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sehat.ID - Jenis Penyakit</title>
	<link rel="icon" type="image/png" href="img/hb.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/animasi.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
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
	html,body{
		height: 100%;
	}
	#container{
		min-height: 100%;
		position: relative;
	}
	
	.footer{
		width: 100%;
		height: 0px;
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
		<div class="container" style="margin-top: 5%; padding-bottom: 5%;">
			<h2 class="hd animated bounceInRight" style="text-align: center; padding-top: 2%;">Gejala dan Pengobatan Penyakit</h2><br>
			<table class="table table-striped" id="myTable">
				<thead>
					<tr class="alert-danger">
						<th>ID</th>
						<th>Aksi</th>
						<th>Nama Penyakit</th>
						<th>Foto</th>
						<th>Gejala</th>
						<th>Pengobatannya</th>
					</tr>
				</thead>
				<tbody>

					<?php foreach ($penyakit as $p) { ?>
						<tr>
							<td><?= $p["id"]; ?></td>

							<td>
								<div class="btn-group">
									<a style="margin-left: 2px;" href="update.php?id=<?= $p["id"]; ?>"><i class="fas fa-edit"></i></a>
									<a style="margin-left: 10px;" href="delete.php?id=<?= $p["id"]; ?>" onclick="return confirm('Yakin Ingin Hapus ?');"><i class="fas fa-trash-alt"></i></a>
								</div>
							</td>

							<td><?= $p["namapenyakit"]; ?></td>
							<td><?php if($p["foto"]==null) { ?> 
								<img src="img/no photo.png" width="70"></td> 
							<?php } else { ?>
								<img src="img/<?= $p["foto"]; ?>" width="70"></td>
							<?php } ?>
							<td><?= $p["gejala"]; ?></td>
							<td><?= $p["pengobatannya"]; ?></td>
						</tr>	
					<?php } ?>
				</tbody>
			</table>
		</div>

		<?php 
		require "footer.php";
		?>
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