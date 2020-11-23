-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 01:28 PM
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
(1, 'Trải nghiệm cà phê', 'trai-nghiem-ca-phe', 'Trải nghiệm cà phê', 'Mỗi người chúng ta đều có một sở thích uống cà phê khác nhau. Người thích Espresso, người thích Cappuccino, Mocha… hay chỉ đơn giản là một tách Latte nóng thơm nồng giữa những ngày trời mưa giông bão.\r\nVà để có được một cốc 𝗟𝗮𝘁𝘁𝗲 đậm đà, bạn cần rất nhiều sự khéo léo và tinh tế trong đó. Đôi lúc, kinh nghiệm và công thức làm chỉ là một phần tạo nên cách pha ly cà phê ngon, mà điều quan trọng làm nên hương vị đặc trưng của cách pha cà phê #latte đó là nghệ thuật pha cùng với sự đam mê, yêu thích cà phê nữa.\r\nVà bạn biết không!?\r\nTrời mưa, thì đi uống cà phê khá là thú vị đấy!\r\n𝗟𝗮𝘁𝘁𝗲 - Với hương vị đắng nhẹ, thơm nồng hòa cùng không khí của những ngày mưa dầm dề, sẽ làm bạn có thêm nhiều hứng khởi và làm việc hiệu quả.\r\nHãy thưởng thức món 𝗟𝗮𝘁𝘁𝗲 ấm nồng cùng với #Hani bạn nhé ☕ ', 'Trải nghiệm cà phê', 1, '2020-11-21__120199541-3324887317625919-8047858071268706537-o.jpg', 'Trải nghiệm cà phê', '2020-11-13 10:38:39', '2020-11-21 05:49:26'),
(4, 'Khái niệm “bubble” trong “bubble tea” hoá ra không phải là hạt trân châu như chúng ta vẫn lầm tưởng', 'khai-niem-bubble-trong-bubble-tea-hoa-ra-khong-phai-la-hat-tran-chau-nhu-chung-ta-van-lam-tuong', 'Khái niệm “bubble” trong “bubble tea” hoá ra không phải là hạt trân châu như chúng ta vẫn lầm tưởng', 'Khoảng những năm 80 của thế kỷ 20, lĩnh vực kinh doanh đồ uống giải khát, cụ thể là trà của Đài Loan khá biến động. Từ những ly trà có vị chát đơn thuần, người bán đã biết cách biến hoá công thức pha chế để phù hợp và gây chú ý đối với khách hàng.\r\n\r\nMột số cửa hàng đã thêm vị hoa quả vào công thức pha trà để kích thích vị giác của khách hàng, tránh nhàm chán, gây ấn tượng và may mắn trở thành trào lưu lan rộng ra các quán khác. Để có thể hòa quyện các nguyên liệu với nhau, người bán cho các nguyên liệu vào một chiếc bình, sau đó lắc mạnh để cho hương vị được hòa đều. Hành động lắc mạnh đã tạo ra bọt “bong bóng”, trong tiếng anh là “bubble” nên từ đó khái niệm “bubble tea” đã ra đời, hoàn toàn không phải là hạt trân châu mà chúng ta vẫn nghĩ.', 'Khái niệm “bubble” trong “bubble tea” hoá ra không phải là hạt trân châu như chúng ta vẫn lầm tưởng', 1, NULL, 'Khái niệm “bubble” trong “bubble tea” hoá ra không phải là hạt trân châu như chúng ta vẫn lầm tưởng', '2020-11-19 07:42:37', '2020-11-19 07:42:37');

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
(2, 'Kafe', 'kafe', 'fas fa-coffee', NULL, 0, 0, 'Kafe', 'Kafe\r\n', NULL, '2020-11-10 07:04:49', '2020-11-10 07:04:49');

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
(7, '2020_11_13_162946_create_articles_table', 4);

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
  `pro_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_slug`, `pro_category_id`, `pro_price`, `pro_author_id`, `pro_sale`, `pro_active`, `pro_hot`, `pro_view`, `pro_description`, `pro_avatar`, `pro_description_seo`, `pro_keyword_seo`, `created_at`, `updated_at`, `pro_title_seo`, `pro_content`) VALUES
(5, 'Trà đào', 'tra-dao', 1, 30000, 0, 0, 1, 0, 0, 'Trà đào', NULL, 'Trà đào', NULL, '2020-11-20 07:09:24', '2020-11-20 07:09:24', 'Trà đào', 'Trà đào'),
(6, 'Trà đào hạt chia', 'tra-dao-hat-chia', 1, 40000, 0, 0, 1, 0, 0, 'Trà đào hạt chia', NULL, 'Trà đào hạt chia', NULL, '2020-11-20 07:11:33', '2020-11-20 11:17:54', 'Trà đào hạt chia', 'Trà đào hạt chia'),
(7, 'Trà phúc bồn tử', 'tra-phuc-bon-tu', 1, 40000, 0, 0, 1, 0, 0, 'Trà phúc bồn tử', NULL, 'Trà phúc bồn tử', NULL, '2020-11-20 07:12:06', '2020-11-20 11:17:32', 'Trà phúc bồn tử', 'Trà phúc bồn tử'),
(8, 'Mojito táo', 'mojito-tao', 1, 40000, 0, 0, 1, 0, 0, 'Mojito táo', NULL, 'Mojito táo', NULL, '2020-11-20 07:12:20', '2020-11-20 11:16:37', 'Mojito táo', 'Mojito táo'),
(9, 'Kafe đen', 'kafe-den', 2, 18000, 0, 0, 1, 0, 0, 'Kafe đen', NULL, 'Kafe đen', NULL, '2020-11-20 07:14:31', '2020-11-20 07:14:31', 'Kafe đen', 'Kafe đen'),
(10, 'Kafe sữa', 'kafe-sua', 2, 20000, 0, 0, 1, 0, 0, 'Kafe sữa', NULL, 'Kafe sữa', NULL, '2020-11-20 07:14:45', '2020-11-20 07:14:45', 'Kafe sữa', 'Kafe sữa'),
(11, 'Kafe đen Sài Gòn', 'kafe-den-sai-gon', 2, 22000, 0, 0, 1, 0, 0, 'Kafe đen Sài Gòn', NULL, 'Kafe đen Sài Gòn', NULL, '2020-11-20 07:14:58', '2020-11-20 07:14:58', 'Kafe đen Sài Gòn', 'Kafe đen Sài Gòn'),
(12, 'Kafe đen Sài Gòn/Bạc Xỉu', 'kafe-den-sai-gonbac-xiu', 2, 25000, 0, 0, 1, 0, 0, 'Kafe đen Sài Gòn/Bạc Xỉu', '2020-11-20__1024px-love-coffee.jpg', 'Kafe đen Sài Gòn/Bạc Xỉu', NULL, '2020-11-20 07:15:08', '2020-11-20 12:22:46', 'Kafe đen Sài Gòn/Bạc Xỉu', 'Kafe đen Sài Gòn/Bạc Xỉu'),
(13, 'Kafe nâu', 'kafe-nau', 2, 20000, 0, 0, 1, 0, 0, 'Kafe nâu', '2020-11-22__1024px-love-coffee.jpg', 'Kafe nâu', NULL, '2020-11-22 01:41:02', '2020-11-22 01:42:29', 'Kafe nâu', 'Kafe nâu');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_pro_slug_index` (`pro_slug`),
  ADD KEY `products_pro_category_id_index` (`pro_category_id`),
  ADD KEY `products_pro_author_id_index` (`pro_author_id`),
  ADD KEY `products_pro_active_index` (`pro_active`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
