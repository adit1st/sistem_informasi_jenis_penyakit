<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sehat.ID - Daftar</title>
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
	<div class="fform" style="padding-top: 5%; opacity: 0.9;">
		<form action="pdaftar.php" method="post">
			<h2>Register</h2>
			<p class="hint-text">Create your account. It's free and only takes a minute.</p>

			<div class="form-group">
				<input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required="required" autocomplete="off">
			</div>

			<div class="form-group">
				<input type="Email" class="form-control" name="email" placeholder="Email" required="required" autocomplete="off">
			</div>	

			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Username" required="required" autocomplete="off">
			</div>

			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Password" required="required">
			</div>

			<div class="form-group">
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password" required="required">
			</div>        

			<div class="form-group">
				<button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
			</div>
		</form>
		<div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
	</div>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>