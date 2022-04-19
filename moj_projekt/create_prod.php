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

    session_start();

    include 'admin.php';
    include 'cfg.php';

    if (!isset($_SESSION['login_user'])) {
        header('Location: ../index.php?idp=zaloguj');
        exit();
    }

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/styles.css">
        <title>Panel Sklepu</title>
    </head>

    <body style="min-height: 100Vh;">
        <div class="edit-content">
            <?php
            $query_category = "SELECT * FROM kategorie WHERE kategoria IS NOT NULL LIMIT 100";
            $result_category = mysqli_query($link, $query_category);



            echo '<div class =" text_block_cms_createprod">
                <form id="editform" method="post" name="CategoryEditForm" enctype="multipart/form-data" action="">
                    <table align="center">    
                        <tr><td>Nazwa produktu: </td><td><input type="text" name="new_name" value="nazwa produktu"/></td></tr>
                        <tr><td>Kategoria produktu: </td>    
                        <td>
                        <select id="product-categories" name="categorylist" form="editform">
                    ';

            while ($row_category = mysqli_fetch_array($result_category)) {
                echo '
                            <option value="' . $row_category[1] . '">' . $row_category[1] . '</option>
                        ';
            }
            echo '
                        </select>
                        </td>
                        </tr>
                        <tr><td>Opis produktu: </td><td><textarea cols="50" rows="10" name="new_desc">Opis produktu</textarea></tr>
                        <tr><td>Data wygaśnięcia: </td><td><input type="date" name="new_expiry_date" value="' . date("Y/m/d") . '"/></td></tr>
                        <tr><td>Cena netto: </td><td><input type="number" name="new_price" value="1"/></td></tr>
                        <tr><td>Podatek VAT: </td><td><input type="number" name="new_vat" value="1"/></td></tr>
                        <tr><td>Ilość sztuk: </td><td><input type="number" name="new_amount" value="1"/></td></tr>
                        <tr><td>Dostępny? </td><td><input type="checkbox" name="new_availible" checked/></td></tr>
                        <tr><td><input type="submit" name="cancel" value="Anuluj"/></td>
                        <td><input type="submit" name="confirm" value="Utwórz produkt"/></td></tr>   
                    </table>
                 </form>
                ';

            if (isset($_POST["confirm"])) {

                if (isset($_POST["new_availible"])) {
                    $new_availible = 1;
                } else {
                    $new_availible = 0;
                }
                $new_name = $_POST["new_name"];
                $new_category = $_POST["categorylist"];
                $new_desc = $_POST["new_desc"];
                $new_expiry_date = $_POST["new_expiry_date"];
                $new_price = $_POST["new_price"];
                $new_vat = $_POST["new_vat"];
                $new_amount = $_POST["new_amount"];
                $new_modification_date = date("Y/m/d");
                $new_creation_date = date("Y/m/d");

                $query_create_product = "INSERT INTO produkty (nazwa, kategoria, opis, data_utworzenia, data_modyfikacji, data_wygasniecia, cena_netto, vat, sztuk, dostepnosc) VALUES ('$new_name', '$new_category', '$new_desc', '$new_creation_date', '$new_modification_date', '$new_expiry_date', $new_price, $new_vat, $new_amount, $new_availible)";

                if ($product_create_query = mysqli_query($link, $query_create_product)) {
                    echo '
                        <script type="text/javascript">
                            window.alert("Utworzono nowy produkt.")
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
        </section>
        <script src="js/timedate.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <footer>
            <div class="footer">
                <p>Grabowski Matesz numer indeksu: 155247 </p>
        </footer>
    </body>