<link href="../../css/bootstrap.min.css" rel="stylesheet">
<?php
include "../../conn_terresa.php";

$e = $_GET['id'];
$edit = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk='$e'");
$produk = mysqli_fetch_assoc($edit);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Edit Barang
                </div>
                <div class="card-body">
                    <form action="update_product.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_produk" class="form-control" value="<?php echo $produk['id_produk']; ?>">
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori:</label>
                            <select name="kategori" class="form-select">
                                <?php
                                $d = mysqli_query($conn, "SELECT * FROM kategori");
                                while ($data = mysqli_fetch_assoc($d)) {
                                ?>
                                    <option><?php echo $data['kategori']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang:</label>
                            <input type="text" name="kode_barang" class="form-control" value="<?php echo $produk['kode_barang']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang:</label>
                            <input type="text" name="nama_barang" class="form-control" value="<?php echo $produk['nama_barang']; ?>">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="harga_beli" class="form-label">Harga Beli:</label>
                                    <input type="text" name="harga_beli" class="form-control" value="<?php echo number_format($produk['harga_beli']); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga Jual:</label>
                                    <input type="text" name="harga" class="form-control" value="<?php echo number_format($produk['harga']); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="berat" class="form-label">Berat:</label>
                            <input type="text" name="berat" class="form-control" value="<?php echo $produk['berat']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok:</label>
                            <input type="text" name="stok" class="form-control" value="<?php echo $produk['stok']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar:</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>