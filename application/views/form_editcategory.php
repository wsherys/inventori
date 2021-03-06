<!doctype html>
<html class="fixed">
	<head> 
	</head>

	<body>
		<section role="main" class="content-body">
			<header class="page-header">
				<h2>Category</h2>
			
				<div class="right-wrapper pull-right">
					<ol class="breadcrumbs">
						<li>
							<a href="<?php echo site_url('category/page_add');?>">
								<i class="fa fa-home"></i>
							</a>
						</li>
						<li><span>Data Category</span></li>
						<li><span>Edit Category</span></li>
					</ol>
			
					<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
				</div>
			</header>


			<div class="row">
				
				<div class="col-md-12">
					<!-- body page -->
					<section class="panel">
						<?php
							if($sukses=="sukses")
							{
								echo '
								<div class="alert alert-success alert-dismissible fade in">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>Success!</strong> Sukses menambah form inventory pc.
								</div>
								';
							}
							elseif($sukses=="")
							{
								echo '';
							}
							elseif($sukses=="notvalid")
							{
								echo '
								<div class="alert alert-danger alert-dismissible fade in">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>Info!</strong> Mohon lengkapi form dibawah ini.
								</div>
								';
							}
							elseif($sukses=="suksesdel")
							{
								echo '
								<div class="alert alert-success alert-dismissible fade in">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>Success!</strong> Sukses menghapus data.
								</div>
								';
							}
						?>
					</section>
				</div>

				<div class="col-md-12">
					<!-- body page -->
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="fa fa-caret-down"></a>
								<!-- <a href="#" class="fa fa-times"></a> -->
							</div>
							<h2 class="panel-title">Form Edit Category</h2>
						</header>
						<div class="panel-body">

							<form class="form-horizontal form-bordered" method="post" action="<?php echo site_url('crud_category/confirm_edit');?>">
								
								<!-- 2 -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Nama Kategori</label>
									<div class="col-md-6">
										<input type="hidden" name="id" value="<?php echo $id;?>" placeholder="masukkan kategori" class="form-control">
										<input type="text" name="nama_kategori" value="<?php echo $nama_kategori;?>" placeholder="masukkan kategori" class="form-control">
									</div>
								</div>

								<!-- 2 -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Keterangan Spesifikasi</label>
									<div class="col-md-6">
										<input type="text" name="spesifikasi" value="<?php echo $spesifikasi;?>" placeholder="masukkan spesifikasi" class="form-control">
									</div>
								</div>

								<!-- 2 -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Kondisi</label>
									<div class="col-md-6">
										<select name="kondisi" class="form-control">
											<option value="<?php echo $kondisi;?>"><?php echo $kondisi;?></option>
											<option value="Baru">Baru</option>
											<option value="Bekas">Bekas</option>
										</select>
									</div>
								</div>

								<!-- 2 -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Serial number</label>
									<div class="col-md-6">
										<input type="text" name="sn" value="<?php echo $sn;?>" placeholder="masukkan serial number" class="form-control">
									</div>
								</div>

								<!-- 2 -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Product number</label>
									<div class="col-md-6">
										<input type="text" name="pn" value="<?php echo $pn;?>" placeholder="masukkan product number" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-4 text-right">
										<input type="submit" class="btn btn-primary">
										</form>

										<a href="<?php echo site_url('category/page_category');?>">
											<input type="button" value="kembali" class="btn btn-default">
										</a>
									</div>
								</div>

							
						</div>
					</section>
				</div>

				
			</div>


			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
								
								<!-- <h6>Form Tasks</h6>
								<div style="padding: 2%;">
									<form action="" method="post" class="form-inline">
										<input type="" name="datetask" placeholder="date" class="form-control input-sm">
										<input type="title" name="title" placeholder="title" class="form-control input-sm">
										<input type="task" name="task" placeholder="task" class="form-control input-sm">

										<button type="submit" class="btn btn-primary btn-sm">submit</button>
									</form>
								</div> -->

								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							
			
						</div>
					</div>
				</div>
			</aside>
			
		</section>


		

		<!-- Vendor -->
		<script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url();?>/assets/vendor/pnotify/pnotify.custom.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>

		<script src="<?php echo base_url();?>/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/select2/select2.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/fuelux/js/spinner.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/dropzone/dropzone.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/bootstrap-markdown/js/markdown.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/bootstrap-markdown/js/to-markdown.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/codemirror/lib/codemirror.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/codemirror/addon/selection/active-line.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/codemirror/addon/edit/matchbrackets.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/codemirror/mode/javascript/javascript.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/codemirror/mode/xml/xml.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/codemirror/mode/css/css.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/summernote/summernote.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/ios7-switch/ios7-switch.js"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url();?>/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url();?>/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url();?>/assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="<?php echo base_url();?>/assets/javascripts/ui-elements/examples.modals.js"></script>

		<script src="<?php echo base_url();?>/assets/javascripts/forms/examples.advanced.form.js" /></script>
		<script src="<?php echo base_url();?>/assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="<?php echo base_url();?>/assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="<?php echo base_url();?>/assets/javascripts/tables/examples.datatables.tabletools.js"></script>


	</body>
</html>