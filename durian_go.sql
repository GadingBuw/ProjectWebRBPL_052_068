-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2025 pada 17.13
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `durian_go`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactus`
--

CREATE TABLE `contactus` (
  `id` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `pesan` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contactus`
--

INSERT INTO `contactus` (`id`, `nama`, `email`, `perihal`, `pesan`) VALUES
(4, 'may', 'damai.gading.dg@gmail.com', 'Saran', 'Itu kok duriannya gak kaya durian?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Bima', 'bimadwi', 'ganteng', 'superadmin'),
(2, 'gading', 'gading', 'ganteng', 'admin'),
(3, 'arya', 'arya', 'ganteng', 'user'),
(4, 'rapolo', 'rapolo', 'ganteng', 'admin'),
(5, 'nova', 'nova', 'ganteng', 'admin'),
(6, 'Alle', 'Alle', 'ganteng', 'admin'),
(7, 'rizal', 'dontol', 'pakem', 'user'),
(8, 'rizal', 'dontol', 'pakem', 'user'),
(9, 'iqbal', 'iqbalodon', 'ganteng', 'admin'),
(10, 'iqbal', 'iqbalodon', 'ganteng', 'admin'),
(11, 'iqbal', 'iqbalodon', 'ganteng', 'admin'),
(12, 'damai', 'damai', 'ganteng', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `idpesanan` int(30) NOT NULL,
  `id` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jenisdurian` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `metodePembayaran` varchar(50) NOT NULL,
  `buktiPembayaran` varchar(50) NOT NULL,
  `jumlah` int(30) NOT NULL,
  `total` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`idpesanan`, `id`, `nama`, `email`, `jenisdurian`, `alamat`, `metodePembayaran`, `buktiPembayaran`, `jumlah`, `total`) VALUES
(29, 3, 'Andi', 'dian@gmail.com', 'Durian Black Thorn', 'Tulakan', 'cod', '', 3, 1200000),
(30, 12, 'may', 'mayjd@gmail.com', 'Durian Super Tembaga', 'Pacitan Kota', 'dana', 'buktipembayaran.jpg', 1, 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambahproduk`
--

CREATE TABLE `tambahproduk` (
  `id` int(30) NOT NULL,
  `stok` varchar(30) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `harga` int(30) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tambahproduk`
--

INSERT INTO `tambahproduk` (`id`, `stok`, `judul`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'Stok 24', 'Durian Musang King', 'Sangat manis, lembut, dan agak pahit', 300000, 'musangking.jpg'),
(2, 'Stok 39', 'Durian Bawor', 'Manisnya lite, lembut, dan dagingnya tebal', 250000, 'Durian-Bawor.png'),
(4, 'Stok 59', 'Durian Super Tembaga', 'Daging tebal, manis, dan lembut', 150000, 'supertembaga.jpg'),
(5, 'Stok 20', 'Durian Black Thorn', 'Super legit, pahitnya nampol, super enak', 400000, 'blackthornjpg.jpg'),
(7, 'Stok 5', 'Durian Pelangi', 'Rasa yang eksotis dan durian yg langka', 75000, 'musangking.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idpesanan`);

--
-- Indeks untuk tabel `tambahproduk`
--
ALTER TABLE `tambahproduk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `idpesanan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tambahproduk`
--
ALTER TABLE `tambahproduk`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
