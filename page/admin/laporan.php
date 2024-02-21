<?php
include "../../conn_terresa.php";

$q = mysqli_query($conn,"SELECT * FROM chekout");
@$act = $_GET['act'];
if($act=="detail") {
	include("detail_pembelian.php");
} else {
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="text-center bg-primary text-white py-3">
                <h2>Laporan Transaksi</h2>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <table class="table table-bordered">
                <thead class="bg-light">
                    <tr>
                        <th class="text-center">Nama Customer</th>
                        <th class="text-center">Tanggal Order</th>
                        <th class="text-center">Status Terima</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($c = mysqli_fetch_assoc($q)){ ?>
                        <tr>
                            <td class="text-center"><?php $data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customer WHERE id_pembeli='$c[id_pembeli]'")); $nama = $data['nama']; echo $nama; ?></td>
                            <td class="text-center"><?php echo $c['tanggal']; ?></td>
                            <td class="text-center"><?php echo $c['status_terima']; ?></td>
                            <td class="text-center">
							<a href="index.php?page=laporan&act=detail&id=<?php echo $c['id_pembeli']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="konfirmasi_transaksi.php?id=<?php echo $c['id_chekout']; ?>&id_pembeli=<?php echo $c['id_pembeli']; ?>" class="btn btn-success btn-sm"><i class="fas fa-check"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php } ?>
