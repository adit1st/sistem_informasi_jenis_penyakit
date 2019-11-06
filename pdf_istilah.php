<?php

session_start();

if (!isset($_SESSION["Login"])) {
	header("Location: login.php");
	exit;
}

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

<?php
$html = ob_get_contents();
ob_end_clean();
        
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Istilah.pdf', 'l');
?>

