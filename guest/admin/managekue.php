<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Katanya Kue - Order Page</title>
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

	<!-- Google Font Gamja Flower -->
	<link href="https://fonts.googleapis.com/css?family=Gamja+Flower" rel="stylesheet">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a style="color: #713900">Katanya Kue</a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="menu.php">Menu Kue</a></li>
						<li class="active"><a href="#">Manage Kue</a></li>
						<li><a>||</a></li>
						<li><a href="logoutkoneksi.php">Logout</a></li>			
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(sehat/header.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">

					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
						<h1 class="cursive-font primary-color">Katanya Kue</h1>
						<h2><font face="cursive" color="white" style="font-family: 'Gamja Flower', cursive;">“Menjual Berbagai Macam Kue” </font></h2>
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	
	<div class="gtco-section">
		<div class="gtco-container">
      <div class="row">
          <div class="col-lg-8 ml-auto mr-auto">
          <h3>Data Kue</h3>
          <button type="button" class="btn btn-danger" data-toggle="modal"><h4> Delete </h4></button>| <button type="button" class="btn btn-info" data-toggle="modal"><h4> Update </h4></button>
          <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kue</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                /* Insert Your Query to get Data from database*/

                    include ("connection.php");
                    $sql = mysqli_query($conn,"SELECT * FROM kue");
                    $no = 0;
                    while ($data = mysqli_fetch_array($sql)) {
                      
                    
                    
                    ?>
                    <!-- Show data Here -->
                <tr>

                    <td><?php $no++; echo $no; ?></td>
                    <td><?php echo $data['namakue'];?></td>
                    <td><?php echo $data['harga'];?></td>
                    <td><?php echo $data['status'];?></td>
                    <td>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del<?php echo $data['idkue']; /*get ID From DB*/?>"><i class="fas fa-trash-alt"></i></button>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit<?php echo $data['idkue'];/*get ID From DB*/?>"><i class="fas fa-edit"></i></button>
                    </td>
                </tr>
                 <div class="modal fade" id="edit<?php echo $data['idkue'];/*Get id From DB*/?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <h5 class="modal-title" id="exampleModalLabel">Data <?php echo $data['namakue'];/*Get Name from DB*/?></h5>
                              <!-- Insert Form here -->
                              <form method="POST" action="fungsi.php">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Kue</label>
                                    <input type="text" class="form-control" name="namakue" value="<?php echo $data['namakue'];/*Get Name from DB*/ ?>">
                                      <!-- Create hidden input here to post id Users-->
                                    <input type="hidden" name="idkue" id="hiddenField" value="<?php echo $data['idkue'];?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Harga</label>
                                    <input type="text" class="form-control" name="harga" value="<?php echo $data['harga'];/*Get Name from DB*/ ?>">
                                      <!-- Create hidden input here to post id Users-->
                                    <input type="hidden" name="idkue" id="hiddenField" value="<?php echo $data['idkue'];?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Status</label>
                                   <select class="form-control" id="exampleFormControlSelect1" name="status">
                                      <option value=""> Select Status</option>
                                      <option value="Ready">Ready</option>
                                      <option value="Empty">Empty</option>
                                    </select>
                                  </div>
                                  <button type="submit" name="edit" class="btn btn-primary btn-block">Submit</button>
                                </form>                        
                            </div>
                    </div>
                  </div>
                </div>
                    <div class="modal fade" id="del<?php echo $data['idkue'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                         <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete <?php echo $data['namakue'];/*Get Name from DB*/?> ?</h5>
                      </div>
                      <div class="modal-footer">
                              <form method="POST" action="fungsi.php">
                                  <!-- Create hidden input here to post id Users-->
                                <input type="hidden" name="idkue" id="hiddenField" value="<?php echo $data['idkue'];?>">
                                <button type="submit" name="delete" class="btn btn-danger">YA</a>
                              </form>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">TIDAK</button>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                   }
                ?>
                
              </tbody>
            </table>
          </div>
      </div>
      
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
  <script src="js/bootstrap-4.0.0.js"></script>
  <script src="js/popper.min.js"></script>
      <script>
          $(document).ready(function() {
    $('#example').DataTable({
        "columns": [
            { "width": "1%"},
            null,
            null,
            null,
            null,
            null,
            { "width": "10%"}
            
            
  ]
    });
} );
      </script>

	<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">

				

				
				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>Grab it fast</h3>
						<ul class="gtco-quick-contact">
							<li><i class="icon-phone" style="color: #713900"></i> 087878719053</li>
							<li><i class="icon-mail2" style="color: #713900"></i> katanyakue@yahoo.com</li>
							<li><i class="icon-chat" style="color: #713900"></i><a href="aboutus.php" style="color: #757575"> Contact Our Owner</a></li>
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>Social Media</h3>
						<ul class="gtco-social-icons">
							<li><a href="#"><i class="icon-instagram" style="color: #713900"></i></a></li>
							<li><a href="#"><i class="icon-twitter" style="color: #713900"></i></a></li>
							<li><a href="#"><i class="icon-facebook" style="color: #713900"></i></a></li>
							<li><a href="#"><i class="icon-linkedin" style="color: #713900"></i></a></li>
							<li><a href="#"><i class="icon-dribbble" style="color: #713900"></i></a></li>
						</ul>
					</div>
				</div>
		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
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

