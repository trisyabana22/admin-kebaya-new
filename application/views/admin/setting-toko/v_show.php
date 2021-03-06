<!-- Page Content-->
<div class="page-content">
	<div class="container-fluid">
		<!-- Page-Title -->

		<div class="row">
			<div class="col-sm-12">
				<h4>Setting Toko Menu</h4>
			</div>
		</div>
		<!-- end page title end breadcrumb -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<?= $this->session->flashdata('message'); ?>
						<h4 class="mt-0 header-title"><b>Nama Toko :</b></h4>
						<h4 class="mt-0 header-title"><?= $nama_toko; ?></h4>
						<h4 class="mt-0 header-title"><b>Logo Toko :</b> </h4>
						<h4 class="mt-0 header-title"><img src="<?= base_url(); ?>assets/home/img/logo/<?= $logo; ?>" style="width:250px;height:250px;object-fit:cover;" alt=""></h4>
						<h4 class="mt-0 header-title"><b>Username :</b></h4>
						<h4 class="mt-0 header-title"><?= $username; ?></h4>
						<hr>
						<h4>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-animation="bounce" data-target=".edit-beranda"><i class="dripicons-pencil"></i> Edit </button>
						</h4>
						<!-- <p class="text-muted mb-3">DataTables has most features enabled by
									default, so all you need to do to use it with your own tables is to call
									the construction function: <code>$().DataTable();</code>.
								</p> -->



						<!-- <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
									<thead>
									<tr>
										<th>Judul</th>
										<th>Text</th>
										<th>Background</th>
										<th>Aksi</th>
										
									</tr>
									</thead>


									<tbody>
									<tr>
										<td>Tiger Nixon</td>
										<td>System Architect</td>
										<td>Edinburgh</td>
										<td>
											<button type="button" class="btn btn-primary" data-toggle="modal"
											data-animation="bounce" data-target=".edit-beranda">
												<i class="dripicons-pencil"></i>
											</button>
										</td>
										
									</tr>
									
									</tbody>
								</table> -->

					</div>
				</div>
			</div> <!-- end col -->
		</div> <!-- end row -->
	</div>
	<!-- container -->




	<!-- Modal Edit Beranda -->
	<div class="modal fade edit-beranda" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-white">
					<h5 class="modal-title mt-0" id="exampleModalLabel">
						Modal Beranda
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body bg-white">
					<form method="POST" action="<?= base_url('setting_toko/save'); ?>" enctype="multipart/form-data">
						<div class="form-group">
							<label for="nama_toko">Edit Nama Toko</label>
							<input type="text" id="nama_toko" name="nama_toko" class="form-control" placeholder="Ketikan Nama Toko" value="<?= $nama_toko; ?>">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" id="username" name="username" class="form-control" placeholder="Ketikan Nama Toko" value="<?= $username; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" id="password" name="password" class="form-control" placeholder="Ketikan Nama Toko" value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="logo">Edit Logo Toko</label>
							<input type="file" id="logo" name="logo" class="dropify" data-default-file="<?= base_url(); ?>assets/home/img/logo/<?= $logo; ?>" />
							<p>File Yang diizinkan: .PNG, JPG,JPEG, </p>
						</div>
				</div>
				<div class="modal-footer bg-white">
					<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btn-primary waves-effect waves-light">
						Save changes
					</button>
				</div>
				</form>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- Modal Akhir Edit Beranda -->