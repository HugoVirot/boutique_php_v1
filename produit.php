<?php
// j'inclus le fichier des fonctions pour pouvoir les appeler ici
include 'functions.php';

// initialiser la session et accéder à la superglobale $_SESSION (tableau associatif)
session_start();

// initialiser le panier
createCart();

// j'inclus le head avec les balises de base + la balise head (pour ne pas répéter le code qu'il contient)
include 'head.php';
?>

<body>
   <?php
   include 'header.php';
   ?>

   <main>
      <?php
      // 1) récupérer l'id transmis par le formulaire en GET
      $productId = $_GET['productId'];
      //var_dump($productId); // je teste ma variable

      // 2) récupérer le produit qui correspond à cet id
      $article = getArticleFromId($productId);
      //var_dump($productId); // je teste ma variable

      // 3) afficher ses infos
      ?>

      <div class="container">

         <div class="card mb-3 text-center">
            <img src="./images/<?= $article['picture']?>" class="card-img-top w-50 mx-auto" alt="...">
            <div class="card-body">
               <h1 class="card-title"><?= $article['name']?></h1>
               <p class="card-text"><?= $article['price']?> €</p>
               <p class="card-text"><?= $article['description']?></p>
               <p class="card-text"><small class="text-body-secondary"><?= $article['detailedDescription']?></small></p>
            </div>
         </div>

      </div>

   </main>

   <?php
   include 'footer.php';
   ?>