<?php
include "../../config_terresa.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../../login_terresa.php");
    exit;
}
$nama = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <h4 style="color: white;">Dashboard Admin</h4>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user me-2"></i><?php echo $nama; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="outpage.php"> <i class=" fas fa-sign-out-alt"></i> Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar-admin" class="col-md-3 col-lg-2 d-md-block bg-light min-vh-100">
                <div id="sidebar-admin" class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?page=home"><i class="fas fa-home me-4" style="margin-left: 4px;"></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=produk"><i class="fas fa-box me-4" style="margin-left: 5px;"></i> Produk/Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=kategori"><i class="fas fa-box-open me-4" style="margin-left: 5px;"></i> Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=laporan"><i class="fas fa-file-alt me-4" style="margin-left: 11px"></i> Laporan Transaksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=customer"><i class="fas fa-users me-4" style="margin-left: 2px;"></i> Data Customer</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="col-md-9 col-lg-10">
                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'] . ".php";
                    if ($page === 'editproduct.php') {
                        $page = 'edit_product.php';
                    }
                    include($page);
                } else {
                    include('home.php');
                } ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>