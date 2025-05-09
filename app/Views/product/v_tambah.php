<div class="col-md-6 offset-md-3">
    <h3 class="text-center">Tambah Data Produk</h3>
    <br>
    <form action="<?= base_url('product/save'); ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <div class="form-group">
            <label for="name_product">Nama Produk</label>
            <input type="text" name="name_product" class="form-control" placeholder="Nama Produk" required>
        </div>

        <div class="form-group">
            <label for="desc_product">Deskripsi Produk</label>
            <textarea name="desc_product" class="form-control" placeholder="Deskripsi Produk" required></textarea>
        </div>

        <div class="form-group">
            <label for="brand">Brand</label>
            <select name="brand" class="form-control" required>
                <option value="">-- Pilih Brand --</option>
                <?php foreach ($brand as $b): ?>
                    <option value="<?= $b['id_brand']; ?>"><?= $b['nama_brand']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" class="form-control" placeholder="exp: 1" required>
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control" placeholder="Harga" required>
        </div>

        <div class="form-group">
            <label for="discount">Discount (%)</label>
            <input type="number" name="discount" class="form-control" placeholder="Discount" required>
        </div>

        <div class="form-group">
            <label for="id_kategori">Kategori</label>
            <select name="id_kategori" class="form-control" required>
                <option value="">-- Pilih Kategori --</option>
                <?php foreach ($kategori as $k): ?>
                    <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="gambar">Gambar Produk</label>
            <input type="file" name="gambar" class="form-control" onchange="previewImage(event)" required>
            <br>
            <img id="preview" src="#" alt="Preview Gambar" style="max-width: 200px; display: none;" />
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= base_url('product'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script>
    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('preview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>