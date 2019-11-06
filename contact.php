<?php 

session_start();

if (!isset($_SESSION["Login"])) {
	header("Location: login.php");
	exit;
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sehat.ID - Contact</title>
	<link rel="icon" type="image/png" href="img/hb.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/animasi.css">
	<style type="text/css">
	body{
		background: #E6E6FA;
		user-select:none;
		-moz-user-select:none;
		-ms-user-select:none;
		-webkit-user-select:none;
	}
	a:visited {
		color: #878787;
	}
	a:hover {
		color: black;
	}
	html,body{
		height: 100%;
	}
	#container{
		min-height: 100%;
		position: relative;
	}
	
	.footer{
		width: 100%;
		height: 102spx;
		position: absolute;
		bottom: 0px;
	}
	.hd{
		font-family: Georgia, serif;
		font-weight: bold;
	}

</style>
</head>
<body>
	
	<?php 
	require 'nav.php';
	?>
	<div id="container">
		<div class="p-3 col-md-3 container" style="text-align: center;">
			

			<H1 class="hd animated jackInTheBox" style="padding-top: 35%;">Contact Me</H1><br><br><br>

			<div class="animated zoomIn" style="text-align: justify; margin-left: 15%;">
				<img src="img/google.png"><a style="margin-left: 2%; font-weight: bold;">: &nbsp; adityarizkypm@gmail.com</a><br><br>
				<img src="img/whatsapp.png"><a style="margin-left: 2%; font-weight: bold;">: &nbsp; 087864715805</a><br><br>
				<img src="img/twitter.png"><a style="margin-left: 2%; font-weight: bold;">: &nbsp; adit__1st</a><br><br>
				<img src="img/line.png"><a style="margin-left: 2%; font-weight: bold;">: &nbsp; adit1st</a><br><br>
				<img src="img/instagram.png"><a style="margin-left: 2%; font-weight: bold;">: &nbsp; adit1st</a><br><br>
			</div>
		</div>
		<?php 
		require "footer.php"
		?>
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>