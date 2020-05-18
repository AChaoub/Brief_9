-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 15 mai 2020 à 01:16
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
  `Anne_Exp` datetime DEFAULT NULL,
  `Crypto` varchar(254) DEFAULT NULL,
  `Mois_Exp` datetime DEFAULT NULL,
  PRIMARY KEY (`Num_Carte`),
  KEY `FK_Association_5` (`CIN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(3, 1, 6.11, 'BIO Lait demi-écrémé équitable UHT', 100, NULL),
(2, 1, 5.94, 'Lait demi-écrémé équitable UHT', 100, NULL),
(4, 1, 1.77, 'AUCHAN Beurre doux 250g', 100, NULL),
(5, 1, 3.55, 'BIO Fromage blanc 500g', 100, NULL),
(10, 2, 3.11, 'Auchan merguez x6 - 330g', 100, NULL),
(9, 2, 3.94, 'chipolatas x6 - 330g', 100, NULL),
(8, 2, 1.77, 'Cheveux d ange 5%mg 500g', 100, NULL),
(7, 2, 3.55, 'steaks hachés 5%mg x2 - 250g', 100, NULL),
(6, 2, 3.55, 'saumon fumé mini x6 - 100g', 100, NULL),
(11, 3, 1.84, 'Blanc de poulet doré au four 6 tranches 180g', 100, NULL),
(12, 3, 2.22, 'Jambon supérieur -25% de sel sans couenne 4 tranches 160g', 100, NULL),
(13, 3, 1.77, 'Le Bon Paris Jambon au torchon sans nitrite 4 tranches 140g', 100, NULL),
(14, 3, 3.55, 'Lardons fumés 2x150g', 100, NULL),
(15, 3, 3.55, 'Jambon cru tranches fines et fondantes 6 tranches 100g', 100, NULL),
(16, 4, 1.84, 'Oranges bio 1kg', 100, NULL),
(17, 4, 2.29, 'Pommes Golden filière responsable AOP 1kg', 100, NULL),
(18, 4, 2.77, 'Poires barquette 750g', 100, NULL),
(19, 4, 4.55, 'Fraises gariguette 250g', 100, NULL),
(20, 4, 3.11, 'bio Kiwis 6 pièces', 100, NULL),
(21, 5, 1.84, 'Pizza cuite sur pierre au chorizo 390g', 100, NULL),
(22, 5, 2.29, 'Pizza cuites sur pierre royale 370g', 100, NULL),
(23, 5, 2.77, 'Buitoni Pizza fraîch up 4 fromages 600g', 100, NULL),
(24, 5, 4.55, 'Crêpe jambon emmental 1kg', 100, NULL),
(25, 5, 4.11, ' Paëlla 900g', 100, NULL),
(26, 6, 1.84, 'Nescafé grande dolce gusto capsule x16 -128g', 100, NULL),
(27, 6, 2.29, 'CHARLES ET ALICE Spécialité pomme banane vanille sans sucres ajoutés 4x100g', 100, NULL),
(28, 6, 2.77, 'L Or espresso delizioso n°5 capsule alu x10 -52g', 100, NULL),
(29, 6, 4.55, 'Tassimo Grand Mère café petit déjeuner dosette x16 -132g', 100, NULL),
(30, 6, 4.11, 'café classique dosette x48 -333g', 100, NULL),
(31, 7, 1.84, 'Tuiles saveur crème oignon 170g', 100, NULL),
(32, 7, 2.29, 'Chips à lancienne nature - sachets individuels 6x30g', 100, NULL),
(33, 7, 2.77, 'Chips nature à lhuile de tournesol 200g', 100, NULL),
(34, 7, 4.55, 'Chips saveur barbecue 130g', 100, NULL),
(35, 7, 4.11, 'Chips ondulées paysanne nature 300g', 100, NULL),
(36, 8, 1.84, 'Eau minérale naturelle gazeuse 6x1l', 100, NULL),
(37, 8, 2.29, 'Pur jus d orange sans pulpe 1,5l', 100, NULL),
(38, 8, 2.77, 'Pressade Nectar multifruits sans pulpe bio brique 1l', 100, NULL),
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
