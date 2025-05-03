<div class="col-sm-12">
    <h3><?= $title; ?></h3>

    <?php if (!empty(session()->getFlashData('error'))) { ?>
        <div class="alert alert-danger">
            <?= session()->getFlashData('error'); ?>
        </div>
    <?php } ?>

    <form action="<?= base_url('penjualan/update/' . $penjualan['id_penjualan']); ?>" method="post">
        <div class="form-group">
            <label for="nama_product">Nama Product</label>
            <input type="text" class="form-control" id="nama_product" name="nama_product" value="<?= old('nama_product', $penjualan['nama_product']); ?>" required>
        </div>

        <div class="form-group">
            <label for="tgl_terjual">Tanggal Terjual</label>
            <input type="date" class="form-control" id="tgl_terjual" name="tgl_terjual" value="<?= old('tgl_terjual', $penjualan['tgl_terjual']); ?>" required>
        </div>

        <div class="form-group">
            <label for="konsumen">Konsumen</label>
            <input type="text" class="form-control" id="konsumen" name="konsumen" value="<?= old('konsumen', $penjualan['konsumen']); ?>" required>
        </div>

        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" value="<?= old('brand', $penjualan['brand']); ?>" required>
        </div>

        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= old('jumlah', $penjualan['jumlah']); ?>" required>
        </div>

        <div class="form-group">
            <label for="discount">Discount (%)</label>
            <input type="number" class="form-control" id="discount" name="discount" value="<?= old('discount', $penjualan['discount']); ?>" required>
        </div>

        <div class="form-group">
            <label for="total_harga">Total Harga</label>
            <input type="number" class="form-control" id="total_harga" name="total_harga" value="<?= old('total_harga', $penjualan['total_harga']); ?>" required>
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
        <a href="<?= base_url('penjualan'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
