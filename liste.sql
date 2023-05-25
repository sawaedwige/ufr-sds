-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 25 mai 2023 à 18:02
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
-- Base de données : `application`
--

-- --------------------------------------------------------

--
-- Structure de la table `liste`
--

CREATE TABLE `liste` (
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `genre` varchar(30) NOT NULL,
  `inscription` date NOT NULL,
  `prevenir` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `liste`
--

INSERT INTO `liste` (`nom`, `prenom`, `date_de_naissance`, `genre`, `inscription`, `prevenir`, `email`, `id`) VALUES
('SAWADOGO', 'Edwige', '2023-05-28', 'Féminin', '2023-05-05', 'sawadogo', 'edwigesawadogo43@gmail.com', 3),
('DABONE', 'Madina', '2023-05-23', 'Féminin', '2002-09-25', 'DABONE', 'dabon50@gmail.com', 8),
('DIALLO', 'Djeneba', '2000-03-25', 'Féminin', '2023-05-26', 'Diallo', 'diallo20@gmail.com', 9),
('', '', '0000-00-00', 'Genre', '0000-00-00', '', '', 13);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `liste`
--
ALTER TABLE `liste`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `liste`
--
ALTER TABLE `liste`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
