<?php
include "config_terresa.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Kipoyo Shop</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-default navbar-fixed-top" style="background:#37B5B6;">
    <div class="container-fluid">
      <div class="navbar-header">

        <a class="navbar-brand" href="#"><img src="images/logo-header.png" style="width:150px; margin-top: -7px;"></a>
      </div>
      <div class="collapse navbar-collapse">
        <div class="nav navbar-nav navbar-right">
          <ul id="nav">
            <li><a href="index.php" style="color:#fff;"><span class="glyphicon glyphicon-home"> Home | </span></a></li>
            <li><a href="" style="color:#fff;"><span class="glyphicon glyphicon-list"> Kategori | </span></a>
              <ul>
                <li><?php include("kategori_terresa.php"); ?></li>
              </ul>
            </li>
            <li class="a"><a href="carapesan_terresa.php" style="color:#fff;"><span class="glyphicon glyphicon-question-sign"> Cara Belanja | </span></a></li>
            <li class="a"><a href="login_terresa.php" style="color:#fff;"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>
          </ul>
          <div class="clear"></div>

        </div>
      </div>
  </nav>
  <div class="jumbotron">
    <div class="row">
      <div class="col-md-4" style="margin:30px;">
        <img src="img/logo.png" width="400">
      </div>
      <div class="col-md-6" style="margin-left:70px; margin-top: 80px;">
        <h2><b>Selamat datang di Kipoyo Shop!<h1 style="color:#7ED7C1;">Kipoyo<b>Shop</b></h1>
        </h2>
        <p>di sini Anda bisa membeli dan memesan barang-barang dengan mudah, Anda tinggal klik, maka barang yang Anda beli sampai di tempat rumah Anda, tidak perlu lagi jauh-jauh ke toko kami.</p>
      </div>
    </div>
  </div>

  <!-- Produk Start -->
  <div style="margin-top: -30px; width:100%; height:50px;text-align:center;background:#37B5B6;color:#fff;line-height:60px;font-size:20px;">
    <b>Etalase Produk:</b>
  </div>
  <div class="container">
    <div class="row">
      <?php
      include "conn_terresa.php";
      @$idkat = $_GET['id'];
      $qryprodukkat = mysqli_query($conn, "SELECT * from produk where id_ketegori='$idkat'");
      $qryproduk = mysqli_query($conn, "SELECT * from produk");
      if ($idkat == 0) {
        while ($produk = mysqli_fetch_assoc($qryproduk)) {
      ?>

          <div class="col-md-3" style="margin-top:20px;">
            <div class="produk">
              <center><img src="gambar/<?php echo $produk['gambar'] ?>" style="margin-top:20px; width:210px;height:190px;"></center>
              <h3 style="text-align:center; color:#7ED7C1;"><?php echo $produk['nama_barang'] ?></h3>
              <center><b>Harga</b> Rp <?php echo number_format($produk['harga']); ?>,-</center>
              <center><b>Stok</b> (<?php echo $produk['stok']; ?>)</center>
              <center><a class="btn btn-danger" href="detail_terresa.php?id=<?php echo $produk['id_produk'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
            </div>
          </div>
        <?php }
      } else {
        while ($produk1 = mysqli_fetch_assoc($qryprodukkat)) { ?>
          <div class="col-md-3" style="margin-top:20px;">
            <div class="produk">
              <center><img src="gambar/<?php echo $produk1['gambar'] ?>" style="margin-top:20px;width:210px;height:190px;"></center>
              <h3 style="text-align:center; color:#7ED7C1; "><?php echo $produk1['nama_barang'] ?></h3>
              <center><b>Harga</b> Rp <?php echo number_format($produk1['harga']); ?>,-</center>
              <center><b>Stok</b> (<?php echo $produk1['stok']; ?>)</center>
              <center><a class="btn btn-danger" href="detail_terresa.php?id=<?php echo $produk1['id_produk'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
            </div>
          </div>
      <?php }
      } ?>
    </div>

    <hr>
  </div>
  <!-- Produk End -->
  <!-- Footer Start -->
  <div class="footer" style="width:100%;height:270px;color:#fff;background:#37B5B6;">
    <div class="row" style="background:#005B41;">
      <div class="col-md-4">
        <div style="margin:50px;height:120px;">
          <center>
            <ul>
              <li style="color:#7ED7C1">
                <h3><b>Tentang Kipoyo Shop</b></h3>
              </li>
            </ul>
          </center>
          <hr>
          <p style="text-align: center;"><b>Kipoyo Shop</b> adalah sebuah Online Shop yang menyediakan berbagai jenis barang seperti furnitur, kesehatan, aksesoris, dan kebutuhan rumah secara lengkap dan modern.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div style="margin:50px;height:120px;">
          <center>
            <ul>
              <li style="color:#7ED7C1">
                <h3><b>Alamat Kami</b></h3>
              </li>
            </ul>
          </center>
          <hr>
          <p style="text-align: center;">Jengkok RT 004 RW 004 Semanding, Kec. Gombong, Kab. Kebumen, Jawa Tengah 54411 Indonesia</p>

        </div>
      </div>
      <div class="col-md-4">
        <div style="margin:50px;height:120px;">
          <center>
            <ul>
              <li style="color:#7ED7C1">
                <h3><b>Contact Us</b></h3>
              </li>
              <hr>
              <div class="row">
                <div class="col-md-4">
                  <a href="https://www.facebook.com/@kipoyoshop"><img src="images/fb.png" style="width:70px;height:75px;  "></a>
                </div>
                <div class="col-md-4">
                  <a href="https://tiktok.com/@kipoyoshop"><img src="images/tiktok.webp" style="width:70px;height:75px;"></a>
                </div>
                <div class="col-md-4">
                  <a href="https://wa.me/6283108975033/"><img src="images/wa.webp" style="width:70px;height:75px;"></a>
                </div>
              </div>
            </ul>
          </center>
        </div>
      </div>
    </div>
    <div class="copyright" style="line-height:50px;">
      <center>Copyrights &copy; 2024 | Kipoyo Shop</center>
    </div>
  </div>
  <!-- Footer End -->

  </div>
</body>

</html>