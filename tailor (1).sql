-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 09:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tailor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `aid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assign`
--

CREATE TABLE `tbl_assign` (
  `assign_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blouse`
--

CREATE TABLE `tbl_blouse` (
  `b_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `book_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `colour` varchar(20) NOT NULL,
  `SL` varchar(20) NOT NULL,
  `AB` varchar(20) NOT NULL,
  `ABOB` varchar(20) NOT NULL,
  `SB` varchar(20) NOT NULL,
  `FND` varchar(20) NOT NULL,
  `AOC` varchar(20) NOT NULL,
  `AA` varchar(20) NOT NULL,
  `shoulder` varchar(20) NOT NULL,
  `NtoS` varchar(20) NOT NULL,
  `BL` varchar(20) NOT NULL,
  `BND` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'applied',
  `materialprice` double NOT NULL,
  `design_id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blouse`
--

INSERT INTO `tbl_blouse` (`b_id`, `m_id`, `qty`, `book_date`, `delivery_date`, `colour`, `SL`, `AB`, `ABOB`, `SB`, `FND`, `AOC`, `AA`, `shoulder`, `NtoS`, `BL`, `BND`, `comment`, `image`, `uid`, `status`, `materialprice`, `design_id`, `size`) VALUES
(3, 4, '1', '2023-05-30', '2023-05-31', '#000000', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'f5d41658bd69c67067df07732140c916.jpg', 2, 'applied', 200, 0, ''),
(4, 6, '2', '2023-06-12', '0000-00-00', '#000000', '2', '2', '2', '2', '2', '2', '2', '22', '2', '2', '2', 'vb nm', 'Sequin Work Silk Dress 10058295 - 42.jpeg', 4, 'applied', 940, 0, 'Medium');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bshirt`
--

CREATE TABLE `tbl_bshirt` (
  `bs_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `book_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `colour` varchar(20) NOT NULL,
  `pocket` varchar(20) NOT NULL,
  `SL` varchar(20) NOT NULL,
  `SW` varchar(20) NOT NULL,
  `chest` varchar(20) NOT NULL,
  `waist` varchar(20) NOT NULL,
  `hip` varchar(20) NOT NULL,
  `shoulder` varchar(20) NOT NULL,
  `length` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'applied',
  `materialprice` double NOT NULL,
  `size` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bshirt`
--

INSERT INTO `tbl_bshirt` (`bs_id`, `m_id`, `qty`, `book_date`, `delivery_date`, `colour`, `pocket`, `SL`, `SW`, `chest`, `waist`, `hip`, `shoulder`, `length`, `comment`, `image`, `uid`, `status`, `materialprice`, `size`) VALUES
(2, 12, '1', '2023-05-29', '2023-05-30', '#000000', 'yes', '1', '1', '11', '1', '11', '1', '1', '1', '10f97f117f897bf60ab7f394fb0f6570.jpg', 2, 'applied', 450, ''),
(3, 5, '3', '2023-06-11', '2023-06-18', '#c81e1e', 'yes', '50', '30', '40', '30', '30', '30', '20', 'simple', '949290df00443c61abcb9fc32e6544cb.jpg', 4, 'applied', 1200, 'Large');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartid` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartid`, `item_id`, `uid`, `qty`, `price`, `total`, `date`, `status`) VALUES
(1, 3, 2, 1, 12000, 12000, '2023-05-29', 'ordered'),
(2, 3, 2, 1, 12000, 12000, '2023-05-29', 'ordered'),
(3, 3, 2, 1, 12000, 12000, '2023-05-29', 'ordered'),
(4, 4, 2, 1, 7899, 7899, '2023-05-29', 'ordered'),
(5, 4, 2, 1, 7899, 7899, '2023-05-29', 'ordered'),
(6, 3, 2, 1, 12000, 12000, '2023-05-29', 'ordered'),
(7, 4, 2, 1, 7899, 7899, '2023-05-29', 'ordered'),
(8, 3, 2, 1, 12000, 12000, '2023-05-29', 'ordered'),
(9, 3, 4, 3, 12000, 36000, '2023-06-01', 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cate`
--

CREATE TABLE `tbl_cate` (
  `cid` int(11) NOT NULL,
  `category_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cate`
--

INSERT INTO `tbl_cate` (`cid`, `category_type`) VALUES
(2, 'women'),
(3, 'men');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_design`
--

CREATE TABLE `tbl_design` (
  `fabric_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `colour` varchar(50) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `length` varchar(50) NOT NULL,
  `waist` varchar(50) NOT NULL,
  `kneelength` varchar(50) NOT NULL,
  `hip` varchar(50) NOT NULL,
  `Thigh` varchar(50) NOT NULL,
  `bottom` varchar(50) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `book_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `NtoSM` varchar(50) NOT NULL,
  `BL` varchar(50) NOT NULL,
  `SL` varchar(50) NOT NULL,
  `AB` varchar(50) NOT NULL,
  `ABOB` varchar(50) NOT NULL,
  `SB` varchar(50) NOT NULL,
  `FND` varchar(50) NOT NULL,
  `AOC` varchar(50) NOT NULL,
  `AA` varchar(50) NOT NULL,
  `Shoulder` varchar(50) NOT NULL,
  `BND` varchar(50) NOT NULL,
  `chest` varchar(50) NOT NULL,
  `Swidth` varchar(69) NOT NULL,
  `Bodice` varchar(50) NOT NULL,
  `SKlength` varchar(50) NOT NULL,
  `sweep` varchar(50) NOT NULL,
  `front_image` varchar(250) NOT NULL,
  `pocket` varchar(50) NOT NULL,
  `height` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_design_data`
--

CREATE TABLE `tbl_design_data` (
  `design_id` int(11) NOT NULL,
  `design_name` varchar(200) NOT NULL,
  `design_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_design_data`
--

INSERT INTO `tbl_design_data` (`design_id`, `design_name`, `design_image`) VALUES
(7, 'Haute Couture fabric', '56041-haute-couture-fabric-_-hand-embroidered-ribbon-and-sequin-flowers-on-tule.jpeg'),
(10, 'Bugle Embellishments', '94773-bugle-embellishments.jpeg'),
(11, 'Amazing Elegant Free', '52097-amazing-elegant-free-gota-work-embroidery-saree-border-pattern-design.jpeg'),
(12, 'Mint Green Zardozi H', '87050-mint-green-zardozi-handwork-kurti.jpeg'),
(13, 'White on White Embro', '78093-white-on-white-embroidery-of-india--chikankari-embroidery-».jpeg'),
(14, 'Sequin Work Silk Dress', '82947-sequin-work-silk-dress-10058295---42.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feed_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feed_id`, `uid`, `message`, `date`) VALUES
(1, 2, 'good', '2023-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_frock`
--

CREATE TABLE `tbl_frock` (
  `f_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `book_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `colour` varchar(20) NOT NULL,
  `SL` varchar(20) NOT NULL,
  `SW` varchar(20) NOT NULL,
  `chest` varchar(20) NOT NULL,
  `waist` varchar(20) NOT NULL,
  `hip` varchar(20) NOT NULL,
  `bodice` varchar(20) NOT NULL,
  `SKlength` varchar(20) NOT NULL,
  `length` varchar(20) NOT NULL,
  `sweep` varchar(20) NOT NULL,
  `shoulder` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `image` varchar(250) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'applied',
  `materialprice` double NOT NULL,
  `size` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_frock`
--

INSERT INTO `tbl_frock` (`f_id`, `m_id`, `qty`, `book_date`, `delivery_date`, `colour`, `SL`, `SW`, `chest`, `waist`, `hip`, `bodice`, `SKlength`, `length`, `sweep`, `shoulder`, `comment`, `image`, `uid`, `status`, `materialprice`, `size`) VALUES
(2, 8, '2', '2023-06-01', '2023-06-14', '#000000', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'n m', 'f5d41658bd69c67067df07732140c916.jpg', 4, 'applied', 720, ''),
(3, 6, '2', '2023-06-12', '2023-06-20', '#000000', '2', '2', '22', '2', '2', '2', '22', '2', '2', '2', ' b', 'f5d41658bd69c67067df07732140c916.jpg', 4, 'applied', 940, 'Large');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gown`
--

CREATE TABLE `tbl_gown` (
  `g_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `book_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `colour` varchar(20) NOT NULL,
  `SL` varchar(20) NOT NULL,
  `SW` varchar(20) NOT NULL,
  `chest` varchar(20) NOT NULL,
  `waist` varchar(20) NOT NULL,
  `hip` varchar(20) NOT NULL,
  `bodice` varchar(20) NOT NULL,
  `SKlength` varchar(20) NOT NULL,
  `length` varchar(20) NOT NULL,
  `sweep` varchar(20) NOT NULL,
  `shoulder` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'applied',
  `materialprice` double NOT NULL,
  `size` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gshirt`
--

CREATE TABLE `tbl_gshirt` (
  `gs_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `book_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `colour` varchar(20) NOT NULL,
  `pocket` varchar(20) NOT NULL,
  `SL` varchar(20) NOT NULL,
  `SW` varchar(20) NOT NULL,
  `chest` varchar(20) NOT NULL,
  `waist` varchar(20) NOT NULL,
  `hip` varchar(20) NOT NULL,
  `shoulder` varchar(20) NOT NULL,
  `length` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'applied',
  `materialprice` double NOT NULL,
  `size` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gshirt`
--

INSERT INTO `tbl_gshirt` (`gs_id`, `m_id`, `qty`, `book_date`, `delivery_date`, `colour`, `pocket`, `SL`, `SW`, `chest`, `waist`, `hip`, `shoulder`, `length`, `comment`, `image`, `uid`, `status`, `materialprice`, `size`) VALUES
(2, 6, '1', '2023-05-29', '2023-05-30', '#000000', 'yes', '1', '11', '1', '1', '1', '1', '1', '1', '10f97f117f897bf60ab7f394fb0f6570.jpg', 2, 'applied', 470, ''),
(3, 4, '2', '2023-06-10', '2023-06-13', '#ce1fd1', 'yes', '30', '20', '40', '202', '40', '20', '40', 'simple', 'f5d41658bd69c67067df07732140c916.jpg', 4, 'applied', 400, 'Large');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE `tbl_item` (
  `item_id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `item_image` varchar(250) NOT NULL,
  `item_description` longtext NOT NULL,
  `item_price` double NOT NULL,
  `item_qty` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`item_id`, `cid`, `item_name`, `item_image`, `item_description`, `item_price`, `item_qty`) VALUES
(1, 2, 'Pink Georgette Palaz', '60854-3732sl04-nazakat9704.jpg', 'Set the temperatures soaring high in this muave pink color embroidered palazzo with georgette suit. Filled with intricate thread embroidery and highlighted with heavy mirror work and gotta lace ornaments. Enriched with accentuate frilled hem to make it more graceful. It is paired wit', 3803, 1),
(3, 2, 'White Gowen', '40941-f5d41658bd69c67067df07732140c916.jpg', 'Set the temperatures soaring high in this muave pink color embroidered palazzo with georgette suit. Filled with intricate thread embroidery and highlighted with heavy mirror work and gotta lace ornaments. Enriched with accentuate frilled hem to make it more graceful. It is paired wit', 12000, 20),
(4, 2, 'Meron Salwar Suit', '44222-c477550a52ccf49725e7d09fd56fb0f9.jpg', 'Set the temperatures soaring high in this muave pink color embroidered palazzo with georgette suit. Filled with intricate thread embroidery and highlighted with heavy mirror work and gotta lace ornaments. Enriched with accentuate frilled hem to make it more graceful. It is paired wit', 7899, 10),
(5, 2, 'Bottle Green Anarkal', '51840-d1653fac91cb922d3701754ccc9d9dfe.jpg', 'Set the temperatures soaring high in this muave pink color embroidered palazzo with georgette suit. Filled with intricate thread embroidery and highlighted with heavy mirror work and gotta lace ornaments. Enriched with accentuate frilled hem to make it more graceful. It is paired wit', 9000, 10),
(6, 2, 'Pista Salwar Suit wo', '22483-d11f405439d679806990186c198c73fc.jpg', 'Set the temperatures soaring high in this muave pink color embroidered palazzo with georgette suit. Filled with intricate thread embroidery and highlighted with heavy mirror work and gotta lace ornaments. Enriched with accentuate frilled hem to make it more graceful. It is paired wit', 5000, 10),
(7, 2, 'Pink floral Anarkali', '48423-949290df00443c61abcb9fc32e6544cb.jpg', 'Set the temperatures soaring high in this muave pink color embroidered palazzo with georgette suit. Filled with intricate thread embroidery and highlighted with heavy mirror work and gotta lace ornaments. Enriched with accentuate frilled hem to make it more graceful. It is paired wit', 13000, 10),
(8, 3, 'Red Kurta Set', '85561-ac525680ff2a13b3023f1e996a4c9279.jpg', 'Set the temperatures soaring high in this muave pink color embroidered palazzo with georgette suit. Filled with intricate thread embroidery and highlighted with heavy mirror work and gotta lace ornaments. Enriched with accentuate frilled hem to make it more graceful. It is paired wit', 7000, 10),
(9, 3, 'Black kurat Suit', '55216-620fcd2822447f03fb5d9b8f140abf38.jpg', 'Set the temperatures soaring high in this muave pink color embroidered palazzo with georgette suit. Filled with intricate thread embroidery and highlighted with heavy mirror work and gotta lace ornaments. Enriched with accentuate frilled hem to make it more graceful. It is paired wit', 12000, 10),
(10, 3, 'Yellow Rajastani Kur', '6037-e5e6039c0434975edfebbcc772e44b9e.jpg', 'Set the temperatures soaring high in this muave pink color embroidered palazzo with georgette suit. Filled with intricate thread embroidery and highlighted with heavy mirror work and gotta lace ornaments. Enriched with accentuate frilled hem to make it more graceful. It is paired wit', 6000, 10),
(11, 3, 'Maharshtra men Kurat', '46967-33785cc988d0af89d3e9cacb93e2bc0d.jpg', 'Set the temperatures soaring high in this muave pink color embroidered palazzo with georgette suit. Filled with intricate thread embroidery and highlighted with heavy mirror work and gotta lace ornaments. Enriched with accentuate frilled hem to make it more graceful. It is paired wit', 6000, 10),
(12, 3, 'Purple Kurta set Men', '54112-3c0ebc5ba408f57c1f1d64351bf784ef.jpg', 'Set the temperatures soaring high in this muave pink color embroidered palazzo with georgette suit. Filled with intricate thread embroidery and highlighted with heavy mirror work and gotta lace ornaments. Enriched with accentuate frilled hem to make it more graceful. It is paired wit', 90000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_material`
--

CREATE TABLE `tbl_material` (
  `m_id` int(11) NOT NULL,
  `m_type` varchar(20) NOT NULL,
  `m_amount` double NOT NULL,
  `tax` double NOT NULL,
  `qty` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_material`
--

INSERT INTO `tbl_material` (`m_id`, `m_type`, `m_amount`, `tax`, `qty`) VALUES
(4, 'fancy', 200, 1, '4'),
(5, 'nailon', 400, 1, '8'),
(6, 'polister', 470, 1, '74'),
(7, 'silk', 500, 1, '78'),
(8, 'kanchipuram', 720, 1, '12'),
(9, 'ullan', 1000, 1, '10'),
(10, 'welwet', 80, 1, '52'),
(12, 'seel', 450, 4, '6'),
(13, 'weem', 780, 9, '5'),
(15, 'geogette', 1000, 18, '30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `oid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `odate` date NOT NULL,
  `gtotal` double NOT NULL,
  `status` varchar(50) NOT NULL,
  `Invoiceno` varchar(30) NOT NULL,
  `notify` varchar(30) NOT NULL,
  `transaction_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`oid`, `uid`, `odate`, `gtotal`, `status`, `Invoiceno`, `notify`, `transaction_id`) VALUES
(16, 4, '2023-06-01', 36000, 'paid', 'IN001', '', '1234567890123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `odid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `mrp` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`odid`, `oid`, `item_id`, `qty`, `mrp`, `total`) VALUES
(4, 16, 3, 3, 12000, 36000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pant`
--

CREATE TABLE `tbl_pant` (
  `p_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `book_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `colour` varchar(20) NOT NULL,
  `height` varchar(20) NOT NULL,
  `waist` varchar(20) NOT NULL,
  `Thigh` varchar(20) NOT NULL,
  `bottom` varchar(20) NOT NULL,
  `kneelength` varchar(20) NOT NULL,
  `hip` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'applied',
  `materialprice` double NOT NULL,
  `size` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pant`
--

INSERT INTO `tbl_pant` (`p_id`, `m_id`, `qty`, `book_date`, `delivery_date`, `colour`, `height`, `waist`, `Thigh`, `bottom`, `kneelength`, `hip`, `comment`, `image`, `uid`, `status`, `materialprice`, `size`) VALUES
(4, 5, '1', '2023-05-29', '2023-05-31', '#000000', '1', '1', '1', '1', '11', '1', 'simple', 'ac525680ff2a13b3023f1e996a4c9279.jpg', 2, 'applied', 400, ''),
(5, 7, '1', '2023-05-29', '2023-05-31', '#000000', '1', '1', '11', '1', '1', '1', '1', 'de52473d5e2cc97a54cfa14fee51ff3f.jpg', 2, 'applied', 500, ''),
(6, 6, '2', '2023-05-30', '2023-06-01', '#000000', '2', '2', '2', '22', '2', '2', '2', 'c6d356434ef37449cd1591a07aa8e594.jpg', 4, 'applied', 470, ''),
(7, 6, '2', '2023-06-01', '2023-06-27', '#000000', '1', '1', '1', '1', '1', '1', 'vbnjm,', 'd1653fac91cb922d3701754ccc9d9dfe.jpg', 4, 'applied', 940, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase`
--

CREATE TABLE `tbl_purchase` (
  `pur_id` int(11) NOT NULL,
  `pdate` date NOT NULL,
  `supid` int(11) NOT NULL,
  `gtotal` double NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'not_calculated'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_details`
--

CREATE TABLE `tbl_purchase_details` (
  `purdtid` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `pur_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  `status` varchar(20) NOT NULL,
  `tax` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `image` varchar(250) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'Staff'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `staff_name`, `gender`, `address`, `phone`, `image`, `type`) VALUES
(1, 'test', 'male', 'test', 1234567890, '4672-linkedin-sales-solutions-pata8xe_ivm-unsplash.jpg', 'Staff'),
(2, 'Ragav', 'male', 'mangalore', 6677881234, '7981-free-images-_-fruit,-orange,-food,-produce,-vegetable,-kitchen,-healthy,-eat,-delicious,-cook,-vegetables,-bell-pepper,-paprika,-ingredients,-bio,-sweet-peppers,-flowering-plant,-chili-pepper,-yellow-(3).jpg', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supply`
--

CREATE TABLE `tbl_supply` (
  `supid` int(11) NOT NULL,
  `supname` varchar(20) NOT NULL,
  `supemail` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supply`
--

INSERT INTO `tbl_supply` (`supid`, `supname`, `supemail`, `company`, `phone`) VALUES
(1, 'test', 'test@gmail.com', 'test', 12345678),
(2, 'Ganesh', 'gan@gmail.com', 'KKKTY', 66714457012);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_top`
--

CREATE TABLE `tbl_top` (
  `t_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `book_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `colour` varchar(20) NOT NULL,
  `SL` varchar(20) NOT NULL,
  `SW` varchar(20) NOT NULL,
  `chest` varchar(20) NOT NULL,
  `waist` varchar(20) NOT NULL,
  `hip` varchar(20) NOT NULL,
  `bodice` varchar(20) NOT NULL,
  `SKlength` varchar(20) NOT NULL,
  `length` varchar(20) NOT NULL,
  `sweep` varchar(20) NOT NULL,
  `shoulder` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'applied',
  `materialprice` double NOT NULL,
  `size` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `uid` int(11) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`uid`, `full_name`, `contact`, `gender`, `address`, `email`, `password`, `image`) VALUES
(4, 'Zamiya mariyamma', 8861537903, '', 'BAJAL ,MANGALORE,DAK', 'zamiashafi30@gmail.com', '1234', '1694-c3eaa918641785889191946012838e8f.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_assign`
--
ALTER TABLE `tbl_assign`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `tbl_blouse`
--
ALTER TABLE `tbl_blouse`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_bshirt`
--
ALTER TABLE `tbl_bshirt`
  ADD PRIMARY KEY (`bs_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `item_id_2` (`item_id`);

--
-- Indexes for table `tbl_cate`
--
ALTER TABLE `tbl_cate`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_design`
--
ALTER TABLE `tbl_design`
  ADD PRIMARY KEY (`fabric_id`),
  ADD KEY `m_id` (`m_id`),
  ADD KEY `m_id_2` (`m_id`);

--
-- Indexes for table `tbl_design_data`
--
ALTER TABLE `tbl_design_data`
  ADD PRIMARY KEY (`design_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `tbl_frock`
--
ALTER TABLE `tbl_frock`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `m_id` (`m_id`),
  ADD KEY `m_id_2` (`m_id`);

--
-- Indexes for table `tbl_gown`
--
ALTER TABLE `tbl_gown`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `tbl_gshirt`
--
ALTER TABLE `tbl_gshirt`
  ADD PRIMARY KEY (`gs_id`);

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `cid` (`cid`),
  ADD KEY `cid_2` (`cid`);

--
-- Indexes for table `tbl_material`
--
ALTER TABLE `tbl_material`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`odid`),
  ADD KEY `oid` (`oid`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `item_id_2` (`item_id`);

--
-- Indexes for table `tbl_pant`
--
ALTER TABLE `tbl_pant`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_purchase`
--
ALTER TABLE `tbl_purchase`
  ADD PRIMARY KEY (`pur_id`),
  ADD KEY `supid` (`supid`);

--
-- Indexes for table `tbl_purchase_details`
--
ALTER TABLE `tbl_purchase_details`
  ADD PRIMARY KEY (`purdtid`),
  ADD KEY `m_id` (`m_id`),
  ADD KEY `pur_id` (`pur_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `tbl_supply`
--
ALTER TABLE `tbl_supply`
  ADD PRIMARY KEY (`supid`);

--
-- Indexes for table `tbl_top`
--
ALTER TABLE `tbl_top`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_assign`
--
ALTER TABLE `tbl_assign`
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_blouse`
--
ALTER TABLE `tbl_blouse`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_bshirt`
--
ALTER TABLE `tbl_bshirt`
  MODIFY `bs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_cate`
--
ALTER TABLE `tbl_cate`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_design`
--
ALTER TABLE `tbl_design`
  MODIFY `fabric_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_design_data`
--
ALTER TABLE `tbl_design_data`
  MODIFY `design_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_frock`
--
ALTER TABLE `tbl_frock`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_gown`
--
ALTER TABLE `tbl_gown`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_gshirt`
--
ALTER TABLE `tbl_gshirt`
  MODIFY `gs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_material`
--
ALTER TABLE `tbl_material`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `odid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pant`
--
ALTER TABLE `tbl_pant`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_purchase`
--
ALTER TABLE `tbl_purchase`
  MODIFY `pur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_purchase_details`
--
ALTER TABLE `tbl_purchase_details`
  MODIFY `purdtid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_supply`
--
ALTER TABLE `tbl_supply`
  MODIFY `supid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_top`
--
ALTER TABLE `tbl_top`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `tbl_item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_design`
--
ALTER TABLE `tbl_design`
  ADD CONSTRAINT `tbl_design_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `tbl_material` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD CONSTRAINT `tbl_item_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `tbl_cate` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `tbl_user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`oid`) REFERENCES `tbl_order` (`oid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_order_details_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `tbl_item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_purchase`
--
ALTER TABLE `tbl_purchase`
  ADD CONSTRAINT `tbl_purchase_ibfk_1` FOREIGN KEY (`supid`) REFERENCES `tbl_supply` (`supid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_purchase_details`
--
ALTER TABLE `tbl_purchase_details`
  ADD CONSTRAINT `tbl_purchase_details_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `tbl_material` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_purchase_details_ibfk_2` FOREIGN KEY (`pur_id`) REFERENCES `tbl_purchase` (`pur_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
