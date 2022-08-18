<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>registrasi</title>
	<!-- Integrasi Bootstrap  -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- integrasi css login -->
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<!-- logo login -->
	<div class="logo login text-center bg-transparent mb-n5 mt-5">
		<img src="images/kiw.png" alt="logo nih">
	</div>
	<!-- end logo -->
	<!-- start form logo -->
	<div class="login">
		<h1 class="text-center mb-2 mt-2">Formulir Registrasi</h1>
		<p class="text-center alert alert-secondary">Isi Data Dengan Lengkap</p>

		<form action="#" method="post" accept-charset="utf-8">

			<div class="form-group mb-3">
				<input type="text" name="nama lengkap" class="form-control" placeholder="nama lengkap" required>
			</div>

			<div class="form-group mb-3">
				<input type="email" name="email" class="form-control" placeholder="email" required>
			</div>

			<div class="form-group mb-3">
				<input type="telepon" name="telepon" class="form-control" placeholder="telepon" required>
			</div>

			<div class="form-group mb-3">
				<input type="password" name="password" class="form-control" placeholder="password" required>
			</div>
			<din class="form-group mb-3">
				<div class="d-grid gap-2">
					<button class="btn btn-primary btn-lg" type="submit">Registrasi</button>
				</div>
			</din>
			<p>Sudah Memiliki akun? silakan login di disini <a href="login.php">Login Di sini </a></p>
		</form>
	</div>
</body>
</html>
