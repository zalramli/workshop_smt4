<?php
$data = $this->session->userdata("nama");
if (!isset($data)) {
    redirect('login');
}
?>
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
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() . 'kasir' ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url() . 'kasir/pemesanan' ?>">Pemesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() . 'kasir/cart' ?>">Cart <i class='fas fa-shopping-cart '></i> <span class="badge badge-danger badge-counter"><?= count($this->cart->contents()); ?></span></a>
                </li>

            </ul>
            <span class="navbar-text">
                NAMA USER
            </span>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <center>
                    <h2>Detail Pesanan</h2>
                </center>
                <?php
                foreach ($pelanggan as $items) {
                    ?>
                    <h5>Nama pemesan : <?= $items->nama_pelanggan ?></h5>
                    <h5>Tanggal pesan :<?= $items->tanggal_pesan ?> - <?= $items->tanggal_pesan ?></h5>
                <?php } ?>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Nama Merk</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($detail as $item) {
                            ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $item->nama_kategori ?></td>
                                <td><?= $item->nama_merk ?></td>
                                <td><?= $item->nama_barang ?></td>
                                <td><?= $item->jumlah ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

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