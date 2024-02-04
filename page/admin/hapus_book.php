<?php
include"../../conn_terresa.php";
$bk=$_GET['id'];
mysqli_query($conn,"DELETE FROM buku WHERE id_buku='$bk'");
header("location:index_terresa.php?page=buku");
 ?>