<?php
include "../../conn_terresa.php";
$id_produk = $_POST['id_produk'];
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$harga_beli = $_POST['harga_beli'];
$harga = $_POST['harga'];
$berat = $_POST['berat'];
$stok = $_POST['stok'];
$kategori = $_POST['kategori'];
$qryid = mysqli_query($conn, "SELECT * FROM kategori where kategori='$kategori'");
$data = mysqli_fetch_assoc($qryid);
$id_kategori = $data['id_ketegori'];

@$message		= '';
$valid_file		= true;
$max_size		= 1024000;


if ($_FILES['gambar']['name']) {

	if (!$_FILES['gambar']['error']) {

		$new_file_name = strtolower($_FILES['gambar']['tmp_name']);
		if ($_FILES['gambar']['size'] > $max_size)
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



		mysqli_query($conn, "UPDATE produk SET kode_barang='$kode_barang', id_ketegori='$id_kategori', harga_beli='$harga_beli', nama_barang='$nama_barang', harga='$harga', berat='$berat', stok='$stok',  gambar='$nama_file_baru' WHERE id_produk='$id_produk'");

		move_uploaded_file($_FILES['gambar']['tmp_name'], '../../gambar/' . $nama_file_baru);
		header("location:index.php?page=produk");
	}
} else {

	$message = 'Data sudah berhasil diedit.:  ' . $_FILES['gambar']['error'];
}
