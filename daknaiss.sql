-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 25 mars 2023 à 11:19
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
-- Base de données : `daknaiss`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `idagent` mediumint(8) UNSIGNED NOT NULL,
  `nomagent` text NOT NULL,
  `prenomagent` text NOT NULL,
  `fonctionagent` text NOT NULL,
  `statutagent` text NOT NULL,
  `motpasseagnet` text NOT NULL,
  `usernameagent` text NOT NULL,
  `centreagent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `centredetat`
--

CREATE TABLE `centredetat` (
  `idcentre` mediumint(9) NOT NULL,
  `codecentre` text NOT NULL,
  `colllectivitelocal` text NOT NULL,
  `libelle` text NOT NULL,
  `region` text NOT NULL,
  `departement` text NOT NULL,
  `arrondissement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `centredetat`
--

INSERT INTO `centredetat` (`idcentre`, `codecentre`, `colllectivitelocal`, `libelle`, `region`, `departement`, `arrondissement`) VALUES
(2, 'OU1023E', 'commune de bafoussam 1', 'centre d etat civil de houkaha', 'ouest', 'mifi', 'bafoussam1');

-- --------------------------------------------------------

--
-- Structure de la table `formationsanitaire`
--

CREATE TABLE `formationsanitaire` (
  `idformation` mediumint(8) UNSIGNED NOT NULL,
  `codeformation` text NOT NULL,
  `libelleformation` text NOT NULL,
  `region` text NOT NULL,
  `departement` text NOT NULL,
  `arrondissement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formationsanitaire`
--

INSERT INTO `formationsanitaire` (`idformation`, `codeformation`, `libelleformation`, `region`, `departement`, `arrondissement`) VALUES
(2, 'ou123hpolice', 'hopitale de la police', 'ouest', 'mifi', 'bafoussam 1'),
(3, 'ou001regional', 'hopital regional de bafoussam', 'ouset', 'mifi', 'bafoussam 1'),
(5, 'ou013famlak', 'hopital de famlak', 'ouest', 'mifi', 'bafoussam 1'),
(7, 'ou10kingp', 'king place de bafoussam', 'mifi', 'mifi', 'bafoussam 1');

-- --------------------------------------------------------

--
-- Structure de la table `officier`
--

CREATE TABLE `officier` (
  `idofficier` mediumint(8) UNSIGNED NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `fonction` text NOT NULL,
  `statut` text NOT NULL,
  `motpasse` text NOT NULL,
  `username` text NOT NULL,
  `centre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `officier`
--

INSERT INTO `officier` (`idofficier`, `nom`, `prenom`, `fonction`, `statut`, `motpasse`, `username`, `centre`) VALUES
(1, 'nyaabe', 'stephane', 'officier', 'inactif', 'man', 'dak', '2');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`idagent`);

--
-- Index pour la table `centredetat`
--
ALTER TABLE `centredetat`
  ADD PRIMARY KEY (`idcentre`);

--
-- Index pour la table `formationsanitaire`
--
ALTER TABLE `formationsanitaire`
  ADD PRIMARY KEY (`idformation`);

--
-- Index pour la table `officier`
--
ALTER TABLE `officier`
  ADD PRIMARY KEY (`idofficier`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `idagent` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `centredetat`
--
ALTER TABLE `centredetat`
  MODIFY `idcentre` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `formationsanitaire`
--
ALTER TABLE `formationsanitaire`
  MODIFY `idformation` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `officier`
--
ALTER TABLE `officier`
  MODIFY `idofficier` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
