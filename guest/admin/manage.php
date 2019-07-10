<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Katanya Kue - Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo" ><a style="color: #713900">Katanya Kue</a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="menu.php">Menu Kue</a></li>
						<li><a href="#">Manage Data</a></li>
						<li><a>||</a></li>
						<li><a href="formlogin.php">Login</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(sehat/header.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1 class="cursive-font primary-color">Selamat Datang !</h1>	
							<h3 class="cursive-font" style="color:white">Silahkan Login</h3>
							<h4 class="cursive-font" style="color:white">Jika belum menjadi member silahkan Daftar !</h4>
						</div>

						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 align="center" class="cursive-font">Manage Data</h3>
											<form action="managekue.php">
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<a href="formlogin.php">
														<input type="submit" class="btn btn-primary btn-block" value="Manage Kue"></a>
													</div>
												</div>
											</form>
											<form action="managebahan.php">
												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Manage Bahan">
													</div>
												</div>
											</form>
											<form action="managemember.php">
												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Manage Member">
													</div>
												</div>
											</form>
											<form action="manageincome.php">
												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Manage Income">
													</div>
												</div>
											</form>
											<form action="manageoutcome.php">
												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Manage Outcome">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>


						<!--<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">Tabel Reservasi</h3>
											<form action="#">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">Jumlah Kamera</label>
														<select name="#" id="activities" class="form-control">
															<option value="">Jumlah</option>
															<option value="">1</option>
															<option value="">2</option>
															<option value="">3</option>
															<option value="">4</option>
															<option value="">5+</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Tanggal</label>
														<input type="text" id="date" class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Jam</label>
														<input type="text" id="time" class="form-control">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Reservasi Sekarang">
													</div>
												</div>
											</form>	
										</div>
									</div>
								</div>
							</div>
						</div>-->
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

