<?php

session_start();

if (!isset($_SESSION["Login"])) {
	header("Location: login.php");
	exit;
}

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Istilah_Penyakit.xls");

require 'function.php';
$istilah = tampil("SELECT * FROM v_istilah");

?>
<table border="1">
	<thead>
		<tr>
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


