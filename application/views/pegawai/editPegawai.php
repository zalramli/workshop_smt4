<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pegawai</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="container-fluid">
        <?php foreach ($pegawai as $item) { ?>
            <form class="" method="post" action="<?php echo base_url() . 'pegawai/update'; ?>">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="exampleInputEmail1">ID Pegawai</label>
                        <input type="text" name="id_pegawai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?php echo $item->id_pegawai ?>"readonly>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">

                        <label for="exampleInputEmail1">Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama"value="<?php echo $item->nama_pegawai ?>">
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">

                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" aria-describedby="emailHelp" ><?php echo $item->alamat ?></textarea>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">

                        <label for="nohp">Nomor HP</label>
                        <input type="text" name="no_hp" class="form-control" id="no_hp" aria-describedby="emailHelp" placeholder="Masukan Nomor HP"value="<?php echo $item->no_hp  ?>">
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">

                        <label for="jabatan">Jabatan</label>
                       
                        <select name="id_jabatan" class="form-control" id="jabatan">
                        
                        <?php foreach ($jabatan as $temp ){ ?>
                        <option value="<?php echo $temp->id_jabatan ?>" <?php if($temp->id_jabatan == $item->id_jabatan){echo "Selected";} ?>><?php echo $temp->nama_jabatan ?>
                        </option>
                    <?php } ?>    
                    </select>
                   </div>

               </div>
               <button type="submit" class="btn btn-primary">Update</button>
               <a href="<?php echo base_url() . 'pegawai'; ?>" class="btn btn-danger">Batal</a>
           </form>
       <?php } ?>
   </div>
</div>