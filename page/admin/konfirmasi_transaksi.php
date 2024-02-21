<?php
include "../../conn_terresa.php";

$kd=$_GET['id'];
$id = $_GET['id_pembeli'];
$qry = mysqli_query($conn,"SELECT * FROM chekout WHERE id_pembeli='$id' && status_terima='Sudah diterima'");
$a = mysqli_num_rows($qry);
if ($a=="Belum diterima") 
{
echo "<script>alert('Customer belum mengonfirmasi bahwa sudah menerima barang.'); window.location = 'index.php?page=laporan'</script>";
}
else{
mysqli_query($conn,"DELETE FROM chekout WHERE id_chekout='$kd'");
mysqli_query($conn,"DELETE FROM keranjang WHERE id_pembeli='$id'");
header("location:index.php?page=laporan");}
 ?>