-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 03:48 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazin_produse_electrice_profesionale_pentru_par`
--

-- --------------------------------------------------------

--
-- Table structure for table `clienti`
--

CREATE TABLE `clienti` (
  `id_client` int(11) NOT NULL,
  `nume_client` varchar(50) NOT NULL,
  `prenume_client` varchar(50) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `limita_credit` float NOT NULL,
  `email_client` varchar(20) NOT NULL,
  `data_nastere` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clienti`
--

INSERT INTO `clienti` (`id_client`, `nume_client`, `prenume_client`, `telefon`, `limita_credit`, `email_client`, `data_nastere`) VALUES
(1, 'Aciu', 'Lia', '0783379713', 200, 'aciu.lia@gmail.com', '1985-06-09'),
(2, 'Badea', 'Iris', '0783423123', 300, 'badea.iris@gmail.com', '1990-02-01'),
(3, 'Barna', 'Maria', '0783483659', 50, 'm.barna@gmail.com', '1991-05-09'),
(4, 'Cernat', 'Mihai', '0738489743', 800, 'm.cernat@gmail.com', '1997-05-04'),
(5, 'Ignat', 'Virginia', '0777583743', 400.45, 'v.ignat@gmail.com', '1995-06-07'),
(6, 'Jurca', 'Cristina', '0783489799', 500, 'j.cristina@gmail.com', '1987-12-02'),
(7, 'Leonida', 'Tudor', '0783483443', 700, 'tleonida@gmail.com', '1992-11-07'),
(8, 'Stroia', 'Nicoleta', '0784498753', 900, 'nstroia@gmail.com', '1987-02-04'),
(9, 'Voicu', 'Violeta', '0752422333', 900.5, 'violeta.v@gmail.com', '1986-05-04'),
(10, 'Marincas', 'Madalina', '0733555666', 900, 'mada@gmail.com', '1986-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `comenzi`
--

CREATE TABLE `comenzi` (
  `nr_comanda` int(11) NOT NULL,
  `data` date NOT NULL,
  `modalitate` varchar(20) NOT NULL,
  `id_client` int(11) NOT NULL
) ;

--
-- Dumping data for table `comenzi`
--

INSERT INTO `comenzi` (`nr_comanda`, `data`, `modalitate`, `id_client`) VALUES
(1, '2021-03-22', 'card', 1),
(2, '2021-03-24', 'ramburs', 2),
(3, '2021-03-25', 'card', 3),
(4, '2021-03-27', 'ramburs', 4),
(5, '2021-03-28', 'ramburs', 5),
(6, '2005-04-30', 'card', 6),
(7, '2021-03-31', 'card', 7);

-- --------------------------------------------------------

--
-- Table structure for table `conturi_admin`
--

CREATE TABLE `conturi_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conturi_admin`
--

INSERT INTO `conturi_admin` (`id`, `username`, `password`) VALUES
(1, 'Paul', 'paul123'),
(2, 'Raul', 'raul5'),
(3, 'Darius', 'darius23'),
(4, 'Nicoleta', 'nicoleta123');

-- --------------------------------------------------------

--
-- Table structure for table `conturi_user`
--

CREATE TABLE `conturi_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conturi_user`
--

INSERT INTO `conturi_user` (`id`, `username`, `password`) VALUES
(1, 'Paul1', 'paul123'),
(2, 'Raul', 'raulbb'),
(3, 'Cristian', 'cristi12'),
(4, 'Marian', 'm123'),
(5, 'George', 'george12');

-- --------------------------------------------------------

--
-- Stand-in structure for view `despre_comenzi`
-- (See below for the actual view)
--
CREATE TABLE `despre_comenzi` (
`data` date
,`modalitate` varchar(20)
,`id_client` int(11)
,`pret` float
,`cantitate` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `despre_produse`
-- (See below for the actual view)
--
CREATE TABLE `despre_produse` (
`cod_art` int(11)
,`denumire` varchar(50)
,`id_tip_produs` int(11)
,`pret_producator` float
,`nume_producator` varchar(50)
,`adresa` varchar(50)
,`email` varchar(50)
,`telefon` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `detalii_vanzare`
-- (See below for the actual view)
--
CREATE TABLE `detalii_vanzare` (
`nume_client` varchar(50)
,`prenume_client` varchar(50)
,`cantitate` int(11)
,`pret` float
,`modalitate` varchar(20)
,`data` date
);

-- --------------------------------------------------------

--
-- Table structure for table `lista_comenzi`
--

CREATE TABLE `lista_comenzi` (
  `nr_comanda` int(11) DEFAULT NULL,
  `cod_art` int(11) DEFAULT NULL,
  `pret` float DEFAULT NULL,
  `cantitate` int(11) DEFAULT NULL
) ;

--
-- Dumping data for table `lista_comenzi`
--

INSERT INTO `lista_comenzi` (`nr_comanda`, `cod_art`, `pret`, `cantitate`) VALUES
(1, 1, 500, 4),
(2, 2, 200, 1),
(3, 3, 300, 2),
(4, 4, 450, 4),
(5, 5, 600, 2),
(6, 6, 200.79, 4);

-- --------------------------------------------------------

--
-- Table structure for table `producatori`
--

CREATE TABLE `producatori` (
  `cod_producator` int(11) NOT NULL,
  `nume_producator` varchar(50) NOT NULL,
  `adresa` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producatori`
--

INSERT INTO `producatori` (`cod_producator`, `nume_producator`, `adresa`, `email`, `telefon`) VALUES
(1, 'Philips', 'Str.Jan Pieter Heijestraat', 'philips@gmail.com', '0724489991'),
(2, 'Rowenta', 'Str.Erbach in Odenwald', 'rowenta@gmail.com', '0774875395'),
(3, 'Braun', 'Str.One Retail GmbH', 'braun@gmail.com', '0724345313'),
(4, 'Remington', 'Str.Middleton', 'remington@gmail.com', '0783483743'),
(5, 'BaByliss', 'Str.Mario Rossi', 'babyliss@gmail.com', '0731242342'),
(6, 'PluieSoleil', 'Str. Rue Basse 1', 'pluiesoleil@gmail.com', '0784596222'),
(7, 'zass', 'Str.Rue Bon', 'zass@gmail.com', '078348322');

-- --------------------------------------------------------

--
-- Table structure for table `produse`
--

CREATE TABLE `produse` (
  `cod_art` int(11) NOT NULL,
  `cod_producator` int(11) DEFAULT NULL,
  `denumire` varchar(50) NOT NULL,
  `id_tip_produs` int(11) DEFAULT NULL,
  `pret_producator` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produse`
--

INSERT INTO `produse` (`cod_art`, `cod_producator`, `denumire`, `id_tip_produs`, `pret_producator`) VALUES
(1, 1, 'Philips I-Pro ST387E,Slim 24 mm, Wwt&Dry', 2, 329.99),
(2, 2, 'Rowenta PRO-Ceramic Extra S5525,230 grade', 2, 109.99),
(3, 3, 'Braun StyleCare BHH811/00', 4, 145),
(4, 4, 'Remington StyleMix 2020CE', 4, 300.79),
(5, 5, 'BaByliss Expert Protect D362E,2300 W', 3, 500),
(6, 6, 'PluieSoleil Professional Iron Technology', 3, 100.78);

-- --------------------------------------------------------

--
-- Table structure for table `tipuri_produse_par`
--

CREATE TABLE `tipuri_produse_par` (
  `id_tip_produs` int(11) NOT NULL,
  `tip_produs_par` varchar(50) NOT NULL,
  `nr_produse` int(11) DEFAULT NULL,
  `nr_modele` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipuri_produse_par`
--

INSERT INTO `tipuri_produse_par` (`id_tip_produs`, `tip_produs_par`, `nr_produse`, `nr_modele`) VALUES
(1, 'alte produse', 115, 25),
(2, 'placa de par profesionala', 139, 5),
(3, 'uscator de par', 140, 10),
(4, 'ondulator', 100, 4),
(5, 'perie rotativa', 23, 6);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tip_placa_de_par_profesionala`
-- (See below for the actual view)
--
CREATE TABLE `tip_placa_de_par_profesionala` (
`denumire` varchar(50)
,`cod_art` int(11)
,`cod_producator` int(11)
,`pret_producator` float
,`nr_produse` int(11)
,`nr_modele` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tip_produs_ondulator`
-- (See below for the actual view)
--
CREATE TABLE `tip_produs_ondulator` (
`denumire` varchar(50)
,`cod_art` int(11)
,`cod_producator` int(11)
,`pret_producator` float
,`nr_produse` int(11)
,`nr_modele` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `despre_comenzi`
--
DROP TABLE IF EXISTS `despre_comenzi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `despre_comenzi`  AS SELECT `c`.`data` AS `data`, `c`.`modalitate` AS `modalitate`, `c`.`id_client` AS `id_client`, `a`.`pret` AS `pret`, `a`.`cantitate` AS `cantitate` FROM (`comenzi` `c` join `lista_comenzi` `a` on(`c`.`nr_comanda` = `a`.`nr_comanda`)) ;

-- --------------------------------------------------------

--
-- Structure for view `despre_produse`
--
DROP TABLE IF EXISTS `despre_produse`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `despre_produse`  AS SELECT `p`.`cod_art` AS `cod_art`, `p`.`denumire` AS `denumire`, `p`.`id_tip_produs` AS `id_tip_produs`, `p`.`pret_producator` AS `pret_producator`, `f`.`nume_producator` AS `nume_producator`, `f`.`adresa` AS `adresa`, `f`.`email` AS `email`, `f`.`telefon` AS `telefon` FROM (`produse` `p` join `producatori` `f` on(`p`.`cod_producator` = `f`.`cod_producator`)) ;

-- --------------------------------------------------------

--
-- Structure for view `detalii_vanzare`
--
DROP TABLE IF EXISTS `detalii_vanzare`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detalii_vanzare`  AS SELECT `b`.`nume_client` AS `nume_client`, `b`.`prenume_client` AS `prenume_client`, `a`.`cantitate` AS `cantitate`, `a`.`pret` AS `pret`, `c`.`modalitate` AS `modalitate`, `c`.`data` AS `data` FROM ((`lista_comenzi` `a` join `comenzi` `c` on(`a`.`nr_comanda` = `c`.`nr_comanda`)) join `clienti` `b` on(`c`.`id_client` = `b`.`id_client`)) ;

-- --------------------------------------------------------

--
-- Structure for view `tip_placa_de_par_profesionala`
--
DROP TABLE IF EXISTS `tip_placa_de_par_profesionala`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tip_placa_de_par_profesionala`  AS SELECT `p`.`denumire` AS `denumire`, `p`.`cod_art` AS `cod_art`, `p`.`cod_producator` AS `cod_producator`, `p`.`pret_producator` AS `pret_producator`, `t`.`nr_produse` AS `nr_produse`, `t`.`nr_modele` AS `nr_modele` FROM (`produse` `p` join `tipuri_produse_par` `t` on(`p`.`id_tip_produs` = `t`.`id_tip_produs`)) WHERE `t`.`tip_produs_par` = 'placa de par profesionala' ORDER BY `p`.`denumire` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `tip_produs_ondulator`
--
DROP TABLE IF EXISTS `tip_produs_ondulator`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tip_produs_ondulator`  AS SELECT `p`.`denumire` AS `denumire`, `p`.`cod_art` AS `cod_art`, `p`.`cod_producator` AS `cod_producator`, `p`.`pret_producator` AS `pret_producator`, `t`.`nr_produse` AS `nr_produse`, `t`.`nr_modele` AS `nr_modele` FROM (`produse` `p` join `tipuri_produse_par` `t` on(`p`.`id_tip_produs` = `t`.`id_tip_produs`)) WHERE `t`.`tip_produs_par` = 'ondulator' ORDER BY `p`.`denumire` ASC ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `comenzi`
--
ALTER TABLE `comenzi`
  ADD PRIMARY KEY (`nr_comanda`),
  ADD KEY `FK_comenzi_clienti` (`id_client`);

--
-- Indexes for table `conturi_admin`
--
ALTER TABLE `conturi_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conturi_user`
--
ALTER TABLE `conturi_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lista_comenzi`
--
ALTER TABLE `lista_comenzi`
  ADD KEY `FK_lista_comenzi_comenzi` (`nr_comanda`),
  ADD KEY `FK_lista_comenzi_produse` (`cod_art`);

--
-- Indexes for table `producatori`
--
ALTER TABLE `producatori`
  ADD PRIMARY KEY (`cod_producator`);

--
-- Indexes for table `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`cod_art`),
  ADD UNIQUE KEY `nume_unique` (`denumire`),
  ADD KEY `FK_produse_producatori` (`cod_producator`),
  ADD KEY `FK_produse__tipuri_produse_par` (`id_tip_produs`);

--
-- Indexes for table `tipuri_produse_par`
--
ALTER TABLE `tipuri_produse_par`
  ADD PRIMARY KEY (`id_tip_produs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clienti`
--
ALTER TABLE `clienti`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comenzi`
--
ALTER TABLE `comenzi`
  MODIFY `nr_comanda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conturi_admin`
--
ALTER TABLE `conturi_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `conturi_user`
--
ALTER TABLE `conturi_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `producatori`
--
ALTER TABLE `producatori`
  MODIFY `cod_producator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `produse`
--
ALTER TABLE `produse`
  MODIFY `cod_art` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tipuri_produse_par`
--
ALTER TABLE `tipuri_produse_par`
  MODIFY `id_tip_produs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comenzi`
--
ALTER TABLE `comenzi`
  ADD CONSTRAINT `FK_comenzi_clienti` FOREIGN KEY (`id_client`) REFERENCES `clienti` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lista_comenzi`
--
ALTER TABLE `lista_comenzi`
  ADD CONSTRAINT `FK_lista_comenzi_comenzi` FOREIGN KEY (`nr_comanda`) REFERENCES `comenzi` (`nr_comanda`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_lista_comenzi_produse` FOREIGN KEY (`cod_art`) REFERENCES `produse` (`cod_art`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produse`
--
ALTER TABLE `produse`
  ADD CONSTRAINT `FK_produse__tipuri_produse_par` FOREIGN KEY (`id_tip_produs`) REFERENCES `tipuri_produse_par` (`id_tip_produs`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_produse_producatori` FOREIGN KEY (`cod_producator`) REFERENCES `producatori` (`cod_producator`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
