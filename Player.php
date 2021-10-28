<?php


class Player
{
    private array $cards;
    private bool $lost = False;

    public function hit()
    {
    }

    public function surrender()
    {
    }

    public function getScore()
    {
    }

    public function hasLost()
    {
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