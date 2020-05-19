-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 19 mai 2020 à 18:39
-- Version du serveur :  5.6.17
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_brief9`
--

-- --------------------------------------------------------

--
-- Structure de la table `carte_bancaire`
--

CREATE TABLE `carte_bancaire` (
  `CIN` varchar(254) DEFAULT NULL,
  `Num_Carte` varchar(254) NOT NULL,
  `Balance` float DEFAULT NULL,
  `Anne_Exp` datetime DEFAULT NULL,
  `Crypto` varchar(254) DEFAULT NULL,
  `Mois_Exp` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `Id_categorie` int(11) NOT NULL,
  `Description_categorie` varchar(254) DEFAULT NULL
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

CREATE TABLE `client` (
  `CIN` varchar(254) NOT NULL,
  `Nom_client` varchar(254) DEFAULT NULL,
  `Prenom_client` varchar(254) DEFAULT NULL,
  `Date_Naissance` date DEFAULT NULL,
  `Tel_Client` varchar(254) DEFAULT NULL,
  `Email` varchar(254) DEFAULT NULL,
  `Password` varchar(254) DEFAULT NULL,
  `Adresse` varchar(254) DEFAULT NULL,
  `NumCarte` varchar(254) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `CIN` varchar(254) DEFAULT NULL,
  `Id_Commande` int(11) NOT NULL,
  `Date_Commande` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `CIN` varchar(254) DEFAULT NULL,
  `Id_facture` int(11) NOT NULL,
  `Date_facture` datetime DEFAULT NULL,
  `Montant` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `Id_produit` int(11) NOT NULL,
  `Id_categorie` int(11) DEFAULT NULL,
  `Prix_produit` float DEFAULT NULL,
  `Description_produit` varchar(254) DEFAULT NULL,
  `Quantite_Max` int(11) DEFAULT NULL,
  `Image_produit` varchar(254) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`Id_produit`, `Id_categorie`, `Prix_produit`, `Description_produit`, `Quantite_Max`, `Image_produit`) VALUES
(1, 1, 5.34, 'lait demi-écrémé stérilisé UHT-\' issu d’animaux nourris sans OGM (< 0.9%)\'', 100, 'A1'),
(3, 1, 6.11, 'BIO Lait demi-écrémé équitable UHT', 100, 'A3'),
(2, 1, 5.94, 'Lait demi-écrémé équitable UHT', 100, 'A2'),
(4, 1, 1.77, 'AUCHAN Beurre doux 250g', 100, 'A4'),
(5, 1, 3.55, 'BIO Fromage blanc 500g', 100, 'A5'),
(10, 2, 3.11, 'Auchan merguez x6 - 330g', 100, 'A10'),
(9, 2, 3.94, 'chipolatas x6 - 330g', 100, 'A9'),
(8, 2, 1.77, 'Cheveux d ange 5%mg 500g', 100, 'A8'),
(7, 2, 3.55, 'steaks hachés 5%mg x2 - 250g', 100, 'A7'),
(6, 2, 3.55, 'saumon fumé mini x6 - 100g', 100, 'A6'),
(11, 3, 1.84, 'Blanc de poulet doré au four 6 tranches 180g', 100, 'A11'),
(12, 3, 2.22, 'Jambon supérieur -25% de sel sans couenne 4 tranches 160g', 100, 'A12'),
(13, 3, 1.77, 'Le Bon Paris Jambon au torchon sans nitrite 4 tranches 140g', 100, 'A13'),
(14, 3, 3.55, 'Lardons fumés 2x150g', 100, 'A14'),
(15, 3, 3.55, 'Jambon cru tranches fines et fondantes 6 tranches 100g', 100, 'A15'),
(16, 4, 1.84, 'Oranges bio 1kg', 100, 'A16'),
(17, 4, 2.29, 'Pommes Golden filière responsable AOP 1kg', 100, 'A17'),
(18, 4, 2.77, 'Poires barquette 750g', 100, 'A18'),
(19, 4, 4.55, 'Fraises gariguette 250g', 100, 'A19'),
(20, 4, 3.11, 'bio Kiwis 6 pièces', 100, 'A20'),
(21, 5, 1.84, 'Pizza cuite sur pierre au chorizo 390g', 100, 'A21'),
(22, 5, 2.29, 'Pizza cuites sur pierre royale 370g', 100, 'A22'),
(23, 5, 2.77, 'Buitoni Pizza fraîch up 4 fromages 600g', 100, 'A23'),
(24, 5, 4.55, 'Crêpe jambon emmental 1kg', 100, 'A24'),
(25, 5, 4.11, ' Paëlla 900g', 100, 'A25'),
(26, 6, 1.84, 'Nescafé grande dolce gusto capsule x16 -128g', 100, 'A26'),
(27, 6, 2.29, 'CHARLES ET ALICE Spécialité pomme banane vanille sans sucres ajoutés 4x100g', 100, 'A27'),
(28, 6, 2.77, 'L Or espresso delizioso n°5 capsule alu x10 -52g', 100, 'A28'),
(29, 6, 4.55, 'Tassimo Grand Mère café petit déjeuner dosette x16 -132g', 100, 'A29'),
(30, 6, 4.11, 'café classique dosette x48 -333g', 100, 'A30'),
(31, 7, 1.84, 'Tuiles saveur crème oignon 170g', 100, 'A31'),
(32, 7, 2.29, 'Chips à lancienne nature - sachets individuels 6x30g', 100, 'A32'),
(33, 7, 2.77, 'Chips nature à lhuile de tournesol 200g', 100, 'A33'),
(34, 7, 4.55, 'Chips saveur barbecue 130g', 100, 'A34'),
(35, 7, 4.11, 'Chips ondulées paysanne nature 300g', 100, 'A35'),
(36, 8, 1.84, 'Eau minérale naturelle gazeuse 6x1l', 100, 'A36'),
(37, 8, 2.29, 'Pur jus d orange sans pulpe 1,5l', 100, 'A37'),
(38, 8, 2.77, 'Pressade Nectar multifruits sans pulpe bio brique 1l', 100, 'A38'),
(39, 8, 4.55, 'Coca cola Boisson gazeuse aux extraits', 100, 'A39'),
(40, 8, 4.11, 'Eau de source plate bouteilles 12x33cl', 100, 'A40'),
(41, 9, 1.84, 'Gallia Calisma 1 lait 1er âge en poudre', 100, 'A41'),
(42, 9, 2.29, 'Blédina Blédichef assiette pâtes étoiles', 100, 'A42'),
(43, 9, 2.77, 'LES PETITS GOURMETS BIO Assiette Risotto', 100, 'A43'),
(44, 9, 4.55, 'Nestlé Petite recette bol spaghetti', 100, 'A44'),
(45, 9, 4.11, 'NATURNES Bol Carottes Dès 4 mois 130g X 2', 100, 'A45'),
(46, 10, 1.84, 'Cadum Crème douche surgras amande et miel', 100, 'A46'),
(47, 10, 2.29, 'Le Petit Marseillais Douche crème extra doux', 100, 'A47'),
(48, 10, 2.77, 'Sanex Zéro% gel douche enfants corps et cheveux 500ml', 100, 'A48'),
(49, 10, 4.55, 'Cosmia savon mains coton 300ml', 100, 'A49'),
(50, 10, 4.11, 'Veet Bandes de cire corps et jambes pour peaux ', 100, 'A50'),
(51, 11, 1.84, 'Lotus Boîte de mouchoirs pur blanc 3 épaisseurs x90', 100, 'A51'),
(52, 11, 2.29, 'Paquets de mouchoirs blancs 4 épaisseurs 15x9', 100, 'A52'),
(53, 11, 2.77, 'X.tra Total+ lessive concentrée fraîcheur 44 lavages 2,2l', 100, 'A53'),
(54, 11, 4.55, 'Cajoline Assouplissant doux & pur hypoallergénique ', 100, 'A54'),
(55, 11, 4.11, 'Vanish Oxi Action pistolet détachant 750ml', 100, 'A55'),
(56, 12, 1.84, 'Fido Croq mix croquettes volaille céréales', 100, 'A56'),
(57, 12, 2.29, 'Catsan Litière minérale hygiène plus pour chat 10l', 100, 'A57'),
(58, 12, 2.77, 'Adult assortiment sachets repas poissons en gelée', 100, 'A58'),
(59, 12, 4.55, 'Purina One dual nature croquettes poulet céréales', 100, 'A59'),
(60, 12, 4.11, 'Felix Sachets repas pâtée en gelée viandes', 100, 'A60'),
(66, 13, 100.84, 'KRUPS Expresso Broyeur à grains Essential YY3957FD', 100, NULL),
(67, 13, 200.29, 'PHILIPS Cafetière à dosettes Senseo Original HD6553/23, Bleu gris', 100, NULL),
(68, 13, 200.77, 'KRUPS Cafetière à dosette Dolce Gusto - YY4230FD - Anthracite', 100, NULL),
(69, 13, 60.55, 'KRUPS Grille-pain KH682D10 - Inox', 100, NULL),
(70, 13, 150.11, 'KRUPS Cafetière Pro Aroma Plus KM321010, Inox', 100, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `quantite_commande`
--

CREATE TABLE `quantite_commande` (
  `Id_Commande` int(11) DEFAULT NULL,
  `Id_produit` int(11) DEFAULT NULL,
  `Qte` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `carte_bancaire`
--
ALTER TABLE `carte_bancaire`
  ADD PRIMARY KEY (`Num_Carte`),
  ADD KEY `FK_Association_5` (`CIN`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`Id_categorie`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`CIN`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`Id_Commande`),
  ADD KEY `FK_Association_2` (`CIN`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`Id_facture`),
  ADD KEY `FK_Association_6` (`CIN`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`Id_produit`),
  ADD KEY `FK_Association_7` (`Id_categorie`);

--
-- Index pour la table `quantite_commande`
--
ALTER TABLE `quantite_commande`
  ADD KEY `FK_Association_8` (`Id_produit`),
  ADD KEY `FK_Association_9` (`Id_Commande`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
