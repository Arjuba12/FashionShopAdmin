<div class="col-md-6 offset-md-3">
    <h3 class="text-center">Tambah Data Supplier</h3>
    <br>
    <form action="<?= base_url('supplier/save'); ?>" method="POST">
        <?= csrf_field(); ?>

        <div class="form-group">
            <label for="nama_supplier">Supplier</label>
            <input type="text" name="nama_supplier" class="form-control" placeholder="Supplier" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" required>
                <option value="">-- Pilih Status --</option>
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
        </div>

        <div class="form-group">
            <label for="produk">Nama Produk</label>
            <input type="text" name="produk" class="form-control" placeholder="Produk" required>
        </div>

        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" placeholder="exp: 1" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= base_url('supplier'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
