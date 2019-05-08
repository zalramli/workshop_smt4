<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">NAMA TOKO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pemesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cart <i class='fas fa-shopping-cart '></i> <span class="badge badge-danger badge-counter">3</span></a>
                </li>

            </ul>
            <span class="navbar-text">
                NAMA USER
            </span>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        <i class="fas fa-laptop"></i> All
                    </a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-laptop"></i> Laptop</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-laptop"></i> Smartphone</a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-laptop"></i> Aksesoris</a>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Cari Barang"">

                    </div>
                </div>
                <div class=" row mt-3">
                        <?php
                        foreach ($barang as $item) {
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card">
                                    <img width="100px" height="160px" class="card-img-top" src="uploads/<?= $item->foto ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><?= $item->nama_barang ?></h5>
                                        <p class="card-text">
                                            <h5 class="text-primary">Rp. <?= $item->harga ?> </h5>
                                        </p>
                                        <div class="text-center">
                                            <?php
                                            if ($item->stok_real == 0) {
                                                echo "<a style='text-decoration:none;' href='' class='btn btn-danger'><i class='fas fa-exclamation-circle '></i> OUT OF STOCK</a>";
                                            } else {
                                                echo "<a style='text-decoration:none;color:white;' href='' class='btn btn-warning'><i class='fas fa-shopping-cart '></i> ADD TO CART</a>";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                    } ?>

                    </div>
                </div>
            </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>