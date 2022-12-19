<?php $this->load->view('template/header'); ?>

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Data Kriteria</h3>
    <div class="box-tools">
      <a href="<?php echo site_url('saw/create'); ?>" class="btn btn-primary">Tambah Kriteria</a>
    </div>
  </div>
  <div class="box-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered" id="dataTables1">
        <thead>
          <tr>
            <th>No</th>
            <th>Alternatif</th>
            <th>Lokasi</th>
            <th>Luas Tanah (m2)</th>
            <th>Harga Tanah (Ribu/m2)</th>
            <th>Bentuk Lahan</th>
            <th>Resiko Keamanan</th>
            <th width="180">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $j = 0;
            foreach ($tabel as $tabel_list) { ?> <tr>
            <td><?php echo $j + 1 ?></td>
            <td><?php echo $tabel_list['nama'] ?></td>
            <td><?php echo $tabel_list['harga'] ?></td>
            <td><?php echo $tabel_list['ram'] ?></td>
            <td><?php echo $tabel_list['memori'] ?></td>
            <td><?php echo $tabel_list['processor'] ?></td>
            <td><?php echo $tabel_list['kamera'] ?></td>
            <td>
              <a href="<?php echo site_url('saw/update/' . $tabel_list['id']); ?>" class="btn btn-success btn-xs" title="Ubah">Ubah</a> &nbsp;
              <a href="#" data-href="<?php echo site_url('saw/delete/' . $tabel_list['id']); ?>" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-xs" title="Hapus">Hapus</a> &nbsp;
            </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php $this->load->view('template/footer'); ?>