-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 02:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photo_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2020_03_28_141852_create_admins_table', 1),
(2, '2020_04_06_134338_create_uploads_table', 1),
(3, '2020_03_28_061122_create_signedusers_table', 2),
(4, '2020_03_28_073544_create_contacts_table', 2),
(5, '2020_03_29_064950_create_photographies_table', 3),
(6, '2020_04_03_144953_create_stores_table', 3),
(7, '2020_04_03_165042_create_orders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Shoot_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Amount` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `type`, `Shoot_type`, `User_id`, `created_at`, `updated_at`, `Amount`) VALUES
(2, 'Vikram', 'Baby-Shoot', 'Photos and Videos', '3', '2020-04-09 01:18:29', '2020-04-09 01:18:29', 8000),
(3, 'Sunil Panchal', 'Fashion Shoot', 'Videos and Photos', '7', '2020-04-09 01:28:36', '2020-04-09 01:28:36', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `photographies`
--

CREATE TABLE `photographies` (
  `id` int(10) UNSIGNED NOT NULL,
  `Type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Reference_No` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Home_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Venue_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Others` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photographies`
--

INSERT INTO `photographies` (`id`, `Type`, `name`, `email`, `Contact`, `Reference_No`, `Home_address`, `Venue_address`, `Others`, `Date`, `created_at`, `updated_at`) VALUES
(1, 'Fashion Shoot', 'Vikram', 'vikramttri123@gmail.com', '8976854321', '8985499401', 'Punjab', 'Ludhiana', 'no', '2020-04-16', '2020-04-09 01:05:18', '2020-04-09 01:05:18'),
(2, 'Fashion Shoot', 'Vikram', 'vikramttri123@gmail.com', '8976854321', '8985499401', 'Punjab', 'Ludhiana', 'no', '2020-04-16', '2020-04-09 01:11:00', '2020-04-09 01:11:00'),
(4, 'PreWedding', 'Vikram', 'vikramttri123@gmail.com', '9877005608', '9877665521', 'Jaipur', 'Mumbai', 'no', '2020-04-14', '2020-04-09 01:26:54', '2020-04-09 01:26:54'),
(5, 'PreWedding', 'Vikram', 'vikramttri123@gmail.com', '9877005608', '9877665521', 'Jaipur', 'Mumbai', 'no', '2020-04-14', '2020-04-09 01:27:33', '2020-04-09 01:27:33'),
(6, 'PreWedding', 'Vikram', 'vikramttri123@gmail.com', '9877005608', '9877665521', 'Jaipur', 'Mumbai', 'no', '2020-04-14', '2020-04-09 01:27:41', '2020-04-09 01:27:41'),
(7, 'Fashion Shoot', 'Sunil Panchal', 'sunilpanchal123.sp@gmail.com', '7697767333', '9877005608', 'Jaipur', 'Vill.-Kheda sec. no.3', 'no', '2020-04-16', '2020-04-09 01:28:27', '2020-04-09 01:28:27'),
(8, 'Fashion Shoot', 'Sunil Panchal', 'sunilpanchal123.sp@gmail.com', '7697767333', '9877005608', 'Jaipur', 'Vill.-Kheda sec. no.3', 'no', '2020-04-16', '2020-04-09 01:32:55', '2020-04-09 01:32:55'),
(9, 'Fashion Shoot', 'Sunil Panchal', 'sunilpanchal123.sp@gmai.com', '7697767333', '9877005608', 'No', 'Vill.-Kheda sec. no.3', 'no', '2020-04-23', '2020-04-09 01:33:24', '2020-04-09 01:33:24'),
(10, 'Fashion Shoot', 'Sunil Panchal', 'sunilpanchal123.sp@gmailcom', '7697767333', '9877005608', 'No', 'Vill.-Kheda sec. no.3', 'no', '2020-04-23', '2020-04-09 01:33:41', '2020-04-09 01:33:41'),
(11, 'Fashion Shoot', 'Sunil Panchal', 'sunilpanchal13.sp@gmail.com', '7697767333', '9877005608', '9977959596', 'Vill.-Kheda sec. no.3', 'no', '2020-04-15', '2020-04-09 01:35:25', '2020-04-09 01:35:25'),
(12, 'Fashion Shoot', 'Sunil Panchal', 'vikramttri153@gmail.com', '7697767333', '9877005608', '9815997527', 'Vill.-Kheda sec. no.3', 'no', '2020-04-23', '2020-04-09 01:37:18', '2020-04-09 01:37:18'),
(13, 'Fashion Shoot', 'Sunil Panchal', 'vikramttri13@gmail.com', '7697767333', '98770056085', '9815997527', 'Vill.-Kheda sec. no.3', 'no', '2020-04-23', '2020-04-09 01:37:27', '2020-04-09 01:37:27'),
(15, 'Fashion Shoot', 'jkfkdjfkdjfk', 'hjfjdjd@gmail.com', '9815997527', '9877005608', 'kfjkkdj', 'Lovely Professional University, Phagwara', 'no', '2020-04-24', '2020-04-09 01:44:34', '2020-04-09 01:44:34'),
(16, 'Fashion Shoot', 'jkfkdjfkdjfk', 'vikramttri13@gmail.com', '9815997527', '9877005608', 'kfjkkdj', 'Lovely Professional University, Phagwara', 'no', '2020-04-24', '2020-04-09 01:44:57', '2020-04-09 01:44:57'),
(17, 'Fashion Shoot', 'jkfkdjfkdjfk', 'vikramttri13@gmail.com', '9815997527', '9877005608', 'kfjkkdj', 'Lovely Professional University, Phagwara', 'no', '2020-04-24', '2020-04-09 01:45:04', '2020-04-09 01:45:04'),
(18, 'Fashion Shoot', 'Sunil Panchal', 'sunilpanchal123.sp@gmail.com', '7697767333', '9877005608', 'jkjkjk', 'Vill.-Kheda sec. no.3', 'no', '2020-04-22', '2020-04-09 01:45:58', '2020-04-09 01:45:58');

-- --------------------------------------------------------

--
-- Table structure for table `signedusers`
--

CREATE TABLE `signedusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `signedusers`
--

INSERT INTO `signedusers` (`id`, `fname`, `lname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sunil', 'Panchal', 'sunilpanchal123.sp@gmail.com', NULL, '12345678', NULL, '2020-04-08 11:51:49', '2020-04-08 11:51:49'),
(2, 'Kushwaha', 'vikash', 'kushwahah@gmail.com', NULL, '12345678', NULL, '2020-04-08 12:59:33', '2020-04-08 12:59:33'),
(5, 'Sunil', 'Panchal', 'vikramattri123@gmail.com', NULL, 'Vikram99', NULL, '2020-04-09 03:35:09', '2020-04-09 03:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(10) UNSIGNED NOT NULL,
  `Type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Shoot_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `Type`, `Shoot_type`, `Amount`, `created_at`, `updated_at`) VALUES
(1, 'PreWedding', 'Normal Shoot', '20000', NULL, NULL),
(2, 'PreWedding', 'cinematography', '50000', NULL, NULL),
(3, 'Wedding', 'Traditional shoot', '40000', NULL, NULL),
(4, 'Wedding', 'Candid shoot', '20000', NULL, NULL),
(5, 'Wedding', 'Wedding Cinematography', '50000', NULL, NULL),
(6, 'Baby-Shoot', 'Photos', '3000', NULL, NULL),
(7, 'Fashion Shoot', 'Photos', '3000', NULL, NULL),
(8, 'PreWedding', 'Normal shoot and cinematography', '70000', NULL, NULL),
(9, 'Wedding', 'Traditional shoot and Candid shoot and Wedding Cinematography', '110000', NULL, NULL),
(10, 'Wedding', 'Traditional shoot and Candid shoot', '60000', NULL, NULL),
(11, 'Wedding', 'Candid shoot and Wedding Cinematography', '70000', NULL, NULL),
(12, 'Wedding', 'Traditional shoot and Wedding Cinematography', '90000', NULL, NULL),
(13, 'Baby-Shoot', 'Videos', '5000', NULL, NULL),
(14, 'Baby-Shoot', 'Photos and Videos', '8000', NULL, NULL),
(15, 'Fashion Shoot', 'Videos and Photos ', '6000', NULL, NULL),
(16, 'Fashion Shoot', 'Photos and Videos and Photos', '6000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `name`, `oname`, `category`, `type`, `created_at`, `updated_at`) VALUES
(20, '1.jpeg', '5.jpeg', 'preweddingimage', 'horizontal', '2020-04-07 10:57:47', '2020-04-07 10:57:47'),
(21, '2.jpeg', '6.jpeg', 'preweddingimage', 'horizontal', '2020-04-07 10:58:34', '2020-04-07 10:58:34'),
(22, '3.jpeg', '7.jpeg', 'preweddingimage', 'horizontal', '2020-04-07 10:59:08', '2020-04-07 10:59:08'),
(23, '4.jpeg', '8.jpeg', 'preweddingimage', 'horizontal', '2020-04-07 10:59:18', '2020-04-07 10:59:18'),
(24, '5.jpeg', '9.jpeg', 'preweddingimage', 'horizontal', '2020-04-07 10:59:31', '2020-04-07 10:59:31'),
(25, '6.jpeg', '10.jpeg', 'preweddingimage', 'horizontal', '2020-04-07 10:59:47', '2020-04-07 10:59:47'),
(26, '7.jpeg', '1.jpeg', 'preweddingimage', 'vertical', '2020-04-07 11:03:06', '2020-04-07 11:03:06'),
(27, '8.jpeg', '2.jpeg', 'preweddingimage', 'vertical', '2020-04-07 11:03:28', '2020-04-07 11:03:28'),
(28, '9.jpeg', '3.jpeg', 'preweddingimage', 'vertical', '2020-04-07 11:05:13', '2020-04-07 11:05:13'),
(29, '10.jpeg', '4.jpeg', 'preweddingimage', 'vertical', '2020-04-07 11:05:28', '2020-04-07 11:05:28'),
(31, '1.jpg', '1.jpg', 'weddingimage', 'horizontal', '2020-04-07 11:10:44', '2020-04-07 11:10:44'),
(32, '2.jpg', '2.jpg', 'weddingimage', 'horizontal', '2020-04-07 11:10:58', '2020-04-07 11:10:58'),
(33, '3.jpg', '3.jpg', 'weddingimage', 'horizontal', '2020-04-07 11:11:22', '2020-04-07 11:11:22'),
(34, '4.jpg', '4.jpg', 'weddingimage', 'horizontal', '2020-04-07 11:11:32', '2020-04-07 11:11:32'),
(35, '5.jpg', '5.jpg', 'weddingimage', 'horizontal', '2020-04-07 11:11:41', '2020-04-07 11:11:41'),
(36, '6.jpg', '6.jpg', 'weddingimage', 'horizontal', '2020-04-07 11:11:51', '2020-04-07 11:11:51'),
(37, '7.jpg', '7.jpg', 'weddingimage', 'horizontal', '2020-04-07 11:13:24', '2020-04-07 11:13:24'),
(38, '8.jpg', '8.jpg', 'weddingimage', 'horizontal', '2020-04-07 11:13:35', '2020-04-07 11:13:35'),
(39, '9.jpg', '9.jpg', 'weddingimage', 'horizontal', '2020-04-07 11:13:48', '2020-04-07 11:13:48'),
(40, '10.jpg', '10.jpg', 'weddingimage', 'horizontal', '2020-04-07 11:14:01', '2020-04-07 11:14:01'),
(41, '11.jpg', '11.jpg', 'weddingimage', 'horizontal', '2020-04-07 11:14:15', '2020-04-07 11:14:15'),
(42, '12.jpg', '12.jpg', 'weddingimage', 'horizontal', '2020-04-07 11:14:24', '2020-04-07 11:14:24'),
(43, '13.jpg', '13.jpg', 'weddingimage', 'vertical', '2020-04-07 11:14:35', '2020-04-07 11:14:35'),
(44, '14.jpg', '14.jpg', 'weddingimage', 'vertical', '2020-04-07 11:14:45', '2020-04-07 11:14:45'),
(45, '15.jpg', '15.jpg', 'weddingimage', 'vertical', '2020-04-07 11:14:55', '2020-04-07 11:14:55'),
(46, '16.jpg', '16.jpg', 'weddingimage', 'vertical', '2020-04-07 11:15:04', '2020-04-07 11:15:04'),
(47, '17.jpg', '17.jpg', 'weddingimage', 'vertical', '2020-04-07 11:15:13', '2020-04-07 11:15:13'),
(48, '18.jpg', '18.jpg', 'weddingimage', 'vertical', '2020-04-07 11:15:24', '2020-04-07 11:15:24'),
(49, '19.jpg', '19.jpg', 'weddingimage', 'vertical', '2020-04-07 11:15:38', '2020-04-07 11:15:38'),
(50, '20.jpg', '20.jpg', 'weddingimage', 'vertical', '2020-04-07 11:15:49', '2020-04-07 11:15:49'),
(51, '1.jpg', '1.jpg', 'kidsimage', 'horizontal', '2020-04-07 11:28:01', '2020-04-07 11:28:01'),
(52, '2.jpg', '2.jpg', 'kidsimage', 'horizontal', '2020-04-07 11:28:09', '2020-04-07 11:28:09'),
(53, '3.jpg', '3.jpg', 'kidsimage', 'horizontal', '2020-04-07 11:28:24', '2020-04-07 11:28:24'),
(54, '4.jpg', '4.jpg', 'kidsimage', 'horizontal', '2020-04-07 11:28:33', '2020-04-07 11:28:33'),
(55, '5.jpg', '5.jpg', 'kidsimage', 'horizontal', '2020-04-07 11:28:41', '2020-04-07 11:28:41'),
(56, '6.jpg', '6.jpg', 'kidsimage', 'horizontal', '2020-04-07 11:28:53', '2020-04-07 11:28:53'),
(57, '7.jpg', '7.jpg', 'kidsimage', 'vertical', '2020-04-07 11:29:42', '2020-04-07 11:29:42'),
(58, '1.jpg', '1.jpg', 'modelingimage', 'vertical', '2020-04-07 11:37:22', '2020-04-07 11:37:22'),
(59, '2.jpg', '2.jpg', 'modelingimage', 'vertical', '2020-04-07 11:37:31', '2020-04-07 11:37:31'),
(60, '3.jpg', '3.jpg', 'modelingimage', 'vertical', '2020-04-07 11:37:39', '2020-04-07 11:37:39'),
(61, '4.jpg', '4.jpg', 'modelingimage', 'vertical', '2020-04-07 11:37:47', '2020-04-07 11:37:47'),
(62, '5.jpg', '5.jpg', 'modelingimage', 'vertical', '2020-04-07 11:37:57', '2020-04-07 11:37:57'),
(63, '6.jpg', '6.jpg', 'modelingimage', 'vertical', '2020-04-07 11:38:07', '2020-04-07 11:38:07'),
(64, '7.jpg', '7.jpg', 'modelingimage', 'vertical', '2020-04-07 11:38:17', '2020-04-07 11:38:17'),
(65, '8.jpg', '8.jpg', 'modelingimage', 'vertical', '2020-04-07 11:38:27', '2020-04-07 11:38:27'),
(66, '9.jpg', '9.jpg', 'modelingimage', 'vertical', '2020-04-07 11:38:36', '2020-04-07 11:38:36'),
(67, '10.jpg', '10.jpg', 'modelingimage', 'vertical', '2020-04-07 11:38:45', '2020-04-07 11:38:45'),
(68, '11.jpg', '11.jpg', 'modelingimage', 'vertical', '2020-04-07 11:38:55', '2020-04-07 11:38:55'),
(69, '12.jpg', '12.jpg', 'modelingimage', 'vertical', '2020-04-07 11:39:04', '2020-04-07 11:39:04'),
(70, '13.jpg', '13.jpg', 'modelingimage', 'vertical', '2020-04-07 11:39:13', '2020-04-07 11:39:13'),
(71, '14.jpg', '14.jpg', 'modelingimage', 'vertical', '2020-04-07 11:39:23', '2020-04-07 11:39:23'),
(72, '15.jpg', '15.jpg', 'modelingimage', 'vertical', '2020-04-07 11:39:31', '2020-04-07 11:39:31'),
(73, '16.jpg', '16.jpg', 'modelingimage', 'vertical', '2020-04-07 11:39:41', '2020-04-07 11:39:41'),
(74, '17.jpg', '17.jpg', 'modelingimage', 'vertical', '2020-04-07 11:39:49', '2020-04-07 11:39:49'),
(75, '18.jpg', '18.jpg', 'modelingimage', 'vertical', '2020-04-07 11:39:58', '2020-04-07 11:39:58'),
(76, '19.jpg', '19.jpg', 'modelingimage', 'vertical', '2020-04-07 11:40:09', '2020-04-07 11:40:09'),
(77, '20.jpg', '20.jpg', 'modelingimage', 'vertical', '2020-04-07 11:40:19', '2020-04-07 11:40:19'),
(78, '21.jpg', '21.jpg', 'modelingimage', 'horizontal', '2020-04-07 11:40:35', '2020-04-07 11:40:35'),
(79, '22.jpg', '22.jpg', 'modelingimage', 'horizontal', '2020-04-07 11:40:45', '2020-04-07 11:40:45'),
(80, '23.jpg', '23.jpg', 'modelingimage', 'horizontal', '2020-04-07 11:40:57', '2020-04-07 11:40:57'),
(81, '24.jpg', '24.jpg', 'modelingimage', 'horizontal', '2020-04-07 11:41:04', '2020-04-07 11:41:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD UNIQUE KEY `admins_password_unique` (`password`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photographies`
--
ALTER TABLE `photographies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signedusers`
--
ALTER TABLE `signedusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `signedusers_email_unique` (`email`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photographies`
--
ALTER TABLE `photographies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `signedusers`
--
ALTER TABLE `signedusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
