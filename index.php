<?php
// j'inclus le fichier des fonctions pour pouvoir les appeler ici
include 'functions.php';

// 
session_start();

// j'inclus le head avec les balises de base + la balise head (pour ne pas répéter le code qu'il contient)
include 'head.php';
?>

<body>
   <?php
   include 'header.php';
   ?>

   <main>
      <h1>Boutique php</h1>

      <div class="container">
         <div class="row">

            <?php
            // je déclare la variable qui contient mon tableau d'articles
            // sa valeur, c'est le tableau d'articles renvoyé par la fonction getarticles
            $articles = getArticles();

            // je teste cette variable pour vérifier que j'ai bien mes 3 articles
            //var_dump($articles);

            // je lance ma boucle pour afficher une card bootstrap par article
            foreach ($articles as $article) {

               echo "<div class=\"card col-md-4\">
                     <img src=\"./images/" . $article['picture'] . "\" class=\"card-img-top\" alt=\"...\">
                     <div class=\"card-body\">
                     <h5 class=\"card-title\">" . $article['name'] . "</h5>
                     <p class=\"card-text\">" . $article['description'] . "</p>

                     <form method=\"GET\" action=\"./produit.php\">

                     <input type=\"hidden\" name=\"productId\" value=\"" . $article['id'] . "\">

                     <input type=\"submit\" class=\"btn btn-primary\" value=\"Détails produit\">
                     </form>

                     </div>
                     </div>";
            }

            ?>

         </div>
      </div>
   </main>

   <?php
   include 'footer.php';
   ?>