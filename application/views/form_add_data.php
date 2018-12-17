<!doctype html>
<html class="fixed">
	<head> 
	</head>

	<body>
		<section role="main" class="content-body">
			<header class="page-header">
				<h2>Inventory</h2>
			
				<div class="right-wrapper pull-right">
					<ol class="breadcrumbs">
						<li>
							<a href="<?php echo site_url('view_data/data_inventory');?>">
								<i class="fa fa-home"></i>
							</a>
						</li>
						<li><span>Inventory</span></li>
						<li><span>Inventory PC</span></li>
					</ol>
					&nbsp;&nbsp;&nbsp;
					<!-- <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a> -->
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
								<strong>Success!</strong> Sukses menambah form data.
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
								<strong>Info!</strong> Mohon lengkapi form data dibawah ini.
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
							<h2 class="panel-title">Form Data</h2>
						</header>
						<div class="panel-body">
							<form class="form-horizontal form-bordered" method="post" action="<?php echo site_url('proses_data/insert_data');?>">
								

								<!-- 2 -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Category</label>
									<div class="col-md-6">
										<select name="category" data-plugin-selectTwo class="form-control input-sm populate">
					                      <option value="PROCESSOR">PROCESSOR</option>
					                      <option value="PSU">PSU</option>
					                      <option value="RAM">RAM</option>
					                      <option value="VGA">VGA</option>
					                      <option value="HARDISK">HARDISK</option>
					                      <option value="MOTHERBOARD">MOTHERBOARD</option>
					                      <option value="LCD">LCD</option>
					                      <option value="KEYBOARD">KEYBOARD</option>
					                      <option value="MOUSE">MOUSE</option>

					                      <option value="PRINTER">PRINTER</option>
					                      <option value="SCANNER">SCANNER</option>
					                    </select>
									</div>
								</div>
								<!-- 2 -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Spesification</label>
									<div class="col-md-6">
										<input type="text" name="spesification" id="spek" onkeyup="spekk()" placeholder="input spesification" class="form-control input-sm">
									</div>
								</div>
								<!-- 2 -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Condition Item</label>
									<div class="col-md-6">
										<select name="condition" class="form-control input-sm">
											<option value="NEW">NEW/BARU</option>
											<option value="SECOND">SECOND/BEKAS</option>
										</select>
									</div>
								</div>
								<!-- 2 -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Serial Number</label>
									<div class="col-md-6">
										<input type="text" name="serial_number" placeholder="input serial number" class="form-control input-sm">
									</div>
								</div>
								<!-- 2 -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Product Number</label>
									<div class="col-md-6">
										<input type="text" name="product_number" placeholder="input product number" class="form-control input-sm">
									</div>
								</div>
								<!-- 2 -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Price Item</label>
									<div class="col-md-6">
										<input type="text" name="price" placeholder="input price item" id="price" class="form-control input-sm">
									</div>
								</div>
								
								

								<div class="form-group">
									<div class="col-md-4 text-right">
										<input type="submit" class="btn btn-primary">
										<a href="<?php echo site_url('view_data/data_inventory');?>">
											<input type="button" value="kembali" class="btn btn-default">
										</a>
									</div>
								</div>

							</form>
						</div>
					</section>
				</div>

				
			</div>


			<!-- <aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
								
								<h6>Form Tasks</h6>
								<div style="padding: 2%;">
									<form action="" method="post" class="form-inline">
										<input type="" name="datetask" placeholder="date" class="form-control input-sm">
										<input type="title" name="title" placeholder="title" class="form-control input-sm">
										<input type="task" name="task" placeholder="task" class="form-control input-sm">

										<button type="submit" class="btn btn-primary btn-sm">submit</button>
									</form>
								</div>

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
			</aside> -->
			
		</section>


		

		<!-- Vendor -->
		<script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- <script src="<?php echo base_url();?>/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> -->

		
		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url();?>/assets/vendor/pnotify/pnotify.custom.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="<?php echo base_url();?>/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
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

		<!-- select2 -->
		<script src="<?php echo base_url();?>/assets/vendor/select2/select2.js"></script>
		
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

		<!-- uppper -->
		<script>
		function spekk() 
		{
			var x = document.getElementById("spek");
			x.value = x.value.toUpperCase();
		}
		
		</script>
		<!-- uppper -->

		<!-- jquery-maskmoney-master -->
		<script src="<?php echo base_url();?>/assets/jquery-maskmoney-master/dist/jquery.maskMoney.js"></script>
		<script src="<?php echo base_url();?>/assets/jquery-maskmoney-master/dist/jquery.maskMoney.min.js"></script>

		<script>
		$(document).ready(function(){
		$('#price').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precision:0});
		});
		</script>
		<!-- jquery-maskmoney-master -->

	</body>
</html>