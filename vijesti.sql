-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 11:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elconfi`
--

-- --------------------------------------------------------

--
-- Table structure for table `vijesti`
--

CREATE TABLE `vijesti` (
  `id` int(11) NOT NULL,
  `datum` date NOT NULL,
  `naslov` varchar(30) NOT NULL,
  `sazetak` varchar(100) NOT NULL,
  `clanak` text NOT NULL,
  `slika` varchar(124) NOT NULL,
  `kategorija` varchar(32) NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vijesti`
--

INSERT INTO `vijesti` (`id`, `datum`, `naslov`, `sazetak`, `clanak`, `slika`, `kategorija`, `arhiva`) VALUES
(10, '0000-00-00', 'retretertreterter', 'tertretertertertertgdfdgregergreger', 'gergregregergergregregregergerg', '', 'Hrvatska', 0),
(14, '0000-00-00', 'mortadela je dostigla', 'zasto svaki dan mortadela ide do 10kn', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at sollicitudin risus. Ut iaculis eros at dolor gravida ullamcorper. Donec malesuada augue eget dui fermentum, in malesuada sapien consectetur. Phasellus placerat felis ac ipsum aliquam, nec mollis eros finibus. Quisque non metus dolor. Suspendisse sed leo lacinia, ultrices turpis sit amet, maximus lectus. In mollis leo non vestibulum suscipit. Donec vel sapien id orci venenatis dictum at vel enim. Donec lobortis odio mi, eget semper ex malesuada et. Phasellus venenatis eget nibh vitae eleifend. Nullam elementum lacinia quam, a egestas neque dignissim at. Proin fringilla nulla sem, non vulputate diam tristique consequat. In hac habitasse platea dictumst.\r\n\r\nMaecenas ac eleifend metus, ut placerat nisl. Pellentesque tempor enim id dui interdum tempus. Curabitur venenatis finibus mi eget iaculis. Maecenas ultrices elit id leo feugiat suscipit. Curabitur molestie id magna sed porttitor. Praesent mattis sem rhoncus tortor ornare lobortis. Curabitur id nunc lorem. Nullam sit amet mauris vel leo venenatis ultricies eget vitae justo. Maecenas sollicitudin metus sem, sit amet ultricies urna dapibus vel. Nulla sit amet venenatis massa. Duis quis nunc non erat luctus dictum eu id est. Nulla eget suscipit neque. Integer nisl nisl, dictum sagittis accumsan eget, placerat eleifend enim.\r\n\r\nNam ornare at erat at convallis. Nullam at lacus ut turpis lobortis ultrices. Proin aliquet dapibus velit ac cursus. Curabitur quis lacus non metus ultrices accumsan. Maecenas id felis consequat, pulvinar augue sed, tincidunt nisi. Sed quis ultrices enim. Aliquam ornare erat eget purus gravida, a lobortis dui hendrerit. Pellentesque pretium vulputate odio ut laoreet. Nullam egestas, enim at tincidunt pellentesque, magna urna pretium purus, non egestas erat urna ac massa.\r\n\r\nDonec mauris quam, accumsan vitae aliquet vitae, elementum eu diam. Morbi consectetur at enim ut ultrices. Mauris ut massa et urna elementum fringilla et non felis. Quisque sit amet velit non lectus pretium ultricies. Duis rutrum felis sit amet sem suscipit ultricies eget non quam. Curabitur dapibus bibendum est, at pulvinar leo semper quis. Vestibulum in consectetur ligula, at dictum urna.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis semper vel velit nec posuere. Vestibulum sit amet mauris odio. Donec varius tempus purus vitae eleifend. Quisque venenatis nibh a nunc tincidunt molestie. Aliquam ut vehicula risus. Sed velit augue, euismod ac dui et, tempor mattis neque. Integer et metus sem. Sed rhoncus vulputate diam, vitae tincidunt felis. Sed vestibulum neque sed quam iaculis, quis ultrices sapien cursus. Duis faucibus tristique lorem at tincidunt. ', 'baze8.png', 'Croazia', 0),
(15, '2024-06-12', 'Teta mirka je u bakmaza', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor aliquet ligula id faucibus.', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor aliquet ligula id faucibus. Duis laoreet metus non libero pellentesque vestibulum. Cras dapibus tortor lorem, in feugiat lacus iaculis at. Morbi ultricies eu nibh in vestibulum. Aliquam erat volutpat. Donec pellentesque efficitur tortor a dictum. Pellentesque lacinia est nisi, nec finibus neque aliquam mollis. Praesent sollicitudin blandit nisi sit amet auctor. Nullam nec efficitur arcu. Phasellus feugiat fringilla tellus, nec cursus nunc fermentum vitae. Nam velit orci, pellentesque sit amet convallis eget, consectetur vitae lacus. Cras at rhoncus velit, at consequat erat. In vitae bibendum ligula. Morbi nec velit rutrum, accumsan quam vitae, consectetur est. Quisque a auctor nisi.\r\n\r\nDuis a orci malesuada, venenatis nibh eu, commodo urna. Sed et efficitur sem. Ut elementum, ipsum vitae gravida interdum, dui augue egestas mauris, quis auctor odio quam eget mi. Nam facilisis mollis dignissim. Cras augue libero, aliquet a nunc nec, imperdiet suscipit nisl. Nullam sed ex nisl. Phasellus ac finibus odio. Pellentesque in fringilla sem. Praesent eu leo ante. Vestibulum ut est at nisi sollicitudin facilisis ut at augue. Integer et urna rutrum, aliquam nunc et, ultrices urna. Donec quis diam lorem.\r\n\r\nMauris efficitur metus leo, eu mollis dolor posuere quis. Suspendisse potenti. Ut et mi sit amet ipsum tristique fermentum. Donec aliquam augue quis maximus consequat. Cras at sodales magna. Mauris dapibus laoreet arcu eget blandit. Ut vitae imperdiet nulla. Duis lacus neque, aliquam suscipit urna a, tincidunt fermentum nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce dignissim rutrum velit vitae euismod. Aliquam sit amet ante ac purus mollis laoreet at id leo.\r\n\r\nVestibulum risus metus, gravida vel justo vel, congue ullamcorper nisl. Fusce eget consequat tortor. Nullam non vehicula sapien. Suspendisse aliquet nunc eget ipsum semper fringilla. Aenean sit amet ullamcorper metus, sed efficitur ligula. Quisque accumsan felis non ornare congue. Aenean at orci rutrum, dictum ante in, sagittis leo. Fusce eget risus bibendum, accumsan est bibendum, fermentum enim. Vivamus mollis libero ultricies sem pellentesque, fermentum porttitor quam vehicula. Nulla a mauris purus. Pellentesque a ex ultricies, porttitor quam vitae, blandit purus. Curabitur elementum non neque non ultrices. Vestibulum tristique urna odio, eu finibus erat semper in.\r\n\r\nDuis congue diam dolor, et pulvinar turpis dignissim non. Nulla efficitur velit ut venenatis cursus. Integer hendrerit hendrerit dignissim. Integer nibh ligula, rhoncus quis nisl eu, posuere euismod felis. Mauris accumsan massa ut nibh consequat, vitae lacinia nunc accumsan. Vestibulum convallis odio et lacinia maximus. Phasellus ullamcorper justo vitae tellus egestas, et laoreet nibh dapibus. Nunc id urna elementum, auctor mi vitae, placerat est. Duis fringilla tempor volutpat. ', 'lab10.png', 'Nautico', 0),
(16, '0000-00-00', 'Test je u tijeku', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempor aliquet ligula id faucibus. Duis laoreet metus non libero pellentesque vestibulum. Cras dapibus tortor lorem, in feugiat lacus iaculis at. Morbi ultricies eu nibh in vestibulum. Aliquam erat volutpat. Donec pellentesque efficitur tortor a dictum. Pellentesque lacinia est nisi, nec finibus neque aliquam mollis. Praesent sollicitudin blandit nisi sit amet auctor. Nullam nec efficitur arcu. Phasellus feugiat fringilla tellus, nec cursus nunc fermentum vitae. Nam velit orci, pellentesque sit amet convallis eget, consectetur vitae lacus. Cras at rhoncus velit, at consequat erat. In vitae bibendum ligula. Morbi nec velit rutrum, accumsan quam vitae, consectetur est. Quisque a auctor nisi.\r\n\r\nDuis a orci malesuada, venenatis nibh eu, commodo urna. Sed et efficitur sem. Ut elementum, ipsum vitae gravida interdum, dui augue egestas mauris, quis auctor odio quam eget mi. Nam facilisis mollis dignissim. Cras augue libero, aliquet a nunc nec, imperdiet suscipit nisl. Nullam sed ex nisl. Phasellus ac finibus odio. Pellentesque in fringilla sem. Praesent eu leo ante. Vestibulum ut est at nisi sollicitudin facilisis ut at augue. Integer et urna rutrum, aliquam nunc et, ultrices urna. Donec quis diam lorem.\r\n\r\nMauris efficitur metus leo, eu mollis dolor posuere quis. Suspendisse potenti. Ut et mi sit amet ipsum tristique fermentum. Donec aliquam augue quis maximus consequat. Cras at sodales magna. Mauris dapibus laoreet arcu eget blandit. Ut vitae imperdiet nulla. Duis lacus neque, aliquam suscipit urna a, tincidunt fermentum nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce dignissim rutrum velit vitae euismod. Aliquam sit amet ante ac purus mollis laoreet at id leo.\r\n\r\nVestibulum risus metus, gravida vel justo vel, congue ullamcorper nisl. Fusce eget consequat tortor. Nullam non vehicula sapien. Suspendisse aliquet nunc eget ipsum semper fringilla. Aenean sit amet ullamcorper metus, sed efficitur ligula. Quisque accumsan felis non ornare congue. Aenean at orci rutrum, dictum ante in, sagittis leo. Fusce eget risus bibendum, accumsan est bibendum, fermentum enim. Vivamus mollis libero ultricies sem pellentesque, fermentum porttitor quam vehicula. Nulla a mauris purus. Pellentesque a ex ultricies, porttitor quam vitae, blandit purus. Curabitur elementum non neque non ultrices. Vestibulum tristique urna odio, eu finibus erat semper in.\r\n\r\nDuis congue diam dolor, et pulvinar turpis dignissim non. Nulla efficitur velit ut venenatis cursus. Integer hendrerit hendrerit dignissim. Integer nibh ligula, rhoncus quis nisl eu, posuere euismod felis. Mauris accumsan massa ut nibh consequat, vitae lacinia nunc accumsan. Vestibulum convallis odio et lacinia maximus. Phasellus ullamcorper justo vitae tellus egestas, et laoreet nibh dapibus. Nunc id urna elementum, auctor mi vitae, placerat est. Duis fringilla tempor volutpat. ', 'icon2.png', 'sport', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vijesti`
--
ALTER TABLE `vijesti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `naslov` (`naslov`),
  ADD UNIQUE KEY `naslov_2` (`naslov`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vijesti`
--
ALTER TABLE `vijesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
