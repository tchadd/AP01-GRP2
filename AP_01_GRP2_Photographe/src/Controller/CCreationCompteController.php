<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CCreationCompteController extends AbstractController
{
    #[Route('/creation/compte', name: 'app_c_creation_compte')]
    public function index(): Response
    {
        return $this->render('c_creation_compte/index.html.twig', [
            'controller_name' => 'CCreationCompteController',
        ]);
    }
}
