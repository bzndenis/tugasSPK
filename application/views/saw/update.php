
<?php $this->load->view('template/header'); ?>

<?php echo validation_errors(); ?>

<div class="container-fluid">
  <h3>Update Data</h3>

<?php echo form_open('data/update/'.$data_item['id']); ?>
  <label for="nama" class="col-sm-2 control-label">Alternatif</label>
  <input type="text" name="nama" value="<?php echo $data_item['nama'] ?>"><br>

  <label for="harga" class="col-sm-2 control-label">Lokasi</label>
  <input type="text" name="harga" value="<?php echo $data_item['harga'] ?>"><br>

  <label for="ram" class="col-sm-2 control-label">Luas Tanah (m2)</label>
  <input type="text" name="ram" value="<?php echo $data_item['ram'] ?>"><br>

  <label for="memori" class="col-sm-2 control-label">Harga Tanah (Ribu/m2)</label>
  <input type="text" name="memori" value="<?php echo $data_item['memori'] ?>"><br>

  <label for="processor" class="col-sm-2 control-label">Bentuk Lahan</label>
  <input type="text" name="processor" value="<?php echo $data_item['processor'] ?>"><br>

  <label for="kamera" class="col-sm-2 control-label">Resiko Keamanan</label>
  <input type="text" name="kamera" value="<?php echo $data_item['kamera'] ?>"><br>

  <input type="submit" name="submit" value="Kirim" class="btn btn-primary">

<?php echo form_close(); ?>
</div>

<?php $this->load->view('template/footer'); ?>