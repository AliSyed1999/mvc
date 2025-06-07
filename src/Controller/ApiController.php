<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends BaseDeckController
{
    /**
     * GET /api/deck
     */
    #[Route('/api/deck', name: 'api_deck', methods: ['GET'])]
    public function getDeck(SessionInterface $session): JsonResponse
    {
        $deck = $this->getOrCreateDeck($session);
        return $this->json([
            'deck' => $deck->getSortedCards(),
            'remaining' => $deck->count(),
        ]);
    }

    /**
     * POST /api/deck/shuffle
     */
    #[Route('/api/deck/shuffle', name: 'api_shuffle', methods: ['POST'])]
    public function shuffleDeck(SessionInterface $session): JsonResponse
    {
        $deck = $this->getOrCreateDeck($session);
        $deck->shuffle();
        $session->set('deck', $deck);

        return $this->json([
            'message' => 'Kortleken har blandats.',
            'remaining' => $deck->count(),
        ]);
    }

    /**
     * POST /api/deck/draw
     */
    #[Route('/api/deck/draw', name: 'api_draw_one', methods: ['POST'])]
    public function drawOne(SessionInterface $session): JsonResponse
    {
        $deck = $this->getOrCreateDeck($session);
        $card = $deck->draw();
        $session->set('deck', $deck);

        return $this->json([
            'card' => $card,
            'remaining' => $deck->count(),
        ]);
    }

    /**
     * POST /api/deck/draw/{number}
     */
    #[Route('/api/deck/draw/{number<\d+>}', name: 'api_draw_multiple', methods: ['POST'])]
    public function drawMultiple(SessionInterface $session, int $number): JsonResponse
    {
        $deck = $this->getOrCreateDeck($session);
        $cards = $deck->draw($number);
        $session->set('deck', $deck);

        return $this->json([
            'cards' => $cards,
            'remaining' => $deck->count(),
        ]);
    }

    /**
     * POST /api/deck/deal/{players}/{cards}
     */
    #[Route('/api/deck/deal/{players<\d+>}/{cards<\d+>}', name: 'api_deal', methods: ['POST'])]
    public function deal(SessionInterface $session, int $players, int $cards): JsonResponse
    {
        $deck = $this->getOrCreateDeck($session);
        $hands = [];

        for ($i = 0; $i < $players; $i++) {
            $hands[] = $deck->draw($cards);
        }

        $session->set('deck', $deck);

        return $this->json([
            'hands' => $hands,
            'remaining' => $deck->count(),
        ]);
    }

    /**
     * GET /api/quote
     */
    #[Route('/api/quote', name: 'api_quote', methods: ['GET'])]
    public function quote(): JsonResponse
    {
        $quotes = [
            "Kreativitet är intelligens som har roligt. – Albert Einstein",
            "Kod är som humor. Om du måste förklara den, är den inte bra.",
            "Det finns inga misstag i kodning – bara features du inte förstått än."
        ];

        $quote = $quotes[array_rand($quotes)];
        $date = new \DateTime('now', new \DateTimeZone('Europe/Stockholm'));

        return $this->json([
            'quote' => $quote,
            'date' => $date->format('Y-m-d'),
            'timestamp' => $date->format('H:i:s'),
        ]);
    }
}
