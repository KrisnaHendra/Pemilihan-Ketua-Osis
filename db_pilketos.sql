-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2020 pada 09.39
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
-- Database: `db_pilketos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon`
--

CREATE TABLE `calon` (
  `id` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `calon`
--

INSERT INTO `calon` (`id`, `foto`, `nama`, `kelas`, `visi`, `misi`, `created_at`, `created_by`) VALUES
(3, 'photo\\phpAB82.tmp', 'Alia Anggun', 'XII IPA-1', 'Menjadikan sekolah menjadi tempat siswa berkreasi dan berdedikasi.', 'Aktif belajar di media sosial seperti brainly, edmodo, dan quipper.', 1595561587, 1),
(4, 'photo\\php57FB.tmp', 'Muhammad Agil', 'XII IPS-3', 'Memajukan kesejahteraan para satpam, guru, dan siswa di sekolah.', 'Menjadikan siswa berpengalaman belajar di bidang Teknologi Informasi agar tidak Gagap Teknologi.', 1595561667, 1),
(5, 'photo\\php8F7.tmp', 'Farisa Farel Salsabila', 'XII IPA-5', 'Memajukan kesejahteraan umum bagi siswa, guru, dan semua warga sekolah.', 'Menjadikan sekolah menjadi tempat berkreasi dan berdedikasi tinggi.', 1595569148, 1);

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
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `calon_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`id`, `calon_id`, `users_id`, `created_at`) VALUES
(1, 3, 2, 1595736834),
(2, 5, 4, 1595737155),
(3, 4, 11, 1595737169),
(5, 5, 1, 1595817971);

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
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Chooser'),
(3, 'The Monitor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Krisna Hendra', 'krisna', 'krisna@gmail.com', NULL, '$2y$10$nGA8kaR.bHLWH.xYqdfxtOsRSUg4C9RSKal5UPoHL8pB30c7Z97/a', 1, NULL, '2020-07-22 21:58:16', '2020-07-22 21:58:16'),
(2, 'Haifa Shalsabella', 'haifa', 'haifa@yahoo.com', NULL, '$2y$10$Pe3XRu/5Z.HI6.kGIoIvMe8HHoHRP1mNn6UeCj.d3CEDeW4dWMnXC', 1, NULL, '2020-07-22 23:24:19', '2020-07-22 23:24:19'),
(4, 'Natansyach Mahendra', 'natan', 'natan@gmail.com', NULL, '$2y$10$AxBPExHiSwHAiH6.nZiY7edrIK07yPLS8yncxWn9Kgn2NJKIYln1S', 2, NULL, '2020-07-23 01:00:10', '2020-07-23 01:00:10'),
(5, 'Tina Yulianti', 'tina', 'tina@gmail.com', NULL, '$2y$10$wRZFFLpsU6X.uytYwh4QjOU9SiLOQWPmKLsj5NxT.RgYTGHbsX366', 2, NULL, '2020-07-23 01:01:23', '2020-07-23 01:01:23'),
(6, 'Akbar Maulana', 'u10001', 'akbar@gmail.com', NULL, '$2y$10$JK0Gyh.eaRIGCGJ84Uhi3Oi/dzX/3l4Py2GKexavzW8x/u.Yr1BtG', 2, NULL, '2020-07-24 00:11:57', '2020-07-24 00:11:57'),
(7, 'Rizky Prasetyo', 'rizky', 'rizky@gmail.com', NULL, '$2y$10$PvqzPj0.Az2IdkD1O8VFn.2Tlq/mC0R6RjjtUGVebR3GsQmiffL4O', 2, NULL, '2020-07-24 06:50:15', '2020-07-24 06:50:15'),
(8, 'Fiorella Shafira', 'fiorella', 'fiorella@gmail.com', NULL, '$2y$10$xaQQXKIYL.gpnoV9Trm15ut5i/GRc4tU4GzF/w0g0wVYeXXVod9bu', 2, NULL, '2020-07-24 06:54:57', '2020-07-24 06:54:57'),
(9, 'Istna Zulfia', 'istna', 'istna@gmail.com', NULL, '$2y$10$GvlHsYqg6wM2/YcMjWTW9e52/zvnAz5q8tP/FD0mm3zeDGNsTQ3Au', 2, NULL, '2020-07-24 06:55:12', '2020-07-24 06:55:12'),
(10, 'Beta Erhana', 'beta', 'beta@gmail.com', NULL, '$2y$10$4zMXWvEK/WGdUzkZlnDnpesD6NCI68X9mA.j6PdPjAvNmy/a1KKr6', 2, NULL, '2020-07-24 06:55:25', '2020-07-24 06:55:25'),
(11, 'Zacky Maulana', 'zacky', 'zacky@gmail.com', NULL, '$2y$10$aBZi9PFgMrWvUbpz12wd1OfZMz5l0UXLO39vkLJO0wq/NdTCEpLU.', 2, NULL, '2020-07-24 06:55:51', '2020-07-24 06:55:51'),
(12, 'Nabila Rahmadanti', 'nabila', 'nabila@gmail.com', NULL, '$2y$10$AH.V6s2wxttmcshZ1SVn3uA6ZeGfA2ti3lw3krKzSuHfH.pjJvBKe', 2, NULL, '2020-07-24 06:56:19', '2020-07-24 06:56:19'),
(13, 'The Monitor', 'zulfano', 'zulfano@gmail.com', NULL, '$2y$10$IETT/7GIFvEvvlKu08uJUOch1HstMO7Syt5w8BzZYbJzkbszEgAbK', 3, NULL, '2020-07-24 20:34:12', '2020-07-24 20:34:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
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
-- AUTO_INCREMENT untuk tabel `calon`
--
ALTER TABLE `calon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
