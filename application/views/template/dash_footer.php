<!-- jQuery  -->
<script src="<?= base_url(); ?>assets/admin/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/metisMenu.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/waves.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/jquery.slimscroll.min.js"></script>
<script src="<?= base_url(); ?>assets/statis/dashboard-e-cafe/assets/plugins/dropify/js/dropify.min.js"></script>
<script src="<?= base_url(); ?>assets/statis/dashboard-e-cafe/assets/pages/jquery.form-upload.init.js"></script>
<!-- <script src="<?= base_url(); ?>assets/statis/dashboard-e-cafe/assets/plugins/repeater/jquery.repeater.min.js"></script> -->
<!-- <script src="<?= base_url(); ?>assets/statis/dashboard-e-cafe/assets/pages/jquery.form-repeater.js"></script> -->
<script src="<?= base_url(); ?>assets/statis/dashboard-e-cafe/assets/dinamis/dateclock.js"></script>
<script src="<?= base_url(); ?>assets/statis/dashboard-e-cafe/assets/dinamis/repeater.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/app.js"></script>

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
<script src="<?= base_url(); ?>assets/admin/plugins/datatables/fnReloadAjax.js"></script>
<!-- Responsive examples -->
<script src=" <?= base_url(); ?>assets/admin/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/pages/jquery.datatable.init.js"></script>
<!-- validasi -->
<script src="<?= base_url(); ?>assets/statis/validation/jquery.validate.min.js"></script>
<!-- Sweet-Alert  -->
<script src="<?= base_url(); ?>assets/statis/sweetalert/sweetalert.min.js"></script>
<script src="<?= base_url(); ?>assets/statis/sweetalert/jquery.sweet-alert.custom.js"></script>

<?php if (isset($jsfile)) { ?>
    <script src="<?= base_url(); ?>assets/dinamis/<?= $jsfile; ?>"></script>
<?php } ?>

</body>

</html>