<?php
include "../../conn_terresa.php";
$query_kategori = mysqli_query($conn, "SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h2>Tambah Produk</h2>
    </div>
    <div class="modal-body">
        <form action="add_product.php" method="post" enctype="multipart/form-data">
            <div class="col-2">
                <label for="kode_barang" class="form-label">Kode Barang:</label>
                <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
            </div>

            <div class="col-4">
                <label for="nama_barang" class="form-label">Nama Barang:</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
            </div>

            <div class="col-2">
                <label for="harga_beli" class="form-label">Harga Beli:</label>
                <input type="text" class="form-control" id="harga_beli" name="harga_beli" required>
            </div>

            <div class="col-2">
                <label for="harga" class="form-label">Harga Jual:</label>
                <input type="text" class="form-control" id="harga" name="harga" required>
            </div>

            <div class="col-2">
                <label for="berat" class="form-label">Berat (gram):</label>
                <input type="text" class="form-control" id="berat" name="berat" required>
            </div>

            <div class="col-2">
                <label for="stok" class="form-label">Stok:</label>
                <input type="text" class="form-control" id="stok" name="stok" required>
            </div>

            <div class="col-4">
                <label for="kategori" class="form-label">Kategori:</label>
                <select class="form-select" style="background-position: right;" name="kat">
                    <?php
                    while ($kategori = mysqli_fetch_assoc($query_kategori)) {
                    ?>
                        <option><?php echo $kategori['kategori']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="col-4">
                <label for="gambar" class="form-label">Gambar:</label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
            </div>

            <br>

            <input name="simpan" type="submit" class="btn btn-primary" value="Simpan"></input>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>