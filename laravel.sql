-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2017 at 11:45 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `user_id`, `active`, `body`, `created_at`, `updated_at`) VALUES
(1, 'fast5', 3, 1, 'this is movie', '2017-07-23 18:47:02', '2017-07-23 18:47:02'),
(4, 'thegirl 3456789p', 4, 1, 'thefirlalfkdsaklfjsakldfjskldafsad', '2017-07-23 19:19:52', '2017-07-23 19:42:31'),
(5, 'sdsv uuu', 4, 1, 'wedfwqfwe', '2017-07-23 19:32:08', '2017-07-23 19:42:42'),
(6, 'honeyke', 5, 1, 'Bigbang', '2017-07-23 20:17:18', '2017-07-25 02:55:11'),
(7, 'holy', 6, 1, 'holyholyholyholyholyholyholy', '2017-07-23 20:18:57', '2017-07-23 20:18:57'),
(10, 'car', 7, 1, 'sdfdsgdsf', '2017-07-23 22:49:36', '2017-07-23 22:50:00'),
(13, 'MonkeyD', 5, 1, 'Pirate kingPirate kingPirate kingPirate kingPirate kingPirate kingPirate kingPirate kingPirate kingPirate king', '2017-07-24 18:29:21', '2017-07-24 18:29:21'),
(14, 'JungleBook', 2, 1, 'king of the forest', '2017-07-24 19:11:50', '2017-07-24 19:11:50'),
(15, 'Batterfly', 5, 1, 'flower', '2017-07-24 19:14:50', '2017-07-24 19:14:50'),
(17, 'dsfsfsaf', 5, 1, 'sadfsadfs', '2017-07-24 23:15:21', '2017-07-24 23:15:21'),
(18, 'dfdf', 5, 1, 'dfs', '2017-07-24 23:16:00', '2017-07-24 23:16:00'),
(19, 'sdfs', 5, 1, 'sdfs', '2017-07-25 00:06:15', '2017-07-25 00:06:15'),
(20, '123456y', 5, 1, 'vbnm,.sdfghjm,.', '2017-07-25 00:44:55', '2017-07-25 00:44:55'),
(21, 'kingdomofwonder', 5, 1, 'cambodia', '2017-07-25 02:30:19', '2017-07-25 02:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mylogin`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(22, '2014_10_12_000000_create_users_table', 1),
(23, '2014_10_12_100000_create_password_resets_table', 1),
(24, '2017_07_19_184853_Create_table_Articles', 2),
(25, '2017_07_20_015017_Create_table_1', 2),
(26, '2017_07_20_030543_create_table_customer', 2),
(27, '2017_07_22_145757_create_table_login', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE `submit` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'cute', 'cute168@gmail.om', '$2y$10$PBxnRDk6XfEJvrdrf/R.A.RVGxM5KjBEaxP8ryYOXE.wWqa33eueC', NULL, '2017-07-23 07:24:34', '2017-07-23 07:24:34'),
(2, 'reach', 'reach@gmail.com', '$2y$10$2LV1URKXb1Sqiv44UaZEVOkHnTsNfAKWg137WBQoCLtOHOzBzWgJK', 'NahXWn05RT9Nzxcsf5liC7UxOQddBprAOjLd31K7E4lywIjf1feHdWxS3WiG', '2017-07-23 18:42:56', '2017-07-23 18:42:56'),
(3, 'kongkea`', 'kongkea@gmail.com', '$2y$10$C4SPlQ3/xjDttmrYaHN2UO9yskutVd3l20BDSnR8sulExiXgZER8S', '99sXzQoX3UCniyqJneH8wybpjM93I5ABlFTKACYS0fKT7UqFfqagyJLDuBzD', '2017-07-23 18:46:23', '2017-07-23 18:46:23'),
(4, 'kongkea', 'kongkea@yahoo.com', '$2y$10$N7dv9/usO8PDLyjjFe2qG.kVDUknqjyE.BFtM5vaWStel2/sBrwvy', 'cAU09Y21wDhxGgOysZQeCvCJhXpo2WSa7Aaqu6ijhJ4xQ48Olf0qyR8DAdPG', '2017-07-23 19:09:05', '2017-07-23 19:09:05'),
(5, 'name', 'name@gmail.com', '$2y$10$q9uNE15yBWz31aaXpKnca./3jOBlbnBv6yMpEFiYsc9ov6F2URe9y', '5YXKJsaiimETdzJZasScyoC8YYCYA6COuI05qVlWy16fr8sEU3wFKuLksAKY', '2017-07-23 20:16:36', '2017-07-23 20:16:36'),
(6, 'user', 'user@gmail.com', '$2y$10$sRTV42Fw8M9X6ODg9ggUme62Lfuc5nBpLsIkYnW2Bo2OCNRNWYV.S', 'waPaPJgmF1F56oF9lqCkVDUkzZc1SnxHdHYfc4Sm3tgi2TvrcrrwYAo5Q16X', '2017-07-23 20:18:39', '2017-07-23 20:18:39'),
(7, 'chanthy', 'chanthy@gmail.com', '$2y$10$Ovo20pSHfxaOFNnPmzbMV.Az6HevWEsoEAG3QOBnvxLfMFWJzcFMm', '3PImseyXbro8b2qRUBXXzIa0jTdiiTbyvqOtt4a7fV8z44U3uFMB0k8xKpmm', '2017-07-23 22:28:06', '2017-07-23 22:28:06'),
(8, 'car', 'car@gmail.com', '$2y$10$dYOlDwlRrMLXilXEhIbi3uN0Er7/CKUuUn221qRaBGO0ttaFOBy6m', '2o8YJwqpYNmCSxZbfvSBbXJ74IH8RhzqDllOQcBPlX30saZ3x7q0B9JvVeoh', '2017-07-23 23:50:49', '2017-07-23 23:50:49'),
(9, 'go', 'go@gmail.com', '$2y$10$y88HgUSRXN.256XZxjt87.6TkKHedcCwVJ1lmDu5FDE6MsEMw9Ubm', 'qM1in8MkUha5Udfkl9nGmdRDD74eZQgJonyEHqPeQQ8l46xgtmFPIn6jQ9Kd', '2017-07-24 00:11:54', '2017-07-24 00:11:54'),
(10, 'teacher', 'teacher@gmail.com', '$2y$10$4X/P8w.TnnHgj6FM/1foAuVXpdG2zNkBeHqVgYaXsgu8O9jlRs45e', NULL, '2017-07-24 01:02:07', '2017-07-24 01:02:07'),
(11, 'kimsour', 'kimsour@gmail.com', '$2y$10$.P.lQxSd1VIwt2ddtgngMeNamifAy449Cc5lW5MQHPQkR9OOfK4h6', 'vo1AnKD8ba8k1ZaPmU0alfsR7oLFWwi7bDrsQWNEOnhQmbg1o7rZGmd5K3Kw', '2017-07-24 21:47:28', '2017-07-24 21:47:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mylogin`
--
ALTER TABLE `login`
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
-- Indexes for table `submit`
--
ALTER TABLE `submit`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mylogin`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `submit`
--
ALTER TABLE `submit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
