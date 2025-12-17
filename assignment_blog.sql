-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2025 at 10:04 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_minutes` tinyint UNSIGNED DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `isFeature` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `full_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `image`, `title`, `short_desc`, `author`, `read_minutes`, `published_at`, `isFeature`, `full_desc`, `created_at`, `updated_at`) VALUES
(1, 2, 'blogs/50oWA0DbuK5b0MPavrKthiVWNSmsFybyw8gT6XpA.jpg', 'The Art of Mindful Morning Routines', 'Discover how starting your day with intention can transform your productivity and well-being.', 'Sarah Mitchell', 3, '2025-12-17 09:23:00', '1', 'Why Morning Routines Matter\r\nA mindful morning routine isn\'t about waking up at 4 AM or following a rigid schedule. It\'s about creating intentional space for yourself before the demands of the day take over. Research shows that how we spend our first hour significantly impacts our mood, focus, and decision-making throughout the day.\r\n\r\nThe way we begin each morning sets the tone for everything that follows. When we rush through our mornings in a state of stress, that energy carries into our work, our relationships, and our overall sense of wellbeing.\r\n\r\nBuilding Your Practice\r\nStart small. Perhaps it\'s five minutes of stretching, a cup of tea enjoyed in silence, or simply making your bed with care. The key is consistency and presence. Notice how you feel. Observe without judgment.\r\n\r\n\"The morning is wiser than the evening.\"\r\n\r\nAs you develop this practice, you may find yourself naturally wanting to extend these moments of calm. Many people report improved creativity, better relationships, and a deeper sense of purpose after establishing a morning routine.\r\n\r\nPractical Tips\r\nHere are some actionable strategies to help you build a sustainable morning practice:\r\n\r\nPrepare the night before to reduce morning friction\r\nKeep your phone in another room while you wake up\r\nChoose activities that energize rather than drain you\r\nBe flexible—some days will be different, and that\'s okay\r\nStart with just 10 minutes and gradually expand\r\nThe Science Behind It\r\nStudies have shown that our cortisol levels are naturally highest in the morning, making it an optimal time for focused work and creative thinking. By establishing a routine, we can harness this biological advantage rather than squandering it on reactive tasks like checking email.\r\n\r\nFurthermore, the consistency of a morning routine helps regulate our circadian rhythm, leading to better sleep quality and improved energy levels throughout the day.\r\n\r\nMaking It Sustainable\r\nThe most important aspect of any morning routine is sustainability. A routine that works perfectly but only lasts a week is far less valuable than a simple practice you can maintain for years.\r\n\r\nRemember, the goal isn\'t perfection—it\'s progress. Some mornings will go smoothly, others won\'t. What matters is the overall trajectory and your commitment to showing up for yourself each day.', '2025-12-17 09:23:41', '2025-12-17 09:34:26'),
(2, 3, 'blogs/nTzYXmkvKTdHwt2D8OFAaOt17EXcpEhs7HsQmekx.jpg', 'Exploring the Hidden Gems of Portugal', 'Beyond Lisbon and Porto lies a world of charming villages, stunning coastlines, and unforgettable experiences.', 'Marco Santos', 7, '2025-12-17 09:32:00', '0', 'Why Morning Routines Matter\r\nA mindful morning routine isn\'t about waking up at 4 AM or following a rigid schedule. It\'s about creating intentional space for yourself before the demands of the day take over. Research shows that how we spend our first hour significantly impacts our mood, focus, and decision-making throughout the day.\r\n\r\nThe way we begin each morning sets the tone for everything that follows. When we rush through our mornings in a state of stress, that energy carries into our work, our relationships, and our overall sense of wellbeing.\r\n\r\nBuilding Your Practice\r\nStart small. Perhaps it\'s five minutes of stretching, a cup of tea enjoyed in silence, or simply making your bed with care. The key is consistency and presence. Notice how you feel. Observe without judgment.\r\n\r\n\"The morning is wiser than the evening.\"\r\n\r\nAs you develop this practice, you may find yourself naturally wanting to extend these moments of calm. Many people report improved creativity, better relationships, and a deeper sense of purpose after establishing a morning routine.\r\n\r\nPractical Tips\r\nHere are some actionable strategies to help you build a sustainable morning practice:\r\n\r\nPrepare the night before to reduce morning friction\r\nKeep your phone in another room while you wake up\r\nChoose activities that energize rather than drain you\r\nBe flexible—some days will be different, and that\'s okay\r\nStart with just 10 minutes and gradually expand\r\nThe Science Behind It\r\nStudies have shown that our cortisol levels are naturally highest in the morning, making it an optimal time for focused work and creative thinking. By establishing a routine, we can harness this biological advantage rather than squandering it on reactive tasks like checking email.\r\n\r\nFurthermore, the consistency of a morning routine helps regulate our circadian rhythm, leading to better sleep quality and improved energy levels throughout the day.\r\n\r\nMaking It Sustainable\r\nThe most important aspect of any morning routine is sustainability. A routine that works perfectly but only lasts a week is far less valuable than a simple practice you can maintain for years.\r\n\r\nRemember, the goal isn\'t perfection—it\'s progress. Some mornings will go smoothly, others won\'t. What matters is the overall trajectory and your commitment to showing up for yourself each day.', '2025-12-17 09:32:31', '2025-12-17 09:34:38'),
(3, 1, 'blogs/o2VCrxd6k2ong3nqXDQNMikQETC9L4C64XGP5fAo.jpg', 'The Future of AI in Creative Industries', 'How artificial intelligence is reshaping the landscape of art, design, and content creation.', 'Elena Chen', 6, '2025-12-17 09:33:00', '0', 'Why Morning Routines Matter\r\nA mindful morning routine isn\'t about waking up at 4 AM or following a rigid schedule. It\'s about creating intentional space for yourself before the demands of the day take over. Research shows that how we spend our first hour significantly impacts our mood, focus, and decision-making throughout the day.\r\n\r\nThe way we begin each morning sets the tone for everything that follows. When we rush through our mornings in a state of stress, that energy carries into our work, our relationships, and our overall sense of wellbeing.\r\n\r\nBuilding Your Practice\r\nStart small. Perhaps it\'s five minutes of stretching, a cup of tea enjoyed in silence, or simply making your bed with care. The key is consistency and presence. Notice how you feel. Observe without judgment.\r\n\r\n\"The morning is wiser than the evening.\"\r\n\r\nAs you develop this practice, you may find yourself naturally wanting to extend these moments of calm. Many people report improved creativity, better relationships, and a deeper sense of purpose after establishing a morning routine.\r\n\r\nPractical Tips\r\nHere are some actionable strategies to help you build a sustainable morning practice:\r\n\r\nPrepare the night before to reduce morning friction\r\nKeep your phone in another room while you wake up\r\nChoose activities that energize rather than drain you\r\nBe flexible—some days will be different, and that\'s okay\r\nStart with just 10 minutes and gradually expand\r\nThe Science Behind It\r\nStudies have shown that our cortisol levels are naturally highest in the morning, making it an optimal time for focused work and creative thinking. By establishing a routine, we can harness this biological advantage rather than squandering it on reactive tasks like checking email.\r\n\r\nFurthermore, the consistency of a morning routine helps regulate our circadian rhythm, leading to better sleep quality and improved energy levels throughout the day.\r\n\r\nMaking It Sustainable\r\nThe most important aspect of any morning routine is sustainability. A routine that works perfectly but only lasts a week is far less valuable than a simple practice you can maintain for years.\r\n\r\nRemember, the goal isn\'t perfection—it\'s progress. Some mornings will go smoothly, others won\'t. What matters is the overall trajectory and your commitment to showing up for yourself each day.', '2025-12-17 09:33:43', '2025-12-17 09:33:43'),
(4, 4, 'blogs/Fj2Rfaf6wilVhhot4N0AclljcZ2fd25xvZKKlWEy.jpg', 'Homemade Pasta: A Complete Guide', 'Master the art of fresh pasta with these time-tested techniques and family recipes.', 'Isabella Romano', 8, '2025-12-17 09:35:00', '0', 'Master the art of fresh pasta with these time-tested techniques and family recipes.\r\n\r\nMaster the art of fresh pasta with these time-tested techniques and family recipes.', '2025-12-17 09:35:45', '2025-12-17 09:35:45'),
(5, 4, 'blogs/pGmQgZdeehoJ6p4vXM2AutAcQ8a79eMLhHn3ndL0.jpg', 'Finding Inspiration in Everyday Objects', 'A creative exercise in seeing the extraordinary within the ordinary.', 'Isabella Romano', 8, '2025-12-17 09:35:00', '0', 'Master the art of fresh pasta with these time-tested techniques and family recipes.\r\n\r\nMaster the art of fresh pasta with these time-tested techniques and family recipes.', '2025-12-17 09:35:46', '2025-12-17 09:36:37'),
(6, 1, 'blogs/jRj7r2h9cEhLqbzaCA6El5ZBIdlw7lP4M9t8zagc.jpg', 'Building Sustainable Tech Habits', 'Practical strategies for a healthier relationship with our devices and digital lives.', 'David Park', 5, '2025-12-17 09:37:00', '0', 'Practical strategies for a healthier relationship with our devices and digital lives. Practical strategies for a healthier relationship with our devices and digital lives.', '2025-12-17 09:37:24', '2025-12-17 09:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Technology', 'Latest tech trends and innovations', 'categories/Yaj9yNxx59C316hBXUaKNDEk06C4ITmjHqGh6GHp.png', '2025-12-17 09:20:55', '2025-12-17 09:20:55'),
(2, 'Lifestyle', 'Tips for better living', 'categories/75cLMmB4kGRtzIgDjdBJ9qW361usf8YywJ5DeCFT.png', '2025-12-17 09:21:17', '2025-12-17 09:21:17'),
(3, 'Travel', 'Adventures around the world', 'categories/8RpsoJQsoom2CfbrPoRAvmT96wrsSFagJwv1IM78.jpg', '2025-12-17 09:21:42', '2025-12-17 09:21:42'),
(4, 'Food & Recipes', 'Culinary delights and cooking tips', 'categories/lIgaoTkMY0GWqfSw78KXnXDe8W01zV2rwe7xwGhh.jpg', '2025-12-17 09:22:11', '2025-12-17 09:22:11'),
(5, 'Creativity', 'Art, design, and inspiration', 'categories/T1AFO760KwghmPmA3UdkwZ6uHIeBL8cAMT11TCHc.jpg', '2025-12-17 09:22:34', '2025-12-17 09:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '0001_01_01_000000_create_users_table', 1),
(8, '0001_01_01_000001_create_cache_table', 1),
(9, '0001_01_01_000002_create_jobs_table', 1),
(10, '2025_12_11_081250_create_categories_table', 1),
(11, '2025_12_11_081340_create_blogs_table', 1),
(12, '2025_12_17_142345_create_news_letters_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_letters`
--

CREATE TABLE `news_letters` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_letters`
--

INSERT INTO `news_letters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(2, 'hassan0cse@gmail.com', '2025-12-17 09:58:29', '2025-12-17 09:58:29'),
(3, 'test@gmail.com', '2025-12-17 10:00:06', '2025-12-17 10:00:06');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('p6iGYXBeFeHW2nkHQjJWD3mGufh2zzA6dfzTXL1G', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQlZwM3dORnFuY0hFTTFHWkZCbTlLMHJ2a0JPOHpVd3c5cjl5WVFCMSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fX0=', 1765965771);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'MD ROKIBUL HASSAN', 'hassan0cse@gmail.com', NULL, '$2y$12$XJURGhyTTOHRmf56ayTBEug1rcoMEeuCewzUBoXgg7K5Yl7ldJpUC', NULL, '2025-12-17 09:17:25', '2025-12-17 09:18:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letters`
--
ALTER TABLE `news_letters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_letters_email_unique` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news_letters`
--
ALTER TABLE `news_letters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
