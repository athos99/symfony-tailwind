<?php

namespace App\Controller;

use Athos99\IpsumBundle\Service\Ipsum;
use Athos99\TestBundle\Service\Test;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    public function __construct( private Ipsum $ipsum, private Test $test) {}
    #[Route("/article", name: "article")]
    public function homepage()

    {
        return $this->render('article.html.twig',['ipsum'=>$this->ipsum,'test'=>$this->test]);
    }


}
