-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2025 at 07:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosmetics`
--

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
(1, 'electronic-devices', NULL, '2020-11-02 11:24:37', '2020-11-02 11:24:37'),
(2, 'desktop-components', NULL, '2020-11-02 11:24:51', '2020-11-02 11:27:43'),
(3, 'health-&-beauty', NULL, '2020-11-02 11:25:14', '2020-11-02 11:25:14'),
(4, 'men\'s-fashion', NULL, '2020-11-02 11:25:30', '2020-11-02 11:25:30'),
(5, 'women\'s-fashion', NULL, '2020-11-02 11:25:47', '2020-11-02 11:25:47'),
(6, 'sports-&-outdoor', NULL, '2020-11-02 11:26:02', '2020-11-02 11:26:02'),
(7, 'mobile', 1, '2020-11-02 11:26:23', '2020-11-02 11:26:23'),
(8, 'laptop', 1, '2020-11-02 11:26:33', '2020-11-02 11:26:33'),
(9, 'cameras', 1, '2020-11-02 11:26:46', '2020-11-02 11:26:46'),
(10, 'tablets', 1, '2020-11-02 11:27:06', '2020-11-02 11:27:06'),
(11, 'hair-care', 3, '2020-11-02 11:28:18', '2020-11-02 11:28:18'),
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
(24, 'software', NULL, '2020-11-03 08:04:57', '2020-11-03 08:04:57'),
(25, 'motherboard', 2, '2021-03-08 02:57:19', '2021-03-08 02:57:19'),
(26, 'adobe-photoshop', 24, '2021-03-08 02:57:33', '2021-03-08 02:57:33'),
(28, 'watch-&-accessories', NULL, '2021-03-22 09:39:45', '2021-03-22 09:39:45'),
(29, 'tv-&-home-appliances', NULL, '2021-03-22 09:40:15', '2021-03-22 09:40:15'),
(30, 'home-&-lifestyle', NULL, '2021-03-22 09:40:35', '2021-03-22 09:40:35');

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
(1, 1, 'English', 'Electronic Devices', NULL, '2020-11-02 11:24:37', '2020-11-02 11:24:37'),
(2, 2, 'English', 'Desktop Components', NULL, '2020-11-02 11:24:51', '2020-11-02 11:27:43'),
(3, 3, 'English', 'Health & Beauty', NULL, '2020-11-02 11:25:14', '2020-11-02 11:25:14'),
(4, 4, 'English', 'Men\'s Fashion', NULL, '2020-11-02 11:25:30', '2020-11-02 11:25:30'),
(5, 5, 'English', 'Women\'s Fashion', NULL, '2020-11-02 11:25:47', '2020-11-02 11:25:47'),
(6, 6, 'English', 'Sports & Outdoor', NULL, '2020-11-02 11:26:02', '2020-11-02 11:26:02'),
(7, 7, 'English', 'Mobile', NULL, '2020-11-02 11:26:23', '2020-11-02 11:26:23'),
(8, 8, 'English', 'Laptop', NULL, '2020-11-02 11:26:33', '2020-11-02 11:26:33'),
(9, 9, 'English', 'Cameras', NULL, '2020-11-02 11:26:46', '2020-11-02 11:26:46'),
(10, 10, 'English', 'Tablets', NULL, '2020-11-02 11:27:06', '2020-11-02 11:27:06'),
(11, 11, 'English', 'Hair Care', NULL, '2020-11-02 11:28:18', '2020-11-02 11:28:18'),
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
(24, 24, 'English', 'Software', NULL, '2020-11-03 08:04:57', '2020-11-03 08:04:57'),
(25, 25, 'English', 'Motherboard', NULL, '2021-03-08 02:57:19', '2021-03-08 02:57:19'),
(26, 26, 'English', 'Adobe Photoshop', NULL, '2021-03-08 02:57:33', '2021-03-08 02:57:33'),
(28, 28, 'English', 'Watch & Accessories', NULL, '2021-03-22 09:39:45', '2021-03-22 09:39:45'),
(29, 29, 'English', 'Tv & Home Appliances', NULL, '2021-03-22 09:40:15', '2021-03-22 09:40:15'),
(30, 30, 'English', 'Home & LifeStyle', NULL, '2021-03-22 09:40:35', '2021-03-22 09:40:35');

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
(1, 'USD', 1, 1.000000, 1, NULL, NULL),
(2, 'EUR', 0, 0.850000, 1, NULL, NULL),
(3, 'INR', 0, 72.450000, 1, NULL, NULL);

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
(7, 'order_refunded', 'Money Refunded', '<p>Your Order Money has been refunded.</p>', NULL, NULL);

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
(1, 1, 'App\\Entity\\Product\\Product', 2, 'product_image', '2025-11-15 02:00:28', '2025-11-15 02:00:28');

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
(1, 'introduce5.jpg', 'media/21JDNRCtVAFd6cfwX1Y8CiCfPTutttszJOua3wUw.jpg', 'image/jpeg', '5263', 'jpg', 1, '2025-11-15 02:00:14', '2025-11-15 02:00:14');

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
(1, 'App\\Entity\\Product\\Product', 1, '2025-10-28 16:29:01', '2025-10-28 16:29:01'),
(2, 'App\\Entity\\Product\\Product', 2, '2025-10-31 17:04:19', '2025-10-31 17:04:19');

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
(1, 1, 'English', NULL, NULL, NULL),
(2, 2, 'English', NULL, NULL, NULL);

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
(1, 1, 'dynamic_url', NULL, NULL, '/', '<i class=\"ti-home\"></i>', '_self', NULL, 1, 1, NULL, NULL, '2021-03-15 10:58:36', '2021-03-17 02:44:18'),
(2, 1, 'dynamic_url', NULL, NULL, '/shop', '<i class=\"ti-shopping-cart\"></i>', '_self', NULL, 2, 1, NULL, NULL, '2021-03-15 10:59:23', '2021-03-17 02:51:45'),
(3, 1, 'dynamic_url', NULL, NULL, '/brands', '<i class=\"ti-apple\"></i>', '_self', NULL, 3, 1, NULL, NULL, '2021-03-15 10:59:37', '2021-03-17 02:52:58'),
(4, 1, 'page', 1, NULL, NULL, '<i class=\"ti-user\"></i>', '_self', NULL, 4, 1, NULL, NULL, '2021-03-15 10:59:59', '2021-03-17 02:53:24'),
(5, 1, 'page', 2, NULL, NULL, '<i class=\"ti-email\"></i>', '_self', NULL, 5, 1, NULL, NULL, '2021-03-15 11:00:13', '2021-03-17 02:54:08'),
(9, 2, 'category', NULL, 1, NULL, NULL, '_self', NULL, 1, 1, NULL, NULL, '2021-03-17 04:34:06', '2021-03-17 04:38:56'),
(10, 2, 'category', NULL, 7, NULL, NULL, '_self', 9, 2, 1, NULL, NULL, '2021-03-17 04:37:14', '2021-03-17 04:38:56'),
(11, 2, 'category', NULL, 8, NULL, NULL, '_self', 9, 3, 1, NULL, NULL, '2021-03-17 04:37:30', '2021-03-17 04:38:56'),
(12, 2, 'category', NULL, 9, NULL, NULL, '_self', 9, 4, 1, NULL, NULL, '2021-03-17 04:37:44', '2021-03-17 04:38:56'),
(13, 2, 'category', NULL, 10, NULL, NULL, '_self', 9, 5, 1, NULL, NULL, '2021-03-17 04:37:58', '2021-03-17 04:38:56'),
(14, 2, 'category', NULL, 2, NULL, NULL, '_self', NULL, 2, 1, NULL, NULL, '2021-03-17 04:38:48', '2021-03-17 04:38:56'),
(15, 2, 'category', NULL, 25, NULL, NULL, '_self', 14, 3, 1, NULL, NULL, '2021-03-17 04:39:09', '2021-03-17 04:39:17'),
(16, 2, 'category', NULL, 3, NULL, NULL, '_self', NULL, 3, 1, NULL, NULL, '2021-03-17 04:40:01', '2021-03-17 04:40:13'),
(17, 2, 'category', NULL, 11, NULL, NULL, '_self', 16, 4, 1, NULL, NULL, '2021-03-17 04:41:06', '2021-03-17 04:47:08'),
(18, 2, 'category', NULL, 12, NULL, NULL, '_self', 16, 5, 1, NULL, NULL, '2021-03-17 04:47:26', '2021-03-17 04:47:34'),
(19, 2, 'category', NULL, 13, NULL, NULL, '_self', 16, 6, 1, NULL, NULL, '2021-03-17 04:47:54', '2021-03-17 04:48:24'),
(20, 2, 'category', NULL, 4, NULL, NULL, '_self', NULL, 4, 1, NULL, NULL, '2021-03-17 04:48:19', '2021-03-17 04:48:24'),
(21, 2, 'category', NULL, 14, NULL, NULL, '_self', 20, 5, 1, NULL, NULL, '2021-03-17 04:48:49', '2021-03-17 04:49:23'),
(22, 2, 'category', NULL, 15, NULL, NULL, '_self', 20, 6, 1, NULL, NULL, '2021-03-17 04:49:01', '2021-03-17 04:49:24'),
(23, 2, 'category', NULL, 16, NULL, NULL, '_self', 20, 7, 1, NULL, NULL, '2021-03-17 04:49:13', '2021-03-17 04:49:24'),
(24, 2, 'category', NULL, 5, NULL, NULL, '_self', NULL, 5, 1, NULL, NULL, '2021-03-17 05:04:48', '2021-03-17 05:06:17'),
(25, 2, 'category', NULL, 6, NULL, NULL, '_self', NULL, 6, 1, NULL, NULL, '2021-03-17 05:05:12', '2021-03-17 05:06:17'),
(26, 2, 'category', NULL, 24, NULL, NULL, '_self', NULL, 7, 1, NULL, NULL, '2021-03-17 05:05:26', '2021-03-17 05:06:17'),
(27, 2, 'category', NULL, 18, NULL, NULL, '_self', 24, 6, 1, NULL, NULL, '2021-03-17 05:06:36', '2021-03-17 05:07:26'),
(28, 2, 'category', NULL, 19, NULL, NULL, '_self', 24, 7, 1, NULL, NULL, '2021-03-17 05:06:57', '2021-03-17 05:07:26'),
(29, 2, 'category', NULL, 20, NULL, NULL, '_self', 24, 8, 1, NULL, NULL, '2021-03-17 05:07:13', '2021-03-17 05:07:26'),
(30, 3, 'page', 1, NULL, NULL, NULL, '_self', NULL, 1, 1, NULL, NULL, '2021-03-17 07:47:37', '2021-03-17 07:56:21'),
(31, 3, 'page', 5, NULL, NULL, NULL, '_self', NULL, 2, 1, NULL, NULL, '2021-03-17 07:47:51', '2021-03-17 07:56:21'),
(32, 3, 'page', 6, NULL, NULL, NULL, '_self', NULL, 3, 1, NULL, NULL, '2021-03-17 07:48:06', '2021-03-17 07:56:21'),
(33, 3, 'page', 2, NULL, NULL, NULL, '_self', NULL, 5, 1, NULL, NULL, '2021-03-17 07:53:24', '2021-03-17 07:56:22'),
(34, 3, 'page', 10, NULL, NULL, NULL, '_self', NULL, 4, 1, NULL, NULL, '2021-03-17 07:56:16', '2021-03-17 07:56:22'),
(35, 4, 'page', 7, NULL, NULL, NULL, '_self', NULL, 9999, 1, NULL, NULL, '2021-03-17 08:36:27', '2021-03-17 08:36:27'),
(36, 4, 'page', 8, NULL, NULL, NULL, '_self', NULL, 9999, 1, NULL, NULL, '2021-03-17 08:36:46', '2021-03-17 08:36:46'),
(37, 4, 'page', 9, NULL, NULL, NULL, '_self', NULL, 9999, 1, NULL, NULL, '2021-03-17 08:37:00', '2021-03-17 08:37:00'),
(38, 4, 'page', 11, NULL, NULL, NULL, '_self', NULL, 9999, 1, NULL, NULL, '2021-03-17 08:37:53', '2021-03-17 08:37:53'),
(39, 2, 'category', NULL, 28, NULL, NULL, '_self', NULL, 8, 1, NULL, NULL, '2021-03-22 09:41:16', '2021-03-22 09:42:04'),
(40, 2, 'category', NULL, 29, NULL, NULL, '_self', NULL, 9, 1, NULL, NULL, '2021-03-22 09:41:40', '2021-03-22 09:42:04'),
(41, 2, 'category', NULL, 30, NULL, NULL, '_self', NULL, 10, 1, NULL, NULL, '2021-03-22 09:41:59', '2021-03-22 09:42:04');

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
(2, 2, 'English', 'Shop', '2021-03-15 10:59:23', '2021-03-15 10:59:23'),
(3, 3, 'English', 'Brands', '2021-03-15 10:59:37', '2021-03-15 10:59:37'),
(4, 4, 'English', 'About Us', '2021-03-15 10:59:59', '2021-03-15 10:59:59'),
(5, 5, 'English', 'Contact Us', '2021-03-15 11:00:13', '2021-03-15 11:00:13'),
(9, 9, 'English', 'Electronic Devices', '2021-03-17 04:34:06', '2021-03-17 04:34:06'),
(10, 10, 'English', 'Mobile', '2021-03-17 04:37:14', '2021-03-17 04:37:14'),
(11, 11, 'English', 'Laptop', '2021-03-17 04:37:30', '2021-03-17 04:37:30'),
(12, 12, 'English', 'Cameras', '2021-03-17 04:37:44', '2021-03-17 04:37:44'),
(13, 13, 'English', 'Tablets', '2021-03-17 04:37:58', '2021-03-17 04:37:58'),
(14, 14, 'English', 'Desktop Components', '2021-03-17 04:38:48', '2021-03-17 04:38:48'),
(15, 15, 'English', 'Motherboard', '2021-03-17 04:39:09', '2021-03-17 04:39:09'),
(16, 16, 'English', 'Health & Beauty', '2021-03-17 04:40:01', '2021-03-17 04:40:01'),
(17, 17, 'English', 'Hair Care', '2021-03-17 04:41:06', '2021-03-17 04:41:06'),
(18, 18, 'English', 'Skin Care', '2021-03-17 04:47:26', '2021-03-17 04:47:26'),
(19, 19, 'English', 'Food Supplements', '2021-03-17 04:47:54', '2021-03-17 04:47:54'),
(20, 20, 'English', 'Men\'s Fashion', '2021-03-17 04:48:19', '2021-03-17 04:48:19'),
(21, 21, 'English', 'T-Shirts', '2021-03-17 04:48:49', '2021-03-17 04:48:49'),
(22, 22, 'English', 'Shirts', '2021-03-17 04:49:01', '2021-03-17 04:49:01'),
(23, 23, 'English', 'Jeans', '2021-03-17 04:49:13', '2021-03-17 04:49:13'),
(24, 24, 'English', 'Women\'s Fashion', '2021-03-17 05:04:48', '2021-03-17 05:04:48'),
(25, 25, 'English', 'Sports & Outdoor', '2021-03-17 05:05:12', '2021-03-17 05:05:12'),
(26, 26, 'English', 'Software', '2021-03-17 05:05:26', '2021-03-17 05:05:26'),
(27, 27, 'English', 'Women\'s Bags', '2021-03-17 05:06:36', '2021-03-17 05:06:36'),
(28, 28, 'English', 'Women\'s Shoes', '2021-03-17 05:06:57', '2021-03-17 05:06:57'),
(29, 29, 'English', 'Kurti', '2021-03-17 05:07:13', '2021-03-17 05:07:13'),
(30, 30, 'English', 'About Us', '2021-03-17 07:47:37', '2021-03-17 07:47:37'),
(31, 31, 'English', 'FAQ', '2021-03-17 07:47:51', '2021-03-17 07:47:51'),
(32, 32, 'English', 'Terms & Conditions', '2021-03-17 07:48:06', '2021-03-17 07:48:06'),
(33, 33, 'English', 'Contact Us', '2021-03-17 07:53:24', '2021-03-17 07:53:24'),
(34, 34, 'English', 'Privacy Policy', '2021-03-17 07:56:16', '2021-03-17 07:56:16'),
(35, 35, 'English', 'Payment Methods', '2021-03-17 08:36:27', '2021-03-17 08:36:27'),
(36, 36, 'English', 'Money Back', '2021-03-17 08:36:46', '2021-03-17 08:36:46'),
(37, 37, 'English', 'Return', '2021-03-17 08:37:00', '2021-03-17 08:37:00'),
(38, 38, 'English', 'Shipping', '2021-03-17 08:37:53', '2021-03-17 08:37:53'),
(39, 39, 'English', 'Watch & Accessories', '2021-03-22 09:41:16', '2021-03-22 09:41:16'),
(40, 40, 'English', 'Tv & Home Applicances', '2021-03-22 09:41:40', '2021-03-22 09:41:40'),
(41, 41, 'English', 'Home & LifeStyle', '2021-03-22 09:41:59', '2021-03-22 09:41:59');

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
  `customer_phone` varchar(191) NOT NULL,
  `billing_name` varchar(191) NOT NULL,
  `billing_city` varchar(191) DEFAULT NULL,
  `billing_state` varchar(191) NOT NULL,
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
(1, 1, 'English', 'About US', '<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2021-03-15 05:28:46', '2021-03-15 05:28:46'),
(2, 2, 'English', 'Contact Us', NULL, '2021-03-15 05:29:26', '2021-03-15 05:29:26'),
(5, 5, 'English', 'FAQ', '<p>This is FAQ Page</p>', '2021-03-17 07:43:29', '2021-03-17 07:43:29'),
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
(1, NULL, NULL, 'test-11', 'simple_product', 111.00, NULL, NULL, NULL, NULL, 0, NULL, 1, 9, 1, NULL, '', '2025-10-28 16:29:01', '2025-11-21 02:33:19'),
(2, NULL, NULL, 'demo', 'simple_product', 222.00, NULL, NULL, NULL, NULL, 0, NULL, 1, 21, 1, NULL, '', '2025-10-31 17:04:19', '2025-12-01 18:43:26');

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
(1, 7),
(2, 1);

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
(1, 1, 'English', 'test', '<p>test</p>', 'test', '2025-10-28 16:29:01', '2025-10-28 16:29:01'),
(2, 2, 'English', 'demo product', '<p>demo product</p>', NULL, '2025-10-31 17:04:19', '2025-10-31 17:04:19');

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
(1, 'mail_type', 'smtp', NULL, NULL),
(2, 'backend_direction', 'ltr', NULL, NULL),
(3, 'language', 'English', NULL, NULL),
(4, 'email_verification', 'disabled', NULL, NULL),
(5, 'company_name', 'Cosmetics', '2025-10-05 15:26:36', '2025-10-05 15:26:36'),
(6, 'site_title', 'Cosmetics', '2025-10-05 15:26:36', '2025-10-05 15:26:36'),
(7, 'phone', '03343388870', '2025-10-05 15:26:36', '2025-10-05 15:26:36'),
(8, 'email', 'azursoldev@gmail.com', '2025-10-05 15:26:37', '2025-10-05 15:26:37'),
(9, 'timezone', 'Asia/Karachi', '2025-10-05 15:26:37', '2025-10-05 15:26:37'),
(68, 'primary_menu', '1', '2021-03-16 11:45:35', '2021-03-22 02:39:21'),
(69, 'category_menu', '2', '2021-03-16 11:45:35', '2021-03-22 02:39:21'),
(70, 'footer_menu_1_title', 'Information', '2021-03-16 11:45:35', '2021-03-22 02:52:49'),
(71, 'footer_menu_1', '3', '2021-03-16 11:45:35', '2021-03-22 02:39:22'),
(72, 'footer_menu_2_title', 'Customer Service', '2021-03-16 11:45:35', '2021-03-22 03:00:36'),
(73, 'footer_menu_2', '4', '2021-03-16 11:45:35', '2021-03-22 02:39:22'),
(74, 'footer_about_us', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2021-03-16 11:49:23', '2021-03-17 06:36:51'),
(75, 'copyright_text', 'Copyright © 2020 <a href=\"#\" target=\"_blank\">Tricky Code</a>  -  All Rights Reserved.', '2021-03-16 11:49:23', '2021-03-17 06:36:51'),
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
(91, 'hero_title', '<span>UP TO 30% OFF</span> MacBook', '2021-03-30 16:41:43', '2021-03-30 16:41:43'),
(92, 'hero_content', 'The Apple M1 chip gives the 13‑inch MacBook Pro speed and power beyond belief. With up to 2.8x CPU performance. Up to 5x the graphics speed. ', '2021-03-30 16:41:43', '2021-03-30 16:50:49'),
(93, 'hero_button_text', 'Shop Now', '2021-03-30 16:41:43', '2021-03-30 16:41:43'),
(94, 'hero_button_link', '#', '2021-03-30 16:41:43', '2021-03-30 16:41:43'),
(95, 'hero_banner', 'file_6917cbc331344.jpg', '2025-11-15 00:39:31', '2025-11-15 00:39:31'),
(96, 'flat_rate_active', 'Yes', '2025-11-21 18:33:09', '2025-11-21 18:33:09'),
(97, 'flat_rate_label', 'Flat Rate', '2025-11-21 18:33:09', '2025-11-21 18:33:09'),
(98, 'flat_rate_cost', '55', '2025-11-21 18:33:09', '2025-11-21 18:33:09');

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
(1, 91, 'English', '<span>UP TO 30% OFF</span> MacBook', '2025-11-15 00:39:30', '2025-11-15 00:39:30'),
(2, 92, 'English', 'The Apple M1 chip gives the 13‑inch MacBook Pro speed and power beyond belief. With up to 2.8x CPU performance. Up to 5x the graphics speed. ', '2025-11-15 00:39:30', '2025-11-15 00:39:30'),
(3, 93, 'English', 'Shop Now', '2025-11-15 00:39:30', '2025-11-15 00:39:30'),
(4, 94, 'English', '#', '2025-11-15 00:39:31', '2025-11-15 00:39:31');

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
(1, 'Admin', 'azursoldev@gmail.com', NULL, 'admin', NULL, 1, 'default.png', '2025-10-05 15:26:01', '$2y$10$1lhHYOZdI8ODmsYLwWMKBOppEYgfgbGh3Iozl9J5sRg0FkgU6NqUy', NULL, NULL, 'C8StlEzVw839lUulioTUoLeK4cSwpJo7uu9pu2h2qLdaT5GvQ5LM2dGwVxRe', '2025-10-05 15:26:01', '2025-10-05 15:26:01');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `category_translation`
--
ALTER TABLE `category_translation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `database_backups`
--
ALTER TABLE `database_backups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `entity_files`
--
ALTER TABLE `entity_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meta_data`
--
ALTER TABLE `meta_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meta_data_translations`
--
ALTER TABLE `meta_data_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `navigation_item_translations`
--
ALTER TABLE `navigation_item_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_translations`
--
ALTER TABLE `product_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `setting_translations`
--
ALTER TABLE `setting_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
