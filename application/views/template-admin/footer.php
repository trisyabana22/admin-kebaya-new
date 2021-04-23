<footer class="footer text-center text-sm-left">
    &copy; 2021 PT Media Solusi Network
    <span class="text-muted d-none d-sm-inline-block float-right">Made with <i
            class="mdi mdi-heart text-danger"></i> by MSN
        Dev</span>
</footer>
<!--end footer-->
</div>
<!-- end page content -->
</div>
<!-- end page-wrapper -->

<!-- Modal Edit Logo -->
<div class="modal fade edit-logo" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header bg-white">
        <h5 class="modal-title mt-0" id="exampleModalLabel">
            Modal Ubah Logo
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body bg-white">
        <form action="">
            <!-- <p>Edit Logo</p> -->
            <input type="file" id="input-file-now-custom-1" class="dropify"
                data-default-file=".<?= base_url(); ?>assets/admin/plugins/dropify/images/1.jpg" />
            <p>File Yang diizinkan: PNG, JPG/JPEG</p>
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
<!-- Akhir Modal Edit Logo -->

<!-- Modal Edit Background Logo -->
<div class="modal fade edit-background-logo" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header bg-white">
        <h5 class="modal-title mt-0" id="exampleModalLabel">
            Modal Ubah Background Logo
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body bg-white">
        <!-- <p>Edit Logo</p> -->
        <form action="">
            <input type="file" id="input-file-now-custom-1" class="dropify"
                data-default-file=".<?= base_url(); ?>assets/admin/plugins/dropify/images/1.jpg" />
            <p>File Yang diizinkan: PNG, JPG/JPEG</p>
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
<!-- Modal Akhir Edit Background Logo -->

<!-- Modal Edit Judul-->
<div class="modal fade edit-judul" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header bg-white">
        <h5 class="modal-title mt-0" id="exampleModalLabel">
            Modal Edit Judul
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body bg-white">
        <form action="">
            <div class="form-group">
                <label for="judul">Edit Judul</label>
                <input type="text" class="form-control" id="judul" placeholder="Ketikan Judul" />
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
<!-- Modal Akhir Edit Judul-->

<!-- Modal Edit Tagline-->
<div class="modal fade edit-tagline" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header bg-white">
        <h5 class="modal-title mt-0" id="exampleModalLabel">
            Modal Edit Tagline
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body bg-white">
        <form class="repeater">
            <div data-repeater-list="category-group">
                <label for="judul">Edit / Tambah Tagline</label>
                <div data-repeater-item>
                    <div class="form-group row">
                        <div class="col-sm-10 col-lg-10 col-10">
                            <input type="text" class="form-control" id="judul"
                                placeholder="Ketikan Judul" />
                        </div>
                        <div class="col-sm-2 col-lg-2 col-2">
                            <button type="button" class="btn btn-danger waves-effect" data-repeater-delete
                                type="button">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <!-- <input  value="Delete" /> -->
                </div>
            </div>
            <button data-repeater-create type="button" class="btn btn-primary waves-effect">
                <i class="fa fa-plus"></i>
            </button>
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
<!-- Modal Akhir Edit Tagline-->

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

<!-- Modal Edit Upload PDF Menu -->
<div class="modal fade edit-pdf" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header bg-white">
        <h5 class="modal-title mt-0" id="exampleModalLabel">
            Modal Ubah Pdf Daftar Menu
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body bg-white">
        <!-- <p>Edit Logo</p> -->
        <form action="">
            <input type="file" id="input-file-now-custom-1" class="dropify"
                data-default-file=".<?= base_url(); ?>assets/admin/pdf/menu.pdf" />
            <p>File Yang diizinkan: .PDF</p>
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
<!-- Modal Akhir Edit Upload PDF Menu -->

<!-- Modal Edit Pesan Reservasi -->
<div class="modal fade edit-reservasi" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header bg-white">
        <h5 class="modal-title mt-0" id="exampleModalLabel">
            Modal Edit Pesan Reservasi WhatsApp
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body bg-white">
        <form action="">
            <div class="form-group">
                <label for="example-input1-group1">No WhatsApp</label>
                <input type="Number" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan no WhatsApp">
                
            </div>
            <div class="form-group">
                <label for="example-input1-group1">Ketikan Untuk Pesan WhatsApp</label>
                
                <textarea name="" id="" class="form-control" cols="30" rows="3" placeholder="Ketikan Pesan Whatsapp contoh (Halo selamat siang, saya ingin pesan )"></textarea>
                
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
<!-- Modal Akhir Edit Pesan Reservasi-->

<!-- Modal Edit Kontak -->
<div class="modal fade edit-kontak" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
aria-hidden="true">
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
        <form action="">
            <div class="form-group">
                <label for="example-input1-group1">Edit Judul</label>
                <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Ketikan Judul">
            </div>
            <div class="form-group">
                <label for="example-input1-group1">Edit Text sub judul</label>
                <textarea name="" id="" class="form-control" cols="30" rows="3" placeholder="Ketikan Text Sub Judul"></textarea>
                
            </div>
            <div class="form-group">
                <label for="">Edit Background</label>
                <input type="file" id="input-file-now-custom-1" class="dropify"
                data-default-file=".<?= base_url(); ?>assets/pdf/menu.pdf" />
                <p>File Yang diizinkan: .PNG, JPG,JPEG, </p>
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

<!-- jQuery  -->
<script src="<?= base_url(); ?>assets/admin/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/metisMenu.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/waves.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/jquery.slimscroll.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/dropify/js/dropify.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/pages/jquery.form-upload.init.js"></script>
<!-- <script src="assetsassets/admin/plugins/repeater/jquery.repeater.min.js"></script> -->
<!-- <script src="assetsassets/admin/pages/jquery.form-repeater.js"></script> -->
<script src="<?= base_url(); ?>assets/admin/dinamis/dateclock.js"></script>
<script src="<?= base_url(); ?>assets/admin/dinamis/repeater.js"></script>
<!-- App js -->

<!-- Required datatable js -->
<script src="<?= base_url(); ?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?= base_url(); ?>assets/admin/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/datatables/jszip.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/datatables/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/datatables/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/datatables/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="<?= base_url(); ?>assets/admin/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/pages/jquery.datatable.init.js"></script>

<script src="<?= base_url(); ?>assets/admin/js/app.js"></script>
</body>

</html>