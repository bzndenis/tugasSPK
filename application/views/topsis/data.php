<?php $this->load->view('template/header'); ?>

<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'wp_kinerja';
$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$sql = "
        SELECT 
          b.name,c.criteria,a.value,c.weight,c.attribute
        FROM 
          topsis_evaluations a
          JOIN 
            topsis_alternatives b USING(id_alternative)
          JOIN 
            topsis_criterias c USING(id_criteria)
        ";
$result = $db->query($sql);

// $dbhost = 'localhost';
// $dbuser = 'dundang1_wp_kinerja';
// $dbpass = 'q1w2e3qwe123';
// $dbname = 'dundang1_wp_kinerja';
// $db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// $sql = "
//         SELECT 
//           b.name,c.criteria,a.value,c.weight,c.attribute
//         FROM 
//           topsis_evaluations a
//           JOIN 
//             topsis_alternatives b USING(id_alternative)
//           JOIN 
//             topsis_criterias c USING(id_criteria)
//         ";
// $result = $db->query($sql);


$data = array();
$kriterias = array();
$bobot = array();
$atribut = array();
$nilai_kuadrat = array();

while ($row = $result->fetch_object()) {
  if (!isset($data[$row->name])) {
    $data[$row->name] = array();
  }
  if (!isset($data[$row->name][$row->criteria])) {
    $data[$row->name][$row->criteria] = array();
  }
  if (!isset($nilai_kuadrat[$row->criteria])) {
    $nilai_kuadrat[$row->criteria] = 0;
  }
  $bobot[$row->criteria] = $row->weight;
  $atribut[$row->criteria] = $row->attribute;
  $data[$row->name][$row->criteria] = $row->value;
  $nilai_kuadrat[$row->criteria] += pow($row->value, 2);
  $kriterias[] = $row->criteria;
}

$kriteria = array_unique($kriterias);
$jml_kriteria = count($kriteria);

?>

<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Penilaian</h3>
    <!-- <div class="box-tools">
      <a href="<?php echo site_url('saw/create'); ?>" class="btn btn-primary">Tambah Alternatif</a>
    </div> -->
  </div>
  <div class="box-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered" id="dataTables5">
        <thead>
          <tr>
            <th rowspan='3'>No</th>
            <th rowspan='3'>Alternatif</th>
            <th rowspan='3'>Nama</th>            
            <th colspan='<?php echo $jml_kriteria; ?>'>Kriteria</th>
            <th rowspan='3'>Aksi</th>
          </tr>
          <tr>
            <?php
            foreach ($kriteria as $k)
              echo "<th>{$k}</th>\n";
            ?>
          </tr>
          <tr>
            <?php
            for ($n = 1; $n <= $jml_kriteria; $n++)
              echo "<th>C{$n}</th>";
            ?>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 0;
          foreach ($data as $nama => $krit) {
            echo "<tr>
            <td>" . (++$i) . "</td>
            <th>A{$i}</th>
            <td>{$nama}</td>";
            foreach ($kriteria as $k) {
              echo "<td align='center'>{$krit[$k]}</td>";
            }
          }
          ?>            
          </tr>
          
        </tbody>
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

<?php //$this->load->view('template/footer'); ?>