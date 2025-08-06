<?php

namespace App\Controller;

use App\ExceptionApplication;
use App\Parameter;
use App\Security\Action;
use App\Security\Role;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {

        return $this->render(
            'base.html.twig'
        );
    }


}
