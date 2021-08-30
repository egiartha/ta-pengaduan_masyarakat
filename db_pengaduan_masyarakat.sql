-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Agu 2021 pada 11.12
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengaduan_masyarakat`
--

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
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `komentar` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `id_pengaduan` varchar(120) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `user_id`, `komentar`, `created_at`, `id_pengaduan`, `updated_at`) VALUES
(18, 4, 'yes', '2021-08-30 08:55:27', 'KDP - 1', '2021-08-30 08:55:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_03_17_061649_create_users_table', 1),
(4, '2020_03_17_062041_create_pengaduan_table', 1),
(5, '2020_03_23_044724_create_settings_table', 1),
(6, '2020_03_26_125056_create_penggunas_table', 1),
(7, '2020_03_26_125116_create_telepons_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(120) DEFAULT NULL,
  `id_pengaduan` varchar(120) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `notifikasi`
--

INSERT INTO `notifikasi` (`id`, `deskripsi`, `id_pengaduan`, `created_at`, `is_read`) VALUES
(9, 'Pengaduan Baru', 'KDP - 2', '2021-08-19 06:59:31', 1),
(10, 'Komentar dari Egi Artha Putri', 'KDP - 2', '2021-08-19 07:49:06', 1),
(11, 'Pengaduan Baru', 'KDP - 1', '2021-08-19 08:02:07', 1),
(12, 'Pengaduan Baru', 'KDP - 2', '2021-08-19 08:11:27', 1),
(13, 'Pengaduan Baru', 'KDP - 3', '2021-08-19 08:20:32', 1),
(14, 'Pengaduan Baru', 'KDP - 1', '2021-08-20 02:16:08', 1),
(15, 'Pengaduan Baru', 'KDP - 2', '2021-08-20 02:17:34', 1),
(16, 'Komentar dari Egi Artha Putri', 'KDP - 1', '2021-08-20 03:23:30', 1),
(17, 'Pengaduan Baru', 'KDP - 3', '2021-08-20 03:28:16', 1),
(18, 'Pengaduan Baru', 'KDP - 4', '2021-08-20 09:34:13', 1),
(19, 'Komentar dari Egi Artha Putri', 'KDP - 1', '2021-08-24 13:33:13', 1),
(20, 'Pengaduan Baru', 'KDP - 1', '2021-08-30 05:05:29', 1),
(21, 'Komentar dari Egi Artha Putri', 'KDP - 1', '2021-08-30 05:09:42', 1),
(22, 'Komentar dari Egi Artha Putri', 'KDP - 1', '2021-08-30 08:55:27', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id_settings` bigint(20) UNSIGNED NOT NULL,
  `nama_aplikasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_aplikasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id_settings`, `nama_aplikasi`, `deskripsi_aplikasi`, `created_at`, `updated_at`) VALUES
(1, 'DINAS PERHUBUNGAN', '>', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengaduan`
--

CREATE TABLE `tb_pengaduan` (
  `kode_pengaduan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `isi_laporan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggapan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `foto_pengaduan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` enum('pengajuan','aspirasi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','proses','diterima','ditolak','selesai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_selesai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `longitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_pengaduan`
--

INSERT INTO `tb_pengaduan` (`kode_pengaduan`, `tgl_pengaduan`, `tgl_tanggapan`, `user_id`, `isi_laporan`, `alamat`, `desa`, `kecamatan`, `tanggapan`, `foto_pengaduan`, `kategori`, `status`, `foto_selesai`, `created_at`, `updated_at`, `longitude`, `latitude`, `id_petugas`) VALUES
('KDP - 1', '2021-08-30', '2021-08-30', 4, 'hfhsuhi', 'jcdhufi', 'mcndj', 'Paloh', '0', '1630299928_VIRTUAL BACKGROUN MAHASISWA.jpg', 'pengajuan', '0', NULL, NULL, NULL, '109.3471736', '-0.0538864', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_profil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nik`, `nama`, `username`, `email`, `alamat`, `email_verified_at`, `password`, `telp`, `level`, `foto_profil`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1170615811706158', 'Karim Ardana', 'petugas1', 'petugas@gmail.com', '', NULL, '$2y$10$StNgm4.d1UIbNOi/KKsRaOw8h362YA4kax0xiKeH74u4b0ZERCxbG', '081317520732', 'petugas', '0', NULL, '2021-07-04 21:56:40', '2021-07-04 21:56:40'),
(2, '1170615711706157', 'Andri Maulanan', 'admin', 'admin@gmail.com', '', NULL, '$2y$10$vPTbcoEYjUSga/RkpAUQ3eV799tSe3sWEwlotcnBzuQaXXwQBBYYa', '081317520733', 'admin', '0', NULL, '2021-07-04 21:56:40', '2021-07-04 21:56:40'),
(4, '6101041010660004', 'Egi Artha Putri', 'egi', 'arthatria18@gmail.com', 'Jalan raya tebas , kecamatan tebas', NULL, '$2y$10$aDucFSfzIsRaEZlZFYol9OoKFQdkC57/fqvYq.vA825sKdvAdiUKy', '083856098814', 'masyarakat', '1629813918_1626655723112.jpg', NULL, '2021-07-04 22:08:40', '2021-07-04 22:08:40'),
(9, '1231231231231000', 'Bima febriansyah', 'bima', 'bimafebriansyah1002@gmail.com', 'Jl. Prof. M. Yamin GG Usaha Bersama 1', NULL, '$2y$10$StNgm4.d1UIbNOi/KKsRaOw8h362YA4kax0xiKeH74u4b0ZERCxbG', '089793912312', 'masyarakat', '0', NULL, '2021-08-12 07:38:58', '2021-08-12 07:38:58'),
(10, '0', 'reni', 'renia', 'budi01@gmail.com', 'semparuk', NULL, '$2y$10$lD5BT1tzfhFGpqa4Hsflb.OV0EqCH.hiXCpOAEOUdCtWmaP8gWl6u', '083893408814', 'petugas', '0', NULL, '2021-08-19 00:31:58', '2021-08-19 00:31:58');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id_settings`);

--
-- Indeks untuk tabel `tb_pengaduan`
--
ALTER TABLE `tb_pengaduan`
  ADD PRIMARY KEY (`kode_pengaduan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id_settings` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
