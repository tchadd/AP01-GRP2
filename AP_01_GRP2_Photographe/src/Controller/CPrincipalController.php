<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CPrincipalController extends AbstractController
{
    #[Route('/c/principal', name: 'app_c_principal')]
    public function index(): Response
    {
        return $this->render('c_principal/index.html.twig', [
            'controller_name' => 'CPrincipalController',
        ]);
    }
}
