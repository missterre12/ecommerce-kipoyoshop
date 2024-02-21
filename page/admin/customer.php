<?php
include "../../conn_terresa.php";

$q = mysqli_query($conn, "SELECT * FROM customer");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Customer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="text-center bg-primary text-white py-3">
                <h2>Data Customer</h2>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <table class="table table-bordered">
                <thead class="bg-light">
                    <tr>
                        <th class="text-center">Nama Customer</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($c = mysqli_fetch_assoc($q)) { ?>
                        <tr>
                            <td><?php echo $c['nama']; ?></td>
                            <td><?php echo $c['username']; ?></td>
                            <td><?php echo $c['password']; ?></td>
                            <td class="text-center">
                                <a href="hapus_cus.php?id=<?php echo $c['id_pembeli']; ?>" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>