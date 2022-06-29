-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2022 pada 09.30
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Janitorial Supervisor', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(2, 'Court Reporter', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(3, 'Gauger', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(4, 'Postal Clerk', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(5, 'Loan Counselor', '2022-06-23 00:00:25', '2022-06-23 00:00:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_groups`
--

CREATE TABLE `menu_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `menu_groups`
--

INSERT INTO `menu_groups` (`id`, `name`, `permission_name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'dashboard', 'fas fa-tachometer-alt', NULL, NULL),
(2, 'Users Management', 'user.management', 'fas fa-users', NULL, NULL),
(3, 'Role Management', 'role.permission.management', 'fas fa-user-tag', NULL, NULL),
(4, 'Menu Management', 'menu.management', 'fas fa-bars', NULL, NULL),
(5, 'Menu Pengaduan', 'menu.management', 'fas fa-user-circle', '2022-06-23 00:07:57', '2022-06-23 00:07:57'),
(6, 'Menu Masyarakat', 'user.management', 'fas fa-user-circle', '2022-06-23 00:07:57', '2022-06-23 00:07:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_group_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `menu_items`
--

INSERT INTO `menu_items` (`id`, `name`, `route`, `permission_name`, `menu_group_id`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'dashboard', 'dashboard', 1, NULL, NULL),
(2, 'User List', 'user-management/user', 'user.index', 2, NULL, NULL),
(3, 'Role List', 'role-and-permission/role', 'role.index', 3, NULL, NULL),
(4, 'Permission List', 'role-and-permission/permission', 'permission.index', 3, NULL, NULL),
(5, 'Permission To Role', 'role-and-permission/assign', 'assign.index', 3, NULL, NULL),
(6, 'User To Role', 'role-and-permission/assign-user', 'assign.user.index', 3, NULL, NULL),
(7, 'Menu Group', 'menu-management/menu-group', 'menu-group.index', 4, NULL, NULL),
(8, 'Menu Item', 'menu-management/menu-item', 'menu-item.index', 4, NULL, NULL),
(9, 'pengaduan', 'menu-pengaduan/pengaduan', 'menu.management', 5, NULL, NULL),
(10, 'laporan', 'menu-pengaduan/laporan', 'menu.management', 5, NULL, NULL),
(11, 'Buat Laporan', 'menu-masyarakat/laporan-masyarakat', 'user.management', 6, NULL, NULL),
(15, 'List Laporan', 'menu-masyarakat/list-laporan', 'user.management', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_10_26_232900_create_permission_tables', 1),
(7, '2021_12_30_215143_create_menu_groups_table', 1),
(8, '2021_12_31_002402_create_menu_items_table', 1),
(9, '2022_01_13_023945_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduans`
--

CREATE TABLE `pengaduans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum di Proses',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengaduans`
--

INSERT INTO `pengaduans` (`id`, `user_nik`, `name`, `user_id`, `description`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2343242', 'Masyarakat', 2, 'nyoba ngisi laporan', 'assets/laporan/y7SOFKzdmIw1vVtjJVClGtLRh0nFlzUdM3m2EU43.png', 'Sedang di Proses', NULL, '2022-06-21 10:18:12', '2022-06-21 10:18:12'),
(2, '2343242', 'Masyarakat', 2, 'nyoba ngisi laporan', 'assets/laporan/y7SOFKzdmIw1vVtjJVClGtLRh0nFlzUdM3m2EU43.png', 'Belum di Proses', NULL, '2022-06-21 10:18:12', '2022-06-21 10:18:12'),
(3, '2343242', 'SuperAdmin', 1, 'test ngisi dong', 'assets/laporan/85mEYcKMqNwLcoJA10LG07rHM7ToBxs9tphDcxum.jpg', 'Belum di Proses', NULL, '2022-06-23 00:25:51', '2022-06-23 00:25:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(2, 'user.management', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(3, 'role.permission.management', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(4, 'menu.management', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(5, 'user.index', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(6, 'user.create', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(7, 'user.edit', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(8, 'user.destroy', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(9, 'user.import', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(10, 'user.export', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(11, 'role.index', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(12, 'role.create', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(13, 'role.edit', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(14, 'role.destroy', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(15, 'role.import', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(16, 'role.export', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(17, 'permission.index', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(18, 'permission.create', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(19, 'permission.edit', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(20, 'permission.destroy', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(21, 'permission.import', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(22, 'permission.export', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(23, 'assign.index', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(24, 'assign.create', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(25, 'assign.edit', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(26, 'assign.destroy', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(27, 'assign.user.index', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(28, 'assign.user.create', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(29, 'assign.user.edit', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25'),
(2, 'super-admin', 'web', '2022-06-23 00:00:25', '2022-06-23 00:00:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 1),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapans`
--

CREATE TABLE `tanggapans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tanggapan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `petugas_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tanggapans`
--

INSERT INTO `tanggapans` (`id`, `id_pengaduan`, `tanggapan`, `petugas_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'test tanggapan', 1, '2022-06-22 17:19:30', '2022-06-22 17:19:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` int(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nik`, `phone`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', 'superadmin@gmail.com', 2343242, 12345678, '2022-06-23 00:00:24', '$2y$10$QgY1VFp2iKc/5v/SDb2fcu5Vj5CxDaDKEEQQSo9mqtt2iFo.XX.Ba', NULL, NULL, NULL, '2022-06-23 00:00:24', '2022-06-23 00:00:24'),
(2, 'user', 'user@gmail.com', 2343242, 1233432243, '2022-06-23 00:00:24', '$2y$10$QgY1VFp2iKc/5v/SDb2fcu5Vj5CxDaDKEEQQSo9mqtt2iFo.XX.Ba', NULL, NULL, NULL, '2022-06-23 00:00:24', '2022-06-23 00:00:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `menu_groups`
--
ALTER TABLE `menu_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menu_groups_name_unique` (`name`);

--
-- Indeks untuk tabel `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menu_items_name_unique` (`name`),
  ADD UNIQUE KEY `menu_items_route_unique` (`route`),
  ADD KEY `menu_items_menu_group_id_foreign` (`menu_group_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengaduans`
--
ALTER TABLE `pengaduans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `tanggapans`
--
ALTER TABLE `tanggapans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menu_groups`
--
ALTER TABLE `menu_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pengaduans`
--
ALTER TABLE `pengaduans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tanggapans`
--
ALTER TABLE `tanggapans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_group_id_foreign` FOREIGN KEY (`menu_group_id`) REFERENCES `menu_groups` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
