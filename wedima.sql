-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 09:04 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedima`
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
  `vendorTypeID` int(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allvendor`
--

INSERT INTO `allvendor` (`id`, `vendorName`, `vendorTypeID`, `user_id`) VALUES
(1, 'Salon Nishi', 7, 0),
(2, 'Cinnamon Grand Colombo', 1, 0),
(3, 'thimathi studio', 2, 0),
(4, 'Darshana Perera', 4, 0),
(5, 'Salon Bhagya', 7, 0),
(6, 'Duritha Bridal Dressing', 5, 1),
(7, 'Calla Bridal Dressing', 5, 4),
(8, 'Baratha Bridal Care Salon', 7, 5),
(9, 'Ibride by INDI', 5, 6),
(10, 'CHANDANA DANCERS', 4, 0),
(11, 'Lassana Flora (Pvt.) Ltd', 10, 0),
(12, 'Kapruka.com', 10, 0),
(13, 'Amalka Flora', 10, 0),
(14, 'Namal Balachandra', 12, 0),
(15, 'Abisheka Mandapaya', 12, 0),
(16, 'Rayman', 12, 0),
(17, 'Devi Jewellers', 9, 0),
(18, 'Vogue Jewellers', 9, 0),
(19, 'Raja Jewellers', 9, 0),
(20, 'Ran Mal Holiday Resort', 1, 0),
(21, 'summerfields Banquets & Restaurant', 1, 0),
(22, 'Natha Photography', 2, 0),
(23, 'Shakkya Studio', 2, 0),
(24, 'Studio U', 2, 0),
(25, 'SVS Wedding Cards', 6, 0),
(26, 'Romax Wedding Cards', 6, 0),
(27, 'Romax Wedding Cards', 6, 0),
(28, 'Vishvi Weddings', 11, 0),
(29, 'MALKEY RENT-A-CAR', 3, 0),
(31, 'Casons Rent a Car', 3, 0),
(32, 'Kandy Cars', 3, 0),
(33, 'Cakes & wedding structures - By Saroja Anthonis', 8, 0),
(34, 'Lanka Chandani Cake Creations', 8, 0),
(35, 'Sujatha Cakes', 8, 0),
(36, 'Studio 39', 2, 0),
(37, 'The Gallery - Nuwan Chandradasa Photography', 2, 0),
(38, 'Malru Cake', 8, 0),
(39, 'Nature Flora', 10, 0);

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
  `serviceArea` varchar(1000) NOT NULL,
  `cover` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beautician`
--

INSERT INTO `beautician` (`id`, `locationLat`, `locationLang`, `name`, `pp`, `vision`, `description`, `telephone`, `address`, `serviceArea`, `cover`) VALUES
(1, '6.9786542', '79.9278814', 'Salon Bhagya', 'bhagya.jpg', 'We offer a full range of Hair and Beauty treatments by using best products with our expertise knowledge over 16 years. Our contemporary bridal dressing will enhance your natural beauty to bring out the best in you. Look glamorous on your wedding day and reveal your true beauty.', 'Manori Jayaweera is a professional Beautician and a Hair dresser and the proud owner of Salon Bhagya which was established in year 2000. Manori began her career in year 1996 after winning the best student of the year in Thirani Peiris Beauty culture Academy. She was one of the first beauticians who won an international award in an international hair and beauty competitions. Manori’s accomplishments have proven her ability, and won her first place as “Best Bridal Make- up Artist” in Hair Asia Pacific-India and also succeeded in winning the 3 categories of Nail Arts, Fantasy Hair Styles, Creative Hair- cuts and Evening Hair Styles in the Hair Asia Pacific and Hair World competitions held in Thailand, China, Italy and Malaysia.', '777842186', 'SALON BHAGYA (Official Page)\r\nBranches: \r\nKandy Road,Kiribathgoda, \r\nWilliam Gopallawa MW, Kandy', 'Colombo, Gampaha', 'bhagya.jpg'),
(2, '7.0895193', '79.934285', 'Salon Nishi', 'nishi.jpg', 'My wife and I got a pedicure. Great experience. Nice salon. It was overall very relaxing. Will be back', 'Salon Nishi spacializes in complete nail care, carrying latest polish color collections from OPI and Esse brands, hair removal, and chair massage. Please check with us about our new skin care service as we are just about to launch new product line.', '0712789803', '197 Minuwangoda-Gampaha-Miriswatta Rd, Yakkala', 'Gampaha', 'nishi.jpg'),
(3, NULL, NULL, 'Baratha Bridal Care Salon', 'baratha.jpg', NULL, 'Baratha Bridal Care Salon, we \"Enhance Your Beauty\" Good quality products ,great service and safe environment for girl & ladies.', '077 308 7913', 'No: 10A, Dinasiri Mawatha\r\nEgoda Uyana, Sri Lanka', 'Panadura', 'baratha.jpg');

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
  `serviceArea` varchar(1000) NOT NULL,
  `cover` varchar(1000) DEFAULT NULL,
  `pp` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bridalwear`
--

INSERT INTO `bridalwear` (`id`, `locationLat`, `locationLang`, `name`, `vision`, `description`, `telephone`, `address`, `serviceArea`, `cover`, `pp`) VALUES
(1, '6.8271062', '79.9535615', 'Duritha Bridal Dressing', 'To become best service provider in the srilanka in the field', 'We will design your dream dress. We are professionals and we know your choice. It\'s your call and make it. We are happy to serve you.We are now at palanwatta', '0714720861', '182,Palanwatta,Pannipitiya.', 'Colombo', 'dress.jpg', 'bride1.jpg'),
(2, '7.182536', '79.7906423', 'Calla Bridal Dressing', NULL, 'Calla Bridal is the first Couture Bridal Boutique in Sri Lanka. Carrying a wide selection of luxury bridal and evening gowns from United States of America and Europe.', '031-3718092', 'Calla Bridal, 1454/1, Chilaw - Colombo Main Rd, Katunayake', 'Gampaha,Katunayake', 'calla.jpg', 'calla.jpg'),
(3, '6.88523', '79.86515', 'Ibride by INDI', NULL, 'YA Bride and iBRIDE Bridal Lounge by Indi Yapa Abeywardena located in Sri Lanka is a high end Bridal Designer. We DO NOT hire /rent out', '077 654 6662', '15 Havelock Place, Colombo 5\r\nColombo, Sri Lanka', 'Colombo', 'ibride.jpg', 'ibride.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `pp` varchar(1000) DEFAULT NULL,
  `cover` varchar(1000) DEFAULT NULL,
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

INSERT INTO `entertainment` (`id`, `name`, `pp`, `cover`, `locationLat`, `locationLang`, `vision`, `description`, `telephone`, `address`, `serviceArea`) VALUES
(1, 'Darshana Perera', 'dharshana.jpg', 'dharshana.jpg', '6.8656182', '79.8706401', 'We cover the whole event depending on the crowd and the client’s requirement.', '“Flash Music Band” We do lot of weddings & other functions at five star hotels / Banquets / Reception halls in island wide. We cover the whole event light instrumental / Sinhala / English / Classical / 70s / Baila, all sorts of genres are covered depending on the crowd and the client’s requirement.', '719985000', 'Darshana Perera\r\nNugegoda,\r\nWestern Province', 'Colombo, Kaluthara'),
(2, 'CHANDANA DANCERS', 'logo.png', 'chandana.jpg', NULL, NULL, NULL, 'Chandana Wickrarnasinghe and the Dancers\' Guild of Sri Lanka, A Dance troupe will entertain you with some traditional, folk, creative and modern dancing based on Kandyan, Low country(Sri Lankan Style) Indian dance and free style dance.', '+94112634574', 'Chandana Wickramasinghe & the Dancers Guild, No 08, C P De Silva Mawatha, Kaldemulla, Moratuwa - 10400, Sri Lanka.', 'Moratuwa');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `weddingName` varchar(200) NOT NULL,
  `date` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `weddingName`, `date`, `description`, `image`) VALUES
(1, 'Tharindu & Primali', '2108.04.07', 'Dear Dhananjana,\r\n\r\nMany thanks for an awesome job. here are our thoughts..\r\n\r\nPlanning out the event right from the outset was methodical, time bound and practical. Its success was reflected in the numerous positive comments about the smooth flow and organization of the proceedings. Above all, as the groom and bride, our lives were made awesomely easy. We had faith on Lasantha’s abilities and he lived beyond our expectations. We were relaxed both before and during the event, enjoyed it to the fullest, and never did the stress of ‘what’s next?’ creep in, as we knew that plan was in safe hands. He knew our desires and tastes and made sure everything fell in the right place at the right time.\r\n\r\nWish you all the best', 'ancient.jpg'),
(2, 'Dhananjana and Thilini', '2018.04.06', 'wedima Wedding planners were very helpful in planning and organizing our wedding and the homecoming. Itineraries for both days were created in detail after listening to our needs by Lasantha who was friendly and at the same time professional. On the function day Lasantha and Prasad took care of the timing and made sure everything goes in order. It was a big relief as they were always there to back us up anytime and to guide the whole function from planning stage to the end. Thank you very much for your support and will always recommend you guys in the future.', 'clr.jpg'),
(3, 'Shiran and Nayomi', '2018.03.09', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio', 'red1.jpg'),
(4, 'NUWAN & SAWA', '2018.04.16', 'The service of a wedding planner was needed by us during the time of our wedding due to my busy schedule. At that point Lasantha was there to see, to all the details that mattered to make our day a success that is treasured. With him taking care of everything, we were able to relax and enjoy our very special day.\r\n\r\n', 'wed1.jpg'),
(5, 'HIMASHI & UDITHA', '2018.04.22', 'Thank you for all your help for planning our big day. Your knowledge and experience in the field helped us in lot of situations. My parents and Uditha’s parents were especially pleased with how smoothly proceedings were carried out on the wedding day and homecoming. All the best to you and your team', 'wed2.jpg');

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
  `cover` varchar(1000) NOT NULL,
  `vision` varchar(1000) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flowerworks`
--

INSERT INTO `flowerworks` (`id`, `locationLat`, `locationLang`, `name`, `pp`, `cover`, `vision`, `description`, `telephone`, `address`, `serviceArea`) VALUES
(1, '6.860118', '79.954103', 'Lassana Flora (Pvt.) Ltd', 'lassanaflora.jpg', 'lassanaflora.jpg', 'Lassana Flora is Sri Lanka’s finest & the most trusted on-line gift shop for fresh flowers, cakes & gifts under one roof. We grow flowers in our own nurseries with stringent attention to the nurturing process to ensure that the best from nature’s bounty is culled.', 'Our services go beyond the deal - we transport flowers in temperature controlled vans & cakes, chocolates and fruits in hygienic cooler vehicles that guarantees freshness and quality on delivery. We have a specially handpicked staff numbering over 200 with special training who supervise various aspects of production to ensure that the customer receives a product of unsurpassed quality. ', '0112001122', '25 Wijerama Mawatha, Colombo-07 00700', 'Colombo, Gampaha, Kandy, Negombo, Jaffna, Panadura'),
(2, '6.88085', '79.861977', 'Kapruka.com', 'kapruka.png', 'kapruka.jpg', 'How to Send flowers in Sri Lanka online is a frequent question answered at Kapruka. Kapruka carries over 800 different flower arrangements for island wide delivery. All flowers are fresh cut and made into bouquets and specialized arrangements in-house. Fresh flower prices in Sri Lanka updates daily at Kapruka.', 'With flowers, you can never go wrong; this may seem like a bold statement, yet fragrant little blossoms can swing anyone in a bad mood to a good one, can lighten up someone\'s day and bring a calming sense of happiness. Which is the simple reason that bunches of roses, sheaves of geraniums and baskets of lilies and daisies are seen at anniversaries, birthdays, commemorative days and even when someone is in hospital or feeling a tad under the weather. Kapruka has been a life saver for over a decade now in the sphere of gift giving and celebrating with its wide choice of floral tributes and arrangements', '0117551111', '237/22 Vijayakumaratunga Mawatha,\r\nColombo 5', 'Colombo'),
(3, '6.974339', '79.92057', 'Amalka Flora', 'amalka.jpg', 'amalka.jpg', 'Amalka Flora is one of the Best Florists in Sri Lanka. We offer all kinds Flower Decorations for any Social Event at affordable prices. All our floral designs are innovative and customized.', 'Our Organization, Amalka Flora was founded by Mr. V. R. Ananda in the year 2004. Since then we have been a faithful service provider to all our clients, providing innovative floral designs at affordable prices over a decade. All our floral arrangements are carefully designed so as to assure the quality expected by our customers.\r\n\r\nEach and every arrangement has been designed and prepared by a well experienced staff. Hard working, creative minded, Professional staff is our key strength.', '0114928356', '106/C, Dalugama Road, Kelaniya.', 'Colombo, Kelaniya'),
(4, NULL, NULL, 'Nature Flora', 'Nature.jpg', 'Nature.jpg', NULL, 'Natureflora Limited are specialist importers and exporters of high quality fresh cut flowers.\r\n\r\n\r\nWe import and export the very best quality of fresh cut flowers from discerning growers who respect and value quality, reliability and consistency as necessary inputs in today’s highly competitive global market.\r\nNatureflora work in close cooperation with growers and assist them in marketing their products. Focus is placed on increasing their awareness of globally changing consumer tastes and new market trends. The use of current IT technologies are promoted to realise lower lead times, enhance communications facilities, and allow for greater flexibility. All in all, our premise is to add value at source as much as possible.\r\n\r\nThis makes the products easily marketable and hence provides a better return for the grower. We call this concept a ‘supplier - customer partnership’.', '071 802 6743', '\r\nkahaduwa watta junction\r\nGalle 80000', 'Galle');

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

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `vendorId`, `imageName`, `folder`) VALUES
(1, 1, 'beauty.jpg', 'Duritha'),
(2, 1, 'pre6.jpg', 'Duritha'),
(3, 1, 'yellow.jpg', 'Duritha'),
(4, 1, 'clr.jpg', 'Duritha'),
(5, 1, 'child.jpg', 'Duritha'),
(6, 1, 'grl.jpg', 'Duritha'),
(7, 1, 'pre2.jpg', 'Duritha'),
(8, 1, 'red.jpg', 'Duritha'),
(9, 1, 'run.jpg', 'Duritha'),
(10, 1, 'cakez.jpg', 'Duritha'),
(11, 1, 'prasadi.jpg', 'Duritha'),
(12, 1, 'pre9.jpg', 'Duritha');

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
  `cover` varchar(1000) DEFAULT NULL,
  `vision` varchar(1000) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `bridalORgroom` varchar(100) NOT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groomwear`
--

INSERT INTO `groomwear` (`id`, `locationLat`, `locationLang`, `name`, `pp`, `cover`, `vision`, `description`, `telephone`, `address`, `bridalORgroom`, `serviceArea`) VALUES
(1, '6.868832', '79.888203', 'Namal Balachandra', 'nb.jpg', 'nb.jpg', 'Incorporating fine Italian tailoring with modern design, Namal Balachandra’s Gold label suits are a fusion of quality materials and luxury fashion. The highest quality linens, silks and wools have been used to tailor these fine suits all the way from Milan, Italy.', 'Wills Design (Pvt) Limited launched in 2009 at Mount Lavinia first undertook orders to tailor staff uniforms in leading five star hotels in the country.\r\n\r\nFrom hotel uniforms to corporate attire the company soon made a name for itself as the provider of perfect cut and fit business suits.\r\n\r\nThe impressive successes recorded, led the company to venture onto the highly competitive sphere of luxury menswear fashion fanned by the passion of its founder and chairman who wished to see grooms don Wills Design labeled groomswear. Wills Design is famed today as the best in Sri Lanka for high quality groomswear.', '0112890333', '178, High Level Road,\r\nNugegoda.', 'both', 'Colombo, Kiribathgoda, Gampaha'),
(2, '6.845322', '79.933883', 'Abisheka Mandapaya', 'abisheka.png', 'abisheka.png', 'ABISHEKA MANDAPAYA has been able to cater many traditional weddings in Sri Lanka by providing NILAME COSTUMES and Traditional wedding decorations.', 'ABISHEKA MANDAPAYA has been able to cater many traditional weddings in Sri Lanka by providing NILAME COSTUMES and Traditional wedding decorations.', '0114343000', '274 1/1B, High Level Road, Maharagama', 'both', 'Colombo, Gampaha'),
(3, '6.86898', '79.888543', 'Rayman', 'raymon.png', 'raymon.jpg', 'Our Bridal collection is all about the details. The beading, floral appliqués, draping will make the bride shine. Our in-house designers are capable in understanding and creating the perfect design as per the customer’s preference and our patternmakers/tailors are well groomed to achieve perfection.', 'Rayman’s Bride & Groom is a leading bridal dress retailer/designer, serving brides and their wedding parties. The company was incorporated as a subsidiary of Rayman Custom Tailors (Pvt) Ltd, which is a renowned name in the gents tailoring for over 30 years.', '0112820077 ', '201, High Level Road,\r\nNugegoda, Sri Lanka.', 'both', 'Colombo');

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
  `cover` varchar(1000) DEFAULT NULL,
  `vision` varchar(1000) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jewellary`
--

INSERT INTO `jewellary` (`id`, `locationLat`, `locationLang`, `name`, `pp`, `cover`, `vision`, `description`, `telephone`, `address`, `serviceArea`) VALUES
(1, '6.940940', '79.851848', 'Devi Jewellers', 'devi.png', 'devi.jpg', 'A Seven story complex of magnificent stature outfitted with state of the art technology for a company in the business of Jewellery has come into being. An iconic landmark on Sea Street, a street renowned and reputed for its thriving gold market. The building boasts a studio, a craft shop and a showroom to support its manufacturing and retail division. At this period in time the staff has burgeoned to 400 experienced, loyal and dedicated employees.', 'The Jewellery industry is dynamic as it is fast growing. Currently consequential changes are under way, both in consumer behaviour as well as in the industry itself. 50 years of being a jeweller to the people of our island nation has resulted in time-tested expertise in the jewellery industry. Half a century immersed in the gold trade has given us the distinct advantage in identifying, anticipating and capitalizing on the industries unfolding trends. Companies that have the expertise to respond effectively and expeditiously to the rapidly unfolding trends will shine brighter and dazzle above the rest. We have “First Move Advantage” across the sectors of manufacturing, wholesale and retail markets.', '0777783779', '131 SEA STREET, COLOMBO 11, SRI LANKA', 'Colombo'),
(2, '6.9027706', ',79.850122', 'Vogue Jewellers', 'vogue.jpg', 'vogue.jpg', 'Vogue Jewellers has proven its reliability through 5 decades of serving you.\r\n\r\nVogue Jewellers has proven its commitment to giving you not only a piece of jewellery but a beautiful experience to cherish throughout your life.\r\n\r\nVogue Jewellers stands by its lifetime’s guarantee by being with you forever.', 'The name Vogue was given to this jewellery boutique to signify the exquisite pieces of jewellery it has always been reputed for. Fashion forward, vibrant, beautiful and authentic in design and materials; Vogue Jewellers is a name that embodies a rich history of always giving its customers the widest range of jewellery.', '0115414414', '528 Galle Rd, Colombo 00300', 'Colombo'),
(3, '6.889761', '79.854711', 'Raja Jewellers', 'raja.jpg', 'raja.jpg', 'To become the leading & most respected jeweller in Sri Lanka', 'We plan to achieve our mission through the improvement of quality in the range of our products & growth of our market share through innovation & benchmaking with world class organizations', '0112583223', '173 Galle Rd, Colombo 4', 'Colombo');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pp` varchar(1000) DEFAULT NULL,
  `cover` varchar(1000) DEFAULT NULL,
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

INSERT INTO `locations` (`id`, `name`, `pp`, `cover`, `locationLat`, `locationLang`, `address`, `vision`, `description`, `telephone`, `serviceArea`) VALUES
(1, 'Cinnamon Grand Colombo', 'cinnamon.jpg', 'cinnamon.jpg', '6.917879', '79.848477', '117, Sir Chittampalam A. Gardiner Mawatha,\r\nColombo 02,\r\nSri Lanka.', 'Cinnamon Grand Colombo is the one place to meet all your wedding desires. From flowers to décor to a 101 cake desk, you can make all your important wedding plans with us. In fact, we are willing to go that extra mile to help you begin your journey together, just right!', 'With a choice of four indoor and outdoor venues to choose from, the hotel offers the ultimate wedding destination for those looking to tie the knot.  The elegant Oak Room with its oak wood panelling and chandeliers can hold over 500 guests for gala celebrations.', '0112161161', 'Colombo'),
(2, 'Ran Mal Holiday Resort', 'Ramadia.jpg', 'Ramadia.jpg', '6.72724', '79.90107', '346/5, Old Galle Road, Gorakana\r\nMoratuwa, Sri Lanka', '', 'The Ramadia Ran Mal Holiday Resort was founded in 1992 and has gradually established a reputation as one of the finest Resorts in Colombo.\r\n\r\nSet on the tranquil banks of the magnificent Bolgoda Lake we have Five Air Conditioned Banquet Halls with Luxury Modern Interior Decorations. If you are thinking to experience your memorable occasion at Ramadia Ran Mal Holiday Resort, We will realize your dream as a truth.\r\n\r\nWe are regularly updating our Banquet Halls to full fill the modern youth requirement to their memorable occasion.\r\n\r\nOur stylish bedrooms and suites offer wonderful views over Bolgoda Lake. As well as you get the Ramadia Ran Mal Holiday Resort awarded certificates for its architecture, food and service, Food Safety Management System.\r\n\r\nMore than 60 well qualified and well professional staff members are waiting for you to give their service.\r\n\r\nWe look forward to welcoming you to Ramadia Ran Mal Holiday Resort !!!', '0382 298 921', 'Moratuwa,Colombo'),
(3, 'summerfields Banquets & Restaurant', 'summerfield.jpg', 'summerfield.jpg', '6.82396', '79.96078', '139 Piliyandala Rd., Palanwatta, Pannipitiya, Sri Lanka', '', 'Summerfileds is a family owned business operating since 2005, It is located in a very convenient place and is an ideal place to dine-in as it takes only just 05-minutes drive from kottawa, a 10-minutes drive from Kottawa expressway entrance, making it ideal location. Summerfileds’ banquets provides the best event planning services which include scrumptious menus to ensure that you and your guests go home with enchanting memories. We have loads of experience in hosting corporate meetings, birthday parties, weddings, wedding anniversaries and other events, all at once under one roof. Your party can be enhanced by our spacious dancing floor. Ample parking facilities are available as we have a large parking lot outside, providing off street parking facility for you and your guests.\r\n\r\nOur restaurant is open for lunch and dinner, serving smashing executive foods everyday. We are offering an array of Chinese and Western dishes to be selected from Ala carte menu.', '011 5 627 344', 'Colombo');

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
  `allvendorId` int(20) NOT NULL,
  `packageId` int(20) NOT NULL,
  `packageType` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `allvendorId`, `packageId`, `packageType`) VALUES
(1, 5, 1, 'pacakge1'),
(2, 5, 1, 'package2'),
(3, 5, 1, 'package3');

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

--
-- Dumping data for table `package1`
--

INSERT INTO `package1` (`id`, `packageName`, `description`, `price`, `packageImage`) VALUES
(1, 'basic', 'Upper Lip Threading\r\nHair Cut (any) + Wash\r\nConditioner Treatment+power dose', 12000, '');

-- --------------------------------------------------------

--
-- Table structure for table `package2`
--

CREATE TABLE `package2` (
  `id` int(11) NOT NULL,
  `pcakageName` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(20) NOT NULL,
  `packageImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package2`
--

INSERT INTO `package2` (`id`, `pcakageName`, `description`, `price`, `packageImage`) VALUES
(1, 'standard', 'Normal Head Massage+ tonic\r\nRe-Bonding-Sholder Length\r\nClean up Jovees\r\nEye Treatment\r\nOil Treatment For Body', 20000, '');

-- --------------------------------------------------------

--
-- Table structure for table `package3`
--

CREATE TABLE `package3` (
  `id` int(11) NOT NULL,
  `packageName` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(20) NOT NULL,
  `packageImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package3`
--

INSERT INTO `package3` (`id`, `packageName`, `description`, `price`, `packageImage`) VALUES
(1, 'Premium', 'Upper Lip Threading\r\nChin Threding\r\nHair Cut (any) + Wash\r\nConditioner Treatment+power dose\r\nHair Perm\r\nMake-up\r\nMenicure\r\nHair Straightning', 35000, '');

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
  `cover` varchar(1000) DEFAULT NULL,
  `vision` varchar(1000) NOT NULL,
  `address` varchar(200) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photographers`
--

INSERT INTO `photographers` (`id`, `locationLat`, `locationLang`, `name`, `pp`, `cover`, `vision`, `address`, `telephone`, `description`, `serviceArea`) VALUES
(1, '', '', 'Natha Photography', 'natha.jpg\r\n', 'natha.jpg', '', '\r\n3/14 Devana Rajasinghe Mawatha, Gatambe\r\nKandy 20000', '077 771 8777', '\"I capture your dream that you have never dreamed of\".Have won SED AWARDS 2014', 'Kandy'),
(2, '6.8446427', '79.862148', 'Shakkya Studio', 'shakkya.jpg', 'shakkya.jpg', '', '172, High level road, Maharagama 10280', '0773 856 856', 'Why is it really unmatched and most popular? Shakkya identified the real Sri Lankan tast', 'Colombo'),
(3, '6.8518189', '79.8499624', 'Studio U', 'u.jpg', 'u.jpg', '', '238, Wattegedara, Maharagama, Sri lanka', '011 4 319596', 'Here are a few things about Us. We love photography. For us it is our soul passion. It is the language we most blissfully choose to communicate with. Our alphabets are our frames. We love stories and we are fascinated by storytelling - in our own language - using our own alphabets. We try to narrate a story, frame by frame, as we see it. For us all splendor is in the Details. Hence, we take one frame at a time. Sometimes one frame does it all. We seek for what is not often seen and we take great pleasure narrating them, in the exact way we see them. For us, this journey is an endless conversation with our own selves – in our own language and we invite you to be the spectator of your own story – whilst we be the narrators.', 'Colombo'),
(4, '6.07056', '80.23276', 'Studio 39', '39.jpg', '39.jpg', '', 'Kalahe,Wanchawala, Galle\r\nGalle', '076 535 9665', 'Wedding Photography, commercial photography, Advertising photography & Portrait', 'Galle'),
(5, '', '', 'The Gallery - Nuwan Chandradasa Photography', 'gallery.jpg', 'gallery.jpg', '', 'Mathara,Srilanka.', '0772976432', 'Wedding Photography.We capture the essence of your event Enhanceyour personality,Feel your emotions,For an everlasting memory', 'Mathara');

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
  `cover` varchar(1000) DEFAULT NULL,
  `vision` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stationary`
--

INSERT INTO `stationary` (`id`, `locationLat`, `locationLang`, `name`, `pp`, `cover`, `vision`, `description`, `telephone`, `address`, `serviceArea`) VALUES
(1, NULL, NULL, 'SVS Wedding Cards', 'svs.png', 'svs.jpg', NULL, ' Marriages are made in heaven. For every person it\'s the most auspicious moment of his/her life. At SVS Wedding Cards, we continuously strive to offer you superior All kind of wedding cards to make it', '0112 337 04', '36, Maliban Street, Colombo - 11', 'Colombo'),
(2, NULL, NULL, 'Romax Wedding Cards', 'romax.jpg', 'romax.jpg', NULL, 'At Romax, we are focused on providing  services with the highest levels of customer satisfaction – we will do everything we can to meet your expectations.\r\n\r\nWith a variety of offerings to choose from, we’re sure you’ll be happy working with us. Look around our website and if you have any comments or questions, please feel free to contact us. We hope to see you again! Check back later for new updates to our website. There’s much more to come!', '011 2389 769', '12, 48, 94, Maliban Street, Colombo 11, Sri Lanka', 'Colombo');

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
  `cover` varchar(1000) DEFAULT NULL,
  `vision` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traditionalteams`
--

INSERT INTO `traditionalteams` (`id`, `locationLat`, `locationLang`, `name`, `pp`, `cover`, `vision`, `description`, `telephone`, `address`, `serviceArea`) VALUES
(1, NULL, NULL, 'Vishvi Weddings', 'wishvi.jpg', 'wishvi.jpg', NULL, 'It\'s our prime duty to continue and maintain the customs and traditions transferred to us with due respect by our ancestors.  We reject the mythical and fundamentalist  views in the progress of our traditions and customs.  We perform the traditional practices respectfully forwarding the aims and objectives with beauty and creativity', '0773 613 873 , ', 'No.41, 2nd Floor, Walikada Plaza\r\nRajagiriya', 'Colombo');

-- --------------------------------------------------------

--
-- Table structure for table `transporters`
--

CREATE TABLE `transporters` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `pp` varchar(1000) DEFAULT NULL,
  `cover` varchar(1000) DEFAULT NULL,
  `locationLat` varchar(20) DEFAULT NULL,
  `locationLang` varchar(20) DEFAULT NULL,
  `vision` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transporters`
--

INSERT INTO `transporters` (`id`, `name`, `pp`, `cover`, `locationLat`, `locationLang`, `vision`, `description`, `telephone`, `address`, `serviceArea`) VALUES
(1, 'MALKEY RENT-A-CAR', 'Malkey.jpg', 'Malkey.jpg', NULL, NULL, NULL, 'The Company\r\nWith over 30 years of experience in the industry, we strive to offer the highest levels of customer service and a highly personalised service to all our customers.\r\n\r\nWith one of the largest and most modern and varied fleets in Sri Lanka, our service is backed by a networked front office, fully-fledged mechanical servicing and valet servicing onsite making us one of the preferred providers of Sri Lanka car rentals in the island.\r\n\r\nMalkey Rent A Car is a founder member of the Rent A Car Association (RACA) Sri Lanka, recognised by the Automobile Association (AA) of Sri Lanka and is a Sri Lanka Tourist Board approved transport provider.\r\n\r\nMalkey is the only ISO 9001:2008 Certified Vehicle Rental Company in Sri Lanka\r\n \r\n\r\nService Guarantee\r\nWe take pride in being able to offer the highest levels of service in the industry with our service guarantee offering a replacement vehicle and driver in case of an emergency anywhere in Sri Lanka 24 hours a day, 7 days a week.', '011 2 365365', 'MALKEY RENT A CAR (PVT.) LTD. \r\nNO 58 \r\nPAMANKADA ROAD, \r\nCOLOMBO 06, \r\nSRI LANKA.', 'Colombo'),
(2, 'Casons Rent a Car', 'cason.png', 'casons.jpg', '6.91889', '79.88798', NULL, 'Established in 1987 as the pioneering Rent a Car Company by the managing director Mr. M. C. Zakir Ahamed (A.M.I.M.I-UK), Casons Rent a Car (Pvt) Ltd. is a family managed business that reign at the top of rent a car sri lanka companies. As the oldest vehicle rental service providing company to both locals and foreign tourists, offering the widest range of transportation services using from a choice of small budget cars to luxury limousines and coaches with chauffeur or self driven options, our services extend to corporate group events, VIP movements, weddings & celebrity events and any other requirement. With the largest ever vehicle fleet to date since its inception, Casons has always maintained consistency and excelled in providing the highest levels of customer service quality and satisfaction with highly personalised service to all our customers.', ' 011 4 377366', '181, Gothami Gardens, Gothami Road, Rajagiriya, Sri Lanka\r\nRajagiriya 0080', 'Colombo'),
(3, 'Kandy Cars', 'kandy.jpg', 'kandy.jpg', '7.294545', '80.625781', NULL, 'Kandy Wedding Car is an ongoing success story. Our guiding principles, and humble beginning, revolve around personal honesty and integrity. We believe in strengthening our communities one at a time. Serving our customers as if they were our family. And rewarding hard work. These things are as true today as they were when we were founded in 2005.\r\n\r\nToday, our extensive network, fleet and range of services position Kandy Wedding Car as part of the special events transportation solutions provider in Sri Lanka. We offer our customers local and airport rentals, car sharing, exotic car hire along with transportation solutions for grand occasions including Brand new luxurious Limousines, BMW and Audi', '+94 778 980 306', 'Kandy Rent a Car / 28A Hill Street, Kandy', 'Kandy');

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
(3, 'Dhananjana', '1234', 'dhana@gmail.com', 'customer'),
(4, 'Calla', '1234', 'calla@gmail.com', 'vendor'),
(5, 'Baratha', '1234', 'baratha@gmail.com', 'vendor'),
(6, 'Ibride by INDI', '1234', 'ibride@gmail.com', 'vendor');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `vendorType` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `vendorType`, `description`) VALUES
(1, 'locations', 'Places to success their wedding day'),
(2, 'photographers', ''),
(3, 'transporters\r\n', ''),
(4, 'entertainment', ''),
(5, 'bridalWear', ''),
(6, 'stationary', ''),
(7, 'beautician', ''),
(8, 'weddingCake', ''),
(9, 'jewellary', ''),
(10, 'flowerWorks', ''),
(11, 'traditionalTeams', ''),
(12, 'groomWear', '');

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
  `cover` varchar(1000) DEFAULT NULL,
  `vision` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `serviceArea` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weddingcake`
--

INSERT INTO `weddingcake` (`id`, `locationLat`, `locationLang`, `name`, `pp`, `cover`, `vision`, `description`, `telephone`, `address`, `serviceArea`) VALUES
(1, NULL, NULL, 'Cakes & wedding structures - By Saroja Anthonis', 'saroja.jpg', 'saroja.png', '', 'Welcome to Cakes and Structures by Saroja Anthonis! First established in 1983, we have over 30 years of experience in the cake industry. We specialize in custom baked goods including cupcakes, wedding cakes & structures, and cakes for any other occasion, cheese cake and sweet treats.  We provide a total solution package for Weddings. We work individually with each bride and groom to create a custom wedding cake that is personalized and special. All of our cakes are made on order, with only the freshest ingredients. Moreover, ‘Salon Saroja’ provides our customers value added services and gives them the opportunity to receive their total money’s worth!', '031 2220611', '\r\n630 colombo rd negombo sri lanka\r\nNegombo negombo', 'Negombo'),
(2, NULL, NULL, 'Lanka Chandani Cake Creations', 'chandani.jpg', 'chandani.jpg', '', 'Lanka Chandani Cake Creations are in the forefront of the modern Wedding Cake creation arena. She is a bright invention of veteran R.L. Clement. Her products are popular in the market simply due to its uniqueness, creativity, flexibility and affordability. Uncommon nature of the designs and appearance itself and ability to change them to suit to your imagination make them more attractive and fit the occasion. Everything changes with time and we too continue to introduce variance in to our collections assuring the quality, as a measure of continuous improvement. With more than a decade of experience in catering to the market, we now focus on thriving further in a much professional manner.', '0714816016', '\r\n 459/A, Bulugahawatta Road,\r\nMankada Road, Kadawatha.', 'Gampha,Colombo'),
(3, NULL, NULL, 'Sujatha Cakes', 'sujatha.jpg', 'sujatha.jpg', NULL, 'Sujatha Cakes is the best place for wedding cakes, birthday cakes, celebration cakes and cakes for any occasion. We also make desserts and other finger foods (or short eats). We serve customers all over Colombo, Sri Lanka', '077 904 5132', '7/91, Pasal Mawatha, Gangodavila\r\nNugegoda', 'Colombo'),
(4, '6.05361', '80.2117', 'Malru Cake', 'malru.jpg', 'malru.jpg', NULL, '*wedding cakes, cakes structures and all kinds of Cake orders', '0777900974', 'No. 394/D,Galle rd.,Kalegana\r\nGalle', 'Galle');

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
-- Indexes for table `package2`
--
ALTER TABLE `package2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package3`
--
ALTER TABLE `package3`
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
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `beautician`
--
ALTER TABLE `beautician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bridalwear`
--
ALTER TABLE `bridalwear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `flowerworks`
--
ALTER TABLE `flowerworks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `groomwear`
--
ALTER TABLE `groomwear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jewellary`
--
ALTER TABLE `jewellary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `package1`
--
ALTER TABLE `package1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `package2`
--
ALTER TABLE `package2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `package3`
--
ALTER TABLE `package3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `photographers`
--
ALTER TABLE `photographers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `stationary`
--
ALTER TABLE `stationary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `traditionalteams`
--
ALTER TABLE `traditionalteams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transporters`
--
ALTER TABLE `transporters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
