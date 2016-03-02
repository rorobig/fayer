-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2016 at 04:49 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fayer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(255) NOT NULL,
  `u_id` int(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `cel` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `u_id`, `u_name`, `u_pass`, `l_name`, `f_name`, `email`, `adress`, `country`, `tel`, `cel`) VALUES
(14, 1996210104, 'roro', '$2y$10$l8D2RKkVDkia49V8cwtHw.706865CIdW/rN7K7GJurBSrgsjSFw.O', 'kwidama', 'rocheandley', 'rorobig@live.com', 'kaya aranja 191', 'CW', '8696329', '5163196');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE IF NOT EXISTS `employer` (
  `id` int(255) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `e_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `description`) VALUES
(1, '03 Maart', '2nd Quartar Report Cards'),
(2, ' 20 Maart ', 'ES Assembly'),
(3, '29 Maart', 'Finals');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `forum_id` int(255) NOT NULL,
  `forum_fn` varchar(255) NOT NULL,
  `forum_ln` varchar(255) NOT NULL,
  `forum_email` varchar(255) NOT NULL,
  `forum_country` varchar(255) NOT NULL,
  `forum_phone` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`forum_id`, `forum_fn`, `forum_ln`, `forum_email`, `forum_country`, `forum_phone`) VALUES
(5, 'papichulo', 'chlito', 'cheeto@boy.com', 'AW', '7762358'),
(17, 'test', 'test', '@ff', 'AF', 'rf'),
(27, 'Alvaro', 'Alberto', 'aalberto22@gmail.com', 'AF', '22222222'),
(28, 'ew', 'ewe', 'ewqe', 'AS', 'eqwe'),
(29, 'weqwe', 'eqwqw', 'wqeqw', 'AS', 'qwe'),
(30, 'q', 'sqsqs', 'qs', 'AS', 'qsqs'),
(31, '*', 'sqsqs', 'qs', 'AS', 'qsqs'),
(32, 'select * from customer;', 'sqsqs', 'qs', 'AS', 'qsqs'),
(33, 'rtyui56789', 'dfghjkl', 'dfghj', 'AF', 'sdfghjkl'),
(34, 'rtyui56789', 'dfghjkl', 'dfghj', 'AF', 'sdfghjkl');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `grade_id` int(255) NOT NULL,
  `vak_id` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `cijfer` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grade_id`, `vak_id`, `customer_id`, `cijfer`) VALUES
(0, 1, 2, 5),
(2, 2, 2, 6),
(3, 3, 2, 8),
(4, 4, 2, 6),
(5, 5, 2, 7),
(6, 6, 2, 6),
(7, 7, 2, 9),
(8, 1, 14, 7),
(9, 2, 14, 9),
(10, 3, 14, 8),
(12, 5, 14, 7),
(13, 7, 14, 9),
(14, 4, 14, 6),
(15, 6, 14, 7);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(255) NOT NULL,
  `order_date` int(255) NOT NULL,
  `employee_id` int(255) DEFAULT NULL,
  `shipped_date` varchar(255) DEFAULT NULL,
  `shipped_uid` int(255) DEFAULT NULL,
  `order_total` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL,
  `txn_id` varchar(19) NOT NULL,
  `payer_email` varchar(75) NOT NULL,
  `mc_gross` float(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `od_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `cc` varchar(11) NOT NULL,
  `cv` varchar(11) NOT NULL,
  `month` varchar(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `order_total` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`od_id`, `fname`, `lname`, `email`, `pnumber`, `cc`, `cv`, `month`, `year`, `adress`, `order_date`, `order_total`, `status`) VALUES
(36, 'rocheandley', 'kwidama', 'rorobig@live.com', '59995163196', '312', '3231', 'Jan', '2016', '313', '2016-01-10', '53.43', 'Order placed'),
(37, 'rocheandley', 'kwidama', 'rorobig@live.com', '59995163196', '123', '123', 'Jan', '2016', 'kaya aranja 191', '2016-01-10', '53.43', 'Order placed'),
(38, 'rocheandley', 'kwidama', 'rorobig@live.com', '59995163196', '132', '31', 'Jan', '2016', 'r23', '2016-01-10', '63.34', 'Order placed'),
(39, 'rocheandley', 'kwidama', 'rorobig@live.com', '59995138780', '123', '123', 'Jan', '2016', 'le21', '2016-01-10', '63.34', 'Order placed'),
(40, 'Roro', 'Kwk', 'Rorobig@live.com', '59995233338', '123', '123', 'Jan', '2016', 'Hsjs', '2016-01-10', '53.43', 'Order placed'),
(41, 'sontje', 'bruken', 'sontjebruken@live.com', '6957066', '29639183', '123', 'Jan', '2016', 'bandabou', '2016-01-22', '53.43', 'Order placed'),
(42, 'sontje ', 'bruken', 'nieylison_brunken@hotmail.com', '5163196', '21366821', '123', 'Jan', '2016', 'bandabou', '2016-01-22', '53.43', 'Order placed'),
(43, 'rocheandley', 'kwidama', 'rorobig@live.com', '33195', '1234124', '312', 'Jan', '2016', 'kaya aranja 191', '2016-01-23', '53.43', 'Order placed'),
(44, 'ok', 'ok', 'ok@ok.ok', '123', '123', '123', 'Jan', '2016', 'ok', '2016-01-23', '52.51', 'Order placed'),
(45, 'oki', 'oki', 'ok@oki.ok', '123', '123', '123', 'Jan', '2016', 'ok', '2016-01-23', '52.51', 'Order placed'),
(46, 'lol', 'lol', 'lol@lol.lol', '123', '312', '321', 'Jan', '2016', 'lol', '2016-01-23', '53.43', 'Order placed'),
(47, 'lol', 'lol', 'lol@lol.lol', '123', '312', '321', 'Jan', '2016', 'lol', '2016-01-23', '52.51', 'Order placed'),
(48, 'test', 'test', 'test@test.test', '13', '123', '123', 'Jan', '2016', 'test', '2016-01-23', '52.51', 'Order placed'),
(49, 'ok', 'ok', 'ok@ok.ok', '13', '3123', '312', 'Jan', '2016', 'ok', '2016-01-23', '52.51', 'Order placed'),
(50, 'ok', 'ok', 'ok@ok.ok', '13', '132', '321', 'Jan', '2016', 'test', '2016-01-23', '52.51', 'Order placed'),
(51, 'rqwr', 'rqw', 'ok@ok.ok', '123', '123', '3123', 'Jan', '2016', 'ok', '2016-01-23', '52.51', 'Order placed'),
(52, 'ewq', 'qwe', 'ok@ok.ok', '123', '123', '13', 'Jan', '2016', 'ok', '2016-01-23', '53.43', 'Order placed'),
(53, 'ewq', 'qwe', 'ok@ok.ok', '123', '123', '13', 'Jan', '2016', 'ok', '2016-01-23', '53.43', 'Order placed'),
(54, 'ok', 'ok', 'ok@ok.ok', '123', '13', '31', 'Jan', '2016', 'ok', '2016-01-23', '52.51', 'Order placed'),
(55, 'e', 'ew', 'we@ew.com', '312', '32', '321', 'Jan', '2016', 'eqw', '2016-01-23', '52.51', 'Order placed'),
(56, 'ok', 'ok', 'ok@ok.ok', '3', '31', '31', 'Jan', '2016', 'ok', '2016-01-23', '52.51', 'Order placed'),
(57, 'test', 'test', 'test@test.test', '13', '132', '123', 'Jan', '2016', 'test', '2016-01-23', '52.51', 'Order placed'),
(58, 'roro', 'roro', 'ororo@oko.com', '12313', '41111111111', '123', 'Jan', '2016', 'rkok', '2016-01-23', '52.51', 'Order placed'),
(59, 'ok', 'ok', 'ok@ok.ok', '123', '41111111111', '132', 'Jan', '2016', 'ok', '2016-01-23', '52.51', 'Order placed'),
(60, 'ok', 'ok', 'ok@ok.ok', '231', '13', '231', 'Jan', '2016', 'ok', '2016-01-23', '52.51', 'Order placed'),
(61, 'ok', 'ok', 'ok@ok.ok', '3123', '133', '123', 'Jan', '2016', '123', '2016-01-23', '52.51', 'Order placed'),
(62, 'ok', 'ok', 'ok@ok.ko', '123', '55000000000', '323', 'Jan', '2016', 'ok', '2016-01-23', '52.51', 'Order placed'),
(63, 'eqw', 'eqw', 'rorobig@live.com', '312', '41111111111', '123', 'Jan', '2017', 'qew', '2016-02-03', '63.34', 'Order placed'),
(64, 'hello', 'bye', 'hello@bye.com', '59995163196', '55000000000', '321', 'Feb', '2019', 'whathed', '2016-02-20', '63.34', 'Order placed'),
(65, 'hello', 'bye', 'hello@bye.com', '59995163196', '55000000000', '321', 'Feb', '2019', 'whathed', '2016-02-20', '63.34', 'Order placed'),
(66, 'ew', 'ew', 'we@ew.com', '59995163196', '55000000000', '231', 'Jan', '2016', '2e', '2016-02-20', '63.34', 'Order placed'),
(67, 'ew', 'ew', 'we@ew.com', '59995221807', '55000000000', '231', 'Jan', '2016', '2e', '2016-02-20', '63.34', 'Order placed');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `p_desc` varchar(255) NOT NULL,
  `p_price` double(10,2) NOT NULL,
  `p_quantity` int(255) NOT NULL,
  `p_info` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `p_name`, `image`, `p_desc`, `p_price`, `p_quantity`, `p_info`, `link`) VALUES
(1, 'Introduction to programing', 'img/pro.jpg', '', 53.43, 0, '', 'introduction_to_programing'),
(2, 'Introduction to MS Outlook', 'img/outlook.jpg', '', 63.34, 0, '', 'introduction_to_ms_outlook'),
(3, 'Introduction to javascript', 'img/javascript.png', '', 52.51, 0, '', 'introduction_to_javascript'),
(4, 'Advanced web programming ', 'img/et.jpg', '', 74.23, 0, '', 'advanced_web_programming ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_email`) VALUES
(1, 'roro', '$2y$10$BoSRyTP9Fur4zPsmq8QyI.2efKydiYqKP5OGI8bPUJc8oMnPirKr.', 'roro@gmail.com'),
(2, 'test', '$2y$10$cDQOE45vOSlrUh2t7ES5fOYwg3AVR7nrrpTgnSOHfIKbBut6SRxUG', 'test@gmail.com'),
(3, 'sharvi@gmail.com', '$2y$10$ORai5k63B45uZFbQdGoA1OjI26VINsdbeiB1WBqYv74TV0nspCpKS', ''),
(4, 'sharvi@gmail.com', '$2y$10$JA2Y3UzuROmfQPyoLhtzFeBo4Y3wBI8w3K.vf8HDQ04fsOEDIe0vy', ''),
(5, 'dea', '$2y$10$kHxiHTIrg7TvgYreFtLESu6DjSKlIHjtIrKWjOzBld.AsnbU2W042', 'dea@gmail.com'),
(11, 'test1', '$2y$10$k/92KC4k1QLiij./Ns1Tr.hLvs.h/ftN16H9VWsiQ2LgQQIkDMh2.', 'rorobig@hotmail.com'),
(12, 'test1', '$2y$10$XtYN7lHyuvYui8SkQf/VKes1qWHiPwXpUZHdPINZKIUqk3hPglYTO', 'rorobig@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(3, 'kd', 'kd', 'kd@hotmail.com', '$2y$10$xWoIhCEgbWnaXkhER3ZGPuPx8sXRQol9UU1DGXpTky4V8Z0w7PMzm');

-- --------------------------------------------------------

--
-- Table structure for table `vak`
--

CREATE TABLE IF NOT EXISTS `vak` (
  `vak_id` int(255) NOT NULL,
  `vak_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vak`
--

INSERT INTO `vak` (`vak_id`, `vak_name`) VALUES
(1, 'ioi'),
(2, 'engels'),
(3, 'Math'),
(4, 'python'),
(5, 'network'),
(6, 'datacommunication'),
(7, 'servicedesk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`forum_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `txn_id` (`txn_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `vak`
--
ALTER TABLE `vak`
  ADD PRIMARY KEY (`vak_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `forum_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `grade_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `od_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vak`
--
ALTER TABLE `vak`
  MODIFY `vak_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
