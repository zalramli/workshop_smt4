<?php
$data = $this->session->userdata("nama");
if (!isset($data)) {
    redirect('login');
}
?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Pelanggan</h1>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="<?php base_url() . 'pelanggan/store'; ?>">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">ID Pelanggan</label>
                    <input type="text" name="id_pelanggan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan ID" value="<?= $kode ?>" readonly>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama pelanggan">
                    <small class="form-text text-danger"><?php echo form_error('nama_pelanggan'); ?></small>

                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan email">
                    <small class="form-text text-danger"><?php echo form_error('email'); ?></small>

                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">No Hp</label>
                    <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" placeholder="Masukan No Hp" aria-describedby="emailHelp">
                    <small class="form-text text-danger"><?php echo form_error('no_hp'); ?></small>

                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan alamat">
                    <small class="form-text text-danger"><?php echo form_error('alamat'); ?></small>

                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo base_url() . 'pelanggan'; ?>" class="btn btn-danger">Batal</a>
        </form>
    </div>
</div>