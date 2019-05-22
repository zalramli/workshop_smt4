<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Akun</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url() ?>akun/add" class="btn btn-primary">Tambah Data</a>
        </div>
        <?php if ($this->session->flashdata('message')) : ?>

            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data akun <strong>berhasil</strong> <?php echo $this->session->flashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        <?php endif; ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align:center">
                            <th>Kode Akun</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Akses</th>
                            <th>Nama Pegawai</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($ak as $item) {
                            ?>
                            <tr>
                                <td><?= $item->id_akun ?></td>
                                <td><?= $item->username ?></td>
                                <td><?= $item->password ?></td>
                                <td><?= $item->akses ?></td>
                                <td><?= $item->nama_pegawai ?></td>

                                <td>
                                    <a href="<?php echo base_url() . 'akun/edit'; ?>/<?= $item->id_akun ?>" class="btn btn-success">Edit</a>
                                    <a href="<?php echo base_url() . 'akun/hapus'; ?>/<?= $item->id_akun ?>" class="btn btn-danger" onclick="return confirm('Yakin Menghapus Data ?')">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>