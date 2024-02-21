<div style="margin-top: 30px; width:100%; height:50px;text-align:center;background:#1d9090;color:#fff;line-height:60px;font-size:20px;">
	<b>Pembelian Selesai</b>
</div>
<?php
include "../../conn_terresa.php";
$id_pembeli = $_SESSION['id_pembeli'];
$query_checkout = mysqli_query($conn, "SELECT * FROM  chekout where id_pembeli='$id_pembeli'");
$data_chekout = mysqli_fetch_assoc($query_checkout);
?>
<h3><b>Data Penerima:</b></h3>
<table>
	<tr>
		<td>
			<p><b>Nama</b></p>
		</td>
		<td>: <?php echo $data_chekout['nama']; ?></td>
	</tr>

	<tr>
		<td>
			<p><b>Alamat</b></p>
		</td>
		<td>: <?php echo $data_chekout['alamat']; ?></td>
	</tr>

	<tr>
		<td>
			<p><b>Nomor Telepon</b></p>
		</td>
		<td>: <?php echo $data_chekout['nomor_tlp']; ?></td>
	</tr>
</table>
<h3><b>Data Order</b></h3>
<?php
$qry = mysqli_query($conn, "SELECT * FROM keranjang where id_pembeli='$id_pembeli'");
?>
<div class="jumbotron">
	<table class="table table-bordered">
		<th>Nama Barang</th>
		<th>Harga</th>
		<th>Qty</th>
		<th>Total harga</th>
		<?php while ($keranjang = mysqli_fetch_assoc($qry)) { ?>
			<tr>
				<td><?php
					$q = mysqli_query($conn, "SELECT * FROM produk where id_produk='$keranjang[id_produk]'");
					$d = mysqli_fetch_assoc($q);
					$nama_barang = $d['nama_barang'];
					echo $nama_barang;
					$qbyar = mysqli_fetch_assoc(mysqli_query($conn, "SELECT SUM(total_harga) as total_bayar FROM keranjang where id_pembeli='$id_pembeli'"));
					$bayar = $qbyar['total_bayar'];
					?>

				</td>
				<td><?php echo $keranjang['harga'] ?></td>
				<td><?php echo $keranjang['qty'] ?></td>
				<td><?php echo $keranjang['total_harga'] ?></td>
			</tr>
		<?php } ?>
		<tr>
			<td colspan="3">Total harga keseluruhan</td>
			<td><?php echo $bayar;  ?></td>
		</tr>
		<tr>
			<td colspan="3">Ongkos Kirim (Minimal)</td>
			<td>Rp 20.000,-</td>
		</tr>
		<tr>
			<td colspan="3">Total Bayar</td>
			<td>Rp <?php $t_bayar = $bayar + 20000;
					echo number_format($t_bayar); ?>,-</td>
		</tr>
	</table>
	<p>Selanjutnya Anda harus megirimkan uang yang tertera pada total bayar ke <b>No. Rek. BNI 1232934916</b> a.n. <b>Terresa Alicia</b>. Setelah melakukan pembayaran Anda bisa mengonfirmasi melalui <b><a href="http:wa.me/6283108975033"> No.WA:(+62) 831 0897 5033</a></b>. <a href="index.php" class="btn btn-danger"> Selesai</a> </p>
</div>