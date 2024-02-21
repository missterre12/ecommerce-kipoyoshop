<?php
include "../../conn_terresa.php";

$no = 1;
$query_produk = mysqli_query($conn, "SELECT * FROM produk");
?>

<div class="container mt-5">
	<h2>Produk/Barang</h2>
	<a href="index.php?page=input_product" class="btn btn-primary"><i class="bi bi-plus"></i> Tambah Produk/Barang</a>

	<?php
	@$aksi = $_GET['aksi'];
	if ($aksi == "input") {
		include("input_product.php");
	}
	?>
</div>

<div class="th">
	<table class="table table-bordered" style="margin-top:20px;">

		<th style=" background: #E6E6FA;">
			<center>No</center>
		</th>
		<th style=" background: #E6E6FA;">
			<center>Kode Barang</center>
		</th>
		<th style=" background: #E6E6FA;">
			<center>Nama Barang</center>
		</th>
		<th style=" background: #E6E6FA;">
			<center>Harga Beli</center>
		</th>
		<th style=" background: #E6E6FA;">
			<center>Harga Jual</center>
		</th>
		<th style=" background: #E6E6FA;">
			<center>Berat</center>
		</th>
		<th style=" background: #E6E6FA;">
			<center>Stok</center>
		</th>
		<th style=" background: #E6E6FA;">
			<center>Gambar</center>
		</th>
		<th style=" background: #E6E6FA;">
			<center>Aksi</center>
		</th>
		<?php while ($data = mysqli_fetch_assoc($query_produk)) { ?>
			<tr>
				<td>
					<center><?php echo $no++ ?></center>
				</td>
				<td><?php echo $data['kode_barang'] ?></td>
				<td><?php echo $data['nama_barang'] ?></td>
				<td>Rp <?php echo number_format($data['harga_beli']); ?>,-</td>
				<td>Rp <?php echo number_format($data['harga']); ?>,-</td>
				<td>
					<center><?php echo $data['berat'] ?></center>
				</td>
				<td>
					<center><?php echo $data['stok'] ?></center>
				</td>
				<td>
					<center><img src="../../gambar/<?php echo $data['gambar'] ?>" style="width:100px;"></center>
				</td>
				<td>
					<center>
						<a href="index.php?page=editproduct&id=<?php echo $data['id_produk']; ?>"><i class="fas fa-edit"></i></a> |
						<a href="delete_product.php?id=<?php echo $data['id_produk']; ?>"><i class="fas fa-trash-alt"></i></a>
					</center>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>