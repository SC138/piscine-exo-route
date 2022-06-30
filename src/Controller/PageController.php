<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




class PageController extends AbstractController
    {
/**
 * @Route("/")
 * Je crée une route, en utilisant des commentaires PHP et "@Route" pour spécifier
 * l'url de la page je veux crer la route situés au dessus de la méthode à appeler pour la page.
 */
public function home()
{
//Je renvoie une réponse HTTP gràce à l'objet Response
//(du composant http fondation de symfony)
//ça affichera la phrase quand l'url "/" sera demandée
return new Response( 'Hello Acceuil');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return new Response("contact");
    }

    }

