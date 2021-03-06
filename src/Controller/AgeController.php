<?php


namespace App\Controller;



use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgeController
{
    /**
     * @Route("/age",name="age")
     */

    public function comparer_age (Request $request){

        $age = $request->query->get('age');

        if ($age >= 18) {
            echo "bienvenue";
        }
        else {
            echo "reviens plus tard!";
        }

        die;

    }


    /**
     * Je crée une nouvelle route pour nom et prénom (je définis l'url, puis je le nomme avec name="".)
     * @Route("/nomPrenom", name="nomPrenom")
     */

    //J'utilise une méthode publique de Symfony  pour récupérer grâce à la classe Request
    // le nom et le prénom dans l'url.

    public function recuperer_nomPrenom(Request $request){

        $nom = $request->query->get('nom');
        $prenom = $request->query->get('prenom');

        //Je crée une instance de la classe Responce contenant une chaîne de caractères et des balises HTML
        //Je stocke la réponse dans une variable $response.

        $response= new Response('<p>Bonjour'.$nom." ".$prenom.'</p>');
        //Comme on besoin de spécifier du contenu dans Response, on ne peut pas l'utiliser comme autowire.

        //Je retourne ma méthode recuperer_nomPrenom

        return $response;

    }


}
