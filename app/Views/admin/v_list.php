<div class="col-sm-12">
    <h4>Daftar Admin</h4>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <table class="table table-bordered table-striped">
        <thead class="text-center">
            <tr>
                <th>No</th>
                <th>Nama Admin</th>
                <th>Umur</th>
                <th>No. HP</th>
                <th>Hak Akses</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($admin)) : ?>
                <?php $no = 1; foreach ($admin as $a) : ?>
                    <tr class="text-center">
                        <td><?= $no++; ?></td>
                        <td class="text-left"><?= esc($a['nama_admin']); ?></td>
                        <td><?= esc($a['umur']); ?></td>
                        <td><?= esc($a['no_handphone']); ?></td>
                        <td><?= esc($a['hak_akses']); ?></td>
                        <td><?= esc($a['alamat']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="6" class="text-center">Belum ada admin.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
