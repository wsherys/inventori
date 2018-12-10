<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>BETA Inventory PC</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/pnotify/pnotify.custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />


		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/morris/morris.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/select2/select2.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/dropzone/css/basic.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/dropzone/css/dropzone.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/summernote/summernote.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/summernote/summernote-bs3.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/codemirror/lib/codemirror.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/codemirror/theme/monokai.css" />

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
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="<?php echo base_url();?>assets/images/logo.png" height="35" alt="JSOFT Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
			
					<span class="separator"></span>
			
					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-tasks"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Inventory
								</div>
			
								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Inventory PC</span>
												<span class="message pull-right text-dark"> <?php echo $jmlpc; ?> unit </span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $jmlpc; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $jmlpc; ?>%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Inventory Printer</span>
												<span class="message pull-right text-dark"><?php echo $jmlprinter; ?> unit </span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $jmlprinter; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $jmlprinter; ?>%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Inventory scanner</span>
												<span class="message pull-right text-dark"><?php echo $jmlscanner; ?> unit </span>
											</p>
											<div class="progress progress-xs light mb-xs">
												<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $jmlscanner; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $jmlscanner; ?>%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-envelope"></i>
								<!-- <span class="badge">4</span> -->
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">230</span>
									Messages
								</div>
			
								<div class="content">
									<ul>
										<li>
											<!-- <a href="#" class="clearfix">
												<figure class="image">
													<img src="<?php echo base_url();?>assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Doe</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a> --> no messages
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Alerts
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-lock bg-warning"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-signal bg-success"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2014</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="<?php echo base_url();?>assets/profil/<?php echo $image;?>" alt="<?php echo $nama;?>" class="img-circle" data-lock-picture="<?php echo base_url();?>assets/images/!logged-user.jpg" />
							</figure>

							<div class="profile-info" data-lock-name="<?php echo $nama;?>" data-lock-email="<?php if($kelas="ADMIN"){echo 'Administrator';}elseif($kelas="SUPERADMIN"){echo 'Super Administrator';}?>@itinventori.com">
								<span class="name"><?php echo $nama;  ?></span>
								<span class="role"><?php if($kelas="ADMIN"){echo 'Administrator';}elseif($kelas="SUPERADMIN"){echo 'Super Administrator';}?></span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<!-- <li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li> -->
								<li>
									<a role="menuitem" tabindex="-1" href="<?php echo site_url('clogin/logout');?>"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="<?php echo site_url('cdashboard/dashboard');?>">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									
									<li class="nav-parent">
										<a>
											<i class="fa fa-desktop" aria-hidden="true"></i>
											<span>Inventory</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="<?php echo site_url('cinv/inventory_pc');?>" >
													Inventory PC
												</a>
											</li>
											<li>
												<a href="<?php echo site_url('cinv/inventory_printer');?>">
													Inventory Printer
												</a>
											</li>
											<li>
												<a href="#3">
													Inventory Scanner
												</a>
											</li>
										</ul>
									</li>

									<li class="">
										<a href="<?php echo site_url('category/page_category');?>">
											<i class="fa fa-cubes" aria-hidden="true"></i>
											<span>Kategori Data</span>
										</a>
									</li>

									<li class="">
										<a href="<?php echo site_url('cpembelian/data_pembelian');?>">
											<i class="fa fa-money" aria-hidden="true"></i>
											<span>Data Pembelian</span>
										</a>
									</li>

									<li class="">
										<a href="#">
											<i class="fa fa-users" aria-hidden="true"></i>
											<span>Tambah Pengguna</span>
										</a>
									</li>

									<li class="">
										<a href="#">
											<i class="fa fa-building" aria-hidden="true"></i>
											<span>Tambah Proyek</span>
										</a>
									</li>
									
									
									<!-- <li>
										<a href="http://themeforest.net/item/JSOFT-responsive-html5-template/4106987?ref=JSOFT" target="_blank">
											<i class="fa fa-external-link" aria-hidden="true"></i>
											<span>Front-End <em class="not-included">(Not Included)</em></span>
										</a>
									</li> -->
								</ul>
							</nav>
				
							<!-- <hr class="separator" />
				
							<div class="sidebar-widget widget-tasks">
								<div class="widget-header">
									<h6>Projects</h6>
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul class="list-unstyled m-none">
										<li><a href="#">Stock IT</a></li>
										<li><a href="#">Stock GA</a></li>
									</ul>
								</div>
							</div>
				
							<hr class="separator" /> -->
				
							<div class="sidebar-widget widget-stats">
								<div class="widget-header">
									<h6>STATS</h6>
									
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul>
										<li>
											<?php 

											$unit1=$this->db->query("SELECT * FROM inventory_pc WHERE proyek='DISTRICT 8' ")->num_rows(); 


											if($unit1<=50){$u11=$unit1;}
											elseif($unit1<=100){$u11=50;}
											elseif($unit1<=150){$u11=90;}
											elseif($unit1<=199){$u11=95;}
											elseif($unit1>=199){$u11=100;}//batas 200
											

											?>
											<span class="stats-title">PC DISTRICT 8 </span>
											<span class="stats-complete"><?php echo $unit1; ?> Unit</span>
											<div class="progress">

												

												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="<?php echo $unit1;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $u11;?>%;">
													<span class="sr-only"> <?php echo $unit1;?> Unit</span>
												</div>
											</div>
										</li>
										<!-- <li>
											<span class="stats-title">Stat 2</span>
											<span class="stats-complete">70%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
													<span class="sr-only">70% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Stat 3</span>
											<span class="stats-complete">2%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
													<span class="sr-only">2% Complete</span>
												</div>
											</div>
										</li> -->
									</ul>
								</div>
							</div>
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

	</body>
</html>