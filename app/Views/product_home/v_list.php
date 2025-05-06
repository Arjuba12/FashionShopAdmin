<div class="col-sm-12">
    <a href="<?= base_url('product_home/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
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
                <th>Title</th>
                <th>Info</th>
                <th>Image</th>
                <th>Kategori</th>
                <th>Like</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($product_home as $value) { ?>
                <tr class="text-center">
                    <td class="align-middle"><?= $no++; ?></td>
                    <td class="text-left align-middle"><?= $value['title']; ?></td>
                    <td class="text-left align-middle"><?= $value['info']; ?></td>
                    <td class="align-middle">
                        <img src="<?= base_url('img/' . esc($value['image'])); ?>" width="100px" height="100px">
                    </td>
                    <td class="align-middle"><?= $value['category']; ?></td>
                    <td class="align-middle"><?= $value['liked']; ?></td>

                    <td class="align-middle">
                        <a href="<?= base_url('product_home/edit/' . $value['id']) ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('product_home/delete/' . $value['id']) ?>" class="btn btn-danger"
                            onclick="return confirm('Apakah yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>