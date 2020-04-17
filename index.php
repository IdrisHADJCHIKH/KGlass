<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="images/logoSmall2.png"/>
    
    <title>KGlass</title>

    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">  
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- connection to db -->
    <?php include 'connexion.php'; ?>
    
</head>

<header>
    
    <nav class="navbar navbar-expand-lg navbar-light myNavbar">
        <a id="navbarTitle" class="navbar-brand ocra text-white ml-5 pl-5" href="#">KGlass</a>
        <button class="navbar-toggler bg-light rounded-lg o8" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse fem08" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <li class="nav-item dropdown">
                    <a id="nav-link" class="nav-link dropdown-toggle text-white" href="cadeaux" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadeaux
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdownCadeaux">
                        <a class="dropdown-item text-white" href="#" data-toggle="modal" data-target=".modal-portfolio"><p class="dropdown-text px-3 mx-2">Tous les cadeaux</p></a>
                        <div class="dropdown-divider text-white"></div>
                        <a class="dropdown-item text-white" href="#" data-toggle="modal" data-target=".modal-tv"><p class="dropdown-text px-3 m-0">Télévisison 24"</p></a>
                        <a class="dropdown-item text-white" href="#" data-toggle="modal" data-target=".modal-machinecafe"><p class="dropdown-text px-3 m-0">Machine à café</p></a>
                        <a class="dropdown-item text-white" href="#" data-toggle="modal" data-target=".modal-microondes"><p class="dropdown-text px-3 m-0">Micro-ondes</p></a>
                        <a class="dropdown-item text-white" href="#" data-toggle="modal" data-target=".modal-robotpatissier"><p class="dropdown-text px-3 m-0">Robot patissier</p></a>
                        <a class="dropdown-item text-white" href="#" data-toggle="modal" data-target=".modal-tablette"><p class="dropdown-text px-3 m-0">Tablette</p></a>
                        <a class="dropdown-item text-white" href="#" data-toggle="modal" data-target=".modal-smartpone"><p class="dropdown-text px-3 m-0">Smartphone</p></a>
                    </div>
                </li>
                <li class="dropdown">
                    <a id="nav-link" class="nav-item nav-link text-white" href="#competences">Accueil</a>
                </li>
                <li class="dropdown">
                    <a id="nav-link" class="nav-item nav-link text-white" href="#experiencesprofessionnelles">Expériences professionnelles</a>
                </li>
                <li class="dropdown">
                    <a id="nav-link" class="nav-item nav-link text-white" href="#education">Où nous trouver</a>
                </li>
                <li class="dropdown">
                    <a id="nav-link" class="nav-item nav-link text-white" href="#langues">Contact</a>
                </li>
            </div>
        </div>
    </nav>
    <div class="progressNavBarContainer">
        <div class="progressNavBar" id="myBar"></div>
    </div>

</header>
  
<body>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>tryhtyrh<br><br><br>


<?php include 'cadeaux/tv.php'?>




<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>sefesfsf<br><br><br>


<br><br><br><br><br><br><br><br>iommim<br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>e

</body>

<footer>

</footer>


<!--/////////////////////////////////////////////////////////////////// MODALS ///////////////////////////////////////////////////////////////////-->

<!-- ****************************************** Développeur Web chez CarpeDiem ****************************************** -->
<div class="modal fade modal-tv" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content border-0 rounded-lg">
            <div class="modal-header">
                <h5 class="modal-title h1">Pour tout changement de pare-brise, Kglass vous offre cette superbe télévision qui fera la joie des enfants</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="p-5 modal-text">
                    <h3><u>Caractéristiques :</u></h3>
                    <table class="table table-striped">
                        <tbody>
                          <tr><th scope="row">Marque</th><td>RADIOLA</td></tr>
                          <tr><th scope="row">Classe énergétique</th><td>A</td></tr>
                          <tr><th scope="row">Consommation d’énergie (W)</th><td>22 W</td></tr>
                          <tr><th scope="row">Consommation électrique annuelle (kWh/annum)</th><td>32 kWh/annum</td></tr>
                          <tr><th scope="row">Taille écran en cm</th><td>60 cm</td></tr>
                          <tr><th scope="row">Taille écran en pouces</th><td>24 “</td></tr>
                          <tr><th scope="row">Technologie TV</th><td>LED HD</td></tr>
                          <tr><th scope="row">TV connectée</th><td>Non</td></tr>
                          <tr><th scope="row">Incurvé</th><td>Non</td></tr>
                          <tr><th scope="row">Fonction USB</th><td>Lecteur audio, photo, vidéo et enregistreur.................................</td></tr>
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <br>
                    essai avec bdd :
                    <br><br>
                </p>
            </div>
            <div class="modal-footer border-0">
                <button type="button" id="btnCloseModal" class="btn rounded-lg" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>


<!-- script -->
<script src="js/script.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.bundle.min.js.map"></script>
<script src="js/bootstrap.min.js.map"></script>

<!-- <?php
    $pdodbcon = null;
    print_r("fin de la connexion");
?> -->

</html>