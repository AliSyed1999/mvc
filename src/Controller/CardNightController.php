<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CardNightController extends BaseDeckController
{
    #[Route('/card/deck/deal/{players<\d+>}/{cards<\d+>}', name: 'card_deal', defaults: ['players' => 2, 'cards' => 5])]
    public function deal(SessionInterface $session, int $players, int $cards): Response
    {
        $deck = $this->getOrCreateDeck($session);
        $hands = [];

        for ($i = 0; $i < $players; $i++) {
            $hands[] = $deck->draw($cards);
        }

        $session->set('deck', $deck);

        return $this->render('card/deal.html.twig', [
            'hands' => $hands,
            'remaining' => $deck->count()
        ]);
    }
}
