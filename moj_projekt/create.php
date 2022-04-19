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
include 'admin.php';

if (!isset($_SESSION['login_user'])) {
    header('index.php');
    exit();
}
?>


<div class="text_block_cms_create">
<form action = "" method = "post">
<label>Tytul strony  :</label><input type = "text" name = "title" class = "box" /><br/><br />
<label>Zawartosc strony :</label><textarea type="text" name="content" class="box" ></textarea><br /><br />
<label>status :</label><input type = "text" name = "status" class = "box" /><br/><br />
<input type = "submit" value = " Submit " name="confirm"/><br />
</form> 
</div>
<?php
    $title = '';
    $content = '';

    if(isset($_POST["confirm"])){
        $content = $_POST['content'];
        $title = $_POST['title'];
    }

    if(isset($_POST['status"'])){
        $status = 1;
    }
    else {
        $status = 0;
    }
    $query_create="INSERT INTO page_list (page_title, page_content, status) VALUES ('$title', '$content', $status)";
    mysqli_query($link, $query_create);
?>

</div>
    </section>
    </div>
    <script src="js/timedate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <footer>
        <div class="footer">
            <p>Grabowski Matesz numer indeksu: 155247 </p>
    </footer>
</body>