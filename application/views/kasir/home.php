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
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active bg-primary">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Data Pelanggan</h5>
                                    <small>3 days ago</small>
                                </div>
                            </a>
                            <a class="list-group-item">
                                <form>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Nota</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Nota</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Nota</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        </div>
                                    </div>
                                </form>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active bg-primary">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Data Pelanggan</h5>
                                    <small>3 days ago</small>
                                </div>
                            </a>
                            <a class="list-group-item">
                                <form>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Nota</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Nota</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Nota</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        </div>
                                    </div>
                                </form>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h2>TOTAL BAYAR</h2>
                        <button type="button" id="updateButton" class="btn btn-primary" onclick="productUpdate();">
                            Add
                        </button>

                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <a class="list-group-item">
                            <h1>TOTAL BAYAR</h1>
                        </a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <button type="submit" id="addrow" class="btn btn-primary">Tambah Barang</button>
                        <table class="table table-bordered order-list mt-3" id="myTable">
                            <thead>
                                <tr style="text-align:center;">
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <form>
                                            <input type="text" name="kd_barang" id="kd_barang" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="nama" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="jumlah" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="harga" class="form-control">
                                        </form>

                                    </td>
                                    <td>
                                        <a class="deleteRow"></a>
                                    </td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="col-md-12" colspan="5">
                                    </td>
                                </tr>
                                <tr>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="<?= base_url() . 'assets/mdb/js/jquery-3.3.1 .min.js' ?>"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?= base_url() . 'assets/mdb/js/popper.min.js' ?>"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= base_url() . 'assets/mdb/js/bootstrap.min.js' ?>"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?= base_url() . 'assets/mdb/js/mdb.min.js ' ?>"></script>
    <script src="<?php echo base_url() . 'assets/bootstrap/js/jquery-3.3.1.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url() . 'assets/bootstrap/js/jquery-ui.js' ?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#kd_barang').autocomplete({
                source: "<?php echo site_url('kasir/get_autocomplete'); ?>",

                select: function(event, ui) {
                    $('[name="kd_barang"]').val(ui.item.label);
                    $('[name="nama"]').val(ui.item.namas);
                    $('[name="harga"]').val(ui.item.description);
                }
            });

        });
    </script>
    <script>
        $(document).ready(function() {
            var counter = 0;

            $("#addrow").on("click", function() {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td><input type="text" class="form-control" name="kd_barang' + counter + '"/></td>';
                cols += '<td><input type="text" class="form-control" name="nama' + counter + '"/></td>';
                cols += '<td><input type="text" class="form-control" name="jumlah' + counter + '"/></td>';
                cols += '<td><input type="text" class="form-control" name="harga' + counter + '"/></td>';

                cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
                newRow.append(cols);
                $("table.order-list").append(newRow);
                counter++;
            });



            $("table.order-list").on("click", ".ibtnDel", function(event) {
                $(this).closest("tr").remove();
                counter -= 1
            });


        });



        function calculateRow(row) {
            var price = +row.find('input[name^="price"]').val();

        }

        function calculateGrandTotal() {
            var grandTotal = 0;
            $("table.order-list").find('input[name^="price"]').each(function() {
                grandTotal += +$(this).val();
            });
            $("#grandtotal").text(grandTotal.toFixed(2));
        }
    </script>
</body>

</html>