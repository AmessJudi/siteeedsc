<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/message', name: 'message_')]
class EnseignementController extends AbstractController
{

    //index route controller for main message page(may help to browse others message sections)
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('message/index.html.twig', [
            'controller_name' => 'EnseignementController',
        ]);
    }

    //Video message route controller
    #[Route('/videomessage', name: 'video')]
    public function videomessage(): Response
    {
        return $this->render('message/videomessage.html.twig', [
            'controller_name' => 'videomessage',
        ]);
    }

    //Audio message route controller
    #[Route('/audiomessage', name: 'audio')]
    public function audiomessage(): Response
    {
        return $this->render('message/videomessage.html.twig', [
            'controller_name' => 'audiomessage',
        ]);
    }

    //Text message route controller
    #[Route('/textmessage', name: 'text')]
    public function textmessage(): Response
    {
        return $this->render('message/videomessage.html.twig', [
            'controller_name' => 'textmessagemessage',
        ]);
    }
}
