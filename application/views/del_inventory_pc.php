<!doctype html>
<html class="fixed">
	<head> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>
		<section role="main" class="content-body">
			<header class="page-header">
				<h2>Inventory</h2>
			
				<div class="right-wrapper pull-right">
					<ol class="breadcrumbs">
						<li>
							<a href="<?php echo site_url('view_inventory/inventory_pc');?>">
								<i class="fa fa-home"></i>
							</a>
						</li>
						<li><span>Inventory</span></li>
						<li><span>Inventory PC</span></li>
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
								echo '
								
								';
							}
							elseif($sukses=="notvalid")
							{
								echo '
								<div class="alert alert-danger alert-dismissible fade in">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>Danger!</strong> Mohon lengkapi form inventory pc dibawah ini.
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
					
							<h2 class="panel-title">INVENTORY PC</h2>
						</header>
						<div class="panel-body">
							<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								
								<div class="mb-md">
									<a href="<?php echo site_url('cinv/form_invpc');?>">
										<button id="addToTable" class="btn btn-primary btn-sm"> <i class="fa fa-plus"></i>&nbsp; Add Inventory</button>
									</a>
									<button  id="delete" class="btn btn-danger btn-sm"><i class="fa fa-minus"></i>&nbsp; Delete Selected </button>

								</div>

								<thead>
									<tr>
										<th>Action</th>
										<th>Tanggal Diterima</th>
										<th>kode PC</th>
										<th>Processor</th>
										<th>PSU</th>
										<th>RAM</th>
										<th>VGA</th>
										<th>Hardisk</th>
										<th>Motherboard</th>
										<th>LCD</th>
										<th>Keyboard</th>
										<th>Mouse</th>
										<th>Proyek</th>
										<th>Pengguna</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$dbipc=$this->db->query("SELECT * FROM inventory_pc ORDER BY id DESC")->result();
    								foreach ($dbipc as $value2){
									?>
									<tr class="gradeX">
										<td><input type="checkbox"  id="<?php echo $value2->kode_pc; ?>" name="id[]" value="<?php echo $value2->kode_pc; ?>"></td>
										<td><?php echo $value2->tgl_digunakan?></td>
										<td><?php echo $value2->kode_pc?></td>
										<td><?php echo $value2->processor?></td>
										<td><?php echo $value2->psu?></td>
										<td><?php echo $value2->ram?></td>
										<td><?php echo $value2->vga?></td>
										<td><?php echo $value2->hardisk?></td>
										<td><?php echo $value2->motherboard?></td>
										<td><?php echo $value2->lcd?></td>
										<td><?php echo $value2->keyboard?></td>
										<td><?php echo $value2->mouse?></td>
										<td><?php echo $value2->proyek?></td>
										<td><?php echo $value2->pengguna?></td>
										<td><a href="<?php echo site_url('crudinventory/page_delete');?>/?kode_pc=<?php echo $value2->kode_pc; ?>" class="on-default remove-row"><i class="fa fa-trash-o"></i></a></td>
									</tr>
									<?php } ?>
									
								</tbody>
							</table>
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

		
		<!-- submit -->
		<!-- Modal auto backdrop-->
	    <div class="modal fade" id="myModal" role="dialog">
	      <div class="modal-dialog">
	      
	        <!-- Modal content-->
	        <div class="modal-content">
	          <div class="modal-header">
	            <h4 class="modal-title">Anda yakin?</h4>
	          </div>
	          <div class="modal-body">
	            

	            	<div class="modal-wrapper">
						<div class="modal-icon">
							<i class="fa fa-question-circle"></i>
						</div>
						<div class="modal-text">
							<h4>Inventory PC</h4>
							<p>Anda yakin, ingin menghapus data?</p>

							<form method="post" action="<?php echo site_url('proses_inventory/confirm_delete');?>">

				            	<input type="hidden" name="username" value="<?php echo $username; ?>">
				            	<input type="hidden" name="kode" value="<?php echo $kode; ?>">
						</div>
					</div>

	          </div>

	          <div class="modal-footer">
	          					<input type="submit" id="desktop-success" value="yakin" class="btn btn-primary">
				            </form>
	            <a href="<?php echo site_url('view_inventory/inventory_pc');?>"> 
	            	<button type="button" class="btn btn-default" >Close</button>
	            </a>
	          </div>

	        </div>
	        
	      </div>
	    </div>
	    <!-- Modal auto backdrop-->

	    <!-- modal backdrop -->
	    <script>
	    $(document).ready(function(){
	    $("#myModal").modal({backdrop: "static"});
	    });
	    </script>
	    <!-- modal backdrop -->
		<!-- submit -->


		


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
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url();?>/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url();?>/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url();?>/assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="<?php echo base_url();?>/assets/javascripts/ui-elements/examples.notifications.js"></script>

		

		



	</body>
</html>