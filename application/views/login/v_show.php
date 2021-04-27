<!-- Log In page -->
<div class="row vh-100 ">
    <div class="col-12 align-self-center">
        <div class="auth-page">
            <div class="card auth-card shadow-lg">
                <div class="card-body">
                    <div class="px-3">
                        <div class="auth-logo-box">
                            <a href="<?= base_url(); ?>" class="logo logo-admin"><img src="<?= base_url(); ?>assets/home/img/logo/<?= $logo; ?>" height="55" alt="logo" class="auth-logo"></a>
                        </div>
                        <!--end auth-logo-box-->

                        <div class="text-center auth-logo-text">
                            <h4 class="mt-0 mb-3 mt-5"><?= $nama_toko; ?></h4>
                            <p class="text-muted mb-0">Login.</p>
                        </div>
                        <!--end auth-logo-text-->


                        <form class="form-horizontal auth-form my-4" method="POST" action="<?= base_url('Login/login'); ?>">
                            <?= $this->session->flashdata('message'); ?>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <div class="input-group mb-3">
                                    <span class="auth-form-icon">
                                        <i class="dripicons-user"></i>
                                    </span>
                                    <input type="text" class="form-control" name="id" value="<?= set_value('id'); ?>" placeholder="Enter username">
                                </div>
                                <?= form_error('id', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <!--end form-group-->

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <div class="input-group mb-3">
                                    <span class="auth-form-icon">
                                        <i class="dripicons-lock"></i>
                                    </span>
                                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                                </div>
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <!--end form-group-->


                            <div class="form-group mb-0 row">
                                <div class="col-12 mt-2">
                                    <button class="btn btn-primary btn-round btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end form-group-->
                        </form>
                        <!--end form-->
                    </div>
                    <!--end /div-->
                    <div class="m-3 text-center text-muted">
                        <p class="">Don't have an account ? <a href="<?= base_url('daftar'); ?>" class="text-primary ml-2">Resister</a></p>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->

        </div>
        <!--end auth-page-->
    </div>
    <!--end col-->
</div>
<!--end row-->
<!-- End Log In page -->