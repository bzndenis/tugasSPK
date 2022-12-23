<?php $this->load->view('template/header'); ?>

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Data Alternatif</h3>
    <div class="box-tools">
      <a href="<?php echo site_url('saw/create'); ?>" class="btn btn-primary">Tambah Alternatif</a>
    </div>
  </div>
  <div class="box-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered" id="dataTables1">
        <thead>
          <tr>
          <?php $j = 0;
            foreach ($nama_crit as $tabel_list) { ?>
            <th><?php echo $tabel_list['criteria'] ?></th>
            <?php } ?>
          </tr>
        </thead>
        <tbody>
          <?php $j = 0;            
            foreach ($nama_alt as $tabel_list1) { ?> 
            <tr>
            <td><?php echo $tabel_list1['name'] ?></td>            
            <td><?php echo $tabel_list1['value'] ?></td>
            <td>
              <a href="<?php echo site_url('saw/update/' . $tabel_list1['id_alternative']); ?>" class="btn btn-success btn-xs" title="Ubah">Ubah</a> &nbsp;
              <a href="#" data-href="<?php echo site_url('saw/delete/' . $tabel_list1['id_alternative']); ?>" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-xs" title="Hapus">Hapus</a> &nbsp;
            </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- <div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Data Bobot</h3>    
  </div>
  <div class="box-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered" id="dataTables1">
        <thead>
          <tr>
            <th>C1</th>
            <th>C2</th>
            <th>C3</th>
            <th>C4</th> 
            <th>C5</th>           
            <th width="180">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $j = 0;
            foreach ($bobot as $bobot_list) { ?> <tr>
            <td><?php echo $bobot_list['C1'] ?></td>
            <td><?php echo $bobot_list['C2'] ?></td>
            <td><?php echo $bobot_list['C3'] ?></td>
            <td><?php echo $bobot_list['C4'] ?></td>
            <td><?php echo $bobot_list['C5'] ?></td>
            <td>
              <a href="<?php echo site_url('saw/update_bobot/'); ?>" class="btn btn-success btn-xs" title="Ubah">Ubah</a> &nbsp;
            </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div> -->

<?php $this->load->view('template/footer'); ?>