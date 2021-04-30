<!-- Page Content-->
<div class="page-content">
	<div class="container-fluid">
		<!-- Page-Title -->

		<div class="row">
			<div class="col-sm-12">
				<h4>Beranda Menu</h4>
			</div>
		</div>
		<!-- end page title end breadcrumb -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">

						<h4 class="mt-0 header-title"><b>Judul :</b></h4>
						<h4 class="mt-0 header-title"><?= $judul; ?></h4>
						<h4 class="mt-0 header-title"><b>Text :</b> </h4>
						<h4 class="mt-0 header-title"><?= $sub_judul; ?></h4>
						<h4 class="mt-0 header-title"><b>background :</b></h4>
						<h4 class="mt-0 header-title"><img src="<?= base_url(); ?>assets/home/img/bg/<?= $background; ?>" style="width:250px;height:150px;object-fit:cover;" alt=""></h4>
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
					<form action="<?= base_url('beranda/save'); ?>" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="judul">Edit Judul</label>
							<input type="text" id="judul" name="judul" class="form-control" placeholder="Ketikan Judul" value="<?= $judul; ?>">
						</div>
						<div class="form-group">
							<label for="sub_judul">Edit Text sub judul</label>
							<textarea name="sub_judul" id="sub_judul" class="form-control" cols="30" rows="3" placeholder="Ketikan Text Sub Judul"><?= $sub_judul; ?></textarea>

						</div>
						<div class="form-group">
							<label for="background">Edit Background</label>
							<input type="file" id="background" name="background" class="dropify" data-default-file="<?= base_url(); ?>assets/home/img/bg/<?= $background; ?>" />
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
					</form>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- Modal Akhir Edit Beranda -->