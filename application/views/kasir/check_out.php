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
                <?php
                foreach ($jumlah as $jumlas)
                    ?>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url() . 'kasir/pemesanan' ?>">Pemesanan <span class="badge badge-danger badge-counter"> <?= $jumlas->counts ?></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() . 'kasir/cart' ?>">Cart <span class="badge badge-danger badge-counter"> <?= count($this->cart->contents()); ?></span></a>
                </li>

            </ul>
            <span class="navbar-text">
                <?php echo $this->session->userdata("nama"); ?>
            </span>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row ">
            <div class="col-4">
                <div class="list-group">
                    <a class="list-group-item list-group-item-dark"><strong>KATEGORI</strong></a>
                    <a style="text-decoration:none;color:black;" href="<?php echo base_url() ?>kasir/" class="list-group-item">Semua</a>
                    <?php
                    foreach ($kategori as $row) {
                        ?>
                        <a style="text-decoration:none;color:black;" href="<?php echo base_url() ?>kasir/index/<?php echo $row['id_kategori']; ?>" class="list-group-item"><?php echo $row['nama_kategori']; ?></a>
                    <?php
                }
                ?>
                </div><br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="list-group">
                            <a style="text-decoration:none;" href="<?php echo base_url() ?>kasir/cart" class="list-group-item list-group-item-dark"><strong><i class="fas fa-shopping-cart"></i> KERANJANG BELANJA</strong></a>
                            <?php

                            $cart = $this->cart->contents();

                            // If cart is empty, this will show below message.
                            if (empty($cart)) {
                                ?>
                                <a class="list-group-item">Keranjang Belanja Kosong</a>
                            <?php
                        } else {
                            echo "<table width='100%' class='table'>";

                            $grand_total = 0;
                            foreach ($cart as $item) {
                                $grand_total += $item['subtotal'];
                                ?>

                                    <tr>
                                        <td width="55%"><?php echo $item['name']; ?></td>
                                        <td width="10%"><?php echo $item['qty']; ?></td>
                                        <td width="35%" align="right"><?php echo number_format($item['subtotal'], 0, ",", "."); ?></td>
                                    </tr>
                                <?php
                            }
                            ?>

                            <?php
                        }
                        ?>
                            <tr>
                                <td>
                                    <?php
                                    $grand_total = 0;
                                    $cart = $this->cart->contents();
                                    foreach ($cart as $item) {
                                        $grand_total += $item['subtotal'];
                                    };
                                    if ($grand_total == 0) {
                                        echo "";
                                    } else {
                                        $totals = number_format($grand_total, 0, ",", ".");
                                        echo "<td colspan='4' align='right'>" . "Rp " . $totals . "</td>";
                                    }
                                    ?>
                                </td>
                            </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7 offset-1">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        $grand_total = 0;
                        if ($cart = $this->cart->contents()) {
                            foreach ($cart as $item) {
                                $grand_total = $grand_total + $item['subtotal'];
                            }
                            echo "<h4>Total Belanja: Rp." . number_format($grand_total, 0, ",", ".") . "</h4>";
                            ?>
                            <center>
                                <h2>Konfirmasi Checkout</h2>
                            </center>
                            <form class="form-horizontal" action="<?php echo base_url() ?>kasir/proses_transaksi" method="post" name="frmCO" id="frmCO">
                                <input type="hidden" class="form-control" name="id_pelanggan" id="email" placeholder="Email" value="<?= $pelanggan ?>">
                                <input type="hidden" class="form-control" name="id_transaksi" id="email" placeholder="Email" value="<?= $transaksi ?>">
                                <div class="form-group  has-success has-feedback">
                                    <label class="control-label col-xs-3" for="inputEmail">Email:</label>
                                    <div class="col-xs-9">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group  has-success has-feedback">
                                    <label class="control-label col-xs-3" for="firstName">Nama :</label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="form-group  has-success has-feedback">
                                    <label class="control-label col-xs-3" for="lastName">Alamat:</label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                                    </div>
                                </div>
                                <div class="form-group  has-success has-feedback">
                                    <label class="control-label col-xs-3" for="phoneNumber">Telp:</label>
                                    <div class="col-xs-9">
                                        <input type="tel" class="form-control" name="telp" id="telp" placeholder="No Telp">
                                    </div>
                                </div>

                                <div class="form-group  has-success has-feedback">
                                    <div class="col-xs-offset-3 col-xs-9">
                                        <button type="submit" class="btn btn-primary">Proses Order</button>
                                    </div>
                                </div>
                            </form>
                        <?php
                    } else {
                        echo "<h5>Shopping Cart masih kosong</h5>";
                    }
                    ?>
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