<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Detail</title>
	<!-- load icon -->
	<link rel="icon" href="images/kiw.png">
	<!-- integrasi css bootstrap.min.css -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- integrasi css buatan sendiri style.css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<!-- class container -->
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<div class="container">
				<a class="navbar-brand" href="index.php">Bcafe</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="navbar-nav me-auto mb-2 mb-md-1">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="galeri.php">Galeri</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="about.php">About</a>
						</li>
					</ul>
				<div>
				<a href="login.php" title="login" class="btn btn-secondary">Login</a>
				<a href="registrasi.php" title="register" class="btn btn-success">Register</a>
			</div>
		</div>
	</div>
</nav>
<!-- nav end -->
</div>
<!-- Start Kontak -->
	<div class="container kontak">
		<div class="row mt-5 ">
			<!-- hero pict -->
				<div class="col-md-12 mb-5 text-center">
				<h1>Detail Produk</h1>
			</div>
			<!-- end hero pict -->
			<!-- gambar produk -->
			<div class="col-md-5">
				<div class="card">
					<div class="card-body">
						<img src="images/gallery-4.jpg" class="card-img-top" alt="menu">
					</div>
				</div>
			</div>
			<!-- end hero pict -->
			<!-- gambar produk -->
			<div class="col-md-7">
				<div class="card">
					<div class="card-body">
						<h2>B'Cafe</h2>
						<h5>Hangout anytime & anywhere</h5>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<hr>	
						<p>
							<a href="#" class="btn btn-success">Order Via Whatsapp</a>
						</p>	
					</div>
				</div>
			</div>
			<!-- end detail produk -->
			<!-- produk lainnya -->
			<div class="col-md-12 text-center mt-3 mb-3">
				<hr>
				<h3>Produk lainnya</h3>
			</div>
			<!-- End Produk -->
			<!-- galeri -->
			<div class="col-md-4 col-sm-3 order-1 mb-3">
					<div class="card">
						<img src="images/menu-item-2.png" class="card-img-top" alt="mock up">
						<div class="card-body">
							<h5 class="card-title">Lumpia Salad Fresh</h5>
							<p class="card-title">Rp. 50.000</p>
							<p class="card-text">Lumpia dengan berbagai sayuran Fresh yang rendah kalori cocok untuk menu diet</p>
							<a href="detail.php" class="btn btn-primary">Detail</a>
							<a href="order.php" class="btn btn-success">Pesan</a>
						</div>
					</div>
				</div>
			<!-- end produk -->
			<!-- galeri -->
			<div class="col-md-4 col-sm-3 order-2 mb-3">
					<div class="card">
						<img src="images/menu-item-3.png" class="card-img-top" alt="mock up">
						<div class="card-body">
							<h5 class="card-title">Tomyam Slada Putih</h5>
							<p class="card-title">Rp. 60.000</p>
							<p class="card-text">Tomyam dengan berbagai toping dari daging biji-bijian dan bisa request toping</p>
							<a href="detail.php" class="btn btn-primary">Detail</a>
							<a href="order.php" class="btn btn-success">Pesan</a>
						</div>
					</div>
				</div>
			<!-- end produk -->
			<!-- galeri -->
			<div class="col-md-4 col-sm-3 order-3 mb-3">
					<div class="card">
						<img src="images/menu-item-5.png" class="card-img-top" alt="mock up">
						<div class="card-body">
							<h5 class="card-title">Beef Bolognese</h5>
							<p class="card-title">Rp. 100.000</p>
							<p class="card-text">Daging sapi asap Limausin dengan campuran toping ikan tenggiri dan bumbu khas dari nusa tenggara</p>
							<a href="detail.php" class="btn btn-primary">Detail</a>
							<a href="order.php" class="btn btn-success">Pesan</a>
						</div>
					</div>
				</div>
			<!-- end produk -->
		</div> 		
  	<!-- start footer -->
	<footer class="footer py-3 bg-light bottom-footer mt-3 rounded">
	  <div class="container col-sm-3">
	    <span class="text-muted">Mas Ar owekkk owekkk - <?php echo date ('Y') ?></span>
	  </div>
	  </footer>
<!-- end footer -->
  </div>
<!-- end kontak  -->
<!-- load Javascript at bootstrap -->
	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
