-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Sty 2022, 00:57
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `moja_strona`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `id` int(50) NOT NULL,
  `nazwa` varchar(50) DEFAULT NULL,
  `kategoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`id`, `nazwa`, `kategoria`) VALUES
(1, 'akcesoria', NULL),
(2, 'kubki', 'akcesoria'),
(3, 'odziez', NULL),
(4, 'bryloki', 'akcesoria'),
(5, 'magnes', 'akcesoria'),
(6, 'koszulka', 'odziez'),
(7, 'plecak', 'odziez'),
(31, '', ''),
(32, '', ''),
(33, '', ''),
(34, '', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `koszyk`
--

CREATE TABLE `koszyk` (
  `id` int(50) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `cena` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `koszyk`
--

INSERT INTO `koszyk` (`id`, `nazwa`, `cena`, `ilosc`) VALUES
(1, 'Falcon 9 FT', 5, 1),
(3, 'koszulka Starship', 60, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `page_list`
--

CREATE TABLE `page_list` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_content` text DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `page_list`
--

INSERT INTO `page_list` (`id`, `page_title`, `page_content`, `status`) VALUES
(1, 'ciekawostki', '<h2>Ciekawostki</h2>\r\n<div class=\"text_block\">\r\n<img src=\"img/3.jpg\" alt=\"3\">\r\n            <p>\r\n1. \"Aleja bohaterów\" na Bajkonurze w Kazachstanie, gdzie znajduje się wyrzutnia rakietowa, stanowi przejmujący pomnik kosmicznych misji z ostatnich 50 lat. Tradycja zaczęła się od Jurija Gagarina, pierwszego człowieka w kosmosie, kiedy to zasadził pierwsze\r\ndrzewko, zanim wyleciał w kosmos. Później każdy rosyjski kosmonauta, tez astronauci z innych krajów, przed startem z kosmodromu, tradycyjnie sadzili drzewka przy drodze prowadzącej do wyrzutni rakietowej. Do roku 2005 z Bajkonuru wystartowało ponad 1200\r\nrakiet kosmicznych.\r\n<br>\r\n<br> 2. 17 września 2018 r. Elon Musk ogłosił, że miliarder Yūsaku Maezawa został pierwszym turystą, który wykupił bilet na planowaną w 2023 r. wycieczkę wokół Księżyca rakietą Big Falcon Rocket. Wraz z nim poleci od sześciu do ośmiu artystów, którzy\r\npo powrocie będą mogli tworzyć dzieła sztuki zainspirowane tą podróżą. Musk nie zdradzi jaka była cena biletu.\r\n<br>\r\n<br> 3. I prędkość kosmiczna - określana także mianem prędkości kołowej, jest to prędkość, jaką należy nadać ciału, aby weszło na orbitę okołoziemską. <br> II prędkość kosmiczna - jest to prędkość jaką należy nadać ciału, aby mogło opuścić całkowicie\r\nZiemię.<br> III prędkość kosmiczna - jest to prędkość jaką należy nadać ciału, aby mogło opuścić Układ Słoneczny.<br> IV prędkość kosmiczna - jest to prędkość jaką należy nadać ciału, aby mogło opuścić naszą Galaktykę\r\n<br>\r\n<br> 4.InSight – bezzałogowy lądownik, który został wysłany na Marsa w ramach programu Discovery. Sonda ma przeprowadzić badania geofizyczne, w szczególności sejsmologiczne. Nazwa lądownika jest akronimem, pochodzi od Interior Exploration using Seismic\r\nInvestigations, Geodesy and Heat Transport (Eksploracja wnętrza przy użyciu badań sejsmicznych, geodezji i transportu ciepła).\r\n            </p>\r\n      </div>', 1),
(2, 'filmy', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/MpIa-lcFg8g\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/QtDowulMAbk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n', 1),
(3, 'galeria', '<img src=\"img/4.jfif\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/6.png\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/7.jpg\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/8.jfif\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/9.jpg\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/10.jpeg\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/11.jfif\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/12.jpg\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/13.jpeg\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/14.jpg\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/15.jpg\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">', 1),
(4, 'glowna', '     <h2>Loty kosmiczne</h2>\r\n      <div class=\"text_block\">\r\n<img src=\"img/1.jpg\" alt=\"1\">\r\n            <p>\r\n                loty kosmiczne, loty statków kosmicznych poza górne warstwy atmosfery Ziemi.\r\nObejmują loty satelitarne wokół Ziemi, loty ku innym ciałom Układu Słonecznego (planetom i ich satelitom, kometom, planetoidom), loty poza przestrzeń ziemskiego układu planetarnego (loty międzygwiazdowe). Wyniesienie statków w przestrzeń kosmiczną odbywa się na ogół za pomocą wielostopniowych rakiet nośnych, a w wypadku amerykańskich wahadłowców — dzięki napędowi odłączalnych rakiet wspomagających oraz ciągu głównego silnika statku (statek kosmiczny). W celu osiągnięcia danej trajektorii lotu kosmicznego niezbędne jest nadanie statkowi odpowiedniej prędkości (prędkość kosmiczna) i wykonanie manewru wprowadzenia na orbitę; minimalna prędkość warunkująca odbycie przez obiekt lotu kosmicznego po orbicie kołowej tuż przy powierzchni Ziemi, zwana pierwszą prędkością kosmiczną, wynosi 7,9 km/s; w praktyce, wskutek istnienia atmosfery, lot satelitarny wokół Ziemi może się odbywać dopiero na wysokości rzędu 150–200 km ponad jej powierzchnią. Okołoziemskie loty satelitarne, jak również loty ku Księżycowi, wiążące się z wejściem statku na orbitę okołoksiężycową (sztuczne satelity Księżyca) lub lądowaniem na jego powierzchni, były wykonywane zarówno przez statki automatyczne (bezzałogowe), jak i statki załogowe. Międzyplanetarne loty kosmiczne związane z penetracją przestrzeni międzyplanetarnej, zbliżeniem, lądowaniem lub wejściem na orbitę wokół innego niż Ziemia i Księżyc ciała Układu Słonecznego wymagały nadania statkowi prędkości przewyższającej drugą prędkość kosmiczną (11,2 km/s) i były dotąd wykonywane jedynie przez statki bezzałogowe (próbnik kosmiczny). Realizowane są bezzałogowe loty kosmiczne międzygwiazdowe poza Układ Słoneczny, wymagające nadania statkom kosmicznym prędkości przewyższającej trzecią prędkość kosmiczną. Dotychczas nie wykonywano lotów kosmicznych międzygalaktycznych, do czego potrzebne jest nadanie statkowi czwartej prędkości kosmicznej. Do znaczących osiągnięć ostatnich lat w zakresie międzynarodowej współpracy w dziedzinie lotów kosmicznych należy zbudowanie Międzynarodowej Stacji Kosmicznej.\r\n            </p>\r\n      </div>', 0),
(5, 'hist', '\r\n     <h2>Historia</h2>\r\n      <div class=\"text_block\">\r\n<img src=\"img/5.jfif\" alt=\"1\">\r\n            <p>Pierwsze realne propozycje podróży kosmicznych przypisywane są Konstantinowi Ciołkowskiemu. Jego najsłynniejsze dzieło, „Исследование мировых пространств реактивными приборами” (Eksploracja przestrzeni kosmicznej dzięki urządzeniom odrzutowym), została\r\nopublikowana w roku 1903, ale ta teoretyczna rozprawa nie była szeroko znana poza Rosją. Loty kosmiczne stały się możliwe z inżynierskiego punktu widzenia po publikacji Roberta Goddarda Metoda osiągania ekstremalnych wysokości, w której zaproponował szereg\r\nkonkretnych rozwiązań pozwalających na zasadnicze ulepszenie rakiet, m.in. przez zastosowanie dyszy de Lavala do silników rakietowych. Dysza ta pozwala na osiągnięcie naddźwiękowego wypływu gazu. Co najważniejsze, R. Goddard zbudował rakiety na paliwo\r\nciekłe i rozwiązał szereg związanych z nimi problemów (m.in. sterowanie rakietą). Prace jego miały wielki wpływ na Hermanna Obertha i Wernhera von Brauna, później kluczowe postaci z dziedziny lotów kosmicznych. Pierwszą rakietą, która dotarła do przestrzeni\r\nkosmicznej była niemiecka rakieta V2 w czasie lotu testowego 3 października 1942. 4 października 1957 Związek Radziecki wystrzelił Sputnika 1, który stał się pierwszym sztucznym satelitą na orbicie Ziemi. Pierwszym lotem załogowym była misja Wostok 1\r\n12 kwietnia 1961 – na pokładzie pojazdu znajdował się kosmonauta Jurij Gagarin, który dokonał jednego okrążenia wokół Ziemi. Rakiety pozostają jedynymi praktycznymi środkami dotarcia do przestrzeni kosmicznej. Inne technologie, takie jak scramjet, w dalszym\r\nciągu nie pozwalają na osiągnięcie prędkości orbitalnej.\r\n            </p>\r\n      </div>', 1),
(6, 'kontakt', '     <h2>Kontakt</h2>\r\n      <div class=\"text_block\">\r\n<p>\r\n<form action=\"mailto:myforms@mydomain.com\" enctype=\"text/plain\">\r\n    <label for=\"email\">Email:</label>\r\n    <input type=\"email\" id=\"email\" name=\"email\" size=\"30\">\r\n    <br><br>\r\n    <label for=\"text\">Temat</label>\r\n    <input type=\"text\" id=\"text\" name=\"temat\" size=\"30\">\r\n    <br><br>\r\n    <label for=\"text\">Treść wiadomości</label>\r\n    <input type=\"text\" id=\"text\" name=\"text\" size=\"150\">\r\n    <br><br>\r\n    <input type=\"submit\">\r\n    <input type=\"reset\">\r\n</form>\r\n     <h2>Kontakt</h2>\r\n      <div class=\"text-block\">\r\n            </p>\r\n      </div>', 1),
(7, 'lot_kosmiczny', '\r\n     <h2>Lot kosmiczny</h2>\r\n      <div class=\"text_block\">\r\n<img src=\"img/2.jpg\" alt=\"1\">\r\n            <p>\r\n                Lot kosmiczny jest stosowany w eksploracji kosmosu, a także w celach komercyjnych, takich jak turystyka kosmiczna czy komunikacja satelitarna. Inne niekomercyjne zastosowania lotów kosmicznych to obserwatoria kosmiczne, satelity wywiadowcze i inne typy satelitów obserwacyjnych.\r\n\r\n\r\n12 marca 2015 r., Sojuz TMA-14M na tle wschodu słońca nad Azją Środkową\r\nLot typowo zaczyna się odpaleniem rakiety nośnej, która dostarcza wstępnego ciągu do pokonania siły ciężkości i odrywa pojazd od powierzchni Ziemi. Ruch pojazdu w przestrzeni kosmicznej – zarówno bez zastosowania napędu jak i z nim – jest przedmiotem badań dyscypliny zwanej astrodynamiką. Niektóre pojazdy pozostają w przestrzeni kosmicznej na zawsze, niektóre spalają się w czasie ponownego wejścia w atmosferę, a inne docierają na powierzchnie planetarne lub księżycowe poprzez lądowanie lub zderzenie.\r\n            </p>\r\n      </div>', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `id` int(50) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `data_utworzenia` date NOT NULL,
  `data_modyfikacji` date NOT NULL,
  `data_wygasniecia` date NOT NULL,
  `cena_netto` int(50) NOT NULL,
  `vat` int(50) NOT NULL,
  `sztuk` int(50) NOT NULL,
  `dostepnosc` int(1) NOT NULL,
  `kategoria` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`id`, `nazwa`, `opis`, `data_utworzenia`, `data_modyfikacji`, `data_wygasniecia`, `cena_netto`, `vat`, `sztuk`, `dostepnosc`, `kategoria`) VALUES
(1, 'Falcon 9 FT', 'Brylok w ksztalcie rakiety Falcon 9 FT (Space X) o rozmiarach 2x1x0,5 cm.', '2022-01-17', '2022-01-17', '2022-12-30', 5, 17, 100, 1, 'akcesoria'),
(2, 'Starship', 'Brylok w ksztalcie rakiety Starship (SpaceX) o rozmiarach 2x1x0,5 cm.', '2022-01-17', '2022-01-17', '2022-12-30', 5, 17, 100, 1, 'akcesoria'),
(3, 'koszulka Starship', 'Koszulka w rozmiarze XL z nadrukiem rakiety Starship (SpaceX)', '2022-01-17', '2022-01-17', '2023-01-17', 60, 18, 24, 1, 'odziez'),
(4, 'koszulka Saturn V', 'Koszulka w rozmiarze XL z nadrukiem rakiety Saturn V (NASA)', '2022-01-17', '2022-01-17', '2023-01-17', 60, 18, 24, 1, 'odziez');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `admin`) VALUES
(1, 'root', '', 1),
(2, 'test', 'test', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `koszyk`
--
ALTER TABLE `koszyk`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `page_list`
--
ALTER TABLE `page_list`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT dla tabeli `koszyk`
--
ALTER TABLE `koszyk`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `page_list`
--
ALTER TABLE `page_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
