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
    ?>

    </div>
    </header>

    <section>
        <h2>Panel zarzadzania strona</h2>

        
         <div class = "container"><div class="text_block_cms_page">
                    <form method="post" name="CreateForm" enctype="multipart/form-data" action="create.php">
                        <input style="margin-top: 20px;" type="submit" name="create" value="Dodaj nową stronę" />
                    </form><br>
                    
        <div="text_block-cms"><h3 style="margin: 20px auto;">Lista dostępnych podstron:</h3>
        <?php ListaPodstron($link);?>

        </div>
        <div class="text_block_cms_cat">
                <form method="post" name="CreateForm" enctype="multipart/form-data" action="create_cate.php">
                    <input style="margin-top: 20px;" type="submit" name="create" value="Dodaj nową kategorię" />
                </form>
                
        <h3 style="margin: 20px auto;">Lista dostępnych kategorii głównych i podkategorii:</h3>
        <?php ListaKategorie($link);?>
        </div>

        <div class="text_block_cms_prod">
        
                    <form method="post" name="CreateForm" enctype="multipart/form-data" action="create_prod.php">
                        <input style="margin-top: 20px;" type="submit" name="create" value="Dodaj nowy produkt" />
                    </form>
                    
        <h3 style="margin: 20px auto;">Lista dostępnych produktów:</h3>
        <?php ListaProdukty($link);?>
        </div></div>
        
        
        
    </section>
    </div>
    <script src="js/timedate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <footer>
        <div class="footer">
            <p>Grabowski Matesz numer indeksu: 155247 </p>
    </footer>
</body>