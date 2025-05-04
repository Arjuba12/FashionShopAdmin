<div class="col-md-6 offset-md-3">
    <h3 class="text-center">Edit Data Konsumen</h3>
    <br>
    <form action="<?= base_url('konsumen/update/' . $konsumen['id_konsumen']); ?>" method="post">
        <?= csrf_field(); ?>

        <div class="form-group">
            <label for="nama_konsumen">Nama Konsumen</label>
            <input type="text" name="nama_konsumen" class="form-control" value="<?= $konsumen['nama_konsumen']; ?>" required>
        </div>

        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" name="umur" class="form-control" value="<?= $konsumen['umur']; ?>" required>
        </div>

        <div class="form-group">
            <label for="no_handphone">No Handphone</label>
            <input type="text" name="no_handphone" class="form-control" value="<?= $konsumen['no_handphone']; ?>" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" required>
                <option value="Aktif" <?= $konsumen['status'] == 'Aktif' ? 'selected' : ''; ?>>Aktif</option>
                <option value="Tidak Aktif" <?= $konsumen['status'] == 'Tidak Aktif' ? 'selected' : ''; ?>>Tidak Aktif</option>
            </select>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required><?= $konsumen['alamat']; ?></textarea>
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
        <a href="<?= base_url('konsumen'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
