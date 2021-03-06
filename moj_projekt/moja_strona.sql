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
(1, 'ciekawostki', '<h2>Ciekawostki</h2>\r\n<div class=\"text_block\">\r\n<img src=\"img/3.jpg\" alt=\"3\">\r\n            <p>\r\n1. \"Aleja bohater??w\" na Bajkonurze w Kazachstanie, gdzie znajduje si?? wyrzutnia rakietowa, stanowi przejmuj??cy pomnik kosmicznych misji z ostatnich 50 lat. Tradycja zacz????a si?? od Jurija Gagarina, pierwszego cz??owieka w kosmosie, kiedy to zasadzi?? pierwsze\r\ndrzewko, zanim wylecia?? w kosmos. P????niej ka??dy rosyjski kosmonauta, tez astronauci z innych kraj??w, przed startem z kosmodromu, tradycyjnie sadzili drzewka przy drodze prowadz??cej do wyrzutni rakietowej. Do roku 2005 z Bajkonuru wystartowa??o ponad 1200\r\nrakiet kosmicznych.\r\n<br>\r\n<br> 2. 17 wrze??nia 2018 r. Elon Musk og??osi??, ??e miliarder Y??saku Maezawa zosta?? pierwszym turyst??, kt??ry wykupi?? bilet na planowan?? w 2023 r. wycieczk?? wok???? Ksi????yca rakiet?? Big Falcon Rocket. Wraz z nim poleci od sze??ciu do o??miu artyst??w, kt??rzy\r\npo powrocie b??d?? mogli tworzy?? dzie??a sztuki zainspirowane t?? podr??????. Musk nie zdradzi jaka by??a cena biletu.\r\n<br>\r\n<br> 3. I pr??dko???? kosmiczna - okre??lana tak??e mianem pr??dko??ci ko??owej, jest to pr??dko????, jak?? nale??y nada?? cia??u, aby wesz??o na orbit?? oko??oziemsk??. <br> II pr??dko???? kosmiczna - jest to pr??dko???? jak?? nale??y nada?? cia??u, aby mog??o opu??ci?? ca??kowicie\r\nZiemi??.<br> III pr??dko???? kosmiczna - jest to pr??dko???? jak?? nale??y nada?? cia??u, aby mog??o opu??ci?? Uk??ad S??oneczny.<br> IV pr??dko???? kosmiczna - jest to pr??dko???? jak?? nale??y nada?? cia??u, aby mog??o opu??ci?? nasz?? Galaktyk??\r\n<br>\r\n<br> 4.InSight ??? bezza??ogowy l??downik, kt??ry zosta?? wys??any na Marsa w ramach programu Discovery. Sonda ma przeprowadzi?? badania geofizyczne, w szczeg??lno??ci sejsmologiczne. Nazwa l??downika jest akronimem, pochodzi od Interior Exploration using Seismic\r\nInvestigations, Geodesy and Heat Transport (Eksploracja wn??trza przy u??yciu bada?? sejsmicznych, geodezji i transportu ciep??a).\r\n            </p>\r\n      </div>', 1),
(2, 'filmy', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/MpIa-lcFg8g\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/QtDowulMAbk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n', 1),
(3, 'galeria', '<img src=\"img/4.jfif\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/6.png\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/7.jpg\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/8.jfif\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/9.jpg\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/10.jpeg\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/11.jfif\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/12.jpg\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/13.jpeg\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/14.jpg\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">\r\n\r\n<img src=\"img/15.jpg\" width=\"300px\" height=\"200px\" align=\"left\" style=\"margin:10px\">', 1),
(4, 'glowna', '     <h2>Loty kosmiczne</h2>\r\n      <div class=\"text_block\">\r\n<img src=\"img/1.jpg\" alt=\"1\">\r\n            <p>\r\n                loty kosmiczne, loty statk??w kosmicznych poza g??rne warstwy atmosfery Ziemi.\r\nObejmuj?? loty satelitarne wok???? Ziemi, loty ku innym cia??om Uk??adu S??onecznego (planetom i ich satelitom, kometom, planetoidom), loty poza przestrze?? ziemskiego uk??adu planetarnego (loty mi??dzygwiazdowe). Wyniesienie statk??w w przestrze?? kosmiczn?? odbywa si?? na og???? za pomoc?? wielostopniowych rakiet no??nych, a w wypadku ameryka??skich wahad??owc??w ??? dzi??ki nap??dowi od????czalnych rakiet wspomagaj??cych oraz ci??gu g????wnego silnika statku (statek kosmiczny). W celu osi??gni??cia danej trajektorii lotu kosmicznego niezb??dne jest nadanie statkowi odpowiedniej pr??dko??ci (pr??dko???? kosmiczna) i wykonanie manewru wprowadzenia na orbit??; minimalna pr??dko???? warunkuj??ca odbycie przez obiekt lotu kosmicznego po orbicie ko??owej tu?? przy powierzchni Ziemi, zwana pierwsz?? pr??dko??ci?? kosmiczn??, wynosi 7,9 km/s; w praktyce, wskutek istnienia atmosfery, lot satelitarny wok???? Ziemi mo??e si?? odbywa?? dopiero na wysoko??ci rz??du 150???200 km ponad jej powierzchni??. Oko??oziemskie loty satelitarne, jak r??wnie?? loty ku Ksi????ycowi, wi??????ce si?? z wej??ciem statku na orbit?? oko??oksi????ycow?? (sztuczne satelity Ksi????yca) lub l??dowaniem na jego powierzchni, by??y wykonywane zar??wno przez statki automatyczne (bezza??ogowe), jak i statki za??ogowe. Mi??dzyplanetarne loty kosmiczne zwi??zane z penetracj?? przestrzeni mi??dzyplanetarnej, zbli??eniem, l??dowaniem lub wej??ciem na orbit?? wok???? innego ni?? Ziemia i Ksi????yc cia??a Uk??adu S??onecznego wymaga??y nadania statkowi pr??dko??ci przewy??szaj??cej drug?? pr??dko???? kosmiczn?? (11,2 km/s) i by??y dot??d wykonywane jedynie przez statki bezza??ogowe (pr??bnik kosmiczny). Realizowane s?? bezza??ogowe loty kosmiczne mi??dzygwiazdowe poza Uk??ad S??oneczny, wymagaj??ce nadania statkom kosmicznym pr??dko??ci przewy??szaj??cej trzeci?? pr??dko???? kosmiczn??. Dotychczas nie wykonywano lot??w kosmicznych mi??dzygalaktycznych, do czego potrzebne jest nadanie statkowi czwartej pr??dko??ci kosmicznej. Do znacz??cych osi??gni???? ostatnich lat w zakresie mi??dzynarodowej wsp????pracy w dziedzinie lot??w kosmicznych nale??y zbudowanie Mi??dzynarodowej Stacji Kosmicznej.\r\n            </p>\r\n      </div>', 0),
(5, 'hist', '\r\n     <h2>Historia</h2>\r\n      <div class=\"text_block\">\r\n<img src=\"img/5.jfif\" alt=\"1\">\r\n            <p>Pierwsze realne propozycje podr????y kosmicznych przypisywane s?? Konstantinowi Cio??kowskiemu. Jego najs??ynniejsze dzie??o, ??????????????????????????? ?????????????? ?????????????????????? ?????????????????????? ????????????????????? (Eksploracja przestrzeni kosmicznej dzi??ki urz??dzeniom odrzutowym), zosta??a\r\nopublikowana w roku 1903, ale ta teoretyczna rozprawa nie by??a szeroko znana poza Rosj??. Loty kosmiczne sta??y si?? mo??liwe z in??ynierskiego punktu widzenia po publikacji Roberta Goddarda Metoda osi??gania ekstremalnych wysoko??ci, w kt??rej zaproponowa?? szereg\r\nkonkretnych rozwi??za?? pozwalaj??cych na zasadnicze ulepszenie rakiet, m.in. przez zastosowanie dyszy de Lavala do silnik??w rakietowych. Dysza ta pozwala na osi??gni??cie nadd??wi??kowego wyp??ywu gazu. Co najwa??niejsze, R. Goddard zbudowa?? rakiety na paliwo\r\nciek??e i rozwi??za?? szereg zwi??zanych z nimi problem??w (m.in. sterowanie rakiet??). Prace jego mia??y wielki wp??yw na Hermanna Obertha i Wernhera von Brauna, p????niej kluczowe postaci z dziedziny lot??w kosmicznych. Pierwsz?? rakiet??, kt??ra dotar??a do przestrzeni\r\nkosmicznej by??a niemiecka rakieta V2 w czasie lotu testowego 3 pa??dziernika 1942. 4 pa??dziernika 1957 Zwi??zek Radziecki wystrzeli?? Sputnika 1, kt??ry sta?? si?? pierwszym sztucznym satelit?? na orbicie Ziemi. Pierwszym lotem za??ogowym by??a misja Wostok 1\r\n12 kwietnia 1961 ??? na pok??adzie pojazdu znajdowa?? si?? kosmonauta Jurij Gagarin, kt??ry dokona?? jednego okr????enia wok???? Ziemi. Rakiety pozostaj?? jedynymi praktycznymi ??rodkami dotarcia do przestrzeni kosmicznej. Inne technologie, takie jak scramjet, w dalszym\r\nci??gu nie pozwalaj?? na osi??gni??cie pr??dko??ci orbitalnej.\r\n            </p>\r\n      </div>', 1),
(6, 'kontakt', '     <h2>Kontakt</h2>\r\n      <div class=\"text_block\">\r\n<p>\r\n<form action=\"mailto:myforms@mydomain.com\" enctype=\"text/plain\">\r\n    <label for=\"email\">Email:</label>\r\n    <input type=\"email\" id=\"email\" name=\"email\" size=\"30\">\r\n    <br><br>\r\n    <label for=\"text\">Temat</label>\r\n    <input type=\"text\" id=\"text\" name=\"temat\" size=\"30\">\r\n    <br><br>\r\n    <label for=\"text\">Tre???? wiadomo??ci</label>\r\n    <input type=\"text\" id=\"text\" name=\"text\" size=\"150\">\r\n    <br><br>\r\n    <input type=\"submit\">\r\n    <input type=\"reset\">\r\n</form>\r\n     <h2>Kontakt</h2>\r\n      <div class=\"text-block\">\r\n            </p>\r\n      </div>', 1),
(7, 'lot_kosmiczny', '\r\n     <h2>Lot kosmiczny</h2>\r\n      <div class=\"text_block\">\r\n<img src=\"img/2.jpg\" alt=\"1\">\r\n            <p>\r\n                Lot kosmiczny jest stosowany w eksploracji kosmosu, a tak??e w celach komercyjnych, takich jak turystyka kosmiczna czy komunikacja satelitarna. Inne niekomercyjne zastosowania lot??w kosmicznych to obserwatoria kosmiczne, satelity wywiadowcze i inne typy satelit??w obserwacyjnych.\r\n\r\n\r\n12 marca 2015 r., Sojuz TMA-14M na tle wschodu s??o??ca nad Azj?? ??rodkow??\r\nLot typowo zaczyna si?? odpaleniem rakiety no??nej, kt??ra dostarcza wst??pnego ci??gu do pokonania si??y ci????ko??ci i odrywa pojazd od powierzchni Ziemi. Ruch pojazdu w przestrzeni kosmicznej ??? zar??wno bez zastosowania nap??du jak i z nim ??? jest przedmiotem bada?? dyscypliny zwanej astrodynamik??. Niekt??re pojazdy pozostaj?? w przestrzeni kosmicznej na zawsze, niekt??re spalaj?? si?? w czasie ponownego wej??cia w atmosfer??, a inne docieraj?? na powierzchnie planetarne lub ksi????ycowe poprzez l??dowanie lub zderzenie.\r\n            </p>\r\n      </div>', 1);

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
-- Indeksy dla zrzut??w tabel
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
