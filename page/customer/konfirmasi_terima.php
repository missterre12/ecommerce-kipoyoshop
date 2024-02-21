<?php
include "../../conn_terresa.php";
$id = $_GET['id'];
mysqli_query($conn,"UPDATE chekout set status_terima='Sudah diterima' where id_pembeli='$id'");
header("location:index.php?pesan=suwon");
?>