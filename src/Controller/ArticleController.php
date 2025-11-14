<?php

namespace App\Controller;

use Athos99\BaseDemoBundle\Service\BaseDemo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    public function __construct( private BaseDemo $baseDemo) {}
    #[Route("/article", name: "article")]
    public function homepage()

    {
        return $this->render('article.html.twig',['baseDemo'=>$this->baseDemo]);
    }


}
