<div class="project_content">
  <div class="grosse_div">
    <h1 id="titre_project">Projets</h1>

    <div class="lesfiltres">
      <div id="filtre1">
        <form action="model.php" method="post">
          <select name="Filtre" id="filtre">
            <option value=""hidden>Filtre</option>
            <option value="id_promos">Promos</option>
            <option value="nom_groupe">Groupes</option>
            <option value="date_projet">Date de mis en ligne</option>
          </select>
        </form>

      </div>

      <div id="filtre2">
        <form action="model.php" method="post">
          <select name="Filtre" id="filtre">
            <option value=""hidden>Filtre</option>
            <option value="id_promos">Ordre croissant</option>
            <option value="nom_groupe">Ordre decroissant</option>
          </select>
        </form>
      </div>
    </div>

    <div class="checkbox">
      <form id="formprojet">
        <div class="case">
        <input type="checkbox" id="statut_projet" name="projets en cours">
        <label for="projets en cours">Projets en cours</label>
      </div>
      <div class="case">
        <input type="checkbox" id="statut_projet" name="projets terminés">
        <label for="projets terminés">Projets terminés</label>
      </div>
      </form>
      </div>
      <div id="searchbar">

                <form action="" class="formulaire">
               <input class="champ" type="text" placeholder="Search..."/>
                    <i class="material-icons">search</i>
                </form>
                </div>


  </div>

  <div class="carouselvitrine">
    <h1 class="vitrine">Vitrine</h1>
      <div id="slider" class="slide2 slide_projet">
        <figure>
          <img src="img/car1.png" alt="Projet en cours 01">
            <img src="img/car2.png" alt="Projet en cours 02">
              <img src="img/car3.png" alt="Projet en cours 03">
        </figure>
      </div>
  </div>
</div>

<div class="listeprojet">
  <img src="img/car1.png" alt="projet1">
    <img src="img/car2.png" alt="projet2">
      <img src="img/car3.png" alt="projet3">
        <img src="img/car4.png" alt="projet4">
  </div>
</div>
