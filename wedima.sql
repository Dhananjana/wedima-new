-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 08:00 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedima1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `adminLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `allvendor`
--

CREATE TABLE `allvendor` (
  `id` int(200) NOT NULL,
  `vendorName` varchar(1000) NOT NULL,
  `vendorTypeID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allvendor`
--

INSERT INTO `allvendor` (`id`, `vendorName`, `vendorTypeID`) VALUES
(1, 'Saloon Nishi', 7),
(2, 'Cinnamon Grand Colombo', 1),
(3, 'thimathi studio', 2),
(4, 'Darshana Perera', 4),
(5, 'Salon Bhagya', 7);

-- --------------------------------------------------------

--
-- Table structure for table `beautician`
--

CREATE TABLE `beautician` (
  `id` int(11) NOT NULL,
  `locationLat` varchar(20) DEFAULT NULL,
  `locationLang` varchar(20) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `pp` varchar(1000) DEFAULT NULL,
  `vision` varchar(1000) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beautician`
--

INSERT INTO `beautician` (`id`, `locationLat`, `locationLang`, `name`, `pp`, `vision`, `description`, `telephone`, `address`, `serviceArea`) VALUES
(1, '6.9786542', '79.9278814', 'Salon Bhagya', '', 'We offer a full range of Hair and Beauty treatments by using best products with our expertise knowledge over 16 years. Our contemporary bridal dressing will enhance your natural beauty to bring out the best in you. Look glamorous on your wedding day and reveal your true beauty.', 'Manori Jayaweera is a professional Beautician and a Hair dresser and the proud owner of Salon Bhagya which was established in year 2000. Manori began her career in year 1996 after winning the best student of the year in Thirani Peiris Beauty culture Academy. She was one of the first beauticians who won an international award in an international hair and beauty competitions. Manori’s accomplishments have proven her ability, and won her first place as “Best Bridal Make- up Artist” in Hair Asia Pacific-India and also succeeded in winning the 3 categories of Nail Arts, Fantasy Hair Styles, Creative Hair- cuts and Evening Hair Styles in the Hair Asia Pacific and Hair World competitions held in Thailand, China, Italy and Malaysia.', '777842186', 'SALON BHAGYA (Official Page)\r\nBranches: \r\nKandy Road,Kiribathgoda, \r\nWilliam Gopallawa MW, Kandy', 'Colombo, Gampaha');

-- --------------------------------------------------------

--
-- Table structure for table `bridalwear`
--

CREATE TABLE `bridalwear` (
  `id` int(11) NOT NULL,
  `locationLat` varchar(20) DEFAULT NULL,
  `locationLang` varchar(20) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `vision` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `bridalORgroom` varchar(100) NOT NULL,
  `serviceArea` varchar(1000) NOT NULL,
  `cover` varchar(1000) DEFAULT NULL,
  `pp` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `pp` int(11) DEFAULT NULL,
  `locationLat` varchar(20) DEFAULT NULL,
  `locationLang` varchar(20) DEFAULT NULL,
  `vision` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entertainment`
--

INSERT INTO `entertainment` (`id`, `name`, `pp`, `locationLat`, `locationLang`, `vision`, `description`, `telephone`, `address`, `serviceArea`) VALUES
(1, 'Darshana Perera', NULL, '6.8656182', '79.8706401', 'We cover the whole event depending on the crowd and the client’s requirement.', '“Flash Music Band” We do lot of weddings & other functions at five star hotels / Banquets / Reception halls in island wide. We cover the whole event light instrumental / Sinhala / English / Classical / 70s / Baila, all sorts of genres are covered depending on the crowd and the client’s requirement.', '719985000', 'Darshana Perera\r\nNugegoda,\r\nWestern Province', 'Colombo, Kaluthara');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `weddingName` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `weddingName`, `description`) VALUES
(1, 'Tharindu & Primali', 'Dear Dhananjana,\r\n\r\nMany thanks for an awesome job. here are our thoughts..\r\n\r\nPlanning out the event right from the outset was methodical, time bound and practical. Its success was reflected in the numerous positive comments about the smooth flow and organization of the proceedings. Above all, as the groom and bride, our lives were made awesomely easy. We had faith on Lasantha’s abilities and he lived beyond our expectations. We were relaxed both before and during the event, enjoyed it to the fullest, and never did the stress of ‘what’s next?’ creep in, as we knew that plan was in safe hands. He knew our desires and tastes and made sure everything fell in the right place at the right time.\r\n\r\nWish you all the best');

-- --------------------------------------------------------

--
-- Table structure for table `flowerworks`
--

CREATE TABLE `flowerworks` (
  `id` int(11) NOT NULL,
  `locationLat` varchar(20) DEFAULT NULL,
  `locationLang` varchar(20) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `pp` varchar(1000) DEFAULT NULL,
  `vision` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `vendorId` int(11) NOT NULL,
  `imageName` varchar(200) NOT NULL,
  `folder` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groomwear`
--

CREATE TABLE `groomwear` (
  `id` int(11) NOT NULL,
  `locationLat` varchar(20) DEFAULT NULL,
  `locationLang` varchar(20) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `pp` varchar(1000) DEFAULT NULL,
  `vision` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `bridalORgroom` varchar(100) NOT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jewellary`
--

CREATE TABLE `jewellary` (
  `id` int(11) NOT NULL,
  `locationLat` varchar(20) DEFAULT NULL,
  `locationLang` varchar(20) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `pp` varchar(1000) DEFAULT NULL,
  `vision` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pp` varchar(1000) DEFAULT NULL,
  `locationLat` varchar(200) NOT NULL,
  `locationLang` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `vision` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `pp`, `locationLat`, `locationLang`, `address`, `vision`, `description`, `telephone`, `serviceArea`) VALUES
(1, 'Cinnamon Grand Colombo', NULL, '6.917879', '79.848477', '117, Sir Chittampalam A. Gardiner Mawatha,\r\nColombo 02,\r\nSri Lanka.', 'Cinnamon Grand Colombo is the one place to meet all your wedding desires. From flowers to décor to a 101 cake desk, you can make all your important wedding plans with us. In fact, we are willing to go that extra mile to help you begin your journey together, just right!', 'With a choice of four indoor and outdoor venues to choose from, the hotel offers the ultimate wedding destination for those looking to tie the knot.  The elegant Oak Room with its oak wood panelling and chandeliers can hold over 500 guests for gala celebrations.', '0112161161', 'Colombo');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `time` time NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(20) NOT NULL,
  `vendorId` int(20) NOT NULL,
  `packageId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package1`
--

CREATE TABLE `package1` (
  `id` int(11) NOT NULL,
  `packageName` varchar(1000) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int(20) NOT NULL,
  `packageImage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package2`
--

CREATE TABLE `package2` (
  `id` int(11) NOT NULL,
  `packageName` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(20) NOT NULL,
  `packageImage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package3`
--

CREATE TABLE `package3` (
  `id` int(11) NOT NULL,
  `packageName` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(20) NOT NULL,
  `packageImage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photographers`
--

CREATE TABLE `photographers` (
  `id` int(11) NOT NULL,
  `locationLat` varchar(20) NOT NULL,
  `locationLang` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pp` varchar(1000) DEFAULT NULL,
  `vision` varchar(1000) NOT NULL,
  `address` varchar(200) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stationary`
--

CREATE TABLE `stationary` (
  `id` int(11) NOT NULL,
  `locationLat` varchar(20) DEFAULT NULL,
  `locationLang` varchar(20) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `pp` varchar(1000) NOT NULL,
  `vision` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `traditionalteams`
--

CREATE TABLE `traditionalteams` (
  `id` int(11) NOT NULL,
  `locationLat` varchar(20) DEFAULT NULL,
  `locationLang` varchar(20) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `pp` varchar(1000) DEFAULT NULL,
  `vision` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transporters`
--

CREATE TABLE `transporters` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `pp` varchar(1000) DEFAULT NULL,
  `locationLat` varchar(20) DEFAULT NULL,
  `locationLang` varchar(20) DEFAULT NULL,
  `vision` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `usertype`) VALUES
(1, 'Tharindu Sandaruwan ', '1234', 'tharindusandaruwan40@gmail.com', 'vendor'),
(2, 'Warunika', '1234', 'warunikaprimali@gmail.com', 'customer'),
(3, 'Dhananjana', '1234', 'dhana@gmail.com', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `vendorType` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `vendorType`, `description`, `user_id`) VALUES
(1, 'locations', 'Places to success their wedding day', 0),
(2, 'photographers', '', 0),
(3, 'transporters\r\n', '', 0),
(4, 'entertainment', '', 0),
(5, 'bridalWear', '', 1),
(6, 'stationary', '', 0),
(7, 'beautician', '', 0),
(8, 'weddingCake', '', 0),
(9, 'jewellary', '', 0),
(10, 'flowerWorks', '', 0),
(11, 'traditionalTeams', '', 0),
(12, 'groomsWear', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendornotificatiom`
--

CREATE TABLE `vendornotificatiom` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `weddingcake`
--

CREATE TABLE `weddingcake` (
  `id` int(11) NOT NULL,
  `locationLat` varchar(20) DEFAULT NULL,
  `locationLang` varchar(20) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `pp` varchar(1000) DEFAULT NULL,
  `vision` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allvendor`
--
ALTER TABLE `allvendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beautician`
--
ALTER TABLE `beautician`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bridalwear`
--
ALTER TABLE `bridalwear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flowerworks`
--
ALTER TABLE `flowerworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groomwear`
--
ALTER TABLE `groomwear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jewellary`
--
ALTER TABLE `jewellary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package1`
--
ALTER TABLE `package1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photographers`
--
ALTER TABLE `photographers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stationary`
--
ALTER TABLE `stationary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traditionalteams`
--
ALTER TABLE `traditionalteams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transporters`
--
ALTER TABLE `transporters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendornotificatiom`
--
ALTER TABLE `vendornotificatiom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weddingcake`
--
ALTER TABLE `weddingcake`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `allvendor`
--
ALTER TABLE `allvendor`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `beautician`
--
ALTER TABLE `beautician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bridalwear`
--
ALTER TABLE `bridalwear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flowerworks`
--
ALTER TABLE `flowerworks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groomwear`
--
ALTER TABLE `groomwear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jewellary`
--
ALTER TABLE `jewellary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package1`
--
ALTER TABLE `package1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photographers`
--
ALTER TABLE `photographers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stationary`
--
ALTER TABLE `stationary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `traditionalteams`
--
ALTER TABLE `traditionalteams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transporters`
--
ALTER TABLE `transporters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vendornotificatiom`
--
ALTER TABLE `vendornotificatiom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `weddingcake`
--
ALTER TABLE `weddingcake`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
