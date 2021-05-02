<!-- Page Content-->
<div class="page-content">
	<div class="container-fluid">
		<!-- Page-Title -->

		<div class="row">
			<div class="col-sm-12">
				<h4>Kontak Menu</h4>
			</div>
		</div>
		<!-- end page title end breadcrumb -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<?= $this->session->flashdata('message'); ?>
						<div class="modal-content">
							<div class="modal-body bg-white">
								<form action="<?= base_url('Kontak/edit'); ?>" method="POST">
									<div class="form-group row">
										<div class="col-sm-12">
											<label for="Instagram">Edit Link I Frame Maps</label>
											<textarea class="form-control" name="url_maps" rows="4"><?= $url_maps; ?></textarea>
										</div>



									</div>
									<div class="form-group row">
										<div class="col-sm-12">
											<label for="facebook">Edit Alamat </label>
											<input type="text" class="form-control" name="alamat" placeholder="Ketikan Alamat " value="<?= $alamat; ?>">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-6">
											<label for="Instagram">Edit No Telepon </i></label>
											<input type="text" class="form-control" name="no_hp" placeholder="Ketikan No Telepon " value="<?= $no_hp; ?>">
										</div>

										<div class="col-sm-6">
											<label for="facebook">Edit No Whatsapp <i class="fab fa-whatsapp"></i></label>
											<input type="text" class="form-control" name="no_wa" placeholder="Ketikan no Whatsapp " value="<?= $no_wa; ?>">
										</div>

									</div>
									<div class="form-group row">
										<div class="col-sm-6">
											<label for="Instagram">Edit Instagram <i class="fab fa-instagram"></i></label>
											<input type="text" class="form-control" name="instagram" placeholder="Ketikan Link Profile Instagram " value="<?= $instagram; ?>">
										</div>

										<div class="col-sm-6">
											<label for="facebook">Edit Facebook <i class="fab fa-facebook"></i></label>
											<input type="text" class="form-control" name="facebook" placeholder="Ketikan Link Profile Facebook " value="<?= $facebook; ?>">
										</div>

									</div>

									<div class="form-group row">
										<div class="col-sm-6">
											<label for="facebook">Edit Twitter <i class="fab fa-twitter"></i></label>
											<input type="text" class="form-control" name="twitter" placeholder="Ketikan Link Profile Twitter " value="<?= $twitter; ?>">
										</div>

										<div class="col-sm-6">
											<label for="youtube">Edit Youtube <i class="fab fa-youtube"></i></label>
											<input type="text" class="form-control" name="youtube" id="youtube" placeholder="Ketikan Link Profile Youtube " value="<?= $youtube; ?>" />
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12">
											<div class="alert alert-info border-0" role="alert">
												<strong>Informasi</strong> Jika Tidak ada salah satu dari social media di atas,
												kosongkan inputannya nya
											</div>
										</div>

									</div>
									<!--end form-->
							</div>
							<div class="modal-footer bg-white">

								<button type="submit" class="btn btn-primary waves-effect waves-light">
									Save changes
								</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- end col -->
		</div>
		<!-- end row -->
	</div>
	<!-- container -->