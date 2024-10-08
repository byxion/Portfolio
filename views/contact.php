<?php require_once(PATH_VIEWS . "nav.php") ?>

<head>
  <link rel="stylesheet" href="<?= PATH_CSS ?>contact.css">
  <script defer src="https://kit.fontawesome.com/f06f56c2b1.js" crossorigin="anonymous"></script>
</head>

<div class="container">
  <div class="title">
    <h1>Contactez moi !</h1>
  </div>
  <div class="info">
    <ul class="wrapper">
      <a href="https://www.linkedin.com/in/mateo-guenot-b4b6b9221/">
        <li class="icon facebook">
          <span class="tooltip">LinkedIn</span>
          <span><i class="fab fa-linkedin"></i></span>
        </li>
      </a>
      <a href="">
        <li class="icon twitter">
          <span class="tooltip">Mail</span>
          <span><i class="far fa-envelope"></i></span>
        </li>
      </a>
      <a href="https://github.com/byxion">
        <li class="icon instagram">
          <span class="tooltip">GitHub</span>
          <span><i class="fab fa-github"></i></span>
        </li>
      </a>
    </ul>
    <span>N'hésitez pas à me contacter si vous souhaitez plus d'information ou alors me rapporter un problème.</span>
  </div>
  <div class="form">
    <form action="?page=accueil" method="POST">
      <input type="text" name="name" placeholder="Nom">
      <input type="text" name="email" placeholder="Email">
      <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
      <button type="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span> Envoyer
      </button>
    </form>
  </div>
</div>