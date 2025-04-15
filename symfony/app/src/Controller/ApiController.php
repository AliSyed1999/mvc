<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    #[Route('/api', name: 'api_index')]
    public function index(): Response
    {
        return $this->render('api/index.html.twig');
    }

    #[Route('/api/quote', name: 'api_quote')]
    public function quote(): JsonResponse
    {
        // Dagens citat
        $quotes = [
            "Kreativitet är intelligens som har roligt. – Albert Einstein",
            "Kod är som humor. Om du måste förklara den, är den inte bra.",
            "Det finns inga misstag i kodning – bara features du inte förstått än."
        ];

        // Välj ett slumpmässigt citat
        $quote = $quotes[array_rand($quotes)];

        // Skapa en DateTime med rätt tidszon (Europe/Stockholm)
        $date = new \DateTime('now', new \DateTimeZone('Europe/Stockholm'));

        // Svara med JSON
        return $this->json([
            'quote' => $quote,
            'date' => $date->format('Y-m-d'),
            'timestamp' => $date->format('H:i:s'),
        ]);
    }
}