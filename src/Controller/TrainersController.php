<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TrainersController extends AbstractController
{
    // crée la route et lui donner un nom qui ne change jamais "app_trainers"
    // seul "trainers" peux changer
    #[Route('/trainers', name: 'app_trainers')]
    // crée une fonction contenant les données à traiter avant de les afficher dans la vue
    // return la vue à la fin !
    public function index(): Response
    {
        return $this->render('trainers/index.html.twig'); 
    }
    public function display(): Response
    {
        
    }
}
