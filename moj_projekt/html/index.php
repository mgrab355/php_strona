<?php
  error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
/* po tym komentarzu będzie kod do dynamicznego ładowania stron */ 
  include 'cfg.php';
  if($_GET['name'] == '') $strona = 'html/main.html';
  if($_GET['name'] == 'festiwale') $strona = 'html/festiwale.html';
  if($_GET['name'] == 'hardcore') $strona = 'html/hardcore.html';
  if($_GET['name'] == 'kontakt') $strona = 'html/kontakt.html';
  if($_GET['name'] == 'jumpstyle') $strona = 'html/jumpstyle.html';
  if($_GET['name'] == 'video') $strona = 'html/video.html';
  if($_GET['name'] == '2') $strona = 2;
?>

<html lang="pl">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Author" content="Mateusz Baran" />

  <link href="/css/custom.css" rel="stylesheet">
  <link href="/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
        crossorigin="anonymous">
  
  <title>
    Moje hobby: Hardstyle
  </title>

</head>
<body onload="startClock()" class="">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <p class="navbar-brand mb-0" >Hardstyle</p>
      <div id="date" class="text-light me-2"></div>
      <div id="time" class="text-light me-2"></div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?">Strona główna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?name=jumpstyle">Jumpstyle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?name=hardcore">Hardcore</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?name=festiwale">Festiwale</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?name=kontakt">Kontakt</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php
    
      include 'showpage.php';
      PokaPodstrone($strona);
    
  ?>
  
  
  
  <script src="/js/bootstrap.bundle.min.js"></script>
  <script src="/js/kolorujtlo.js"></script>
  <script src="/js/timedate.js"></script>
  <script src="/js/jquery-3.6.0.min.js"></script>
  <script src="/js/index.js"></script>

<?php
  $nr_indeksu = '155620'; $nrGrupy = '3';
  echo 'Autor: Mateusz Baran'.$nr_indeksu.' grupa '.$nrGrupy.' <br /><br />'; 
?>

</body>

