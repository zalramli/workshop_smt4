<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() . 'assets/mdb/css/bootstrap.min.css' ?>" rel=" stylesheet ">
    <!-- Material Design Bootstrap -->
    <link href="<?= base_url() . 'assets/mdb/css/mdb.min.css' ?>  " rel=" stylesheet ">
    <!-- Your custom styles (optional) -->
    <link href=" <?= base_url() . 'assets/mdb/css/style.css' ?>" rel=" stylesheet ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">



    <title>Hello, world!</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">LCC KOMPUTER</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() . 'kasir/barang' ?>">Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pemesanan</a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>

            </ul>
            <!-- Links -->

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i> Profile </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item" href="#">My account</a>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <table class="table table-hover table-bordered data" width="100%">
                    <thead>
                        <tr>
                            <th style="background-color:#4285F4;color:white;text-align:center;">KODE</th>
                            <th style="background-color:#4285F4;color:white;text-align:center;">KATEGORI</th>
                            <th style="background-color:#4285F4;color:white;text-align:center;">MERK</th>
                            <th style="background-color:#4285F4;color:white;text-align:center;">NAMA</th>
                            <th style="background-color:#4285F4;color:white;text-align:center;">STOK</th>
                            <th style="background-color:#4285F4;color:white;text-align:center;">HARGA</th>
                            <th style="background-color:#4285F4;color:white;text-align:center;" width="10%">FOTO</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($barang as $item) {
                            ?>
                            <tr>
                                <td><?= $item->id_barang ?></td>
                                <td><?= $item->nama_kategori ?></td>
                                <td><?= $item->nama_merk ?></td>
                                <td><?= $item->nama_barang ?></td>
                                <td><?= $item->stok_real ?></td>
                                <td><?= $item->harga ?></td>
                                <td style="text-align:center"><img width="70" height="70" src="../uploads/<?= $item->foto ?>" alt=""></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="<?= base_url() . 'assets/DataTables/media/js/jquery.js' ?>"></script>
    <script type="text/javascript" src="<?= base_url() . 'assets/DataTables/media/js/jquery.dataTables.js' ?>"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="<?= base_url() . 'assets/mdb/js/jquery-3.3.1 .min.js' ?>"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?= base_url() . 'assets/mdb/js/popper.min.js' ?>"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= base_url() . 'assets/mdb/js/bootstrap.min.js' ?>"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?= base_url() . 'assets/mdb/js/mdb.min.js ' ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.data').DataTable({
                "scrollY": "420px",
                "scrollCollapse": true
            });
        });
    </script>
</body>

</html>