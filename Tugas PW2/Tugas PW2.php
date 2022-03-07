<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="https://img.icons8.com/external-flatart-icons-outline-flatarticons/50/000000/external-cart-black-friday-flatart-icons-outline-flatarticons.png">
</head>
<body class="bg-info">
<div class="row" style="padding: 15px;">
  <div class="col-8">
      <h1>Belanja Online</h1>
      <hr>
    <form method="POST" action="form_belanja.php" >
        <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
            <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                <label for="produk_0" class="custom-control-label">AIR CONDITIONER</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
                <label for="produk_1" class="custom-control-label">TELEVISI</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                <label for="produk_2" class="custom-control-label">KIPAS ANGIN</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                <label for="produk_2" class="custom-control-label">DISPENSER</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-8">
            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <input type="submit" name="proses" class="btn btn-success">
            </div>
        </div>
    </form>
  </div>
  <div class="col-4">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Daftar Harga</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">AIR CONDITIONER : RP. 4.000.000</th>

    </tr>
    <tr>
      <th scope="row">TELEVISI : RP. 3.000.000</th>
    </tr>
    <tr>
      <th scope="row">KIPAS ANGIN : RP. 2.500.000</th>
    </tr>
    <tr>
      <th scope="row">DISPENSER : RP. 3.500.000</th>
    </tr>
  </tbody>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Harga Tersebut Dapat Berubah Setiap Saat</th>

    </tr>
  </thead>
</table>

  </div>
</div>
<hr>
<div style="padding:15px;">
  </div>


    
</body>
</html>