<?php require_once(PATH_VIEWS . "nav.php") ?>

<head>

  <title>CV</title>
  <link rel="stylesheet" href="<?= PATH_CSS ?>CV.css">
</head>

<div class="container">
  <!-- "Feuille" du CV -->
  <header>
    <h1>MATEO GUENOT</h1>
    <div>Etudiant BUT Info</div>
    <div id="Trait"></div>
    <!-- Fait un trait avec du css -->
  </header>
  <aside>
    <div>
      <!-- Ici une div car pas de titre donc ce n'est pas un article -->
      <img id="Photo" src="<?= PATH_IMAGES ?>001v.jpg" alt="photo de profil" />
    </div>
    <article>
      <h2>PERSONNEL</h2>
      <div class="Personnel">
        <span class="Nom-Age">Nom</span><span>Matéo Guenot</span>
        <span class="Nom-Age">Age</span><span>21 ans</span>
        <span class="Nom-Age">Nationnalité</span><span>Français</span>
        <span class="Nom-Age">Langues</span><span>Français, Anglais</span>
      </div>
    </article>
    <article>
      <h2>CONTACT</h2>
      <div class="Personnel">
        <span class="Mobile-Mail">Mail</span><span id="break">mateo.guenot20@gmail.com</span>
        <span class="Mobile-Mail">Adresse</span><span>Lucenay 69480</span>
      </div>
    </article>
    <article>
      <h2>CENTRES D'INTÉRÊT</h2>
      <div class="Trait-noir-aside"></div>
      <div id="logo">
        <!-- Pour faire du grid sur css -->
        <div class="Voyage">
          <!-- Pour ajouter le texte qui apparait en dessous -->
          <img src="<?= PATH_IMAGES ?>manette.png" alt="logo-voyage" class="Image" />
          <div class="content">
            <p>Jeux Vidéo</p>
          </div>
        </div>
        <div class="Velo">
          <img src="<?= PATH_IMAGES ?>Velo_transparent.png" alt="logo-velo" class="Image" />
          <div class="content">
            <p>Vélo</p>
          </div>
        </div>
        <div class="Musique">
          <img src="<?= PATH_IMAGES ?>Musique_transparent.png" alt="logo-musique" class="Image" />
          <div class="content">
            <p>Musique</p>
          </div>
        </div>
      </div>
    </article>
    <article>
      <h2>LINKEDIN</h2>
      <div class="Trait-noir-aside"></div>
      <div id="qr-code">
        <img src="<?= PATH_IMAGES ?>Linkedin_transparent.png" alt="logo-linkedin" id="linkedin" />
      </div>
    </article>
  </aside>
  <main class="cv">
    <section class="Profil">
      <h2>PROFIL</h2>
      <div class="Trait-noir-main"></div>
      <p>
        Je suis Matéo Guenot, j'ai 21 ans. Ayant découvert l'informatique
        depuis peu, j'essaye de découvrir le plus de technologies pour
        trouver le métier qui me conviendrait le plus. J'adore réaliser des
        projets à plusieurs pour apprendre de chaque personne.
      </p>
    </section>
    <section class="Formation">
      <h2>FORMATION</h2>
      <div class="Trait-noir-main"></div>
      <div class="Ranger">
        <!-- Pour réduire la longueur du texte avec le css -->
        <span data-year="2022">Bachelor Universitaire de Technologie en Informatique
          2021-2024</span>
        <p>IUT Informatique Doua</p>
        <p>
          Actuellement en troisième année de B.U.T dans le parcours A,
          Développement et réalisation d'applications.
        </p>
        <span data-year="2020">Lycée La Martinière Monplaisir 2018-2021</span>
        <p>Obtention du BAC Général</p>
        <p>
          Obtention du BAC Général option Mathématique et Physique-Chimie.
        </p>
      </div>
    </section>
    <section class="Compétences">
      <h2>COMPÉTENCES</h2>
      <div class="Trait-noir-main"></div>
      <div class="Comp-Progress">
        <progress value="90" max="100" data-comp="HTML/CSS"></progress>
        <progress value="60" max="100" data-comp="Python"></progress>
        <progress value="30" max="100" data-comp="C"></progress>
        <progress value="45" max="100" data-comp="SQL"></progress>
        <progress value="80" max="100" data-comp="Angais"></progress>
        <progress value="60" max="100" data-comp="Test Unitaire"></progress>
      </div>
    </section>
    <section class="Expérience">
      <h2>EXPÉRIENCES ET PROJETS</h2>
      <div class="Trait-noir-main"></div>
      <div class="Ranger">
        <span data-year="2022">Projet de graph map analyse</span>
        <!-- data-year permet d'enlever du code css -->
        <p>Réalisé en 1ère année de BUT</p>
        <p>
          Logiciel ayant pour principale fonctionnalité de calculer le
          chemin le plus court entre deux villes.
        </p>
      </div>
      <div class="Ranger">
        <span data-year="2018">Stage de 3eme</span>
        <!-- data-year permet d'enlever du code css -->
        <p>Rest O² Delices</p>
        <p>Stage en tant que serveur.</p>
      </div>
    </section>
  </main>
  <footer>
    <p>
      <span class="couleur-inversé">Mateo Guenot</span>, <span class="couleur-inversé">Adresse</span>
      69480 Lucenay, <span class="couleur-inversé">Mail</span> mateo.guenot20@gmail.com
    </p>
  </footer>
</div>
</body>