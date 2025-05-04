<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Data Konsumen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #000;
            padding: 6px;
            text-align: center;
            vertical-align: middle;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Laporan Data Konsumen</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Konsumen</th>
                <th>Umur</th>
                <th>No Handphone</th>
                <th>Status</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($konsumen as $key => $value): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td style="text-align: left;"><?= esc($value['nama_konsumen']); ?></td>
                    <td><?= esc($value['umur']); ?> tahun</td>
                    <td><?= esc($value['no_handphone']); ?></td>
                    <td><?= esc($value['status']); ?></td>
                    <td style="text-align: left;"><?= esc($value['alamat']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br><br>
    <p style="text-align: left;">Prabumulih, <?= date('d-m-Y'); ?></p>
    <p style="text-align: left;">Pimpinan</p>
    <br><br>
    <p style="text-align: left;">Arjuna Bimantara, S.Kom., M.Kom.</p>

</body>
</html>
