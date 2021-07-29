-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 01:10 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `payrollmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE IF NOT EXISTS `payroll` (
`ID` int(5) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `DOJ` varchar(10) NOT NULL,
  `DEPT` varchar(50) NOT NULL,
  `BASE` decimal(10,2) NOT NULL,
  `DA` decimal(10,2) NOT NULL,
  `HRA` decimal(10,2) NOT NULL,
  `TA` decimal(10,2) NOT NULL,
  `PF` decimal(10,2) NOT NULL,
  `IT` decimal(10,2) NOT NULL,
  `SALARY` decimal(10,2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`ID`, `NAME`, `USERNAME`, `DOB`, `DOJ`, `DEPT`, `BASE`, `DA`, `HRA`, `TA`, `PF`, `IT`, `SALARY`) VALUES
(2, 'TOM CRUISE', 'TOM', '29/11/1998', '21/05/2001', 'MARKETING', '53000.00', '76160.00', '28000.00', '7600.00', '5600.00', '8108.00', '154052.00'),
(3, 'TONY STARK', 'STARK', '05/09/1970', '18/12/2012', 'RESEARCH AND DEVELOPEMENT', '100000.00', '136000.00', '50000.00', '7600.00', '10000.00', '14180.00', '269420.00'),
(4, 'WILLIAM', 'MORIS', '08/05/1979', '10/01/2015', 'HUMAN RESOURCE ', '36780.00', '50020.80', '18390.00', '7600.00', '3678.00', '5455.64', '103657.16'),
(5, 'BRAD PITT', 'BRAD', '01/09/1981', '14/05/2016', 'SALES', '56900.00', '77384.00', '28450.00', '7600.00', '5690.00', '8232.20', '156411.80'),
(7, 'TREVOR PHILIPS', 'TREVOR', '05/09/1970', '08/10/2010', 'MARKETING', '76000.00', '103360.00', '38000.00', '7600.00', '7600.00', '10868.00', '206492.00'),
(8, 'MICHELLE JACKSON', 'MICH', '04/02/1981', '18/12/2012', 'PRODUCTION', '47980.00', '65252.80', '23990.00', '7600.00', '4798.00', '7001.24', '133023.56'),
(9, 'MIKE TYSON', 'MIKE', '06/04/1976', '09/05/2011', 'HUMAN RESOURCE', '78000.00', '106080.00', '39000.00', '7600.00', '7800.00', '11144.00', '211736.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
