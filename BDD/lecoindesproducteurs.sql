-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 15 juin 2023 à 14:46
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lecoindesproducteurs`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `name`, `first_name`, `email`, `password`) VALUES
(2, 'Guichard', 'Nicolas', 'nickk57410@gmail.com', '$2y$10$rNZ0k4TXTacAsY9K1yZAueFmpFrUCIazJwIQnzLZNrCD930qmpCzW');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `id_picture` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_ibfk_1` (`id_picture`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `id_picture`) VALUES
(1, 'légumes', 35),
(2, 'fruits', 36),
(3, 'Viandes', 37),
(4, 'pain', 38),
(5, 'Boisson', 133),
(6, 'Produit laitier ', 40),
(7, 'Vrac', 125),
(8, 'épicerie salée', 42),
(9, 'Epicerie sucrée', 43),
(11, 'Glace', 45),
(12, 'Oeuf', 46),
(13, 'Huile & vinaigre', 47),
(14, 'Escargot', 48);

-- --------------------------------------------------------

--
-- Structure de la table `categ_producteur`
--

DROP TABLE IF EXISTS `categ_producteur`;
CREATE TABLE IF NOT EXISTS `categ_producteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `id_picture` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_picture` (`id_picture`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categ_producteur`
--

INSERT INTO `categ_producteur` (`id`, `name`, `id_picture`) VALUES
(1, 'Viandes et Volailles', 37),
(2, 'Fruits et Légumes', 35),
(3, 'Fromages et Crémerie', 40),
(4, 'Epicerie', 42),
(5, 'Cosmétiques et produits pour la maison', NULL),
(6, 'Boisson', 133),
(7, 'céréales', 125);

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

DROP TABLE IF EXISTS `picture`;
CREATE TABLE IF NOT EXISTS `picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `path` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `picture`
--

INSERT INTO `picture` (`id`, `name`, `path`) VALUES
(1, 'planche gris', 'uploads/planche-bois-blanc.png'),
(3, 'Brassi\'coop', 'uploads/316279843_111246185139990_741034054793757468_n.jpg'),
(4, 'Brasserie La Chaouette', 'uploads/cropped-La-Chaouette-logo-CMJN.png'),
(5, 'Les Foies Gras Lucien Doriath', 'uploads/290763241_405040854979541_8636642823818304550_n.jpg'),
(6, 'EARL  DES  SATURNINS', 'uploads/0a4a43_886d024209774185a41de85adae430f6.webp'),
(7, 'Domaine KELHETTER Damien', 'uploads/pub_logo.gif'),
(8, 'Les Vergers de la Côte Marion', 'uploads/299322201_464792108991052_8989638598231595888_n.jpg'),
(9, 'Ferme Bel Air', 'uploads/LOGO.jpg'),
(10, 'Ferme de la Chaudeau', 'uploads/cropped-cropped-cropped-LOGO-blanc.png'),
(11, 'Ferme de la moselle', 'uploads/307130618_5539058782867842_1121335253529797965_n.jpg'),
(12, 'Ferme de l\'Écluse', 'uploads/logo-l\'ecluse.jpg'),
(13, 'Ferme de Montplainchamps', 'uploads/295c84b9-88a5-42f7-997c-e69c1bb69b41.jpeg'),
(14, 'Ferme des Forges', 'uploads/logoferme_des_forges_invitation_a_la_ferme.webp'),
(15, 'Ferme des jardins', 'uploads/298795703_725891888444242_5112119931166638465_n.png'),
(16, 'Ferme des Terres Froides', 'uploads/logo.png'),
(17, 'ferme-horrenberger', 'uploads/ferme-bio-horrenberger.png'),
(18, 'Ferme de Martigny', 'uploads/dscf1602-2.jpg'),
(19, 'GAEC DU BERGER', 'uploads/20220325-162610-2.jpg'),
(20, 'ferme Guillaumont', 'uploads/logo-ferme-guillaumont.png'),
(21, 'GAEC du fumé Lorrain', 'uploads/logo-ferme-haffner.png'),
(22, 'GAEC du Vieux Poirier', 'uploads/logo transparant.png'),
(23, 'Gengoulf', 'uploads/logo_h2.png'),
(24, 'Hypolite David', 'uploads/logo-large.67x24.png'),
(25, 'Jus de pommes de Lorraine', 'uploads/300962039_579489903873497_3126281660169220121_n.jpg'),
(26, 'La coquille gourmande', 'uploads/304836094_634873208343169_6481547423019125093_n.png'),
(27, 'Les herbes folles ', 'uploads/logo transparant.png'),
(28, 'Les jardins de bernadette', 'uploads/logo les jardin de bernadette.png'),
(29, 'Les petits cirés', 'uploads/308098794_530565529068854_6010483321842280650_n.jpg'),
(30, 'Les p\'tisânes', 'uploads/e5fc37_e0a15e12964e4be082786d0fbc3da403~mv2.webp'),
(31, 'Le Rucher des Ducs de Lorraine', 'uploads/image.jpg'),
(32, 'Les vergers de Florence', 'uploads/19095671_1321983421184202_8557270744346212150_o.jpg'),
(33, 'L\'opercule', 'uploads/logo-1648217112.jpg'),
(34, 'Pains & Tradition', 'uploads/242449880_2051508035026770_2656231954165536649_n.png'),
(35, 'légumes', 'uploads/IMG_5624.JPG'),
(36, 'fruits', 'uploads/IMG_6048.JPG'),
(37, 'Viandes', 'uploads/viande.jpg'),
(38, 'pain', 'uploads/IMG_6952.JPG'),
(40, 'Produit laitier ', 'uploads/IMG_4380.JPG'),
(42, 'épicerie salée', 'uploads/pexels-julia-volk-5273011.jpg'),
(43, 'épicerie sucré', 'uploads/pexels-karolina-grabowska-4198376.jpg'),
(45, 'Glace', 'uploads/pexels-shreyaan-vashishtha-15284444.jpg'),
(46, 'Oeuf', 'uploads/pexels-karolina-grabowska-4207654.jpg'),
(47, 'Huile & vinaigre', 'uploads/pexels-svetlana-ponomareva-4282694.jpg'),
(48, 'Escargot', 'uploads/pexels-invisiblepower-320956.jpg'),
(50, 'Bière ', 'uploads/pexels-elevate-1267700.jpg'),
(52, 'Formage de chevre', 'uploads/pexels-laura-paredis-15273075.jpg'),
(53, 'formage de vache', 'uploads/pexels-jan-koetsier-2647053.jpg'),
(54, 'formage de brebis ', 'uploads/pexels-leigh-jeffreys-1274275.jpg'),
(55, 'formage de vache', 'uploads/pexels-jan-koetsier-2647053.jpg'),
(56, 'formage de brebis ', 'uploads/pexels-leigh-jeffreys-1274275.jpg'),
(59, 'Poulet', 'uploads/pexels-oleksandr-pidvalnyi-375510.jpg'),
(61, 'Emince de poulet bio', 'uploads/IMG_8525.jpg'),
(62, 'Alies de poulet bio', 'uploads/IMG_8526.jpg'),
(63, 'Poulet entier plein air', 'uploads/IMG_8527.jpg'),
(64, 'Canard', 'uploads/pexels-saeid-anvar-833687.jpg'),
(65, 'Maget de canard cru', 'uploads/IMG_8528.jpg'),
(66, 'cous de poulet', 'uploads/IMG_8529.jpg'),
(67, 'Steaks de canard', 'uploads/IMG_8530.jpg'),
(68, 'Cuisses de canard confites', 'uploads/IMG_8531.jpg'),
(69, 'Graisse de canard', 'uploads/IMG_8532.jpg'),
(70, 'Lapin', 'uploads/pexels-satyabratasm-4001296.jpg'),
(71, 'Agneau', 'uploads/pexels-paul-seling-891607.jpg'),
(72, 'Tranche de gigot d\'agneau', 'uploads/IMG_8533.jpg'),
(73, 'Epaule d\'agneau roulée', 'uploads/IMG_8534.jpg'),
(74, 'Brochettes d\'agneau farcies merguez', 'uploads/IMG_8535.jpg'),
(75, 'Pate de lapin', 'uploads/IMG_8536.jpg'),
(76, 'Rables de lapin', 'uploads/IMG_8537.jpg'),
(77, 'Boeuf', 'uploads/pexels-pixabay-51311.jpg'),
(78, 'Porc', 'uploads/pexels-matthias-zomer-66627.jpg'),
(79, 'La ferme d\'antoine', 'uploads/305927386_136536372456667_7390719373203236033_n.jpg'),
(80, 'Bifteck lot4', 'uploads/IMG_8538.jpg'),
(81, 'Cotes de bœuf avec os', 'uploads/IMG_8539.jpg'),
(82, 'Araignée de bœuf', 'uploads/IMG_8540.jpg'),
(83, 'Lard fume tranche', 'uploads/IMG_8541.jpg'),
(84, 'Echine marinée', 'uploads/IMG_8542.jpg'),
(85, 'Marguez pur porc', 'uploads/IMG_8543.jpg'),
(86, 'le coin des producteurs', 'uploads/LOGO COLOR.jpg'),
(87, 'Oignon', 'uploads/IMG_8544.jpg'),
(88, 'Oignon cébelle bio', 'uploads/IMG_8544.jpg'),
(89, 'Oignon botte', 'uploads/IMG_8544.jpg'),
(90, 'aromatique', 'uploads/pexels-lachlan-ross-7084257.jpg'),
(91, 'Pomme de terre', 'uploads/IMG_8553.jpg'),
(92, 'Pomme de terre', 'uploads/IMG_8546.jpg'),
(93, 'Pomme de terre Ditta', 'uploads/IMG_8553.jpg'),
(94, 'Pomme de terre Grenaille', 'uploads/IMG_8555.jpg'),
(95, 'Oignon jaunes bio', 'uploads/IMG_8557.jpg'),
(96, 'Aie & Echalote', 'uploads/IMG_8559.jpg'),
(98, 'Ail frais bio', 'uploads/IMG_8559.jpg'),
(99, 'Echalote nouvelle bio', 'uploads/IMG_8563.jpg'),
(100, 'légumes', 'uploads/IMG_5624.JPG'),
(101, 'Poireau bio', 'uploads/IMG_8565.jpg'),
(102, 'Chou fleur bio', 'uploads/IMG_8571.jpg'),
(103, 'Fenouil bio', 'uploads/IMG_8574.jpg'),
(104, 'Artichaut violet bio', 'uploads/IMG_8575.jpg'),
(105, 'Concombre noa bio', 'uploads/IMG_8580.jpg'),
(106, 'Poivron', 'uploads/IMG_8582.jpg'),
(107, 'Navets nouveaux', 'uploads/IMG_8587.jpg'),
(108, 'Radis noir', 'uploads/IMG_8588.jpg'),
(109, 'Carotte', 'uploads/IMG_8596.jpg'),
(110, 'Carottes bio', 'uploads/IMG_8593.jpg'),
(111, 'Panais bio', 'uploads/IMG_8594.jpg'),
(112, 'Carotte mourelles bio', 'uploads/IMG_8596.jpg'),
(113, 'Farine', 'uploads/pexels-kaboompics-com-5765.jpg'),
(114, 'Farine de blé blanche', 'uploads/IMG_8597.jpg'),
(115, 'Farine de blé semi complète', 'uploads/IMG_8598.jpg'),
(116, 'Farine de blé complète', 'uploads/IMG_8599.jpg'),
(117, 'Farine de petit Epeautre', 'uploads/IMG_8600.jpg'),
(118, 'Farine de grand Epeautre', 'uploads/IMG_8601.jpg'),
(119, 'Farine de Seigle', 'uploads/IMG_8602.jpg'),
(120, 'Farine de 6 graines', 'uploads/IMG_8603.jpg'),
(121, 'Farine de Pois chiche', 'uploads/IMG_8604.jpg'),
(122, 'Farine de lentille', 'uploads/IMG_8605.jpg'),
(123, 'Lentilles', 'uploads/IMG_8607.jpg'),
(124, 'Lentilles Vertes', 'uploads/IMG_8607.jpg'),
(125, 'vrac', 'uploads/IMG_8625.jpg'),
(126, 'Beluga', 'uploads/IMG_8608.jpg'),
(127, 'Pois casses', 'uploads/IMG_8615.jpg'),
(128, 'Graines de courges', 'uploads/IMG_8620.jpg'),
(129, 'Œuf frais', 'uploads/pexels-karolina-grabowska-4207654.jpg'),
(130, 'Œuf en plein air', 'uploads/pexels-karolina-grabowska-4207654.jpg'),
(133, 'Boisson', 'uploads/beer-gbb6fcaa5e_640.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `id_subcategory` int(11) DEFAULT NULL,
  `id_picture` int(11) DEFAULT NULL,
  `id_producteur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_ibfk_1` (`id_picture`),
  KEY `product_ibfk_2` (`id_producteur`),
  KEY `product_ibfk_3` (`id_subcategory`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `id_subcategory`, `id_picture`, `id_producteur`) VALUES
(5, 'Emincé de poulet bio', '', 5, 61, 18),
(6, 'Ailes de poulet bio', '', 5, 62, 18),
(7, 'Poulet entier plein air', '', 5, 63, 18),
(8, 'Magret de canard cru', '', 6, 65, 5),
(9, 'Cous de poulet', '', 5, 66, 18),
(10, 'Steaks de canard', '', 6, 67, 5),
(11, 'Cuisses de canard confites', '', 6, 68, 5),
(12, 'Graisse de canard', '', 6, 69, 5),
(13, 'Tranche de gigot d\'agneau', '', 8, 72, 20),
(14, 'Epaule d\'agneau roulée', '', 8, 73, 20),
(15, 'Brochettes d\'agneau farcies merguez', '', 8, 74, 20),
(16, 'Patte de lapin', '', 7, 75, 20),
(17, 'Rables de lapin', '', 7, 76, 20),
(18, 'Bifteck lot4', '', 10, 80, 35),
(19, 'Côtes de bœuf avec os', '', 9, 81, 35),
(20, 'Araignée de bœuf', '', 9, 82, 35),
(21, 'Lard fumé tranché', '', 10, 83, 21),
(22, 'Echine marinée', '', 10, 84, 21),
(23, 'Merguez pur porc', '', 10, 85, 21),
(24, 'Oignon cébelle bio', '', 11, 88, 36),
(25, 'Oignon botte', '', 11, 89, 36),
(26, 'Pomme de terre', '', 13, 92, 36),
(27, 'Pomme de terre Ditta', '', 13, 93, 36),
(28, 'Pomme de terre Grenaille', '', 13, 94, 36),
(29, 'Oignon jaune bio', '', 11, 95, 36),
(31, 'Ail frais bio', '', 14, 98, 36),
(32, 'Echalote nouvelle bio', '', 14, 99, 36),
(33, 'Poireau bio', '', 15, 101, 36),
(34, 'Chou fleur bio', '', 15, 102, 36),
(35, 'Fenouil bio', '', 15, 103, 36),
(36, 'Artichaut violet bio', '', 15, 104, 36),
(37, 'Concombre noa bio', '', 15, 105, 36),
(38, 'Poivron', 'Rouge, jaune &amp; vert', 15, 106, 36),
(39, 'Navets nouveaux', '', 15, 107, 36),
(40, 'Radis noir', '', 15, 108, 36),
(41, 'Carottes bio', '', 16, 110, 36),
(42, 'Panais bio', '', 15, 111, 36),
(43, 'Carotte mourelles bio', '', 16, 112, 36),
(44, 'Farine de blé blanche', 'paquet de 1kg, 2,5kg &amp; 5kg', 17, 114, 24),
(45, 'Farine de blé semi complète', 'paquet de 1kg, 2,5kg &amp; 5kg', 17, 115, 24),
(46, 'Farine de blé complète', 'paquet de 1kg, 2,5kg &amp; 5kg', 17, 116, 24),
(47, 'Farine de petit Epeautre', 'paquet de 1kg &amp; 2.5kg', 17, 117, 24),
(48, 'Farine de grand Epeautre', 'paquet de 1kg &amp; 2.5kg', 17, 118, 24),
(49, 'Farine de Seigle', 'paquet de 1kg &amp; 2.5kg', 17, 119, 24),
(50, 'Farine de 6 graines', 'paquet de 5kg\r\nGraine : Blé, grand épeautre, seigle, graines de lin', 17, 120, 24),
(51, 'Farine de Pois chiche', '', 17, 121, 24),
(52, 'Farine de lentille', '', 17, 122, 24),
(53, 'Lentilles Vertes', '', 18, 124, 9),
(54, 'Beluga', '', 19, 126, 9),
(55, 'Pois cassés', '', 19, 127, 9),
(56, 'Graines de courges', '', 19, 128, 9);

-- --------------------------------------------------------

--
-- Structure de la table `producteur`
--

DROP TABLE IF EXISTS `producteur`;
CREATE TABLE IF NOT EXISTS `producteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `description` text,
  `characte` text,
  `id_picture` int(11) DEFAULT NULL,
  `id_categ_producteur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `producteur_ibfk_1` (`id_picture`),
  KEY `producteur_ibfk_2` (`id_categ_producteur`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `producteur`
--

INSERT INTO `producteur` (`id`, `name`, `city`, `first_name`, `description`, `characte`, `id_picture`, `id_categ_producteur`) VALUES
(3, 'Brassi\'coop', 'Marbache (54)', 'Brassi\'coop', 'coopérative de fabrication de bières ', 'Fabrication de bières ', 3, 6),
(4, 'Brasserie La Chaouette', 'Saizerais (54)', 'Brasserie La Chaouette', 'Découvrez toutes nos bières  bio qui se déclinent en blanche, blonde, ambrée et de printemps.\r\nNos bières ne sont ni filtrées ni pasteurisées afin de préserver l’ensemble des arômes subtils qui en font leur singularité', 'Fabrication de bières', 4, 6),
(5, 'Les Foies Gras Lucien Doriath', 'Soultz-Les-bains (67)', 'Lucien Doriath', '', 'un éleveur de canard ', 5, 1),
(6, 'EARL  DES  SATURNINS', 'Meligny-le-Grand (55)', 'La Famille BOUCHOT', '', 'un éleveur de canard', 6, 1),
(7, 'Domaine KELHETTER Damien', 'Dahlenheim (67)', 'KELHETTER Damien', '', 'un Caviste ', 7, 1),
(8, 'Les Vergers de la Côte Marion', 'Vigneulles-lès-Hattonchâtel (55)', 'Gérard Henry', '', '', 8, 2),
(9, 'Ferme Bel Air', 'Landroff (57)', '', '', 'ferme de céréales &amp; huile', 9, 4),
(10, 'Ferme de la Chaudeau', 'Pierre-la Treiche (54)', '', 'Notre ferme est située à Pierre la Treiche, près de Toul.', 'Nous y cultivons légumes et safran ', 10, 4),
(11, 'Ferme de la moselle', 'Berg-Sur-Moselle (57)', 'Jean-Nicolas KREMER et Jean-Philippe WALLERICH', '', 'producteur de yourte, formage, lait', 11, 3),
(12, 'Ferme de l\'Écluse', 'Hâcourt (52)', 'Stéphanie', '', 'vente de spiruline', 12, 4),
(13, 'Ferme de Montplainchamps', 'Neufchâteau (06)', 'Monsieur et Madame Goebels', '', 'vente tiramisu, chocolat, beurre', 13, 1),
(14, 'Ferme des Forges', 'Abainville (55)', '', '', 'vente de yaourt, bio', 14, 3),
(15, 'Ferme des jardins', 'Liocourt (57)', 'Mr Vautrin', 'Nous produisons sur notre ferme des aliments naturels, sains, tout simplement bons pour notre santé', '', 15, 7),
(16, 'Ferme des Terres Froides', 'Nancois-Le-Grand (55)', 'ORBION Mathieu et Jérôme VILAR Hélène et Vladimir', '', 'vente de fromage de vache BIO', 16, 1),
(17, 'ferme-horrenberger', 'Durrenentzen (68)', '', '', 'vente de léguemes', 17, 2),
(18, 'Ferme de Martigny', 'Colmey (54)', 'Estelle et Joël BRODIER', '', 'Elevage de Volailles Bio', 18, 1),
(19, 'GAEC DU BERGER', 'Nancois-Le-Grand (55)', 'STÉPHANIE MASSON', '', 'Notre ferme est certifiée en agriculture biologique\r\nNous produisons nos céréales bio afin de les transformées en farine bio avec un moulin a meule de pierre.\r\nNous produisons du pain au levain bio, biscuit bio ,flocon d \'avoine bio,brioche, pain burger pain de mie.\r\nLa cuisson se fait dans un four a granulés de bois', 19, 7),
(20, 'ferme Guillaumont', 'Réchicourt-la-Petite (54)', 'Isabelle, Philippe et Clément GUILLAUMONT', 'Vous trouverez des informations sur notre ferme, notre métier et nos produits. Vous pourrez commander en ligne votre viande d’agneau, de lapin fermier et poulet fermier, nos terrines, rillettes,  saucissons secs ou fumés, différents jambons fumés et tester nos recettes, suivre l’actualité de notre élevage.\r\n\r\n \r\n\r\nToutes les photos de notre site sont nos animaux, à l’intérieur de nos bâtiments ou à l’extérieur dans nos pâturages.', '', 20, 1),
(21, 'GAEC du fumé Lorrain', 'Montigny (54)', '', 'On dit que l\'on est ce que l\'on mange, mais en réalité, \r\nOn est ce que l\'animal a mangé !', 'viandes de porc ', 21, 1),
(22, 'GAEC du Vieux Poirier', 'Sponville (54)', '', '', '', 22, 3),
(23, 'Gengoulf', 'Florenville (06)', '', '', 'une brasserie ', 23, 6),
(24, 'Hypolite David', 'Avril (54)', 'David', '', 'producteur de farine', 24, 7),
(25, 'Jus de pommes de Lorraine', 'Baslieux (54)', '', '', '', 25, 6),
(26, 'La coquille gourmande', 'Thonville (57)', 'Florine Haag', '', 'Exploitation agricole, dont l\'activité principale est l\'élevage d\'escargot agrémenté d\'un atelie', 26, 1),
(27, 'Les herbes folles ', 'Nouart (08)', 'Bantquin', '', 'fabricant de tisane, huile & vinaigre ', 27, 4),
(28, 'Les jardins de bernadette', 'Vagney (88)', 'Mr Grandmange', '', 'fabricant de tisane, huile & vinaigre  ', 28, 4),
(29, 'Les petits cirés', 'Longwy (54)', 'Mme Marson', '', 'produit pour la maison', 29, 5),
(30, 'Les p\'tisânes', 'Ménil-la-Horgne (55)', 'Mr Vautier', '', 'fabricant de tisane', 30, 4),
(31, 'Le Rucher des Ducs de Lorraine', 'Sierck-les-Bains (57)', '', '', 'fabricant de miel', 31, 4),
(32, 'Les vergers de Florence', 'Longuyon (54)', '', '', 'un verger ', 32, 2),
(33, 'L\'opercule', 'Serones (88)', '', 'Installée dans une vallée du massif vosgien, l\'ex-principauté de Salm qui comporte encore actuellement trois abbayes, la brasserie de L\'Opercule brasse des bières bio et artisanales depuis 2017.', 'fabricant de bière ', 33, 6),
(34, 'Pains & Tradition', 'HautCharage (lux)', '', '', '', 34, 7),
(35, 'La ferme d\'antoine', 'Beuveille (54)', 'Antoine', '', 'producteur de bœuf & porc', 79, 1),
(36, 'le coin des producteurs', 'Lexy (54)', '', '', '', 86, 2);

-- --------------------------------------------------------

--
-- Structure de la table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL,
  `id_picture` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sub_category_ibfk_1` (`id_category`),
  KEY `sub_category_ibfk_2` (`id_picture`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `id_category`, `id_picture`) VALUES
(1, 'Bière ', 5, 50),
(2, 'Formage de chevre', 6, 52),
(3, 'Formage de vache', 6, 55),
(4, 'Formage de brebis ', 6, 56),
(5, 'Poulet', 3, 59),
(6, 'Canard', 3, 64),
(7, 'Lapin', 3, 70),
(8, 'Agneau', 3, 71),
(9, 'Boeuf', 3, 77),
(10, 'Porc', 3, 78),
(11, 'Oignon', 1, 87),
(12, 'Aromatique', 8, 90),
(13, 'Pomme de terre', 1, 91),
(14, 'Ail &amp; Echalote', 8, 96),
(15, 'Légumes', 1, 100),
(16, 'Carotte', 1, 109),
(17, 'Farine', 8, 113),
(18, 'Lentilles', 7, 123),
(19, 'Vrac', 7, 125),
(20, 'Œuf frais', 12, 129),
(21, 'Œuf en plein air', 12, 130);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`id_picture`) REFERENCES `picture` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `categ_producteur`
--
ALTER TABLE `categ_producteur`
  ADD CONSTRAINT `categ_producteur_ibfk_1` FOREIGN KEY (`id_picture`) REFERENCES `picture` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_picture`) REFERENCES `picture` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_producteur`) REFERENCES `producteur` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`id_subcategory`) REFERENCES `sub_category` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `producteur`
--
ALTER TABLE `producteur`
  ADD CONSTRAINT `producteur_ibfk_1` FOREIGN KEY (`id_picture`) REFERENCES `picture` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `producteur_ibfk_2` FOREIGN KEY (`id_categ_producteur`) REFERENCES `categ_producteur` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `sub_category_ibfk_2` FOREIGN KEY (`id_picture`) REFERENCES `picture` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
