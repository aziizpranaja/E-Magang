-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2021 pada 07.32
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emagang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aziz', 'aziz@gmail.com', NULL, '$2y$10$3EkvJ9LfiFSi7idoNPw2wuzv672CED264iq7vkZokW4hWacz1/asq', 'RGTU5J96UtnM5crsES6UdD8YlnLoYhkhX7GLqOO5doERGUrb5Ki7JyJmy6xJ', '2021-04-18 22:58:42', '2021-04-18 22:58:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `laporan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `nama`, `laporan`, `created_at`, `updated_at`) VALUES
(3, 'Mumtaaz', 'public/Z9J2hvmGEpdq3Ns1tmqLiF8yGviOBTqFnTu36DsV.jpg', '2021-05-06 08:51:21', '2021-05-06 15:51:21'),
(4, 'Mumtaaz', 'public/J1Yq6geevPSM0RHCaldmJlsscGtM2xWpCvawfDsw.docx', '2021-05-06 09:09:59', '2021-05-06 16:09:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `magang`
--

CREATE TABLE `magang` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_magang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `magang`
--

INSERT INTO `magang` (`id`, `nama`, `nama_perusahaan`, `lokasi_magang`, `status`, `created_at`, `updated_at`) VALUES
(1, 'gurimbull', 'Marga', 'Jawa', 2, '2021-05-26 10:38:09', '2021-05-26 19:54:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `magang_pembimbing`
--

CREATE TABLE `magang_pembimbing` (
  `id` int(11) NOT NULL,
  `magang_id` int(11) NOT NULL,
  `pembimbing_id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `magang_pembimbing`
--

INSERT INTO `magang_pembimbing` (`id`, `magang_id`, `pembimbing_id`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 50, '2021-05-05 15:13:52', '2021-05-05 15:57:16'),
(3, 3, 1, 60, '2021-05-05 08:55:42', '2021-05-05 15:55:47'),
(4, 12, 1, 50, '2021-05-19 22:15:42', '2021-05-20 05:15:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `magang_penguji`
--

CREATE TABLE `magang_penguji` (
  `id` int(11) NOT NULL,
  `magang_id` int(11) NOT NULL,
  `penguji_id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `magang_penguji`
--

INSERT INTO `magang_penguji` (`id`, `magang_id`, `penguji_id`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 70, '2021-05-05 10:33:55', '2021-05-19 07:41:46'),
(4, 12, 1, 90, '2021-05-19 22:18:42', '2021-05-20 05:18:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `magang_penilaian`
--

CREATE TABLE `magang_penilaian` (
  `id` int(13) NOT NULL,
  `magang_id` int(11) DEFAULT NULL,
  `penilaian_id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `magang_penilaian`
--

INSERT INTO `magang_penilaian` (`id`, `magang_id`, `penilaian_id`, `nilai`, `created_at`, `updated_at`) VALUES
(4, 1, 4, 70, '2021-04-22 06:57:07', '0000-00-00 00:00:00'),
(6, 2, 3, 80, '2021-04-27 03:44:23', '2021-04-27 10:44:23'),
(7, 2, 2, 50, '2021-04-27 05:07:44', '2021-04-27 12:07:44'),
(8, 5, 1, 70, '2021-05-04 13:15:08', '2021-05-04 20:15:56'),
(9, 2, 4, 90, '2021-05-19 00:43:32', '2021-05-19 07:43:32'),
(10, 12, 1, 50, '2021-05-19 13:37:28', '2021-05-19 20:38:06'),
(11, 12, 3, 90, '2021-05-19 22:20:05', '2021-05-20 05:20:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` char(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`) VALUES
(1, 'Muhammad Aziiz Pranaja', '19051397030', 'pranaja200102@gmail.com', 'Teknik Informatika'),
(2, 'Willyta Asmara Diya Abadi', '19051397017', 'Willyta@gmail.com', 'Teknik Informatika'),
(3, 'Haidar Guhardy Muhammad', '19051397005', 'HaidarGe@gmail.com', 'Teknik Mesin');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2021_03_23_223158_create_students_table', 2),
(9, '2021_04_06_054824_create_users_table', 2),
(10, '2021_04_18_153056_create_admins_table', 3),
(11, '2021_04_28_063900_table_magang', 4),
(12, '2021_04_28_114322_m_status', 5),
(13, '2021_04_28_121959_create_table_magang', 6),
(19, '2021_05_05_100037_create_presensis_table', 7),
(20, '2021_05_19_103327_create_rating', 8),
(22, '2021_05_19_142934_create_kepuasan', 9),
(24, '2021_05_19_143613_create_rating', 10),
(26, '2021_05_26_173354_create_table_magang', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_status`
--

CREATE TABLE `m_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `m_status`
--

INSERT INTO `m_status` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Pending', NULL, NULL),
(2, 'Complete', NULL, NULL),
(3, 'cancel', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('Raka22jagoan@gmail.com', '1lM73rWiVPOz8aeBvJFCwBoThStf2xTtCgik9cWIBNK8qjkdQE0WK8tm984H', '2021-03-31 11:05:02'),
('Raka22jagoan@gmail.com', 'Eadmv4Eq5yydX8tVa1tj9QYmjoXHlod2Wpzs3uq8UCvxKjQggB7OsuU6iiGx', '2021-03-31 11:06:59'),
('Raka22jagoan@gmail.com', 'gX0cqxVvYU7tqGNq455AzLaAxVsW8uWNsElYgRhtLmGnVu8VhfUDMSCNMA2N', '2021-03-31 11:12:52'),
('aziizpranaja4@gmail.com', '02jyBIVdKxKKukE0Aro9uxOHseku42heMWnV8rWwaaV7mXsTPqGm03FcVUul', '2021-04-18 08:17:14'),
('pranaja200102@gmail.com', 'IEXeeFhoMHRWDpHWUZHmRGY3HJENiNMmxUtMuhvPYSNb7kyXiXaRdWl4hy6g', '2021-05-05 22:43:06'),
('haidar5115@gmail.com', 'QGg0FOd5VneQ1zlkaaGzGAndPqGFJYHTg6fuMHxBE18hBuZUtGhEOHvzMps5', '2021-05-26 07:46:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembimbing`
--

CREATE TABLE `pembimbing` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembimbing`
--

INSERT INTO `pembimbing` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'M-001', 'Penilaian Laporan', '2021-05-05 15:12:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penguji`
--

CREATE TABLE `penguji` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penguji`
--

INSERT INTO `penguji` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'B-001', 'Penilaian Laporan', '2021-05-05 17:16:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id` int(13) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penilaian`
--

INSERT INTO `penilaian` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'K-001', 'Penilaian Etika', '2021-04-22 06:54:49', '0000-00-00 00:00:00'),
(2, 'K-002', 'Penilaian Praktek', '2021-04-22 06:54:49', '0000-00-00 00:00:00'),
(3, 'K-003', 'Penilaian Kedisiplinan', '2021-04-22 06:54:49', '0000-00-00 00:00:00'),
(4, 'K-004', 'Penilaian Laporan', '2021-04-22 06:54:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `tgl` date NOT NULL,
  `jammasuk` time DEFAULT NULL,
  `jamkeluar` time DEFAULT NULL,
  `jamkerja` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id`, `user_id`, `tgl`, `jammasuk`, `jamkeluar`, `jamkerja`, `created_at`, `updated_at`) VALUES
(1, 12, '2021-05-05', '19:22:27', '19:22:46', '00:00:19', '2021-05-05 05:22:27', '2021-05-05 05:22:46'),
(2, 4, '2021-05-06', '02:14:18', '02:15:41', '00:01:23', '2021-05-05 12:14:18', '2021-05-05 12:15:41'),
(3, 4, '2021-05-06', '02:14:35', NULL, NULL, '2021-05-05 12:14:35', '2021-05-05 12:14:35'),
(4, 4, '2021-05-06', '04:11:00', NULL, NULL, '2021-05-05 14:11:00', '2021-05-05 14:11:00'),
(5, 4, '2021-05-06', '04:11:51', NULL, NULL, '2021-05-05 14:11:51', '2021-05-05 14:11:51'),
(6, 4, '2021-05-06', '12:03:40', NULL, NULL, '2021-05-05 22:03:40', '2021-05-05 22:03:40'),
(7, 4, '2021-05-19', '14:39:51', NULL, NULL, '2021-05-19 00:39:51', '2021-05-19 00:39:51'),
(8, 4, '2021-05-20', '12:13:30', NULL, NULL, '2021-05-19 22:13:30', '2021-05-19 22:13:30'),
(9, 14, '2021-05-26', '22:00:01', NULL, NULL, '2021-05-26 08:00:01', '2021-05-26 08:00:01'),
(10, 18, '2021-05-27', '09:47:13', NULL, NULL, '2021-05-26 19:47:13', '2021-05-26 19:47:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id` int(10) UNSIGNED NOT NULL,
  `nilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id`, `nilai`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'puas', 4, '2021-05-19 08:35:44', '2021-05-19 08:35:44'),
(2, 'puas', 9, '2021-05-19 08:37:06', '2021-05-19 08:37:06'),
(3, 'tidak puas', 12, NULL, NULL),
(4, 'puas', 7, '2021-05-19 13:23:44', '2021-05-19 13:23:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` char(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id`, `nama`, `nim`, `email`, `jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Aziiz Pranaja', '19051397030', 'pranaja200102@gmail.com', 'teknik informatika', '2021-04-07 06:03:10', '2021-04-07 06:03:10'),
(2, 'Haidar Guhardy Muhammad', '19051397005', 'guhardy@gmail.com', 'Teknik Informatika', '2021-04-26 07:52:51', '2021-04-26 07:52:51');

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
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Willyta Asmara Diya Abadi', 'willytaada@gmail.com', NULL, '$2y$10$inWviUdz54uezVItTRSFiukkRV83W4TUVGUZ399mT8ki/6sR7Q/qq', 'peserta', NULL, '2021-04-05 23:33:15', '2021-04-05 23:33:15'),
(4, 'Mumtaaz', 'bhagaskaramumtaaz@gmail.com', NULL, '$2y$10$Svf3z3Hpb2RBygmDIOL1Hu9EF65hD6sa4KVW.8AgYOjDPzjbI46Am', 'peserta', NULL, '2021-04-07 05:55:18', '2021-04-07 19:16:53'),
(7, 'Aldebaran', 'aziizpranaja5@gmail.com', NULL, '$2y$10$3/1GS5YRGDe1sJfveaQTFu3Hl4rR4r7AaZnwstiVzuGCWGjPP6kt2', 'pembimbing', NULL, '2021-04-19 08:04:57', '2021-04-19 08:04:57'),
(8, 'Starla', 'Starla@gmail.com', NULL, '$2y$10$9fv36BY5c7W4ttmDRj7sAuG.QuZRDPwefF79nw3xREC6jUbK.cIci', 'penguji', NULL, '2021-04-19 08:07:18', '2021-04-19 08:07:18'),
(9, 'Marga', 'Marga@gmail.com', NULL, '$2y$10$NaVUgJDsQFtYa8v1KnMJzuYniYMHBAHJK30bd069WVG4L6asmcczu', 'industri', NULL, '2021-04-19 08:09:29', '2021-04-19 08:09:29'),
(10, 'Akbar Rakasiwi', 'Raka22jagoan@gmail.com', NULL, '$2y$10$4dZsucuWIyaNpS2dZwwgDe2z8eVu4w57cQ6DksnDZaJVMuI9.qRcq', 'peserta', NULL, '2021-04-28 22:56:14', '2021-04-28 22:56:14'),
(11, 'Muhammad Aziiz Pranaja', 'pranaja200102@gmail.com', NULL, '$2y$10$.v8wVnfg9J7UTOJvgmYmxOkgU8qwOQm7msepSBT3yAedFgR0pBY5G', 'peserta', NULL, '2021-05-04 13:19:02', '2021-05-04 13:19:02'),
(12, 'Hafidh Ahmad Fauzan', 'hafidh@gmail.com', NULL, '$2y$10$jr1fJnOFc8OwbZmn.Ie5le/mz0pyvDxZOePtQWTKdaxTwl8Xyhm8C', 'peserta', NULL, '2021-05-05 03:57:29', '2021-05-05 03:57:29'),
(13, 'Google', 'Goggle@gmail.com', NULL, '$2y$10$pcVgdHZoHZOq9iOsiOdXM.vMmDNa3ggc5y5lDj2BVPGPmavkLfhya', 'industri', NULL, '2021-05-19 00:51:00', '2021-05-19 00:51:00'),
(14, 'haidar123', 'haidar5115@gmail.com', NULL, '$2y$10$TrDM2wb.qkxXUZnC09u3Uu1dOy6blabBOMpugElFjsAqls6dCkfxa', 'peserta', NULL, '2021-05-26 06:46:38', '2021-05-26 06:46:38'),
(18, 'gurimbull', 'aziizpranaja6@gmail.com', NULL, '$2y$10$NocGzUIXwCEuVYtrOMHkhuTBjSxP/5N6itQDNZOxB/fhrLAioV3ym', 'peserta', NULL, '2021-05-26 10:26:04', '2021-05-26 10:26:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `magang`
--
ALTER TABLE `magang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `magang_status_foreign` (`status`);

--
-- Indeks untuk tabel `magang_pembimbing`
--
ALTER TABLE `magang_pembimbing`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `magang_penguji`
--
ALTER TABLE `magang_penguji`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `magang_penilaian`
--
ALTER TABLE `magang_penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_status`
--
ALTER TABLE `m_status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembimbing`
--
ALTER TABLE `pembimbing`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penguji`
--
ALTER TABLE `penguji`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rating_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_nim_unique` (`nim`);

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
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `magang`
--
ALTER TABLE `magang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `magang_pembimbing`
--
ALTER TABLE `magang_pembimbing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `magang_penguji`
--
ALTER TABLE `magang_penguji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `magang_penilaian`
--
ALTER TABLE `magang_penilaian`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `m_status`
--
ALTER TABLE `m_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembimbing`
--
ALTER TABLE `pembimbing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penguji`
--
ALTER TABLE `penguji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `magang`
--
ALTER TABLE `magang`
  ADD CONSTRAINT `magang_status_foreign` FOREIGN KEY (`status`) REFERENCES `m_status` (`id`);

--
-- Ketidakleluasaan untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
