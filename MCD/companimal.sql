-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 12 mars 2020 à 17:17
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `companimal`
--

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

CREATE TABLE `animal` (
  `id_adoption` int(11) NOT NULL,
  `nom_animal` varchar(30) NOT NULL,
  `naissance_animal` date NOT NULL,
  `sexe_animal` varchar(10) NOT NULL,
  `photo_animal` blob DEFAULT NULL,
  `description_animal` varchar(500) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `nom_espece` varchar(50) NOT NULL,
  `nom_race` varchar(30) NOT NULL,
  `nom_refuge` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `titre_article` varchar(50) NOT NULL,
  `image_article` blob NOT NULL,
  `contenu_article` varchar(500) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `date_commentaire` date NOT NULL,
  `contenu_commentaire` varchar(500) NOT NULL,
  `id_topic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `espece`
--

CREATE TABLE `espece` (
  `nom_espece` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `espece`
--

INSERT INTO `espece` (`nom_espece`) VALUES
('Chat'),
('Chien'),
('Lapin'),
('Souris');

-- --------------------------------------------------------

--
-- Structure de la table `perdu_trouve`
--

CREATE TABLE `perdu_trouve` (
  `id_perdu_trouve` int(11) NOT NULL,
  `titre_perdu_trouve` varchar(30) NOT NULL,
  `type_perdu_trouve` varchar(20) NOT NULL,
  `lieu_perdu_trouve` varchar(30) NOT NULL,
  `date_perdu_trouve` date NOT NULL,
  `code_postale_perdu_trouve` int(11) NOT NULL,
  `photo_perdu` blob DEFAULT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `nom_espece` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `pet_sitter`
--

CREATE TABLE `pet_sitter` (
  `id_pet_sitter` int(11) NOT NULL,
  `titre_pet_sitter` varchar(100) NOT NULL,
  `distance_pet_sitter` int(11) NOT NULL,
  `type_garde_pet_sitter` varchar(30) NOT NULL,
  `type_domicile_pet_sitter` varchar(30) NOT NULL,
  `presentation_telephone` varchar(3) NOT NULL,
  `description_pet_sitter` varchar(500) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `nom_espece` varchar(50) NOT NULL,
  `photo_pet_sitter` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `race`
--

CREATE TABLE `race` (
  `Nom_race` varchar(50) NOT NULL,
  `nom_espece` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `race`
--

INSERT INTO `race` (`Nom_race`, `nom_espece`) VALUES
('Persan', 'Chat'),
('Siamois', 'Chat'),
('Berger Allemand', 'Chien'),
('Labradore', 'Chien'),
('Geant des flandres', 'Lapin');

-- --------------------------------------------------------

--
-- Structure de la table `refuge`
--

CREATE TABLE `refuge` (
  `nom_refuge` varchar(50) NOT NULL,
  `adresse_refuge` varchar(50) NOT NULL,
  `code_postal_refuge` int(11) NOT NULL,
  `ville_refuge` varchar(40) NOT NULL,
  `photo_refuge` blob DEFAULT NULL,
  `email_refuge` varchar(50) NOT NULL,
  `telephone_refuge` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `refuge`
--

INSERT INTO `refuge` (`nom_refuge`, `adresse_refuge`, `code_postal_refuge`, `ville_refuge`, `photo_refuge`, `email_refuge`, `telephone_refuge`, `id_utilisateur`) VALUES
('Refuge de Lens', '11 Rue Nicolas Leblanc', 62800, 'Liévin', NULL, 'refugedelens@gmail.com', 321212121, 1),
('Refuge de Lille', 'Chemin de Bargues ', 59000, 'Lille', NULL, 'refugedelille@gmail.com', 320202020, 3),
('Refuge de Valenciennes', '34 Route de Préseau', 59770, 'Marly', NULL, 'refugedevalenciennes@gmail.com', 322222222, 2);

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id_commentaire` int(11) NOT NULL,
  `id_commentaire_Reponse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `nom_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`nom_role`) VALUES
('Admin'),
('Membre'),
('SuperAdmin');

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

CREATE TABLE `topic` (
  `id_topic` int(11) NOT NULL,
  `nom_topic` varchar(50) NOT NULL,
  `date_topic` date NOT NULL,
  `contenu_topic` varchar(50) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_utilisateur` varchar(30) NOT NULL,
  `prenom_utilisateur` varchar(30) NOT NULL,
  `adresse_utilisateur` varchar(50) DEFAULT NULL,
  `code_postal_utilisateur` int(11) DEFAULT NULL,
  `ville_utilisateur` varchar(30) DEFAULT NULL,
  `telephone_utilisateur` int(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `mot_de_passe` varchar(40) NOT NULL,
  `nom_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `adresse_utilisateur`, `code_postal_utilisateur`, `ville_utilisateur`, `telephone_utilisateur`, `email`, `mot_de_passe`, `nom_role`) VALUES
(1, 'Goulin', 'Matthieu', NULL, NULL, NULL, NULL, 'asm59200@gmail.com', '1234', 'SuperAdmin'),
(2, 'Leclercq', 'Jerome', NULL, NULL, NULL, NULL, 'leclercqjerome59200@gmail.com ', '1234', 'SuperAdmin'),
(3, 'Lespagnol', 'Maxime', NULL, NULL, NULL, NULL, 'maxim590@hotmail.fr', '1234', 'SuperAdmin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id_adoption`),
  ADD KEY `Animal_utilisateur0_FK` (`id_utilisateur`),
  ADD KEY `Animal_espece1_FK` (`nom_espece`),
  ADD KEY `Animal_refuge2_FK` (`nom_refuge`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `article_utilisateur0_FK` (`id_utilisateur`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `commentaire_topic0_FK` (`id_topic`);

--
-- Index pour la table `espece`
--
ALTER TABLE `espece`
  ADD PRIMARY KEY (`nom_espece`);

--
-- Index pour la table `perdu_trouve`
--
ALTER TABLE `perdu_trouve`
  ADD PRIMARY KEY (`id_perdu_trouve`),
  ADD KEY `perdu_trouve_utilisateur0_FK` (`id_utilisateur`),
  ADD KEY `perdu_trouve_espece1_FK` (`nom_espece`);

--
-- Index pour la table `pet_sitter`
--
ALTER TABLE `pet_sitter`
  ADD PRIMARY KEY (`id_pet_sitter`),
  ADD KEY `pet_sitter_utilisateur0_FK` (`id_utilisateur`),
  ADD KEY `pet_sitter_espece1_FK` (`nom_espece`);

--
-- Index pour la table `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`Nom_race`),
  ADD KEY `Race_espece0_FK` (`nom_espece`);

--
-- Index pour la table `refuge`
--
ALTER TABLE `refuge`
  ADD PRIMARY KEY (`nom_refuge`),
  ADD KEY `refuge_utilisateur0_FK` (`id_utilisateur`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id_commentaire`,`id_commentaire_Reponse`),
  ADD KEY `Reponse_commentaire1_FK` (`id_commentaire_Reponse`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`nom_role`);

--
-- Index pour la table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id_topic`),
  ADD KEY `topic_utilisateur0_FK` (`id_utilisateur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD KEY `utilisateur_role1_FK` (`nom_role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animal`
--
ALTER TABLE `animal`
  MODIFY `id_adoption` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `perdu_trouve`
--
ALTER TABLE `perdu_trouve`
  MODIFY `id_perdu_trouve` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pet_sitter`
--
ALTER TABLE `pet_sitter`
  MODIFY `id_pet_sitter` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `topic`
--
ALTER TABLE `topic`
  MODIFY `id_topic` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `Animal_espece1_FK` FOREIGN KEY (`nom_espece`) REFERENCES `espece` (`nom_espece`),
  ADD CONSTRAINT `Animal_refuge2_FK` FOREIGN KEY (`nom_refuge`) REFERENCES `refuge` (`nom_refuge`),
  ADD CONSTRAINT `Animal_utilisateur0_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_utilisateur0_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_topic0_FK` FOREIGN KEY (`id_topic`) REFERENCES `topic` (`id_topic`);

--
-- Contraintes pour la table `perdu_trouve`
--
ALTER TABLE `perdu_trouve`
  ADD CONSTRAINT `perdu_trouve_espece1_FK` FOREIGN KEY (`nom_espece`) REFERENCES `espece` (`nom_espece`),
  ADD CONSTRAINT `perdu_trouve_utilisateur0_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `pet_sitter`
--
ALTER TABLE `pet_sitter`
  ADD CONSTRAINT `pet_sitter_espece1_FK` FOREIGN KEY (`nom_espece`) REFERENCES `espece` (`nom_espece`),
  ADD CONSTRAINT `pet_sitter_utilisateur0_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `race`
--
ALTER TABLE `race`
  ADD CONSTRAINT `Race_espece0_FK` FOREIGN KEY (`nom_espece`) REFERENCES `espece` (`nom_espece`);

--
-- Contraintes pour la table `refuge`
--
ALTER TABLE `refuge`
  ADD CONSTRAINT `refuge_utilisateur0_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `Reponse_commentaire0_FK` FOREIGN KEY (`id_commentaire`) REFERENCES `commentaire` (`id_commentaire`),
  ADD CONSTRAINT `Reponse_commentaire1_FK` FOREIGN KEY (`id_commentaire_Reponse`) REFERENCES `commentaire` (`id_commentaire`);

--
-- Contraintes pour la table `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `topic_utilisateur0_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
