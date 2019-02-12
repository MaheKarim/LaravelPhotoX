-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2019 at 10:37 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larapharmanew`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `thumbnail`, `created_at`, `updated_at`) VALUES
(10, 'EEEE', '1549310455.24291874_1253965738080131_1120862873186311577_o.jpg', '2019-02-04 14:00:55', '2019-02-04 14:00:55'),
(13, 'ABC XYZ', '1549385749.28616630_1330343263775711_4374618242316416651_o.jpg', '2019-02-05 10:55:49', '2019-02-05 10:55:49'),
(15, 'Special Photo', '1549921687.26240135_1284603711683000_1835772363368851741_o.jpg', '2019-02-11 15:48:07', '2019-02-11 15:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `birthdaygalleries`
--

CREATE TABLE `birthdaygalleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `birthday_album_id` int(11) NOT NULL,
  `birthday_album_thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `birthdays`
--

CREATE TABLE `birthdays` (
  `id` int(10) UNSIGNED NOT NULL,
  `birthday_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday_thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `birthdays`
--

INSERT INTO `birthdays` (`id`, `birthday_name`, `birthday_thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'New Birthday Section', '1549897118_22104313_1211382785671760_5741035004296945776_o.jpg', '2019-02-11 08:58:38', '2019-02-11 08:58:38'),
(2, 'New Birthday', '1549921930_0 A - Mahe1.jpg', '2019-02-11 15:52:10', '2019-02-11 15:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `birthday_packages`
--

CREATE TABLE `birthday_packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `birthday_package_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday_package_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `birthday_packages`
--

INSERT INTO `birthday_packages` (`id`, `birthday_package_name`, `birthday_package_price`, `created_at`, `updated_at`) VALUES
(1, 'Mahe', '1997', '2019-02-10 15:04:20', '2019-02-10 15:04:20'),
(2, 'Mahe', '1997', '2019-02-10 23:45:44', '2019-02-10 23:45:44'),
(6, 'Testssss', '1222', '2019-02-11 00:25:40', '2019-02-11 00:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `birthday_package_galleries`
--

CREATE TABLE `birthday_package_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `birthday_package_id` int(11) NOT NULL,
  `birthday_package_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `birthday_package_galleries`
--

INSERT INTO `birthday_package_galleries` (`id`, `birthday_package_id`, `birthday_package_description`, `created_at`, `updated_at`) VALUES
(1, 5, '12', '2019-02-11 00:46:45', '2019-02-11 00:46:45'),
(2, 2, 'JJJJ', '2019-02-11 01:48:32', '2019-02-11 01:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` longtext COLLATE utf8mb4_unicode_ci,
  `category_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `category_image`, `created_at`, `updated_at`) VALUES
(1, 'The Camera Boy', 'ABout Descripyion', '1549573289.01 A- Mahe.jpg', '2019-02-07 15:01:29', '2019-02-07 15:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `mail`, `msg`, `created_at`, `updated_at`) VALUES
(2, 'Mahe Karim', 'mahekarim@gmail.com', 'Mahe Karim test Message', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `engagements`
--

CREATE TABLE `engagements` (
  `id` int(10) UNSIGNED NOT NULL,
  `engagement_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engagement_thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `engagements`
--

INSERT INTO `engagements` (`id`, `engagement_name`, `engagement_thumbnail`, `created_at`, `updated_at`) VALUES
(19, 'Nick Jonas', '1549578106.01 A- Mahe.jpg', '2019-02-07 16:21:46', '2019-02-07 16:21:46'),
(21, 'Rashed Karim', '1549635258.28616630_1330343263775711_4374618242316416651_o.jpg', '2019-02-08 08:14:19', '2019-02-08 08:14:19'),
(22, 'MM Karim', '1549642035.39099568_2089895027940078_217418103586291712_n.jpg', '2019-02-08 10:07:15', '2019-02-08 10:07:15');

-- --------------------------------------------------------

--
-- Table structure for table `engagement_galleries`
--

CREATE TABLE `engagement_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `engagement_album_id` int(11) NOT NULL,
  `engagement_album_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `engagement_galleries`
--

INSERT INTO `engagement_galleries` (`id`, `engagement_album_id`, `engagement_album_image`, `created_at`, `updated_at`) VALUES
(1, 5, '1549463321.After Donate Button.PNG', '2019-02-06 08:28:41', '2019-02-06 08:28:41'),
(2, 5, '1549463336.abc dek.PNG', '2019-02-06 08:28:56', '2019-02-06 08:28:56'),
(3, 6, '1549464321_28616630_1330343263775711_4374618242316416651_o.jpg', '2019-02-06 08:45:21', '2019-02-06 08:45:21'),
(4, 7, '1549464407_0 A - Mahe1.jpg', '2019-02-06 08:46:47', '2019-02-06 08:46:47'),
(5, 9, '1549468518_0 A - Mahe1.jpg', '2019-02-06 09:55:18', '2019-02-06 09:55:18'),
(6, 11, '1549475938_0 A - Mahe1.jpg', '2019-02-06 11:58:58', '2019-02-06 11:58:58'),
(7, 11, '1549475948_28616630_1330343263775711_4374618242316416651_o.jpg', '2019-02-06 11:59:08', '2019-02-06 11:59:08'),
(8, 11, '1549475955_26240135_1284603711683000_1835772363368851741_o.jpg', '2019-02-06 11:59:15', '2019-02-06 11:59:15'),
(9, 11, '1549475966_42730876_10155978704407921_2184015939740106752_o.jpg', '2019-02-06 11:59:26', '2019-02-06 11:59:26'),
(10, 14, '1549478954_Dolon.jpg', '2019-02-06 12:49:14', '2019-02-06 12:49:14'),
(11, 14, '1549479032_1  CSE   SWE   IT Community Of Islampur.png', '2019-02-06 12:50:32', '2019-02-06 12:50:32'),
(12, 19, '1549629677_01 A- Mahe.jpg', '2019-02-08 06:41:17', '2019-02-08 06:41:17'),
(13, 21, '1549914282_atom.PNG', '2019-02-11 13:44:42', '2019-02-11 13:44:42'),
(14, 21, '1549914303_aa.jpg', '2019-02-11 13:45:03', '2019-02-11 13:45:03'),
(15, 21, '1549914347_0 A - Mahe1.jpg', '2019-02-11 13:45:47', '2019-02-11 13:45:47'),
(16, 21, '1549914353_22104313_1211382785671760_5741035004296945776_o.jpg', '2019-02-11 13:45:53', '2019-02-11 13:45:53'),
(17, 21, '1549914362_41991218_493135711161700_3250468224986251264_n.png', '2019-02-11 13:46:02', '2019-02-11 13:46:02'),
(18, 21, '1549914494_38521738_1950144281703490_8602684387101769728_o.jpg', '2019-02-11 13:48:14', '2019-02-11 13:48:14'),
(19, 21, '1549914507_50558683_2289597077986294_3383884756901953536_o (1).jpg', '2019-02-11 13:48:27', '2019-02-11 13:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `engagement_packages`
--

CREATE TABLE `engagement_packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `engagement_package_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engagement_package_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `engagement_packages`
--

INSERT INTO `engagement_packages` (`id`, `engagement_package_name`, `engagement_package_price`, `created_at`, `updated_at`) VALUES
(8, 'Premium', '150', '2019-02-08 10:10:26', '2019-02-08 10:10:26'),
(11, 'Gold', '170', '2019-02-09 12:02:18', '2019-02-09 12:02:18'),
(12, 'Special Pack', '505', '2019-02-11 15:49:51', '2019-02-11 15:49:51');

-- --------------------------------------------------------

--
-- Table structure for table `engagement_package_galleries`
--

CREATE TABLE `engagement_package_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `engagement_package_id` int(11) NOT NULL,
  `engagement_package_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `engagement_package_galleries`
--

INSERT INTO `engagement_package_galleries` (`id`, `engagement_package_id`, `engagement_package_description`, `created_at`, `updated_at`) VALUES
(1, 8, 'King Khan Is here', '2019-02-08 11:06:15', '2019-02-08 11:06:15'),
(2, 8, 'King Khan', '2019-02-08 11:09:07', '2019-02-08 11:09:07'),
(3, 7, 'Mahe Karim', '2019-02-08 11:25:25', '2019-02-08 11:25:25'),
(4, 7, 'King Khan', '2019-02-08 11:29:06', '2019-02-08 11:29:06'),
(5, 10, 'Hudai Vallage', '2019-02-08 11:33:05', '2019-02-08 11:33:05'),
(6, 8, 'Test Test', '2019-02-09 11:05:40', '2019-02-09 11:05:40'),
(7, 8, 'ACB', '2019-02-09 11:55:56', '2019-02-09 11:55:56'),
(8, 10, 'Test 1', '2019-02-09 11:56:12', '2019-02-09 11:56:12'),
(9, 11, 'Test 1', '2019-02-09 12:02:33', '2019-02-09 12:02:33'),
(10, 11, 'Test 2', '2019-02-09 12:02:41', '2019-02-09 12:02:41'),
(11, 11, 'Test 3', '2019-02-09 12:02:48', '2019-02-09 12:02:48'),
(12, 11, 'Test 4', '2019-02-09 12:02:54', '2019-02-09 12:02:54'),
(13, 11, 'Test 5', '2019-02-09 12:03:00', '2019-02-09 12:03:00'),
(14, 12, 'Test 1', '2019-02-11 15:50:08', '2019-02-11 15:50:08'),
(15, 12, 'Test 12', '2019-02-11 15:50:14', '2019-02-11 15:50:14'),
(16, 12, 'Test 13', '2019-02-11 15:50:20', '2019-02-11 15:50:20'),
(17, 12, 'Test 14', '2019-02-11 15:50:26', '2019-02-11 15:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `album_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `album_id`, `image`, `created_at`, `updated_at`) VALUES
(2, 5, 'gallery/wnRhLYrWzjOLIZMkMuWJfLJB174xVX5gEfbvoNah.jpeg', '2019-02-03 17:39:43', '2019-02-03 17:39:43'),
(3, 6, 'gallery/kK0xdRotvu6njCvb1mpejiifbQdrdJwndUDLZkoo.jpeg', '2019-02-04 13:38:55', '2019-02-04 13:38:55'),
(4, 10, 'gallery/FpDKt4ts4uuAfGlDs4aq0di0OCAbMbVgkjJ0108g.jpeg', '2019-02-04 14:01:19', '2019-02-04 14:01:19'),
(5, 10, '1549311182.22104313_1211382785671760_5741035004296945776_o.jpg', '2019-02-04 14:13:02', '2019-02-04 14:13:02'),
(10, 13, '1549385761.28616630_1330343263775711_4374618242316416651_o.jpg', '2019-02-05 10:56:01', '2019-02-05 10:56:01'),
(11, 13, '1549385774.28616630_1330343263775711_4374618242316416651_o.jpg', '2019-02-05 10:56:14', '2019-02-05 10:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `image`, `created_at`, `updated_at`) VALUES
(8, '1549341368.27356177_1300116360131735_3177621242084847911_o.jpg', '2019-02-04 22:36:08', '2019-02-04 22:36:08'),
(13, '1549572886.01 A- Mahe.jpg', '2019-02-07 14:54:46', '2019-02-07 14:54:46'),
(15, '1549581304.01 A- Mahe.jpg', '2019-02-07 17:15:04', '2019-02-07 17:15:04'),
(16, '1549581311.01 A- Mahe.jpg', '2019-02-07 17:15:11', '2019-02-07 17:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `logo_changes`
--

CREATE TABLE `logo_changes` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logo_changes`
--

INSERT INTO `logo_changes` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(1, '1549913022.Logo.png', '2019-02-06 18:00:00', '2019-02-11 13:23:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_19_200215_create_categories_table', 1),
(4, '2018_11_23_183115_create_suppliers_table', 1),
(5, '2019_01_30_063959_create_contacts_table', 1),
(6, '2019_02_01_195520_create_home_page_fours_sections_table', 1),
(7, '2019_02_02_150619_create_review_posts_table', 1),
(8, '2019_02_02_203340_create_logo_changes_table', 1),
(9, '2019_02_03_204811_create_albums_table', 1),
(10, '2019_02_03_224831_create_galleries_table', 2),
(11, '2019_02_04_220351_create_home_pages_table', 3),
(12, '2019_02_05_053415_create_slider_images_table', 4),
(13, '2019_02_05_191926_create_engagements_table', 5),
(14, '2019_02_06_092201_create_engagement_galleries_table', 6),
(15, '2019_02_06_205003_create_portraits_table', 7),
(16, '2019_02_06_213915_create_portraitgalleries_table', 8),
(17, '2019_02_06_215113_create_portraitgalleries_table', 9),
(18, '2019_02_07_073402_create_birthdays_table', 10),
(19, '2019_02_07_082257_create_birthdaygalleries_table', 11),
(20, '2019_02_07_183745_create_parties_table', 12),
(21, '2019_02_07_192054_create_partygalleries_table', 13),
(22, '2019_02_07_194552_create_parties_table', 14),
(23, '2019_02_08_143549_create_engagement_packages_table', 15),
(24, '2019_02_08_164038_create_engagement_package_galleries_table', 16),
(25, '2019_02_10_114500_create_wedding_packages_table', 17),
(26, '2019_02_10_121952_create_wedding_package_galleries_table', 18),
(27, '2019_02_10_135331_create_portrait_packages_table', 19),
(28, '2019_02_10_141800_create_portrait_packages_table', 20),
(29, '2019_02_10_170241_create_portrait_package_galleries_table', 21),
(30, '2019_02_10_205621_create_birthday_packages_table', 22),
(31, '2019_02_11_063746_create_birthday_package_galleries_table', 23),
(32, '2019_02_11_151817_create_party_packages_table', 24),
(33, '2019_02_11_154218_create_party_package_galleries_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `parties`
--

CREATE TABLE `parties` (
  `id` int(10) UNSIGNED NOT NULL,
  `party_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `party_thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parties`
--

INSERT INTO `parties` (`id`, `party_name`, `party_thumbnail`, `created_at`, `updated_at`) VALUES
(2, 'Mahe Karim', '1549573146_0 A - Mahe1.jpg', '2019-02-07 14:59:06', '2019-02-07 14:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `partygalleries`
--

CREATE TABLE `partygalleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `party_album_id` int(11) NOT NULL,
  `party_album_thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `party_packages`
--

CREATE TABLE `party_packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `party_package_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `party_package_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `party_packages`
--

INSERT INTO `party_packages` (`id`, `party_package_name`, `party_package_price`, `created_at`, `updated_at`) VALUES
(2, 'Down', '101', '2019-02-11 09:29:42', '2019-02-11 09:29:42'),
(4, 'Mahe karim', '195', '2019-02-11 15:52:38', '2019-02-11 15:52:38'),
(5, 'Down Test', '121', '2019-02-11 15:52:50', '2019-02-11 15:52:50');

-- --------------------------------------------------------

--
-- Table structure for table `party_package_galleries`
--

CREATE TABLE `party_package_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `party_package_id` int(11) NOT NULL,
  `party_package_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `party_package_galleries`
--

INSERT INTO `party_package_galleries` (`id`, `party_package_id`, `party_package_description`, `created_at`, `updated_at`) VALUES
(1, 3, 'Test test mahe', '2019-02-11 09:55:32', '2019-02-11 09:55:32'),
(2, 2, 'Use Use', '2019-02-11 10:32:26', '2019-02-11 10:32:26');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portraitgalleries`
--

CREATE TABLE `portraitgalleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `portrait_album_id` int(11) NOT NULL,
  `porttrait_album_thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portraitgalleries`
--

INSERT INTO `portraitgalleries` (`id`, `portrait_album_id`, `porttrait_album_thumbnail`, `created_at`, `updated_at`) VALUES
(1, 1, '1549863891_01 A- Mahe.jpg', '2019-02-10 23:44:51', '2019-02-10 23:44:51');

-- --------------------------------------------------------

--
-- Table structure for table `portraits`
--

CREATE TABLE `portraits` (
  `id` int(10) UNSIGNED NOT NULL,
  `portrait_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portrait_thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portraits`
--

INSERT INTO `portraits` (`id`, `portrait_name`, `portrait_thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'Mahe Karim', '1549863880_01 A- Mahe.jpg', '2019-02-10 23:44:40', '2019-02-10 23:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `portrait_packages`
--

CREATE TABLE `portrait_packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `portrait_package_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portrait_package_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portrait_packages`
--

INSERT INTO `portrait_packages` (`id`, `portrait_package_name`, `portrait_package_price`, `created_at`, `updated_at`) VALUES
(7, 'test', '1112', '2019-02-10 12:42:04', '2019-02-10 12:42:04'),
(8, 'Mahe Karim', '1000', '2019-02-10 12:57:04', '2019-02-10 12:57:04'),
(9, 'Silver', '100', '2019-02-11 15:51:31', '2019-02-11 15:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `portrait_package_galleries`
--

CREATE TABLE `portrait_package_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `portrait_package_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portrait_package_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portrait_package_galleries`
--

INSERT INTO `portrait_package_galleries` (`id`, `portrait_package_id`, `portrait_package_description`, `created_at`, `updated_at`) VALUES
(1, '4', 'Name Li', '2019-02-10 12:18:51', '2019-02-10 12:18:51'),
(2, '1', 'Test Li', '2019-02-10 12:18:59', '2019-02-10 12:18:59'),
(3, '7', '1222', '2019-02-10 12:42:12', '2019-02-10 12:42:12'),
(4, '8', 'Dollar R Dollar', '2019-02-10 12:57:21', '2019-02-10 12:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `review_posts`
--

CREATE TABLE `review_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review_posts`
--

INSERT INTO `review_posts` (`id`, `name`, `comment`, `image`, `created_at`, `updated_at`) VALUES
(1, 'রাশেদ করিম', 'Test Message', '1549921997.01 A- Mahe.jpg', '2019-02-11 15:53:17', '2019-02-11 15:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `image`, `created_at`, `updated_at`) VALUES
(5, '1549346454.24173913_1253965731413465_5231973327015132411_o.jpg', '2019-02-05 00:00:54', '2019-02-05 00:00:54'),
(6, '1549907521.24291874_1253965738080131_1120862873186311577_o.jpg', '2019-02-11 11:52:01', '2019-02-11 11:52:01'),
(7, '1549921565.25626052_1272785596198145_6780200108540461090_o.jpg', '2019-02-11 15:46:05', '2019-02-11 15:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_phn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_mail` text COLLATE utf8mb4_unicode_ci,
  `supplier_company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_address` longtext COLLATE utf8mb4_unicode_ci,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mahe Karim', 'admin@admin.com', NULL, '$2y$10$qOGDPjNXAZIxxLmlfbd3bOSnV58w1HkegO9lp.70bQBvFBOafPoiO', 'Qe0DAed3w90xXeY1ERwIdnGGSVJOGr4RUrDyfgcsB4ssD5tMbYUMXhbGkcCP', '2019-02-03 16:29:00', '2019-02-03 16:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_packages`
--

CREATE TABLE `wedding_packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `wedding_package_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wedding_package_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wedding_packages`
--

INSERT INTO `wedding_packages` (`id`, `wedding_package_name`, `wedding_package_price`, `created_at`, `updated_at`) VALUES
(4, 'Silver', '120', '2019-02-10 07:10:52', '2019-02-10 07:10:52'),
(5, 'Gold', '50', '2019-02-10 07:11:06', '2019-02-10 07:11:06'),
(6, 'Diamond', '800', '2019-02-10 07:11:45', '2019-02-10 07:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_package_galleries`
--

CREATE TABLE `wedding_package_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `wedding_package_id` int(11) NOT NULL,
  `wedding_package_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wedding_package_galleries`
--

INSERT INTO `wedding_package_galleries` (`id`, `wedding_package_id`, `wedding_package_description`, `created_at`, `updated_at`) VALUES
(1, 2, '25', '2019-02-10 06:29:16', '2019-02-10 06:29:16'),
(2, 3, '2525', '2019-02-10 06:30:28', '2019-02-10 06:30:28'),
(3, 2, '102', '2019-02-10 06:30:44', '2019-02-10 06:30:44'),
(4, 2, '1020', '2019-02-10 06:33:00', '2019-02-10 06:33:00'),
(5, 3, 'Amar Valobasa', '2019-02-10 06:56:04', '2019-02-10 06:56:04'),
(6, 1, 'Ei Dike Taka', '2019-02-10 06:56:19', '2019-02-10 06:56:19'),
(7, 1, 'Bolod', '2019-02-10 06:56:31', '2019-02-10 06:56:31'),
(8, 1, 'Test', '2019-02-10 06:56:39', '2019-02-10 06:56:39'),
(9, 3, 'Bolod\\', '2019-02-10 06:56:53', '2019-02-10 06:56:53'),
(10, 4, 'Best CHoice', '2019-02-10 07:11:25', '2019-02-10 07:11:25'),
(11, 6, 'Best CHoice Diamond', '2019-02-10 07:11:56', '2019-02-10 07:11:56'),
(12, 6, 'Best CHoice Diamond', '2019-02-10 07:11:57', '2019-02-10 07:11:57'),
(13, 5, 'Best CHoice Gold', '2019-02-10 07:12:03', '2019-02-10 07:12:03'),
(14, 4, 'Best CHoice Silver', '2019-02-10 07:12:10', '2019-02-10 07:12:10'),
(15, 6, 'Test Message', '2019-02-10 07:12:18', '2019-02-10 07:12:18'),
(16, 5, 'Test Message', '2019-02-10 07:12:23', '2019-02-10 07:12:23'),
(17, 4, 'Test Message', '2019-02-10 07:12:27', '2019-02-10 07:12:27'),
(18, 4, 'TEST MSG', '2019-02-10 07:12:35', '2019-02-10 07:12:35'),
(19, 5, 'TEST MSG', '2019-02-10 07:12:40', '2019-02-10 07:12:40'),
(20, 6, 'TEST MSG', '2019-02-10 07:12:45', '2019-02-10 07:12:45'),
(21, 5, 'Topics Create', '2019-02-10 07:13:00', '2019-02-10 07:13:00'),
(22, 6, 'Amar Sonar Bangla', '2019-02-11 15:49:05', '2019-02-11 15:49:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birthdaygalleries`
--
ALTER TABLE `birthdaygalleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birthdays`
--
ALTER TABLE `birthdays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birthday_packages`
--
ALTER TABLE `birthday_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birthday_package_galleries`
--
ALTER TABLE `birthday_package_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engagements`
--
ALTER TABLE `engagements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engagement_galleries`
--
ALTER TABLE `engagement_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engagement_packages`
--
ALTER TABLE `engagement_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engagement_package_galleries`
--
ALTER TABLE `engagement_package_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo_changes`
--
ALTER TABLE `logo_changes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parties`
--
ALTER TABLE `parties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partygalleries`
--
ALTER TABLE `partygalleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `party_packages`
--
ALTER TABLE `party_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `party_package_galleries`
--
ALTER TABLE `party_package_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portraitgalleries`
--
ALTER TABLE `portraitgalleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portraits`
--
ALTER TABLE `portraits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portrait_packages`
--
ALTER TABLE `portrait_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portrait_package_galleries`
--
ALTER TABLE `portrait_package_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_posts`
--
ALTER TABLE `review_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wedding_packages`
--
ALTER TABLE `wedding_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding_package_galleries`
--
ALTER TABLE `wedding_package_galleries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `birthdaygalleries`
--
ALTER TABLE `birthdaygalleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `birthdays`
--
ALTER TABLE `birthdays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `birthday_packages`
--
ALTER TABLE `birthday_packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `birthday_package_galleries`
--
ALTER TABLE `birthday_package_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `engagements`
--
ALTER TABLE `engagements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `engagement_galleries`
--
ALTER TABLE `engagement_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `engagement_packages`
--
ALTER TABLE `engagement_packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `engagement_package_galleries`
--
ALTER TABLE `engagement_package_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `logo_changes`
--
ALTER TABLE `logo_changes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `parties`
--
ALTER TABLE `parties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partygalleries`
--
ALTER TABLE `partygalleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `party_packages`
--
ALTER TABLE `party_packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `party_package_galleries`
--
ALTER TABLE `party_package_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portraitgalleries`
--
ALTER TABLE `portraitgalleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portraits`
--
ALTER TABLE `portraits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portrait_packages`
--
ALTER TABLE `portrait_packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `portrait_package_galleries`
--
ALTER TABLE `portrait_package_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review_posts`
--
ALTER TABLE `review_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wedding_packages`
--
ALTER TABLE `wedding_packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wedding_package_galleries`
--
ALTER TABLE `wedding_package_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
