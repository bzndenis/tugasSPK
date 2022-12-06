<?php $this->load->view('template/header'); ?>

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Data User</h3>
        <div class="box-tools">
            <a href="<?php echo site_url('user/tambah'); ?>" class="btn btn-primary">Tambah User</a>
        </div>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTables1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query as $row) : ?>
                    <tr>
                        <td></td>
                        <td><?php echo $row->username; ?></td>
                        <td>
                            <a href="<?php echo site_url('user/ubah/' . $row->id_user); ?>" class="btn btn-success btn-xs" title="Ubah">Ubah</a> &nbsp;
                            <a href="#" data-href="<?php echo site_url('user/hapus/' . $row->id_user); ?>" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-xs" title="Hapus">Hapus</a> &nbsp;

                            <a href="<?php echo site_url('user/password/' . $row->id_user); ?>" class="btn btn-info btn-xs" title="Ubah">Ubah Password</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->load->view('template/footer'); ?>