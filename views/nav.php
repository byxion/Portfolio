<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Portfolio de Matéo Guenot, étudiant en développement informatique.">
  <title>Portfolio</title>
  <link rel="stylesheet" href="<?= PATH_CSS ?>nav.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="<?= PATH_CSS ?>loader.css"> -->

  <script defer src="<?= PATH_SCRIPTS ?>navMenu.js" type="module"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- <script defer src="./loader/loader.js"></script>
    <link rel="stylesheet" href="./loader/loader.css" /> -->
</head>

<body>
  <!-- <div class="loader">
    <span class="lettre">C</span><span class="lettre">H</span
    ><span class="lettre">A</span><span class="lettre">R</span
    ><span class="lettre">G</span><span class="lettre">E</span
    ><span class="lettre">M</span><span class="lettre">E</span
    ><span class="lettre">N</span><span class="lettre">T</span>
  </div> -->
  <nav>
    <ul>
      <div class="left">
        <a href="index.php" data-aos="fade-down" data-aos-duration="500">
          <li>Matéo Guenot</li>
        </a>
      </div>
      <div class="menu-btn">
        <div class="menu-btn-burger"></div>
      </div>
      <div class="right">
        <a href="?page=projet" data-aos="fade-down" data-aos-delay="50" data-aos-duration="500">
          <li>Projets</li>
        </a>
        <a href="?page=competences" data-aos="fade-down" data-aos-delay="100" data-aos-duration="500">
          <li>Compétences</li>
        </a>
        <a href="?page=CV" data-aos="fade-down" data-aos-delay="150" data-aos-duration="500">
          <li>CV</li>
        </a>
        <a href="?page=contact" data-aos="fade-down" data-aos-delay="200" data-aos-duration="500">
          <li>Contact</li>
        </a>
      </div>
    </ul>
  </nav>
  <div class="container-all">
<script>
  AOS.init();
</script>