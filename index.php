<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EEP - SIMPLON</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:500" rel="stylesheet">
    <meta name="author" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="layout js-layout fixed-header"><!--fixation du header (js?)-->
    <div class="drawer"><!--Menu déroulant de gauche-->
      <span class="titlemenu">EEP - SIMPLON </span><!--Titre du menu déroulant-->
        <?php include 'mvc/nav.php' ?><!--bouttons de navigation menu. voir .php-->
    </div>
    <!--header-->
    <header class="header">
      <div class="header_row flexcontainer logodesktop">
        <div class="flextitle">
          <a href="index.php"> <img src="./img/logo_lit.png" alt="little logo" class="logolit">
          <span class="title">E.E.P. by <img src="./img/logo.png" alt="logo" class="logo"> &raquo; Accueil</span>
          <span class="titlemobile">E.E.P. &raquo; Accueil</span></a><!--Titre version mobile-->
        </div>
        <div class="flexbox">
          <!-- Zone de recherche Topbar -->
          <form action="#" class="hiddendesktop">
            <div class="textfield">
              <div class="textfield_expandable-holder">
                <input class="textfield_input" type="text" id="sample6">
                <label class="textfield_label" for="sample-expandable">Recherche</label>
              </div>
            </div>
          </form>
        </div>
        <div class="flexbox hiddenmobile">
          <?php include'mvc/lang.php' ?>
        </div>
        <div class="flexbox hiddenmobile rightpad">
          <button class="button js-button button--icon button--colored">
            <i class="material-icons">text_fields</i>
          </button>
        </div>
        <div class="flexbox hiddendesktop rightpad">
          <!-- Right aligned menu below button -->
          <button id="demo-menu-lower-right" class="button js-button button--icon">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="menu menu--bottom-right js-menu js-ripple-effect" for="demo-menu-lower-right">
            <a href="http://192.168.3.125:3000/"><li class="menu_item">Connexion</li></a>
            <li class="menu_item">Inscription</li>
            <div class="flexcontainercenter">
              <button class="button js-button button--icon button--colored flexbox">
                <i class="material-icons" style="color:black">text_fields</i>
              </button>
              <form class="flex">
                <?php include'mvc/lang.php' ?>
              </form>
            </div>
          </ul>
        </div>
      </div>
      <div class="header_row submenu flexcontainer">
        <?php include 'mvc/nav.php' ?>
        <!-- Zone de recherche sous-menu -->
        <form action="#" class="flexbox hiddenmobile searchicon">
          <div class="textfield js-textfield textfield--expandable">
            <label class="button js-button button--icon" for="sample5">
              <i class="material-icons">search</i>
            </label>
            <div class="textfield_expandable-holder">
              <input class="textfield_input" type="text" id="sample5">
              <label class="textfield_label" for="sample-expandable">Recherche</label>
            </div>
          </div>
        </form>
        <!-- boutton mail -->
        <button class="button js-button button--icon button--colored mailicon flexbox hiddenmobile">
          <i class="material-icons">email</i>
        </button>
        <!-- Boutton connexion -->
        <form action="http://192.168.3.125:3000/">
        <button class="button js-button button--connect">
          Connexion
        </button>
      </form>
      </div>
    </header>
    <!--Contenu de la page-->
    <main class="content">
<?php include 'mvc/content.php' ?>
    </main>
  </div>
  <footer><p>&copy; 2018 CODA<p></footer>

</body>

<script src="js/material.js"></script>
</html>
