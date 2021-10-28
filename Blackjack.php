<?php

class Blackjack
{
    private $player;
    private $dealer;
    private $deck;

    public function getPlayer ($player) {
        return $player;
    }
    public function getDealer ($dealer) {
        return $dealer;
    }
    public function getDeck ($deck) {
        return $deck;
    }
    function __construct() {
        $this->player = new ClassName(Player::class);
        $this->dealer = new ClassName(Player::class);
    }
}

