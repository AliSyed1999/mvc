<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Card\Deck;
use App\Card\Card;

class CardController extends AbstractController

{
    private function getOrCreateDeck(SessionInterface $session): Deck
    {
        $deck = $session->get('deck');
        if (!$deck instanceof Deck) {
            $deck = new Deck();
            $session->set('deck', $deck);
        }
        return $deck;
    }

    #[Route('/card', name: 'card_home')]
    public function index(): Response
    {
        return $this->render('card/index.html.twig');
    }

    #[Route('/session', name: 'session_debug')]
    public function sessionDebug(SessionInterface $session): Response
    {
        return $this->render('card/session.html.twig', [
            'session' => $session->all()
        ]);
    }

    #[Route('/session/delete', name: 'session_delete')]
    public function sessionDelete(SessionInterface $session): Response
    {
        $session->clear();
        $this->addFlash('notice', 'Sessionen är nu raderad.');
        return $this->redirectToRoute('session_debug');
    }

    #[Route('/card/deck', name: 'card_deck')]
    public function showDeck(SessionInterface $session): Response
    {
        $deck = $this->getOrCreateDeck($session);
        return $this->render('card/deck.html.twig', [
            'cards' => $deck->getSortedCards()
        ]);
    }

    #[Route('/card/deck/shuffle', name: 'card_shuffle')]
    public function shuffleDeck(SessionInterface $session): Response
    {
        $deck = new Deck();
        $deck->shuffle();
        $session->set('deck', $deck);

        return $this->render('card/deck.html.twig', [
            'cards' => $deck->getCards()
        ]);
    }

    #[Route('/card/deck/draw', name: 'card_draw_one')]
    public function drawOne(SessionInterface $session): Response
    {
        $deck = $this->getOrCreateDeck($session);
        $card = $deck->draw();
        $session->set('deck', $deck);

        return $this->render('card/draw.html.twig', [
            'cards' => [$card],
            'remaining' => $deck->count()
        ]);
    }

    #[Route('/card/deck/draw/{number<\d+>}', name: 'card_draw_multiple')]
    public function drawMultiple(SessionInterface $session, int $number): Response
    {
        $deck = $this->getOrCreateDeck($session);
        $cards = $deck->draw($number);
        $session->set('deck', $deck);

        return $this->render('card/draw.html.twig', [
            'cards' => $cards,
            'remaining' => $deck->count()
        ]);
    }

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

    #[Route('/kort', name: 'kort')]
    public function kort(): Response
    {
        return $this->render('kort.html.twig');
    }
}
