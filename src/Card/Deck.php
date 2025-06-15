<?php

namespace App\Card;

class Deck
{
    private array $cards = [];
    private array $suits = ['Hearts', 'Diamonds', 'Clubs', 'Spades'];
    private array $values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];

    public function __construct()
    {
        foreach ($this->suits as $suit) {
            foreach ($this->values as $value) {
                $this->cards[] = new Card($suit, $value);
            }
        }
    }

    public function shuffle(): void
    {
        shuffle($this->cards);
    }

    public function draw(int $number = 1): array|Card
    {
        if ($number === 1) {
            return array_shift($this->cards);
        }

        return array_splice($this->cards, 0, $number);
    }

    public function getCards(): array
    {
        return $this->cards;
    }

    public function getSortedCards(): array
    {
        usort($this->cards, function ($a, $b) {
            return [$a->getSuit(), $a->getValue()] <=> [$b->getSuit(), $b->getValue()];
        });

        return $this->cards;
    }

    public function count(): int
    {
        return count($this->cards);
    }

    // 🔽 Ny metod för subklasser att kunna modifiera kortleken
    protected function &getCardsByReference(): array
    {
        return $this->cards;
    }
}
