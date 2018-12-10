<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url();?>assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="<?php echo base_url();?>assets/images/logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign Up</h2>
					</div>

					<div class="panel-body">
						
						<form action="<?php echo site_url('proses_register/register');?>" method="post">
							<div class="form-group mb-lg <?php if(empty($_SESSION["nama"])){echo"has-error";}else{} ?>">
								<label>Nama</label>
								<font color="red"><?php if(empty($_SESSION["nama"])){echo"*masukkan nama";}else{echo"";} ?></font>
								<input name="nama" value="<?php if(empty($_SESSION["nama"])){echo"";}else{echo $_SESSION["nama"];} ?>" type="text" class="form-control input-lg " id="inputError"/>
							</div>


							<div class="form-group mb-lg <?php if(empty($_SESSION["email"])){echo"has-error";}else{} ?>">
								<label>E-mail Address</label>
								<font color="red">
									<?php 
									if(empty($_SESSION["email"])){echo"*masukkan email";}
									?>
								</font>
								<input name="email" 
								value="<?php if(empty($_SESSION["email"])){echo"";}else{echo $_SESSION["email"];} ?>"" 
								type="email" class="form-control input-lg" id="inputError"/>
							</div>

							<div class="form-group mb-lg <?php if(empty($_SESSION["username"])){echo"has-error";}else{} ?>">
								<label>Username</label>
								<font color="red">
									<?php 
										if(empty($_SESSION["username"])){echo"*masukkan username";}
										elseif(empty($cek_user)){echo '';}elseif($cek_user > 0){echo '*username sudah ada';}
									?>
								</font>
								<input name="username" value="<?php if(empty($_SESSION["username"])){echo"";}else{echo $_SESSION["username"];} ?>" type="text" class="form-control input-lg" id="inputError"/>
							</div>

							<div class="form-group mb-none">
								<div class="row">
									<div class="col-sm-6 mb-lg <?php if(empty($_SESSION["pwd"])){echo"has-error";}else{} ?>">
										<label>Password</label>
										<input name="pwd" value="<?php if(empty($_SESSION["pwd"])){echo"";}else{echo $_SESSION["pwd"];} ?>" type="password" class="form-control input-lg" id="inputError"/>
										
										<font color="red">
											<?php if(empty($_SESSION["pwd"])){echo"*masukkan password";}else{echo"";} ?>
										</font>
										
									</div>

									<div class="col-sm-6 mb-lg <?php if(empty($_SESSION["pwd_confirm"])){echo"has-error";}else{} ?>">
										<label>Password Confirmation</label>
										<input name="pwd_confirm" value="<?php if(empty($_SESSION["pwd_confirm"])){echo"";}else{echo $_SESSION["pwd_confirm"];} ?>" type="password" class="form-control input-lg" id="inputError"/>
										<font color="red"><?php if(empty($_SESSION["pwd_confirm"])){echo"*masukkan password";}elseif($_SESSION["pwd"]!=$_SESSION["pwd_confirm"]){echo"*password tidak sama";}else{echo"";} ?></font>

									</div>
								</div>
							</div>

							<div class="row">
								
								<div class="col-sm-3 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Sign Up</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign Up</button>
								</div>
							</div>
						</form>
							

							<p class="text-center">Already have an account? <a href="<?php echo site_url('view_login/page_login');?>">Sign In!</a>

					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo base_url();?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url();?>assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url();?>assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url();?>assets/javascripts/theme.init.js"></script>

	</body>
</html>