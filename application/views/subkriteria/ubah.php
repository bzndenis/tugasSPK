<?php $this->load->view('template/header'); ?>

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Ubah Data Subkriteria</h3>
    </div>
    <form class="form-horizontal" action="<?php echo site_url('subkriteria/ubah/' . $id_kriteria . '/' . $id_subkriteria); ?>" method="post">
        <div class="box-body">

            <?php echo validation_errors('<div class="alert bg-danger" role="alert">', '</div>'); ?>
            <div class="form-group">
                <label for="nilai_sub" class="col-sm-2 control-label">Data Awal</label>
                <div class="col-sm-4">
                    <input name="nilai_sub" id="nilai_sub" class="form-control" required type="text" value="<?php echo set_value('nilai_sub'); ?>">
                </div>

            <div class="form-group">
                <label for="nama_subkriteria" class="col-sm-2 control-label">Keterangan</label>
                <div class="col-sm-3">
                    <input name="nama_subkriteria" id="nama_subkriteria" class="form-control" required type="text" value="<?php echo set_value('nama_subkriteria', $nama_subkriteria); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="bobot" class="col-sm-2 control-label">Bobot</label>
                <div class="col-sm-4">
                    <input name="bobot" id="bobot" required type="number" class="form-control" value="<?php echo set_value('bobot', $bobot); ?>">
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="text-center col-sm-6">
                <button type="submit" name="save" class="btn btn-success">Simpan</button>
                <a href="<?php echo site_url('subkriteria/' . $id_kriteria); ?>" class="btn btn-danger">Batal</a>
            </div>
        </div>
    </form>
</div>

<?php $this->load->view('template/footer'); ?>