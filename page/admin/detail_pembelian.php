<?php
include "../../conn_terresa.php";

$id = $_GET['id'];
$q = mysqli_query($conn, "SELECT * FROM keranjang WHERE id_pembeli='$id'");

$d_bayar = mysqli_fetch_assoc(mysqli_query($conn, "SELECT SUM(total_harga) AS total_bayar FROM keranjang WHERE id_pembeli='$id'"));
$bayar = $d_bayar['total_bayar'];

$total_bayar = $bayar + 20000;
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="text-center bg-primary text-white py-3">
                <h2>Detail Pembelian</h2>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <thead class="bg-light">
            <tr>
                <th class="text-center">Nama Barang</th>
                <th class="text-center">Qty</th>
                <th class="text-center">Total Harga</th>
                <th class="text-center">Total Bayar</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (mysqli_num_rows($q) > 0) {
                while($c = mysqli_fetch_assoc($q)) {?>
                    <tr>
                        <td class="text-center">
                            <?php 
                            $produk_query = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk='{$c['id_produk']}'");
                            if ($produk_query && mysqli_num_rows($produk_query) > 0) {
                                $data = mysqli_fetch_assoc($produk_query); 
                                $nama = $data['nama_barang']; 
                                echo $nama; 
                            } else {
                                echo "Barang tidak ditemukan";
                            }
                            ?>
                        </td>
                        <td class="text-center"><?php echo $c['qty']; ?></td>
                        <td class="text-center"><?php echo $c['total_harga']; ?></td>
                        <td class="text-center"><?php echo $total_bayar; ?></td>
                    </tr>
                <?php }
            } else {
                echo "<tr><td colspan='4' class='text-center'>Tidak ada data pembelian</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
