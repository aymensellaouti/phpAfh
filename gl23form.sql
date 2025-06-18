-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 18 juin 2025 à 13:57
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gl23form`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20250425132929', '2025-04-25 15:30:04', 294),
('DoctrineMigrations\\Version20250425134421', '2025-04-25 15:44:43', 37),
('DoctrineMigrations\\Version20250508133250', '2025-05-08 15:32:58', 40);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` smallint(6) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `person`
--

INSERT INTO `person` (`id`, `name`, `age`, `created_at`) VALUES
(11, 'Alexandria Lebreton', 37, '2025-04-25 15:50:04'),
(12, 'راكان رضوان العقل', 33, '2025-04-25 15:50:04'),
(13, 'Hugues Peltier', 43, '2025-04-25 15:50:04'),
(14, 'بدور عملا الفرحان', 31, '2025-04-25 15:50:04'),
(15, 'Alphonse Moreau-Teixeira', 33, '2025-04-25 15:50:04'),
(16, 'شروق الفرحان', 47, '2025-04-25 15:50:04'),
(17, 'André Da Silva', 44, '2025-04-25 15:50:04'),
(18, 'بدور الصقير', 51, '2025-04-25 15:50:04'),
(19, 'Paulette Petit', 34, '2025-04-25 15:50:04'),
(20, 'زاهي السماعيل', 48, '2025-04-25 15:50:04'),
(21, 'Aymen Sellaouti', 24, '2025-04-25 16:19:36');

-- --------------------------------------------------------

--
-- Structure de la table `person_skill`
--

CREATE TABLE `person_skill` (
  `person_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `person_skill`
--

INSERT INTO `person_skill` (`person_id`, `skill_id`) VALUES
(11, 25),
(11, 27),
(11, 28),
(12, 24),
(12, 25),
(12, 36),
(13, 31),
(13, 33),
(13, 36),
(14, 21),
(14, 23),
(14, 35),
(15, 24),
(15, 36),
(15, 38),
(16, 22),
(16, 31),
(16, 34),
(17, 21),
(17, 28),
(17, 36),
(18, 24),
(18, 27),
(18, 38),
(19, 24),
(19, 26),
(19, 34),
(20, 21),
(20, 29),
(20, 39),
(21, 21),
(21, 22),
(21, 23),
(21, 24),
(21, 25),
(21, 26),
(21, 27),
(21, 28),
(21, 29),
(21, 30),
(21, 31),
(21, 32),
(21, 33),
(21, 34),
(21, 35),
(21, 36),
(21, 37),
(21, 38),
(21, 39),
(21, 40);

-- --------------------------------------------------------

--
-- Structure de la table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `skill`
--

INSERT INTO `skill` (`id`, `designation`, `created_at`) VALUES
(21, 'HTML/CSS', '2025-04-25 15:50:04'),
(22, 'JavaScript', '2025-04-25 15:50:04'),
(23, 'PHP', '2025-04-25 15:50:04'),
(24, 'SQL/MySQL', '2025-04-25 15:50:04'),
(25, 'Git & GitHub', '2025-04-25 15:50:04'),
(26, 'Communication orale', '2025-04-25 15:50:04'),
(27, 'Travail en équipe', '2025-04-25 15:50:04'),
(28, 'Résolution de problèmes', '2025-04-25 15:50:04'),
(29, 'Gestion du temps', '2025-04-25 15:50:04'),
(30, 'Anglais professionnel', '2025-04-25 15:50:04'),
(31, 'Français', '2025-04-25 15:50:04'),
(32, 'Espagnol', '2025-04-25 15:50:04'),
(33, 'Leadership', '2025-04-25 15:50:04'),
(34, 'Python', '2025-04-25 15:50:04'),
(35, 'Gestion de projet', '2025-04-25 15:50:04'),
(36, 'Scrum / Agile', '2025-04-25 15:50:04'),
(37, 'Empathie', '2025-04-25 15:50:04'),
(38, 'WordPress', '2025-04-25 15:50:04'),
(39, 'Créativité', '2025-04-25 15:50:04'),
(40, 'Conception UI/UX', '2025-04-25 15:50:04');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(1, 'aymen@gmail.com', '[\"ROLE_USER\"]', '$2y$13$m/cFLr7SFhzEozQSB9QVuuB.YYbGOVr8GvGID6ueH6OiFmkMUMpou'),
(2, 'admin@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$XSxdUI2u4OtPtzunbQXaO.ku7kj1tH63G/fpeo9Y7Q02fEAY1kFjq');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `person_skill`
--
ALTER TABLE `person_skill`
  ADD PRIMARY KEY (`person_id`,`skill_id`),
  ADD KEY `IDX_F20BFBB3217BBB47` (`person_id`),
  ADD KEY `IDX_F20BFBB35585C142` (`skill_id`);

--
-- Index pour la table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_IDENTIFIER_EMAIL` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `person_skill`
--
ALTER TABLE `person_skill`
  ADD CONSTRAINT `FK_F20BFBB3217BBB47` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_F20BFBB35585C142` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
