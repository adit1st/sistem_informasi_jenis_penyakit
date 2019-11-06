<?php

session_start();

if (!isset($_SESSION["Login"])) {
	header("Location: login.php");
	exit;
}

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_Penyakit.xls");

require 'function.php';
$penyakit = tampil("SELECT * FROM tbl_penyakit");

?>
<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama Penyakit</th>
			<th>Gejala</th>
			<th>Pengobatannya</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($penyakit as $p) { ?>
			<tr>
				<td><?= $p["id"]; ?></td>
				<td><?= $p["namapenyakit"]; ?></td>
				<td><?= $p["gejala"]; ?></td>
				<td><?= $p["pengobatannya"]; ?></td>
			</tr>	
		<?php } ?>
	</tbody>
</table>
