<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symnfony\Component\Routing\Annotation\Route;
class AgeController
{
    /*
     ** @Route("/age",name="age")
     */

    public function comparer_age (Request $request){

        $age = $request->query->get('age');

        if ($age < 18) {
            echo "bienvenue";
        }
        else {
            echo "dégage";
        }

    }
}