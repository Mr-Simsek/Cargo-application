-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 25 May 2024, 12:33:10
-- Sunucu sürümü: 5.6.13
-- PHP Sürümü: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `kargo`
--
CREATE DATABASE IF NOT EXISTS `kargo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `kargo`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kargodetay`
--

CREATE TABLE IF NOT EXISTS `kargodetay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gondericiadi` varchar(255) NOT NULL,
  `gidecegiadres` varchar(255) NOT NULL,
  `tutar` decimal(10,2) NOT NULL,
  `resim` varchar(255) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Tablo döküm verisi `kargodetay`
--

INSERT INTO `kargodetay` (`id`, `gondericiadi`, `gidecegiadres`, `tutar`, `resim`, `tarih`) VALUES
(2, 'Mehmet Kaya', 'Gülbahar Mahallesi Lale Sokak No: 23 34840 Maltepe / İstanbul TÜRKİYE', '1000.00', 'resimler/pexels-alexander-f-ungerer-157458816-20025667.jpg', '2024-05-25 12:27:01'),
(3, 'Ayşe Demir', 'Atatürk Caddesi Menekşe Apartmanı No: 5 Daire: 12 35100 Konak / İzmir TÜRKİYE', '1500.00', 'resimler/pexels-curtis-adams-1694007-8186514.jpg', '2024-05-25 12:27:25'),
(4, 'Fatma Yılmaz', 'Bahçelievler Mahallesi Park Sokak No: 19 06000 Çankaya / Ankara TÜRKİYE', '1750.00', 'resimler/pexels-heyho-6394592.jpg', '2024-05-25 12:27:51'),
(5, 'Ali Özkan', 'Yenişehir Mahallesi İstiklal Caddesi No: 10 34200 Gaziantep Merkez / Gaziantep TÜRKİYE', '7500.00', 'resimler/pexels-heyho-6394607.jpg', '2024-05-25 12:28:16'),
(6, 'Zeynep Şahin', 'Merkez Mahallesi Papatya Sokak No: 8 54100 Adapazarı / Sakarya TÜRKİYE', '8500.00', 'resimler/pexels-fotoaibe-1571467.jpg', '2024-05-25 12:28:38'),
(7, 'Hasan Aydın', 'Cumhuriyet Mahallesi Güneş Sokak No: 45 21000 Sur / Diyarbakır TÜRKİYE', '8500.00', 'resimler/pexels-heyho-7214467.jpg', '2024-05-25 12:29:02'),
(8, 'Ahmet Yıldız', 'Çamlık Mahallesi Çiçek Sokak No: 15 34704 Kadıköy / İstanbul TÜRKİYE', '24000.00', 'resimler/indir.jpg', '2024-05-25 12:30:07');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `kullanici` varchar(30) NOT NULL,
  `sifre` varchar(30) NOT NULL,
  PRIMARY KEY (`kullanici`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici`, `sifre`) VALUES
('admin', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
