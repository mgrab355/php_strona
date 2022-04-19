<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="pl" />
    <meta name="Author" content="Mateusz Grabowski 155247 grupa 3" />
    <link rel="stylesheet" href="css/style.css">
    <title></title>
</head>

<body  onload="startclock()">
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
    if (!isset($_SESSION['cart'])) {
        $query_delete = "DELETE * FROM koszyk";

        if ($delete = mysqli_query($link, $query_delete)) {
            echo '';
        } else {
            echo '';
        }
    }

    $query = "SELECT * FROM produkty LIMIT 100";
    $result = mysqli_query($link, $query);

    while ($row = mysqli_fetch_array($result)) {
        echo '
        <section>
        <div class="text_block">
                <div class="column">
                    <ul>
                        <li><b>Nazwa:</b> ' . $row[1] . '</li>
                        <li><b>Kategoria:</b> ' . $row[10] . '</li>
                        <li><b>Opis:</b> ' . $row[2] . '</li>
                        <li><b>Cena netto:</b> ' . $row[6] . '</li>
                        <li><b>Dostępnych sztuk:</b> ' . $row[8] . '</li>
                    </ul>
                </div>
                <form class="column" method="post" name="product_form" enctype="multipart/form-data" action="">
                <div>
                        Ilość produktu: <input id="product-number" type="number" name="value" value="1"/>
                        <input class="product-id" type="number" name="product-id" value="' . $row[0] . '"/>
                        <input class="dodajKoszyk" type="submit" name="confirm" value="Dodaj do koszyka"/>
                    </div>
                </form>
            </div>
            </div>
            </section>
        ';
    }
    if (isset($_POST['confirm'])) {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = 1;
        }
        $product_id = $_POST['product-id'];
        $id = htmlspecialchars($product_id);
        $amount = $_POST['value'];

        $query_amount = "SELECT sztuk, cena_netto, nazwa FROM produkty WHERE id=$id";
        $result_amount = mysqli_query($link, $query_amount);
        $row_amount = mysqli_fetch_array($result_amount);

        if ($row_amount[0] < $amount) {
            echo '
                <script type="text/javascript">
                    window.alert("Brak odpowiedniej ilości sztuk produktów w magazynie - aktualny stan: ' . $row_amount[0] . '")
                </script>
                ';
        } else if ($row_amount[0] == 0) {
            echo '
                <script type="text/javascript">
                    window.alert("Produkt chwilowo niedostępny")
                </script>
                ';
        } else {
            $check = "SELECT * FROM koszyk WHERE id=$id LIMIT 1";
            $check_result = mysqli_query($link, $check);
            $check_rows = mysqli_fetch_array($check_result);
            if ($check_rows != 0) {
                $_SESSION[$product_id] = $product_id;
            }
            if (isset($_SESSION[$product_id])) {
                $query_amount = "SELECT ilosc FROM koszyk WHERE id=$id";
                $result_amount = mysqli_query($link, $query_amount);
                $row_amount2 = mysqli_fetch_array($result_amount);
                $old_amount = $row_amount2[0];
                $new_amount = $old_amount + $amount;
                $new_price = $row_amount[1] * $new_amount;
                $query_update_cart = "UPDATE koszyk SET ilosc=$new_amount, cena=$new_price WHERE id=$id";
                if ($query_update_cart_result = mysqli_query($link, $query_update_cart)) {
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
            } else {
                $_SESSION[$product_id] = $product_id;
                $name = $row_amount[2];
                $price = $amount * $row_amount[1];
                echo $_SESSION[$product_id];
                echo $name . '</br>';
                echo $price . '</br>';
                echo $amount . '</br>';
                echo $row_amount[1] . '</br>';
                $add_to_cart = "INSERT INTO koszyk (id, nazwa, ilosc, cena) VALUES ($id, '$name', $amount, $price)";
                if ($query = mysqli_query($link, $add_to_cart)) {
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