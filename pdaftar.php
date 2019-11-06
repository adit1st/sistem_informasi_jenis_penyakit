<?php 

require 'function.php';

$nama = $_POST['nama_lengkap'];
$email = $_POST['email'];
$user= $_POST['username'];
$pass = $_POST['password'];
$pass2 = $_POST['password2'];

$result = mysqli_query($conn, "SELECT username FROM tbl_user WHERE username ='$user'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
		alert('Username sudah ada!')
		document.location = 'daftar.php'
		</script>";
		return false;
	}

	if ($pass !== $pass2) {
		echo "<script>
		alert('Confirm password tidak sesuai!')
		document.location = 'daftar.php'
		</script>";
		return false;
	}

$password = password_hash($pass, PASSWORD_DEFAULT);

$query = "INSERT INTO tbl_user (nama_lengkap, username, password, email) 
VALUES ('$nama','$user','$password','$email')";

if (mysqli_query($conn, $query)) {

	echo "<script languege='JavaScript'>
	alert('Pendaftaran Berhasil')
	document.location = 'login.php'
	</script>";

} else {

	echo "<script languege='JavaScript'>
	alert('Pendaftaran Gagal')
	document.location = 'daftar.php'
	</script>";
}

?>
