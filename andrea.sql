-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 21 août 2021 à 19:59
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `andrea`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `ID` int(20) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `prenoms` varchar(20) NOT NULL,
  `numero_aej` int(20) NOT NULL,
  `telephone` int(10) NOT NULL,
  `imail` varchar(20) NOT NULL,
  `fonction` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`ID`, `nom`, `prenoms`, `numero_aej`, `telephone`, `imail`, `fonction`, `date`) VALUES
(1, 'koumoin', 'delix', 222222222, 709822614, 'delix.koumoin@uvci.e', 0, '2021-08-20 17:37:06'),
(3, 'koumoin', '&lt;h1&gt;delix&lt;/', 7689, 709822614, 'delix.koumoin@uvci.e', 0, '2021-08-20 17:40:34'),
(4, 'koumoin', 'delix', 0, 709822614, '', 0, '2021-08-21 16:05:03'),
(5, 'koumoin', 'delix', 0, 709822614, '', 0, '2021-08-21 16:06:30'),
(6, 'koumoin', 'delix', 0, 709822614, '', 0, '2021-08-21 16:08:04'),
(7, 'koumoin', 'delix', 2147483647, 709822614, 'delix.koumoin@uvci.e', 0, '2021-08-21 16:16:10'),
(8, 'koumoin', 'delix', 2147483647, 709822614, 'delix.koumoin@uvci.e', 0, '2021-08-21 16:17:09'),
(9, 'kouassi', 'konan', 222222222, 759975463, 'delix.andre@uvci.edu', 0, '2021-08-21 16:19:41'),
(10, 'konan', 'amoin', 999999999, 666666666, 'delix.andre@uvci.edu', 0, '2021-08-21 17:13:37');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
