<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
?>
<html lang="pl">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="pl" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="Author" content="Mateusz Grabowski 155247 grupa 3" />
    <link rel="stylesheet" href="css/style.css">
    <title></title>
</head>

<body onload="startclock()">
    <header>
        <div class="topnav">
            <a href="home.php" title="Glowna">Glowna</a>
            <a href="?name=historia" title="Historia">Historia</a>
            <a href="?name=lot kosmiczny" title="lot kosmiczny">Lot kosmiczny</a>
            <a href="?name=ciekawostki" title="Ciekawostki">Ciekawostki</a>
            <a href="?name=galeria" title="Galeria">Galeria</a>
            <a href="?name=filmy" title="Filmy">Filmy</a>
            <a href="sklep.php" title="Sklep">Sklep</a>
            <a href="?name=kontakt" title="kontakt">Kontakt</a>
            <a href="koszyk.php" title="Koszyk">Koszyk</a>
            <a href="cms.php" title="cms">CMS</a>


            <?php
            if (isset($_SESSION['login_user'])) {
                echo '<div class="login"><a href="wyloguj.php">Wyloguj</a></div>
                  ';
            } else
                echo '<div class="login"><a href="login.php">Zaloguj</a></div>';
            ?>
            <div id="zegarek"></div>
            <div id="data"></div>
        </div>
    </header>
    <br>
    <main>
        <section>
            <div class="content">
                <?php
                include('showpage.php');
                if ($_GET['name'] == '')  PokazPodstrone(4);
                if ($_GET['name'] == 'historia')  PokazPodstrone(5);
                if ($_GET['name'] == 'lot kosmiczny')  PokazPodstrone(7);
                if ($_GET['name'] == 'ciekawostki')  PokazPodstrone(1);
                if ($_GET['name'] == 'galeria')  PokazPodstrone(3);
                if ($_GET['name'] == 'kontakt')  PokazPodstrone(6);
                if ($_GET['name'] == 'filmy')  PokazPodstrone(2);
                ?>
            </div>
        </section>
    </main>
    <script src="js/timedate.js"></script>
    <script src="js/kolortla.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <footer>
        <div class="footer">
            <p>Grabowski Matesz numer indeksu: 155247 </p>
            <!-- <form method='post' name='background'>
                    <input type="button" value="zolty" onclick="changeBackground('#fff000')">
                    <input type="button" value="czarny" onclick="changeBackground('#000000')">
                    <input type="button" value="bialy" onclick="changeBackground('#ffffff')">
                    <input type="button" value="zielony" onclick="changeBackground('#00ff00')">
                    <input type="button" value="niebieski" onclick="changeBackground('#0000ff')">
                    <input type="button" value="pomaranczowy" onclick="changeBackground('#ff8000')">
                    <input type="button" value="szary" onclick="changeBackground('#c0c0c0')">
                    <input type="button" value="czerwony" onclick="changeBackground('#ff0000')">
                </form> -->
        </div>
    </footer>
</body>