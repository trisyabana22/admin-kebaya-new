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

            <table id="tb_data" class="table table-bordered dt-responsive no-wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%">
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

  <!-- <?= var_dump($produk); ?> -->

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
          <form autocomplete="off" id="i-form" method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">
            <div class="form-group row">
              <div class="col-md-6">
                <label for="id_produk">Produk</label>
                <select name="id_produk" id="id_produk2" class="form-control" required>
                  <option value="">Plih Produk</option>
                  <?php
                  foreach ($produk as $prod) {
                    echo "<option value='" . $prod['id_produk'] . "'>" . $prod['nama_produk'] . "</option>";
                  }
                  ?>
                </select>

              </div>

              <div class="col-md-6">
                <label for="ukuran_stok">Ukuran</label>
                <input type="text" id="ukuran_stok2" name="ukuran_stok" class="form-control" placeholder="Ketikan Ukuran Produk" required>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label for="harga">Harga</label>
                <input type="number" id="harga2" name="harga" class="form-control" placeholder="Ketikan Harga Produk" required>
              </div>

              <div class="col-md-6">
                <label for="jumlah_stok">Stok</label>
                <input type="number" id="jumlah_stok2" name="jumlah_stok" class="form-control" placeholder="Ketikan Stok produk" required>
              </div>


            </div>


        </div>
        <div class="modal-footer bg-white">
          <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary waves-effect waves-light btnload">Save changes</button>
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
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-white">
          <h5 class="modal-title mt-0" id="exampleModalLabel">Modal edit Produk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body bg-white">
          <form autocomplete="off" id="e-form" method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">
            <div class="form-group row">
              <div class="col-md-6">
                <label for="nama_produk">Produk</label>
                <input type="text" name="id_stok" id="id_stok" class="form-control" hidden>
                <input type="text" name="id_produk" id="id_produk" class="form-control" hidden>
                <input type="text" id="nama_produk" class="form-control" readonly>


              </div>

              <div class="col-md-6">
                <label for="ukuran_stok">Ukuran</label>
                <input type="text" id="ukuran_stok" name="ukuran_stok" class="form-control" placeholder="Ketikan Ukuran Produk" readonly>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label for="harga">Harga</label>
                <input type="number" id="harga" name="harga" class="form-control" placeholder="Ketikan Harga Produk" />
              </div>

              <div class="col-md-6">
                <label for="jumlah_stok">Stok</label>
                <input type="number" id="jumlah_stok" name="jumlah_stok" class="form-control" placeholder="Ketikan Stok produk" />
              </div>


            </div>


        </div>
        <div class="modal-footer bg-white">
          <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary waves-effect waves-light btnload">Save changes</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <!-- Modal Akhir Edit Produk -->