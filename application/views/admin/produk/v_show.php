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
          <div class="col-md-4 float-right">
            <div class="input-group">
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
            Modal Produk
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body bg-white">
          <form method="POST" action="<?= base_url('product/save'); ?>" enctype="multipart/form-data">
            <div class="form-group row">
              <div class="col-md-6">

                <label for="example-input1-group1">Nama Produk</label>
                <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Nama Produk">
              </div>
              <div class="col-md-6">

                <label for="example-input1-group1">Jenis Produk</label>
                <select name="" id="" class="form-control">
                  <option value="">Kebaaya</option>
                  <option value="">Kebaayaw</option>
                  <option value="">Kebaayaw</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="example-input1-group1">Bahan</label>
                <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Bahan Produk">
              </div>
            </div>
            <div class="form-group">
              <label for="">Edit Background</label>
              <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file=".<?= base_url(); ?>assets/pdf/menu.pdf" />
              <p>File Yang diizinkan: .PNG, JPG,JPEG, </p>
            </div>
            <div class="form-group">
              <label for="example-input1-group1">Catatan</label>
              <textarea name="" id="" class="form-control" cols="30" rows="3" placeholder="Ketikan Catatan"></textarea>

            </div>
        </div>
        <div class="modal-footer bg-white">
          <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
            Close
          </button>
          <button type="button" class="btn btn-primary waves-effect waves-light">
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