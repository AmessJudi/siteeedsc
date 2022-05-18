<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnseignementController extends AbstractController
{
    #[Route('/enseignement', name: 'app_enseignement')]
    public function index(): Response
    {
        return $this->render('enseignement.html.twig', [
            'controller_name' => 'EnseignementController',
        ]);
    }
}
