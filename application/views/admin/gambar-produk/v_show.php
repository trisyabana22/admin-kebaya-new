<!-- Page Content-->
<div class="page-content">
			<div class="container-fluid">
				<!-- Page-Title -->

				<div class="row">
					<div class="col-sm-6">
						<h4>Gambar Produk Menu</h4>  
					</div>
          
				</div>

        <div class="row">
          <div class="col-md-12 mb-3">
            <form action="" role="search">
              <!-- <div class="form-group"> -->
                <div class="col-md-4 float-right">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span>
                      <button type="button" class="btn btn-gradient-primary">
                        <i class="fas fa-search"></i>
                      </button>
                    </span>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="input-group">
                      <button type="button" class="btn btn-gradient-primary" data-toggle="modal" data-animation="bounce" data-target=".tambah-produk">
                        <i class="fas fa-plus"></i> Tambah Gambar
                      </button>
                  </div>
                </div>

              <!-- </div> -->
            </form>
          </div>  
        </div>
				<!-- end page title end breadcrumb -->
				<div class="row">
            
					<div class="col-md-3 col-12">
						<div class="card">
            <img src="<?= base_url(); ?>assets/home/img/produk/1.jpg" style="width: 100%; height:200px;object-fit:cover;object-position:top;" alt="">
							<div class="card-body">
                <h6 class="line-clamp ">kebaya abu tua gelap sdasd ds asd dsd saddw sad sda sad</h6>
                
								<div class="col-sm-12 mt-4">
                  <div class="button-group text-center">
                    <button type="button" class="btn btn-sm btn-danger" ><i class="dripicons-trash"></i> Hapus </button>
                  </div>
                </div>
								
							

							</div>
						</div>
					</div> <!-- end col -->

        
				</div> <!-- end row -->
			</div>
			<!-- container -->




<!-- Modal Edit Beranda -->
<div class="modal fade tambah-produk" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-md modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header bg-white">
        <h5 class="modal-title mt-0" id="exampleModalLabel">
            Modal Produk
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body bg-white">
        <form action="">
            <div class="form-group row">
              <div class="col-md-12">

                <label for="example-input1-group1">Nama Produk</label>
                <select name="" id="" class="form-control">
                  <option value="">Pilih Produk</option>
                  <option value="">asasas</option>
                </select>
              </div>
              <div class="col-md-12">

                <label for="">Gambar Produk</label>
                  <input type="file" id="input-file-now-custom-1" class="dropify"
                  data-default-file=".<?= base_url(); ?>assets/pdf/menu.pdf" />
                  <p>File Yang diizinkan: .PNG, JPG,JPEG, </p>
              </div>
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
<!-- Modal Akhir Edit Beranda -->