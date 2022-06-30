<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;



class ArticlesController extends AbstractController
{
    /**
     * @Route ("/article", name="articlesBlog")
     */

    public function articlesBlog(Request $request)
    {
        $articles = [
            1 => [
                'title' => 'La canicule, il fait chaud',
                'contenu' => 'je transpire'
            ],
            2 => [
                'title' => 'Fin des moteurs thermiques en 2035',
                'contenu' => 'BROUM'
            ],
            3 => [
                'title' => "L'alcool c'est pas cool",
                'contenu' => "Pourquoi y'a cool dans alcool ?"
            ]
        ];

        $id = $request->query->get('id');
        $article = $articles[$id];
        return new Response($article ['title']);
    }
}