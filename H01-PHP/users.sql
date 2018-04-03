-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2018 at 07:08 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `H01`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `message`, `username`, `password`) VALUES
(1, 'Alin', 'Pop', 'popalin@gmail.com', 'Duis nec sagittis nulla. Donec mollis enim ex, id auctor velit semper ac. Aliquam augue mi, dignissim ut neque in, hendrerit euismod justo. Sed ac odio nec turpis tincidunt sollicitudin. Vestibulum blandit nibh ex, non venenatis magna aliquet sed. Nulla facilisis a orci at fermentum. Fusce at purus quis ligula feugiat posuere non eu justo.', 'popalin', 'f53b78bc3088521eadcef54f4420b90d5b4d2943264f92d9ae63f2d5a6cfe9f9'),
(2, 'Marius', 'Vasile', 'vasile@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor varius orci eget vulputate. In commodo feugiat metus vitae malesuada. Ut non magna feugiat quam venenatis dignissim. Nam vitae orci ut dolor lobortis egestas. In eleifend facilisis ipsum non consequat. Donec sit amet blandit lectus. Sed quis justo lorem. Vestibulum a velit ligula. Vestibulum turpis mauris, interdum bibendum ullamcorper vitae, varius quis leo. Morbi nulla massa, mattis in mauris imperdiet, venenatis luctus lectus. Curabitur lacinia magna non venenatis sodales. Nam nec odio arcu.', 'vasile33', '67aba20eabacd83bdf5d641b684d20496f6bf090a408cbe47fdbbbe354330990'),
(4, 'Grigore', 'Buda', 'grig@yahoo.com', 'Duis eget facilisis est. Phasellus lacinia vehicula neque at mollis. Donec ut quam sit amet metus luctus fringilla. Curabitur aliquam ipsum vel est placerat feugiat. Etiam sodales fermentum porttitor. Cras malesuada fringilla libero, ac lacinia arcu euismod vel. Suspendisse lobortis consectetur felis, nec blandit neque vehicula ut. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent ac lacinia erat, faucibus imperdiet tortor.', '', ''),
(5, 'Alexandru', 'Zaharie', 'zaha_alex@gmail.com', 'Duis in risus eu tellus semper consequat at sed dui. Suspendisse non justo eros. Nunc eu purus diam. Quisque consequat rhoncus justo at semper. Nam mattis pharetra est sit amet pellentesque. Maecenas sed lectus sit amet massa varius iaculis vestibulum eu lectus. Nam egestas leo non diam sagittis tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent quam neque, sagittis eget hendrerit ut, pretium sit amet enim. Suspendisse blandit lorem eget eleifend pulvinar. Vivamus et enim eu velit laoreet suscipit.', '', ''),
(18, 'Ioana', 'Stan', 'ioana@ymail.com', '&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;', 'ioana', 'be971bfac3730baf4901b943dcee54f990ec6ca1e8f453cfd4f51238759917b7'),
(25, 'Ciprian', 'Tatar', 'tatar@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '', ''),
(35, 'Mihai', 'Stan', 'mihai@gmail.com', 'Integer auctor nulla vel ex rutrum aliquam. Aliquam gravida dui libero, sed posuere magna cursus ac. Etiam iaculis lacinia libero, ut convallis nibh sagittis placerat. Phasellus mollis, sem sagittis imperdiet gravida, lorem arcu viverra felis, sed lacinia tortor libero vel quam. Nulla ut odio velit. Phasellus scelerisque eros a ornare semper. Sed sed ultrices neque, at varius est.', '', ''),
(36, 'Vlad', 'Costel', 'costel@yahoo.com', 'Suspendisse potenti. Curabitur elementum mauris non pretium consectetur. Curabitur blandit id augue non lobortis. Aenean aliquam ornare nunc, vitae rutrum lacus euismod vitae. In et dui non est molestie rhoncus vel quis est. In tempor suscipit odio, congue consequat sem vulputate sit amet. Aenean sed sapien at leo sodales dapibus.', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
