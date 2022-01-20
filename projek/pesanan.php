<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="pesanan.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pesanan</title>
</head>
<body>
    <!-- Navbar -->
    <nav>
      <div class="logo">
        <p>MIXMAX COFFEE</p>
      </div>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="Menu.php">Menu</a></li>
        <li><a href="pesanan.php">Pesanan</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="container-fluid jumbotron">
        <h1>MIXMAX COFFEE</h1><hr>
        <p>Silahkan Pesan Menu Yang Anda Inginkan <br>
        Enjoy Your Meal</p>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Pesanan -->
    <div class="container">
      <h2>Pesanan</h2>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Id</th>
            <th scope="col">Nama Menu</th>
            <th scope="col">Jenis Menu</th>
            <th scope="col">Harga</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row">1</td>
            <td>12</td>
            <td>Espresso</td>
            <td>Minuman</td>
            <td>Rp. 25.000</td>
            <td>Belum Terbayar</td>
            <td><button type="button" class="btn btn-success">Bayar</button>
            <button type="button" class="btn btn-danger">Hapus</button></td> 
          </tr>

          <tr>
            <td scope="row">2</td>
            <td>16</td>
            <td>Cappucino</td>
            <td>Minuman</td>
            <td>Rp. 25.000</td>
            <td>Belum Terbayar</td>
            <td><button type="button" class="btn btn-success">Bayar</button>
            <button type="button" class="btn btn-danger">Hapus</button></td>
          </tr>

          <tr>
            <td scope="row">3</td>
            <td>20</td>
            <td>Americano</td>
            <td>Minuman</td>
            <td>Rp. 25.000</td>
            <td>Belum Terbayar</td>
            <td><button type="button" class="btn btn-success">Bayar</button>
            <button type="button" class="btn btn-danger">Hapus</button></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Akhir Pesanan -->
    <!-- footer -->
    <footer>
        <div class="footer-content">
          <h3>MIXMAX COFFEE</h3>
          <P>Terima Kasih Telah Mengunjungi Toko Kami</P>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy; 2022 MIXMAXX .Design by <span>Trian Yuka Sulistya Jati</span></p>
        </div>
    </footer>
    <!-- Akhir footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>