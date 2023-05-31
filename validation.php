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
      <h1>Validation</h1>
      <?php
      ?>
   </main>

   <?php
   include 'footer.php';
   ?>