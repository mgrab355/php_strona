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

    ?>

    <?php

    if (isset($_POST["cancel"])) {
        unset($_SESSION['id_edit']);
        header('Location: cms.php');
        exit();
    }

    if (isset($_SESSION['id_edit'])) {

        $id = $_SESSION['id_edit'];

        $query = "SELECT * FROM page_list WHERE id = $id LIMIT 1";
        $page_info = mysqli_query($link, $query);
        $page_info = mysqli_fetch_array($page_info);
        $old_title = $page_info[1];

        echo '<h2>Okno edycji strony: ' . $old_title . '</h2>';

        $old_content = $page_info[2];

        echo '  <div class = "text_block_cms_editpage">
                    <form method="post" name="EditForm" enctype="multipart/form-data" action="">
                        <table align="center">    
                            <tr><td>Tytuł: </td><td><input type="text" name="new_title" value="' . $old_title . '"/></td></tr>
                            <tr><td>Treść: </td><td><textarea cols="100" rows="30" name="new_content">' . $old_content . '</textarea></td></tr
                            <tr><td>Czy aktywna? </td><td><input type="checkbox" name="status"/></td></tr>
                            <tr><td><input type="submit" name="cancel" value="Anuluj"/></td>
                            <td><input type="submit"  name="confirm" value="Zatwierdź zmiany"/></td></tr>
                        </table>
                     </form>
                     </div
                    ';

        if (isset($_POST["confirm"])) {

            $new_content = $_POST['new_content'];
            $new_title = $_POST['new_title'];

            if (isset($_POST['status'])) {
                $status = 1;
            } else {
                $status = 0;
            }
            $query_update = "UPDATE page_list SET page_title='$new_title', page_content='$new_content', status=$status WHERE id=$id LIMIT 1";
            if ($page_info = mysqli_query($link, $query_update)) {
                echo '
                            <script type="text/javascript">
                                window.alert("Dokonano modyfikacji strony.")
                            </script>
                            ';
                unset($_SESSION['id_edit']);
            } else {
                echo '
                            <script type="text/javascript">
                                window.alert("Wystąpił błąd")
                            </script>
                            ';
            }
        }
    } else {
        echo 'Wystąpił błąd podczas pobierania id strony.';
    }
    ?>
    </section>
    </div>
    <script src="js/timedate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <footer>
        <div class="footer">
            <p>Grabowski Matesz numer indeksu: 155247 </p>
    </footer>
</body>