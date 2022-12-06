<?php $this->load->view('template/header'); ?>

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Data Subkriteria</h3>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td width="150">Nama Kriteria</td>
                    <td>: <?php echo $kode_kriteria . " - " . $nama_kriteria; ?></td>
                </tr>
                <tr>
                    <td width="150">Bobot </td>
                    <td>: <?php echo $bobot; ?></td>
                </tr>
                <tr>
                    <td width="150">Tipe </td>
                    <td>: <?php echo $tipe; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <a href="<?php echo site_url('kriteria'); ?>" class="btn btn-warning">Kembali</a> &nbsp;
                        <a href="<?php echo site_url('subkriteria/tambah/' . $id_kriteria); ?>" class="btn btn-primary">Tambah Subkriteria</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTables1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Data Awal</th>
                        <th>Keterangan</th>
                        <th>Bobot</th>
                        <th width="80">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query as $row) { ?>
                    <tr>
                        <td></td>
                        <td><?php echo $row->nilai_sub; ?></td>
                        <td><?php echo $row->nama_subkriteria; ?></td>
                        <td><?php echo $row->bobot; ?></td>
                        <td>
                            <a href="<?php echo site_url('subkriteria/ubah/' . $id_kriteria . '/' . $row->id_subkriteria); ?>" class="btn btn-success btn-xs" title="Ubah">Ubah</a> &nbsp;
                            <a href="#" data-href="<?php echo site_url('subkriteria/hapus/' . $id_kriteria . '/' . $row->id_subkriteria); ?>" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-xs" title="Hapus">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->load->view('template/footer'); ?>