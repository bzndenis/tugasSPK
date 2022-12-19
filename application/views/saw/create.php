<?php $this->load->view('template/header'); ?>

<?php echo validation_errors(); ?>

<!-- <div class="container-fluid">
  <h3>Input Data Baru</h3>

  <?php echo form_open('saw/create'); ?>
  <label for="nama" class="col-sm-2 control-label">Alternatif</label>
  <input type="text" name="nama"><br>

  <label for="harga" class="col-sm-2 control-label">Lokasi</label>
  <input type="text" name="harga"><br>

  <label for="ram" class="col-sm-2 control-label">Luas Tanah (m2)</label>
  <input type="text" name="ram"><br>

  <label for="memori" class="col-sm-2 control-label">Harga Tanah (Ribu/m2)</label>
  <input type="text" name="memori"><br>

  <label for="processor" class="col-sm-2 control-label">Bentuk Lahan</label>
  <input type="text" name="processor"><br>

  <label for="kamera" class="col-sm-2 control-label">Resiko Keamanan</label>
  <input type="text" name="kamera"><br>

  <input type="submit" name="submit" value="Kirim" class="btn btn-primary">

  <?php echo form_close(); ?>
</div> -->

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Data Alterbatif</h3>
  </div>
  <form class="form-horizontal" action="<?php echo site_url('saw/create'); ?>" method="post">
    <div class="box-body">

      <?php echo validation_errors('<div class="alert bg-danger" role="alert">', '</div>'); ?>

      <div class="form-group">
        <label for="nama" class="col-sm-2 control-label">Nama</label>
        <div class="col-sm-4">
          <input name="nama" id="nama" class="form-control" required type="text" value="<?php echo set_value('nama'); ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="harga" class="col-sm-2 control-label">Lokasi</label>
        <div class="col-sm-4">
          <input name="harga" id="harga" class="form-control" required type="text" value="<?php echo set_value('harga'); ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="ram" class="col-sm-2 control-label">Luas Tanah (m2)</label>
        <div class="col-sm-4">
          <input name="ram" id="ram" required type="number" class="form-control" value="<?php echo set_value('ram'); ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="memori" class="col-sm-2 control-label">Harga Tanah (Ribu/m2)</label>
        <div class="col-sm-4">
          <input name="memori" id="memori" class="form-control" required type="text" value="<?php echo set_value('memori'); ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="processor" class="col-sm-2 control-label">Bentuk Lahan</label>
        <div class="col-sm-4">
          <input name="processor" id="processor" class="form-control" required type="text" value="<?php echo set_value('processor'); ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="kamera" class="col-sm-2 control-label">Resiko Keamanan</label>
        <div class="col-sm-4">
          <input name="kamera" id="kamera" required type="number" class="form-control" value="<?php echo set_value('kamera'); ?>">
        </div>
      </div>
    </div>
    <div class="box-footer">
      <div class="text-center col-sm-6">
        <button type="submit" name="submit" class="btn btn-success">Simpan</button>
        <a href="<?php echo site_url('saw/data'); ?>" class="btn btn-danger">Batal</a>
      </div>
    </div>
  </form>
</div>

<?php $this->load->view('template/footer'); ?>