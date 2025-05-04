<div class="col-sm-12">
    <a href="<?= base_url('penjualan/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
    <a href="<?= base_url('penjualan/printpdf'); ?>" class="btn btn-warning">Print PDF</a>
    <br><br>

    <?php if (!empty(session()->getFlashData('success'))) { ?>
        <div class="alert alert-success">
            <?= session()->getFlashData('success'); ?>
        </div>
    <?php } ?>

    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Nama Product</th>
                <th>Tanggal Terjual</th>
                <th>Konsumen</th>
                <th>Brand</th>
                <th>Jumlah</th>
                <th>Discount</th>
                <th>Total Harga</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($penjualan as $value) { ?>
                <tr class="text-center">
                    <td class="align-middle"><?= $no++; ?></td>
                    <td class="text-left align-middle"><?= $value['nama_product']; ?></td>
                    <td class="align-middle"><?= $value['tgl_terjual']; ?></td>
                    <td class="align-middle"><?= $value['id_konsumen']; ?></td>
                    <td class="align-middle"><?= $value['brand']; ?></td>
                    <td class="align-middle"><?= $value['jumlah']; ?></td>
                    <td class="align-middle"><?= $value['discount']; ?>%</td>
                    <td class="align-middle">Rp <?= number_format($value['total_harga'], 0, ',', '.'); ?></td>
                    <td class="align-middle">
                        <a href="<?= base_url('penjualan/edit/' . $value['id_penjualan']) ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('penjualan/delete/' . $value['id_penjualan']) ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
