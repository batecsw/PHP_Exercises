-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 05, 2019 at 12:15 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

DROP TABLE IF EXISTS `directors`;
CREATE TABLE IF NOT EXISTS `directors` (
  `director_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `picture` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`director_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`director_id`, `first_name`, `last_name`, `date_of_birth`, `country`, `picture`) VALUES
(1, 'David', 'Fincher', '1962-06-28', 'USA', 'mugshots/david_fincher.jpg'),
(2, 'Lana', 'Wachowski', '1965-06-21', 'USA', 'mugshots/lana_wachowski.jpg'),
(3, 'George', 'Lucas', '1944-05-14', 'USA', 'mugshots/george_lucas.jpg'),
(4, 'Dan', 'Gilroy', '1959-06-24', 'USA', 'mugshots/dan_gilroy.jpg'),
(5, 'Ridley', 'Scott', '1937-11-30', 'UK', 'mugshots/ridley_scott.jpg'),
(6, 'Jim', 'Sheridan', '1949-02-06', 'Ireland', 'mugshots/jim_sheridan.jpg'),
(7, 'Steven', 'Spielberg', '1946-12-18', 'USA', 'mugshots/steven_spielberg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `movie_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `release_year` year(4) DEFAULT NULL,
  `views` int(11) NOT NULL,
  `directorID` int(11) DEFAULT NULL,
  `poster` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`movie_id`),
  KEY `directorID` (`directorID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `release_year`, `views`, `directorID`, `poster`) VALUES
(1, 'Fight Club', 1999, 4734845, 1, 'posters/fight_club.jpg'),
(2, 'Star Wars', 1979, 604423212, 3, 'posters/star_wars.jpg'),
(3, 'Nightcrawler', 2011, 12234550, 4, 'posters/nightcrawler.jpg'),
(4, 'The Matrix', 1999, 25000000, 2, 'posters/the_matrix.jpg'),
(5, 'ET', 1982, 23783476, 7, 'posters/et.jpg'),
(6, 'Jurassic Park', 2018, 87512512, 7, 'posters/jurassic_park.png'),
(7, 'Blade Runner', 1982, 75245000, 5, 'posters/blade_runner.jpg'),
(8, 'Jaws', 1975, 123445567, 7, 'posters/jaws.jpg'),
(9, 'Schindlers List', 1993, 345676897, 7, 'posters/schindlers_list.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
