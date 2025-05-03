<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Supplier</h3>
        </div>

        <!-- form start -->
        <form action="<?= base_url('supplier/save'); ?>" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label>Status</label>
                    <input name="status" class="form-control" placeholder="Status" required>
                </div>
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input name="product" class="form-control" placeholder="Nama Produk" required>
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" placeholder="exp: 1" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap" required></textarea>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('supplier'); ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>
