<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css'); ?>">
</head>


<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-box-body">
            <div class="login-logo">
                 <img src="<?=base_url()?>assets/images/pdf.png" alt="AdminLTE Logo" class="brand-image" style="width: 250px;">
              </div>
              
                <div class="form-group has-feedback">
                <!-- <p class="login-box-msg">Sign in Sebagai :</p> -->
                </div>
                <!-- <div class="form-group has-feedback">
                <i>Klik Sebegai User :</i><a href="<?= base_url('Auth/loginuser') ?>"><i class="btn-primary"></i> User</a></li></p>
                </div> -->
                <div class="form-group has-feedback">
                <i>Klik Sebegai Admin :</i><a href="<?= base_url('Auth/utama') ?>"><i class="btn-primary"></i> Admin</a></li>
                </div>
        </div>
        <?php echo $this->session->flashdata('pesan'); ?>
    </div>

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('assets/js/jQuery-2.1.4.min.js'); ?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>