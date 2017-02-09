-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2017 at 06:34 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: db_chantry
--

-- --------------------------------------------------------

--
-- Table structure for table tbl_imgs
--

CREATE TABLE tbl_imgs (
  img_id smallint(4) UNSIGNED NOT NULL,
  img_title varchar(250) NOT NULL,
  img_src varchar(150) NOT NULL DEFAULT 'default.jpg',
  img_thumb varchar(150) NOT NULL DEFAULT 'default-thumb.jpg',
  img_mobile varchar(250) NOT NULL DEFAULT 'default.jpg'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_imgs
--

INSERT INTO tbl_imgs (img_id, img_title, img_src, img_thumb, img_mobile) VALUES
(1, 'Peerless II Boat Tour', 'peerless_II_tour.jpg', 'peerless_II_tour_thumb.jpg', 'peerless_II_tour_mobile.jpg'),
(2, 'Chantry Island - Aerial View 1', 'chantry_island_aeiral_1.jpg', 'chantry_island_aeiral_1_thumb.jpg', 'chantry_island_aeiral_1_mobile.jpg'),
(3, 'Chantry Island', 'chantry_island_1.jpg', 'chantry_island_1_thumb.jpg', 'chantry_island_1_mobile.jpg'),
(4, 'Peerless II', 'peerless_II_web.jpg', 'peerless_II_web_thumb.jpg', 'peerless_II_web_mobile.jpg'),
(5, 'Chantry Island 3', 'chantry_island_3.jpg', 'chantry_island_3_thumb.jpg', 'chantry_island_3_mobile.jpg'),
(6, 'Chantry Island Bedroom', 'bedroom1.jpg', 'bedroom1_thumb.jpg', 'bedroom1_mobile.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table tbl_imgs
--
ALTER TABLE tbl_imgs
  ADD PRIMARY KEY (img_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tbl_imgs
--
ALTER TABLE tbl_imgs
  MODIFY img_id smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
