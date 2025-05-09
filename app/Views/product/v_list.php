<div class="col-sm-12">
    <a href="<?= base_url('product/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
    <a href="<?= base_url('product/printpdf'); ?>" class="btn btn-warning">Print PDF</a>
    <br><br>

    <?php if (!empty(session()->getFlashData('success'))) { ?>
        <div class="alert alert-success">
            <?= session()->getFlashData('success'); ?>
        </div>
    <?php } ?>

    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Nama Product</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Brand</th>
                <th>Stok</th>   
                <th>Harga</th>
                <th>Discount</th>
                <th>Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($product as $value) { ?>
                <tr class="text-center">
                    <td class="align-middle"><?= $no++; ?></td>
                    <td class="text-left align-middle"><?= $value['name_product']; ?></td>
                    <td class="align-middle">
                        <img src="<?= base_url('folder_upload/' . esc($value['gambar'])); ?>" width="100px" height="100px">
                    </td>
                    <td class="text-left align-middle"><?= $value['desc_product']; ?></td>
                    <td class="align-middle"><?= $value['nama_brand']; ?></td>
                    <td class="align-middle"><?= $value['stock']; ?></td>
                    <td class="align-middle">Rp <?= number_format($value['harga'], 0, ',', '.'); ?></td>
                    <td class="align-middle"><?= $value['discount']; ?>%</td>
                    <td class="align-middle"><?= $value['nama_kategori']; ?></td>
                    <td class="align-middle">
                        <a href="<?= base_url('product/edit/' . $value['id_product']) ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('product/delete/' . $value['id_product']) ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
