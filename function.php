<?php

$conn = mysqli_connect("localhost", "root", "", "sehat.id");


function tampil($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[]=$row;
	}
	return $rows;
}

function tambah($data){
	global $conn;

	$np=htmlspecialchars($data["namapenyakit"]);
	$gj=htmlspecialchars($data["gejala"]);
	$pn=htmlspecialchars($data["pengobatannya"]);
	//$foto = $_FILES['foto'];

	if ($_FILES['foto']['error']===4) {
		$foto="";
	} else {

		$foto=upload();
		// if ( !$foto ) {
		// 	return false;
		//}
	}
	
	$query="INSERT INTO tbl_penyakit VALUE ('', '$np', '$foto', '$gj', '$pn')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function tambah2($data){
	global $conn;

	$id=htmlspecialchars($data["id"]);
	$de=htmlspecialchars($data["definisi"]);
	
	$query="INSERT INTO tbl_istilah VALUE ('', '$id', '$de')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function upload(){
	
	$namaFile = $_FILES['foto']['name'];
	$ukuranFile = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmpName = $_FILES['foto']['tmp_name'];

	// if ($error === 4) {
	// 	$a = "s";
	// 	// echo "<script> 
	// 	// alert('Foto wajib dimasukan!');
	// 	// </script>";
	// 	return $a;
	// }

	$ekstensigmb = explode('.', $namaFile);
	$ekstensigmb = strtolower(end($ekstensigmb));

	if ($ukuranFile > 1000000){
		echo "<script> 
		alert('Ukuran foto maksimal 1mb!');
		</script>";
		return false;
	}

	$fb = uniqid();
	$fb .= '.';
	$fb .= $ekstensigmb;
	

	move_uploaded_file($tmpName, 'img/' .$fb);

	return $fb;
}


function ubah($data){
	global $conn;

	$id=$data["id"];
	$np=htmlspecialchars($data["namapenyakit"]);
	$fotolama=$data["fotolama"];
	$gj=htmlspecialchars($data["gejala"]);
	$pn=htmlspecialchars($data["pengobatannya"]);

	if ($_FILES['foto']['error']===4) {
		$foto = $fotolama;
	} else {
		$foto=upload();
	}

	$query="UPDATE tbl_penyakit SET
	namapenyakit = '$np',
	foto = '$foto', 
	gejala = '$gj', 
	pengobatannya = '$pn' 
	WHERE id = $id";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah2($data){
	global $conn;

	$kode=$data["kode"];
	$id=htmlspecialchars($data["id"]);
	$df=htmlspecialchars($data["definisi"]);

	$query="UPDATE tbl_istilah SET
	id = '$id', 
	definisi = '$df'
	WHERE kode = $kode";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah3($data){
	global $conn;

	$id=$data["id"];
	$nl=htmlspecialchars($data["nama_lengkap"]);
	$us=htmlspecialchars($data["username"]);
	$ps=htmlspecialchars($data["password"]);
	$em=htmlspecialchars($data["email"]);

	$query="UPDATE tbl_user SET
	nama_lengkap = '$nl', 
	username = '$us', 
	password = '$ps',
	email = '$em' 
	WHERE id = $id";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM tbl_penyakit WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function hapus2($kode){
	global $conn;

	mysqli_query($conn, "DELETE FROM tbl_istilah WHERE kode = $kode");
	return mysqli_affected_rows($conn);
}
?>