<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyControllerTwig extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    #[Route('/report', name: 'report')]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }

    #[Route('/lucky', name: 'lucky')]
    public function lucky(): Response
    {
        $number = random_int(0, 100);
        return $this->render('lucky_number.html.twig', ['number' => $number]);
    }

    #[Route('/reportkmom01', name: 'report_kmom01')]
    public function reportKmom01(): Response
    {
        return $this->render('report_kmom01.html.twig');
    }

    #[Route('/reportkmom02', name: 'report_kmom02')]
    public function reportKmom02(): Response
    {
        return $this->render('report_kmom02.html.twig');
    }

    #[Route('/Card', name: 'card')]
    public function card(): Response
    {
        return $this->render('card.html.twig');
    }
    #[Route('/api', name: 'api_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('api/index.html.twig');
    }
}
