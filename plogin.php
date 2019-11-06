<?php 

session_start();

require  'function.php';

$user = $_POST['username'];
$pass = $_POST['password'];


$result = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username = '$user'");

//cek username
if (mysqli_num_rows($result)===1) {
//cek password
	$row = mysqli_fetch_assoc($result);

	if (password_verify($pass, $row["password"])) {

//set session
		$_SESSION["Login"] = $user;

		//cek remember me
		if (isset($_POST["remember"])) {
		//buat cookie
			setcookie('id', $row['id'], time()+60*60*24*30*12);
			setcookie('key', hash('sha256', $row['username']), time()+60*60*24*30*12);
		}

		echo "<script languege='JavaScript'>
		alert('Login Berhasil')
		document.location = 'index.php'
		</script>";

	} else {
		echo "<script languege='JavaScript'>
		alert('Login Gagal')
		document.location = 'login.php'
		</script>";

	}

}

?>
