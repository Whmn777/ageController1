<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class articleController extends AbstractController

{
    /**
     * Je crée une page d'acceuil :
     * @Route("/", name="accueil")
     */

    //J'utilise une méthode publique pour faire afficher ma page acceuil en http avec la classe Response.
    public function pageAcceuil(){
        Return new Response("Bienvenue à la page d'Acceuil");
    }

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

        //Je retourne ma reponse http (grâce à la class Response) est parce qu'un Controller doit retourner une réponse.
        //Sinon çà affichera une erreur
        return $response;
    }


    /**
     * @Route("/formulaire", name ="formulaire")
     */

    //je crée une méthode publique formulaire:

    public function formulaire ()
    {

        //Je définis une variable $formulaireEnvoyé pour simuler l'envoi de mon formulaire:

        $formulaireEnvoye = false;

        //Si le formulaire n'est pas envoyé,

        if (!$formulaireEnvoye){

            //je retourne une réponse http affichant le texte suivant:

            return new Response ("Merci de remplir le formulaire");

            //Sinon :

        }else {

            //avec la méthode redirectToRoute de la classe Abstractcontroller je redirige l'utilisateur
            // à la page d'acceuil.

            return $this->redirectToRoute("accueil");
        }

    }
}