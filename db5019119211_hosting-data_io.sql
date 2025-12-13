-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: db5019119211.hosting-data.io
-- Generation Time: Dec 12, 2025 at 06:54 PM
-- Server version: 10.11.14-MariaDB-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs15028529`
--
CREATE DATABASE IF NOT EXISTS `dbs15028529` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci;
USE `dbs15028529`;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands_translation`
--

CREATE TABLE `brands_translation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `slug`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'skin-lightener', NULL, '2020-11-02 11:24:37', '2025-10-25 03:01:30'),
(12, 'skin-care', 3, '2020-11-02 11:28:27', '2020-11-02 11:28:27'),
(13, 'food-supliments', 3, '2020-11-02 11:28:58', '2020-11-02 11:28:58'),
(14, 't-shirts', 4, '2020-11-02 11:29:20', '2020-11-02 11:29:20'),
(15, 'shirts', 4, '2020-11-02 11:29:30', '2020-11-02 11:29:30'),
(16, 'jeans', 4, '2020-11-02 11:29:42', '2020-11-02 11:29:42'),
(17, 'shoes', 4, '2020-11-02 11:29:58', '2020-11-02 11:29:58'),
(18, 'women\'s-bags', 5, '2020-11-02 11:31:04', '2020-11-02 11:31:04'),
(19, 'women\'s-shoes', 5, '2020-11-02 11:31:18', '2020-11-02 11:31:18'),
(20, 'kurti', 5, '2020-11-02 11:31:56', '2020-11-02 11:31:56'),
(21, 'fitness-accessories', 6, '2020-11-02 11:32:35', '2020-11-02 11:32:35'),
(22, 'team-sports', 6, '2020-11-02 11:32:48', '2020-11-02 11:32:48'),
(23, 'treadmills', 6, '2020-11-02 11:33:27', '2020-11-02 11:33:27'),
(25, 'motherboard', 2, '2021-03-08 02:57:19', '2021-03-08 02:57:19'),
(26, 'adobe-photoshop', 24, '2021-03-08 02:57:33', '2021-03-08 02:57:33'),
(31, 'derma-care', NULL, '2025-10-26 01:25:20', '2025-10-26 01:25:20'),
(34, 'hair-care', NULL, '2025-10-26 15:50:45', '2025-10-26 15:50:45'),
(35, 'eyelash-enchancer', NULL, '2025-10-26 16:33:07', '2025-10-26 16:33:07'),
(36, 'vitiligo-treatment', NULL, '2025-11-02 18:36:06', '2025-11-02 18:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `category_translation`
--

CREATE TABLE `category_translation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_translation`
--

INSERT INTO `category_translation` (`id`, `category_id`, `locale`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'English', 'Skin Lightener', NULL, '2020-11-02 11:24:37', '2025-10-25 03:01:30'),
(12, 12, 'English', 'Skin care', NULL, '2020-11-02 11:28:27', '2020-11-02 11:28:27'),
(13, 13, 'English', 'Food Supliments', NULL, '2020-11-02 11:28:58', '2020-11-02 11:28:58'),
(14, 14, 'English', 'T-Shirts', NULL, '2020-11-02 11:29:20', '2020-11-02 11:29:20'),
(15, 15, 'English', 'Shirts', NULL, '2020-11-02 11:29:30', '2020-11-02 11:29:30'),
(16, 16, 'English', 'Jeans', NULL, '2020-11-02 11:29:42', '2020-11-02 11:29:42'),
(17, 17, 'English', 'Shoes', NULL, '2020-11-02 11:29:58', '2020-11-02 11:29:58'),
(18, 18, 'English', 'Women\'s Bags', NULL, '2020-11-02 11:31:04', '2020-11-02 11:31:04'),
(19, 19, 'English', 'Women\'s Shoes', NULL, '2020-11-02 11:31:18', '2020-11-02 11:31:18'),
(20, 20, 'English', 'Kurti', NULL, '2020-11-02 11:31:56', '2020-11-02 11:31:56'),
(21, 21, 'English', 'Fitness Accessories', NULL, '2020-11-02 11:32:35', '2020-11-02 11:32:35'),
(22, 22, 'English', 'Team Sports', NULL, '2020-11-02 11:32:48', '2020-11-02 11:32:48'),
(23, 23, 'English', 'Treadmills', NULL, '2020-11-02 11:33:27', '2020-11-02 11:33:27'),
(25, 25, 'English', 'Motherboard', NULL, '2021-03-08 02:57:19', '2021-03-08 02:57:19'),
(26, 26, 'English', 'Adobe Photoshop', NULL, '2021-03-08 02:57:33', '2021-03-08 02:57:33'),
(31, 31, 'English', 'Derma care', NULL, '2025-10-26 01:25:20', '2025-10-26 01:25:20'),
(34, 34, 'English', 'Hair Care', NULL, '2025-10-26 15:50:45', '2025-10-26 15:50:45'),
(35, 35, 'English', 'EyeLash Enchancer', NULL, '2025-10-26 16:33:07', '2025-10-26 16:33:07'),
(36, 36, 'English', 'Vitiligo treatment', 'Vitiligo Treatment', '2025-11-02 18:36:06', '2025-11-02 18:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) NOT NULL,
  `value` decimal(10,2) UNSIGNED DEFAULT NULL,
  `is_percent` tinyint(1) NOT NULL,
  `free_shipping` tinyint(1) NOT NULL,
  `minimum_spend` decimal(10,2) UNSIGNED DEFAULT NULL,
  `maximum_spend` decimal(10,2) UNSIGNED DEFAULT NULL,
  `usage_limit_per_coupon` int(10) UNSIGNED DEFAULT NULL,
  `usage_limit_per_customer` int(10) UNSIGNED DEFAULT NULL,
  `used` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_categories`
--

CREATE TABLE `coupon_categories` (
  `coupon_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `exclude` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_products`
--

CREATE TABLE `coupon_products` (
  `coupon_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `exclude` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_translations`
--

CREATE TABLE `coupon_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(3) NOT NULL,
  `base_currency` tinyint(4) NOT NULL,
  `exchange_rate` decimal(10,6) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `name`, `base_currency`, `exchange_rate`, `status`, `created_at`, `updated_at`) VALUES
(4, 'USD', 1, '1.000000', 1, NULL, '2025-12-06 03:47:54'),
(5, 'EUR', 0, '0.850000', 1, NULL, NULL),
(6, 'INR', 0, '72.450000', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_addresses`
--

CREATE TABLE `customer_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(191) NOT NULL,
  `address` text NOT NULL,
  `post_code` varchar(50) NOT NULL,
  `is_default` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_addresses`
--

INSERT INTO `customer_addresses` (`id`, `customer_id`, `name`, `country`, `state`, `city`, `address`, `post_code`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 2, 'alan asdas', 'IN', 'Delhi', 'test', 'sdfsd\r\nfd', '23285', 0, '2025-10-07 11:42:42', '2025-10-07 11:42:42');

-- --------------------------------------------------------

--
-- Table structure for table `database_backups`
--

CREATE TABLE `database_backups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(191) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `subject` text NOT NULL,
  `body` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `name`, `subject`, `body`, `created_at`, `updated_at`) VALUES
(1, 'welcome_email', 'Welcome to Ultra Store', '<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Welcome to Ultra Store</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your account is now ready to use. You can now login to your portal using your email and password.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>', NULL, NULL),
(2, 'order_placed', 'Your Order Placed Successfully', '<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order Placed Successfully</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has been placed sucessfully. Your order will be shipped within next 3 business days.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>', NULL, NULL),
(3, 'order_processing', 'Your Order Marked as Processing', '<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order has been processed</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has been processed.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>', NULL, NULL),
(4, 'order_completed', 'Your Order Marked as Completed', '<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order has Completed</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has completed.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>', NULL, NULL),
(5, 'order_canceled', '	Your Order Marked as Canceled', '<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order has been canceled</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has been canceled.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>', NULL, NULL),
(6, 'order_on_hold', 'Your Order Marked as On Hold', '<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order Marked as On Hold</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has been hold.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>', NULL, NULL),
(7, 'order_refunded', 'Money Refunded', '<p>Your Order Money has been refunded.</p>', NULL, NULL),
(8, 'welcome_email', 'Welcome to Ultra Store', '<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Welcome to Ultra Store</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your account is now ready to use. You can now login to your portal using your email and password.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>', NULL, NULL),
(9, 'order_placed', 'Your Order Placed Successfully', '<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order Placed Successfully</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has been placed sucessfully. Your order will be shipped within next 3 business days.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>', NULL, NULL),
(10, 'order_processing', 'Your Order Marked as Processing', '<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order has been processed</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has been processed.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>', NULL, NULL),
(11, 'order_completed', 'Your Order Marked as Completed', '<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order has Completed</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has completed.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>', NULL, NULL),
(12, 'order_canceled', '	Your Order Marked as Canceled', '<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order has been canceled</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has been canceled.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>', NULL, NULL),
(13, 'order_on_hold', 'Your Order Marked as On Hold', '<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order Marked as On Hold</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has been hold.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>', NULL, NULL),
(14, 'order_refunded', 'Money Refunded', '<p>Your Order Money has been refunded.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `entity_files`
--

CREATE TABLE `entity_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_id` bigint(20) UNSIGNED NOT NULL,
  `entity_type` varchar(191) NOT NULL,
  `entity_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entity_files`
--

INSERT INTO `entity_files` (`id`, `media_id`, `entity_type`, `entity_id`, `name`, `created_at`, `updated_at`) VALUES
(81, 27, 'App\\Entity\\Product\\Product', 14, 'product_image', '2025-12-05 03:48:45', '2025-12-05 03:48:45'),
(82, 26, 'App\\Entity\\Product\\Product', 12, 'product_image', '2025-12-05 03:49:21', '2025-12-05 03:49:21'),
(83, 28, 'App\\Entity\\Product\\Product', 11, 'product_image', '2025-12-05 03:52:22', '2025-12-05 03:52:22'),
(84, 29, 'App\\Entity\\Product\\Product', 5, 'product_image', '2025-12-05 04:00:05', '2025-12-05 04:00:05'),
(85, 8, 'App\\Entity\\Product\\Product', 5, 'gallery_images', '2025-12-05 04:00:05', '2025-12-05 04:00:05'),
(86, 29, 'App\\Entity\\Product\\Product', 7, 'product_image', '2025-12-06 01:42:31', '2025-12-06 01:42:31'),
(89, 30, 'App\\Entity\\Product\\Product', 13, 'product_image', '2025-12-06 02:11:10', '2025-12-06 02:11:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(191) NOT NULL,
  `file_path` varchar(191) NOT NULL,
  `file_type` varchar(191) NOT NULL,
  `file_size` varchar(191) NOT NULL,
  `file_extension` varchar(191) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `filename`, `file_path`, `file_type`, `file_size`, `file_extension`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'pjcnQ7QZiZTF9ififzbY4mmVeDxJ8Va6UILiYAia.png', 'media/20JSNk9okjmSo4TDmKwy7QNrMssLuWfWZkyQZmL9.png', 'image/png', '23138', 'png', 2, '2025-10-05 20:54:39', '2025-10-05 20:54:39'),
(2, 'rfDerEDO0xfCpgIcGvoNImpD6M7z2PwESrY950JW.png', 'media/ARYuUCsjdYSQmARrJM344PYvQbAYPF7ORzQEv0uI.png', 'image/png', '15088', 'png', 2, '2025-10-05 20:54:39', '2025-10-05 20:54:39'),
(3, 'plfJbaCUsRdSnWt9CDZdzWK7gkerTImrYta9VVqY.png', 'media/kb2ANOHse6nVS1YevDw51k7gtZvzhLFA8QlV6eZt.png', 'image/png', '23721', 'png', 2, '2025-10-05 20:54:40', '2025-10-05 20:54:40'),
(4, 'jDcs5LhWWyrxurqvB3eL319TFxg8l0kMbNAQNnVU.png', 'media/gfkl0Sl5ecowHARd7kAT701jEGviiSmSCG33M26n.png', 'image/png', '24275', 'png', 2, '2025-10-05 20:54:40', '2025-10-05 20:54:40'),
(5, 'aUkVOCThQiXSngxH6BfwK6hwC8Uxm5IH5W9v07Gt.png', 'media/6uOg8bkbD9L0uBt6K43LpW6pMK0lp0XnIUjvjgGu.png', 'image/png', '13709', 'png', 2, '2025-10-05 20:54:40', '2025-10-05 20:54:40'),
(6, 'XqM12Tl2cet7rCUbg8bCzhYd6Mot6a1fOJQwnCmH.png', 'media/jrNEVmP92sAnUusvaHFEpNkXakk2aWExE8cUFAbU.png', 'image/png', '13908', 'png', 2, '2025-10-05 20:54:41', '2025-10-05 20:54:41'),
(7, 'CQtMf40jF2ubTOPOnTIZZGDSPLtqiSPjk9f2EE6q.png', 'media/NQjvKMZ7QXRcUE4fJk6TARvLASuIM3eP9QlALlMm.png', 'image/png', '15702', 'png', 2, '2025-10-05 20:54:41', '2025-10-05 20:54:41'),
(8, 'Benoquin.jpeg', 'media/R7mnsdDdg6IZv5A5UUhKCS0tB3aoN9xlJ3njeXhR.jpg', 'image/jpeg', '87371', 'jpg', 2, '2025-10-25 03:17:32', '2025-10-25 03:17:32'),
(9, 'Monobenzone-40-cream.jpeg', 'media/TigxH87xIMkN7dmaCrXKjrAudfrvVgvrmqvkefZ7.jpg', 'image/jpeg', '67167', 'jpg', 2, '2025-11-02 18:55:33', '2025-11-02 18:55:33'),
(10, 'Monobenzone-60-cream.jpeg', 'media/dShWO9vmhFSQjogBrYUec9SCFXnqfr6Dya5KCIfx.jpg', 'image/jpeg', '82353', 'jpg', 2, '2025-11-02 18:57:44', '2025-11-02 18:57:44'),
(11, 'benoquin.jpg', 'media/vHLRsFWTNm2v1b2clpEEdAo0snxjLfXOAB7DKza3.jpg', 'image/jpeg', '68170', 'jpg', 2, '2025-11-02 19:41:02', '2025-11-02 19:41:02'),
(12, 'benoquin-removebg-preview.jpg', 'media/Q5qZ5cuiKTxkcGvAiUJfGgW6cSav1zgFQ8lSRxWZ.jpg', 'image/jpeg', '71126', 'jpg', 2, '2025-11-02 19:50:13', '2025-11-02 19:50:13'),
(13, 'Monobenzone-40-cream-Photoroom (1).png', 'media/q3sFmJM0Ucqe3taozWbrZYtDMBbrWdxWiCrxS7pQ.png', 'image/png', '566420', 'png', 2, '2025-11-02 19:56:03', '2025-11-02 19:56:03'),
(14, 'Monobenzone-60-cream-Photoroom.png', 'media/blBRzZ0gz3azD4xP9FxSgXth4vEwhEm6QFCYHLdM.png', 'image/png', '574708', 'png', 2, '2025-11-02 19:57:39', '2025-11-02 19:57:39'),
(15, 'Monobenzone-60-cream-orginal.png', 'media/VIujMX1Uu4Z2clYkVSESpRAUxg7jaa2P54bXcqfV.png', 'image/png', '574708', 'png', 2, '2025-11-02 19:58:19', '2025-11-02 19:58:19'),
(16, 'Benoquin-low-quality.png', 'media/ZOm9FwPHZ9moIYFCUzjD07DM0lPlR4F0jnDE7oa2.png', 'image/png', '133183', 'png', 2, '2025-11-02 20:00:45', '2025-11-02 20:00:45'),
(17, 'Benoquin-good-quality-cream.png', 'media/lHu4JpHolMmRp19sBvSqG8F4kRc33MbvAlEfpDAj.png', 'image/png', '776599', 'png', 2, '2025-11-02 20:02:57', '2025-11-02 20:02:57'),
(18, 'monobenzone -20-cream.png', 'media/JG2BDZOs75N1xHkU2mIt722ZbnMQgDOvi7lhmHeQ.png', 'image/png', '995885', 'png', 2, '2025-11-02 20:12:43', '2025-11-02 20:12:43'),
(19, 'Monobenzone-Cream.png', 'media/12L568BpQ9mhkK4Nk2A11Tmdy6oQXtHoU8jhlfcR.png', 'image/png', '834108', 'png', 2, '2025-11-02 20:26:40', '2025-11-02 20:26:40'),
(20, 'Benoqun-cream.png', 'media/GgObO3BX8YFv4jgi49jZcgL9ZCdsdvZxwFrvOyai.png', 'image/png', '834108', 'png', 2, '2025-11-02 20:31:20', '2025-11-02 20:31:20'),
(21, 'Monobenzone-40-cream.png', 'media/VEHb8nJDpIQ1vuB7YrP1pykUTeCFtOd42gUMiWP7.png', 'image/png', '733978', 'png', 2, '2025-11-03 02:43:46', '2025-11-03 02:43:46'),
(22, 'Monobenozone-benoquin-60-cream.png', 'media/G0gXkhomb1PomFYu7xgwZaQnXvrNk6q2QeTkygTa.png', 'image/png', '724194', 'png', 2, '2025-11-03 02:59:21', '2025-11-03 02:59:21'),
(23, 'Monobenzone-60-cream.png', 'media/pSzmRIOoAp5dYKDbfBlDGnfkgbft7ZULDGOm0kpy.png', 'image/png', '724194', 'png', 1, '2025-12-03 04:32:23', '2025-12-03 04:32:23'),
(24, 'Monobenzone-60.png', 'media/0F4etwMifq9apf0HIvGh2C6b9NsvrXOUO37WQXSw.png', 'image/png', '1619713', 'png', 1, '2025-12-05 03:29:13', '2025-12-05 03:29:13'),
(25, 'Monobenzone-60-cream-vitiligo.png', 'media/Xdl9nMya7NE8HMw8Gblyd0PSLpJlzkP1sgW6Xs6V.png', 'image/png', '925918', 'png', 1, '2025-12-05 03:37:23', '2025-12-05 03:37:23'),
(26, 'Monobenzone-60-cream-vitiligo.png', 'media/RaAlz0DIwtnVvfN9n69gOFCXkIDd1kUWUpf2Oilb.png', 'image/png', '925918', 'png', 1, '2025-12-05 03:38:18', '2025-12-05 03:38:18'),
(27, 'Monobenzone-80-cream-vitiligo.png', 'media/i5jInAASOH38UI7OPAzYaAtSpmtb3tdihAqzfxI4.png', 'image/png', '982162', 'png', 1, '2025-12-05 03:48:33', '2025-12-05 03:48:33'),
(28, 'Monobenzone-40-cream-vitiligo.png', 'media/FEd0vnXocaKvXcLdluKyEYsB862Zow8l7MC4Urdh.png', 'image/png', '1018627', 'png', 1, '2025-12-05 03:52:16', '2025-12-05 03:52:16'),
(29, 'Benoquik Cream.png', 'media/sY7I8pVT1ybJLflAxgNTSC1OkxzOQiIaR3HPsXrU.png', 'image/png', '1254916', 'png', 1, '2025-12-05 03:59:51', '2025-12-05 03:59:51'),
(30, '41l7U1.jpg', 'media/oXUhBhDZkfwoBHUetc88Tg6hMA6KRFiDpaBfRFEG.jpg', 'image/jpeg', '16129', 'jpg', 1, '2025-12-06 02:09:16', '2025-12-06 02:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `meta_data`
--

CREATE TABLE `meta_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entity_type` varchar(191) NOT NULL,
  `entity_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meta_data`
--

INSERT INTO `meta_data` (`id`, `entity_type`, `entity_id`, `created_at`, `updated_at`) VALUES
(5, 'App\\Entity\\Page\\Page', 1, '2025-10-16 16:50:36', '2025-10-16 16:50:36'),
(6, 'App\\Entity\\Page\\Page', 5, '2025-10-16 16:51:25', '2025-10-16 16:51:25'),
(7, 'App\\Entity\\Product\\Product', 5, '2025-10-25 03:25:47', '2025-10-25 03:25:47'),
(9, 'App\\Entity\\Product\\Product', 7, '2025-10-31 02:52:00', '2025-10-31 02:52:00'),
(13, 'App\\Entity\\Product\\Product', 11, '2025-11-02 18:55:43', '2025-11-02 18:55:43'),
(14, 'App\\Entity\\Product\\Product', 12, '2025-11-02 18:58:21', '2025-11-02 18:58:21'),
(15, 'App\\Entity\\Product\\Product', 13, '2025-11-02 19:41:09', '2025-11-02 19:41:09'),
(16, 'App\\Entity\\Product\\Product', 14, '2025-11-04 04:46:55', '2025-11-04 04:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `meta_data_translations`
--

CREATE TABLE `meta_data_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_data_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meta_data_translations`
--

INSERT INTO `meta_data_translations` (`id`, `meta_data_id`, `locale`, `meta_title`, `meta_keywords`, `meta_description`) VALUES
(5, 5, 'English', NULL, NULL, NULL),
(6, 6, 'English', NULL, NULL, NULL),
(7, 7, 'English', NULL, NULL, NULL),
(9, 9, 'English', NULL, NULL, NULL),
(13, 13, 'English', NULL, NULL, NULL),
(14, 14, 'English', NULL, NULL, NULL),
(15, 15, 'English', NULL, NULL, NULL),
(16, 16, 'English', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_16_140051_create_nikolag_customers_table', 1),
(4, '2017_06_16_140942_create_nikolag_customer_user_table', 1),
(5, '2017_06_16_140943_create_nikolag_transactions_table', 1),
(6, '2018_02_07_140944_create_nikolag_taxes_table', 1),
(7, '2018_02_07_140945_create_nikolag_discounts_table', 1),
(8, '2018_02_07_140946_create_nikolag_deductible_table', 1),
(9, '2018_02_07_140947_create_nikolag_products_table', 1),
(10, '2018_02_07_140948_create_nikolag_orders_table', 1),
(11, '2018_02_07_140949_create_nikolag_product_order_table', 1),
(12, '2018_11_12_152015_create_email_templates_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_09_01_080940_create_settings_table', 1),
(15, '2020_07_02_145857_create_database_backups_table', 1),
(16, '2020_07_06_142817_create_roles_table', 1),
(17, '2020_07_06_143240_create_permissions_table', 1),
(18, '2020_07_25_061549_create_currency_table', 1),
(19, '2020_07_29_095329_create_tax_classes_table', 1),
(20, '2020_07_29_095340_create_tax_classes_translation_table', 1),
(21, '2020_07_29_095348_create_tax_rates_table', 1),
(22, '2020_07_29_095357_create_tax_rates_translation_table', 1),
(23, '2020_07_30_074942_create_media_table', 1),
(24, '2020_07_30_152834_create_tags_table', 1),
(25, '2020_07_30_153031_create_tags_translation_table', 1),
(26, '2020_07_31_135138_create_brands_table', 1),
(27, '2020_07_31_140257_create_brands_translation_table', 1),
(28, '2020_07_31_145819_create_entity_files_table', 1),
(29, '2020_08_11_135105_create_category_table', 1),
(30, '2020_08_11_135531_create_category_translation_table', 1),
(31, '2020_08_23_160650_create_products_table', 1),
(32, '2020_08_23_161219_create_product_translations_table', 1),
(33, '2020_08_23_163548_create_product_categories_table', 1),
(34, '2020_08_23_163600_create_product_tags_table', 1),
(35, '2020_08_24_152430_create_product_variations_table', 1),
(36, '2020_08_24_152831_create_product_variation_items_table', 1),
(37, '2020_08_24_171314_create_product_variation_prices_table', 1),
(38, '2020_08_24_171315_create_coupons_table', 1),
(39, '2020_08_24_171316_create_coupon_translations_table', 1),
(40, '2020_08_24_171317_create_coupon_products_table', 1),
(41, '2020_08_24_171318_create_coupon_categories_table', 1),
(42, '2020_08_24_171319_create_meta_data_table', 1),
(43, '2020_08_24_171320_create_meta_data_translations_table', 1),
(44, '2020_09_02_145504_create_pages_table', 1),
(45, '2020_09_02_145952_create_page_translations_table', 1),
(46, '2020_09_04_084255_create_navigations_table', 1),
(47, '2020_09_04_084515_create_navigation_items_table', 1),
(48, '2020_09_04_084719_create_navigation_item_translations_table', 1),
(49, '2020_11_08_153213_create_customer_addresses_table', 1),
(50, '2020_11_11_172141_create_orders_table', 1),
(51, '2020_11_11_172303_create_order_products_table', 1),
(52, '2020_11_11_172521_create_order_taxes_table', 1),
(53, '2020_11_13_142034_create_transactions_table', 1),
(54, '2021_01_22_171533_create_wish_lists_table', 1),
(55, '2021_01_24_064834_create_product_comments_table', 1),
(56, '2021_01_27_104627_create_product_reviews_table', 1),
(57, '2021_03_22_071324_create_setting_translations', 1),
(58, '2021_04_26_071834_add_city_to_customer_addresses_table', 1),
(59, '2021_04_26_074440_change_exchange_rate_length_to_currency_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `navigations`
--

CREATE TABLE `navigations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigations`
--

INSERT INTO `navigations` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Primary Menu', 1, '2020-11-16 07:30:14', '2021-03-17 01:54:42'),
(2, 'Category Menu', 1, '2021-03-17 01:55:09', '2021-03-17 01:55:09'),
(3, 'Footer Menu 1', 1, '2021-03-17 07:47:10', '2021-03-17 07:47:10'),
(4, 'Footer Menu 2', 1, '2021-03-17 08:34:08', '2021-03-17 08:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `navigation_items`
--

CREATE TABLE `navigation_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `navigation_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(20) NOT NULL,
  `page_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `url` varchar(191) DEFAULT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `target` varchar(191) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `position` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `css_class` varchar(191) DEFAULT NULL,
  `css_id` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigation_items`
--

INSERT INTO `navigation_items` (`id`, `navigation_id`, `type`, `page_id`, `category_id`, `url`, `icon`, `target`, `parent_id`, `position`, `status`, `css_class`, `css_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'dynamic_url', NULL, NULL, '/', NULL, '_self', NULL, 1, 1, NULL, NULL, '2021-03-15 10:58:36', '2025-10-16 16:38:26'),
(2, 1, 'dynamic_url', NULL, NULL, '/shop', NULL, '_self', NULL, 2, 1, NULL, NULL, '2021-03-15 10:59:23', '2025-10-16 16:38:35'),
(5, 1, 'page', 2, NULL, NULL, NULL, '_self', NULL, 3, 1, NULL, NULL, '2021-03-15 11:00:13', '2025-10-16 16:38:55'),
(9, 2, 'category', NULL, 1, NULL, NULL, '_self', NULL, 1, 1, NULL, NULL, '2021-03-17 04:34:06', '2021-03-17 04:38:56'),
(30, 3, 'page', 1, NULL, NULL, NULL, '_self', NULL, 1, 1, NULL, NULL, '2021-03-17 07:47:37', '2021-03-17 07:56:21'),
(33, 3, 'page', 2, NULL, NULL, NULL, '_self', NULL, 3, 1, NULL, NULL, '2021-03-17 07:53:24', '2025-10-16 16:54:10'),
(35, 4, 'page', 7, NULL, NULL, NULL, '_self', NULL, 9999, 1, NULL, NULL, '2021-03-17 08:36:27', '2021-03-17 08:36:27'),
(36, 4, 'page', 8, NULL, NULL, NULL, '_self', NULL, 9999, 1, NULL, NULL, '2021-03-17 08:36:46', '2021-03-17 08:36:46'),
(37, 4, 'page', 9, NULL, NULL, NULL, '_self', NULL, 9999, 1, NULL, NULL, '2021-03-17 08:37:00', '2021-03-17 08:37:00'),
(38, 4, 'page', 11, NULL, NULL, NULL, '_self', NULL, 9999, 1, NULL, NULL, '2021-03-17 08:37:53', '2021-03-17 08:37:53'),
(42, 3, 'dynamic_url', NULL, NULL, '/shop', NULL, '_self', NULL, 2, 1, NULL, NULL, '2025-10-16 16:54:06', '2025-10-16 16:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `navigation_item_translations`
--

CREATE TABLE `navigation_item_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `navigation_item_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigation_item_translations`
--

INSERT INTO `navigation_item_translations` (`id`, `navigation_item_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'English', 'Home', '2021-03-15 10:58:36', '2021-03-15 10:58:36'),
(2, 2, 'English', 'Product', '2021-03-15 10:59:23', '2025-10-13 18:57:51'),
(5, 5, 'English', 'Contact Us', '2021-03-15 11:00:13', '2021-03-15 11:00:13'),
(9, 9, 'English', 'Electronic Devices', '2021-03-17 04:34:06', '2021-03-17 04:34:06'),
(30, 30, 'English', 'About Us', '2021-03-17 07:47:37', '2021-03-17 07:47:37'),
(33, 33, 'English', 'Contact Us', '2021-03-17 07:53:24', '2021-03-17 07:53:24'),
(35, 35, 'English', 'Payment Methods', '2021-03-17 08:36:27', '2021-03-17 08:36:27'),
(36, 36, 'English', 'Money Back', '2021-03-17 08:36:46', '2021-03-17 08:36:46'),
(37, 37, 'English', 'Return', '2021-03-17 08:37:00', '2021-03-17 08:37:00'),
(38, 38, 'English', 'Shipping', '2021-03-17 08:37:53', '2021-03-17 08:37:53'),
(42, 42, 'English', 'Product', '2025-10-16 16:54:06', '2025-10-16 16:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `nikolag_customers`
--

CREATE TABLE `nikolag_customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_service_id` varchar(191) DEFAULT NULL,
  `payment_service_type` varchar(25) NOT NULL,
  `first_name` varchar(191) DEFAULT NULL,
  `last_name` varchar(191) DEFAULT NULL,
  `company_name` varchar(191) DEFAULT NULL,
  `nickname` varchar(191) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `note` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nikolag_customer_user`
--

CREATE TABLE `nikolag_customer_user` (
  `owner_id` varchar(191) NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nikolag_deductibles`
--

CREATE TABLE `nikolag_deductibles` (
  `deductible_type` varchar(191) NOT NULL,
  `deductible_id` bigint(20) UNSIGNED NOT NULL,
  `featurable_type` varchar(191) NOT NULL,
  `featurable_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nikolag_discounts`
--

CREATE TABLE `nikolag_discounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `percentage` double(8,2) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `reference_id` varchar(25) DEFAULT NULL,
  `reference_type` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nikolag_orders`
--

CREATE TABLE `nikolag_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_service_id` varchar(191) DEFAULT NULL,
  `payment_service_type` varchar(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nikolag_products`
--

CREATE TABLE `nikolag_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `variation_name` varchar(100) DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `reference_type` varchar(191) DEFAULT NULL,
  `reference_id` varchar(25) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nikolag_product_order`
--

CREATE TABLE `nikolag_product_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `order_id` varchar(25) NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nikolag_taxes`
--

CREATE TABLE `nikolag_taxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `type` varchar(191) NOT NULL,
  `percentage` double(8,2) NOT NULL,
  `reference_id` varchar(25) DEFAULT NULL,
  `reference_type` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nikolag_transactions`
--

CREATE TABLE `nikolag_transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(50) NOT NULL,
  `amount` varchar(191) NOT NULL,
  `currency` varchar(191) NOT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `payment_service_id` varchar(191) DEFAULT NULL,
  `payment_service_type` varchar(25) NOT NULL,
  `merchant_id` varchar(191) DEFAULT NULL,
  `order_id` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `customer_name` varchar(191) NOT NULL,
  `customer_email` varchar(191) NOT NULL,
  `customer_phone` varchar(191) DEFAULT NULL,
  `billing_name` varchar(191) NOT NULL,
  `billing_city` varchar(191) DEFAULT NULL,
  `billing_state` varchar(191) DEFAULT NULL,
  `billing_post_code` varchar(191) NOT NULL,
  `billing_country` varchar(191) NOT NULL,
  `billing_address` text NOT NULL,
  `shipping_name` varchar(191) NOT NULL,
  `shipping_city` varchar(191) DEFAULT NULL,
  `shipping_state` varchar(191) NOT NULL,
  `shipping_post_code` varchar(191) NOT NULL,
  `shipping_country` varchar(191) NOT NULL,
  `shipping_address` text NOT NULL,
  `sub_total` decimal(10,2) UNSIGNED NOT NULL,
  `shipping_method` varchar(191) NOT NULL,
  `shipping_cost` decimal(10,2) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) DEFAULT NULL,
  `discount` decimal(10,2) UNSIGNED NOT NULL,
  `total` decimal(10,2) UNSIGNED NOT NULL,
  `payment_method` varchar(191) DEFAULT NULL,
  `currency` varchar(191) NOT NULL,
  `currency_rate` decimal(10,2) NOT NULL,
  `locale` varchar(191) NOT NULL,
  `status` varchar(30) NOT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `customer_name`, `customer_email`, `customer_phone`, `billing_name`, `billing_city`, `billing_state`, `billing_post_code`, `billing_country`, `billing_address`, `shipping_name`, `shipping_city`, `shipping_state`, `shipping_post_code`, `shipping_country`, `shipping_address`, `sub_total`, `shipping_method`, `shipping_cost`, `coupon_id`, `discount`, `total`, `payment_method`, `currency`, `currency_rate`, `locale`, `status`, `note`, `created_at`, `updated_at`) VALUES
(10, NULL, 'test price90', 'shahsardar941@gmail.com', '0000000000', 'test price90', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'test price90', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '90.00', 'flat_rate', '0.00', NULL, '0.00', '90.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-08 16:20:32', '2025-10-08 16:20:32'),
(11, NULL, 'testing', 'tessting@gmail.com', '0000000000', 'testing', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'testing', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '90.00', 'flat_rate', '0.00', NULL, '0.00', '90.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-08 16:24:46', '2025-10-08 16:24:46'),
(12, NULL, 'Admin', 'azursol@hotmail.com', '0000000000', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '300.00', 'flat_rate', '0.00', NULL, '0.00', '300.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-08 16:38:19', '2025-10-08 16:38:19'),
(13, NULL, 'Admin', 'azursol@hotmail.com', '0000000000', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '0.00', 'flat_rate', '0.00', NULL, '0.00', '0.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-08 17:00:43', '2025-10-08 17:00:43'),
(14, NULL, 'Admin', 'azursol@hotmail.com', '0000000000', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '0.00', 'flat_rate', '0.00', NULL, '0.00', '0.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-08 17:00:49', '2025-10-08 17:00:49'),
(15, NULL, 'Admin', 'azursol@hotmail.com', '0000000000', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '270.00', 'flat_rate', '0.00', NULL, '0.00', '270.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-08 17:01:26', '2025-10-08 17:01:26'),
(16, NULL, 'Admin', 'azursol@hotmail.com', '0000000000', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '270.00', 'flat_rate', '0.00', NULL, '0.00', '270.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-08 17:05:08', '2025-10-08 17:05:08'),
(17, NULL, 'Admin', 'azursol@hotmail.com', '0000000000', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '150.00', 'flat_rate', '0.00', NULL, '0.00', '150.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-08 17:07:50', '2025-10-08 17:07:50'),
(18, NULL, 'Admin', 'azursol@hotmail.com', '0000000000', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '100.00', 'flat_rate', '0.00', NULL, '0.00', '100.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-08 17:09:58', '2025-10-08 17:09:58'),
(19, NULL, 'Admin', 'azursol@hotmail.com', '0000000000', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '100.00', 'flat_rate', '0.00', NULL, '0.00', '100.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-08 17:12:35', '2025-10-08 17:12:35'),
(20, NULL, 'Admin', 'azursol@hotmail.com', '0000000000', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '150.00', 'flat_rate', '0.00', NULL, '0.00', '150.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-08 17:12:58', '2025-10-08 17:12:58'),
(21, NULL, 'ALi', 'azahid42101@gmail.com', '0000000000', 'ALi', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'ALi', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '200.00', 'flat_rate', '0.00', NULL, '0.00', '200.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-09 08:39:23', '2025-10-09 08:39:23'),
(22, NULL, 'jpa', 'jpa@jkjlklk.com', '0000000000', 'jpa', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'jpa', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '200.00', 'flat_rate', '0.00', NULL, '0.00', '200.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-12 17:25:00', '2025-10-12 17:25:00'),
(23, NULL, 'jpa', 'jpa@jkjlklk.com', '0000000000', 'jpa', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'jpa', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '0.00', 'flat_rate', '0.00', NULL, '0.00', '0.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-12 17:30:57', '2025-10-12 17:30:57'),
(24, NULL, 'sdsd', 'devmin720@gmail.com', '0000000000', 'sdsd', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'sdsd', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '100.00', 'flat_rate', '0.00', NULL, '0.00', '100.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-12 17:42:24', '2025-10-12 17:42:24'),
(25, NULL, 'adasd', 'devmin720@gmail.com', '0000000000', 'adasd', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'adasd', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '50.00', 'flat_rate', '0.00', NULL, '0.00', '50.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-12 17:45:11', '2025-10-12 17:45:11'),
(26, NULL, 'Admin', 'azursol@hotmail.com', '0000000000', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '100.00', 'flat_rate', '0.00', NULL, '0.00', '100.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-13 09:02:34', '2025-10-13 09:02:34'),
(27, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, '', '', '', '', '0.00', 'flat_rate', '55.00', NULL, '0.00', '155.00', NULL, '', '0.00', '', '', NULL, '2025-10-13 09:14:33', '2025-10-13 09:14:33'),
(28, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, '', '', '', '', '0.00', 'flat_rate', '55.00', NULL, '0.00', '155.00', NULL, '', '0.00', '', '', NULL, '2025-10-13 09:21:18', '2025-10-13 09:21:18'),
(29, NULL, 'Admin', 'azursol@hotmail.com', '0000000000', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '50.00', 'flat_rate', '55.00', NULL, '0.00', '105.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-13 09:24:52', '2025-10-13 09:24:52'),
(30, NULL, 'test', 'azursoldev@gmail.com', '0000000000', 'test', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'test', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '100.00', 'flat_rate', '55.00', NULL, '0.00', '155.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-13 13:54:29', '2025-10-13 13:54:29'),
(31, NULL, 'testing', 'azursoldev@gmail.com', '0000000000', 'testing', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'testing', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '100.00', 'flat_rate', '55.00', NULL, '0.00', '155.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-13 14:03:54', '2025-10-13 14:03:54'),
(32, NULL, 'testing', 'azursoldev@gmail.com', '0000000000', 'testing', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'testing', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '50.00', 'flat_rate', '55.00', NULL, '0.00', '105.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-13 14:06:24', '2025-10-13 14:06:24'),
(33, NULL, 'testing', 'azursoldev@gmail.com', '0000000000', 'testing', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'testing', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '100.00', 'flat_rate', '55.00', NULL, '0.00', '155.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-13 14:15:49', '2025-10-13 14:15:49'),
(34, NULL, 'jkljkljkjkljkljljl', 'jkljkljkljkljklj@KLjkljkljlkjl.com', '0000000000', 'jkljkljkjkljkljljl', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'jkljkljkjkljkljljl', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '50.00', 'flat_rate', '55.00', NULL, '0.00', '105.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-13 17:26:31', '2025-10-13 17:26:31'),
(35, NULL, 'Bhi', 'fhgdb@cccgggfd.com', '0000000000', 'Bhi', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Bhi', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '240.00', 'flat_rate', '55.00', NULL, '0.00', '295.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-10-25 02:35:35', '2025-10-25 02:35:35'),
(36, NULL, 'Sabrina Dingle', 's.dingle@yahoo.com', '0000000000', 'Sabrina Dingle', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Sabrina Dingle', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '40.00', 'flat_rate', '0.00', NULL, '0.00', '40.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-11-06 00:11:03', '2025-11-06 00:11:03'),
(37, NULL, 'Ambar Ramos', 'ingambarramos@gmail.com', '0000000000', 'Ambar Ramos', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Ambar Ramos', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '60.00', 'flat_rate', '0.00', NULL, '0.00', '60.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-11-09 07:29:35', '2025-11-09 07:29:35'),
(38, NULL, 'Jacob Galvan', 'Jacobroosevelt@gmail.com', '0000000000', 'Jacob Galvan', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Jacob Galvan', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '225.00', 'flat_rate', '55.00', NULL, '0.00', '280.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-11-10 06:59:27', '2025-11-10 06:59:27'),
(39, NULL, 'Jacob Galvan', 'Jacobroosevelt@gmail.com', '0000000000', 'Jacob Galvan', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Jacob Galvan', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '225.00', 'flat_rate', '55.00', NULL, '0.00', '280.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-11-10 07:02:08', '2025-11-10 07:02:08'),
(40, NULL, 'Raj', 'stamna2012@gmail.com', '0000000000', 'Raj', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Raj', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '75.00', 'flat_rate', '55.00', NULL, '0.00', '130.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-11-14 03:05:54', '2025-11-14 03:05:54'),
(41, NULL, 'Swagatkumar Patel', 'swagatpatel32@gmail.com', '0000000000', 'Swagatkumar Patel', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Swagatkumar Patel', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '80.00', 'flat_rate', '55.00', NULL, '0.00', '135.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-11-19 05:17:23', '2025-11-19 05:17:23'),
(42, NULL, 'Swagatkumar Patel', 'swagatpatel32@gmail.com', '0000000000', 'Swagatkumar Patel', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Swagatkumar Patel', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '120.00', 'flat_rate', '55.00', NULL, '0.00', '175.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-11-19 05:18:30', '2025-11-19 05:18:30'),
(43, NULL, 'suv', 'azursoldev@gmail.com', '0000000000', 'suv', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'suv', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '45.00', 'flat_rate', '55.00', NULL, '0.00', '100.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-11-22 17:23:13', '2025-11-22 17:23:13'),
(44, NULL, 'suv', 'admin@gmail.com', '0000000000', 'suv', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'suv', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '45.00', 'flat_rate', '55.00', NULL, '0.00', '100.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-11-25 03:43:53', '2025-11-25 03:43:53'),
(45, NULL, 'Sama', 'sama.khalilova@bk.ru', '0000000000', 'Sama', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Sama', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '15.00', 'flat_rate', '0.00', NULL, '0.00', '15.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-11-27 01:44:42', '2025-11-27 01:44:42'),
(46, NULL, 'Sama', 'sama.khalilova@bk.ru', '0000000000', 'Sama', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Sama', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '0.00', 'flat_rate', '0.00', NULL, '0.00', '0.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-11-27 01:45:13', '2025-11-27 01:45:13'),
(47, NULL, 'Sama', 'sama.khalilova@bkr.u', '0000000000', 'Sama', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Sama', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '15.00', 'flat_rate', '0.00', NULL, '0.00', '15.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-11-27 01:47:37', '2025-11-27 01:47:37'),
(48, NULL, 'Alfonso Reyes', 'elevenreyes513@gmail.com', '0000000000', 'Alfonso Reyes', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Alfonso Reyes', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '75.00', 'flat_rate', '0.00', NULL, '0.00', '75.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-11-27 02:38:24', '2025-11-27 02:38:24'),
(49, NULL, 'Alfonso Reyes', 'elevenreyes513@gmail.com', '0000000000', 'Alfonso Reyes', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Alfonso Reyes', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '75.00', 'flat_rate', '0.00', NULL, '0.00', '75.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-11-27 02:40:22', '2025-11-27 02:40:22'),
(50, NULL, 'hale', 'halen@gmail.com', '0000000000', 'hale', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'hale', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '40.00', 'flat_rate', '55.00', NULL, '0.00', '95.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-11-29 03:20:37', '2025-11-29 03:20:37'),
(51, NULL, 'jlkjl', 'jlkjlkjkl@jkljl.com', '0000000000', 'jlkjl', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'jlkjl', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '95.00', 'flat_rate', '55.00', NULL, '0.00', '150.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-12-07 19:27:33', '2025-12-07 19:27:33'),
(52, NULL, 'Admin', 'azahid42101@gmail.com', '0000000000', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Admin', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '45.00', 'flat_rate', '55.00', NULL, '0.00', '100.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-12-09 07:36:30', '2025-12-09 07:36:30'),
(53, NULL, 'Ali zahid', 'devmin720@gmail.com', '0000000000', 'Ali zahid', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', 'Ali zahid', 'N/A', 'N/A', '00000', 'Unknown', 'N/A', '95.00', 'flat_rate', '55.00', NULL, '0.00', '150.00', 'paypal', 'USD', '1.00', 'en', 'pending', NULL, '2025-12-13 03:17:29', '2025-12-13 03:17:29');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_attributes` text DEFAULT NULL,
  `unit_price` decimal(10,2) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `line_total` decimal(10,2) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `product_attributes`, `unit_price`, `qty`, `line_total`, `created_at`, `updated_at`) VALUES
(7, 10, 3, '[]', '90.00', 1, '90.00', '2025-10-08 16:20:32', '2025-10-08 16:20:32'),
(8, 11, 4, '[]', '90.00', 1, '90.00', '2025-10-08 16:24:46', '2025-10-08 16:24:46'),
(9, 12, 1, '[]', '100.00', 3, '300.00', '2025-10-08 16:38:19', '2025-10-08 16:38:19'),
(10, 15, 4, '[]', '90.00', 3, '270.00', '2025-10-08 17:01:26', '2025-10-08 17:01:26'),
(11, 16, 3, '[]', '90.00', 3, '270.00', '2025-10-08 17:05:08', '2025-10-08 17:05:08'),
(12, 17, 2, '[]', '50.00', 3, '150.00', '2025-10-08 17:07:50', '2025-10-08 17:07:50'),
(13, 18, 2, '[]', '50.00', 2, '100.00', '2025-10-08 17:09:58', '2025-10-08 17:09:58'),
(14, 19, 2, '[]', '50.00', 2, '100.00', '2025-10-08 17:12:35', '2025-10-08 17:12:35'),
(15, 20, 2, '[]', '50.00', 3, '150.00', '2025-10-08 17:12:58', '2025-10-08 17:12:58'),
(16, 21, 1, '[]', '100.00', 2, '200.00', '2025-10-09 08:39:23', '2025-10-09 08:39:23'),
(17, 22, 1, '[]', '100.00', 2, '200.00', '2025-10-12 17:25:00', '2025-10-12 17:25:00'),
(18, 24, 1, '[]', '100.00', 1, '100.00', '2025-10-12 17:42:24', '2025-10-12 17:42:24'),
(19, 25, 2, '[]', '50.00', 1, '50.00', '2025-10-12 17:45:11', '2025-10-12 17:45:11'),
(20, 26, 1, '[]', '100.00', 1, '100.00', '2025-10-13 09:02:34', '2025-10-13 09:02:34'),
(21, 29, 2, '[]', '50.00', 1, '50.00', '2025-10-13 09:24:52', '2025-10-13 09:24:52'),
(22, 30, 1, '[]', '100.00', 1, '100.00', '2025-10-13 13:54:29', '2025-10-13 13:54:29'),
(23, 31, 1, '[]', '100.00', 1, '100.00', '2025-10-13 14:03:54', '2025-10-13 14:03:54'),
(24, 32, 2, '[]', '50.00', 1, '50.00', '2025-10-13 14:06:24', '2025-10-13 14:06:24'),
(25, 33, 1, '[]', '100.00', 1, '100.00', '2025-10-13 14:15:49', '2025-10-13 14:15:49'),
(26, 34, 2, '[]', '50.00', 1, '50.00', '2025-10-13 17:26:31', '2025-10-13 17:26:31'),
(27, 35, 1, '[]', '100.00', 1, '100.00', '2025-10-25 02:35:35', '2025-10-25 02:35:35'),
(28, 35, 2, '[]', '50.00', 1, '50.00', '2025-10-25 02:35:35', '2025-10-25 02:35:35'),
(29, 35, 3, '[]', '90.00', 1, '90.00', '2025-10-25 02:35:35', '2025-10-25 02:35:35'),
(30, 36, 11, '[]', '40.00', 1, '40.00', '2025-11-06 00:11:03', '2025-11-06 00:11:03'),
(31, 37, 13, '[]', '15.00', 4, '60.00', '2025-11-09 07:29:35', '2025-11-09 07:29:35'),
(32, 38, 12, '[]', '75.00', 3, '225.00', '2025-11-10 06:59:27', '2025-11-10 06:59:27'),
(33, 39, 12, '[]', '75.00', 3, '225.00', '2025-11-10 07:02:08', '2025-11-10 07:02:08'),
(34, 40, 12, '[]', '75.00', 1, '75.00', '2025-11-14 03:05:54', '2025-11-14 03:05:54'),
(35, 41, 11, '[]', '40.00', 2, '80.00', '2025-11-19 05:17:23', '2025-11-19 05:17:23'),
(36, 42, 11, '[]', '40.00', 3, '120.00', '2025-11-19 05:18:30', '2025-11-19 05:18:30'),
(37, 43, 5, '[]', '45.00', 1, '45.00', '2025-11-22 17:23:13', '2025-11-22 17:23:13'),
(38, 44, 5, '[]', '45.00', 1, '45.00', '2025-11-25 03:43:53', '2025-11-25 03:43:53'),
(39, 45, 13, '[]', '15.00', 1, '15.00', '2025-11-27 01:44:42', '2025-11-27 01:44:42'),
(40, 47, 13, '[]', '15.00', 1, '15.00', '2025-11-27 01:47:37', '2025-11-27 01:47:37'),
(41, 48, 12, '[]', '75.00', 1, '75.00', '2025-11-27 02:38:24', '2025-11-27 02:38:24'),
(42, 49, 12, '[]', '75.00', 1, '75.00', '2025-11-27 02:40:22', '2025-11-27 02:40:22'),
(43, 50, 11, '[]', '40.00', 1, '40.00', '2025-11-29 03:20:37', '2025-11-29 03:20:37'),
(44, 51, 14, '[]', '95.00', 1, '95.00', '2025-12-07 19:27:33', '2025-12-07 19:27:33'),
(45, 52, 7, '[]', '45.00', 1, '45.00', '2025-12-09 07:36:30', '2025-12-09 07:36:30'),
(46, 53, 14, '[]', '95.00', 1, '95.00', '2025-12-13 03:17:29', '2025-12-13 03:17:29');

-- --------------------------------------------------------

--
-- Table structure for table `order_taxes`
--

CREATE TABLE `order_taxes` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `tax_rate_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(15,4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `template` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `slug`, `status`, `template`, `created_at`, `updated_at`) VALUES
(1, 'about-us', 1, NULL, '2021-03-15 05:28:45', '2021-03-15 05:28:45'),
(2, 'contact-us', 1, 'contact', '2021-03-15 05:29:26', '2021-03-15 05:29:26'),
(5, 'faq', 1, NULL, '2021-03-17 07:43:29', '2021-03-17 07:43:29'),
(6, 'terms-&-conditions', 1, NULL, '2021-03-17 07:45:00', '2021-03-17 07:45:00'),
(7, 'payment-methods', 1, NULL, '2021-03-17 07:46:06', '2021-03-17 07:46:06'),
(8, 'money-back', 1, NULL, '2021-03-17 07:46:23', '2021-03-17 07:46:23'),
(9, 'returns', 1, NULL, '2021-03-17 07:46:38', '2021-03-17 07:46:38'),
(10, 'privacy-policy', 1, NULL, '2021-03-17 07:46:52', '2021-03-17 07:46:52'),
(11, 'shipping', 1, NULL, '2021-03-17 08:37:25', '2021-03-17 08:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `page_translations`
--

CREATE TABLE `page_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `title` text NOT NULL,
  `body` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_translations`
--

INSERT INTO `page_translations` (`id`, `page_id`, `locale`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 'English', 'About US', '<h2><strong>Vitiligo Treatment and Procedures</strong></h2>\r\n<h3>What is Vitiligo?</h3>\r\n<p>Vitiligo (vit-ih-LIE-go) is a disease that causes loss of skin color in patches. The discolored areas usually get bigger with time. The condition can affect the skin on any part of the body. It can also affect hair and the inside of the mouth.</p>\r\n<h4>What are the vitiligo treatment options available?</h4>\r\n<h4>Two ways to treat vitiligo :</h4>\r\n<h5>1 De-pigmentation: To remove the remaining Skin color of unaffected area</h5>\r\n<h5>2 Re-pigmentation: To Recover the skin color of affected area.</h5>\r\n<h4>&nbsp;De-pigmentation</h4>\r\n<p>If patient is having white patches more that 50% then doctor prefer De-pigmentation. De-pigmentation is actually easy way treat than Repigmentation. Monobenzone (MBEH), Mequinol,&nbsp; Retinol and Imiquimod is used as De-pigmentation agent. Laser and cryotherapy is second line treatment.</p>\r\n<p>Monobenzone (MBEH) is only FDA approved treatment available for De-pigmentation.</p>\r\n<p><img class=\"alignnone size-full wp-image-8034\" src=\"https://fairnglow.com/wp-content/uploads/2022/10/vitiligo-girl.jpeg\" sizes=\"auto, (max-width: 296px) 100vw, 296px\" srcset=\"https://fairnglow.com/wp-content/uploads/2022/10/vitiligo-girl.jpeg 296w, https://fairnglow.com/wp-content/uploads/2022/10/vitiligo-girl-150x86.jpeg 150w\" alt=\"Vitiligo treatment\" width=\"296\" height=\"170\" /></p>\r\n<p>Q Switched ND Yag 532 Nm can be used on face and hands but its very painful. So usually doctor use Analgesics, Icepacks, numb ointments etc.</p>\r\n<p class=\"p3\">So, let&rsquo;s dive deep the solution!</p>\r\n<h2 class=\"p5\"><strong>What Is Benoquik Monobenzone 20 Cream</strong></h2>\r\n<p class=\"p3\">Benoquik cream, also known as Monobenzone 20%, is used for depigmentation of the skin as a treatment for widespread vitiligo, a condition in which irregular patches of vitiligo covering about 50% of the body surface, loss color and become whitened.</p>\r\n<p class=\"p3\">This is caused by the destruction of the pigment-producing cells called melanocytes. Benoquik Monobenzone, 20% cream, is used as a skin lightener in people with vitiligo to reduce the color of patches containing pigment so that they match the areas of skin that have lost color. Depigmentation&nbsp; using Monobenzone cream is permanent and makes the skin sensitive to sunburn during and after treatment.</p>\r\n<h2 class=\"p5\"><strong>Main Ingredients</strong></h2>\r\n<p class=\"p3\">Benoquik&nbsp;<a href=\"https://en.wikipedia.org/wiki/Monobenzone\">Monobenzone</a>&nbsp;cream contains monobenzone 20% (mono benzyl ether of hydroquinone) in a water-soluble base containing sodium lauryl sulfate, purified water, propylene glycol, cetyl alcohol, and white wax.</p>\r\n<p class=\"p3\">Monobenzone is the mono-benzyl ether of hydroquinone. Monobenzone, applied topically to the skin, is used as a depigmenting agent inhibiting melanin produced by polymerization of oxidation products of tyrosine and dihydroxy phenyl compounds. Monobenzone works by permanently removing color from normal skin located around vitiligo affected area.</p>\r\n<h2 class=\"p5\"><strong>How Does Benoquik Monobenzone 20% Cream Work</strong></h2>\r\n<p class=\"p3\">Benoquik Monobenzone 20% cream contains monobenzone (mono benzyl ether of hydroquinone) that works by causing free-radical formation in the skin, and this destroys remaining melanocytes. Monobenzone, 20% in Benoquik cream, also acts by inhibiting the tyrosine enzyme involved in the production of melanin, the pigment that gives color to the skin. As the amount of melanin produced decreases, the areas of normal skin gradually lighten to match the patches of vitiliginous paler skin.</p>\r\n<h2 class=\"p5\"><strong>Benoquik Monobenzone Cream Uses</strong></h2>\r\n<p class=\"p3\">So, what are the uses of Benoquik cream? Let&rsquo;s see &ndash;</p>\r\n<ol class=\"ol1\">\r\n<li class=\"li3\">Benoquik cream lightens skin.</li>\r\n<li class=\"li3\">It lightens acne and surgical and injury scars.</li>\r\n<li class=\"li3\">It reduces sun-induced dark spots, aging spots, and hyperpigmentation.</li>\r\n<li class=\"li3\">Melasma&mdash;brown or grey facial patches&mdash;can be treated with Benoquik Cream.</li>\r\n<li class=\"li3\">Benoquik Cream treats vitiligo, a skin disorder that causes areas of pigment loss.</li>\r\n</ol>\r\n<h2 class=\"mb-4\">Benoquin&nbsp; for vitiligo Treatment Monobenzone cream also known as Benoquik</h2>\r\n<h2><strong>Monobenzone</strong></h2>\r\n<p><a href=\"https://fairnglow.com/product/benoquin/\">Benoquin</a>&nbsp;or Benoquik is best treatment if you want to go for depigmentation. If skin is affected more than 60% with vitiligo then doctor suggest you to go for Depigmentation. Benoquik 20% Cream is used to treat vitiligo if you want to for depigmentation.</p>\r\n<p>Corona Virus 2019 also know as Covid 19 is infectious disease. If you have any symptoms of Covid 19 please consult your doctor immediately. Corona Virus patients&nbsp; can use Monobenzone cream only as directed by physician.</p>\r\n<div>\r\n<h3><a href=\"https://fairnglow.com/\">Vitiligo Treatment&nbsp;</a>Study:</h3>\r\n<p>In Study on Monobenzone Topical Usage, 15 Vitiligo Patients have used Benoquik Monobenzone 20% for 4 Months and they have achieved visible depigmentation within 4-16 Months depends on their skin.</p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div>\r\n<p>For&nbsp;Vitiligo cure&nbsp;Use Benoquik 20 % Cream to Get results within 4 weeks , Monobenzone Reduces patches, and helps to achieve uniform depigmentation, Skin Lighting agent.</p>\r\n<div>&nbsp;</div>\r\n<p>Benoquin (<a href=\"https://fairnglow.com/product/monobenzone-60-cream/\">Monobenzone 60%</a>)<br />no need of Monobenzone prescription to buy it from here.</p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div>\r\n<h3><strong>For What&nbsp;<a href=\"https://fairnglow.com/product/monobenzone/\">monobenzone</a>&nbsp;known for?</strong></h3>\r\n<p>Monobenzone is known for it depigmentation action. Being a best depigmentation agent Monobenzone is used to treat vitiligo. Monobenzone is available in cream and serum form so we can use it on topical layer of skin and In cream form it is known as Benoquik or Benoquin. Benoquik cream or Ointment contains Monobenzone 20% Cream and maximum 20% is allowed and approved by FDA.</p>\r\n<div class=\"vc_row wpb_row vc_row-fluid vc_custom_1666201591795 vc_row-has-fill vc_row-o-content-middle vc_row-flex\" data-vc-full-width=\"true\" data-vc-full-width-init=\"true\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12 vc_hidden-xs\">\r\n<div class=\"vc_column-inner vc_custom_1666201607611\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"vc_row wpb_row vc_inner vc_row-fluid vc_custom_1666201540346\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_text_column wpb_content_element best-vitiligo\">\r\n<div class=\"wpb_wrapper\">\r\n<h2 class=\"p1\"><strong>Benoquik vs. Benoquin</strong></h2>\r\n</div>\r\n</div>\r\n<div class=\"wpb_text_column wpb_content_element\">\r\n<div class=\"wpb_wrapper\">\r\n<p class=\"p2\">Why do we not have a comparison between Benoquik and Benoquin? Well, let&rsquo;s check that!</p>\r\n<table class=\"t1\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"td1\" valign=\"top\">&nbsp;</td>\r\n<td class=\"td1\" valign=\"top\">\r\n<p class=\"p2\">Benoquik cream</p>\r\n</td>\r\n<td class=\"td1\" valign=\"top\">\r\n<p class=\"p2\">Benoquin cream</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td class=\"td2\" valign=\"top\">\r\n<p class=\"p2\">Active Ingredient</p>\r\n</td>\r\n<td class=\"td2\" valign=\"top\">\r\n<p class=\"p2\">Benoquik cream contains Monobenzone, a depigmenting agent that destroys melanocytes &ndash; the cells responsible for producing skin pigment.</p>\r\n</td>\r\n<td class=\"td2\" valign=\"top\">\r\n<p class=\"p2\">Benoquin cream also contains Monobenzone, but it works by inhibiting the enzyme tyrosinase, which is responsible for melanin production in the skin.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td class=\"td3\" valign=\"top\">\r\n<p class=\"p2\">The concentration of Active Ingredient</p>\r\n</td>\r\n<td class=\"td3\" valign=\"top\">\r\n<p class=\"p2\">Benoquik cream contains 20% Monobenzone.</p>\r\n</td>\r\n<td class=\"td3\" valign=\"top\">\r\n<p class=\"p2\">Benoquin cream also contains 20% Monobenzone.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td class=\"td4\" valign=\"top\">\r\n<p class=\"p2\">Usage</p>\r\n</td>\r\n<td class=\"td4\" valign=\"top\">\r\n<p class=\"p2\">Used to permanently lighten patches of skin affected by vitiligo.</p>\r\n</td>\r\n<td class=\"td4\" valign=\"top\">\r\n<p class=\"p2\">Used to lighten dark patches of skin, such as melasma and hyperpigmentation.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td class=\"td5\" valign=\"top\">\r\n<p class=\"p2\">Mode of Action</p>\r\n</td>\r\n<td class=\"td5\" valign=\"top\">\r\n<p class=\"p2\">Destroys melanin pigment in the skin by killing melanocytes.</p>\r\n</td>\r\n<td class=\"td5\" valign=\"top\">\r\n<p class=\"p2\">Destroys melanin pigment in the skin by inhibiting the enzyme tyrosinase.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td class=\"td3\" valign=\"top\">\r\n<p class=\"p2\">Side effects</p>\r\n</td>\r\n<td class=\"td3\" valign=\"top\">\r\n<p class=\"p2\">Skin irritation, itching, redness, and dryness.</p>\r\n</td>\r\n<td class=\"td3\" valign=\"top\">\r\n<p class=\"p2\">Skin irritation, itching, redness, and dryness.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td class=\"td6\" valign=\"top\">\r\n<p class=\"p2\">Precautions</p>\r\n</td>\r\n<td class=\"td6\" valign=\"top\">\r\n<p class=\"p2\">It should not be used on large areas of the skin or the face.</p>\r\n</td>\r\n<td class=\"td6\" valign=\"top\">\r\n<p class=\"p2\">It should not be used on large skin or face areas.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row-full-width vc_clearfix\">&nbsp;</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12 vc_hidden-xs\">\r\n<div class=\"vc_column-inner vc_custom_1666201922766\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"vc_row wpb_row vc_inner vc_row-fluid vc_custom_1666201856338\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_single_image wpb_content_element vc_align_center\">\r\n<figure class=\"wpb_wrapper vc_figure\">\r\n<div class=\"vc_single_image-wrapper   vc_box_border_grey\"><img class=\"vc_single_image-img \" title=\"Benoquin\" src=\"https://fairnglow.com/wp-content/uploads/2022/07/pV4skrbNxZ-500x300.jpg\" alt=\"Benoquin\" width=\"500\" height=\"300\" /></div>\r\n</figure>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"wpb_column vc_column_container vc_col-sm-6\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_text_column wpb_content_element best-vitiligo\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"p1\"><strong>So, is Benoquik better than Benoquin?</strong></h3>\r\n</div>\r\n</div>\r\n<div class=\"wpb_text_column wpb_content_element\">\r\n<div class=\"wpb_wrapper\">\r\n<p class=\"p1\">Well, while both Benoquin and Benoquik contain the same active ingredient, monobenzone, the difference lies in their formulation and quality! Benoquik is a premium brand that uses a higher quality monobenzone and is manufactured under strict quality control measures.</p>\r\n<p class=\"p1\">Additionally, Benoquik has a more advanced formula that allows for better penetration into the skin, leading to faster and more effective results! So, it&rsquo;s a better choice! Well, don&rsquo;t you trust our words? Then check the reviews of our consumers!</p>\r\n<p class=\"p1\">Benoquik is one of the most highly reviewed monobenzone cream brands. Customers have reported significant improvement in their skin condition after using the product. Many have praised its effectiveness in treating vitiligo and other skin conditions.</p>\r\n<p class=\"p1\">One customer said, &ldquo;I have been using Benoquik for a few months now, and I have noticed a significant improvement in my vitiligo. The white patches have reduced, and my skin tone is much more even. I highly recommend this product.&rdquo;</p>\r\n<p class=\"p1\">Another customer stated, &ldquo;I have tried various skin lightening creams in the past, but none of them have been as effective as Benoquik. It&rsquo;s a game-changer for me, and I will continue to use it.&rdquo;</p>\r\n<p class=\"p1\">So, what are you waiting for? We have the best high-grade Benoquik cream! Contact us today to learn more and place the order for your solution for your skin!</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid vc_custom_1666202009317 vc_row-has-fill vc_row-o-content-middle vc_row-flex\" data-vc-full-width=\"true\" data-vc-full-width-init=\"true\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12 vc_hidden-xs\">\r\n<div class=\"vc_column-inner vc_custom_1666202035057\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"vc_row wpb_row vc_inner vc_row-fluid vc_custom_1666202021987\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_text_column wpb_content_element best-vitiligo\">\r\n<div class=\"wpb_wrapper\">\r\n<h3 class=\"mb-4\">Depigmentation ointment are of different types depends on their way of working:</h3>\r\n</div>\r\n</div>\r\n<div class=\"wpb_text_column wpb_content_element\">\r\n<div class=\"wpb_wrapper\">\r\n<p>1.&nbsp;Monobenzone&nbsp;Benoquin&nbsp;available in cream and Serum form.</p>\r\n<p>2. Kojic Acid Available in Soap, Lotion Form<br />3. Hydroquinone Available in ointment Form<br />4. Azelaic Acid Available in ointment and lotion form</p>\r\n<p><a href=\"https://fairnglow.com/product/monobenzone/\">Monobenzone</a>&nbsp;Benoquin&nbsp;is an outstanding skin lightener and has proven to be effective in treating vitiligo and decreasing melanin. The skin lightener works by decreasing the metabolism of melanocytes and this will result in treating vitiligo permanently. There is not any other skin lightener that has proven to be this effective till now.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '2021-03-15 05:28:46', '2025-10-16 16:58:11'),
(2, 2, 'English', 'Contact Us', NULL, '2021-03-15 05:29:26', '2021-03-15 05:29:26'),
(5, 5, 'English', 'FAQ', '<h3>What is Vitiligo?</h3>\r\n<p>Vitiligo (vit-ih-LIE-go) is a disease that causes loss of skin color in patches. The discolored areas usually get bigger with time. The condition can affect the skin on any part of the body. It can also affect hair and the inside of the mouth.</p>\r\n<h4>What are the vitiligo treatment options available?</h4>\r\n<h4>Two ways to treat vitiligo :</h4>\r\n<h5>1 De-pigmentation: To remove the remaining Skin color of unaffected area</h5>\r\n<h5>2 Re-pigmentation: To Recover the skin color of affected area.</h5>', '2021-03-17 07:43:29', '2025-10-16 16:51:25'),
(6, 6, 'English', 'Terms & Conditions', '<p>This is Terms and Condition Page</p>', '2021-03-17 07:45:00', '2021-03-17 07:45:00'),
(7, 7, 'English', 'Payment Methods', '<p>This is payment method page</p>', '2021-03-17 07:46:06', '2021-03-17 07:46:06'),
(8, 8, 'English', 'Money Back', '<p>This is money back page</p>', '2021-03-17 07:46:23', '2021-03-17 07:46:23'),
(9, 9, 'English', 'Returns', '<p>This is return page</p>', '2021-03-17 07:46:38', '2021-03-17 07:46:38'),
(10, 10, 'English', 'Privacy Policy', '<p>This is privacy policy page</p>', '2021-03-17 07:46:52', '2021-03-17 07:46:52'),
(11, 11, 'English', 'Shipping', '<p>This is Shipping Page</p>', '2021-03-17 08:37:25', '2021-03-17 08:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('azursoldev@gmail.com', '$2y$10$SXHx92oUh4Wvw0nqQQOnrObyuw.qQNwEtvd0khG8DBCHb90zDQm3q', '2025-12-09 02:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) NOT NULL,
  `permission` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `permission`, `created_at`, `updated_at`) VALUES
(1, 1, 'products.index', '2025-10-07 05:56:42', '2025-10-07 05:56:42'),
(2, 1, 'products.create', '2025-10-07 05:56:42', '2025-10-07 05:56:42'),
(3, 1, 'products.edit', '2025-10-07 05:56:42', '2025-10-07 05:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tax_class_id` bigint(20) UNSIGNED DEFAULT NULL,
  `slug` varchar(191) NOT NULL,
  `product_type` varchar(191) NOT NULL,
  `price` decimal(10,2) UNSIGNED NOT NULL,
  `special_price` decimal(10,2) UNSIGNED DEFAULT NULL,
  `special_price_start` date DEFAULT NULL,
  `special_price_end` date DEFAULT NULL,
  `sku` varchar(191) DEFAULT NULL,
  `manage_stock` tinyint(1) NOT NULL,
  `qty` bigint(20) DEFAULT NULL,
  `in_stock` tinyint(1) NOT NULL,
  `viewed` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL,
  `featured_tag` varchar(30) DEFAULT NULL,
  `digital_file` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `tax_class_id`, `slug`, `product_type`, `price`, `special_price`, `special_price_start`, `special_price_end`, `sku`, `manage_stock`, `qty`, `in_stock`, `viewed`, `is_active`, `featured_tag`, `digital_file`, `created_at`, `updated_at`) VALUES
(5, NULL, NULL, 'monobenzone-cream', 'simple_product', '45.00', NULL, NULL, NULL, NULL, 0, NULL, 1, 205, 1, NULL, '', '2025-10-25 03:25:47', '2025-12-12 18:11:50'),
(7, NULL, NULL, 'benoquin-cream', 'simple_product', '45.00', '45.00', NULL, NULL, NULL, 0, NULL, 1, 132, 1, NULL, '', '2025-10-31 02:52:00', '2025-12-12 18:30:29'),
(11, NULL, NULL, 'monobenzone-40-cream', 'simple_product', '55.00', '40.00', NULL, NULL, NULL, 0, NULL, 1, 76, 1, NULL, '', '2025-11-02 18:55:43', '2025-12-12 11:35:33'),
(12, NULL, NULL, 'monobenzone-60-cream', 'simple_product', '90.00', '75.00', NULL, NULL, NULL, 0, NULL, 1, 81, 1, NULL, '', '2025-11-02 18:58:21', '2025-12-12 07:57:57'),
(13, NULL, NULL, 'benoquin-20-cream-low-quality', 'simple_product', '29.00', '29.00', NULL, NULL, NULL, 0, NULL, 1, 83, 1, NULL, '', '2025-11-02 19:41:09', '2025-12-12 11:35:38'),
(14, NULL, NULL, 'monobenzone-80-cream', 'simple_product', '125.00', '95.00', NULL, NULL, NULL, 0, NULL, 1, 65, 1, NULL, '', '2025-11-04 04:46:55', '2025-12-12 17:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`product_id`, `category_id`) VALUES
(5, 1),
(5, 36),
(7, 1),
(7, 36),
(11, 1),
(11, 36),
(12, 1),
(12, 36),
(13, 1),
(13, 36);

-- --------------------------------------------------------

--
-- Table structure for table `product_comments`
--

CREATE TABLE `product_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `rating` bigint(20) NOT NULL,
  `comment` text NOT NULL,
  `is_approved` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `user_id`, `product_id`, `rating`, `comment`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 2, 5, 5, 'Best product for Vitiligo Treatment', 0, '2025-11-03 02:45:15', '2025-11-03 02:45:15'),
(2, 3, 5, 5, 'Best Skin Lightening Cream. I have used many product for Skin Whitening, But this is just Awesome Product....... I love it.....', 1, '2025-11-03 02:48:46', '2025-11-03 02:49:49');

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_translations`
--

CREATE TABLE `product_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` text NOT NULL,
  `description` longtext NOT NULL,
  `short_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_translations`
--

INSERT INTO `product_translations` (`id`, `product_id`, `locale`, `name`, `description`, `short_description`, `created_at`, `updated_at`) VALUES
(5, 5, 'English', 'Monobenzone 20% Cream For Vitiligo Treatment', '<p>Monobenzone 20% Cream But Benoquik contains Purified Monobenzone 20% Cream.</p>\r\n<p>As cream is brown in color wherease Benoquik cream white in color So Benoquik results are better than.</p>\r\n<p>20% Cream is comes in 20gram and 30 gram Packing.</p>\r\n<p>But Benoquik is 20 gram and 35 gram Packing.</p>', 'Monobenzone ® 20% Cream\r\n \r\n\r\nBenoquik or Benoquin are permanent Skin Lightners.', '2025-10-25 03:25:47', '2025-10-25 03:25:47'),
(7, 7, 'English', 'Benoquin 20% Cream', '<article class=\"text-token-text-primary w-full focus:outline-none [--shadow-height:45px] has-data-writing-block:pointer-events-none has-data-writing-block:-mt-(--shadow-height) has-data-writing-block:pt-(--shadow-height) [&amp;:has([data-writing-block])&gt;*]:pointer-events-auto [content-visibility:auto] supports-[content-visibility:auto]:[contain-intrinsic-size:auto_100lvh] scroll-mt-[calc(var(--header-height)+min(200px,max(70px,20svh)))]\" dir=\"auto\" tabindex=\"-1\" data-turn-id=\"f4eee6a4-8eef-4c87-8a8d-41e78a5cf155\" data-testid=\"conversation-turn-2\" data-scroll-anchor=\"false\" data-turn=\"assistant\">\r\n<div class=\"text-base my-auto mx-auto [--thread-content-margin:--spacing(4)] thread-sm:[--thread-content-margin:--spacing(6)] thread-lg:[--thread-content-margin:--spacing(16)] px-(--thread-content-margin)\">\r\n<div class=\"[--thread-content-max-width:40rem] thread-lg:[--thread-content-max-width:48rem] mx-auto max-w-(--thread-content-max-width) flex-1 group/turn-messages focus-visible:outline-hidden relative flex w-full min-w-0 flex-col agent-turn\" tabindex=\"-1\">\r\n<div class=\"flex max-w-full flex-col grow\">\r\n<div class=\"min-h-8 text-message relative flex w-full flex-col items-end gap-2 text-start break-words whitespace-normal [.text-message+&amp;]:mt-1\" dir=\"auto\" data-message-author-role=\"assistant\" data-message-id=\"1b6cd0d7-d6c1-4f49-b7b7-42100da76a1b\" data-message-model-slug=\"gpt-5\">\r\n<div class=\"flex w-full flex-col gap-1 empty:hidden first:pt-[1px]\">\r\n<div class=\"markdown prose dark:prose-invert w-full break-words light markdown-new-styling\">\r\n<h1 data-start=\"125\" data-end=\"182\"><span style=\"color: #000000;\"><strong data-start=\"127\" data-end=\"182\">Benoquin Cream for Vitiligo Treatment</strong></span></h1>\r\n<h2 data-start=\"184\" data-end=\"214\"><span style=\"color: #000000;\"><strong data-start=\"187\" data-end=\"214\">What is Benoquin Cream?</strong></span></h2>\r\n<p data-start=\"215\" data-end=\"552\"><span style=\"color: #000000;\">Benoquin Cream is a <strong data-start=\"235\" data-end=\"265\">topical depigmenting agent</strong> whose active ingredient is <strong data-start=\"293\" data-end=\"316\">Monobenzone 20% w/w</strong>. It is specifically indicated for use in patients with <strong data-start=\"372\" data-end=\"394\">extensive vitiligo</strong> (when more than 50 % of the body surface area is affected) to achieve final depigmentation of the remaining pigmented skin, resulting in a uniform skin tone.</span></p>\r\n<hr data-start=\"554\" data-end=\"557\" />\r\n<h2 data-start=\"559\" data-end=\"595\"><span style=\"color: #000000;\"><strong data-start=\"562\" data-end=\"595\">How Does Benoquin Cream Work?</strong></span></h2>\r\n<p data-start=\"596\" data-end=\"969\"><span style=\"color: #000000;\">The exact mechanism is not fully understood, but monobenzone works by increasing the elimination of melanin from melanocytes and destroying melanocytes themselves in treated skin. This means pigment-producing cells are removed, leading to <strong data-start=\"835\" data-end=\"863\">permanent depigmentation</strong>. After treatment, the epidermis may appear normal except for the <strong data-start=\"929\" data-end=\"968\">absence of identifiable melanocytes</strong>.</span></p>\r\n<hr data-start=\"971\" data-end=\"974\" />\r\n<h2 data-start=\"976\" data-end=\"1013\"><span style=\"color: #000000;\"><strong data-start=\"979\" data-end=\"1013\">Why and When Is Benoquin Used?</strong></span></h2>\r\n<h3 data-start=\"1015\" data-end=\"1038\"><span style=\"color: #000000;\"><strong data-start=\"1019\" data-end=\"1038\">Appropriate Use</strong></span></h3>\r\n<ul data-start=\"1039\" data-end=\"1295\">\r\n<li data-start=\"1039\" data-end=\"1135\">\r\n<p data-start=\"1041\" data-end=\"1135\"><span style=\"color: #000000;\">Recommended for patients with <strong data-start=\"1071\" data-end=\"1095\">generalized vitiligo</strong> (covering more than 50% of the body).</span></p>\r\n</li>\r\n<li data-start=\"1136\" data-end=\"1222\">\r\n<p data-start=\"1138\" data-end=\"1222\"><span style=\"color: #000000;\">Used to achieve a <strong data-start=\"1156\" data-end=\"1177\">uniform skin tone</strong> by depigmenting the remaining normal skin.</span></p>\r\n</li>\r\n<li data-start=\"1223\" data-end=\"1295\">\r\n<p data-start=\"1225\" data-end=\"1295\"><span style=\"color: #000000;\">Not for small patches, freckles, melasma, or cosmetic skin lightening.</span></p>\r\n</li>\r\n</ul>\r\n<h3 data-start=\"1297\" data-end=\"1313\"><span style=\"color: #000000;\"><strong data-start=\"1301\" data-end=\"1313\">Benefits</strong></span></h3>\r\n<ul data-start=\"1314\" data-end=\"1553\">\r\n<li data-start=\"1314\" data-end=\"1394\">\r\n<p data-start=\"1316\" data-end=\"1394\"><span style=\"color: #000000;\">Creates a <strong data-start=\"1326\" data-end=\"1352\">more uniform skin tone</strong> in people with widespread pigment loss.</span></p>\r\n</li>\r\n<li data-start=\"1395\" data-end=\"1483\">\r\n<p data-start=\"1397\" data-end=\"1483\"><span style=\"color: #000000;\">May improve <strong data-start=\"1409\" data-end=\"1451\">emotional and psychological well-being</strong> by reducing visible contrast.</span></p>\r\n</li>\r\n<li data-start=\"1484\" data-end=\"1553\">\r\n<p data-start=\"1486\" data-end=\"1553\"><span style=\"color: #000000;\">Provides a <strong data-start=\"1497\" data-end=\"1522\">non-surgical solution</strong> for complete depigmentation.</span></p>\r\n</li>\r\n</ul>\r\n<hr data-start=\"1555\" data-end=\"1558\" />\r\n<h2 data-start=\"1560\" data-end=\"1592\"><span style=\"color: #000000;\"><strong data-start=\"1563\" data-end=\"1592\">How to Use Benoquin Cream</strong></span></h2>\r\n<ul data-start=\"1593\" data-end=\"2074\">\r\n<li data-start=\"1593\" data-end=\"1644\">\r\n<p data-start=\"1595\" data-end=\"1644\"><span style=\"color: #000000;\">Always use under <strong data-start=\"1612\" data-end=\"1641\">dermatologist supervision</strong>.</span></p>\r\n</li>\r\n<li data-start=\"1645\" data-end=\"1750\">\r\n<p data-start=\"1647\" data-end=\"1750\"><span style=\"color: #000000;\">Apply a <strong data-start=\"1655\" data-end=\"1669\">thin layer</strong> of the cream to the normally pigmented skin, often twice daily or as directed.</span></p>\r\n</li>\r\n<li data-start=\"1751\" data-end=\"1874\">\r\n<p data-start=\"1753\" data-end=\"1874\"><span style=\"color: #000000;\">Clean and dry the area before application. Wash your hands afterward to avoid unintended depigmentation on other areas.</span></p>\r\n</li>\r\n<li data-start=\"1875\" data-end=\"1970\">\r\n<p data-start=\"1877\" data-end=\"1970\"><span style=\"color: #000000;\">Changes may start to appear after 1&ndash;2 months; significant results can take up to 12 months.</span></p>\r\n</li>\r\n<li data-start=\"1971\" data-end=\"2074\">\r\n<p data-start=\"1973\" data-end=\"2074\"><span style=\"color: #000000;\">Because the depigmentation is permanent, always use <strong data-start=\"2025\" data-end=\"2038\">sunscreen</strong> and avoid excessive sun exposure.</span></p>\r\n</li>\r\n</ul>\r\n<hr data-start=\"2076\" data-end=\"2079\" />\r\n<h2 data-start=\"2081\" data-end=\"2134\"><span style=\"color: #000000;\"><strong data-start=\"2084\" data-end=\"2134\">Important Safety Considerations &amp; Side Effects</strong></span></h2>\r\n<h3 data-start=\"2136\" data-end=\"2158\"><span style=\"color: #000000;\"><strong data-start=\"2140\" data-end=\"2158\">Major Warnings</strong></span></h3>\r\n<ul data-start=\"2159\" data-end=\"2374\">\r\n<li data-start=\"2159\" data-end=\"2250\">\r\n<p data-start=\"2161\" data-end=\"2250\"><span style=\"color: #000000;\">Benoquin is <strong data-start=\"2173\" data-end=\"2207\">not a cosmetic bleaching cream</strong>; it is for medical use in vitiligo only.</span></p>\r\n</li>\r\n<li data-start=\"2251\" data-end=\"2292\">\r\n<p data-start=\"2253\" data-end=\"2292\"><span style=\"color: #000000;\">The pigment loss is <strong data-start=\"2273\" data-end=\"2289\">irreversible</strong>.</span></p>\r\n</li>\r\n<li data-start=\"2293\" data-end=\"2374\">\r\n<p data-start=\"2295\" data-end=\"2374\"><span style=\"color: #000000;\">Skin becomes more vulnerable to sun damage; proper sun protection is essential.</span></p>\r\n</li>\r\n</ul>\r\n<h3 data-start=\"2376\" data-end=\"2405\"><span style=\"color: #000000;\"><strong data-start=\"2380\" data-end=\"2405\">Possible Side Effects</strong></span></h3>\r\n<ul data-start=\"2406\" data-end=\"2616\">\r\n<li data-start=\"2406\" data-end=\"2480\">\r\n<p data-start=\"2408\" data-end=\"2480\"><span style=\"color: #000000;\">Local skin irritation, redness, itching, burning, dryness, or flaking.</span></p>\r\n</li>\r\n<li data-start=\"2481\" data-end=\"2533\">\r\n<p data-start=\"2483\" data-end=\"2533\"><span style=\"color: #000000;\">Uneven depigmentation if applied inconsistently.</span></p>\r\n</li>\r\n<li data-start=\"2534\" data-end=\"2616\">\r\n<p data-start=\"2536\" data-end=\"2616\"><span style=\"color: #000000;\">Rarely, allergic reactions or unintentional depigmentation of untreated areas.</span></p>\r\n</li>\r\n</ul>\r\n<h3 data-start=\"2618\" data-end=\"2654\"><span style=\"color: #000000;\"><strong data-start=\"2622\" data-end=\"2654\">Contraindications &amp; Cautions</strong></span></h3>\r\n<ul data-start=\"2655\" data-end=\"2879\">\r\n<li data-start=\"2655\" data-end=\"2722\">\r\n<p data-start=\"2657\" data-end=\"2722\"><span style=\"color: #000000;\">Do not use without a confirmed diagnosis of extensive vitiligo.</span></p>\r\n</li>\r\n<li data-start=\"2723\" data-end=\"2805\">\r\n<p data-start=\"2725\" data-end=\"2805\"><span style=\"color: #000000;\">Not for freckles, melasma, or other pigmentation issues unrelated to vitiligo.</span></p>\r\n</li>\r\n<li data-start=\"2806\" data-end=\"2879\">\r\n<p data-start=\"2808\" data-end=\"2879\"><span style=\"color: #000000;\">Pregnant or breastfeeding women should use only on a doctor&rsquo;s advice.</span></p>\r\n</li>\r\n</ul>\r\n<hr data-start=\"2881\" data-end=\"2884\" />\r\n<h2 data-start=\"2886\" data-end=\"2927\"><span style=\"color: #000000;\"><strong data-start=\"2889\" data-end=\"2927\">What to Expect: Realistic Outcomes</strong></span></h2>\r\n<p data-start=\"2928\" data-end=\"3372\"><span style=\"color: #000000;\">For people with generalized vitiligo, Benoquin can help <strong data-start=\"2984\" data-end=\"3012\">remove remaining pigment</strong> to match the already depigmented regions, creating a more even skin tone. It is <strong data-start=\"3093\" data-end=\"3125\">not a repigmentation therapy</strong>, meaning it won&rsquo;t restore color to white patches &mdash; instead, it lightens the remaining normal skin.</span><br data-start=\"3224\" data-end=\"3227\" /><span style=\"color: #000000;\">Since the results are <strong data-start=\"3249\" data-end=\"3274\">gradual and permanent</strong>, patients must discuss the risks and benefits with their dermatologist before starting therapy.</span></p>\r\n<hr data-start=\"3374\" data-end=\"3377\" />\r\n<h2 data-start=\"3379\" data-end=\"3398\"><span style=\"color: #000000;\"><strong data-start=\"3382\" data-end=\"3398\">SEO Keywords</strong></span></h2>\r\n<ul data-start=\"3399\" data-end=\"3596\">\r\n<li data-start=\"3399\" data-end=\"3430\">\r\n<p data-start=\"3401\" data-end=\"3430\"><span style=\"color: #000000;\">Benoquin Cream for Vitiligo</span></p>\r\n</li>\r\n<li data-start=\"3431\" data-end=\"3456\">\r\n<p data-start=\"3433\" data-end=\"3456\"><span style=\"color: #000000;\">Monobenzone 20% Cream</span></p>\r\n</li>\r\n<li data-start=\"3457\" data-end=\"3495\">\r\n<p data-start=\"3459\" data-end=\"3495\"><span style=\"color: #000000;\">Permanent Depigmentation Treatment</span></p>\r\n</li>\r\n<li data-start=\"3496\" data-end=\"3531\">\r\n<p data-start=\"3498\" data-end=\"3531\"><span style=\"color: #000000;\">Vitiligo Depigmentation Therapy</span></p>\r\n</li>\r\n<li data-start=\"3532\" data-end=\"3566\">\r\n<p data-start=\"3534\" data-end=\"3566\"><span style=\"color: #000000;\">Benoquin Side Effects and Uses</span></p>\r\n</li>\r\n<li data-start=\"3567\" data-end=\"3596\">\r\n<p data-start=\"3569\" data-end=\"3596\"><span style=\"color: #000000;\">How to Use Benoquin Cream</span></p>\r\n</li>\r\n</ul>\r\n<hr data-start=\"3598\" data-end=\"3601\" />\r\n<h2 data-start=\"3603\" data-end=\"3620\"><span style=\"color: #000000;\"><strong data-start=\"3606\" data-end=\"3620\">Conclusion</strong></span></h2>\r\n<p data-start=\"3621\" data-end=\"3917\"><span style=\"color: #000000;\">Benoquin Cream (Monobenzone 20%) offers an effective option for individuals with widespread vitiligo who wish to achieve an even skin tone through depigmentation. It should always be used <strong data-start=\"3809\" data-end=\"3838\">under medical supervision</strong>, as the depigmentation is <strong data-start=\"3865\" data-end=\"3878\">permanent</strong> and requires careful sun protection.</span></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</article>', 'Benoquin', '2025-10-31 02:52:00', '2025-11-02 18:44:31'),
(11, 11, 'English', 'Monobenzone 40 % Cream', '<p><strong>Monobenzone 40 % Cream</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>100 Gram Jar</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Each 100 Gram of cream contains 40 Gram Monobenzone.</strong></p>', 'Size: 100 Gram Jar', '2025-11-02 18:55:43', '2025-11-03 03:05:48'),
(12, 12, 'English', 'Monobenzone 60 % Cream', '<p>Monobenzone 60% Cream</p>', NULL, '2025-11-02 18:58:21', '2025-11-02 18:58:21'),
(13, 13, 'English', 'Benoquin 20% Cream Low Quality', '<p>Benoquin 20% Cream Low Quality</p>', NULL, '2025-11-02 19:41:09', '2025-11-02 19:41:09'),
(14, 14, 'English', 'Monobenzone 80% Cream', '<p>Monobenzone 80% Cream</p>', NULL, '2025-11-04 04:46:55', '2025-11-04 04:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_variation_items`
--

CREATE TABLE `product_variation_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `variation_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_variation_prices`
--

CREATE TABLE `product_variation_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `option` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `special_price` decimal(10,2) UNSIGNED DEFAULT NULL,
  `is_available` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Product Admin', NULL, '2025-10-07 10:56:04', '2025-10-07 10:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `value` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'mail_type', 'smtp', NULL, '2025-10-07 12:02:27'),
(2, 'backend_direction', 'ltr', NULL, '2025-10-07 11:42:27'),
(3, 'language', 'English', NULL, '2025-11-23 18:39:34'),
(4, 'email_verification', 'disabled', NULL, '2025-10-07 11:42:27'),
(5, 'company_name', 'PERFECT SKIN LIGHTNER', '2025-10-05 15:26:36', '2025-11-23 18:39:34'),
(6, 'site_title', 'Monobenzone | Benoquin Cream | Vitiligo Treatment', '2025-10-05 15:26:36', '2025-11-23 18:39:34'),
(7, 'phone', '+1 8319460546', '2025-10-05 15:26:36', '2025-11-23 18:39:34'),
(8, 'email', 'Info@monobenzone.org', '2025-10-05 15:26:37', '2025-11-23 18:39:34'),
(9, 'timezone', 'Asia/Karachi', '2025-10-05 15:26:37', '2025-11-23 18:39:34'),
(68, 'primary_menu', '1', '2021-03-16 11:45:35', '2021-03-22 02:39:21'),
(69, 'category_menu', '2', '2021-03-16 11:45:35', '2021-03-22 02:39:21'),
(70, 'footer_menu_1_title', 'Information', '2021-03-16 11:45:35', '2021-03-22 02:52:49'),
(71, 'footer_menu_1', '3', '2021-03-16 11:45:35', '2021-03-22 02:39:22'),
(72, 'footer_menu_2_title', 'Customer Service', '2021-03-16 11:45:35', '2021-03-22 03:00:36'),
(73, 'footer_menu_2', '4', '2021-03-16 11:45:35', '2021-03-22 02:39:22'),
(74, 'footer_about_us', 'Monobenzone is known for it depigmentation action. Being a best depigmentation agent Monobenzone is used to treat vitiligo. Monobenzone is available in cream and serum form so we can use it on topical layer of skin and In cream form it is known as Benoquik or Benoquin. Benoquik cream or Ointment contains Monobenzone 20% Cream and maximum 20% is allowed and approved by FDA.', '2021-03-16 11:49:23', '2025-10-16 16:45:56'),
(75, 'copyright_text', 'Copyright © 2025 <a href=\"https://monobenzone.org\" target=\"_blank\">monobenzone.org   -  All Rights Reserved.', '2021-03-16 11:49:23', '2025-11-23 18:03:11'),
(77, 'meta_keywords', 'shop, online store, online shop', '2021-03-17 09:08:50', '2021-03-17 09:08:50'),
(78, 'meta_description', 'Online Shopping', '2021-03-17 09:08:50', '2021-03-17 09:08:50'),
(79, 'service_1_title', 'FREE SHIPING', '2021-03-18 02:33:35', '2021-03-22 03:03:01'),
(80, 'service_1_sub_title', 'Free Shipping Over 100', '2021-03-18 02:33:35', '2021-03-27 02:53:29'),
(81, 'service_1_icon', '<i class=\"ti-rocket\"></i>', '2021-03-18 02:33:35', '2021-03-22 03:03:03'),
(82, 'service_2_title', 'FREE RETURN', '2021-03-18 02:33:35', '2021-03-22 03:03:04'),
(83, 'service_2_sub_title', 'Within 30 days returns', '2021-03-18 02:33:35', '2021-03-22 03:03:04'),
(84, 'service_2_icon', '<i class=\"ti-reload\"></i>', '2021-03-18 02:33:35', '2021-03-22 03:03:04'),
(85, 'service_3_title', 'SUCURE PAYMENT', '2021-03-18 02:33:37', '2021-03-22 03:03:04'),
(86, 'service_3_sub_title', '100% secure payment', '2021-03-18 02:33:38', '2021-03-22 03:03:05'),
(87, 'service_3_icon', '<i class=\"ti-lock\"></i>', '2021-03-18 02:33:38', '2021-03-22 03:03:06'),
(88, 'service_4_title', 'BEST PEICE', '2021-03-18 02:33:38', '2021-03-22 03:03:06'),
(89, 'service_4_sub_title', 'Guaranteed price', '2021-03-18 02:33:38', '2021-03-22 03:03:06'),
(90, 'service_4_icon', '<i class=\"ti-tag\"></i>', '2021-03-18 02:33:38', '2021-03-22 03:03:06'),
(91, 'hero_title', '<span>Vitiligo Treatment and Procedures </span> Best option for vitiligo Treatment', '2021-03-30 16:41:43', '2025-10-16 16:48:40'),
(92, 'hero_content', 'Vitiligo (vit-ih-LIE-go) is a disease that causes loss of skin color in patches. The discolored areas usually get bigger with time.', '2021-03-30 16:41:43', '2025-10-16 16:48:58'),
(93, 'hero_button_text', 'Shop Now', '2021-03-30 16:41:43', '2021-03-30 16:41:43'),
(94, 'hero_button_link', '/shop', '2021-03-30 16:41:43', '2025-10-16 16:47:26'),
(95, 'mail_type', 'smtp', NULL, '2025-10-07 12:02:27'),
(96, 'backend_direction', 'ltr', NULL, '2025-10-07 11:42:27'),
(97, 'language', 'English', NULL, '2025-11-23 18:39:34'),
(98, 'email_verification', 'disabled', NULL, '2025-10-07 11:42:27'),
(99, 'enable_three_column_banner', '1', '2025-10-05 21:10:45', '2025-10-05 21:10:45'),
(100, 'three_column_1_title', 'New Arrival', '2025-10-05 21:10:45', '2025-10-05 22:25:18'),
(101, 'three_column_1_sub_title', '30% OFF', '2025-10-05 21:10:45', '2025-10-05 22:25:18'),
(102, 'three_column_1_button_text', 'Shop Now', '2025-10-05 21:10:45', '2025-10-05 22:25:18'),
(103, 'three_column_1_button_link', '#', '2025-10-05 21:10:45', '2025-10-05 21:10:45'),
(104, 'three_column_2_title', 'XYZ Collection', '2025-10-05 21:10:45', '2025-10-05 22:30:08'),
(105, 'three_column_2_sub_title', '30% OFF', '2025-10-05 21:10:45', '2025-10-05 22:30:08'),
(106, 'three_column_2_button_text', 'Shop Now', '2025-10-05 21:10:45', '2025-10-05 22:25:18'),
(107, 'three_column_2_button_link', '#', '2025-10-05 21:10:45', '2025-10-05 21:10:45'),
(108, 'three_column_3_title', 'ABC Collection', '2025-10-05 21:10:45', '2025-10-05 22:30:08'),
(109, 'three_column_3_sub_title', '30% OFF', '2025-10-05 21:10:45', '2025-10-05 22:30:08'),
(110, 'three_column_3_button_text', 'Shop Now', '2025-10-05 21:10:45', '2025-10-05 22:25:18'),
(111, 'three_column_3_button_link', '#', '2025-10-05 21:10:45', '2025-10-05 21:10:45'),
(112, 'three_column_1_background_image', 'file_68e2f444ec1cf.jpg', '2025-10-05 21:10:45', '2025-10-05 22:42:12'),
(113, 'three_column_2_background_image', 'file_68e2f444ecec7.jpg', '2025-10-05 21:10:45', '2025-10-05 22:42:12'),
(114, 'three_column_3_background_image', 'file_68e2f444ee363.jpg', '2025-10-05 21:10:45', '2025-10-05 22:42:12'),
(115, 'hero_banner', 'file_68ed6dda3abde.jpg', '2025-10-05 21:55:46', '2025-10-13 21:23:38'),
(116, 'enable_trending_items', '1', '2025-10-05 22:44:07', '2025-10-05 22:44:07'),
(117, 'trending_items_title', 'Trending Items', '2025-10-05 22:44:07', '2025-10-05 22:44:51'),
(118, 'trending_categories', '[\"3\",\"\",\"\",\"\",\"\",\"\"]', '2025-10-05 22:44:07', '2025-10-05 22:53:20'),
(119, 'theme_color', '#e91e63', '2025-10-05 22:57:36', '2025-12-02 04:54:49'),
(120, 'navigation_color', '#000000', '2025-10-05 22:57:36', '2025-12-02 04:54:49'),
(121, 'custom_css', '', '2025-10-05 22:57:36', '2025-12-02 04:54:49'),
(122, 'cod_active', 'Yes', '2025-10-07 11:25:05', '2025-10-07 11:25:05'),
(123, 'cod_label', 'Cash On Delivery', '2025-10-07 11:25:05', '2025-10-07 11:25:05'),
(124, 'cod_description', 'Cash On Delivery', '2025-10-07 11:25:05', '2025-10-07 11:25:05'),
(125, 'free_shipping_active', 'No', '2025-10-07 11:26:31', '2025-10-12 17:44:06'),
(126, 'free_shipping_label', 'Shipping Included', '2025-10-07 11:26:31', '2025-10-12 17:44:06'),
(127, 'free_shipping_minimum_amount', '5', '2025-10-07 11:26:31', '2025-10-12 17:44:06'),
(128, 'supported_countries', '[\"India\"]', '2025-10-07 11:42:27', '2025-10-07 11:42:27'),
(129, 'date_format', 'Y-m-d', '2025-10-07 11:42:27', '2025-10-07 11:42:27'),
(130, 'time_format', '24', '2025-10-07 11:42:27', '2025-10-07 11:42:27'),
(131, 'media_file_types_supported', 'png,jpg,jpeg', '2025-10-07 11:42:27', '2025-10-07 11:42:27'),
(132, 'media_max_upload_size', '2', '2025-10-07 11:42:27', '2025-10-07 11:42:27'),
(133, 'digital_file_max_upload_size', '2', '2025-10-07 11:42:27', '2025-10-07 11:42:27'),
(134, 'from_email', 'azursoldev@gmail.com', '2025-10-07 12:02:27', '2025-10-07 12:02:27'),
(135, 'from_name', 'Cosmetic store', '2025-10-07 12:02:27', '2025-10-07 12:02:27'),
(136, 'smtp_host', 'sandbox.smtp.mailtrap.io', '2025-10-07 12:02:27', '2025-10-07 12:02:27'),
(137, 'smtp_port', '2525', '2025-10-07 12:02:27', '2025-10-07 12:02:27'),
(138, 'smtp_username', 'af9f3a486d234a', '2025-10-07 12:02:27', '2025-10-07 12:02:27'),
(139, 'smtp_password', '800ac3447a56d4', '2025-10-07 12:02:27', '2025-10-07 12:02:27'),
(140, 'smtp_encryption', 'tls', '2025-10-07 12:02:27', '2025-10-07 12:02:27'),
(141, 'bank_transfer_active', 'Yes', '2025-10-07 12:02:53', '2025-10-07 12:02:53'),
(142, 'bank_transfer_label', 'Bank Transfer', '2025-10-07 12:02:53', '2025-10-07 12:02:53'),
(143, 'bank_transfer_description', 'test', '2025-10-07 12:02:53', '2025-10-07 12:02:53'),
(144, 'flat_rate_active', 'Yes', '2025-10-12 17:44:09', '2025-10-13 08:57:07'),
(145, 'flat_rate_label', 'Flat Rate', '2025-10-12 17:44:09', '2025-10-13 08:57:07'),
(146, 'flat_rate_cost', '55', '2025-10-12 17:44:09', '2025-10-13 08:57:07'),
(147, 'facebook_link', '#', '2025-10-13 17:58:44', '2025-10-13 17:58:44'),
(148, 'twitter_link', '#', '2025-10-13 17:58:44', '2025-10-13 17:58:44'),
(149, 'instagram_link', '#', '2025-10-13 17:58:44', '2025-10-13 17:58:44'),
(150, 'youtube_link', '', '2025-10-13 17:58:44', '2025-10-13 17:58:44'),
(151, 'address', '', '2025-10-16 16:37:28', '2025-11-23 18:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `setting_translations`
--

CREATE TABLE `setting_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `setting_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `value` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_translations`
--

INSERT INTO `setting_translations` (`id`, `setting_id`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 99, 'English', '1', '2025-10-05 21:10:45', '2025-10-05 21:10:45'),
(2, 100, 'English', 'New Arrival', '2025-10-05 21:10:45', '2025-10-05 22:25:18'),
(3, 101, 'English', '30% OFF', '2025-10-05 21:10:45', '2025-10-05 22:25:18'),
(4, 102, 'English', 'Shop Now', '2025-10-05 21:10:45', '2025-10-05 22:25:18'),
(5, 103, 'English', '#', '2025-10-05 21:10:45', '2025-10-05 21:10:45'),
(6, 104, 'English', 'XYZ Collection', '2025-10-05 21:10:45', '2025-10-05 22:30:08'),
(7, 105, 'English', '30% OFF', '2025-10-05 21:10:45', '2025-10-05 22:30:08'),
(8, 106, 'English', 'Shop Now', '2025-10-05 21:10:45', '2025-10-05 22:25:18'),
(9, 107, 'English', '#', '2025-10-05 21:10:45', '2025-10-05 21:10:45'),
(10, 108, 'English', 'ABC Collection', '2025-10-05 21:10:45', '2025-10-05 22:30:08'),
(11, 109, 'English', '30% OFF', '2025-10-05 21:10:45', '2025-10-05 22:30:08'),
(12, 110, 'English', 'Shop Now', '2025-10-05 21:10:45', '2025-10-05 22:25:18'),
(13, 111, 'English', '#', '2025-10-05 21:10:45', '2025-10-05 21:10:45'),
(14, 91, 'English', '<span>Vitiligo Treatment and Procedures </span> Best option for vitiligo Treatment', '2025-10-05 21:55:46', '2025-10-16 16:48:40'),
(15, 92, 'English', 'Vitiligo (vit-ih-LIE-go) is a disease that causes loss of skin color in patches. The discolored areas usually get bigger with time.', '2025-10-05 21:55:46', '2025-10-16 16:48:58'),
(16, 93, 'English', 'Shop Now', '2025-10-05 21:55:46', '2025-10-05 21:55:46'),
(17, 94, 'English', '/shop', '2025-10-05 21:55:46', '2025-10-16 16:47:26'),
(18, 116, 'English', '1', '2025-10-05 22:44:07', '2025-10-05 22:44:07'),
(19, 117, 'English', 'Trending Items', '2025-10-05 22:44:07', '2025-10-05 22:44:51'),
(20, 118, 'English', '[\"3\",\"\",\"\",\"\",\"\",\"\"]', '2025-10-05 22:44:07', '2025-10-05 22:53:20'),
(21, 74, 'English', 'Monobenzone is known for it depigmentation action. Being a best depigmentation agent Monobenzone is used to treat vitiligo. Monobenzone is available in cream and serum form so we can use it on topical layer of skin and In cream form it is known as Benoquik or Benoquin. Benoquik cream or Ointment contains Monobenzone 20% Cream and maximum 20% is allowed and approved by FDA.', '2025-10-05 22:56:27', '2025-10-16 16:45:56'),
(22, 75, 'English', 'Copyright © 2025 <a href=\"https://monobenzone.org\" target=\"_blank\">monobenzone.org   -  All Rights Reserved.', '2025-10-05 22:56:27', '2025-11-23 18:03:11'),
(23, 119, 'English', '#e91e63', '2025-10-05 22:57:36', '2025-12-02 04:54:49'),
(24, 120, 'English', '#000000', '2025-10-05 22:57:36', '2025-12-02 04:54:49'),
(25, 121, 'English', '', '2025-10-05 22:57:36', '2025-12-02 04:54:49'),
(26, 147, 'English', '#', '2025-10-13 17:58:44', '2025-10-13 17:58:44'),
(27, 148, 'English', '#', '2025-10-13 17:58:44', '2025-10-13 17:58:44'),
(28, 149, 'English', '#', '2025-10-13 17:58:44', '2025-10-13 17:58:44'),
(29, 150, 'English', '', '2025-10-13 17:58:44', '2025-10-13 17:58:44');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags_translation`
--

CREATE TABLE `tags_translation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tax_classes`
--

CREATE TABLE `tax_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `based_on` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tax_classes_translation`
--

CREATE TABLE `tax_classes_translation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_class_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tax_rates`
--

CREATE TABLE `tax_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_class_id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) NOT NULL,
  `state` varchar(191) NOT NULL,
  `rate` decimal(8,4) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tax_rates_translation`
--

CREATE TABLE `tax_rates_translation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_rate_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` varchar(191) NOT NULL,
  `payment_method` varchar(30) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_data` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `user_type` varchar(20) NOT NULL,
  `role_id` bigint(20) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `profile_picture` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `provider` varchar(191) DEFAULT NULL,
  `provider_id` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `user_type`, `role_id`, `status`, `profile_picture`, `email_verified_at`, `password`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'azursoldev@gmail.com', NULL, 'admin', NULL, 1, 'default.png', '2025-10-05 15:26:01', '$2y$10$1lhHYOZdI8ODmsYLwWMKBOppEYgfgbGh3Iozl9J5sRg0FkgU6NqUy', NULL, NULL, NULL, '2025-10-05 15:26:01', '2025-10-05 15:26:01'),
(2, 'Admin', 'stamna2012@gmail.com', '3123213213', 'admin', NULL, 1, 'default.png', '2025-10-05 15:46:22', '$2y$10$L38KF/zJdzKU3P7wN7zOQOtyz3I/37cnq/tuAyYWSxpkqMVlm8/Bm', NULL, NULL, 'UmBPprDqhiTnnzuDVdfeLhXIYJfZhAHy85a4g4MX4Xzk6BTBiBDucSq7atHt', '2025-10-05 15:46:22', '2025-11-03 02:41:34'),
(3, 'Tracy', 'sssssekjklj@KJklj.com', NULL, 'user', 1, 1, 'default.png', '2025-11-03 02:47:14', '$2y$10$jULK4vqbB3/0rh06X1Gv.uzH4DHkGSuM/tncxDKetDhFg6UfvOWzW', NULL, NULL, NULL, '2025-11-03 02:47:14', '2025-11-03 02:47:14'),
(4, 'Ambar Ramos', 'ingambarramos@gmail.com', '8295544081', 'customer', NULL, 1, 'default.png', '2025-11-09 07:24:30', '$2y$10$BzfD42NoMXx8bO5ayDqlA.ju2L62XCILMA49Sk0yrcgrYiFr4e.WW', NULL, NULL, NULL, '2025-11-09 07:24:30', '2025-11-09 07:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `wish_lists`
--

CREATE TABLE `wish_lists` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wish_lists`
--

INSERT INTO `wish_lists` (`user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(4, 13, '2025-11-09 07:26:58', '2025-11-09 07:26:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `brands_translation`
--
ALTER TABLE `brands_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_translation_brand_id_locale_unique` (`brand_id`,`locale`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_slug_unique` (`slug`);

--
-- Indexes for table `category_translation`
--
ALTER TABLE `category_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_translation_category_id_locale_unique` (`category_id`,`locale`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coupons_code_index` (`code`);

--
-- Indexes for table `coupon_categories`
--
ALTER TABLE `coupon_categories`
  ADD PRIMARY KEY (`coupon_id`,`category_id`,`exclude`),
  ADD KEY `coupon_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `coupon_products`
--
ALTER TABLE `coupon_products`
  ADD PRIMARY KEY (`coupon_id`,`product_id`,`exclude`),
  ADD KEY `coupon_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `coupon_translations`
--
ALTER TABLE `coupon_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupon_translations_coupon_id_locale_unique` (`coupon_id`,`locale`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `database_backups`
--
ALTER TABLE `database_backups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entity_files`
--
ALTER TABLE `entity_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entity_files_entity_type_entity_id_index` (`entity_type`,`entity_id`),
  ADD KEY `entity_files_media_id_index` (`media_id`),
  ADD KEY `entity_files_name_index` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_data`
--
ALTER TABLE `meta_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meta_data_entity_type_entity_id_index` (`entity_type`,`entity_id`);

--
-- Indexes for table `meta_data_translations`
--
ALTER TABLE `meta_data_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `meta_data_translations_meta_data_id_locale_unique` (`meta_data_id`,`locale`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigations`
--
ALTER TABLE `navigations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation_items`
--
ALTER TABLE `navigation_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `navigation_items_parent_id_foreign` (`parent_id`),
  ADD KEY `navigation_items_category_id_foreign` (`category_id`),
  ADD KEY `navigation_items_page_id_foreign` (`page_id`),
  ADD KEY `navigation_items_navigation_id_index` (`navigation_id`);

--
-- Indexes for table `navigation_item_translations`
--
ALTER TABLE `navigation_item_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `navigation_item_translations_navigation_item_id_locale_unique` (`navigation_item_id`,`locale`);

--
-- Indexes for table `nikolag_customers`
--
ALTER TABLE `nikolag_customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nikolag_customers_email_unique` (`email`),
  ADD UNIQUE KEY `pstype_psid` (`payment_service_type`,`payment_service_id`),
  ADD KEY `nikolag_customers_email_index` (`email`);

--
-- Indexes for table `nikolag_customer_user`
--
ALTER TABLE `nikolag_customer_user`
  ADD UNIQUE KEY `oid_cid` (`owner_id`,`customer_id`);

--
-- Indexes for table `nikolag_deductibles`
--
ALTER TABLE `nikolag_deductibles`
  ADD KEY `nikolag_deductibles_index` (`deductible_type`,`deductible_id`),
  ADD KEY `nikolag_featurables_index` (`featurable_type`,`featurable_id`);

--
-- Indexes for table `nikolag_discounts`
--
ALTER TABLE `nikolag_discounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nikolag_discounts_name_index` (`name`);

--
-- Indexes for table `nikolag_orders`
--
ALTER TABLE `nikolag_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nikolag_products`
--
ALTER TABLE `nikolag_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vname_name` (`name`,`variation_name`),
  ADD KEY `nikolag_products_name_index` (`name`),
  ADD KEY `nikolag_products_reference_id_index` (`reference_id`);

--
-- Indexes for table `nikolag_product_order`
--
ALTER TABLE `nikolag_product_order`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prodid_ordid` (`product_id`,`order_id`);

--
-- Indexes for table `nikolag_taxes`
--
ALTER TABLE `nikolag_taxes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_type` (`name`,`type`),
  ADD KEY `nikolag_taxes_name_index` (`name`),
  ADD KEY `nikolag_taxes_type_index` (`type`);

--
-- Indexes for table `nikolag_transactions`
--
ALTER TABLE `nikolag_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nikolag_transactions_status_index` (`status`),
  ADD KEY `nikolag_transactions_payment_service_type_index` (`payment_service_type`),
  ADD KEY `cus_id` (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_order_id_foreign` (`order_id`);

--
-- Indexes for table `order_taxes`
--
ALTER TABLE `order_taxes`
  ADD PRIMARY KEY (`order_id`,`tax_rate_id`),
  ADD KEY `order_taxes_tax_rate_id_foreign` (`tax_rate_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `page_translations`
--
ALTER TABLE `page_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_translations_page_id_locale_unique` (`page_id`,`locale`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`product_id`,`category_id`),
  ADD KEY `product_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_comments_user_id_foreign` (`user_id`),
  ADD KEY `product_comments_product_id_foreign` (`product_id`),
  ADD KEY `product_comments_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_reviews_user_id_foreign` (`user_id`),
  ADD KEY `product_reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`product_id`,`tag_id`),
  ADD KEY `product_tags_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_translations_product_id_locale_unique` (`product_id`,`locale`);

--
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variations_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_variation_items`
--
ALTER TABLE `product_variation_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variation_items_variation_id_foreign` (`variation_id`);

--
-- Indexes for table `product_variation_prices`
--
ALTER TABLE `product_variation_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variation_prices_product_id_foreign` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_translations_setting_id_locale_unique` (`setting_id`,`locale`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indexes for table `tags_translation`
--
ALTER TABLE `tags_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_translation_tag_id_locale_unique` (`tag_id`,`locale`);

--
-- Indexes for table `tax_classes`
--
ALTER TABLE `tax_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_classes_translation`
--
ALTER TABLE `tax_classes_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tax_classes_translation_tax_class_id_locale_unique` (`tax_class_id`,`locale`);

--
-- Indexes for table `tax_rates`
--
ALTER TABLE `tax_rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tax_rates_tax_class_id_index` (`tax_class_id`);

--
-- Indexes for table `tax_rates_translation`
--
ALTER TABLE `tax_rates_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tax_rates_translation_tax_rate_id_locale_unique` (`tax_rate_id`,`locale`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD PRIMARY KEY (`user_id`,`product_id`),
  ADD KEY `wish_lists_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands_translation`
--
ALTER TABLE `brands_translation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `category_translation`
--
ALTER TABLE `category_translation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupon_translations`
--
ALTER TABLE `coupon_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `database_backups`
--
ALTER TABLE `database_backups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `entity_files`
--
ALTER TABLE `entity_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `meta_data`
--
ALTER TABLE `meta_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `meta_data_translations`
--
ALTER TABLE `meta_data_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `navigations`
--
ALTER TABLE `navigations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `navigation_items`
--
ALTER TABLE `navigation_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `navigation_item_translations`
--
ALTER TABLE `navigation_item_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `nikolag_customers`
--
ALTER TABLE `nikolag_customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nikolag_discounts`
--
ALTER TABLE `nikolag_discounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nikolag_orders`
--
ALTER TABLE `nikolag_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nikolag_products`
--
ALTER TABLE `nikolag_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nikolag_product_order`
--
ALTER TABLE `nikolag_product_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nikolag_taxes`
--
ALTER TABLE `nikolag_taxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nikolag_transactions`
--
ALTER TABLE `nikolag_transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `page_translations`
--
ALTER TABLE `page_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_translations`
--
ALTER TABLE `product_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_variation_items`
--
ALTER TABLE `product_variation_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_variation_prices`
--
ALTER TABLE `product_variation_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `setting_translations`
--
ALTER TABLE `setting_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags_translation`
--
ALTER TABLE `tags_translation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_classes`
--
ALTER TABLE `tax_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_classes_translation`
--
ALTER TABLE `tax_classes_translation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_rates`
--
ALTER TABLE `tax_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_rates_translation`
--
ALTER TABLE `tax_rates_translation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brands_translation`
--
ALTER TABLE `brands_translation`
  ADD CONSTRAINT `brands_translation_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_translation`
--
ALTER TABLE `category_translation`
  ADD CONSTRAINT `category_translation_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coupon_categories`
--
ALTER TABLE `coupon_categories`
  ADD CONSTRAINT `coupon_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `coupon_categories_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coupon_products`
--
ALTER TABLE `coupon_products`
  ADD CONSTRAINT `coupon_products_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `coupon_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coupon_translations`
--
ALTER TABLE `coupon_translations`
  ADD CONSTRAINT `coupon_translations_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `entity_files`
--
ALTER TABLE `entity_files`
  ADD CONSTRAINT `entity_files_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `meta_data_translations`
--
ALTER TABLE `meta_data_translations`
  ADD CONSTRAINT `meta_data_translations_meta_data_id_foreign` FOREIGN KEY (`meta_data_id`) REFERENCES `meta_data` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `navigation_items`
--
ALTER TABLE `navigation_items`
  ADD CONSTRAINT `navigation_items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `navigation_items_navigation_id_foreign` FOREIGN KEY (`navigation_id`) REFERENCES `navigations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `navigation_items_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `navigation_items_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `navigation_items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `navigation_item_translations`
--
ALTER TABLE `navigation_item_translations`
  ADD CONSTRAINT `navigation_item_translations_navigation_item_id_foreign` FOREIGN KEY (`navigation_item_id`) REFERENCES `navigation_items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nikolag_product_order`
--
ALTER TABLE `nikolag_product_order`
  ADD CONSTRAINT `prod_id` FOREIGN KEY (`product_id`) REFERENCES `nikolag_products` (`id`);

--
-- Constraints for table `nikolag_transactions`
--
ALTER TABLE `nikolag_transactions`
  ADD CONSTRAINT `cus_id` FOREIGN KEY (`customer_id`) REFERENCES `nikolag_customers` (`id`);

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_taxes`
--
ALTER TABLE `order_taxes`
  ADD CONSTRAINT `order_taxes_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_taxes_tax_rate_id_foreign` FOREIGN KEY (`tax_rate_id`) REFERENCES `tax_rates` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page_translations`
--
ALTER TABLE `page_translations`
  ADD CONSTRAINT `page_translations_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD CONSTRAINT `product_comments_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `product_comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD CONSTRAINT `product_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD CONSTRAINT `product_tags_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD CONSTRAINT `product_variations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_variation_items`
--
ALTER TABLE `product_variation_items`
  ADD CONSTRAINT `product_variation_items_variation_id_foreign` FOREIGN KEY (`variation_id`) REFERENCES `product_variations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_variation_prices`
--
ALTER TABLE `product_variation_prices`
  ADD CONSTRAINT `product_variation_prices_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD CONSTRAINT `setting_translations_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tags_translation`
--
ALTER TABLE `tags_translation`
  ADD CONSTRAINT `tags_translation_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tax_classes_translation`
--
ALTER TABLE `tax_classes_translation`
  ADD CONSTRAINT `tax_classes_translation_tax_class_id_foreign` FOREIGN KEY (`tax_class_id`) REFERENCES `tax_classes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tax_rates`
--
ALTER TABLE `tax_rates`
  ADD CONSTRAINT `tax_rates_tax_class_id_foreign` FOREIGN KEY (`tax_class_id`) REFERENCES `tax_classes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tax_rates_translation`
--
ALTER TABLE `tax_rates_translation`
  ADD CONSTRAINT `tax_rates_translation_tax_rate_id_foreign` FOREIGN KEY (`tax_rate_id`) REFERENCES `tax_rates` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD CONSTRAINT `wish_lists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wish_lists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
