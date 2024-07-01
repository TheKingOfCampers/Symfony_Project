<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        $trainers = $this->data()['trainers'];
        dump($trainers); // dd comprend die en plus

        return $this->render('home/index.html.twig', [
            'trainers' => 'trainers',
        ]);
    }
}
