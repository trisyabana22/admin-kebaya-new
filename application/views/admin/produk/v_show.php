<!-- Page Content-->
<div class="page-content">
        <div class="container-fluid">
          <!-- Page-Title -->

          <div class="row">
            <div class="col-sm-12">
              <h4>Produk Menu</h4>
            </div>
          </div>
          <!-- end page title end breadcrumb -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="mt-0 header-title">Tabel Produk <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-animation="bounce" data-target=".tambah-produk">Tambah Stok</button></h4>

                  <!-- <p class="text-muted mb-3">DataTables has most features enabled by
									default, so all you need to do to use it with your own tables is to call
									the construction function: <code>$().DataTable();</code>.
								</p> -->
                
                  <table id="datatable" class="table table-bordered dt-responsive no-wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%">
                    <thead>
                      <tr>
                        <th style="width: 10%;">Jenis Produk</th>
                        <th style="width: 10%;">Nama Produk</th>
                        <th style="width: 20%;">Harga</th>
                        <th style="width: 10%;">Bahan</th>
                        <th style="width: 20%;">Stok</th>
                        <th style="width: 10%;">Gambar</th>
                        <th style="width: 10%;">Catatan</th>
                        <th style="width: 10%;">Aksi</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>Kebaya</td>
                        <td>Kebaya Merah </td>
                        <td >
                          <h6><b>Ukuran S</b> Rp 25.000</h6>
                          <h6><b>Ukuran M</b> Rp 30.000</h6>
                          <h6><b>Ukuran L</b> Rp 35.000</h6>
                          <h6><b>Ukuran XL</b> Rp 40.000</h6>
                          <h6><b>Ukuran XXL</b> Rp 45.000</h6>
                          <h6><b>Ukuran XXL</b> Rp 55.000</h6>
                        </td>
                        <td>Katun Anti Grah</td>
                        <td>
                          <h6><b>Stok Ukuran S</b> 30</h6>
                          <h6><b>Stok Ukuran M</b> 40</h6>
                          <h6><b>Stok Ukuran L</b> 12</h6>
                          <h6><b>Stok Ukuran XL</b> 10</h6>
                          <h6><b>Stok Ukuran XXL</b> 8</h6>
                          <h6><b>Stok Ukuran XXL</b> 78</h6>
                        </td>
                        <td>
                          <h6>Gambar Utama :</h6>
                          <img src="<?= base_url(); ?>assets/home/img/produk/1.jpg" style="width:90px;height:50px;object-fit:cover;" alt="">
                          <h6>Gambar Samping :</h6>
                          <img src="<?= base_url(); ?>assets/home/img/produk/2.jpg" style="width:90px;height:50px;object-fit:cover;" alt="">
                          <h6>Gambar Belakang :</h6>
                          <img src="<?= base_url(); ?>assets/home/img/produk/3.jpg" style="width:90px;height:50px;object-fit:cover;" alt="">
                        </td>
                        <td><span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit inventore odit ipsum blanditiis accusantium voluptate deleniti libero beatae, veniam placeat aut fugiat animi consectetur, officiis possimus sint, neque perspiciatis culpa!</span> </td>
                        <td>
                          <div class="button-group">
                            <a href="<?= base_url(); ?>Produk/add" class="btn btn-sm btn-primary">
                              <i class="dripicons-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-danger">
                              <i class="dripicons-trash"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                
            </div>
            </div>
        </div>
        <!-- end col -->
          </div>
          <!-- end row -->
        </div>
        <!-- container -->





<!-- Modal Edit Social Media-->
<div class="modal fade edit-social-media" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header bg-white">
        <h5 class="modal-title mt-0" id="exampleModalLabel">
            Modal Edit Social Media
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body bg-white">
        <form action="">
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="Instagram">Edit Instagram <i class="fab fa-instagram"></i></label>
                    <input type="text" class="form-control" id="Instagram" placeholder="Ketikan Link Profile Instagram " />
                </div>

                <div class="col-sm-6">
                    <label for="facebook">Edit Facebook <i class="fab fa-facebook"></i></label>
                    <input type="text" class="form-control" id="facebook" placeholder="Ketikan Link Profile Facebook " />
                </div>

            </div>

            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="facebook">Edit Twitter <i class="fab fa-twitter"></i></label>
                    <input type="text" class="form-control" id="facebook" placeholder="Ketikan Link Profile Twitter " />
                </div>

                <div class="col-sm-6">
                    <label for="youtube">Edit Youtube <i class="fab fa-youtube"></i></label>
                    <input type="text" class="form-control" id="youtube" placeholder="Ketikan Link Profile Youtube " />
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-info border-0" role="alert">
                        <strong>Informasi</strong> Jika Tidak ada salah satu dari social media di atas, kosongkan inputannya nya</div>
                </div>
                    
            </div>
        </form>
        <!--end form-->
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
<!-- Modal Akhir Social Media-->


<!-- Modal Edit Produk -->
<div class="modal fade edit-produk" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-white">
            <h5 class="modal-title mt-0" id="exampleModalLabel">Modal Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body bg-white">
            <form action="">
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="example-input1-group1">Edit Jenis Produk</label>
                  <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Jenis Produk" />
                </div>

                <div class="col-md-6">
                  <label for="example-input1-group1">Edit Nama Produk</label>
                  <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Nama Produk" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-4">
                  <label for="example-input1-group1">Edit Harga Produk</label>
                  <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Harga Produk" />
                </div>

                <div class="col-md-4">
                  <label for="example-input1-group1">Edit Bahan Produk</label>
                  <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Bahan Produk" />
                </div>
                <div class="col-md-4">
                  <label for="example-input1-group1">Edit Stok Produk</label>
                  <input type="number" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Stok Produk" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="example-input1-group1">Edit Catatan Produk</label>
                  <textarea name="" id="" class="form-control" cols="30" rows="3" placeholder="Ketikan Deskripsi Produk"></textarea>
                  <!-- <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Deskripsi Produk " /> -->
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer bg-white">
            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- Modal Akhir Edit Produk -->



    <!-- Modal Edit Produk -->
<div class="modal fade tambah-produk" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-white">
            <h5 class="modal-title mt-0" id="exampleModalLabel">Modal Tambah Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body bg-white">
            <form action="">
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="example-input1-group1">Edit Jenis Produk</label>
                  <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Jenis Produk" />
                </div>

                <div class="col-md-6">
                  <label for="example-input1-group1">Edit Nama Produk</label>
                  <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Nama Produk" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-4">
                  <label for="example-input1-group1">Edit Harga Produk</label>
                  <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Harga Produk" />
                </div>

                <div class="col-md-4">
                  <label for="example-input1-group1">Edit Bahan Produk</label>
                  <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Bahan Produk" />
                </div>
                <div class="col-md-4">
                  <label for="example-input1-group1">Edit Stok Produk</label>
                  <input type="number" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Stok Produk" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="example-input1-group1">Edit Catatan Produk</label>
                  <textarea name="" id="" class="form-control" cols="30" rows="3" placeholder="Ketikan Deskripsi Produk"></textarea>
                  <!-- <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Deskripsi Produk " /> -->
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer bg-white">
            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- Modal Akhir Edit Produk -->