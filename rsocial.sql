-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 juil. 2023 à 16:13
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rsocial`
--

-- --------------------------------------------------------

--
-- Structure de la table `aimes`
--

CREATE TABLE `aimes` (
  `id_aime` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id_c` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id_p` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` varchar(100) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id_p`, `titre`, `contenu`, `photo`) VALUES
(13, 'RAM', 'RAM TRX', '2022-ram-1500-trx-4k-z2.jpg'),
(14, 'TRX-1500', 'V12', '2022-ram-1500-trx-sandblast-102-1654625753.jpg'),
(15, 'RAM2', 'V9', 'assets.newatlas.com.jpeg'),
(16, 'RAM 123', 'Turbo V12', 'quickspin-leadimage-ram-1500-trx-1603810937.jpg'),
(17, 'TRX 3500', 'Motor Hellcat', 'TRX.webp'),
(18, 'TRX 3500', 'Turbo V6', 'trx-ogi.webp');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` int(100) NOT NULL,
  `password` int(100) NOT NULL,
  `genre` tinyint(1) NOT NULL,
  `naiss` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_u` int(11) NOT NULL,
  `mail` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `aimes`
--
ALTER TABLE `aimes`
  ADD PRIMARY KEY (`id_aime`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_c`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_p`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `aimes`
--
ALTER TABLE `aimes`
  MODIFY `id_aime` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
