-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2016 at 06:43 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Lapangan 1', '2016-10-25 17:20:16', '2016-10-25 17:20:16'),
(2, 'Lapangan 2', '2016-10-25 17:20:16', '2016-10-25 17:20:16'),
(3, 'Lapangan 3', '2016-10-25 17:20:16', '2016-10-25 17:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `dsparings`
--

CREATE TABLE `dsparings` (
  `id` int(10) UNSIGNED NOT NULL,
  `sparings_id` int(11) NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `pesan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lapangans`
--

CREATE TABLE `lapangans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `informasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lapangans`
--

INSERT INTO `lapangans` (`id`, `nama`, `lokasi`, `informasi`, `created_at`, `updated_at`) VALUES
(1, 'Lapangan 1', 'Fatma', 'Sukses 1', '2016-10-25 17:20:17', '2016-10-25 17:20:17'),
(2, 'Lapangan 2', 'Fatma', 'Sukses 2', '2016-10-25 17:20:17', '2016-10-25 17:20:17'),
(3, 'Lapangan 3', 'Fatma', 'Sukses 3', '2016-10-25 17:20:17', '2016-10-25 17:20:17'),
(4, 'Lapangan 4', 'Fatma', 'Sukses 4', '2016-10-25 17:20:17', '2016-10-25 17:20:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(323, '2014_10_12_000000_create_users_table', 1),
(324, '2014_10_12_100000_create_password_resets_table', 1),
(325, '2016_10_12_123246_create_authors_table', 1),
(326, '2016_10_12_123317_create_tandings_table', 1),
(327, '2016_10_12_155503_laratrust_setup_tables', 1),
(328, '2016_10_17_022745_create_sparings_table', 1),
(329, '2016_10_17_031452_create_lapangans_table', 1),
(330, '2016_10_18_011959_create_dsparings_table', 1),
(331, '2016_10_26_004339_create_sparing_logs_table', 1),
(332, '2016_10_28_013832_create_informasi_table', 2),
(333, '2016_10_28_015105_create_galeri_table', 3),
(336, '2016_10_31_081222_create_informasis_table', 4),
(343, '2016_10_31_135147_create_informasis_table', 5),
(344, '2016_10_31_135155_create_galeris_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', NULL, '2016-10-25 17:20:16', '2016-10-25 17:20:16'),
(2, 'member', 'Member', NULL, '2016-10-25 17:20:16', '2016-10-25 17:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sparings`
--

CREATE TABLE `sparings` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `lapangan_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `konsekuensi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sparings`
--

INSERT INTO `sparings` (`id`, `users_id`, `lapangan_id`, `tanggal`, `jam`, `konsekuensi`, `status`, `created_at`, `updated_at`) VALUES
(5, 5, 1, '2016-11-08', '00:12:00', 'qwerty', 'qwerty', '2016-11-08 00:07:14', '2016-11-08 00:07:30'),
(6, 6, 1, '2016-11-08', '00:12:00', 'asdf', 'adff', '2016-11-08 00:15:08', '2016-11-08 00:15:08'),
(7, 7, 3, '2016-11-10', '00:12:00', 'Kalah Bayar', 'Persahabatan', '2016-11-10 07:20:30', '2016-11-10 07:20:30');

-- --------------------------------------------------------

--
-- Table structure for table `sparing_logs`
--

CREATE TABLE `sparing_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `sparing_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `is_returned` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sparing_logs`
--

INSERT INTO `sparing_logs` (`id`, `sparing_id`, `user_id`, `is_returned`, `created_at`, `updated_at`) VALUES
(12, 5, 6, 0, '2016-11-08 00:36:13', '2016-11-08 00:36:13'),
(13, 5, 7, 0, '2016-11-10 07:20:55', '2016-11-10 07:20:55'),
(14, 7, 6, 0, '2016-11-10 08:05:48', '2016-11-10 08:05:48'),
(15, 5, 6, 0, '2016-11-10 08:45:46', '2016-11-10 08:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `tandings`
--

CREATE TABLE `tandings` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `waktu` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tandings`
--

INSERT INTO `tandings` (`id`, `nama`, `author_id`, `waktu`, `created_at`, `updated_at`) VALUES
(1, 'Persahabatan', 1, '2016-10-01', '2016-10-25 17:20:17', '2016-10-25 17:20:17'),
(2, 'Turnament', 2, '2016-09-01', '2016-10-25 17:20:17', '2016-10-25 17:20:17'),
(3, 'Kantor', 3, '2016-08-01', '2016-10-25 17:20:17', '2016-10-25 17:20:17'),
(4, 'Keluarga', 3, '2016-07-01', '2016-10-25 17:20:17', '2016-10-25 17:20:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tentang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isi` text CHARACTER SET utf8,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `lokasi`, `tentang`, `gambar`, `isi`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Maju Fc', 'maju@gmail.com', '$2y$10$Z2Fn.sRaJVGGRjVzUt77qeqPmURVl3.WnFIpU1A.flCN65jO3DeLq', 'Samarinda', 'Tim Promosi', '1ca9691afdde42855480da9f48473839.png', NULL, 'NE1nyGCYbzPosvzryh5VrK1BoOCfBdk1lrCsXaNHL37scRsU9s7wHYdrY7tQ', '2016-11-07 23:38:32', '2016-11-10 10:28:50'),
(6, 'Mundur Fc', 'mundur@gmail.com', '$2y$10$2hPSuItJeje1ts2h..YlEOCsyXQHn8ReolPUAFNrci1pN8KNod46G', 'Samarinda', 'Semoga Berhasil', '1c5b70b925d637e7f4b4528bb156edab.png', '<p><strong>Manajer : Rifani</strong></p>\r\n<p>Kiper : Hasbi</p>\r\n<p>Bek : Rifqy</p>\r\n<p>Tengah : Agus</p>\r\n<p>Tengah : Shandy</p>\r\n<p>Striker : Abong</p>\r\n<p>&nbsp;<img src="../../image/teknik4.jpg" width="373" height="243" /></p>', 'En4yCDAnSevpxyeoh8JBRCFRYAo0xy3dLuhLz8n0tmadsEKj4QvQ3qNjjKrp', '2016-11-08 00:14:43', '2016-11-11 01:41:36'),
(7, 'Tengah Fc', 'tengah@gmail.com', '$2y$10$qtc16bR0VkGfaWHqW0wQFeC9gzQ6kdMOKCuFpToyYy.mD/2xQMSpO', 'Samarinda', 'TIm Papan Tengah', 'f4203168325d86ee935433296e6af94e.png', '<p>Manajer : Anceloti</p>', 'kEET1l4ElqlNIXjSPWoScU7EOSD4fKhrq2Mk7tvfI5tvUv5vA35GYQbbMogG', '2016-11-10 07:19:57', '2016-11-11 01:36:21'),
(8, 'Ini Fc', 'ini@gmail.com', '$2y$10$7Z4pBPgDBhwxtBUBGlJ66uxkzavREAaHjSbkLeWw2b2dH8Ag1kDwy', 'Tenggarong', 'Ini Fc', 'ab2d35448407a6507eedf976ef6e7239.png', NULL, 'HmAF9u02CoxaAuFwyqhVopZZnE4foXnjUy3my1vtR5S5gORXv6aYEa8axZLh', '2016-11-11 00:26:51', '2016-11-11 00:27:01'),
(9, 'Sip Fc', 'sip@gmail.com', '$2y$10$WPMOh0zlMFwdcCopaIT1SOtHuCj2deZBeLu5KGWAzZyPCLT8gkecG', 'Tenggarong', 'Sip Aja', '272c1826ea354f9e80e23ecd4f32320b.png', NULL, 'y0grpmk4ychYS6bG9mcaeWZlfnd3Gl01ZXOtBGmxYl4JiNhh29LBeyH60Et0', '2016-11-11 00:46:44', '2016-11-11 00:46:48'),
(10, 'Liv Fc', 'liv@gmail.com', '$2y$10$pROzokbtwl5vb8C.n/vqu.WW2N7RkpF2ZCpxItmnBiCjk5JdFMHUO', 'Tenggarong', 'Liv Aja', 'c20fa001d301a42bc055570b54be7bef.png', NULL, 'qKqc5uoO9JnX5t381A6BSr8DOpSNOaHcsaKIOeYLNOGgiVfdZuowdiD1j7UK', '2016-11-11 00:48:15', '2016-11-11 00:48:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dsparings`
--
ALTER TABLE `dsparings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dsparings_users_id_foreign` (`users_id`);

--
-- Indexes for table `lapangans`
--
ALTER TABLE `lapangans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `sparings`
--
ALTER TABLE `sparings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sparings_users_id_foreign` (`users_id`);

--
-- Indexes for table `sparing_logs`
--
ALTER TABLE `sparing_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sparing_logs_sparing_id_index` (`sparing_id`),
  ADD KEY `sparing_logs_user_id_index` (`user_id`);

--
-- Indexes for table `tandings`
--
ALTER TABLE `tandings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tandings_author_id_foreign` (`author_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dsparings`
--
ALTER TABLE `dsparings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lapangans`
--
ALTER TABLE `lapangans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=345;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sparings`
--
ALTER TABLE `sparings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sparing_logs`
--
ALTER TABLE `sparing_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tandings`
--
ALTER TABLE `tandings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dsparings`
--
ALTER TABLE `dsparings`
  ADD CONSTRAINT `dsparings_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sparings`
--
ALTER TABLE `sparings`
  ADD CONSTRAINT `sparings_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sparing_logs`
--
ALTER TABLE `sparing_logs`
  ADD CONSTRAINT `sparing_logs_sparing_id_foreign` FOREIGN KEY (`sparing_id`) REFERENCES `sparings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sparing_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tandings`
--
ALTER TABLE `tandings`
  ADD CONSTRAINT `tandings_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
