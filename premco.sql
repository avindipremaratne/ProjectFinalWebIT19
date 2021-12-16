-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2017 at 01:55 AM
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
-- Table structure for table `acptreservations`
--

CREATE TABLE `acptreservations` (
  `Reservation_No` int(10) NOT NULL,
  `User_ID` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Contact_No` int(11) NOT NULL,
  `Model_No` varchar(30) NOT NULL,
  `DateTime` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acptreservations`
--

INSERT INTO `acptreservations` (`Reservation_No`, `User_ID`, `Name`, `Contact_No`, `Model_No`, `DateTime`) VALUES
(28, 13, 'Avindi Premaratne', 1233122, 'HP8303', '08/27/2017 01:50:38 pm'),
(26, 2, 'dimuth', 11111, 'DCR-SR68E', '08/27/2017 12:48:03 pm'),
(29, 12, 'Janith', 121212, 'GC102240', '08/27/2017 02:10:04 pm'),
(30, 2, 'dimuth', 2525255, 'KLV-32R326E', '08/27/2017 02:10:45 pm'),
(31, 12, 'Janith', 777128246, 'DSC-H300', '08/27/2017 02:12:07 pm'),
(34, 13, 'Avindi Premaratne', 777128246, 'ECH-610SS', '08/27/2017 04:34:07 pm'),
(33, 15, 'Janith', 715265586, 'DCR-SR68E', '08/27/2017 03:25:28 pm'),
(32, 14, 'Sachin Nimshan', 771607102, 'ECH-610SS', '08/27/2017 02:14:28 pm'),
(35, 13, 'Avindi Premaratne', 771607102, 'TL-1970', '08/27/2017 05:06:44 pm'),
(36, 13, 'Avindi Premaratne', 777, 'P1860RWN5', '08/27/2017 05:46:21 pm');

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
  `Email` varchar(30) NOT NULL,
  `Contact_No` int(11) NOT NULL,
  `Model_No` varchar(30) NOT NULL,
  `DateTime` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`Reservation_No`, `User_ID`, `Name`, `Email`, `Contact_No`, `Model_No`, `DateTime`) VALUES
(39, 13, 'Avindi Premaratne', '', 144, 'DCR-SR68E', '08/27/2017 10:06:47 pm'),
(42, 13, 'Avindi Premaratne', 'avindi_p@gmail.com', 777128246, 'TL-1970', '08/27/2017 11:25:31 pm'),
(43, 14, 'Sachin Nimshan', 'sachinnimshan@gmail.com', 771607102, 'P1860RWN5', '08/27/2017 11:41:11 pm');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `Model_No` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Category` varchar(30) NOT NULL,
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

INSERT INTO `stocks` (`Model_No`, `Name`, `Category`, `Unit_Price`, `Selling_Price`, `Code`, `No_of_stocks`, `Supplier_ID`, `Date`, `Image`, `Description`, `Brand`) VALUES
('DCR-SR68E', 'SONY HANDYCAM Camcorder DCR - SR68E', 'Camera ', 'Rs.38,990', 'Rs.39,990', 'WERT', 2, 'SP-01', '28/07/2017', '../Itemimages/DCR-SR68E.jpg', 'â€¢Image Sensor: 1/5.8 type (3.1mm) back-illuminated Exmor R CMOS Sensor\r\nâ€¢Image Processor: BIONZ X image processor\r\nâ€¢Lens / Filter Diameter: ZEISS Vario-Tessar\r\nâ€¢Optical / Digital Zoom: Optical Zoom: 27x, Digital Zoom: 320x, Clear Image Zoom: 54x\r\nâ€¢Audio Format: Dolby Digital 2ch Stereo, Dolby Digital Stereo Creator, MPEG-4 AAC-LC 2ch\r\nâ€¢Zoom Mic: Built-in Zoom Microphone\r\n', ''),
('DSC-H300', 'SONY Digital Camera DSC-H300', 'Camera', 'Rs.48,990', 'Rs.49,990', 'QWESD', 2, 'SP-01', '25/07/2017', '../Images/DSC-H300.jpg', '35x optical zoom\r\n20.1 MP Super HAD CCD\r\nDSLR-style body with easy-to-grasp grip\r\nHD Movie (720p)\r\n3.0" clear photo LCD"\r\nAdvanced Flash Technology\r\nLens Type: Sony Lens\r\nF Number: F3.0(W) - 5.9(T)', 'SONY'),
('DSC-W800', 'SONY Digital Camera DSC-W800', 'Camera ', 'Rs.18,999', 'Rs.19,999', 'WERT', 3, 'SP-01', '28/07/2017', '../Itemimages/DSC-W800.jpg', '', ''),
('ECH-610SS', 'ELBA Cooker Hood ECH-610SS ', 'KitchenAppliances', 'Rs.11,600', 'Rs.12,600', 'WCEEE', 2, 'SP-05', '26/07/2017', '../Images/ECH-610SS.jpg', 'Spatium hoods will quietly extract the fumes coming directly from your ELBA hob and streamline the look in your kitchen.\r\n\r\nAvailable in various colours, 60 cm and 90 cm freestannding hood. \r\n\r\nKey features\r\n3 speed settings\r\nSlider controls\r\nCapacity: 250-390m3/hour\r\nAttractive Stainless steel finish\r\nStrong suction power\r\nMetal filters\r\nCharcoal filters\r\nRecirculation or ducting system  \r\n', 'ELBA'),
('GC102240', 'PHILIPS-STEAM IRON', 'Home Appliances ', 'Rs.3,900', 'Rs.4,590', 'TERV', 3, 'SP-05', '22/08/2017', '../Itemimages/GC102240.jpg', 'Soleplate - Non-stick\r\nSteam output â€“ Yes\r\nContinuous steam output - 25  g/min\r\nSteam boost - 90  g\r\nSpray â€“ Yes\r\nPower - 2000  W', 'Philips'),
('HP8303', 'PHILIPS Hair Straightner', 'Hair Care', 'Rs.3,600', 'Rs.3,900', 'RESW', 2, 'SP-04', '25/07/2017', '../Images/HP8303.jpg', 'Maximum temperature -210  Â°C\r\nCord length -1.6  m\r\nHeat-up time -60 sec\r\nVoltage -Worldwide  V\r\nPlate size -19x85', ''),
('KLV-32R326E', 'SONY BRAVIA LED TV KLV-32R326E', 'TV ', 'Rs.47,000', 'Rs.59,000', 'WCEEE', 3, 'SP-01', '28/072017', '../Itemimages/KLV-32R326E.jpg', '32" LED TV\r\nDisplay resolution (H x V, pixels): 1366 x 768\r\nMotionflowâ„¢ XR 100Hz\r\nClear Resolution Enhancer\r\nLive Colourâ„¢ Technology\r\nDynamic Contrast Enhancer\r\nPicture modes\r\nAudio Power Output: 5W+5W\r\nDolbyâ„¢ Digital', ''),
('P1860RWN5', 'LG-SEMI AUTO WASHING MACHINE 14 KG', 'Washing Machine ', 'Rs. 52,200', 'Rs. 53,300', 'QWERR', 2, 'SP-02', '27/08/2017', '../Itemimages/P1860RWN5.jpg', 'Roller Jet\r\n\r\nThis helps to improve the washing performance of the washing machine\r\n\r\n3 Washing Program\r\n\r\nYou can select performance speed appropriate for all kinds of cloths. Gentle for underwearâ€™s, normal for shirts and pants and strong for jeans\r\n\r\n\r\nWater Fall Function\r\n\r\n\r\nImproves rinsing effect, Provides circulation of water, various and evenly strong washing currents, Detergent dissolution\r\n\r\n', 'LG'),
('SMGUA32K4000', 'Samsung LED TV HD', 'TV ', 'Rs.47,900', 'Rs.50,900', 'ERDFG', 2, 'SP-05', '29/07/2017', '../Itemimages/SMGUA32K4000.jpg', '32" HD LED TV\r\nResolution: 1,366 x 768\r\nPicture Engine: HyperReal\r\nPQI (Picture Quality Index): 100\r\nDynamic Contrast Ratio: Mega Contrast\r\nWide Color Enhancer (Plus): Yes', ''),
('TL-1970', 'Telesonic Gas Cooker TL-1970', 'KitchenAppliances', 'Rs. 7,200', 'Rs.9,200', 'WERTY', 2, 'SP-03', '27/08/2017', '../Itemimages/TL-1970.jpg', 'Glass top.\r\n Stain steel body.\r\n Three burners with brass tops.\r\n Auto ignition.\r\n Gas saving burners.', 'Telesonic'),
('TL-2646', '26â€² Industrial Pedestal Fan TL-2646', 'Home Appliances ', 'Rs. 7,200', 'Rs.9,200', 'WERTY', 1, 'SP-03', '28/07/2017', '../Itemimages/TL-2646.jpg', '', 'Telesonic'),
('TL-60', 'TELESONIC Rice Cooker TL-60', 'KitchenAppliances', 'Rs.3,500', 'Rs.4,500', 'WRRG', 3, 'SP-06', '27/02/266', '../Itemimages/TL-60.jpg', '', ''),
('W843', 'Wahl Professional 8463 Super Taper Chrome Corded Salon Clipper ', 'Hair Care', 'Rs.6500', 'Rs.7500', 'WERT', 1, 'SP-06', '', '../Itemimages/.jpg', 'FOR  ONGOING PROFESSIONAL USE:\r\n\r\nEXTREMELY POWERFUL V 5000 MOTOR WITH A LONG SERVICE LIFE AND OVER-HEAT PROTECTION\r\n\r\n- 4 PLASTIC ATTACHMENT COMBS (NÂº 1-4)\r\n\r\n- CLEANIN BRUSH \r\n\r\n- OIL\r\n\r\n- Designed to work 120 volts and 60 Hz V\r\n\r\nDESIGNED FOR ALL CLIPPER WORK  \r\n\r\nCHROME BLADE', 'Wahl ');

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
(13, 'Avindi Premaratne', 'avindi_p@gmail.com', 123),
(2, 'dimuth', 'jjjj', 1234),
(12, 'Janith', 'janith@gmail.com', 1234),
(14, 'Sachin Nimshan', 'sachinnimshan@gmail.com', 1234),
(15, 'Janith', 'janith@yahoo.com', 123),
(16, 'Avindi', 'avindi@gmail.com', 12345);

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
  MODIFY `Reservation_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
