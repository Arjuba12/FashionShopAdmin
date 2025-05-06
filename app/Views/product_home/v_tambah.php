<div class="col-md-6 offset-md-3">
    <h3 class="text-center">Tambah Data Produk</h3>
    <br>
    <form action="<?= base_url('product_home/save'); ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Nama Produk" required>
        </div>

        <div class="form-group">
            <label for="info">Info</label>
            <textarea name="info" class="form-control" placeholder="Deskripsi Produk" required></textarea>
        </div>

        <div class="form-group">
            <label for="image">image Produk</label>
            <input type="file" name="image" class="form-control" onchange="previewImage(event)" required>
            <br>
            <img id="preview" src="#" alt="Preview image" style="max-width: 200px; display: none;" />
        </div>

        <div class="form-group">
            <label for="stock">Kategori</label>
            <input type="text" name="category" class="form-control" placeholder="exp: 1" required>
        </div>

        <div class="form-group">
            <label for="liked">Like</label>
            <input type="text" name="liked" class="form-control" placeholder="liked" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= base_url('product_home'); ?>" class="btn btn-secondary">Kembali</a>
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