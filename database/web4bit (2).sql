-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 15, 2023 at 04:20 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web4bit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md. redoy', 'admin@gmail.com', NULL, '$2y$10$xmG7.J4.dFcJ40qR.yxS4.yRuiD8y2Mzaft7tIdnC1dY9QtZMvYzW', NULL, '2022-12-28 13:46:50', '2022-12-28 13:46:50');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_teg` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner`, `meta_teg`, `status`, `created_at`, `updated_at`) VALUES
(1, 'assets/admin/banner/contact-form-14-beautiful-css-forms.jpg', 'dve', 1, NULL, NULL),
(2, 'assets/admin/banner/Screenshot_20221203_120750.png', 'ac', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(255) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'assets/admin/clients/320627973_1158069028430114_4210337628792220297_n (1).png', 1, NULL, NULL),
(2, 'assets/admin/clients/y9dvkos1sv3neaku3i18 (1).png', 1, NULL, NULL),
(3, 'assets/admin/clients/Screenshot 2022-12-30 015154.png', 1, NULL, NULL),
(4, 'assets/admin/clients/y9dvkos1sv3neaku3i18 (1).png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifram_link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `location`, `email`, `number`, `ifram_link`, `created_at`, `updated_at`) VALUES
(2, 'Bohaddarhat', 'info@potuglobal.com', '', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.573488963265!2d91.8420056505246!3d22.36972789595179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad2777c9c1cf83%3A0xb8796c419fa1021b!2sBahaddarhat%2C%20Chattogram!5e0!3m2!1sen!2sbd!4v1672685425217!5m2!1sen!2sbd', NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `logo`, `promo_link`, `created_at`, `updated_at`) VALUES
(15, 'Admin/logo/Screenshot (8).png', 'dhgdf', NULL, NULL),
(16, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'fdgdfg', NULL, NULL),
(17, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'zzxvzsd', NULL, NULL),
(18, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'wegweg', NULL, NULL),
(19, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'zssg', NULL, NULL),
(20, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'rgerg', NULL, NULL),
(21, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'dfdfnb', NULL, NULL),
(22, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'fgnfg', NULL, NULL),
(23, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'fbgdh', NULL, NULL),
(24, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'sdgsdg', NULL, NULL),
(25, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'sdsd', NULL, NULL),
(26, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'jygf', NULL, NULL),
(27, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'jftyf', NULL, NULL),
(28, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'hdtgfdhfc', NULL, NULL),
(29, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'fdbdf', NULL, NULL),
(30, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'dfhdr', NULL, NULL),
(31, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'mjfg', NULL, NULL),
(32, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'dhdj', NULL, NULL),
(33, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'xfbdf', NULL, NULL),
(34, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'gnfgnfg', NULL, NULL),
(35, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'hmfgm', NULL, NULL),
(36, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'fhdshdsrh', NULL, NULL),
(37, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'cncn', NULL, NULL),
(38, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'gngc', NULL, NULL),
(39, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'wegew', NULL, NULL),
(40, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'fdg', NULL, NULL),
(41, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', '123456321asf', NULL, NULL),
(42, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'gnf', NULL, NULL),
(43, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'gnf', NULL, NULL),
(44, 'assets/admin/logo/contact-form-14-beautiful-css-forms.jpg', 'gnf', NULL, NULL),
(45, 'assets/admin/logo/y9dvkos1sv3neaku3i18 (1).png', 'ssdfsd', NULL, NULL),
(46, 'assets/admin/logo/Screenshot 2022-12-30 015122.png', 'sdvsdsdgrsgrer', NULL, NULL),
(47, 'assets/admin/logo/Screenshot 2022-12-30 014108.png', 'dhdrh', NULL, NULL),
(48, 'assets/admin/logo/Screenshot 2022-12-30 015122.png', 'sdrsg', NULL, NULL),
(49, 'assets/admin/logo/Screenshot 2022-12-30 015154.png', 'fddf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `logo`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'assets/admin/industry/Screenshot 2022-12-30 015122.png', 'wgwreg', 1, NULL, NULL);

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
(5, '2022_12_28_181255_create_admins_table', 1),
(6, '2022_12_28_181412_create_admin_password_resets_table', 1),
(7, '2022_12_30_172125_create_heroes_table', 2),
(8, '2022_12_31_144351_create_services_table', 3),
(9, '2022_12_31_145014_create_clients_table', 4),
(10, '2022_12_31_150728_create_teches_table', 5),
(11, '2022_12_31_152457_create_teams_table', 6),
(12, '2022_12_31_155316_create_contacts_table', 7),
(13, '2022_12_31_161003_create_industries_table', 8),
(14, '2023_01_15_151038_create_banners_table', 9);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `logo`, `title`, `created_at`, `updated_at`) VALUES
(1, 'assets/admin/service/Screenshot 2022-12-30 015154.png', 'sddvsdvs', NULL, NULL),
(2, 'assets/admin/clients/WhatsApp Image 2022-06-13 at 6.22.24 PM.jpeg', NULL, NULL, NULL),
(3, 'assets/admin/clients/320627973_1158069028430114_4210337628792220297_n (1).png', NULL, NULL, NULL),
(4, 'assets/admin/clients/Screenshot 2022-12-30 015154.png', NULL, NULL, NULL),
(5, 'assets/admin/industry/Screenshot 2022-12-30 015154.png', 'dvsdv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `image`, `name`, `designation`, `about`, `facebook`, `instagram`, `linkedin`, `twitter`, `status`, `created_at`, `updated_at`) VALUES
(1, 'assets/admin/tech/y9dvkos1sv3neaku3i18 (2).png', 'Md. redoy', 'designer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged', 'https://www.facebook.com/hridoy.cse890', 'rvwvw', 'wrbwr', 'svswdv', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teches`
--

CREATE TABLE `teches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teches`
--

INSERT INTO `teches` (`id`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'assets/admin/tech/Screenshot 2022-12-30 014108.png', 1, NULL, NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hridoy', 'admin@gmail.com', NULL, '$2y$10$wTORMb4EYyQj2udW/c5yluSsWxyA.aItE/9c8ZkUvhOULc1qHJkTq', NULL, '2022-12-28 13:26:01', '2022-12-28 13:26:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teches`
--
ALTER TABLE `teches`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teches`
--
ALTER TABLE `teches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
