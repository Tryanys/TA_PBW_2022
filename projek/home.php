<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="home.css">
    <title>Home</title>
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
        <h1>Selamat Datang di MIXMAX COFFEE</h1><hr>
        <p>Silahkan Pesan Menu Yang Anda Inginkan <br>
        Enjoy Your Meal</p>
    </div>

    <!-- Slide -->
    <div class="container">
      <input type="radio" name = "radio" id="wallpaper1" checked>
      <input type="radio" name = "radio" id="wallpaper2">
      <input type="radio" name = "radio" id="wallpaper3">
      <input type="radio" name = "radio" id="wallpaper4">
      <input type="radio" name = "radio" id="wallpaper5">
      <div class="slides">
        <div class="slide">
          <img src="assets/images/wallpaper1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="assets/images/wallpaper2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="assets/images/wallpaper3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="assets/images/wallpaper4.jpg" alt="">
        </div>
        <div class="slide">
          <img src="assets/images/wallpaper5.jpg" alt="">
        </div>
        <div class="navigation">
          <label for="wallpaper1" id = "bar-1" class = "bar"></label>
          <label for="wallpaper2" id = "bar-2" class = "bar"></label>
          <label for="wallpaper3" id = "bar-3" class = "bar"></label>
          <label for="wallpaper4" id = "bar-4" class = "bar"></label>
          <label for="wallpaper5" id = "bar-5" class = "bar"></label>
        </div>
      </div>
    </div>
    <!-- Akhir slide -->

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
</body>
</html>
