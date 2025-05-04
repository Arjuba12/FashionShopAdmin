<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Data Produk</title>
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

        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>

    <h2>Laporan Data Produk</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Product</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Brand</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Discount</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($product as $key => $value): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td style="text-align: left;"><?= esc($value['name_product']); ?></td>
                    <td>
                        <?php if (!empty($value['gambar'])): ?>
                            <img src="<?= base_url('folder_upload/' . esc($value['gambar'])); ?>" alt="Gambar Produk">
                        <?php else: ?>
                            Tidak Ada Gambar
                        <?php endif; ?>
                    </td>
                    <td style="text-align: left;"><?= esc($value['desc_product']); ?></td>
                    <td><?= esc($value['brand']); ?></td>
                    <td><?= esc($value['stock']); ?></td>
                    <td>Rp <?= number_format($value['harga'], 0, ',', '.'); ?></td>
                    <td><?= esc($value['discount']); ?>%</td>
                    <td><?= esc($value['id_kategori']); ?></td>
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
