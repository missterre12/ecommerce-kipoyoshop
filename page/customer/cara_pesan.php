<?php
include "../../config_terresa.php";

session_start();
if(!isset($_SESSION['username']))
{
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

    <title>Dashboard Customer</title>
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
          <li ><a href="index.php" style="color:#fff;"><span class="glyphicon glyphicon-home"> Home | </span></a></li>
          <li class="a"><a href="keranjang.php" style="color:#fff;"><span class="glyphicon glyphicon-shopping-cart"> Keranjang[<?php
          include "../../conn_terresa.php";
          $qcek=mysqli_query($conn,"SELECT * FROM keranjang where id_pembeli='$_SESSION[id_pembeli]'");
          $cek=mysqli_num_rows($qcek); 
          $q_cekout= mysqli_query($conn,"SELECT * FROM chekout where id_pembeli='$_SESSION[id_pembeli]'");
          $cekout = mysqli_num_rows($q_cekout);
          if($cekout>=1)
          {
          echo "0";
          }
          else{
          echo $cek;
          }  ?>] | </span></a></li>
          <li><a href="" style="color:#fff;" ><span class="glyphicon glyphicon-list"> Kategori | </span></a>
<ul>
<li><?php include("kat.php");?></li>

</ul>
</li>
         <li class="a"><a href="cara_pesan.php" style="color:#fff;"><span class="glyphicon glyphicon-question-sign"> Cara Belanja | </span></a></li>

         <?php
         include "../../conn_terresa.php";
         $q_cek_cekout = mysqli_query($conn,"SELECT * FROM chekout where id_pembeli='$_SESSION[id_pembeli]'");
          $cek_cekout = mysqli_num_rows($q_cek_cekout);
          if($cek_cekout>=1){
          $queri_cek = mysqli_query($conn,"SELECT * FROM chekout where id_pembeli='$_SESSION[id_pembeli]' && status_terima='Sudah diterima'");
          $cek = mysqli_num_rows($queri_cek);
          if($cek>=1)
          {?>
          <li><a href="index.php?pesan=sudah konfirmasi"><span class="glyphicon glyphicon-check" style="color:#fff;"> Konfirmasi | </span></a></li><?php
          }else{
          ?>
          <li><a href="cara_pesan.php?page=konfirmasi"><span class="glyphicon glyphicon-check" style="color:#fff;"> Konfirmasi | </span></a></li>
          <?php }} ?>

         
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
    @$page= $_GET['page'];
    if($page=="pembelian_selesai")
    {
      include("pembelian_selesai.php");
    }
    else if($page=="konfirmasi")
    {
      include("konfirmasi.php");
    }
    else{
    ?>
     <div class="jumbotron">
      <div class="row">
      <div class="col-md-4" style="margin:30px;">
     <img src="../../img/logo.png">   
    </div>
      <div class="col-md-6" style="margin-left:70px; margin-top: 80px;">
        <h2><b>Selamat datang di toko kami.<h1 style="color:#7ED7C1;">Kipoyo<b>Shop</b></h1></h2>
        <p>Di sini Anda bisa membeli dan memesan barang dengan mudah, Anda tinggal klik, maka barang akan dikirim sampai di tempat Anda, tidak perlu lagi jauh-jauh mendatangi ke lokasi toko.</p>
      </div>
    </div>
    </div>
    <div style="margin-top:30px;width:100%; height:50px;text-align:center;background:#1d9090;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
Cara Pesan
</div>
		  <p><h3><b>1. Pembayaran dilakukan dalam jangka waktu 1x24 jam setelah melakukan pemesanan.<br>
          2. Pembayaran dapat dilakukan melalui transfer ke Rekening kami. Melalui Konfirmasi Pembayaran.<br>
          3. Setelah melakukan pembayaran, konfirmasi pembayaran dikirim ke-<br>
          <br>
    <p style="color:#0000ff;">BNI 1232934916 a.n. Terresa Alicia.</p>
    <br>
          4. Selanjutnya buku yang telah dipesan akan dikirimkan dalam waktu maksimal 7 Hari.<br>
          5. Kami mengirimkan barang dengan menggunakan jasa pengiriman barang via POS<br><br></b></p>
    <p style="color:red;">* Harga barang belum termasuk ongkos kirim, dan ongkos kirim akan disesuaikan dengan tujuan pengiriman.</p></h3>

      <hr>
      <?php } ?>

    </div> 
     <!-- Footer Start -->
     <div class="footer" style="width:100%;height:270px;color:#fff;background:#37B5B6;">
      <div class="row" style="background:#005B41;">
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#7ED7C1"><h3><b>Tentang Kipoyo Shop</b></h3></li>
        </ul></center>
          <hr>
        <p style="text-align: center;"><b>Kipoyo Shop</b> adalah sebuah Online Shop yang menyediakan berbagai jenis barang seperti furnitur, kesehatan, aksesoris, dan kebutuhan rumah secara lengkap dan modern.</p>
      </div>
      </div>
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#7ED7C1"><h3><b>Alamat Kami</b></h3></li>
        </ul></center>
          <hr>
          <p style="text-align: center;">Jengkok RT 004 RW 004 Semanding, Kec. Gombong, Kab. Kebumen, Jawa Tengah 54411 Indonesia</p>
      
      </div>
      </div>
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#7ED7C1"><h3><b>Contact Us</b></h3></li>
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

