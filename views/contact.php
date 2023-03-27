<?php require_once(PATH_VIEWS . "nav.php") ?>

<head>
  <link rel="stylesheet" href="<?= PATH_CSS ?>contact.css">
</head>

<div class="container">
  <div class="title">
    <h1>Contactez moi !</h1>
  </div>
  <div class="info">
    <span>mateo.guenot20@gmail.com</span>
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