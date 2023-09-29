<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CConnexionController extends AbstractController
{
    #[Route('/connexion', name: 'app_c_connexion')]
    public function index(): Response
    {
        return $this->render('c_connexion/index.html.twig', [
            'controller_name' => 'CConnexionController',
        ]);
    }
}
