-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2021 at 01:53 PM
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
-- Database: `bd_tourist_v4_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guide_user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_id` bigint(20) DEFAULT NULL,
  `tour_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_date_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_people` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `guide_user_id`, `user_id`, `tour_id`, `tour_price`, `tour_date_one`, `start_time`, `number_of_people`, `metting_location`, `address_one`, `map_link_one`, `airport_two`, `flight_two`, `arrival_time_two`, `hotel_three`, `name_booked_three`, `hotel_address_three`, `address_four_one`, `address_four_two`, `address_five_one`, `address_five_two`, `address_six_one`, `address_six_two`, `tour_details_from`, `tour_details_to`, `payment_info_one`, `payment_info_two`, `payment_info_three`, `status`, `payment`, `created_at`, `updated_at`) VALUES
(16, '9', '10', 18, '3', '01/26/2021,01/27/2021,01/28/2021', '09:00', '02', '2', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, '1', '1', '2021-01-21 18:00:00', '2021-02-08 21:38:24'),
(18, '9', '10', 18, '$800 USD for 1 people', '01/25/2021,01/26/2021,01/27/2021,01/28/2021', '09:00', '03', '2', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, '1', '1', '2021-01-22 18:00:00', '2021-02-08 21:44:00'),
(19, '9', '10', 18, '$800 USD for 1 people', '01/29/2021', '09:00', NULL, '1', 'dhaka', 'fgsddfsfd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, '1', NULL, '2021-01-22 18:00:00', '2021-02-08 21:43:53'),
(20, '9', '10', 18, '$800 USD for 1 people', '01/29/2021', '09:00', NULL, '1', 'dhaka', 'cx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, '1', NULL, '2021-01-22 18:00:00', '2021-02-08 22:30:22'),
(21, '9', '10', 18, '$800 USD for 1 people', '01/29/2021', '09:00', NULL, '1', 'dhaka', 'cx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, '1', NULL, '2021-01-22 18:00:00', '2021-02-10 23:41:56'),
(22, '9', '10', 18, '$800 USD for 1 people', '01/29/2021', '09:00', NULL, '1', 'dhaka', 'cx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-01-22 18:00:00', '2021-01-22 18:00:00'),
(24, '9', '10', 18, '$800USD for 1 people', '01/28/2021,01/29/2021', '09:00', NULL, '1', 'dhaka', 'cx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-01-22 18:00:00', '2021-01-22 18:00:00'),
(25, '9', '10', 18, '$800USD for 1 people', '01/28/2021,01/29/2021', '09:00', NULL, '1', 'dhaka', 'cx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-01-22 18:00:00', '2021-01-22 18:00:00'),
(26, '9', '10', 18, '$800USD for 1 people', '01/28/2021,01/29/2021', '09:00', NULL, '1', 'dhaka', 'cx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-01-22 18:00:00', '2021-01-22 18:00:00'),
(29, '9', '10', 18, '$1000USD for 2 people', '02/24/2021,02/25/2021,02/26/2021', '09:00', NULL, '2', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(30, '9', '10', 18, '$1000USD for 2 people', '02/24/2021,02/25/2021', '09:00', NULL, '2', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'fd', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(31, '9', '10', 18, '$1000USD for 2 people', '02/26/2021', '09:00', NULL, '2', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(32, '9', '10', 18, '$1000USD for 2 people', '02/25/2021,02/26/2021', '09:00', NULL, '2', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(33, '9', '10', 18, '$1000USD for 2 people', '02/25/2021', '09:00', NULL, '2', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(34, '9', '10', 18, '$1000USD for 2 people', '02/25/2021,02/26/2021', '09:00', NULL, '2', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(35, '9', '10', 18, '$1000USD for 2 people', '02/25/2021,02/26/2021', '09:00', NULL, '2', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(36, '9', '10', 18, '$1000USD for 2 people', '02/26/2021', '09:00', NULL, '2', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(37, '9', '10', 18, '$1000USD for 2 people', '02/25/2021,02/26/2021', '09:00', NULL, '2', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(38, '9', '10', 18, '$1000USD for 2 people', '02/26/2021', '09:00', NULL, '2', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(40, '9', '10', 18, '$1000USD for 2 people', '', '09:00', NULL, '2', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(41, '9', '10', 18, '$1000USD for 2 people', '', '09:00', NULL, '2', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(42, '9', '10', 18, '$1000USD for 2 people', '02/26/2021', '09:00', NULL, '2', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(43, '9', '10', 18, '$1000USD for 2 people', '02/26/2021', '09:00', NULL, '2', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(44, '9', '10', 18, '$1000USD for 2 people', '02/26/2021', '09:00', NULL, '2', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(45, '9', '10', 18, '$1000USD for 2 people', '02/26/2021', '09:00', NULL, '2', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(46, '9', '10', 18, '$1000USD for 2 people', '02/26/2021', '09:00', NULL, 'two', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(47, '9', '10', 18, '$1000USD for 2 people', '', '09:00', NULL, 'two', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(48, '9', '10', 18, '$1000USD for 2 people', '', '09:00', NULL, 'two', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(49, '9', '10', 18, '$1000USD for 2 people', '02/26/2021', '09:00', NULL, 'two', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-07 18:00:00', '2021-02-07 18:00:00'),
(50, '9', '10', 18, '$1000USD for 2 people', '02/26/2021', '09:00', NULL, 'two', NULL, NULL, 'gfdg', 'gf', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, '1', NULL, '2021-02-07 18:00:00', '2021-02-08 21:19:26'),
(51, '9', '1', 18, '$800USD for 1 people', '', '09:30', NULL, 'two', NULL, NULL, 'tttttttttt', 'tttttttttttttt', 'tttttttttt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'From', 'To', NULL, NULL, NULL, NULL, NULL, '2021-02-09 18:00:00', '2021-02-09 18:00:00'),
(52, '9', '1', 18, '$1000USD for 2 people', '02/18/2021', '09:00', NULL, 'one', 'ADDRESS/INTERSECTION*', 'GOOGLE MAP LINK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'From', 'To', NULL, NULL, NULL, NULL, NULL, '2021-02-09 18:00:00', '2021-02-09 18:00:00'),
(53, '9', '1', 18, '$800USD for 1 people', '', '09:00', NULL, 'one', 'ADDRESS/INTERSECTION*', 'GOOGLE MAP LINK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'From', 'To', NULL, NULL, NULL, NULL, NULL, '2021-02-09 18:00:00', '2021-02-09 18:00:00'),
(54, '17', '1', 17, '$1500USD for 3 people', '02/17/2021,02/18/2021', '09:00', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg', 'gjjh', NULL, NULL, NULL, NULL, NULL, '2021-02-09 18:00:00', '2021-02-09 18:00:00');

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
(2, '1', 'bangladesh', 'bangladesh', 'bangladesh', 'bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh ', 'bangladesh', 'basic', 'basic', 'basic', 'basic', '2020-12-29 02:26:37', '2020-12-29 02:27:13'),
(4, '8', 'bangladesh', 'bangladesh', 'bangladesh', 'bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh ', 'bangladesh', 'basic', 'basic', 'basic', 'basic', '2020-12-29 02:26:37', '2020-12-29 02:27:13'),
(5, '3', 'bangladesh', 'bangladesh', 'bangladesh', 'bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh bangladesh ', 'bangladesh', 'basic', 'basic', 'basic', 'basic', '2020-12-29 02:26:37', '2020-12-29 02:27:13');

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
(2, 'Dhaka', 'heading', 'subheading', 'Private  Guided Experiences', 'Private  Guided Experiences', 'dhaka-1612975049.jpg', '2021-01-02 02:46:11', '2021-02-10 10:37:29');

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
(43, '2020_12_23_023936_create_bookings_table', 20),
(44, '2021_01_22_162110_create_packages_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `booking_id` bigint(20) DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `delivery_status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `booking_id`, `email`, `phone`, `amount`, `address`, `status`, `delivery_status`, `transaction_id`, `currency`, `created_at`, `updated_at`) VALUES
(1, 'Customer Name', NULL, 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', NULL, '600c7b0d5f33d', 'BDT', NULL, NULL),
(2, 'Customer Name', NULL, 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', NULL, '600c7b5588227', 'BDT', NULL, NULL),
(3, 'Customer Name', NULL, 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', NULL, '600c7bdf60646', 'BDT', NULL, NULL),
(4, 'Customer Name', NULL, 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Processing', NULL, '600c7cc40f748', 'BDT', NULL, NULL),
(5, NULL, 26, NULL, NULL, NULL, NULL, NULL, NULL, '600c86c40545e', NULL, '2021-01-23 14:27:48', '2021-01-23 14:27:48'),
(6, NULL, 27, NULL, NULL, NULL, NULL, NULL, NULL, '600c86fe68fdd', NULL, '2021-01-23 14:28:46', '2021-01-23 14:28:46'),
(7, 'Customer Name', NULL, 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', NULL, '600c87a68d647', 'BDT', NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '600c88e591e90', NULL, '2021-01-23 14:36:53', '2021-01-23 14:36:53'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '600c8a369851d', NULL, '2021-01-23 14:42:30', '2021-01-23 14:42:30'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '600c8b5acec1e', NULL, '2021-01-23 14:47:22', '2021-01-23 14:47:22'),
(11, NULL, 28, NULL, NULL, NULL, NULL, NULL, NULL, '600c8d257aabf', NULL, '2021-01-23 14:55:01', '2021-01-23 14:55:01'),
(12, NULL, 29, NULL, NULL, NULL, NULL, NULL, NULL, '60217119edbaf', NULL, '2021-02-08 11:12:57', '2021-02-08 11:12:57'),
(13, NULL, 30, NULL, NULL, NULL, NULL, NULL, NULL, '6021730c0bfb9', NULL, '2021-02-08 11:21:16', '2021-02-08 11:21:16'),
(14, NULL, 31, NULL, NULL, NULL, NULL, NULL, NULL, '602173782772f', NULL, '2021-02-08 11:23:04', '2021-02-08 11:23:04'),
(15, NULL, 32, NULL, NULL, NULL, NULL, NULL, NULL, '60217474b98f3', NULL, '2021-02-08 11:27:16', '2021-02-08 11:27:16'),
(16, NULL, 33, NULL, NULL, NULL, NULL, NULL, NULL, '60217525d856c', NULL, '2021-02-08 11:30:13', '2021-02-08 11:30:13'),
(17, NULL, 34, NULL, NULL, NULL, NULL, NULL, NULL, '602175a3ddd89', NULL, '2021-02-08 11:32:19', '2021-02-08 11:32:19'),
(18, NULL, 35, NULL, NULL, NULL, NULL, NULL, NULL, '6021760aac1b8', NULL, '2021-02-08 11:34:02', '2021-02-08 11:34:02'),
(19, NULL, 36, NULL, NULL, NULL, NULL, NULL, NULL, '6021763bccd0e', NULL, '2021-02-08 11:34:51', '2021-02-08 11:34:51'),
(20, NULL, 37, NULL, NULL, NULL, NULL, NULL, NULL, '602178bce8c88', NULL, '2021-02-08 11:45:32', '2021-02-08 11:45:32'),
(21, NULL, 38, NULL, NULL, NULL, NULL, NULL, NULL, '602178f7ae736', NULL, '2021-02-08 11:46:31', '2021-02-08 11:46:31'),
(22, NULL, 39, NULL, NULL, NULL, NULL, NULL, NULL, '60217b986cfe9', NULL, '2021-02-08 11:57:44', '2021-02-08 11:57:44'),
(23, NULL, 40, NULL, NULL, NULL, NULL, NULL, NULL, '60217bfe44b82', NULL, '2021-02-08 11:59:26', '2021-02-08 11:59:26'),
(24, NULL, 41, NULL, NULL, NULL, NULL, NULL, NULL, '60217c5a19a3e', NULL, '2021-02-08 12:00:58', '2021-02-08 12:00:58'),
(25, NULL, 42, NULL, NULL, NULL, NULL, NULL, NULL, '60217d73c928f', NULL, '2021-02-08 12:05:39', '2021-02-08 12:05:39'),
(26, NULL, 43, NULL, NULL, NULL, NULL, NULL, NULL, '60217d8bbb149', NULL, '2021-02-08 12:06:03', '2021-02-08 12:06:03'),
(27, NULL, 44, NULL, NULL, NULL, NULL, NULL, NULL, '60217dab9c041', NULL, '2021-02-08 12:06:35', '2021-02-08 12:06:35'),
(28, NULL, 45, NULL, NULL, NULL, NULL, NULL, NULL, '60217dd6caae9', NULL, '2021-02-08 12:07:18', '2021-02-08 12:07:18'),
(29, NULL, 46, NULL, NULL, NULL, NULL, NULL, NULL, '60217f463fbf1', NULL, '2021-02-08 12:13:26', '2021-02-08 12:13:26'),
(30, NULL, 47, NULL, NULL, NULL, NULL, NULL, NULL, '602180f8a8daf', NULL, '2021-02-08 12:20:40', '2021-02-08 12:20:40'),
(31, NULL, 48, NULL, NULL, NULL, NULL, NULL, NULL, '602184a541fd2', NULL, '2021-02-08 12:36:21', '2021-02-08 12:36:21'),
(32, NULL, 50, NULL, NULL, NULL, NULL, 'Processing', NULL, '6021857239feb', NULL, '2021-02-08 12:39:46', '2021-02-08 12:39:46'),
(33, NULL, 51, NULL, NULL, NULL, NULL, 'Processing', NULL, '602342899bcf4', NULL, '2021-02-09 20:18:49', '2021-02-09 20:18:49'),
(34, NULL, 52, NULL, NULL, NULL, NULL, 'Processing', NULL, '60234427cc521', NULL, '2021-02-09 20:25:43', '2021-02-09 20:25:43'),
(35, NULL, 53, NULL, NULL, NULL, NULL, 'Processing', NULL, '60234656d8278', NULL, '2021-02-09 20:35:02', '2021-02-09 20:35:02'),
(36, NULL, 54, NULL, NULL, NULL, NULL, 'Processing', NULL, '6024158311981', NULL, '2021-02-10 11:18:59', '2021-02-10 11:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('0IZGrHmNGMvXVhg8JOltVO0tfZQz1rQqAdl58J8P', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:85.0) Gecko/20100101 Firefox/85.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiZEU0R1dqVzVCWkdhZ0kxUzVNSjdMdEdxY29zaU5yNVBETUJ2U000QyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9ndWlkZS9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6NToidXR5cGUiO3M6NToiZ3VpZGUiO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkQy9IYUdWbHBxbTlubW56Q2phTjdZdU5OSFFRQ1dQL0hhUzB6SmxublRkelhRYWkwV2gxSTIiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEMvSGFHVmxwcW05bm1uekNqYU43WXVOTkhRUUNXUC9IYVMwekpsbm5UZHpYUWFpMFdoMUkyIjt9', 1613022658),
('WrQQL21kCZncfKSRmmGKiDCRD55KqGdqf5txbBZI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:85.0) Gecko/20100101 Firefox/85.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZXBRTDBhamxwMUx3ZERmMGhvOU5aQXFLalNWd29lM0c0SjlwTWVqVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1613041955);

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
(20, 'Title 03', 'title-1609574781.jpg', '1', '2021-01-01 18:00:00', '2021-01-27 11:09:59');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `people` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `slug`, `title`, `details`, `image`, `location_id`, `guide_id`, `map_link`, `status`, `created_at`, `updated_at`, `people`, `price`) VALUES
(17, 'private-guided-experiences', 'Private  Guided Experiences', '<p>Private&nbsp; Guided Experiences</p>', 'private-guided-experiences-1610685783.jpg', 2, '17', '23.810331,90.412521', '1', '2021-01-14 18:00:00', '2021-02-10 10:20:46', '1,3', '1000,1500'),
(18, 'private-guided-experiences', 'Private  Guided local', '<p>kkkkkkkk</p>', 'private-guided-experiences-1610686106.jpg', 2, '9', 'https://goo.gl/maps/ANzUbphHygkK1fqU8', '1', '2021-01-14 18:00:00', '2021-02-10 08:26:31', '1,2', '800,1000'),
(20, 'test-slider-one', 'Test slider one', '<p>Next, use our Get Started docs to setup Tiny! khulna</p>', 'test-slider-one-1611768119.jpg', 1, '16', 'https://goo.gl/maps/ANzUbphHygkK1fqU8', '1', '2021-01-26 18:00:00', '2021-02-10 11:10:59', '1,2', '100,200'),
(21, 'private-guided-experiences-02', 'Private  Guided Experiences 02', '<p><strong>Next, use our Get Started docs to setup Tiny!</strong></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #e03e2d;\">HEllo&nbsp; one&nbsp;</span></p>\r\n<p><span style=\"color: #e03e2d;\">hello two</span></p>\r\n<p>&nbsp;</p>', 'private-guided-experiences-02-1612804037.jpg', 2, '15', '23.810331,90.412521', '1', '2021-02-07 18:00:00', '2021-02-10 10:33:05', '1,2', '20,20'),
(22, 'test-for-cmyk', 'Test for cmyk', '<h1>Next, use our Get Started docs to setup Tiny!</h1><p><br></p><p><img src=\"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wAARCAE2AoADASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD6gooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiimSzR28TySuscaDczucAD1JoAfRWVpHizQ/EFzPb6XrOn6lPAAZYrS6SVowTgFgpJH41q0AFFUtX1rT/D9i97ql/babZoQGuLuZYo1JOACzEDk1W0HxdoXikzjRda07VzBt837BdRz+XnO3dtJxnBxn0NAGtRTZJFiRndgiKMszHAA9TWLYeO/DWq3wsrLxDpV5eE4+z297E8mfTaGzQBuUUUUAFFFFABRXPz/EPwra3xspvE2jw3gO028l/EsgPptLZrfR1kRXRgyMMhlOQR60ALRRVXUNUstIhWW+vILKJnEavcSrGpYnAUEkck9BQBaooqrqWq2WjWjXWoXkFjbL96a5lWNB9WYgUAWqKy9F8VaL4kDnSNYsNVCff+xXKTbfrtJxWpQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBHc3MVnby3E8ixQxIXeRjgKoGST9BXwj478e+LP2lviANC0Pzf7KMjCzsA+yMRr/y2m98c85xnA56/Vn7RWqyaN8FPFlxExV2tRb5HpLIsZ/RzXxP8IT45n1LUrLwFBMdTurcLPcW21ZIoQ2SBIxAQFtvOQTtGD1oA+s/2fPgBffBu71O8vtXt9QmvoEiMNvEwWMqSfvE/N19BXtdfCvw6+P/AI1+GnjtNN8W6hf31gtx9n1C01OQyywc4LqzZIK9cZwR9QR9d/Fb4g23w08B6lr8pR5Yk2WsRPEszcIv0zyfYE0AfMX7ZPxP/tvxHbeD7GXNlpZE14VPD3BHC/8AAFP5uR2rb/YT/wBb42/3bL/2vXl2heCLjV/gz8QfiDq+64uZpYLe2ml5Z5Gu4Wml+vIXPu4r1H9hP/W+Nv8Adsv/AGvQBT/bN+Jt82uW3gyyuHgsIoFuL5Y2x50jZKI3qqqAcdCW9hXnvxA/Zz1r4b/D3S/Fs+oRzNKYvtNpHGVe0LjK/Nn5sHAPAwSMZ61B+1C5m+PPiXdyA1soHt9nir6s/aqRf+FD+I+B8ptSPb/SYhQBn/sxfFWbxt8M7iTXLxTeaI5huby4cDdCF3LI7HjgbgSf7mT1NemaP4/8L+Ib1bPSvEmkaneMCwt7O+ilkIHU7VYnivmv9hjEy+OLeRRJC62e5GGQc+eCMe4rzHxHptx+zt8fopoFcWVndrd2+OstnJkFQe/yl0z6qaAPuLWPH/hjw7emz1XxHpGmXYUMbe8voopAD0O1mBwa8c/ap8W+JJfC+kaV4Pt76+tdXRprm+0qJ5Q0AC7FDoD8r7ieDyB6E18/+H9Puf2i/j7LLMr/AGK9u2urjPWKzjwAuex2hEz6sK+/ookgiSKNFjjRQqoowFA6ACgD4S0X9lXxDqnwzuvFU92un3kcMtxHpFxbssromc7mJG1jtJAwc8ZIzx137GPxH1JPElz4Purh7jTJrd7i1jkbPkSKRuC+isCSR6j3NbHxp/atvNMu/FXg6x8PpDPG02n/ANpPeb+CCpcR7Bg4Jx8xwfWq/wCxd8OIzc3vjKe8t5ZEjazt7SGUPJEWI3PIB90kDCg9QSfSgDuP2kvjj4i+GupaXoXhuyhkvtRgMouXQyup3FQqR9CeOpz9K+VG8Q+JPEHxM0hvFF5fXOpxajCjx3xYNCfMXKhDjZ9ABX6Otp1q18t6baE3ip5S3BjHmBM52huuM9q/Pz4gf8nJal/2MK/+jhQB+hdfAvxI8Raz+0D8axotpckWbXrWOnRMx8qKNSQ0pA7kKXJ6447CvveZzHE7Dqqk1+f37LH7z48+Gy3zH/Sjk+v2aWgCP4i/D/X/ANm3xzpU9jrBmmaMXNrfwIYskHDoyEn2yMkEMPcV90+AfFUfjjwXo2vRoIxf2yTNGOiOR86/gwI/Cvm39uxQJfBLY5IvQT/34/xr1n9laRpPgT4a3HO03Kj6faZaAPWKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA81/aR02XVfgj4rghUs626TkD+7HKkjH8kNeG/sMajBFrXi2wZ1FzPBbzRqTyVRpA2PoZF/Ovre6tYr22mt7iNZoJkMckbjKspGCCPQivjrxn+yf4z8JeJpNR8A3T3NoWZrcw3gtrq3B/hLFlBGOMhue4FAHFftW3FpdfG/WvshVmSOCOYp3kES5/EDA/CvTf2qPDnjDXdP8E6ZYaTqeqWdvY+ZcR2NpJMFuMKpLlQecdM+retHwc/ZO1mLxRb+IPHLxIlvMLhbATCeSeUHIMrDK4zyeST3x3+sqAPzv1rWPinpXw3k8N6ppuraf4PiVFeK40YQxIPNDrulMQYEyYOS3JPfNav7MWt+LdM8fWlt4fS6bSLy8tk1g29mJkEQZtu9yp8sYL8gjv6V9c/H/wrqnjb4S67oui2v23U7nyPKg8xI922eN2+ZiAMKpPJ7V55+yd8KvFPwzk8UHxJpf8AZovRaiD/AEiKXfs83d9xmxjcvXHWgDwf9q/TpdP+OWtTOpCXUdvcRk9x5KIT/wB9I1fSX7UXiCzuf2fr64jlVotUNp9mYH7+ZElGPX5UJqf9oj4CD4v2Fpe6bPFaeILFTHG82RHPGTny2IBIwckH3OeuR892/wCzB8WNaa00nUVEGlWzEQtd6kslvCD1KIrMR+CigD0L9hbTZI9N8X37KfKmltoEb/aQSMw/8iLXH/tneKbPXviDpmiWcKSXWlW5SedBl2eQhhH77QAfq5r6f8BeAofhF8OhpGi27apd28Uk5GVja8uCM9SQFyQFGTwAMnjNfOfw0/Z48daj8X7TxH420kW9mt2+o3MzXUEvmTAllXajscb8dsYBFAGX+xl4ps9A+IepaLewpFdarb+XBO4w6yRksY/bcMn6oBX0p8Tfjn4b+E2oWdnriXxlu4jLE1rAHXAODklhzXgHxO/Z48c2Hxfu/EfgnShcWjXSajbzLdQxeVMSGZdrupxvyemMECvavjF8Hj8b/BOm/aUGh+I7WMTQ+aRIsTso8yFypIK5A+Zc8qCM9CATXfhz4d/Fj4f3fiM6Lp32TUbaWd9Re1jjuYyNwZ2kHIZSpzz25r5f/ZC1i80/4y2Vnbuwtb+2niuUB+UqsbOpI9mUc+59anX9mz4wWFvPottFJ/ZEzZkjg1ZFtZD/AHjGXBP4rnivfP2ef2dR8Jnn1jV7mK98QXEXkgQZMVtGSCQpIBZjgZOB0wO5IB7fX56fED/k5LUv+xhX/wBHCv0Lr438Yfs/+PtU+Nt9r9roPm6TJrIu0uPtluMxeYG3bTJu6DpjNAH2O6h1KnoRg1+ff7PJHhb9oPQbe+IieG6uLJ93GJGikiA/76IFfoLXy98ef2W9U8R+KbjxP4OeE3N0/nXNhJIImE3eSNjxyeSCRzkg84ABjft06hDLq3hCxVwZ4YLmZ1zyFdowp/Ext+Ve2fs0abJpfwP8LRSqVd4pZ+f7skzup/75YV8+eFv2UvHnjLxLFeeObp7S0BX7RNcXourqVB/CpDMBxxknj0PSvsqxsYNMsreztYlgtbeNYookGAiKMKB7AACgCeiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAP/Z\" data-filename=\"banner6.jpg\" style=\"width: 640px;\"><br></p><p><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">Next, use our Get Started docs to setup Tiny!</font></p><p><br></p><p>Next, use our Get Started docs to setup Tiny!<br></p>', 'test-for-cmyk-1612976042.jpg', 2, '', '23.810331,90.412521', '1', '2021-02-09 18:00:00', '2021-02-09 18:00:00', '1,2', '500,800'),
(23, 'test-slider-one-dhaka', 'Test slider one dhaka', '<p>Next, use our Get Started docs to setup Tiny! Next, use our Get Started docs to setup Tiny!</p><p>&nbsp;<span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!&nbsp;</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!</span></p><p><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">Next, use our Get Started docs to setup Tiny!<span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!&nbsp;</span></font></p><p><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">Next, use our Get Started docs to </font>setup Tiny!&nbsp;<span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!</span></p><p>Next, use our Get Started docs to setup Tiny!<span style=\"font-size: 0.875rem;\">Next, use our Get Started d<font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">ocs to setup Tiny!&nbsp;</font></span></p><p><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">Next, use our Get Started docs to setup Tiny!&nbsp;<span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!&nbsp;</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!</span></font><span style=\"font-size: 0.875rem;\"><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">Next, use our Get Sta</font>rted docs to setup Tiny!&nbsp;</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!&nbsp;</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!</span><span style=\"font-size: 0.875rem;\">lorem&nbsp;</span><span style=\"font-size: 0.875rem;\">&nbsp;</span><span style=\"font-size: 0.875rem;\">Next, ueour Get Started docs to setup Tiny!</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!&nbsp;</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!&nbsp;</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!&nbsp;</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!</span><span style=\"font-size: 0.875rem;\">&nbsp;</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!&nbsp;</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!&nbsp;</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!&nbsp;</span><span style=\"font-size: 0.875rem;\">Next, use our Get Started docs to setup Tiny!</span></p><p><span style=\"font-size: 0.875rem;\"><br></span></p><ol><li>Next, use our Get Started docs to setup Tiny!</li><li>Next, use our Get Started docs to setup Tiny!<span style=\"font-size: 0.875rem;\"><br></span></li></ol>', 'test-slider-one-dhaka-1612978489.jpg', 2, '', '23.810331,90.412521', '1', '2021-02-09 18:00:00', '2021-02-10 11:46:41', '1,2', '100,200');

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
  `tour_place_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `prefix`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `utype`, `country`, `birthday`, `city`, `address`, `zip`, `tour_place_id`, `token`, `homephone`, `cellphone`, `skypename`, `contacttime`, `licensed`, `licensedetail`, `detail`, `notes`, `biography`, `credentials`, `guidenumber`, `stattus`, `bangla`, `english`, `arabic`, `hindi`, `alternate_email_one`, `alternate_email_two`, `alternate_email_three`, `newsletter`, `location_id`, `location`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Admin', 'admin@gmail.com', NULL, '$2y$10$I9bJhN7M2U4ygEOHzzVrFOLwnbhOttG33am.GivUU3UFnv2zAP8EW', NULL, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, '', '12345678', NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2021-01-13 06:41:07', '2021-01-13 06:41:07'),
(2, NULL, 'Guide User', 'guide@gmail.com', NULL, '$2y$10$C/HaGVlpqm9nmnzCjaN7YuNNHQQCWP/HaS0zJlnnTdzXQai0Wh1I2', NULL, NULL, 'guide', NULL, NULL, NULL, NULL, NULL, '17', '12345678', NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, 'biography', 'credentials', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', 'Dhaka', 'guide-user-2-1610604897.png', '1', '2021-01-13 06:53:59', '2021-02-10 23:18:31'),
(3, NULL, 'Guide User 2', 'guide2@gmail.com', NULL, '$2y$10$C/HaGVlpqm9nmnzCjaN7YuNNHQQCWP/HaS0zJlnnTdzXQai0Wh1I2', NULL, NULL, 'guide', NULL, NULL, NULL, NULL, NULL, '17', '12345678', NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'khulna', 'guide-user-2-1610604897.png', '1', '2021-01-13 06:53:59', '2021-01-20 22:37:05'),
(4, NULL, 'User 2', 'user@gmail.com', NULL, '$2y$10$C/HaGVlpqm9nmnzCjaN7YuNNHQQCWP/HaS0zJlnnTdzXQai0Wh1I2', NULL, NULL, 'user', NULL, NULL, NULL, NULL, NULL, '', '12345678', NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'user-2-1610626721.png', '0', '2021-01-13 06:53:59', '2021-01-14 06:18:41'),
(6, NULL, 'Md. Rostom', 'adminpkk@gmail.com1', NULL, '$2y$10$wRtGk6gkQCxb2v2CKeVBbuK1qQ.0ENtko5b3H6kFsbTFntjL/R1oG', NULL, NULL, 'user', 'Afghanistan', NULL, NULL, NULL, NULL, '', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'adminpkk@gmail.com1', 'adminpkk@gmail.com2', 'adminpkk@gmail.com3', 'yes', NULL, NULL, NULL, NULL, '2021-01-14 20:50:21', '2021-01-14 20:50:21'),
(7, NULL, 'Rostom', 'rostom@gmail.com', NULL, '$2y$10$ZrfsPnlzYzgkaMBw.PDxi.u50cxOL2n0Bbe/5wH185ta9aaY3nu52', NULL, NULL, 'user', 'Afghanistan', NULL, NULL, NULL, NULL, '', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', NULL, NULL, NULL, NULL, '2021-01-14 20:54:40', '2021-01-14 20:54:40'),
(9, 'Mr', 'Guide User 4', 'guide4@gmail.com', NULL, '$2y$10$S7dolWgomyYC7HNNHWpym.wqKiqaiyUDXCuHSwFRUDJ7u4uQTxF8.', NULL, NULL, 'guide', 'werewr', '02-02-02', 'dhaka', 'dhaka', '1216', '18', '12345678', 'rerer', '1235454', 'rewrwe', 'rewr', 'on', NULL, 'lorem', 'trtrtrtrtr', 'rwqr', NULL, '9', NULL, 'basic', 'basic', 'basic', 'basic', NULL, NULL, NULL, NULL, '1', 'khulna', 'guide-user-4-1611342708.jpg', '1', '2021-01-21 02:11:58', '2021-02-09 01:51:05'),
(10, NULL, 'jowel', 'jowel1234@gmail.com', NULL, '$2y$10$KuiLNgx0GI79D.2SKlaQyuec5BHkCizw1F/aWuPfbGOYQ9dM7tAOO', NULL, NULL, 'user', 'Bangladesh', NULL, NULL, NULL, NULL, NULL, '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jowel1234@gmail.com', 'jowel1234@gmail.com', NULL, 'yes', NULL, NULL, 'jowel-1611341133.jpg', NULL, '2021-01-22 00:07:30', '2021-01-22 12:45:33'),
(12, NULL, 'jowel', 'adrin@gmail.com', NULL, '$2y$10$tgfy1qDVU9KIvRQjS2ESkO58v9TwKi8TFBs43zkDWeygYqEopflsO', NULL, NULL, 'guide', 'khulna 2', '14-04-1997', 'dhaka', 'dhaka', '1216', '21', '1234567890', '333', '333', '33', NULL, NULL, NULL, NULL, 'ki ki', NULL, NULL, NULL, NULL, 'basic', 'fluent', 'conversational', 'basic', NULL, NULL, NULL, NULL, '1', 'khulna', NULL, '1', '2021-01-29 09:29:53', '2021-01-29 09:53:23'),
(13, 'Mr', 'Md. Rostom', 'rostom52@gmail.com', NULL, '$2y$10$T0tUVemSUmv3RmLlwfuvWu0HhPLi27nOZ260jT4CnHfyDZqTk8/hO', NULL, NULL, 'guide', 'bangladesh', '02-02-02', 'khulna', 'khulna, bangladesh', '9253', '20', '12345678', '+8801752970499', '+8801752970499', 'Skype Name', '8.30', 'on', NULL, NULL, NULL, NULL, NULL, '13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'khulna', NULL, '1', '2021-02-08 20:02:01', '2021-02-08 20:17:15'),
(14, 'Mr', 'Md. Rostom 02', 'rostom585@gmail.com', NULL, '$2y$10$4yLNfa9vuCby6N3lq0B5cOb078vsR2gFVHU8pVWd5/LwfJ1d/QLuu', NULL, NULL, 'guide', 'bangladesh', '02-02-02', 'Dhaka', 'Dhaka - 1200', '9025', '18', '12345678', '+8801752970499', '+8801752970499', 'Skype Name', '9:30', 'on', NULL, NULL, NULL, NULL, NULL, '14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', 'Dhaka', NULL, '1', '2021-02-08 20:16:31', '2021-02-08 20:17:01'),
(15, 'Dr', 'মোঃ আতিয়ার গাজী', 'guide88@gmail.com', NULL, '$2y$10$LJRvEy9gBlm0im39KudJ8.aSQJZ8q7DF6flrNVbgmwteRAOgLy90u', NULL, NULL, 'guide', 'bangladesh', 'bangladesh', 'bangladesh', 'Andulia, Shahpur , Dumuria, Khulna', '9253', '21', '12345678', '+8801752970499', '+8801752970499', 'Skype Name', 'bangladesh', 'Yes, I\'m a licensed tour guide', NULL, NULL, NULL, NULL, NULL, '15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'khulna', NULL, '1', '2021-02-09 02:42:21', '2021-02-09 02:43:40'),
(16, 'Ms', 'Md. Rostom 77', 'guide77@gmail.com', NULL, '$2y$10$h.tj.LzugqEMMebbGLfzwuWS7d.eqYPswm2RTspGBN3xfi/jkhrtm', NULL, NULL, 'guide', NULL, '02-02-02', NULL, 'khulna, bangladesh', '9253', '20', '12345678', '+8801752970499', '+8801752970499', NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, '16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'khulna', NULL, '1', '2021-02-09 05:00:36', '2021-02-10 11:52:40'),
(17, 'Mr', 'মোঃ লিটন গাজী', 'guide785@gmail.com', NULL, '$2y$10$nmwWWT4IXfKTu289WP/rpOSuWPJ8wQPqQTWtRCUc1CkV6bdyoquBy', NULL, NULL, 'guide', NULL, '02-02-02', NULL, 'khulna, bangladesh', '9253', '17', '12345678', '+8801752970499', '+8801752970499', 'Skype Name', NULL, 'on', NULL, NULL, NULL, NULL, NULL, '17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'khulna', NULL, '1', '2021-02-09 07:10:03', '2021-02-10 07:34:13'),
(18, 'Mr', 'jowel 11', 'hello@gmail.com', NULL, '$2y$10$RWh2Y1cFy4aD12R4w/6Xn.rpDgBym89d7.OEuEznbS2KAO916u8IC', NULL, NULL, 'guide', 'khulna 2', '14-04-1997', 'dhaka', 'dhaka', '1216', '17', '123456789', '333', '333', 'jp.jp', '333', 'Yes, I\'m a licensed tour guide', 'yes local guide', 'test 22', 'helo', NULL, NULL, '18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'khulna', NULL, '1', '2021-02-10 07:43:42', '2021-02-10 07:44:12'),
(19, 'Mr', 'Guide User 55', 'guide55@gmail.com', NULL, '$2y$10$B2imMbqquFZOirWKD7BKtOmfhSME1vxJvmuzmrHY.wQJiUmYxsMnC', NULL, NULL, 'guide', 'bangladesh', '02-02-02', 'khulna', 'khulna, bangladesh', '9253', '18', '12345678', '+8801752970499', '+8801752970499', 'Skype Name', '8.30', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2021-02-10 22:40:48', '2021-02-10 22:40:48'),
(20, 'Mr', 'guide 46', 'guide46@gmail.com', NULL, '$2y$10$wHtjCGIyo9AfRBv/YhQKk.U4Ix7SLrNASaI.39e/v7JV2FOJfJ14q', NULL, NULL, 'guide', 'bangladesh', '5', 'khulna', 'khulna, bangladesh', '9253', '22', '12345678', '+8801752970499', '+8801752970499', 'Skype Name', 'bangladesh', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2021-02-10 23:13:41', '2021-02-10 23:13:41'),
(21, 'Mr', 'guide 47', 'guide47@gmail.com', NULL, '$2y$10$.8MeQLW7UFukn6VvrddprOEV6maAvaUhTomWTVs1yaazesNrewSWC', NULL, NULL, 'guide', NULL, '02-02-02', NULL, 'khulna, bangladesh', '55555555', '20', '12345678', '+8801752970499', '+8801752970499', NULL, NULL, 'on', NULL, NULL, NULL, 'biography', 'credentials', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2021-02-10 23:17:43', '2021-02-10 23:17:43');

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
