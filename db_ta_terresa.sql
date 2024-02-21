-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 08:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ta_terresa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Terresa Alicia', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `chekout`
--

CREATE TABLE `chekout` (
  `id_chekout` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_tlp` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status_terima` enum('belum di terima','sudah diterima') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_pembeli`, `nama`, `username`, `password`) VALUES
(44, 'Jhon Smith', 'customer', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_ketegori` int(11) NOT NULL,
  `kategori` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_ketegori`, `kategori`) VALUES
(11, 'Kesehatan'),
(22, 'Furniture'),
(33, 'Aksesoris'),
(44, 'Kebutuhan Dapur'),
(57, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `total_harga` varchar(50) NOT NULL,
  `total_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_pembeli`, `id_produk`, `qty`, `harga`, `total_harga`, `total_bayar`) VALUES
(38, 11, 33, '44', '500000', '22000000', ''),
(42, 22, 44, '5', '5000000', '25000000', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_ketegori` int(11) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_beli` decimal(10,2) NOT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `berat` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_ketegori`, `kode_barang`, `nama_barang`, `harga_beli`, `harga`, `berat`, `stok`, `gambar`) VALUES
(11, 11, 'BRG001', 'Minyak Kayu Putih', 12000.00, 15000.00, 1000, 5, '20240212050208.jpg'),
(12, 22, 'BRG002', 'Kursi Kayu', 75000.00, 100000.00, 200, 5, '20240212050403.jpg'),
(90, 11, 'BRG003', 'Sakatonik Botol ', 20000.00, 25000.00, 210, 21, '20240207082522.jpeg'),
(91, 11, 'BRG004', 'Antangin Sachet', 4000.00, 5500.00, 15, 10, '20240207082617.jpg'),
(92, 11, 'BRG005', 'Decolgen Obat Pilek', 1500.00, 2500.00, 15, 12, '20240207082730.jpg'),
(93, 44, 'BRG006', 'Dispenser Air ', 60000.00, 90000.00, 1000, 8, '20240212043907.jpg'),
(94, 44, 'BRG007', 'Oven Listrik Kirin', 390000.00, 500000.00, 1500, 3, '20240207083618.jpeg'),
(95, 44, 'BRG008', 'Teflon Anti Lengket', 99000.00, 200000.00, 600, 5, '20240207083700.jpg'),
(96, 44, 'BRG009', 'Wajan Anti Lengket', 85000.00, 150000.00, 600, 5, '20240212050230.jpeg'),
(97, 22, 'BRG010', 'Meja Kayu Bulat', 80000.00, 120000.00, 800, 2, '20240207083839.jpg'),
(98, 22, 'BRG011', 'Meja Plastik Napolly', 75000.00, 120000.00, 500, 2, '20240207083913.jpg'),
(99, 22, 'BRG012', 'Kursi Plastik', 60000.00, 90000.00, 400, 2, '20240207084030.jpg'),
(100, 33, 'BRG013', 'Tas Ransel Sekolah', 120000.00, 180000.00, 600, 3, '20240212050250.jpg'),
(101, 33, 'BRG014', 'Totebag Karakter ', 15000.00, 20000.00, 300, 3, '20240212050306.jpeg'),
(102, 33, 'BRG015', 'Totebag Hitam Segitiga', 30000.00, 45000.00, 400, 3, '20240207084231.jpg'),
(103, 33, 'BRG016', 'Jam Tangan Wanita', 125000.00, 160000.00, 300, 3, '20240212050322.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `chekout`
--
ALTER TABLE `chekout`
  ADD PRIMARY KEY (`id_chekout`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_ketegori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chekout`
--
ALTER TABLE `chekout`
  MODIFY `id_chekout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_ketegori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
