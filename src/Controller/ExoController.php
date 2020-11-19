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
                "firstname" => "Flantier",
                "name" => "Noel",
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
                'profile' => $profile //'profile'=nom de la variable dans twig=>qui prend pour valeur la variable $profile
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
                'skills' => $skills //'skills'=nom de la variable dans twig=>qui prend pour valeur la variable $skills
            ]);

        //Dans la méthode render, Symfony va compiler le fichier twig en html afin qu'il soit lisible par le navigateur
        //les variables en php seront aussi affichées, avec la page html, avec leurs valeurs).
    }


    /**
     *  Je crée une page avec une nouvelle route pour récuperer les agents
     * @Route("/agents", name="agents")
     */

    //Je crée une méthode publique avec Symfony, que je nomme getAgents, pour pouvoir récupérer de mon tableau
    //les informations désirées, et les faire afficher ensuite sur le navigateur:

    public function getAgents()
    {
        // $agents est un tableau multi dimensionnel:

        $agents = [
            1 => [
                "id" => 1,
                "lastName" => "Robert",
                "firstName" => "David",
                "age" => 30,
                "published" => true
            ],
            2 => [
                "id" => 2,
                "lastName" => "Labaste",
                "firstName" => "Denis",
                "age" => 29,
                "published" => true
            ],
            3 => [
                "id" => 3,
                "lastName" => "Rozand",
                "firstName" => "Mathieu",
                "age" => 31,
                "published" => false
            ],
            4 => [
                "id" => 4,
                "lastName" => "Despert",
                "firstName" => "Yoann",
                "age" => 33,
                "published" => true
            ],
            5 => [
                "id" => 5,
                "lastName" => "Dorignac",
                "firstName" => "Loic",
                "age" => 34,
                "published" => false
            ]
        ];

        //Je retourne ma réponse http en affichant sur le navigateur la page html agents.html.twig
        //J'utilise la méthode render de la class AbstractController :
        //Je fais afficher une variable en utilisant la méthode render avec en paramètre un tableau contenant
        //cette même variable : ici $agents qui est un array multi dimensionnel (c'est à dire des tableaux imbriqués
        //les uns dans les autres).

        return $this->render('agents.html.twig',
            [
                'agents' => $agents //'agents'=nom de la variable dans twig=>qui prend pour valeur la variable $agents
            ]);


        //Dans la méthode render, Symfony va compiler le fichier twig en html afin qu'il soit lisible par le navigateur
        //les variables en php seront aussi affichées, avec la page html, avec leurs valeurs).


    }


    /**
     *  Je crée une page avec une nouvelle route pour récuperer afficher chaque agent
     * @Route("/agent/{id}", name="agent")
     */

//Je crée avec Symfony une méthode publique agentShow pour faire afficher sur mon navigateur chaque agent.
//Pour cela je récupère chaque id de chaque agent, ce qui veut dire que je passe en paramètre de ma méthode
// l'id coresspondant :


    public function agentShow($id)
    {
        // $agents est un tableau multi dimensionnel:

        $agents = [
            1 => [
                "id" => 1,
                "lastName" => "Robert",
                "firstName" => "David",
                "age" => 30,
                "published" => true
            ],
            2 => [
                "id" => 2,
                "lastName" => "Labaste",
                "firstName" => "Denis",
                "age" => 29,
                "published" => true
            ],
            3 => [
                "id" => 3,
                "lastName" => "Rozand",
                "firstName" => "Mathieu",
                "age" => 31,
                "published" => false
            ],
            4 => [
                "id" => 4,
                "lastName" => "Despert",
                "firstName" => "Yoann",
                "age" => 33,
                "published" => true
            ],
            5 => [
                "id" => 5,
                "lastName" => "Dorignac",
                "firstName" => "Loic",
                "age" => 34,
                "published" => false
            ]
        ];


        // Je récupère l'id de mon agent dans ma variable $agent.

        $agent = $agents[$id];

        //je retourne ma méthode en utilisant la méthode render de la classe AbstractController, afin d'afficher la
        //page de chaque Agent. Je passe donc en paramètre du render l'url de ma page agent.html.twig, et un tableau
        //qui fournit chaque informations par agent : $agent



        return $this->render('agent.html.twig',
            [
                'agent' => $agent // 'agent' étant ma variable dans twig qui a pour valeur $agent
            ]);
    }
}