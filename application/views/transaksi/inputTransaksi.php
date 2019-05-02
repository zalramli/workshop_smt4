<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Kategori</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url() ?>kategori/add" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form>
                    <input type="text" id="name" class="form-control" placeholder="Name">
                    <input type="text" id="email" class="form-control" placeholder="Email Address">
                    <input type="button" class="btn btn-primary add-row" value="Add Row">
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Select</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" name="record"></td>
                            <td>Peter Parker</td>
                            <td>peterparker@mail.com</td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="delete-row">Delete Row</button>
            </div>
        </div>
    </div>
</div>