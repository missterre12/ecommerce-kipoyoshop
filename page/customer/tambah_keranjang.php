<?php
include "../../conn_terresa.php";
session_start();
$id_pembeli = $_SESSION['id_pembeli'];
$q_aman = mysqli_query($conn,"SELECT * FROM chekout where id_pembeli='$id_pembeli'");
$aman = mysqli_num_rows($q_aman);
if($aman==0)

{
$id_produk = $_POST['id_produk'];
$qty = $_POST['qty'];
$harga = $_POST['harga'];
$total_harga = $qty*$harga;
$qryproduk = mysqli_query($conn,"SELECT * FROM keranjang where id_produk='$id_produk'");
$q_stok = mysqli_query($conn,"SELECT * FROM produk where id_produk='$id_produk'");
$d_stok = mysqli_fetch_assoc($q_stok);
$stok = $d_stok['stok'];
$siso_stok = $stok-$qty;
mysqli_query($conn,"UPDATE produk set stok='$siso_stok' where id_produk='$id_produk'");
$data = mysqli_fetch_assoc($qryproduk);
$idproduk = $data['id_produk'];
if($id_produk==$idproduk)
{
	$q_qty = mysqli_query($conn,"SELECT * FROM keranjang where id_produk='$id_produk'");
	$data_qty = mysqli_fetch_assoc($q_qty);
	$qty1 = $data_qty['qty'];
	$qty2 = $qty1 + $qty;
	$tot = $harga * $qty2;
mysqli_query($conn,"UPDATE keranjang set id_pembeli='$id_pembeli',id_produk='$id_produk',qty='$qty2',harga='$harga',total_harga='$tot' where id_produk='$id_produk'");
header("location:detail.php?page=keranjang");
}

else{
mysqli_query($conn,"INSERT into keranjang set id_pembeli='$id_pembeli',id_produk='$id_produk',qty='$qty',harga='$harga',total_harga='$total_harga'");
header("location:detail.php?page=keranjang");
}
}
else if($aman>=1)
{
	header("location:index.php?pesan=blok");
}
?>