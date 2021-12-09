-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 09 déc. 2021 à 15:27
-- Version du serveur : 8.0.26-0ubuntu0.20.04.2
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mysql`
--

-- --------------------------------------------------------

--
-- Structure de la table `USER`
--

CREATE TABLE `USER` (
  `ID` int NOT NULL,
  `CIVILITE` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(20) DEFAULT NULL,
  `MDP` varchar(20) DEFAULT NULL,
  `TELEPHONE` varchar(20) DEFAULT NULL,
  `PAYSORIGINE` varchar(20) DEFAULT NULL,
  `CGU` varchar(20) DEFAULT NULL,
  `DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `USER`
--

INSERT INTO `USER` (`ID`, `CIVILITE`, `EMAIL`, `MDP`, `TELEPHONE`, `PAYSORIGINE`, `CGU`, `DATE`) VALUES
(1, 'masculin', 'ozeliurs@gmail.com', 'password', '0000000000', 'France', 'conditionschecked', '2021-12-02'),
(2, 'feminin', 'ozeliurs+2@gmail.com', 'password2', '0000000001', 'Allemagne', 'conditionschecked', '2021-12-02'),
(3, 'masculin', 'ozeliurs+3@gmail.com', 'password3', '0000000002', 'Wakanda', '', '2021-12-02'),
(4, 'feminin', 'ozeliurs+4@gmail.com', 'password4', '0000000003', 'France', '', '2021-12-02'),
(5, 'masculin', 'ozeliurs+5@gmail.com', 'password5', '0000000004', 'Allemagne', 'conditionschecked', '2021-12-02'),
(69, 'feminin', 'laposte.net', 'antoskins', '078170038', 'Wakanda', '', '2021-12-02'),
(96, 'feminin', 'antoskins@gmail.com', 'saucissecouscous', '0613392852', 'en', 'conditionschecked', '2021-12-02'),
(97, 'feminin', 'admin@sd', 'dLx4QgkURecL', '0669545', 'Wakanda', 'conditionschecked', '2021-12-09'),
(98, 'feminin', 'admin@ok', 'dLx4QgkURecL', '0696', 'Allemagne', 'conditionschecked', '2021-12-09'),
(99, 'masculin', 'admin.moreira@sd', 'dLx4QgkURecL', '05', 'Allemagne', 'conditionschecked', '2021-12-09');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `USER`
--
ALTER TABLE `USER`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;