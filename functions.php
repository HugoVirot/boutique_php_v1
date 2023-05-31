<?php

// *********************** renvoyer un tableau d'articles *************************

function getArticles()
{
    return [
        //********************** article 1 **********************/
        [
            'name' => 'Dark Watch',
            'id' => '1',
            'price' => 149.99,
            'description' => 'Moderne et élégante',
            'detailedDescription' => 'Designée par nos experts, elle impose son style partout où elle passe. 
                                  Elle allie le noir profond au plus beau bleu royal.
                                  Equipée d\'un altimètre, elle affiche également la météo.  
                                  Prix agressif et allure avant-gardiste : vous ne serez pas déçu.',
            'picture' => 'watch1.jpg'
        ],

        //********************** article 2 **********************/
        [
            'name' => 'Classic Leather',
            'id' => '2',
            'price' => 229.49,
            'description' => 'Affiche l\'heure de 250 pays',
            'detailedDescription' => 'Une montre qui respire la maturité avec son superbe bracelet en cuir authentique. 
                                  Fonction incroyable permettant de consulter toutes les heures du globe.
                                  Elégance garantie avec son cadran cerclé d\'argent.
                                  Elle est destinée aux pères de famille qui aiment se faire plaisir.',
            'picture' => 'watch2.jpg'
        ],

        //********************** article 3 **********************/
        [
            'name' => 'Silver Star',
            'id' => '3',
            'price' => 345.99,
            'description' => 'La classe à l\'état pur',
            'detailedDescription' => '100% acier inoxydable haute résistance. 
                                  Vous allez impressionner la galerie avec cette merveille !
                                  Aiguilles phosphorescentes et cadran incassable avec vitre en plexiglas.  
                                  N\'attendez plus et révélez le sportif en vous !',
            'picture' => 'watch3.jpg'
        ],

        
        //********************** article 4 **********************/
        [
            'name' => 'Montre 4',
            'id' => '4',
            'price' => 999.99,
            'description' => 'La montre 4',
            'detailedDescription' => '100% acier inoxydable haute résistance. 
                                  Vous allez impressionner la galerie avec cette merveille !
                                  Aiguilles phosphorescentes et cadran incassable avec vitre en plexiglas.  
                                  N\'attendez plus et révélez le sportif en vous !',
            'picture' => 'watch4.jpg'
        ]
    ];
}

// ************* récupérer le produit qui correspond à l'id fourni en paramètre ******************

function getArticleFromId($id) {

    // récupérer la liste des articles
    $articles = getArticles();

    // aller chercher dedans l'article qui comporte l'id en paramètre
    foreach ($articles as $article){
        if ($article['id'] == $id) {
                // le renvoyer avec un return
            return $article;
        }
    }
}