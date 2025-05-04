<div class="col-md-6 offset-md-3">
    <h3 class="text-center"><?= $title; ?></h3>
    <br>

    <?php if (!empty(session()->getFlashData('error'))) : ?>
        <div class="alert alert-danger">
            <?= session()->getFlashData('error'); ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('penjualan/save'); ?>" method="post">
        <?= csrf_field(); ?>

        <div class="form-group">
            <label for="nama_product">Nama Produk</label>
            <input type="text" class="form-control" id="nama_product" name="nama_product" value="<?= old('nama_product'); ?>" placeholder="Nama Produk" required>
        </div>

        <div class="form-group">
            <label for="tgl_terjual">Tanggal Terjual</label>
            <input type="date" class="form-control" id="tgl_terjual" name="tgl_terjual" value="<?= old('tgl_terjual'); ?>" required>
        </div>

        <div class="form-group">
            <label for="id_konsumen">Konsumen</label>
            <input type="text" class="form-control" id="id_konsumen" name="id_konsumen" value="<?= old('id_konsumen'); ?>" placeholder="Konsumen" required>
        </div>

        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" value="<?= old('brand'); ?>" placeholder="Brand Produk" required>
        </div>

        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= old('jumlah'); ?>" placeholder="Contoh: 2" required>
        </div>

        <div class="form-group">
            <label for="discount">Discount (%)</label>
            <input type="number" class="form-control" id="discount" name="discount" value="<?= old('discount'); ?>" placeholder="Contoh: 10" required>
        </div>

        <div class="form-group">
            <label for="total_harga">Total Harga</label>
            <input type="number" class="form-control" id="total_harga" name="total_harga" value="<?= old('total_harga'); ?>" placeholder="Rp..." required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= base_url('penjualan'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
