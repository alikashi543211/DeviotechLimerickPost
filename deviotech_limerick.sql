-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 08:01 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deviotech_limerick`
--

-- --------------------------------------------------------

--
-- Table structure for table `acknowledges`
--

CREATE TABLE `acknowledges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keyed_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auto_Date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Insertion_Date_Ack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deceased_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailAddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mass_detail_ack` tinyint(1) NOT NULL DEFAULT 0,
  `date_time_ack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wordCount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wordCost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_img_ack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size_ack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_number_1_ack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_cost_1_ack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_number_2_ack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images_cost_2_ack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spcl_ins_permit_ack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spcl_ins_free_ack` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wordsCost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picCost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Total_amount_1_ack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_ack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `final_cost_ack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ack_payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ack_receipt_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ack_booking_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ack_counter_taken` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ack_machine_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ack_CC_receipt_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ack_m_c_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ack_comment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chruch_ack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acknowledges`
--

INSERT INTO `acknowledges` (`id`, `keyed_by`, `auto_Date`, `admin_name`, `type_1`, `Insertion_Date_Ack`, `deceased_name`, `address`, `contactName`, `telNumber`, `emailAddress`, `mass_detail_ack`, `date_time_ack`, `message`, `wordCount`, `wordCost`, `add_img_ack`, `size_ack`, `total_number_1_ack`, `images_cost_1_ack`, `total_number_2_ack`, `images_cost_2_ack`, `spcl_ins_permit_ack`, `spcl_ins_free_ack`, `wordsCost`, `picCost`, `Total_amount_1_ack`, `discount_ack`, `discount_type`, `discount_rate`, `discount_amount`, `final_cost_ack`, `ack_payment_method`, `ack_receipt_number`, `ack_booking_number`, `ack_counter_taken`, `ack_machine_no`, `ack_CC_receipt_number`, `ack_m_c_no`, `ack_comment`, `chruch_ack`, `created_at`, `updated_at`) VALUES
(11, NULL, '2023-05-03', 'FurqanMalik', 'Acknowledgement', '2022-01-03', 'sdvsd', 'sdbsbd', 'sdbsdb', '4645645', 'sdv@gmail.com', 0, '03/03/2021 18:04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', '112', '34.6', 'Yes', '1', '2', '20', NULL, NULL, 'Yes', 'sdsseg', '34.6', '20', '54.6', 'discount_yes', '1', '20', '10.920', '43.680', NULL, NULL, '09090', NULL, NULL, NULL, NULL, NULL, '102 Gulberg Washington', '2021-03-29 08:05:11', '2021-05-03 03:16:22'),
(12, NULL, '2023-06-03', 'shahzad', 'Acknowledgement', '2022-01-03', 'sddf', 'sdvsvd', 'sdvsd', 'sdv', 'sdv@gmail.com', 0, '18/03/2021 16:02', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', '111', '34.3', 'Yes', '1', '2', '20', NULL, NULL, 'Yes', 'sdvsdvsd', '34.3', '20', '54.3', 'discount_yes', 'General', '20', '10.860', '43.440', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102 Gulberg Washington', '2021-03-30 06:02:43', '2021-03-30 06:02:43'),
(13, 'Smith', '2021-08-04', 'shehran', 'Acknowledgement', '2021-10-04', 'dd', 'dd', 'dd', '121', 'dd@gmail.com', 0, '08/04/2021 17:39', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', '121', '37.3', 'Yes', '1', '1', '10', NULL, NULL, 'Yes', 'dd', '37.3', '10', '47.3', 'discount_yes', 'General', '20', '11.460', '45.840', NULL, NULL, '888', NULL, '1234567890', NULL, NULL, NULL, 'dd', '2021-04-08 07:47:05', '2021-05-03 05:19:33'),
(14, NULL, '2023-02-04', 'TestKashif', 'Acknowledgement', '2022-05-04', 'sdvsd', 'asc', 'sacsa', '4645645', 'asca@gmail.com', 0, '17/04/2021 08:45 am', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', '121', '37.3', 'Yes', '1', '2', '20', NULL, NULL, 'Yes', 'sdv', '37.3', '20', '57.3', 'discount_no', NULL, NULL, '0', '57.300', 'Cash', '32423', '222', 'Doee', NULL, NULL, '000', NULL, 'asc', '2021-04-26 05:55:44', '2021-05-03 03:14:50'),
(15, NULL, '2021-05-31', 'saib', 'Acknowledgement', '2021-05-29', 'Test', 'Test Address', 'slkdjflk', '02348902348', 'testseller3@gmail.com', 0, NULL, 'Test Message Test Message Test Message Test Message Test Message Test Message Test Message Test Message Test Message Test Message Test Message', '200', '61.5', 'Yes', '1', '3', '45.60', NULL, NULL, 'Yes', 'Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions Test instructions', '61.5', '45.60', '107.10', 'discount_no', NULL, NULL, '0', '107.10', 'Cash', '24892734982', '9283749327489', 'Jim', NULL, NULL, NULL, NULL, NULL, '2021-05-31 07:26:54', '2021-05-31 07:26:54'),
(16, NULL, '2021-05-31', 'saib', 'Acknowledgement', '2021-05-15', 'TEST', 'TEST', 'TEST', '34534', 'test@gmail.com', 0, NULL, 'test', '300', '91.5', 'Yes', '1', '3', '45.60', NULL, NULL, 'Yes', 'TEST', '91.5', '45.60', '137.10', 'discount_no', NULL, NULL, '0', '137.10', 'Cash', '24892734982', '9283749327489', 'Tony', NULL, NULL, NULL, NULL, NULL, '2021-05-31 07:37:19', '2021-05-31 07:37:19'),
(17, NULL, '2021-05-31', 'saib', 'Acknowledgement', '2021-05-15', 'TEST', 'TEST', 'TEST', '34534', 'test@gmail.com', 0, NULL, 'test', '300', '91.5', 'Yes', '1', '3', '45.60', NULL, NULL, 'Yes', 'TEST', '91.5', '45.60', '137.10', 'discount_no', NULL, NULL, '0', '137.10', 'Cash', '24892734982', '9283749327489', 'Tony', NULL, NULL, NULL, NULL, NULL, '2021-05-31 07:37:38', '2021-05-31 07:37:38'),
(18, NULL, '2021-06-01', 'saib', 'Acknowledgement', '2021-06-12', 'Test', 'street no 5', 'Kashif', '324234234234', 'testseller3@gmail.com', 0, NULL, 'Test Message ...', '300', '91.5', 'Yes', '1', '1', '18.30', NULL, NULL, 'Yes', 'Test Special Instructions', '91.5', '18.30', '109.80', 'discount_no', NULL, NULL, '0', '109.80', 'Card', '234324234', '2342423423', 'Tony', NULL, '098098098098', NULL, 'Test', NULL, '2021-05-31 23:27:47', '2021-05-31 23:27:47'),
(19, NULL, '2021-06-01', 'saib', 'Acknowledgement', '2021-06-12', 'Test', 'street no 5', 'Asif', '34534', 'asif@gmail.com', 0, '11/06/2021 08:15 am', 'm', '900', '271.5', 'Yes', '1', '1', '18.30', NULL, NULL, 'Yes', 'hhh', '271.5', '18.30', '289.80', 'discount_no', NULL, NULL, '0', '289.80', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102 Gulberg Washington', '2021-06-01 01:29:19', '2021-06-01 01:29:19'),
(20, NULL, '2021-06-01', 'saib', 'Acknowledgement', '2021-06-12', 'Test', 'street no 5', 'Asif', '34534', 'asif@gmail.com', 0, '05/06/2021 11:31 am', 'm', '900', NULL, 'Yes', '1', NULL, NULL, NULL, NULL, 'Yes', 'hhh', '0', '0', '0', 'discount_no', NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102 Gulberg Washington', '2021-06-01 01:32:12', '2021-06-01 01:32:12'),
(21, NULL, '2021-06-01', 'saib', 'Acknowledgement', '2021-06-19', 'Test Deceased Name', 'street no 5', 'Kashif', '34534', 'mollie@gmail.com', 0, NULL, 'kjj', '878', '264.9', 'Yes', '1', '1', '18.30', NULL, NULL, 'Yes', 'lkjkj', '264.9', '18.30', '283.20', 'discount_no', NULL, NULL, '0', '283.20', 'Cash', '87897987', NULL, 'Tony', NULL, NULL, NULL, NULL, NULL, '2021-06-01 01:33:53', '2021-06-01 01:33:53'),
(22, NULL, '2021-06-04', 'saib', 'Acknowledgement', '2021-06-12', 'Test', 'Test', 'test', '24234324', 'test@gmail.com', 0, '12/06/2021 15:41 pm', 'Test', '200', '20', 'Yes', '2', '1', '18.30', '1', '36.6', 'Yes', 'Test special instructions', '0', '36.60', '36.00', 'discount_no', NULL, NULL, '0', '36.000', 'Cash', '234234234324', NULL, 'Jim', NULL, NULL, NULL, NULL, '102 Gulberg Washington', '2021-06-04 05:43:38', '2021-06-04 05:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `aniversary_nos`
--

CREATE TABLE `aniversary_nos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aniversary_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aniversary_nos`
--

INSERT INTO `aniversary_nos` (`id`, `aniversary_no`, `created_at`, `updated_at`) VALUES
(1, '2525', '2021-03-25 06:14:24', '2021-03-25 06:14:24'),
(2, '0900', '2021-03-25 06:15:25', '2021-03-25 06:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `chruches`
--

CREATE TABLE `chruches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chruch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chruches`
--

INSERT INTO `chruches` (`id`, `chruch`, `created_at`, `updated_at`) VALUES
(1, '102 Gulberg Washington', '2021-03-25 07:08:20', '2021-03-29 01:08:17');

-- --------------------------------------------------------

--
-- Table structure for table `discount_rates`
--

CREATE TABLE `discount_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_types_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discount_rates`
--

INSERT INTO `discount_rates` (`id`, `rate`, `discount_types_id`, `created_at`, `updated_at`) VALUES
(1, '20', 1, '2021-03-18 05:27:09', '2021-03-18 05:27:09'),
(2, '334', 3, '2021-03-18 05:30:05', '2021-03-18 05:30:05'),
(4, '22', 1, '2021-03-18 05:46:42', '2021-03-18 05:46:42'),
(5, '80', 4, '2021-03-24 08:12:26', '2021-03-24 08:12:26');

-- --------------------------------------------------------

--
-- Table structure for table `discount_types`
--

CREATE TABLE `discount_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discount_types`
--

INSERT INTO `discount_types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'General', '2021-03-18 04:37:57', '2021-03-18 04:37:57'),
(3, 'Specific', '2021-03-18 04:38:48', '2021-03-18 04:38:48'),
(4, 'Gold', '2021-03-24 08:12:07', '2021-03-24 08:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `dropbox_tokens`
--

CREATE TABLE `dropbox_tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `refresh_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expires_in` datetime NOT NULL,
  `token_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scope` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `acknowledge_id` bigint(20) UNSIGNED DEFAULT NULL,
  `meme_id` bigint(20) UNSIGNED DEFAULT NULL,
  `img_type_1_ack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_cost_1_ack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_type_2_ack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_cost_2_ack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_type_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_cost_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_type_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_cost_2inch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `acknowledge_id`, `meme_id`, `img_type_1_ack`, `img_cost_1_ack`, `img_type_2_ack`, `img_cost_2_ack`, `img_type_1`, `img_cost_1`, `img_type_2`, `img_cost_2inch`, `created_at`, `updated_at`) VALUES
(14, 11, NULL, 'B_W', '10', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-29 08:05:11', '2021-03-29 08:05:11'),
(15, 11, NULL, 'Color', '10', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-29 08:05:11', '2021-03-29 08:05:11'),
(16, NULL, 4, NULL, NULL, NULL, NULL, 'B_W', '10', NULL, NULL, '2021-03-30 00:23:05', '2021-03-30 00:23:05'),
(17, NULL, 4, NULL, NULL, NULL, NULL, 'Color', '10', NULL, NULL, '2021-03-30 00:23:06', '2021-03-30 00:23:06'),
(18, NULL, 4, NULL, NULL, NULL, NULL, 'B_W', '10', NULL, NULL, '2021-03-30 00:23:06', '2021-03-30 00:23:06'),
(19, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 'B_W', '30', '2021-03-30 00:23:06', '2021-03-30 00:23:06'),
(20, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 'Color', '30', '2021-03-30 00:23:06', '2021-03-30 00:23:06'),
(21, NULL, 4, NULL, NULL, NULL, NULL, 'B_W', '10', NULL, NULL, '2021-03-30 00:23:06', '2021-03-30 00:23:06'),
(22, NULL, 4, NULL, NULL, NULL, NULL, 'Color', '10', NULL, NULL, '2021-03-30 00:23:06', '2021-03-30 00:23:06'),
(23, NULL, 4, NULL, NULL, NULL, NULL, 'B_W', '10', NULL, NULL, '2021-03-30 00:23:06', '2021-03-30 00:23:06'),
(24, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 'B_W', '30', '2021-03-30 00:23:07', '2021-03-30 00:23:07'),
(25, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 'Color', '30', '2021-03-30 00:23:07', '2021-03-30 00:23:07'),
(26, 12, NULL, 'Color', '10', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-30 06:02:43', '2021-03-30 06:02:43'),
(27, 12, NULL, 'Color', '10', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-30 06:02:43', '2021-03-30 06:02:43'),
(28, NULL, 5, NULL, NULL, NULL, NULL, 'Color', '10', NULL, NULL, '2021-03-30 06:07:28', '2021-03-30 06:07:28'),
(29, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, 'Color', '30', '2021-03-30 06:07:28', '2021-03-30 06:07:28'),
(30, NULL, 5, NULL, NULL, NULL, NULL, 'Color', '10', NULL, NULL, '2021-03-30 06:07:28', '2021-03-30 06:07:28'),
(31, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, 'Color', '30', '2021-03-30 06:07:28', '2021-03-30 06:07:28'),
(32, NULL, 6, NULL, NULL, NULL, NULL, 'Color', '10', NULL, NULL, '2021-03-30 08:48:53', '2021-03-30 08:48:53'),
(33, NULL, 8, NULL, NULL, NULL, NULL, 'Color', '10', NULL, NULL, '2021-04-30 06:33:11', '2021-04-30 06:33:11'),
(34, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, 'Color', '30', '2021-04-30 06:33:11', '2021-04-30 06:33:11'),
(35, NULL, 8, NULL, NULL, NULL, NULL, 'Color', '10', NULL, NULL, '2021-04-30 06:33:11', '2021-04-30 06:33:11'),
(36, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, 'Color', '30', '2021-04-30 06:33:11', '2021-04-30 06:33:11'),
(37, 15, NULL, 'Color', '18.30', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-31 07:26:54', '2021-05-31 07:26:54'),
(38, 15, NULL, 'Color', '9.00', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-31 07:26:54', '2021-05-31 07:26:54'),
(39, 15, NULL, 'Color', '18.30', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-31 07:26:54', '2021-05-31 07:26:54'),
(40, 16, NULL, 'Color', '18.30', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-31 07:37:19', '2021-05-31 07:37:19'),
(41, 16, NULL, 'Color', '9.00', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-31 07:37:19', '2021-05-31 07:37:19'),
(42, 16, NULL, 'Color', '18.30', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-31 07:37:19', '2021-05-31 07:37:19'),
(43, 17, NULL, 'Color', '18.30', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-31 07:37:38', '2021-05-31 07:37:38'),
(44, 17, NULL, 'Color', '9.00', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-31 07:37:38', '2021-05-31 07:37:38'),
(45, 17, NULL, 'Color', '18.30', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-31 07:37:38', '2021-05-31 07:37:38'),
(56, 18, NULL, 'Color', '18.30', NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-31 23:27:47', '2021-05-31 23:27:47'),
(57, 19, NULL, 'Color', '18.30', NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-01 01:29:19', '2021-06-01 01:29:19'),
(58, 20, NULL, 'Color', '18.30', NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-01 01:32:12', '2021-06-01 01:32:12'),
(59, 21, NULL, 'Color', '18.30', NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-01 01:33:53', '2021-06-01 01:33:53'),
(60, NULL, 13, NULL, NULL, NULL, NULL, 'Color', '18.30', NULL, NULL, '2021-06-01 23:49:27', '2021-06-01 23:49:27'),
(61, NULL, 13, NULL, NULL, NULL, NULL, 'Color', '9.00', NULL, NULL, '2021-06-01 23:49:27', '2021-06-01 23:49:27'),
(62, NULL, 13, NULL, NULL, NULL, NULL, 'Color', '18.30', NULL, NULL, '2021-06-01 23:49:27', '2021-06-01 23:49:27'),
(63, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, 'Color', '36.60', '2021-06-01 23:49:27', '2021-06-01 23:49:27'),
(64, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, 'Color', '36.60', '2021-06-01 23:49:27', '2021-06-01 23:49:27'),
(65, NULL, 13, NULL, NULL, NULL, NULL, 'Color', '18.30', NULL, NULL, '2021-06-01 23:49:27', '2021-06-01 23:49:27'),
(66, NULL, 13, NULL, NULL, NULL, NULL, 'Color', '9.00', NULL, NULL, '2021-06-01 23:49:27', '2021-06-01 23:49:27'),
(67, NULL, 13, NULL, NULL, NULL, NULL, 'Color', '18.30', NULL, NULL, '2021-06-01 23:49:27', '2021-06-01 23:49:27'),
(68, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, 'Color', '36.60', '2021-06-01 23:49:27', '2021-06-01 23:49:27'),
(69, NULL, 13, NULL, NULL, NULL, NULL, NULL, NULL, 'Color', '36.60', '2021-06-01 23:49:27', '2021-06-01 23:49:27'),
(343, NULL, 14, NULL, NULL, NULL, NULL, 'Color', '18.30', NULL, NULL, '2021-06-03 01:08:25', '2021-06-03 01:08:25'),
(344, NULL, 14, NULL, NULL, NULL, NULL, 'B_W', '9.00', NULL, NULL, '2021-06-03 01:08:25', '2021-06-03 01:08:25'),
(345, NULL, 14, NULL, NULL, NULL, NULL, 'B_W', '18.30', NULL, NULL, '2021-06-03 01:08:25', '2021-06-03 01:08:25'),
(346, NULL, 14, NULL, NULL, NULL, NULL, 'Color', '9.00', NULL, NULL, '2021-06-03 01:08:25', '2021-06-03 01:08:25'),
(347, NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, 'Color', '36.60', '2021-06-03 01:08:25', '2021-06-03 01:08:25'),
(348, NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, 'Color', '36.60', '2021-06-03 01:08:25', '2021-06-03 01:08:25'),
(349, NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, 'Color', '36.60', '2021-06-03 01:08:25', '2021-06-03 01:08:25'),
(350, 22, NULL, NULL, NULL, 'B_W', '36.60', NULL, NULL, NULL, NULL, '2021-06-04 05:43:38', '2021-06-04 05:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `keybies`
--

CREATE TABLE `keybies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keybies`
--

INSERT INTO `keybies` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Smith', '2021-05-03 04:43:31', '2021-05-03 04:50:54'),
(2, 'John', '2021-05-03 04:51:01', '2021-05-03 04:51:01'),
(3, 'Fench', '2021-05-03 04:51:07', '2021-05-03 04:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `library_verses`
--

CREATE TABLE `library_verses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `words` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `library_verses`
--

INSERT INTO `library_verses` (`id`, `number`, `words`, `price`, `created_at`, `updated_at`) VALUES
(1, 'A2A', '100', '120', '2021-03-24 08:57:45', '2021-03-24 08:57:45'),
(4, 'SAS', '123', '1567', '2021-03-24 23:34:48', '2021-03-24 23:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `mems`
--

CREATE TABLE `mems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keyed_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auto_Date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insertion_Date_Mems` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aniversary_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aniversary_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deceased_add1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deceased_add2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opening` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `New_Ref_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Opening_cost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tel_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pick_issue_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_time_mems` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chruch_mems` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verse_contact_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verse_tel_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verse_email_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_lib` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_verse_words` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provided_verse_cost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_type_single` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leaving_verse_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_inches` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_number_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_cost_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `one_inches` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_number_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_cost_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verses_permit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spcl_ins_permit_mems` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spcl_ins_free_mems` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_words` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Pictures_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verse_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Total_amount_1_mems` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_mems` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mems_discount_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mems_discount_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mems_discount_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `final_cost_mems` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Receipt_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Booking_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counter_taken` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CC_Receipt_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_c_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mems`
--

INSERT INTO `mems` (`id`, `keyed_by`, `auto_Date`, `admin_name`, `type_1`, `insertion_Date_Mems`, `first_name`, `surname`, `aniversary_number`, `aniversary_date`, `deceased_add1`, `deceased_add2`, `opening`, `New_Ref_no`, `Opening_cost`, `contact_name`, `Tel_no`, `Email_address`, `pick_issue_date`, `date_time_mems`, `chruch_mems`, `verse_contact_name`, `verse_tel_no`, `verse_email_address`, `pro_lib`, `first_verse_words`, `provided_verse_cost`, `message_type_single`, `leaving_verse_person`, `add_img`, `two_inches`, `total_number_2`, `total_cost_2`, `one_inches`, `total_number_1`, `total_cost_1`, `verses_permit`, `spcl_ins_permit_mems`, `spcl_ins_free_mems`, `total_words`, `Pictures_total`, `verse_total`, `Total_amount_1_mems`, `discount_mems`, `mems_discount_type`, `mems_discount_rate`, `mems_discount_amount`, `final_cost_mems`, `payment_method`, `Receipt_number`, `Booking_number`, `counter_taken`, `machine_no`, `CC_Receipt_number`, `m_c_no`, `comment`, `is_active`, `created_at`, `updated_at`) VALUES
(4, NULL, '2023-06-03', 'saib', 'In mems', '2022-01-03', 'saib', 'ali', '0900', '25-March', 'wapda town', 'Iqbal Town', 'New1', '300320211009', '150', 'Saibddddd', '342352523', 'saib@gmail.com', '2022-08-03', '30/03/2021 10:10', '102 Gulberg Washington', 'sdvsdv', '32423534', 'fbsbfb', 'Library', NULL, NULL, NULL, NULL, 'Yes', 'Yes', '2', '60', 'Yes', '3', '30', 'Yes', 'Yes', 'avsvwsv', NULL, '90', '1687', '1927', 'discount_yes', '1', '20', '385.400', '1541.6', 'Card', '3534464565456', '345345', 'Tony', '1', '34545', '000', 'sdvsdvsd', 0, '2021-03-30 00:23:05', '2021-03-30 00:23:05'),
(5, NULL, '2023-06-03', 'kashif_Ali_Shah', 'In mems', '2022-01-03', 'svsv', 'svsdv', '2525', '25-March', 'ddvsdv', 'sdv', 'New1', '300320211606', '150', 'svsdv', 'sdvsd', 'sdv@gmail.com', '2022-01-03', '03/03/2021 16:04', '102 Gulberg Washington', 'sdv', '234', 'sssd@gmail.com', 'Provided', '121', '36.3', 'Controversal', NULL, 'Yes', 'Yes', '1', '30', 'Yes', '2', '20', 'Yes', 'Yes', 'sdv', '36.300', '80', NULL, '266.3', 'discount_yes', 'General', '20', '53.260', '213.040', 'Card', '3534464565456', '345345', 'Doee', '1', NULL, '000', 's s d', 0, '2021-03-30 06:07:28', '2021-03-30 06:07:28'),
(6, NULL, '2023-06-03', 'kashif_Ali_Shah', 'In mems', '2023-03-03', 'sddfb', 'dfbdfb', '2525', '25-March', 'dfbdf', 'dfbfdb', 'New1', '300320211847', '150', 'dfdf', '353465', 'bdf@gmail.com', '2023-03-03', '03/03/2021 18:47', '102 Gulberg Washington', 'dbdfb', 'w4t4t', 'sdv@gmail.com', 'Library', NULL, NULL, NULL, NULL, 'Yes', 'Yes', '2', '60', 'No', '1', '10', 'Yes', 'Yes', 'dfbdf', NULL, '60', '1687', '1897', 'discount_yes', 'General', '20', '379.400', '1517.6', 'Card', '3534464565456', '345345', 'Tony', '1', '34545', '000', 'sdfbf', 0, '2021-03-30 08:48:53', '2021-03-30 08:48:53'),
(7, NULL, '2023-06-04', 'FurqanMalikKeyed', 'In mems', '2021-04-24', 'Kashif', 'Test', '$i', '21-May', 'slkdklj', 'lksdkkljf', 'New1', '300420211631', '150', 'Kashif', '80980980909', 'test@gmail.com', '2021-04-24', '17/04/2021 16:29 pm', '102 Gulberg Washington', 'Kashif', '09809809', 'testseller3@gmail.com', 'Library', NULL, NULL, NULL, NULL, 'Yes', 'Yes', '1', '30', 'Yes', '1', '10', 'Yes', 'Yes', 'test', NULL, '40', '120', '310', 'discount_yes', 'General', '20', '62.000', '310', 'Card', '09809809908', '0980900', 'Doee', '2', '098098098098', '000', 'lksdflsjdflkjsd', 0, '2021-04-30 06:32:28', '2021-05-03 04:08:23'),
(8, 'John', '2023-06-04', 'FurqanMalik', 'In mems', '2021-04-24', 'Kashif', 'Test', '$i', '21-May', 'slkdklj', 'lksdkkljf', 'New1', '300420211631', '150', 'Kashif', '80980980909', 'test@gmail.com', '2021-04-24', '17/04/2021 16:29 pm', '102 Gulberg Washington', 'Kashif', '09809809', 'testseller3@gmail.com', 'Library', NULL, NULL, NULL, NULL, 'Yes', 'Yes', '1', '30', 'Yes', '1', '10', 'Yes', 'Yes', 'test', NULL, '40', '120', '310', 'discount_yes', 'General', '20', '62.000', '310', 'Card', '09809809908', '09809', 'Doee', '2', '098098098098', '000', 'lksdflsjdflkjsd', 0, '2021-04-30 06:33:11', '2021-05-03 05:18:39'),
(13, NULL, '2021-06-02', 'FurqanMalik', 'In mems', '2021-06-26', 'Sir', 'Furqan', '11', '24-June', NULL, 'Test Deceased Address 2', 'New1', '020620210945', '150', 'Test Contact name', '32424234234', 'test@furqan.com', '2021-06-26', '19/06/2021 09:47 am', '102 Gulberg Washington', 'Test contact name', '2432432423432', 'test@verse.com', 'Provided', NULL, NULL, NULL, NULL, 'Yes', 'Yes', '2', '73.2', 'Yes', '3', '45.60', 'Yes', 'Yes', 'Test Special instructions', '267664', '0', '1', '267814.00', 'discount_no', NULL, NULL, NULL, '267814.00', 'Cash', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-01 23:49:27', '2021-06-01 23:49:27'),
(14, NULL, '2021-06-03', 'saib', 'In mems', '2021-06-19', 'Test First Name', 'test surname', '14', '25-June', 'Test address 1', 'test address 2', 'Existing Opening', '020620211142', '150', 'Test', '234234234', 'test@library.com', '2021-06-19', '19/06/2021 11:43 am', '102 Gulberg Washington', 'Test Contact', '203948092384', 'test@gmail.com', 'Library', NULL, NULL, NULL, NULL, 'Yes', 'Yes', '3', '109.80', 'Yes', '4', '54.60', 'Yes', 'Yes', 'Test Special Instructions', '1807', '0', '3', '3764.00', 'discount_no', NULL, NULL, 'NaN', '3764.00', 'Cash', '09809809908', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-02 01:45:14', '2021-06-03 01:08:25'),
(15, NULL, '2021-06-04', 'saib', 'In mems', '2021-06-12', 'test', 'test', '15', '16-June', 'Test', 'test', 'New1', '040620211824', '150', 'Test', '324234234234', 'test@tel.com', '2021-06-12', NULL, NULL, 'Test', '23423423432', 'test@testtell.com', NULL, NULL, NULL, NULL, NULL, 'No', 'No', '1', '36.60', 'No', '1', '18.30', 'No', 'No', NULL, '0', '0', '0', '150.00', 'discount_no', NULL, NULL, NULL, '150.00', 'Cash', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-04 08:27:36', '2021-06-04 08:27:36'),
(16, NULL, '2021-06-07', 'saib', 'In mems', '2021-06-12', 'kashif_ali', 'Deviotech', '15', '16-June', 'Test', 'test', 'Existing Opening', '040620211824', '150', 'Test', '324234234234', 'test@tel.com', '2021-06-12', NULL, NULL, 'Test', '23423423432', 'test@testtell.com', NULL, NULL, NULL, NULL, NULL, 'No', 'No', '1', '36.60', 'No', '1', '18.30', 'No', 'No', NULL, '0', '0', '0', '150.00', 'discount_no', NULL, NULL, 'NaN', '150.00', 'Cash', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-04 08:27:53', '2021-06-07 00:58:52'),
(17, NULL, '2021-06-07', 'saib', 'In mems', '2021-06-12', 'usman_sahab', 'Test', '26', '24-June', 'Test', 'Test', 'New1', '070620211100', '150', 'Test', '23432432', 'test@gmail.com', '2021-06-12', NULL, NULL, 'Test', '234234234324', 'test@test444.com', NULL, NULL, NULL, NULL, NULL, 'No', 'No', '1', '36.60', 'No', '1', '18.30', 'No', 'No', NULL, '0', '0', '0', '150.00', 'discount_no', NULL, NULL, NULL, '150.00', 'Cash', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-07 01:03:08', '2021-06-07 01:03:08'),
(18, NULL, '2021-06-07', 'saib', 'In mems', '2021-06-05', 'John_Doe', 'English_Man', '14', '18-June', 'Test', 'Test', 'Existing Opening', '070620211109', '150', 'Test Contact', '9203480234234', 'test@contact.com', '2021-06-05', NULL, NULL, 'Test', '32423423432', 'test@verse1.com', NULL, NULL, NULL, NULL, NULL, 'No', 'No', '1', '36.60', 'No', '1', '18.30', 'No', 'No', NULL, '0', '0', '0', '150.00', 'discount_no', NULL, NULL, 'NaN', '150.00', 'Cash', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-07 01:12:50', '2021-07-27 23:43:05'),
(19, NULL, '2021-06-07', 'saib', 'In mems', '2021-07-17', 'deviotech_kashif', 'ali', '14', '09-June', 'Test', 'Test 2', 'New1', '070620211129', '150', 'Test', '2342342423', 'test@deviotech1.com', '2021-07-17', NULL, NULL, 'Test', '2342424234', 'test@thakawat.com', NULL, NULL, NULL, NULL, NULL, 'No', 'No', '1', '36.60', 'No', '1', '18.30', 'No', 'No', NULL, '0', '0', '0', '150.00', 'discount_no', NULL, NULL, NULL, '150.00', 'Cash', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-06-07 01:32:58', '2021-07-27 23:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `mem_verses`
--

CREATE TABLE `mem_verses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meme_id` bigint(20) UNSIGNED NOT NULL,
  `mem_verse_type` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1. Library 2. Provided',
  `mem_verse_library_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mem_verse_no_of_words` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mem_verse_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mem_verse_person_leaving_comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mem_verse_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message_types`
--

CREATE TABLE `message_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `msg_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_types`
--

INSERT INTO `message_types` (`id`, `msg_type`, `created_at`, `updated_at`) VALUES
(1, 'Controversal', '2021-03-25 07:01:18', '2021-03-25 07:01:18'),
(2, 'Friendly', '2021-03-25 07:01:28', '2021-03-25 07:01:28');

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
(4, '2021_03_16_130232_create_settings_table', 2),
(5, '2021_03_18_073438_create_discount_types_table', 3),
(6, '2021_03_18_073653_create_discount_rates_table', 3),
(7, '2021_03_24_131821_create_library_verses_table', 4),
(8, '2021_03_25_073232_create_payment_methods_table', 5),
(9, '2021_03_25_090316_create_taken_bies_table', 6),
(10, '2021_03_25_092655_create_visitors_table', 7),
(11, '2021_03_25_105611_create_aniversary_nos_table', 8),
(12, '2021_03_25_112245_create_chruches_table', 9),
(13, '2021_03_25_112308_create_message_types_table', 9),
(15, '2021_03_27_051653_create_acknowledges_table', 10),
(16, '2021_03_27_051705_create_mems_table', 11),
(17, '2021_03_27_094650_create_images_table', 11),
(18, '2021_03_27_094702_create_verses_table', 11),
(19, '2021_03_31_132837_create_dropbox_tokens_table', 12),
(21, '2021_05_03_092449_alter_acknowledgements_table_for_keyed_by', 13),
(22, '2021_05_03_092648_alter_mems_table_for_keyed_by', 13),
(23, '2021_05_03_092942_create_keybies_table', 14),
(26, '2021_05_31_125507_create_provided_verses_table', 15),
(28, '2021_06_04_114530_create_mem_verses_table', 16),
(29, '2021_07_27_132312_alter_mems_table_for_activity_column', 17),
(30, '2021_07_28_062423_alter_mems_table_for_change_in_is_active_default_one', 18);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cash', '2021-03-25 02:59:54', '2021-03-25 02:59:54'),
(2, 'Card', '2021-03-25 03:00:27', '2021-03-25 03:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `provided_verses`
--

CREATE TABLE `provided_verses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meme_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mems_pro_no_of_words` int(11) NOT NULL,
  `mems_pro_cost_of_verse` double NOT NULL,
  `mems_pro_message_type_comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mems_pro_person_leaving_verse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provided_verses`
--

INSERT INTO `provided_verses` (`id`, `meme_id`, `mems_pro_no_of_words`, `mems_pro_cost_of_verse`, `mems_pro_message_type_comment`, `mems_pro_person_leaving_verse`, `created_at`, `updated_at`) VALUES
(3, 13, 98, 29.4, 'Controversal', 'test person a', '2021-06-01 23:49:27', '2021-06-01 23:49:27'),
(4, 13, 24324, 7297.2, 'Friendly', 'Test person b', '2021-06-01 23:49:27', '2021-06-01 23:49:27'),
(5, 13, 243242, 72972.6, 'Controversal', 'Test person c', '2021-06-01 23:49:27', '2021-06-01 23:49:27');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `setting` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `setting`, `created_at`, `updated_at`) VALUES
(1, 'photo_cost_1inch_1st', '18.30', '2021-03-16 08:43:35', '2021-05-03 05:40:03'),
(2, 'photo_cost_1inch_2nd', '9', '2021-03-16 08:43:35', '2021-05-03 05:40:03'),
(3, 'photo_cost_2inch', '36.60', '2021-03-16 08:43:35', '2021-05-03 05:38:07'),
(4, 'cost_per_word_mems', '40', '2021-03-16 08:43:35', '2021-06-01 00:03:27'),
(5, 'cost_per_word_acknowlede', '.30', '2021-03-16 08:43:36', '2021-05-31 23:44:08'),
(6, 'vat_rate_build_into_price', '60', '2021-03-16 08:43:36', '2021-03-16 08:43:36'),
(7, 'cost_first_80_word_acknowlede', '25.5', '2021-03-17 02:15:07', '2021-05-21 08:28:11'),
(8, 'opening_cost', '150', '2021-03-26 06:22:16', '2021-03-26 06:22:16'),
(9, 'dropbox_access_token', 'OFyDVxbIOmQAAAAAAAAAAQlbgCXW6kSGU5AoktoCg-hjm55bL75DbSnCq8L42uNY', '2021-04-08 07:46:37', '2021-04-08 07:46:37'),
(10, 'mems_status_day', 'Wednesday', '2021-07-27 23:58:36', '2021-07-28 00:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `taken_bies`
--

CREATE TABLE `taken_bies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taken_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taken_bies`
--

INSERT INTO `taken_bies` (`id`, `taken_by`, `created_at`, `updated_at`) VALUES
(1, 'Doee', '2021-03-25 04:20:57', '2021-03-25 04:20:57'),
(2, 'Jim', '2021-03-25 04:21:05', '2021-03-25 04:21:05'),
(3, 'Tony', '2021-03-25 04:21:11', '2021-03-25 04:21:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','other') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'other',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@limerick.com', '2021-02-16 12:00:00', '$2y$10$zvafJI5ODo4yuy5pTwFXFOn7UePaph7vj4I/1ccaEtfyogiMxYiMC', 'admin', NULL, '2021-03-16 06:39:31', '2021-03-16 06:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `verses`
--

CREATE TABLE `verses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meme_id` bigint(20) UNSIGNED DEFAULT NULL,
  `lib_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `No_of_words` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `library_verse_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leaving_verse_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verses`
--

INSERT INTO `verses` (`id`, `meme_id`, `lib_no`, `No_of_words`, `library_verse_price`, `message_type`, `leaving_verse_person`, `created_at`, `updated_at`) VALUES
(3, 4, '4', '123', '1567', 'Controversal', 'wegweg', '2021-03-30 00:23:05', '2021-03-30 00:23:05'),
(4, 4, '1', '100', '120', 'Friendly', 'ewg', '2021-03-30 00:23:05', '2021-03-30 00:23:05'),
(5, 6, 'A2A', '100', '120', 'Controversal', 'sddb', '2021-03-30 08:48:53', '2021-03-30 08:48:53'),
(6, 6, 'SAS', '123', '1567', 'Friendly', 'dbdfb', '2021-03-30 08:48:53', '2021-03-30 08:48:53'),
(7, 8, 'A2A', '100', '120', NULL, 'lkdsdjlf', '2021-04-30 06:33:11', '2021-04-30 06:33:11'),
(38, 14, 'A2A', '100', '120', 'Controversal', 'Test Person a', '2021-06-03 01:08:25', '2021-06-03 01:08:25'),
(39, 14, 'SAS', '123', '1567', 'Friendly', 'Test Person B', '2021-06-03 01:08:25', '2021-06-03 01:08:25'),
(40, 14, 'A2A', '100', '120', 'Friendly', 'Test Person C', '2021-06-03 01:08:25', '2021-06-03 01:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'FurqanMalik', 'http://localhost:8000?name=FurqanMalik', '2021-03-25 05:13:16', '2021-03-25 05:25:41'),
(2, 'saib', 'http://localhost:8000?name=saib', '2021-03-29 07:39:02', '2021-03-29 07:39:02'),
(3, 'shahzad', 'http://localhost:8000?name=shahzad', '2021-03-30 00:35:51', '2021-03-30 00:35:59'),
(4, 'kashif_Ali_Shah', 'http://localhost:8000?name=kashif_Ali_Shah', '2021-03-30 06:03:32', '2021-03-30 06:03:56'),
(5, 'shehran', 'http://localhost:8000?name=shehran', '2021-03-30 06:07:49', '2021-03-30 06:07:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acknowledges`
--
ALTER TABLE `acknowledges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aniversary_nos`
--
ALTER TABLE `aniversary_nos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chruches`
--
ALTER TABLE `chruches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount_rates`
--
ALTER TABLE `discount_rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discount_rates_discount_types_id_foreign` (`discount_types_id`);

--
-- Indexes for table `discount_types`
--
ALTER TABLE `discount_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dropbox_tokens`
--
ALTER TABLE `dropbox_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_acknowledge_id_foreign` (`acknowledge_id`),
  ADD KEY `images_meme_id_foreign` (`meme_id`);

--
-- Indexes for table `keybies`
--
ALTER TABLE `keybies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_verses`
--
ALTER TABLE `library_verses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mems`
--
ALTER TABLE `mems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mem_verses`
--
ALTER TABLE `mem_verses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mem_verses_meme_id_foreign` (`meme_id`);

--
-- Indexes for table `message_types`
--
ALTER TABLE `message_types`
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
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provided_verses`
--
ALTER TABLE `provided_verses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provided_verses_meme_id_foreign` (`meme_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taken_bies`
--
ALTER TABLE `taken_bies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verses`
--
ALTER TABLE `verses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verses_meme_id_foreign` (`meme_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acknowledges`
--
ALTER TABLE `acknowledges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `aniversary_nos`
--
ALTER TABLE `aniversary_nos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chruches`
--
ALTER TABLE `chruches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `discount_rates`
--
ALTER TABLE `discount_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `discount_types`
--
ALTER TABLE `discount_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dropbox_tokens`
--
ALTER TABLE `dropbox_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- AUTO_INCREMENT for table `keybies`
--
ALTER TABLE `keybies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `library_verses`
--
ALTER TABLE `library_verses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mems`
--
ALTER TABLE `mems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mem_verses`
--
ALTER TABLE `mem_verses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message_types`
--
ALTER TABLE `message_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `provided_verses`
--
ALTER TABLE `provided_verses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `taken_bies`
--
ALTER TABLE `taken_bies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `verses`
--
ALTER TABLE `verses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `discount_rates`
--
ALTER TABLE `discount_rates`
  ADD CONSTRAINT `discount_rates_discount_types_id_foreign` FOREIGN KEY (`discount_types_id`) REFERENCES `discount_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_acknowledge_id_foreign` FOREIGN KEY (`acknowledge_id`) REFERENCES `acknowledges` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `images_meme_id_foreign` FOREIGN KEY (`meme_id`) REFERENCES `mems` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mem_verses`
--
ALTER TABLE `mem_verses`
  ADD CONSTRAINT `mem_verses_meme_id_foreign` FOREIGN KEY (`meme_id`) REFERENCES `mems` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `provided_verses`
--
ALTER TABLE `provided_verses`
  ADD CONSTRAINT `provided_verses_meme_id_foreign` FOREIGN KEY (`meme_id`) REFERENCES `mems` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `verses`
--
ALTER TABLE `verses`
  ADD CONSTRAINT `verses_meme_id_foreign` FOREIGN KEY (`meme_id`) REFERENCES `mems` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
