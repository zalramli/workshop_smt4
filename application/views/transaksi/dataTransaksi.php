<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Transaksi</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url() ?>kategori/add" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <form target="_blank" method="post" action="<?php echo base_url() . 'transaksi/print'; ?>">
                <input type="date" name="tgl_awal"> ---
                <input type="date" name="tgl_akhir"> &nbsp;&nbsp;&nbsp;&nbsp;
                <button style="height:40px; margin-bottom: 3px;" class="btn btn-success"><i class="fa fa-print" style="color:white;"> </i></button>
            </form><br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align:center">
                            <th>Kode</th>
                            <th>Pelanggan</th>
                            <th>Tanggal</th>
                            <th>Total Belanjaa</th>
                            <th>Kasir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($transaksi as $item) {
                            ?>
                            <tr>
                                <td><?= $item->id_transaksi ?></td>
                                <td><?= $item->nama_pelanggan ?></td>
                                <td><?= $item->tanggal ?></td>
                                <td><?= $item->total_harga ?></td>
                                <td><?= $item->nama_pegawai ?></td>
                                <td>
                                    <a href="<?= base_url() . 'transaksi/detail'; ?>/<?= $item->id_pelanggan ?>" class="btn btn-warning">Detail</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>