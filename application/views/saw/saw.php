<?php $this->load->view('template/header'); ?>

<?php $i = 0;
foreach ($tabel as $tabel_list) {
  $naman[$i] = $tabel_list['nama'];

  $harhar[$i] = $tabel_list['harga'] / $max_harga;
  $ramram[$i] = $tabel_list['ram'] / $max_ram;
  $memmem[$i] = $min_memori / $tabel_list['memori'];
  $propro[$i] = $tabel_list['processor'] / $max_processor;
  $kamkam[$i] = $min_kamera / $tabel_list['kamera'];

  $Whar[$i] = $harhar[$i] * 0.25;
  $Wram[$i] = $ramram[$i] * 0.2;
  $Wmem[$i] = $memmem[$i] * 0.2;
  $Wpro[$i] = $propro[$i] * 0.15;
  $Wkam[$i] = $kamkam[$i] * 0.2;

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
        <h3 class="box-title">Tabel Normalisasi</h3>
        <div class="box-tools">
        </div>
      </div>
      <div class="box-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered" id="dataTables3">
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

    <script>
      $(document).ready(function () {
    $('#example').DataTable({
        order: [[3, 'desc']],
    });
});
      </script>

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
              <?php $j = 0;
              foreach ($tabel as $tabel_list) { ?>
                <tr>
                  <td><?php echo $j + 1 ?></td>
                  <td><?php echo $tabel_list['nama'] ?></td>
                  <td><?php echo $vv[$j] ?></td>
                </tr>

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