

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Jabatan</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="container-fluid">
        <?php foreach ($jabatan as $item) { ?>
            <form class="" method="post" action="<?php echo base_url() . 'jabatan/update'; ?>">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="exampleInputEmail1">ID Jabatan</label>
                        <input type="text" name="id_jabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?= $item->id_jabatan ?>" readonly>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="exampleInputEmail1">Nama Jabatan</label>
                        <input type="text" name="nama_jabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?= $item->nama_jabatan ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?php echo base_url() . 'jabatan'; ?>" class="btn btn-danger">Batal</a>
            </form>
        <?php } ?>
    </div>
</div>