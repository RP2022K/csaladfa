-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Jan 17. 23:36
-- Kiszolgáló verziója: 10.4.27-MariaDB
-- PHP verzió: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `familytree`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `persons`
--

CREATE TABLE `persons` (
  `person_id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `birthdate` date NOT NULL,
  `birthplace` varchar(30) DEFAULT NULL,
  `deathdate` date DEFAULT NULL,
  `deathplace` varchar(30) DEFAULT NULL,
  `mother_id` int(11) DEFAULT NULL,
  `father_id` int(11) DEFAULT NULL,
  `child_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `persons`
--

INSERT INTO `persons` (`person_id`, `name`, `birthdate`, `birthplace`, `deathdate`, `deathplace`, `mother_id`, `father_id`, `child_id`) VALUES
(1, 'Kiss Elemér', '1900-01-01', 'Pápa', '1990-12-12', 'Budapest', NULL, NULL, NULL),
(2, 'Horváth Eleonóra', '1902-11-11', 'Pápa', '1999-01-01', 'Budapest', NULL, NULL, NULL),
(3, 'Kiss Kázmér', '1928-02-02', 'Pápa', '2001-03-03', 'Debrecen', 2, 1, NULL),
(4, 'Kiss Fecó', '1930-01-02', 'Pápa', '2010-10-10', 'Szolnok', 2, 1, NULL),
(5, 'Kiss Emőke', '1933-03-03', 'Pápa', '2020-02-04', 'Vasvár', 2, 1, NULL),
(6, 'Kiss Dani', '1950-05-05', 'Budapest', '0000-00-00', '', NULL, 3, NULL),
(7, 'Kiss Jenő', '1959-11-10', 'Budapest', '0000-00-00', '', NULL, 3, NULL),
(8, 'Nagy Lali', '1950-05-28', 'Pápa', '0000-00-00', '', 5, NULL, NULL);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`person_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `persons`
--
ALTER TABLE `persons`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
