
<?php $this->load->view('template/header'); ?>

<?php echo validation_errors(); ?>

<!-- <div class="container-fluid">
  <h3>Update Data</h3>

<?php echo form_open('data/update/'.$data_bobot['id']); ?>
  <label for="nama" class="col-sm-2 control-label">Alternatif</label>
  <input type="text" name="nama" value="<?php echo $data_bobot['nama'] ?>"><br>

  <label for="harga" class="col-sm-2 control-label">Lokasi</label>
  <input type="text" name="harga" value="<?php echo $data_bobot['harga'] ?>"><br>

  <label for="ram" class="col-sm-2 control-label">Luas Tanah (m2)</label>
  <input type="text" name="ram" value="<?php echo $data_bobot['ram'] ?>"><br>

  <label for="memori" class="col-sm-2 control-label">Harga Tanah (Ribu/m2)</label>
  <input type="text" name="memori" value="<?php echo $data_bobot['memori'] ?>"><br>

  <label for="processor" class="col-sm-2 control-label">Bentuk Lahan</label>
  <input type="text" name="processor" value="<?php echo $data_bobot['processor'] ?>"><br>

  <label for="kamera" class="col-sm-2 control-label">Resiko Keamanan</label>
  <input type="text" name="kamera" value="<?php echo $data_bobot['kamera'] ?>"><br>

  <input type="submit" name="submit" value="Kirim" class="btn btn-primary">

<?php echo form_close(); ?>
</div> -->

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Data Alterbatif</h3>
  </div>
  <form class="form-horizontal" action="<?php echo site_url('saw/update_bobot/'); ?>" method="post">
    <div class="box-body">

      <?php echo validation_errors('<div class="alert bg-danger" role="alert">', '</div>'); ?>
      <?php $j = 0;
            foreach ($data_bobot as $bobot) { ?>
      <div class="form-group">
        <label for="C1" class="col-sm-2 control-label">Lokasi</label>
        <div class="col-sm-4">
          <input name="C1" id="C1" class="form-control" required type="number" value="<?php echo $bobot['C1'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="C2" class="col-sm-2 control-label">Luas Tanah (m2)</label>
        <div class="col-sm-4">
          <input name="C2" id="C2" required type="number" class="form-control" value="<?php echo $bobot['C2'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="C3" class="col-sm-2 control-label">Harga Tanah (Ribu/m2)</label>
        <div class="col-sm-4">
          <input name="C3" id="C3" class="form-control" required type="number" value="<?php echo $bobot['C3'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="C4" class="col-sm-2 control-label">Bentuk Lahan</label>
        <div class="col-sm-4">
          <input name="C4" id="C4" class="form-control" required type="number" value="<?php echo $bobot['C4'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="C5" class="col-sm-2 control-label">Resiko Keamanan</label>
        <div class="col-sm-4">
          <input name="C5" id="C5" required type="number" class="form-control" value="<?php echo $bobot['C5'] ?>">
        </div>
      </div>
    </div>
    <div class="box-footer">
      <div class="text-center col-sm-6">
        <button type="submit" name="submit" value="Kirim" class="btn btn-success">Simpan</button>
        <a href="<?php echo site_url('saw/data'); ?>" class="btn btn-danger">Batal</a>
      </div>
    </div>
  </form>
</div>
<?php } ?>
<?php $this->load->view('template/footer'); ?>