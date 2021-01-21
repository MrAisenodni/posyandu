<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V19</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
</head>
<?php require_once('config/koneksi.php');
if(isset($_POST['login'])){
	$mail = mysqli_real_escape_string($con, $_POST['uname']);
	$pw = mysqli_real_escape_string($con,md5($_POST['pass']));

	$sql = mysqli_query($con, "SELECT * FROM admin WHERE username='$mail' AND password='$pw'");
	$data = mysqli_fetch_array($sql);
	$num = mysqli_num_rows($sql);
	$sql2 = mysqli_query($con, "SELECT * FROM user WHERE username='$mail' AND password='$pw'");
	$data2 = mysqli_fetch_array($sql2);
	$num2 = mysqli_num_rows($sql2);

	if($num>0){
		if($data['kode_admin']!=null){
			session_start();
			$_SESSION['kode'] = $data['kode_admin'];
			$_SESSION['nama'] = $data['nama'];
			$_SESSION['alamat'] = $data['alamat'];
			$_SESSION['hp'] = $data['hp'];
			$_SESSION['uname'] = $data['username'];

			header('location:admin/index.php?stat=login_success');
		}else{
			$sql = mysqli_query($con, "SELECT * FROM user WHERE username='$mail' AND password='$pw'");
			$data = mysqli_fetch_array($sql);

			session_start();
			$_SESSION['nik'] = $data['nik'];
			$_SESSION['nama'] = $data['nama'];
			$_SESSION['tmpt'] = $data['tempat_lahir'];
			$_SESSION['tgl'] = $data['hp'];
			$_SESSION['hp'] = $data['no_hp'];

			header('location:index.php?stat=login_success');
		}

	}else{
		header('location:login.php?stat=wrong');
	}
} ?>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-33">
						Login
					</span>

					<?php require_once('admin/alert.php'); ?>
					<div class="wrap-input100 validate-input" data_validate="Username is required">
						<input class="input100" type="text" name="uname" placeholder="Username">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" type="submit" name="login">
							Login
                        </button>
					</div>
					<div class="container-login100-form-btn m-t-20">
						<a class="login100-form-btn" href="index.php">
							Kembali
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>
</html>
