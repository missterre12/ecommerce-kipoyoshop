<?php
include "../../conn_terresa.php";
$no = 1;
$query_kategori = mysqli_query($conn,"SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kategori</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container mt-3">
        <div class="text-center bg-primary text-white py-3">
            <h2>Data Kategori</h2>
        </div>
        <a href="index.php?page=kategori&aksi=input" class="btn btn-success mt-3"><i class="fas fa-plus"></i> Tambah Kategori</a>

        <?php
        @$aksi = $_GET['aksi'];
        if($aksi=="input") {
            include("input_kat.php");
        } else if($aksi=="edit") {
            include("edit.php");
        }
        ?>

        <div class="table-responsive mt-3">
            <table class="table table-bordered">
                <thead class="bg-light">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($query_kategori && mysqli_num_rows($query_kategori) > 0) {
                        while($data = mysqli_fetch_assoc($query_kategori)) { ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td><?php echo $data['kategori'] ?></td>
                                <td class="text-center">
                                    <a href="index.php?page=kategori&aksi=edit&id=<?php echo $data['id_ketegori']; ?>" class="btn btn-warning btn-sm me-2"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="hapus_kat.php?id=<?php echo $data['id_ketegori']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php }
                    } else {
                        echo "<tr><td colspan='3'>No data found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
