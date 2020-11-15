-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 15 nov. 2020 à 17:38
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projettechweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `parties`
--

DROP TABLE IF EXISTS `parties`;
CREATE TABLE IF NOT EXISTS `parties` (
  `id_partie` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_typeQuestion` int(11) NOT NULL,
  PRIMARY KEY (`id_partie`),
  KEY `fk_client_numero` (`id_user`),
  KEY `fk_part_typeQuest` (`id_typeQuestion`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parties`
--

INSERT INTO `parties` (`id_partie`, `score`, `id_user`, `id_typeQuestion`) VALUES
(1, 3, 3, 1),
(2, 3, 3, 1),
(3, 1, 3, 3),
(4, 1, 3, 3),
(5, 2, 3, 3),
(6, 2, 3, 3),
(7, 2, 3, 3),
(8, 2, 3, 3),
(9, 3, 3, 3),
(10, 3, 3, 3),
(11, 4, 3, 2),
(12, 4, 3, 2),
(13, 4, 3, 2),
(14, 4, 3, 2),
(15, 4, 3, 2),
(16, 4, 3, 2),
(17, 4, 3, 2),
(18, 4, 3, 2),
(19, 4, 3, 2),
(20, 4, 3, 2),
(21, 4, 3, 2),
(22, 4, 3, 2),
(23, 0, 3, 2),
(24, 4, 3, 2),
(25, 4, 3, 2),
(26, 4, 3, 2),
(27, 4, 3, 2),
(28, 4, 3, 2),
(29, 4, 3, 2),
(30, 4, 3, 2),
(31, 4, 3, 2),
(32, 4, 3, 2),
(33, 1, 3, 2),
(34, 1, 3, 2),
(35, 1, 3, 2),
(36, 1, 3, 2),
(37, 1, 3, 2),
(38, 1, 3, 2),
(39, 1, 3, 2),
(40, 1, 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id_question` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `id_TypeQuestion` int(11) NOT NULL,
  `nb_reponses` int(11) NOT NULL,
  PRIMARY KEY (`id_question`),
  KEY `fk_question` (`id_TypeQuestion`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id_question`, `libelle`, `id_TypeQuestion`, `nb_reponses`) VALUES
(1, 'LE PERE DE NARUTO', 3, 1),
(2, 'LA MERE DE NARUTO', 3, 1),
(3, 'LE NOM COMPLET DE NARUTO', 3, 1),
(4, 'LE NOM DU PERE DE GON', 3, 1),
(5, 'LE MEILLEUR AMIE DE KILUA DANS HUNTER HUNTER', 3, 1),
(6, 'COMBIEN DE TYPES DE HATSU EXISTE T ILS DANS HUNTER HUNTER', 2, 1),
(7, 'Qui tua le Grand Pope pour prendre sa place', 2, 1),
(8, 'Combien de Chevaliers d\'Or les Chevaliers de Bronze affrontent-ils ', 2, 1),
(9, 'Pour Seiya, qui est Marine', 2, 1),
(10, 'En qui le dieu Poséidon se réincarne-t-il', 2, 1),
(11, 'Où le dieu Hadès cache-t-il son corps depuis les temps mythologiques', 1, 1),
(12, 'Quelle phrase le maître des frères Elric, Izumi Curtis, leur a-t-elle enseigné lors de leur entraînement', 1, 1),
(13, 'Que fait Paninya lorsqu\'elle rencontre les frères Elric à Rush Valley ', 1, 1),
(14, 'Lin Yao est à la recherche du secret de la vie éternelle. C\'est un des fils de l\'Empereur de Xing. Lequel ', 1, 1),
(15, 'Fu est l\'un des serviteurs de Lin Yao, ainsi que le grand-père de Ranfan. Qui escorte-t-il jusqu\'à Xing', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

DROP TABLE IF EXISTS `reponses`;
CREATE TABLE IF NOT EXISTS `reponses` (
  `id_reponse` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `valeur` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  PRIMARY KEY (`id_reponse`),
  KEY `fk_reponse` (`id_question`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reponses`
--

INSERT INTO `reponses` (`id_reponse`, `libelle`, `valeur`, `id_question`) VALUES
(1, 'MINATO', 1, 1),
(2, 'MINAKO', 0, 1),
(3, 'JIRAYA', 0, 1),
(4, 'KUSHINAE', 0, 2),
(5, 'KUSHINU', 0, 2),
(6, 'KUSHINA', 1, 2),
(7, 'NARUTO NAMIKAZE', 0, 3),
(8, 'NARUTO UZUMAKI', 1, 3),
(9, 'NARUTO SENDJOU', 0, 3),
(10, 'GIN', 1, 4),
(11, 'JIN', 0, 4),
(12, 'GING', 1, 4),
(13, 'GON', 1, 5),
(14, 'GUN', 0, 5),
(15, 'GUUN', 0, 5),
(16, '7', 0, 6),
(17, '6', 1, 6),
(18, '9', 0, 6),
(19, 'Saga', 1, 7),
(20, 'Mû', 0, 7),
(21, 'Aldébaran', 0, 7),
(22, '11', 0, 8),
(23, '10', 1, 8),
(24, '9', 0, 8),
(25, 'Sa mère', 0, 9),
(26, 'Sa Soeur', 0, 9),
(27, 'Son maître', 1, 9),
(28, 'Julian Solo', 1, 10),
(29, ' Milo', 0, 10),
(30, 'Saori Kido', 0, 10),
(31, 'À Elysion', 1, 11),
(32, 'Sur le mont Olympe', 0, 11),
(33, 'En Enfer', 0, 11),
(34, ' Tout est rien et rien est tout', 0, 12),
(35, 'Un est tout et le tout est un', 1, 12),
(36, 'Un rien vaut tout', 0, 12),
(37, 'Elle vole la montre d\'argent d\'Edward', 1, 13),
(38, 'Elle fait un bras de fer avec Winry', 0, 13),
(39, ' Elle fait une course avec Alphonse', 0, 13),
(40, ' Le premier', 0, 14),
(41, 'Le douxième', 0, 14),
(42, 'Le dix-septième', 1, 14),
(43, 'Le sous-lieutenant Havoc', 0, 15),
(44, 'Le sous-lieutenant Ross', 1, 15),
(45, 'Le sous-lieutenant Falman', 0, 15);

-- --------------------------------------------------------

--
-- Structure de la table `type_question`
--

DROP TABLE IF EXISTS `type_question`;
CREATE TABLE IF NOT EXISTS `type_question` (
  `id_typeQuestion` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`id_typeQuestion`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_question`
--

INSERT INTO `type_question` (`id_typeQuestion`, `libelle`) VALUES
(1, 'DIFFICILE'),
(2, 'MOYEN'),
(3, 'FACILE');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'aa', 'aa', 'a@gmail.com', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37'),
(2, 'aa', 'aa', 'a@gmail.com', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37'),
(3, 'KOYOUO NYOTUE', 'Veirel Delano', 'veirel_delano.koyouo_nyotue@isen.yncrea.fr', '$2y$10$hXzLSzSw7diMGnsxj2k2V.NF2ljvMYMy4qJ6CFooamEvt0Cz25qRW'),
(4, 'KOYOUO NYOTUE', 'Veirel Delano', 'veirel@isen.yncrea.fr', '$2y$10$3URMNEld4Vaz6t05lYtHcOlXhbjPZv1qfXFvdCwJzdUnZiI7mAHca'),
(5, 'v', 'e', 'c@isen.yncrea.fr', '$2y$10$PxhpJty9RnycZ5oEf3LEtOOFykgkGHujErzy0W4RiVTJcc4oMyCuK'),
(6, 'KOYOUO NYOTUE', 'Veirel Delano', 'veir@isen.yncrea.fr', '$2y$10$AmYg2GUbgzJx319LpPrZ2O9z3BdknZn4R.jofzYRT5VBRsLSDYSWi'),
(7, 'KOYOUO NYOTUE', 'aa', 'v@isen.yncrea.fr', '$2y$10$nNKrKTHBfb/.kVEI/HNMAOQQ3KLzH9jZz7pNt6RRjKE.2m.Ce0wfu'),
(8, 'KOYOUO NYOTUE', 'Veirel Delano', 've@isen.yncrea.fr', '$2y$10$3Joyh/lNzIuhpXeRcYwBUu135dp3L4/7gFtC26DEOlVE4qAPIEd0C'),
(9, 'KOYOUO NYOTUE', 'Veirel Delano', 'nyotue@isen.yncrea.fr', '$2y$10$6QDVisBJ1xjH5vWrl.lHMeD5Q4f75bOJJ1wHl24bPNZWbyoU7NjZW'),
(10, 'KOYOUO NYOTUE', 'd', 'l@isen.yncrea.fr', '$2y$10$JODPiD5CaXu.okwwU55uUeOawkh7PjBFPP/tXM.kVkAum7QfOyQEa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
