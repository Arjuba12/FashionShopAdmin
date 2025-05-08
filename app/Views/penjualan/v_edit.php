<div class="col-sm-6 offset-md-3">
    <h3><?= $title; ?></h3>
    <br>
    <?php if (!empty(session()->getFlashData('error'))) { ?>
        <div class="alert alert-danger">
            <?= session()->getFlashData('error'); ?>
        </div>
    <?php } ?>

    <form action="<?= base_url('penjualan/update/' . $penjualan['id_penjualan']); ?>" method="post">
        <?= csrf_field(); ?>

        <div class="form-group">
            <label for="nama_product">Nama Product</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                value="<?= old('nama_produk', $penjualan['nama_produk']); ?>" required>
        </div>

        <div class="form-group">
            <label for="tgl_terjual">Tanggal Terjual</label>
            <input type="date" class="form-control" id="tanggal_penjual" name="tanggal_penjual"
                value="<?= old('tanggal_penjual', $penjualan['tanggal_penjual']); ?>" required>
        </div>

        <div class="form-group">
            <label for="nama_konsumen">Konsumen</label>
            <input type="text" class="form-control" id="nama_konsumen" name="nama_konsumen"
                value="<?= old('nama_konsumen', $penjualan['nama_konsumen']); ?>" required>
        </div>

        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah"
                value="<?= old('jumlah', $penjualan['jumlah']); ?>" required oninput="hitungTotal()">
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga"
                value="<?= old('harga', $penjualan['harga']); ?>" required oninput="hitungTotal()">
        </div>

        <div class="form-group">
            <label for="discount">Discount (%)</label>
            <input type="number" class="form-control" id="diskon" name="diskon"
                value="<?= old('diskon', $penjualan['diskon']); ?>" required oninput="hitungTotal()">
        </div>

        <div class="form-group">
            <label for="total_harga">Total Harga</label>
            <input type="number" class="form-control" id="total_harga" name="total_harga"
                value="<?= old('total_harga', $penjualan['total_harga']); ?>" required readonly>
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
        <a href="<?= base_url('penjualan'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script>
    function hitungTotal() {
        function hitungTotal() {
            // Hilangkan titik ribuan dan ubah koma ke titik desimal
            const harga = parseFloat(document.getElementById('harga').value.replace(/\./g, '').replace(',', '.')) || 0;
            const jumlah = parseInt(document.getElementById('jumlah').value) || 0;
            const diskon = parseFloat(document.getElementById('diskon').value.replace(',', '.')) || 0;

            const subtotal = harga * jumlah;
            const total = subtotal - (subtotal * diskon / 100);

            document.getElementById('total_harga').value = Math.max(0, Math.round(total));
        }
    }
</script>