-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 09:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photography`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `paket_id` varchar(255) NOT NULL,
  `tgl_booking` varchar(255) NOT NULL,
  `jam_booking` varchar(255) NOT NULL,
  `jam_selesai` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `customer_id`, `paket_id`, `tgl_booking`, `jam_booking`, `jam_selesai`, `total`, `bukti`, `catatan`, `status`, `created_at`, `updated_at`) VALUES
(1, '11', '1', '2023-07-28', '06:18', '12:18', '30000000', 'upload-bukti/fAktjMarpKNEVEgrUvzT27qb36XsotJ1d5bbnOAC.png', '', 'Konfirmasi', '2023-07-18 12:18:49', '2023-07-20 21:00:28'),
(2, '11', '1', '2023-07-26', '06:25', '12:25', '30000000', 'upload-bukti/79dg2x9U7Ll7tlu8PCSX90kUXk99yhX5Kas5iJG4.png', 'dawdawdawdawd', 'Ditolak', '2023-07-18 12:22:12', '2023-07-20 20:56:09'),
(3, '11', '1', '2023-07-31', '00:33', '06:33', '30000000', 'upload-bukti/KjOi1YVlJnroTzwQvM7GDX1So3ooXY02qlvJPrH8.png', 'PAKET SAJA', 'Menunggu Konfirmasi', '2023-07-20 20:32:17', '2023-07-20 20:33:11'),
(4, '12', '1', '2023-08-03', '13:56', '19:56', '30000000', 'upload-bukti/Myuci6gEldvRkWSO5eYwIVw9KCwzNA9yqSP9KDgh.png', 'joni', 'Konfirmasi', '2023-07-20 20:54:26', '2023-07-20 21:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `nama_customer`, `jk`, `alamat`, `email`, `telepon`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '55036', 'Prof. Madeline Shields', 'male', '947 Yazmin Stream Suite 064\nGorczanyville, ID 44578', 'xhane@example.com', '(248) 407-4030', 'Ms. Mariane Bayer', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KX9hCgcXw3', '2023-07-14 11:16:45', '2023-07-14 11:16:45'),
(2, '25293', 'Prof. Kira Brakus', 'male', '41091 Amelia Shoal Apt. 534\nSouth Dewayne, MT 16346-4226', 'carroll.donald@example.net', '205-941-3242', 'Rosario Terry', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ViQJeo5r6L', '2023-07-14 11:16:45', '2023-07-14 11:16:45'),
(3, '41334', 'Gladys Pagac', 'female', '354 Jakubowski Points\nLake Andrew, MN 02490-7424', 'towne.katelyn@example.net', '1-937-240-5083', 'John Tillman', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'awR8P1lGnw', '2023-07-14 11:16:45', '2023-07-14 11:16:45'),
(4, '39279', 'Prof. Brad DuBuque', 'female', '845 Theodora River Apt. 326\nHowelltown, WA 04954-4108', 'imarvin@example.com', '309.390.6993', 'Dax Homenick', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '56HUEc5GTK', '2023-07-14 11:16:45', '2023-07-14 11:16:45'),
(5, '26702', 'Emery Bode', 'female', '4223 Bosco Garden\nWest David, KS 41996-5828', 'hammes.bertha@example.com', '1-737-731-1586', 'Veda O\'Keefe', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Jn8hncjz7R', '2023-07-14 11:16:45', '2023-07-14 11:16:45'),
(6, '42807', 'Prof. Margie Rohan DDS', 'male', '49376 Flavio Corners\nLorenaville, MS 80732-1654', 'idella32@example.net', '1-423-233-6050', 'Obie Schmeler', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vmj0fJ0qHP', '2023-07-14 11:16:45', '2023-07-14 11:16:45'),
(7, '99938', 'Madonna Vandervort', 'female', '1999 Noemi Heights\nNorth Hosea, WA 64647-8140', 'rfeest@example.org', '1-253-317-8304', 'Mr. Lewis Spinka PhD', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Hdu1oz5p4U', '2023-07-14 11:16:45', '2023-07-14 11:16:45'),
(8, '80130', 'Miss Myrtice Hamill DVM', 'male', '19008 Arno Junction Apt. 797\nEichmanntown, SC 27328', 'bondricka@example.org', '+14585338775', 'Miss Kari Wiegand IV', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'u0y6wDS4Mc', '2023-07-14 11:16:45', '2023-07-14 11:16:45'),
(9, '86582', 'Tre Collier', 'male', '5742 Vandervort Plain\nAlessiamouth, PA 58727-6393', 'hauck.naomi@example.net', '(360) 248-7467', 'Kelton Walker', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dTpljN1yR3', '2023-07-14 11:16:45', '2023-07-14 11:16:45'),
(10, '59813', 'Deven McCullough', 'female', '552 Pablo Meadows\nKianbury, AR 76946-4441', 'jonathan36@example.com', '(317) 300-1827', 'Emmy Schumm', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NRhAvN4mnH', '2023-07-14 11:16:45', '2023-07-14 11:16:45'),
(11, '5', 'testedapp', 'Laki-Laki', 'Thehok', 'tester@tester.com', '08952112312322', 'tester', '$2y$10$DcP2t7tH07AlLSnz1NaaX.GSGuz.XYS1qwE7LZk.NdY2knC6PzVn.', NULL, '2023-07-17 06:56:39', '2023-07-17 06:56:39'),
(12, '6', 'Johni', 'Laki-Laki', 'jambi', 'joni12@gmail.com', '08921812313123', 'johni123', '$2y$10$FaXZZ9ifH6uXmYNRWYzfleLkDAy6yzc7LN.GWYpTeAzi8pECXqFBu', NULL, '2023-07-20 20:47:51', '2023-07-20 20:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeries`
--

CREATE TABLE `galeries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeries`
--

INSERT INTO `galeries` (`id`, `judul`, `kegiatan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Photo1', 'Wedding', 'upload-foto/iSznvvbrs5ld6fNZS5ev7R64JBcMRBxH2XlkWGLa.jpg', '2023-07-18 11:56:36', '2023-07-18 11:56:36'),
(2, 'Photo2', 'Wedding', 'upload-foto/7J9oI55aOhPBGPKwoEtO9Cn7qT6RTlTH5nMvbtgh.jpg', '2023-07-18 11:56:36', '2023-07-18 11:56:36'),
(3, 'Photo3', 'Wedding', 'upload-foto/NwpJ2F0wqHZUPhxZXIiVtmrGAJ3SgTPteOdWSk3m.jpg', '2023-07-18 11:56:36', '2023-07-18 11:56:36'),
(4, 'Photo4', 'Wedding', 'upload-foto/wcOWSAYzeBTDWVoJuPUslCARPc82n1CDRU8LYN0K.jpg', '2023-07-18 11:56:36', '2023-07-18 11:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_13_072328_create_pakets_table', 1),
(6, '2022_09_13_083623_create_customers_table', 1),
(7, '2022_09_13_083637_create_bookings_table', 1),
(8, '2022_12_13_071023_create_notifications_table', 1),
(9, '2023_01_07_080146_create_profils_table', 1),
(10, '2023_01_07_080353_create_teams_table', 1),
(11, '2023_01_07_080826_create_galeries_table', 1),
(12, '2023_01_07_090630_rekenings', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pakets`
--

CREATE TABLE `pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `jumlah_jam` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pakets`
--

INSERT INTO `pakets` (`id`, `nama_paket`, `harga`, `jumlah_jam`, `keterangan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Wedding', '4500000', '12', 'Unlimited Photo   \r\n1 Set Lighting    \r\nCetak 120 Foto    \r\nCetak 1 Foto 22r  \r\nVideo Dokumentasi \r\nVideo Teaser Wedding\r\n1 Album Exclusive  \r\nFlashdisk All File \r\nCetak Foto 22r (Free)', 'upload-foto/AiDbIGF8W8aGEPLw8gSiYhGXZpgTcMm9NTGfQUMW.jpg', '2023-07-18 12:07:07', '2023-07-18 12:07:07'),
(2, 'Prewedding', '2000000', '6', '2 Cetak Photo 22r Edit + Frame Photo\r\n5 Cetak Foto 4r Edit + Frame Photo\r\nVideo Invitation Wedding\r\nMaks. 2 Lokasi Photo\r\nFlashdisk All File', 'upload-foto/NwpJ2F0wqHZUPhxZXIiVtmrGAJ3SgTPteOdWSk3m.jpg', '2023-07-18 12:07:07', '2023-07-18 12:07:07'),
(3, 'Engagement', '2000000', '6', 'Unlimited Photo\r\nEdit Foto 50 File\r\nVideo Highlight \r\nFlashdisk All File\r\nEdit Foto Pilihan', 'upload-foto/wcOWSAYzeBTDWVoJuPUslCARPc82n1CDRU8LYN0K.jpg', '2023-07-18 12:07:07', '2023-07-18 12:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rekenings`
--

CREATE TABLE `rekenings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank` varchar(255) NOT NULL,
  `atas_nama` varchar(255) NOT NULL,
  `rekening` varchar(255) NOT NULL,
  `foto_bank` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekenings`
--

INSERT INTO `rekenings` (`id`, `bank`, `atas_nama`, `rekening`, `foto_bank`, `created_at`, `updated_at`) VALUES
(1, 'bsi', 'asdaad', '21412414124142', 'upload-foto_bank/qYHzTru6aZnznE0m33GeAIWbczBrvVRAt84xN3Bp.png', '2023-07-18 12:08:00', '2023-07-18 12:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `nama`, `jk`, `telepon`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `posisi`, `foto`, `created_at`, `updated_at`) VALUES
(6, 'M. Zahlan Nugraha', 'Laki-Laki', '0895611621628', 'Kebun Kopi\r\nJambi, 35/08', 'Jambi', '2001-01-03', 'Founder/Photographer', 'upload-foto/Q6Mr8qymbbWYwl5pq1o7MUHn448agoJXfWPZTCiX.jpg', '2023-07-18 08:32:54', '2023-07-22 10:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `level`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lewis Kohler', 'alayna.kulas@example.net', 'Kepala Sekolah', 'rosalia78', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wvx3SQu1pX', '2023-07-14 11:16:45', '2023-07-14 11:16:45'),
(2, 'Mr. Rolando Hamill III', 'asia68@example.net', 'Kepala Sekolah', 'dejuan.rosenbaum', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2glSTIgJhM', '2023-07-14 11:16:45', '2023-07-14 11:16:45'),
(3, 'Mr. Carroll Hickle Sr.', 'lafayette.wiegand@example.net', 'Kepala Sekolah', 'hkilback', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ahy0S2hfTA', '2023-07-14 11:16:45', '2023-07-14 11:16:45'),
(4, 'Admin', 'admin@gmail.com', 'Administrator', 'admin', '$2y$10$is6P5bIotLvKAiFSmzrIyeZHof4DYmsiKAeXJYbH.vCU.fQKASiPO', NULL, '2023-07-14 11:16:45', '2023-07-14 11:16:45'),
(5, 'testedapp', 'tester@tester.com', 'Customer', 'tester', '$2y$10$8KwtHwgrpoMzcurC8.jDNuO3krOvySbMl/oSS2QJcfoyBpPT6gdw6', NULL, '2023-07-17 06:56:39', '2023-07-17 06:56:39'),
(6, 'Johni', 'joni12@gmail.com', 'Customer', 'johni123', '$2y$10$3N48sjCQ3Mvbt5NgKh/rg.nBnizY6/tKf5zGs42ilTr6IvI1lJgb2', NULL, '2023-07-20 20:47:51', '2023-07-20 20:47:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_username_unique` (`username`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeries`
--
ALTER TABLE `galeries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `pakets`
--
ALTER TABLE `pakets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekenings`
--
ALTER TABLE `rekenings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeries`
--
ALTER TABLE `galeries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekenings`
--
ALTER TABLE `rekenings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
