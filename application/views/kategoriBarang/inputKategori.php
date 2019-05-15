<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kategori Barang</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="<?php base_url() . 'kategori/store'; ?>">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">ID Kategori</label>
                    <input type="text" name="id_kategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan ID" value="<?= $kode ?>" readonly>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">

                    <label for="exampleInputEmail1">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama">
                    <small  class="form-text text-danger"><?php echo form_error('nama_kategori'); ?></small>

                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo base_url() . 'kategori'; ?>" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>