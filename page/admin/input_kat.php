<form method="post" class="form-group">
	<div class="col-md-8" style="margin-bottom: 20px; margin-top: 10px;">
	<input type="text" name="kategori" placeholder="Kategori baru" style="width:600px;" class="form-control">
	</div>
	<div class="col-md-1">
	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
	</div>
</form>
<?php
include "../../conn_terresa.php";
@$sim = $_POST['simpan'];
if($sim)
{
	$kat = $_POST['kategori'];
	mysqli_query($conn,"INSERT into kategori set kategori='$kat'");
	header("location:index.php?page=kategori");
}
?>