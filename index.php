<?php
// Initialisation des paramètres du site
require_once("config/config.php");

//vérification de la page demandée 
if (isset($_GET['page'])) {
  $page = htmlspecialchars($_GET['page']); // http://.../index.php?page=toto
  if (!is_file(PATH_VIEWS . $_GET['page'] . ".php")) {
    $page = 'accueil'; //page demandée inexistante
  }
} else
  $page = 'accueil'; //page d'accueil du site - http://.../index.php

//appel du controller
require_once(PATH_VIEWS . $page . '.php');
