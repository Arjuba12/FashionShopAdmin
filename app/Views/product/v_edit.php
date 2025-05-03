<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Data</h3>
        </div>

        <!-- form start -->
        <form action="<?= base_url('product/update/' . $product['id_product']); ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Product</label>
                    <input name="name_product" value="<?= $product['name_product'] ?>" class="form-control" placeholder="Nama Product" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi Product</label>
                    <input name="desc_product" value="<?= $product['desc_product'] ?>" class="form-control" placeholder="Deskripsi Product" required>
                </div>
                <div class="form-group">
                    <label>Brand</label>
                    <input name="brand" value="<?= $product['brand'] ?>" class="form-control" placeholder="Brand" required>
                </div>
                <div class="form-group">
                    <label>Stock</label>
                    <input type="number" name="stock" value="<?= $product['stock'] ?>" class="form-control" placeholder="Stock" required>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" value="<?= $product['harga'] ?>" class="form-control" placeholder="Harga" required>
                </div>
                <div class="form-group">
                    <label>Discount (%)</label>
                    <input type="number" name="discount" value="<?= $product['discount'] ?>" class="form-control" placeholder="Discount" required>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <input name="id_kategori" value="<?= $product['id_kategori'] ?>" class="form-control" placeholder="Kategori" required>
                </div>
                <div class="form-group">
                    <label>Gambar</label><br>
                    <img id="preview" src="<?= base_url('folder_upload/' . esc($product['gambar'])); ?>" width="100px" height="100px"><br><br>
                    <input type="file" name="gambar" class="form-control" onchange="previewImage(event)">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= base_url('product'); ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
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
