-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 23 juin 2023 à 02:49
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `maisonneuve_2295546`
--

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) NOT NULL,
  `titre_en` varchar(45) NOT NULL,
  `date_creation` date NOT NULL,
  `chemin` varchar(45) NOT NULL,
  `etudiant_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_documents_etudiants_idx` (`etudiant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_de_naissance` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `villes_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `etudiants_email_unique` (`email`),
  KEY `fk_etudiants_villes_idx` (`villes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `name`, `email`, `adresse`, `phone`, `date_de_naissance`, `created_at`, `updated_at`, `villes_id`) VALUES
(6, 'Dr. Katherine Swaniawski Sr.', 'wmueller@example.com', '50254 Jillian WellVivienburgh, CO 75306', '1-281-564-8150', '1976-02-13', '2023-05-31 03:17:45', '2023-06-21 08:11:48', 1),
(7, 'Dr. Maverick Kertzmann IV', 'felton95@example.net', '10443 Alessia Rest\nPort Burniceberg, NC 54186', '+1.417.296.2906', '1972-11-17', '2023-05-31 03:17:45', '2023-05-31 03:17:45', 4),
(8, 'Zora Glover DDS', 'cstracke@example.org', '33850 Marley Canyon Suite 281\nRomaineborough, NC 92146', '1-214-671-4784', '1999-02-03', '2023-05-31 03:17:45', '2023-05-31 03:17:45', 3),
(9, 'Candido Tromp', 'kiara27@example.net', '68776 Bayer RunWest Isaiahview, DC 60800', '+1-860-687-7718', '1973-11-16', '2023-05-31 03:17:45', '2023-06-23 06:28:17', 9),
(10, 'Johnathan Ankunding DVM', 'cary.beatty@example.net', '16934 Adell Inlet Suite 538\nLubowitzfort, SC 45269-6609', '1-518-828-1080', '1972-01-09', '2023-05-31 03:17:45', '2023-05-31 03:17:45', 2),
(11, 'Raymundo Rutherford', 'kurtis.medhurst@example.net', '7015 Stamm Walk Suite 841\nNikolausstad, VT 68380-1503', '(940) 897-4987', '2014-02-05', '2023-05-31 03:17:45', '2023-05-31 03:17:45', 3),
(12, 'Sigrid Raynor', 'leda.kemmer@example.com', '4777 Donnelly Field Suite 337\nWest Victor, MO 21324', '(575) 734-9424', '2020-10-20', '2023-05-31 03:17:45', '2023-05-31 03:17:45', 8),
(13, 'Morton Lueilwitz', 'tod43@example.net', '978 Jarrell Manors\nRathmouth, CT 00822', '585.680.4519', '2016-04-16', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 3),
(14, 'Mrs. Elizabeth Moore', 'phand@example.net', '5224 Lorna Village\nWardbury, IA 89015-5791', '+1-985-791-7194', '1994-12-11', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 6),
(15, 'Jayce Boyer', 'ylesch@example.net', '65660 Zaria Trail\nLakinfurt, AR 53915', '+1-973-924-6434', '1979-11-23', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 3),
(16, 'Lucio Carroll III', 'alanis14@example.org', '47458 Adams Plaza\nZulaufland, RI 96682', '(743) 406-8995', '1986-06-11', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 1),
(17, 'Mr. Nathen Collins', 'strosin.kimberly@example.net', '33168 Reta Courts Apt. 274\nNelleborough, SC 25619', '+19188041421', '2009-06-05', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 8),
(18, 'Marilou Ernser', 'kody.wilderman@example.org', '28911 Gibson Mountain Apt. 932\nWillmsbury, IL 66834', '1-283-635-2202', '2016-11-07', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 3),
(19, 'Prof. Elisabeth Abbott I', 'edwina.schoen@example.net', '64191 Stamm Rest Apt. 014\nMurazikburgh, HI 47677', '(475) 709-2118', '1980-09-24', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 1),
(20, 'Alberto Shields', 'claudia75@example.org', '61955 Armand Drive\nEast Adelefurt, ME 49917-7684', '541.517.3164', '1999-06-04', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 7),
(21, 'Vicente Abernathy IV', 'lkrajcik@example.com', '1048 Josianne Crossing\nFelipefurt, KS 51839-4922', '240.448.7578', '1994-08-15', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 5),
(22, 'Leonardo Rosenbaum', 'fadel.roderick@example.net', '130 Oberbrunner Shore\nSouth Marianne, NV 65300-5898', '(413) 810-6460', '2006-10-17', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 8),
(23, 'Maribel Batz', 'amelie.sanford@example.com', '249 Prosacco Ford\nDeckowside, HI 69124-6095', '+1-270-768-4568', '1987-02-25', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 1),
(24, 'Dr. Eunice Ortiz III', 'krutherford@example.net', '54391 Gregorio Rest\nStarkmouth, KY 49409', '(959) 433-2734', '1974-05-17', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 4),
(25, 'Abigale Kutch', 'wtoy@example.com', '248 Laury Ports\nAltenwerthfurt, GA 26996-7821', '+1-726-697-7067', '2000-12-28', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 1),
(27, 'Alfonzo Barrows', 'heathcote.rashawn@example.net', '668 Deckow Landing\nPort Hildastad, MI 00338-2453', '+1 (937) 439-0892', '2013-10-15', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 8),
(28, 'Kelley Lang', 'odaugherty@example.org', '83904 Goodwin Loop Suite 998\nPort Katharina, NJ 09876-3366', '+13019909116', '1981-09-02', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 5),
(29, 'Kaycee Leffler', 'adele29@example.org', '311 Eleonore Turnpike\nElinoreton, UT 03046-6272', '907-670-5263', '1991-08-24', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 9),
(30, 'Cary Muller', 'vinnie.damore@example.org', '387 Nickolas Garden\nMadgeburgh, IA 45617-8716', '341.804.9366', '2014-08-25', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 2),
(31, 'Selena Ratke', 'tressa.rodriguez@example.net', '6584 Corkery Track\nLake Burnice, WY 93695', '+1-563-254-8999', '1979-01-19', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 2),
(32, 'Keaton Abbott', 'swehner@example.org', '7795 Ron Crossroad Suite 364\nLefflerchester, WA 52661', '773-880-3669', '1988-05-19', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 3),
(33, 'Prof. Vella Anderson Sr.', 'eusebio12@example.net', '42377 Veda Harbors Apt. 086\nTreutelfort, MA 38934-3866', '956-843-9080', '2012-09-28', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 7),
(34, 'Sunny Muller', 'elinor74@example.com', '7013 Schultz Street Apt. 569\nDarronshire, MA 21058', '463-867-9078', '2011-12-24', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 5),
(35, 'Pat Schoen', 'grace.upton@example.com', '44349 Patrick Rapids\nSengerside, MS 96989-1509', '+1 (469) 379-5777', '2014-01-06', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 6),
(36, 'Verlie Berge Jr.', 'prosacco.rafael@example.com', '96670 D\'Amore Groves Apt. 650\nSouth Ellis, WY 08838', '786.978.8224', '1980-10-11', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 9),
(37, 'Prof. Kyleigh Heller', 'hildegard.boehm@example.com', '475 Grady Via Apt. 138\nDachville, AR 73023', '785-408-4371', '2021-06-21', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 1),
(39, 'Aaliyah Goldner', 'nyasia.oconnell@example.com', '3377 Amiya Walk\nLisaberg, DE 28086-1645', '(310) 308-3024', '2018-11-10', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 8),
(40, 'Marcia Hayes', 'eugene76@example.org', '6361 Fahey Stream Suite 538\nAngieport, VT 89860', '878-566-0794', '2008-10-29', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 7),
(41, 'Casper Nolan', 'erling90@example.com', '189 Tomasa Course Apt. 753\nWest Freddy, AZ 79364', '1-813-749-1992', '1972-05-28', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 5),
(42, 'Elissa Moen', 'charlene.ullrich@example.com', '78277 Abernathy Street\nErnamouth, LA 38770', '386-993-1640', '1998-07-29', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 1),
(43, 'Liana Mann', 'ysmith@example.net', '3743 VonRueden Fords\nPort Miaview, CT 16003', '(320) 328-9727', '1971-05-18', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 3),
(44, 'Arturo Halvorson', 'wernser@example.com', '12625 Batz Locks Apt. 244\nPort Ryderville, MS 20295', '1-262-832-8794', '2005-02-27', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 9),
(45, 'Ms. Retha Shanahan', 'jarrett53@example.org', '8735 Hettinger Corner\nSouth Jenningsfort, MT 01228', '762-247-9654', '1978-12-24', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 8),
(46, 'Mr. Chad Welch', 'jaquelin.russel@example.org', '56901 Cremin Mountain\nBeerland, DE 88761', '(352) 934-9081', '2009-01-28', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 5),
(47, 'Mr. Freddy Eichmann III', 'sanford.theodora@example.org', '80584 Janae Flat Apt. 644\nNorth Antonio, NM 95543', '+1 (360) 901-5979', '1992-06-15', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 1),
(48, 'Adella Blanda', 'aurelie68@example.org', '1126 Chelsey Park Suite 201\nPort Junior, TX 70672', '1-386-640-3542', '1992-05-07', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 10),
(49, 'Zita Ruecker', 'umclaughlin@example.net', '959 Lance Estate\nSouth Shawnaport, MA 26394-5714', '480-337-3310', '1974-09-17', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 5),
(50, 'Blair Anderson', 'wsipes@example.org', '756 Alta Camp\nPhilipside, MN 04301-1075', '+1 (480) 916-2174', '1998-08-16', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 7),
(51, 'Dr. Joy O\'Reilly', 'kshlerin.coleman@example.org', '251 Annamarie Freeway Suite 525\nLake Jasonport, TX 24643-2100', '1-934-752-7261', '1992-04-30', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 6),
(52, 'Jessie Murazik', 'diego47@example.org', '310 Ashton Route Apt. 376\nNew Annabelle, AZ 88331-8204', '+1-908-906-2054', '1979-01-20', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 1),
(53, 'Armani Hermiston', 'watson42@example.com', '8872 Ivy Passage\nNew Alvertaton, MS 17011', '925-657-9956', '1998-08-20', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 3),
(54, 'Dr. Karson Stroman Jr.', 'tkautzer@example.net', '155 Von Camp Suite 081\nNew Joe, MI 67795-9884', '+1-551-491-1567', '1980-06-01', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 1),
(55, 'Lily Beier', 'favian71@example.com', '78813 Padberg Overpass\nEladioberg, ME 98399-6370', '+1-305-485-3451', '1981-08-04', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 7),
(56, 'Cornell Pollich PhD', 'eryn.wunsch@example.net', '7600 Rowe Run Suite 896\nAbdullahton, ND 77569', '716.809.5169', '1993-09-04', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 5),
(57, 'Pearl Murphy', 'lewis40@example.net', '716 Felicity Vista Apt. 932\nMariostad, MS 07747', '1-806-809-1305', '1974-07-28', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 1),
(58, 'Dr. Joshua Jenkins', 'kobe48@example.com', '507 Walter Island Apt. 575\nWest Maude, MO 21493', '952.404.4006', '2006-08-23', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 4),
(59, 'Gregorio Ernser III', 'rhoda24@example.com', '995 Ozella Harbor\nBinsview, CT 20724-6619', '(731) 463-7521', '1989-09-03', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 2),
(60, 'Ceasar Koelpin', 'jermaine.bernier@example.org', '9152 Ava Branch Suite 910\nGreenmouth, AK 26903', '956.720.9447', '2013-11-17', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 7),
(61, 'Dr. Kade Rath', 'iadams@example.org', '11384 Sawayn Walks\nMacejkovicberg, GA 83648-7883', '845.791.4149', '1998-09-06', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 7),
(62, 'Fanny Thiel', 'adams.maximus@example.com', '98519 Vinnie Crescent\nNicolefort, AR 27687-4610', '+1-424-725-7353', '2021-03-06', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 4),
(63, 'Van Williamson', 'eveline73@example.net', '909 Jamey Glen Suite 688\nArdenburgh, VA 72651', '240.809.5903', '1999-04-06', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 4),
(64, 'Emmanuel Raynor', 'johnston.amina@example.org', '4802 Freida Via\nSkilesville, DE 79821', '631-838-1654', '2015-02-03', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 5),
(65, 'Margarett Boyer', 'unader@example.org', '95182 Jeanie Fall Apt. 289\nNew Barneymouth, HI 24132-4703', '304.698.5843', '1991-05-26', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 4),
(66, 'Beryl Beatty', 'janelle.kuhlman@example.com', '949 Rasheed Union Apt. 364\nPort Rubiebury, GA 51473-9211', '+1-321-640-8046', '1978-09-03', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 9),
(67, 'Prof. Tracy Conroy', 'runolfsson.ali@example.net', '317 Vena Avenue Apt. 061\nNorth Paxton, MS 86187-8055', '+1-445-519-5238', '2017-03-31', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 6),
(68, 'Ms. Bridie Leuschke', 'bahringer.jazmin@example.org', '28321 Geraldine Cape\nGissellemouth, NV 41363-9626', '248.631.0014', '1993-12-03', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 4),
(69, 'Leila Greenholt', 'harvey.destany@example.net', '29045 Boyd Rest Apt. 521\nLloydberg, IA 21325', '1-848-384-9572', '1986-06-05', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 6),
(70, 'Veda Schinner', 'dudley.hoeger@example.net', '824 Hartmann Circles Apt. 306\nLake Flossie, OR 11682-3657', '979-271-0328', '1992-12-25', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 8),
(71, 'Dr. Nels Bogan', 'adella.lehner@example.com', '563 Jonathon Villages\nNorth Mozell, DC 25636-6626', '970.484.1067', '1980-01-27', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 4),
(72, 'Kenton Moore', 'howe.nick@example.org', '948 O\'Kon Cliff\nNorth Emmittborough, GA 85096', '903.407.1137', '1978-02-05', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 3),
(73, 'Emory Leuschke', 'ocremin@example.org', '1423 Karl Estates\nCronaton, KY 24834-2948', '480-768-9742', '1978-08-02', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 1),
(74, 'Dr. Alessandra Pagac III', 'franecki.jerome@example.com', '95969 Wilfredo Plain\nLake Dorcas, NM 19382', '+1 (361) 298-5090', '1976-04-17', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 10),
(75, 'Neoma Prohaska', 'hamill.titus@example.com', '268 Jennings Tunnel\nLake Olinstad, NV 60025', '1-850-753-3812', '2017-03-25', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 10),
(76, 'Lue Kutch', 'eschmidt@example.com', '61008 Ondricka Land Apt. 564\nDestiniville, MO 57500', '(201) 304-9920', '2018-05-04', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 10),
(77, 'Yvette Swift DVM', 'qpowlowski@example.com', '24557 Emmet Circles Apt. 209\nBoylechester, NJ 58965-5944', '+1 (928) 686-7349', '1982-07-31', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 4),
(78, 'Dr. Oral Champlin', 'obode@example.com', '2305 VonRueden Parks\nCamylleport, NH 18455', '+1.254.774.6524', '1982-05-21', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 10),
(79, 'Mr. Travon Russel Sr.', 'janessa64@example.com', '563 Tianna Glens Suite 237\nGutkowskifort, NE 25793', '+1.980.513.8789', '1988-11-11', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 8),
(80, 'Jett Harris', 'zgaylord@example.org', '763 Beahan Station Apt. 899\nPort Tyrellmouth, NY 15844-1978', '662-224-2066', '2014-03-21', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 9),
(81, 'Cara Klocko', 'destiny.weissnat@example.com', '8924 Sammy Cape\nPort Arnoldo, HI 02828', '1-708-771-1726', '1973-12-13', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 7),
(82, 'Dr. Jedediah VonRueden', 'sallie03@example.com', '9765 Rempel Causeway Suite 851\nNorth Arnaldo, NM 64862', '+1-469-235-9896', '1972-06-06', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 7),
(83, 'Dr. Lilliana Shields', 'lysanne.spencer@example.com', '3595 Laney Estate\nSouth Joe, TX 82099', '+1-272-672-4915', '1987-12-26', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 3),
(84, 'Ole Bogan', 'skye.monahan@example.com', '22327 Gottlieb Meadow Suite 682\nEast Enoch, OK 22094', '(828) 619-9143', '1977-08-07', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 4),
(85, 'Dan Flatley', 'heather.wisozk@example.org', '279 Donavon Haven Suite 133\nWest Delphia, OK 51506-3234', '(986) 447-6129', '2011-06-27', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 7),
(86, 'Kurtis Beier', 'ritchie.isabell@example.org', '2069 Kessler Motorway Apt. 102\nMaximotown, NH 95655-3029', '+1-334-888-2782', '2011-01-02', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 2),
(87, 'Dr. Kayden Mante MD', 'rudy.funk@example.com', '38476 Modesta Hill\nMitchellhaven, DC 61986-5020', '352.268.4029', '1979-05-28', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 3),
(88, 'Breana Barrows MD', 'emard.edwardo@example.net', '949 Miller Haven\nJordichester, TN 78223', '+1-254-906-9764', '1991-01-11', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 10),
(89, 'Owen Leuschke', 'ryan.jonatan@example.org', '724 Kertzmann Port Apt. 141\nDanialbury, TX 69441', '+1 (240) 794-1894', '1970-12-17', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 1),
(90, 'Lolita Koepp', 'cristopher.batz@example.org', '782 Everett Port Suite 851\nO\'Keefetown, DC 01916-7123', '404.868.2313', '2016-08-22', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 10),
(91, 'Dakota Tremblay', 'kuhn.irving@example.net', '80302 Ritchie Ville\nNorth Emilieborough, IA 47599-9232', '+1.984.333.4514', '2000-09-09', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 5),
(92, 'Benny Gottlieb', 'amelie74@example.net', '300 Yost Bypass Suite 879\nEast Frederikfort, VT 17671', '+16576792014', '1993-04-30', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 1),
(93, 'Luisa Brakus', 'deja.rosenbaum@example.net', '739 Jovany Loaf Apt. 200\nAsiashire, NE 80810-5569', '(364) 504-3337', '2000-04-05', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 4),
(94, 'Ron Donnelly', 'morissette.dolores@example.com', '71067 Aimee Knoll\nThielbury, CO 10350-7759', '(708) 501-6707', '2011-06-23', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 10),
(95, 'Allie Hoppe', 'dulce.lind@example.org', '322 Nellie Club Apt. 046\nHowechester, AR 73458-5250', '+1-252-764-7739', '1973-12-24', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 9),
(96, 'Mr. Adrian Renner I', 'akozey@example.com', '31734 Christiansen Summit\nCurtport, AK 88691', '858-342-1215', '2004-11-19', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 2),
(97, 'Sibyl Schinner Jr.', 'cronin.roosevelt@example.com', '16518 Madonna Club\nSouth Jesston, MT 36158', '(534) 764-2576', '1982-02-22', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 3),
(98, 'Camilla Fay', 'bryce.lakin@example.org', '49536 Hickle Villages Suite 212\nElliotmouth, UT 25824', '1-614-240-8406', '1995-05-22', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 3),
(99, 'Levi Koepp', 'amalia85@example.org', '114 Carolina Terrace Apt. 045\nJarretfurt, ID 89001-1412', '913-705-9229', '1981-02-16', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 8),
(100, 'Vince Wehner', 'lbalistreri@example.net', '62899 Schumm Forks Apt. 610\nLexiside, TX 56763', '(316) 997-6061', '2002-11-24', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 10),
(101, 'Miracle Olson', 'champlin.alysson@example.org', '2755 Miller Plaza\nPurdymouth, VA 19140', '248-600-5082', '2017-02-11', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 6),
(102, 'Deontae Kunde', 'ykuphal@example.net', '69269 Clement Lane Suite 210\nBahringerhaven, WY 95635-8060', '+1.662.452.9793', '2007-06-07', '2023-05-31 03:40:03', '2023-05-31 03:40:03', 5),
(110, 'Fataki Nsimba', 'sssstt@mail.com', '6485 Pierre Magnan', '212 856 3578', '1965-03-21', '2023-06-19 18:18:08', '2023-06-19 18:18:08', 12),
(112, 'Fataki Nsimba', 'nlysa1@mail.com', '6485 Pierre Magnan', '4389891262', '1989-01-01', '2023-06-21 03:43:37', '2023-06-21 03:43:37', 1),
(113, 'Fataki Nsimba', 'accram51@hotmail.com', '6485 Pierre Magnan', '(438) 989 - 1265', '1985-12-12', '2023-06-21 08:37:38', '2023-06-21 08:37:38', 12);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `forum_posts`
--

DROP TABLE IF EXISTS `forum_posts`;
CREATE TABLE IF NOT EXISTS `forum_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(100) NOT NULL,
  `titre_en` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `contenu_en` text NOT NULL,
  `date_creation` date NOT NULL,
  `etudiant_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `fk_article_etudiant_idx` (`etudiant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `forum_posts`
--

INSERT INTO `forum_posts` (`id`, `titre`, `titre_en`, `contenu`, `contenu_en`, `date_creation`, `etudiant_id`) VALUES
(1, 'Quos blanditiis quae error voluptates sint.', '', 'Praesentium adipisci enim odit earum ut facere totam. Voluptas eius quidem corporis porro placeat rerum. Dicta omnis quibusdam dolore deserunt vel libero iste. Amet molestias dolorem accusantium qui blanditiis. Voluptatem maiores ea accusamus aspernatur id voluptates enim eaque. Voluptas voluptatum soluta officia enim aut veniam voluptate. Dolores autem ullam nostrum magni minus. Reprehenderit voluptatem consectetur rerum dolores et. Consequatur et qui et molestias et. Non dolore ea necessitatibus quia. Et et ut totam eos deserunt consectetur voluptatem. Facere sit inventore officiis aperiam. Et sequi unde est ratione eius. Vero ea et provident voluptatem. Expedita ut fuga quia sit labore sunt eveniet. Sapiente laudantium sequi voluptas qui. Ea totam minima in quis quidem mollitia earum veritatis. Rerum voluptas quo quod fuga. Velit doloribus sed impedit. Omnis voluptate exercitationem repellendus aperiam. Et illo delectus magnam vitae natus. Autem mollitia at nobis vel veritatis assumenda numquam. Sint sapiente corrupti provident aut fugiat maxime consequatur. Est autem eum molestiae magni. Et voluptatibus autem quasi quasi a deleniti et. Ratione ut in vero. Quos qui iste et amet. Dolorum numquam sit labore recusandae. Officia consequatur excepturi consectetur quasi quae iusto voluptatem. Ut aut suscipit sunt voluptas. Voluptatem dolor quasi libero occaecati. Blanditiis quam ut voluptate magnam quas cumque. Quisquam minima error eos consectetur. Nesciunt consequuntur sint dolorum.', '', '2023-05-12', 6);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_26_192352_create_villes_table', 1),
(6, '2023_05_26_193052_create_etudiants_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Dr. Katherine Swaniawski Sr.', 'wmueller@example.com', NULL, '123456', NULL, '2023-05-31 03:17:45', '2023-05-31 03:17:45'),
(7, 'Dr. Maverick Kertzmann IV', 'felton95@example.net', NULL, '123456', NULL, '2023-05-31 03:17:45', '2023-05-31 03:17:45'),
(8, 'Zora Glover DDS', 'cstracke@example.org', NULL, '123456', NULL, '2023-05-31 03:17:45', '2023-05-31 03:17:45'),
(9, 'Candido Tromp', 'kiara27@example.net', NULL, '123456', NULL, '2023-05-31 03:17:45', '2023-05-31 03:17:45'),
(10, 'Johnathan Ankunding DVM', 'cary.beatty@example.net', NULL, '123456', NULL, '2023-05-31 03:17:45', '2023-05-31 03:17:45'),
(11, 'Raymundo Rutherford', 'kurtis.medhurst@example.net', NULL, '123456', NULL, '2023-05-31 03:17:45', '2023-05-31 03:17:45'),
(12, 'Sigrid Raynor', 'leda.kemmer@example.com', NULL, '123456', NULL, '2023-05-31 03:17:45', '2023-05-31 03:17:45'),
(13, 'Morton Lueilwitz', 'tod43@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(14, 'Mrs. Elizabeth Moore', 'phand@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(15, 'Jayce Boyer', 'ylesch@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(16, 'Lucio Carroll III', 'alanis14@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(17, 'Mr. Nathen Collins', 'strosin.kimberly@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(18, 'Marilou Ernser', 'kody.wilderman@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(19, 'Prof. Elisabeth Abbott I', 'edwina.schoen@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(20, 'Alberto Shields', 'claudia75@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(21, 'Vicente Abernathy IV', 'lkrajcik@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(22, 'Leonardo Rosenbaum', 'fadel.roderick@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(23, 'Maribel Batz', 'amelie.sanford@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(24, 'Dr. Eunice Ortiz III', 'krutherford@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(25, 'Abigale Kutch', 'wtoy@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(27, 'Alfonzo Barrows', 'heathcote.rashawn@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(28, 'Kelley Lang', 'odaugherty@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(29, 'Kaycee Leffler', 'adele29@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(30, 'Cary Muller', 'vinnie.damore@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(31, 'Selena Ratke', 'tressa.rodriguez@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(32, 'Keaton Abbott', 'swehner@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(33, 'Prof. Vella Anderson Sr.', 'eusebio12@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(34, 'Sunny Muller', 'elinor74@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(35, 'Pat Schoen', 'grace.upton@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(36, 'Verlie Berge Jr.', 'prosacco.rafael@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(37, 'Prof. Kyleigh Heller', 'hildegard.boehm@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(39, 'Aaliyah Goldner', 'nyasia.oconnell@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(40, 'Marcia Hayes', 'eugene76@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(41, 'Casper Nolan', 'erling90@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(42, 'Elissa Moen', 'charlene.ullrich@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(43, 'Liana Mann', 'ysmith@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(44, 'Arturo Halvorson', 'wernser@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(45, 'Ms. Retha Shanahan', 'jarrett53@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(46, 'Mr. Chad Welch', 'jaquelin.russel@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(47, 'Mr. Freddy Eichmann III', 'sanford.theodora@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(48, 'Adella Blanda', 'aurelie68@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(49, 'Zita Ruecker', 'umclaughlin@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(50, 'Blair Anderson', 'wsipes@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(51, 'Dr. Joy O\'Reilly', 'kshlerin.coleman@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(52, 'Jessie Murazik', 'diego47@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(53, 'Armani Hermiston', 'watson42@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(54, 'Dr. Karson Stroman Jr.', 'tkautzer@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(55, 'Lily Beier', 'favian71@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(56, 'Cornell Pollich PhD', 'eryn.wunsch@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(57, 'Pearl Murphy', 'lewis40@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(58, 'Dr. Joshua Jenkins', 'kobe48@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(59, 'Gregorio Ernser III', 'rhoda24@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(60, 'Ceasar Koelpin', 'jermaine.bernier@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(61, 'Dr. Kade Rath', 'iadams@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(62, 'Fanny Thiel', 'adams.maximus@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(63, 'Van Williamson', 'eveline73@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(64, 'Emmanuel Raynor', 'johnston.amina@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(65, 'Margarett Boyer', 'unader@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(66, 'Beryl Beatty', 'janelle.kuhlman@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(67, 'Prof. Tracy Conroy', 'runolfsson.ali@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(68, 'Ms. Bridie Leuschke', 'bahringer.jazmin@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(69, 'Leila Greenholt', 'harvey.destany@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(70, 'Veda Schinner', 'dudley.hoeger@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(71, 'Dr. Nels Bogan', 'adella.lehner@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(72, 'Kenton Moore', 'howe.nick@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(73, 'Emory Leuschke', 'ocremin@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(74, 'Dr. Alessandra Pagac III', 'franecki.jerome@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(75, 'Neoma Prohaska', 'hamill.titus@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(76, 'Lue Kutch', 'eschmidt@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(77, 'Yvette Swift DVM', 'qpowlowski@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(78, 'Dr. Oral Champlin', 'obode@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(79, 'Mr. Travon Russel Sr.', 'janessa64@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(80, 'Jett Harris', 'zgaylord@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(81, 'Cara Klocko', 'destiny.weissnat@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(82, 'Dr. Jedediah VonRueden', 'sallie03@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(83, 'Dr. Lilliana Shields', 'lysanne.spencer@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(84, 'Ole Bogan', 'skye.monahan@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(85, 'Dan Flatley', 'heather.wisozk@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(86, 'Kurtis Beier', 'ritchie.isabell@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(87, 'Dr. Kayden Mante MD', 'rudy.funk@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(88, 'Breana Barrows MD', 'emard.edwardo@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(89, 'Owen Leuschke', 'ryan.jonatan@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(90, 'Lolita Koepp', 'cristopher.batz@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(91, 'Dakota Tremblay', 'kuhn.irving@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(92, 'Benny Gottlieb', 'amelie74@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(93, 'Luisa Brakus', 'deja.rosenbaum@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(94, 'Ron Donnelly', 'morissette.dolores@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(95, 'Allie Hoppe', 'dulce.lind@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(96, 'Mr. Adrian Renner I', 'akozey@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(97, 'Sibyl Schinner Jr.', 'cronin.roosevelt@example.com', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(98, 'Camilla Fay', 'bryce.lakin@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(99, 'Levi Koepp', 'amalia85@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(100, 'Vince Wehner', 'lbalistreri@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(101, 'Miracle Olson', 'champlin.alysson@example.org', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(102, 'Deontae Kunde', 'ykuphal@example.net', NULL, '123456', NULL, '2023-05-31 03:40:03', '2023-05-31 03:40:03'),
(106, 'Fataki Nsimba', 'accram2005@hotmail.com', NULL, '123456', NULL, '2023-06-01 06:29:10', '2023-06-01 06:29:10'),
(107, 'Peter', 'accram2005@mail.com', NULL, '$2y$10$V5sYiuGuSrKs9imuTGRwseyDL9Uv959hXiVapFR6kPCjnVTs3z0O6', NULL, '2023-06-19 18:03:29', '2023-06-19 18:03:29'),
(108, 'Peter', 'accram2005@mailuk.com', NULL, '$2y$10$7tkk4tq3hXWfaBOBwLn3iOQs5ivWB9a/0Pz96SdPt6dUecQFujMou', NULL, '2023-06-19 18:07:01', '2023-06-19 18:07:01'),
(109, 'hull', 'ssss@mail.com', NULL, '$2y$10$4xniHIUEQ6nqLqba/OtdDuWik4ARIx.24e9pNbfVR/fT3pKuMfCZK', NULL, '2023-06-19 18:13:01', '2023-06-19 18:13:01'),
(110, 'Fataki Nsimba', 'sssstt@mail.com', NULL, '$2y$10$lagiFzFhMDpp8SWD5/f8wOEBsZ77N//mg4bnwMP5MpFNMPTIn3IUa', NULL, '2023-06-19 18:18:08', '2023-06-19 18:18:08'),
(111, 'Banza', 'nlysa@mail.com', NULL, '$2y$10$Oe.RqymOJm370ZH0MIGluuXNDbsmeSthyXFfEJm2svPxbmoY/bc5u', NULL, '2023-06-20 04:52:45', '2023-06-20 04:52:45'),
(112, 'Fataki Nsimba', 'nlysa1@mail.com', NULL, '$2y$10$1zJQq8liydHX5Wobc6ZBtuGGAPQbTUuh720TBXOsIqj9TYyP/Kgo.', NULL, '2023-06-21 03:43:37', '2023-06-21 03:43:37'),
(113, 'Fataki Nsimba', 'accram51@hotmail.com', NULL, '$2y$10$CH0Gll3ZziY62llMAe7BWeGzMcxBbesY/9mR9vbAa6apmi.LAKhZe', NULL, '2023-06-21 08:37:38', '2023-06-21 08:37:38'),
(114, 'Fataki Nsimba', 'accram205@hotmail.com', NULL, '$2y$10$iY1LIFQoMd4eeeWIRuGk/ey0B7ilCySOQ6cTzxa3LjOxK0wc8cxei', NULL, '2023-06-22 08:46:52', '2023-06-22 08:46:52'),
(115, 'Fataki Nsimba', 'accram5@hotmail.com', NULL, '$2y$10$aJbKCeZ15juMYl0YSXb4fewC8uBzUcncS/XtY2eCyQif.Io0jfy3q', NULL, '2023-06-22 08:52:02', '2023-06-22 08:52:02');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

DROP TABLE IF EXISTS `villes`;
CREATE TABLE IF NOT EXISTS `villes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Zemlakmouth', '2023-05-31 02:54:21', '2023-05-31 02:54:21'),
(2, 'Leonardochester', '2023-05-31 02:54:21', '2023-05-31 02:54:21'),
(3, 'East Mossie', '2023-05-31 02:54:21', '2023-05-31 02:54:21'),
(4, 'Makaylahaven', '2023-05-31 02:54:21', '2023-05-31 02:54:21'),
(5, 'New Jordanview', '2023-05-31 02:54:21', '2023-05-31 02:54:21'),
(6, 'Port Rebecabury', '2023-05-31 02:54:21', '2023-05-31 02:54:21'),
(7, 'Myrtiefurt', '2023-05-31 02:54:21', '2023-05-31 02:54:21'),
(8, 'Murrayton', '2023-05-31 02:54:21', '2023-05-31 02:54:21'),
(9, 'Titoberg', '2023-05-31 02:54:21', '2023-05-31 02:54:21'),
(10, 'Port Donnell', '2023-05-31 02:54:21', '2023-05-31 02:54:21'),
(11, 'Emeraldview', '2023-05-31 03:43:49', '2023-05-31 03:43:49'),
(12, 'Cortneyborough', '2023-05-31 03:43:49', '2023-05-31 03:43:49'),
(13, 'Port Mabeltown', '2023-05-31 03:43:49', '2023-05-31 03:43:49'),
(14, 'Woodrowtown', '2023-05-31 03:43:49', '2023-05-31 03:43:49'),
(15, 'South Daniella', '2023-05-31 03:43:49', '2023-05-31 03:43:49');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `fk_documents` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiants` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `fk_etudiants_villes` FOREIGN KEY (`villes_id`) REFERENCES `villes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `forum_posts`
--
ALTER TABLE `forum_posts`
  ADD CONSTRAINT `fk_article_etudiant` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiants` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
