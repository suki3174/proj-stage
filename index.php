<?php
$title = 'Accueil';
$imgurl = 'https://linstant-m.tn//uploads/8139.png';
require 'header.php'; ?>

<div class="html">
  <div class="body">
    <div class="main-container">
      <div class="grid-container">
        <!-- Alternate between text and image cards -->
        <div class="card card__content">
          <div>
            <h1>Bienvenue à Startup Village</h1>
            <h2>l'histoire d'un nouvel espace de vie pour l'innovation et l'entreprenariat.</h2>
          </div>
        </div>
        <div class="card card__image">
          <img src="images\1.jpeg" alt="">
        </div>
        <div class="card card__content">
          <div>
            <p>Un village de partage et d'échange dont l'ambition principale est de placer la culture de Co-création au cœur du développement.<br>
              Le projet a été réalisé dans un bâtiment historique conçu par l'architecte Olivier Clément Cacoub. Après 10 mois de travaux collaboratifs entre les villageois, une équipe de 4 architectes et un scénographe, le village a vu le jour pour devenir aujourd'hui un espace unique en son genre : un espace de vie convivial et bienveillant pour l'innovation et l'entreprenariat !</p>
          </div>
        </div>
        <div class="card card__image">
          <img src="images/2.jpeg" alt="">
        </div>
        <div class="card card__content">
          <div>
            <h2>Concept</h2>
            <p>Le village est plus qu'un espace de vie, c'est un concept innovant fondé sur une vision de partage et de transfert de compétences : un écosystème où tous les acteurs participent au développement en s'inspirant les uns des autres.</p>
          </div>
        </div>
        <div class="card card__image">
          <img src="images/3.jpeg" alt="">
        </div>
        <div class="card card__content">
          <div>
            <h2>Espace de vie</h2>
            <p>Travailler au monde de demain, c'est aussi concevoir un espace innovant qui réunit une soixantaine de Co-Thinking spaces et composé de salles de réunion, de formation, de studios, de box, de restaurant, de terrasses, d'espaces de travail nomades, des hot desking, etc.</p>
            <a href="video.php" class="a">Visite virtuelle</a>
          </div>
        </div>
        <div class="card card__image">
          <img src="images/4.jpeg" alt="">
        </div>
        <div class="card card__content">
          <div>
            <h2>Rejoignez le club Startup Village</h2>
            <p>L'aspect écoresponsable du Startup Village est tangible dans la plupart des œuvres présentes dans le village, réalisées par des artistes, des artisans et des passionnés.</p>
            <a href="contact.php" class="a">Contactez nous!</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="titre">
  <h2>Découvrez notre gallerie d'art</h2>
</div>
<div class="body2 art">
  <div class="stack">
    <div class="card2">
      <div class="image">
        <a href="art.php" class="pic"><img src="artist\Ridha Ghrab\bob-marley.jpg" alt="img" class="image img2"></a>
      </div>
    </div>
  </div>
  <div class="stack">
    <div class="card2">
      <div class="image">
        <a href="art.php" class="pic"><img src="artist\Hela Sarraj\abstract.jpg" alt="img" class="image img2"></a>
      </div>
    </div>
  </div>
  <div class="stack">
    <div class="card2">
      <div class="image">
        <a href="art.php" class="pic"><img src="artist\Mohamed Ben Romdhane\amwej.jpg" alt="img" class="image img2"></a>
      </div>
    </div>
  </div>

</div>
<div class="titre" id="t2">
  <h2>Ainsi que nos événements</h2>
</div>


<div class="container text-center" id="t2" style="position: relative;left:50px;">
  <div class="row justify-content-center">
    <div class="col-md-10">
    <a href="events.php">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="max-width: 800px;">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://www.startupvillage.tn/wp-content/uploads/2020/09/img29.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://www.startupvillage.tn/wp-content/uploads/2022/06/img30.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://www.startupvillage.tn/wp-content/uploads/2022/07/act3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
    </a>
    </div>
  </div>
</div>







<?php require 'footer.php' ?>