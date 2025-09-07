-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2025 at 07:32 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geolab`
--
CREATE DATABASE IF NOT EXISTS `geolab` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `geolab`;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipment_categories`
--

CREATE TABLE `equipment_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_svg` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipment_categories`
--

INSERT INTO `equipment_categories` (`id`, `name`, `icon_svg`, `created_at`, `updated_at`) VALUES
(1, 'Mesin Bor', '<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M16 11V6H8V11H16Z\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M12 21V11\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M12 21L14 19L10 19L12 21Z\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M12 11V16H15V11H12Z\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M12 11V16\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M12 16L14 18L10 18L12 16Z\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M16 6V4H8V6\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M16 4H8\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M12 11L14 13L10 13L12 11Z\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M12 13V15\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M12 15L14 17L10 17L12 15Z\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M12 17V19\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M12 19L14 21L10 21L12 19Z\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(2, 'Pompa Air', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-pump\"><path d=\"M12 22v-6m0-4v-2\"/><path d=\"M12 6a4 4 0 0 0-4-4h-2v4h6m-6 0h4a4 4 0 0 1 4 4v2m-8 0v4m0 0a4 4 0 0 0 4 4h2v-4h-6z\"/></svg>', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(3, 'Menara Bor', '<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M10 2H14V4H10V2Z\" fill=\"#000000\"/><path d=\"M12 4V22\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M6 10H18V12H6V10Z\" fill=\"#000000\"/><path d=\"M6 10V22\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M18 10V22\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M12 12V22\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M10 14H14V16H10V14Z\" fill=\"#000000\"/><path d=\"M10 18H14V20H10V18Z\" fill=\"#000000\"/></svg>', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(4, 'Pipa Bor', '<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M12 2C9.79 2 8 3.79 8 6V18C8 20.21 9.79 22 12 22C14.21 22 16 20.21 16 18V6C16 3.79 14.21 2 12 2ZM12 4C13.1 4 14 4.9 14 6V8H10V6C10 4.9 10.9 4 12 4ZM14 10V14H10V10H14ZM14 16V18C14 19.1 13.1 20 12 20C10.9 20 10 19.1 10 18V16H14Z\" fill=\"#000000\"/><path d=\"M16 11H18V13H16V11Z\" fill=\"#000000\"/><path d=\"M6 11H8V13H6V11Z\" fill=\"#000000\"/></svg>', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(5, 'Core Barel', '<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M7 2H17C17.5523 2 18 2.44772 18 3V21C18 21.5523 17.5523 22 17 22H7C6.44772 22 6 21.5523 6 21V3C6 2.44772 6.44772 2 7 2Z\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M10 5H14\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M10 8H14\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M10 11H14\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M10 14H14\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><path d=\"M10 17H14\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><circle cx=\"12\" cy=\"5\" r=\"1\" fill=\"#000000\"/><circle cx=\"12\" cy=\"8\" r=\"1\" fill=\"#000000\"/><circle cx=\"12\" cy=\"11\" r=\"1\" fill=\"#000000\"/><circle cx=\"12\" cy=\"14\" r=\"1\" fill=\"#000000\"/><circle cx=\"12\" cy=\"17\" r=\"1\" fill=\"#000000\"/></svg>', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(6, 'Casing', '<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 4C14.76 4 17 6.24 17 9V15C17 17.76 14.76 20 12 20C9.24 20 7 17.76 7 15V9C7 6.24 9.24 4 12 4ZM12 6C10.34 6 9 7.34 9 9V15C9 16.66 10.34 18 12 18C13.66 18 15 16.66 15 15V9C15 7.34 13.66 6 12 6Z\" fill=\"#000000\"/></svg>', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(7, 'Mata Bor', '<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M12 2L6 10H18L12 2Z\" fill=\"#000000\"/><path d=\"M12 22L6 14H18L12 22Z\" fill=\"#000000\"/><path d=\"M22 12L14 18V6L22 12Z\" fill=\"#000000\"/><path d=\"M2 12L10 6V18L2 12Z\" fill=\"#000000\"/><circle cx=\"12\" cy=\"12\" r=\"2\" fill=\"#000000\"/></svg>', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(8, 'Peralatan Lain', '<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M4 12H6L9 5L15 19L18 12H20\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><circle cx=\"4\" cy=\"12\" r=\"2\" fill=\"#000000\"/><circle cx=\"20\" cy=\"12\" r=\"2\" fill=\"#000000\"/></svg>', '2025-09-06 11:08:03', '2025-09-06 11:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_items`
--

CREATE TABLE `equipment_items` (
  `id` bigint UNSIGNED NOT NULL,
  `equipment_category_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Merk',
  `year` year DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daily_rate` int UNSIGNED NOT NULL COMMENT 'Tarif per hari',
  `monthly_rate` int UNSIGNED NOT NULL COMMENT 'Tarif per 30 hari',
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipment_items`
--

INSERT INTO `equipment_items` (`id`, `equipment_category_id`, `name`, `brand`, `year`, `image_path`, `daily_rate`, `monthly_rate`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mesin Bor Variable', 'CG.2.1', '1993', NULL, 114300, 3429000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(2, 1, 'Mesin Bor', 'DB. 455', '1980', NULL, 121923, 3657690, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(3, 1, 'Mesin Bor', 'YBM.3', '1983', NULL, 102835, 3085050, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(4, 1, 'Mesin Bor', 'TOHO', '1984', NULL, 85727, 2571810, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(5, 1, 'Mesin Bor Jackcro', 'Y-SPK', '1998', NULL, 63067, 1892010, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(6, 1, 'Mesin Bor Portable', 'DORMER', '1998', NULL, 22861, 685830, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(7, 2, 'Pompa Torak YBM', 'SP-150', '1980', NULL, 20956, 628680, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(8, 2, 'Pompa Torak YBM', 'SP-100', '1983', NULL, 17145, 514350, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(9, 2, 'Pompa Torak TOHO', 'TOHO', '1984', NULL, 6477, 194310, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(10, 2, 'Pompa Torak BW', 'BW-250', '1993', NULL, 14716, 441480, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(11, 2, 'Pompa Chansin', 'Yanmar', '2000', NULL, 7883, 236490, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(12, 2, 'Pompa Honda', '3,5 HP', '1993', NULL, 5334, 160020, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(13, 3, 'Tripod, Katrol, Taket', 'Lokal', '1980', NULL, 2286, 68581, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(14, 4, 'Pipa Bor HQ', '3 mtr', '1980', NULL, 571, 17145, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(15, 4, 'Pipa Bor NQ', '3 mtr', '1980', NULL, 476, 14287, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(16, 4, 'Pipa Bor BW', '3 mtr', '1980', NULL, 419, 12573, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(17, 4, 'Pipa Bor AW', '3 mtr', '1980', NULL, 407, 12219, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(18, 5, 'Core Barel HQ TT/DT', '3 mtr', '1980', NULL, 8572, 257181, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(19, 5, 'Core Barel NQ TT/DT', '3 mtr', '1980', NULL, 8286, 248609, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(20, 5, 'Core Barel NMLC TT', '1,5 mtr', '1980', NULL, 4204, 126134, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(21, 5, 'Core Barel Sangle Tube', 'HQ/NQ', '1980', NULL, 2476, 74297, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(22, 6, 'Casing Hw', '3 mtr', '1980', NULL, 952, 28575, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(23, 6, 'Casing Nw', '3 mtr', '1980', NULL, 919, 27591, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(24, 6, 'Casing Bx', '1,5 mtr', '1980', NULL, 571, 17145, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(25, 7, 'Theree Cone 12\"', 'Luar', '1980', NULL, 31500, 945000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(26, 7, 'Theree Cone 10\"', 'Luar', '1980', NULL, 28000, 840000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(27, 7, 'Theree Cone 8\"', 'Luar', '1980', NULL, 24500, 735000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(28, 7, 'Theree Cone 6\"', 'Luar', '1980', NULL, 21000, 630000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(29, 7, 'Theree Cone 4\"', 'Luar', '1980', NULL, 19250, 577500, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(30, 7, 'Theree Cone 3\"', 'Luar', '1980', NULL, 17500, 525000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(31, 7, 'Theree Cone 9\"', 'Luar', '1980', NULL, 15750, 472500, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(32, 7, 'There Wing 6\"', 'Luar', '1980', NULL, 14000, 420000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(33, 7, 'There Wing 4\"', 'Luar', '1980', NULL, 12250, 367500, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(34, 7, 'There Wing 3\"', 'Luar', '1980', NULL, 10500, 315000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(35, 7, 'Diamond Bit HQ/TT/DT', 'Luar', '1980', NULL, 47250, 1417500, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(36, 7, 'Diamond Bit NQ/TT/DT', 'Luar', '1980', NULL, 40250, 1207500, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(37, 7, 'Diamond Bit NMLC', 'Luar', '1980', NULL, 22750, 682500, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(38, 7, 'Tungsten HQ/TT/DT', 'Luar', '1980', NULL, 14000, 420000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(39, 7, 'Tungsten NQ/TT/DT', 'Luar', '1980', NULL, 12250, 367500, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(40, 7, 'Tungsten NMLC', 'Luar', '1980', NULL, 10500, 315000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(41, 8, 'Mesin Sondir', 'HF', '1997', NULL, 99856, 2995680, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(42, 8, 'Geolistrik', 'NANIURA', '1998', NULL, 149785, 4493550, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(43, 8, 'Teodolite', 'TOPCON', '1986', NULL, 69637, 2089110, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(44, 8, 'Alat Logging Air Tanah', 'Martiel Geophysics, Type: MLTCX-137002', '2021', NULL, 211680, 6350400, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(45, 8, 'Alat Geolistrik', 'Martiel Geophysics Resistivity Meter, Model: MGG-1261, Type: 1450P', '2021', NULL, 423360, 12700800, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(46, 8, 'Water Level Meter', 'Martiel Geophysics, Model: W-100, Serial: 137-01', '2021', NULL, 54022, 1620675, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(47, 8, 'Bore Hole Camera', 'Martiel Geophysics, Type: SID-Ovrec/F2K-1994001', '2021', NULL, 360150, 10804500, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab_categories`
--

CREATE TABLE `lab_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lab_categories`
--

INSERT INTO `lab_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Pengujian Batubara', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(2, 'Pengujian Air', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(3, 'Pengujian Kimia Mineral', '2025-09-06 11:08:03', '2025-09-06 11:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `lab_items`
--

CREATE TABLE `lab_items` (
  `id` bigint UNSIGNED NOT NULL,
  `lab_category_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nama kimia dengan format standar, cth: SiO2',
  `aliases` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Nama lain atau keyword untuk pencarian, dipisah koma, cth: Air, Water',
  `price` int UNSIGNED NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lab_items`
--

INSERT INTO `lab_items` (`id`, `lab_category_id`, `name`, `aliases`, `price`, `notes`, `created_at`, `updated_at`) VALUES
(1, 1, 'Persiapan Sampel (≤ 4 Kg)', NULL, 75000, '*Berat sampel lebih dari 4 Kg, penambahan per Kg dikenakan tambahan biaya sebesar Rp 95.000.', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(2, 1, 'Preparasi Pengabuan (≤ 25 gram sampel ukuran 60 mesh)', NULL, 75000, '*Berat sampel ukuran 60 mesh lebih dari 25 gram, penambahan per 25 gram dikenakan tambahan biaya sebesar Rp 95.000.', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(3, 1, 'Analisis Equilibrium Moisture (EQM)', NULL, 444000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(4, 1, 'Total Moisture', NULL, 80000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(5, 1, 'Air Lembab', NULL, 75000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(6, 1, 'Abu', NULL, 75000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(7, 1, 'Zat Terbang', NULL, 75000, '*Harga belum termasuk analisis air lembab.', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(8, 1, 'Carbon/Hydrogen/Nitrogen', NULL, 900000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(9, 1, 'Belerang Total', NULL, 180000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(10, 1, 'Oksigen', NULL, 0, '*Diperoleh dari hasil analisis CHNS dan abu.', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(11, 1, 'Analisis Klor', NULL, 470000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(12, 1, 'Belerang Sulfat', NULL, 660000, '*Belerang organik harus ditambahkan analisis belerang total.', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(13, 1, 'Belerang Pirit', NULL, 540000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(14, 1, 'Nilai Kalor Gross Adb (Tanpa Koreksi Sulfur)', NULL, 220000, '*Pengujian Nilai Kalor Gross Adb ditambahkan analisis Sulfur', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(15, 1, 'Nilai Kalor Gross Adb (Dengan Koreksi Sulfur)', NULL, 400000, '*Pengujian Nilai Kalor Gross Adb ditambahkan analisis Sulfur', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(16, 1, 'Ash Fusion Temperature (Oksidasi dan Reduksi)', NULL, 540000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(17, 1, 'Hardgrove Grindability Index (HGI)', NULL, 420000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(18, 1, 'Tipe Kokas', NULL, 360000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(19, 1, 'Free Swelling Index (FSI)', NULL, 175000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(20, 1, 'True Specific Gravity (TSG)', NULL, 250000, '*Pengujian TSG harus ditambahkan dengan analisis air lembab.', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(21, 1, 'Relative Density (RD)', NULL, 245000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(22, 1, 'Porositas', NULL, 520000, '*Pengujian porositas harus ditambahkan pengujian TSG dan analisis air lembab.', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(23, 1, 'Bulk Density', NULL, 325000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(24, 1, 'Preparasi Petrografi', NULL, 900000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(25, 1, 'Petrografi', NULL, 850000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(26, 1, 'Analisa Ayak', NULL, 80000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(27, 2, 'Temperatur', NULL, 15000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(28, 2, 'Kekeruhan', NULL, 15000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(29, 2, 'Daya Hantar Listrik (DHL)', NULL, 15000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(30, 2, 'Salinitas', NULL, 20000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(31, 2, 'Warna', NULL, 20000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(32, 2, 'Bau', NULL, 15000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(33, 2, 'Rasa', NULL, 15000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(34, 2, 'Zat Padat Terlarut (TDS)', NULL, 30000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(35, 2, 'Zat Padat Tersuspensi (TSS)', NULL, 30000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(36, 2, 'Zat Padat Total', NULL, 30000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(37, 2, 'pH', NULL, 20000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(38, 2, 'Kesadahan', NULL, 30000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(39, 2, 'Ca (Kalsium)', NULL, 30000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(40, 2, 'Mg (Magnesium)', NULL, 30000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(41, 2, 'Alkalinity', NULL, 30000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(42, 2, 'Acidity', NULL, 30000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(43, 2, 'Zat Organik (KMnO4)', NULL, 30000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(44, 2, 'Klorida (Cl)', NULL, 30000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(45, 2, 'Chemical Oxygen Demand (COD)', NULL, 75000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(46, 2, 'Biological Oxygen Demand (BOD)', NULL, 75000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(47, 2, 'Oksigen Terlarut', NULL, 20000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(48, 2, 'Titanium (Ti)', NULL, 50000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(49, 2, 'Krom Heksavalen (Cr6+)', NULL, 50000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(50, 2, 'Posfat (PO4(3-))', NULL, 50000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(51, 2, 'Sulfat (SO4(2-))', NULL, 30000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(52, 2, 'Nitrit (NO2(-))', NULL, 30000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(53, 2, 'Nitrat (NO3(-))', NULL, 30000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(54, 2, 'Amonia (NH4(+))', NULL, 30000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(55, 2, 'Sulfida (S2(-))', NULL, 30000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(56, 2, 'Flouride (F(-))', NULL, 30000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(57, 2, 'Klorin (Cl2)', NULL, 30000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(58, 2, 'Pb (Timbal)', NULL, 75000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(59, 2, 'Zn (Seng)', NULL, 75000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(60, 2, 'Cu (Tembaga)', NULL, 75000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(61, 2, 'Fe (Besi)', NULL, 75000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(62, 2, 'Cd (Kadmium)', NULL, 75000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(63, 2, 'Cr (Kromium) total', NULL, 75000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(64, 2, 'K (Kalium)', NULL, 75000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(65, 2, 'Na (Natrium)', NULL, 75000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(66, 2, 'Al (Aluminium)', NULL, 75000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(67, 2, 'Sn (Timah)', NULL, 75000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(68, 2, 'As (Arsen)', NULL, 75000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(69, 2, 'Mn (Mangan)', NULL, 75000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(70, 2, 'Si (Silikon)', NULL, 75000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(71, 2, 'Hg (Merkuri/Air Raksa)', NULL, 150000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(72, 3, 'Preparasi Per 1 Kg', NULL, 80000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(73, 3, 'Pelarutan Contoh Batu Kapur', NULL, 380000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(74, 3, 'Pelarutan Contoh Clay Mineral / Paris Kwarsa', NULL, 500000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(75, 3, 'Pelarutan Contoh Batuan Sulfida', NULL, 380000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(76, 3, 'Pelarutan Contoh Paris Besi / Bijih Besi', NULL, 425000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(77, 3, 'Pelarutan Contoh Batuan Fosfat', NULL, 370000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(78, 3, 'Pelarutan Contoh Batuan Mangan', NULL, 370000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(79, 3, 'Pelarutan Contoh Bijih Nikel', NULL, 590000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(80, 3, 'SiO2', 'Silikon Dioksida', 220000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(81, 3, 'SO3', 'Sulfur Trioksida', 175000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(82, 3, 'LOI', 'Loss on Ignition', 70000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(83, 3, 'H2O', 'Air', 70000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(84, 3, 'CaO', 'Kalsium Oksida', 130000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(85, 3, 'MgO', 'Magnesium Oksida', 135000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(86, 3, 'CaCO3', 'Kalsium Karbonat', 35000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(87, 3, 'MnO Total', 'Mangan Oksida Total', 95000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(88, 3, 'MnO2', 'Mangan Dioksida', 95000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(89, 3, 'FeO', 'Besi(II) Oksida, Oksida Fero', 140000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(90, 3, 'FeO Total', 'Besi(II) Oksida, Oksida Fero Total', 200000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(91, 3, 'Al2O3', 'Aluminium Oksida', 100000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(92, 3, 'Fe2O3', 'Besi(III) Oksida, Ferri Oksida', 35000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(93, 3, 'TiO2', 'Titanium Dioksida', 100000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(94, 3, 'P2O5', 'Fosfor Pentoksida', 100000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(95, 3, 'As', 'Arsen', 140000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(96, 3, 'Pb', 'Timbal', 140000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(97, 3, 'Cu', 'Tembaga', 140000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(98, 3, 'Zn', 'Seng', 140000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(99, 3, 'Cr', 'Kromium', 140000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(100, 3, 'Mn', 'Mangan', 140000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(101, 3, 'Fe', 'Besi', 140000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(102, 3, 'Al', 'Aluminium', 140000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(103, 3, 'K', 'Kalium', 140000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(104, 3, 'Na', 'Natrium', 140000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(105, 3, 'Sn', 'Timah', 160000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(106, 3, 'Ti', 'Titanium', 140000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(107, 3, 'Si', 'Silikon', 140000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(108, 3, 'Ca', 'Calsium', 140000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(109, 3, 'Mg', 'Magnesium', 140000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(110, 3, 'Cd', 'Kadmium', 140000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(111, 3, 'Ag', 'Perak', 140000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(112, 3, 'Hg', 'Merkuri/Air Raksa', 150000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(113, 3, 'Au', 'Emas', 140000, NULL, '2025-09-06 11:08:03', '2025-09-06 11:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_09_06_160322_create_lab_categories_table', 1),
(5, '2025_09_06_160338_create_lab_items_table', 1),
(6, '2025_09_06_161029_create_equipment_categories_table', 1),
(7, '2025_09_06_161037_create_equipment_items_table', 1),
(8, '2025_09_06_161147_create_sig_services_table', 1),
(9, '2025_09_06_161157_create_sig_tiers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('wg4TEpV0hFe5VhgGi2m8doT4zBJwlkyECPEbhezT', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYUN0Y0pFMnd4QVB0ZDJGNE5wY1htRGlpSWg2MnlKbWtxeGM2MUJYMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTg6Imh0dHA6Ly9nZW9sYWIudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1757186893);

-- --------------------------------------------------------

--
-- Table structure for table `sig_services`
--

CREATE TABLE `sig_services` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sig_services`
--

INSERT INTO `sig_services` (`id`, `name`, `icon_class`, `created_at`, `updated_at`) VALUES
(1, 'Peta Administrasi', 'bi bi-map-fill', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(2, 'Peta Geologi', 'bi bi-map-fill', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(3, 'Peta Pertambangan', 'bi bi-map-fill', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(4, 'Peta Migas', 'bi bi-map-fill', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(5, 'Peta Kelistrikan', 'bi bi-map-fill', '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(6, 'Jasa Overlay Peta', 'bi bi-map-fill', '2025-09-06 11:08:03', '2025-09-06 11:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `sig_tiers`
--

CREATE TABLE `sig_tiers` (
  `id` bigint UNSIGNED NOT NULL,
  `sig_service_id` bigint UNSIGNED NOT NULL,
  `scale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Skala, e.g., 1:250.000',
  `price` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sig_tiers`
--

INSERT INTO `sig_tiers` (`id`, `sig_service_id`, `scale`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, '1:250.000', 150000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(2, 1, '1:100.000', 200000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(3, 1, '1:50.000', 250000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(4, 1, '1:25.000', 300000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(5, 1, '1:10.000', 350000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(6, 2, '1:250.000', 250000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(7, 2, '1:100.000', 300000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(8, 2, '1:50.000', 350000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(9, 2, '1:25.000', 350000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(10, 2, '1:10.000', 450000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(11, 3, '1:250.000', 300000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(12, 3, '1:100.000', 400000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(13, 3, '1:50.000', 450000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(14, 3, '1:25.000', 500000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(15, 3, '1:10.000', 550000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(16, 4, '1:250.000', 300000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(17, 4, '1:100.000', 350000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(18, 4, '1:50.000', 350000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(19, 4, '1:25.000', 450000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(20, 4, '1:10.000', 550000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(21, 5, '1:250.000', 300000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(22, 5, '1:100.000', 350000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(23, 5, '1:50.000', 350000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(24, 5, '1:25.000', 450000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(25, 5, '1:10.000', 550000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(26, 6, '1:250.000', 150000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(27, 6, '1:100.000', 200000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(28, 6, '1:50.000', 250000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(29, 6, '1:25.000', 300000, '2025-09-06 11:08:03', '2025-09-06 11:08:03'),
(30, 6, '1:10.000', 350000, '2025-09-06 11:08:03', '2025-09-06 11:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `equipment_categories`
--
ALTER TABLE `equipment_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment_items`
--
ALTER TABLE `equipment_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipment_items_equipment_category_id_foreign` (`equipment_category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_categories`
--
ALTER TABLE `lab_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_items`
--
ALTER TABLE `lab_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lab_items_lab_category_id_foreign` (`lab_category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sig_services`
--
ALTER TABLE `sig_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sig_tiers`
--
ALTER TABLE `sig_tiers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sig_tiers_sig_service_id_foreign` (`sig_service_id`);

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
-- AUTO_INCREMENT for table `equipment_categories`
--
ALTER TABLE `equipment_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `equipment_items`
--
ALTER TABLE `equipment_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_categories`
--
ALTER TABLE `lab_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lab_items`
--
ALTER TABLE `lab_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sig_services`
--
ALTER TABLE `sig_services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sig_tiers`
--
ALTER TABLE `sig_tiers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `equipment_items`
--
ALTER TABLE `equipment_items`
  ADD CONSTRAINT `equipment_items_equipment_category_id_foreign` FOREIGN KEY (`equipment_category_id`) REFERENCES `equipment_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lab_items`
--
ALTER TABLE `lab_items`
  ADD CONSTRAINT `lab_items_lab_category_id_foreign` FOREIGN KEY (`lab_category_id`) REFERENCES `lab_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sig_tiers`
--
ALTER TABLE `sig_tiers`
  ADD CONSTRAINT `sig_tiers_sig_service_id_foreign` FOREIGN KEY (`sig_service_id`) REFERENCES `sig_services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
