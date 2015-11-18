-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 13, 2015 alle 17:05
-- Versione del server: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stillpoint`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE `media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `collection_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `disk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(10) unsigned NOT NULL,
  `manipulations` text COLLATE utf8_unicode_ci NOT NULL,
  `custom_properties` text COLLATE utf8_unicode_ci NOT NULL,
  `order_column` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `media_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dump dei dati per la tabella `media`
--

INSERT INTO `media` (`id`, `model_id`, `model_type`, `collection_name`, `name`, `file_name`, `disk`, `size`, `manipulations`, `custom_properties`, `order_column`, `created_at`, `updated_at`) VALUES
(2, 1, 'Stillpoint\\Models\\News', 'images', 'NYC-by-Bicycle-1 2', 'NYC-by-Bicycle-1 2.jpg', 'uploads', 776942, '[]', '[]', 1, '2015-11-09 10:46:58', '2015-11-09 10:46:58'),
(3, 4, 'Stillpoint\\Models\\News', 'images', '01_HP_RESTAURO 2', '01_HP_RESTAURO 2.jpg', 'uploads', 118077, '[]', '[]', 2, '2015-11-09 11:16:40', '2015-11-09 11:16:40'),
(4, 5, 'Stillpoint\\Models\\News', 'images', 'Fotolia_43117675_M 2', 'Fotolia_43117675_M 2.jpg', 'uploads', 1064071, '[]', '[]', 3, '2015-11-09 11:17:24', '2015-11-09 11:17:24'),
(5, 6, 'Stillpoint\\Models\\News', 'images', 'Fotolia_47439570_M 2', 'Fotolia_47439570_M 2.jpg', 'uploads', 1108998, '[]', '[]', 4, '2015-11-09 11:18:21', '2015-11-09 11:18:21');

-- --------------------------------------------------------

--
-- Struttura della tabella `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_11_06_113619_create_media_table', 1),
('2015_11_09_103021_create_news_table', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `featured_image_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dump dei dati per la tabella `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `excerpt`, `body`, `featured_image_id`, `created_at`, `updated_at`) VALUES
(1, 'Animi et doloribus debitis quo animi.', 'animi-et-doloribus-debitis-quo-animi', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat maxime, sint nobis omnis reiciendis ipsum excepturi ut. Animi eaque facere quasi magnam cumque nobis hic, cum minus ullam temporibus.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat maxime, sint nobis omnis reiciendis ipsum excepturi ut. Animi eaque facere quasi magnam cumque nobis hic, cum minus ullam temporibus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat maxime, sint nobis omnis reiciendis ipsum excepturi ut. Animi eaque facere quasi magnam cumque nobis hic, cum minus ullam temporibus.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat maxime, sint nobis omnis reiciendis ipsum excepturi ut. Animi eaque facere quasi magnam cumque nobis hic, cum minus ullam temporibus.<br></p>', 2, '2015-11-09 10:03:23', '2015-11-09 11:16:07'),
(4, 'The professionalism of Directors, key to European competitiveness', 'the-professionalism-of-directors-key-to-european-competitiveness', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat maxime, sint nobis omnis reiciendis ipsum excepturi ut. Animi eaque facere quasi magnam cumque nobis hic, cum minus ullam temporibus.', '<p><br></p>', 3, '2015-11-09 11:16:12', '2015-11-09 11:16:48'),
(5, 'Terzo titolo news', 'terzo-titolo-news', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat maxime, sint nobis omnis reiciendis ipsum excepturi ut. Animi eaque facere quasi magnam cumque nobis hic, cum minus ullam temporibus.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat maxime, sint nobis omnis reiciendis ipsum excepturi ut. Animi eaque facere quasi magnam cumque nobis hic, cum minus ullam temporibus.</p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat maxime, sint nobis omnis reiciendis ipsum excepturi ut. Animi eaque facere quasi magnam cumque nobis hic, cum minus ullam temporibus.<br></p>', 4, '2015-11-09 11:16:52', '2015-11-09 11:17:30'),
(6, 'Quarto titolo news', 'quarto-titolo-news', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat maxime, sint nobis omnis reiciendis ipsum excepturi ut. Animi eaque facere quasi magnam cumque nobis hic, cum minus ullam temporibus.asdsasddasd', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat maxime, sint nobis omnis reiciendis ipsum excepturi ut. Animi eaque facere quasi magnam cumque nobis hic, cum minus ullam temporibus.</p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat maxime, sint nobis omnis reiciendis ipsum excepturi ut. Animi eaque facere quasi magnam cumque nobis hic, cum minus ullam temporibus.</p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam placeat maxime, sint nobis omnis reiciendis ipsum excepturi ut. Animi eaque facere quasi magnam cumque nobis hic, cum minus ullam temporibus.<br></p>', 5, '2015-11-09 11:17:36', '2015-11-12 10:45:53');

-- --------------------------------------------------------

--
-- Struttura della tabella `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'StillPoint Admin', 'info@stillpoint.it', '$2y$10$Nv/FdR7hMZJ45O7K2n5MJO7YdCukuJ09RCfnEZEt1NPyJTyDCMQja', 'icP122DyvwehoWjNNrQ78Vv0Oz63NmyIcPWSgVosXceM43e3SbJL9QlwKoaq', '2015-11-09 09:46:30', '2015-11-12 10:55:07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
