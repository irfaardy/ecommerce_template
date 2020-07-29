-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2020 at 08:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desainin`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_08_002304_create_tb_data_diri', 1),
(5, '2020_07_08_003630_create_tb_template', 1),
(6, '2020_07_08_003708_create_tb_template_app', 1),
(7, '2020_07_08_003808_create_tb_tipe_template', 1),
(8, '2020_07_08_003833_create_tb_transaksi', 1),
(9, '2020_07_08_003949_create_tb_details_transaksi', 1),
(10, '2020_07_08_004014_create_tb_bukti_transfer', 1),
(11, '2020_07_08_004105_create_tb_shopping_cart', 1),
(12, '2020_07_08_004128_create_tb_redeem_code', 1),
(13, '2020_07_08_010708_create_tb_template_theme_cat', 1),
(14, '2020_07_13_115657_update_user', 2),
(15, '2020_07_23_134030_create_template_img', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bukti_transfer`
--

CREATE TABLE `tb_bukti_transfer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaksi_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `jumlah` double(12,2) NOT NULL,
  `img_url_bukti` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_real_bukti` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_diri`
--

CREATE TABLE `tb_data_diri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` bigint(20) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_details_transaksi`
--

CREATE TABLE `tb_details_transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaksi_id` bigint(20) NOT NULL,
  `template_id` bigint(20) NOT NULL,
  `harga` double(12,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_redeem_code`
--

CREATE TABLE `tb_redeem_code` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `redeem_code` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaksi_id` bigint(20) NOT NULL,
  `template_id` bigint(20) NOT NULL,
  `is_disabled` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_shopping_cart`
--

CREATE TABLE `tb_shopping_cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `template_id` bigint(20) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_shopping_cart`
--

INSERT INTO `tb_shopping_cart` (`id`, `template_id`, `deleted_at`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 6, NULL, NULL, '2020-07-29 11:12:42', '2020-07-29 11:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `tb_templates`
--

CREATE TABLE `tb_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `template_id` bigint(20) NOT NULL,
  `link_download` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `real_path` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` double(12,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_templates`
--

INSERT INTO `tb_templates` (`id`, `template_id`, `link_download`, `real_path`, `size`, `deleted_at`, `updated_by`, `created_at`, `updated_at`) VALUES
(16, 5, 'FMOS5bJYlZiNdXaYRWNgqCJHxzkfPbRgAs2DitGw63Vv2Db3VtuMKtIPYq9Xz6MFVetALfuLudeR28tn', 'TEMPLATE_premium_material_dashboard_20200726.zip', 5173.00, NULL, NULL, '2020-07-26 06:48:46', '2020-07-26 06:48:46'),
(17, 6, 'c19RCzyFZehMaw9bjgjU8NnP0yNHzkfhKfP0hX6RQjaEGFyXXSzrNVKCvb2bOXckmKAAu0SZ2wnHV2bX', 'TEMPLATE_minimalist_.dotnet_app_20200726.zip', 933006.00, NULL, NULL, '2020-07-26 06:50:55', '2020-07-26 06:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_template_app`
--

CREATE TABLE `tb_template_app` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sku` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `theme_id` bigint(20) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_demo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(12,2) NOT NULL DEFAULT '0.00',
  `discount` double(12,2) NOT NULL DEFAULT '0.00',
  `terjual` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_template_app`
--

INSERT INTO `tb_template_app` (`id`, `sku`, `nama`, `category_id`, `theme_id`, `deskripsi`, `link_demo`, `price`, `discount`, `terjual`, `deleted_at`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, 'WB11', 'Premium Material Dashboard', 3, 3, '<p>dadasda</p>', 'http://localhost/PROJEK%20Baru/ecommerce/public/', 170000.00, 35.00, NULL, NULL, '1', '2020-07-26 06:48:46', '2020-07-26 06:48:46'),
(6, 'DSG23132', 'Minimalist .DotNet App', 1, 3, '<p>DESKTOP</p>', 'http://localhost/PROJEK%20Baru/ecommerce/public/backoffice/template/create', 70000.00, 0.00, NULL, NULL, '1', '2020-07-26 06:50:55', '2020-07-26 06:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_template_platforms`
--

CREATE TABLE `tb_template_platforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `hidden_from_category` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_template_platforms`
--

INSERT INTO `tb_template_platforms` (`id`, `nama`, `deskripsi`, `hidden_from_category`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Desktop', NULL, 0, NULL, '2020-07-23 19:35:30', '2020-07-23 19:35:30'),
(2, 'Mobile', '<h2 style=\"font-style:italic;\">ddasda</h2>', 0, NULL, '2020-07-23 19:36:12', '2020-07-23 19:36:12'),
(3, 'Web', NULL, 0, NULL, '2020-07-26 06:47:45', '2020-07-26 06:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `tb_template_theme_cat`
--

CREATE TABLE `tb_template_theme_cat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `hidden_from_category` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_template_theme_cat`
--

INSERT INTO `tb_template_theme_cat` (`id`, `nama`, `deskripsi`, `hidden_from_category`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Company', '<p>Company Profile</p>', 0, '2020-07-23 18:24:25', '2020-07-23 18:24:25', NULL),
(3, 'Minimalist', '<p>aaa</p>', 0, '2020-07-23 18:25:44', '2020-07-23 18:27:25', NULL),
(4, 'E-Commerce', NULL, 0, '2020-07-23 18:27:45', '2020-07-23 18:27:45', NULL),
(5, 'Promo', '<p>Promosi&nbsp; Diskon 50%</p>', 1, '2020-07-23 18:28:26', '2020-07-23 18:28:26', NULL),
(6, 'Desktop', '<p>Desktop</p>', 0, '2020-07-23 19:34:01', '2020-07-23 19:34:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `total_harga` double(12,2) NOT NULL,
  `metode_pembayaran` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verify` tinyint(1) NOT NULL,
  `is_canceled` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template_images`
--

CREATE TABLE `template_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `template_id` bigint(20) NOT NULL,
  `realpath` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `url` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `mime` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_images`
--

INSERT INTO `template_images` (`id`, `template_id`, `realpath`, `url`, `mime`, `size`, `created_at`, `updated_at`) VALUES
(13, 5, '20200726_LG47H4oh_WB11.jpg', '1595771326_LG47H4oh_WB11.jpg', 'image/png', 232723, '2020-07-26 06:48:47', '2020-07-26 06:48:47'),
(14, 5, '20200726_X8DUo2gv_WB11.jpg', '1595771327_X8DUo2gv_WB11.jpg', 'image/png', 198266, '2020-07-26 06:48:48', '2020-07-26 06:48:48'),
(15, 6, '20200726_AaQPgftm_DSG23132.jpg', '1595771455_AaQPgftm_DSG23132.jpg', 'image/png', 244711, '2020-07-26 06:50:56', '2020-07-26 06:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'irfa', 'irfardy2@gmail.com', NULL, '$2y$10$o.Cvm/Yd/9224VBGNhG5w.6x4TIe6h18whEuSjCz6ooXi/.SNAC6S', '4', NULL, '2020-07-13 05:18:16', '2020-07-13 05:18:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tb_bukti_transfer`
--
ALTER TABLE `tb_bukti_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_data_diri`
--
ALTER TABLE `tb_data_diri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_details_transaksi`
--
ALTER TABLE `tb_details_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_redeem_code`
--
ALTER TABLE `tb_redeem_code`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_redeem_code_redeem_code_unique` (`redeem_code`);

--
-- Indexes for table `tb_shopping_cart`
--
ALTER TABLE `tb_shopping_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_templates`
--
ALTER TABLE `tb_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_template_app`
--
ALTER TABLE `tb_template_app`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_template_app_sku_unique` (`sku`);

--
-- Indexes for table `tb_template_platforms`
--
ALTER TABLE `tb_template_platforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_template_theme_cat`
--
ALTER TABLE `tb_template_theme_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_transaksi_invoice_unique` (`invoice`);

--
-- Indexes for table `template_images`
--
ALTER TABLE `template_images`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_bukti_transfer`
--
ALTER TABLE `tb_bukti_transfer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_data_diri`
--
ALTER TABLE `tb_data_diri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_details_transaksi`
--
ALTER TABLE `tb_details_transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_redeem_code`
--
ALTER TABLE `tb_redeem_code`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_shopping_cart`
--
ALTER TABLE `tb_shopping_cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_templates`
--
ALTER TABLE `tb_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_template_app`
--
ALTER TABLE `tb_template_app`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_template_platforms`
--
ALTER TABLE `tb_template_platforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_template_theme_cat`
--
ALTER TABLE `tb_template_theme_cat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_images`
--
ALTER TABLE `template_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
