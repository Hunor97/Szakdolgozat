-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2017. Már 21. 08:52
-- Kiszolgáló verziója: 10.1.16-MariaDB
-- PHP verzió: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `szallasok`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `foglalasok`
--

CREATE TABLE `foglalasok` (
  `Nev` varchar(30) NOT NULL,
  `mettol` varchar(20) NOT NULL,
  `meddig` varchar(20) NOT NULL,
  `Szemelyek szama` varchar(20) NOT NULL,
  `Etkezes` varchar(20) NOT NULL,
  `Agyak szama` varchar(15) NOT NULL,
  `Hotel neve` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `foglalasok`
--

INSERT INTO `foglalasok` (`Nev`, `mettol`, `meddig`, `Szemelyek szama`, `Etkezes`, `Agyak szama`, `Hotel neve`) VALUES
('peti', '032', '2016', 'ketto', 'reggeli', 'ketto', ''),
('hahahaha', '032', '2016', 'egy', 'reggeli es vacsora', 'egy', ''),
('bla', '5874', '7564', 'ketto', '3 etkezes', 'ketto', 'Hilton Budapest');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
