-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jan 2024 pada 10.21
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `id_detail` int(2) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `bentuk` varchar(30) NOT NULL,
  `varian` varchar(30) NOT NULL,
  `toping` varchar(100) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail`
--

INSERT INTO `detail` (`id_detail`, `nama`, `ukuran`, `bentuk`, `varian`, `toping`, `harga`) VALUES
(1, 'Kue Coklat Strowberry', 'D 20 cm', 'Bulat', 'Coklat', 'Strawberry,Blue Berry,Buah Berry, Roll Coklat', 80000),
(2, 'Kue Coklat Oreo', 'D 15 cm', 'Bulat', 'Coklat ', 'Oreo,Stawberry,coklat kacang,pancake', 80000),
(3, 'Kue Beludru Merah', 'D 25 cm', 'Bulat ', 'Beludru Merah', 'BlueBerry,Strawberry', 80000),
(4, 'Kue Pernikahan 7', 'D 30 cm - 20 cm', 'Bulat- Bertingkat', 'Vanilla Pink', 'Bunga Cream, Mutiara dan Daun Buatan', 200000),
(5, 'Kue Ulang Tahun P', 'D 20 cm', 'Bulat', 'Vanilla', 'Aksesoris Happy BirthDay, Kupu Kupu dan Taburan bola bola coklat ', 100000),
(6, 'Kue Ulang Tahun N', '25', 'Bulat - tinggi', 'Coklat-Cream Navy', 'Aksesoris Happy BirthDay,dan Taburan bola bola coklat', 100000),
(7, 'Kue Ulang Tahun C', '15 cm', 'Bulat', 'Coklat-Oreo', 'Aksesoris Happy Birthday,Oreo,Coklat', 100000),
(8, 'Kue Krim Vanilla', 'D 15 cm', 'Bulat', 'Vanilla', 'kepingan Coklat dan Hiasan Krim Bunga ', 80000),
(9, 'Kue Ulang Tahun Dan Lilin Magi', 'D 20 cm', 'Bulat', 'Vanilla - Pink', 'BluBerry,coklat dan Lilin Ulang Tahun', 90000),
(10, 'Kue Pernikahan (Diskon)', 'D 30 cm - 20 cm', 'Bulat- Bertingkat', 'Vanilla', 'Aksesoris Bunga, Cream Bunga', 100000),
(11, 'Kue Krim Moca', 'D 20 cm', 'Bulat', 'Mocca', 'Kepingan Coklat dan Hiasan Krim', 80000),
(12, 'Kue Krim Merah', 'D 15 cm', 'Love', 'Vanilla Pink', 'Hiasan Krim', 80000),
(13, 'Kue Krim Biru', 'D 25 cm', 'Tabung', 'Vanilla', 'Hiasan Bunga Krim', 80000),
(14, 'Kue Krim Coklat', 'D 15 cm', 'Bulat', 'Coklat ', 'Hiasan Krim', 80000),
(15, 'Kue Coklat-Moca', '20 cm x 15 cm', 'Kotak', 'Coklat', 'Hiasan Krim Bunga', 80000),
(16, 'Kue Ulang Tahun W', 'D 20 cm', 'Bulat', 'Vanilla ', '-', 80000),
(17, 'Kue Ulang Tahun CP', 'D 20 cm', 'Bulat', 'Vanilla', 'Hiasan Krim', 80000),
(18, 'Kue Ulang Tahun G', 'D 20 cm', 'Bulat', 'Vanilla', '-', 80000),
(19, 'Kue Ulang Tahun Mini', 'D 10 cm', 'Bulat', 'Vanilla,Coklat', 'Hiasan Krim', 50000),
(20, 'Kue Pernikahan 1', 'D 15 cm - 20 cm - 30', 'Bulat - Bertingkat', 'Vanilla', 'Hiasan Bunga Krim dan Boneka Buatan', 200000),
(21, 'Kue Pernikahan 2', 'D 20 cm - 30 cm - 40', 'Bulat- Bertingkat', 'Vanilla', 'Hiasan Bunga Krim dan Boneka Buatan', 200000),
(22, 'Kue Pernikahan 3', 'D 15 cm - 20 cm - 30 cm', 'Bulat - Bertingkat', 'Vanilla - Pink', 'Hiasan Bunga Krim ', 200000),
(23, 'Kue Pernikahan 4', 'D 15 cm - 20 cm', 'Bulat- Bertingkat', 'Coklat ', 'Hiasan Bunga dan Boneka Buatan', 150000),
(24, 'Kue Pernikahan 5', 'D 15 cm - 20 cm ', 'Bulat - Bertingkat', 'Vanilla', 'Hiasan Bunga Krim dan Siluet Buatan', 150000),
(25, 'Kue Pernikahan 6', 'D 15 cm - 20 cm - 30 cm', 'Bulat- Bertingkat', 'Coklat ', 'Hiasan Bunga ', 200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kecamatan` text NOT NULL,
  `alamat` text NOT NULL,
  `barang` text NOT NULL,
  `jumlah_barang` varchar(20) NOT NULL,
  `ongkir` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  `pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `no_hp`, `email`, `kecamatan`, `alamat`, `barang`, `jumlah_barang`, `ongkir`, `total`, `pembayaran`) VALUES
(19, 'AMELLA PUTRI', '081277654213', 'amella@gmail.com', 'MEDAN_AMPLAS', 'Jl.balam Sunggal', 'Kue_Beludru_Merah', '3', 'Rp.15000', 'Rp.225000', 'cod'),
(20, 'MUHAMMAD JULIAMAN PULUNGAN', '081360866255', 'juanpul170702@gmail.com', 'MEDAN_SUNGGAL', 'JL.BEO SEI SIKAMBING B', 'Kue_Pernikahan', '1', 'Rp.10000', 'Rp.210000', 'transfer'),
(21, 'salsa', '089027878', 'ss@gmail.com', 'MEDAN_PERJUANGAN', 'medan', 'Kue_Ulang_Tahun_dan_Lilin_Magic', '1', 'Rp.20000', 'Rp.110000', 'cod'),
(22, 'JULI', '082765433342', 'juli65@gmail.com', 'MEDAN_SUNGGAL', 'Jl.Sei Batang Hari,Babura Sunggal', 'Kue_Coklat_Oreo', '1', 'Rp.10000', 'Rp.85000', 'cod'),
(23, 'caca', '082667765543', 'caca@gmail.com', 'MEDAN_TEMBUNG', 'jl.jklhbhjj', 'Kue_Beludru_Merah', '2', 'Rp.10000', 'Rp.150000', 'transfer'),
(28, 'juan', '998777777', 'jeje123@gmail.com', 'MEDAN_SELAYANG', 'ljfjiohfidhsfsfsddf', 'Kue_Ulang_Tahun_C', '2', 'Rp.10000', 'Rp.170000', 'cod'),
(29, 'juan', '90876578', 'juanpul170702@gmail.com', 'MEDAN_SELAYANG', 'ihugyvhbjkuigyh', 'Kue_Desain_Keluarga', '3', 'Rp.10000', 'Rp.10000', 'cod'),
(30, 'juan', '097664774', 'juanpul170702@gmail.com', 'MEDAN_POLONIA', 'dknekjbdjebhdebd', 'Kue_Ulang_Tahun_dan_Lilin_Magic', '3', 'Rp.15000', 'Rp.285000', 'cod'),
(31, 'cris', '088766625641', 'cris@gmail.com', 'MEDAN_AMPLAS', 'jl.perjuangan', 'Kue_ulang_tahun_n', '3', 'Rp.15000', 'Rp.315000', 'transfer'),
(32, 'Suci', '0876554345', 'Suci@gmail.com', 'MEDAN_SUNGGAL', 'Jl. Perjuangan ', 'Kue_krim_vanila', '3', 'Rp.10000', 'Rp.250000', 'cod');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `pesan`) VALUES
(3, 'MUHAMMAD JULIAMAN PULUNGAN', 'juanpul170702@gmail.com', ' Saya Sangat Senang Berbelanja Di Toko Ini'),
(5, 'cici', 'jeje123@gmail.com', ' semoga selalu amanah'),
(7, 'juan', 'juanpul170702@gmail.com', ' Saya sangat senang berbelanja Di Toko Ini');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(254) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` char(128) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `token`, `status`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'juancakeshop@gmail.com', 'c0e024d9200b5705bc4804722636378a', '1', '2024-01-29 15:41:44'),
(2, 'admin sunggal', 'e00cf25ad42683b3df678c61f42c6bda', 'sunggal32@gmail.com', '59115b18a2d253dc9306dd5ce1eb445d', '1', '2024-01-22 00:00:59'),
(3, 'admin pancing', 'c84258e9c39059a89ab77d846ddab909', 'pancing45@gmail.com', '06b430e240b21b8e265e88d8d9f1683e', '1', '2024-01-22 00:04:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail`
--
ALTER TABLE `detail`
  MODIFY `id_detail` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
