<div class="page-content">
			<div class="container-fluid">
				<!-- Page-Title -->

				<div class="row">
					<div class="col-sm-12">
						<h4>Tentang Kami Menu</h4>
					</div>
				</div>
				<!-- end page title end breadcrumb -->
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">

								<h4 class="mt-0 header-title">Tabel Tentang kami</h4>
								<!-- <p class="text-muted mb-3">DataTables has most features enabled by
									default, so all you need to do to use it with your own tables is to call
									the construction function: <code>$().DataTable();</code>.
								</p> -->

								<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
									<thead>
									<tr>
										<th>Judul</th>
										<th>Text</th>
										<th>Aksi</th>
										
									</tr>
									</thead>


									<tbody>
									<tr>
										<td>Tiger Nixon</td>
										<td>System Architect</td>
										<td>
											<button type="button" class="btn btn-primary" data-toggle="modal"
											data-animation="bounce" data-target=".edit-kontak">
												<i class="dripicons-pencil"></i>
											</button>
										</td>
										
									</tr>
									
									</tbody>
								</table>

							</div>
						</div>
					</div> <!-- end col -->
				</div> <!-- end row -->
			</div>
			<!-- container -->




            <!-- Modal Edit Kontak -->
	<div class="modal fade edit-kontak" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header bg-white">
					<h5 class="modal-title mt-0" id="exampleModalLabel">
						Modal Tentang Kami
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body bg-white">
					<form action="">
						<div class="form-group">
							<label for="example-input1-group1">Edit Judul</label>
							<input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Judul">
						</div>
						<div class="form-group">
							<label for="example-input1-group1">Edit Text sub judul</label>
							<textarea name="" id="" class="form-control" cols="30" rows="3" placeholder="Ketikan Text Sub Judul"></textarea>
							
						</div>
					</form>
				</div>
				<div class="modal-footer bg-white">
					<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
						Close
					</button>
					<button type="button" class="btn btn-primary waves-effect waves-light">
						Save changes
					</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- Modal Akhir Edit Kontak -->