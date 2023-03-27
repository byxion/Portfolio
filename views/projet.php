<?php require_once(PATH_VIEWS . "nav.php") ?>

<head>
  <link rel="stylesheet" type="text/css" href="<?= PATH_CSS ?>projet.css" />
  <script defer src="<?= PATH_SCRIPTS ?>projet.js" type="module"></script>
</head>

<div class="container">
  <div class="allProjects">
    <div class="card" data-img=".././assets/images/annuaire.jpg">
      <div class="card-content">
        <h2 class="card-title">Annuaire</h2>
        <p class="card-body">Durant ce projet, où nous étions 3, nous avons dû mettre en place un annuaire de personne en C, ou nous pouvions faire des fonctions sur ces personnes.</p>
        <a href="#"><button>En savoir plus</button></a>
      </div>
    </div>
    <div class="card" data-img=".././assets/images/graphmap.png">
      <div class="card-content">
        <h2 class="card-title">Graph Map</h2>
        <p class="card-body">Projet réalisé en Java où l'on devait faire un graphe, avec des noeuds représentant des villes, et nous devions effectuer des fonctions sur ce graphes.</p>
        <a href="#"><button>En savoir plus</button></a>
      </div>
    </div>
    <div class="card" data-img=".././assets/images/snake.png">
      <div class="card-content">
        <h2 class="card-title">Snake</h2>
        <p class="card-body">Petit projet en JavaScript natif où en équipe de 2, nous devions faire le jeu Snake.</p>
        <a href="#"><button>En savoir plus</button></a>
      </div>
    </div>
    <div class="card" data-img=".././assets/images/planmyjourney.png">
      <div class="card-content">
        <h2 class="card-title">Plan My Journey</h2>
        <p class="card-body">Site de tourisme, en PHP et JavaScript, où le client peut découvrir une ville avec des activités et restaurants qui lui sont proposés en fonctions de ses goûts et préférences.</p>
        <a href="#"><button>En savoir plus</button></a>
      </div>
    </div>
    <div class="card" data-img=".././assets/images/test.png">
      <div class="card-content">
        <h2 class="card-title">Toc Toc</h2>
        <p class="card-body">Application en Android, développé en Kotlin, où le client trouve le restaurant qui lui plait en scrollant infiniment sur son téléphone.</p>
        <a href="#"><button>En savoir plus</button></a>
      </div>
    </div>
    
  </div>
  <div class="toComp">
    <a href="?page=competences">
      <button>Découvrir mes compétences</button>
    </a>
  </div>
</div>