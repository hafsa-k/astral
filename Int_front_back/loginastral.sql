-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 26 oct. 2023 à 14:39
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
-- Base de données : `loginastral`
--
CREATE DATABASE IF NOT EXISTS `loginastral` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `loginastral`;

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `id` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_carte` int(11) NOT NULL,
  `dateTir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `historique`
--

INSERT INTO `historique` (`id`, `id_utilisateur`, `id_carte`, `dateTir`) VALUES
(1, 1, 1, '2023-10-26'),
(2, 1, 1, '2023-10-26'),
(3, 1, 1, '2023-10-26'),
(4, 1, 1, '2023-10-26'),
(5, 1, 1, '2023-10-26'),
(6, 1, 1, '2023-10-26'),
(7, 1, 1, '2023-10-26');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `login`, `password`) VALUES
(1, 'Emanuela', 'emanuelacardu@gmail.com', '$2y$10$jOPJnKFyM9JAAB3b8waIVeBH0w/mZ2SHlCoI/7jfNQNyXyXPMoDVC'),
(2, 'Dorine', 'muco.dorine@gmail.com', '$2y$10$U0hjKbpmXPCKMlOWkbIkee0lCe5xRRdWZAbb8H4uZJprg5MTK18va'),
(3, 'Hanane', 'hanane@gmail.com', '$2y$10$/eOjutNw1K1.3XrMLEeqceQPUBWs7NCuLnzNTH5mL8Tat3zQfpuJ6'),
(4, 'Hanane', 'hanane@gmail.com', '$2y$10$LtS4cyGSWPH/PrJDSmPV5eMInAaJu4aX9j3yxz4iDsCa/u4//Zt.W'),
(5, 'Helene', 'helene@gmail.com', '$2y$10$Estk5.sf1.PbD36RjOjAmemJuix.VLUCriwR40XZcI/QzewhPgNaK'),
(6, 'laurence', 'laurence@gmail.com', '$2y$10$rZuSXJTZ7ZnPEHeoLQ7aJOdcKvtFboyfAnMn1bONbnOnTy5FvyIKq'),
(7, 'Margot', 'margot@gmail.com', '$2y$10$wjIXsJKWmRkiHCffWvUa8.ncbkJDGEaaAh4zySgWUOBJMUggzMXpC'),
(8, 'Vitoria', 'vitoria@gmail.com', '$2y$10$4n0WiuQofcTiKnnH.bJiA.FJ/ivrSI0TcVQfhyphxLKGvrvrOmBqG'),
(9, 'Elena', 'elena@gmail.com', '$2y$10$t/JUdPUpC76moWffWNlDQenuZIb7Jsls.Lv2N5hLjuH0t1dUY.QvK'),
(10, 'tonia', 'tonia@gmail.com', '$2y$10$cBzeeovR0SRFD5BJtcc7AeBo6XIJNexAREfnIM4QeClKrpa0/iXCq');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `historique`
--
ALTER TABLE `historique`
  ADD CONSTRAINT `historique_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
