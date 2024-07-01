<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TrainersController extends AbstractController
{
    #[Route('/trainers', name: 'app_trainers')]
    public function show(): Response
    {
        
    }
}
