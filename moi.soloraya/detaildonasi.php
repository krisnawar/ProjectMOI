<?php
session_start();
require_once('koneksi.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = mysqli_query($koneksi, "SELECT * FROM donasi_detail WHERE id_donasi_detail = $id");
	$data = mysqli_fetch_assoc($sql);
	$sql2 = mysqli_query($koneksi, "SELECT full_name from user WHERE username = (SELECT campaigner FROM donasi_detail WHERE id_donasi_detail = $id)");
	$data2 = mysqli_fetch_assoc($sql2);
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>SOLORAYA - Mahasiswa Ojol Indonesia</title>

		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" href="img_src/icon.ico">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>
	<body>
		<nav class="navbar navbar-default" data-spy="affix" data-offset-top="116" style="height: 115px;">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="img_src/header/left.png" height="80px" style="margin: 0 auto; margin-left: 130px;"></a>
			</div>
			<ul class="nav navbar-nav" style="margin: 25px auto;">
				<li><a href="index.php" style="margin-left: 50px;">Home</a></li>
				<li><a href="berita.php">Berita</a></li>
				<li><a href="tentangkami.php">Tentang Kami</a></li>
				<li class="dropdown active">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Donasi<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="formdonasi.php?donasiumum=true">Donasi Umum</a></li>
						<li><a href="daftardonasi.php">Pilih Daftar Donasi</a></li>
					</ul>
				</li>
				<li><a href="galang.php">Galang Dana</a></li>
				<ul class="nav navbar-nav navbar-right" style="margin-right: 10px;">
					<li>
						<a href="#"><span class="glyphicon glyphicon-user"></span> Welcome,
							<?php
							if(isset($_SESSION['login'])){
								echo $_SESSION['login'];
							} else {
								echo "Guest";
							}
							?>
						</a>
					</li>
					<li>
						<?php
						if(isset($_SESSION['login'])){
							echo "<a href=\"logout.php\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout</a>";
						} else {
						//echo "<a href=\"login.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a>";
							echo "<a href=\"#login\" style=\"margin-right: 50px\" data-toggle=\"modal\" data-target=\"#modal-login\"> Login</a>";
						}
						?>
					</li>
				</ul>
				<style>
				.navbar-nav li{
					padding: auto 1px;
				}
			</style>
		</ul>
	</nav>

	<div class="container-fluid" style="width: 80%;">
		<div id="qbootstrap-blog">
			<div class="row">
				<div class="col-md-8" style="background-color: white;">
					<div class="blog-wrap">
						<div class="row"><!--
							<div class="col-md-12">
								<a href="#" class="blog-img" style="background-image: url(images/blog-1.jpg);"></a>
							</div> -->
							<div class="col-md-12">
								<div class="blog-desc">
									<h2><?php echo $data["judul"]; ?></h2>
									<div class="col-md-12" style="margin-bottom: 50px;">
										<img src="<?php echo $data["img_src"]; ?>" width="100%">
									</div>
									<div style="margin: 50px 20px;">
										<h4><?php echo $data["keterangan"]; ?></h4><br>
										<p><?php echo $data["isi"]; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<aside class="sidebar" style="background-color: #FEFEFE;">
						<div class="side animate-box">
							<h3><?php echo "Rp. " . number_format($data["terkumpul"],2,",","."); ?></h3>
							<p>Terkumpul dari target <?php echo "Rp. " . number_format($data["target_donasi"],2,",","."); ?></p>
							<h1><a href="formdonasi.php?id=<?php echo $data["id_donasi_detail"]."&hash=".md5($data["id_donasi_detail"]);?>" class="btn btn-primary btn-block">Donasi Sekarang</a></h1>
							<br><h4><b>Pengusul : <br><?php echo $data2["full_name"]; ?></b></h4>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="container-fluid" style="width: 80%">
		<div class="container">
			<div class="row">
				<div class="col-md-8" style="padding-top: 10px;">
					<div>
						<div class="row">
							<h1><?php echo $data["judul"]; ?></h1>
							<div class="col-md-12">
								<img src="<?php echo $data["img_src"]; ?>" width="100%">
								<div class="blog-desc">
									<br><h4><?php echo $data["keterangan"]; ?></h4>
									<p><?php echo $data["isi"]; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<aside class="sidebar">
						<div class="side animate-box">
							<h1><?php echo "Rp. " . number_format($data["terkumpul"],2,",","."); ?></h1>
							<p>Terkumpul dari target <?php echo "Rp. " . number_format($data["target_donasi"],2,",","."); ?></p>
							<h1><a href="#" class="btn btn-primary btn-block">Donasi Sekarang</a></h1>
							<h2>Paragraph</h2>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div> -->

	<footer class="footer" style="background-color: #dee2e8; height: 35%; margin-top: 100px;">
    <div class="container">
      <div class="body-content" style="width: 95%; margin: 30px auto;">
        <div class="row">
          <div class="col-lg-4">
            <h4>Sekretariat</h4>
            <p>Warung Wedangan Radjiman, Laweyan, Surakarta, 57148</p>
          </div>
          <div class="col-lg-4">
            <h4>Kontak</h4>
            <span class="glyphicon glyphicon-envelope"></span><a href="#"> solo@moi.com</a><br>
            <span class="glyphicon glyphicon-phone"></span><a href="#"> +62 856 0222-2747</a>
          </div>
          <div class="col-lg-4">
            <h4>Feedback</h4>
            <p>Mohon kirim saran, kritik, bug maupun laporan anda kepada kami. Segala bentuk feedback kami apresiasi</p>
          </div>
        </div>
        <hr style="border-color: black;">
        <div>
          <h4 class="pull-left">&copy; MOI Soloraya <?= date('Y') ?></h4>
          <span class="pull-right">
            <a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
            <a href="https://www.twitter.com/" target="_blank" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a>
            <a href="https://google.co.id/" target="_blank" class="fa fa-google"></a>
            <a href="https://youtube.com/" target="_blank" class="fa fa-youtube"></a>
          </span>
          <style>
          .fa {
            padding: 10px;
            font-size: 25px;
            text-align: center;
            text-decoration: none;
            margin: 5px auto;
          }

          .fa:hover {
            opacity: 0.7;
          }
          .fa-facebook {
            background: #3B5998;
            color: white;
          }

          .fa-twitter {
            background: #55ACEE;
            color: white;
          }

          .fa-google {
            background: #dd4b39;
            color: white;
          }
          .fa-youtube {
            background: #bb0000;
            color: white;
          }

          .fa-instagram {
            background: #125688;
            color: white;
          }
          </style>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>
<?php
}
else{
	header('Location:index.php');
}
?>
