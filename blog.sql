-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Oca 2023, 11:09:50
-- Sunucu sürümü: 8.0.30
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makaleler`
--

CREATE TABLE `makaleler` (
  `id` int NOT NULL,
  `baslik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `makaleler`
--

INSERT INTO `makaleler` (`id`, `baslik`) VALUES
(1, 'Atlama'),
(2, 'Kurtarma yüzücülüğü'),
(3, 'Senkronize atlama'),
(4, 'Senkronize yüzme'),
(5, 'Şnorkelle dalış'),
(6, 'Yüzme'),
(7, 'Kano'),
(8, 'Picigin'),
(9, 'Sörf'),
(10, 'Skimboard'),
(11, 'Yatçılık'),
(12, 'Wakesurfing'),
(13, 'Akuatlon'),
(14, 'Serbest dalış'),
(15, 'Metasploit'),
(16, 'Sportif dalış'),
(17, 'Sualtı buz hokeyi'),
(18, 'Sualtı ragbisi'),
(19, 'Uçurtma sörfü'),
(27, 'balık tutma'),
(28, 'kaşık atma'),
(29, 'tüplü dalış'),
(30, 'kurbağ dalışı'),
(31, 'su futbolu'),
(32, 'su boleybolu');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `makaleler`
--
ALTER TABLE `makaleler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `makaleler`
--
ALTER TABLE `makaleler`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
