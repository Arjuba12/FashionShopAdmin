<div class="col-md-6 offset-md-3">
    <h3 class="text-center">Edit Data Supplier</h3>
    <br>

    <!-- form start -->
    <form action="<?= base_url('supplier/update/' . $supplier['id_supplier']); ?>" method="POST">
        <?= csrf_field(); ?>


        <div class="form-group">
            <label>Supplier</label>
            <input name="nama_supplier" value="<?= $supplier['nama_supplier'] ?>" class="form-control" placeholder="Supplier" required>
        </div>
        <div class="form-group">
            <label>Status</label>
            <input name="status" value="<?= $supplier['status'] ?>" class="form-control" placeholder="Status" required>
        </div>
        <div class="form-group">
            <label>Nama Produk</label>
            <input name="produk" value="<?= $supplier['produk'] ?>" class="form-control" placeholder="Nama Produk"
                required>
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" value="<?= $supplier['jumlah'] ?>" class="form-control"
                placeholder="Jumlah" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" placeholder="Alamat"
                required><?= $supplier['alamat'] ?></textarea>
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
        <a href="<?= base_url('supplier'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>