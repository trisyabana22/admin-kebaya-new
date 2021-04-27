<!-- Page Content-->
<div class="page-content">
        <div class="container-fluid">
          <!-- Page-Title -->

          <div class="row">
            <div class="col-sm-12">
              <h4>Detail Produk Menu</h4>
            </div>
          </div>
          <!-- end page title end breadcrumb -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="mt-0 header-title">Tabel Detail Produk <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-animation="bounce" data-target=".tambah-produk">Tambah Stok</button></h4>

                  <!-- <p class="text-muted mb-3">DataTables has most features enabled by
									default, so all you need to do to use it with your own tables is to call
									the construction function: <code>$().DataTable();</code>.
								</p> -->
                
                  <table id="datatable" class="table table-bordered dt-responsive no-wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Ukuran</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Kebaya</td>
                        <td>M</td>
                        <td>12.000</td>
                        <td>190</td>
                        <td>
                          <div class="button-group">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-animation="bounce" data-target=".edit-produk">
                              <i class="dripicons-pencil"></i>
                            </button>
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
                    <label for="Instagram">Nama Produk <i class="fab fa-instagram"></i></label>
                    <input type="text" class="form-control" id="Instagram" placeholder="Ketikan Link Profile Instagram " />
                </div>

                <div class="col-sm-6">
                    <label for="facebook">Ukuran <i class="fab fa-facebook"></i></label>
                    <input type="text" class="form-control" id="facebook" placeholder="Ketikan Link Profile Facebook " />
                </div>

            </div>

            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="facebook">Harga <i class="fab fa-twitter"></i></label>
                    <input type="number" class="form-control" id="facebook" placeholder="Ketikan Link Profile Twitter " />
                </div>

                <div class="col-sm-6">
                    <label for="youtube">Stok <i class="fab fa-youtube"></i></label>
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


<!-- Modal Tambah Produk -->
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
                  <label for="example-input1-group1">Produk</label>
                  <select name="" id="" class="form-control">
                      <option value="">Plih Produk</option>
                      <option value="">asdsad</option>
                  </select>
                  
                </div>

                <div class="col-md-6">
                  <label for="example-input1-group1">Ukuran</label>
                  <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Ukuran Produk" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="example-input1-group1">Harga</label>
                  <input type="number" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Harga Produk" />
                </div>

                <div class="col-md-6">
                  <label for="example-input1-group1">Stok</label>
                  <input type="number" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Stok produk" />
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



<!-- Modal Tambah Produk -->
<div class="modal fade edit-produk" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-white">
            <h5 class="modal-title mt-0" id="exampleModalLabel">Modal edit Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body bg-white">
            <form action="">
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="example-input1-group1">Produk</label>
                  <select name="" id="" class="form-control">
                      <option value="">Plih Produk</option>
                      <option value="">asdsad</option>
                  </select>
                  
                </div>

                <div class="col-md-6">
                  <label for="example-input1-group1">Ukuran</label>
                  <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Ukuran Produk" />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="example-input1-group1">Harga</label>
                  <input type="number" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Harga Produk" />
                </div>

                <div class="col-md-6">
                  <label for="example-input1-group1">Stok</label>
                  <input type="number" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Stok produk" />
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



