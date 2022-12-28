-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 28, 2022 at 09:44 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labautomation`
--

-- --------------------------------------------------------

--
-- Table structure for table `companytesting`
--

CREATE TABLE `companytesting` (
  `cplrId` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `prodId` int(11) NOT NULL,
  `Remarks` varchar(225) NOT NULL,
  `Result` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companytesting`
--

INSERT INTO `companytesting` (`cplrId`, `u_id`, `prodId`, `Remarks`, `Result`) VALUES
(1, 7, 1, 'xyz', 'Approved'),
(2, 7, 2, 'abc.....', 'Reject');

-- --------------------------------------------------------

--
-- Table structure for table `labtesting`
--

CREATE TABLE `labtesting` (
  `slrId` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Remarks` varchar(225) NOT NULL,
  `Result` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labtesting`
--

INSERT INTO `labtesting` (`slrId`, `u_id`, `ProductId`, `Remarks`, `Result`) VALUES
(8, 6, 3, 'Great Product', 'Approved'),
(9, 6, 2, 'great Product', 'Approved'),
(10, 6, 4, 'Need To Be Remanufactured', 'Reject');

-- --------------------------------------------------------

--
-- Table structure for table `manufactureproducts`
--

CREATE TABLE `manufactureproducts` (
  `ProdId` int(11) NOT NULL,
  `Prodname` varchar(225) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `description` varchar(225) NOT NULL,
  `category` varchar(50) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Status` varchar(225) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufactureproducts`
--

INSERT INTO `manufactureproducts` (`ProdId`, `Prodname`, `Price`, `description`, `category`, `Image`, `Status`) VALUES
(1, 'Lugs(Copper)', '700.00', 'abc                                    \r\n                                ', 'Lugs', '../Adminlayout/assets/images/35-720x722.jpg', 'Manufactured'),
(2, '2Pin Wire Connector', '100.00', 'xyz                                    \r\n                                ', 'Connector', '../Adminlayout/assets/images/Battery_Connector_2mm_Pitch_JST_Plug_2_PIN_Extention_Wire_Connector_In_Lahore_Islamabad_Karachi_Faislabad_Multan_Quetta_Sukkur_Pakistan___3_.jpg', 'Manufactured'),
(3, 'Battery Terminal Connector', '900.00', 'abc        ', 'Connector', '../Adminlayout/assets/images/61V7+MoyL5L.jpg', 'Manufactured'),
(4, ' Million Supreme Wire', '1200.00', 'xyz', 'Wires', '../Adminlayout/assets/images/Pakistan-Cables-Ace-Material-4.jpg', 'Manufactured'),
(5, 'Explosion Proof Junction Box', '1500.00', 'xyz', 'Explosion Proof', '../Adminlayout/assets/images/slide_antideejbventana1.jpg', 'Pending'),
(6, 'Explosion Proof Inclosure', '800.00', 'xyz', 'Explosion Proof', '../Adminlayout/assets/images/85303-13598241.jpg', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Image` varchar(400) NOT NULL,
  `Tester_Role` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `Name`, `Email`, `Password`, `Image`, `Tester_Role`) VALUES
(6, 'Muhammad Hamza', 'hamza123@gmail.com', '$2y$10$8IpOR/h9RkFCbADTaJYwAuq13iaXsFBN7K0vBvV2jJDoKBzIXEo.a', '../SaveImages/images/download (1).png', 'SLR'),
(7, 'Muhammad Hamza', 'hamza1234@gmail.com', '$2y$10$eSfQfP5tz/Zif7eELxieiOphlmNSs5tJ9DYHqLzH.HKuVseXu0CM6', '../SaveImages/images/aptech logo.png', 'CPLR'),
(8, 'admin', 'admin123@gmail.com', '$2y$10$X2IqS.Cz7eHJJIy0dOonjuAzS8O7PdKi7O5gM0McsffJ8Z0uY7lk.', '../SaveImages/images/download (1).png', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companytesting`
--
ALTER TABLE `companytesting`
  ADD PRIMARY KEY (`cplrId`),
  ADD KEY `fk_productId` (`prodId`),
  ADD KEY `fk_userid` (`u_id`);

--
-- Indexes for table `labtesting`
--
ALTER TABLE `labtesting`
  ADD PRIMARY KEY (`slrId`),
  ADD KEY `fk_prodId` (`ProductId`),
  ADD KEY `fk_uid` (`u_id`);

--
-- Indexes for table `manufactureproducts`
--
ALTER TABLE `manufactureproducts`
  ADD PRIMARY KEY (`ProdId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companytesting`
--
ALTER TABLE `companytesting`
  MODIFY `cplrId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `labtesting`
--
ALTER TABLE `labtesting`
  MODIFY `slrId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `manufactureproducts`
--
ALTER TABLE `manufactureproducts`
  MODIFY `ProdId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `companytesting`
--
ALTER TABLE `companytesting`
  ADD CONSTRAINT `fk_productId` FOREIGN KEY (`prodId`) REFERENCES `manufactureproducts` (`ProdId`),
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`u_id`) REFERENCES `user` (`userId`);

--
-- Constraints for table `labtesting`
--
ALTER TABLE `labtesting`
  ADD CONSTRAINT `fk_prodId` FOREIGN KEY (`ProductId`) REFERENCES `manufactureproducts` (`ProdId`),
  ADD CONSTRAINT `fk_uid` FOREIGN KEY (`u_id`) REFERENCES `user` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
