<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SPK</title>
    <link rel="icon" href="<?= base_url(); ?>assets/images/icon22.png" type="image/x-icon" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <!-- Datatables CSS for Bootstrap -->
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/skins/_all-skins.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('assets/js/jQuery-2.1.4.min.js'); ?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- Datatables Javascript for Bootstrap -->
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js'); ?>"></script>
    <!-- AdminLTE JS -->
    <script src="<?php echo base_url('assets/js/app.min.js'); ?>"></script>

    <script>
        $(document).ready(function() {
            var t = $('#dataTables1').DataTable({
                "columnDefs": [{
                    "searchable": false,
                    "orderable": false,
                    "targets": 0
                }],
                "responsive": true,
                "bLengthChange": true,
                "bInfo": true,
                "oLanguage": {
                    "sSearch": "<i class='fa fa-search fa-fw'></i> Pencarian : ",
                    "sLengthMenu": "_MENU_ &nbsp;&nbsp;data per halaman",
                    "sInfo": "Menampilkan _START_ s/d _END_ dari <b>_TOTAL_ data</b>",
                    "sInfoEmpty": "",
                    "sInfoFiltered": "(difilter dari _MAX_ total data)",
                    "sZeroRecords": "Pencarian tidak ditemukan",
                    "sEmptyTable": "Tidak ada data"
                }
            });

            t.on('order.dt search.dt', function() {
                t.column(0, {
                    search: 'applied',
                    order: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw();

            $('#confirm-delete').on('show.bs.modal', function(e) {
                $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            });
        });
    </script>

</head>

<body class="hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
            <a href="<?php echo site_url(); ?>" class="logo">
                <span class="logo-mini"><b>WP</b></span>
                <span class="logo-lg">TUGAS <b>SPK</b></span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                   <span style="color:white"><b>~|SAW | WP | TOPSIS|~</b></span>
                    <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <li class="header">Menu</li>
                    <?php $this->load->view('template/menu'); ?>
                </ul><!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">