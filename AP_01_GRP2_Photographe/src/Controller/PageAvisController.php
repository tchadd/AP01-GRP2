<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageAvisController extends AbstractController
{
    #[Route('/avis', name: 'app_page_avis')]
    public function index(): Response
    {
        return $this->render('page_avis/index.html.twig', [
            'controller_name' => 'PageAvisController',
        ]);
    }
}
