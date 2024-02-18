<?php 
	session_start();
	include 'config/config.php';
?>

<!doctype html>
<html lang="en">

<head>
	<title>Registrasi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="icon" href="../assets/img/logo.png" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<!-- My CSS-->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Seletize CSS -->
</head>

<body>
	<video id="video-background" autoplay loop muted>

		<source src="img/mylivewallpapers.com-Anime-Girl-Headphones.mp4" type="video/mp4">
		Maaf, browser Anda tidak mendukung pemutaran video.
	</video>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-md-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Admin </span><span>User</span></h6>
						<input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
						<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Log In Admin</h4>
											<form action="" method="POST">
												<div class="form-group">
													<input type="email" class="form-style" name="email" placeholder="Email">
													<i class="input-icon uil uil-at"></i>
												</div>
												<div class="form-group mt-2">
													<input type="password" class="form-style" name="password" placeholder="Password">
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<button type="submit" class="btn mt-4" name="btnlogin">Login</button>
											</form>

											<?php
											if ($_SERVER['REQUEST_METHOD'] == 'POST') {
												$pass = sha1($_POST['password']);
												$sqlCek = mysqli_query($conn, "SELECT * FROM login WHERE email='$_POST[email]' AND password='$pass' ");
												$jml = mysqli_num_rows($sqlCek);
												$d = mysqli_fetch_array($sqlCek);

												if ($jml > 0) {
													$_SESSION['admin'] = $d['id_user'];
													$_SESSION['nama_admin'] = $d['username'];


													echo "
															<script type='text/javascript'>
															setTimeout(function () { 
															
															swal('(Administrator) ', 'Login berhasil', {
															icon : 'success',
															buttons: {        			
															confirm: {
															className : 'btn btn-success'
															}
															},
															});    
															},10);  
															window.setTimeout(function(){ 
															window.location.replace('admin/dashboard.php');
															} ,3000);   
															</script>";
												} else {
													echo "
															<script type='text/javascript'>
															setTimeout(function () { 
															
															swal('Sorry!', 'Username / Password Salah', {
															icon : 'error',
															buttons: {        			
															confirm: {
															className : 'btn btn-danger'
															}
															},
															});    
															},10);  
															window.setTimeout(function(){ 
															window.location.replace('index.php');
															} ,3000);   
															</script>";
												}
											}
											?>


										</div>
									</div>
								</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-3 pb-3 text-capitalize">Log In User</h4>
											<form action="register.php" method="POST">
												<div class="form-group">
													<input type="text" class="form-style" name="nama" placeholder="Nama Lengkap">
													<i class="input-icon uil uil-user"></i>
												</div>
												<div class="form-group mt-2">
													<input type="text" class="form-style" name="text" placeholder="NIM">
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<button type="submit" class="btn mt-4" name="btnregister">Register</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="col-2"></div>
			</div>
		</div>
	</div>
	<script>
		var video = document.getElementById("video-background");
		video.play();
	</script>
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
</body>

</html>