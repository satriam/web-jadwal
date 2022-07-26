<?php
session_start();
if (! empty($_SESSION['logged_in']))
{
	header("location: utama.php");
}
else
{
	?>
	<!doctype html>
	<html lang="en">
	  <head>
		  <title>Login
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="css/style.css">
	
		</head>
		<body>
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<script>alert('Login gagal! username dan password salah!');window.location='index.php'</script>";
				// echo "Login gagal! username dan password salah!";
			}else if($_GET['pesan'] == "logout"){
				echo "Anda telah berhasil logout";
			}else if($_GET['pesan'] == "belum_login"){
				echo "Anda harus login untuk mengakses halaman admin";
			}
		}
		?>
		<section class="ftco-section">
			<div class="container">
				<!-- <div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						<h2 class="heading-section">Login #04</h2>
					</div>
				</div> -->
				<div class="row justify-content-center">
					<div class="col-md-12 col-lg-10">
						<div class="wrap d-md-flex">
							<div class="img" style="background-image: url(images/bg-1.jpg);">
					  </div>
							<div class="login-wrap p-4 p-md-5">
						  <div class="d-flex">
							  <div class="w-100">
								  <h3 class="mb-4">Sign In</h3>
							  </div>
									<!-- <div class="w-100">
										<p class="social-media d-flex justify-content-end">
											<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
											<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
										</p>
									</div> -->
						  </div>
								<form action="login.php" class="signin-form" method="POST">
							  <div class="form-group mb-3">
								  <label class="label" >Username</label>
								  <input type="text" class="form-control" placeholder="Username" name="username" required>
							  </div>
						<div class="form-group mb-3">
							<label class="label" >Password</label>
						  <input type="password" class="form-control" placeholder="Password" name="password" required>
						</div>
						<div class="form-group">
							<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
						</div>
						<div class="form-group d-md-flex">
							<div class="w-50 text-left">
								<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
										  <input type="checkbox" checked>
										  <span class="checkmark"></span>
											</label>
										</div>
										<div class="w-50 text-md-right">
											<a href="#">Forgot Password</a>
										</div>
						</div>
					  </form>
					  
					</div>
				  </div>
					</div>
				</div>
			</div>
		</section>
	
		<script src="js/jquery.min.js"></script>
	  <script src="js/popper.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/main.js"></script>
	
		</body>
	</html>
	<?php
}
?>

