-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 05 mars 2020 à 15:43
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
-- Structure de la table `adoption`
--

CREATE TABLE `adoption` (
  `id_adoption` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_refuge` int(11) NOT NULL,
  `id_animal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

CREATE TABLE `animal` (
  `id_animal` int(11) NOT NULL,
  `nom_animal` varchar(20) NOT NULL,
  `naissance_animal` date DEFAULT NULL,
  `espece_animal` varchar(20) NOT NULL,
  `race_animal` varchar(20) DEFAULT NULL,
  `sexe_animal` varchar(20) NOT NULL,
  `photo_animal` blob NOT NULL,
  `description_animal` varchar(1) NOT NULL,
  `id_perdu_trouve` int(11) NOT NULL,
  `id_adoption` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `titre_article` varchar(50) NOT NULL,
  `image_article` blob NOT NULL,
  `contenu_article` varchar(500) DEFAULT NULL,
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
-- Structure de la table `comporte`
--

CREATE TABLE `comporte` (
  `id_pet_sitter` int(11) NOT NULL,
  `id_espece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `compte_utilisateur`
--

CREATE TABLE `compte_utilisateur` (
  `identifiant` varchar(20) NOT NULL,
  `mot_de_passe` varchar(10) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `espece`
--

CREATE TABLE `espece` (
  `id_espece` int(11) NOT NULL,
  `nom_espece` varchar(500) NOT NULL,
  `race_espece` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `perdu_trouve`
--

CREATE TABLE `perdu_trouve` (
  `id_perdu_trouve` int(11) NOT NULL,
  `titre_perdu_trouve` varchar(30) NOT NULL,
  `type_perdu_trouve` tinyint(1) NOT NULL,
  `lieu_perdu_trouve` varchar(30) NOT NULL,
  `date_perdu_trouve` date NOT NULL,
  `code_postale_perdu_trouve` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_animal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `pet_sitter`
--

CREATE TABLE `pet_sitter` (
  `id_pet_sitter` int(11) NOT NULL,
  `distance_pet_sitter` int(11) NOT NULL,
  `type_garde_pet_sitter` tinyint(1) NOT NULL,
  `type_domicile_pet_sitter` tinyint(1) NOT NULL,
  `presentation_telephone` tinyint(1) NOT NULL,
  `description_pet_sitter` varchar(5) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `refuge`
--

CREATE TABLE `refuge` (
  `id_refuge` int(11) NOT NULL,
  `nom_refuge` varchar(50) NOT NULL,
  `adresse_refuge` varchar(50) NOT NULL,
  `code_postal_refuge` int(11) NOT NULL,
  `ville_refuge` varchar(40) NOT NULL,
  `photo_refuge` blob NOT NULL,
  `email_refuge` varchar(20) NOT NULL,
  `telephone_refuge` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id_role` int(11) NOT NULL,
  `nom_grade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `nom_utilisateur` varchar(20) NOT NULL,
  `prenom_utilisateur` varchar(20) NOT NULL,
  `adresse_utilisateur` varchar(50) DEFAULT NULL,
  `code_postal_utilisateur` int(11) DEFAULT NULL,
  `ville_utilisateur` varchar(20) DEFAULT NULL,
  `email_utilisateur` varchar(20) NOT NULL,
  `telephone_utilisateur` int(11) NOT NULL,
  `identifiant` varchar(20) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`id_adoption`),
  ADD UNIQUE KEY `adoption_Animal0_AK` (`id_animal`),
  ADD KEY `adoption_utilisateur0_FK` (`id_utilisateur`),
  ADD KEY `adoption_refuge1_FK` (`id_refuge`);

--
-- Index pour la table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id_animal`),
  ADD UNIQUE KEY `Animal_perdu_trouve0_AK` (`id_perdu_trouve`),
  ADD UNIQUE KEY `Animal_adoption1_AK` (`id_adoption`);

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
-- Index pour la table `comporte`
--
ALTER TABLE `comporte`
  ADD PRIMARY KEY (`id_pet_sitter`,`id_espece`),
  ADD KEY `comporte_espece1_FK` (`id_espece`);

--
-- Index pour la table `compte_utilisateur`
--
ALTER TABLE `compte_utilisateur`
  ADD PRIMARY KEY (`identifiant`),
  ADD UNIQUE KEY `compte_utilisateur_utilisateur0_AK` (`id_utilisateur`);

--
-- Index pour la table `espece`
--
ALTER TABLE `espece`
  ADD PRIMARY KEY (`id_espece`);

--
-- Index pour la table `perdu_trouve`
--
ALTER TABLE `perdu_trouve`
  ADD PRIMARY KEY (`id_perdu_trouve`),
  ADD UNIQUE KEY `perdu_trouve_Animal0_AK` (`id_animal`),
  ADD KEY `perdu_trouve_utilisateur0_FK` (`id_utilisateur`);

--
-- Index pour la table `pet_sitter`
--
ALTER TABLE `pet_sitter`
  ADD PRIMARY KEY (`id_pet_sitter`),
  ADD KEY `pet_sitter_utilisateur0_FK` (`id_utilisateur`);

--
-- Index pour la table `refuge`
--
ALTER TABLE `refuge`
  ADD PRIMARY KEY (`id_refuge`),
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
  ADD PRIMARY KEY (`id_role`);

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
  ADD UNIQUE KEY `utilisateur_compte_utilisateur0_AK` (`identifiant`),
  ADD KEY `utilisateur_role1_FK` (`id_role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adoption`
--
ALTER TABLE `adoption`
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
-- AUTO_INCREMENT pour la table `espece`
--
ALTER TABLE `espece`
  MODIFY `id_espece` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT pour la table `refuge`
--
ALTER TABLE `refuge`
  MODIFY `id_refuge` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `topic`
--
ALTER TABLE `topic`
  MODIFY `id_topic` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adoption`
--
ALTER TABLE `adoption`
  ADD CONSTRAINT `adoption_Animal2_FK` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id_animal`),
  ADD CONSTRAINT `adoption_refuge1_FK` FOREIGN KEY (`id_refuge`) REFERENCES `refuge` (`id_refuge`),
  ADD CONSTRAINT `adoption_utilisateur0_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `Animal_adoption1_FK` FOREIGN KEY (`id_adoption`) REFERENCES `adoption` (`id_adoption`),
  ADD CONSTRAINT `Animal_perdu_trouve0_FK` FOREIGN KEY (`id_perdu_trouve`) REFERENCES `perdu_trouve` (`id_perdu_trouve`);

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
-- Contraintes pour la table `comporte`
--
ALTER TABLE `comporte`
  ADD CONSTRAINT `comporte_espece1_FK` FOREIGN KEY (`id_espece`) REFERENCES `espece` (`id_espece`),
  ADD CONSTRAINT `comporte_pet_sitter0_FK` FOREIGN KEY (`id_pet_sitter`) REFERENCES `pet_sitter` (`id_pet_sitter`);

--
-- Contraintes pour la table `compte_utilisateur`
--
ALTER TABLE `compte_utilisateur`
  ADD CONSTRAINT `compte_utilisateur_utilisateur0_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `perdu_trouve`
--
ALTER TABLE `perdu_trouve`
  ADD CONSTRAINT `perdu_trouve_Animal1_FK` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id_animal`),
  ADD CONSTRAINT `perdu_trouve_utilisateur0_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `pet_sitter`
--
ALTER TABLE `pet_sitter`
  ADD CONSTRAINT `pet_sitter_utilisateur0_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

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
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_compte_utilisateur0_FK` FOREIGN KEY (`identifiant`) REFERENCES `compte_utilisateur` (`identifiant`),
  ADD CONSTRAINT `utilisateur_role1_FK` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
