<div class="col-sm-12">
    <a href="<?= base_url('penjualan/tambah'); ?>" class="btn btn-primary">Tambah Penjualan</a>
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
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($penjualan as $value) { ?>
                <tr class="text-center">
                    <td class="align-middle"><?= $no++; ?></td>
                    <td class="text-left align-middle"><?= $value['nama_product']; ?></td>
                    <td class="align-middle"><?= $value['tgl_terjual']; ?></td>
                    <td class="align-middle"><?= $value['konsumen']; ?></td>
                    <td class="align-middle"><?= $value['brand']; ?></td>
                    <td class="align-middle"><?= $value['jumlah']; ?></td>
                    <td class="align-middle"><?= $value['discount']; ?>%</td>
                    <td class="align-middle">Rp <?= number_format($value['total_harga'], 0, ',', '.'); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
