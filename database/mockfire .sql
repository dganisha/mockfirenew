-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 14 Sep 2018 pada 14.11
-- Versi Server: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.1.20-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mockfire`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_22_155606_CreateTableProject', 1),
(4, '2018_07_23_030247_AddColumnEndpointUser', 1),
(15, '2018_07_31_090450_CreateColumnFieldForSkema', 4),
(16, '2018_07_31_155749_CreateTableOptiongrup', 4),
(17, '2018_07_30_211814_CreateTableTipeOpsiSkema', 5),
(18, '2018_08_06_095238_CreateRoleUser', 6),
(19, '2018_08_06_095509_CreateColumnRoleinUser', 7),
(20, '2018_07_24_042350_CreateTableResource', 8),
(22, '2018_07_24_042747_CreateTableSchema', 9),
(24, '2018_09_05_083111_CreateTableUserProjects', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dhimasganisha@gmail.com', '$2y$10$zS5Ycj2H.iNQUEiIlsxdJ.303DKNulASgch4objXkr17bzuzJcMTK', '2018-08-24 01:52:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name_project` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `endpoint` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `name_project`, `created_at`, `updated_at`, `endpoint`) VALUES
(11, 1, 'mockfire4', '2018-08-06 06:17:19', '2018-08-06 06:17:19', 'j997Hh6NVILRy6U'),
(12, 1, 'mockfire1', '2018-08-09 02:49:39', '2018-08-09 02:49:39', 'aW8w8htaxmbmRmp'),
(13, 6, 'tes', '2018-08-09 03:31:35', '2018-08-09 03:31:35', 'd1qaGP2l85ZpKaP'),
(19, 1, 'bangunindo', '2018-08-23 01:06:38', '2018-08-23 01:06:38', 'c9n2N9MculJrq2K'),
(20, 1, 'halohalo', '2018-08-23 01:07:01', '2018-08-23 01:07:01', 'uON1nhslUxgaHuJ'),
(21, 1, 'dpayer', '2018-08-24 09:58:19', '2018-08-24 09:58:19', 'Ou3zunOppvzITAZ'),
(22, 1, 'TesCoba', '2018-09-03 05:58:00', '2018-09-03 05:58:00', 'BFctPo3hSMyDNAd'),
(25, 1, 'TES', '2018-09-03 06:03:23', '2018-09-03 06:03:23', 'VSv5NOOcfko3VaV'),
(26, 1, 'wi', '2018-09-03 06:04:51', '2018-09-03 06:04:51', 'wA4RTh6SVvryENL'),
(30, 6, 'dpayer', '2018-09-05 04:36:10', '2018-09-05 04:36:10', 'LdcG5W3ypvdaDN7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resources`
--

CREATE TABLE `resources` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `name_resource` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('POST','GET','PUT','DELETE') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `resources`
--

INSERT INTO `resources` (`id`, `project_id`, `name_resource`, `type`, `created_at`, `updated_at`) VALUES
(1536025851, 11, 'Manusia', NULL, '2018-09-04 01:50:51', '2018-09-04 01:50:51'),
(1536110564, 11, 'users', NULL, '2018-09-05 01:22:44', '2018-09-05 01:22:44'),
(1536114205, 11, 'pulsa', NULL, '2018-09-05 02:23:25', '2018-09-05 02:23:25'),
(1536205299, 30, 'Users', NULL, '2018-09-06 03:41:39', '2018-09-06 03:41:39'),
(1536810195, 30, 'Database', NULL, '2018-09-13 03:43:15', '2018-09-13 03:43:15'),
(1536904599, 30, 'DB7', NULL, '2018-09-14 05:56:39', '2018-09-14 05:56:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skema`
--

CREATE TABLE `skema` (
  `id` int(10) UNSIGNED NOT NULL,
  `resource_id` int(10) UNSIGNED NOT NULL,
  `name_schema` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_schema` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `child_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `skema`
--

INSERT INTO `skema` (`id`, `resource_id`, `name_schema`, `type_schema`, `parent_id`, `child_id`, `field`, `created_at`, `updated_at`) VALUES
(285, 1536025851, 'id', 'ObjectID', '', '0', 'field1', '2018-09-05 01:08:40', '2018-09-05 01:08:40'),
(286, 1536025851, 'Name', 'array', '', '0', 'field2', '2018-09-05 01:08:40', '2018-09-05 01:08:40'),
(287, 1536025851, 'FirstName', 'firstNameMale', '286', '0', 'field2', '2018-09-05 01:08:40', '2018-09-05 01:08:40'),
(288, 1536025851, 'LastName', 'lastName', '286', '0', 'field2', '2018-09-05 01:08:40', '2018-09-05 01:08:40'),
(289, 1536025851, 'Address', 'array', '', '0', 'field3', '2018-09-05 01:08:40', '2018-09-05 01:08:40'),
(290, 1536025851, 'Address1', 'streetAddress', '289', '0', 'field3', '2018-09-05 01:08:40', '2018-09-05 01:08:40'),
(291, 1536025851, 'Address2', 'secondaryAddress', '289', '0', 'field3', '2018-09-05 01:08:40', '2018-09-05 01:08:40'),
(292, 1536025851, 'Phone', 'phoneNumber', '', '0', 'field4', '2018-09-05 01:08:41', '2018-09-05 01:08:41'),
(293, 1536025851, 'Department', 'departmentName', '', '0', 'field5', '2018-09-05 01:08:41', '2018-09-05 01:08:41'),
(294, 1536110564, 'id', 'ObjectID', '', '0', 'field1', '2018-09-05 01:22:44', '2018-09-05 01:22:44'),
(295, 1536110564, 'username', 'firstName', '', '0', 'field2', '2018-09-05 01:22:44', '2018-09-05 01:22:44'),
(296, 1536110564, 'Name', 'array', '', '0', 'field3', '2018-09-05 01:22:44', '2018-09-05 01:22:44'),
(297, 1536110564, 'FirstName', 'firstNameMale', '296', '0', 'field3', '2018-09-05 01:22:44', '2018-09-05 01:22:44'),
(298, 1536110564, 'LastName', 'lastName', '296', '0', 'field3', '2018-09-05 01:22:44', '2018-09-05 01:22:44'),
(299, 1536114205, 'id', 'ObjectID', '', '0', 'field1', '2018-09-05 02:23:25', '2018-09-05 02:23:25'),
(300, 1536114205, 'content', 'array', '', '0', 'field2', '2018-09-05 02:23:25', '2018-09-05 02:23:25'),
(301, 1536114205, 'trxid', 'randomNumber', '300', '0', 'field2', '2018-09-05 02:23:26', '2018-09-05 02:23:26'),
(302, 1536114205, 'code', 'postcode', '300', '0', 'field2', '2018-09-05 02:23:26', '2018-09-05 02:23:26'),
(303, 1536114205, 'phone', 'phoneNumber', '300', '0', 'field2', '2018-09-05 02:23:26', '2018-09-05 02:23:26'),
(304, 1536114205, 'status', 'randomNumber', '300', '0', 'field2', '2018-09-05 02:23:26', '2018-09-05 02:23:26'),
(305, 1536114205, 'sn', 'boolean', '300', '0', 'field2', '2018-09-05 02:23:26', '2018-09-05 02:23:26'),
(306, 1536114205, 'note', 'words', '300', '0', 'field2', '2018-09-05 02:23:26', '2018-09-05 02:23:26'),
(422, 1536205299, 'id', 'ObjectID', '', NULL, 'field1', '2018-09-07 06:20:03', '2018-09-07 06:20:03'),
(423, 1536205299, 'Name', 'array', '', NULL, 'field2', '2018-09-07 06:20:03', '2018-09-07 06:20:03'),
(424, 1536205299, 'FirstName', 'firstNameMale', '', NULL, 'field2', '2018-09-07 06:20:03', '2018-09-07 06:20:03'),
(425, 1536205299, 'LastName', 'lastName', '423', NULL, 'field2', '2018-09-07 06:20:03', '2018-09-07 06:20:03'),
(426, 1536205299, 'Address', 'array', '', NULL, 'field4', '2018-09-07 06:20:03', '2018-09-07 06:20:03'),
(427, 1536205299, 'Address1', 'streetAddress', '426', NULL, 'field4', '2018-09-07 06:20:03', '2018-09-07 06:20:03'),
(428, 1536205299, 'Address2', 'secondaryAddress', '426', NULL, 'field4', '2018-09-07 06:20:03', '2018-09-07 06:20:03'),
(429, 1536205299, 'ZipCode', 'postcode', '426', NULL, 'field4', '2018-09-07 06:20:03', '2018-09-07 06:20:03'),
(430, 1536205299, 'Phone', 'phoneNumber', '', NULL, 'field5', '2018-09-07 06:20:03', '2018-09-07 06:20:03'),
(732, 1536904599, 'id', 'ObjectID', '', NULL, 'field1', '2018-09-14 06:47:13', '2018-09-14 06:47:13'),
(733, 1536904599, 'Users', 'array', '', NULL, 'field2', '2018-09-14 06:47:13', '2018-09-14 06:47:13'),
(734, 1536904599, 'Name', 'array', '733', NULL, 'field2', '2018-09-14 06:47:13', '2018-09-14 06:47:13'),
(735, 1536904599, 'FullName', 'name', '734', '734', 'field2', '2018-09-14 06:47:13', '2018-09-14 06:47:13'),
(736, 1536904599, 'FirstName', 'firstName', '734', '734', 'field2', '2018-09-14 06:47:13', '2018-09-14 06:47:13'),
(737, 1536904599, 'LastName', 'lastName', '734', '734', 'field2', '2018-09-14 06:47:13', '2018-09-14 06:47:13'),
(738, 1536904599, 'Address', 'streetAddress', '733', NULL, 'field2', '2018-09-14 06:47:13', '2018-09-14 06:47:13'),
(739, 1536904599, 'phone', 'phoneNumber', '', NULL, 'field3', '2018-09-14 06:47:14', '2018-09-14 06:47:14'),
(740, 1536904599, 'zipCode', 'postcode', '', NULL, 'field4', '2018-09-14 06:47:14', '2018-09-14 06:47:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skemaopsi`
--

CREATE TABLE `skemaopsi` (
  `id` int(10) UNSIGNED NOT NULL,
  `skemaopsigroup_id` int(10) UNSIGNED NOT NULL,
  `name_opsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_opsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `skemaopsi`
--

INSERT INTO `skemaopsi` (`id`, `skemaopsigroup_id`, `name_opsi`, `value_opsi`, `created_at`, `updated_at`) VALUES
(1, 1, 'postcode', 'Zip Code', NULL, NULL),
(2, 1, 'city', 'City', NULL, '2018-09-07 06:49:04'),
(3, 1, 'streetAddress', 'Street Address', NULL, NULL),
(4, 1, 'secondaryAddress', 'Secondary Address', NULL, NULL),
(6, 1, 'country', 'Country', NULL, NULL),
(7, 1, 'state', 'State', NULL, NULL),
(8, 1, 'stateAbbr', 'State abbreviated', NULL, NULL),
(9, 1, 'latitude', 'Latitude', NULL, NULL),
(10, 1, 'longitude', 'Longitude', NULL, NULL),
(11, 2, 'colorName', 'Color', NULL, NULL),
(12, 2, 'departmentName', 'Department', NULL, NULL),
(21, 3, 'monthNameGenitive', 'Month', NULL, NULL),
(23, 4, 'image', 'Image', NULL, NULL),
(25, 5, 'firstNameMale', 'First Name Male', NULL, NULL),
(26, 5, 'firstName', 'First Name', NULL, NULL),
(27, 5, 'lastName', 'Last Name', NULL, NULL),
(28, 5, 'name', 'Full Name', NULL, NULL),
(29, 5, 'jobTitle', 'Job Title', NULL, NULL),
(30, 5, 'firstNameFemale', 'First Name Female', NULL, NULL),
(31, 5, 'title', 'Title', NULL, NULL),
(35, 6, 'phoneNumber', 'Phone Number', NULL, NULL),
(36, 7, 'randomNumber', 'Random Digit', NULL, NULL),
(37, 7, 'uuid', 'UUID', NULL, NULL),
(38, 7, 'boolean', 'Boolean', NULL, NULL),
(39, 7, 'word', 'Word', NULL, NULL),
(40, 7, 'words', 'Words', NULL, NULL),
(41, 7, 'locale', 'Locale', NULL, NULL),
(49, 9, 'object', 'Object', NULL, NULL),
(50, 10, 'array', 'Array', NULL, NULL),
(51, 7, 'nik', 'NIK', NULL, NULL),
(52, 7, 'paragraphs', 'Paragraphs', '2018-08-25 12:17:06', '2018-08-25 12:29:29'),
(53, 1, 'streetName', 'Street Name', '2018-08-25 12:18:13', '2018-08-25 12:18:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skemaopsigroup`
--

CREATE TABLE `skemaopsigroup` (
  `id` int(10) UNSIGNED NOT NULL,
  `option_grup` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `skemaopsigroup`
--

INSERT INTO `skemaopsigroup` (`id`, `option_grup`, `created_at`, `updated_at`) VALUES
(1, 'ADDRESS', NULL, NULL),
(2, 'DEPARTMENT', NULL, NULL),
(3, 'DATE', NULL, NULL),
(4, 'IMAGE', NULL, NULL),
(5, 'NAME', NULL, NULL),
(6, 'PHONE', NULL, NULL),
(7, 'NUMBER', NULL, NULL),
(8, 'SYSTEM', NULL, NULL),
(9, 'OBJECT', NULL, NULL),
(10, 'ARRAY', NULL, NULL),
(11, 'INTERNET', '2018-08-25 12:41:19', '2018-08-25 12:48:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `userprojects`
--

CREATE TABLE `userprojects` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `userprojects`
--

INSERT INTO `userprojects` (`id`, `user_id`, `project_id`, `created_at`, `updated_at`) VALUES
(5, 6, 30, '2018-09-05 04:36:10', '2018-09-05 04:36:10'),
(6, 1, 30, '2018-09-05 04:40:52', '2018-09-05 04:40:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('Administrator','User') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dhiemas Ganisha', 'dhimasganisha@gmail.com', '$2y$10$84lFAkDMKYm.Tx/BZaMA8Od.7xTkmfqbYtd/nghnZn3O.0jPXpvBG', 'Administrator', 'nTD8xctBSnqAwavOjHQJjZrqiZguuw9zK3GaAmi2VcCHuR1qbdsqkhETnVPU', '2018-07-29 19:40:45', '2018-07-29 19:40:45'),
(6, 'Akun Demo', 'demo@gmail.com', '$2y$10$SaVxuZ0IuIm0Xza3LQZgtePWqSTtUW4.tu/hFtGfwLfFp7Bv.mjgq', 'User', 'WSK3pAYpT54kyb9cz1nl2Ay8zUmtv8kN8vTdwwr7LgldNsFUABP5MNPeF8AU', '2018-08-01 07:25:07', '2018-08-01 07:25:07'),
(8, 'Admin Web', 'admin@admin.com', '$2y$10$Mwpn7lVx1Iryx9V7oCXEL.8sifLv9mlPg5FkTkILfqBwb8rivEBku', 'Administrator', 'e3ZRixkv2Lz376kcAVBjgymJK7ogK4igf6OxN5S4P8JAGeVSVzj2TP1y3mAI', '2018-08-25 12:49:38', '2018-08-25 12:49:38');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_user_id_foreign` (`user_id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resources_project_id_foreign` (`project_id`);

--
-- Indexes for table `skema`
--
ALTER TABLE `skema`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skema_resource_id_foreign` (`resource_id`);

--
-- Indexes for table `skemaopsi`
--
ALTER TABLE `skemaopsi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skemaopsi_skemaopsigroup_id_foreign` (`skemaopsigroup_id`);

--
-- Indexes for table `skemaopsigroup`
--
ALTER TABLE `skemaopsigroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userprojects`
--
ALTER TABLE `userprojects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userprojects_user_id_foreign` (`user_id`),
  ADD KEY `userprojects_project_id_foreign` (`project_id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1536904600;
--
-- AUTO_INCREMENT for table `skema`
--
ALTER TABLE `skema`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=741;
--
-- AUTO_INCREMENT for table `skemaopsi`
--
ALTER TABLE `skemaopsi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `skemaopsigroup`
--
ALTER TABLE `skemaopsigroup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `userprojects`
--
ALTER TABLE `userprojects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resources_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `skema`
--
ALTER TABLE `skema`
  ADD CONSTRAINT `skema_resource_id_foreign` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `skemaopsi`
--
ALTER TABLE `skemaopsi`
  ADD CONSTRAINT `skemaopsi_skemaopsigroup_id_foreign` FOREIGN KEY (`skemaopsigroup_id`) REFERENCES `skemaopsigroup` (`id`);

--
-- Ketidakleluasaan untuk tabel `userprojects`
--
ALTER TABLE `userprojects`
  ADD CONSTRAINT `userprojects_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `userprojects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
