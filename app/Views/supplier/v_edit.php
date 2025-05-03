<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Data Supplier</h3>
        </div>

        <!-- form start -->
        <form action="<?= base_url('supplier/update/' . $supplier['id_supplier']); ?>" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label>Status</label>
                    <input name="status" value="<?= $supplier['status'] ?>" class="form-control" placeholder="Status" required>
                </div>
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input name="product" value="<?= $supplier['product'] ?>" class="form-control" placeholder="Nama Produk" required>
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" name="jumlah" value="<?= $supplier['jumlah'] ?>" class="form-control" placeholder="Jumlah" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat" required><?= $supplier['alamat'] ?></textarea>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= base_url('supplier'); ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>
