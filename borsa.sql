-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Haz 2021, 08:24:59
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `borsa`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alicilar`
--

CREATE TABLE `alicilar` (
  `Id` int(11) NOT NULL,
  `Ad` varchar(20) NOT NULL,
  `TL` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `alicilar`
--

INSERT INTO `alicilar` (`Id`, `Ad`, `TL`) VALUES
(1, 'fethi@gmail.com', '5518'),
(2, 'admin@gmail.com', '8719');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doviz`
--

CREATE TABLE `doviz` (
  `Id` int(11) NOT NULL,
  `sahibi` varchar(20) NOT NULL,
  `miktari` int(11) NOT NULL,
  `cinsi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `doviz`
--

INSERT INTO `doviz` (`Id`, `sahibi`, `miktari`, `cinsi`) VALUES
(9, 'admin@gmail.com', 41, 'EURO'),
(11, 'fethi@gmail.com', 400, 'ABD DOLARI'),
(12, 'fethi@gmail.com', 250, 'EURO'),
(13, 'fethi@gmail.com', 50, 'PAKISTANI RUPEE');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `islemler`
--

CREATE TABLE `islemler` (
  `Id` int(11) NOT NULL,
  `alici` varchar(50) NOT NULL,
  `satici` varchar(20) NOT NULL,
  `urun` varchar(20) NOT NULL,
  `fiyat` decimal(10,0) NOT NULL,
  `komisyon` decimal(10,0) NOT NULL,
  `tarh` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `islemler`
--

INSERT INTO `islemler` (`Id`, `alici`, `satici`, `urun`, `fiyat`, `komisyon`, `tarh`) VALUES
(1, 'fethi@gmail.com', 'admin@gmail.com', 'pamuk', '41', '0', '2021-06-20'),
(2, 'fethi@gmail.com', 'admin@gmail.com', 'pamuk', '500', '5', '2021-06-20'),
(3, 'fethi@gmail.com', 'admin@gmail.com', 'pamuk', '500', '5', '2021-06-20'),
(4, 'fethi@gmail.com', 'admin@gmail.com', 'pamuk', '500', '5', '2021-06-20'),
(5, 'admin@gmail.com', 'admin@gmail.com', 'pamuk', '500', '5', '2021-06-20'),
(6, 'fethi@gmail.com', 'admin@gmail.com', 'arpa', '10', '0', '2021-06-21');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sartliislem`
--

CREATE TABLE `sartliislem` (
  `Id` int(11) NOT NULL,
  `urun_tip` varchar(11) NOT NULL,
  `fiyati` int(11) NOT NULL,
  `miktari` int(11) NOT NULL,
  `alici` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `sartliislem`
--

INSERT INTO `sartliislem` (`Id`, `urun_tip`, `fiyati`, `miktari`, `alici`) VALUES
(6, 'şeker', 25, 50, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `saticilar`
--

CREATE TABLE `saticilar` (
  `Id` int(11) NOT NULL,
  `Satici` varchar(20) NOT NULL,
  `Urun_cinsi` varchar(20) NOT NULL,
  `Miktar` varchar(20) NOT NULL,
  `Satis_Fiyati` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `saticilar`
--

INSERT INTO `saticilar` (`Id`, `Satici`, `Urun_cinsi`, `Miktar`, `Satis_Fiyati`) VALUES
(1, 'Ahmet@gmail.com', 'Arpa', '100', '40'),
(2, 'Ahmet@gmail.com', 'Arpa', '100', '42'),
(3, 'Mehmet@gmail.com', 'Arpa', '200', '43'),
(4, 'cengiz@gmail.com', 'Buğday', '200', '30'),
(5, 'hakan@gmail.com', 'Pamuk', '20', '40'),
(6, 'Melike@gmail.com', 'Yulaf', '60', '35'),
(24, 'fethi@gmail.com', 'şeker', '100', '8'),
(25, 'fethi@gmail.com', 'şeker', '100', '8');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uruntipi`
--

CREATE TABLE `uruntipi` (
  `Id` int(11) NOT NULL,
  `urun_tip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `uruntipi`
--

INSERT INTO `uruntipi` (`Id`, `urun_tip`) VALUES
(1, 'pamuk'),
(2, 'şeker'),
(3, 'arpa');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `Ad` varchar(45) NOT NULL,
  `Soyad` varchar(20) NOT NULL,
  `kullanici_adi` varchar(20) NOT NULL,
  `sifre` varchar(20) NOT NULL,
  `Tc` varchar(11) NOT NULL,
  `Telefon` varchar(11) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Adres` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`Ad`, `Soyad`, `kullanici_adi`, `sifre`, `Tc`, `Telefon`, `Email`, `Adres`) VALUES
('Alıcı', 'Satici', 'admin@gmail.com', 'root', '12345678963', '05434188796', 'borsaalici@gmail.com', 'İstanbul/turkiye'),
('can', 'aysan', 'Canaysan', '$2y$10$0jp7oSmpb1W3u', '12345678913', '05431584755', 'ugyt@outlook.com', 'izmir/aliağa öğretmen evi'),
('Cihan', 'adsız', 'cihanadsiz', '$2y$10$Hse7SdNbHIK3b', '12345678914', '05431584754', 'mehmet@gmail.com', 'Hatay dörtyol'),
('Mithat', 'Fethi', 'fethi@gmail.com', 'fethi', '12345678912', '05431584752', 'mithatfethi@gmaill.c', 'izmir/aliağa öğretmen evi'),
('Mehmet', 'Tahsin', 'mehmettahsin', '$2y$10$h0qTcTpCxfruw', '12345678912', '05431584752', 'mehmet@gmail.com', 'aaaaaaa'),
('Hasan', 'Suryıkan', 'suryıkanHasan', '$2y$10$bONHlOr9B/dHB', '12345678915', '05431584756', 'hasansuryikan@gmail.', 'İstanbul/Sarayburnu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ürünler`
--

CREATE TABLE `ürünler` (
  `Id` int(11) NOT NULL,
  `urun_tip` int(11) NOT NULL,
  `fiyati` decimal(10,0) NOT NULL,
  `miktari` int(11) NOT NULL,
  `sahibi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `alicilar`
--
ALTER TABLE `alicilar`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `doviz`
--
ALTER TABLE `doviz`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `islemler`
--
ALTER TABLE `islemler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `sartliislem`
--
ALTER TABLE `sartliislem`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `saticilar`
--
ALTER TABLE `saticilar`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `uruntipi`
--
ALTER TABLE `uruntipi`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`kullanici_adi`);

--
-- Tablo için indeksler `ürünler`
--
ALTER TABLE `ürünler`
  ADD PRIMARY KEY (`Id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `alicilar`
--
ALTER TABLE `alicilar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `doviz`
--
ALTER TABLE `doviz`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `islemler`
--
ALTER TABLE `islemler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `sartliislem`
--
ALTER TABLE `sartliislem`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `saticilar`
--
ALTER TABLE `saticilar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `uruntipi`
--
ALTER TABLE `uruntipi`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `ürünler`
--
ALTER TABLE `ürünler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
