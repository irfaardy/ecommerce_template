-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2020 at 07:43 AM
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
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `nama_bank` varchar(60) NOT NULL,
  `atas_nama` varchar(65) NOT NULL,
  `rekening` varchar(120) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `nama_bank`, `atas_nama`, `rekening`, `created_at`, `updated_at`) VALUES
(1, 'BANK BCA', 'PT.DESAIN KREATIF KARYA CIPTA', '130-029-40234', '2020-07-30 09:28:02', '2020-07-30 09:30:59'),
(2, 'BANK BRI', 'PT.DESAIN KREATIF KARYA CIPTA', '5540-4054-32', '2020-07-30 09:28:02', '2020-07-30 09:30:56'),
(3, 'BANK MANDIRI', 'PT.DESAIN KREATIF KARYA CIPTA', '8849-3405-3', '2020-07-30 09:28:39', '2020-07-30 09:30:53'),
(4, 'BANK BNI', 'PT.DESAIN KREATIF KARYA CIPTA', '92031-2394-234', '2020-07-30 09:28:39', '2020-07-30 09:30:49');

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
-- Table structure for table `redeem`
--

CREATE TABLE `redeem` (
  `id` bigint(20) NOT NULL,
  `transaction_id` bigint(20) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `serial` varchar(60) DEFAULT NULL,
  `is_disabled` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redeem`
--

INSERT INTO `redeem` (`id`, `transaction_id`, `user_id`, `serial`, `is_disabled`, `created_at`, `updated_at`) VALUES
(1, 16, 1, 'nIs5-12Ii-IFZa-01iw', 0, '2020-07-31 18:07:49', '2020-07-31 18:07:49'),
(2, 17, 1, 'fThG-uXNB-tRv1-fjqB', 0, '2020-07-31 19:04:56', '2020-07-31 19:04:56'),
(3, 17, 1, 'Z0AH-CVOM-PKMH-CE3N', 0, '2020-07-31 20:24:13', '2020-07-31 20:24:13'),
(4, 18, 1, '7FD4-SEIE-VPI3-C591', 0, '2020-07-31 20:45:02', '2020-07-31 20:45:02'),
(5, 21, 1, 'PQTB-J0WH-SHJX-NPJ1', 0, '2020-07-31 22:39:20', '2020-07-31 22:39:20'),
(6, 22, 1, 'BDLE-KRYV-FC70-MLHM', 0, '2020-07-31 22:42:51', '2020-07-31 22:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bukti_transfer`
--

CREATE TABLE `tb_bukti_transfer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaksi_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `img_url_bukti` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_real_bukti` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_bukti_transfer`
--

INSERT INTO `tb_bukti_transfer` (`id`, `transaksi_id`, `user_id`, `img_url_bukti`, `img_real_bukti`, `created_at`, `updated_at`) VALUES
(2, 10, 1, '20200731_BUKTI-TF_1-10.jpg', '1596212000_BUKTI-TF_1-10.jpg', '2020-07-31 09:13:20', '2020-07-31 09:13:20'),
(3, 12, 1, '20200731_BUKTI-TF_1-12.jpg', '20200731_BUKTI-TF_1-12.jpg', '2020-07-31 09:48:16', '2020-07-31 09:48:16'),
(4, 11, 1, '20200731_BUKTI-TF_1-11.jpg', '20200731_BUKTI-TF_1-11.jpg', '2020-07-31 09:48:47', '2020-07-31 09:48:47'),
(5, 14, 1, '20200801_BUKTI-TF_1-14.jpg', '20200801_BUKTI-TF_1-14.jpg', '2020-07-31 17:23:58', '2020-07-31 17:23:58'),
(6, 15, 1, '20200801_BUKTI-TF_1-15.jpg', '20200801_BUKTI-TF_1-15.jpg', '2020-07-31 17:28:37', '2020-07-31 17:28:37'),
(7, 16, 1, '20200801_BUKTI-TF_1-16.jpg', '20200801_BUKTI-TF_1-16.jpg', '2020-07-31 18:08:02', '2020-07-31 18:08:02'),
(8, 17, 1, '20200801_BUKTI-TF_1-17.jpg', '20200801_BUKTI-TF_1-17.jpg', '2020-07-31 19:09:42', '2020-07-31 19:09:42'),
(9, 18, 1, '20200801_BUKTI-TF_1-18.jpeg', '20200801_BUKTI-TF_1-18.jpeg', '2020-07-31 20:44:34', '2020-07-31 20:44:34'),
(10, 21, 1, '20200801_BUKTI-TF_1-21.jpg', '20200801_BUKTI-TF_1-21.jpg', '2020-07-31 22:38:44', '2020-07-31 22:38:44'),
(11, 22, 1, '20200801_BUKTI-TF_1-22.jpg', '20200801_BUKTI-TF_1-22.jpg', '2020-07-31 22:42:35', '2020-07-31 22:42:35');

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
  `discount` float(12,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_details_transaksi`
--

INSERT INTO `tb_details_transaksi` (`id`, `transaksi_id`, `template_id`, `harga`, `discount`, `created_at`, `updated_at`) VALUES
(26, 16, 8, 50400.00, 60.00, '2020-07-31 18:07:49', '2020-07-31 18:07:49'),
(27, 17, 5, 110500.00, 35.00, '2020-07-31 19:04:56', '2020-07-31 19:04:56'),
(28, 18, 5, 110500.00, 35.00, '2020-07-31 20:43:50', '2020-07-31 20:43:50'),
(29, 18, 8, 50400.00, 60.00, '2020-07-31 20:43:51', '2020-07-31 20:43:51'),
(30, 19, 6, 70000.00, 0.00, '2020-07-31 21:33:11', '2020-07-31 21:33:11'),
(31, 20, 5, 110500.00, 35.00, '2020-07-31 21:53:57', '2020-07-31 21:53:57'),
(32, 21, 6, 70000.00, 0.00, '2020-07-31 22:38:32', '2020-07-31 22:38:32'),
(33, 22, 6, 70000.00, 0.00, '2020-07-31 22:42:18', '2020-07-31 22:42:18');

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
  `user_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(17, 6, 'c19RCzyFZehMaw9bjgjU8NnP0yNHzkfhKfP0hX6RQjaEGFyXXSzrNVKCvb2bOXckmKAAu0SZ2wnHV2bX', 'TEMPLATE_minimalist_.dotnet_app_20200726.zip', 933006.00, NULL, NULL, '2020-07-26 06:50:55', '2020-07-26 06:50:55'),
(18, 7, 'ABsv1H2W1TvrbZxXOUjpNrKWu66PsxFC0oVR8XnFDuhl0qN53W78IWyETQhCOyE0ESfeFXKTA8ucM1lM', 'TEMPLATE_mobile_minimal_20200729.zip', 341.00, NULL, NULL, '2020-07-29 11:39:23', '2020-07-29 11:39:23'),
(19, 8, 'hof17ZP7T0JrMNsO1JsC7w1PhNkmY0Jby0Oc6hvkGc6NqGcG4xY7PcwV9ZXgP7eWayI6VoR7J6ixr2tx', 'TEMPLATE_granite_20200730.rar', 256705.00, NULL, NULL, '2020-07-30 07:18:57', '2020-07-30 07:18:57');

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
  `terjual` int(11) DEFAULT '0',
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
(6, 'DSG23132', 'Minimalist .DotNet App', 1, 3, '<p>DESKTOP</p>', 'http://localhost/PROJEK%20Baru/ecommerce/public/backoffice/template/create', 70000.00, 0.00, 2, NULL, '1', '2020-07-26 06:50:55', '2020-07-31 22:42:51'),
(7, 'SK9201931022s', 'Mobile Minimal', 2, 3, '<h1>Hasil Telusur</h1>\r\n\r\n<h2>Hasil web</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><a href=\"https://fontawesome.com/v4.7.0/icon/shopping-cart\">fa-shopping-cart: Font Awesome Icons</a></h3>\r\n\r\n<p><a href=\"https://fontawesome.com/v4.7.0/icon/shopping-cart\"><cite>fontawesome.com &rsaquo; icon &rsaquo; sh...</cite></a></p>\r\n\r\n<p><a href=\"https://translate.google.com/translate?hl=id&amp;sl=en&amp;u=https://fontawesome.com/v4.7.0/icon/shopping-cart&amp;prev=search&amp;pto=aue\">Terjemahkan halaman ini</a></p>\r\n\r\n<p>Upgrade to version <em>5</em> and get twice the icons. Get the Latest ... fa-shopping-<em>cart</em> &middot; Unicode: f07a &middot; Created: v1.0 &middot; Categories: Web Application Icons. After you get&nbsp;...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><a href=\"https://fontawesome.com/privacy\">Font Awesome 6 Pre-order</a></h3>\r\n\r\n<p><a href=\"https://fontawesome.com/privacy\"><cite>fontawesome.com &rsaquo; privacy</cite></a></p>\r\n\r\n<p><a href=\"https://translate.google.com/translate?hl=id&amp;sl=en&amp;u=https://fontawesome.com/privacy&amp;prev=search&amp;pto=aue\">Terjemahkan halaman ini</a></p>\r\n\r\n<p>Get all of the pro icons + categories we&#39;ve released in Version <em>5</em>! 4 Icon Styles. Use our solid, regular, light, and duotone styles. And there&#39;s&nbsp;...</p>\r\n\r\n<p>&lrm;<a href=\"https://fontawesome.com/privacy#more-icons-styles\">More Styles</a> &middot; &lrm;<a href=\"https://fontawesome.com/privacy#more-services\">More Services</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><a href=\"https://fontawesome.com/v4.7.0/icon/cart-plus\">fa-cart-plus: Font Awesome Icons</a></h3>\r\n\r\n<p><a href=\"https://fontawesome.com/v4.7.0/icon/cart-plus\"><cite>fontawesome.com &rsaquo; icon &rsaquo; car...</cite></a></p>\r\n\r\n<p><a href=\"https://translate.google.com/translate?hl=id&amp;sl=en&amp;u=https://fontawesome.com/v4.7.0/icon/cart-plus&amp;prev=search&amp;pto=aue\">Terjemahkan halaman ini</a></p>\r\n\r\n<p>Upgrade to version <em>5</em> and get twice the icons. Get the Latest ... fa-<em>cart</em>-plus &middot; Unicode: f217 &middot; Created: v4.3 &middot; Categories: Web Application Icons. After you get up&nbsp;...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><a href=\"https://fontawesome.com/v4.7.0/icon/cart-arrow-down\">fa-cart-arrow-down: Font Awesome Icons</a></h3>\r\n\r\n<p><a href=\"https://fontawesome.com/v4.7.0/icon/cart-arrow-down\"><cite>fontawesome.com &rsaquo; icon &rsaquo; car...</cite></a></p>\r\n\r\n<p><a href=\"https://translate.google.com/translate?hl=id&amp;sl=en&amp;u=https://fontawesome.com/v4.7.0/icon/cart-arrow-down&amp;prev=search&amp;pto=aue\">Terjemahkan halaman ini</a></p>\r\n\r\n<p>Upgrade to version <em>5</em> and get twice the icons. Get the Latest ... fa-<em>cart</em>-arrow-down &middot; Unicode: f218 &middot; Created: v4.3 &middot; Categories: Web Application Icons. After you&nbsp;...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><a href=\"https://fontawesome.com/v4.7.0/icon/shopping-basket\">fa-shopping-basket: Font Awesome Icons</a></h3>\r\n\r\n<p><a href=\"https://fontawesome.com/v4.7.0/icon/shopping-basket\"><cite>fontawesome.com &rsaquo; icon &rsaquo; sh...</cite></a></p>\r\n\r\n<p><a href=\"https://translate.google.com/translate?hl=id&amp;sl=en&amp;u=https://fontawesome.com/v4.7.0/icon/shopping-basket&amp;prev=search&amp;pto=aue\">Terjemahkan halaman ini</a></p>\r\n\r\n<p>fa-shopping-basket &middot; Unicode: f291 &middot; Created: v4.<em>5</em> &middot; Categories: Web Application Icons. After you get up and running, you can place <em>Font Awesome</em> icons just&nbsp;...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><a href=\"https://fontawesome.com/v4.7.0/examples/\">Font Awesome Examples</a></h3>\r\n\r\n<p><a href=\"https://fontawesome.com/v4.7.0/examples/\"><cite>fontawesome.com &rsaquo; examples</cite></a></p>\r\n\r\n<p><a href=\"https://translate.google.com/translate?hl=id&amp;sl=en&amp;u=https://fontawesome.com/v4.7.0/examples/&amp;prev=search&amp;pto=aue\">Terjemahkan halaman ini</a></p>\r\n\r\n<p>Upgrade to version <em>5</em> and get twice the icons. ... aria-label=&quot;View 3 items in your shopping <em>cart</em>&quot;&gt; &lt;i class=&quot;fa fa-shopping-<em>cart</em>&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt; &lt;/a&gt;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><a href=\"https://fontawesome.com/v4.7.0/icon/shopping-bag\">fa-shopping-bag: Font Awesome Icons</a></h3>\r\n\r\n<p><a href=\"https://fontawesome.com/v4.7.0/icon/shopping-bag\"><cite>fontawesome.com &rsaquo; icon &rsaquo; sh...</cite></a></p>\r\n\r\n<p><a href=\"https://translate.google.com/translate?hl=id&amp;sl=en&amp;u=https://fontawesome.com/v4.7.0/icon/shopping-bag&amp;prev=search&amp;pto=aue\">Terjemahkan halaman ini</a></p>\r\n\r\n<p>fa-shopping-bag &middot; Unicode: f290 &middot; Created: v4.<em>5</em> &middot; Categories: Web Application Icons. After you get up and running, you can place <em>Font Awesome</em> icons just about&nbsp;...</p>', 'http://localhost/PROJEK%20Baru/ecommerce/public/', 170000.00, 23.00, NULL, NULL, '1', '2020-07-29 11:39:23', '2020-07-29 11:39:23'),
(8, 'GB12345', 'Granite', 1, 7, '<p>Desain</p>', 'http://localhost/PROJEK%20Baru/ecommerce/public/backoffice/template/create', 126000.00, 60.00, NULL, NULL, '1', '2020-07-30 07:18:57', '2020-07-30 07:18:57');

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
(6, 'Desktop', '<p>Desktop</p>', 0, '2020-07-23 19:34:01', '2020-07-23 19:34:01', NULL),
(7, 'DEALS OF THE DAY', NULL, 1, '2020-07-30 07:16:23', '2020-07-30 07:16:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `link` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_harga` double(12,2) NOT NULL,
  `metode_pembayaran` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verify` tinyint(1) NOT NULL,
  `timeout` bigint(20) NOT NULL,
  `alasan_batal` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_canceled` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `invoice`, `id_user`, `link`, `total_harga`, `metode_pembayaran`, `bank_id`, `is_verify`, `timeout`, `alasan_batal`, `is_canceled`, `deleted_at`, `updated_by`, `created_at`, `updated_at`) VALUES
(16, 'INV/2020/08/HULD', 1, 'a48b7da1-8a16-4d41-9287-268a542bce0e', 50400.00, 'TRANSFER', '3', 1, 1596330468, NULL, 0, NULL, '1', '2020-07-31 18:07:49', '2020-07-31 18:07:49'),
(17, 'INV/2020/08/3Q1Y', 1, 'ee4117d8-c0d9-4ca6-b629-fdf82090e972', 110500.00, 'TRANSFER', '1', 1, 1596333896, NULL, 0, NULL, '1', '2020-07-31 19:04:56', '2020-07-31 20:24:13'),
(18, 'INV/2020/08/IKI8', 1, '59f023c4-1402-4b13-8eda-ae67eb5f9dfa', 160900.00, 'TRANSFER', '1', 1, 1596339830, NULL, 0, NULL, '1', '2020-07-31 20:43:50', '2020-07-31 20:45:02'),
(19, 'INV/2020/08/1NCZ', 1, 'ee99e107-1d8e-4e8e-abdf-a3efe2b239d7', 70000.00, 'TRANSFER', '1', 0, 1596342791, 'Ingin mengganti produk yang dibeli', 1, NULL, '1', '2020-07-31 21:33:11', '2020-07-31 21:53:24'),
(20, 'INV/2020/08/H9ET', 1, 'c2765fe8-5487-4150-add0-3f8bc802e510', 110500.00, 'TRANSFER', '1', 0, 1596344036, 'Ingin mengganti metode pembayaran.', 1, NULL, '1', '2020-07-31 21:53:57', '2020-07-31 21:59:05'),
(21, 'INV/2020/08/AYDU', 1, '95f4171c-ff4c-4999-8ba4-036a4fdbc436', 70000.00, 'TRANSFER', '1', 1, 1596346712, NULL, 0, NULL, '1', '2020-07-31 22:38:32', '2020-07-31 22:39:20'),
(22, 'INV/2020/08/QNXV', 1, '4cb6ed14-6095-46bf-a375-d75975c4f6d2', 70000.00, 'TRANSFER', '1', 1, 1596346937, NULL, 0, NULL, '1', '2020-07-31 22:42:17', '2020-07-31 22:42:51');

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
(15, 6, '20200726_AaQPgftm_DSG23132.jpg', '1595771455_AaQPgftm_DSG23132.jpg', 'image/png', 244711, '2020-07-26 06:50:56', '2020-07-26 06:50:56'),
(16, 7, '20200729_QrTrUa18_SK9201931022s.jpg', '1596047963_QrTrUa18_SK9201931022s.jpg', 'image/jpeg', 74486, '2020-07-29 11:39:24', '2020-07-29 11:39:24'),
(17, 7, '20200729_XLiKFiPO_SK9201931022s.jpg', '1596047964_XLiKFiPO_SK9201931022s.jpg', 'image/png', 6717, '2020-07-29 11:39:24', '2020-07-29 11:39:24'),
(18, 7, '20200729_FamgC2y7_SK9201931022s.jpg', '1596047964_FamgC2y7_SK9201931022s.jpg', 'image/png', 21402, '2020-07-29 11:39:24', '2020-07-29 11:39:24'),
(19, 7, '20200729_kEzuxDct_SK9201931022s.jpg', '1596047964_kEzuxDct_SK9201931022s.jpg', 'image/png', 95577, '2020-07-29 11:39:25', '2020-07-29 11:39:25'),
(20, 8, '20200730_Sf5q5f84_GB12345.jpg', '1596118737_Sf5q5f84_GB12345.jpg', 'image/jpeg', 517972, '2020-07-30 07:18:59', '2020-07-30 07:18:59');

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
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `redeem`
--
ALTER TABLE `redeem`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `tb_transaksi_invoice_unique` (`invoice`),
  ADD UNIQUE KEY `link` (`link`);

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
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `redeem`
--
ALTER TABLE `redeem`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_bukti_transfer`
--
ALTER TABLE `tb_bukti_transfer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_data_diri`
--
ALTER TABLE `tb_data_diri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_details_transaksi`
--
ALTER TABLE `tb_details_transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_redeem_code`
--
ALTER TABLE `tb_redeem_code`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_shopping_cart`
--
ALTER TABLE `tb_shopping_cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tb_templates`
--
ALTER TABLE `tb_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_template_app`
--
ALTER TABLE `tb_template_app`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_template_platforms`
--
ALTER TABLE `tb_template_platforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_template_theme_cat`
--
ALTER TABLE `tb_template_theme_cat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `template_images`
--
ALTER TABLE `template_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
