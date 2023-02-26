<?php require_once(PATH_VIEWS . "nav.php") ?>

<head>
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="https://use.typekit.net/ehl0ehl.css">
  <link rel="stylesheet" type="text/css" href="<?= PATH_CSS ?>projet.css" />
  <script defer type="module" src="../assets/scripts/index.js"></script>
</head>

<div class="container">
  <div class="content">
    <div class="item">
      <span class="item__meta">2020</span>
      <h2 class="item__title">Alex Moulder</h2>
      <div class="item__img">
        <div class="item__img-inner" style="background-image:url(<?= PATH_IMAGES ?>1.jpg)"></div>
      </div>
      <p class="item__desc">I am only waiting for love to give myself up at last into his hands. That is why it is so late and why I have been guilty of such omissions.</p>
      <a class="item__link">view</a>
    </div>
    <div class="item">
      <span class="item__meta">2021</span>
      <h2 class="item__title">Aria Bennett</h2>
      <div class="item__img">
        <div class="item__img-inner" style="background-image:url(<?= PATH_IMAGES ?>2.jpg)"></div>
      </div>
      <p class="item__desc">They come with their laws and their codes to bind me fast; but I evade them ever, for I am only waiting for love to give myself up at last into his hands.</p>
      <a class="item__link">view</a>
    </div>
    <div class="item">
      <span class="item__meta">2022</span>
      <h2 class="item__title">Jimmy Hughes</h2>
      <div class="item__img">
        <div class="item__img-inner" style="background-image:url(<?= PATH_IMAGES ?>3.jpg)"></div>
      </div>
      <p class="item__desc">Clouds heap upon clouds and it darkens. Ah, love, why dost thou let me wait outside at the door all alone?</p>
      <a class="item__link">view</a>
    </div>
  </div>
  <div class="overlay">
    <div class="overlay__row"></div>
    <div class="overlay__row"></div>
  </div>
  <section class="previews">
    <div class="preview">
      <div class="preview__img">
        <div class="preview__img-inner" style="background-image:url(<?= PATH_IMAGES ?>1_big.jpg)"></div>
      </div>
      <h2 class="preview__title oh"><span class="oh__inner">Moulder</span></h2>
      <div class="preview__column preview__column--start">
        <span class="preview__column-title preview__column-title--main oh"><span class="oh__inner">Alex Moulder</span></span>
        <span class="oh"><span class="oh__inner">2020</span></span>
      </div>
      <div class="preview__column">
        <h3 class="preview__column-title oh"><span class="oh__inner">Location</span></h3>
        <p>And if it rains, a closed car at four. And we shall play a game of chess, pressing lidless eyes and waiting for a knock upon the door.</p>
      </div>
      <div class="preview__column">
        <h3 class="preview__column-title oh"><span class="oh__inner">Material</span></h3>
        <p>At the violet hour, when the eyes and back, turn upward from the desk, when the human engine waits.</p>
      </div>
      <button class="unbutton preview__back"><svg width="100px" height="18px" viewBox="0 0 50 9">
          <path vector-effect="non-scaling-stroke" d="m0 4.5 5-3m-5 3 5 3m45-3h-77"></path>
        </svg></button>
    </div>
    <div class="preview">
      <div class="preview__img">
        <div class="preview__img-inner" style="background-image:url(<?= PATH_IMAGES ?>2_big.jpg)"></div>
      </div>
      <h2 class="preview__title oh"><span class="oh__inner">Bennett</span></h2>
      <div class="preview__column preview__column--start">
        <span class="preview__column-title preview__column-title--main oh"><span class="oh__inner">Aria Bennett</span></span>
        <span class="oh"><span class="oh__inner">2021</span></span>
      </div>
      <div class="preview__column">
        <h3 class="preview__column-title oh"><span class="oh__inner">Location</span></h3>
        <p>And if it rains, a closed car at four. And we shall play a game of chess, pressing lidless eyes and waiting for a knock upon the door.</p>
      </div>
      <div class="preview__column">
        <h3 class="preview__column-title oh"><span class="oh__inner">Material</span></h3>
        <p>At the violet hour, when the eyes and back, turn upward from the desk, when the human engine waits.</p>
      </div>
      <button class="unbutton preview__back"><svg width="100px" height="18px" viewBox="0 0 50 9">
          <path vector-effect="non-scaling-stroke" d="m0 4.5 5-3m-5 3 5 3m45-3h-77"></path>
        </svg></button>
    </div>
    <div class="preview">
      <div class="preview__img">
        <div class="preview__img-inner" style="background-image:url(<?= PATH_IMAGES ?>3_big.jpg)"></div>
      </div>
      <h2 class="preview__title oh"><span class="oh__inner">Hughes</span></h2>
      <div class="preview__column preview__column--start">
        <span class="preview__column-title preview__column-title--main oh"><span class="oh__inner">Jimmy Hughes</span></span>
        <span class="oh"><span class="oh__inner">2022</span></span>
      </div>
      <div class="preview__column">
        <h3 class="preview__column-title oh"><span class="oh__inner">Location</span></h3>
        <p>And if it rains, a closed car at four. And we shall play a game of chess, pressing lidless eyes and waiting for a knock upon the door.</p>
      </div>
      <div class="preview__column">
        <h3 class="preview__column-title oh"><span class="oh__inner">Material</span></h3>
        <p>At the violet hour, when the eyes and back, turn upward from the desk, when the human engine waits.</p>
      </div>
      <button class="unbutton preview__back"><svg width="100px" height="18px" viewBox="0 0 50 9">
          <path vector-effect="non-scaling-stroke" d="m0 4.5 5-3m-5 3 5 3m45-3h-77"></path>
        </svg></button>
    </div>
  </section>
</div>