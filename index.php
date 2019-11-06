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
	<title>Sehat.ID - Home</title>
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

	.hd{
		font-family: Georgia, serif;
		font-weight: bold;
	}
	.hd2{
		font-family: Georgia, serif;
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
		height: 50px;
		position: absolute;
		bottom: 0px;
	}

</style>
</head>
<body>
	
	<?php 
	require 'nav.php';
	?>

	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="img/bg.jpg" alt="First slide">
				<div class="carousel-caption d-none d-md-block">
					<h4 class="hd animated zoomIn" style="color: black;">Kenali Berbagai Jenis Penyakit dari Sekarang</h4>
					<p class="hd2 animated zoomIn" style="color: black;">Kesehatan Anda adalah yang nomor 1</p>
				</div>
			</div>
		</div>
	</div>
	<div id="container">
		<div class="p-3 col-md-8 container animated slideInRight" style="text-align: justify; margin-top: 3%;">
			<h2>PENGERTIAN KESEHATAN MENURUT WHO</h2>
			<p>Pengertian Kesehatan menurut wikipedia adalah keadaan sejahtera dari badan, jiwa, dan sosial yang memungkinkan setiap orang hidup produktif secara sosial dan ekonomis. Sedangkan Pengertian Kesehatan menurut Organisasi Kesehatan Dunia (WHO) tahun 1948  menyebutkan bahwa pengertian kesehatan adalah sebagai “suatu keadaan fisik, mental, dan sosial kesejahteraan dan bukan hanya ketiadaan penyakit atau kelemahan”

			Pada tahun 1986, WHO, dalam Piagam Ottawa untuk Promosi Kesehatan, mengatakan bahwa pengertian kesehatan adalah “sumber daya bagi kehidupan sehari-hari, bukan tujuan hidup Kesehatan adalah konsep positif menekankan sumber daya sosial dan pribadi, serta kemampuan fisik.</p>


			<h2>PENGERTIAN KESEHATAN MENURUT UNDANG-UNDANG</h2>
			<p>Dalam Undang-Undang ini yang pengertian kesehatan adalah keadaan sejahtera dari badan, jiwa, dan sosial yang memungkinkan setiap orang hidup produktif secara sosial dan ekonomis.
				Upaya kesehatan adalah setiap kegiatan untuk memelihara dan meningkatkan kesehatan yang dilakukan oleh pemerintah dan atau masyarakat.
				Tenaga kesehatan adalah setiap orang yang mengabdikan diri dalam bidang kesehatan serta memiliki pengetahuan dan atau keterampilan melalui pendidikan di bidang kesehatan yang untuk jenis tertentu memerlukan kewenangan untuk melakukan upaya kesehatan.
				Sarana kesehatan adalah tempat yang digunakan untuk menyelenggarakan upaya kesehatan.
				Kesehatan adalah sesuatu yang sangat berguna
				Pemeliharaan kesehatan adalah upaya penaggulangan dan pencegahan gangguan kesehatan yang memerlukan pemeriksaan, pengobatan dan/atau perawatan termasuk kehamilan dan persalinan.

				Pendidikan kesehatan adalah proses membantu sesorang, dengan bertindak secara sendiri-sendiri ataupun secara kolektif, untuk membuat keputusan berdasarkan pengetahuan mengenai hal-hal yang memengaruhi kesehatan pribadinya dan orang lain.



				Definisi yang bahkan lebih sederhana diajukan oleh Larry Green dan para koleganya yang menulis bahwa pendidikan kesehatan adalah kombinasi pengalaman belajar yang dirancang untuk mempermudahadaptasi sukarela terhadap perilaku yang kondusif bagi kesehatan.

				Data terakhir menunjukkan bahwa saat ini lebih dari 80 persen rakyat Indonesia tidak mampu mendapatjaminan kesehatan dari lembaga atau perusahaan di bidang pemeliharaan kesehatan, seperti Akses, Taspen, dan Jamsostek.

			Golongan masyarakat yang dianggap ‘teranaktirikan’ dalam hal jaminan kesehatan adalah mereka dari golongan masyarakat kecil dan pedagang. Dalam pelayanan kesehatan, masalah ini menjadi lebih pelik, berhubung dalam manajemen pelayanan kesehatan tidak saja terkait beberapa kelompok manusia, tetapi juga sifat yang khusus dari pelayanan kesehatan itu sendiri</p>

			<h2>ASPEK-ASPEK KESEHATAN</h2>
			<p>Pada dasarnya kesehatan itu meliputi empat aspek, antara lain :</p>
			<ol type="A">
				<li>Kesehatan fisik terwujud apabila sesorang tidak merasa dan mengeluh sakit atau tidak adanya keluhan dan memang secara objektif tidak tampak sakit. Semua organ tubuh berfungsi normal atau tidak mengalami gangguan.</li>
				<li>Kesehatan mental (jiwa) mencakup 3 komponen, yakni pikiran, emosional, dan spiritual.
					Pikiran sehat tercermin dari cara berpikir atau jalan pikiran.
					Emosional sehat tercermin dari kemampuan seseorang untuk mengekspresikan emosinya, misalnya takut, gembira, kuatir, sedih dan sebagainya.
				Spiritual sehat tercermin dari cara seseorang dalam mengekspresikan rasa syukur, pujian, kepercayaan dan sebagainya terhadap sesuatu di luar alam fana ini, yakni Tuhan Yang Maha Kuasa. Misalnya sehat spiritual dapat dilihat dari praktik keagamaan seseorang. Dengan perkataan lain, sehat spiritual adalah keadaan dimana seseorang menjalankan ibadah dan semua aturan-aturan agama yang dianutnya.</li>
				<li>Kesehatan sosial terwujud apabila seseorang mampu berhubungan dengan orang lain atau kelompok lain secara baik, tanpa membedakan ras, suku, agama atau kepercayan, status sosial, ekonomi, politik, dan sebagainya, serta saling toleran dan menghargai.</li>

				<li>Kesehatan dari aspek ekonomi terlihat bila seseorang (dewasa) produktif, dalam arti mempunyai kegiatan yang menghasilkan sesuatu yang dapat menyokong terhadap hidupnya sendiri atau keluarganya secara finansial.

				Bagi mereka yang belum dewasa (siswa atau mahasiswa) dan usia lanjut (pensiunan), dengan sendirinya batasan ini tidak berlaku. Oleh sebab itu, bagi kelompok tersebut, yang berlaku adalah produktif secara sosial, yakni mempunyai kegiatan yang berguna bagi kehidupan mereka nanti, misalnya berprestasi bagi siswa atau mahasiswa, dan kegiatan sosial, keagamaan, atau pelayanan kemasyarakatan lainnya bagi usia lanjut.</li></ol>

				<h2>TUJUAN KESEHATAN DALAM SEGALA ASPEK</h2>
				<p>Salah satu tujuan nasional adalah memajukan kesejahteraan bangsa, yang berarti memenuhi kebutuhan dasar manusia, yaitu pangan, sandang, pangan, pendidikan, kesehatan, lapangan kerja dan ketenteraman hidup. Tujuan pembangunan kesehatan adalah tercapainya kemampuan untuk hidup sehat bagi setiap penduduk, jadi tanggung jawab untuk terwujudnya derajat kesehatan yang optimal berada di tangan seluruh masyarakat Indonesia, pemerintah dan swasta bersama-sama.</p>

				<h2>TUJUAN DAN RUANG LINGKUP KESEHATAN LINGKUNGAN</h2>

				<p>Tujuan dan ruang lingkup kesehatan lingkungan dapat dibagi menjadi dua, secara umum dan secara khusus. Tujuan dan ruang
				lingkup kesehatan lingkungan secara umum, antara lain:</p>

				<ul type="square">
					<li>Melakukan koreksi atau perbaikan terhadap segala bahaya dan ancaman pada kesehatan dan kesejahteraan hidup manusia.</li>
					<li>Melakukan usaha pencegahan dengan cara mengatur sumber-sumber lingkungan dalam upaya meningkatkan derajat kesehatan dan kesejahteraan hidup manusia.</li>
					<li>Melakukan kerja sama dan menerapkan program terpadu di antara masyarakat dan institusi pemerintah serta lembaga nonpemerintah dalam menghadapi bencana alam atau wabah penyakit menular.</li>
				</ul>

				<p>Adapun tujuan dan ruang lingkup kesehatan lingkungan secara khusus meliputi usaha-usaha perbaikan atau pengendalian terhadap lingkungan hidup manusia, yang di antaranya berupa:</p>

				<ul type="square">
					<li>Menyediakan air bersih yang cukup dan memenuhi persyaratan kesehatan.</li>
					<li>Makanan dan minuman yang diproduksi dalam skala besar dan dikonsumsi secara luas oleh masyarakat.</li>
					<li>Pencemaran udara akibat sisa pembakaran BBM, batubara, kebakaran hutan, dan gas beracun yang berbahaya bagi kesehatan dan makhluk hidup lain dan menjadi penyebab terjadinya perubahan ekosistem.</li>
					<li>Limbah cair dan padat yang berasal dari rumah tangga, pertanian, peternakan, industri, rumah sakit, dan lain-lain.</li>
					<li>Kontrol terhadap arthropoda dan rodent yang menjadi vektor penyakit dan cara memutuskan rantai penularan penyakitnya.</li>
					<li>Perumahan dan bangunan yang layak huni dan memenuhi syarat kesehatan.</li>
					<li>Kebisingan, radiasi, dan kesehatan kerja.</li>
					<li>Survei sanitasi untuk perencanaan, pemantauan, dan evaluasi program kesehatan lingkungan</li>
				</ul>

				<h2>TUJUAN PEMBANGUNAN KESEHATAN</h2>
				<p>Untuk jangka panjang pembangunan bidang kesehatan diarahkan untuk tercapainya tunuan utama sebagai berikut:</p>
				<ul type="square">
					<li>Peningkatan kemampuan masyarakat untuk menolong dirinya sendiri dalam bidang kesehatan.</li>
					<li>Perbaikan mutu lingkungan hidup yang dapat menjamin kesehatan.</li>
					<li>Peningkatan status gizi masyarakat.</li>
					<li>Pengurangan kesakitan (morbiditas) dan kematian (mortalitas).</li>
					<li>Pengembangan keluarga sehat sejahtera, dengan makin diterimanya norma keluarga kecil yang bahagia dan sejahtera.</li>
				</ul>

				<h2>DASAR-DASAR PEMBANGUNAN KESEHATAN</h2>
				<p>Dasar-dasar pembangunan nasional di bidang kesehatan adalah sebagai berikut:</p>
				<div style="padding-bottom: 10%;">
					<ul type="square">
						<li>Semua warga negara berhak memperoleh derajat kesehatan yang optimal agar dapat bekerja dan hidup layak sesuai dengan martabat manusia.</li>
						<li>Pemerintah dan masyarakat bertanggung jawab dalam memelihara dan mempertinggi derajat kesehatan rakyat.</li>
						<li>Penyelenggaraan upaya kesehatan diatur oleh pemerintah dan dilakukan secara serasi dan seimbang oleh pemerintah dan masyarakat.</li>
					</ul>
				</div>
			</div>
			<?php 
			require "footer.php";
			?>
		</div>

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</body>
	</html>
