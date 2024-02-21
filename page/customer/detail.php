<?php
include "../../conn_terresa.php";
@$kd = $_GET['id'];
$qry = mysqli_query($conn, "SELECT * FROM produk where id_produk='$kd'");
$data = mysqli_fetch_assoc($qry);
session_start();
if (!isset($_SESSION['username'])) {
  header("location:../../login_terresa.php");
}
$nama = $_SESSION['nama'];
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
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link href="../../css/style.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-default navbar-fixed-top" style="background:#1d9090;">
    <div class="container-fluid">
      <div class="navbar-header">

        <a class="navbar-brand" href="#"><img src="../../images/logo-header.png" style="width:150px; margin-top: -7px;"></a>
      </div>
      <div class="collapse navbar-collapse">


        <div class="nav navbar-nav navbar-right">
          <ul id="nav">
            <li><a href="index.php" style="color:#fff;"><span class="glyphicon glyphicon-home"> Home | </span></a></li>
            <li class="a"><a href="detail.php?page=keranjang" style="color:#fff;"><span class="glyphicon glyphicon-shopping-cart"> Keranjang[<?php
                                                                                                                                              include "../../conn_terresa.php";
                                                                                                                                              $qcek = mysqli_query($conn, "SELECT * FROM keranjang where id_pembeli='$_SESSION[id_pembeli]'");
                                                                                                                                              $cek = mysqli_num_rows($qcek);
                                                                                                                                              $q_cekout = mysqli_query($conn, "SELECT * FROM chekout where id_pembeli='$_SESSION[id_pembeli]'");
                                                                                                                                              $cekout = mysqli_num_rows($q_cekout);
                                                                                                                                              if ($cekout >= 1) {
                                                                                                                                                echo "0";
                                                                                                                                              } else {
                                                                                                                                                echo $cek;
                                                                                                                                              }  ?>] | </span></a></li>
            <li><a href="" style="color:#fff;"><span class="glyphicon glyphicon-list"> Kategori | </span></a>
              <ul>
                <li><?php include("kat.php"); ?></li>

              </ul>
            </li>
            <li class="a"><a href="cara_pesan.php" style="color:#fff;"><span class="glyphicon glyphicon-question-sign"> Cara Belanja | </span></a></li>

            <?php
            include "../../conn_terresa.php";
            $q_cek_cekout = mysqli_query($conn, "SELECT * FROM chekout where id_pembeli='$_SESSION[id_pembeli]'");
            $cek_cekout = mysqli_num_rows($q_cek_cekout);
            if ($cek_cekout >= 1) {
              $queri_cek = mysqli_query($conn, "SELECT * FROM chekout where id_pembeli='$_SESSION[id_pembeli]' && status_terima='Sudah diterima'");
              $cek = mysqli_num_rows($queri_cek);
              if ($cek >= 1) { ?>
                <li><a href="index.php?pesan=sudah konfirmasi"><span class="glyphicon glyphicon-check" style="color:#fff;"> Konfirmasi | </span></a></li><?php
                                                                                                                                                        } else {
                                                                                                                                                          ?>
                <li><a href="cara_pesan.php?page=konfirmasi"><span class="glyphicon glyphicon-check" style="color:#fff;"> Konfirmasi | </span></a></li>
            <?php }
                                                                                                                                                      } ?>

            <li><a href="#"><span class="glyphicon glyphicon-user" style="color:#fff;"> <?php echo $nama; ?></span></a>
              <ul>
                <li><a href="../admin/outpage.php"><span class="glyphicon glyphicon-log-out">Keluar</span></a></li>
              </ul>
            </li>
          </ul>
          <div class="clear"></div>

        </div>
      </div>
  </nav>
  <?php
  @$aksi = $_GET['aksi'];
  $tanggal = date("d-m-Y");
  if ($aksi == "checkout") { ?>
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-4" style="margin:30px;">
          <img src="../../img/logo.png" width="400">
        </div>
        <div class="col-md-6" style="margin-left:70px; margin-top: 80px;">
          <h2><b>Selamat datang di toko murah kami.<h1 style="color:#7ED7C1;">Toko<b>Kipoyo Shop</b></h1>
          </h2>
          <p>Di sini Anda bisa membeli dan memesan barang dengan mudah, Anda tinggal klik, maka barang akan dikirim sampai di tempat Anda, tidak perlu lagi jauh-jauh mendatangi ke lokasi toko.</p>
        </div>
      </div>
    </div>
    <div style="margin-top: 30px; width:100%; height:50px;text-align:center;background:#1d9090;color:#fff;line-height:60px;font-size:20px;">
      <b>Checkout</b>
    </div><br>
    <form action="proses_chekout.php" method="post">
      <label>Nama Penerima</label>
      <input type="text" name="nama" placeholder="Nama Anda" class="form-control">
      <label>Alamat Lengkap</label>
      <input type="text" name="alamat" placeholder="Jalan/Dusun/Desa/Kecamatan/Kabupaten/Provinsi/kode pos" class="form-control"><br>
      <label>Nomor Telepon</label>
      <input type="text" name="nomor_tlp" placeholder="Nomor Telepon Anda" class="form-control"><br>
      <label>Tanggal</label>
      <input type="text" name="tanggal" class="form-control" value="<?php echo $tanggal; ?>" readonly>
      <input type="submit" class="btn btn-info" value="selesai">
    </form>
    <?php } else {
    @$page = $_GET['page'];
    if ($page == "keranjang") {
      include("keranjang.php");
    } else if ($page == "") {
    ?>
      <div class="jumbotron">
        <div class="row">
          <div class="col-md-3" style="margin:30px;">
            <img src="../../gambar/<?php echo $data['gambar']; ?>" style="width:250px; height:250px;">
          </div>
          <div class="col-md-6" style="margin-left:10px ; margin-top:10px;">
            <table>
              <tr>
                <h3>
                  <td><b>Nama Barang</b></td>
                  <td>: <?php echo $data['nama_barang']; ?></td>
                </h3>
              </tr>

              <tr>
                <h3>
                  <td><b>Harga</b></td>
                  <td>: <?php echo $data['harga']; ?></td>
                </h3>
              </tr>

              <tr>
                <h3>
                  <td><b>Berat</b></td>
                  <td>: <?php echo $data['berat']; ?></td>
                </h3>
              </tr>

              <tr>
                <h3>
                  <td><b>Stok</b></td>
                  <td>: <?php echo $data['stok']; ?></td>
                </h3>
              </tr>
            </table><br><br>

            <form action="tambah_keranjang.php" method="post">
              <input type="number" name='qty' value="0" min="0" max="<?php echo $data['stok']; ?>">
              <input type="hidden" name='harga' value="<?php echo $data['harga']; ?>">
              <input type="hidden" name='id_produk' value="<?php echo $data['id_produk']; ?>">
              <?php if ($data['stok'] == 0) { ?>
                <a href="#" class="btn btn-danger">Tidak dapat membeli</a>
              <?php } else { ?>
                <button type="submit" class="btn btn-success">Beli</button>
              <?php } ?>
            </form>

          </div>
        </div>
      </div>
    <?php } ?>
    <div style="margin-top: -30px; width:100%; height:50px;text-align:center;background:#1d9090;color:#fff;line-height:60px;font-size:20px;">
      <b>Etalase Produk:</b>
    </div>
    <div class="container">
      <div class="row">
        <?php
        $qryproduk = mysqli_query($conn, "SELECT * FROM produk");
        while ($produk = mysqli_fetch_assoc($qryproduk)) {
        ?>

          <div class="col-md-3" style="margin-top:20px;">
            <div class="produk">
              <center><img src="../../gambar/<?php echo $produk['gambar'] ?>" style="margin-top:20px; width:200px;height:190px;"></center>
              <h3 style="text-align:center; color:#7ED7C1;"><?php echo $produk['nama_barang'] ?></h3>
              <center><b>Harga</b> Rp <?php echo number_format($produk['harga']); ?>,-</center>
              <center><b>Stok</b> (<?php echo $produk['stok']; ?>)</center>
              <center><a class="btn btn-danger" href="detail.php?id=<?php echo $produk['id_produk'] ?>" role="button" style="margin-top:10px;">View details &raquo;</a></center>
            </div>
          </div>

      <?php }
      } ?>
      </div>

      <hr>
    </div>

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
                    <a href="https://www.facebook.com/@kipoyoshop"><img src="../../images/fb.png" style="width:70px;height:75px;  "></a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://tiktok.com/@kipoyoshop"><img src="../../images/tiktok.webp" style="width:70px;height:75px;"></a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://wa.me/6283108975033/"><img src="../../images/wa.webp" style="width:70px;height:75px;"></a>
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