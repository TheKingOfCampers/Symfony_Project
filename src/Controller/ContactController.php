<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    // crée la route et lui donner un nom qui ne change jamais "app_trainers"
    // seul "trainers" peux changer
    #[Route('/contact', name: 'app_contact')]
    // crée une fonction contenant les données à traiter avant de les afficher dans la vue
    // return la vue à la fin !
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
}
