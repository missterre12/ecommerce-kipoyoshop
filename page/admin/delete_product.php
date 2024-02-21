<?php
include "../../conn_terresa.php";

$pk=$_GET['id'];
mysqli_query($conn,"DELETE FROM produk WHERE id_produk='$pk'");
header("location:index.php?page=produk");
 ?>