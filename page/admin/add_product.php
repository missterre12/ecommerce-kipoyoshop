	<?php
	include "../../conn_terresa.php";

	$kat = $_POST['kat'];
	$kode_barang = $_POST['kode_barang'];
	$nama_barang = $_POST['nama_barang'];
	$harga_beli = $_POST['harga_beli'];
	$harga = $_POST['harga'];
	$berat = $_POST['berat'];
	$stok = $_POST['stok'];
	$qryid = mysqli_query($conn, "SELECT * FROM kategori WHERE kategori = '$kat'");
	$data = mysqli_fetch_assoc($qryid);
	$id_kategori = $data['id_ketegori'];

	@$message     = '';
	$valid_file   = true;
	$max_size     = 1024000;


	if ($_FILES['gambar']['name']) {

		if (!$_FILES['gambar']['error']) {

			$new_file_name = strtolower($_FILES['gambar']['tmp_name']);
			if ($_FILES['gambar']['size'] > $max_size) {
				$valid_file	= false;
				$message	= 'Maaf, file terlalu besar. Max: 1MB';
			}

			$image_path = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
			$extension = strtolower($image_path);

			if ($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "gif") {
				$valid_file = false;
				$message	= "Maaf, file hanya berupa format JPG, JPEG, PNG, dan GIF. #" . $extension;
			}

			if ($valid_file == true) {

				$rename_nama_file	= date('YmdHis');
				$nama_file_baru		= $rename_nama_file . '.' . $extension;

				mysqli_query($conn, "INSERT INTO produk SET id_ketegori='$id_kategori', kode_barang='$kode_barang', nama_barang='$nama_barang', harga_beli='$harga_beli', harga='$harga', berat='$berat', stok='$stok', gambar='$nama_file_baru'");

				move_uploaded_file($_FILES['gambar']['tmp_name'], '../../gambar/' . $nama_file_baru);
				header("location:index.php?page=produk");
			}
		} else {

			$message = 'Ooops!  Your upload triggered the following error:  ' . $_FILES['gambar']['error'];
		}
	}
	?>