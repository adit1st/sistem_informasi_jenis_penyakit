<?php

session_start();

if (!isset($_SESSION["Login"])) {
	header("Location: login.php");
	exit;
}

require 'function.php';

$kode = $_GET["kode"];

if (hapus2($kode)>0) {
	echo "
		<script>
		alert('Data Berhasil Dihapus');
		document.location.href='distilah.php';
		</script>
		";
}else{
	echo "
		<script>
		alert('Data Gagal Dihapus');
		document.location.href='distilah.php';
		</script>
		";
}

?>