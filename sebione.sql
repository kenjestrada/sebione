-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2022 at 05:35 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sebione`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dept_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_contactNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dept_code`, `dept_name`, `dept_contactNo`, `dept_email`, `created_at`, `updated_at`) VALUES
(1, 'BD-C', 'Business Development', '09123456789', 'businessdevelopmentc@gmail.com', '2022-10-22 06:29:17', '2022-10-22 06:32:00'),
(2, 'CS-C', 'Creative Services', '09123456788', 'creativeservicesc@gmail.com', '2022-10-22 06:33:11', '2022-10-22 06:33:11'),
(3, 'E-C', 'Engineering', '09123456787', 'engineeringc@gmail.com', '2022-10-22 06:33:27', '2022-10-22 06:33:27'),
(4, 'GM-C', 'General Management', '09123456786', 'generalmanagementc@gmail.com', '2022-10-22 06:33:43', '2022-10-22 06:33:43'),
(5, 'IT-C', 'Information Technology', '09123456785', 'informationtechnologyc@gmail.com', '2022-10-22 06:33:57', '2022-10-22 06:33:57'),
(6, 'L-C', 'Legal', '09123456784', 'legalc@gmail.com', '2022-10-22 06:34:12', '2022-10-22 06:34:12'),
(7, 'O-C', 'Operations', '09123456783', 'operationsc@gmail.com', '2022-10-22 06:34:27', '2022-10-22 06:34:27'),
(8, 'P-C', 'Production', '09123456782', 'productionc@gmail.com', '2022-10-22 06:34:42', '2022-10-22 06:34:42'),
(9, 'RM-C', 'Risk Management', '09123456781', 'riskmanagementc@gmail.com', '2022-10-22 06:34:58', '2022-10-22 06:34:58'),
(10, 'SIP-C', 'Strategic Initiatives & Programs', '09123456780', 'strategicinitiativesprogramsc@gmail.com', '2022-10-22 06:35:13', '2022-10-22 06:35:13'),
(11, 'CSIT-C', 'Computer Science', '09123456770', 'computersciencec@gmail.com', '2022-10-22 06:35:28', '2022-10-22 06:35:28'),
(12, 'HD-C', 'Help Desk', '092342423423', 'helpdeskc@gmail.com', '2022-10-22 06:35:45', '2022-10-22 06:35:45'),
(13, 'PIT-C', 'Programmer', '09232423234', 'programmerc@gmail.com', '2022-10-22 06:36:05', '2022-10-22 06:36:05'),
(14, 'CTO-C', 'Chief Technology Officer', '0953453453454', 'chieftechnologyofficerc@gmail.com', '2022-10-22 06:36:27', '2022-10-22 06:36:27'),
(15, 'ITM-C', 'IT Management', '0983334324234', 'itmanagementc@gmail.com', '2022-10-22 06:36:42', '2022-10-22 06:36:42'),
(16, 'SA-C', 'System Analyst', '0945535434233', 'systemanalystc@gmail.com', '2022-10-22 06:37:26', '2022-10-22 06:37:26'),
(17, 'IS-C', 'Information Security', '09123234534', 'informationsecurityc@gmail.com', '2022-10-22 06:37:43', '2022-10-22 06:37:43'),
(18, 'TS-C', 'Technical Support', '0923235345345', 'technicalsupportc@gmail.com', '2022-10-22 06:38:01', '2022-10-22 06:38:01'),
(19, 'AD-C', 'Application Developer', '095643534546', 'applicationdeveloperc@gmail.com', '2022-10-22 06:38:18', '2022-10-22 06:38:18'),
(20, 'SE-C', 'System Engineer', '0934545645745', 'systemengineerc@gmail.com', '2022-10-22 06:38:35', '2022-10-22 06:38:35'),
(21, 'HR-C', 'Human Resources', '0912324234233', 'humanresourcesc@gmail.com', '2022-10-22 06:38:49', '2022-10-22 06:38:49'),
(22, 'Test-C', 'Testing Department Name', '09123455', 'testingdeptname@gmail.com', '2022-10-22 07:29:22', '2022-10-22 07:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `emp_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_contactNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `emp_fname`, `emp_lname`, `dept_id`, `emp_pic`, `emp_contactNo`, `emp_email`, `created_at`, `updated_at`) VALUES
(1, 'Kenneth', 'Estrada', 5, '1666449629.png', '09123456789', 'test@gmail.com', '2022-10-22 06:40:29', '2022-10-22 06:40:29'),
(2, 'William', 'FosterFoster', 18, '1666449682.png', '094545534645', 'williamfoster@gmail.com', '2022-10-22 06:41:22', '2022-10-22 06:41:22'),
(3, 'David', 'Miles', 14, '1666449705.png', '0923432534643', 'davidmiles@gmail.com', '2022-10-22 06:41:45', '2022-10-22 06:41:45'),
(4, 'Louis', 'Mendeta', 13, '1666449729.png', '0945645645', 'louismendeta@gmail.com', '2022-10-22 06:42:09', '2022-10-22 06:42:09'),
(5, 'Paul', 'Stewart', 4, '1666449749.png', '09435435433543', 'paulstewart@gmail.com', '2022-10-22 06:42:29', '2022-10-22 06:42:29'),
(6, 'Helen', 'Thorsen', 17, '1666449771.png', '09345345345', 'helenthorsen@gmail.com', '2022-10-22 06:42:51', '2022-10-22 06:42:51'),
(7, 'Leo', 'Brown', 10, '1666449789.png', '09345343534', 'leobrown@gmail.com', '2022-10-22 06:43:09', '2022-10-22 06:43:09'),
(8, 'James', 'Grider', 11, '1666449810.png', '09354345345', 'jamesgrider@gmail.com', '2022-10-22 06:43:30', '2022-10-22 06:43:30'),
(9, 'Margaretta', 'Baliwag', 3, '1666449916.png', '0923423423423', 'margarettabaliwag@gmail.com', '2022-10-22 06:45:16', '2022-10-22 06:45:16'),
(10, 'Samantha', 'Rodriguez', 7, '1666449939.png', '0923423423', 'samantharodriguez@gmail.com', '2022-10-22 06:45:39', '2022-10-22 06:45:39'),
(11, 'Evelyn', 'Gerry', 12, '1666449959.png', '0923423423', 'evelyngerry@gmail.com', '2022-10-22 06:45:59', '2022-10-22 06:45:59'),
(12, 'Jacquiline', 'Muchacha', 4, '1666449981.png', '092343434', 'muchachajac@gmail.com', '2022-10-22 06:46:21', '2022-10-22 06:46:21'),
(13, 'Derek', 'Rudir', 8, '1666450003.png', '092343534', 'derekrudir@gmail.com', '2022-10-22 06:46:43', '2022-10-22 06:46:43'),
(14, 'Molly', 'Hordan', 6, '1666450027.png', '094543543', 'mollyhordan@gmail.com', '2022-10-22 06:47:07', '2022-10-22 06:47:07'),
(15, 'Lorenzo', 'Prado', 17, '1666450044.png', '09345343543', 'lorenzoprado@gmail.com', '2022-10-22 06:47:24', '2022-10-22 06:47:24'),
(16, 'Patrice', 'Allan', 19, '1666450066.png', '0934534543', 'patriceallan@gmail.com', '2022-10-22 06:47:46', '2022-10-22 06:47:46'),
(17, 'Kathryn', 'Philipis', 16, '1666450083.png', '093443534', 'kathrynphil@gmail.com', '2022-10-22 06:48:03', '2022-10-22 06:48:03'),
(18, 'Brenda', 'Wheeler', 12, '1666450103.png', '09345334543', 'brendawheel@gmail.com', '2022-10-22 06:48:23', '2022-10-22 06:48:23'),
(19, 'Peter', 'Salas', 19, '1666450125.png', '09345343543', 'petersalas@gmail.com', '2022-10-22 06:48:45', '2022-10-22 06:48:45'),
(20, 'Kurosaki', 'Ichigo', 9, '1666450144.png', '09344534543', 'kurosakiichigo@gmail.com', '2022-10-22 06:49:04', '2022-10-22 06:49:04'),
(21, 'Bams', 'Nekinos', 14, '1666450186.png', '09343543', 'bamnekino@gmail.com', '2022-10-22 06:49:20', '2022-10-22 06:49:46');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_22_113155_departments', 1),
(6, '2022_10_22_113356_employees', 1),
(7, '2022_10_22_135539_fresh', 1);

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
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$bsKridzNPZODET3AwaCZA.8YRzdWyju8oznrluFg2NV1HARSYdrw.', 1, NULL, '2022-10-22 06:00:55', '2022-10-22 06:00:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_dept_id_foreign` (`dept_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
