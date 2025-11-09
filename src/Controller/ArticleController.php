<?php

namespace App\Controller;

use Athos99\Ipsum\Service\Ipsum;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    public function __construct( private Ipsum $ipsum) {}
    #[Route("/article", name: "article")]
    public function homepage()

    {
        return $this->render('article.html.twig',['ipsum'=>$this->ipsum]);
    }


}
