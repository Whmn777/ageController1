<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class articleController
{
    /**
     *  Je crée une nouvelle page avec une nouvelle route pour récuperer des articles grâce à leur id
     * en utilisant une wildcard id entre acollades.
     * @Route("/article/{id}", name="article")
     */

    //J'utilise une méthode publique de Symfony avec en paramètres la wildcard id
    // Cette wildcard id va récupérer automatiquement l'id de l'url entré par l'utilisateur.

    public function recupererArticle($id)
    {



        //A partir d'un tableau contenant des articles, je simule une requête de récupération des données
        //dans une BDD.

        $articles = [
            1 => 'Article 1',
            2 => "Article 2",
            3 => "Article 3",
            4 => 'Article 4',
            5 => "Article 5",
            6 => "Article 6",
        ];

        //Pour obtenir l'article de l'id entré par l'utilisateur dans l'url, on fait passer dans le tableau $articles,
        //l'index $id.
        //$articles[$id];

        //Je crée une nouvelle réponse en l'instanciant grâce à la classe Response.

        $response = new Response("<h1>" . $articles[$id] . "</h1>");

        //Je retourne ma reponse :
        return $response;
    }
}