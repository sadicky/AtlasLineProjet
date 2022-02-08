-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 08 fév. 2022 à 16:16
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `atlas`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_articles`
--

CREATE TABLE `tbl_articles` (
  `ID` int(11) NOT NULL,
  `ARTICLE` varchar(200) DEFAULT NULL,
  `QTE` int(11) DEFAULT 0,
  `PRIX` int(11) DEFAULT NULL,
  `CONDITIONEMMENT` enum('Carton','Paquet','Sac','unite','Autre') NOT NULL,
  `MONTANT` int(11) DEFAULT 0,
  `STOCK_OUT` int(11) DEFAULT 0,
  `DATECREAT` date DEFAULT NULL,
  `STATUT` enum('0','1') DEFAULT NULL,
  `IDCAT` int(11) DEFAULT NULL,
  `IDUSER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_articles`
--

INSERT INTO `tbl_articles` (`ID`, `ARTICLE`, `QTE`, `PRIX`, `CONDITIONEMMENT`, `MONTANT`, `STOCK_OUT`, `DATECREAT`, `STATUT`, `IDCAT`, `IDUSER`) VALUES
(1, 'HP Compaq', 0, 10, 'Carton', 0, 0, '0000-00-00', '1', 15, 13),
(2, 'SJSL', 0, 659, 'Sac', 0, 0, '0000-00-00', '1', 19, 13),
(3, 'Telephone', 0, 29, 'Paquet', 0, 0, '0000-00-00', '1', 16, 13);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `ID` int(11) NOT NULL,
  `CATEGORIE` varchar(40) DEFAULT NULL,
  `CREATEDAT` date NOT NULL,
  `STATUT` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_categories`
--

INSERT INTO `tbl_categories` (`ID`, `CATEGORIE`, `CREATEDAT`, `STATUT`) VALUES
(15, 'Cloths', '2022-02-08', '1'),
(16, 'ompdm', '2022-02-08', '1'),
(17, 'kjkl', '2022-02-08', '1'),
(18, 'xlkmj', '2022-02-08', '1'),
(19, 'lcklc', '2022-02-08', '1');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_stockm`
--

CREATE TABLE `tbl_stockm` (
  `ID` int(11) NOT NULL,
  `ARTICLE` varchar(200) DEFAULT NULL,
  `QTE` int(11) DEFAULT 0,
  `PRIX` int(11) DEFAULT NULL,
  `CONDITIONEMMENT` enum('Carton','Paquet','Sac','unite','Autre') NOT NULL,
  `MONTANT` int(11) DEFAULT 0,
  `STOCK_OUT` int(11) DEFAULT 0,
  `DATERECEIVE` date DEFAULT NULL,
  `STATUT` enum('0','1') DEFAULT NULL,
  `IDCAT` int(11) DEFAULT NULL,
  `IDUSER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_stockm`
--

INSERT INTO `tbl_stockm` (`ID`, `ARTICLE`, `QTE`, `PRIX`, `CONDITIONEMMENT`, `MONTANT`, `STOCK_OUT`, `DATERECEIVE`, `STATUT`, `IDCAT`, `IDUSER`) VALUES
(1, 'HP Compaq', 0, 10, 'Carton', 0, 0, '0000-00-00', '1', 15, 13),
(2, 'SJSL', 0, 659, 'Sac', 0, 0, '0000-00-00', '1', 19, 13),
(3, 'Telephone', 0, 29, 'Paquet', 0, 0, '0000-00-00', '1', 16, 13);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_stockq`
--

CREATE TABLE `tbl_stockq` (
  `ID` int(11) NOT NULL,
  `ARTICLE` varchar(200) DEFAULT NULL,
  `QTE` int(11) DEFAULT 0,
  `PRIX` int(11) DEFAULT NULL,
  `CONDITIONEMMENT` enum('Carton','Paquet','Sac','unite','Autre') NOT NULL,
  `MONTANT` int(11) DEFAULT 0,
  `STOCK_OUT` int(11) DEFAULT 0,
  `DATERECEIVE` date DEFAULT NULL,
  `STATUT` enum('0','1') DEFAULT NULL,
  `IDCAT` int(11) DEFAULT NULL,
  `IDUSER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_stockq`
--

INSERT INTO `tbl_stockq` (`ID`, `ARTICLE`, `QTE`, `PRIX`, `CONDITIONEMMENT`, `MONTANT`, `STOCK_OUT`, `DATERECEIVE`, `STATUT`, `IDCAT`, `IDUSER`) VALUES
(1, 'HP Compaq', 0, 10, 'Carton', 0, 0, '0000-00-00', '1', 15, 13),
(2, 'SJSL', 0, 659, 'Sac', 0, 0, '0000-00-00', '1', 19, 13),
(3, 'Telephone', 0, 29, 'Paquet', 0, 0, '0000-00-00', '1', 16, 13);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `ID` int(11) NOT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `PWD` varchar(200) DEFAULT NULL,
  `NAME` varchar(200) DEFAULT NULL,
  `TYPE` enum('admin','simple') NOT NULL DEFAULT 'simple',
  `STATUT` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_users`
--

INSERT INTO `tbl_users` (`ID`, `EMAIL`, `PWD`, `NAME`, `TYPE`, `STATUT`) VALUES
(13, 'admin@gmail.com', '$2y$10$EWVesdGmO7QyX7ZRa/OOb.LmDJrkcd86lTuTGP7KaRZ431RxYLBhe', 'admin', 'admin', '1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDCAT` (`IDCAT`),
  ADD KEY `IDUSER` (`IDUSER`);

--
-- Index pour la table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `tbl_stockm`
--
ALTER TABLE `tbl_stockm`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDCAT` (`IDCAT`),
  ADD KEY `IDUSER` (`IDUSER`);

--
-- Index pour la table `tbl_stockq`
--
ALTER TABLE `tbl_stockq`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDCAT` (`IDCAT`),
  ADD KEY `IDUSER` (`IDUSER`);

--
-- Index pour la table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `tbl_stockm`
--
ALTER TABLE `tbl_stockm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tbl_stockq`
--
ALTER TABLE `tbl_stockq`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  ADD CONSTRAINT `tbl_articles_ibfk_1` FOREIGN KEY (`IDCAT`) REFERENCES `tbl_categories` (`ID`),
  ADD CONSTRAINT `tbl_articles_ibfk_2` FOREIGN KEY (`IDUSER`) REFERENCES `tbl_users` (`ID`);

--
-- Contraintes pour la table `tbl_stockm`
--
ALTER TABLE `tbl_stockm`
  ADD CONSTRAINT `tbl_stockm_ibfk_1` FOREIGN KEY (`IDCAT`) REFERENCES `tbl_categories` (`ID`),
  ADD CONSTRAINT `tbl_stockm_ibfk_2` FOREIGN KEY (`IDUSER`) REFERENCES `tbl_users` (`ID`);

--
-- Contraintes pour la table `tbl_stockq`
--
ALTER TABLE `tbl_stockq`
  ADD CONSTRAINT `tbl_stockq_ibfk_1` FOREIGN KEY (`IDCAT`) REFERENCES `tbl_categories` (`ID`),
  ADD CONSTRAINT `tbl_stockq_ibfk_2` FOREIGN KEY (`IDUSER`) REFERENCES `tbl_users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
