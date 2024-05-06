-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 01:29 PM
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
-- Database: `transindo`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HwDHdc8PMBGJfOXPLufdRet8uykHOthheWCHWeux', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQjZmUXNJRWlrSUNZOHJkcUxhc0l1cTJ6Z3NIWHIwUkIwN3dwR29ueiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1714994927);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cars`
--

CREATE TABLE `tb_cars` (
  `idcars` int(10) NOT NULL,
  `id_users` int(10) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `nomor_plat` varchar(255) NOT NULL,
  `tarif` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_cars`
--

INSERT INTO `tb_cars` (`idcars`, `id_users`, `merk`, `model`, `nomor_plat`, `tarif`, `gambar`, `keterangan`) VALUES
(1, 1, 'BMW', 'Sedan', 'A 1234 BC', '5000000', 'img-1.png', 'selesai'),
(2, 1, 'Range Rover', 'SUV', 'A 2314 BC', '5000000', 'img-2.png', 'selesai'),
(5, 4, 'Tesla', 'SEDAN', 'A 8127 BC', '1000000', 'tesla-voiture__1_-removebg-preview.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `idpesan` int(10) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `idcars` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `nohp_pemesan` int(255) NOT NULL,
  `total_hari` int(255) NOT NULL,
  `total_harga` int(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`idpesan`, `id_pelanggan`, `idcars`, `name`, `tanggal_pesan`, `tanggal_selesai`, `nohp_pemesan`, `total_hari`, `total_harga`, `keterangan`) VALUES
(2, 0, 1, 'admin', '2024-05-07', '2024-05-08', 881264162, 1, 5000000, ''),
(3, 0, 1, 'admin', '2024-05-08', '2024-05-04', 881264162, 4, 20000000, ''),
(4, 0, 1, 'admin', '2024-05-08', '2024-05-04', 881264162, 4, 20000000, ''),
(5, 0, 1, 'admin', '2024-05-07', '2024-05-08', 881264162, 1, 5000000, ''),
(6, 2, 1, 'admin', '2024-05-17', '2024-05-17', 881264162, 0, 0, ''),
(7, 1, 2, 'admin', '2024-05-17', '2024-05-31', 881264162, 14, 70000000, ''),
(8, 1, 2, 'admin', '2024-05-17', '2024-05-31', 881264162, 14, 70000000, ''),
(9, 1, 2, 'admin', '2024-05-17', '2024-05-31', 881264162, 14, 70000000, ''),
(10, 1, 2, 'admin', '2024-05-17', '2024-05-31', 881264162, 14, 70000000, ''),
(11, 1, 2, 'admin', '2024-05-17', '2024-05-31', 881264162, 14, 70000000, ''),
(12, 1, 2, 'admin', '2024-05-17', '2024-05-31', 881264162, 14, 70000000, ''),
(13, 1, 2, 'admin', '2024-05-17', '2024-05-31', 881264162, 14, 70000000, ''),
(14, 4, 3, 'safgas', '2024-05-07', '2024-05-08', 881264162, 1, 1000000, ''),
(15, 4, 3, 'safgas', '2024-05-08', '2024-05-10', 881264162, 2, 2000000, ''),
(16, 4, 3, 'safgas', '2024-05-09', '2024-05-10', 881264162, 1, 1000000, ''),
(17, 4, 3, 'safgas', '2024-05-08', '2024-05-09', 881264162, 1, 1000000, ''),
(18, 4, 3, 'safgas', '2024-05-06', '2024-05-08', 881264162, 2, 2000000, ''),
(20, 4, 3, 'safgas', '2024-05-10', '2024-05-11', 881264162, 1, 1000000, ''),
(21, 6, 1, 'asfas', '2024-05-17', '2024-05-18', 881264162, 1, 5000000, 'SELESAIkan'),
(22, 6, 2, 'asfas', '2024-05-31', '2024-06-01', 881264162, 1, 5000000, 'SELESAIkan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin'),
(3, 'zhen', 'zhendeska@gmail.com', '123nemo123'),
(4, 'safgas', 'sagas@gmail.com', 'asfasfas'),
(5, 'safgasa', 'sagaas@gmail.com', '$2y$10$uUY4eZ.BS2emykxmydiqSuc8KnD32dP.wiYYJ48nqPNU0oS.1FiIe'),
(6, 'asfas', 'asgasga@gmail.com', '$2y$10$noxtfMCStEaAi2eYGSbXQu28Kj4x8k3Sn2kygw6.ToIbWm5KLlb1C'),
(7, 'fahmi', 'fahmi@gmail.com', '123nemo123');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tb_cars`
--
ALTER TABLE `tb_cars`
  ADD PRIMARY KEY (`idcars`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`idpesan`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_cars`
--
ALTER TABLE `tb_cars`
  MODIFY `idcars` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `idpesan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
