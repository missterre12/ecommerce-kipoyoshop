<?php
include"../../conn_terresa.php";
$bk=$_GET['id'];
mysqli_query($conn,"DELETE FROM kategori WHERE id_ketegori='$bk'");
header("location:index_terresa.php?page=kategori");
 ?>