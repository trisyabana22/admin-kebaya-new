<!-- Page Content-->
<div class="page-content">
  <div class="container-fluid">
    <!-- Page-Title -->

    <div class="row">
      <div class="col-sm-6">
        <h4>Produk Menu</h4>
      </div>

    </div>

    <div class="row">
      <div class="col-md-12 mb-3">
        <form action="" role="search">
          <!-- <div class="form-group"> -->
          <div class="col-md-6 float-right">
            <div class="input-group">
              <button type="button" class="btn btn-sm btn-primary" data-target=".tambah-beranda" data-toggle="modal" data-animation="bounce"><i class="dripicons-add"></i> Tambah Produk </button>
              <input type="text" class="form-control" id="produk-search" placeholder="Search">
              <span>
                <button type="button" class="btn btn-gradient-primary" id="btn-search">
                  <i class="fas fa-search"></i>
                </button>
              </span>
            </div>
          </div>

          <!-- </div> -->
        </form>
      </div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row produkna" id="produkna">

      <!-- end col -->


    </div> <!-- end row -->
  </div>
  <!-- container -->




  <!-- Modal Edit Beranda -->
  <div class="modal fade edit-beranda" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-white">
          <h5 class="modal-title mt-0" id="exampleModalLabel">
            Modal Edit Produk
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body bg-white">
          <form autocomplete="off" id="e-form" method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">
            <div class="form-group row">
              <div class="col-md-6">

                <label for="nama_produk">Nama Produk</label>
                <input type="text" id="id_produk" name="id_produk" class="form-control" placeholder="Ketikan Nama Produk" hidden>
                <input type="text" id="nama_produk" name="nama_produk" class="form-control" placeholder="Ketikan Nama Produk" required>
              </div>
              <div class="col-md-6">

                <label for="id_kategori">Jenis Produk</label>
                <select name="id_kategori" id="id_kategori" class="form-control">
                  <?php
                  foreach ($kategori as $cat) {
                    echo "<option value='" . $cat['id_kategori'] . "'>" . $cat['nama_kategori'] . "</option>";
                  }
                  ?>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="bahan">Bahan</label>
                <input type="text" id="bahan" name="bahan" class="form-control" placeholder="Ketikan Bahan Produk" required>
              </div>
            </div>
            <div class="form-group">
              <label for="gambar_produk">Gambar Produk</label>
              <div id="gbrproduk">
                <img id="gbrprodukna" src="" alt="" width="30%">
              </div>
              <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="gambar_produk" name="gambar_produk" onchange="previewFile()">
                <label class="custom-file-label" for="customFile">
                  <div id="nama_gambar">Pilih Gambar</div>
                </label>
              </div>
            </div>
            <div class="form-group">
              <label for="catatan">Catatan</label>
              <textarea name="deskripsi" id="catatan" class="form-control" cols="30" rows="3" placeholder="Ketikan Catatan"></textarea>

            </div>
        </div>
        <div class="modal-footer bg-white">
          <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
            Close
          </button>
          <button type="submit" class="btn btn-primary waves-effect waves-light btnload">
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
  <!-- Modal Tambah Beranda -->
  <div class="modal fade tambah-beranda" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-white">
          <h5 class="modal-title mt-0" id="exampleModalLabel2">
            Modal Tambah Produk
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body bg-white">
          <form autocomplete="off" id="i-form" method="POST" class="form-horizontal" enctype="multipart/form-data" role="form">
            <div class="form-group row">
              <div class="col-md-6">

                <label for="nama_produk">Nama Produk</label>
                <input type="text" id="nama_produk2" name="nama_produk" class="form-control" placeholder="Ketikan Nama Produk" required>
              </div>
              <div class="col-md-6">

                <label for="id_kategori2">Jenis Produk</label>
                <select name="id_kategori" id="id_kategori2" class="form-control">
                  <?php
                  foreach ($kategori as $cat) {
                    echo "<option value='" . $cat['id_kategori'] . "'>" . $cat['nama_kategori'] . "</option>";
                  }
                  ?>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="bahan">Bahan</label>
                <input type="text" id="bahan2" name="bahan" class="form-control" placeholder="Ketikan Bahan Produk" required>
              </div>
            </div>
            <div class="form-group">
              <label for="gambar_produk2">Gambar Produk</label>
              <div id="gbrproduk2">
                <img id="gbrprodukna2" src="" alt="" width="30%">
              </div>
              <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="gambar_produk2" name="gambar_produk" onchange="previewFile2()" required>
                <label class="custom-file-label" for="customFile">
                  <div id="nama_gambar2">Pilih Gambar</div>
                </label>
              </div>
            </div>
            <div class="form-group">
              <label for="catatan">Catatan</label>
              <textarea name="deskripsi" id="catatan2" class="form-control" cols="30" rows="3" placeholder="Ketikan Catatan"></textarea>

            </div>
        </div>
        <div class="modal-footer bg-white">
          <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
            Close
          </button>
          <button type="submit" class="btn btn-primary waves-effect waves-light btnload">
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
  <!-- Modal Akhir Tambah Beranda -->