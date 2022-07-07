<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DiscipolatController extends AbstractController
{
    #[Route('/discipolat', name: 'app_discipolat')]
    public function index(): Response
    {
        return $this->render('discipolat.html.twig', [
            'controller_name' => 'DiscipolatController',
        ]);
    }
}
