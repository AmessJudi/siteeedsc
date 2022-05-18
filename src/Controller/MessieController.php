<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessieController extends AbstractController
{
    #[Route('/messie', name: 'app_messie')]
    public function index(): Response
    {
        return $this->render('messie.html.twig', [
            'controller_name' => 'MessieController',
        ]);
    }
}
