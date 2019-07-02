-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 02, 2019 at 11:01 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alkhor`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_about`
--

DROP TABLE IF EXISTS `home_about`;
CREATE TABLE IF NOT EXISTS `home_about` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `about1_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about1_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about2_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about2_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_about`
--

INSERT INTO `home_about` (`id`, `about1_en`, `about1_ar`, `about2_en`, `about2_ar`, `status`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 'Tenetur in praesenti', 'Quia impedit aliqua', 'Aliquip temporibus d', 'Voluptatem distinct', 1, 1, '2019-06-30 03:50:25', '2019-06-30 04:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

DROP TABLE IF EXISTS `home_slider`;
CREATE TABLE IF NOT EXISTS `home_slider` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `slider_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `added_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `title`, `description`, `link`, `slider_image`, `status`, `added_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, NULL, NULL, 'slider/FYZ7itCSgJnRJ6rjPSJxlIiD9Pshxr7lc9TIEPu3.jpeg', 1, 1, '2019-06-30 02:47:15', '2019-06-30 02:47:15', NULL),
(2, NULL, NULL, NULL, 'slider/TV5jZgX9lIbtDoGSROBuSQjYw802oCN41MNjU4AB.jpeg', 1, 1, '2019-06-30 02:54:23', '2019-06-30 02:54:23', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_06_30_074855_create_table_home_slider', 2),
(5, '2019_06_30_090059_create_home_about', 3),
(6, '2019_07_02_092459_create_news', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `title_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `added_by` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_en`, `description_en`, `title_ar`, `description_ar`, `date`, `images`, `status`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 'Exercitationem volup', 'Qui et earum elit m', 'Dolor dolores dolore', 'Itaque laboriosam n', '04/07/2019', '[\"news\\/JBBhzIBbUlHml5pKoEDr6z9RoGajq5KvJwlp1MWJ.jpeg\",\"news\\/yvvMDiLvoPjGvp78FZcak6sh1iuJ231oJFy5KKYg.jpeg\"]', 1, 1, '2019-07-02 04:17:11', '2019-07-02 05:24:41'),
(2, 'Nulla voluptatem com', 'Dolore mollit optio', 'Hic explicabo Conse', 'Qui hic sunt perfere', '04/07/2019', '[\"news\\/xEJKQFjyoXRGh8GTyX0ssfIAfsEETtThh34AD96j.jpeg\",\"news\\/PdG9sot4X96TXBC6w9SAYNoWZ3fRONpqs9yhcLUX.jpeg\"]', 1, 1, '2019-07-02 05:25:26', '2019-07-02 05:25:26'),
(3, 'Qui quae impedit mi', 'Voluptate laborum N', 'Pariatur Necessitat', 'Nostrud explicabo D', '05/07/2019', '[\"news\\/V4XgWZVqWRNszFOlyCKlfubG0zTnZspoB0j1XVjU.jpeg\",\"news\\/j3AqxCj2mbqaPmBTkrRxN4RuXtOBEP7jFAbjfwIE.jpeg\"]', 1, 1, '2019-07-02 05:25:38', '2019-07-02 05:25:38'),
(4, 'Ea ea eveniet non n', 'Non est consequatur', 'Sunt in sequi optio', 'Totam velit quo culp', '14/07/2019', '[\"news\\/N6YkSuyNKaF8Rq6xdklm4A7sAuf33WDNxnFgZ2HO.jpeg\",\"news\\/UXYg2d2p0Rg8abPQFrjRCr0HAYisIlXzuXh04im9.jpeg\"]', 1, 1, '2019-07-02 05:25:53', '2019-07-02 05:25:53');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
