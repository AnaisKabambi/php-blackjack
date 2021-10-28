<?php


class Player
{
    private array $cards;
    private bool $lost = False;

    public function hit($lost) {
        if () {
            $this.player + $this.cards;
        }
        else {
            $lost = true;
        }
    }

    public function surrender($lost) {
        $this.lost = true;
    }

    public function getScore($deck) {
        foreach;
        return ($this->cards);
    }

    public function hasLost($lost) {
        return false;
    }

    function __construct()
    {
        $this->deck = new ClassName(Player::class);
    }
    public function drawCard(): ?Card
    {
        return array_shift($this->cards);
    }
}