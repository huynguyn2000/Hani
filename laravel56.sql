-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 07:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel56`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `avatar`, `active`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyen Duc Huy', 'alienvictor2000@gmail.com', NULL, NULL, 1, '$2y$10$d5WMADHNOdhB9dbWP86xMeQzXTAI0LOWOvz37dyf8I/KDoLd/bC06', NULL, NULL, NULL),
(2, 'Nguyen Thi Diem Mi', 'diemmint0801@gmail.com', '0938630631', NULL, 1, '$2y$10$WwJnskSx6u8Ao5TE.yPXf.uJ9wvNKAzQ9siyGRG5HzffSup9.9eRy', NULL, '2020-12-06 04:57:54', '2020-12-06 04:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `a_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_active` tinyint(4) NOT NULL DEFAULT 1,
  `a_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `a_name`, `a_slug`, `a_title_seo`, `a_content`, `a_description`, `a_active`, `a_avatar`, `a_description_seo`, `created_at`, `updated_at`) VALUES
(1, 'Trải nghiệm cà phê', 'trai-nghiem-ca-phe', 'Trải nghiệm cà phê', 'Mỗi người chúng ta đều có một sở thích uống cà phê khác nhau. Người thích Espresso, người thích Cappuccino, Mocha… hay chỉ đơn giản là một tách Latte nóng thơm nồng giữa những ngày trời mưa giông bão.\r\nVà để có được một cốc 𝗟𝗮𝘁𝘁𝗲 đậm đà, bạn cần rất nhiều sự khéo léo và tinh tế trong đó. Đôi lúc, kinh nghiệm và công thức làm chỉ là một phần tạo nên cách pha ly cà phê ngon, mà điều quan trọng làm nên hương vị đặc trưng của cách pha cà phê #latte đó là nghệ thuật pha cùng với sự đam mê, yêu thích cà phê nữa.\r\nVà bạn biết không!?\r\nTrời mưa, thì đi uống cà phê khá là thú vị đấy!\r\n𝗟𝗮𝘁𝘁𝗲 - Với hương vị đắng nhẹ, thơm nồng hòa cùng không khí của những ngày mưa dầm dề, sẽ làm bạn có thêm nhiều hứng khởi và làm việc hiệu quả.\r\nHãy thưởng thức món 𝗟𝗮𝘁𝘁𝗲 ấm nồng cùng với #Hani bạn nhé ☕', 'Trải nghiệm cà phê', 1, '2020-11-21__120199541-3324887317625919-8047858071268706537-o.jpg', 'Trải nghiệm cà phê', '2020-11-13 10:38:39', '2020-12-11 09:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_icon` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_active` tinyint(4) NOT NULL DEFAULT 1,
  `c_total_product` int(11) NOT NULL DEFAULT 0,
  `c_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_slug`, `c_icon`, `c_avatar`, `c_active`, `c_total_product`, `c_title_seo`, `c_description_seo`, `c_keyword_seo`, `created_at`, `updated_at`) VALUES
(1, 'Trà', 'tra', 'fas fa-coffee', NULL, 1, 0, 'Trà', 'Trà', NULL, '2020-11-10 07:01:30', '2020-11-10 08:16:10'),
(2, 'Kafe', 'kafe', 'fas fa-coffee', NULL, 0, 0, 'Kafe', 'Kafe\r\n', NULL, '2020-11-10 07:04:49', '2020-11-10 07:04:49'),
(5, 'Dessert', 'dessert', 'fas-fa-utensils', NULL, 1, 0, 'Food', NULL, NULL, '2020-11-24 00:10:43', '2020-11-24 01:16:47'),
(6, 'Pizza', 'pizza', 'fas-fa-pizza-slice', NULL, 1, 0, 'Pizza', NULL, NULL, '2020-11-24 01:17:49', '2020-11-24 01:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) NOT NULL,
  `cp_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cp_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cp_qty` int(11) NOT NULL,
  `cp_func` int(11) NOT NULL,
  `cp_value` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `cp_name`, `cp_code`, `cp_qty`, `cp_func`, `cp_value`, `created_at`, `updated_at`) VALUES
(1, 'Giảm giá giáng sinh', 'XMAS2020', 50, 0, 20, '2020-12-06 09:24:16', '2020-12-06 09:24:16'),
(4, 'Giảm giá COVID', 'COVID2020', 1000, 1, 10000, '2020-12-08 13:11:45', '2020-12-08 13:11:45');

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
(3, '2020_11_09_174642_create_categories_table', 1),
(4, '2020_11_11_090011_create_products_table', 2),
(5, '2020_11_11_092534_alter_column_pro_content_and_pro_title_seo_in_table_products', 3),
(7, '2020_11_13_162946_create_articles_table', 4),
(8, '2020_12_03_180330_create_transactions_table', 5),
(9, '2020_12_03_180346_create_orders_table', 5),
(10, '2020_12_03_180822_alter_column_pro_pay_in_table_products', 6),
(11, '2020_12_06_085314_create_admins_table', 7),
(12, '2020_12_11_164945_alter_column_total_pay_in_table_users', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `or_transaction_id` int(11) NOT NULL DEFAULT 0,
  `or_product_id` int(11) NOT NULL DEFAULT 0,
  `or_qty` tinyint(4) NOT NULL DEFAULT 0,
  `or_price` int(11) NOT NULL DEFAULT 0,
  `or_sale` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `or_detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `or_topping` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Không có topping'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `or_transaction_id`, `or_product_id`, `or_qty`, `or_price`, `or_sale`, `created_at`, `updated_at`, `or_detail`, `or_topping`) VALUES
(12, 11, 11, 1, 22000, 0, NULL, NULL, 'Nóng, M, 100%, 100%', ''),
(13, 11, 14, 2, 80000, 0, NULL, NULL, '', ''),
(14, 12, 17, 2, 120000, 0, NULL, NULL, '', ''),
(15, 12, 6, 2, 124000, 0, NULL, NULL, 'Lạnh, M, 100%, 100%', 'Trân châu đen, Trân châu trắng, Thạch dừa đào, Thạch dừa chanh dây'),
(16, 13, 16, 1, 40000, 0, NULL, NULL, '', ''),
(17, 14, 9, 2, 80000, 0, NULL, NULL, 'Nóng, M, 100%, Không, Không', 'Trân châu đen, Trân châu trắng, Thạch dừa đào, Thạch dừa chanh dây'),
(18, 15, 11, 1, 32000, 0, NULL, NULL, 'Lạnh, L, 70%, 70%', 'Trân châu đen, Trân châu đen');

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
  `id` int(10) UNSIGNED NOT NULL,
  `pro_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_category_id` int(11) NOT NULL DEFAULT 0,
  `pro_price` int(11) NOT NULL DEFAULT 0,
  `pro_author_id` int(11) NOT NULL DEFAULT 0,
  `pro_sale` tinyint(4) NOT NULL DEFAULT 0,
  `pro_active` tinyint(4) NOT NULL DEFAULT 1,
  `pro_hot` tinyint(4) NOT NULL DEFAULT 0,
  `pro_view` int(11) NOT NULL DEFAULT 0,
  `pro_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pro_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_pay` tinyint(4) NOT NULL DEFAULT 1,
  `pro_number` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_slug`, `pro_category_id`, `pro_price`, `pro_author_id`, `pro_sale`, `pro_active`, `pro_hot`, `pro_view`, `pro_description`, `pro_avatar`, `pro_description_seo`, `pro_keyword_seo`, `created_at`, `updated_at`, `pro_title_seo`, `pro_content`, `pro_pay`, `pro_number`) VALUES
(5, 'Trà đào', 'tra-dao', 1, 30000, 0, 0, 1, 0, 0, 'Trà đào', '2020-11-28__95612180-2903470383100950-7348392888281071616-o.jpg', 'Trà đào', NULL, '2020-11-20 07:09:24', '2020-11-28 08:01:06', 'Trà đào', 'Trà đào', 1, 1),
(6, 'Trà đào hạt chia', 'tra-dao-hat-chia', 1, 40000, 0, 0, 1, 0, 0, 'Trà đào hạt chia', '2020-11-28__120540052-3338448509603133-6340957194455703467-o.jpg', 'Trà đào hạt chia', NULL, '2020-11-20 07:11:33', '2020-11-28 08:00:47', 'Trà đào hạt chia', 'Trà đào hạt chia', 1, 1),
(7, 'Trà phúc bồn tử', 'tra-phuc-bon-tu', 1, 40000, 0, 0, 1, 0, 0, 'Trà phúc bồn tử', '2020-11-28__120757130-3338448682936449-3847794334232231967-o.jpg', 'Trà phúc bồn tử', NULL, '2020-11-20 07:12:06', '2020-11-28 07:59:56', 'Trà phúc bồn tử', 'Trà phúc bồn tử', 1, 1),
(8, 'Trà táo', 'tra-tao', 1, 40000, 0, 0, 1, 0, 0, 'Mojito táo', '2020-11-28__120495948-3338449076269743-8317661418530527880-o.jpg', 'Mojito táo', NULL, '2020-11-20 07:12:20', '2020-11-28 07:59:29', 'Mojito táo', 'Mojito táo', 1, 1),
(9, 'Kafe đen', 'kafe-den', 2, 18000, 0, 0, 1, 0, 0, 'Kafe đen', '2020-11-29__122872342-3407650219349628-1328568537868304878-o.jpg', 'Kafe đen', NULL, '2020-11-20 07:14:31', '2020-11-28 23:47:17', 'Kafe đen', 'Kafe đen', 1, 1),
(10, 'Kafe sữa', 'kafe-sua', 2, 20000, 0, 0, 1, 0, 0, 'Kafe sữa', '2020-11-29__120199541-3324887317625919-8047858071268706537-o.jpg', 'Kafe sữa', NULL, '2020-11-20 07:14:45', '2020-11-29 00:12:22', 'Kafe sữa', 'Kafe sữa', 1, 1),
(11, 'Kafe đen Sài Gòn', 'kafe-den-sai-gon', 2, 22000, 0, 0, 1, 0, 0, 'Kafe đen Sài Gòn', '2020-11-29__43436625-1875836072531058-1103145281777565696-o.jpg', 'Kafe đen Sài Gòn', NULL, '2020-11-20 07:14:58', '2020-11-29 00:12:38', 'Kafe đen Sài Gòn', 'Kafe đen Sài Gòn', 1, 1),
(12, 'Kafe đen Sài Gòn/Bạc Xỉu', 'kafe-den-sai-gonbac-xiu', 2, 25000, 0, 0, 1, 0, 0, 'Kafe đen Sài Gòn/Bạc Xỉu', '2020-11-28__122008309-3383586945089289-531595751030932536-o.jpg', 'Kafe đen Sài Gòn/Bạc Xỉu', NULL, '2020-11-20 07:15:08', '2020-11-28 08:02:16', 'Kafe đen Sài Gòn/Bạc Xỉu', 'Kafe đen Sài Gòn/Bạc Xỉu', 1, 1),
(14, 'Sandwich cá ngừ', 'sandwich-ca-ngu', 5, 40000, 0, 0, 1, 0, 0, 'Sandwich cá ngừ', '2020-11-28__121590463-3383587038422613-6285098734849760702-o.jpg', 'Sandwich cá ngừ', NULL, '2020-11-24 00:13:10', '2020-11-28 08:04:04', 'Sandwich cá ngừ', 'Sandwich cá ngừ', 1, 1),
(15, 'Pizza Bò Bằm', 'pizza-bo-bam', 6, 100000, 0, 0, 1, 0, 0, 'Pizza Bò Bằm', '2020-11-28__121809338-3383587175089266-3022362036300240644-o.jpg', 'Pizza Bò Bằm', NULL, '2020-11-24 00:13:30', '2020-11-28 08:05:19', 'Pizza Bò Bằm', 'Pizza Bò Bằm', 1, 1),
(16, 'Salad Thịt xông khói', 'salad-thit-xong-khoi', 5, 40000, 0, 0, 1, 0, 0, 'Salad Thịt xông khói', '2020-11-28__122186450-3383587235089260-4371730816541789601-o.jpg', 'Salad Thịt xông khói', NULL, '2020-11-24 00:13:46', '2020-11-28 08:05:40', 'Salad Thịt xông khói', 'Salad Thịt xông khói', 1, 1),
(17, 'Spagetti gà nấm', 'spagetti-ga-nam', 5, 60000, 0, 0, 1, 0, 0, 'Spagetti gà nấm', '2020-11-28__121730686-3383587331755917-181363019308981543-o.jpg', 'Spagetti gà nấm', NULL, '2020-11-24 00:14:07', '2020-12-11 09:32:42', 'Spagetti gà nấm', 'Spagetti gà nấm', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `tr_user_id` int(11) DEFAULT 0,
  `tr_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_total` int(11) NOT NULL DEFAULT 0,
  `tr_note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tr_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `tr_user_id`, `tr_name`, `tr_total`, `tr_note`, `tr_address`, `tr_phone`, `tr_status`, `created_at`, `updated_at`) VALUES
(11, NULL, 'quân', 117000, 'giao từ từ', '419A Ba Đình', '0916534751', 1, '2020-12-04 10:18:37', '2020-12-11 11:14:05'),
(12, 1, NULL, 259000, 'thêm tương ớt', '419A Ba Đình P.9 Q.8 Tp. HCM', '0916534751', 1, '2020-12-04 10:24:33', '2020-12-11 11:14:09'),
(13, NULL, 'mey', 55000, 'giao trước nhà', '419A Ba Đình P.9 Q.8 Tp. HCM', '0938630631', 0, '2020-12-04 10:37:42', '2020-12-04 10:37:42'),
(14, NULL, 'Mi', 95000, 'giao nhanh', '419A Ba Dinh', '0916534751', 0, '2020-12-07 01:42:38', '2020-12-07 01:42:38'),
(15, NULL, 'minh', 47000, 'giao từ từ', '419A Ba Dinh', '0916534751', 0, '2020-12-08 03:14:39', '2020-12-08 03:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total_pay` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `avatar`, `active`, `password`, `remember_token`, `created_at`, `updated_at`, `total_pay`) VALUES
(1, 'huy', 'nnguyenduchuy2000@gmail.com', '0916534751', NULL, 1, '$2y$10$OR7JVew6bnzRNxdjnsWw2OC6nJ7.e7LlEuyIeORdf.QSthjeTjVdm', '3LisEMpasfCyLwPVTI0bWevYwurK3pRRYloibbvWt91BPhjtVw3gFelPhL8q', '2020-11-28 01:34:37', '2020-11-28 01:34:37', 1),
(2, 'huy2', 'nnguyenduchuy2001@gmail.com', '0916534751', NULL, 1, '$2y$10$zoFNLZCfHTLPtiFIjANuL.3mXA9wr5lJejPG9Xf81A.n9cfy7K6Bq', NULL, '2020-11-28 01:45:37', '2020-11-28 01:45:37', 0),
(3, 'huy3', 'nnguyenduchuy2002@gmail.com', '0916534751', NULL, 1, '$2y$10$/t4wCplwQ9LPtUnXA0A8OOAh9hHXmpzO.lVB8gONd/voZeUYjf.C.', NULL, '2020-11-28 02:00:20', '2020-11-28 02:00:20', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_active_index` (`active`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_a_slug_index` (`a_slug`),
  ADD KEY `a_active` (`a_active`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_c_name_unique` (`c_name`),
  ADD KEY `categories_c_slug_index` (`c_slug`),
  ADD KEY `categories_c_active_index` (`c_active`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
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
  ADD KEY `orders_or_transaction_id_index` (`or_transaction_id`),
  ADD KEY `orders_or_product_id_index` (`or_product_id`);

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
  ADD KEY `products_pro_slug_index` (`pro_slug`),
  ADD KEY `products_pro_category_id_index` (`pro_category_id`),
  ADD KEY `products_pro_author_id_index` (`pro_author_id`),
  ADD KEY `products_pro_active_index` (`pro_active`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_tr_user_id_index` (`tr_user_id`),
  ADD KEY `transactions_tr_status_index` (`tr_status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_active_index` (`active`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
