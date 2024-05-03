-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2024 at 03:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attribute_group_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `attribute_group_id`, `attribute_name`, `color_code`, `created_at`, `updated_at`) VALUES
(3, 1, 'White', '#836363', '2020-11-18 03:50:43', '2020-11-18 03:50:43'),
(4, 1, 'Green', '#c18a8a', '2020-11-18 03:50:53', '2020-11-18 03:50:53'),
(5, 3, 'S', NULL, '2020-11-18 03:51:17', '2020-11-18 03:51:17'),
(7, 3, 'L', NULL, '2020-11-18 03:51:43', '2020-11-18 03:51:43'),
(8, 4, '200', NULL, '2021-03-20 09:12:23', '2021-03-20 09:16:02'),
(9, 4, '1000', NULL, '2021-03-20 09:12:33', '2021-03-20 09:12:33');

-- --------------------------------------------------------

--
-- Table structure for table `attributes_group`
--

CREATE TABLE `attributes_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attribute_group_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_image`, `created_at`, `updated_at`) VALUES
(1, 'GBS AGRO', '', '2022-02-20 11:29:59', '2022-02-20 11:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `brand_id` int(11) NOT NULL,
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_cover_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_thumbnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_menu_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `brand_id`, `category_name`, `slug`, `category_description`, `category_cover_image`, `category_thumbnail`, `category_menu_image`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, NULL, 0, 'Product', 'man', NULL, NULL, NULL, 'category/category_menu/bxCF3nne0u7267Fa0UyMcbdU1brCCJ4wQWGXlgBa.jpg', NULL, NULL, NULL, '2022-02-20 05:12:23', '2022-02-20 05:12:23'),
(2, NULL, 0, 'Service', 'service', NULL, NULL, NULL, 'category/category_menu/GjJRHrhRIMClOQx4jRKC0pYogeLjEue8KMBlqIAT.png', NULL, NULL, NULL, '2022-02-20 05:13:52', '2022-02-20 05:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_2` varchar(100) DEFAULT NULL,
  `phone_1` varchar(55) DEFAULT NULL,
  `phone_2` varchar(55) DEFAULT NULL,
  `address_1` text DEFAULT NULL,
  `address_2` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `fb_link` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `twiter_link` varchar(255) DEFAULT NULL,
  `about_vedio` varchar(255) DEFAULT NULL,
  `about_us` text DEFAULT NULL,
  `our_mission` text DEFAULT NULL,
  `our_vission` text DEFAULT NULL,
  `privacy_policy` text DEFAULT NULL,
  `trams_condition` text DEFAULT NULL,
  `licence_agreement` text DEFAULT NULL,
  `hr_policies` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `email`, `email_2`, `phone_1`, `phone_2`, `address_1`, `address_2`, `logo`, `fb_link`, `youtube_link`, `twiter_link`, `about_vedio`, `about_us`, `our_mission`, `our_vission`, `privacy_policy`, `trams_condition`, `licence_agreement`, `hr_policies`) VALUES
(1, 'PMS BD', 'info@pms-bd.com', NULL, '+88 018201010', NULL, 'North Kattali', NULL, 'logo/FZA5HNMDI0JycFcYpuaCI4ZoUcc88OF0Rc7clg0M.jpg', NULL, NULL, NULL, '//www.youtube.com/embed/o-LKhdu7mX4', NULL, '<p>Our principle is to combine strategic supply Chain with quality products at competitive prices through superior customer service and innovation.</p>', '<p>Creating value chain with integrated service to improve quality of lives.</p>', 'asdfasdfsa', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(4, '2020_10_05_182442_create_sliders_table', 2),
(5, '2020_10_06_182347_create_features_table', 3),
(6, '2020_10_06_182419_create_blogs_table', 3),
(7, '2020_10_06_182500_create_services_table', 3),
(8, '2021_02_02_172950_create_customers_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_tag` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_image`, `page_title`, `page_text`, `page_tag`, `created_at`, `updated_at`) VALUES
(1, 'pages/7sFp3Cl2dbQV2vwySjQde9eZKtkW2gECc7DzG835.jpg', 'About PMS', '<p class=\"text-justify\">Peninsula Marine is a Bangladesh based maritime services group specializing in the provision of general ship supplies, stores, bunkering, lube oil, spare parts, ship repair, cleaning solutions and leading maritime brands through its extensive network all Bangladeshi Ports.</p>\r\n                            <p class=\"text-justify\">Over the decades, Peninsula Marine has strived to be a trusted partner in commercial shipping sector. Founded in 2008, Peninsula Marine operates throughout all Bangladeshi Ports focused on delivering exceptional customer services.</p>', 'about-us', '2020-12-02 11:20:00', '2022-04-03 12:54:34'),
(2, '', 'Chittagong Prot', '<p class=\"text-justify\">Peninsula Marine is a Bangladesh based maritime services group specializing in the provision of general ship supplies, stores, bunkering, lube oil, spare parts, ship repair, cleaning solutions and leading maritime brands through its extensive network all Bangladeshi Ports.</p>\r\n                            <p class=\"text-justify\">Over the decades, Peninsula Marine has strived to be a trusted partner in commercial shipping sector. Founded in 2008, Peninsula Marine operates throughout all Bangladeshi Ports focused on delivering exceptional customer services.</p>', 'chittagong-port', '2020-12-02 11:20:00', '2022-04-03 12:54:34'),
(3, '', 'Mongla Prot', '<p class=\"text-justify\">Peninsula Marine is a Bangladesh based maritime services group specializing in the provision of general ship supplies, stores, bunkering, lube oil, spare parts, ship repair, cleaning solutions and leading maritime brands through its extensive network all Bangladeshi Ports.</p>\r\n                            <p class=\"text-justify\">Over the decades, Peninsula Marine has strived to be a trusted partner in commercial shipping sector. Founded in 2008, Peninsula Marine operates throughout all Bangladeshi Ports focused on delivering exceptional customer services.</p>', 'mongla-port', '2020-12-02 11:20:00', '2022-04-03 12:54:34'),
(4, '', 'Payra Prot', '<p class=\"text-justify\">Peninsula Marine is a Bangladesh based maritime services group specializing in the provision of general ship supplies, stores, bunkering, lube oil, spare parts, ship repair, cleaning solutions and leading maritime brands through its extensive network all Bangladeshi Ports.</p>\r\n                            <p class=\"text-justify\">Over the decades, Peninsula Marine has strived to be a trusted partner in commercial shipping sector. Founded in 2008, Peninsula Marine operates throughout all Bangladeshi Ports focused on delivering exceptional customer services.</p>', 'payra-port', '2020-12-02 11:20:00', '2022-04-03 12:54:34');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `section_name`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Vendor', 'Add Vendor', 'add-vendor', '2020-09-16 17:43:19', '2020-09-27 21:17:10'),
(2, 'Vendor', 'Edit Vendor', 'edit-vendor', '2020-09-21 23:15:43', '2020-09-22 16:19:56'),
(3, 'Vendor', 'Delete Vendor', 'delete-vendor', '2020-09-21 23:16:07', '2020-09-21 23:16:07'),
(4, 'Vendor', 'View Vendor', 'view-vendor', '2020-09-21 23:16:20', '2020-09-22 16:20:19'),
(5, 'Users', 'Add User', 'add-user', '2020-09-22 16:18:37', '2020-09-22 16:18:37'),
(6, 'Users', 'Edit User', 'edit-user', '2020-09-22 16:19:26', '2020-09-22 16:19:26'),
(7, 'Users', 'Delete User', 'delete-user', '2020-09-22 16:19:41', '2020-09-22 16:19:41'),
(8, 'Users', 'View User', 'view-user', '2020-09-22 16:20:38', '2020-09-22 16:20:38'),
(9, 'Customer', 'Add Customer', 'add-customer', '2020-09-22 16:22:42', '2020-09-22 16:22:42'),
(10, 'Customer', 'Edit Customer', 'edit-customer', '2020-09-22 16:22:54', '2020-09-22 16:22:54'),
(11, 'Customer', 'Delete Customer', 'delete-customer', '2020-09-22 16:23:10', '2020-09-22 16:23:10'),
(12, 'Customer', 'View Customer', 'view-customer', '2020-09-22 16:23:27', '2020-09-22 16:23:27'),
(13, 'Role', 'Add Role', 'add-role', '2020-09-27 20:54:28', '2020-09-27 20:54:28'),
(14, 'Role', 'Edit Role', 'edit-role', '2020-09-27 20:54:28', '2020-09-27 20:54:28'),
(15, 'Role', 'Delete Role', 'delete-role', '2020-09-27 20:54:28', '2020-09-27 20:54:28'),
(16, 'Role', 'View Role', 'view-role', '2020-09-27 20:54:28', '2020-09-27 20:54:28'),
(17, 'Slider', 'Add Slider', 'add-slider', '2020-10-05 16:20:24', '2020-10-05 16:20:24'),
(18, 'Slider', 'Edit Slider', 'edit-slider', '2020-10-05 16:20:24', '2020-10-05 16:20:24'),
(19, 'Slider', 'Delete Slider', 'delete-slider', '2020-10-05 16:20:24', '2020-10-05 16:20:24'),
(20, 'Slider', 'View Slider', 'view-slider', '2020-10-05 16:20:24', '2020-10-05 16:20:24'),
(21, 'Brand', 'Add Brand', 'add-brand', '2020-10-05 16:21:02', '2020-10-05 16:21:02'),
(22, 'Brand', 'Edit Brand', 'edit-brand', '2020-10-05 16:21:02', '2020-10-05 16:21:02'),
(23, 'Brand', 'Delete Brand', 'delete-brand', '2020-10-05 16:21:02', '2020-10-05 16:21:02'),
(24, 'Brand', 'View Brand', 'view-brand', '2020-10-05 16:21:02', '2020-10-05 16:21:02'),
(25, 'Category', 'Add Category', 'add-category', '2020-10-05 16:22:27', '2020-10-05 16:22:27'),
(26, 'Category', 'Edit Category', 'edit-category', '2020-10-05 16:22:27', '2020-10-05 16:22:27'),
(27, 'Category', 'Delete Category', 'delete-category', '2020-10-05 16:22:27', '2020-10-05 16:22:27'),
(28, 'Category', 'View Category', 'view-category', '2020-10-05 16:22:27', '2020-10-05 16:22:27'),
(29, 'Attribute', 'Add Attribute', 'add-attribute', '2020-10-05 16:23:11', '2020-10-05 16:23:11'),
(30, 'Attribute', 'Edit Attribute', 'edit-attribute', '2020-10-05 16:23:11', '2020-10-05 16:23:11'),
(31, 'Attribute', 'Delete Attribute', 'delete-attribute', '2020-10-05 16:23:11', '2020-10-05 16:23:11'),
(32, 'Attribute', 'View Attribute', 'view-attribute', '2020-10-05 16:23:11', '2020-10-05 16:23:11'),
(33, 'Product', 'Add Product', 'add-product', '2020-10-05 16:24:12', '2020-10-05 16:24:12'),
(34, 'Product', 'Edit Product', 'edit-product', '2020-10-05 16:24:12', '2020-10-05 16:24:12'),
(35, 'Product', 'Delete Product', 'delete-product', '2020-10-05 16:24:12', '2020-10-05 16:24:12'),
(36, 'Product', 'View Product', 'view-product', '2020-10-05 16:24:12', '2020-10-05 16:24:12'),
(37, 'Setting', 'View Setting', 'view-setting', '2021-03-17 10:14:16', '2021-03-17 10:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `main_category` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ean` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand_id`, `main_category`, `slug`, `sku`, `ean`, `price`, `quantity`, `short_description`, `description`, `tags`, `unit`, `created_by`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Provisions', 1, 1, 'provisions', NULL, NULL, NULL, NULL, NULL, 'The best Provision Supplies for Your Vessel – “We Create Extra Mile for Your Crew”', NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-05 15:12:19', '2022-07-13 08:04:45'),
(2, 'Main Engine Spare Parts', 1, 1, 'main-engine-spare-parts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-05 15:14:34', '2022-04-05 15:14:34'),
(3, 'Stores', 1, 2, 'stores', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:40:06', '2022-04-07 13:40:06'),
(4, 'Bunkering', 1, 2, 'bunkering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:40:34', '2022-04-07 13:40:34'),
(5, 'Lubricants', 1, 2, 'lubricants', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:40:50', '2022-04-07 13:40:50'),
(6, 'Spare parts', 1, 2, 'spare-parts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:41:06', '2022-04-07 13:41:06'),
(7, 'Ship Repair', 1, 2, 'ship-repair', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:41:21', '2022-04-07 13:41:21'),
(8, 'Cleaning solutions', 1, 2, 'cleaning-solutions', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:41:35', '2022-04-07 13:41:35'),
(9, 'Generator Engine Spare Parts', 1, 1, 'generator-engine-spare-parts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:42:34', '2022-04-07 13:42:34'),
(10, 'Life Boat', 1, 1, 'life-boat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:42:49', '2022-04-07 13:42:49'),
(11, 'Air Compressor', 1, 1, 'air-compressor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:43:08', '2022-04-07 13:43:08'),
(12, 'Oil Purifier', 1, 1, 'oil-purifier', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:43:28', '2022-04-07 13:43:28'),
(13, 'Hydraulic Motor and Pump', 1, 1, 'hydraulic-motor-and-pump', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:43:50', '2022-04-07 13:43:50'),
(14, 'Electric Motor', 1, 1, 'electric-motor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:44:06', '2022-04-07 13:44:06'),
(15, 'Turbocharger', 1, 1, 'turbocharger', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:44:20', '2022-04-07 13:44:20'),
(16, 'Screw Air Compressors and Air Dryers', 1, 1, 'screw-air-compressors-and-air-dryers', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:44:37', '2022-04-07 13:44:37'),
(17, 'Air Conditioning  compressor', 1, 1, 'air-conditioning-compressor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:44:54', '2022-04-07 13:44:54'),
(18, 'Fresh Water Generator', 1, 1, 'fresh-water-generator', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:45:12', '2022-04-07 13:45:12'),
(19, 'Navigation Equipment', 1, 1, 'navigation-equipment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:45:30', '2022-04-07 13:45:30'),
(20, 'Governor', 1, 1, 'governor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:45:45', '2022-04-07 13:45:45'),
(21, 'Nautical Artifacts', 1, 1, 'nautical-artifacts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:46:00', '2022-04-07 13:46:00'),
(22, 'Anchor and Chain', 1, 1, 'anchor-and-chain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:46:19', '2022-04-07 13:46:19'),
(23, 'Crane Spares', 1, 1, 'crane-spares', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '1', '2022-04-07 13:46:34', '2022-04-07 13:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `products_attributes`
--

CREATE TABLE `products_attributes` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `product_attribute_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_categories`
--

CREATE TABLE `products_categories` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_categories`
--

INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES
(2, 1),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `images_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `is_main_image` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `images_name`, `product_id`, `is_main_image`, `created_at`, `updated_at`) VALUES
(15, 'products/chittagong_port.jpg', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(1, 'super-admin', 'Super Admin', NULL, NULL),
(2, 'sales', 'Sales', '2021-03-21 08:57:33', '2021-03-21 08:57:33');

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles_permissions`
--

INSERT INTO `roles_permissions` (`role_id`, `permission_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 14),
(1, 15),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_tag` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_image`, `slider_title`, `slider_text`, `slider_tag`, `created_at`, `updated_at`) VALUES
(1, 'sliders/SUT5UWXNn0uFPWSUpUJqSisNPUt3tPgdkgfYh3bn.jpg', 'This is slider 1', 'This is slider title1', 'Slider-1', '2021-06-02 15:00:36', '2022-03-21 11:47:30'),
(2, 'sliders/HDNgegosjOyJOJc3VSCtNYGrQ8ll2PAnaLsHgUJ7.jpg', 'This is slider 2', 'This is slider 2', 'Slider-2', '2021-06-02 15:01:28', '2022-03-21 11:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit_name`, `unit_code`, `created_at`, `updated_at`) VALUES
(4, 'Unit Name', 'Unit Code', '2020-11-11 04:50:31', '2020-11-11 04:50:31');

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
(1, 'faisal robin', 'faisalrobin22@gmail.com', NULL, '$2y$10$JLfj3Hyrnd9A4/2nDI3D8u71agmuif0PhLl4rqf0uXy.SLg5qgKB2', NULL, '2020-09-03 11:52:21', '2020-09-03 11:52:21'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$JLfj3Hyrnd9A4/2nDI3D8u71agmuif0PhLl4rqf0uXy.SLg5qgKB2', NULL, '2020-09-03 11:52:21', '2020-09-03 11:52:21'),
(3, 'Khandukar Hossain', 'info.thelovathotel@gmail.com', NULL, '$2y$10$tuBGeJtl8L5Lev/VOrELM.PsRu1s2SjyMwJWz9v.uFDA8xQ/KIf9y', NULL, '2020-12-30 16:51:50', '2020-12-30 16:51:50'),
(4, 'Khalid Ullah', 'thenewdelhifolkestone@gmail.com', NULL, '$2y$10$yOb73nD4xd48M04yhIqTteS94aXlUdwZODKcS25R6W/OtEkO7nOhi', NULL, '2021-01-04 19:52:10', '2021-01-04 19:52:10'),
(5, 'SK Shohag', 'shohagitju@gmail.com', NULL, '$2y$10$.o/2xo8i2FWnp9wwJXRu9OUH./Y7FOCHHFrgQYiRPQF.C8jDSICgS', NULL, '2021-01-04 21:10:19', '2021-01-04 21:10:19'),
(6, 'Md Parvez Hossain', 'parsona@hotmail.co.uk', NULL, '$2y$10$TYHG9hbstYAyMgN5cOwQtuHnlGkTGyGaWyWjZOFasF7GBP5L94fKi', NULL, '2021-01-06 21:45:45', '2021-01-06 21:45:45'),
(7, 'Md Parvez Hossain', 'info@energy4ukltd.com', NULL, '$2y$10$6FZXcU7RPsA0SPW8j9r1ceQl/BjDqdpITsORNXspvJV6w4aJAsZ2a', NULL, '2021-01-06 21:52:22', '2021-01-06 21:52:22'),
(8, 'Nurul Islam', 'nurul.i@tiscali.co.uk', NULL, '$2y$10$VVnI4P4l.0g.T4vJotBiduz5lpmzHJQnSw21dFkEdFqDBS.lh.f3.', NULL, '2021-01-06 22:40:51', '2021-01-06 22:40:51'),
(9, 'Gulzar Miah', 'gulzarmiah@hotmail.co.uk', NULL, '$2y$10$y/SyRcoyxbXuUQESkd/gSOKqUZXgSnYI0x.nskQt..66r34O/Lls2', NULL, '2021-01-08 04:44:41', '2021-01-08 04:44:41'),
(10, 'Tuhin', 'tuhin@gmail.com', NULL, '$2y$10$MGJ3r4m8BE3ho1I1XbUM3OqLisyUmVCeiq2jBf6z2hyt5W8aUgRES', NULL, '2021-03-21 08:53:07', '2021-03-21 08:59:07');

-- --------------------------------------------------------

--
-- Table structure for table `users_permissions`
--

CREATE TABLE `users_permissions` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`user_id`, `role_id`) VALUES
(1, 1),
(7, 1),
(10, 1),
(10, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attributes_attribute_group_id_foreign` (`attribute_group_id`);

--
-- Indexes for table `attributes_group`
--
ALTER TABLE `attributes_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_main_category_foreign` (`main_category`),
  ADD KEY `products_created_by_foreign` (`created_by`);

--
-- Indexes for table `products_attributes`
--
ALTER TABLE `products_attributes`
  ADD PRIMARY KEY (`product_id`,`attribute_id`),
  ADD KEY `products_attributes_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `products_categories`
--
ALTER TABLE `products_categories`
  ADD PRIMARY KEY (`product_id`,`category_id`),
  ADD KEY `products_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`role_id`,`permission_id`),
  ADD KEY `roles_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_permissions`
--
ALTER TABLE `users_permissions`
  ADD PRIMARY KEY (`user_id`,`permission_id`),
  ADD KEY `users_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `users_roles_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `attributes_group`
--
ALTER TABLE `attributes_group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_main_category_foreign` FOREIGN KEY (`main_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products_attributes`
--
ALTER TABLE `products_attributes`
  ADD CONSTRAINT `products_attributes_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_attributes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products_categories`
--
ALTER TABLE `products_categories`
  ADD CONSTRAINT `products_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_permissions`
--
ALTER TABLE `users_permissions`
  ADD CONSTRAINT `users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
