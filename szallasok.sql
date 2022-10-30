-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2017. Jan 18. 18:07
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
-- Tábla szerkezet ehhez a táblához `szallasok`
--

CREATE TABLE `szallasok` (
  `Kerulet` int(5) NOT NULL,
  `Hotel neve` varchar(20) NOT NULL,
  `Csillagok szama` int(2) NOT NULL,
  `Ara` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `szallasok`
--

INSERT INTO `szallasok` (`Kerulet`, `Hotel neve`, `Csillagok szama`, `Ara`) VALUES
(3, 'Alfa Art', 3, 9566),
(1, 'art''otel budapest', 4, 21200),
(1, 'Best Western Orion', 3, 16373),
(1, 'Carlton Budapest', 4, 14953),
(2, 'Csaszar', 3, 12069),
(1, 'Hilton Budapest', 5, 35418),
(1, 'Prestige Budapest', 4, 34359),
(1, 'Victoria Budapest', 4, 27432);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `szallasok`
--
ALTER TABLE `szallasok`
  ADD PRIMARY KEY (`Hotel neve`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
