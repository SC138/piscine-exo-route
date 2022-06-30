<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

// TOUJOURS mettre die; à la fin d'un var_dump !!!

class AfficheurController
{
    /**
     * @Route ("/affiche/{id}", name="NomArticle")
     */

    public function  showArticle($id)
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


        $article = $articles[$id];
        return new Response($article ['title']);
    }

}