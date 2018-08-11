-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 09:04 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `umarkhan`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(255) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `qty`, `status`, `user_id`) VALUES
(1, '136', '::1', 1, 'pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Mobiles'),
(5, 'Footwear'),
(9, 'Watches'),
(11, 'Smart Wearables'),
(12, 'Smart Headphones'),
(13, 'Power Banks'),
(14, 'Mobile Cables'),
(15, 'Cameras'),
(16, 'Best Camera Accessories'),
(17, 'Best of Laptop Accessories'),
(18, 'Camera Bags'),
(19, 'Network Components'),
(20, 'Cricket Kit'),
(21, 'Mobile Covers'),
(22, 'LED TV'),
(23, 'Mobile Charger');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_map`
--

CREATE TABLE IF NOT EXISTS `tbl_map` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` varchar(250) NOT NULL,
  `longitude` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_map`
--

INSERT INTO `tbl_map` (`id`, `latitude`, `longitude`) VALUES
(1, '-33.888655', '151.187390');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `price` varchar(600) NOT NULL,
  `sale_price` varchar(200) NOT NULL,
  `category` varchar(600) NOT NULL,
  `image` varchar(600) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `views` varchar(10000) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=140 ;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `title`, `price`, `sale_price`, `category`, `image`, `description`, `views`, `status`) VALUES
(2, 'Nokia Luma', '60,000', '', '1', 'images (1).jpg', '', '3', ''),
(3, ' Grand prime', '2000', '', '1', 'grand.jpg', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable.', '51', ''),
(4, 'Rado ', '25,000', '', '9', 'rado.jpg', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable.', '1', ''),
(7, 'Sportswear', '7,000', '', '5', 'shoes.jpg', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable.', '6', ''),
(12, 'Samsung j7', '22,550', '', '1', 'download (3).jpg', '', '17', ''),
(23, 'Keeper Gloves', '3000', '', '20', '812aae6d4e16824ca71a784d19c198cf_large.png', '', '6', ''),
(24, 'Cricket Wickets', '2000', '', '20', 'gray-nicolls-sheffield-cricket-stump.jpg', '', '5', ''),
(25, 'CA Bats', '10000', '', '20', 'download (1).jpg', '', '2', ''),
(32, 'iPhone 5s', '32000', '', '1', 'apple-iphone-5s-a1530-16gb-gold-1131-1676.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', '617', ''),
(34, 'Apple Watch', '60000', '', '9', 'spigen-watch-case-white.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.', '8', ''),
(35, 'Watch', '15000', '', '9', '4_5.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.', '10', ''),
(36, 'Footwear', '3500', '', '5', 'yepme-combo-of-premium-sports-shoes-with-bag-ypmfoot8471.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.', '25', ''),
(39, 'Ladies Watch', '2000', '', '9', 'girls-fashionable-imported-pink-belt-watch.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.', '23', ''),
(40, 'Oppo F7', '39,999', '', '1', 'oppo-f7-cph1819-1.jpg', 'They was very beautiful mobile phone.they are pick to one mobile to all the stock of this phone..they was very limit stock', '', ''),
(41, 'HTC', '19,850', '', '1', '6142017123101PM_635_htc_desire_628_dual_sIM.jpeg', 'HTC 635 was very osm mobile they are buys to my website was very limit stock. ', '', ''),
(42, 'Iphone X', '1,12550', '', '1', 'iphonex-mau-vang-khi-nao-ra-mat-2.jpg', 'They phone are storage 256 Ram 3gb .They are very beautiful phone to first time in pakistan to buy this phone and enjoy to lates feature this phone.', '', ''),
(43, 'Iphone X', '99,999', '', '1', 'wvntfdaqvmza9drnqoyg.jpg', 'ROM 64 RAM 2 camera 12mapixal back 5mapixal font.they osm mobile plz use this mobile stock was very limit.', '', ''),
(44, 'Iphone 8 ', '87,550', '', '1', 'hd.jpg', 'RAM 2 ROM 128 CAMERA 8 magapixal back 5 fornt ', '', ''),
(45, 'one plus 5T', '80,000', '', '1', '0020934_oneplus-5t-limited-edition-star-wars.jpeg', 'RAM 8gb ROM 256 .they was very beautiful mobile to limit stock my website.plzz visit my website thank you.', '', ''),
(46, 'NIke shoes', '10,000', '', '5', 'nikesport.jpg', 'they very expensive shoes to my stock market to biled to good sports..', '', ''),
(47, 'PUMA', '20,000', '', '5', 'puma.jpg', 'puma osm shoes plzzzz buys this', '', ''),
(48, 'NIke new ', '12,000', '', '5', 'product-500x500.jpeg', 'nyc shoes nike company first time to creat the new desing', '', ''),
(49, 'Joomar', '20,000', '', '5', 'Joomra-Men-Sneaker-Running-Shoes-Lightweight-Sneakers-Breathable-Mesh-Sports-Shoes-Jogging-Footwear-Walking-Athletics-Shoes.jpg_640x640.jpg', 'joomar they are least desing to my website to verry big stock ...plz buy ', '', ''),
(58, ' Titan Watches', '50,000', '', '9', 'Sheet-Music-Titan-Watches-Signature-Theme.jpg', '', '', ''),
(59, 'Titan Raga Moonlight', '55,550', '', '9', '001_95028WM01J_1.jpg', '', '', ''),
(60, 'Qoo10 - S2', '35,550', '', '11', 'images (1).jfif', '', '', ''),
(61, ' Smart Wear', '1550', '', '11', '17134f9fda52c04ed79828a540751b27_1200x1200.jpg', '', '', ''),
(62, 'New style-Headphone ', '1750', '', '12', '108223-0.jpg', 'New style-Headphone avaliable coming lunch in my website..', '', ''),
(63, 'Head-free style', '25,00', '', '12', 'hussar.jpg', 'Head-free style they are most populer brand  stock', '', ''),
(64, 'Headphone new-style', '2250', '', '12', 'item_XL_22363453_30329111.jpg', 'Headphone new-style coming soon ...', '', ''),
(65, ' Zenex Bluetooth 3.0 Wireless ', '1730', '', '12', 'c700x420.jpg', '', '', ''),
(66, 'Headphone wireless', '2340', '', '12', '51z8lU3xnFL._SL500_AC_SS350_.jpg', '\r\n\r\nheadphone Bluetooth 3.0 Wireless Sports', '', ''),
(67, ' Earbud Headphones', '500', '', '12', 'img_9984_blue_800x800.jpg', '', '', ''),
(68, 'Apple Watch Series 3', '38,999', '', '11', 'apple_mqk12ll_a_watch_series_3_42mm_1362181.jpg', 'Apple Watch Series 3 ..', '', ''),
(69, 'Apple Watch ', '35,540', '', '11', 'apple_watch_smartwatch_announced_1.jpg', 'Apple Watch most beautiful', '', ''),
(70, 'Joy Geek Smart Watch', '40,000', '', '11', '51+o5fYtr7L.jpg', 'Joy Geek Smart Watch samsung ...', '', ''),
(71, 'Woman Bluetooth Smart Watch', '30,000', '', '11', '51UPzLYu_2BFL.jpg', 'Buy Bluetooth Smart Watch', '', ''),
(72, 'Samsung gear watch', '45,999', '', '11', 'samsung-gear-womens-watch-23-luxury-design-women-men-smart-sport-screen-film-for-fit.jpg', 'Buy Bluetooth Smart Watch..', '', ''),
(73, 'samsung Bluetooth Smart Watch', '41,999', '', '11', 'product-image-218346572_1024x1024.jpg', 'samsung Gear Bluetooth Smart Watch', '', ''),
(74, 'Excelvan Fashionable Women', '55,000', '', '11', '41PK8Ki7HpL.jpg', 'Excelvan Fashionable Women..', '', ''),
(75, 'Meike Batteriegriff fÃ¼r', '41566', '', '16', '5436_p1.jpg', 'Meike Batteriegriff fÃ¼r', '', ''),
(76, 'EOS Digital SLR', '19,850', '', '16', '24463_1_l.jpg', 'EOS Digital SLR..', '', ''),
(77, 'Power bank MI', '3000', '', '13', '61y0xx5rNhL._SX425_.jpg', 'Power bank MI they indian brand lunch in pakistan', '', ''),
(78, 'Mobile  Fast cable', '250', '', '14', 'item_XL_5657416_2746932.jpg', 'Mobile  Fast cable', '', ''),
(79, 'Nikon 8k Camera Movie', '1,14500', '', '15', 'canon_cinema_eos_8k_camera_2.jpg', 'Nikon 8k Camera Movie', '', ''),
(80, 'Nikon 4k Camera ', '', '', '15', 'nikon4k-790x489.png', 'Nikon 4k Camera Movie or snap camera', '', ''),
(81, 'Camera mak ', '4000', '', '16', '1.jpg', 'camera Mak..', '', ''),
(82, 'Dell adopter ', '1500', '', '17', 'item_L_6207224_3256509.jpg', 'Dell adopter  buys this', '', ''),
(83, 'Tp-Link router', '4500', '', '19', '9663375925.jpg', 'Tp-Link router', '', ''),
(84, 'Camera bag New style', '3000', '', '18', '1-5.jpg', 'Camera bag New', '', ''),
(85, 'Camera satad silder', '10,000', '', '16', '1-photography-accessories-2016.jpg', 'Camera satad silder to move this movies ', '', ''),
(86, 'Best wifi router high rang', '5000', '', '19', '615ybxj2hvl._sl1280___07020_zoom.jpg', 'Best wifi router high rang', '', ''),
(87, 'Cricket Best kit', '5550', '', '20', 'cricket-kit-500x500.jpg', 'Cricket Best kit', '', ''),
(88, 'Mobile Cover New ', '200', '', '21', '2d-customized-printed-mobile-covers-500x500.jpg', 'Mobile Cover New ', '', ''),
(89, 'Tp-Link router limit rang', '2500', '', '19', '7efd5f63cf7658f94c8930114dae450988d12df41dc8ebc9dcde211a7367eb62.jpg', 'tp-link router', '', ''),
(90, 'hard drivce', '75,00', '', '17', '17.jpg', 'laptop headderivec', '', ''),
(91, 'Smart t.v led', '10,000', '', '22', '40-inch-Premium-smart-1-e1519641702319.jpg', 'smart tv LED tv ', '', ''),
(92, 'camera  satad', '35,000', '', '16', '71nqdwaTJ7L._SX569_.jpg', '', '', ''),
(93, 'Camera bag', '3500', '', '18', '71vHdOwZ6tL._SX425_.jpg', '', '', ''),
(94, 'Ethernet cable', '100', '', '19', '81QerFqLubL._SX425_.jpg', 'ethernet cable avilable', '', ''),
(95, 'nikon D3400', '36,550', '', '15', '600-459554220-423-123080-051017014046.jpg', 'd3400', '', ''),
(96, 'car charger', '550', '', '23', '714FrKD-71L._SY355_.jpg', 'car charger fast cherge', '', ''),
(97, 'camera all collection', '60,000', '', '16', '718bfLiE1SL._SL1024_.jpg', 'camera all collection', '', ''),
(98, 'Hub', '3500', '', '19', '08363.jpg', 'hub to conneted computer one by one', '', ''),
(99, 'Mouse wireless', '150', '', '17', '0014564_targus-wireless-usb-laptop-blue-trace-mouse-white.jpeg', '', '', ''),
(100, 'cable all mobile connet', '200', '', '14', '467024.jpeg', 'all mobile port', '', ''),
(101, '4k LED T.V', '15,000', '', '22', '1424807186000_1118257.jpg', 'led tv 4k', '', ''),
(102, 'sony 4k LED T.V', '19,999', '', '22', 'a__74801_zoom.jpg', '4k led tv', '', ''),
(103, 'new style ', '150', '', '21', 's-l300.jpg', 'new style cover', '', ''),
(104, 'ViVO moble ', '450', '', '23', '128562997vivio1506072027.jpg', 'vivo moble cheger', '', ''),
(105, 'ANDROID TV', '17550', '', '22', 'C43ANSMT-4K-front.jpg', 'andrioid tv', '', ''),
(106, 'Fast wifi router', '4600', '', '19', 's-l300 (2).jpg', 'tp link router', '', ''),
(107, 'car adopter', '1600', '', '23', 'main-qimg-a45e28e9ac1e1ad13617a05dbed6ef30.png', 'car,adopter', '', ''),
(108, 'Ecostar led tv', '12000', '', '22', 'DSC03251.jpg', '', '', ''),
(109, 'keybored, Mouse wirless', '170', '', '17', 'apple_wireless_keyboard_mouse_mini1492870973-300x300.jpg', 'wireless ', '', ''),
(110, 'cable ', '120', '', '14', 'a3e9cb28-d3f5-5248-a3ad-f90f8733d48f.jpg', 'cable ohone', '', ''),
(111, 'silder camera', '10,000', '', '16', 'cinetics_cinetics_two_axis360_pro_1051844.jpg', 'nikon silder ', '', ''),
(112, '360 cover', '350', '', '21', 'img_3236.jpg', 'moble cover', '', ''),
(113, 'Lanes', '35,460', '', '16', 'ip058224_00.jpg', '18-140mm', '', ''),
(114, 'cover mobile', '100', '', '21', 'item_XL_23697910_34107768.jpg', 'cover', '', ''),
(115, 'otg cable', '150', '', '14', 'digitek-micro-usb-otg-cable_1465994856.jpeg', 'otg usb connted', '', ''),
(117, 'Home theator', '40,000', '', '17', 'HTB5580_98-RTP-global-001.jfif', 'home thouter', '', ''),
(118, 'best power bank', '1750', '', '13', '20000mah-samsung-power-bank-design-2016-8800mah-20000mah-onqueen-1511-21-OnQueen@7.jpg', 'power bank', '', ''),
(119, 'interlink power bank ', '2,000', '', '13', 'interlink-power-bank-8000mah.jpg', 'power bank osm', '', ''),
(120, 'beautiful power bank', '1300', '', '13', '60099a8354a6cf5fcbcd3a80eb2d0b24.jpg', 'they are good power bank', '', ''),
(121, 'smart power bank', '1950', '', '13', '324892p.jpg', 'cool power bank', '', ''),
(122, 'small size ', '1650', '', '18', 'ona_ona5_064lbr_the_bond_street_camera_1311944.jpg', 'osm bag', '', ''),
(123, 'smart bag', '4750', '', '18', 'Canon-Triangle-Bag-2.jpg', 'they osm bag', '', ''),
(124, 'nikon new look', '75,000', '', '15', '1340x777_new.jpg', 'they osm camera ', '', ''),
(125, 'car chage fast', '1540', '', '23', '636441169745320607-ANKER-POWER-DRIVE-2-1-MICRO-USB-3FT-BLACK-1.jpg', '', '', ''),
(126, 'dubal charge pin', '3500', '', '14', 'Baseus-USB-Cable-For-iPhone-7-6-6s-5-5s-se-Charging-Charger-Type-C-Micro.jpg_640x640.jpg', 'osm pin', '', ''),
(127, 'iphone cover', '110', '', '21', 'fancy-mobile-cover-500x500.jpg', 'osm cover', '', ''),
(128, 'charge iphone', '600', '', '23', 'android-smartphone-original-charger-for-apple-iphone-500x500.jpeg', 'iphone charher', '', ''),
(129, 'laptop bag', '1780', '', '17', 'hp-laptop-backpack-15-6-duotone-backpack-original-imaezfggzc2fjzhy.jpeg', 'hp laptop bag', '', ''),
(130, 'deger cover', '100', '', '21', 'scary pilot art printed mobile cover (2)-600x600.jpg', 'osm cover', '', ''),
(131, 'nikon camera', '58,410', '', '15', 'rBVaI1jCH_OAFrXaAARhYth4nuc780.jpg', 'osm camera', '', ''),
(132, 'bag', '40.000', '', '16', 'kd0934-bg1_2.jpg', 'osm bag camera', '1', ''),
(133, 'wireless charger', '15000', '', '23', 'Pdpgallery-ep-pg920ibugus-600x600-C2-052016.jfif', 'osm charger', '', ''),
(134, 'out to door', '5500', '', '19', 'tplink-wa5210g-0-500x500.jpg', 'outdoor', '', ''),
(135, 'Sony camera', '90,000', '', '15', 'Sony-A7S_10-reasons-mirrorless.jpg', 'best camera', '', ''),
(136, 'wireless charger', '2000', '', '14', 'different-types-of-Wsken-Mini-2.jpg', 'osm charge', '', ''),
(137, 'osm power bank', '2000', '', '13', 'ronin-r2-2200mah-3-800x800.jpg', 'they are osm ', '', ''),
(138, 'ss-galaxy note 9', '95000', '', '1', 'samsung-galaxy-note-9-render1.jpg', 'thet are osm', '', ''),
(139, '32 GB USB', '900', '', '17', 'sandisk-sdcz50-032g-a11-original-imad9xzhqsgkprnu.jpeg', 'they are 32gb use..', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `image`) VALUES
(5, '07-045950-best_swiss_watches_for_men.jpg'),
(7, 'wvntfdaqvmza9drnqoyg.jpg'),
(8, 'Nikon-D4-966x420.jpg'),
(9, '615ybxj2hvl._sl1280___07020_zoom.jpg'),
(11, 'Sony-KD-43X8000D.jpg'),
(12, '108223-0.jpg'),
(13, 'hussar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `cash` varchar(255) NOT NULL,
  `status` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `address`, `city`, `phone`, `cash`, `status`) VALUES
(1, 'Muhammad Umar', 'umarduzz84@gmail.com', 'Umar', '123', 'Address', 'lhr', '0314859875', 'CASH ON DELIVERY', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `p_id` int(255) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `p_id`, `ip_add`) VALUES
(1, 132, '::1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
