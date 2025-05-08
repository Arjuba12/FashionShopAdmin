<div class="col-sm-12">
    <a href="<?= base_url('supplier/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
    <a href="<?= base_url('supplier/printpdf'); ?>" class="btn btn-warning">Print PDF</a>
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
                <th>Supplier</th>
                <th>Status</th>
                <th>Product</th>
                <th>Jumlah</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($supplier as $value) { ?>
                <tr class="text-center">
                    <td class="align-middle"><?= $no++; ?></td>
                    <td class="align-middle"><?= $value['nama_supplier']; ?></td>
                    <td class="align-middle"><?= $value['status']; ?></td>
                    <td class="align-middle"><?= $value['produk']; ?></td>
                    <td class="align-middle"><?= $value['jumlah']; ?></td>
                    <td class="text-left align-middle" style="max-width: 200px; white-space: normal; word-wrap: break-word;">
                        <?= $value['alamat']; ?>
                    </td>
                    <td class="align-middle">
                        <a href="<?= base_url('supplier/edit/' . $value['id_supplier']) ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('supplier/delete/' . $value['id_supplier']) ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
