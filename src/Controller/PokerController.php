<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PokerController extends AbstractController
{
    /**
     * @Route("/poker", name="poker")
     */

    public function poker(Request $request)
    {
        $age = $request->query->get('age');

        if ($age >= 18){
            return new Response("Bienvenue sur PokerLand");
        } else {
            return $this->redirectToRoute("saw");
        }
    }
}



