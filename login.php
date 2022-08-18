<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<!-- integrasi css bootstrap css -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- integrasi css buatan sendiri -->
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<!-- class login buatan sendiri -->
	<div class="login">
		<!-- container dari bootstrap -->
		<div class="container">
			<!-- form -->
			<form action="#" method="post" accept-charset="utf-8">

				<h4 class="text-center">Login administrator</h4>
				<hr>

				<p>masukan nama dan password anda</p>

				<p class="alert alert-warning">pasword salah</p>

				<p class="alert alert-success">telah logut</p>

				<div class="form-group mb-1">
					<label>Username</label>
					<input type="username" name="username" class="form-control" placeholder="username">
				</div>
				<div class="form-group mb-2">
					<label>password</label>
					<input type="password" name="password" class="form-control" placeholder="password">
				</div>

				<div class="form-group mb-3 justify-content-end">
					<button class="btn btn-success btn-lg" type="submit" name="submit">Login</button>
					<button class="btn btn-dark btn-lg" type="reset" name="submit">reset</button>
				</div>

				<hr>
				<p class="text-center">Kembali <a href="#">Beranda</a> | Lupa Password <a href="#">Reset Di sini</a></p>
			</form>
			<!-- end form -->
		</div>
		<!-- end clas container -->
	</div>
</body>
</html>
