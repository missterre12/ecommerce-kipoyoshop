<?php
include "../../conn_terresa.php";
$kat = mysqli_query($conn,"SELECT * FROM kategori");
while($get_data=mysqli_fetch_assoc($kat)){

	?><li style=""><a href="index.php?page=detail&id=<?=$get_data['id_ketegori']?>">
		<?php echo $get_data['kategori']?>
	</a></li>
	<?php
	}
?>
