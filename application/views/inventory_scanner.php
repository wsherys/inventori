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
							<a href="<?php echo site_url('view_inventory/inventory_scanner');?>">
								<i class="fa fa-home"></i>
							</a>
						</li>
						<li><span>Inventory</span></li>
						<li><span>Inventory Scanner</span></li>
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
								<strong>Success!</strong> Sukses menambah form inventory scanner.
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
								<strong>Danger!</strong> Mohon lengkapi form inventory scanner dibawah ini.
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
							elseif($sukses=="suksesedit")
							{
								echo '
								<div class="alert alert-success alert-dismissible fade in">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>Success!</strong> Sukses mengubah data.
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
					
							<h2 class="panel-title">INVENTORY SCANNER</h2>
						</header>
						<div class="panel-body">
							<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								
								<div class="mb-md">
									<a href="<?php echo site_url('view_inventory/form_invscanner');?>">
										<button id="addToTable" class="btn btn-primary btn-sm"> <i class="fa fa-plus"></i>&nbsp; Add Inventory</button>
									</a>

									<button  id="delete" class="btn btn-danger btn-sm"><i class="fa fa-minus"></i>&nbsp; Delete Selected </button>

								</div>

								<thead>
									<tr>
										<th>Action</th>
										<th>Tanggal pembelian</th>
										<th>kode Scanner</th>
										<th>Spesifikasi Scanner</th>
										<th>Posisi Scanner</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$dbipc=$this->db->query("SELECT * FROM inventory_scanner ORDER BY id DESC")->result();
    								foreach ($dbipc as $value2){
									?>
									<tr class="gradeX">
										<td><input type="checkbox"  id="<?php echo $value2->id; ?>" name="id[]" value="<?php echo $value2->id; ?>"></td>
										<td><?php echo $value2->tgl_pembelian?></td>
										<td><?php echo $value2->kode_scanner?></td>
										<td><?php echo $value2->spesifikasi_scanner?></td>
										<td><?php echo $value2->posisi_scanner?></td>
										<td>
											<a href="<?php echo site_url('proses_inventory/page_editscanner');?>/?id=<?php echo $value2->id; ?>" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
											&nbsp;
											<a href="<?php echo site_url('proses_inventory/page_del_scanner');?>/?id=<?php echo $value2->id; ?>" class="on-default remove-row"><i class="fa fa-trash-o"></i>
											</a>
										</td>
									</tr>
									<?php } ?>
									
								</tbody>
							</table>
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

		<script>
		$(document).ready(function(){
		$('#checkAll').click(function(){
		if(this.checked){
		$('.checkbox').each(function(){
		this.checked = true;
		});   
		}else{
		$('.checkbox').each(function(){
		this.checked = false;
		});
		} 
		});

		$('#delete').click(function(){
			var dataArr  = new Array();
			if($('input:checkbox:checked').length > 0){
			$('input:checkbox:checked').each(function(){
			dataArr.push($(this).attr('id'));
			$(this).closest('tr').remove();
			});
			sendResponse(dataArr)
			}else{
			alert('No record selected ');
		}

		});  


		function sendResponse(dataArr){
		$.ajax({
		type    : 'post',
		url     : '<?php echo site_url('proses_inventory/select_delscanner'); ?>',
		data    : {'data' : dataArr},
		success : function(response){
		alert(response);
		window.location.href = '<?php echo site_url('view_inventory/inventory_scanner'); ?>'; 
		},
		error   : function(errResponse){
		alert(errResponse);
		window.location.href = '<?php echo site_url('view_inventory/inventory_scanner'); ?>'; 
		}                     
		});
		}

		});
		</script>


	</body>
</html>