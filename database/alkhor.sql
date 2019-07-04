-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 04, 2019 at 12:22 PM
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
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_en` text COLLATE utf8mb4_unicode_ci,
  `email_en` text COLLATE utf8mb4_unicode_ci,
  `address_en` text COLLATE utf8mb4_unicode_ci,
  `title_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_ar` text COLLATE utf8mb4_unicode_ci,
  `email_ar` text COLLATE utf8mb4_unicode_ci,
  `address_ar` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `added_by` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title_en`, `phone_en`, `email_en`, `address_en`, `title_ar`, `phone_ar`, `email_ar`, `address_ar`, `status`, `added_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Id id aut non elige', '+1 (246) 234-4376', 'norodisyf@mailinator.com', 'Et nostrud commodo l', 'Commodi aliquip labo', '+1 (398) 239-5046', 'beqeqijapi@mailinator.com', 'Dolorem et minus ame', 1, 1, '2019-07-03 01:11:00', '2019-07-03 01:42:39', '2019-07-03 01:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `fixtures`
--

DROP TABLE IF EXISTS `fixtures`;
CREATE TABLE IF NOT EXISTS `fixtures` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stadium_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_team_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_team_logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `away_team_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `away_team_logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `score_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stadium_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_team_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `away_team_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `added_by` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fixtures`
--

INSERT INTO `fixtures` (`id`, `date`, `stadium_en`, `home_team_en`, `home_team_logo`, `away_team_en`, `away_team_logo`, `score_en`, `stadium_ar`, `home_team_ar`, `away_team_ar`, `score_ar`, `status`, `added_by`, `created_at`, `updated_at`) VALUES
(4, '2019-06-30 19:29:58', 'Al Khor Stadium', 'Qatar SC', 'fixtures/KQekDedIlBn3qbgR6aWWi0qGwAQ88LyOarGLQ1OM.png', 'Al Khor', 'fixtures/RCkftyCQBEHa35XUKffkCXNJDNkgtImp89BmUwNj.png', '0 : 1', 'Al Khor Stadium', 'Qatar SC', 'Al Khor', '0 : 1', 1, 1, '2019-07-04 04:59:27', '2019-07-04 04:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `football_page`
--

DROP TABLE IF EXISTS `football_page`;
CREATE TABLE IF NOT EXISTS `football_page` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `football_rewards_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `football_rewards_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `football_fanclub_en` text COLLATE utf8mb4_unicode_ci,
  `football_fanclub_ar` text COLLATE utf8mb4_unicode_ci,
  `football_fanclub_cover_image` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `added_by` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `football_page`
--

INSERT INTO `football_page` (`id`, `football_rewards_en`, `football_rewards_ar`, `football_fanclub_en`, `football_fanclub_ar`, `football_fanclub_cover_image`, `status`, `added_by`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\"><strong style=\"color: rgb(51, 51, 51); font-size: 17px;\">Join Now!</strong></p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Join QSL Football Rewards today and you can receive instant discounts from partners such as Fitness First, GNC, Guerlain Spa Alfardan, Al Jaber Watches and many more! Click here to join now!</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">You can choose to receive a virtual card instantly by email which you can print or show on your smart phone at partner outlets, or choose to receive a membership card which you can collect at the Qatar Stars League offices (more details will be sent by email). Simply show your card and valid ID at partner outlets to receive your discounts!</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\"><strong style=\"color: rgb(51, 51, 51); font-size: 17px;\">Earn Points</strong></p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Every time you purchase a ticket online at&nbsp;<a href=\"https://loyalty.qsl.com.qa/en-GB/ticketing/match-tickets.aspx\" style=\"transition-duration: 400ms; transition-timing-function: ease; transition-property: color; outline-style: none; outline-width: initial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 62, 158); font-weight: bold;\">tickets.qsl.com.qa&nbsp;</a>and attend the match of Al Khor team, you will earn 5000 tier points that will get you one step closer to bronze, silver and gold tiers and rewards such as Qmiles from Qatar Airways! The higher the tier, the greater the reward so the more your support your Qatar Stars League team, the more you will be rewarded!</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\"><strong style=\"color: rgb(51, 51, 51); font-size: 17px;\">Rewards and Membership Tiers</strong></p><p><img src=\"http://127.0.0.1:8010/site/images/football/image004.jpg\" class=\"lazy\" style=\"max-width: 100%; height: auto; border-width: 0px; border-style: initial; color: rgb(54, 53, 51); font-family: Oswald; font-size: 14px;\"><span style=\"color: rgb(54, 53, 51); font-family: Oswald; font-size: 14px;\"></span></p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">In summer 2016 you will be upgraded to bronze, silver and gold membership depending on the number of matches you have attended involving your Al Khor team during the Qatar Stars League season. Please see below for details on how many matches of your favourite team you need to buy tickets for online at&nbsp;<a href=\"https://loyalty.qsl.com.qa/en-GB/ticketing/match-tickets.aspx\" style=\"transition-duration: 400ms; transition-timing-function: ease; transition-property: color; outline-style: none; outline-width: initial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 62, 158); font-weight: bold;\">tickets.qsl.com.qa&nbsp;</a>and attend!&nbsp;</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\"><a href=\"https://loyalty.qsl.com.qa/en-GB/loyalty/football-rewards-partners.aspx\" style=\"transition-duration: 400ms; transition-timing-function: ease; transition-property: color; outline-style: none; outline-width: initial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 62, 158); font-weight: bold;\">Click here&nbsp;</a>to find out more about the benefits for each membership tier!&nbsp;</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\"><strong style=\"color: rgb(51, 51, 51); font-size: 17px;\">Standard:</strong></p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Entry membership level</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\"><strong style=\"color: rgb(51, 51, 51); font-size: 17px;\">Football Rewards Bronze Membership: Earn 15,000 Qmiles!</strong></p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Purchase tickets online and attend 6 to 11 of your favourite Stars League team’s matches to become a Football Rewards Bronze Member (30,000 to 59,999 favourite team attendance points)</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\"><strong style=\"color: rgb(51, 51, 51); font-size: 17px;\">Football Rewards Silver Membership: Earn 30,000 Qmiles!</strong></p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Purchase tickets online and attend 12 to 19 of your favourite Stars League team’s matches to become a Football Rewards Silver Member. (60,000 to 99,999 favourite team attendance points)</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\"><strong style=\"color: rgb(51, 51, 51); font-size: 17px;\">Football Rewards Gold Membership: Earn 60,000 Qmiles!</strong></p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Purchase tickets online and attend 20 or more of your favourite Stars League team’s matches to become a Football Rewards Gold Member. (100,000 favourite team attendance points).</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\"><strong style=\"color: rgb(51, 51, 51); font-size: 17px;\">Kids Club</strong></p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">To register your kids, you must first be a member of Football Rewards. Click here to register your own details. Once you have registered and are logged into your account, click ‘account overview’ and ‘add a new child’ to register your kids today!You can find out more about Kids Club&nbsp;<a href=\"https://loyalty.qsl.com.qa/en-GB/loyalty/kids-club.aspx\" style=\"transition-duration: 400ms; transition-timing-function: ease; transition-property: color; outline-style: none; outline-width: initial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 62, 158); font-weight: bold;\">here</a>!</p><p><em style=\"color: rgb(221, 0, 85); font-family: Oswald; font-size: 14px;\"><strong>The information about the&nbsp;<a href=\"http://www.qsl.com.qa/en/FootballRewards/index/\" style=\"transition-duration: 400ms; transition-timing-function: ease; transition-property: color; outline-style: none; outline-width: initial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(54, 53, 51);\">program</a>&nbsp;taken from QSL official website</strong></em><br></p>', '<p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\"><strong style=\"color: rgb(51, 51, 51); font-size: 17px;\">Join Now!</strong></p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Join QSL Football Rewards today and you can receive instant discounts from partners such as Fitness First, GNC, Guerlain Spa Alfardan, Al Jaber Watches and many more! Click here to join now!</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">You can choose to receive a virtual card instantly by email which you can print or show on your smart phone at partner outlets, or choose to receive a membership card which you can collect at the Qatar Stars League offices (more details will be sent by email). Simply show your card and valid ID at partner outlets to receive your discounts!</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\"><strong style=\"color: rgb(51, 51, 51); font-size: 17px;\">Earn Points</strong></p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Every time you purchase a ticket online at&nbsp;<a href=\"https://loyalty.qsl.com.qa/en-GB/ticketing/match-tickets.aspx\" style=\"transition-duration: 400ms; transition-timing-function: ease; transition-property: color; outline-style: none; outline-width: initial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 62, 158); font-weight: bold;\">tickets.qsl.com.qa&nbsp;</a>and attend the match of Al Khor team, you will earn 5000 tier points that will get you one step closer to bronze, silver and gold tiers and rewards such as Qmiles from Qatar Airways! The higher the tier, the greater the reward so the more your support your Qatar Stars League team, the more you will be rewarded!</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\"><strong style=\"color: rgb(51, 51, 51); font-size: 17px;\">Rewards and Membership Tiers</strong></p><p><img src=\"http://127.0.0.1:8010/site/images/football/image004.jpg\" class=\"lazy\" style=\"max-width: 100%; height: auto; border-width: 0px; border-style: initial; color: rgb(54, 53, 51); font-family: Oswald; font-size: 14px;\"><span style=\"color: rgb(54, 53, 51); font-family: Oswald; font-size: 14px;\"></span></p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">In summer 2016 you will be upgraded to bronze, silver and gold membership depending on the number of matches you have attended involving your Al Khor team during the Qatar Stars League season. Please see below for details on how many matches of your favourite team you need to buy tickets for online at&nbsp;<a href=\"https://loyalty.qsl.com.qa/en-GB/ticketing/match-tickets.aspx\" style=\"transition-duration: 400ms; transition-timing-function: ease; transition-property: color; outline-style: none; outline-width: initial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 62, 158); font-weight: bold;\">tickets.qsl.com.qa&nbsp;</a>and attend!&nbsp;</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\"><a href=\"https://loyalty.qsl.com.qa/en-GB/loyalty/football-rewards-partners.aspx\" style=\"transition-duration: 400ms; transition-timing-function: ease; transition-property: color; outline-style: none; outline-width: initial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 62, 158); font-weight: bold;\">Click here&nbsp;</a>to find out more about the benefits for each membership tier!&nbsp;</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\"><strong style=\"color: rgb(51, 51, 51); font-size: 17px;\">Standard:</strong></p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Entry membership level</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\"><strong style=\"color: rgb(51, 51, 51); font-size: 17px;\">Football Rewards Bronze Membership: Earn 15,000 Qmiles!</strong></p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Purchase tickets online and attend 6 to 11 of your favourite Stars League team’s matches to become a Football Rewards Bronze Member (30,000 to 59,999 favourite team attendance points)</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\"><strong style=\"color: rgb(51, 51, 51); font-size: 17px;\">Football Rewards Silver Membership: Earn 30,000 Qmiles!</strong></p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Purchase tickets online and attend 12 to 19 of your favourite Stars League team’s matches to become a Football Rewards Silver Member. (60,000 to 99,999 favourite team attendance points)</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\"><strong style=\"color: rgb(51, 51, 51); font-size: 17px;\">Football Rewards Gold Membership: Earn 60,000 Qmiles!</strong></p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Purchase tickets online and attend 20 or more of your favourite Stars League team’s matches to become a Football Rewards Gold Member. (100,000 favourite team attendance points).</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\"><strong style=\"color: rgb(51, 51, 51); font-size: 17px;\">Kids Club</strong></p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">To register your kids, you must first be a member of Football Rewards. Click here to register your own details. Once you have registered and are logged into your account, click ‘account overview’ and ‘add a new child’ to register your kids today!You can find out more about Kids Club&nbsp;<a href=\"https://loyalty.qsl.com.qa/en-GB/loyalty/kids-club.aspx\" style=\"transition-duration: 400ms; transition-timing-function: ease; transition-property: color; outline-style: none; outline-width: initial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(0, 62, 158); font-weight: bold;\">here</a>!</p><p><em style=\"color: rgb(221, 0, 85); font-family: Oswald; font-size: 14px;\"><strong>The information about the&nbsp;<a href=\"http://www.qsl.com.qa/en/FootballRewards/index/\" style=\"transition-duration: 400ms; transition-timing-function: ease; transition-property: color; outline-style: none; outline-width: initial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(54, 53, 51);\">program</a>&nbsp;taken from QSL official website</strong></em><br></p>', '<p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Since establishment Al Khor Sports Club started to gather fans of its football team. Numerous fans of different nations, ages and communities were joined the Club.</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Situated near Ras Laffan Industrial City it gathered fans who worked in gas and oil companies. Workers were happy to support their favourite local team expressing their emotions at stadium during the games after hard work. All the times Al Khor football team was extremely popular among youth. Nowadays students from local schools attend games of Al Khor. Sometimes even they visit stadium coming from Doha and as well as from other cities of Qatar.</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Every game Al Khor fan club is accompanied by traditional local Qatari band wearing jerseys of blue and white colors of the club singing inspirational songs and slogans for the team support.</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">It is worth mentioning also honorable fans of the club former stars who started as players, and now they attend each game supporting Al Khor team being example and basics of Al Khor fans movement.</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Nowadays our fan club is opened for everyone and can offer to spend nice time and atmosphere during the games. We are open for partnership of different kinds to promote football at local and State levels!</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">If You are interested and want visit Al Khor football games personally or with friends kindly apply to our marketing office using email: marketingalksc@gmail.com</p>', '<p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Since establishment Al Khor Sports Club started to gather fans of its football team. Numerous fans of different nations, ages and communities were joined the Club.</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Situated near Ras Laffan Industrial City it gathered fans who worked in gas and oil companies. Workers were happy to support their favourite local team expressing their emotions at stadium during the games after hard work. All the times Al Khor football team was extremely popular among youth. Nowadays students from local schools attend games of Al Khor. Sometimes even they visit stadium coming from Doha and as well as from other cities of Qatar.</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Every game Al Khor fan club is accompanied by traditional local Qatari band wearing jerseys of blue and white colors of the club singing inspirational songs and slogans for the team support.</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">It is worth mentioning also honorable fans of the club former stars who started as players, and now they attend each game supporting Al Khor team being example and basics of Al Khor fans movement.</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">Nowadays our fan club is opened for everyone and can offer to spend nice time and atmosphere during the games. We are open for partnership of different kinds to promote football at local and State levels!</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-family: Lato, sans-serif; color: rgb(102, 102, 102); line-height: 22px; text-align: justify;\">If You are interested and want visit Al Khor football games personally or with friends kindly apply to our marketing office using email: marketingalksc@gmail.com</p>', 'football/Bami2XObpZuFSnq2iFqMt62P6eKowFynsbs4JNhV.jpeg', 1, 1, '2019-07-04 01:37:34', '2019-07-04 05:15:11');

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_06_30_074855_create_table_home_slider', 2),
(5, '2019_06_30_090059_create_home_about', 3),
(6, '2019_07_02_092459_create_news', 4),
(7, '2019_07_03_062225_create_contacts', 5),
(8, '2019_07_04_064440_create_football_page', 6),
(9, '2019_07_04_083849_create_fixtures', 7);

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Jebin Jaison', 'jebinzeekoi@gmail.com', NULL, '$2y$10$Za0yQB24zvVHjIlhp42hEuYu7c3RZF3zWvwlRZUj6ZIst3cgHvCni', NULL, '2019-07-04 02:36:23', '2019-07-04 02:36:23', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
