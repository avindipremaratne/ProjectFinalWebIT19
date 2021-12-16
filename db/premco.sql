-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2017 at 06:00 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `premco`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Status` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact_No` int(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `Reservation_No` int(10) NOT NULL,
  `User_ID` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Contact_No` int(11) NOT NULL,
  `Model_No` varchar(30) NOT NULL,
  `DateTime` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`Reservation_No`, `User_ID`, `Name`, `Contact_No`, `Model_No`, `DateTime`) VALUES
(2, 1, 'Avindi', 15366, 'TL-60', ''),
(3, 2, 'dimuth', 12853, 'DSC-H300', ''),
(4, 1, 'Avindi', 1125663, 'WF-T1054MJ', ''),
(5, 2, 'dimuth', 715863656, 'ECH-610SS', ''),
(6, 2, 'dimuth', 75698686, 'GC102240', ''),
(7, 1, 'Avindi', 123456, 'GC102240', ''),
(8, 1, 'Avindi', 12355, 'DCR-SR68E', ''),
(9, 1, 'Avindi', 147852, 'DSC-W800', ''),
(10, 1, 'Avindi', 123456, 'HP8303', ''),
(11, 1, 'Avindi', 789456, 'GC102240', ''),
(12, 1, 'Avindi', 144, 'SMGUA32K4000', '08/24/2017 02:43:10 pm'),
(13, 12, 'Janith', 12444, 'GC102240', '08/24/2017 11:25:56 pm');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `Model_No` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Sub_Category` varchar(20) NOT NULL,
  `Unit_Price` varchar(10) NOT NULL,
  `Selling_Price` varchar(10) NOT NULL,
  `Code` varchar(10) NOT NULL,
  `No_of_stocks` int(20) NOT NULL,
  `Supplier_ID` varchar(10) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Image` text NOT NULL,
  `Description` text NOT NULL,
  `Brand` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`Model_No`, `Name`, `Category`, `Sub_Category`, `Unit_Price`, `Selling_Price`, `Code`, `No_of_stocks`, `Supplier_ID`, `Date`, `Image`, `Description`, `Brand`) VALUES
('DCR-SR68E', 'SONY HANDYCAM Camcorder DCR - SR68E', 'Camera ', '', 'Rs.38,990', 'Rs.39,990', 'WERT', 2, 'SP-01', '28/07/2017', '../Itemimages/DCR-SR68E.jpg', 'â€¢Image Sensor: 1/5.8 type (3.1mm) back-illuminated Exmor R CMOS Sensor\r\nâ€¢Image Processor: BIONZ X image processor\r\nâ€¢Lens / Filter Diameter: ZEISS Vario-Tessar\r\nâ€¢Optical / Digital Zoom: Optical Zoom: 27x, Digital Zoom: 320x, Clear Image Zoom: 54x\r\nâ€¢Audio Format: Dolby Digital 2ch Stereo, Dolby Digital Stereo Creator, MPEG-4 AAC-LC 2ch\r\nâ€¢Zoom Mic: Built-in Zoom Microphone\r\n', ''),
('DSC-H300', 'SONY Digital Camera DSC-H300', 'Camera', '', 'Rs.48,990', 'Rs.49,990', 'QWESD', 2, 'SP-01', '25/07/2017', '../Images/DSC-H300.jpg', '35x optical zoom\r\n20.1 MP Super HAD CCD\r\nDSLR-style body with easy-to-grasp grip\r\nHD Movie (720p)\r\n3.0" clear photo LCD"\r\nAdvanced Flash Technology\r\nLens Type: Sony Lens\r\nF Number: F3.0(W) - 5.9(T)', 'SONY'),
('DSC-W800', 'SONY Digital Camera DSC-W800', 'Camera ', '', 'Rs.18,999', 'Rs.19,999', 'WERT', 3, 'SP-01', '28/07/2017', '../Itemimages/DSC-W800.jpg', '', ''),
('DSE - W730', 'SONY Digital Camera DSE - W730', 'Camera ', '', 'Rs.17,990', 'Rs.18,990', 'WERT', 2, 'SP-01', '28/07/2017', '../Itemimages/DSE - W730.jpg', '', ''),
('ECH-610SS', 'ELBA Cooker Hood ECH-610SS ', 'KitchenAppliances', '', 'Rs.11,600', 'Rs.12,600', 'WCEEE', 2, 'SP-05', '26/07/2017', '../Images/ECH-610SS.jpg', 'Spatium hoods will quietly extract the fumes coming directly from your ELBA hob and streamline the look in your kitchen.\r\n\r\nAvailable in various colours, 60 cm and 90 cm freestannding hood. \r\n\r\nKey features\r\n3 speed settings\r\nSlider controls\r\nCapacity: 250-390m3/hour\r\nAttractive Stainless steel finish\r\nStrong suction power\r\nMetal filters\r\nCharcoal filters\r\nRecirculation or ducting system  \r\n', 'ELBA'),
('GC1022/40', 'PHILIPS-STEAM IRON', 'Home Appliances ', '', 'Rs.3,900', 'Rs.4,590', 'TERV', 3, 'SP-05', '22/08/2017', '../Itemimages/GC1022/40.jpg', 'Soleplate - Non-stick\r\nSteam output â€“ Yes\r\nContinuous steam output - 25  g/min\r\nSteam boost - 90  g\r\nSpray â€“ Yes\r\nPower - 2000  W', 'Philips'),
('GC102240', 'PHILIPS-STEAM IRON', 'Home Appliances ', '', 'Rs.3,900', 'Rs.4,590', 'TERV', 3, 'SP-05', '22/08/2017', '../Itemimages/GC102240.jpg', 'Soleplate - Non-stick\r\nSteam output â€“ Yes\r\nContinuous steam output - 25  g/min\r\nSteam boost - 90  g\r\nSpray â€“ Yes\r\nPower - 2000  W', 'Philips'),
('HP8303', 'PHILIPS Hair Straightner', 'Hair Care', '', 'Rs.3,600', 'Rs.3,900', 'RESW', 2, 'SP-04', '25/07/2017', '../Images/HP8303.jpg', 'Maximum temperature -210  Â°C\r\nCord length -1.6  m\r\nHeat-up time -60 sec\r\nVoltage -Worldwide  V\r\nPlate size -19x85', ''),
('KLV-32R326E', 'SONY BRAVIA LED TV KLV-32R326E', 'TV ', '', 'Rs.47,000', 'Rs.59,000', 'WCEEE', 3, 'SP-01', '28/072017', '../Itemimages/KLV-32R326E.jpg', '32" LED TV\r\nDisplay resolution (H x V, pixels): 1366 x 768\r\nMotionflowâ„¢ XR 100Hz\r\nClear Resolution Enhancer\r\nLive Colourâ„¢ Technology\r\nDynamic Contrast Enhancer\r\nPicture modes\r\nAudio Power Output: 5W+5W\r\nDolbyâ„¢ Digital', ''),
('SMGUA32K4000', 'Samsung LED TV HD', 'TV ', '', 'Rs.47,900', 'Rs.50,900', 'ERDFG', 2, 'SP-05', '29/07/2017', '../Itemimages/SMGUA32K4000.jpg', '32" HD LED TV\r\nResolution: 1,366 x 768\r\nPicture Engine: HyperReal\r\nPQI (Picture Quality Index): 100\r\nDynamic Contrast Ratio: Mega Contrast\r\nWide Color Enhancer (Plus): Yes', ''),
('TL-60', 'TELESONIC Rice Cooker TL-60', 'KitchenAppliances', 'Rice Cooker', 'Rs.3,500', 'Rs.4,500', 'WRRG', 3, 'SP-06', '27/02/266', '../Itemimages/TL-60.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Name`, `Email`, `Password`) VALUES
(1, 'Avindi', 'avindi@gmail.com', 123),
(2, 'dimuth', 'jjjj', 1234),
(12, 'Janith', 'janith@gmail.com', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`Reservation_No`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`Model_No`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `Reservation_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
