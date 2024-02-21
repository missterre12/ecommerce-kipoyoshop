<?php
include "../../conn_terresa.php";

$pk=$_GET['id'];
mysqli_query($conn,"DELETE FROM kategori WHERE id_ketegori='$pk'");
header("location:index.php?page=kategori");
 ?>