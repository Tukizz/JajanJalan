-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Nov 2017 pada 08.41
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `adminId` int(10) UNSIGNED NOT NULL,
  `adminName` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`adminId`, `adminName`, `address`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dandy', 'Cibiru', 'dandyforze@gmail.com', '$2y$10$tpFz76EjmUyHYAiFWpszsudgbh4V2PFiVE68OxHLzTQ4WZ1NGkzDK', 'cgoD61QwHAqVa4duES62wyD0pUOOh6bU8MkfTHz7mGTiBPC8sYMF4rD5gEBW', NULL, NULL),
(2, 'Ateng', 'Warged', 'atengsabari@gmail.com', '$2y$10$tpFz76EjmUyHYAiFWpszsudgbh4V2PFiVE68OxHLzTQ4WZ1NGkzDK', NULL, '2017-07-28 01:12:54', '2017-07-28 01:12:54');

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
(2, '2014_10_12_100000_create_password_resets_table', 2),
(3, '2017_07_14_040953_create_jajanjalan_table', 2),
(4, '2017_07_17_043722_create_users_table', 3),
(5, '2017_07_24_065437_create_admin_table', 4),
(6, '2017_07_25_084604_create_roles_table', 5),
(7, '2017_07_25_084615_create_role_admins_table', 6),
(8, '2017_07_25_085648_Etable', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mi_branch`
--

CREATE TABLE `mi_branch` (
  `branchId` int(10) UNSIGNED NOT NULL,
  `branchName` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branchAddress` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branchContactName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branchContactNo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branchVenue` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branchPicture` text COLLATE utf8mb4_unicode_ci,
  `branchCategory` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branchVoucher` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branchTradingHours` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branchNews` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branchPointRules` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyIdFK` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branchEnteredById` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membershipValidFrom` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membershipValidUntil` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mi_branch`
--

INSERT INTO `mi_branch` (`branchId`, `branchName`, `branchAddress`, `branchContactName`, `branchContactNo`, `branchVenue`, `branchPicture`, `branchCategory`, `branchVoucher`, `branchTradingHours`, `branchNews`, `branchPointRules`, `companyIdFK`, `branchEnteredById`, `membershipValidFrom`, `membershipValidUntil`, `created_at`, `updated_at`) VALUES
(1, 'Restoran Yahuy', 'Jl. Sindang Reret Barat', 'Dandy', '085749812444', 'Jakarta', '1501748414.jpg', '5', NULL, 'Jam 5', 'Kabar Baruw', 'Sarapan', '4', 'mdandyc', NULL, NULL, NULL, '2017-09-04 23:41:48'),
(4, 'Bistro Cafe', 'Warung Gede', 'Dandy', '085749812444', 'Jakarta', NULL, '8', 'Diskon 50%', '5PM - 4AM', NULL, 'No Smoking', '6', 'mdandyc', 'Day', 'Sekarang', '2017-07-18 01:38:55', '2017-07-18 02:37:00'),
(9, 'Monjoli', 'Sadang', 'Fajar', '0851626266', 'Surabaya', '1504082302.jpg', '2', NULL, '5AM-6PM', NULL, 'Makan Siang', '7', 'louisjon', NULL, NULL, '2017-07-31 01:44:23', '2017-08-30 01:38:22'),
(10, 'Hogito Mimori', 'Cinunuk', 'Dandy', '0851626266', 'Surabaya', '1501592026.jpg', '3', NULL, '5AM-6PM', 'ade', 'Makan Malam', '7', 'louisjon', NULL, NULL, '2017-07-31 01:45:00', '2017-08-30 01:41:29'),
(11, 'Night Bar', 'Jl. Manglayang Sebalahsana', 'Dandy', '0814657744', 'Surabaya', NULL, '5', NULL, '5PM - 4AM', NULL, 'Restoran Pesan Antar', '7', 'louisjon', NULL, NULL, '2017-08-01 05:36:27', '2017-08-30 01:15:43'),
(12, 'Crown Cafe', 'Cipadung Raya', 'Dandy', '085646541', 'Surabaya', '1501592122.jpg', '4', NULL, '5PM - 4AM', NULL, 'Kafe dan Deli', '7', 'louisjon', NULL, NULL, '2017-08-01 05:55:22', '2017-08-30 01:15:56'),
(13, 'Beef Store', 'Jl. Pahlawan RT 05', 'Koni', '085646541', 'Surabaya', NULL, '6', NULL, '5PM - 4AM', NULL, 'Bar dan Nightlife', '7', 'louisjon', NULL, NULL, '2017-08-01 05:56:49', '2017-08-30 01:16:14'),
(14, 'Ice Corner', 'Jl. Cikoneng Cileunyi', 'Dandy', '085646541', 'Surabaya', '1501764985.jpg', '7', NULL, '5PM - 4AM', NULL, 'Dessert & Cakes', '7', 'louisjon', NULL, NULL, '2017-08-03 05:56:25', '2017-08-30 01:16:41'),
(15, 'Rully Bistro Cafe', 'Jl. Raya Cibiru Wetan', 'Rully', '084567114', 'Bandung', '1504092922.jpg', '1', NULL, '5PM - 4AM', NULL, 'Kafe dan Deli', '8', 'bandung', NULL, NULL, '2017-08-30 04:35:22', '2017-08-30 04:35:22'),
(16, 'Italian Cafe', 'Cicadas', 'Koni', '0284654471', 'Jakarta', '1504587039.png', '2', NULL, '5PM - 4AM', NULL, 'Makan Malam', '7', 'louisjon', NULL, NULL, '2017-09-04 21:47:57', '2017-09-04 21:50:39'),
(17, 'Bazer Right', 'Jl. Pahlawan RT 05', 'Dandy', '085646541', 'Bandung', '1504594167.jpg', '2', NULL, '5PM - 4AM', 'awfaw', 'Makan Malam', '9', 'conico', NULL, NULL, '2017-09-04 23:49:27', '2017-09-05 00:30:20'),
(18, 'Coffee Shop', 'Ujung Berung', 'Awtae', '085646541', 'Bandung', '1504601179.jpg', '4', NULL, '5PM - 4AM', NULL, 'Kafe dan Deli', NULL, NULL, NULL, NULL, '2017-09-05 01:46:19', '2017-09-05 01:46:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mi_brand`
--

CREATE TABLE `mi_brand` (
  `brandId` int(10) UNSIGNED NOT NULL,
  `brandName` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brandWebsite` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandPicture` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandPicture2` text COLLATE utf8mb4_unicode_ci,
  `brandPicture3` text COLLATE utf8mb4_unicode_ci,
  `brandPicture4` text COLLATE utf8mb4_unicode_ci,
  `brandPicture5` text COLLATE utf8mb4_unicode_ci,
  `brandPointRules` text COLLATE utf8mb4_unicode_ci,
  `companyIdFK` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branchIdFK` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brandEnteredById` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mi_brand`
--

INSERT INTO `mi_brand` (`brandId`, `brandName`, `brandWebsite`, `brandPicture`, `brandPicture2`, `brandPicture3`, `brandPicture4`, `brandPicture5`, `brandPointRules`, `companyIdFK`, `branchIdFK`, `brandEnteredById`, `created_at`, `updated_at`) VALUES
(3, 'Chocolate Vanila', 'www.choco.com', '1504075145.maxresdefault.jpg', '1503987398.Screenshot (4).png', '1503987486.Screenshot (13).png', '1503987742.Screenshot (2).png', '1503987508.Screenshot (14).png', '512512', '6', '4', 'mdandyc', '2017-07-16 21:57:10', '2017-08-29 23:39:05'),
(47, 'Taco Fever', NULL, '1504086569.jpeg', '1504086753.grilledcheesetaco4.JPG', '1504086787.grilledcheesetaco4.JPG', NULL, NULL, 'Taco dengan kualitas tertinggi\r\ndengan harga Rp.50.000', '7', '9', 'louisjon', '2017-08-30 02:49:29', '2017-08-30 02:53:07'),
(48, 'Cordon Blue', NULL, '1504093076.jpg', '1504093131.Cordon-bleu-2.jpg', '1504093184.chicken-cordon-bleu.png', '1504093195.pxqrocxwsjcc_3KrzYGbRPG6AAmY4MA40Oe_chicken-cordon-bleu_landscapeThumbnail_en-US.jpeg', '1504093243.Cordon20Bleu20-20Product201-6.jpg', 'Dimulai dengan harga Rp.20.000,00', '8', '15', 'bandung', '2017-08-30 04:37:56', '2017-08-30 04:40:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mi_company`
--

CREATE TABLE `mi_company` (
  `companyId` int(10) UNSIGNED NOT NULL,
  `companyName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyLogoUrl` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyPhone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyWebsite` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyEmail` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyNotes` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyStatus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyEnteredById` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mi_company`
--

INSERT INTO `mi_company` (`companyId`, `companyName`, `companyLogoUrl`, `companyPhone`, `companyWebsite`, `companyEmail`, `companyNotes`, `companyStatus`, `companyEnteredById`, `created_at`, `updated_at`) VALUES
(4, 'PT. Kilorin Jon', '1501134945.JPG', '081254657471', 'www.klorin.com', 'kilorin@gmail.com', 'Murah Meriah', 'Active', 'mdandyc', '2017-07-19 00:37:03', '2017-08-29 23:32:09'),
(6, 'Baskoro Coll', '1501134059.png', '0845641111', 'www.baskoro.com', 'baskoro@mail.com', 'Salken', 'Not Active', 'mdandyc', '2017-07-26 22:40:59', '2017-08-29 23:33:17'),
(7, 'Ojena Koi', '1501490520.JPG', '08542134741', 'www.ojena.com', 'ojenaa@gmail.com', 'faww', 'Active', 'louisjon', '2017-07-31 01:42:00', '2017-08-30 01:46:46'),
(8, 'Bandung Resto', '1504092775.png', '08598765777', 'www.bandungresto.com', 'bandungresto@gmail.com', NULL, 'ACTIVE', 'bandung', '2017-08-30 04:32:55', '2017-08-30 04:32:55'),
(9, 'Surabaya Center', '1504593340.png', '08125465747', 'www.surabayacenter.com', 'surabayacenter@gmail.com', 'okkkk', 'Active', 'conico', '2017-09-04 23:35:40', '2017-09-05 00:09:29'),
(10, 'PT. Hoski Litran', '1504601134.jpg', '0845641111', 'www.bandungresto.com', 'bandungresto@gmail.com', NULL, 'Active', NULL, '2017-09-05 01:45:34', '2017-09-05 01:45:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mi_contact_person`
--

CREATE TABLE `mi_contact_person` (
  `contactId` int(10) UNSIGNED NOT NULL,
  `contactName` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactEmail` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactPosition` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactIdFK` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mi_membership`
--

CREATE TABLE `mi_membership` (
  `membershipId` int(10) UNSIGNED NOT NULL,
  `userId` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyId` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mi_redeemedvoucher`
--

CREATE TABLE `mi_redeemedvoucher` (
  `redeemedId` int(10) UNSIGNED NOT NULL,
  `redeemedVoucherId` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redeemedUserId` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redeemedWhen` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redeemedStatus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redeemedNote` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mi_resto_category`
--

CREATE TABLE `mi_resto_category` (
  `categoryId` int(10) UNSIGNED NOT NULL,
  `categoryType` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryRank` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mi_resto_category`
--

INSERT INTO `mi_resto_category` (`categoryId`, `categoryType`, `categoryRank`, `created_at`, `updated_at`) VALUES
(1, 'Romantik', NULL, NULL, NULL),
(2, 'Hilltop Restaurant', NULL, NULL, NULL),
(3, 'Autenthic Sunda', NULL, NULL, NULL),
(4, 'Kopi Shop', NULL, NULL, NULL),
(5, 'Jepang Restaurant', NULL, NULL, NULL),
(6, 'Steak House', NULL, NULL, NULL),
(7, 'Frozen Delight', NULL, NULL, NULL),
(8, 'Street Food', NULL, NULL, NULL),
(9, 'Makan Hemat', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mi_review`
--

CREATE TABLE `mi_review` (
  `reviewId` int(10) UNSIGNED NOT NULL,
  `branchId` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviewDescription` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviewById` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviewApproved` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviewApprovedById` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviewApprovedWhen` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mi_review`
--

INSERT INTO `mi_review` (`reviewId`, `branchId`, `reviewDescription`, `reviewById`, `reviewApproved`, `reviewApprovedById`, `reviewApprovedWhen`, `created_at`, `updated_at`) VALUES
(17, '3', 'Enak Gan', 'mdandyc', NULL, NULL, NULL, '2017-07-27 03:04:02', '2017-07-27 03:04:02'),
(18, '7', 'aaaaaa', 'louisjon', NULL, NULL, NULL, '2017-08-02 22:24:56', '2017-08-02 22:24:56'),
(19, '7', 'afwafaw', 'louisjon', NULL, NULL, NULL, '2017-08-02 22:25:07', '2017-08-02 22:25:07'),
(20, '1', 'Product Nya Oke', 'jonisebling', NULL, NULL, NULL, '2017-08-03 01:01:11', '2017-08-03 01:01:11'),
(21, '3', 'Terenak', 'jonisebling', NULL, NULL, NULL, '2017-08-16 03:25:28', '2017-08-16 03:25:28'),
(22, '3', 'awfawfawwaf', 'mdandyc', NULL, NULL, NULL, '2017-08-21 07:08:05', '2017-08-21 07:08:05'),
(23, '3', 'Mantap', 'dandy12', NULL, NULL, NULL, '2017-08-21 07:29:02', '2017-08-21 07:29:02'),
(24, '8', 'Toko Keramik', 'mdandyc', NULL, NULL, NULL, '2017-08-21 07:32:21', '2017-08-21 07:32:21'),
(27, '9', 'Taco nya enak', 'louisjon', NULL, NULL, NULL, '2017-08-30 04:13:19', '2017-08-30 04:13:19'),
(28, '9', 'Mantap', 'mdandyc', NULL, NULL, NULL, '2017-08-30 04:16:06', '2017-08-30 04:16:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mi_reward`
--

CREATE TABLE `mi_reward` (
  `rewardId` int(10) UNSIGNED NOT NULL,
  `rewardName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rewardEarnedPoint` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rewardBranchId` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rewardValidFrom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rewardValidUntil` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rewardStatus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rewardDescription` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mi_user_action`
--

CREATE TABLE `mi_user_action` (
  `actionId` int(10) UNSIGNED NOT NULL,
  `actionUserId` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionType` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionPoint` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionDescription` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionWhen` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionBranchId` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionStatus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mi_venue`
--

CREATE TABLE `mi_venue` (
  `venueId` int(10) UNSIGNED NOT NULL,
  `venueName` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venueStatus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brachIdFK` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mi_venue`
--

INSERT INTO `mi_venue` (`venueId`, `venueName`, `venueStatus`, `brachIdFK`, `created_at`, `updated_at`) VALUES
(1, 'Cibiru', 'Aktif', '1', '2017-07-17 17:00:00', NULL),
(2, 'Cileunyi', 'Aktif', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mi_voucher`
--

CREATE TABLE `mi_voucher` (
  `voucherId` int(10) UNSIGNED NOT NULL,
  `voucherName` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voucherDescription` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voucherValidUntil` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voucherValidFrom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voucherStatus` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VoucherBranchId` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voucherReqPoint` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voucherReqPointType` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voucherBarcode` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voucherMaxLimit` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'user', NULL, NULL),
(2, 'owner', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_users`
--

CREATE TABLE `role_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_userId` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_users`
--

INSERT INTO `role_users` (`id`, `role_id`, `user_userId`, `created_at`, `updated_at`) VALUES
(1, 1, 'dandy12', NULL, NULL),
(2, 2, 'dandyforze', NULL, NULL),
(3, 2, 'mdandyc', NULL, NULL),
(4, 2, 'jonisebling', '2017-07-26 02:12:00', '2017-08-28 23:10:01'),
(5, 2, 'louisjon', '2017-07-31 00:59:05', '2017-08-30 00:47:42'),
(17, 1, 'cornelow', '2017-08-28 01:28:46', '2017-08-28 22:51:05'),
(18, 2, 'bandung', '2017-08-30 04:29:34', '2017-08-30 04:29:34'),
(19, 1, 'conicon', '2017-09-04 20:46:16', '2017-09-04 20:46:16'),
(20, 2, 'conico', '2017-09-04 20:47:47', '2017-09-04 23:53:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `userId` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userName` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci,
  `emailVerifed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `munchitPoint` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`userId`, `userName`, `address`, `email`, `picture`, `facebook`, `twitter`, `path`, `instagram`, `password`, `emailVerifed`, `munchitPoint`, `remember_token`, `created_at`, `updated_at`) VALUES
('bandung', 'Akun Bandung', 'Bandung', 'bandung@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$myb4GedXTWxL8HdM4JfkWetc60m3WdpnHl6tMwslmoNrX6FwpQyMy', NULL, NULL, 'IjRwUB6Dzya43PmJFBzjoskDLlDXRzRbsuZuO5ca3mrYIXUBZKcbZaIiyWbP', '2017-08-30 04:29:34', '2017-08-30 04:30:01'),
('conico', 'conico', 'conico', 'conico@gmail.com', '1504584674.png', NULL, NULL, NULL, NULL, '$2y$10$pGx5H8TrnhE0187v6ftWR.eHBZl3jtWqWkewujdSuEgmMTZ3yKrB2', NULL, NULL, 'O5Rb5EJb5LVMzAlaR2DqrEo0RVT0FAHRz4nud6TjwMbAJ6an12ZypNS1UvM1', '2017-09-04 20:47:47', '2017-09-04 23:53:57'),
('conicon', 'conicon', 'conicon', 'conicon@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$aSJhslo4naL1PojbnHbpUeqBk1MWlsC5x9EdPSRmIJti5x10fpZuG', NULL, NULL, 'h5VjYAt9yqbb3kS1RR7QDRQGJiKZPCMWj1ZRHeOiaIKj4D3DNJOSkGLYNuZW', '2017-09-04 20:46:16', '2017-09-04 20:46:16'),
('cornelow', 'Cornelo A', 'Kp Warung Gede E', 'cornelow@gmail.com', '1503910551.jpg', NULL, NULL, NULL, NULL, '$2y$10$wE3Sn/vH.ox2bWH/nEyDAeCmUN8i8lO1jQawEXRq/mSQlZkrBQNla', NULL, NULL, 'Zb50LRa1X1flqCHSmc2r1xTernRUJZ05ZAKUWe3y1tl99mLOmJobWMC4U3GU', '2017-08-28 01:28:46', '2017-08-28 22:51:04'),
('dandy12', 'Dandy Chrono', 'Cibiru', 'dandyforze@outlook.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$tpFz76EjmUyHYAiFWpszsudgbh4V2PFiVE68OxHLzTQ4WZ1NGkzDK', NULL, NULL, 'ygIjhhu2a9Jrl3G7D3ROLsUsZmXS212HH4mIT3Xs8hywZlzCZEJ2yEefNwMB', NULL, NULL),
('dandyforze', 'Muhammad Dandy Ch', 'Kp Warung Gede', 'dandyforze2@gmail.com', NULL, NULL, NULL, NULL, NULL, '$2y$10$vYbRon2y6vubpqfWLmKP9OFdP8QEH4KpdZJ5q4zTLV9u8fiO2VTDa', NULL, NULL, 'HAdtWG6ScAXZu9GpiZhRTqTPz8i3Pikg4oDgj5JZINySCD6Aty9UHcCqwSTB', '2017-07-24 01:30:05', '2017-08-03 00:04:01'),
('jonisebling', 'Joni Sebling', 'Kp Warung Gede', 'jonisebling@gmail.com', '1501743945.png', 'aaa', 'aaw', 'awawaw', 'a', '$2y$10$NxmizTorhevrKSSIO61fnu6FPk8QNeJX.vNdJv5hQkW1ynwy81KQe', NULL, NULL, 'iSBjoaEOsJ9PmyKChYaSk2FlrGv3917bvGvvZh6eiWg9DASOB79LQf7ksYkI', '2017-07-26 02:12:00', '2017-08-28 23:10:01'),
('louisjon', 'Louis Jonus', 'Cileunyi', 'louisjon@gmail.com', '1504584710.png', NULL, NULL, NULL, NULL, '$2y$10$xZAvdr4K2adRu3o/g/U6BOxT3IoM8klPxYX/LlwXW7SrGP5SFkarC', NULL, NULL, 'WOEWTbAc9zX8QUrKLRR5t23eXes8pzh9pobUUF0fFa9gGuTplUngcRb4WXu7', '2017-07-31 00:59:05', '2017-09-04 21:11:50'),
('mdandyc', 'Chris Dandy', 'Cileunyi', 'dandyforze@gmail.com', '1501746932.JPG', 'www.facebook.com/dandforze', 'www.twitter.com', '-', '-', '$2y$10$OZWK3sN0dqfnMdfU.Fh80u7ayHWIIwUbgQH23/K.nSiLq8DEXZ7ce', '-', '-', 'li6a16FAr6jNOXziOGu2qYqmfr0xSTetrgttviQzcO78Q57XjCx2DOAFEsKn', NULL, '2017-08-29 20:30:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminId`),
  ADD UNIQUE KEY `admins_username_unique` (`adminName`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mi_branch`
--
ALTER TABLE `mi_branch`
  ADD PRIMARY KEY (`branchId`);

--
-- Indexes for table `mi_brand`
--
ALTER TABLE `mi_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `mi_company`
--
ALTER TABLE `mi_company`
  ADD PRIMARY KEY (`companyId`);

--
-- Indexes for table `mi_contact_person`
--
ALTER TABLE `mi_contact_person`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `mi_membership`
--
ALTER TABLE `mi_membership`
  ADD PRIMARY KEY (`membershipId`);

--
-- Indexes for table `mi_redeemedvoucher`
--
ALTER TABLE `mi_redeemedvoucher`
  ADD PRIMARY KEY (`redeemedId`);

--
-- Indexes for table `mi_resto_category`
--
ALTER TABLE `mi_resto_category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `mi_review`
--
ALTER TABLE `mi_review`
  ADD PRIMARY KEY (`reviewId`);

--
-- Indexes for table `mi_reward`
--
ALTER TABLE `mi_reward`
  ADD PRIMARY KEY (`rewardId`);

--
-- Indexes for table `mi_user_action`
--
ALTER TABLE `mi_user_action`
  ADD PRIMARY KEY (`actionId`);

--
-- Indexes for table `mi_venue`
--
ALTER TABLE `mi_venue`
  ADD PRIMARY KEY (`venueId`);

--
-- Indexes for table `mi_voucher`
--
ALTER TABLE `mi_voucher`
  ADD PRIMARY KEY (`voucherId`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mi_branch`
--
ALTER TABLE `mi_branch`
  MODIFY `branchId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `mi_brand`
--
ALTER TABLE `mi_brand`
  MODIFY `brandId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `mi_company`
--
ALTER TABLE `mi_company`
  MODIFY `companyId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mi_contact_person`
--
ALTER TABLE `mi_contact_person`
  MODIFY `contactId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mi_membership`
--
ALTER TABLE `mi_membership`
  MODIFY `membershipId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mi_redeemedvoucher`
--
ALTER TABLE `mi_redeemedvoucher`
  MODIFY `redeemedId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mi_resto_category`
--
ALTER TABLE `mi_resto_category`
  MODIFY `categoryId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `mi_review`
--
ALTER TABLE `mi_review`
  MODIFY `reviewId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `mi_reward`
--
ALTER TABLE `mi_reward`
  MODIFY `rewardId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mi_user_action`
--
ALTER TABLE `mi_user_action`
  MODIFY `actionId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mi_venue`
--
ALTER TABLE `mi_venue`
  MODIFY `venueId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mi_voucher`
--
ALTER TABLE `mi_voucher`
  MODIFY `voucherId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role_users`
--
ALTER TABLE `role_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
