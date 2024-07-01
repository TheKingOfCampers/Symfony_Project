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
     private function data() {
        

return [
    "trainers" => [
        [
            "firstName" => "Antoine",
            "lastName" => "L",
            "profession" => "Professor Symfony",
            "bio" => "Antoine L is a certified Symfony coach with over 10 years of experience.",
            "articles" => [
                [
                    "title" => "The Benefits of Morning Exercise",
                    "date" => "Nov 11",
                    "content" => "Exercising in the morning can boost your metabolism and energy levels throughout the day."
                ],
                [
                    "title" => "Healthy Eating Tips",
                    "date" => "Nov 10",
                    "content" => "Eating a balanced diet is crucial for maintaining good health and fitness."
                ]
            ]
        ],
        [
            "firstName" => "Aurélien",
            "lastName" => "S",
            "profession" => "Professor React",
            "bio" => "Aurélien has been teaching yoga for over 8 years and specializes in Vinyasa and Hatha yoga.",
            "articles" => [
                [
                    "title" => "The Power of Meditation",
                    "date" => "Nov 12",
                    "content" => "Meditation can help reduce stress and improve overall well-being."
                ],
                [
                    "title" => "Yoga for Beginners",
                    "date" => "Nov 5",
                    "content" => "Starting a yoga practice can be intimidating, but with these tips, you can get started with confidence."
                ]
            ]
        ]
    ]
  ];
     }
}
