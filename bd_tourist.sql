-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 05:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_tourist`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guide_user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_date_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_date_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_date_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_date_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_date_five` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_date_six` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_date_seven` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_date_eight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_date_nine` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_date_ten` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_people` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metting_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_link_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `airport_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flight_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrival_time_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_booked_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_address_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_four_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_four_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_five_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_five_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_six_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_six_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_details_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_details_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_info_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_info_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_info_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Table structure for table `guideapplies`
--

CREATE TABLE `guideapplies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefix` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `homephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cellphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skypename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacttime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `licensed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `licensedetail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guideapplies`
--

INSERT INTO `guideapplies` (`id`, `user_id`, `prefix`, `name`, `country`, `birthday`, `city`, `address`, `zip`, `homephone`, `cellphone`, `skypename`, `contacttime`, `licensed`, `licensedetail`, `detail`, `notes`, `created_at`, `updated_at`) VALUES
(4, '13', '0', 'User', '0', '02-02-02', 'khulna', 'khulna, bangladesh', '9253', '+8801752970499', '+8801752970499', 'test', 'test', 'Yes, I\'m a licensed tour guide', 'If you checked yes, please specify in which other guide website(s) you currently advertise your tours (Max 6):', 'If you checked yes, please specify in which other guide website(s) you currently advertise your tours (Max 6):', 'If you checked yes, please specify in which other guide website(s) you currently advertise your tours (Max 6):', '2020-12-31 08:58:08', '2020-12-31 08:58:08'),
(6, '15', 'Miss', 'Guide User', 'bangladesh', 'bangladesh', 'bangladesh', 'bangladesh', 'bangladesh', 'bangladesh', 'bangladesh', 'bangladesh', 'bangladesh', 'bangladesh', 'bangladesh', 'bangladesh', 'bangladesh', '2021-01-01 06:49:59', '2021-01-01 06:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `guidedetails`
--

CREATE TABLE `guidedetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credentials` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `guidenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bangla` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'language',
  `english` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'language',
  `arabic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'language',
  `hindi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'language',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guidedetails`
--

INSERT INTO `guidedetails` (`id`, `user_id`, `city`, `country`, `biography`, `credentials`, `guidenumber`, `bangla`, `english`, `arabic`, `hindi`, `created_at`, `updated_at`) VALUES
(1, '15', 'bangladesh', 'bangladesh', 'bangladesh', 'bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh', 'bangladesh', 'fluent', 'fluent', 'fluent', 'fluent', '2020-12-29 02:26:37', '2021-01-03 08:11:53'),
(2, '1', 'bangladesh', 'bangladesh', 'bangladesh', 'bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh ', 'bangladesh', 'basic', 'basic', 'basic', 'basic', '2020-12-29 02:26:37', '2020-12-29 02:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `user_id`, `language`, `skill`, `created_at`, `updated_at`) VALUES
(1, '1', 'Hindi', 'conversational', '2020-12-17 18:00:00', '2020-12-18 02:16:42'),
(2, '1', 'Bengali', 'fluent', '2020-12-17 18:00:00', '2020-12-18 02:16:42'),
(3, '1', 'Arabic', 'basic', '2020-12-18 02:18:13', '2020-12-18 02:18:13'),
(4, '1', 'English', 'fluent', '2020-12-17 18:00:00', '2020-12-18 02:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location`, `heading`, `subheading`, `title`, `details`, `image`, `created_at`, `updated_at`) VALUES
(1, 'khulna', 'heading', 'subheading', 'Private  Guided Experiences', 'Private  Guided Experiences', 'khulna-1609577416.jpg', '2021-01-02 02:16:57', '2021-01-02 02:50:16'),
(2, 'Dhaka', 'heading', 'subheading', 'Private  Guided Experiences', 'Private  Guided Experiences', 'dhaka-1609578155.jpg', '2021-01-02 02:46:11', '2021-01-02 03:02:35');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_02_025150_create_sliders_table', 1),
(9, '2020_12_06_023727_create_tests_table', 6),
(12, '2020_12_02_044524_create_tours_table', 7),
(17, '2020_12_18_020454_create_languages_table', 10),
(18, '2014_10_12_200000_add_two_factor_columns_to_users_table', 11),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 11),
(20, '2020_12_18_042849_create_sessions_table', 11),
(22, '2020_12_04_103107_create_testimonials_table', 13),
(25, '2020_12_18_013652_create_guidedetails_table', 15),
(30, '2020_12_17_120200_create_locations_table', 17),
(31, '2020_12_31_125030_create_guideapplies_table', 18),
(42, '2014_10_12_000000_create_users_table', 19),
(43, '2020_12_23_023936_create_bookings_table', 20);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 15, 'kk', '104bc7fe09caffa280166eef864ec30be3c990c775ff5907a186ac9c2dbdc72e', '[\"read\",\"update\",\"create\",\"delete\"]', NULL, '2020-12-27 21:38:00', '2020-12-27 21:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HdiZ4q8HeS45ZBshQfk0y1pIKE99qe5JSVlNsNVK', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiSlBhNmxvYUkzZ1ZvMEtYWHlpU1dGd1EzZDNpN3ZzcEhhaktxcWxDeCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC90b3VyLXBsYWNlLzIiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NToidXR5cGUiO3M6NToiYWRtaW4iO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkSTliSmhON00yVTR5Z0VPSHp6VnJGT0x3bmJoT3R0RzMzYW0uR2l2VVUzVUZudjJ6QVA4RVciO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEk5YkpoTjdNMlU0eWdFT0h6elZyRk9Md25iaE90dEczM2FtLkdpdlVVM1VGbnYyekFQOEVXIjt9', 1610686116);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(15, 'Private  Guided Experiences 01', 'private-guided-experiences-01-1608299891.jpg', '1', '2020-12-15 18:00:00', '2020-12-18 07:58:11'),
(16, 'Private  Guided Experiences', 'private-guided-experiences-1608106316.jpg', '1', '2020-12-15 18:00:00', '2020-12-15 18:00:00'),
(17, 'Private  Guided Experiences', 'private-guided-experiences-1608106323.jpg', '1', '2020-12-15 18:00:00', '2020-12-15 18:00:00'),
(20, 'title', 'title-1609574781.jpg', '1', '2021-01-01 18:00:00', '2021-01-01 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `detail`, `image`, `email`, `date`, `created_at`, `updated_at`) VALUES
(5, 'John  Doe 01', 'Praesent volutpat ut nisl in hendrerit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Etiam porttitor, lacus in ...', 'john-doe-01-1608359824.png', 'demo@hastech.com', '18-12-2020', '2020-12-18 18:00:00', '2020-12-19 00:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `date`, `created_at`, `updated_at`) VALUES
(1, '2020-11-09', '2020-12-05 18:00:00', '2020-12-05 18:00:00'),
(2, '2020-11-10', '2020-12-05 18:00:00', '2020-12-05 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` int(11) NOT NULL,
  `guide_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `slug`, `title`, `details`, `image`, `location_id`, `guide_id`, `map_link`, `status`, `created_at`, `updated_at`) VALUES
(17, 'private-guided-experiences', 'Private  Guided Experiences', '<p>Private&nbsp; Guided Experiences</p>', 'private-guided-experiences-1610685783.jpg', 1, '5', 'test', '1', '2021-01-14 18:00:00', '2021-01-14 22:43:03'),
(18, 'private-guided-experiences', 'Private  Guided Experiences', '<p>kkkkkkkk</p>', 'private-guided-experiences-1610686106.jpg', 2, '3', 'test', '1', '2021-01-14 18:00:00', '2021-01-14 22:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prefix` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `utype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cellphone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skypename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contacttime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `licensed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `licensedetail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biography` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credentials` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guidenumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stattus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bangla` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'language',
  `english` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'language',
  `arabic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'language',
  `hindi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'language',
  `alternate_email_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate_email_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate_email_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newsletter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `prefix`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `utype`, `country`, `birthday`, `city`, `address`, `zip`, `token`, `homephone`, `cellphone`, `skypename`, `contacttime`, `licensed`, `licensedetail`, `detail`, `notes`, `biography`, `credentials`, `guidenumber`, `stattus`, `bangla`, `english`, `arabic`, `hindi`, `alternate_email_one`, `alternate_email_two`, `alternate_email_three`, `newsletter`, `location_id`, `location`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Admin', 'admin@gmail.com', NULL, '$2y$10$I9bJhN7M2U4ygEOHzzVrFOLwnbhOttG33am.GivUU3UFnv2zAP8EW', NULL, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, '12345678', NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2021-01-13 06:41:07', '2021-01-13 06:41:07'),
(3, NULL, 'Guide User 2', 'guide2@gmail.com', NULL, '$2y$10$C/HaGVlpqm9nmnzCjaN7YuNNHQQCWP/HaS0zJlnnTdzXQai0Wh1I2', NULL, NULL, 'guide', NULL, NULL, NULL, NULL, NULL, '12345678', NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', 'Dhaka', 'guide-user-2-1610604897.png', '1', '2021-01-13 06:53:59', '2021-01-14 00:14:57'),
(4, NULL, 'User 2', 'user@gmail.com', NULL, '$2y$10$C/HaGVlpqm9nmnzCjaN7YuNNHQQCWP/HaS0zJlnnTdzXQai0Wh1I2', NULL, NULL, 'user', NULL, NULL, NULL, NULL, NULL, '12345678', NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'user-2-1610626721.png', '0', '2021-01-13 06:53:59', '2021-01-14 06:18:41'),
(5, NULL, 'Guide User', 'guide@gmail.com', NULL, '$2y$10$lM1k7fvoO/bEQyWEk3k1A.MaPDhDbhVYsAMXMFpRseFEPS51EslZK', NULL, NULL, 'guide', NULL, NULL, NULL, NULL, NULL, '12345678', NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'khulna', 'guide-user-1610628471.png', '1', '2021-01-14 06:47:38', '2021-01-14 06:51:08'),
(6, NULL, 'Md. Rostom', 'adminpkk@gmail.com1', NULL, '$2y$10$wRtGk6gkQCxb2v2CKeVBbuK1qQ.0ENtko5b3H6kFsbTFntjL/R1oG', NULL, NULL, 'user', 'Afghanistan', NULL, NULL, NULL, NULL, '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'adminpkk@gmail.com1', 'adminpkk@gmail.com2', 'adminpkk@gmail.com3', 'yes', NULL, NULL, NULL, NULL, '2021-01-14 20:50:21', '2021-01-14 20:50:21'),
(7, NULL, 'Rostom', 'rostom@gmail.com', NULL, '$2y$10$ZrfsPnlzYzgkaMBw.PDxi.u50cxOL2n0Bbe/5wH185ta9aaY3nu52', NULL, NULL, 'user', 'Afghanistan', NULL, NULL, NULL, NULL, '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', NULL, NULL, NULL, NULL, '2021-01-14 20:54:40', '2021-01-14 20:54:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guideapplies`
--
ALTER TABLE `guideapplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guidedetails`
--
ALTER TABLE `guidedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_guidenumber_unique` (`guidenumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guideapplies`
--
ALTER TABLE `guideapplies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `guidedetails`
--
ALTER TABLE `guidedetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
