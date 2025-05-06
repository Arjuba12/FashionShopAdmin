<div class="col-md-6 offset-md-3">
    <h3 class="card-title">Edit Data</h3>
    <br>
    <!-- form start -->
    <form action="<?= base_url('product_home/update/' . $product_home['id']); ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="form-group">
            <label>Title</label>
            <input name="title" value="<?= $product_home['title'] ?>" class="form-control" placeholder="Title" required>
        </div>
        <div class="form-group">
            <label>Info</label>
            <input name="info" value="<?= $product_home['info'] ?>" class="form-control" placeholder="Info Product" required>
        </div>
        <div class="form-group">
            <label>Gambar</label>
            <img id="preview" src="<?= base_url('img/' . esc($product_home['image'])); ?>" width="100px" height="100px"><br><br>
            <input type="file" name="image" class="form-control" onchange="previewImage(event)">
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <input name="category" value="<?= $product_home['category'] ?>" class="form-control" placeholder="Kategori" required>
        </div>
        <div class="form-group">
            <label>Like</label>
            <input type="number" name="liked" value="<?= $product_home['liked'] ?>" class="form-control" placeholder="Liked" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url('home_product'); ?>" class="btn btn-secondary">Kembali</a>
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
