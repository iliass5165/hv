-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 23 Novembre 2016 à 19:10
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hv`
--

-- --------------------------------------------------------

--
-- Structure de la table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

CREATE TABLE `association` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `mailPerso` varchar(255) NOT NULL,
  `maiPro` varchar(255) NOT NULL,
  `Reglement` text NOT NULL,
  `statut_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorieclient`
--

CREATE TABLE `categorieclient` (
  `id` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `abreviation` varchar(255) NOT NULL,
  `annee` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `saison_id` int(11) NOT NULL,
  `categorieClient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

CREATE TABLE `club` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `horaires` varchar(255) NOT NULL,
  `presentation` text NOT NULL,
  `photo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `coordonneesmap` decimal(10,0) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contenirphoto`
--

CREATE TABLE `contenirphoto` (
  `id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `detenir`
--

CREATE TABLE `detenir` (
  `id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `gymnase_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `gymnase`
--

CREATE TABLE `gymnase` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `illustermateriel`
--

CREATE TABLE `illustermateriel` (
  `id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `materiel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL,
  `datenaissance` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mail` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `lastSaison` int(1) NOT NULL,
  `saison_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

CREATE TABLE `materiel` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `saison`
--

CREATE TABLE `saison` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dateDebut` date NOT NULL,
  `finDebut` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

CREATE TABLE `statut` (
  `id` int(11) NOT NULL,
  `intitulestatut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `motPasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_id` (`photo_id`);

--
-- Index pour la table `association`
--
ALTER TABLE `association`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statut_id` (`statut_id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorieclient`
--
ALTER TABLE `categorieclient`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saison_id` (`saison_id`),
  ADD KEY `categorieClient_id` (`categorieClient_id`);

--
-- Index pour la table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_id` (`photo_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contenirphoto`
--
ALTER TABLE `contenirphoto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_id` (`photo_id`),
  ADD KEY `album_id` (`album_id`);

--
-- Index pour la table `detenir`
--
ALTER TABLE `detenir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gymnase_id` (`gymnase_id`),
  ADD KEY `photo_id` (`photo_id`);

--
-- Index pour la table `gymnase`
--
ALTER TABLE `gymnase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_id` (`photo_id`);

--
-- Index pour la table `illustermateriel`
--
ALTER TABLE `illustermateriel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materiel_id` (`materiel_id`),
  ADD KEY `photo_id` (`photo_id`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saison_id` (`saison_id`);

--
-- Index pour la table `materiel`
--
ALTER TABLE `materiel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_id` (`photo_id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_id` (`categorie_id`),
  ADD KEY `photo_id` (`photo_id`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `saison`
--
ALTER TABLE `saison`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `statut`
--
ALTER TABLE `statut`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `association`
--
ALTER TABLE `association`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `categorieclient`
--
ALTER TABLE `categorieclient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `club`
--
ALTER TABLE `club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `contenirphoto`
--
ALTER TABLE `contenirphoto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `detenir`
--
ALTER TABLE `detenir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `gymnase`
--
ALTER TABLE `gymnase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `illustermateriel`
--
ALTER TABLE `illustermateriel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `materiel`
--
ALTER TABLE `materiel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `saison`
--
ALTER TABLE `saison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `statut`
--
ALTER TABLE `statut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_photo_id` FOREIGN KEY (`photo_id`) REFERENCES `photo` (`id`);

--
-- Contraintes pour la table `association`
--
ALTER TABLE `association`
  ADD CONSTRAINT `statut_association_id` FOREIGN KEY (`statut_id`) REFERENCES `statut` (`id`);

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_categorieClient_id` FOREIGN KEY (`categorieClient_id`) REFERENCES `categorieclient` (`id`),
  ADD CONSTRAINT `saison_effectif_id` FOREIGN KEY (`saison_id`) REFERENCES `saison` (`id`);

--
-- Contraintes pour la table `club`
--
ALTER TABLE `club`
  ADD CONSTRAINT `photo_club_id` FOREIGN KEY (`photo_id`) REFERENCES `photo` (`id`);

--
-- Contraintes pour la table `contenirphoto`
--
ALTER TABLE `contenirphoto`
  ADD CONSTRAINT `album_contenir_id` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`),
  ADD CONSTRAINT `photo_contenir_id` FOREIGN KEY (`photo_id`) REFERENCES `photo` (`id`);

--
-- Contraintes pour la table `detenir`
--
ALTER TABLE `detenir`
  ADD CONSTRAINT `gymnase_detenir_id` FOREIGN KEY (`gymnase_id`) REFERENCES `gymnase` (`id`),
  ADD CONSTRAINT `photo_detenir_id` FOREIGN KEY (`photo_id`) REFERENCES `photo` (`id`);

--
-- Contraintes pour la table `gymnase`
--
ALTER TABLE `gymnase`
  ADD CONSTRAINT `gymnase_photo_id` FOREIGN KEY (`photo_id`) REFERENCES `photo` (`id`);

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `saison_inscription_id` FOREIGN KEY (`saison_id`) REFERENCES `saison` (`id`);

--
-- Contraintes pour la table `materiel`
--
ALTER TABLE `materiel`
  ADD CONSTRAINT `materiel_photo_id` FOREIGN KEY (`photo_id`) REFERENCES `photo` (`id`);

--
-- Contraintes pour la table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `categorie_news_id` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`),
  ADD CONSTRAINT `photo_news_id` FOREIGN KEY (`photo_id`) REFERENCES `photo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
