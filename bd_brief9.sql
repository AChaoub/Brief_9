-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 20 mai 2020 à 08:47
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_brief9`
--

-- --------------------------------------------------------

--
-- Structure de la table `carte_bancaire`
--

DROP TABLE IF EXISTS `carte_bancaire`;
CREATE TABLE IF NOT EXISTS `carte_bancaire` (
  `CIN` varchar(254) DEFAULT NULL,
  `Num_Carte` varchar(254) NOT NULL,
  `Balance` float DEFAULT NULL,
  `Anne_Exp` varchar(10) DEFAULT NULL,
  `Crypto` varchar(254) DEFAULT NULL,
  `Mois_Exp` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Num_Carte`),
  KEY `FK_Association_5` (`CIN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `carte_bancaire`
--

INSERT INTO `carte_bancaire` (`CIN`, `Num_Carte`, `Balance`, `Anne_Exp`, `Crypto`, `Mois_Exp`) VALUES
('HH100202', 'MACARTE001', 422.41, '2022', '169', '08');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `Id_categorie` int(11) NOT NULL,
  `Description_categorie` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`Id_categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`Id_categorie`, `Description_categorie`) VALUES
(1, 'PL'),
(2, 'BVP'),
(3, 'CTP'),
(4, 'FL'),
(5, 'S'),
(6, 'ES'),
(7, 'ESL\r\n'),
(8, 'B'),
(9, 'BB'),
(10, 'HBP'),
(11, 'E'),
(12, 'A'),
(13, 'ML');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `CIN` varchar(254) NOT NULL,
  `Nom_client` varchar(254) DEFAULT NULL,
  `Prenom_client` varchar(254) DEFAULT NULL,
  `Date_Naissance` date DEFAULT NULL,
  `Tel_Client` varchar(254) DEFAULT NULL,
  `Email` varchar(254) DEFAULT NULL,
  `Password` varchar(254) DEFAULT NULL,
  `Adresse` varchar(254) DEFAULT NULL,
  `NumCarte` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`CIN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`CIN`, `Nom_client`, `Prenom_client`, `Date_Naissance`, `Tel_Client`, `Email`, `Password`, `Adresse`, `NumCarte`) VALUES
('HH100202', 'Choukri', 'Mehdi', '1995-02-26', '0614075409', 'Mehdi@gmail.com', '123456', 'Safi II', 'MACARTE001');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `CIN` varchar(254) DEFAULT NULL,
  `Id_Commande` int(11) NOT NULL,
  `Date_Commande` datetime DEFAULT NULL,
  PRIMARY KEY (`Id_Commande`),
  KEY `FK_Association_2` (`CIN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`CIN`, `Id_Commande`, `Date_Commande`) VALUES
('BH100200', 1, '2020-05-13 00:00:00'),
('HH10100', 2, '2020-05-19 09:03:03'),
('HH100202', 3, '2020-05-19 09:04:59'),
('HH100202', 4, '2020-05-19 09:05:04'),
('HH100202', 5, '2020-05-19 09:05:39'),
('HH100202', 6, '2020-05-19 09:06:52'),
('HH100202', 7, '2020-05-19 09:07:01'),
('HH100202', 8, '2020-05-19 09:07:25'),
('HH100202', 9, '2020-05-19 09:08:38'),
('HH100202', 10, '2020-05-19 09:13:28'),
('HH100202', 11, '2020-05-19 09:14:08'),
('HH100202', 12, '2020-05-19 09:14:28'),
('HH100202', 13, '2020-05-19 09:15:52'),
('HH100202', 14, '2020-05-19 09:16:45'),
('HH100202', 15, '2020-05-19 09:17:45'),
('HH100202', 16, '2020-05-19 09:21:20'),
('HH100202', 17, '2020-05-19 09:21:51'),
('HH100202', 18, '2020-05-19 09:22:38'),
('HH100202', 19, '2020-05-19 12:53:47'),
('HH100202', 20, '2020-05-19 13:03:44'),
('HH100202', 21, '2020-05-20 08:14:53'),
('HH100202', 22, '2020-05-20 08:26:47'),
('HH100202', 23, '2020-05-20 08:28:09'),
('HH100202', 24, '2020-05-20 08:28:19'),
('HH100202', 25, '2020-05-20 08:28:37'),
('HH100202', 26, '2020-05-20 08:29:00'),
('HH100202', 27, '2020-05-20 08:31:25'),
('HH100202', 28, '2020-05-20 08:32:24'),
('HH100202', 29, '2020-05-20 08:32:43'),
('HH100202', 30, '2020-05-20 08:34:53'),
('HH100202', 31, '2020-05-20 08:35:56'),
('HH100202', 32, '2020-05-20 08:37:58'),
('HH100202', 33, '2020-05-20 08:44:11'),
('HH100202', 34, '2020-05-20 08:44:23'),
('HH100202', 35, '2020-05-20 08:46:07');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `CIN` varchar(254) DEFAULT NULL,
  `Id_facture` int(11) NOT NULL,
  `Date_facture` datetime DEFAULT NULL,
  `Montant` float DEFAULT NULL,
  PRIMARY KEY (`Id_facture`),
  KEY `FK_Association_6` (`CIN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `Id_produit` int(11) NOT NULL,
  `Id_categorie` int(11) DEFAULT NULL,
  `Prix_produit` float DEFAULT NULL,
  `Description_produit` varchar(254) DEFAULT NULL,
  `Quantite_Max` int(11) DEFAULT NULL,
  `Image_produit` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`Id_produit`),
  KEY `FK_Association_7` (`Id_categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`Id_produit`, `Id_categorie`, `Prix_produit`, `Description_produit`, `Quantite_Max`, `Image_produit`) VALUES
(1, 1, 5.34, 'lait demi-écrémé stérilisé UHT-\' issu d’animaux nourris sans OGM (< 0.9%)\'', 100, NULL),
(3, 1, 6.11, 'BIO Lait demi-écrémé équitable UHT', 95, NULL),
(2, 1, 5.94, 'Lait demi-écrémé équitable UHT', 100, NULL),
(4, 1, 1.77, 'AUCHAN Beurre doux 250g', 100, NULL),
(5, 1, 3.55, 'BIO Fromage blanc 500g', 96, NULL),
(10, 2, 3.11, 'Auchan merguez x6 - 330g', 82, NULL),
(9, 2, 3.94, 'chipolatas x6 - 330g', 100, NULL),
(8, 2, 1.77, 'Cheveux d ange 5%mg 500g', 100, NULL),
(7, 2, 3.55, 'steaks hachés 5%mg x2 - 250g', 92, NULL),
(6, 2, 3.55, 'saumon fumé mini x6 - 100g', 71, NULL),
(11, 3, 1.84, 'Blanc de poulet doré au four 6 tranches 180g', 100, NULL),
(12, 3, 2.22, 'Jambon supérieur -25% de sel sans couenne 4 tranches 160g', 100, NULL),
(13, 3, 1.77, 'Le Bon Paris Jambon au torchon sans nitrite 4 tranches 140g', 96, NULL),
(14, 3, 3.55, 'Lardons fumés 2x150g', 82, NULL),
(15, 3, 3.55, 'Jambon cru tranches fines et fondantes 6 tranches 100g', 98, NULL),
(16, 4, 1.84, 'Oranges bio 1kg', 100, NULL),
(17, 4, 2.29, 'Pommes Golden filière responsable AOP 1kg', 95, NULL),
(18, 4, 2.77, 'Poires barquette 750g', 98, NULL),
(19, 4, 4.55, 'Fraises gariguette 250g', 93, NULL),
(20, 4, 3.11, 'bio Kiwis 6 pièces', 100, NULL),
(21, 5, 1.84, 'Pizza cuite sur pierre au chorizo 390g', 100, NULL),
(22, 5, 2.29, 'Pizza cuites sur pierre royale 370g', 98, NULL),
(23, 5, 2.77, 'Buitoni Pizza fraîch up 4 fromages 600g', 98, NULL),
(24, 5, 4.55, 'Crêpe jambon emmental 1kg', 100, NULL),
(25, 5, 4.11, ' Paëlla 900g', 98, NULL),
(26, 6, 1.84, 'Nescafé grande dolce gusto capsule x16 -128g', 96, NULL),
(27, 6, 2.29, 'CHARLES ET ALICE Spécialité pomme banane vanille sans sucres ajoutés 4x100g', 100, NULL),
(28, 6, 2.77, 'L Or espresso delizioso n°5 capsule alu x10 -52g', 100, NULL),
(29, 6, 4.55, 'Tassimo Grand Mère café petit déjeuner dosette x16 -132g', 100, NULL),
(30, 6, 4.11, 'café classique dosette x48 -333g', 100, NULL),
(31, 7, 1.84, 'Tuiles saveur crème oignon 170g', 100, NULL),
(32, 7, 2.29, 'Chips à lancienne nature - sachets individuels 6x30g', 98, NULL),
(33, 7, 2.77, 'Chips nature à lhuile de tournesol 200g', 100, NULL),
(34, 7, 4.55, 'Chips saveur barbecue 130g', 76, NULL),
(35, 7, 4.11, 'Chips ondulées paysanne nature 300g', 100, NULL),
(36, 8, 1.84, 'Eau minérale naturelle gazeuse 6x1l', 79, NULL),
(37, 8, 2.29, 'Pur jus d orange sans pulpe 1,5l', 100, NULL),
(38, 8, 2.77, 'Pressade Nectar multifruits sans pulpe bio brique 1l', 98, NULL),
(39, 8, 4.55, 'Coca cola Boisson gazeuse aux extraits', 100, NULL),
(40, 8, 4.11, 'Eau de source plate bouteilles 12x33cl', 100, NULL),
(41, 9, 1.84, 'Gallia Calisma 1 lait 1er âge en poudre', 100, NULL),
(42, 9, 2.29, 'Blédina Blédichef assiette pâtes étoiles', 100, NULL),
(43, 9, 2.77, 'LES PETITS GOURMETS BIO Assiette Risotto', 100, NULL),
(44, 9, 4.55, 'Nestlé Petite recette bol spaghetti', 100, NULL),
(45, 9, 4.11, 'NATURNES Bol Carottes Dès 4 mois 130g X 2', 100, NULL),
(46, 10, 1.84, 'Cadum Crème douche surgras amande et miel', 100, NULL),
(47, 10, 2.29, 'Le Petit Marseillais Douche crème extra doux', 100, NULL),
(48, 10, 2.77, 'Sanex Zéro% gel douche enfants corps et cheveux 500ml', 100, NULL),
(49, 10, 4.55, 'Cosmia savon mains coton 300ml', 100, NULL),
(50, 10, 4.11, 'Veet Bandes de cire corps et jambes pour peaux ', 100, NULL),
(51, 11, 1.84, 'Lotus Boîte de mouchoirs pur blanc 3 épaisseurs x90', 100, NULL),
(52, 11, 2.29, 'Paquets de mouchoirs blancs 4 épaisseurs 15x9', 100, NULL),
(53, 11, 2.77, 'X.tra Total+ lessive concentrée fraîcheur 44 lavages 2,2l', 100, NULL),
(54, 11, 4.55, 'Cajoline Assouplissant doux & pur hypoallergénique ', 100, NULL),
(55, 11, 4.11, 'Vanish Oxi Action pistolet détachant 750ml', 100, NULL),
(56, 12, 1.84, 'Fido Croq mix croquettes volaille céréales', 100, NULL),
(57, 12, 2.29, 'Catsan Litière minérale hygiène plus pour chat 10l', 100, NULL),
(58, 12, 2.77, 'Adult assortiment sachets repas poissons en gelée', 100, NULL),
(59, 12, 4.55, 'Purina One dual nature croquettes poulet céréales', 100, NULL),
(60, 12, 4.11, 'Felix Sachets repas pâtée en gelée viandes', 100, NULL),
(66, 13, 100.84, 'KRUPS Expresso Broyeur à grains Essential YY3957FD', 100, NULL),
(67, 13, 200.29, 'PHILIPS Cafetière à dosettes Senseo Original HD6553/23, Bleu gris', 100, NULL),
(68, 13, 200.77, 'KRUPS Cafetière à dosette Dolce Gusto - YY4230FD - Anthracite', 100, NULL),
(69, 13, 60.55, 'KRUPS Grille-pain KH682D10 - Inox', 100, NULL),
(70, 13, 150.11, 'KRUPS Cafetière Pro Aroma Plus KM321010, Inox', 100, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `quantite_commande`
--

DROP TABLE IF EXISTS `quantite_commande`;
CREATE TABLE IF NOT EXISTS `quantite_commande` (
  `Id_Commande` int(11) DEFAULT NULL,
  `Id_produit` int(11) DEFAULT NULL,
  `Qte` int(11) DEFAULT NULL,
  KEY `FK_Association_8` (`Id_produit`),
  KEY `FK_Association_9` (`Id_Commande`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `quantite_commande`
--

INSERT INTO `quantite_commande` (`Id_Commande`, `Id_produit`, `Qte`) VALUES
(7, 7, 4),
(7, 13, 3),
(7, 17, 1),
(8, 7, 4),
(8, 13, 3),
(8, 17, 1),
(9, 7, 4),
(9, 13, 3),
(9, 17, 1),
(10, 7, 4),
(10, 13, 3),
(11, 7, 4),
(11, 13, 3),
(12, 7, 4),
(12, 13, 3),
(13, 7, 4),
(13, 13, 3),
(13, 17, 1),
(14, 7, 4),
(14, 13, 3),
(14, 17, 1),
(15, 22, 2),
(15, 23, 2),
(15, 26, 4),
(18, 3, 2),
(18, 10, 2),
(18, 6, 2),
(19, 6, 2),
(19, 18, 2),
(19, 19, 4),
(20, 17, 4),
(20, 25, 2),
(20, 32, 2),
(21, 5, 4),
(21, 6, 2),
(21, 14, 2),
(21, 19, 3),
(22, 6, 2),
(22, 14, 2),
(22, 34, 3),
(22, 36, 3),
(23, 6, 2),
(23, 14, 2),
(23, 34, 3),
(23, 36, 3),
(24, 6, 2),
(24, 14, 2),
(24, 34, 3),
(24, 36, 3),
(25, 6, 2),
(25, 14, 2),
(25, 34, 3),
(25, 36, 3),
(26, 6, 2),
(26, 14, 2),
(26, 34, 3),
(26, 36, 3),
(27, 6, 2),
(27, 14, 2),
(27, 34, 3),
(27, 36, 3),
(28, 6, 2),
(28, 14, 2),
(28, 34, 3),
(28, 36, 3),
(29, 10, 2),
(29, 6, 1),
(29, 14, 1),
(29, 15, 1),
(30, 10, 2),
(30, 6, 1),
(30, 14, 1),
(30, 15, 1),
(31, 3, 1),
(31, 10, 4),
(31, 6, 1),
(32, 3, 1),
(32, 10, 4),
(32, 6, 1),
(34, 3, 1),
(34, 10, 4),
(34, 6, 1),
(35, 6, 4),
(35, 34, 3),
(35, 38, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
