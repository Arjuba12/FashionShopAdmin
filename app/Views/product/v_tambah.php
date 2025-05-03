<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data</h3>
        </div>

        <!-- form start -->
        <form action="<?= base_url('product/save'); ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Product</label>
                    <input name="name_product" class="form-control" placeholder="Nama product" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi Product</label>
                    <textarea  name="desc_product" class="form-control" placeholder="Deskripsi product" required></textarea>
                </div>
                <div class="form-group">
                    <label>Brand</label>
                    <input name="brand" class="form-control" placeholder="Brand" required>
                </div>
                <div class="form-group">
                    <label>Stock</label>
                    <input type="number" name="stock" class="form-control" placeholder="exp: 1" required>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" placeholder="Harga" required>
                </div>
                <div class="form-group">
                    <label>Discount (%)</label>
                    <input type="number" name="discount" class="form-control" placeholder="Discount" required>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <input name="id_kategori" class="form-control" placeholder="id_Kategori" required>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control" onchange="previewImage(event)" required>
                    <br>
                    <img id="preview" src="#" alt="Preview Gambar" style="max-width: 200px; display: none;" />
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
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
