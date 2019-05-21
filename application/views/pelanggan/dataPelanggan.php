<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pelanggan</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url() ?>pelanggan/add" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align:center">
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>No Hp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($pelanggan as $item) {
                            ?>
                            <tr>
                                <td><?= $item->id_pelanggan ?></td>
                                <td><?= $item->nama_pelanggan ?></td>
                                <td><?= $item->email ?></td>
                                <td><?= $item->alamat ?></td>
                                <td><?= $item->no_hp ?></td>
                                <td>
                                    <a href="<?= base_url() . 'pelanggan/edit'; ?>/<?= $item->id_pelanggan ?>" class="btn btn-success">Edit</a>
                                    <a href="<?php echo base_url() . 'pelanggan/hapus'; ?>/<?php echo $item->id_pelanggan ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>