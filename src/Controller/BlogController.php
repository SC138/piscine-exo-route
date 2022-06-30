<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController
{
    /**
     * @Route("/articleBlog", name="article")
     */

    public function article()
    {
        return new Response("Titre de l'article");
    }

}