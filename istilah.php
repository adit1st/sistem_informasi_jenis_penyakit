<?php 
session_start();

if (!isset($_SESSION["Login"])) {
	header("Location: login.php");
	exit;
}

require 'function.php';
$istilah = tampil("SELECT * FROM v_istilah");


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sehat.ID - Istilah Penyakit</title>
	<link rel="icon" type="image/png" href="img/hb.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/animasi.css">
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
		height: 50px;
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
		<div class="container" style="margin-top: 5%;">
			<h2 class="hd animated bounceInLeft" style="text-align: center; padding-top: 2%;">Istilah dalam Penyakit</h2><br>
			<table class="table table-striped tabl-hover" id="myTable">
				<thead>
					<tr class="alert-danger">
						<th>Kode</th>
						<th>Nama Penyakit</th>
						<th>Definisi</th>
					</tr>
				</thead>
				<tbody>

					<?php foreach ($istilah as $i) { ?>
						<tr>
							<td><?= $i["kode"]; ?></td>
							<td><?= $i["namapenyakit"]; ?></td>
							<td><?= $i["definisi"]; ?></td>
						</tr>	
					<?php } ?>
				</tbody>
			</table>
		</div>
		<center style="padding-bottom: 8%;">
			<a href="excel_istilah.php"><button class="btn btn-success btn-sm btn " type="submit" name="batal" style="width: 170px;"><i class="fas fa-file-excel"></i> EXPORT TO EXCEL</button></a>
			<a href="pdf_istilah.php"><button class="btn btn-danger btn-sm btn " type="submit" name="batal" style="width: 170px;"><i class="fas fa-file-pdf"></i> EXPORT TO PDF</button></a>
		</center>
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