<?php  

session_start();

require  'function.php';


//cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	//ambil username berdasarkan id
	$result = mysqli_query($conn, "SELECT username FROM tbl_user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	//cek cookie dan username
	if ($key === hash('sha256', $row['username'])) {
		$_SESSION['Login'] = $row['username'];
	}
}

if (isset($_SESSION["Login"])) {
	header("Location: index.php");
	exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sehat.ID - Login</title>
	<link rel="icon" type="image/png" href="img/hb.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
	body{
		background: url('img/bglogin.jpeg');
	}
</style> 
</head>
<body>
	<div style="text-align: center; padding-top: 4%;">
	<img src="img/text.png" width="1000px">
	</div>
	<div class="fform" style="padding-top: 5%; opacity: 0.9;">
		<form action="plogin.php" method="post">
			<h2 class="text-center">Login</h2>       
			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Username" required="required" autocomplete="off">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Password" required="required">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block">Sign in</button>
			</div>
			<div class="clearfix">
				<label class="pull-left checkbox-inline"><input type="checkbox" name="remember"> Remember me</label>
				
			</div>        
		</form>
		<p class="text-center"><a href="daftar.php">Create an Account</a></p>
	</div>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	

</body>
</html>