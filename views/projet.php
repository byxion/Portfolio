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
        <a href="#" class="project-btn" data-title="Annuaire" data-link="https://github.com/wayark/Projet-annuaireLangageC" data-body="Durant cette SAÉ, j’ai eu l’occasion de travailler dans le langage C avec l’utilisation de pointeur, de gestion de l’allocation mémoire et avec des classes abstraites notamment. Elle a aussi été ma première collaboration avec mes camarades pour réaliser un gros projet commun. Cela ma acquis des compétences en langage C globalement."><button>En savoir plus</button></a>
      </div>
    </div>
    <div class="card" data-img=".././assets/images/graphmap.png">
      <div class="card-content">
        <h2 class="card-title">Graph Map</h2>
        <p class="card-body">Projet réalisé en Java où l'on devait faire un graphe, avec des noeuds représentant des villes, et nous devions effectuer des fonctions sur ce graphes.</p>
        <a href="#" class="project-btn" data-title="Graph Map" data-link="https://github.com/Siriuss7777/sae-grama" data-body="Au cours de mon projet en Java visant à créer une carte avec des graphes et à effectuer des calculs dessus,j'ai pu acquérir de nouvelles compétences, notamment en matière de manipulation de graphes, de programmation orientée objet et de résolution de problèmes algorithmiques. Travailler en équipe m'a permis d'apprendre à communiquer efficacement et à être autonome dans mon travail. J'ai également eu l'opportunité de mettre en pratique des méthodologies de développement telles que la gestion de versions avec GIT, la planification de projets avec un GANTT PERT et la rédaction d'un cahier des charges."><button>En savoir plus</button></a>
      </div>
    </div>
    <div class="card" data-img=".././assets/images/snake.png">
      <div class="card-content">
        <h2 class="card-title">Snake</h2>
        <p class="card-body">Petit projet en JavaScript natif où en équipe de 2, nous devions faire le jeu Snake.</p>
        <a href="#" class="project-btn" data-title="Snake" data-link="https://forge.univ-lyon1.fr/p2110250/javascript-project-s3" data-body="Au cours de mon projet pour créer le jeu Snake en utilisant JavaScript natif, j'ai développé des compétences en matière de programmation, de gestion du temps et de collaboration en équipe. J'ai appris à programmer en JavaScript natif, en utilisant des fonctions et des méthodes pour créer le jeu Snake. J'ai également acquis des compétences en matière de gestion du temps, en travaillant sur un projet à court terme et en répartissant les tâches avec mon partenaire. Ce projet m'a également permis de travailler en équipe, de communiquer efficacement avec mon partenaire et de collaborer pour réussir le projet. En conclusion, ce projet m'a permis de développer des compétences pratiques en matière de programmation en JavaScript, de gestion du temps et de collaboration en équipe, ce qui sera très utile pour mon futur professionnel."><button>En savoir plus</button></a>
      </div>
    </div>
    <div class="card" data-img=".././assets/images/planmyjourney.png">
      <div class="card-content">
        <h2 class="card-title">Plan My Journey</h2>
        <p class="card-body">Site de tourisme, en PHP et JavaScript, où le client peut découvrir une ville avec des activités et restaurants qui lui sont proposés en fonctions de ses goûts et préférences.</p>
        <a href="#" class="project-btn" data-title="Plan My Journey" data-link="https://forge.univ-lyon1.fr/p2107336/plan-my-journey" data-body="L'objectif de mon projet était de développer un site web qui permette à un utilisateur de créer un itinéraire pour visiter une ville en fonction de ses préférences. J'ai utilisé l'API Google Places pour récupérer les données sur les lieux de la ville. En travaillant sur ce projet, j'ai développé des compétences importantes en développement web, telles que la création de pages en HTML/CSS, l'ajout de fonctionnalités interactives en JavaScript, la logique de traitement côté serveur en PHP et l'utilisation de l'API Google Places. J'ai également appris à gérer les versions de mon code avec GIT et à planifier mon projet à l'aide de diagrammes PERT et GANTT. Au-delà de ces compétences techniques, j'ai également développé des compétences en résolution de problèmes, en collaboration, en gestion de projet, en communication et en créativité."><button>En savoir plus</button></a>
      </div>
    </div>
    <div class="card" data-img=".././assets/images/test.png">
      <div class="card-content">
        <h2 class="card-title">Toc Toc</h2>
        <p class="card-body">Application en Android, développé en Kotlin, où le client trouve le restaurant qui lui plait en scrollant infiniment sur son téléphone.</p>
        <a href="#" class="project-btn" data-title="Toc Toc" data-link="https://github.com/wayark/ProjetFinalDevMobile" data-body="Au cours de mon projet de développement d'une application Android en Kotlin pour trouver des restaurants à l'aide de Places API de Google Maps, j'ai acquis des compétences en programmation mobile, en gestion de projet et en collaboration en équipe. J'ai appris à utiliser Kotlin pour programmer des fonctionnalités d'application mobile, telles que la recherche et l'affichage d'informations sur les restaurants à proximité. J'ai également développé des compétences en matière de gestion de projet, en travaillant en groupe de 3 et en planifiant efficacement le projet. Ce projet m'a permis de travailler en équipe, de communiquer efficacement avec mes coéquipiers et de collaborer pour atteindre nos objectifs communs. En conclusion, ce projet m'a permis de développer des compétences pratiques en matière de programmation mobile, de gestion de projet et de collaboration en équipe, qui seront très utiles pour mon futur professionnel."><button>En savoir plus</button></a>
      </div>
    </div>
    
  </div>
  <div class="toComp">
    <a href="?page=competences">
      <button>Découvrir mes compétences</button>
    </a>
  </div>
</div>
<div id="modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2 id="modal-title">Titre</h2>
    <span id="desc">Description : </span>
    <p id="modal-body">Déscription :</p>
    <br>
    <div>
      <a href="" id="link-github">
      <button class="learn-more">
        <span class="circle" aria-hidden="true">
        <span class="icon arrow"></span>
        </span>
        <span class="button-text">Github</span>
      </button>
      </a>
    </div>
  </div>
</div>
