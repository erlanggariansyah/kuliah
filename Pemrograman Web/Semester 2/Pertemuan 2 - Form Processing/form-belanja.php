<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Belanja</title>
    <style>
        h4 {
            padding-bottom: 26px;
        }
    </style>
  </head>
  <body class="row">
      <div class="col-md-8">
        <h1>Belanja Online</h1>
        <hr>
        <form action="form-belanja.php" method="POST">
        <div class="row container">
            <div class="col-md-4">
                <h4>Customer</h4>
                <h4>Pilih Produk</h4>
                <h4>Jumlah</h4>
                <button type="submit" class="btn btn-md btn-success" name="proses">Kirim</button>
            </div>
            <div class="col-md-4">
                <input type="text" name="customer" style="margin-bottom: 38px;">
                <div style="margin-bottom: 38px;">
                    <label for="TV">TV</label>
                    <input id="TV" type="radio" name="produk" value="TV">
                    <label for="KULKAS">KULKAS</label>
                    <input id="KULKAS" type="radio" name="produk" value="KULKAS">
                    <label for="MESIN CUCI">MESIN CUCI</label>
                    <input id="MESIN CUCI" type="radio" name="produk" value="MESIN CUCI">
                </div>
                <input type="number" name="jumlah">
            </div>
        </div>
        </form>
        <hr>
      </div>
      <div class="col-md-4">
          <div class="bg-primary">
          <h1 style="color: white">Daftar Harga</h1>
          <hr>
          </div>
          <h1>TV    :   4.200.000</h1>
          <hr>
          <h1>KULKAS:   3.100.000</h1>
          <hr>
          <h1>MESIN CUCI:   3.800.000</h1>
          <div class="bg-primary">
          <h1 style="color: white">Harga dapat berubah setiap waktu</h1>
          <hr>
          </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<?php
if (isset($_POST['customer'])) {
    echo "Nama Customer :   ".$_POST['customer'];
    echo "<br/>Produk    :   ".$_POST['produk'];
    echo "<br/>Jumlah Beli   :   ".$_POST['jumlah'];
    $total = 0;
    if ($_POST['produk'] == "TV")
    {
        $total = 4200000 * $_POST['jumlah'];
    } else if ($_POST['produk'] == "KULKAS")
    {
        $total = 3100000 * $_POST['jumlah'];
    } else if ($_POST['produk'] == "MESIN CUCI")
    {
        $total = 3800000 * $_POST['jumlah'];
    }
    echo "<br/>Total Belanja :   ".$total;
}
?>