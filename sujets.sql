-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 28 juil. 2021 à 12:56
-- Version du serveur :  10.3.15-MariaDB
-- Version de PHP :  7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `onlefait`
--

-- --------------------------------------------------------

--
-- Structure de la table `sujets`
--

CREATE TABLE `sujets` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `auteur` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date_publication` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sujets`
--

INSERT INTO `sujets` (`id`, `libelle`, `description`, `auteur`, `date_publication`) VALUES
(1, 'Problème en HTML et CSS', 'Bonjour..\r\nJ\'ai un petit soucis en HTML et CSS..\r\nJe voudrais que vous m\'éclairiez sur ça..\r\nEn effet blabla, bla bla bla..', 'John DOE', '2021-07-07'),
(2, 'JavaScript me donne du tournis', 'Venez me sauver des mains de JavaScript..\r\nPlease..', 'JS power', '2021-07-28'),
(3, 'Problème de mise en forme CSS', 'Bonjour tous..\r\nJ\'ai du mal à réaliser une mise en forme en CSS..\r\nEn fait, j\'ai un bloc que je voudrais modifier cad embellir mais je n\'y arrive pas..\r\nAidez-moi svp..\r\n', 'Forester COD', '2021-07-04'),
(4, 'Mon projet PHP me génère une erreur', 'Bonjour en fait, je suis entrain de bosser sur un projet PHP super cool..\r\nMais bémol, je n\'arrive pas à trop avancer..\r\nEn fait j\'obtiens une erreur me disant que blabla blabla blab ', 'John DOE', '2021-07-28');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `sujets`
--
ALTER TABLE `sujets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `sujets`
--
ALTER TABLE `sujets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
