<?php
$tz = 'Asia/Jakarta';
$dt = new DateTime("now", new DateTimeZone($tz));
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>DIGITALINDO</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="<?= base_url(); ?>assets/login/js/jquery.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/theme.min.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap.min.css">


	<!-- <script src="<?= base_url(); ?>https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
	<script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/perfect-scrollbar.min.js"></script>


	<!-- <script type="text/javascript" src="<?= base_url(); ?>../assets/login/js/jquery.backstretch.min.js"></script>
    <script src="<?= base_url(); ?>../assets/login/js/jqueryform.js"></script>
    <script src="<?= base_url(); ?>../assets/login/js/validate.js"></script>
    <script src="<?= base_url(); ?>../assets/login/js/login.js"></script> -->
	<style>
		.form-control:focus {
			color: #495057;
			background-color: #fff;
			border: 1.6px solid #00297B;
			/* border-color: #80bdff; */
			outline: 0;
			/* box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25) */
		}

		i.focus {
			color: #00297B;
		}

		.lock {
			margin-top: -71px;
			margin-left: 11px;
			width: 25px;
		}

		/* .img {
        margin-top: 20%;
      } */



		@media screen and (max-width: 600px) {
			.time {
				font-size: 11px;
			}

			/* .img {
          margin-top: 10%;
        } */
		}
	</style>

</head>

<body>
	<div class="auth-wrapper">
		<div class="container-fluid h-100">
			<div class="row flex-row h-100 bg-white">

				<div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
					<div class="authentication-form mx-auto">
						<center>
							<img src="<?= base_url(); ?>assets/img_track/image 18.png" alt="" class="img" style="width: 20%;">
							<p style="font-size: 38px; font-weight: 600; color: #00297B;">Welcome Back!</p>
							<p style="padding-top: 0; font-size: 19px; font-weight: 600; color: #00297B;">Please Login Here</p>
						</center>
						<form method="POST" action="" accept-charset="UTF-8" id="login" novalidate="novalidate">
							<input type="hidden" name="Latitude" id="Latitude">
							<input type="hidden" name="Longitude" id="Longitude">

							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" autofocus="autofocused" id="username" name="username" value="" style="height: 50px; border-radius: 8px; color: #00297B;">
								<img src="<?= base_url(); ?>assets/img_track/unameIcon.png" class="lock">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" id="password" name="password" value="" style="height: 50px;border-radius: 8px;color: #00297B;">
								<img src="<?= base_url(); ?>assets/img_track/passwordIcon.png" class="lock">
							</div>

							<div class="form-group">
								<!-- <input class="m-btn blue form-contro" style="width:90px" type="submit" value="Login"> -->
								<button type="submit" class="form-control btn" id="btnlog" style="background: #00297B; color: #ffffff;height: 50px; border-radius: 8px;">Login <i class="fas fa-arrow-alt-circle-right" style="color: #FFC602;"></i></button>
							</div>
							<div id="login_result"></div>
						</form>
						<br>
						<p class="time" style="color: #00297B; text-align: center;"><img src="<?= base_url(); ?>assets/img_track/timeIcon.png" alt="" style="width: 20px;"> <?= $dt->format('l, d M Y, G:i:s') ?></p>
						<br><br>
						<br><br>
						<div class="atas" style="border-top:none;font-size:12px;color:#034EA2;text-align: center; margin-top: 40px;"> <strong>Copyright &copy; 2015 <a target="_blank" style="color: #034EA2;" href="https://digitalindo.co.id/">DIGITALINDO</a>.</strong> All rights reserved.</div>
					</div>
				</div>
				<div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
					<div class="lavalite-bg" style="background-image: url('<?= base_url(); ?>assets/img_track/Background Track.png')">
						<div class="lavalite-overlay"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9GnjfzSzmv-fW4XE_msHjVUQ_fkLWEDI&sensor=false&language=id"></script>