<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class ExoController extends AbstractController
{
    /**
     *  Je crée une page avec une route pour récuperer le profil de l'utilisateur,
     * @Route("/profil", name="profil")
     */


    //J'utilise une méthode publique getProfile pour afficher mon tableau sur twig.

    public function getProfile()
    {

        $profile =
            [
                "firstname"=>"Flantier",
                "name"=>"Noel",
                "age" => 40,
                "job" => "secret agent",
                "active" => true
            ];

        //Je retourne ma réponse http en affichant sur le navigateur la page html profile.html.twig.twig
        //J'utilise la méthode render de la class AbstractController :
        //Je fais afficher une variable en utilisant la méthode render avec en paramètre un tableau contenant
        //cette même variable : ici $profile qui est un array
        //c'est à dire :


        return $this->render('profile.html.twig',
            [
            'profile'=>$profile
            ]);

    }

}