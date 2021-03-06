-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2017 at 03:29 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `dep_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dep_name`, `created_at`, `updated_at`) VALUES
(1, 'องค์การบริหาร องค์การนักศึกษา', NULL, NULL),
(2, 'องค์การบริหาร สภานักศึกษา', NULL, NULL),
(3, 'สโมสรนักศึกษา คณะเทคโนโลยีและสิ่งแวดล้อม', NULL, NULL),
(4, 'สโมสรนักศึกษา คณะการบริการและการท่องเที่ยว', NULL, NULL),
(5, 'สโมสรนักศึกษา คณะวิเทศศึกษา', NULL, NULL),
(6, 'ภาควิชา วิศวกรรมศาสตร์', NULL, NULL),
(7, 'ชมรมแบดมินตัน', NULL, NULL),
(8, 'ชมรมบาสเกตบอล', NULL, NULL),
(9, 'ชมรมเปตอง', NULL, NULL),
(10, 'ชมรมวอลเลย์บอล', NULL, NULL),
(11, 'ชมรมศิลปะป้องกันตัว', NULL, NULL),
(12, 'ชมรมฟุตบอล', NULL, NULL),
(13, 'ชมรมฟุตซอล', NULL, NULL),
(14, 'ชมรมยิงปืน', NULL, NULL),
(15, 'ชมรมฟันดาบสากล', NULL, NULL),
(16, 'ชมรมเชียร์แอนด์แดนซ์', NULL, NULL),
(17, 'ชมรมดนตรีสากล', NULL, NULL),
(18, 'ชมรมอาสาพัฒนาชนบท', NULL, NULL),
(19, 'ชมรมดนตรีไทยดนตรีไทยและ ศิลปะการแสดง', NULL, NULL),
(20, 'ชมรมเพื่อนสิ่งแวดล้อม', NULL, NULL),
(21, 'ชมรมVolunteer Backpack', NULL, NULL),
(22, 'ชมรมPSU Phuket Student Fund', NULL, NULL),
(23, 'ชมรมPSU Phuket International Student', NULL, NULL),
(24, 'ชมรมคนสร้างภาพ PSU Pix', NULL, NULL),
(25, 'ชมรมไมค์ทองคำ', NULL, NULL),
(26, 'ชมรมมุสลิม', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `act_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `act_locat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateTime_begin` datetime NOT NULL,
  `dateTime_end` datetime NOT NULL,
  `act_sem` double NOT NULL,
  `act_year` double NOT NULL,
  `act_req` double NOT NULL,
  `act_hour` double NOT NULL,
  `act_note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `act_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `department_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE `event_type` (
  `event_id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2017_06_14_143145_create_events_table', 1),
(4, '2017_06_22_103847_create_types_table', 1),
(5, '2017_07_01_133202_create_event_type_table', 1),
(6, '2017_07_02_091534_create_department_table', 1);

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
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `nametype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `nametype`, `created_at`, `updated_at`) VALUES
(1, 'บังคับเลือก', NULL, NULL),
(2, 'จิตสำนึก', NULL, NULL),
(3, 'ทักษะสังคม', NULL, NULL),
(4, 'ภูมิใจในสถาบัน', NULL, NULL),
(5, 'พหุวัฒนธรรม', NULL, NULL),
(6, 'พัฒนาสุขภาพ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'piyaphan6929@gmail.com', '$2y$10$GT9K4oKiAbpp8nhKaePPO.BCxUxBmi1cEJDKAFjmQUF60RZQD0eLW', 'user', NULL, '2017-07-07 06:05:59', '2017-07-07 06:05:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_user_id_foreign` (`user_id`),
  ADD KEY `events_department_id_foreign` (`department_id`);

--
-- Indexes for table `event_type`
--
ALTER TABLE `event_type`
  ADD KEY `event_type_event_id_index` (`event_id`),
  ADD KEY `event_type_type_id_index` (`type_id`);

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
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event_type`
--
ALTER TABLE `event_type`
  ADD CONSTRAINT `event_type_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_type_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
