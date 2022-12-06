<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cetak Hasil Penilaian</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 14px;
        }

        th {
            height: 25px;
            text-align: center;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 3px;
        }

        thead {
            background: lightgreen;
        }

        .center {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2 class="center">Hasil Penilaian Kinerja Karyawan</h2>
    <h2 class="center">Balai Besar Pelatihan Vokasi dan Produktivitas (BBPVP) Serang</h2>
    <h3 class="center">Priode 2021-2022</h3>
    <table>
        <thead>
            <tr>
                <th>Ranking</th>
                <th>Alternatif</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 0;
            foreach ($hasil as $row) : ?>
                <tr>
                    <td class="center"><?= ++$no ?></td>
                    <td><?= $row->nama_alternatif ?></td>
                    <td class="center"><?= floatval($row->nilai) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>