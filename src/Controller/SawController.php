<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SawController extends AbstractController
{
    /**
     * @Route("/saw", name="saw")
     */

    public function saw()
    {
        return new Response("AKAKAKAKAKKAAKAKKKKK");
    }
}