<div class="col-md-6 offset-md-3">
    <h3 class="card-title">Edit Data</h3>
    <br>
    <!-- form start -->
    <form action="<?= base_url('product/update/' . $product['id_product']); ?>" method="POST"
        enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="form-group">
            <label>Nama Produk</label>
            <input name="name_product" value="<?= $product['name_product'] ?>" class="form-control"
                placeholder="Nama Product" required>
        </div>
        <div class="form-group">
            <label>Deskripsi Produk</label>
            <input name="desc_product" value="<?= $product['desc_product'] ?>" class="form-control"
                placeholder="Deskripsi Product" required>
        </div>
        <!-- Brand -->
        <div class="form-group">
            <label>Brand</label>
            <select name="brand" class="form-control" required>
                <option value="">-- Pilih Brand --</option>
                <?php foreach ($brand as $b): ?>
                    <option value="<?= $b['id_brand']; ?>" <?= ($product['brand'] == $b['id_brand']) ? 'selected' : ''; ?>>
                        <?= $b['nama_brand']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <!-- ------------------------------------------------- -->
        <div class="form-group">
            <label>stok</label>
            <input type="number" name="stock" value="<?= $product['stock'] ?>" class="form-control" placeholder="Stock"
                required>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" value="<?= $product['harga'] ?>" class="form-control" placeholder="Harga"
                required>
        </div>
        <div class="form-group">
            <label>Diskon (%)</label>
            <input type="number" name="discount" value="<?= $product['discount'] ?>" class="form-control"
                placeholder="Discount" required>
        </div>
        <!-- Kategori -->
        <div class="form-group">
            <label>Kategori</label>
            <select name="id_kategori" class="form-control" required>
                <option value="">-- Pilih Kategori --</option>
                <?php foreach ($kategori as $k): ?>
                    <option value="<?= $k['id_kategori']; ?>" <?= ($product['id_kategori'] == $k['id_kategori']) ? 'selected' : ''; ?>>
                        <?= $k['nama_kategori']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Gambar</label><br>
            <img id="preview" src="<?= base_url('folder_upload/' . esc($product['gambar'])); ?>" width="100px"
                height="100px"><br><br>
            <input type="file" name="gambar" class="form-control" onchange="previewImage(event)">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
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