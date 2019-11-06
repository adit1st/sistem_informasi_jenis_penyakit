<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<style type="text/css">
	.fn{
		font-family: Georgia, serif;
	}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top fn">
	<a class="navbar-brand" >Sehat.ID</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item <?php echo (basename($_SERVER['REQUEST_URI'])=='index.php' ?'active' : ''); ?>" >
				<a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
			</li>

			<li class="nav-item dropdown <?php echo (basename($_SERVER['REQUEST_URI'])=='ispenyakit.php' ?'active' : ''); ?> <?php echo (basename($_SERVER['REQUEST_URI'])=='jpenyakit.php' ?'active' : ''); ?>">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-book"></i> Informasi
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item <?php echo (basename($_SERVER['REQUEST_URI'])=='istilah.php' ?'active' : ''); ?>" href="istilah.php">Istilah dalam Penyakit</a>
					<a class="dropdown-item <?php echo (basename($_SERVER['REQUEST_URI'])=='penyakit.php' ?'active' : ''); ?>" href="penyakit.php">Gejala dan Pengobatan Penyakit</a>

				</div>	
			</li>

			<li class="nav-item <?php echo (basename($_SERVER['REQUEST_URI'])=='contact.php' ?'active' : ''); ?>">
				<a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
			</li>

			<?php 
			if ($_SESSION["Login"] == "Aditya") { ?>
				<li class="nav-item dropdown <?php echo (basename($_SERVER['REQUEST_URI'])=='distilah.php' ?'active' : ''); echo (basename($_SERVER['REQUEST_URI'])=='dpenyakit.php' ?'active' : ''); echo (basename($_SERVER['REQUEST_URI'])=='tistilah.php' ?'active' : ''); echo (basename($_SERVER['REQUEST_URI'])=='tpenyakit.php' ?'active' : '');?>">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-tools"></i> Edit Data
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item <?php echo (basename($_SERVER['REQUEST_URI'])=='distilah.php' ?'active' : ''); ?>" href="distilah.php">Data Istilah</a>
						<a class="dropdown-item <?php echo (basename($_SERVER['REQUEST_URI'])=='dpenyakit.php' ?'active' : ''); ?>" href="dpenyakit.php">Data Penyakit</a>
						<a class="dropdown-item <?php echo (basename($_SERVER['REQUEST_URI'])=='tistilah.php' ?'active' : ''); ?>" href="tistilah.php">Tambah Data Istilah</a>
						<a class="dropdown-item <?php echo (basename($_SERVER['REQUEST_URI'])=='tpenyakit.php' ?'active' : ''); ?>" href="tpenyakit.php">Tambah Data Penyakit</a>
					</div>	
				</li>
			<?php } ?>



		</div>

		<div class="nav justify-content-end">
			<li class="nav-item">
				<a class="nav-link"><i class="fas fa-user"></i> <?php echo $_SESSION["Login"];  ?></a>
			</li>


			<li class="nav-items">
				<a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Log Out </a>
			</li>
		</div>
	</ul>
</nav>