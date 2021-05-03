<!-- Page Content-->
<div class="page-content">
  <div class="container-fluid">
    <!-- Page-Title -->

    <div class="row">
      <div class="col-sm-12">
        <h4>Jenis Produk Menu</h4>
      </div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="mt-0 header-title">Tabel Jenis Produk <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-animation="bounce" data-target=".tambah-produk">Tambah Data</button></h4>

            <!-- <p class="text-muted mb-3">DataTables has most features enabled by
									default, so all you need to do to use it with your own tables is to call
									the construction function: <code>$().DataTable();</code>.
								</p> -->

            <table id="tb_data" class="table table-bordered dt-responsive no-wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis Produk</th>
                  <th>Total Produk</th>
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
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





  <!-- Modal Tambah Produk -->
  <div class="modal fade tambah-produk" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-white">
          <h5 class="modal-title mt-0" id="exampleModalLabel">Modal Tambah Produk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body bg-white">
          <form autocomplete="off" id="i-form" method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">
            <div class="form-group row">


              <div class="col-md-12">
                <label for="nama_kategori">Jenis Produk</label>
                <input type="text" name="nama_kategori" class="form-control" placeholder="Ketikan Jenis Produk" required>
              </div>
            </div>


        </div>
        <div class="modal-footer bg-white">
          <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <!-- Modal Akhir Edit Produk -->



  <!-- Modal Tambah Produk -->
  <div class="modal fade edit-produk" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-white">
          <h5 class="modal-title mt-0" id="exampleModalLabel">Modal edit Jenis Produk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body bg-white">
          <form autocomplete="off" id="e-form" method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">
            <div class="form-group row">

              <div class="col-md-12">
                <label for="nama_kategori">Jenis Produk</label>
                <input type="text" id="id_kategori" name="id_kategori" class="form-control" placeholder="Ketikan Jenis Produk" hidden>
                <input type="text" id="nama_kategori" name="nama_kategori" class="form-control" placeholder="Ketikan Jenis Produk" required>
              </div>
            </div>


        </div>
        <div class="modal-footer bg-white">
          <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
        </div>
      </div>
      </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <!-- Modal Akhir Edit Produk -->