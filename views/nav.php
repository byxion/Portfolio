<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link rel="stylesheet" href="<?= PATH_CSS ?>nav.css">
  <!-- <link rel="stylesheet" href="<?= PATH_CSS ?>loader.css"> -->


  <script defer src="<?= PATH_SCRIPTS ?>navMenu.js" type="module"></script>
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
  <div class="scroll-tracker"></div>
  <nav>
    <ul>
      <div class="left">
        <a href="index.php">
          <li>Matéo Guenot</li>
        </a>
      </div>
      <div class="menu-btn">
        <div class="menu-btn-burger"></div>
      </div>
      <div class="right">
        <a href="?page=competences">
          <li>Compétences</li>
        </a>
        <a href="?page=CV">
          <li>CV</li>
        </a>
        <a href="?page=projet">
          <li>Projets</li>
        </a>
        <a href="?page=contact">
          <li>Contact</li>
        </a>
      </div>
    </ul>
  </nav>
  <div class="container-all">