-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 06:58 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_19`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `AppId` int(11) NOT NULL,
  `Hosid` int(11) NOT NULL,
  `Patid` varchar(225) NOT NULL,
  `Datee` date NOT NULL,
  `Fee` decimal(10,2) NOT NULL,
  `StatusVac` varchar(225) NOT NULL DEFAULT 'Pending',
  `Vacid` int(11) NOT NULL,
  `cnic` varchar(225) NOT NULL,
  `contact` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`AppId`, `Hosid`, `Patid`, `Datee`, `Fee`, `StatusVac`, `Vacid`, `cnic`, `contact`) VALUES
(9, 1, 'example', '2022-12-21', '1200.00', 'Approve', 13, '34252345234523452', '31412321423523423'),
(10, 1, 'example', '2022-12-21', '1200.00', 'Pending', 13, '0987654321', '111111160'),
(11, 1, 'example ', '2022-12-24', '2000.00', 'Pending', 14, '4234234234234234234', '425423424343423423');

-- --------------------------------------------------------

--
-- Table structure for table `covid_report`
--

CREATE TABLE `covid_report` (
  `Rep_id` int(11) NOT NULL,
  `Patient_Id` int(11) NOT NULL,
  `Hospital_Id` varchar(225) NOT NULL,
  `Vaccine_Id` int(11) NOT NULL,
  `Report_Status` varchar(225) NOT NULL,
  `Report_Date` date NOT NULL,
  `Rep_Contact` varchar(225) NOT NULL,
  `Rep_CNIC` varchar(225) NOT NULL,
  `Rep_Address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid_report`
--

INSERT INTO `covid_report` (`Rep_id`, `Patient_Id`, `Hospital_Id`, `Vaccine_Id`, `Report_Status`, `Report_Date`, `Rep_Contact`, `Rep_CNIC`, `Rep_Address`) VALUES
(1, 5, 'agha  khan', 14, 'Positive', '0000-00-00', '31412321423523423', '34252345234523452', 'Karachi Nazimabad');

-- --------------------------------------------------------

--
-- Table structure for table `hospitaldetail`
--

CREATE TABLE `hospitaldetail` (
  `Hosid` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Role` varchar(225) NOT NULL DEFAULT 'H'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitaldetail`
--

INSERT INTO `hospitaldetail` (`Hosid`, `Name`, `Email`, `Address`, `Password`, `Role`) VALUES
(1, 'agha  khan', 'aghakhan@gmail.com', 'PECHS', '$2y$10$vud7oP8sGfGbVJqfHTxEfutBNo1QrHJW6FGMQL12IotKz1b0zPffm', 'H'),
(2, 'Saifi', 'Saifi@gmail.com', 'Karachi', '$2y$10$BuGnRDGajse9vG20xxyd..DVgTwuL7Vo7B3hZu0AGfSoo4zlmaf5y', 'H');

-- --------------------------------------------------------

--
-- Table structure for table `patientdetail`
--

CREATE TABLE `patientdetail` (
  `Pat-id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Contact` varchar(200) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Role` varchar(225) NOT NULL DEFAULT 'P'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientdetail`
--

INSERT INTO `patientdetail` (`Pat-id`, `Name`, `Email`, `Address`, `Contact`, `Password`, `Role`) VALUES
(5, 'example', 'example@gmail.com', 'Karachi', '08877979', '$2y$10$nH8rfi02X5YzhpRrsdFcGurE1cDPDMdKfOo/SdOB4PjKi0YhIB9QW', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(11) NOT NULL,
  `UserName` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Role` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `UserName`, `Email`, `Password`, `Role`) VALUES
(9, 'Admin', 'admin@gmail.com', '$2y$10$RU2LyF2Kcv.xPSNfSBjo.eqiCoSt/b9LHcJx.XiJBkNh78xX9MUZK', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `vaccination`
--

CREATE TABLE `vaccination` (
  `Vacid` int(11) NOT NULL,
  `NameVac` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Description` varchar(225) NOT NULL,
  `Status` varchar(225) NOT NULL,
  `Hospital_Name` varchar(11) NOT NULL,
  `Vac_Img` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccination`
--

INSERT INTO `vaccination` (`Vacid`, `NameVac`, `Date`, `Price`, `Description`, `Status`, `Hospital_Name`, `Vac_Img`) VALUES
(12, 'Sinaovac', '2022-12-02', '1000.00', 'Sinovac COVID-19 vaccine', 'Available', 'Agha Khan', '../Main_Layout/assets/images/sinovac.jfif'),
(13, 'Sinopharm', '2022-12-02', '1200.00', 'Sinopharm COVID-19 Vaccine (BBIBP-CorV)', 'Available', 'Agha Khan', '../Main_Layout/assets/images/sinopharm.jfif'),
(14, 'Pfizer', '2022-12-02', '2000.00', 'Pfizer-BioNTech and Moderna mRNA COVID-19 vaccines', 'Available', 'Agha Khan', '../Main_Layout/assets/images/phizer.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`AppId`),
  ADD KEY `Fk_Hospital` (`Hosid`),
  ADD KEY `Fk_Vaccine` (`Vacid`);

--
-- Indexes for table `covid_report`
--
ALTER TABLE `covid_report`
  ADD PRIMARY KEY (`Rep_id`),
  ADD KEY `FK_Patient_Id` (`Patient_Id`),
  ADD KEY `FK_Vaccine_Id` (`Vaccine_Id`);

--
-- Indexes for table `hospitaldetail`
--
ALTER TABLE `hospitaldetail`
  ADD PRIMARY KEY (`Hosid`);

--
-- Indexes for table `patientdetail`
--
ALTER TABLE `patientdetail`
  ADD PRIMARY KEY (`Pat-id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `vaccination`
--
ALTER TABLE `vaccination`
  ADD PRIMARY KEY (`Vacid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `AppId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `covid_report`
--
ALTER TABLE `covid_report`
  MODIFY `Rep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospitaldetail`
--
ALTER TABLE `hospitaldetail`
  MODIFY `Hosid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patientdetail`
--
ALTER TABLE `patientdetail`
  MODIFY `Pat-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vaccination`
--
ALTER TABLE `vaccination`
  MODIFY `Vacid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `Fk_Hospital` FOREIGN KEY (`Hosid`) REFERENCES `hospitaldetail` (`Hosid`),
  ADD CONSTRAINT `Fk_Vaccine` FOREIGN KEY (`Vacid`) REFERENCES `vaccination` (`Vacid`);

--
-- Constraints for table `covid_report`
--
ALTER TABLE `covid_report`
  ADD CONSTRAINT `FK_Patient_Id` FOREIGN KEY (`Patient_Id`) REFERENCES `patientdetail` (`Pat-id`),
  ADD CONSTRAINT `FK_Vaccine_Id` FOREIGN KEY (`Vaccine_Id`) REFERENCES `vaccination` (`Vacid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
