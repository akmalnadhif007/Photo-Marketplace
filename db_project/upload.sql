-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Okt 2019 pada 06.47
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upload`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Event Marathon', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_02_012327_create_upload_table', 1),
(4, '2019_10_08_132243_create_tag_table', 1),
(5, '2019_10_09_343430_create_event_table', 1),
(6, '2019_10_10_134734_create_submit_table', 1),
(7, '2019_10_10_150512_create_submit_tag_table', 1),
(8, '2019_10_15_010232_create_submit_upload_table', 1);

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
-- Struktur dari tabel `submit`
--

CREATE TABLE `submit` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_event` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `submit`
--

INSERT INTO `submit` (`id`, `id_event`, `name`, `price`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 1, 'Marathon', 50000, 'Hidup Sehat', '2019-10-14 18:21:26', '2019-10-14 18:21:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `submit_tag`
--

CREATE TABLE `submit_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `submit_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `submit_tag`
--

INSERT INTO `submit_tag` (`id`, `submit_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `submit_upload`
--

CREATE TABLE `submit_upload` (
  `id` int(10) UNSIGNED NOT NULL,
  `submit_id` int(10) UNSIGNED NOT NULL,
  `upload_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `submit_upload`
--

INSERT INTO `submit_upload` (`id`, `submit_id`, `upload_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tag`
--

CREATE TABLE `tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tag`
--

INSERT INTO `tag` (`id`, `nama_tag`, `created_at`, `updated_at`) VALUES
(1, 'Olahraga', NULL, NULL),
(2, 'Indonesia', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload`
--

CREATE TABLE `upload` (
  `id` int(10) UNSIGNED NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `resized_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `upload`
--

INSERT INTO `upload` (`id`, `filename`, `resized_name`, `original_name`, `created_at`, `updated_at`) VALUES
(1, 'c91e33ff83b8d0382350cfb678f4ae6f060a62d0.jpg', 'c91e33ff83b8d0382350cfb678f4ae6f060a62d0YC.jpg', '6b51a23465dca9ee096a71d16443b7e0.jpg', '2019-10-14 18:21:04', '2019-10-14 18:21:04'),
(2, 'f672e8246d00a93692a6c43f24b440d5655a1122.jpg', 'f672e8246d00a93692a6c43f24b440d5655a1122iM.jpg', '96f15e0225cb66847509d5def9f3c4e5.jpg', '2019-10-14 18:21:05', '2019-10-14 18:21:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Akmal Nadhif Rabbani', 'akmalnadhif4@gmail.com', NULL, '$2y$10$d4R7NwjWT7YpAeL5LMbLm.8Z/NatcXtEigGOp/2egu.FLpp4oDFMa', NULL, '2019-10-14 18:20:21', '2019-10-14 18:20:21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `submit`
--
ALTER TABLE `submit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submit_id_event_foreign` (`id_event`);

--
-- Indeks untuk tabel `submit_tag`
--
ALTER TABLE `submit_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submit_tag_submit_id_foreign` (`submit_id`),
  ADD KEY `submit_tag_tag_id_foreign` (`tag_id`);

--
-- Indeks untuk tabel `submit_upload`
--
ALTER TABLE `submit_upload`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submit_upload_submit_id_foreign` (`submit_id`),
  ADD KEY `submit_upload_upload_id_foreign` (`upload_id`);

--
-- Indeks untuk tabel `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `upload`
--
ALTER TABLE `upload`
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
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `submit`
--
ALTER TABLE `submit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `submit_tag`
--
ALTER TABLE `submit_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `submit_upload`
--
ALTER TABLE `submit_upload`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `submit`
--
ALTER TABLE `submit`
  ADD CONSTRAINT `submit_id_event_foreign` FOREIGN KEY (`id_event`) REFERENCES `event` (`id`);

--
-- Ketidakleluasaan untuk tabel `submit_tag`
--
ALTER TABLE `submit_tag`
  ADD CONSTRAINT `submit_tag_submit_id_foreign` FOREIGN KEY (`submit_id`) REFERENCES `submit` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `submit_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `submit_upload`
--
ALTER TABLE `submit_upload`
  ADD CONSTRAINT `submit_upload_submit_id_foreign` FOREIGN KEY (`submit_id`) REFERENCES `submit` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `submit_upload_upload_id_foreign` FOREIGN KEY (`upload_id`) REFERENCES `upload` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
