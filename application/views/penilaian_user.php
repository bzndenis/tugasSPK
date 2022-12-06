<?php $this->load->view('template/header_user'); ?>

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Penilaian</h3>
    </div>
    <div class="box-body">
        
        <div class='table-responsive'>
            <table class='table table-bordered tabel-header'>
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        <?php foreach ($query_kriteria as $row) : ?>
                        <th><?php echo $row->kode_kriteria; ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query_alt as $row) : ?>
                    <tr>
                        <td width="200"><?php echo $row->nama_alternatif; ?></td>
                        <?php foreach ($query_kriteria as $row2) : ?>
                        <td class="text-center"><?php echo $bobot[$row->id_alternatif][$row2->id_kriteria]; ?></td>
                        <?php endforeach; ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php echo $rumus; ?>
        <br>
    </div>
</div>

<?php $this->load->view('template/footer'); ?>