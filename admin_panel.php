<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="pl" />
    <title></title>
</head>

<body>
    <?php
    if (isset($_SESSION['UserData']['Username'])) {
        echo '<a href="logout.php">Wyloguj</a>';
    } else
        echo '<a href="login.php">Zaloguj</a>';
    ?>
<br>
<?php
session_start();
?>

<section>
    <h2>Panel zarzadzania </h2>

</body>