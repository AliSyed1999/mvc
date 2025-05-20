<?php
namespace App\Controller;

use App\Card\Deck;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

abstract class BaseDeckController extends AbstractController
{
    /**
     * Hämtar eller skapar kortleken från sessionen.
     *
     * @param SessionInterface $session
     * @return Deck
     */
    protected function getOrCreateDeck(SessionInterface $session): Deck
    {
        $deck = $session->get('deck');
        if (!$deck instanceof Deck) {
            $deck = new Deck();
            $session->set('deck', $deck);
        }
        return $deck;
    }

    /**
     * Returnerar kortleken i JSON-format.
     *
     * @param SessionInterface $session
     * @return array
     */
    protected function getDeckJson(SessionInterface $session): array
    {
        $deck = $this->getOrCreateDeck($session);
        return $deck->getSortedCards(); // Returnerar kortleken sorterad
    }
}
