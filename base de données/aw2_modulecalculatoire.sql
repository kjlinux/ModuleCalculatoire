-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 24 avr. 2023 à 13:06
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `aw2_modulecalculatoire`
--

-- --------------------------------------------------------

--
-- Structure de la table `historiques`
--

DROP TABLE IF EXISTS `historiques`;
CREATE TABLE IF NOT EXISTS `historiques` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `contenu` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `historiques_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `historiques`
--

INSERT INTO `historiques` (`id`, `contenu`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 'Combinaison de 12 dans 3 = 220', 1, '2023-04-24 11:18:24', '2023-04-24 11:18:24'),
(3, 'Vous êtes en dénutrition. pour un poids de 123 kgs et une taille de 231 cm', 1, '2023-04-23 20:04:08', '2023-04-23 20:04:08'),
(4, 'Vous êtes en dénutrition. pour un poids de 123 kgs et une taille de 324 cm', 1, '2023-04-23 21:49:17', '2023-04-23 21:49:17'),
(5, 'Vous êtes en dénutrition. pour un poids de 45 kgs et une taille de 112 cm', 1, '2023-04-23 21:52:58', '2023-04-23 21:52:58'),
(6, 'Vous êtes en dénutrition. pour un poids de 5464 kgs et une taille de 14566475465 cm', 1, '2023-04-23 22:22:01', '2023-04-23 22:22:01'),
(7, '324656 mm = 12781.732283465 pouce', 1, '2023-04-24 01:41:28', '2023-04-24 01:41:28'),
(9, 'PGCD(5, 8) = 1', 1, '2023-04-24 11:18:34', '2023-04-24 11:18:34'),
(10, 'PPCM(56, 67) = 3752', 1, '2023-04-24 11:18:46', '2023-04-24 11:18:46'),
(11, 'La moyenne des éléments 2, 6, 7, 87 est 25.5', 1, '2023-04-24 11:20:31', '2023-04-24 11:20:31');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_04_23_114443_create_historiques_table', 2),
(3, '2013_04_23_184223_create_historiques_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jude', '$2y$10$r3p3X1hNT5jjtRenzIqcl.h0nAGVoTl0Ts/4GgFc/H0themv6Hj52', NULL, '2023-04-23 12:38:41', '2023-04-23 12:38:41');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
