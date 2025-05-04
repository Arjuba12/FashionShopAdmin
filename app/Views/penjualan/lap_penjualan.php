<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Data Penjualan</title>
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

    <h2>Laporan Data Penjualan</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Product</th>
                <th>Tanggal Terjual</th>
                <th>Konsumen</th>
                <th>Brand</th>
                <th>Jumlah</th>
                <th>Discount</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($penjualan as $key => $value): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td style="text-align: left;"><?= esc($value['nama_product']); ?></td>
                    <td><?= esc(date('d-m-Y', strtotime($value['tgl_terjual']))); ?></td>
                    <td><?= esc($value['id_konsumen']); ?></td>
                    <td><?= esc($value['brand']); ?></td>
                    <td><?= esc($value['jumlah']); ?></td>
                    <td><?= esc($value['discount']); ?>%</td>
                    <td>Rp <?= number_format($value['total_harga'], 0, ',', '.'); ?></td>
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
