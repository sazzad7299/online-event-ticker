-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 01, 2022 at 12:33 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sazzad', 'sazzad@gmail.com', NULL, '$2y$10$qWS/VWFGmNLUK83OqzuDcemQDUaBOrAsLYcFyZ4jssuJdMtANoE3W', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `cat_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `image`, `description`, `cat_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Est fuga Aut conseq', 'est-fuga-aut-conseq', '1666902649.png', 'Saepe assumenda dolo.rtrtyrtyrety', 1, 1, '2022-10-27 14:30:49', '2022-10-27 14:30:49'),
(2, 'Voluptatem lorem quo', 'voluptatem-lorem-quo', '1666905024.jpg', 'Et officia iusto vol.frdhfhdfghdfghdfgh', 1, 1, '2022-10-27 15:10:24', '2022-10-27 15:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `identifier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`identifier`,`instance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `summary`, `photo`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Industry Conferences', 'industry-conferences', '<p><span style=\"color: rgb(26, 26, 26); font-family: &quot;Real Text&quot;, Manrope, sans-serif; font-size: 18px;\">The goal of any great conference is to organize a group of people with related interests and provide them with helpful information on topics they care about. Conferences usually schedule multiple sessions spread out over days, weekends, or in some cases entire weeks.</span></p>', '1666809608-.png', NULL, 'active', '2022-10-26 12:40:08', '2022-10-26 12:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `end_date` date NOT NULL,
  `start_date` date NOT NULL,
  `seat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `detail`, `venue`, `image`, `price`, `category_id`, `status`, `end_date`, `start_date`, `seat`, `created_at`, `updated_at`) VALUES
(1, 'Trade Shows and Expos', '<p style=\"margin-right: 0px; margin-bottom: 37px; margin-left: 0px; font-size: 18px; line-height: 1.5; font-family: &quot;Real Text&quot;, Manrope, sans-serif; color: rgb(26, 26, 26);\"><span style=\"line-height: 1.5;\">Trade shows and expos aim to present new products and services from a variety of related brands in a professional manner. Typically these types of events have a theme that ties the booths together. These types of events are almost always in-person because of the nature of hands-on opportunities and trade show booths.</span></p><p style=\"margin-right: 0px; margin-bottom: 37px; margin-left: 0px; font-size: 18px; line-height: 1.5; font-family: &quot;Real Text&quot;, Manrope, sans-serif; color: rgb(26, 26, 26);\"><span style=\"line-height: 1.5;\">Trade shows and expos are especially useful for prospects who haven’t yet discovered your product or are looking to receive additional information in person. This event type is useful for companies looking to increase the number of in-person interactions they have with their customer base.</span></p><p style=\"margin-right: 0px; margin-bottom: 37px; margin-left: 0px; font-size: 18px; line-height: 1.5; font-family: &quot;Real Text&quot;, Manrope, sans-serif; color: rgb(26, 26, 26);\"><span style=\"line-height: 1.5;\">Trade show and expo event organizers often prioritize the following:</span></p><ul style=\"margin: -30px 0px 0px; font-size: clamp(16px, 2vw, 20px); line-height: 1.5; padding: 0px 0px 37px 30px; color: rgb(26, 26, 26); font-family: &quot;Real Text&quot;, Manrope, sans-serif;\"><li aria-level=\"1\" style=\"padding: 0px; position: relative; color: var(--alt); font-size: 18px !important;\">Raising brand awareness</li><li aria-level=\"1\" style=\"padding: 0px; position: relative; color: var(--alt); font-size: 18px !important;\">Offsetting costs via sponsorships</li><li aria-level=\"1\" style=\"padding: 0px; position: relative; color: var(--alt); font-size: 18px !important;\">Driving revenue through ticket sales</li><li aria-level=\"1\" style=\"padding: 0px; position: relative; color: var(--alt); font-size: 18px !important;\">Boosting lead generation</li></ul>', 'Dhaka', '1666810352-.png', 299, 1, 'active', '2022-10-29', '2022-10-28', 299, '2022-10-26 12:52:32', '2022-10-26 12:52:32'),
(2, 'Baxter Snow', 'fgdfhdfgh', 'Carter Grimes', '1667305592-.png', 35, 1, 'active', '2022-11-19', '2022-11-01', 35, '2022-11-01 06:26:32', '2022-11-01 06:26:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

DROP TABLE IF EXISTS `halls`;
CREATE TABLE IF NOT EXISTS `halls` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dPrice` int(11) NOT NULL,
  `nPrice` int(11) NOT NULL,
  `fPrice` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`id`, `name`, `desc`, `dPrice`, `nPrice`, `fPrice`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jamuna Future Park Convention Cente', '<span style=\"color: rgb(88, 89, 91); font-family: Arial, Helvetica, sans-serif; font-size: 13px;\">Jamuna Future Park Convention Center, one of the largest convention center in Bangladesh is open for your dream functions of your friends and families, it can be your exclusive wedding or any other events you wish. Three different exclusive Halls MUGHAL, NAWAB and MAHAL with their differnt sizes and rents are waiting to serve you with the touch of some Royal flavour. The Size &amp; affordable rates of JFP Covention center\'s three Halls are: 18000+sqft MAHAL has total capacity is 1500 with the rents of Tk. 150,000 || 31000+sqft NAWAB has total capacity is 2000 with the rents of Tk. 200,000 || 33000+sqft MUGHAL has total capacity is 3000 with the rents of Tk. 300,000.</span>', 15000, 20000, 30000, 'Jamuna Future Park Convention Cente44057.jpg', 1, '2022-10-26 12:18:25', '2022-10-26 12:18:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_22_111953_create_categories_table', 1),
(6, '2022_01_15_063849_create_slider_table', 1),
(7, '2022_01_15_094213_create_events_table', 1),
(8, '2022_01_21_135746_create_shoppingcart_table', 1),
(9, '2022_01_22_175628_create_orders_table', 1),
(10, '2022_01_24_124739_create_orders_event_table', 1),
(11, '2022_01_27_171937_create_admins_table', 1),
(12, '2022_03_15_161855_create_halls_table', 2),
(13, '2022_03_18_100650_hallreq', 2),
(14, '2022_10_27_192233_create_blogs_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `grand_total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `grand_total`, `phone`, `user_email`, `payment_method`, `transaction_id`, `transaction_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '299.00', '2312412412', 'cotecmailinator.com', 'rocket', '544ikl;kluyy', 'tewrtwertwer', 'complete', '2022-10-26 13:30:25', '2022-10-26 15:58:27'),
(2, 22, '299.00', '15', 'zajiduku@mailinator.com', 'rocket', 'Laboris eum eius do', '402', 'pending', '2022-10-26 15:47:37', '2022-10-26 15:47:37'),
(3, 23, '299.00', '78', 'bocepyre@mailinator.com', 'rocket', 'Ipsum Nam aut asper', '443', 'pending', '2022-10-26 15:55:31', '2022-10-26 15:55:31');

-- --------------------------------------------------------

--
-- Table structure for table `orders_events`
--

DROP TABLE IF EXISTS `orders_events`;
CREATE TABLE IF NOT EXISTS `orders_events` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double NOT NULL,
  `pay_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_events`
--

INSERT INTO `orders_events` (`id`, `order_id`, `event_id`, `user_id`, `event_name`, `qty`, `price`, `pay_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Trade Shows and Expos', 1, 299, 'complete', '2022-10-26 13:30:25', '2022-10-26 15:58:27'),
(2, 2, 1, 22, 'Trade Shows and Expos', 1, 299, 'Pending', '2022-10-26 15:47:37', '2022-10-26 15:47:37'),
(3, 3, 1, 23, 'Trade Shows and Expos', 1, 299, 'Pending', '2022-10-26 15:55:31', '2022-10-26 15:55:31');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `text`, `position`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Your Wedding, Your Rule', 'Find the best Bangladeshi Wedding Service Providers with tons of trusted reviews', 0, 'Your Wedding, Your Rule31127.jpg', 1, '2022-10-26 12:34:47', '2022-10-26 12:34:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ali Davenport', 2312412412, 'cotec@mailinator.com', NULL, '$2y$10$qWS/VWFGmNLUK83OqzuDcemQDUaBOrAsLYcFyZ4jssuJdMtANoE3W', NULL, '2022-10-26 11:59:17', '2022-10-26 11:59:17'),
(2, 'Norman Rosario', NULL, 'walabe@mailinator.com', NULL, '$2y$10$UhyEqfpQyFpb6Bq023SlU.U9RpuRpcs.DPhDKfp.ztrSB58Rt2pIG', NULL, '2022-10-26 13:56:38', '2022-10-26 13:56:38'),
(3, 'April Cohen', NULL, 'luhihubuf@mailinator.com', NULL, '$2y$10$XNWwzOb1ICkaOhFRCufqz.RcKdcIEoVGsAgUIUcWTiRqa9pEoGRja', NULL, '2022-10-26 13:59:29', '2022-10-26 13:59:29'),
(4, 'Armando Conner', NULL, 'soryw@mailinator.com', NULL, '$2y$10$J5Hg7ACaLJW4fB8IPVQpoO3eyTT7Sm2sDuIQ4rvA3nnLMrq9Ijf4m', NULL, '2022-10-26 14:04:10', '2022-10-26 14:04:10'),
(5, 'Jacob Allen', NULL, 'vuluvifar@mailinator.com', '2022-10-26 14:05:32', '$2y$10$qGZ2nkr1yprdgywxmotMtO3gYN.nJ.UYotiCxCcthbEvpWdyqXdI6', NULL, '2022-10-26 14:04:54', '2022-10-26 14:05:32'),
(6, 'Deacon Burns', NULL, 'pahutomus@mailinator.com', NULL, '$2y$10$8AMyZpNYwtCBfYQxcXjJuuxgw4ViOB2vFbWQc8SpzbHcCh4SYWrwm', NULL, '2022-10-26 14:18:25', '2022-10-26 14:18:25'),
(7, 'Claire Chase', NULL, 'mecupit@mailinator.com', NULL, '$2y$10$Vn6C.aM4CRYD7SrAS16CwOmx99sl.Jc0SLCuvllyMYpwIHw17AUQW', NULL, '2022-10-26 15:02:59', '2022-10-26 15:02:59'),
(8, 'Rowan Johns', NULL, 'figyhin@mailinator.com', NULL, '$2y$10$Xy1mYheGP.M.oWeEW0E0qOsuwd377mVAuoO503pWUJzI3IUKDsVQe', NULL, '2022-10-26 15:08:16', '2022-10-26 15:08:16'),
(9, 'Duncan Stafford', NULL, 'syno@mailinator.com', NULL, '$2y$10$uIDZoye1325LOivll9qk1u06G9vU0X8zNykMoD.rWaZq4aLQhdrTu', NULL, '2022-10-26 15:11:38', '2022-10-26 15:11:38'),
(10, 'Bruce Santiago', NULL, 'puvape@mailinator.com', NULL, '$2y$10$Hhnq4gwzD2bwnoRDIB0FE.kR6eXBXR0pF9LKEcYYDBz/eZPP90QAa', NULL, '2022-10-26 15:14:48', '2022-10-26 15:14:48'),
(11, 'Nita Campbell', NULL, 'temelowu@mailinator.com', NULL, '$2y$10$KtDY1NCoagFECe1uysd24ec0QF/Njp8kHAuJp5cFS3JtsBAYF4LI6', NULL, '2022-10-26 15:17:39', '2022-10-26 15:17:39'),
(12, 'Celeste Sellers', NULL, 'fagenov@mailinator.com', NULL, '$2y$10$YVc7qB11XPHNzpAk.g5xX.0oB3lh/ihCyhKUtLJfccEOpf4GnucXK', NULL, '2022-10-26 15:19:19', '2022-10-26 15:19:19'),
(13, 'Seth Coleman', NULL, 'netafy@mailinator.com', NULL, '$2y$10$Qk21wceGBtbWX3byJQw/LeTyDqi5o2yWEYMXkhrg.7CN42CwNTFgO', NULL, '2022-10-26 15:23:50', '2022-10-26 15:23:50'),
(14, 'Kuame Stark', NULL, 'savuqusug@mailinator.com', NULL, '$2y$10$D9QRA5btyf/f/BqHADk4IO9e0ZslRbrr8duScDTnJttCMMLyJAQjq', NULL, '2022-10-26 15:24:40', '2022-10-26 15:24:40'),
(15, 'Logan Fry', NULL, 'mysydocary@mailinator.com', NULL, '$2y$10$vI7.RMuvTTAAgnRlo4geC..xy5rdZf9hof6rgzy3Jgv8orhAa8ZSa', NULL, '2022-10-26 15:25:01', '2022-10-26 15:25:01'),
(16, 'Madonna Becker', NULL, 'qyliqeqen@mailinator.com', NULL, '$2y$10$N/XX8mno9L03gyNZzav/i.6sH6EI65WsMHcBcdK7BpxLOiSWprAe.', NULL, '2022-10-26 15:25:23', '2022-10-26 15:25:23'),
(17, 'Blaze Morin', NULL, 'tahusecov@mailinator.com', NULL, '$2y$10$IIH5BuTC7So8inyLOu0BtOueOAHeEJJQWh5eyB/9QKa2iBOXkvvx.', NULL, '2022-10-26 15:25:51', '2022-10-26 15:25:51'),
(18, 'Philip Butler', NULL, 'zoru@mailinator.com', NULL, '$2y$10$f.d6JxoJLQqPaETOw2Mui.vekt8TjuSCxBrb7b/.byY7goCc1e4p.', NULL, '2022-10-26 15:26:38', '2022-10-26 15:26:38'),
(19, 'Mason Klein', NULL, 'turasavo@mailinator.com', NULL, '$2y$10$.erUMakvpVLF5wWAYfM5CeOMP1w6qmUrr.GaR4IuXaccHpkzwHO1y', NULL, '2022-10-26 15:29:20', '2022-10-26 15:29:20'),
(20, 'Jolene Hartman', NULL, 'xypodareq@mailinator.com', NULL, '$2y$10$2RVX8h8OnXYSeR3EdDOqjOF9CqzPuTCJEDoAFYPi/hUOlS.bUn8MK', NULL, '2022-10-26 15:37:04', '2022-10-26 15:37:04'),
(21, 'Bell Baird', NULL, 'bamihagil@mailinator.com', NULL, '$2y$10$6D/s55UldlcTwicCvZPdFe/t4ZnreZI1HkmIHm9K.aI1AibgNm0A2', NULL, '2022-10-26 15:38:04', '2022-10-26 15:38:04'),
(22, 'Denise Davenport', 15, 'cejabic@mailinator.com', '2022-10-26 15:48:13', '$2y$10$Fn6TL.D2oPRr/QNKxy058.KeuxvThyCgXxqkMfBmj1Fl4kYEsXUwC', NULL, '2022-10-26 15:40:23', '2022-10-26 15:48:13'),
(23, 'Charity Robertson', 78, 'vygodywepu@mailinator.com', '2022-10-26 15:55:44', '$2y$10$4E7HbzFrYJxv5hBagszEYetyZoFOumqGuUiX.CjFWJkRdqY/tAUTq', NULL, '2022-10-26 15:54:57', '2022-10-26 15:55:44'),
(24, 'Yolanda Rodgers', NULL, 'vepuqobemo@mailinator.com', NULL, '$2y$10$dD0hLLddFF6E1dGeuqczMOHOf53BqT/Ir9hbUWYRMfSQv8MU.bfSu', NULL, '2022-11-01 06:29:55', '2022-11-01 06:29:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
