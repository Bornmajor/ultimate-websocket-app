-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 06:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ultimate_websockets`
--

-- --------------------------------------------------------

--
-- Table structure for table `wbsockets_messages`
--

CREATE TABLE `wbsockets_messages` (
  `msg_id` int(11) NOT NULL,
  `msg_content` text NOT NULL,
  `recipient_usr_id` varchar(255) NOT NULL,
  `sender_usr_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wbsockets_messages`
--

INSERT INTO `wbsockets_messages` (`msg_id`, `msg_content`, `recipient_usr_id`, `sender_usr_id`) VALUES
(1, 'Hello', 'RzDybO3jTfMgFec ', 'IUhjxBV14DPWFk6'),
(2, 'Hello 2', 'IUhjxBV14DPWFk6', 'RzDybO3jTfMgFec'),
(3, 'How are you?', 'RzDybO3jTfMgFec ', 'IUhjxBV14DPWFk6'),
(4, 'How is siz?', 'RzDybO3jTfMgFec ', 'IUhjxBV14DPWFk6'),
(23, 'am good and you', 'IUhjxBV14DPWFk6', 'RzDybO3jTfMgFec'),
(24, 'am fine thank you', 'RzDybO3jTfMgFec', 'IUhjxBV14DPWFk6'),
(25, 'how about my siz', 'IUhjxBV14DPWFk6', 'RzDybO3jTfMgFec'),
(41, 'Hey', 'RzDybO3jTfMgFec', 'xLUdywjZGJs2aRQ'),
(42, 'Hello', 'xLUdywjZGJs2aRQ', 'RzDybO3jTfMgFec'),
(43, 'Am testing this new websocket feature its cool', 'RzDybO3jTfMgFec', 'xLUdywjZGJs2aRQ'),
(44, 'woow great', 'xLUdywjZGJs2aRQ', 'RzDybO3jTfMgFec'),
(45, 'hey', 'xLUdywjZGJs2aRQ', 'RzDybO3jTfMgFec');

-- --------------------------------------------------------

--
-- Table structure for table `wbsockets_users`
--

CREATE TABLE `wbsockets_users` (
  `usr_id` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `profile_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wbsockets_users`
--

INSERT INTO `wbsockets_users` (`usr_id`, `mail`, `username`, `profile_url`) VALUES
('IUhjxBV14DPWFk6', 'osbornmangaro@gmail.com', 'BoldLion179', 'avatar_7.png'),
('RzDybO3jTfMgFec', 'osbornmaja@gmail.com', 'CleverPhoenix774', 'avatar_9.png'),
('xLUdywjZGJs2aRQ', 'oscarmuye@gmail.com', 'SwiftWolf532', 'avatar_4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wbsockets_messages`
--
ALTER TABLE `wbsockets_messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `wbsockets_users`
--
ALTER TABLE `wbsockets_users`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wbsockets_messages`
--
ALTER TABLE `wbsockets_messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
