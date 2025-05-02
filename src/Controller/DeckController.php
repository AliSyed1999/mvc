<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class DeckController extends AbstractController
{
    #[Route('/api', name: 'api_index', methods: ['GET'])]
    public function index(): JsonResponse
    {
        return $this->json([
            'routes' => [
                '/api/deck' => 'Returnerar en sorterad kortlek',
                '/api/deck/shuffle' => 'Blandar kortleken och sparar den i sessionen',
                '/api/deck/draw' => 'Drar ett kort från den blandade kortleken i sessionen',
                '/api/deck/draw/{number}' => 'Drar ett angivet antal kort från sessionens kortlek',
                '/api/deck/deal/{players}/{cards}' => 'Delar ut ett antal kort till ett antal spelare',
            ]
        ]);
    }

    private function getFullDeck(): array
    {
        $suits = ['Hearts', 'Diamonds', 'Clubs', 'Spades'];
        $values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King', 'Ace'];
        $deck = [];

        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $deck[] = ['suit' => $suit, 'value' => $value];
            }
        }

        return $deck;
    }

    #[Route('/api/deck', name: 'api_deck', methods: ['GET'])]
    public function getDeck(): JsonResponse
    {
        $deck = $this->getFullDeck();
        return $this->json(['deck' => $deck]);
    }

    #[Route('/api/deck/shuffle', name: 'api_shuffle', methods: ['POST'])]
    public function shuffleDeck(SessionInterface $session): JsonResponse
    {
        $deck = $this->getFullDeck();
        shuffle($deck);
        $session->set('deck', $deck);

        return $this->json(['deck' => $deck]);
    }

    #[Route('/api/deck/draw', name: 'api_draw_one', methods: ['POST'])]
    public function drawOne(SessionInterface $session): JsonResponse
    {
        $deck = $session->get('deck', []);
        if (empty($deck)) {
            return $this->json(['error' => 'Kortleken är slut eller inte blandad'], 400);
        }

        $card = array_shift($deck);
        $session->set('deck', $deck);

        return $this->json([
            'drawn' => [$card],
            'remaining' => count($deck)
        ]);
    }

    #[Route('/api/deck/draw/{number}', name: 'api_draw_many', methods: ['POST'])]
    public function drawCards(int $number, SessionInterface $session): JsonResponse
    {
        $deck = $session->get('deck', []);
        if ($number > count($deck)) {
            return $this->json(['error' => 'Inte tillräckligt med kort kvar'], 400);
        }

        $drawn = array_splice($deck, 0, $number);
        $session->set('deck', $deck);

        return $this->json([
            'drawn' => $drawn,
            'remaining' => count($deck)
        ]);
    }

    #[Route('/api/deck/deal/{players}/{cards}', name: 'api_deal', methods: ['POST'])]
    public function dealCards(int $players, int $cards, SessionInterface $session): JsonResponse
    {
        if ($players < 1 || $cards < 1) {
            return $this->json(['error' => 'Antal spelare och kort måste vara minst 1'], 400);
        }

        $deck = $session->get('deck', []);
        $totalNeeded = $players * $cards;

        if (empty($deck)) {
            return $this->json(['error' => 'Kortleken är slut eller inte blandad'], 400);
        }

        if ($totalNeeded > count($deck)) {
            return $this->json(['error' => 'Inte tillräckligt med kort för att dela ut'], 400);
        }

        $hands = [];
        for ($p = 1; $p <= $players; $p++) {
            $hands["player$p"] = array_splice($deck, 0, $cards);
        }

        $session->set('deck', $deck);

        return $this->json([
            'hands' => $hands,
            'remaining' => count($deck)
        ]);
    }
}
