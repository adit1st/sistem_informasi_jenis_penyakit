<?php 

session_start();

if (!isset($_SESSION["Login"])) {
	header("Location: login.php");
	exit;
}

require 'function.php';

$id = $_GET["id"];

if (hapus($id)>0) {
	echo "
		<script>
		alert('Data Berhasil Dihapus');
		document.location.href='dpenyakit.php';
		</script>
		";
}else{
	echo "
		<script>
		alert('Data Gagal Dihapus');
		document.location.href='dpenyakit.php';
		</script>
		";
}

?>