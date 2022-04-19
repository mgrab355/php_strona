<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="pl" />
    <meta name="Author" content="Mateusz Grabowski 155247 grupa 3" />
    <link rel="stylesheet" href="css/style.css">
    <title></title>
</head>

<body onload="startclock()">
    <div class="topnav">
        <a href="home.php" title="Glowna">Glowna</a>
        <a href="home.php?name=historia" title="Historia">Historia</a>
        <a href="home.php?name=lot kosmiczny" title="lot kosmiczny">Lot kosmiczny</a>
        <a href="home.php?name=ciekawostki" title="Ciekawostki">Ciekawostki</a>
        <a href="home.php?name=galeria" title="Galeria">Galeria</a>
        <a href="home.php?name=filmy" title="Filmy">Filmy</a>
        <a href="sklep.php" title="Sklep">Sklep</a>
        <a href="home.php?name=kontakt" title="kontakt">Kontakt</a>
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
    <br>
    <?php
    include 'cfg.php';

    if (!isset($_SESSION['koszyk'])) {
        $query_delete = "DELETE * FROM koszyk";

        if ($delete = mysqli_query($link, $query_delete)) {
            echo '';
        } else {
            echo '';
        }
    }
    $query = "SELECT * FROM koszyk ORDER BY id  LIMIT 100";
    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_array($result)) {
        echo '
                <div class="product">
                    <div class="column">
                        <ul>
                            <li><b>Nazwa:</b> ' . $row[1] . '</li>
                            <li><b>Ilość:</b> ' . $row[3] . '</li>
                            <li><b>Cena:</b> ' . $row[2] . '</li>
                        </ul>
                    </div>
                    <form class="column" method="post" name="product_form" enctype="multipart/form-data" action="">
                        <div class="">
                            Ilość produktu: <input id="product-number" type="number" name="value" value="' . $row[3] . '"/>
                            <input class="product-id" type="number" name="product-id" value="' . $row[0] . '"/>
                            <input class="usunZKoszyk" type="submit" name="remove" value="Usuń z koszyka"/>
                            <input class="aktualizujIlosc" type="submit" name="confirm" value="Aktualizuj ilość"/>
                        </div>
                    </form>
                </div>
            ';
    }
    if (isset($_POST['confirm'])) {
        $id = $_POST['product-id'];
        $nowa_ilosc = $_POST['value'];
        $query_price = "SELECT cena_netto FROM produkty WHERE id=$id";
        $result_price = mysqli_query($link, $query_price);
        $row_pcena= mysqli_fetch_array($result_price);
        $nowa_cena = $row_cena[0] * $nowa_ilosc;
        $query_update_koszyk = "UPDATE koszyk SET ilosc=$nowa_ilosc, cena=$nowa_cena WHERE id=$id";
        if ($query_update_koszyk_result = mysqli_query($link, $query_update_koszyk)) {
            echo '
                    <script type="text/javascript">
                        window.alert("Dodano nowe produkty do koszyka")
                    </script>
                    ';
        } else {
            echo '
                    <script type="text/javascript">
                        window.alert("Wystąpił błąd")
                    </script>
                    ';
        }
    }
    $cala_cena = "SELECT sum(cena) from koszyk";
    $result_price = mysqli_query($link, $cala_cena);
    $row_cena = mysqli_fetch_array($result_price);
    $cala_cena_row = $row_cena[0];
    echo '<div class="text_block_price"><span style="text-align:right;">Cena całkowita: ' . $cala_cena_row . '</span></div>';
    ?>
    <div class="finish">
        <form class="column" method="post" name="product_form" enctype="multipart/form-data" action="">
            <div style="float: right;">
                <input class="wyczyscKoszyk" type="submit" name="clear" value="Wyczyść koszyk" />
                <input class="zaplac" type="submit" name="pay" value="Zapłać za zakupy" />
            </div>
        </form>
    </div>
    <?php
    if (isset($_POST['clear'])) {
        $query_delete = "DELETE FROM koszyk";
        if ($delete = mysqli_query($link, $query_delete)) {
            echo '
                <script type="text/javascript">
                    window.alert("Koszyk został opróżniony")
                </script>
                ';
        } else {
            echo '
                <script type="text/javascript">
                    window.alert("Wystąpił błąd")
                </script>
                ';
        }
    }

    if (isset($_POST['pay'])) {
        $query = "SELECT * FROM koszyk ORDER BY id LIMIT 100";
        $result = mysqli_query($link, $query);
        $query_delete = "DELETE FROM koszyk";

        if ($delete = mysqli_query($link, $query_delete)) {
            echo '
                <script type="text/javascript">
                    window.alert("Dokonano zakupu")
                </script>
                ';
        } else {
            echo 'Wystąpił błąd2';
        }
    }

    if (isset($_POST['remove'])) {
        $id = $_POST['product-id'];
        $query_delete = "DELETE FROM koszyk WHERE id=$id";

        if ($delete = mysqli_query($link, $query_delete)) {
            echo '
                <script type="text/javascript">
                    window.alert("Produkt został usunięty z koszyka")
                </script>
                ';
        } else {
            echo '
                <script type="text/javascript">
                    window.alert("Wystąpił błąd")
                </script>
                ';
        }
    }
    ?>
    </div>
    <script src="js/timedate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <footer>
        <div class="footer">
            <p>Grabowski Matesz numer indeksu: 155247 </p>
    </footer>
</body>