-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 11 juin 2021 à 11:54
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dialo_yaya`
--

-- --------------------------------------------------------

--
-- Structure de la table `apporteurs_affaires`
--

CREATE TABLE `apporteurs_affaires` (
  `id` int(10) UNSIGNED NOT NULL,
  `raison_sociale` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_web` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_fixe` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ninea` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_contrat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fonction` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_cin_passeport` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode_reglement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_apporteur_affaire` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarque` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_associes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `apporteurs_affaires`
--

INSERT INTO `apporteurs_affaires` (`id`, `raison_sociale`, `adresse`, `site_web`, `tel_fixe`, `mail`, `ninea`, `rc`, `nom_contrat`, `fonction`, `numero_cin_passeport`, `tel_1`, `tel_2`, `tel_3`, `mode_reglement`, `type_apporteur_affaire`, `remarque`, `document_associes`, `created_at`, `updated_at`) VALUES
(1, 'a', 'Lot taroudant rue 3 n 30 sidi moumen casablanca', '63333333', '5', 'Houdaessaini7@gmail.com6TYHDS', 'uylyf', 'Houda', 'Houda Essaini', 'a', '11', '0707070707', '07343434345', '0522334455', 'a', 'b', 'houda', 'a', '2021-05-17 09:23:51', '2021-05-17 12:44:23'),
(3, 'a1', 'Lot taroudant rue 3 n 30 sidi moumen casablanca1', '633333331', '11', 'Houdaessaini7@gmail.com1', 'a1', 'Houda1', 'Essaini1', 'uyfk1', '555555551', '6877861', '073434343451', '05223344551', '454561', 'c151', 'houda1', 'a181', '2021-05-17 12:37:23', '2021-05-20 07:38:31'),
(4, 'a1', 'a2', 'a3', '4', 'a5', 'a6', 'a7', 'a8', 'a9', 'a10', '11', '12', '13', 'a14', 'a15', 'a16', 'a17', '2021-05-20 07:37:35', '2021-05-20 07:37:35');

-- --------------------------------------------------------

--
-- Structure de la table `chauffeurs`
--

CREATE TABLE `chauffeurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_prenom` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `numero_cin_passeport` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_permis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_permis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_derniere_visite_medicale` date DEFAULT NULL,
  `date_prochaine_visite_medicale` date DEFAULT NULL,
  `remarque` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documents_associes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `chauffeurs`
--

INSERT INTO `chauffeurs` (`id`, `nom_prenom`, `adresse`, `tel_1`, `tel_2`, `tel_3`, `date_naissance`, `numero_cin_passeport`, `numero_permis`, `type_permis`, `date_derniere_visite_medicale`, `date_prochaine_visite_medicale`, `remarque`, `documents_associes`, `created_at`, `updated_at`) VALUES
(2, 'Houda Essaini', 'Lot taroudant rue 3 n 30 sidi moumen casablanca', '0707070707', '07343434345', '0522334455', '2021-05-17', '1', '1', '1', '2021-05-17', '2021-05-17', '1', '12', '2021-05-17 08:44:10', '2021-05-17 08:44:16');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `raison_sociale` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_web` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_fixe` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_cin_passeport` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode_reglement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarque` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documents_associes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `raison_sociale`, `adresse`, `site_web`, `tel_fixe`, `mail`, `numero_cin_passeport`, `tel_1`, `tel_2`, `tel_3`, `mode_reglement`, `remarque`, `documents_associes`, `created_at`, `updated_at`) VALUES
(3, 'b', 'b', 'b', '2', 'b', '1', '11', '11', '11', 'a', 'ygufyutfu', 'fyutfutdu', '2021-05-17 08:45:01', '2021-05-17 08:45:01');

-- --------------------------------------------------------

--
-- Structure de la table `contrats`
--

CREATE TABLE `contrats` (
  `id` int(10) UNSIGNED NOT NULL,
  `statut_client` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lieux_mobilisation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_sommaire_travail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_derniere_facture` date DEFAULT NULL,
  `duree_HJSMA` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duree_quotidienne_travail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duree_pause` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duree_hebdomadaire_travail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carburant` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exonere` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contrats`
--

INSERT INTO `contrats` (`id`, `statut_client`, `Lieux_mobilisation`, `description_sommaire_travail`, `date_debut`, `date_derniere_facture`, `duree_HJSMA`, `duree_quotidienne_travail`, `duree_pause`, `duree_hebdomadaire_travail`, `carburant`, `exonere`, `type`, `created_at`, `updated_at`) VALUES
(1, 'a', 'a', 'a', '2021-05-17', '2021-05-17', '12', '12', '12', '12', 'a', 'a', '1', '2021-05-17 09:08:18', '2021-05-17 09:08:18');

-- --------------------------------------------------------

--
-- Structure de la table `contrat_details`
--

CREATE TABLE `contrat_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `contrats_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engins` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frais` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chauffeur_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chauffeur_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chauffeur_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contrat_details`
--

INSERT INTO `contrat_details` (`id`, `contrats_id`, `engins`, `frais`, `chauffeur_1`, `chauffeur_2`, `chauffeur_3`, `created_at`, `updated_at`) VALUES
(2, '1', 'tyfdj', 'ytjfj', 'tyj', 'tyligy', 'tyj', '2021-05-17 13:54:33', '2021-05-18 13:04:39'),
(3, '1', 'tyfdj', 'ytjfj', 'tyj', 'ty', 'tyj', '2021-05-18 13:04:17', '2021-05-18 13:04:17'),
(4, '1', 'tyfdj', 'ytjfj', 'tyj', 'ty', 'tyj', '2021-05-20 12:27:58', '2021-05-20 12:27:58');

-- --------------------------------------------------------

--
-- Structure de la table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(40, 5, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(41, 5, 'raison_sociale', 'text', 'Raison Sociale', 0, 1, 1, 1, 1, 1, '{}', 2),
(42, 5, 'adresse', 'text', 'Adresse', 0, 1, 1, 1, 1, 1, '{}', 3),
(43, 5, 'site_web', 'text', 'Site Web', 0, 1, 1, 1, 1, 1, '{}', 4),
(44, 5, 'tel_fixe', 'text', 'Tel Fixe', 0, 1, 1, 1, 1, 1, '{}', 5),
(45, 5, 'mail', 'text', 'Mail', 0, 1, 1, 1, 1, 1, '{}', 6),
(46, 5, 'ninea', 'text', 'Ninea', 0, 1, 1, 1, 1, 1, '{}', 7),
(47, 5, 'rc', 'text', 'Rc', 0, 1, 1, 1, 1, 1, '{}', 8),
(48, 5, 'nom_contrat', 'text', 'Nom Contrat', 0, 1, 1, 1, 1, 1, '{}', 9),
(49, 5, 'fonction', 'text', 'Fonction', 0, 1, 1, 1, 1, 1, '{}', 10),
(50, 5, 'numero_cin_passeport', 'text', 'Numero Cin Passeport', 0, 1, 1, 1, 1, 1, '{}', 11),
(51, 5, 'tel_1', 'text', 'Tel 1', 0, 1, 1, 1, 1, 1, '{}', 12),
(52, 5, 'tel_2', 'text', 'Tel 2', 0, 1, 1, 1, 1, 1, '{}', 13),
(53, 5, 'tel_3', 'text', 'Tel 3', 0, 1, 1, 1, 1, 1, '{}', 14),
(54, 5, 'mode_reglement', 'text', 'Mode Reglement', 0, 1, 1, 1, 1, 1, '{}', 15),
(55, 5, 'type_apporteur_affaire', 'text', 'Type Apporteur Affaire', 0, 1, 1, 1, 1, 1, '{}', 16),
(56, 5, 'remarque', 'text', 'Remarque', 0, 1, 1, 1, 1, 1, '{}', 17),
(57, 5, 'document_associes', 'text', 'Document Associes', 0, 1, 1, 1, 1, 1, '{}', 18),
(58, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 19),
(59, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 20),
(60, 6, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(61, 6, 'raison_sociale', 'text', 'Raison Sociale', 0, 1, 1, 1, 1, 1, '{}', 2),
(62, 6, 'adresse', 'text', 'Adresse', 0, 1, 1, 1, 1, 1, '{}', 3),
(63, 6, 'site_web', 'text', 'Site Web', 0, 1, 1, 1, 1, 1, '{}', 4),
(64, 6, 'tel_fixe', 'text', 'Tel Fixe', 0, 1, 1, 1, 1, 1, '{}', 5),
(65, 6, 'mail', 'text', 'Mail', 0, 1, 1, 1, 1, 1, '{}', 6),
(66, 6, 'numero_cin_passeport', 'text', 'Numero Cin Passeport', 0, 1, 1, 1, 1, 1, '{}', 7),
(67, 6, 'tel_1', 'text', 'Tel 1', 0, 1, 1, 1, 1, 1, '{}', 8),
(68, 6, 'tel_2', 'text', 'Tel 2', 0, 1, 1, 1, 1, 1, '{}', 9),
(69, 6, 'tel_3', 'text', 'Tel 3', 0, 1, 1, 1, 1, 1, '{}', 10),
(70, 6, 'mode_reglement', 'text', 'Mode Reglement', 0, 1, 1, 1, 1, 1, '{}', 11),
(71, 6, 'remarque', 'text', 'Remarque', 0, 1, 1, 1, 1, 1, '{}', 12),
(72, 6, 'documents_associes', 'text', 'Documents Associes', 0, 1, 1, 1, 1, 1, '{}', 13),
(73, 6, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 14),
(74, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 15),
(75, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(76, 7, 'nom_prenom', 'text', 'Nom Prenom', 0, 1, 1, 1, 1, 1, '{}', 2),
(77, 7, 'adresse', 'text', 'Adresse', 0, 1, 1, 1, 1, 1, '{}', 3),
(78, 7, 'tel_1', 'text', 'Tel 1', 0, 1, 1, 1, 1, 1, '{}', 4),
(79, 7, 'tel_2', 'text', 'Tel 2', 0, 1, 1, 1, 1, 1, '{}', 5),
(80, 7, 'tel_3', 'text', 'Tel 3', 0, 1, 1, 1, 1, 1, '{}', 6),
(81, 7, 'date_naissance', 'text', 'Date Naissance', 0, 1, 1, 1, 1, 1, '{}', 7),
(82, 7, 'numero_cin_passeport', 'text', 'Numero Cin Passeport', 0, 1, 1, 1, 1, 1, '{}', 8),
(83, 7, 'numero_permis', 'text', 'Numero Permis', 0, 1, 1, 1, 1, 1, '{}', 9),
(84, 7, 'type_permis', 'text', 'Type Permis', 0, 1, 1, 1, 1, 1, '{}', 10),
(85, 7, 'date_derniere_visite_medicale', 'text', 'Date Derniere Visite Medicale', 0, 1, 1, 1, 1, 1, '{}', 11),
(86, 7, 'date_prochaine_visite_medicale', 'text', 'Date Prochaine Visite Medicale', 0, 1, 1, 1, 1, 1, '{}', 12),
(87, 7, 'remarque', 'text', 'Remarque', 0, 1, 1, 1, 1, 1, '{}', 13),
(88, 7, 'documents_associes', 'text', 'Documents Associes', 0, 1, 1, 1, 1, 1, '{}', 14),
(89, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 15),
(90, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 16),
(91, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(92, 8, 'statut_client', 'text', 'Statut Client', 0, 1, 1, 1, 1, 1, '{}', 2),
(93, 8, 'Lieux_mobilisation', 'text', 'Lieux Mobilisation', 0, 1, 1, 1, 1, 1, '{}', 3),
(94, 8, 'description_sommaire_travail', 'text', 'Description Sommaire Travail', 0, 1, 1, 1, 1, 1, '{}', 4),
(95, 8, 'date_debut', 'text', 'Date Debut', 0, 1, 1, 1, 1, 1, '{}', 5),
(96, 8, 'date_derniere_facture', 'text', 'Date Derniere Facture', 0, 1, 1, 1, 1, 1, '{}', 6),
(97, 8, 'duree_HJSMA', 'text', 'Duree HJSMA', 0, 1, 1, 1, 1, 1, '{}', 7),
(98, 8, 'duree_quotidienne_travail', 'text', 'Duree Quotidienne Travail', 0, 1, 1, 1, 1, 1, '{}', 8),
(99, 8, 'duree_pause', 'text', 'Duree Pause', 0, 1, 1, 1, 1, 1, '{}', 9),
(100, 8, 'duree_hebdomadaire_travail', 'text', 'Duree Hebdomadaire Travail', 0, 1, 1, 1, 1, 1, '{}', 10),
(101, 8, 'carburant', 'text', 'Carburant', 0, 1, 1, 1, 1, 1, '{}', 11),
(102, 8, 'exonere', 'text', 'Exonere', 0, 1, 1, 1, 1, 1, '{}', 12),
(103, 8, 'type', 'text', 'Type', 0, 1, 1, 1, 1, 1, '{}', 13),
(104, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 14),
(105, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 15),
(122, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(123, 10, 'contrats_id', 'text', 'Contrats Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(124, 10, 'engins', 'text', 'Engins', 0, 1, 1, 1, 1, 1, '{}', 3),
(125, 10, 'frais', 'text', 'Frais', 0, 1, 1, 1, 1, 1, '{}', 4),
(126, 10, 'chauffeur_1', 'text', 'Chauffeur 1', 0, 1, 1, 1, 1, 1, '{}', 5),
(127, 10, 'chauffeur_2', 'text', 'Chauffeur 2', 0, 1, 1, 1, 1, 1, '{}', 6),
(128, 10, 'chauffeur_3', 'text', 'Chauffeur 3', 0, 1, 1, 1, 1, 1, '{}', 7),
(129, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(130, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(150, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(151, 12, 'nom_prenom', 'text', 'Nom Prenom', 0, 1, 1, 1, 1, 1, '{}', 2),
(152, 12, 'adresse', 'text', 'Adresse', 0, 1, 1, 1, 1, 1, '{}', 3),
(153, 12, 'tel_fixe', 'text', 'Tel Fixe', 0, 1, 1, 1, 1, 1, '{}', 4),
(154, 12, 'mail', 'text', 'Mail', 0, 1, 1, 1, 1, 1, '{}', 5),
(155, 12, 'ninea', 'text', 'Ninea', 0, 1, 1, 1, 1, 1, '{}', 6),
(156, 12, 'rc', 'text', 'Rc', 0, 1, 1, 1, 1, 1, '{}', 7),
(157, 12, 'nom_contrat', 'text', 'Nom Contrat', 0, 1, 1, 1, 1, 1, '{}', 8),
(158, 12, 'fonction', 'text', 'Fonction', 0, 1, 1, 1, 1, 1, '{}', 9),
(159, 12, 'numero_cin', 'text', 'Numero Cin', 0, 1, 1, 1, 1, 1, '{}', 10),
(160, 12, 'telephone_1', 'text', 'Telephone 1', 0, 1, 1, 1, 1, 1, '{}', 11),
(161, 12, 'telephone_2', 'text', 'Telephone 2', 0, 1, 1, 1, 1, 1, '{}', 12),
(162, 12, 'telephone_3', 'text', 'Telephone 3', 0, 1, 1, 1, 1, 1, '{}', 13),
(163, 12, 'type_de_fournisseur', 'text', 'Type De Fournisseur', 0, 1, 1, 1, 1, 1, '{}', 14),
(164, 12, 'remarque', 'text', 'Remarque', 0, 1, 1, 1, 1, 1, '{}', 15),
(165, 12, 'documents_associes', 'text', 'Documents Associes', 0, 1, 1, 1, 1, 1, '{}', 16),
(166, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 17),
(167, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 18),
(168, 12, 'site_web', 'text', 'Site Web', 0, 1, 1, 1, 1, 1, '{}', 19),
(171, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(172, 13, 'id_soc', 'text', 'Id Soc', 0, 1, 1, 1, 1, 1, '{}', 2),
(173, 13, 'date', 'text', 'Date', 0, 1, 1, 1, 1, 1, '{}', 3),
(174, 13, 'valide_a_date', 'text', 'Valide A Date', 0, 1, 1, 1, 1, 1, '{}', 4),
(175, 13, 'total_ht', 'text', 'Total Ht', 0, 1, 1, 1, 1, 1, '{}', 5),
(176, 13, 'total_tva', 'text', 'Total Tva', 0, 1, 1, 1, 1, 1, '{}', 6),
(177, 13, 'total_ttc', 'text', 'Total Ttc', 0, 1, 1, 1, 1, 1, '{}', 7),
(178, 13, 'status', 'text', 'Status', 0, 1, 1, 1, 1, 1, '{}', 8),
(179, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 9),
(180, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(181, 13, 'devi_belongsto_client_relationship', 'relationship', 'clients', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Client\",\"table\":\"clients\",\"type\":\"belongsTo\",\"column\":\"id_soc\",\"key\":\"id\",\"label\":\"id\",\"pivot_table\":\"apporteurs_affaires\",\"pivot\":\"0\",\"taggable\":null}', 11),
(199, 15, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(200, 15, 'fournisseur_id', 'text', 'Fournisseur Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(201, 15, 'type_engin', 'text', 'Type Engin', 0, 1, 1, 1, 1, 1, '{}', 3),
(202, 15, 'annee', 'text', 'Annee', 0, 1, 1, 1, 1, 1, '{}', 4),
(203, 15, 'nombre_heure', 'text', 'Nombre Heure', 0, 1, 1, 1, 1, 1, '{}', 5),
(204, 15, 'kilometrage', 'text', 'Kilometrage', 0, 1, 1, 1, 1, 1, '{}', 6),
(205, 15, 'consommation_heure_100km', 'text', 'Consommation Heure 100km', 0, 1, 1, 1, 1, 1, '{}', 7),
(206, 15, 'date_dernier_controle', 'text', 'Date Dernier Controle', 0, 1, 1, 1, 1, 1, '{}', 8),
(207, 15, 'date_prochain_controle', 'text', 'Date Prochain Controle', 0, 1, 1, 1, 1, 1, '{}', 9),
(208, 15, 'numero_police_assurance', 'text', 'Numero Police Assurance', 0, 1, 1, 1, 1, 1, '{}', 10),
(209, 15, 'compagnie', 'text', 'Compagnie', 0, 1, 1, 1, 1, 1, '{}', 11),
(210, 15, 'date_fin_validite', 'text', 'Date Fin Validite', 0, 1, 1, 1, 1, 1, '{}', 12),
(211, 15, 'remarque', 'text', 'Remarque', 0, 1, 1, 1, 1, 1, '{}', 13),
(212, 15, 'documents_associes', 'text', 'Documents Associes', 0, 1, 1, 1, 1, 1, '{}', 14),
(213, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 15),
(214, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 16),
(215, 15, 'modele', 'text', 'Modele', 0, 1, 1, 1, 1, 1, '{}', 17),
(217, 15, 'engin_hasone_fournisseur_relationship', 'relationship', 'fournisseurs', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Fournisseur\",\"table\":\"fournisseurs\",\"type\":\"hasOne\",\"column\":\"id\",\"key\":\"fournisseur_id\",\"label\":\"nom_prenom\",\"pivot_table\":\"apporteurs_affaires\",\"pivot\":\"0\",\"taggable\":\"0\"}', 18),
(218, 22, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(219, 22, 'devis_id', 'text', 'Devis Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(220, 22, 'engins_id', 'text', 'Engins Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(221, 22, 'prix_unit', 'text', 'Prix Unit', 0, 1, 1, 1, 1, 1, '{}', 4),
(222, 22, 'tva', 'text', 'Tva', 0, 1, 1, 1, 1, 1, '{}', 5),
(223, 22, 'qte', 'text', 'Qte', 0, 1, 1, 1, 1, 1, '{}', 6),
(224, 22, 'total_ht', 'text', 'Total Ht', 0, 1, 1, 1, 1, 1, '{}', 7),
(225, 22, 'total_tva', 'text', 'Total Tva', 0, 1, 1, 1, 1, 1, '{}', 8),
(226, 22, 'total_ttc', 'text', 'Total Ttc', 0, 1, 1, 1, 1, 1, '{}', 9),
(227, 22, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 10),
(228, 22, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(229, 22, 'reduction', 'text', 'Reduction', 0, 1, 1, 1, 1, 1, '{}', 12),
(230, 22, 'date', 'text', 'Date', 0, 1, 1, 1, 1, 1, '{}', 13),
(231, 22, 'date_fin_validite', 'text', 'Date Fin Validite', 0, 1, 1, 1, 1, 1, '{}', 14),
(232, 22, 'devis_detail_belongsto_engin_relationship', 'relationship', 'engins', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Engin\",\"table\":\"engins\",\"type\":\"belongsTo\",\"column\":\"engins_id\",\"key\":\"modele\",\"label\":\"id\",\"pivot_table\":\"apporteurs_affaires\",\"pivot\":\"0\",\"taggable\":\"0\"}', 15),
(233, 22, 'devis_detail_belongsto_devi_relationship', 'relationship', 'devis', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Devi\",\"table\":\"devis\",\"type\":\"belongsTo\",\"column\":\"devis_id\",\"key\":\"date\",\"label\":\"id\",\"pivot_table\":\"apporteurs_affaires\",\"pivot\":\"0\",\"taggable\":\"0\"}', 16);

-- --------------------------------------------------------

--
-- Structure de la table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2021-05-10 09:40:09', '2021-05-10 09:40:09'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2021-05-10 09:40:09', '2021-05-10 09:40:09'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2021-05-10 09:40:09', '2021-05-10 09:40:09'),
(5, 'apporteurs_affaires', 'apporteurs-affaires', 'Apporteurs Affaire', 'Apporteurs Affaires', NULL, 'App\\ApporteursAffaire', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-05-10 10:28:14', '2021-05-10 10:28:14'),
(6, 'clients', 'clients', 'Client', 'Clients', NULL, 'App\\Client', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-05-10 10:36:58', '2021-05-10 10:36:58'),
(7, 'chauffeurs', 'chauffeurs', 'Chauffeur', 'Chauffeurs', NULL, 'App\\Chauffeur', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-05-10 10:42:49', '2021-05-10 10:42:49'),
(8, 'contrats', 'contrats', 'Contrat', 'Contrats', NULL, 'App\\Contrat', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-05-10 11:09:33', '2021-05-10 11:09:33'),
(10, 'contrat_details', 'contrat-details', 'Contrat Detail', 'Contrat Details', NULL, 'App\\ContratDetail', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-05-10 11:18:15', '2021-05-10 11:18:15'),
(12, 'fournisseurs', 'fournisseurs', 'Fournisseur', 'Fournisseurs', NULL, 'App\\Fournisseur', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-05-11 12:26:10', '2021-05-11 12:26:10'),
(13, 'devis', 'devis', 'Devi', 'Devis', NULL, 'App\\Devi', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-05-20 08:17:06', '2021-05-20 08:17:06'),
(15, 'engins', 'engins', 'Engin', 'Engins', NULL, 'App\\Engin', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-05-25 09:28:08', '2021-05-28 08:46:24'),
(22, 'devis_details', 'devis-details', 'Devis Detail', 'Devis Details', NULL, 'App\\DevisDetail', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-05-28 09:07:25', '2021-05-28 09:09:02');

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

CREATE TABLE `devis` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_soc` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `valide_a_date` date DEFAULT NULL,
  `total_ht` int(11) DEFAULT NULL,
  `total_tva` int(11) DEFAULT NULL,
  `total_ttc` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `devis`
--

INSERT INTO `devis` (`id`, `id_soc`, `date`, `valide_a_date`, `total_ht`, `total_tva`, `total_ttc`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, '2015-02-12', '2015-02-12', 10000, 100, 1000777, '1', '2021-05-20 09:03:28', '2021-05-20 13:30:34');

-- --------------------------------------------------------

--
-- Structure de la table `devis_details`
--

CREATE TABLE `devis_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `devis_id` int(11) DEFAULT NULL,
  `engins_id` int(11) DEFAULT NULL,
  `prix_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tva` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qte` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_ht` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_tva` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_ttc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reduction` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `date_fin_validite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `devis_details`
--

INSERT INTO `devis_details` (`id`, `devis_id`, `engins_id`, `prix_unit`, `tva`, `qte`, `total_ht`, `total_tva`, `total_ttc`, `created_at`, `updated_at`, `reduction`, `date`, `date_fin_validite`) VALUES
(18, NULL, 2, '1', '1', '1', NULL, NULL, NULL, '2021-05-28 11:19:02', '2021-06-01 08:13:46', 122, NULL, NULL),
(26, NULL, 2, '500', '12', '51', NULL, NULL, NULL, '2021-06-01 09:01:55', '2021-06-01 09:44:46', 5, NULL, NULL),
(27, NULL, 2, '1', '1', '11', NULL, NULL, NULL, '2021-06-01 09:49:23', '2021-06-04 10:04:19', 122, NULL, NULL),
(28, 28, 2, '1000', '3', '50', NULL, NULL, NULL, '2021-06-04 10:06:00', '2021-06-07 12:18:57', 20, NULL, NULL),
(31, 1, 2, '100', '10', '1', NULL, NULL, NULL, '2021-06-08 11:40:35', '2021-06-08 11:40:48', 10, NULL, NULL),
(32, 1, 2, '1', '1', '1', NULL, NULL, NULL, '2021-06-08 11:41:56', '2021-06-08 11:41:56', 122, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `engins`
--

CREATE TABLE `engins` (
  `id` int(10) UNSIGNED NOT NULL,
  `fournisseur_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_engin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annee` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_heure` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kilometrage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consommation_heure_100km` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_dernier_controle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_prochain_controle` date DEFAULT NULL,
  `numero_police_assurance` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compagnie` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_fin_validite` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarque` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documents_associes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `modele` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `engins`
--

INSERT INTO `engins` (`id`, `fournisseur_id`, `type_engin`, `annee`, `nombre_heure`, `kilometrage`, `consommation_heure_100km`, `date_dernier_controle`, `date_prochain_controle`, `numero_police_assurance`, `compagnie`, `date_fin_validite`, `remarque`, `documents_associes`, `created_at`, `updated_at`, `modele`) VALUES
(2, '11', 'a1', '1', '1', 'a2', 'a3', '2021-05-17', '2021-05-17', 'a4', 'a5', '2021-05-17', 'a6', 'a7', '2021-05-17 08:42:41', '2021-05-25 09:35:48', 'a11'),
(3, '11', '1', '2', '3', '4', '5', '2021-05-20', '2021-05-20', '6', '7', '2021-05-20', '8', '9', '2021-05-20 08:52:48', '2021-05-25 09:35:55', '11'),
(4, '11', '1', '2', '3', '4', '5', '2021-05-21', '2021-05-20', '6', '7', '2021-05-23', '8', '9', '2021-05-20 11:46:58', '2021-05-25 09:36:02', '111');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `fournisseurs`
--

CREATE TABLE `fournisseurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_prenom` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_fixe` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ninea` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_contrat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fonction` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_cin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_de_fournisseur` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarque` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documents_associes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `site_web` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fournisseurs`
--

INSERT INTO `fournisseurs` (`id`, `nom_prenom`, `adresse`, `tel_fixe`, `mail`, `ninea`, `rc`, `nom_contrat`, `fonction`, `numero_cin`, `telephone_1`, `telephone_2`, `telephone_3`, `type_de_fournisseur`, `remarque`, `documents_associes`, `created_at`, `updated_at`, `site_web`) VALUES
(11, 'Houda Essaini', 'ufkluy', '0607821755', 'Houdaessaini7@gmail.com', 'uylyf', 'Houda', 'Essaini', 'uyfk', '888888', '0607821755', '0607821755', '0607821755', '96', '596', '656', '2021-05-11 12:37:25', '2021-05-12 09:46:54', 'gjjgr'),
(12, 'Houda Essaini', 'ufkluy', '0607821755', 'Houdaessaini7@gmail.com', 'uylyf', 'Houda', 'Essaini', 'uyfk', '888888', '0607821755', '0607821755', '0607821755', '96', '596', '656', '2021-05-11 12:37:25', '2021-05-12 09:46:59', 'yrdfyhird');

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-05-10 09:40:09', '2021-05-10 09:40:09');

-- --------------------------------------------------------

--
-- Structure de la table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2021-05-10 09:40:09', '2021-05-10 09:40:09', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2021-05-10 09:40:09', '2021-05-10 09:40:09', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2021-05-10 09:40:09', '2021-05-10 09:40:09', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2021-05-10 09:40:09', '2021-05-10 09:40:09', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2021-05-10 09:40:09', '2021-05-10 09:40:09', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2021-05-10 09:40:09', '2021-05-10 09:40:09', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2021-05-10 09:40:09', '2021-05-10 09:40:09', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2021-05-10 09:40:10', '2021-05-10 09:40:10', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2021-05-10 09:40:10', '2021-05-10 09:40:10', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2021-05-10 09:40:10', '2021-05-10 09:40:10', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 13, '2021-05-10 09:40:10', '2021-05-10 09:40:10', 'voyager.hooks', NULL),
(13, 1, 'Apporteurs Affaires', '', '_self', NULL, NULL, NULL, 16, '2021-05-10 10:28:14', '2021-05-10 10:28:14', 'voyager.apporteurs-affaires.index', NULL),
(14, 1, 'Clients', '', '_self', NULL, NULL, NULL, 17, '2021-05-10 10:36:58', '2021-05-10 10:36:58', 'voyager.clients.index', NULL),
(15, 1, 'Chauffeurs', '', '_self', NULL, NULL, NULL, 18, '2021-05-10 10:42:49', '2021-05-10 10:42:49', 'voyager.chauffeurs.index', NULL),
(16, 1, 'Contrats', '', '_self', NULL, NULL, NULL, 19, '2021-05-10 11:09:33', '2021-05-10 11:09:33', 'voyager.contrats.index', NULL),
(18, 1, 'Contrat Details', '', '_self', NULL, NULL, NULL, 21, '2021-05-10 11:18:15', '2021-05-10 11:18:15', 'voyager.contrat-details.index', NULL),
(20, 1, 'Fournisseurs', '', '_self', NULL, NULL, NULL, 22, '2021-05-11 12:26:10', '2021-05-11 12:26:10', 'voyager.fournisseurs.index', NULL),
(21, 1, 'Devis', '', '_self', NULL, NULL, NULL, 23, '2021-05-20 08:17:06', '2021-05-20 08:17:06', 'voyager.devis.index', NULL),
(23, 1, 'Engins', '', '_self', NULL, NULL, NULL, 25, '2021-05-25 09:28:08', '2021-05-25 09:28:08', 'voyager.engins.index', NULL),
(30, 1, 'Devis Details', '', '_self', NULL, NULL, NULL, 26, '2021-05-28 09:07:25', '2021-05-28 09:07:25', 'voyager.devis-details.index', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(2, 'browse_bread', NULL, '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(3, 'browse_database', NULL, '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(4, 'browse_media', NULL, '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(5, 'browse_compass', NULL, '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(6, 'browse_menus', 'menus', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(7, 'read_menus', 'menus', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(8, 'edit_menus', 'menus', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(9, 'add_menus', 'menus', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(10, 'delete_menus', 'menus', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(11, 'browse_roles', 'roles', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(12, 'read_roles', 'roles', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(13, 'edit_roles', 'roles', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(14, 'add_roles', 'roles', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(15, 'delete_roles', 'roles', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(16, 'browse_users', 'users', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(17, 'read_users', 'users', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(18, 'edit_users', 'users', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(19, 'add_users', 'users', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(20, 'delete_users', 'users', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(21, 'browse_settings', 'settings', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(22, 'read_settings', 'settings', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(23, 'edit_settings', 'settings', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(24, 'add_settings', 'settings', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(25, 'delete_settings', 'settings', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(26, 'browse_hooks', NULL, '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(32, 'browse_apporteurs_affaires', 'apporteurs_affaires', '2021-05-10 10:28:14', '2021-05-10 10:28:14'),
(33, 'read_apporteurs_affaires', 'apporteurs_affaires', '2021-05-10 10:28:14', '2021-05-10 10:28:14'),
(34, 'edit_apporteurs_affaires', 'apporteurs_affaires', '2021-05-10 10:28:14', '2021-05-10 10:28:14'),
(35, 'add_apporteurs_affaires', 'apporteurs_affaires', '2021-05-10 10:28:14', '2021-05-10 10:28:14'),
(36, 'delete_apporteurs_affaires', 'apporteurs_affaires', '2021-05-10 10:28:14', '2021-05-10 10:28:14'),
(37, 'browse_clients', 'clients', '2021-05-10 10:36:58', '2021-05-10 10:36:58'),
(38, 'read_clients', 'clients', '2021-05-10 10:36:58', '2021-05-10 10:36:58'),
(39, 'edit_clients', 'clients', '2021-05-10 10:36:58', '2021-05-10 10:36:58'),
(40, 'add_clients', 'clients', '2021-05-10 10:36:58', '2021-05-10 10:36:58'),
(41, 'delete_clients', 'clients', '2021-05-10 10:36:58', '2021-05-10 10:36:58'),
(42, 'browse_chauffeurs', 'chauffeurs', '2021-05-10 10:42:49', '2021-05-10 10:42:49'),
(43, 'read_chauffeurs', 'chauffeurs', '2021-05-10 10:42:49', '2021-05-10 10:42:49'),
(44, 'edit_chauffeurs', 'chauffeurs', '2021-05-10 10:42:49', '2021-05-10 10:42:49'),
(45, 'add_chauffeurs', 'chauffeurs', '2021-05-10 10:42:49', '2021-05-10 10:42:49'),
(46, 'delete_chauffeurs', 'chauffeurs', '2021-05-10 10:42:49', '2021-05-10 10:42:49'),
(47, 'browse_contrats', 'contrats', '2021-05-10 11:09:33', '2021-05-10 11:09:33'),
(48, 'read_contrats', 'contrats', '2021-05-10 11:09:33', '2021-05-10 11:09:33'),
(49, 'edit_contrats', 'contrats', '2021-05-10 11:09:33', '2021-05-10 11:09:33'),
(50, 'add_contrats', 'contrats', '2021-05-10 11:09:33', '2021-05-10 11:09:33'),
(51, 'delete_contrats', 'contrats', '2021-05-10 11:09:33', '2021-05-10 11:09:33'),
(57, 'browse_contrat_details', 'contrat_details', '2021-05-10 11:18:15', '2021-05-10 11:18:15'),
(58, 'read_contrat_details', 'contrat_details', '2021-05-10 11:18:15', '2021-05-10 11:18:15'),
(59, 'edit_contrat_details', 'contrat_details', '2021-05-10 11:18:15', '2021-05-10 11:18:15'),
(60, 'add_contrat_details', 'contrat_details', '2021-05-10 11:18:15', '2021-05-10 11:18:15'),
(61, 'delete_contrat_details', 'contrat_details', '2021-05-10 11:18:15', '2021-05-10 11:18:15'),
(67, 'browse_fournisseurs', 'fournisseurs', '2021-05-11 12:26:10', '2021-05-11 12:26:10'),
(68, 'read_fournisseurs', 'fournisseurs', '2021-05-11 12:26:10', '2021-05-11 12:26:10'),
(69, 'edit_fournisseurs', 'fournisseurs', '2021-05-11 12:26:10', '2021-05-11 12:26:10'),
(70, 'add_fournisseurs', 'fournisseurs', '2021-05-11 12:26:10', '2021-05-11 12:26:10'),
(71, 'delete_fournisseurs', 'fournisseurs', '2021-05-11 12:26:10', '2021-05-11 12:26:10'),
(72, 'browse_devis', 'devis', '2021-05-20 08:17:06', '2021-05-20 08:17:06'),
(73, 'read_devis', 'devis', '2021-05-20 08:17:06', '2021-05-20 08:17:06'),
(74, 'edit_devis', 'devis', '2021-05-20 08:17:06', '2021-05-20 08:17:06'),
(75, 'add_devis', 'devis', '2021-05-20 08:17:06', '2021-05-20 08:17:06'),
(76, 'delete_devis', 'devis', '2021-05-20 08:17:06', '2021-05-20 08:17:06'),
(82, 'browse_engins', 'engins', '2021-05-25 09:28:08', '2021-05-25 09:28:08'),
(83, 'read_engins', 'engins', '2021-05-25 09:28:08', '2021-05-25 09:28:08'),
(84, 'edit_engins', 'engins', '2021-05-25 09:28:08', '2021-05-25 09:28:08'),
(85, 'add_engins', 'engins', '2021-05-25 09:28:08', '2021-05-25 09:28:08'),
(86, 'delete_engins', 'engins', '2021-05-25 09:28:08', '2021-05-25 09:28:08'),
(117, 'browse_devis_details', 'devis_details', '2021-05-28 09:07:25', '2021-05-28 09:07:25'),
(118, 'read_devis_details', 'devis_details', '2021-05-28 09:07:25', '2021-05-28 09:07:25'),
(119, 'edit_devis_details', 'devis_details', '2021-05-28 09:07:25', '2021-05-28 09:07:25'),
(120, 'add_devis_details', 'devis_details', '2021-05-28 09:07:25', '2021-05-28 09:07:25'),
(121, 'delete_devis_details', 'devis_details', '2021-05-28 09:07:25', '2021-05-28 09:07:25');

-- --------------------------------------------------------

--
-- Structure de la table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2021-05-10 09:40:10', '2021-05-10 09:40:10'),
(2, 'user', 'Normal User', '2021-05-10 09:40:10', '2021-05-10 09:40:10');

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Houda essaini', 'houda@almisbah.com', 'users/default.png', NULL, '$2y$10$RyvJARN.gHHHGKEe5M6P.udHS1XzwyN.oyepqx6ObDAA6RKw6pvJO', NULL, NULL, '2021-05-10 09:42:50', '2021-05-10 09:42:50'),
(2, 2, 'amine misbah', 'xamine@gmail.com', 'users/default.png', NULL, '$2y$10$hYVoNHmJ5hlv2JTAcNpY/.kD5sd6fZdMFro7lx1I5NARGZBfXf/yG', NULL, NULL, '2021-05-10 12:38:23', '2021-05-10 12:38:23');

-- --------------------------------------------------------

--
-- Structure de la table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apporteurs_affaires`
--
ALTER TABLE `apporteurs_affaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chauffeurs`
--
ALTER TABLE `chauffeurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contrats`
--
ALTER TABLE `contrats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contrat_details`
--
ALTER TABLE `contrat_details`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Index pour la table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Index pour la table `devis`
--
ALTER TABLE `devis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `devis_details`
--
ALTER TABLE `devis_details`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `engins`
--
ALTER TABLE `engins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Index pour la table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Index pour la table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Index pour la table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Index pour la table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Index pour la table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `apporteurs_affaires`
--
ALTER TABLE `apporteurs_affaires`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `chauffeurs`
--
ALTER TABLE `chauffeurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contrats`
--
ALTER TABLE `contrats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `contrat_details`
--
ALTER TABLE `contrat_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT pour la table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `devis`
--
ALTER TABLE `devis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `devis_details`
--
ALTER TABLE `devis_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `engins`
--
ALTER TABLE `engins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Contraintes pour la table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
