<?php
if ($this->session->userdata('tokoaditdantri')) {
    $this->session->set_flashdata('message', '<div class="alert alert-warning  alert-dismissable" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Anda sudah login!</div>');
    redirect('Login/directpage');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?= $nama_toko; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
    <meta content="Mannatthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/admin/images/favicon.ico">

    <!-- App css -->
    <link href="<?= base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/admin/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/admin/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/admin/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body class="account-body accountbg" style="background: url('<?= base_url(); ?>assets/home/img/bg/<?= $background; ?>'); background-size: cover;">