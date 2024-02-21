<?php
include "../../conn_terresa.php";

$a = $_GET['id'];
$kat = mysqli_query($conn, "SELECT * FROM kategori WHERE id_ketegori='$a'");
$bo = mysqli_fetch_assoc($kat);
?>
<form action="update_kategori.php" method="post">
	<div class="col-md-8" style="margin-bottom:20px; margin-top: 10px;">
		<b>Nama Kategori</b>
		<input type="hidden" name="id_ketegori" value=" <?php echo $bo['id_ketegori']; ?> ">
		<input type="text" name="kategori" value="<?php echo $bo['kategori']; ?>" style="width:600px;" class="form-control">
	</div>
	<div class="col-md-1" style="margin-top:20px">
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
	</div>
</form>