<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class articleController
{
    /**
     *  Je crée une nouvelle page avec une nouvelle route pour récuperer des articles grâce à leur id.
     * @Route("/article", name="article")
     */

    //J'utilise une méthode publique de Symfony avec en paramètres l'autowire de Symfony définit par
    // la classe Request et la variable $request.

    public function recuperer_Article(Request $request)
    {


        // Je récupère mon "id" avec la propriété query et la fonction get:

        $idArticle = $request->query->get("id");

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

        //Pour obtenir l'article de l'id récupérer dans l'url, on fait passer dans le tableau $articles,
        //l'index $idArticle.

        $articles[$idArticle];

        //Je crée une nouvelle réponse en l'instanciant grâce à la classe Response.

        $response = new Response("<h1>" . $articles[$idArticle] . "</h1>");

        return $response;
    }
}