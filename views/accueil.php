<?php require_once(PATH_VIEWS . "nav.php") ?>

<head>
  <link rel="stylesheet" href="<?= PATH_CSS ?>accueil.css">
  <script defer src="https://unpkg.com/typewriter-effect@latest/dist/core.js">
  </script>
  <script defer src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <script defer type="module" src="<?= PATH_SCRIPTS ?>accueil.js"></script>
  <script defer src="<?= PATH_SCRIPTS ?>navMenu.js" type="module"></script>
</head>
<section class="welcome">
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="followCircle"></div>
  <h1 data-aos="fade-left" data-aos-delay="500">Je suis <span id="name">Maté<span id="int">o</span> Guenot</span>, étudiant en BUT informatique, passionné par les nouvelles technologies et <span id="toWrite"></span></h1>
  <button class="toAbout">
    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" width="24px" height="24px"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 20L12 4" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6 14L11.9375 19.9375V19.9375C11.972 19.972 12.028 19.972 12.0625 19.9375V19.9375L18 14" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
  </button>
</section>
<section class="about">
  <div class="about-content" data-aos="zoom-in-right">
    <h2>Qui suis-je ?</h2>
    <div class="about-text">
      <p>
        Je suis Matéo Guenot, un étudiant en informatique en BUT, et j'ai pour but de faire une école d'ingénieur en informatique pour me spécialiser dans un domaine de l'informatique. Je suis développeur full stack et j'utilise les langages suivants : HTML, CSS, JavaScript (ReactJs), PHP (Symfony), SQL, Java, C.
      </p>
    </div>
    <a href="?page=projet" id="toProject"><button class="toProject">Découvrir mes projets</button></a>
  </div>
  <div class="about-img" data-aos="zoom-in-left">
    <img src="<?= PATH_IMAGES ?>dev-pict.jpg" alt="about" />
  </div>
  
</section>
</body>

</html>