<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<div class="container py-4">
    <div class="row">
        <div class="col-8">
            <h1>Belanja Online</h1>
            <form method="POST">
            <div class="form-group row">
                <label for="costumer" class="col-4 col-form-label">Costumer</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="costumer" name="nama" placeholder="Nama Costumer" type="text" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Produk</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_0" type="radio" required="required" class="custom-control-input" value="tv" aria-describedby="produkHelpBlock"> 
                    <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" required="required" class="custom-control-input" value="kulkas" aria-describedby="produkHelpBlock"> 
                    <label for="produk_1" class="custom-control-label">Kulkas</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_2" type="radio" required="required" class="custom-control-input" value="mesin cuci" aria-describedby="produkHelpBlock"> 
                    <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                </div> 
                <span id="produkHelpBlock" class="form-text text-muted">Silahkan pilih produk</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                <input id="jumlah" name="jumlah" placeholder="Masukkan Jumlah Barang" type="text" class="form-control" required="required">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
        </div>

        <div class="col-4">
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <td>DAFTAR HARGA</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TV : Rp.4.200.000</td>
                    </tr>
                    <tr>
                        <td>Kulkas : Rp.3.100.000</td>
                    </tr>
                    <tr>
                        <td>Mesin Cuci : Rp.3.800.000</td>
                    </tr>
                </tbody>
                <tbody class="table-primary">
                    <tr>
                        <td>HARGA DAPAT BERUBAH SETIAP SAAT</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container">
    <table class="table">
        <thead>
            <h1>Hasil Belanja</h1>
            <tr>
                <td>Nama</td>
                <td>Produk</td>
                <td>Jumlah</td>
                <td>Total Harga</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_POST['submit'])){
                $nama = $_POST['nama'];
                $produk = $_POST['produk'];
                $jumlah = $_POST['jumlah'];
                if ($produk == 'TV'){
                    $harga = 4200000;
                }
                else if ($produk == 'kulkas'){
                    $harga = 3100000;
                }
                else if ($produk == 'mesin cuci'){
                    $harga = 3800000;
                }
                else {
                    $harga = 0;
                }
                $total_harga = $harga * $jumlah 
                ?>
            <tr>
                <td><?= $nama ?></td>
                <td><?= $produk ?></td>
                <td><?= $jumlah ?></td>
                <td><?= number_format($total_harga, 1); ?></td>
            </tr>
        <?php
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>