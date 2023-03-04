<?php require_once(PATH_VIEWS . "nav.php") ?>

<head>
  <link rel="stylesheet" href="<?= PATH_CSS ?>accueil.css">
  <script defer src="https://unpkg.com/typewriter-effect@latest/dist/core.js">
  </script>
  <script defer type="module" src="<?= PATH_SCRIPTS ?>accueil.js"></script>
  <script defer src="<?= PATH_SCRIPTS ?>navMenu.js" type="module"></script>
</head>
<section class="welcome">
  <h1></h1>
  <span class="welcome-sentence">Bienvenue sur mon site portfolio. </span>
  <span class="welcome-sentence order">
    Vous pouvez scroller pour commencer le site !
  </span>
</section>
<section class="about">
  <div class="about-content">
    <h2>Qui suis-je ?</h2>
    <div class="about-text">
      <p>
        Je suis un jeune développeur web, passionné par le développement
        front-end. J'ai commencé à apprendre le développement web en
        autodidacte, puis j'ai poursuivi cela dans mes études en réalisant
        un Bachelor Universitaire de Technologies. J'ai pu apprendre les
        bases du développement web comme
        <span class="language-web"></span>
      </p>
      <p>
        Ainsi que les langages de programmation les plus utilisés, tel que
        le C, le Python et le Java.
      </p>

      <p>
        Je suis actuellement à la recherche d'un stage de 3 mois en tant que
        développeur web junior.
      </p>
    </div>
  </div>
  <div class="about-img">
    <img src="<?= PATH_IMAGES ?>dev-pict.jpg" alt="about" />
  </div>
</section>
</body>

</html>