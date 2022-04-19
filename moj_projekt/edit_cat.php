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

    session_start();

    include 'admin.php';
    include 'cfg.php';

    if (!isset($_SESSION['login_user'])) {
        header('Location: ../index.php?idp=zaloguj');
        exit();
    }

    // if(isset($_POST["cancel"])){
    //     unset($_SESSION['id_edit_category']);
    //     header('Location: sklep_panel.php');
    //     exit();
    // }


    if (isset($_SESSION['id_edit_category'])) {

        $id = $_SESSION['id_edit_category'];

        $query = "SELECT * FROM kategorie WHERE id = $id LIMIT 1";
        $category_info_query = mysqli_query($link, $query);
        $category_info = mysqli_fetch_array($category_info_query);
        $old_name = $category_info[1];
        $old_mother = $category_info[2];
        $queryMother = "SELECT * FROM kategorie WHERE kategoria IS NULL LIMIT 100";
        $resultMother = mysqli_query($link, $queryMother);

        echo '<h2> Edycja kategorii: ' . $old_name . '</h2>';

        echo ' <div class="text_block_cms_editcat">
                    <form id="editform" method="post" name="CategoryEditForm" enctype="multipart/form-data" action="">
                        <table align="center">    
                            <tr><td>Nazwa kategorii: </td><td><input type="text" name="new_name" value="' . $old_name . '"/></td></tr>
                            <tr><td>Kategoria matka: </td>    
                            <td>
                            <select id="mother-categories" name="motherlist" form="editform">
                                <option value="">Brak</option>
                        ';

        while ($rowMother = mysqli_fetch_array($resultMother)) {
            echo '
                <option value="' . $rowMother[1] . '">' . $rowMother[1] . '</option>
                ';
        }
        echo '
                            </select>
                            </td>
                            </tr>
                            <tr><td><input type="submit" name="cancel" value="Anuluj"/></td>
                            <td><input type="submit" name="confirm" value="Zatwierdź zmiany"/></td></tr> 
                        </table>
                     </form>
                    ';

        if (isset($_POST["confirm"])) {

            $new_name = $_POST['new_name'];
            $new_mother =  $_POST['motherlist'];

            if ($new_mother == '') {
                $query_update = "UPDATE kategorie SET nazwa='$new_name', kategoria=NULL WHERE id=$id LIMIT 1";
            } else {
                $query_update = "UPDATE kategorie SET nazwa='$new_name', kategoria='$new_mother' WHERE id=$id LIMIT 1";
            }

            $query_update_subcategories = "UPDATE kategorie SET kategoria='$new_name' WHERE kategoria='$old_name'";

            if ($category_info_query = mysqli_query($link, $query_update)) {
                if ($category_info_query2 = mysqli_query($link, $query_update_subcategories)) {
                    echo '
                                <script type="text/javascript">
                                    window.alert("Dokonano modyfikacji kategorii.")
                                </script>
                                ';
                    unset($_SESSION['id_edit_category']);
                } else {
                    echo '
                                <script type="text/javascript">
                                    window.alert("Wystąpił błąd")
                                </script>
                                ';
                }
            } else {
                echo '
                            <script type="text/javascript">
                                window.alert("Wystąpił błąd")
                            </script>
                            ';
            }
        }
    } else {
        echo 'Wystąpił błąd podczas pobierania id kategorii.';
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