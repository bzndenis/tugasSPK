<?php $this->load->view('template/header'); ?>

<?php $i = 0;
foreach ($bobot_saw as $bobot_list) {

  //call bobot from db
  $bc1[$i] = $bobot_list['C1'];
  $bc2[$i] = $bobot_list['C2'];
  $bc3[$i] = $bobot_list['C3'];
  $bc4[$i] = $bobot_list['C4'];
  $bc5[$i] = $bobot_list['C5'];

  //bobot total
  $bt[$i] = $bc1[$i] + $bc2[$i] + $bc3[$i] + $bc4[$i] + $bc5[$i];

  //normalisasi bobot
  $nb1[$i] = $bc1[$i] / $bt[$i];
  $nb2[$i] = $bc2[$i] / $bt[$i];
  $nb3[$i] = $bc3[$i] / $bt[$i];
  $nb4[$i] = $bc4[$i] / $bt[$i];
  $nb5[$i] = $bc5[$i] / $bt[$i];

  $i += 1;
} ?>



<?php 

  $i = 0;
  $j = 0;

foreach ($tabel as $tabel_list) {
  $naman[$i] = $tabel_list['nama'];

  $harhar[$i] = $tabel_list['harga'] / $max_harga;
  $ramram[$i] = $tabel_list['ram'] / $max_ram;
  $memmem[$i] = $min_memori / $tabel_list['memori'];
  $propro[$i] = $tabel_list['processor'] / $max_processor;
  $kamkam[$i] = $min_kamera / $tabel_list['kamera'];

  $Whar[$i] = $harhar[$i] * $nb1[$j];
  $Wram[$i] = $ramram[$i] * $nb2[$j];
  $Wmem[$i] = $memmem[$i] * $nb3[$j];
  $Wpro[$i] = $propro[$i] * $nb4[$j];
  $Wkam[$i] = $kamkam[$i] * $nb5[$j];

  $vv[$i] = $Whar[$i] + $Wram[$i] + $Wmem[$i] + $Wpro[$i] + $Wkam[$i];

  $i += 1;
} ?>


<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Penilaian</h3> 
    <div class="box-tools">
      <a href="<?php echo site_url('saw/create'); ?>" class="btn btn-primary">Tambah Alternatif</a>
    </div>
  </div>
  <div class="box-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered" id="dataTables5">
        <thead>
          <tr>
            <th>No</th>
            <th>Alternatif</th>
            <th>Lokasi</th>
            <th>Luas Tanah (m2)</th>
            <th>Harga Tanah (Ribu/m2)</th>
            <th>Bentuk Lahan</th>
            <th>Resiko Keamanan</th>
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
            </tr>
          <?php $j += 1;
          } ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Bobot</h3>
      <div class="box-tools">
      </div>
    </div>
    <div class="box-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered" id="dataTables3">
          <thead>
            <tr>
              <th>C1</th>
              <th>C2</th>
              <th>C3</th>
              <th>C4</th>
              <th>C5</th>
            </tr>
          </thead>
          <tbody>
            <?php $j = 0;
            foreach ($bobot_saw as $bobot_output) { ?>

              <tr>                
                <td><?php echo $bobot_output['C1'] ?></td>
                <td><?php echo $bobot_output['C2'] ?></td>
                <td><?php echo $bobot_output['C3'] ?></td>
                <td><?php echo $bobot_output['C4'] ?></td>
                <td><?php echo $bobot_output['C5'] ?></td>
              </tr>

            <?php $j += 1;
            } ?>
          </tbody>
        </table>
            <h3 class="box-title">Normalisasi Bobot</h3>
            <table class="table table-striped table-bordered" id="dataTables3">
          <thead>
            <tr>
              <th>C1</th>
              <th>C2</th>
              <th>C3</th>
              <th>C4</th>
              <th>C5</th>              
            </tr>
          </thead>
          <tbody>
            <?php $j = 0;
            foreach ($bobot_saw as $bobot_output) { ?>
              <tr>                
                <td><?php echo $nb1[$j]?></td>
                <td><?php echo $nb2[$j]?></td>
                <td><?php echo $nb3[$j]?></td>
                <td><?php echo $nb4[$j]?></td>
                <td><?php echo $nb5[$j]?></td>
              </tr>

            <?php $j += 1;
            } ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Tabel Normalisasi</h3>
      <div class="box-tools">
      </div>
    </div>
    <div class="box-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered" id="dataTexampleables3">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>C1</th>
              <th>C2</th>
              <th>C3</th>
              <th>C4</th>
              <th>C5</th>
            </tr>
          </thead>
          <tbody>
            <?php $j = 0;
            foreach ($tabel as $tabel_list) { ?>

              <tr>
                <td><?php echo $j + 1 ?></td>
                <td><?php echo $tabel_list['nama'] ?></td>
                <td><?php echo $harhar[$j] ?></td>
                <td><?php echo $ramram[$j] ?></td>
                <td><?php echo $memmem[$j] ?></td>
                <td><?php echo $propro[$j] ?></td>
                <td><?php echo $kamkam[$j] ?></td>
              </tr>

            <?php $j += 1;
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>  

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Nilai Ranking</h3>
      <div class="box-tools">
      </div>
    </div>
    <div class="box-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered" id="dataTables1">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Nilai</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $j = 0;

              foreach ($tabel as $tabel_list) { ?>
              <tr>
                <td><?php echo $j + 1 ?></td>
                <td><?php echo $tabel_list['nama'] ?></td>
                <td><?php echo $vv[$j] ?></td>
              </tr>
            
            <?php
            
            $data = array(
            'id' => $j + 2,
            'nilai' => $vv[$j],
            );
            $this->db->insert('hasil_saw', $data);
            ?>

            <?php $j += 1;
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <?php
  $jumlah = count($vv);
  $maxam = $vv[0];
  $ind = 0;
  for ($x = 1; $x < $jumlah; $x++) {
    if ($vv[$x] > $maxam) {
      $maxam = $vv[$x];
      $ind = $x;
    }
  }
  ?>

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Kesimpulan</h3>
      <div class="box-tools">
      </div>
    </div>
    <div class="box-body">
      <p>Dari hasil perhitungan ranking diatas, maka penilaian terbaik adalah <b><?php echo $naman[$ind] ?></b> dengan nilai <?php echo $maxam ?> </p>
    </div>
  </div>
</div>
</div>
</div>

<?php $this->load->view('template/footer'); ?>