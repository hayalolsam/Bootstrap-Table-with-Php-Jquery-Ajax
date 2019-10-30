-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Eki 2019, 22:48:30
-- Sunucu sürümü: 5.6.15-log
-- PHP Sürümü: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `ulutable`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone_number`, `email`) VALUES
(1, 'Ali', 'Ula', '555-55', 'ulusanyazilim@gmail.com'),
(2, 'Ahmet', 'Ulu', '055348', 'ulusan@gil.com'),
(3, 'Asda', 'Asd', '055348', 'asd@asd.com'),
(4, 'Yreyerty', 'Ertert', '456456', 'werw@wer.com'),
(5, '546456', '456456', '3453455345', '546456@345.com'),
(6, '435', 'Ertert', '5654yh54h', 'wer@sdf.com'),
(7, 'Asd', 'Asd', 'asd', 'asd'),
(8, 'Ert', 'Ert', 'ert', 'ert'),
(9, 'Rty', 'Rty', 'rty', 'rty'),
(10, 'Tyu', 'Tyu', 'tyu', 'tyu'),
(11, 'Yuı', 'Yuı', 'yuı', 'yuı'),
(12, 'Tyu', 'Tyu', 'tyu', 'tyuu55'),
(13, '678678', '678678', '8678678', '67867'),
(14, '5474h5h5h', '45h', '45h', '45h'),
(15, '56j5', '6j56jj', '56j6', '56j56j'),
(16, '56756', 'U65u56u', '56u56u', '65u56u'),
(17, '23r23', 'R23r23', 'r23r3r', 'r23r23'),
(18, '23r23', 'R23r23', 'r23r3r', 'r23r23'),
(19, '6786', '867867', '8678678', '867867'),
(20, '89p89p', '89p89p', '89p89p', '89p89p'),
(21, '89p89p', '89p89p', '89p89p', '89p89p4238'),
(22, 'Ggg323gg23', '23gg2g23g23g', '23g23g3g23g', '23g23g23g23g'),
(23, '54j54j', '5j45j454j54j', '54j5j54j54j', '5j4j45j54j54j'),
(24, '7k667k67k', '7k67k67k67k7k', '7k67k67k', 'kk67k7k6'),
(25, '78l87l78l', '78l78l78l', '78l78l', '7878l78l'),
(26, '78l87l78l', '78l78l78l', '78l78l', '7878l78l'),
(27, '8ö', 'Öö8öö8öö88ö', '8ö', '788ö8ö');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
