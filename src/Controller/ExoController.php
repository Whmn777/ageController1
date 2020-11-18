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

        //Je retourne ma réponse http en affichant sur le navigateur la page html profile.html.twig
        //J'utilise la méthode render de la class AbstractController :
        //Je fais afficher une variable en utilisant la méthode render avec en paramètre un tableau contenant
        //cette même variable : ici $profile qui est un array
        //c'est à dire :


        return $this->render('profile.html.twig',
            [
            'profile'=>$profile //'profile'=nom de la variable dans twig=>qui prend pour valeur la variable $profile
            ]);

        //Dans la méthode render, Symfony va compiler le fichier twig en html afin qu'il soit lisible par le navigateur
        //les variables en php seront aussi affichées, avec la page html, avec leurs valeurs).
    }

    /**
     *  Je crée une page avec une nouvelle route pour récuperer les skills du profil utilisateur,
     * @Route("/skills", name="skills")
     */


    public function getSkills()
    {

        $skills =
            ["serviable",
                "aimable",
                "drôle",
                "poli",
            ];

        //Je retourne ma réponse http en affichant sur le navigateur la page html skills.html.twig
        //J'utilise la méthode render de la class AbstractController :
        //Je fais afficher une variable en utilisant la méthode render avec en paramètre un tableau contenant
        //cette même variable : ici $skills qui est un array
        //c'est à dire :


        return $this->render('skills.html.twig',
            [
                'skills'=>$skills //'skills'=nom de la variable dans twig=>qui prend pour valeur la variable $skills
            ]);

        //Dans la méthode render, Symfony va compiler le fichier twig en html afin qu'il soit lisible par le navigateur
        //les variables en php seront aussi affichées, avec la page html, avec leurs valeurs).
    }

}