-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-11-2023 a las 23:34:56
-- Versión del servidor: 8.0.35-0ubuntu0.22.04.1
-- Versión de PHP: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sanctumAbilites2223`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_06_190404_create_partes_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partes`
--

CREATE TABLE `partes` (
  `id` bigint UNSIGNED NOT NULL,
  `alumno` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gravedad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `idprofesor` bigint UNSIGNED NOT NULL,
  `observaciones` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `partes`
--

INSERT INTO `partes` (`id`, `alumno`, `gravedad`, `idprofesor`, `observaciones`, `created_at`, `updated_at`) VALUES
(1, 'Alexanne Rice III', 'Leve', 1, 'Omnis iusto debitis vitae ea aut. Fugit eaque et et. Necessitatibus nemo aut et.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(2, 'Miss Keira Cormier', 'Leve', 10, 'Sed ullam quibusdam sunt ad enim. Dolores esse aperiam modi. Tempora impedit aut quo rerum.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(3, 'May Dibbert III', 'Leve', 2, 'Porro perspiciatis molestiae adipisci. Labore aliquam dolor quae dolores. Deserunt qui qui id est.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(5, 'Cielo Prosacco', 'Leve', 3, 'Non vero doloremque consequatur. Rerum illum quia aspernatur quia iure nemo vel.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(6, 'Willie Green', 'Leve', 2, 'Eos culpa eius ad et porro eaque dolores iste. Cum qui ad quod officia praesentium.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(7, 'Ms. Melba Stamm II', 'Destierro', 4, 'Fuga vero reiciendis enim. Quis odio quos fugit.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(8, 'Luisa Bode', 'Leve', 9, 'Fuga et recusandae ut corporis. Consequatur consequuntur ut nemo at consequuntur perferendis.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(9, 'Breanna Sporer', 'Destierro', 6, 'Illo quisquam et recusandae maiores cupiditate et. Hic vero non ut ut.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(10, 'Deion Moen', 'Grave', 2, 'Ut et veritatis minus adipisci non officia. Rerum doloremque placeat nobis pariatur velit est non.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(11, 'Odessa Kohler Jr.', 'Destierro', 4, 'Sapiente temporibus modi ad ipsa. Quam deserunt laudantium ut doloremque blanditiis.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(12, 'Ezekiel Metz', 'Grave', 1, 'Eligendi voluptatem qui minus. Adipisci veritatis alias nesciunt. Impedit dolor eius consequuntur.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(13, 'Agnes Breitenberg', 'Grave', 9, 'Totam quidem mollitia expedita neque aut. Qui dignissimos corrupti voluptatem et incidunt.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(14, 'Elian Wunsch PhD', 'Grave', 6, 'Quisquam aut accusamus animi. Perferendis sed dolorem ipsam tempore ut suscipit quaerat.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(15, 'Dr. Cydney Zulauf I', 'Leve', 5, 'Quo in provident ut repellendus. Ad nemo pariatur velit impedit.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(16, 'Mr. Seamus Price DDS', 'Destierro', 10, 'Reprehenderit at aut amet deserunt debitis ipsum. Dolorem nihil est et omnis debitis.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(17, 'Hilario Keebler Sr.', 'Grave', 10, 'Distinctio quo dolorum tempora ea. Neque beatae corporis dolores.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(18, 'Glenna Hahn', 'Destierro', 10, 'Accusamus et aut aut autem. Quo laudantium facilis et sit deserunt et.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(19, 'Greyson Champlin Sr.', 'Grave', 1, 'Non fugiat quis quo cumque quia quaerat eum. Consectetur molestias eveniet harum sunt a quam.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(20, 'Billie Mohr', 'Leve', 7, 'Et esse non sit corporis repudiandae voluptatem. Laborum quia animi ex expedita.', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(21, 'Khattari', 'Destierro.', 11, 'Kobayasi Maru, no digo más', '2022-11-07 07:41:42', '2022-11-07 07:41:42'),
(22, 'Miriam', 'Destierro', 11, 'Por sus ataques de ira', '2022-11-08 20:15:35', '2022-11-08 20:15:35'),
(23, 'Miriam', 'Destierro', 11, 'Por sus ataques de ira', '2022-11-09 11:14:58', '2022-11-09 11:14:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 7, 'token_acceso', '42975694b8d6f9ad6c8ee3c513296f0cae604dafb1b2479d60f586444f78fadd', '[\"*\"]', '2022-11-07 08:41:16', '2022-11-07 07:28:06', '2022-11-07 08:41:16'),
(7, 'App\\Models\\User', 11, 'token_acceso', 'e01e01277b1f82db1024621dba4d55dc5562ca09fec72a6b258f00ef3f8b2d51', '[\"delete\",\"create\",\"otracosa\"]', '2022-11-07 08:08:03', '2022-11-07 08:07:23', '2022-11-07 08:08:03'),
(8, 'App\\Models\\User', 11, 'access_token', 'ec0ff40149e120650ed1ca3cd75a63f9dad6624267387c1813683cf722e274c9', '[\"read\"]', NULL, '2022-11-08 20:01:25', '2022-11-08 20:01:25'),
(9, 'App\\Models\\User', 11, 'access_token', '9e3f3c3609fe60e8d80e4ce12b9261350aab0f093387c34a1f2b62c38252356a', '[\"read\",\"delete\"]', NULL, '2022-11-08 20:02:10', '2022-11-08 20:02:10'),
(10, 'App\\Models\\User', 12, 'nuevo', 'b0218c852f40abd002873878005786b531c2d19827d58656dd03c400bec37b37', '[\"read\",\"create\"]', NULL, '2022-11-08 20:03:58', '2022-11-08 20:03:58'),
(11, 'App\\Models\\User', 13, 'nuevo', '05d4d51bfc1e15a3220ae71a4eca07fb56d1a23b5ad186ffc11396672e3d7cc4', '[\"read\",\"create\"]', NULL, '2022-11-08 20:08:04', '2022-11-08 20:08:04'),
(12, 'App\\Models\\User', 14, 'nuevo', '08b2714c8acc83a942d354bf8fcd410ff65549b23f88215b6bd47148ae311ff5', '[\"read\",\"create\"]', NULL, '2022-11-08 20:08:13', '2022-11-08 20:08:13'),
(13, 'App\\Models\\User', 11, 'access_token', 'e9d67788a3a95a7ec3de2d6c3d86324a4e50e9c78f42a049e10cb7abde6742f0', '[\"read\",\"delete\"]', '2022-11-09 11:14:58', '2022-11-08 20:09:50', '2022-11-09 11:14:58'),
(14, 'App\\Models\\User', 15, 'nuevo', '64f6de4432dd276f64b0f72df79cb9cf67380ae69b9ba3732214eb9090e009f1', '[\"read\",\"create\"]', NULL, '2022-11-09 11:12:29', '2022-11-09 11:12:29'),
(27, 'App\\Models\\User', 22, 'nuevo', '9d0306179ca9692de015c161327b84b7d108be47bf037d9f2cf424ed83c7b677', '[\"read\",\"create\"]', NULL, '2023-11-20 21:23:04', '2023-11-20 21:23:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `departamento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int NOT NULL,
  `cargo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `departamento`, `edad`, `cargo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lonzo Stiedemann', 'jglover@example.org', '2022-11-07 07:09:06', '$2y$10$yrDKQdy0LUffslkTLuWmJ.zY49ApnDsuz4HrQtEmV6V/Pa4YDqY/.', 'Física o Química', 86, 'tutor', 'Vra5iV0zpL', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(2, 'Cora Jacobson V', 'iolson@example.org', '2022-11-07 07:09:06', '$2y$10$ntgJ49Qcd4Zko96OssUJWOCY.aBTVkr.FNLEfGQrb/T01oLmgw9XO', 'Educación Física', 85, 'guardián de la luz de Ellendhil', 'XIRma24izh', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(3, 'Prof. Gaston Dooley III', 'bartoletti.audra@example.com', '2022-11-07 07:09:06', '$2y$10$vI6z5VZ2r/t2PcQ0mZ/cOet94W1Rc5.bFuLlsEgEMI/59eDfwpISi', 'Física o Química', 35, 'tutor', 'c7q6ZNk3wD', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(4, 'Dr. Monte Bayer IV', 'qeffertz@example.net', '2022-11-07 07:09:06', '$2y$10$7SXXK/KpZRaRE459prFjCu.F/iAjXFbhnbi4PWFqMutbbxvefaTna', 'Administración', 25, 'jefe de estudios', 'fDaw1q6TWn', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(5, 'Sammie Sipes', 'onie.padberg@example.org', '2022-11-07 07:09:06', '$2y$10$0mn3IPio3xMfVP0hEto1a.okbwXgIe4.FwB509vyWz1Kz3jHjUMnO', 'Administración', 37, 'profesor', 'L3g8kI36mv', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(6, 'Garth Auer', 'destini64@example.net', '2022-11-07 07:09:06', '$2y$10$wG4pTrRd.8y4dbjlDZsyo.5efk/BETAjjX3yAYLVt7CzqXx7Nrbhe', 'Frío y Calor', 79, 'jefe de estudios', 'oZ4IbuM2ML', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(7, 'Meda Beahan', 'rath.merl@example.org', '2022-11-07 07:09:06', '$2y$10$uhzyyUGFtlUmFYgYx1Oo8uHC5AuH/d4U1SsFXabboAPrf9U42gmZm', 'Física o Química', 46, 'tutor', '54eEd7L1o6', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(8, 'Miss Calista Kessler', 'sonya84@example.net', '2022-11-07 07:09:06', '$2y$10$hf.LgB9dQMDHhrupISBBt.ZZpEHdZuQl.5FzQ0T4rR7Tm0FLGEx7u', 'Informática', 61, 'guardián de la luz de Ellendhil', 'QrcKQCbYvG', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(9, 'Prof. Ernesto Howell I', 'herbert.conroy@example.com', '2022-11-07 07:09:07', '$2y$10$WAxmVnlfnZ47SChZyJzR2ug/PWovtMSSaNNkP0k8ck/jqRhPUVj0O', 'Educación Física', 100, 'jefe de estudios', 'boxkI9DSwD', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(10, 'Shanna Bergstrom', 'dangelo.hudson@example.org', '2022-11-07 07:09:07', '$2y$10$o0ha6YzGk5bq5aEp4sTNwORziXHfWdXcP2yPq.ZRyZcWHCvmG4e/.', 'Administración', 81, 'profesor', 'ca28b0FddJ', '2022-11-07 07:09:07', '2022-11-07 07:09:07'),
(11, 'Fernando', 'faranzabe@gmail.com', NULL, '$2y$10$MVN/nRgsyszyIfV70RpjrO8Np2D.QVaLVODeV3H1r6q54wHtOBlw2', 'Informática', 157, 'Padawan', NULL, '2022-11-07 07:40:32', '2022-11-07 07:40:32');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `partes`
--
ALTER TABLE `partes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `partes_id_unique` (`id`),
  ADD KEY `partes_idprofesor_foreign` (`idprofesor`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `partes`
--
ALTER TABLE `partes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `partes`
--
ALTER TABLE `partes`
  ADD CONSTRAINT `partes_idprofesor_foreign` FOREIGN KEY (`idprofesor`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
