<?php
include"../../conn_terresa.php";
$cus=$_GET['id'];
mysqli_query($conn,"DELETE FROM customer WHERE id_pembeli='$cus'");
header("location:index_terresa.php?page=customer");
?>