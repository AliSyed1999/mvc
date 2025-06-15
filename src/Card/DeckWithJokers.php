<?php

namespace App\Card;

class DeckWithJokers extends Deck
{
    public function __construct()
    {
        parent::__construct();

        // Lägg till två jokrar
        $cards = &$this->getCardsByReference();
        $cards[] = new Card('Joker', 'Red');
        $cards[] = new Card('Joker', 'Black');
    }
}
