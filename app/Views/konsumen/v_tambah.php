<div class="col-md-6 offset-md-3">
    <h3 class="text-center">Tambah Data Konsumen</h3>
    <br>
    <form action="<?= base_url('konsumen/save'); ?>" method="post">
        <?= csrf_field(); ?>

        <div class="form-group">
            <label for="nama_konsumen">Nama Konsumen</label>
            <input type="text" name="nama_konsumen" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" name="umur" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="no_hp">No Handphone</label>
            <input type="number" name="no_hp" class="form-control" required>
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
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= base_url('konsumen'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
