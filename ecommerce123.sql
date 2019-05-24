-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 31, 2019 at 05:00 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.16-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce123`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Nokia', '2019-03-25 05:51:23', '2019-03-25 05:51:23'),
(3, 'Samsung', '2019-03-27 05:15:21', '2019-03-27 05:15:21'),
(4, 'Toyota', '2019-03-27 05:15:39', '2019-03-27 05:15:39'),
(5, 'BMW', '2019-03-27 05:15:46', '2019-03-27 05:15:46'),
(6, 'Honda', '2019-03-27 05:15:54', '2019-03-27 05:15:54'),
(7, 'VANS', '2019-03-27 05:16:02', '2019-03-27 05:16:02'),
(8, 'Goldstar', '2019-03-27 05:16:14', '2019-03-27 05:16:14'),
(9, 'Adidas', '2019-03-27 05:16:26', '2019-03-27 05:16:26'),
(10, 'Levis', '2019-03-27 05:16:38', '2019-03-27 05:16:38'),
(11, 'LG Corp.', '2019-03-27 05:17:08', '2019-03-27 05:17:08'),
(12, 'CG Group', '2019-03-27 05:17:27', '2019-03-27 05:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `main_category_id`, `created_at`, `updated_at`) VALUES
(3, 'Television', 4, '2019-03-27 05:19:10', '2019-03-27 05:19:10'),
(4, 'Mobile Phones', 4, '2019-03-27 05:19:17', '2019-03-27 05:19:17'),
(5, 'Computers', 4, '2019-03-27 05:19:24', '2019-03-27 05:19:24'),
(6, 'Men\'s', 5, '2019-03-27 05:19:38', '2019-03-27 05:19:38'),
(7, 'Women\'s', 5, '2019-03-27 05:19:44', '2019-03-27 05:21:37'),
(8, 'Children', 5, '2019-03-27 05:19:53', '2019-03-27 05:19:53'),
(9, 'Cars', 6, '2019-03-27 05:21:52', '2019-03-27 05:21:52'),
(10, 'Motorcycle', 6, '2019-03-27 05:22:07', '2019-03-27 05:22:07'),
(11, 'Bi-Cycle', 6, '2019-03-27 05:22:34', '2019-03-27 05:22:34'),
(12, 'Vegitables', 7, '2019-03-27 05:22:59', '2019-03-27 05:22:59'),
(13, 'Bakeries', 7, '2019-03-27 05:23:10', '2019-03-27 05:23:10'),
(14, 'Fruits', 7, '2019-03-27 05:23:23', '2019-03-27 05:23:23'),
(15, 'Adventure', 8, '2019-03-27 05:23:38', '2019-03-27 05:23:38'),
(16, 'Non-Fiction', 8, '2019-03-27 05:23:54', '2019-03-27 05:23:54'),
(17, 'Horror', 8, '2019-03-27 05:24:08', '2019-03-27 05:24:08'),
(18, 'Dining', 9, '2019-03-27 05:24:23', '2019-03-27 05:24:23'),
(19, 'Living Room', 9, '2019-03-27 05:24:32', '2019-03-27 05:24:41'),
(20, 'Bed Room', 9, '2019-03-27 05:24:51', '2019-03-27 05:24:51'),
(21, 'Biography', 8, '2019-03-27 05:25:18', '2019-03-27 05:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_categories`
--

INSERT INTO `main_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Electronics', '2019-03-27 05:17:50', '2019-03-27 05:17:50'),
(5, 'Fashion', '2019-03-27 05:17:59', '2019-03-27 05:18:07'),
(6, 'Automobiles', '2019-03-27 05:18:17', '2019-03-27 05:18:17'),
(7, 'Groceries', '2019-03-27 05:18:26', '2019-03-27 05:18:26'),
(8, 'Books', '2019-03-27 05:18:36', '2019-03-27 05:18:36'),
(9, 'Furnitures', '2019-03-27 05:18:47', '2019-03-27 05:18:47');

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
(2, '2014_10_12_100000_create_password_resets_table', 2),
(3, '2019_03_14_164737_create_main_categories_table', 3),
(4, '2019_03_14_165007_create_categories_table', 4),
(5, '2019_03_14_165735_create_brands_table', 5),
(6, '2019_03_14_165839_create_products_table', 6),
(7, '2019_03_14_170719_create_pages_table', 7),
(8, '2019_03_14_170901_create_customers_table', 8),
(9, '2019_03_14_170948_create_orders_table', 9),
(10, '2019_03_14_171146_create_order_details_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(5, 'About Us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis ultrices sapien, ut hendrerit felis. Nam faucibus felis id sapien hendrerit, sed eleifend sapien pretium. Ut viverra quam vitae volutpat fringilla. Ut condimentum at diam vitae dapibus. Donec placerat convallis risus ac tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra, felis facilisis tempor tempus, est lorem dictum felis, a suscipit ante ante at tortor. Nullam nec lectus vel nulla accumsan sollicitudin et ut odio. Etiam feugiat quam at felis ullamcorper, ac congue ante rutrum. Morbi ac lacus massa. Pellentesque vitae nisi in purus fringilla tincidunt id quis nunc. Ut quis purus vestibulum, luctus lacus sit amet, malesuada dolor. Nulla facilisi. Nam eu hendrerit tellus, id vehicula lorem. Cras commodo maximus mauris, vel rutrum nunc euismod vel.\r\n\r\nQuisque vel augue ac velit interdum tempor. Vivamus id viverra mauris, non auctor tellus. Aenean ultrices sed odio eu mollis. Nam urna lectus, malesuada id blandit sed, consectetur vel tellus. Nulla ultrices viverra nunc a egestas. Pellentesque dictum pharetra risus, nec sollicitudin tortor vestibulum ut. Nam ut nibh a turpis dapibus mollis nec a dolor. Maecenas dapibus felis quis urna lacinia accumsan.', NULL, '2019-03-27 05:13:24', '2019-03-27 05:13:24'),
(6, 'Contact Us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis ultrices sapien, ut hendrerit felis. Nam faucibus felis id sapien hendrerit, sed eleifend sapien pretium. Ut viverra quam vitae volutpat fringilla. Ut condimentum at diam vitae dapibus. Donec placerat convallis risus ac tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra, felis facilisis tempor tempus, est lorem dictum felis, a suscipit ante ante at tortor. Nullam nec lectus vel nulla accumsan sollicitudin et ut odio. Etiam feugiat quam at felis ullamcorper, ac congue ante rutrum. Morbi ac lacus massa. Pellentesque vitae nisi in purus fringilla tincidunt id quis nunc. Ut quis purus vestibulum, luctus lacus sit amet, malesuada dolor. Nulla facilisi. Nam eu hendrerit tellus, id vehicula lorem. Cras commodo maximus mauris, vel rutrum nunc euismod vel.\r\n\r\nQuisque vel augue ac velit interdum tempor. Vivamus id viverra mauris, non auctor tellus. Aenean ultrices sed odio eu mollis. Nam urna lectus, malesuada id blandit sed, consectetur vel tellus. Nulla ultrices viverra nunc a egestas. Pellentesque dictum pharetra risus, nec sollicitudin tortor vestibulum ut. Nam ut nibh a turpis dapibus mollis nec a dolor. Maecenas dapibus felis quis urna lacinia accumsan.', NULL, '2019-03-27 05:13:40', '2019-03-27 05:13:40'),
(7, 'F.A.Q', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis ultrices sapien, ut hendrerit felis. Nam faucibus felis id sapien hendrerit, sed eleifend sapien pretium. Ut viverra quam vitae volutpat fringilla. Ut condimentum at diam vitae dapibus. Donec placerat convallis risus ac tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra, felis facilisis tempor tempus, est lorem dictum felis, a suscipit ante ante at tortor. Nullam nec lectus vel nulla accumsan sollicitudin et ut odio. Etiam feugiat quam at felis ullamcorper, ac congue ante rutrum. Morbi ac lacus massa. Pellentesque vitae nisi in purus fringilla tincidunt id quis nunc. Ut quis purus vestibulum, luctus lacus sit amet, malesuada dolor. Nulla facilisi. Nam eu hendrerit tellus, id vehicula lorem. Cras commodo maximus mauris, vel rutrum nunc euismod vel.\r\n\r\nQuisque vel augue ac velit interdum tempor. Vivamus id viverra mauris, non auctor tellus. Aenean ultrices sed odio eu mollis. Nam urna lectus, malesuada id blandit sed, consectetur vel tellus. Nulla ultrices viverra nunc a egestas. Pellentesque dictum pharetra risus, nec sollicitudin tortor vestibulum ut. Nam ut nibh a turpis dapibus mollis nec a dolor. Maecenas dapibus felis quis urna lacinia accumsan.', NULL, '2019-03-27 05:14:00', '2019-03-27 05:14:00'),
(8, 'Terms of service', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis ultrices sapien, ut hendrerit felis. Nam faucibus felis id sapien hendrerit, sed eleifend sapien pretium. Ut viverra quam vitae volutpat fringilla. Ut condimentum at diam vitae dapibus. Donec placerat convallis risus ac tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra, felis facilisis tempor tempus, est lorem dictum felis, a suscipit ante ante at tortor. Nullam nec lectus vel nulla accumsan sollicitudin et ut odio. Etiam feugiat quam at felis ullamcorper, ac congue ante rutrum. Morbi ac lacus massa. Pellentesque vitae nisi in purus fringilla tincidunt id quis nunc. Ut quis purus vestibulum, luctus lacus sit amet, malesuada dolor. Nulla facilisi. Nam eu hendrerit tellus, id vehicula lorem. Cras commodo maximus mauris, vel rutrum nunc euismod vel.\r\n\r\nQuisque vel augue ac velit interdum tempor. Vivamus id viverra mauris, non auctor tellus. Aenean ultrices sed odio eu mollis. Nam urna lectus, malesuada id blandit sed, consectetur vel tellus. Nulla ultrices viverra nunc a egestas. Pellentesque dictum pharetra risus, nec sollicitudin tortor vestibulum ut. Nam ut nibh a turpis dapibus mollis nec a dolor. Maecenas dapibus felis quis urna lacinia accumsan.', 'img_20190327164450_5266.jpeg', '2019-03-27 05:14:51', '2019-03-27 05:14:51');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `discount` double DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `featured` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`, `discount`, `qty`, `featured`, `category_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(1, 'Product 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis ultrices sapien, ut hendrerit felis. Nam faucibus felis id sapien hendrerit, sed eleifend sapien pretium. Ut viverra quam vitae volutpat fringilla. Ut condimentum at diam vitae dapibus. Donec placerat convallis risus ac tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra, felis facilisis tempor tempus, est lorem dictum felis, a suscipit ante ante at tortor. Nullam nec lectus vel nulla accumsan sollicitudin et ut odio. Etiam feugiat quam at felis ullamcorper, ac congue ante rutrum. Morbi ac lacus massa. Pellentesque vitae nisi in purus fringilla tincidunt id quis nunc. Ut quis purus vestibulum, luctus lacus sit amet, malesuada dolor. Nulla facilisi. Nam eu hendrerit tellus, id vehicula lorem. Cras commodo maximus mauris, vel rutrum nunc euismod vel.\r\n\r\nQuisque vel augue ac velit interdum tempor. Vivamus id viverra mauris, non auctor tellus. Aenean ultrices sed odio eu mollis. Nam urna lectus, malesuada id blandit sed, consectetur vel tellus. Nulla ultrices viverra nunc a egestas. Pellentesque dictum pharetra risus, nec sollicitudin tortor vestibulum ut. Nam ut nibh a turpis dapibus mollis nec a dolor. Maecenas dapibus felis quis urna lacinia accumsan.', 'img_20190327165642_5365.jpeg', 20000, NULL, 20, 'yes', 4, 2, '2019-03-27 05:26:42', '2019-03-27 05:26:42'),
(2, 'Product 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis ultrices sapien, ut hendrerit felis. Nam faucibus felis id sapien hendrerit, sed eleifend sapien pretium. Ut viverra quam vitae volutpat fringilla. Ut condimentum at diam vitae dapibus. Donec placerat convallis risus ac tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra, felis facilisis tempor tempus, est lorem dictum felis, a suscipit ante ante at tortor. Nullam nec lectus vel nulla accumsan sollicitudin et ut odio. Etiam feugiat quam at felis ullamcorper, ac congue ante rutrum. Morbi ac lacus massa. Pellentesque vitae nisi in purus fringilla tincidunt id quis nunc. Ut quis purus vestibulum, luctus lacus sit amet, malesuada dolor. Nulla facilisi. Nam eu hendrerit tellus, id vehicula lorem. Cras commodo maximus mauris, vel rutrum nunc euismod vel.\r\n\r\nQuisque vel augue ac velit interdum tempor. Vivamus id viverra mauris, non auctor tellus. Aenean ultrices sed odio eu mollis. Nam urna lectus, malesuada id blandit sed, consectetur vel tellus. Nulla ultrices viverra nunc a egestas. Pellentesque dictum pharetra risus, nec sollicitudin tortor vestibulum ut. Nam ut nibh a turpis dapibus mollis nec a dolor. Maecenas dapibus felis quis urna lacinia accumsan.', 'img_20190327165823_6017.jpeg', 30, 25, 30, 'yes', 14, 12, '2019-03-27 05:28:23', '2019-03-27 05:28:23'),
(3, 'Product 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis ultrices sapien, ut hendrerit felis. Nam faucibus felis id sapien hendrerit, sed eleifend sapien pretium. Ut viverra quam vitae volutpat fringilla. Ut condimentum at diam vitae dapibus. Donec placerat convallis risus ac tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra, felis facilisis tempor tempus, est lorem dictum felis, a suscipit ante ante at tortor. Nullam nec lectus vel nulla accumsan sollicitudin et ut odio. Etiam feugiat quam at felis ullamcorper, ac congue ante rutrum. Morbi ac lacus massa. Pellentesque vitae nisi in purus fringilla tincidunt id quis nunc. Ut quis purus vestibulum, luctus lacus sit amet, malesuada dolor. Nulla facilisi. Nam eu hendrerit tellus, id vehicula lorem. Cras commodo maximus mauris, vel rutrum nunc euismod vel.\r\n\r\nQuisque vel augue ac velit interdum tempor. Vivamus id viverra mauris, non auctor tellus. Aenean ultrices sed odio eu mollis. Nam urna lectus, malesuada id blandit sed, consectetur vel tellus. Nulla ultrices viverra nunc a egestas. Pellentesque dictum pharetra risus, nec sollicitudin tortor vestibulum ut. Nam ut nibh a turpis dapibus mollis nec a dolor. Maecenas dapibus felis quis urna lacinia accumsan.', 'img_20190327165910_3145.jpeg', 600, NULL, 20, 'no', 10, 6, '2019-03-27 05:29:11', '2019-03-27 05:29:11'),
(4, 'Product 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis ultrices sapien, ut hendrerit felis. Nam faucibus felis id sapien hendrerit, sed eleifend sapien pretium. Ut viverra quam vitae volutpat fringilla. Ut condimentum at diam vitae dapibus. Donec placerat convallis risus ac tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra, felis facilisis tempor tempus, est lorem dictum felis, a suscipit ante ante at tortor. Nullam nec lectus vel nulla accumsan sollicitudin et ut odio. Etiam feugiat quam at felis ullamcorper, ac congue ante rutrum. Morbi ac lacus massa. Pellentesque vitae nisi in purus fringilla tincidunt id quis nunc. Ut quis purus vestibulum, luctus lacus sit amet, malesuada dolor. Nulla facilisi. Nam eu hendrerit tellus, id vehicula lorem. Cras commodo maximus mauris, vel rutrum nunc euismod vel.\r\n\r\nQuisque vel augue ac velit interdum tempor. Vivamus id viverra mauris, non auctor tellus. Aenean ultrices sed odio eu mollis. Nam urna lectus, malesuada id blandit sed, consectetur vel tellus. Nulla ultrices viverra nunc a egestas. Pellentesque dictum pharetra risus, nec sollicitudin tortor vestibulum ut. Nam ut nibh a turpis dapibus mollis nec a dolor. Maecenas dapibus felis quis urna lacinia accumsan.', 'img_20190327170012_6080.jpeg', 345, 234, 56, 'no', 3, 3, '2019-03-27 05:30:12', '2019-03-27 05:30:12'),
(5, 'Product 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis ultrices sapien, ut hendrerit felis. Nam faucibus felis id sapien hendrerit, sed eleifend sapien pretium. Ut viverra quam vitae volutpat fringilla. Ut condimentum at diam vitae dapibus. Donec placerat convallis risus ac tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra, felis facilisis tempor tempus, est lorem dictum felis, a suscipit ante ante at tortor. Nullam nec lectus vel nulla accumsan sollicitudin et ut odio. Etiam feugiat quam at felis ullamcorper, ac congue ante rutrum. Morbi ac lacus massa. Pellentesque vitae nisi in purus fringilla tincidunt id quis nunc. Ut quis purus vestibulum, luctus lacus sit amet, malesuada dolor. Nulla facilisi. Nam eu hendrerit tellus, id vehicula lorem. Cras commodo maximus mauris, vel rutrum nunc euismod vel.\r\n\r\nQuisque vel augue ac velit interdum tempor. Vivamus id viverra mauris, non auctor tellus. Aenean ultrices sed odio eu mollis. Nam urna lectus, malesuada id blandit sed, consectetur vel tellus. Nulla ultrices viverra nunc a egestas. Pellentesque dictum pharetra risus, nec sollicitudin tortor vestibulum ut. Nam ut nibh a turpis dapibus mollis nec a dolor. Maecenas dapibus felis quis urna lacinia accumsan.', 'img_20190327170120_6317.jpeg', 400, 395, 15, 'yes', 6, 9, '2019-03-27 05:31:21', '2019-03-27 05:31:21'),
(6, 'Product 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis ultrices sapien, ut hendrerit felis. Nam faucibus felis id sapien hendrerit, sed eleifend sapien pretium. Ut viverra quam vitae volutpat fringilla. Ut condimentum at diam vitae dapibus. Donec placerat convallis risus ac tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra, felis facilisis tempor tempus, est lorem dictum felis, a suscipit ante ante at tortor. Nullam nec lectus vel nulla accumsan sollicitudin et ut odio. Etiam feugiat quam at felis ullamcorper, ac congue ante rutrum. Morbi ac lacus massa. Pellentesque vitae nisi in purus fringilla tincidunt id quis nunc. Ut quis purus vestibulum, luctus lacus sit amet, malesuada dolor. Nulla facilisi. Nam eu hendrerit tellus, id vehicula lorem. Cras commodo maximus mauris, vel rutrum nunc euismod vel.\r\n\r\nQuisque vel augue ac velit interdum tempor. Vivamus id viverra mauris, non auctor tellus. Aenean ultrices sed odio eu mollis. Nam urna lectus, malesuada id blandit sed, consectetur vel tellus. Nulla ultrices viverra nunc a egestas. Pellentesque dictum pharetra risus, nec sollicitudin tortor vestibulum ut. Nam ut nibh a turpis dapibus mollis nec a dolor. Maecenas dapibus felis quis urna lacinia accumsan.', 'img_20190327170159_2169.jpeg', 276, 270, 14, 'no', 4, 11, '2019-03-27 05:31:59', '2019-03-27 05:31:59'),
(7, 'Product 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis ultrices sapien, ut hendrerit felis. Nam faucibus felis id sapien hendrerit, sed eleifend sapien pretium. Ut viverra quam vitae volutpat fringilla. Ut condimentum at diam vitae dapibus. Donec placerat convallis risus ac tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra, felis facilisis tempor tempus, est lorem dictum felis, a suscipit ante ante at tortor. Nullam nec lectus vel nulla accumsan sollicitudin et ut odio. Etiam feugiat quam at felis ullamcorper, ac congue ante rutrum. Morbi ac lacus massa. Pellentesque vitae nisi in purus fringilla tincidunt id quis nunc. Ut quis purus vestibulum, luctus lacus sit amet, malesuada dolor. Nulla facilisi. Nam eu hendrerit tellus, id vehicula lorem. Cras commodo maximus mauris, vel rutrum nunc euismod vel.\r\n\r\nQuisque vel augue ac velit interdum tempor. Vivamus id viverra mauris, non auctor tellus. Aenean ultrices sed odio eu mollis. Nam urna lectus, malesuada id blandit sed, consectetur vel tellus. Nulla ultrices viverra nunc a egestas. Pellentesque dictum pharetra risus, nec sollicitudin tortor vestibulum ut. Nam ut nibh a turpis dapibus mollis nec a dolor. Maecenas dapibus felis quis urna lacinia accumsan.', 'img_20190327170231_3834.jpeg', 7000, NULL, 5, 'no', 7, 7, '2019-03-27 05:32:31', '2019-03-27 05:32:31'),
(8, 'Product 8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis ultrices sapien, ut hendrerit felis. Nam faucibus felis id sapien hendrerit, sed eleifend sapien pretium. Ut viverra quam vitae volutpat fringilla. Ut condimentum at diam vitae dapibus. Donec placerat convallis risus ac tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra, felis facilisis tempor tempus, est lorem dictum felis, a suscipit ante ante at tortor. Nullam nec lectus vel nulla accumsan sollicitudin et ut odio. Etiam feugiat quam at felis ullamcorper, ac congue ante rutrum. Morbi ac lacus massa. Pellentesque vitae nisi in purus fringilla tincidunt id quis nunc. Ut quis purus vestibulum, luctus lacus sit amet, malesuada dolor. Nulla facilisi. Nam eu hendrerit tellus, id vehicula lorem. Cras commodo maximus mauris, vel rutrum nunc euismod vel.\r\n\r\nQuisque vel augue ac velit interdum tempor. Vivamus id viverra mauris, non auctor tellus. Aenean ultrices sed odio eu mollis. Nam urna lectus, malesuada id blandit sed, consectetur vel tellus. Nulla ultrices viverra nunc a egestas. Pellentesque dictum pharetra risus, nec sollicitudin tortor vestibulum ut. Nam ut nibh a turpis dapibus mollis nec a dolor. Maecenas dapibus felis quis urna lacinia accumsan.', 'img_20190327170313_1083.jpeg', 4000000, NULL, 30, 'no', 9, 5, '2019-03-27 05:33:13', '2019-03-27 05:33:13'),
(9, 'Product 9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis ultrices sapien, ut hendrerit felis. Nam faucibus felis id sapien hendrerit, sed eleifend sapien pretium. Ut viverra quam vitae volutpat fringilla. Ut condimentum at diam vitae dapibus. Donec placerat convallis risus ac tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra, felis facilisis tempor tempus, est lorem dictum felis, a suscipit ante ante at tortor. Nullam nec lectus vel nulla accumsan sollicitudin et ut odio. Etiam feugiat quam at felis ullamcorper, ac congue ante rutrum. Morbi ac lacus massa. Pellentesque vitae nisi in purus fringilla tincidunt id quis nunc. Ut quis purus vestibulum, luctus lacus sit amet, malesuada dolor. Nulla facilisi. Nam eu hendrerit tellus, id vehicula lorem. Cras commodo maximus mauris, vel rutrum nunc euismod vel.\r\n\r\nQuisque vel augue ac velit interdum tempor. Vivamus id viverra mauris, non auctor tellus. Aenean ultrices sed odio eu mollis. Nam urna lectus, malesuada id blandit sed, consectetur vel tellus. Nulla ultrices viverra nunc a egestas. Pellentesque dictum pharetra risus, nec sollicitudin tortor vestibulum ut. Nam ut nibh a turpis dapibus mollis nec a dolor. Maecenas dapibus felis quis urna lacinia accumsan.', 'img_20190327170408_9939.jpeg', 23456, 23450, 49, 'no', 13, 10, '2019-03-27 05:34:08', '2019-03-27 05:34:08'),
(10, 'Product 10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis ultrices sapien, ut hendrerit felis. Nam faucibus felis id sapien hendrerit, sed eleifend sapien pretium. Ut viverra quam vitae volutpat fringilla. Ut condimentum at diam vitae dapibus. Donec placerat convallis risus ac tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra, felis facilisis tempor tempus, est lorem dictum felis, a suscipit ante ante at tortor. Nullam nec lectus vel nulla accumsan sollicitudin et ut odio. Etiam feugiat quam at felis ullamcorper, ac congue ante rutrum. Morbi ac lacus massa. Pellentesque vitae nisi in purus fringilla tincidunt id quis nunc. Ut quis purus vestibulum, luctus lacus sit amet, malesuada dolor. Nulla facilisi. Nam eu hendrerit tellus, id vehicula lorem. Cras commodo maximus mauris, vel rutrum nunc euismod vel.\r\n\r\nQuisque vel augue ac velit interdum tempor. Vivamus id viverra mauris, non auctor tellus. Aenean ultrices sed odio eu mollis. Nam urna lectus, malesuada id blandit sed, consectetur vel tellus. Nulla ultrices viverra nunc a egestas. Pellentesque dictum pharetra risus, nec sollicitudin tortor vestibulum ut. Nam ut nibh a turpis dapibus mollis nec a dolor. Maecenas dapibus felis quis urna lacinia accumsan.', 'img_20190327170448_8047.jpeg', 6363, NULL, 63, 'no', 10, 4, '2019-03-27 05:34:48', '2019-03-27 05:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'uprety.nitish@gmail.com', NULL, '$2y$10$n2PSsFcUtImHCmq6E4SodeId.wYrmBpusPuPd1Tx4E.aWWf58x.rq', 'HbzD9xMS9EuG7AWiba3AV24K6gdgLh5ez6gMIeXVxjYZUtQqK6rPHTSypCOs', '2019-03-17 05:27:27', '2019-03-25 05:50:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_main_category_id_index` (`main_category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customer_id_index` (`customer_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_index` (`order_id`),
  ADD KEY `order_details_product_id_index` (`product_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_index` (`category_id`),
  ADD KEY `products_brand_id_index` (`brand_id`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_main_category_id_foreign` FOREIGN KEY (`main_category_id`) REFERENCES `main_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
