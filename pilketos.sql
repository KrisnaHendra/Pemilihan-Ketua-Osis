-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2020 pada 09.29
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pilketos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `keterangan`, `kategori`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(1, 'Nasi Goreng Kendal', '250 gram', 'Makanan', 20000, 12, 1593613299, 1593613299),
(2, 'Kopi Susu Kendal', '250 gram', 'Minuman', 32000, 23, 1593613390, 1593613390),
(4, 'Nasi Gila Kendal', '100 gram', 'Makanan', 18000, 30, 1593614590, 1593614590),
(5, 'Aiciro Kendal', '250 gram', 'Makanan', 20000, 11, 1593614724, 1593614724),
(10, 'Indomie Double', '100 gram', 'Makanan', 78000, 2, 1593657149, 1593657149),
(11, 'Pangsit Gendeng', '500 gram', 'Makanan', 37000, 9, 1593657238, 1593657238),
(12, 'Kopsu Pandan Kendal', '250 gram', 'Minuman', 43000, 8, 1593665696, 1593665696),
(13, 'Choco Banana', '250 gram', 'Minuman', 54000, 90, 1594037665, 1594037665);

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `nama_buku` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `nama_buku`, `kategori`, `created_at`) VALUES
(1, 'Kapal apung 1997', 'Horror', 1595400378),
(2, 'Si Mini Sabilla', 'Horror', 1595400390),
(3, 'Jaran Goyang', 'Religi', 1595400475),
(5, 'Halo Indonesia', 'Fiksi', 1595401993),
(16, 'Haiva Success Wedding', 'Romance', 1595403886),
(30, 'Mengejar Cinta', 'Religi', 1595420302),
(36, 'dasdas', 'Komedi', 1595429864);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `barang_id`, `harga`, `qty`) VALUES
(1, 2, 20000, 5),
(2, 2, 20000, 5),
(3, 2, 20000, 5),
(4, 2, 20000, 5),
(5, 2, 20000, 5),
(6, 2, 20000, 5),
(7, 2, 20000, 5),
(8, 2, 20000, 5),
(9, 2, 20000, 5),
(10, 2, 20000, 5),
(11, 2, 20000, 5),
(12, 2, 20000, 5),
(13, 2, 20000, 5),
(14, 2, 20000, 5),
(15, 2, 20000, 5),
(16, 2, 20000, 5),
(17, 2, 20000, 5),
(18, 2, 20000, 5),
(19, 2, 20000, 5),
(20, 2, 20000, 5),
(21, 2, 20000, 5),
(22, 2, 20000, 5),
(23, 2, 20000, 5),
(24, 2, 20000, 5),
(25, 2, 20000, 5),
(26, 2, 20000, 5),
(27, 2, 20000, 5),
(28, 2, 20000, 5),
(29, 2, 20000, 5),
(30, 2, 20000, 5),
(31, 2, 20000, 5),
(32, 2, 20000, 5),
(33, 2, 20000, 5),
(34, 2, 20000, 5),
(35, 2, 20000, 5),
(36, 2, 20000, 5),
(37, 2, 20000, 5),
(38, 2, 20000, 5),
(39, 2, 20000, 5),
(40, 2, 20000, 5),
(41, 2, 20000, 5),
(42, 2, 20000, 5),
(43, 2, 20000, 5),
(44, 2, 20000, 5),
(45, 2, 20000, 5),
(46, 2, 20000, 5),
(47, 2, 20000, 5),
(48, 2, 20000, 5),
(49, 2, 20000, 5),
(50, 2, 20000, 5),
(51, 2, 20000, 5),
(52, 2, 20000, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`) VALUES
(1, 'Pak Arip', 'Pakis'),
(2, 'Bu Asri', 'Pulungdowo'),
(5, 'Alia Firdausi', 'Malang'),
(6, 'Zalfa Alya', 'Jember'),
(14, 'Sabilla', 'Blitar'),
(16, 'Zevva Wijaya', 'Lumajang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(1) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Kasir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `invoice` varchar(128) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `catatan` text DEFAULT NULL,
  `grand_total` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `invoice`, `pelanggan_id`, `tanggal`, `catatan`, `grand_total`, `created_at`, `created_by`) VALUES
(12, 'INV1594192251', 2, '2020-09-07', 'Tes', 256000, 1594192299, 3),
(13, 'INV1594192882', 0, '2020-07-08', 'Tidak ada', 450000, 1594192900, 3),
(14, 'INV1594194526', 5, '2020-07-08', NULL, 450000, 1594194568, 3),
(15, 'INV1594206839', 0, '2020-07-08', NULL, 1181000, 1594206963, 3),
(16, 'INV1594207296', 0, '2020-07-08', NULL, 36000, 1594207313, 3),
(17, 'INV1594209102', 5, '2020-07-08', 'Kurang kemarin', 640000, 1594209141, 3),
(18, 'INV1594209102', 5, '2020-07-08', 'Kurang kemarin', 72000, 1594209389, 3),
(20, 'INV1594210119', 6, '2020-07-08', NULL, 484000, 1594210142, 3),
(21, 'INV1594210119', 2, '2020-07-08', 'Tes', 24000, 1594211916, 3),
(22, 'INV1594212297', 2, '2020-06-08', NULL, 52200, 1594212314, 3),
(23, 'INV1594212673', 0, '2020-07-08', NULL, 260000, 1594212687, 3),
(24, 'INV1594274834', 14, '2020-07-09', NULL, 152000, 1594274900, 3),
(25, 'INV1594363687', 0, '2020-07-10', NULL, 2465300, 1594363710, 3),
(26, 'INV1594363976', 0, '2020-07-10', NULL, 1686000, 1594363996, 3),
(27, 'INV1594380742', 0, '2020-07-10', NULL, 268000, 1594380758, 3),
(28, 'INV1594382671', 0, '2020-07-10', NULL, 277100, 1594382694, 3),
(29, 'INV1594435959', 0, '2020-07-11', NULL, 374400, 1594435995, 3),
(30, 'INV1594437472', 0, '2020-07-11', NULL, 462000, 1594437508, 3),
(31, 'INV1594549616', 0, '2020-07-12', 'Tes', 5221000, 1594549691, 3),
(32, 'INV1594565179', 0, '2020-07-13', 'Haifa', 486000, 1594565229, 3),
(33, 'INV1594713483', 16, '2020-07-14', 'Titipan', 561000, 1594713519, 3),
(34, 'INV1594718751', 17, '2020-03-19', 'Bismillah', 609000, 1594718792, 3),
(35, 'INV1594972691', 0, '2020-07-17', NULL, 456000, 1594972708, 3),
(36, 'INV1595223339', 0, '2020-07-20', NULL, 4357000, 1595223386, 3),
(37, 'INV1595434871', 0, '2020-07-22', NULL, 210000, 1595434885, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_det`
--

CREATE TABLE `transaksi_det` (
  `id` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_det`
--

INSERT INTO `transaksi_det` (`id`, `transaksi_id`, `barang_id`, `harga`, `jumlah`, `total`, `created_at`, `created_by`) VALUES
(1, 12, 1, 232000, 1, 232000, 1594192299, 3),
(2, 12, 12, 12000, 2, 24000, 1594192299, 3),
(3, 12, 10, 12000, 2, 24000, 1594192299, 3),
(4, 13, 1, 10000, 5, 50000, 1594192900, 3),
(5, 13, 2, 40000, 10, 400000, 1594192900, 3),
(6, 14, 4, 50000, 1, 50000, 1594194568, 3),
(7, 14, 1, 40000, 10, 400000, 1594194568, 3),
(8, 15, 1, 127000, 3, 381000, 1594206963, 3),
(9, 15, 11, 40000, 10, 400000, 1594206963, 3),
(10, 15, 12, 80000, 5, 400000, 1594206963, 3),
(11, 16, 13, 12000, 3, 36000, 1594207313, 3),
(12, 17, 13, 120000, 2, 240000, 1594209141, 3),
(13, 17, 2, 80000, 5, 400000, 1594209141, 3),
(14, 18, 13, 12000, 6, 72000, 1594209389, 3),
(16, 20, 1, 12000, 7, 84000, 1594210142, 3),
(17, 20, 2, 40000, 10, 400000, 1594210142, 3),
(18, 21, 4, 12000, 2, 24000, 1594211917, 3),
(19, 22, 2, 8700, 6, 52200, 1594212314, 3),
(20, 23, 2, 20000, 13, 260000, 1594212687, 3),
(21, 24, 2, 13000, 4, 52000, 1594274900, 3),
(22, 24, 5, 20000, 5, 100000, 1594274900, 3),
(23, 25, 2, 20000, 12, 2, 1594363710, 3),
(24, 25, 1, 18700, 119, 2, 1594363710, 3),
(25, 26, 5, 12000, 7, 1, 1594363996, 3),
(26, 26, 2, 89000, 18, 6, 1594363996, 3),
(27, 27, 13, 20000, 8, 160000, 1594380758, 3),
(28, 28, 1, 12000, 6, 72000, 1594382694, 3),
(29, 28, 2, 29300, 7, 205100, 1594382694, 3),
(30, 29, 2, 13200, 3, 39600, 1594435995, 3),
(31, 30, 13, 18000, 9, 162000, 1594437508, 3),
(32, 30, 11, 25000, 12, 300000, 1594437508, 3),
(33, 31, 2, 32000, 120, 3840000, 1594549691, 3),
(34, 31, 1, 25000, 43, 1075000, 1594549691, 3),
(35, 31, 11, 17000, 18, 306000, 1594549691, 3),
(36, 32, 13, 54000, 9, 486000, 1594565229, 3),
(37, 33, 13, 54000, 9, 486000, 1594713519, 3),
(38, 33, 1, 25000, 3, 75000, 1594713519, 3),
(39, 34, 11, 37000, 7, 259000, 1594718792, 3),
(40, 34, 5, 22000, 9, 198000, 1594718792, 3),
(41, 34, 4, 76000, 2, 152000, 1594718792, 3),
(42, 36, 2, 32000, 2, 64000, 1595223386, 3),
(43, 36, 11, 37000, 9, 333000, 1595223386, 3),
(44, 36, 1, 20000, 198, 3960000, 1595223386, 3),
(45, 37, 10, 78000, 2, 156000, 1595434885, 3),
(46, 37, 13, 54000, 1, 54000, 1595434885, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Krisna Hendra', 'krisna@gmail.com', NULL, '$2y$10$eOPO3NyLSo0ucP6T9Tz97.DbpOGos7pMOWVmTcRDCi6gHUzgPRWIW', 1, NULL, '2020-06-30 05:55:12', '2020-06-30 05:55:12'),
(4, 'Zidane Abidin', 'zidan@gmail.com', NULL, '$2y$10$CznxgZQm/BXO0KVXqi9pC.l3wFjmSdyRefAx7Y63yyqWwMqtZAfcy', 1, NULL, '2020-07-01 01:05:51', '2020-07-01 01:05:51'),
(5, 'Sherly Yuke', 'sherly@gmail.com', NULL, '$2y$10$qZhf4fMeRJJ8AkAnosWN6ulep8abdL75YkwIo/H1aoHG7kvpotJpu', 2, NULL, '2020-07-01 01:06:39', '2020-07-01 01:06:39'),
(6, 'Haifa Shalsa', 'haifa@gmail.com', NULL, '$2y$10$Y6Amm.stUyMfcG5NaKKLxuFTJwQ0vchAayNOWfiUx68tmUEoMsZQa', 1, NULL, '2020-07-01 01:11:03', '2020-07-01 01:11:03'),
(7, 'Calista Ardelia', 'calista@gmail.com', NULL, '$2y$10$uQcByF/vuRN8ooXT3yCfG.L8pLSttlE0rr6Bj7ho88fgC70NP2no6', 2, NULL, '2020-07-01 01:11:21', '2020-07-01 01:11:21'),
(8, 'Nabila Noviasari', 'nabila@gmail.com', NULL, '$2y$10$DWsP89A.Ss9vOIx69X.k/ufBpLKlIE7Lm6cv0.vlCEJCQgeQuwVme', 2, NULL, '2020-07-01 01:11:55', '2020-07-01 01:11:55'),
(9, 'Sabilla Mini', 'sabilla@gmail.com', NULL, '$2y$10$qN4hdrFLhV8.f6QUXVIrC.eRQuNRWrEcCBd1C71zrHxHhxJ2jkmr6', 2, NULL, '2020-07-01 01:32:54', '2020-07-01 01:32:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_det`
--
ALTER TABLE `transaksi_det`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `transaksi_det`
--
ALTER TABLE `transaksi_det`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
